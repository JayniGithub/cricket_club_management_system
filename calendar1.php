<html>
    <head>
        <title>abc</title>
        <style> 
        </style>
        <link rel="stylesheet" href="css/calendar.css">
        <link rel="stylesheet" href="css/evo-calendar.min.css">
        <link rel="stylesheet" href="css/evo-calendar.midnight-blue.min.css">
    </head>
    <body>
        <h1 class="top">
            Event Calendar
        </h1>
        <br>
    <div class="hero">

        <div id="calendar"></div>

    </div>


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="js/evo-calendar.min.js"></script>

        <script>

            $(document).ready(function() {
                $('#calendar').evoCalendar({

                  calendarEvents: 'new.php' 
                    
                })
            })

        </script>

    </body>
</html>