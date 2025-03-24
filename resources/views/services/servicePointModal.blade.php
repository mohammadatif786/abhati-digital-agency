<div class="modal" id="kt_modal_add_payment" tabindex="-1" role="dialog">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Add Points to this services - {{ $service->title }}</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div id="kt_modal_add_payment_close" class="btn btn-active-icon-primary btn-icon btn-sm">
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
                <div class="modal-body mx-5 mx-xl-15 my-7 scroll-y">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('store.point', ['service_id' => $service->id]) }}" method="POST">
                        @csrf
                        <!--begin::Point group-->
                        <div class="fv-plugins-icon-container fv-row mb-7">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bold mb-2">
                                <span class="required">Point title</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="point" value=""
                                required>
                        </div>
                        <!--end::Point group-->

                        <!--begin::Point description group-->
                        <div class="fv-plugins-icon-container fv-row mb-7">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bold mb-2">
                                <span class="required">Point description</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea rows="6" cols="6" class="form-control form-control-solid" name="point_description"
                                value="" required></textarea>
                        </div>
                        <!--end::Point description group-->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_add_payment_cancel"
                                class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="align-middle ms-2 spinner-border spinner-border-sm"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>