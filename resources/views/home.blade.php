@extends('template')
@section('title', 'Home Project')
@section('content-title', 'Project')
@section('isi1')
<div class="col-md-10 text-dark d-flex" style="height:100vh;">
    <div class="container-fluid">
      <div class="column">
        <div class="col-md-12 pe-3 mt-3 ps-3">
          <!-- project -->
         <div class="card">
         <div class="card-header"><h1>Project Name</h1></div>
         <div class="card-body">
           <table class="table table-striped">
           <thead>
             <tr>
               <th scope="col">No.</th>
               <th scope="col">Project Name</th>
               <th scope="col">Action</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <th scope="row">1</th>
               <td>Web Design</td>
               <td>
                   <a href="" class="btn btn-sm btn-success">Edit</a>
                   <a href="" class="btn btn-sm btn-danger">Delete</a>
               </td>
             </tr>
             <tr>
               <th scope="row">2</th>
               <td>Database</td>
               <td>
                   <a href="" class="btn btn-sm btn-success">Edit</a>
                   <a href="" class="btn btn-sm btn-danger">Delete</a>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
          <!-- service -->
           <div class="card mt-3">
             <div class="card-header"><h1><span>Service Review</span></h1></div>
             <div class="card-body">
               <table class="table table-striped">
                 <thead>
                   <tr>
                     <th scope="col">No.</th>
                     <th scope="col">Service Name</th>
                     <th scope="col">Description</th>
                     <th scope="col">Action</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">1</th>
                     <td>Web Design</td>
                     <td>aiuhfaoisfoiahsdha oi haoihf haoihf aoihf oai haohfoiah oaih oiiha oihaohwhf</td>
                     <td>
                         <a href="" class="btn btn-sm btn-success">Edit</a>
                         <a href="" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                   </tr>
                   <tr>
                     <th scope="row">2</th>
                     <td>Database</td>
                     <td>aoiefh oaihwofihaoiwh oihaoihfa hoa hao haoih oiaih oih oihfoiah sifh sbf ian</td>
                     <td>
                         <a href="" class="btn btn-sm btn-success">Edit</a>
                         <a href="" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
           
           
       </div>
      </div>
    </div>
      
  </div>
@endsection 
