@extends('layouts.app')
@section('content')

  <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-12">
                        @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create Category !</h1>
                            </div>
                             <form method="POST" action="{{ route('category.store') }}">
                                     @csrf
                                     <input type="hidden" value="{{@$category->id}}" name="id">
                                <div class="form-group">
                                   
                                        <input type="text" class="form-control" id="category_name"
                                            placeholder="Category Name" name="category_name" value="{{@$category->category_name}}">
                                   
                                </div>
                                
                                
                                  <button type="submit" class="btn btn-primary">
                                    {{ __('ADD') }}
                                </button>
                                
                            </form>
                            <hr>
                           	
                            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Category Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Category Name</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach(@$categories as $category)
                                   <tr>
                                            <th>{{@$category->category_name}}</th>

                                            <th>
                                                <a class="btn btn-info" href="{{ route('category.edit',$category->id) }}">Edit </a>
                                                 <form action="{{ route('category.destroy', $category->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                                            </th>
                                            
                                                    
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection