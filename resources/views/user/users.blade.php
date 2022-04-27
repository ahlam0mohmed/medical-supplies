@extends('layouts.app')
@section('title', 'الصفحة الرئيسية')
@section('content')
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.blade.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">

        <!-- Recent Sales -->
        <div class="card  recent-sales overflow-auto p-3">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <p class="card-body">
            <h5 class="card-title">Recent Sales <span>| Today</span></h5>

            <table class="table table-hover datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الاسم الكامل</th>
                    <th scope="col">الايميل</th>
                    <th scope="col">نوع المستخدم</th>
                    <th scope="col">الحالة</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <a href="#">
                        <tr>
                            <th scope="row"><a href="#">#{{ $user->id }}</a></th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="#" class="text-dark">{{ $types[$user->type] }}</a></td>
                            <td>

                                @if($user->email_verified_at)
                                    <span class="badge bg-success fs-6">
                                    نشط
                                </span>
                                @else
                                    <span class="badge bg-danger fs-6">
                                غير مفعل
                                </span>
                                @endif
                            </td>
                        </tr>
                    </a>
                @endforeach
                </tbody>
            </table>
            <p>{{ Auth::user()->profile->id }}</p>

        </div>
        </div><!-- End Recent Sales -->
    </section>
@endsection

