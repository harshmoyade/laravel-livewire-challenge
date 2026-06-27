<?php

use App\Models\Task;
use Livewire\Volt\Component;

new class extends Component {

    public string $title = '';

    public function addTask()
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create([
            'title' => $validated['title'],
            'completed' => false,
        ]);

        $this->title = '';
    }


    public function toggle($id)
    {
        $task = Task::findOrFail($id);

        $task->update([
            'completed' => !$task->completed,
        ]);
    }


    public function tasks()
    {
        return Task::all();
    }

};

?>

<div style="min-height:100vh; background:#f3f4f6; padding:40px; font-family:Arial, sans-serif;">

    <div style="max-width:600px; margin:auto; background:white; padding:25px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
        <h1 style="font-size:28px; font-weight:bold; margin-bottom:20px; color:#1f2937;">
            📝 Task Manager
        </h1>

        <div style="display:flex; gap:10px; margin-bottom:15px;">
            <input type="text" wire:model="title" placeholder="Enter task title..." style="flex:1; padding:12px; border:1px solid #d1d5db; border-radius:8px; font-size:16px;">
            <button wire:click="addTask" style="background:#2563eb; color:white; border:none; padding:12px 20px; border-radius:8px; cursor:pointer; font-size:16px;"> Add </button>
        </div>
        @error('title')
            <div style="color:#dc2626; margin-bottom:15px; font-size:14px;">
                {{ $message }}
            </div>
        @enderror
        <div>
            @forelse($this->tasks() as $task)
                <div style="display:flex; justify-content:space-between; align-items:center; padding:15px; margin-bottom:10px; border:1px solid #e5e7eb; border-radius:10px; background:#fafafa;">
                    <div style="display:flex; align-items:center; gap:12px;">
                        @if($task->completed)

                            <span style="font-size:22px;">✅</span>

                            <span style="
                text-decoration:line-through;
                color:#9ca3af;
            ">
                {{ $task->title }}
            </span>

                        @else

                            <span style="font-size:22px;">☐</span>

                            <span>
                {{ $task->title }}
            </span>

                        @endif
                    </div>
                    <button wire:click="toggle({{ $task->id }})" style="background:{{ $task->completed ? '#dc2626' : '#16a34a' }}; color:white; border:none; padding:8px 14px; border-radius:6px; cursor:pointer;">
                        {{ $task->completed ? 'Mark Incomplete' : 'Complete' }}
                    </button>
                </div>
            @empty
                <div style="text-align:center; color:#999;">
                    No tasks yet
                </div>
            @endforelse
        </div>
    </div>
</div>
