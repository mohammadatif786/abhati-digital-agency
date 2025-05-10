@extends('layouts.app')
@section('title', 'Projects')
@section('content')

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-customer-table-filter="search"
                        class="form-control form-control-solid w-250px ps-15" placeholder="Search Projects">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">

                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_project">Upload Project</button>
                    <!--end::Add customer-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                    <div class="fw-bolder me-5">
                        <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                    </div>
                    <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete
                        Selected</button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                        id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px sorting" style="width: 145.962px;">
                                    Name</th>
                                <th class="min-w-125px sorting" style="width: 191.238px;">Description</th>
                                <th class="min-w-125px sorting" style="width: 145.962px;">Image</th>
                                <th class="text-end min-w-70px sorting_disabled" style="width: 111.425px;">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @if ($projects->isNotEmpty())
                                @foreach ($projects as $project)
                                    <tr class="odd">
                                        <!--begin::title-->
                                        <td>
                                            {{ $project->name }}
                                        </td>
                                        <!--end::title-->
                                        <!--begin::Date=-->
                                        <td>{{ $project->description }}</td>
                                        <!--end::Date=-->
                                        <!--begin::description=-->
                                        <td data-filter="mastercard">
                                            <img src="{{ asset('media/' . $project->image) }}" class="w-100px rounded me-3"
                                                alt="">
                                        </td>
                                        <!--end::description=-->
                                        <!--begin::Action=-->
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
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

                                                    <a href="{{ route('show.project', $project->id) }}"
                                                        class="menu-link px-3">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <form
                                                        action="{{ route('delete.project', ['id' => $project->id, 'oldImage' => $project->image]) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this service?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="menu-link form-control">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
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
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">No projects found</td>
                                </tr>
                            @endif

                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>


    <div class="modal" id="kt_modal_add_project" tabindex="-1" role="dialog">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form action="{{ route('store.project') }}" method="POST" enctype="multipart/form-data"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    @csrf
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_project_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Upload a project</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="kt_modal_add_project_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
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
                                    name="name" required>
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
                                <textarea cols="5" rows="5" class="form-control form-control-solid" name="description" required></textarea>
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
                                    name="client_name" required>
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
                                    name="category" required>
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
                                    name="complete_year" required>
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
                                    name="website_url" required>
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
                                    name="research_and_strategy" required></textarea>
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
                                    required></textarea>
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
                        <button type="reset" id="kt_modal_add_project_cancel"
                            class="btn btn-light me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_add_project_submit" class="btn btn-primary">
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
