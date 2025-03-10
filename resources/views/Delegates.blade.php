@extends('adminlte::page')

@section('title', 'المناديب')

@section('content_header')
    <h1 style="font-weight:bold; text-align:right;">المناديب</h1>
@stop

@section('content')
    <div class="card shadow-lg p-4 border-0 animate__animated animate__fadeIn" style="border-radius: 15px;">
        @if ($delegatesEdit->name === '')
            <h4 class="mb-3 text-success font-weight-bold">إضافة مندوب جديد</h4>
            <form action="{{ route('delegates.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label class="font-weight-bold">اسم المندوب</label>
                        <input type="text" class="form-control" name="name" placeholder="أدخل اسم المندوب" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="font-weight-bold">رقم الهاتف</label>
                        <input type="text" class="form-control" name="phone" placeholder="أدخل رقم الهاتف" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="font-weight-bold">الرقم القومي</label>
                        <input type="text" class="form-control" name="card_id" placeholder="أدخل الرقم القومي" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3 px-4 shadow-sm">إضافة مندوب</button>
            </form>
        @else
            <h4 class="mb-3 text-success font-weight-bold">تعديل على {{ $delegatesEdit->name }}</h4>
            <form action="{{ route('delegates.edit', $delegatesEdit->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label class="font-weight-bold">اسم المندوب</label>
                        <input type="text" class="form-control" name="name" value="{{ $delegatesEdit->name }}"
                            placeholder="أدخل اسم المندوب" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="font-weight-bold">رقم الهاتف</label>
                        <input type="text" class="form-control" name="phone" value="{{ $delegatesEdit->phone }}"
                            placeholder="أدخل رقم الهاتف" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="font-weight-bold">الرقم القومي</label>
                        <input type="text" class="form-control" name="card_id" value="{{ $delegatesEdit->card_id }}"
                            placeholder="أدخل الرقم القومي" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3 px-4 shadow-sm">تحديث المندوب</button>
            </form>
        @endif


        <hr>

        <h4 class="mb-3 text-success font-weight-bold">قائمة المناديب</h4>
        <div class="table-responsive">
            <table class="table table-hover text-center animate__animated animate__fadeInUp">
                <thead class="text-white"
                    style="background: linear-gradient(45deg, #28a745, #218838); border-radius: 10px;">
                    <tr>
                        <th>#</th>
                        <th>اسم المندوب</th>
                        <th>رقم الهاتف</th>
                        <th>الرقم القومي</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($delegates as $delegate)
                        <tr class="table-light">
                            <td>{{ $delegate->id }}</td>
                            <td>{{ $delegate->name }}</td>
                            <td>{{ $delegate->phone }}</td>
                            <td>{{ $delegate->card_id }}</td>
                            <!-- نافذة تأكيد الحذف -->
                            {{-- <div class="modal fade" id="confirmDeleteModal" tabindex="-1"
                                aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content animate__animated animate__fadeInDown">
                                        <!-- رأس النافذة -->
                                        <div class="modal-header border-0 text-center d-block">
                                            <h5 class="modal-title fw-bold text-danger">
                                                <i class="fas fa-exclamation-triangle fa-2x"></i>
                                                <br> تأكيد الحذف
                                            </h5>
                                        </div>

                                        <!-- محتوى النافذة -->
                                        <div class="modal-body text-center">
                                            <p class="fs-5">هل أنت متأكد أنك تريد حذف هذا العنصر؟</p>
                                        </div>

                                        <!-- أزرار التأكيد والإلغاء -->
                                        <div class="modal-footer border-0 d-flex justify-content-center">
                                            <button type="button" class="btn btn-secondary px-4"
                                                data-bs-dismiss="modal">إلغاء</button>
                                            <form action="{{ route('Delegates.delete', $delegate->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger shadow-sm"
                                                    data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"
                                                    type="submit"><i class="fas fa-trash"></i>
                                                    حذف</button>
                                                {{-- <button type="submit" class="btn btn-danger px-4">نعم،احذف</button> --}}
                            </form>
        </div>
    </div>
    </div>
    {{-- </div> }} --}}
    <td>
        <a href="{{ route('Delegates.create', $delegate->id) }}"><button
                class="btn btn-sm btn-outline-success shadow-sm"><i class="fas fa-edit"></i>
                تعديل</button></a>
        <form action="{{ route('Delegates.delete', $delegate->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-outline-danger shadow-sm" data-bs-toggle="modal"
                data-bs-target="#confirmDeleteModal" type="submit"><i class="fas fa-trash"></i>
                حذف</button>
            {{-- <button type="submit" class="btn btn-danger px-4">نعم،احذف</button> --}}
        </form>
        <button class="btn btn-sm btn-outline-primary shadow-sm"><i class="fas fa-users"></i>
            عرض
            العملاء</button>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>






@stop

@section('css')

    <style>
        /* تحسين إدخال البيانات */
        .form-control {
            border-radius: 10px;
            padding: 12px;
            height: 50px;
            border: 1px solid #ced4da;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }

        /* تحسين الجدول */
        .table-hover tbody tr:hover {
            background-color: #e9ecef;
            transition: 0.3s ease-in-out;
        }

        /* تحسين الأزرار */
        .btn {
            transition: all 0.3s ease-in-out;
            font-weight: bold;

        }

        .btn:hover {
            transform: translateY(-2px);
        }

        /* تحسين البطاقة */
        .card {
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stop
