@extends('layouts.app')

@section('content')

<div class="container-fluid">

            <section class="section team-section"  style="min-height: 440px;">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row mb-1">
                            <div class="col-md-9">
                                <h4 class="h4-responsive mt-1">Requests</h4>
                            </div>
                          <!--  <div class="col-md-3">
                                <div class="md-form">
                                    <input placeholder="Search..." type="text" id="form5" class="form-control">
                                </div>
                            </div>-->
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <div class="classic-tabs">
                                    <div class="tabs-wrapper">
                                        <ul class="nav tabs-primary primary-color" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab"><span class="badge red">2</span> New Requests</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-light" data-toggle="tab" href="#panel84" role="tab"><span class="badge red">0</span> Approved</a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link waves-light" data-toggle="tab" href="#panel85" role="tab"><span class="badge red">1</span> Ordered</a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link waves-light" data-toggle="tab" href="#panel86" role="tab"> Received</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content card">
                                        <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                                            <div class="table-responsive">
                                                <table id="datatables" class="table table-striped table-responsive-md" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.no</th>
                                                            <th>Request by</th>
                                                            <th>Vendor</th>
                                                            <th>Details</th>
                                                            <th>Requested On</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Saroj Kumar Patel</td>
                                                            <td>Astro</td>
                                                            <td><a href="javascipt:void(0)" class="btn btn-sm btn-info waves-effect waves-light" data-toggle="modal" data-target="#centralModalLGInfoDemo">Details</a></td>
                                                            <th>Oct 22, 2018</th>
                                                            <th><a href="javascript:void(0);" class="btn btn-sm btn-info waves-effect waves-light">approve</a></th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Vidya Sahay</td>
                                                            <td>Krilosker</td>
                                                            <td><a href="javascipt:void(0)" class="btn btn-sm btn-info waves-effect waves-light" data-toggle="modal" data-target="#centralModalLGInfoDemo">Details</a></td>
                                                            <th>Oct 27, 2018</th>
                                                            <th><a href="javascript:void(0);" class="btn btn-sm btn-info waves-effect waves-light">approve</a></th>
                                                        </tr>
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="panel84" role="tabpanel">
                                            <div class="table-responsive">
                                                <table id="datatables1" class="table table-striped table-responsive-md" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.no</th>
                                                            <th>Request by</th>
                                                            <th>Vendor</th>
                                                            <th>Approved By</th>
                                                            <th>Details</th>
                                                            <th>Requested On</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Saroj Kumar Patel</td>
                                                            <td>Astro</td>
                                                            <td>Kumar Saurbh</td>
                                                            <td><a href="javascipt:void(0)" class="btn btn-sm btn-info waves-effect waves-light">Details</a></td>
                                                            <th>Oct 22, 2018</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="panel85" role="tabpanel">
                                            <div class="table-responsive">
                                                <table id="datatables2" class="table table-striped table-responsive-md" cellspacing="0" width="100%">
                                                  <thead>
                                                        <tr>
                                                            <th>S.no</th>
                                                            <th>Request by</th>
                                                            <th>Vendor</th>
                                                            <th>Details</th>
                                                            <th>Ordered On</th>
                                                            <!--<th>Actions</th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Saroj Kumar Patel</td>
                                                            <td>Astro</td>
                                                            <td><a href="javascipt:void(0)" class="btn btn-sm btn-info waves-effect waves-light">Details</a></td>
                                                            <th>Oct 22, 2018</th>
                                                          <!--  <td>
                                                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                            </td>-->
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Vidya Sahay</td>
                                                            <td>Krilosker</td>
                                                            <td><a href="javascipt:void(0)" class="btn btn-sm btn-info waves-effect waves-light">Details</a></td>
                                                            <th>Oct 27, 2018</th>
                                                          <!--  <td>
                                                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fa fa-user"></i></a>
                                                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                                                            </td>-->
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="panel86" role="tabpanel">
                                            <div class="table-responsive">
                                                <table id="datatables3" class="table table-striped table-responsive-md" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.no</th>
                                                            <th>Request by</th>
                                                            <th>Vendor</th>
                                                            <th>Approved By</th>
                                                            <th>Received By</th>
                                                            <th>Details</th>
                                                            <th>Received On</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Saroj Kumar Patel</td>
                                                            <td>Astro</td>
                                                            <td>Kumar Saurbh</td>
                                                            <td>Prachi Sing</td>
                                                            <td><a href="javascipt:void(0)" class="btn btn-sm btn-info waves-effect waves-light">Details</a></td>
                                                            <th>Oct 22, 2018</th>
                                                        </tr>
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
       

        </section>

        </div>
@endsection