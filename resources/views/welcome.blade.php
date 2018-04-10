@extends ('layouts.header')

@section('content')
    <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="row" id="filter">
            {{--<div role="dialog" id="filter-modal">
                <div id="filter-dialog">
                    <div id="filter-content">
                        <div class="modal-header">
                            <h3>Filter</h3>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group" id="doelgroep">
                                    <div class="checkbox">
                                        <h5>Doelgroep</h5>
                                        <label>
                                            <input type="checkbox" name="12-18"/>
                                            <h6>12 tot 18 jaar</h6>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="18-23"/>
                                            <h6>18 tot 23 jaar</h6>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" id="gemeente">
                                    <h5>Gemeente</h5>
                                    <label>
                                        <input type="checkbox" name="gemeente-leiden">
                                        <h6>Gemeente Leiden</h6>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="gemeente-den-haag">
                                        <h6>Gemeente Den Haag</h6>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="gemeente-leidschendam-voorburg">
                                        <h6>Gemeente Leidschendam - Voorburg</h6>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>--}}

        </div>
       {{-- <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 results">
                <div class="row table-header">
                    Resultaten
                </div>
                --}}{{--
                @foreach()
                --}}{{--
                <div class="item-row">
                    <div class="col-xs-6">

                    </div>
                </div>
                --}}{{-- @endforeach
                  --}}{{--
            </div>
        </div>
    </div>--}}
@endsection