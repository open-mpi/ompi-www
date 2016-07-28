<?
$subject_val = "[OMPI users] Dynamically throttle/scale processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 18:22:14 2016" -->
<!-- isoreceived="20160317222214" -->
<!-- sent="Thu, 17 Mar 2016 22:22:11 +0000" -->
<!-- isosent="20160317222211" -->
<!-- name="Andrus, Brian Contractor" -->
<!-- email="bdandrus_at_[hidden]" -->
<!-- subject="[OMPI users] Dynamically throttle/scale processes" -->
<!-- id="ADC981242279AD408816CB7141A2789DD79FB95D_at_GROWLER.ern.nps.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Dynamically throttle/scale processes<br>
<strong>From:</strong> Andrus, Brian Contractor (<em>bdandrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 18:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28745.php">Ralph Castain: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Previous message:</strong> <a href="28743.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28745.php">Ralph Castain: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Reply:</strong> <a href="28745.php">Ralph Castain: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I have an mpi-based program that has a master process that acts as a 'traffic cop' in that it hands out work to child processes.
<br>
<p>I want to be able to dynamically throttle how many child processes are in use at any given time.
<br>
<p>For instance, if I start it with &quot;mpirun -n 512&quot; I could send a signal to tell it to only use 256 of them for a bit and then tell it to scale back up. The upper limit being the number of processes mpirun was launched with.
<br>
<p><p>Has anyone done anything like this? Maybe a better way to do it?
<br>
Basically my program is crunching through a large text file, examining each line for various things.
<br>
<p>Thanks in advance for any insight,
<br>
<p>Brian Andrus
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28744/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28745.php">Ralph Castain: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Previous message:</strong> <a href="28743.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28745.php">Ralph Castain: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Reply:</strong> <a href="28745.php">Ralph Castain: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
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
