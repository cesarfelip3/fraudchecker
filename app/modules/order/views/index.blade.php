@extends('layouts.master')

@section('title')
Sales Order - Manage Order
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Sales Order <small>List of Order</small></h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Order</li>
        </ol>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Welcome to SB Admin by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
        </div>
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o"></i>
                    <?php echo trans('Sales Order') ?>
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped tablesorter">
                        <thead>
                            <tr>
                                <th class="header">Page<i class="fa fa-sort"></i></th>
                                <th class="header">Visits <i class="fa fa-sort"></i></th>
                                <th class="header">% New Visits <i class="fa fa-sort"></i></th>
                                <th class="header">Revenue <i class="fa fa-sort"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>/index.html</td>
                                <td>1265</td>
                                <td>32.3%</td>
                                <td>$321.33</td>
                            </tr>
                            <tr>
                                <td>/about.html</td>
                                <td>261</td>
                                <td>33.3%</td>
                                <td>$234.12</td>
                            </tr>
                            <tr>
                                <td>/sales.html</td>
                                <td>665</td>
                                <td>21.3%</td>
                                <td>$16.34</td>
                            </tr>
                            <tr>
                                <td>/blog.html</td>
                                <td>9516</td>
                                <td>89.3%</td>
                                <td>$1644.43</td>
                            </tr>
                            <tr>
                                <td>/404.html</td>
                                <td>23</td>
                                <td>34.3%</td>
                                <td>$23.52</td>
                            </tr>
                            <tr>
                                <td>/services.html</td>
                                <td>421</td>
                                <td>60.3%</td>
                                <td>$724.32</td>
                            </tr>
                            <tr>
                                <td>/blog/post.html</td>
                                <td>1233</td>
                                <td>93.2%</td>
                                <td>$126.34</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div><!-- /.row -->
@stop