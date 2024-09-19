<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Получаем user_id из запроса
        $userId = $request->input('user_id'); // или $request->header('user_id')

        if (!$userId) {
            return response()->json(['error' => 'user_id не указан'], 400);
        }


        $group = Group::where('user_id', $userId)->get();


        if (!$group) {
            return response()->json(['message' => 'Группа для данного пользователя не найдена'], 404);
        }

        return GroupResource::collection($group);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {
        $group = Group::create($request->validated());

        return response()->json([
            'message' => 'Success Store new group',
            'group' => GroupResource::make($group),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return GroupResource::make($group);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        // Валидация данных запроса
        $validated = $request->validate([
            'status' => 'required|string|max:255', // например, статус должен быть строкой
        ]);

        $group->status = $validated['status'];
        $group->save();

        return response()->json([
            'message' => 'Group status updated successfully',
            'group' => GroupResource::make($group),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return response()->json([
            'message' => 'Success delete group',
            'group' => GroupResource::make($group),
        ]);
    }
}
