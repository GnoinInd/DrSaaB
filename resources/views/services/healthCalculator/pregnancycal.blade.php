@include('main.header')
<div class="container ">
    <div class="row">
        <div class="col-8">
            <div class="bmicard">
                <div class="bmicard-hadder top fw-bold text-center ">
                    <p>PREGNANCY DUE DATE</p>
                </div>
                <div class="bmicard-img">
                    <img src="https://img.freepik.com/premium-vector/pregnancy-medical-appointment-pregnant-happy-beautiful-young-woman-makes-appointment-with-doctor-using-calendar-flat-cartoon-vector-illustration-woman-awaiting-birth-child_529896-213.jpg?size=626&ext=jpg&uid=R119099260&ga=GA1.1.222653989.1688635507&semt=ais"
                        alt="bmichart" class="img-fluid">
                </div>


                {{-- pregnancy calculator --}}
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="pregnancycal">

                                <settings>
                                    <section id="head">
                                        <span>Calculate due date</span>
                                        <span id="closeSettings" class="icon-arrow-left2"></span>
                                    </section>

                                    <section id="main">
                                        <div>
                                            <label for="inputDate">
                                                <span id="inputDisplay"></span>
                                            </label>
                                            <input type="date" id="inputDate">
                                            <span class="date-label">Last Menstural Period</span>
                                            <span class="date-desc">
                                                Day one of your last menstrual period
                                            </span>
                                        </div>

                                        <hr>

                                        <div>
                                            <label for="targetDate">
                                                <span id="targetDisplay"></span>
                                            </label>
                                            <input type="date" id="targetDate">
                                            <span class="date-label">Future Date</span>
                                            <span class="date-desc">
                                                change to calculate for a future date instead of today.
                                            </span>
                                        </div>
                                    </section>
                                </settings>

                                <page>
                                    <section id="head">
                                        <span id="openSettings" class="icon-calendar"></span>
                                    </section>

                                    <section id="main">
                                        <div id="output">
                                            <span id="outputType">WEEK</span>
                                            <span id="outputMain"></span>
                                            <span id="outputSub"></span>
                                        </div>
                                    </section>

                                    <section id="footer">
                                        <div id="progress">
                                            <div class="group">
                                                <span id="dueDateLabel">DUE DATE</span>
                                                <span id="dueDate"></span>
                                            </div>
                                            <div id="progressBg"></div>
                                            <div id="progressFg"></div>
                                        </div>
                                    </section>
                                </page>

                                <script src="main.js"></script>

                            </div>
                        </div>
                    </div>
                </div>


                {{-- pregnancy calculator close --}}



                <div class="intro py-5">
                    <h5>Pregnancy Due Date Calculator</h5>
                    <ul>
                        <li>Pregnancy Due Date Calculator can help you work out when you might expect your baby to
                            arrive.</li>
                        <li>Pregnancy Due Date Calculator estimates the delivery date of a pregnant woman based on her
                            Last Menstrual Period (LMP),
                            ultrasound, conception date, or IVF transfer date.</li>
                        <li>When is your baby due? Use this pregnancy calculator to find your due date based on the date
                            of your last menstrual
                            period, conception date, IVF three-day or five-day transfer date, or date of your last
                            ultrasound.</li>
                    </ul>

                    <h5>Steps To Calculate Pregnancy Due Date</h5>
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
                                src="https://images.drlogy.com/assets/uploads/img/admin/health_blog/editor-img/pregnancy-due-date-chart-median-value-of-birth-drlogy-1.webp"
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