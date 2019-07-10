@extends('layout.header')
@section("content")

<!--<table width="50%" border="2">

<tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>address</th>
    <th>designation</th>
    <th>phone no</th>
</tr>

@foreach ($employee1 as $item)
<tr>
     <td>{{$item->id}}</td>
     <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->address}}</td>
    <td>{{$item->designation}}</td>
    <td>{{$item->phoneno}}</td>
</tr>
@endforeach
</table>-->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Employee Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Designation</th>
                  <th>Phone no</th>
                </tr>
                </thead>
                <tbody>
                                @foreach ($employee1 as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->designation}}</td>
                <td>{{$item->phoneno}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection