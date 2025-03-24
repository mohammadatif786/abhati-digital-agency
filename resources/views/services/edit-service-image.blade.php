@extends('layouts.app')
@section('title', 'Edit - ' . $image->image_path)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{ route('update.service.image', ['imageID' => $image->id, 'oldServiceImage' => $image->image_path]) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF Protection -->
                    @method('PUT')

                    <!--begin::Point title group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-bold form-label mb-2">
                            <span class="required">Update Image</span>
                        </label>
                        <input type="file" class="form-control form-control-solid" name="image" required>
                    </div>
                    <!--end::Point title group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                            <span class="indicator-label">Update</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <img src="{{ asset('media/' . $image->image_path) }}" alt="" srcset=""
                            style="width: 244px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
