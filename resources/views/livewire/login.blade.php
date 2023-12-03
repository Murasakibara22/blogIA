<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Livewire\Volt\{state, mount , rules};


state(['count' => 2]);

state(['password','email']);

rules([
        'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
         'email' => 'required|email'])
    ->messages([
        'email.required' => 'Le champ email ne peux pas etre vide.',
        'email.email' => 'le format d\'email est invalid',
        'password.require d' => 'le chmap password est requis',
        'password.regex' => 'le mot de passe doit contenir : 
        - de 8 à 15 caractères
        - au moins une lettre minuscule
        - au moins une lettre majuscule
        - au moins un chiffre
        - au moins un de ces caractères spéciaux: $ @ % * + - _ !'
    ]);

mount( function () {
    $this->count = 34 ;
});

$login = function ( ) {
    $this->validate();

}

?>

<div>
    <div class="row justify-content-center pt-5 ">
        <div class="col-md-9 ">
            <div class="card bg-white d-flex justify-content-center mb-0 auth-card iq-auth-form">
                <div class="card-body">
                    <h2 class="mb-2 text-center">Connexion</h2>
                    <p class="text-center">Connectez-vous avec vos acces de connexion.</p>
                    <form method="POST" action="/login">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email"  class="form-label">Email</label>
                                    <input type="email" wire:model.debounce.50ms="email"  class="form-control" name="email" aria-describedby="email"
                                        placeholder="exemple@gmail.com">
                                      @error('email')  <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" wire:model="password" class="form-control" name="password"
                                        aria-describedby="password" placeholder="entrer votre mot de passe">
                                      @error('password')  <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">se souvenir de moi
                                    </label>
                                </div>
                                <a href="/forgot-password">Mot de passe oublier?</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                        </div>
                        <p class="text-center my-3">ou connectez-vous avec ?</p>
                        <div class="d-flex justify-content-center">
                            <ul class="list-group list-group-horizontal list-group-flush">
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{URL::asset('assets/images/brands/gm.svg') }}" alt="gm"
                                            loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{URL::asset('assets/images/brands/fb.svg') }}" alt="fb"
                                            loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{URL::asset('assets/images/brands/im.svg') }}" alt="im"
                                            loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{URL::asset('assets/images/brands/li.svg') }}" alt="li"
                                            loading="lazy"></a>
                                </li>
                            </ul>
                        </div>
                        <p class="mt-3 text-center">
                            Vous n'avez pas de compte? <a href="/register" class="text-underline">cliquez
                                ici pour vous inscrire.</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>