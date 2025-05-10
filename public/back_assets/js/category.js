$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});


//show category modal
$(".categoryAddModal").on("click", function (e) {
    let url = jsRoutes.category.show;

    $.ajax({
        url: url,
        method: "get",
        success: function (response) {
            $("#kt_modal_add_project").html(response);
        },
    });
});

//store category data
$(document).on("click", "#categoryStoreForm", function (e) {
    let form = $("#categoryFormData");

    let url = jsRoutes.category.store;
    let formData = form.serialize();

    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        success: function (response) {
            toastr.success(response.success);
            $("#kt_modal_add_project").modal("hide");
            location.reload();
            form[0].reset();
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                form.find(".text-danger").remove();
                form.find(".is-invalid").removeClass("is-invalid");

                $.each(errors, function (key, value) {
                    let input = form.find(`[name="${key}"]`);
                    input.addClass("is-invalid");
                    input.after(
                        `<small class="text-danger">${value[0]}</span>`
                    );
                });
            } else {
                toastr.error("something went wrong");
            }
        },
    });
});

//edit category modal
$('.editCategoryModal').on("click", function () {
    const id = $(this).data('id');
    let url = jsRoutes.category.edit.replace(':id', id)

    $.ajax({

    });

});

//delete category
$(".deleteCategory").on("click", function () {
    var id = $(this).data("id");
    var $this = $(this);
    let url = jsRoutes.category.delete.replace(":id", id);
    Swal.fire({
        text: "Are you sure you want to delete ",
        icon: "warning",
        showCancelButton: !0,
        buttonsStyling: !1,
        confirmButtonText: "Yes, delete!",
        cancelButtonText: "No, cancel",
        customClass: {
            confirmButton: "btn fw-bold btn-danger",
            cancelButton: "btn fw-bold btn-active-light-primary",
        },
    }).then(function (e) {
        e.value
            ? $.ajax({
                url: url,
                type: "POST",
                data: {
                    _method: "DELETE"

                },
                success: function (response) {
                    if (response.message == "success") {
                        Swal.fire({
                            text: "Category deleted !.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        }).then(function () {
                            $this.closest('tr').remove();
                        });
                    }
                },
            })
            : "cancel" === e.dismiss &&
            Swal.fire({
                text: "Category was not deleted.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: { confirmButton: "btn fw-bold btn-primary" },
            });
    });
});
