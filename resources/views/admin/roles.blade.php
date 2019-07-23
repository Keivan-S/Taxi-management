@extends('layouts.master')
@include('plugins.datatable')

@section('pageTitle')
    نقش ها
@endsection

@section('title')
    سامانه مدیریت حمل و نقل
@stop

@section('breadcrump')
    <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li><li class="breadcrumb-item active">@yield('pageTitle')</li>
@endsection

@section('js')
    <script>
        $(function () {

            $('#listtable').DataTable({
                dom: 'Bfrtip',
                "ajax": 'ajax/roles/data',
                "language": {
                    "lengthMenu": "نمایش _MENU_ رکورد در هر صفحه",
                    "zeroRecords": "چیزی یافت نشد",
                    "info": "نمایش صفحه _PAGE_ از _PAGES_",
                    "infoEmpty": "جدول خالی است",
                    "infoFiltered": "(فیلتر شده از مجموع _MAX_ رکورد)",
                    "loadingRecords":"در حال بارگذاری",
                    "processing":"درحال پردازش",
                    "search":"جستجو",
                    "paginate": {
                        "first":      "اولین",
                        "last":       "آخرین",
                        "next":       "بعدی",
                        "previous":   "قبلی"
                    },
                },
                buttons: [
                    { extend: 'copy', text: 'کپی در حافظه' },
                    { extend: 'csv', text: 'CSV' },
                    { extend: 'pdf', text: 'PDF' },
                    { extend: 'excel', text: 'اکسل' },
                    { extend: 'print', text: 'چاپ' },

                ]

            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    </script>
@append


@section('pageContent')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <h4 class="card-title">لیست نقش ها</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url()->current().'/create' }}" class="btn float-right hidden-sm btn-success"><i class="mdi mdi-plus-circle"></i> جدید</a>
                        </div>
                    </div>

                    <h6 class="card-subtitle">در این لیست می توانید نقش ها را مدیریت کنید</h6>
                    <div class="table-responsive m-t-40">
                        <table id="listtable"
                               class="display nowrap table table-hover table-striped table-bordered"
                               cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>تعداد عضو</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>نام</th>
                                <th>تعداد عضو</th>
                                <th>عملیات</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

