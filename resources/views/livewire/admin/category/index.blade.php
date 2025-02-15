<div>
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="destroycategory">
        <div class="modal-body">
        You are sure you want delete this catigory ?!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"  data-bs-dismiss="modal">Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<div class="row">
    <div class="col-md-12">

        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>
                    Category
                    <a href="{{url('admin/category/create')}}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h3>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Satus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->status=='1'?'Hidden':'Visible'}}</td> 
                            <td>
                                <a href="{{url('admin/category/'.$category->id.'/edit')}}" class="btn btn-success">Edit</a>
                                <a href="" wire:click="deletecategory({{$category->id}})" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$categories->links()}}
            </div>
        </div>
            
        </div>




    </div>





</div>
