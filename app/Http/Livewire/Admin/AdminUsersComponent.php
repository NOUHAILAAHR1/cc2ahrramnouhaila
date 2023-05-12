<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;

use App\Models\User;
use Livewire\Component;

class AdminUsersComponent extends Component

{
    use WithPagination;
    public $user_id;
    public function  deleteProduct(){
    $user = User::find($this->user_id);

    $user->delete();
    session()->flash('message','User has been deleted ');
}
    public function render()
    {$user= User::all();
        return view('livewire.admin.admin-users-component',['user'=>$user]);
    }
}
