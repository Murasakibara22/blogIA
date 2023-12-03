<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use function Livewire\Volt\{state , rules , usesFileUploads};
 
usesFileUploads();

state('users');

state(['nom','prenom','contact','profession','role','email','photo','password']);

rules([
     'nom' => 'required|min:3|max:100',
     'prenom' => 'required|min:3|max:200',
     'email' => 'required|email',
     'contact' => 'required|int|regex:',
     ])
->messages([
    'email.required' => 'Le champ email ne peux pas etre vide.',
    'email.email' => 'le format d\'email est invalid',
    'nom.require d' => 'le champ nom est requis',
    'nom.min' => 'minimum 3 caracteres ',
    'nom.max' => 'maxim 100 caracteres ',
    'prenom.require d' => 'le champ prenom est requis',
    'prenom.min' => 'minimum 3 caracteres ',
    'prenom.max' => 'maxim 100 caracteres ',
    'contact.required' => 'Le champ contact ne peux pas etre vide.',
    'contact.int' => 'Les chiffres sont obligatoires',
    'contact.regex' => 'le format du numero de telephone est incorrecte',
]);


$submit_user = function() {
    $this->validate();

    $user_existe = User::where('email',$this->email)->first();
    if($user_existe){
        session()->flash('error_email',"L'adresse email est deja utiliser ");
        return redirect()->back();
    }

    $user = new User ;
    $user->nom = $this->nom;
    $user->prenoms = $this->prenom;
    $user->contact =$this->contact;
    $user->type_users = $this->role;
    $user->profession = $this->profession;
    $user->email = $this->email;
    if($this->password){
        $user->password = $this->password;
    }else{
        $user->password = Hash::make(123456789);
    }
    $user->slug = Hash::make($this->email);

    $user->save();
    
    if($user->save()){
        session()->flash('success_enrg',"Enregistrement effectuer avec succes !");

        $this->reset();
    }
};
 

?>


<div class="content-inner container-fluid pb-0" id="page_layout">
    <div>
        <div class="row">

            @if(Session::has('success_enrg'))
            <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
                <span><i class="fas fa-thumbs-up"></i></span>
                <span> {{ Session::get('success_enrg') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(Session::has('error_email'))
            <div class="alert alert-left alert-danger alert-dismissible fade show mb-3" role="alert">
                <span><i class="fas fa-thumbs-up"></i></span>
                <span> {{ Session::get('error_email') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Ajouter un nouvelle utilisateur</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="submit_user">
                            <div class="form-group">
                                <div class="profile-img-edit position-relative">
                                    <img src=" @if($photo){{ $photo->temporaryUrl() }} @else ../../assets/images/avatars/01.png  @endif" alt="profile-pic"
                                        class="theme-color-default-img profile-pic rounded avatar-100" loading="lazy">
                                        <input class="file-upload form-control mt-2" wire:model="photo" type="file" accept="image/*">
                                </div>
                                <div class="img-extension mt-3">
                                    <div class="d-inline-block align-items-center">
                                        <span>Only</span>
                                        <a href="javascript:void(0);">.jpg</a>
                                        <a href="javascript:void(0);">.png</a>
                                        <a href="javascript:void(0);">.jpeg</a>
                                        <span>allowed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Role:</label>
                                <select name="type" wire:model="role" class="selectpicker form-control"
                                    data-style="py-0">
                                    <option selected>Select</option>
                                    <option value="SuperAdmin">Administrateur</option>
                                    <option value="utilisateurs">Utilisateurs</option>
                                    <option value="Blogeurs">Blogeurs</option>
                                </select>
                            </div>


                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Informations du nouvel utilisateur</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="fname">Nom:</label>
                                    <input type="text" class="form-control" id="fname" placeholder="Entrer votre nom"
                                        wire:model="nom">
                                    @error('nom') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="prenom">Prenom:</label>
                                    <input type="text" class="form-control" id="prenom" placeholder="Entrer un prenom"
                                        wire:model="prenom">
                                    @error('prenom') <span class="text-danger">{{$message}}</span> @enderror

                                </div>

                                <div class="form-group col-md-12">
                                    <label class="form-label" for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                        wire:model="email">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror

                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="mobno">Contact:</label>
                                    <input type="number" class="form-control" id="mobno" placeholder="Mobile Number"
                                        wire:model="contact">
                                    @error('conatc') <span class="text-danger">{{$message}}</span> @enderror

                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="city">Profession</label>
                                    <input type="text" class="form-control" id="city"
                                        placeholder="Entrer votre profession" wire:model="profession">
                                </div>

                            </div>
                            <hr>
                            <h5 class="mb-3">Security</h5>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="pass">Mot de passe:</label>
                                    <input type="password" class="form-control" id="pass" placeholder="Password"
                                        wire:model="password">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter l'utilisateur</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>