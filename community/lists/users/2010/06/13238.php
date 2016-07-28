<?
$subject_val = "[OMPI users] ompi-restart, ompi-ps problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 04:48:30 2010" -->
<!-- isoreceived="20100607084830" -->
<!-- sent="Mon, 7 Jun 2010 10:48:24 +0200" -->
<!-- isosent="20100607084824" -->
<!-- name="Nguyen Kim Son" -->
<!-- email="nguyenkims_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-restart, ompi-ps problem" -->
<!-- id="AANLkTimhDRXjPkXUahL7c3_fCAsr6YuuBFXd7eHIHz2q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] ompi-restart, ompi-ps problem<br>
<strong>From:</strong> Nguyen Kim Son (<em>nguyenkims_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 04:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13239.php">Nguyen Toan: "[OMPI users] ompi-restart failed"</a>
<li><strong>Previous message:</strong> <a href="13237.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13675.php">Josh Hursey: "Re: [OMPI users] ompi-restart, ompi-ps problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13675.php">Josh Hursey: "Re: [OMPI users] ompi-restart, ompi-ps problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'n trying to get functions like orte-checkpoint, orte-restart,... works but
<br>
there are some errors that I don't have any clue about.
<br>
<p>Blcr (0.8.2) works fine apparently and  I have installed openmpi 1.4.2 from
<br>
source with option blcr.
<br>
The command
<br>
mpirun -np 4  -am ft-enable-cr ./checkpoint_test
<br>
seemed OK but
<br>
orte-checkpoint --term PID_of_checkpoint_test ( obtaining after ps -ef |
<br>
grep mpirun )
<br>
does not return and shows nothing like errors!
<br>
<p>Then, I checked with
<br>
ompi-ps
<br>
this time, I obtain:
<br>
oob-tcp: Communication retries exceeded.  Can not communicate with peer
<br>
<p>Does anyone has the same problem?
<br>
Any idea is welcomed!
<br>
Thanks,
<br>
Son.
<br>
<p><p><pre>
-- 
---------------------------------------------------------
Son NGUYEN KIM
Antibes 06600
Tel: 06 48 28 37 47
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13239.php">Nguyen Toan: "[OMPI users] ompi-restart failed"</a>
<li><strong>Previous message:</strong> <a href="13237.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13675.php">Josh Hursey: "Re: [OMPI users] ompi-restart, ompi-ps problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13675.php">Josh Hursey: "Re: [OMPI users] ompi-restart, ompi-ps problem"</a>
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
