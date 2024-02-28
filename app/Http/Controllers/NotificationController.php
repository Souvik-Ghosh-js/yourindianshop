<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function getNotifications(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'warehouse_id' => 'required|integer',
            'self' => 'required|boolean',
            'read' => 'required|boolean',
        ]);

        $user_id = $request->input('user_id');
        $warehouse_id = $request->input('warehouse_id');
        $self = $request->input('self');
        $read = $request->input('read');

        // Fetch notifications
        $notifications = Notification::where('user_id', $user_id)
            ->where('warehouse_id', $warehouse_id)
            ->where('self', $self)
            ->where('read', $read)
            ->get();

        // Update 'read' to 1 for the fetched notifications
        Notification::where('user_id', $user_id)
            ->where('warehouse_id', $warehouse_id)
            ->where('self', $self)
            ->where('read', $read)
            ->update(['read' => 1]);

        return response()->json(['notifications' => $notifications]);
    }
}
