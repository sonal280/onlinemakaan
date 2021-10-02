<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserRepository implements UserRepositoryInterface
{
   public function currentUser()
   {
        $id = Auth::id();
        return User::find($id);
   }
}
