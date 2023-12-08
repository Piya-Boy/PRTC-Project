$(document).ready(function () {
    // Toggle the side navigation
    $('#sidebarToggle').on('click', function (event) {
        event.preventDefault();
        $('body').toggleClass('sb-sidenav-toggled');
        localStorage.setItem('sb|sidebar-toggle', $('body').hasClass('sb-sidenav-toggled'));
    });


    $(".nav-link").on('click', function () {
        // Toggle the class 'collapsed' on the link
        $(this).toggleClass("collapsed");
        // Toggle the icon based on the class
        if ($(this).hasClass("collapsed")) {
            $(".fa-chevron-down", this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
        } else {
            $(".fa-chevron-up", this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
        }
    });

    // datatable thai language
    $('#dataTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Thai.json"
        }
    });

    // edit occupation modal
    $('.edit_oc').on('click', function () {
        var oc_id = $(this).attr('data-id');
        console.log(oc_id);
        $.ajax({
            url: 'admin_controllers/edit_occupation',
            type: 'GET',
            data: { oc_id: oc_id },
            dataType: 'json',
            success: function (data) {
                $('.oc_name').val(data.oc_name);
            }
        });
    });

    // delete occupation sweetalert
    $('.delete_oc').on('click', function () {
        var oc_id = $(this).attr('data-id');
        var oc_name = $(this).closest('tr').find('td:nth-child(2)').text();
        // console.log(oc_name);
        // console.log(oc_id);
        Swal.fire({
            title: "ต้องการลบข้อมูล " + oc_name + " หรือไม่?",
            text: "คุณต้องการลบข้อมูลนี้หรือไม่?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "ยืนยัน",
            cancelButtonText: "ยกเลิก"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'admin_controllers/delete_occupation',
                    type: 'GET',
                    data: { oc_id: oc_id },
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'ลบข้อมูลไม่สําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                });
            }
        });
    });

    // edit education modal
    $('.edit_ed').on('click', function () {
        var ed_id = $(this).attr('data-id');
        console.log(ed_id);
        $.ajax({
            url: 'admin_controllers/edit_education',
            type: 'GET',
            data: { ed_id: ed_id },
            dataType: 'json',
            success: function (data) {
                $('.ed_name').val(data.ed_name);
            }
        });
    });

    // delete education sweetalert
    $('.delete_ed').on('click', function () {
        var ed_id = $(this).attr('data-id');
        var ed_name = $(this).closest('tr').find('td:nth-child(2)').text();
        // console.log(ed_name);
        // console.log(ed_id);
        Swal.fire({
            title: "ต้องการลบข้อมูล " + ed_name + " หรือไม่?",
            text: "คุณต้องการลบข้อมูลนี้หรือไม่?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "ยืนยัน",
            cancelButtonText: "ยกเลิก"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'admin_controllers/delete_education',
                    type: 'GET',
                    data: { ed_id: ed_id },
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'ลบข้อมูลไม่สําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                });
            }
        });
    });

    // edit disability type modal
    $('.edit_dt').on('click', function () {
        var dt_id = $(this).attr('data-id');
        console.log(dt_id);
        $.ajax({
            url: 'admin_controllers/edit_disability_type',
            type: 'GET',
            data: { dt_id: dt_id },
            dataType: 'json',
            success: function (data) {
                $('.dt_name').val(data.dt_name);
            }
        });
    });

    // delete disability type sweetalert
    $('.delete_dt').on('click', function () {
        var dt_id = $(this).attr('data-id');
        var dt_name = $(this).closest('tr').find('td:nth-child(2)').text();
        // console.log(dt_name);
        // console.log(dt_id);
        Swal.fire({
            title: "ต้องการลบข้อมูล " + dt_name + " หรือไม่?",
            text: "คุณต้องการลบข้อมูลนี้หรือไม่?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "ยืนยัน",
            cancelButtonText: "ยกเลิก"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'admin_controllers/delete_disability_type',
                    type: 'GET',
                    data: { dt_id: dt_id },
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'ลบข้อมูลไม่สําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                });
            }
        });
    });

    // edit disability cause modal
    $('.edit_dc').on('click', function () {
        var dc_id = $(this).attr('data-id');
        console.log(dc_id);
        $.ajax({
            url: 'admin_controllers/edit_disability_cause',
            type: 'GET',
            data: { dc_id: dc_id },
            dataType: 'json',
            success: function (data) {
                $('.dc_name').val(data.dc_name);
            }
        });
    });

    // delete disability cause sweetalert   
    $('.delete_dc').on('click', function () {
        var dc_id = $(this).attr('data-id');
        var dc_name = $(this).closest('tr').find('td:nth-child(2)').text();
        // console.log(dc_name);
        // console.log(dc_id);
        Swal.fire({
            title: "ต้องการลบข้อมูล " + dc_name + " หรือไม่?",
            text: "คุณต้องการลบข้อมูลนี้หรือไม่?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "ยืนยัน",
            cancelButtonText: "ยกเลิก"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'admin_controllers/delete_disability_cause',
                    type: 'GET',
                    data: { dc_id: dc_id },
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'ลบข้อมูลไม่สําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                });
            }
        });
    });

    // edit data form modal
    $('.edit_df').on('click', function () {
        var df_id = $(this).attr('data-id');
        console.log(df_id);
        $.ajax({
            url: 'admin_controllers/edit_data_form',
            type: 'GET',
            data: { df_id: df_id },
            dataType: 'json',
            success: function (data) {
                $('.df_name').val(data.df_name);
            }
        });
    });

    // delete data form sweetalert
    $('.delete_df').on('click', function () {
        var df_id = $(this).attr('data-id');
        var df_name = $(this).closest('tr').find('td:nth-child(2)').text();
        // console.log(df_name);
        // console.log(df_id);
        Swal.fire({
            title: "ต้องการลบข้อมูล " + df_name + " หรือไม่?",
            text: "คุณต้องการลบข้อมูลนี้หรือไม่?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "ยืนยัน",
            cancelButtonText: "ยกเลิก"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'admin_controllers/delete_data_form',
                    type: 'GET',
                    data: { df_id: df_id },
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'ลบข้อมูลสําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'ลบข้อมูลไม่สําเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                });
            }
        });
    });
  
    $(document).ready(function () {
        // Fetch data from URL
        fetch(
            "https://raw.githubusercontent.com/kongvut/thai-province-data/master/api_province_with_amphure_tambon.json"
        )
            .then((response) => response.json())
            .then((result) => {
                console.log(result);
                // Handle province dropdown
                result.forEach(function (province) {
                    $('#pr_address_province').append('<option value="' + province.name_th + '" data-id="' + province.id + '">' + province.name_th + '</option>');
                });

                // Handle province change event
                $('#pr_address_province').change(function () {
                    var provinceId = $(this).find(':selected').data('id');
                    console.log(provinceId);

                    // Fetch district data based on selected province
                    var selectedProvince = result.find(function (province) {
                        return province.province_id == provinceId;
                    });

                    // Populate district dropdown
                    $('#pr_address_district').empty().append($('<option>', {
                        value: '',
                        text: '--- กรุณาเลือก ---',
                        data_id: ''
                    }));

                    selectedProvince.amphure.forEach(function (district) {
                        $('#pr_address_district').append($('<option>', {
                            value: district.name_th,
                            text: district.name_th
                        }));
                    });

                    // Clear tambon and zipcode dropdowns
                    $('#pr_address_tambom').empty().append($('<option>', {
                        value: '',
                        text: '--- กรุณาเลือก ---'
                    }));
                    $('#pr_address_zipcode').val('');
                });

                // Handle district change event
                $('#pr_address_district').change(function () {
                    var districtId = $(this).val();
                    var provinceId = $('#pr_address_province').val();

                    // Find selected province and district
                    var selectedProvince = result.find(function (province) {
                        return province.id == provinceId;
                    });

                    var selectedDistrict = selectedProvince.districts.find(function (district) {
                        return district.id == districtId;
                    });

                    // Populate tambon dropdown
                    $('#pr_address_tambom').empty().append($('<option>', {
                        value: '',
                        text: '--- กรุณาเลือก ---'
                    }));

                    selectedDistrict.tambons.forEach(function (tambon) {
                        $('#pr_address_tambom').append($('<option>', {
                            value: tambon.id,
                            text: tambon.name
                        }));
                    });

                    // Set zipcode
                    $('#pr_address_zipcode').val(selectedDistrict.zipcode);
                });
            });
    });


});