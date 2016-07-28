<?
$subject_val = "[OMPI users] Open MPI task scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 20 13:49:17 2010" -->
<!-- isoreceived="20100620174917" -->
<!-- sent="Sun, 20 Jun 2010 11:49:12 -0600" -->
<!-- isosent="20100620174912" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI task scheduler" -->
<!-- id="SNT134-w516C85E49267106B14CF13CBC20_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Open MPI task scheduler<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-20 13:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13346.php">Stephan Hackstedt: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all: 
<br>
I need to design a task scheduler (not PBS job scheduler) on Open MPI cluster. 
<br>
I need to parallelize an algorithm so that a big problem is decomposed into small tasks, which can be distributed to other worker nodes by the Scheduler and after being solved, the results of these tasks are returned to the manager node with the Scheduler, which will distribute more tasks on the base of the collected results.  
<br>
I need to use C++ to design the scheduler. 
<br>
I have searched online and I cannot find any scheduler available for this purpose. 
<br>
Any help is appreciated. 
<br>
thanks 
<br>
Jack 
<br>
June 19  2010  		 	   		  
<br>
_________________________________________________________________
<br>
Hotmail has tools for the New Busy. Search, chat and e-mail from your inbox.
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13346.php">Stephan Hackstedt: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13348.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Reply:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
