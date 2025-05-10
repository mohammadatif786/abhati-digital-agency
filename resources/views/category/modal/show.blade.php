<div class="modal-content" style="width: 50%;top: 20%; left: 30%;">
    <!--begin::Form-->
    <form id="categoryFormData" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_add_project_header">
            <!--begin::Modal title-->
            <h2 class="fw-bolder">Add a category</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div id="kt_modal_add_project_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                            transform="rotate(-45 6 17.3137)" fill="black"></rect>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                            transform="rotate(45 7.41422 6)" fill="black"></rect>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body py-10 px-lg-17">

            <!--begin::Title-->
            <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-bold mb-2">Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="name">
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Title-->

        </div>
        <!--end::Modal body-->
        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
            <!--begin::Button-->
            <button type="reset" id="kt_modal_add_project_cancel" class="btn btn-light me-3">Discard</button>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="button" id="categoryStoreForm" class="btn btn-primary">
                <span class="indicator-label">Submit</span>
            </button>
            <!--end::Button-->
        </div>
        <!--end::Modal footer-->
        <div></div>
    </form>
    <!--end::Form-->
</div>
