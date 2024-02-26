<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function PAR(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
                'status' => 'boolean',
                'payment_status' => 'boolean',
            ]);

            // Generate product ID in a series (e.g., P0001, P0002, ...)
            $latestProduct = Product::latest()->first();
            $productNumber = $latestProduct ? (int)substr($latestProduct->product_id, 1) + 1 : 1;
            $productID = sprintf("P%04d", $productNumber);

            // Handle image upload to local storage
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $this->uploadToLocalStorage($image, 'products', $productID);
                $validatedData['image'] = $imageName;
            }

            $productData = array_merge($validatedData, [
                'product_id' => $productID,
                'user_id' => 1,
                'warehouse_id' => 1,
            ]);

            $product = Product::create($productData);

                return redirect('/user-dashboard');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error creating product', 'message' => $e->getMessage()], 500);
        }
    }

    private function uploadToLocalStorage($file, $folder, $fileName)
    {
        try {
            // Store the file in the specified folder within the "storage/app/public" directory
            $path = $file->storeAs("public/$folder", $fileName.'.'.$file->getClientOriginalExtension());

            // Retrieve the path without the "public/" prefix
            return str_replace('public/', '', $path);
        } catch (\Exception $e) {
            // Log the exception message
            info($e->getMessage());
            throw $e; // Rethrow the exception for Laravel to handle
        }
    }

    public function changestatus(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'status' => 'required|in:Received,Shipped,Delivered', // Adjust validation based on your needs
            ]);

            $product = Product::findOrFail($id);

            // Update product fields
            $product->update($validatedData);

            return redirect('/warehouse-dashboard');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error updating product', 'message' => $e->getMessage()], 500);
        }
    }
}
