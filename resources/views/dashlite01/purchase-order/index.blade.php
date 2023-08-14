@extends('dashlite01.layout.app')

@section('title', 'Dashboard')
@section('description', 'Dashboard of the PGMO GSO Inventory')

@section('stylesheets', '')

@section('scripts')
    <script text="text/javascript">
        $(document).ready(function() {
            $("#btnAddPO").click(function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Get the values of the input fields
                var poNo = $("#no").val().trim();
                var poDate = $("#date").val().trim();
                var poDescription = $("#description").val().trim();
                var poSupplier = $("#supplier_id").val();

                // Perform validation
                if (poNo === "") {
                    alert("Purchase Order No. field cannot be empty.");
                    return;
                }
                if (poDate === "") {
                    alert("Purchase Order Date field cannot be empty.");
                    return;
                }
                if (poDescription === "") {
                    alert("Description field cannot be empty.");
                    return;
                }
                if (poSupplier === "") {
                    alert("Please select a supplier.");
                    return;
                }

                // If all fields are filled, submit the form
                $("#frmAddPO").submit();
            });
        });
    </script>
@endsection

@section('content')
            

    <div class="nk-content ">
        <div class="container-fluid">
            @include('dashlite01.layout.alerts') 
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Purchase Order</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total 2,595 stock inventory.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li><a href="#" class="btn btn-white btn-outline-light"><em
                                                        class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                            <li class="nk-block-tools-opt">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a data-bs-toggle="modal" href="#modalAddPO"><span>Add
                                                                        Purchase Order</span></a></li>
                                                            <li><a href="#"><span>Import Lead</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner position-relative card-tools-toggle">
                                    <div class="card-title-group">
                                        <div class="card-tools">
                                            &NonBreakingSpace;
                                        </div><!-- .card-tools -->
                                        <div class="card-tools me-n1">
                                            <ul class="btn-toolbar gx-1">
                                                <li>
                                                    <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                        data-target="search"><em class="icon ni ni-search"></em></a>
                                                </li><!-- li -->
                                                <li class="btn-toolbar-sep"></li><!-- li -->
                                                <li>
                                                    <div class="toggle-wrap">
                                                        <a href="#" class="btn btn-icon btn-trigger toggle"
                                                            data-target="cardTools"><em
                                                                class="icon ni ni-menu-right"></em></a>
                                                        <div class="toggle-content" data-content="cardTools">
                                                            <ul class="btn-toolbar gx-1">
                                                                <li class="toggle-close">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle"
                                                                        data-target="cardTools"><em
                                                                            class="icon ni ni-arrow-left"></em></a>
                                                                </li><!-- li -->
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown">
                                                                            <div class="dot dot-primary"></div>
                                                                            <em class="icon ni ni-filter-alt"></em>
                                                                        </a>
                                                                        <div
                                                                            class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                            <div class="dropdown-head">
                                                                                <span
                                                                                    class="sub-title dropdown-title">Filter
                                                                                    Users</span>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-sm btn-icon">
                                                                                        <em class="icon ni ni-more-h"></em>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown-body dropdown-body-rg">
                                                                                <div class="row gx-6 gy-3">
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="overline-title overline-title-alt">Group</label>
                                                                                            <select
                                                                                                class="form-select js-select2 js-select2-sm">
                                                                                                <option value="any">Any
                                                                                                    Group</option>
                                                                                                <option value="hot">Hot
                                                                                                </option>
                                                                                                <option value="warm">Warm
                                                                                                </option>
                                                                                                <option value="cold">Cold
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="overline-title overline-title-alt">Status</label>
                                                                                            <select
                                                                                                class="form-select js-select2 js-select2-sm">
                                                                                                <option value="any">Any
                                                                                                    Status</option>
                                                                                                <option value="active">
                                                                                                    Active</option>
                                                                                                <option value="pending">
                                                                                                    Pending</option>
                                                                                                <option value="suspend">
                                                                                                    Suspend</option>
                                                                                                <option value="deleted">
                                                                                                    Deleted</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary">Filter</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown-foot between">
                                                                                <a class="clickable" href="#">Reset
                                                                                    Filter</a>
                                                                                <a href="#">Save Filter</a>
                                                                            </div>
                                                                        </div><!-- .filter-wg -->
                                                                    </div><!-- .dropdown -->
                                                                </li><!-- li -->
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown">
                                                                            <em class="icon ni ni-setting"></em>
                                                                        </a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                            <ul class="link-check">
                                                                                <li><span>Show</span></li>
                                                                                <li class="active"><a
                                                                                        href="#">10</a></li>
                                                                                <li><a href="#">20</a></li>
                                                                                <li><a href="#">50</a></li>
                                                                            </ul>
                                                                            <ul class="link-check">
                                                                                <li><span>Order</span></li>
                                                                                <li class="active"><a
                                                                                        href="#">DESC</a></li>
                                                                                <li><a href="#">ASC</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div><!-- .dropdown -->
                                                                </li><!-- li -->
                                                            </ul><!-- .btn-toolbar -->
                                                        </div><!-- .toggle-content -->
                                                    </div><!-- .toggle-wrap -->
                                                </li><!-- li -->
                                            </ul><!-- .btn-toolbar -->
                                        </div><!-- .card-tools -->
                                    </div><!-- .card-title-group -->
                                    <div class="card-search search-wrap" data-search="search">
                                        <div class="card-body">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search"
                                                    data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                <input type="text" class="form-control border-transparent form-focus-none"
                                                    placeholder="Search by user or email">
                                                <button class="search-submit btn btn-icon"><em
                                                        class="icon ni ni-search"></em></button>
                                            </div>
                                        </div>
                                    </div><!-- .card-search -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span class="sub-text">No.</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Date</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Description</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Supplier</span>
                                            </div>
                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools text-end">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="btn btn-xs btn-outline-light btn-icon dropdown-toggle"
                                                        data-bs-toggle="dropdown" data-offset="0,5"><em
                                                            class="icon ni ni-plus"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                        <ul class="link-tidy sm no-bdr">
                                                            <li>
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        checked="" id="ph">
                                                                    <label class="custom-control-label"
                                                                        for="ph">Phone</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="vri">
                                                                    <label class="custom-control-label"
                                                                        for="vri">Verified</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="st">
                                                                    <label class="custom-control-label"
                                                                        for="st">Status</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @forelse ($pos as $po)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead">{{ $po->no }}</span>
                                                </div>

                                                @php
                                                    $poDate = $po->date; // Assuming $po->date contains the date in a valid format (e.g., "YYYY-MM-DD")
                                                    
                                                    // Convert the $poDate string to a Carbon instance
                                                    $poCarbon = Carbon\Carbon::parse($poDate);
                                                    
                                                    // Get the current date as a Carbon instance
                                                    $currentDate = Carbon\Carbon::now();
                                                    
                                                    // Calculate the interval between the two dates
                                                    $interval = $currentDate->diff($poCarbon);
                                                    
                                                    $elapsedHuman = $currentDate->diffForHumans($poCarbon);
                                                    $elapsedHuman = str_replace('after', 'elapsed', $elapsedHuman);
                                                    // Get the elapsed days and months
                                                    $elapsedDays = $interval->days;
                                                    $elapsedMonths = $interval->m;
                                                @endphp
                                                <div class="nk-tb-col tb-col-md">
                                                    <span>{{ $po->date }}, {{ $elapsedHuman }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span>{{ $po->description }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>{{ $po->supplier->name }}</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    @if ($po->status == 0)
                                                        <span class="tb-status text-danger">No Delivery</span>
                                                    @elseif($po->status == 1)
                                                        <span class="tb-status text-warning">Partial</span>
                                                    @elseif($po->status == 2)
                                                        <span class="tb-status text-success">Completed</span>
                                                    @else
                                                        <span class="tb-status text-gray">Undefined Status</span>
                                                    @endif
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-2">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Send Email">
                                                                <em class="icon ni ni-mail-fill"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-trigger dropdown-toggle"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                        <li><a data-bs-toggle="modal" href="#editLead"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                        </li>
                                                                        <li><a data-bs-toggle="modal" href="#deleteLead"><em
                                                                                    class="icon ni ni-delete"></em><span>Delete</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                        @empty
                                            Empty
                                        @endforelse
                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    {{-- <ul class="pagination justify-content-center justify-content-md-start">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><span class="page-link"><em
                                                    class="icon ni ni-more-h"></em></span></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul> --}}
                                    <!-- .pagination -->
                                    {{ $pos->links('dashlite01.layout.pagination') }}
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <!-- @@ Purchase Order Add Modal @e -->
    <div class="modal fade" id="modalAddPO">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Purchase Order</h5>
                    <form action="{{ route('purchase-order.store') }}" id="frmAddPO" method="POST"
                        class="mt-2">
                        @method('POST')
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="no">Purchase Order No.</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('no') is-invalid @enderror" name="no"
                                            id="no" required placeholder="e.g. YYYY-MM-sequence">
                                    </div>
                                    @error('no')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="date">Purchase Order Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-left">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" name="date" id="date"
                                            data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="description">Description</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="description" id="description"
                                            placeholder="e.g. Medical Supplies et. al.">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="supplier_id">Supplier</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="supplier_id" id="supplier_id">
                                            @foreach ($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" id="btnAddPO" class="btn btn-primary">Add
                                        Purchase Order</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .modal -->
    <!-- @@ Lead Edit Modal @e -->
    <div class="modal fade" role="dialog" id="editLead" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Lead</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#editInfomation">Lead Detail's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#editAddress">Contact Detail's</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="editInfomation">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="edit-name" placeholder="Name"
                                                value="Abu Bin Ishtiyak">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">People</option>
                                                <option value="cold_lead">Organization</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Customer</option>
                                                <option value="cold_lead">Cold lead</option>
                                                <option value="hot_lead">Hot Lead</option>
                                                <option value="warm_lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-open-deal">Open Deal</label>
                                        <input type="text" class="form-control" id="edit-open-deal"
                                            placeholder="Open Deal" value="2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Close Deal</label>
                                        <input type="text" class="form-control" id="edit-close-deal"
                                            placeholder="Close Deal" value="3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Active</option>
                                                <option value="pending">Pending</option>
                                                <option value="cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update
                                                lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="editAddress">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-email">Email Address</label>
                                        <input type="email" class="form-control" id="edit-email"
                                            placeholder="Email Address" value="info@softnio.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-phone-no">Phone Number</label>
                                        <input type="text" class="form-control" id="edit-phone-no"
                                            placeholder="Phone Number" value="+811 847-4958">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-lead-address">Address</label>
                                        <input type="text" class="form-control" id="lead-address" placeholder="Address"
                                            value="Mirpur, Dhaka, Bangladesh.">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update
                                                Lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- @@ organization lead Edit Modal @e -->
    <div class="modal fade" role="dialog" id="editOrgLead">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit organization lead info</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#editOrgInfo">Lead Detail's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#editOrgAddress">Contact Detail's</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="editOrgInfo">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="edit-name" placeholder="Name"
                                                value="Softnio">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Customer</option>
                                                <option value="cold_lead">Cold lead</option>
                                                <option value="hot_lead">Hot Lead</option>
                                                <option value="warm_lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-open-deal">Open Deal</label>
                                        <input type="text" class="form-control" id="edit-open-deal"
                                            placeholder="Open Deal" value="2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Close Deal</label>
                                        <input type="text" class="form-control" id="edit-close-deal"
                                            placeholder="Close Deal" value="3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Branch</label>
                                        <input type="text" class="form-control" id="edit-close-deal"
                                            placeholder="Close Deal" value="Main Branch">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Active</option>
                                                <option value="pending">Pending</option>
                                                <option value="cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update
                                                Organigation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="editOrgAddress">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="status">Designation</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" id="status">
                                                <option value="default_option">HR</option>
                                                <option value="pending">Admin</option>
                                                <option value="cenceled">Manager</option>
                                                <option value="cenceled">Junior Executive</option>
                                                <option value="cenceled">Senior Executive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-email">Email Address</label>
                                        <input type="email" class="form-control" id="edit-email"
                                            placeholder="Email Address" value="info@softnio.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-phone-no">Phone Number</label>
                                        <input type="text" class="form-control" id="edit-phone-no"
                                            placeholder="Phone Number" value="+811 847-4958">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-lead-address">Address</label>
                                        <input type="text" class="form-control" id="lead-address" placeholder="Address"
                                            value="Mirpur, Dhaka, Bangladesh.">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add
                                                Lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- @@ organization lead Delete Modal @e -->
    <div class="modal fade" id="deleteLead">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-sm text-center">
                    <div class="nk-modal py-4">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This Lead data will be delete permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                <button data-bs-dismiss="modal" id="deleteOrg" class="btn btn-success">Yes, Delete
                                    it</button>
                            </li>
                            <li>
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventPopup"
                                    class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .modal -->
@endsection
