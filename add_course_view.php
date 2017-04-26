<html>
    <head>
        <!--<header><font size = 32>Add Assignment</font></header>-->


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        <link rel="stylesheet" href="add_assignment_view_stylesheet.css">
    </head>
<body>
<div id = "container" class="card-panel hoverable">
    <h1>Add Course</h1>
    <!-- create a form for modifiable assignment info -->
    <form class = 'form' action = "add_course.php" method = "post">
            <tr>
                <td><input type="text" name="courseName" placeholder="Course Name" id = "courseName"></td>
            </tr>

            <tr>
                <div class = time_container>
                    <div class = "start_time">Start Time:
                        <input type = "time" name = "start_time" id = "start_time" step="1">
                    </div>
                    <div class = "end_time">End Time:
                        <input type = "time" name = "end_time" id ="end_time" step="1" >
                    </div>
                </div>
            </tr>
            <tr>
                <td>
                    <input type="text" name = "MeetingPlace" placeholder= "Meeting Place" id = "MeetingPlace">
                </td>
            </tr>
            <!--<tr>
                <td>
                    This is where we will select a "roster" to send this too
                </td>
            </tr>-->
            <tr>
                <td>
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" >Next Step</button>
                    <button class="btn waves-effect grey waves-light" id="cancel_button" formaction="/EZPlanR_1.0.2/teacher_base_view.php">Cancel</button>

                </td>
            </tr>
    </form>
</div>
<div id = "footer">
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>