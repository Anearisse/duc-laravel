@extends('layouts.app')

@section('title', 'Skill Table')

@section('content')

<div class="container">
     <div class="row justify-content-center">
          <div class="col-md-8">
               <div class="card">
               <div class="card-header">Skill Table</div>
                    <table class="table">
                         <thead>
                              <tr>
                                   <td>ID</td>
                                   <td>Name</td>
                                   <td>Description</td>
                                   <td>Actions</td>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach($skills as $skill)
                              <tr>
                                   <td>{{$skill->id}}</td>
                                   <td>{{$skill->name}}</td>
                                   <td>{{$skill->description}}</td>
                                   <td><a class="btn btn-warning" href="{{ route('skills.edit', $skill->id) }}">Edit</a>
                                   </td>
                                   <td>
                                        <form action="{{ route('skills.destroy', $skill->id)}}" method="post">
                                             @csrf
                                             @method('DELETE')
                                             <button class="btn btn-danger" type="submit">Supprimer</button>
                                        </form>
                                   </td>

                              </tr>
                              @endforeach
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
</div>
@endsection