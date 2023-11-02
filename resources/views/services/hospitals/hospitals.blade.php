@include('main.header')
{{-- @include('main.hospitaldashboard') --}}
<div class="container-fluid">
    {{-- parent row open --}}

    <div class="row py-2 px-2">
        <div class="col-12 p-1 boxSd">
            <div class="row  ">
                <div class="col-3">
                    <div class="state">
                        <input class="form-control form-custm me-2 text-black " type="search"
                            placeholder=" Search For State" aria-label="Search">
                    </div>
                </div>
                <div class="col-3">
                    <div class="city">
                        <input class="form-control form-custm me-2 text-black " type="search"
                            placeholder=" Search For City" aria-label="Search">
                    </div>
                </div>
                <div class="col-6">
                    <div class="searchHospital">
                        <input class="form-control form-custm me-2 text-black " type="search"
                            placeholder=" Search For Hospital" aria-label="Search">
                    </div>
                </div>
            </div>
        </div>
        {{-- Filter part open --}}
        <div class="col-4">
            <div class="row boxSd">
                <div class="col-12 ">
                    <div class="row justify-content-around ">
                        <div class="col-4  ">
                            <div class="heading  ">
                                <p class="fw-bold">Filters</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="heading2 text-primary ">
                                <p class="fw-bold">Clear All</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="scrbar border border-1 p-3" style="max-height: 110px; overflow: auto;">
                        <h5>Amenity</h5>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                    </div>

                </div>

                <div class="col-12">
                    <div class="nobar border border-1 p-3">
                        <h5>AVAILABILITY</h5>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>


                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Today</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Tomorrow</label>
                    </div>


                </div>

                <div class="col-12">
                    <div class="weekdays">
                        <div class="dayset">
                            <input type="radio" id="any" name="day" class="square-radio">
                            <label class="daybox px-4" for="any">Any</label>
                        </div>
                        <div class="dayset">
                            <input type="radio" id="mon" name="day" class="square-radio">
                            <label for="mon">M</label>
                        </div>
                        <div class="dayset">
                            <input type="radio" id="tue" name="day" class="square-radio">
                            <label for="tue">T</label>
                        </div>
                        <div class="dayset">
                            <input type="radio" id="wed" name="day" class="square-radio">
                            <label for="wed">W</label>
                        </div>
                        <div class="dayset">
                            <input type="radio" id="thu" name="day" class="square-radio">
                            <label for="thu">T</label>
                        </div>
                        <div class="dayset">
                            <input type="radio" id="fri" name="day" class="square-radio">
                            <label for="fri">F</label>
                        </div>
                        <div class="dayset">
                            <input type="radio" id="sat" name="day" class="square-radio">
                            <label for="sat">S</label>
                        </div>
                        <div class="dayset">
                            <input type="radio" id="sun" name="day" class="square-radio">
                            <label for="sun">S</label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="scrbar border border-1 p-3">
                        <h5>MODE OF PAYMENT</h5>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Filter part close --}}

        {{-- main content part open --}}

        <div class="col-8">
            <div class="row p-1">
                <div class="hspdetails border border-1 boxSd">
                    <div class="col-3 border border-1">
                        <div class="img">
                            <h5>img here</h5>

                        </div>

                    </div>
                    <div class="col-6">
                        <div class="description">
                            <h5>here write desricpition of hospital</h5>

                        </div>

                    </div>
                    <div class="col-3">
                        <div class="profileview">
                            <h5>here write review of the hospital</h5>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- main content part close --}}
    </div>
    {{-- parent row close --}}




</div>
</div>


@include('main.footer')