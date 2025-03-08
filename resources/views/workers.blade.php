@extends('adminlte::page')

@section('title', 'العملاء')

@section('content_header')
    <h1>العملاء</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow border-0">
                <div class="card-header text-white text-center" 
                     style="background: linear-gradient(to right, #4CAF50, #2E7D32); font-size: 1.2rem;">
                    جدول بيانات العملاء
                </div>

                <div class="card-body">
                    <!-- 🔍 فلتر متقدم -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" id="searchName" class="form-control" placeholder=" البحث بالاسم">
                        </div>
                        <div class="col-md-4">
                            <input type="text" id="searchEmail" class="form-control" placeholder=" البحث بالبريد الإلكتروني">
                        </div>
                        <div class="col-md-4">
                            <select id="searchStatus" class="form-control">
                                <option value="">⚪ كل الحالات</option>
                                <option value="نشط">🟢 نشط</option>
                                <option value="غير نشط">🔴 غير نشط</option>
                            </select>
                        </div>
                    </div>

                    <table id="dataTable" class="table table-bordered table-hover text-center">
                        <thead class="table-dark text-center">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">الاسم</th>
                                <th class="text-center">البريد الإلكتروني</th>
                                <th class="text-center">رقم الهاتف</th>
                                <th class="text-center">الحالة</th>
                                <th class="text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>أحمد محمد</td>
                                <td>ahmed@example.com</td>
                                <td>+20123456789</td>
                                <td><span class="badge badge-success">نشط</span></td>
                                <td>
                                    <button class="btn btn-outline-info btn-sm viewUser" 
                                            data-name="أحمد محمد" 
                                            data-email="ahmed@example.com" 
                                            data-phone="+20123456789" 
                                            data-status="نشط">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="btn btn-outline-warning btn-sm editUser">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm deleteUser">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>سارة خالد</td>
                                <td>sara@example.com</td>
                                <td>+20111234567</td>
                                <td><span class="badge badge-danger">غير نشط</span></td>
                                <td>
                                    <button class="btn btn-outline-info btn-sm viewUser" 
                                            data-name="سارة خالد" 
                                            data-email="sara@example.com" 
                                            data-phone="+20111234567" 
                                            data-status="غير نشط">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="btn btn-outline-warning btn-sm editUser">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm deleteUser">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>سارة خالد</td>
                                <td>sara@example.com</td>
                                <td>+20111234567</td>
                                <td><span class="badge badge-danger">غير نشط</span></td>
                                <td>
                                    <button class="btn btn-outline-info btn-sm viewUser" 
                                            data-name="سارة خالد" 
                                            data-email="sara@example.com" 
                                            data-phone="+20111234567" 
                                            data-status="غير نشط">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="btn btn-outline-warning btn-sm editUser">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm deleteUser">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>سارة خالد</td>
                                <td>sara@example.com</td>
                                <td>+20111234567</td>
                                <td><span class="badge badge-danger">غير نشط</span></td>
                                <td>
                                    <button class="btn btn-outline-info btn-sm viewUser" 
                                            data-name="سارة خالد" 
                                            data-email="sara@example.com" 
                                            data-phone="+20111234567" 
                                            data-status="غير نشط">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="btn btn-outline-warning btn-sm editUser">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm deleteUser">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>سارة خالد</td>
                                <td>sara@example.com</td>
                                <td>+20111234567</td>
                                <td><span class="badge badge-danger">غير نشط</span></td>
                                <td>
                                    <button class="btn btn-outline-info btn-sm viewUser" 
                                            data-name="سارة خالد" 
                                            data-email="sara@example.com" 
                                            data-phone="+20111234567" 
                                            data-status="غير نشط">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="btn btn-outline-warning btn-sm editUser">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm deleteUser">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>سارة خالد</td>
                                <td>sara@example.com</td>
                                <td>+20111234567</td>
                                <td><span class="badge badge-danger">غير نشط</span></td>
                                <td>
                                    <button class="btn btn-outline-info btn-sm viewUser" 
                                            data-name="سارة خالد" 
                                            data-email="sara@example.com" 
                                            data-phone="+20111234567" 
                                            data-status="غير نشط">
                                        <i class="fas fa-eye"></i> عرض
                                    </button>
                                    <button class="btn btn-outline-warning btn-sm editUser">
                                        <i class="fas fa-edit"></i> تعديل
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm deleteUser">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- End card-body -->
            </div> <!-- End card -->
        </div>
    </div>
</div>




@stop

@section('css')
<style>
body {
    background-color: #f8f9fa;
    font-family: 'Tajawal', sans-serif;
}

.card {
    border-radius: 10px;
    border: none;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
}

.table {
    background-color: white;
    border-radius: 10px;
}

.table thead {
    background-color:rgb(41, 152, 44);
    color: white;
}

.table td, .table th {
    text-align: center;
    vertical-align: middle;
    padding: 12px;
    font-size: 1rem;
}

table.dataTable thead th, table.dataTable thead td, table.dataTable tfoot th, table.dataTable tfoot td {
    text-align: center;
}س

.btn {
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.85rem;
}

</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        let table = $('#dataTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/ar.json"
            }
        });

        // 🛠️ فلتر متقدم
        $('#searchName, #searchEmail, #searchStatus').on('keyup change', function () {
            let name = $('#searchName').val().toLowerCase();
            let email = $('#searchEmail').val().toLowerCase();
            let status = $('#searchStatus').val();

            table.rows().every(function() {
                let row = $(this.node());
                let rowName = row.find('td:nth-child(2)').text().toLowerCase();
                let rowEmail = row.find('td:nth-child(3)').text().toLowerCase();
                let rowStatus = row.find('td:nth-child(5) span').text();

                if ((name === "" || rowName.includes(name)) &&
                    (email === "" || rowEmail.includes(email)) &&
                    (status === "" || rowStatus === status)) {
                    row.show();
                } else {
                    row.hide();
                }
            });
        });

        // عرض بيانات المستخدم
        $(".viewUser").click(function() {
            let name = $(this).data("name");
            let email = $(this).data("email");
            let phone = $(this).data("phone");
            let status = $(this).data("status");

            $("#modalName").text(name);
            $("#modalEmail").text(email);
            $("#modalPhone").text(phone);
            $("#modalStatus").text(status);

            if (status === "نشط") {
                $("#modalStatus").removeClass("badge-danger").addClass("badge-success");
            } else {
                $("#modalStatus").removeClass("badge-success").addClass("badge-danger");
            }

            $("#userModal").modal("show");
        });

        // حذف المستخدم (تنبيه قبل الحذف)
        $(".deleteUser").click(function() {
            Swal.fire({
                title: "هل أنت متأكد؟",
                text: "لن تتمكن من استعادة هذا المستخدم!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "نعم، احذف!",
                cancelButtonText: "إلغاء"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("تم الحذف!", "تم حذف المستخدم بنجاح.", "success");
                }
            });
        });

        // تعديل المستخدم (مثال - فقط رسالة)
        $(".editUser").click(function() {
            Swal.fire("تعديل المستخدم", "تم فتح نافذة التعديل (يجب إضافة نموذج تعديل هنا)", "info");
        });
    });
</script>

<!-- SweetAlert for delete confirmation -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop