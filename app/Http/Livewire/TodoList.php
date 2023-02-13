<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{

    public $todo = 0;
    public string $todotext = '';

    public function mount(){
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function selectTodos(){
        $this->todo = Todo::query()->orderBy('id', 'DESC')->get();
    }

    public function add(){
        Todo::create([
            'name' => $this->todotext,
            'completed' => false
        ]);

        $this->todotext = '';
        $this->selectTodos();
    }

    public function toggleTodo($id){
        $todo = Todo::where('id', $id)->first();

        if(!$this->todo){
            return;
        }

        $todo->completed = !$todo->completed;
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo($id){
        $todo = Todo::where('id', $id)->first();

        if(!$this->todo){
            return;
        }

        $todo->delete();
        $this->selectTodos();
    }
}
