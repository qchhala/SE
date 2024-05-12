<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics Survey</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Statistics Survey</h1>

        <form id="survey-form" method="POST" action="process_survey.php">

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="1" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <select id="occupation" name="occupation" required>
                    <option value="">Select</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="engineer">Engineer</option>
                    <option value="doctor">Doctor</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="socialStatus">Social Status:</label>
                <select id="socialStatus" name="socialStatus" required>
                    <option value="">Select</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>