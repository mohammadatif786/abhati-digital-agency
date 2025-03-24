@extends('layouts.app')
@section('title', 'Edit - ' . $editPoint->point)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{ route('update.point', ['id' => $editPoint->id]) }}" method="POST">
                    @csrf <!-- CSRF Protection -->
                    @method('PUT')

                    <!--begin::Point title group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-bold form-label mb-2">
                            <span class="required">Point Title</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" name="point"
                            placeholder="Enter point title" value="{{ $editPoint->point }}" required>
                        @error('point')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Point title group-->

                    <!--begin::Point description group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="fs-6 fw-bold form-label mb-2">
                            <span class="required">Point Description</span>
                        </label>
                        <textarea class="form-control form-control-solid" name="point_description" rows="3"
                            placeholder="Enter point description" required>{{ $editPoint->point_description }}</textarea>
                        @error('point_description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Point description group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
            </div>
        </div>
    </div>
@endsection
