<?php 
class Patient_request {
var $request_id;
function getRequest_id() {
return $this->_request_id;
 }
function setRequest_id($request_id) {
$this->_request_id=$request_id;
 }
var $patient_id;
function getPatient_id() {
return $this->_patient_id;
 }
function setPatient_id($patient_id) {
$this->_patient_id=$patient_id;
 }
var $schedule_id;
function getSchedule_id() {
return $this->_schedule_id;
 }
function setSchedule_id($schedule_id) {
$this->_schedule_id=$schedule_id;
 }
var $problem_history;
function getProblem_history() {
return $this->_problem_history;
 }
function setProblem_history($problem_history) {
$this->_problem_history=$problem_history;
 }
var $planned_date_consultation;
function getPlanned_date_consultation() {
return $this->_planned_date_consultation;
 }
function setPlanned_date_consultation($planned_date_consultation) {
$this->_planned_date_consultation=$planned_date_consultation;
 }
var $actual_date_of_consultation;
function getActual_date_of_consultation() {
return $this->_actual_date_of_consultation;
 }
function setActual_date_of_consultation($actual_date_of_consultation) {
$this->_actual_date_of_consultation=$actual_date_of_consultation;
 }
var $time_of_consultation;
function getTime_of_consultation() {
return $this->_time_of_consultation;
 }
function setTime_of_consultation($time_of_consultation) {
$this->_time_of_consultation=$time_of_consultation;
 }
var $request_status;
function getRequest_status() {
return $this->_request_status;
 }
function setRequest_status($request_status) {
$this->_request_status=$request_status;
 }
var $status_change_date;
function getStatus_change_date() {
return $this->_status_change_date;
 }
function setStatus_change_date($status_change_date) {
$this->_status_change_date=$status_change_date;
 }
}
?>