<?php

use App\Models\User;
use Intervention\Image\Image;
use Image as InterventionImage;
use Illuminate\Support\Facades\File;
use function Livewire\Volt\{state , computed , usesFileUploads };

usesFileUploads();

state(['user_id', 'nom','prenom','contact','profession','email','role','photo']);


$users = computed(fn () => User::all());

$select_user = function ($id)  {
    $user_find = User::find($id);
    $this->user_id = $user_find->id ;
    $this->nom = $user_find->nom ;
    $this->prenom = $user_find->prenoms ;
    $this->contact = $user_find->contact ;
    $this->profession = $user_find->profession ;
    $this->email = $user_find->email ;
    $this->role = $user_find->role ;
    $this->photo = $user_find->photo ;
};



$update_user = function () {
    $user = User::find($this->user_id);

    $user->nom = $this->nom ;
    $user->prenoms = $this->prenom ;
    $user->contact = $this->contact ;
    $user->profession = $this->profession ;
    $user->email = $this->email ;
    if($this->role){
        $user->role = $this->role ;
    }
    if ($this->photo != $user->photo) {

        $doc_path = "images/User/$user->photo";
            if (File::exists($doc_path)) {
                File::delete($doc_path);
            }

        $img = $this->photo;
        $user_photo = md5($img->getClientOriginalExtension().time()."++").".".$img->getClientOriginalExtension();
        $source = $img;
        $target = 'images/User/'.$user_photo;
        InterventionImage::make($source)->fit(212,207)->save($target);//taille du logo a chercher
        $user->photo   =  $user_photo;
    }
    $user->update();

    if($user->update()){
        session()->flash('edit_success', "L'utilisateur ".$user->prenoms." a ete modifier avec success !");
    }

};

$delete_user = function () {
    $user = User::find($this->user_id) ;

    $doc_path = "images/User/$user->photo";
            if (File::exists($doc_path)) {
                File::delete($doc_path);
            }

    $user->delete() ;

    session()->flash('delete_success', "l'utilisateur a ete supprimer avec success !");
}


?>


<div>
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    @if(Session::has('delete_success'))
                    <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
                        <span><i class="fas fa-thumbs-up"></i></span>
                        <span> {{ Session::get('delete_success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Liste des utilisateurs</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive border rounded">
                                <table id="user-list-table" class="table table-striped" role="grid"
                                    data-toggle="data-table">
                                    <thead>
                                        <tr class="ligth">
                                            <th>Profile</th>
                                            <th>Nom - prenoms</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>profession</th>
                                            <th>Date</th>
                                            <th style="min-width: 100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!is_null($this->users))
                                        @foreach($this->users as $user)
                                        <tr>
                                            <td class="text-center"><img
                                                    class="bg-soft-primary rounded img-fluid avatar-40 me-3"
                                                    src="@if(!is_null($user->photo)) {{URL::asset('images/User/'.$user->photo)}} @else ../../assets/images/shapes/01.png  @endif"
                                                    alt="blog IA {{$user->nom}}" loading="lazy">
                                            </td>
                                            <td>{{$user->nom.' '.$user->prenoms}}</td>
                                            <td>{{$user->contact}}</td>
                                            <td>{{$user->email}}</td>
                                            <td><span class="badge bg-primary">{{$user->type_users}}</span></td>
                                            <td>{{$user->profession}}</td>
                                            <td>{{$user->created_at->diffForHumans()}}</td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="btn btn-sm btn-icon btn-success rounded"
                                                        data-bs-toggle="tooltip" data-placement="top" title=""
                                                        data-bs-original-title="Add" href="#">
                                                        <span class="btn-inner">
                                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-warning rounded"
                                                        wire:click="select_user({{$user->id}})" data-placement="top"
                                                        data-bs-toggle="modal" data-bs-target="#editU">
                                                        <span class="btn-inner">
                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M15.1655 4.60254L19.7315 9.16854"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-sm btn-icon btn-danger rounded"
                                                        wire:click="select_user({{$user->id}})" data-placement="top"
                                                        data-bs-toggle="modal" data-bs-target="#deleteU">
                                                        <span class="btn-inner">
                                                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                stroke="currentColor">
                                                                <path
                                                                    d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else

                                        <tr>
                                            <h4 class="text-warning"> Aucun utilisateurs enregistrer</h4>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div wire:ignore.self class="modal fade" id="editU" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel1">Modifier {{$prenom}} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form wire:submit.prevent="update_user">
                    <div class="modal-body">
                        <div class="col-xl-12 col-lg-11">
                            @if(Session::has('edit_success'))
                            <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
                                <span><i class="fas fa-thumbs-up"></i></span>
                                <span> {{ Session::get('edit_success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Informations de utilisateur</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="new-user-info">
                                        <div class="row">
                                            <div class="form-group col-md-8 mx-auto">
                                                <div class="profile-img-edit position-relative">
                                                    <img src=" @if($photo){{ URL::asset('../images/User/'.$photo) }} @else ../../assets/images/avatars/01.png  @endif"
                                                        alt="profile-pic"
                                                        class="theme-color-default-img profile-pic rounded avatar-100"
                                                        loading="lazy">
                                                    <input class="file-upload form-control mt-2" wire:model="photo"
                                                        type="file" accept="image/*">
                                                </div>
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="fname">Nom:</label>
                                                <input type="text" class="form-control" id="fname"
                                                    placeholder="Entrer votre nom" wire:model="nom">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="prenom">Prenom:</label>
                                                <input type="text" class="form-control" placeholder="Entrer un prenom"
                                                    wire:model="prenom">

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label class="form-label" for="email">Email:</label>
                                                <input type="email" class="form-control" id="email" placeholder="Email"
                                                    wire:model="email">

                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="mobno">Contact:</label>
                                                <input type="number" class="form-control" id="mobno"
                                                    placeholder="Mobile Number" wire:model="contact">

                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="city">Profession</label>
                                                <input type="text" class="form-control" id="city"
                                                    placeholder="Entrer votre profession" wire:model="profession">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="form-label">Role:</label>
                                                <select name="type" wire:model="role" class="selectpicker form-control"
                                                    data-style="py-0">
                                                    <option selceted>Selectionnez</option>
                                                    <option value="SuperAdmin">Administrateur</option>
                                                    <option value="utilisateurs">Utilisateurs</option>
                                                    <option value="Blogeurs">Blogeurs</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteU" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel1">Supression de l'utilisateur : <span>
                            {{$prenom}}</span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form wire:submit.prevent="delete_user">
                    <div class="modal-body">
                        <h5> Voulez-vous vraiment supprimer <b> {{$nom.' '.$prenom}} </b> ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Oui je veux !</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>