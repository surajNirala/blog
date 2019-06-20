@extends('admin.layout.main')
@section('main_contain')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Comments</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Comment</th>
                      <th>Start date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S.No.</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Comment</th>
                      <th>Start date</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp
                    @foreach ($comments as $comment)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$comment->image}}</td>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->comment}}</td>
                        <td>{{$comment->created_at}}</td>
                        <td><a href="#">Edit</a>|<a href="#">del</a></td>
                      </tr>
                      @php
                        $i++;
                      @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

 @endsection