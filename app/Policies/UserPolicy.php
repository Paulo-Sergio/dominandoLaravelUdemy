<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class UserPolicy {

    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct() {
	
    }

    public function before($user, $ability) {
	if($user->isAdmin()) {
	    // se retornar aqui não vai chamar os outros metodos (até pq o usuário admin não tem restrições)
	    return true;
	}
    }

    public function edit(User $authUser, User $user) {
	return $authUser->id === $user->id;
    }

    public function update(User $authUser, User $user) {
	return $authUser->id === $user->id;
    }
    
    public function destroy(User $authUser, User $user) {
	return $authUser->id === $user->id;
    }

}
