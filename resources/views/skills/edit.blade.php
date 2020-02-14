@extends('layouts.app')

@section('title', 'Update Skill')

@section('content')

<div class="container">
     <div class="row justify-content-center">
          <div class="col-md-8">
               <div class="card">
                    <div class="card-header">Edit Skill</div>
                    <form method="post" class="form" class="table" action="{{ route('skills.update', $skill->id) }}">
                    @method('PATCH')     
                    @csrf
                         <div class="container">
                              <div class="form-group">
                                   <label for="name">Name :</label>
                                   <input type="text" class="form-control" name="name" />
                                   <label for="description">Description :</label>
                                   <input type="text" class="form-control" name="description" />
                                   <label for="logo">logo :</label>
                                   <input type="text" class="form-control" name="logo" />
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection