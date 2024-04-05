<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Adutha ilakku - {{ date('Y') }} EGS Pillay Group of Institution </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.min.css") }}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{ asset("/assets/css/line-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/owl.carousel.min.css") }}">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/assets/css/main.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("/assets/css/job-1.css") }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>



<style>



    @media screen and (max-width: 768px) {
                /* Apply different padding for devices with a maximum width of 768px (typically mobile devices) */
                .ufg-job-application-wrapper {
                    padding-top: 30px !important; /* Adjusted padding for mobile devices */
                }
            }


            .question-list {
                list-style-type: none;
                padding: 0;
            }

            .question-list li {
                margin-bottom: 20px;
            }

            .question-list li:before {
                content: "\2022"; /* Bullet point */
                color: #007bff;
                font-weight: bold;
                display: inline-block;
                width: 1em;
                margin-left: -1em;
            }

            .question {
                font-weight: bold;
            }

        .text-black{
             color: #000000!important;
            font-weight: 600 !important;
        }


        /* Form Container */
    .ufg-job-application-wrapper {
        padding-top: 150px; /* Adjust as needed */
        margin-bottom: 30px; /* Adjust as needed */
    }

    /* Select Input Styles */
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        font-size: 16px;
        background-color: #fff;
        background-image: linear-gradient(45deg, transparent 50%, #007bff 50%), linear-gradient(135deg, #007bff 50%, transparent 50%);
        background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
        background-size: 5px 5px, 5px 5px, 1px 1.5em;
        background-repeat: no-repeat;
        appearance: none; /* Hide default arrow */
    }

    /* Select Focus Styles */
    .form-group select:focus {
        border-color: #007bff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }


    /* Textarea styling */
    textarea.form-control {
        border-radius: 0;
        border: 1px solid #ced4da; /* Border color */
        padding: 0.375rem 0.75rem; /* Padding */
        font-size: 2rem; /* Font size */
        line-height: 1.5; /* Line height */
        color: #495057; /* Text color */
        background-color: #fff; /* Background color */
        background-clip: padding-box;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        resize: vertical; /* Allow vertical resizing */
    }

    /* Font styling for textarea */
    textarea.form-control {
        font-family: Arial, sans-serif; /* Specify font family */
    }

    /* Form Fields */
    .form-group {
        margin-bottom: 20px; /* Adjust as needed */
    }

    /* Label Styles */
    label {
        font-weight: bold;
    }

    /* Input Styles */
    input[type="text"],
    input[type="tel"],
    input[type="email"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
    }

    /* Button Styles */
    button[type="submit"] {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }



        /* CSS for Mobile Devices */
    @media (max-width: 768px) {
        .ufg-job-application-wrapper {
            margin-top: 50px; /* Adjust as needed */
        }
        .form-group {
            margin-bottom: 20px; /* Adjust as needed */
        }
        label {
            font-size: 16px; /* Adjust as needed */
            color: #333; /* Adjust as needed */
        }
        input[type="text"],
        input[type="tel"],
        select,
        textarea {
            font-size: 16px; /* Adjust as needed */
            padding: 10px; /* Adjust as needed */
        }
        button[type="submit"] {
            font-size: 18px; /* Adjust as needed */
            padding: 12px 20px; /* Adjust as needed */
        }
    }

    /* Add CSS for the auto-close functionality */
.alert-dismissible .btn-close {
    position: relative;
    top: -0.5rem;
}

.txt-danger {
    color: #721c24; /* Customize text color */
}

/* Optional: Adjust padding and margin */
.alert {
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
}

    </style>


</head>

<body>


    @yield('content')




    {{-- Script Files --}}

    <script src="{{ asset("/assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("/assets/js/popper.min.js") }}"></script>
    <script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/assets/js/jquery.validate.min.js") }}"></script>
    @turnstileScripts()
    <script src="{{ asset("/assets/js/custom.js") }}"></script>
    <script>
        // Auto-close the error alert after 5 seconds
        setTimeout(function() {
            var errorAlert = document.getElementById('errorAlert');
            if (errorAlert) {
                errorAlert.remove();
            }
        }, 5000);
    </script>

</body>

</html>
