@extends('eyecart.admin.layout')
@section('title_name')
Manage all customers 
@endsection 
@section('content')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Manage all Category
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>CategoryName</th>
            <th>Descriptions</th>
            <th data-breakpoints="xs">Action</th>
        
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td>1</td>
            <td>Electronics</td>
            <td>Good</td>
            <td><a href=""><span class="fa fa-trash text-danger fs-1" style="font-size:25px"></span>
            <a href=""><span class="fa fa-edit text-primary fs-1 ml-5" style="font-size:25px"></span>
        
        </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
@endsection 