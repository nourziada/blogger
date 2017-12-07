@extends('layouts.app2')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                <!-- BEGIN DASHBOARD STATS -->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat blue-madison">
                            <div class="visual">
                                <i class="fa fa-comments"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                     {{ $posts_number}}
                                </div>
                                <div class="desc">
                                     Published Posts
                                </div>
                            </div>
                            <a class="more" href="/admin/post">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat red-intense">
                            <div class="visual">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                     {{ $trashed_number }}
                                </div>
                                <div class="desc">
                                     Trashed Posts
                                </div>
                            </div>
                            <a class="more" href="/admin/post/trash">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat green-haze">
                            <div class="visual">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                     {{ $categories_number }}
                                </div>
                                <div class="desc">
                                     Categories
                                </div>
                            </div>
                            <a class="more" href="/admin/category">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat purple-plum">
                            <div class="visual">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                     {{ $users_number }}
                                </div>
                                <div class="desc">
                                     Users
                                </div>
                            </div>
                            <a class="more" href="/admin/user">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END DASHBOARD STATS -->


                </div>
            </div>
</div>
@endsection
