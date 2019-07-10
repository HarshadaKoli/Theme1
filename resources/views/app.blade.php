@extends('layout.header')

@section("content")
<h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/createform1" method="get">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputId">Id</label>
                  <input type="number" class="form-control" id="exampleInputId1" placeholder="Enter id" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter name" name="name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <input type="email" id="exampleInputEmail1" placeholder="Enter email" name="email">
                </div>

                  <div class="form-group">
                  <label for="exampleInputAddress">Adress</label>
                  <input type="text" class="form-control" id="exampleInputAddress1" placeholder="Enter address" name="address">
                </div>

                <div class="form-group">
                  <label for="exampleInputDesignation">Designation</label>
                  <input type="text" class="form-control" id="exampleInputDesignation1" placeholder="Enter Designation" name="designation">
                </div>

                <div class="form-group">
                  <label for="exampleInputPhone">Phone no.</label>
                  <input type="number" id="exampleInputPhone1" placeholder="Enter phone number" name="phoneno">
                  </div>

                  <p class="help-block">Example block-level help text here.</p>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
                <div>
                  <button class="btn btn-success">submit</button>
                </div>
              </div>
              </div>
              </div>
              </div>

@endsection