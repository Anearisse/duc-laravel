@extends('layouts.app')

@section('title', 'Update Skill')

@section('content')

<div class="container">
     <div class="row justify-content-center">
          <div class="col-md-8">
               <div class="card">
                    <div class="card-header">Edit User Skill</div>
                    <form method="post" class="form" class="table" action="{{ route('admins.update', $skill->id) }}">
                    @method('PATCH')     
                    @csrf
                         <div class="container">
                              <div class="form-group">
                                   <label for="name">Skill level :</label>
                                   <input type="text" class="form-control" name="name" />
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection