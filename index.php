<?php

class kid {
	public $firstname;
	public $lastname = "Linder";  // obviously because Team Linder is the best!
	public $age;
	public $birthday;
	public $grade;
	public $gender;
	public function __construct($firstname,$age,$birthday,$grade,$gender) {
		$this->firstname = $firstname;
		$this->age = $age;
		$this->birthday=$birthday;
		$this->grade = $grade;
		$this->gender = $gender;

		
	}
}

class task {
	public $task_id;
	public $taskName;
	public $taskDesc;
	public $taskFreq; // task recurrence: daily, once weekly, monthly, one-time
	public $taskPoints; //value of a completed task; usually 50, 100, or 200 points
	public $taskCat; // Categories include: Hygiene, Home, School, Reading, Finance, and Health
	public $taskAssignee;
	public $taskIsActive;
	public $taskIsCurrent;
}
// addKid is a form that allows a parent to add their child as a user. 
function addKid() {
	
}

//addTask allows the parent to create and add tasks to their child(ren)'s checklist.
function addTask(){
	
}

//showProgress displays the current points earned and badges earned for a parent's children.
function showProgress(){
	
}

//showChecklist displays the current active checklist items and their respective point values.
function showChecklist(){
	echo "<p>Hello, ".$this->firstname."! Today is ".getDay().", and these are the things that you need to do today.</p>";
do echo "<div class="checklist"><input type="checkbox"/><p class="taskName">".$taskName()."</p></div>";
}

//completeTask allows a child to click and confirm tht a task is done.
function completeTask(){
	
	alert"Are you sure you've completed this task?";
	$myPoints = $myPoints + $this->taskValue;
	echo "Congratulations! You\'ve earned ".$this->taskValue." points. You have now earned ".$myPoints." total points. Way to go!";
}

//showCompleted displays a list of completed tasks.
function showCompleted() {
	
	
}

//showPoints displays the total number of points earned so far.
function showPoints() {
	echo "You have now earned ".$myPoints." total points. Way to go!";
	
}

//getDay returns the current day of the week.
function getDay() {
	
}
?>