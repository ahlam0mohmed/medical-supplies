@extends(Auth::user()->type == 0 ? 'layouts.main' : 'layouts.app')
@section('title', 'الصفحة الرئيسية')
@section('content')
    <!-- Page Title -->
    <div class="pagetitle mx-5 mt-3">
        <h1>جميع الطلبات</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.blade.php">الطلبات</a></li>
                <li class="breadcrumb-item active">لوحة التحكم</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section mx-5">

        <!-- Recent Sales -->
        <div class="card  recent-sales overflow-auto p-3">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow text-end">
                    <li class="dropdown-header text-end">
                        <h6>فلترة</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">جميع الطلبات</a></li>
                    <li><a class="dropdown-item" href="#">الجديدة</a></li>
                    <li><a class="dropdown-item" href="#">قيد الانتظار</a></li>
                    <li><a class="dropdown-item" href="#">مقبول</a></li>
                    <li><a class="dropdown-item" href="#">مرفوض</a></li>
                    <li><a class="dropdown-item" href="#">مكتمل</a></li>
                </ul>
            </div>

            <h5 class="card-title fs-5">جميع الطلبات</h5>

            <table class="table table-hover datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    @if(Auth::user()->type != 2)
                    <th scope="col">اسم الصيدلية</th>
                    @endif
                    @if(Auth::user()->type != 0)
                    <th scope="col">اسم العميل</th>
                    @endif
                    <th scope="col">عدد المنتجات</th>
                    <th scope="col">نوع الطلب</th>
                    <th scope="col">تكرار الطلب</th>
                    <th scope="col">العنوان</th>
                    <th scope="col">تاريخ الطلب</th>
                    <th scope="col">الحالة</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr style='cursor: pointer; cursor: hand;'
                        onclick="window.location='{{route($route,$order->id) }}';">
                        <th scope="row"><a href="#">{{ $order->id }}</a></th>
                        @if(Auth::user()->type != 2)
                        <td>{{ $order->pharmacy['pharmacy_name'] }}</td>
                        @endif
                        @if(Auth::user()->type != 0)
                        <td>{{ $order->user['name'] }}</td>
                        @endif
                        <td>{{ count(json_decode($order->products,true)) }}</td>
                        <td>{{ $order->type?'وصفة طبية':'اسم العلاج' }}</td>
                        <th>كل اسبوع</th>
                        <td><a href="#" class="text-dark">{{ $order->address }}</a></td>
                        <td>{{ \Carbon\Carbon::parse($order->created_at)->diffForHumans() }}</td>
                        <td><span class="badge bg-{{ $type[1][(int)$order->status] }} fs-6">{{ $type[0][(int)$order->status] }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        </div><!-- End Recent Sales -->
    </section>
@endsection

