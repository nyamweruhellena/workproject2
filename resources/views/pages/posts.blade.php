@extends('main')
    @section('contents')
        {{-- @include('components.events') --}}

        {{-- loop through the resulting data from the database --}}
        <div class="back" >
          <h1>POST</h1>
      </div>
        <div class="container">
            <div class="row">
            
                @foreach ($posts as $post)
                  
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            {{-- <img src="{{ asset('images/' . $post->path) }}" alt="image" class="bd-placeholder-img card-img-top" width="100%" height="225"> --}}
                            @if ($post->id < 10)
                            <img src="{{ asset($post->path)}}" alt="image" class="bd-placeholder-img card-img-top" width="100%" height="225"> 
                            @else
                            <img src="{{ Storage::url($post->path)}}" alt="image" class="bd-placeholder-img card-img-top" width="100%" height="225">
                            @endif
                            
                            <div class="card-body">
                              
                                
                              
                                    <h3>{{$post->muser->first_name}}</h3>
                               
                              
                              
                                <p class="card-text">{{ $post->content }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('post', $post->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                        <form action="{{ route('deletePost',$post->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                                          {{-- <a href="{{ route('deletePost') }}" class="btn btn-sm btn-outline-secondary">Delete</a> --}}
                                        </form>
                                        
                                    </div>
                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                        
                @endforeach
                
                
            </div>
        </div>
        
          <button type="button" class="btn btn-danger btn-stick" data-toggle="modal" data-target="#exampleModal">+</button>
        
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ route("create")}}" method="POST" enctype="multipart/form-data" >
                      @csrf
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">User:</label>
                      {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                      <select name="user" id="" class="form-control">
                        @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->first_name}}</option>
                        @endforeach
                       
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Content:</label>
                      <textarea class="form-control" id="message-text" name="content"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Post:</label>
                      <input type="file" class="form-control" name="post" >
                    </div>
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Post</button>
                  </form>
                </div>
              </div>
            </div>
        </div> 
        {{-- <script>
            $('#exampleModal'):on('shown.bs.modal',function(){
                alert("HELLO");
            })
        </script> --}}
        {{-- {{-- <script>
          $(document).ready(function(){
            $("#exampleModal").click(function(){
              $("#exampleModal").modal();
            });
          });
          </script> --}}
          <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}
{{-- </div>
</div> --}}

          
    @endsection