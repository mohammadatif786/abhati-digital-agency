@extends('layouts.app')
@section('title', 'Edit - ' . $project->name)
@section('content')
    <div class="d-flex flex-column flex-xl-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body pt-15">
                    <!--begin::Summary-->
                    <div class="d-flex flex-center flex-column mb-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            <img src="{{ asset('media/' . $project->image) }}" alt="image">
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Title-->
                        <span href="#"
                            class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $project->name }}</span>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-5 fw-bold text-muted mb-6">
                            {{ $project->description }}
                        </div>
                        <!--end::Description-->

                    </div>
                    <!--end::Summary-->
                    <!--begin::Edit-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title=""
                            data-bs-original-title="Edit Service details">
                            <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_edit_project">Edit</a>
                        </span>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                        href="#kt_customer_view_overview_tab">Images</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">

                <!--begin::: images Tab-->
                <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Images List</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Filter-->
                                <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_payment">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                                fill="black"></rect>
                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                                transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                                fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add Image</button>
                                <!--end::Filter-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Table-->
                            <div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed gy-5 dataTable no-footer"
                                        id="kt_table_customers_payment">
                                        <!--begin::Table head-->
                                        <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                                            <!--begin::Table row-->
                                            <tr class="text-start text-muted text-uppercase gs-0">
                                                <th class="min-w-100px sorting" style="width: 125.55px;">Image</th>
                                                <th
                                                    class="text-end min-w-100px pe-4 sorting_disabled"style="width: 124.15px;">
                                                    Actions
                                                </th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            <!--end::Table row-->
                                            {{-- @foreach ($project as $project)
                                                <tr class="odd">
                                                    <td> {{ $project->name }} </td>
                                                    <td> {{ $project->description }} </td>
                                                    <!--begin::Action=-->
                                                    <td class="pe-0 text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">Actions
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon--></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="{{ route('edit.point', ['id' => $project->id]) }}"
                                                                    class="menu-link px-3">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path
                                                                                d="M3 17.25V21H6.75L17.81 9.94L14.06 6.19L3 17.25Z"
                                                                                fill="black" />
                                                                            <path opacity="0.5"
                                                                                d="M20.71 5.63L18.37 3.29C18.17 3.09 17.92 3 17.67 3C17.42 3 17.17 3.09 16.97 3.29L15.13 5.13L18.87 8.87L20.71 7.03C21.1 6.64 21.1 6.03 20.71 5.63Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <form
                                                                    action="{{ route('delete.point', ['id' => $project->id]) }}"
                                                                    method="post"
                                                                    onsubmit="confirm('Are you surce to delete this point')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="menu-link form-control">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="black"></path>
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="black"></path>
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                    <!--end::Action=-->
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>

                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::images Tab-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>


    <div class="modal" id="kt_modal_edit_project" tabindex="-1" role="dialog">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form action="{{ route('update.project', ['project_id' => $project->id, 'oldImage' => $project->image]) }}"
                    method="POST" enctype="multipart/form-data" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    @csrf
                    @method('PUT')
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_edit_project_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Update - {{ $project->name }}</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="kt_modal_edit_project_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
                                <input type="text" class="form-control form-control-solid" placeholder=""
                                    name="name" value="{{ $project->name }}" required>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Description</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea cols="5" rows="5" class="form-control form-control-solid" name="description" required>{{ $project->description }}</textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Description-->

                        <!--begin::customer_name-->
                        <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Customer Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder=""
                                    name="client_name" value="{{ $project->client_name }}" required>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::customer_name-->

                        <!--begin::category-->
                        <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Category</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder=""
                                    name="category" value="{{ $project->category }}" required>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::category-->


                        <!--begin::complete year-->
                        <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Complete Year</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="datetime-local" class="form-control form-control-solid" placeholder=""
                                    name="complete_year" value="{{ $project->complete_year }}" required>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::complete year-->

                        <!--begin::website_url-->
                        <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Website Url</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="url" class="form-control form-control-solid" placeholder=""
                                    name="website_url" value="{{ $project->website_url }}" required>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::website_url-->

                        <!--begin::research_and_strategy-->
                        <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Research And Strategy</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea rows="6" cols="6" class="form-control form-control-solid" placeholder=""
                                    name="research_and_strategy" required>{{ $project->research_and_strategy }}</textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::research_and_strategy-->

                        <!--begin::challenging-->
                        <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Challenging</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea rows="6" cols="6" class="form-control form-control-solid" placeholder="" name="challenging"
                                    required>{{ $project->challenging }}</textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::challenging-->

                        <!--begin::Image-->
                        <div class="scroll-y me-n7 pe-7" style="max-height: 323px;">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">Upload Image</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" name="image" class="form-control form-control-solid"
                                    accept="image/*" required />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Image-->

                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_edit_project_cancel"
                            class="btn btn-light me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_edit_project_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                    <div></div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection
