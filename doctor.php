<?php
    session_start();

    session_destroy();
?>

    <!DOCTYPE html>
    <html lang="en">
    <section class="curved-background">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css?version=0.0.1" type="text/css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
            <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
            <title>Doctor's View</title>
        </head>

        <body>
            <section>
                <div class="flex-container-doctor">
                    <div class="flex-container-doctor-child">
                        <img id="doc-ava" src="https://moonbui.github.io/Protoype/images/student-management-avatar-people-svgrepo-com.svg">
                    </div>
                    <div class="flex-container-doctor-child">
                        <h1> Good day, Doctor!</h1>
                    </div>
                </div>
            </section>

            <section>
                <div class="flex-docItems">
                    <div class="doc-items hvr-grow">
                        <button>
                        <a href="schedule.html" target="_blank">
                            <img class="doc-icons" src="https://moonbui.github.io/Protoype/images/calendar-alt-svgrepo-com.svg">
                            <h3>Schedule</h3>
                        </a>
                    </button>
                    </div>
                    <div class="doc-items hvr-grow">
                        <button>
                        <a href="#doc-headline">
                            <img class="doc-icons" src="https://moonbui.github.io/Protoype/images/stethoscope-svgrepo-com.svg">
                            <h3>Today's Procedures</h3>
                        </a>
                    </button>
                    </div>
                    <div class="doc-items hvr-grow">
                        <button>
                        <a href="payroll.php" target="_blank">
                            <img class="doc-icons" src="https://moonbui.github.io/Protoype/images/receipt-search-svgrepo-com.svg">
                            <h3>Payroll</h3>
                        </a>
                    </button>
                    </div>
                </div>
            </section>

            <section>
                <h2 id="doc-headline">Today's Schedule</h2>

                <div class="patient-container">
                    <div class="patient-box">
                        <div class="patient-items ava-box">
                            <img class="patient-box-ava" src="https://moonbui.github.io/Protoype/images/student-management-avatar-people-svgrepo-com.svg">
                        </div>
                        <div class="patient-items">
                            <h2>Name: Patient A</h2>
                            <h2>Age: 24</h2>
                            <h2>Gender: Female</h2>
                            <h2>Appointment time: 9:30 P.M</h2>
                            <h2>Procedure: Dental checkup</h2>
                        </div>
                    </div>

                    <div class="patient-box">
                        <div class="patient-items ava-box">
                            <img class="patient-box-ava" src="https://moonbui.github.io/Protoype/images/student-management-avatar-people-svgrepo-com.svg">
                        </div>
                        <div class="patient-items">
                            <h2>Name: Patient B</h2>
                            <h2>Age: 24</h2>
                            <h2>Gender: Male</h2>
                            <h2>Appointment time: 9:30 P.M</h2>
                            <h2>Procedure: Dental checkup</h2>
                        </div>
                    </div>
                </div>
            </section>

            <div id="demo-desktop-month-view"></div>
        </body>
    </section>

    </html>