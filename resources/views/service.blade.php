@extends('template')
@section('title', 'Project Master')
@section('content-title', 'Project')
@section('isi1')
<div class="col-md-10 text-dark d-flex" style="height:100vh;">
    <div class="container-fluid">
        <div class="row">
            
                <div class="col-md-7">
                    <div class="card mt-3">
                        <div class="card-header"><h1>Service</h1></div>
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
                                        <center><a href="" class="btn btn-sm btn-success mb-2">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a></center>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Database</td>
                                    <td>aoiefh oaihwofihaoiwh oihaoihfa hoa hao haoih oiaih oih oihfoiah sifh sbf ian</td>
                                    <td>
                                        <center><a href="" class="btn btn-sm btn-success mb-2">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a></center>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mt-3 ps-5 me-4">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="fw-bold text-center pb-3">
                                    Add Your Review
                                </h1>
                            </div>
                            <div class="card-body">
                                <form class="">
                                    <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        <select class="form-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">Database</option>
                                        <option value="2">Web Mock Up</option>
                                        <option value="3">UI/UX</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Your Comment</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection 
