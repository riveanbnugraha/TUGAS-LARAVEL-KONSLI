@extends('template')
@section('title', 'Project Project')
@section('content-title', 'Project')
@section('isi1')
<div class="col-md-10 text-dark d-flex overflow-auto" style="height:100vh;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 mt-3 ps-5">
                <div class="card">
                    <div class="card-header"><h1>Project</h1></div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Web Design</td>
                                <td>11/11/2011</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam maiores, officiis illum ut veniam tempora doloremque, dignissimos quia in fuga neque veritatis voluptatem quasi odio ipsam voluptas qui corrupti atque!</td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>
                                    <a href="" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Database</td>
                                <td>22/02/2022</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam maiores, officiis illum ut veniam tempora doloremque, dignissimos quia in fuga neque veritatis voluptatem quasi odio ipsam voluptas qui corrupti atque!</td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>
                                    <a href="" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="modal fade" id="detailproject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  ...
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-success">Understood</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ">
            <div class="mt-3 me-4">
                <div class="card">
                    <div class="card-header">
                        <h1 class="fw-bold text-center pb-3">
                        Add Project
                    </h1>
                    </div>
                    <div class="card-body">
                        <form class="">
                            <label class="form-label" for="">Project Name</label>
                            <input type="text" class="form-control" aria-label="Sizing example input" required>
                            <label for="" class="form-label">Category</label>
                            <select name="" id="" class="form-select" required>
                                <option value="">Choose</option>
                                <option value="">Web Design</option>
                                <option value="">Database</option>
                                <option value="">UI/UX</option>
                            </select>
                            <label class="form-label" for="">Date</label>
                            <input type="date" class="form-control" required>
                            <label for="" class="form-label">Add Picture</label>
                            <input class="form-control" type="file" required>
                            <label class="form-label" for="">Description</label>
                            <textarea class="form-control" minlength="8"></textarea>
                            <label class="form-label" for="">Project Status</label>
                            <div class="form-check" required>
                                <label class="form-label" for="">Ongoing</label>
                                <input name="status" class="form-check-input" type="radio">
                                
                            </div>
                            <div class="form-check" required>
                                <label class="form-check-label" for="">Finished</label>
                                <input name="status" class="form-check-input" type="radio">
                            </div>
                            <button type="submit" class="btn btn-primary text-white mt-3" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <div id="modal fade" aria-hidden="true"></div>

</div>
@endsection 
