@include('main.header')
<div class="container ">
    <div class="row">
        <div class="col-8">
            <div class="bmicard">
                <div class="bmicard-hadder top fw-bold text-center ">
                    <p>BODY FAT CALCULATOR</p>
                </div>
                <div class="bmicard-img ">
                    <img src="https://img.freepik.com/premium-vector/human-body-composition-infographic-diagram-silhouette-percentage-proportions_206049-2242.jpg?size=626&ext=jpg&uid=R119099260&ga=GA1.1.222653989.1688635507&semt=ais"
                        alt="bmichart" class="img-fluid w-100%">
                    <img src="https://img.freepik.com/free-vector/fitness-exercise-progress-infographic-design-elements-set-heart-rate-strength-slimness-man-silhouette-isolated-vector-illustration_98292-3901.jpg?size=626&ext=jpg&uid=R119099260&ga=GA1.1.222653989.1688635507&semt=ais"
                        alt="bmichart" class="img-fluid w-100%">
                </div>
                <div class="bmicalculator">

                    <h3><b>B</b>ody <b>M</b>ass <b>I</b>ndex Calculator</h3>
                    <form class="form" id="form" onsubmit="return validateForm()">
                        <div class="row-one">
                            <input type="text" class="text-input" id="age" autocomplete="off" required />
                            <p class="text">Age</p>
                            <label class="container">
                                <input type="radio" name="radio" id="f">
                                <p class="text">Female</p>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                <input type="radio" name="radio" id="m">
                                <p class="text">Male</p>
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="row-two">
                            <input type="text" class="text-input" id="height" autocomplete="off" required>
                            <p class="text">Height (cm)</p>
                            <input type="text" class="text-input" id="weight" autocomplete="off" required>
                            <p class="text">Weight (kg)</p>
                        </div>
                        <button type="button" id="submit">Submit</button>
                    </form>
                </div>

                <div class="intro py-5">
                    <h5>What is Body Fat?</h5>
                    <ul>
                        <li>Body composition or Body Fat is the amount of fat you have compared to lean tissue (muscles,
                            bones, body water, organs),
                            etc.</li>
                        <li>BMI Calculator.</li>
                        <li>BMI is the main indicator used to measure the index of obesity.</li>
                    </ul>

                    <h5>Steps to Use BMI Calculator</h5>
                    <ol>
                        <li>Enter Your Age & Select Your Gender.</li>
                        <li>Put your weight and height using standard or metric measures.</li>
                        <li>Compute BMI and your BMI will appear below.</li>
                        <li>To calculate BMI, multiply weight in pounds by 703, divide by height in inches, and then
                            divide again by height in
                            inches or you can divide weight in kilograms by height in meters squared.</li>
                    </ol>
                    <h5>Healthy BMI Range</h5>
                    <p>Here are Healthy BMI Range Tables are given to calculate Body Mass Index (BMI) using BMI
                        Calculator.</p>

                    <div class="bmitable">
                        <table class="table border border-1">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    {{-- <th scope="col">First</th> --}}
                                    <th scope="col">BMI (Kg/m²)</th>
                                    <th scope="col">Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <th scope="row">1</th> --}}
                                    {{-- <td>Mark</td> --}}
                                    <td>Less than 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    {{-- <th scope="row">2</th> --}}
                                    {{-- <td>Jacob</td> --}}
                                    <td>Between 18.5 - 25.0</td>
                                    <td>Normal Weight</td>
                                </tr>
                                <tr>
                                    {{-- <th scope="row">3</th> --}}
                                    <td>Between 25.0 - 30.0</td>
                                    <td>Over Weight</td>
                                </tr>
                                <tr>
                                    {{-- <th scope="row">3</th> --}}
                                    <td>Between 30.0 - 35.0</td>
                                    <td>Class 1 Obesity</td>
                                </tr>
                                <tr>
                                    {{-- <th scope="row">3</th> --}}
                                    <td>Between 35.0 - 40.0</td>
                                    <td>Class 2 Obesity</td>
                                </tr>
                                <tr>
                                    {{-- <th scope="row">3</th> --}}
                                    <td>40.0 or over</td>
                                    <td>Morbid Obesity or Class 3 Obesity</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="bmitemp">
                            <img class="img-fluid"
                                src="https://images.drlogy.com/assets/uploads/img/admin/health_blog/editor-img/bmi-normal-range-drlogy-2.webp"
                                alt="bmitable_photo">
                        </div>
                    </div>



                </div>







            </div>
        </div>



        <div class="col-4">
            <div class="healthcalculator">
                <div class="healthcalculator-header top fw-bold text-center">
                    <p>HEALTH CALCULATOR</p>
                </div>
                <div class="bmicallink">
                    <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/bmi.webp"
                        class="card-img-top img-fluid" alt="...">
                </div>
                <div class="pregnancycallink py-1">
                    <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/pregnancy-due-date.webp"
                        class="card-img-top img-fluid" alt="...">
                </div>

                <div class="bodyfatcallink py-1">
                    <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/body-fat.webp"
                        class="card-img-top img-fluid" alt="...">
                </div>


                <div class="bloodsugercallink py-1">
                    <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/blood%20sugar%20converter.webp"
                        class="card-img-top" alt="...">
                </div>




            </div>
        </div>



    </div>
</div>







@include('main.footer')