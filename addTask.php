<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add a HEROKids Task</title>
</head>

<body>

	<h2>Add a HEROKids Task</h2>

	<form action="insert_task.php" method="post">
    <p>
        <label for="taskName">Task Name:</label>
        <input type="text" name="taskName" id="taskName">
    </p>
    <p>
        <label for="taskDesc">Description:</label>
        <input type="text" name="taskDesc" id="taskDesc">
    </p>
    <p>
        <label for="taskValue">Point Value:</label>
		<input type="radio" value="50" name="taskValue">50 Points
		<input type="radio" value=100 name="taskValue">100 Points
		<input type="radio" value=200 name="taskValue">200 Points<br/ >
		Other: <input type="number" name="taskValue">(Specify)
    </p>
	<p>
        <label for="taskAssignee">Task Assigned to:</label>
        <input type="checkbox" name="taskAssignee" id="taskAssignee" value="brooke">Brooke
		<input type="checkbox" name="taskAssignee" id="taskAssignee" value="sydney">Sydney
    </p>
	<p>
        <label for="taskFreq">Frequency</label>
		<input type="radio" value="Daily" name="taskFreq">Daily
		<input type="radio" value="Weekly" name="taskFreq">Weekly
		<input type="radio" value="Monthly" name="taskFreq">Monthly
		<input type="radio" value="Once" name="taskFreq">One Time
    </p>
	<p>
        <label for="taskCat">Category</label>
        <select name="taskCat">
		<option value="Home">Home</option>
		<option value="Hygiene">Hygiene</option>
		<option value="Health">Health</option>
		<option value="Schoolwork">Schoolwork</option>
		<option value="Reading">Reading</option>
		</select>
    </p>
	<p>
        <input type="hidden" name="taskIsActive" id="taskIsActive" value="1">
		<input type="hidden" name="taskIsCurrent" id="taskIsCurrent" value="1">
		<input type="hidden" name="taskExpires" id="taskExpires" value="2099-01-01">
    </p>
    <input type="submit" value="Save Task">
</form>
</body>
</html>