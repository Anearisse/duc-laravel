@extends('layouts.app')
@section('content')
<div class="container">
     <div class="row justify-content-center">
          <div class="col-md-8">
               <div class="card">
                    <div class="card-header">Pannel Admin</div>
                    <div class="card-body">
                         @if (session('status'))
                         <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                         </div>
                         @endif
                         Voici tout les Users enregistrés :
                         <br><br>
                         <?php
                    $users = Auth::user()->get()
                    ?>
                         <table class="table">
                              <thead>
                                   <tr>
                                        <td>Name</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Rank</td>
                                        <td>Actions</td>
                                   </tr>
                              </thead>

                              <tbody>
                                   @foreach($users as $user)

                                   <tr>
                                        <td><a href="{{ route('admins.show', $user->id) }}">{{$user->name}}</a></td>
                                        <td>{{$user->lastname}} </td>
                                        <td>{{$user->firstname}} </td>
                                        <td>{{$user->rank}} </td>
                                        <td>
                                        <form action="{{ route('editrank', $user->id)}}" method="post">
                                             @csrf
                                             <button class="btn btn-warning" type="submit">Edit Rank</button>
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
                         @endsection