@extends('layouts.app')
@section('content')

<div class="container">
     <div class="row justify-content-center">
          <div class="col-md-8">
               <div class="card">
                    <div class="card-header">Skill User</div>
                    <div class="card-body">
                         @if (session('status'))
                         <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                         </div>
                         @endif
                         Skill de l'user sélectionné :
                         <br><br>
                         <?php
                    $users = Auth::user()->get()
                    ?>
                         <table class="table">
                              <thead>
                                   <tr>
                                        <td>First Name</td>
                                        <td>Name</td>
                                        <td>skill</td>
                                        <td>Skill level</td>
                                        <td>Actions</td>
                                   </tr>
                              </thead>

                              <tbody>
                                   @foreach($user->skills as $skill)
                                   <tr>
                                        <td>{{$user->firstname}}</td>
                                        <td>{{$user->lastname}}</td>
                                        <td>{{$skill->name}} </td>
                                        <td>{{$skill->pivot->level}}</td>
                                        <td>
                                             <form action="{{ route('admins.edit', $user->id)}}" method="post">
                                                  @csrf
                                                  <button class="btn btn-warning" type="submit">Edit</button>
                                             </form>
                                        </td>
                                        <td>
                                             <form action="{{ route('admins.destroy', $user->id)}}" method="post">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-danger" type="submit">Supprimer</button>
                                             </form>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                         <a class="btn btn-secondary" class="btn float-right" href="/admin">Retour</a>
                         @endsection