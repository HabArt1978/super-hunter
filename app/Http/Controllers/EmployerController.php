<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Update user's employer or create a new one if not found.
     */
    public function createOrUpdate(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'employer_name' => 'required|string|min:3|max:100'
        ]);

        $seed = fake()->unique()->numberBetween(1, 10000);
        $randomLogo = "https://picsum.photos/seed/{$seed}/90/90";

        $user->employer()->create([
            'name' => $validatedData['employer_name'],
            'logo' => $randomLogo,
        ]);

        return redirect(route('user.show', $user))
            ->with(['employer_added' => true]);
    }

    /**
     * Remove employer from user.
     */
    public function destroy(User $user)
    {
        //
    }
}
