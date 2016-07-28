<?
$subject_val = "[OMPI users] mpirun on 8-way node with rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 13:45:17 2008" -->
<!-- isoreceived="20080803174517" -->
<!-- sent="Sun, 03 Aug 2008 13:45:11 -0400" -->
<!-- isosent="20080803174511" -->
<!-- name="Pete Schmitt" -->
<!-- email="peter.schmitt_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun on 8-way node with rsh" -->
<!-- id="4895EEA7.1010209_at_dartmouth.edu" -->
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
<strong>Subject:</strong> [OMPI users] mpirun on 8-way node with rsh<br>
<strong>From:</strong> Pete Schmitt (<em>peter.schmitt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-03 13:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>Previous message:</strong> <a href="6253.php">Mark Borgerding: "[OMPI users] MPI adopt-a-group: a question and status report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>Reply:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use the following:  mpirun -machinefile machine.file -np 8 ./mpi-program
<br>
and the machine file has the following:
<br>
<p>t01
<br>
t01
<br>
t01
<br>
t01
<br>
t01
<br>
t01
<br>
t01
<br>
t01
<br>
<p>I get the following error:
<br>
<p>rm_12992: (0.632812) net_send: could not write to fd=4, errno = 32
<br>
rm_13053: (0.421875) net_send: could not write to fd=4, errno = 32
<br>
rm_l_3_13050: (0.636719) net_send: could not write to fd=5, errno = 32
<br>
rm_13114: (0.210938) net_send: could not write to fd=4, errno = 32
<br>
rm_12870: (1.066406) net_send: could not write to fd=4, errno = 32
<br>
rm_12931: (0.855469) net_send: could not write to fd=4, errno = 32
<br>
rm_l_4_13111: (0.425781) net_send: could not write to fd=5, errno = 32
<br>
rm_l_1_12929: (1.070312) net_send: could not write to fd=5, errno = 32
<br>
rm_l_2_12989: (0.859375) net_send: could not write to fd=5, errno = 32
<br>
rm_l_5_13172: (0.214844) net_send: could not write to fd=5, errno = 32
<br>
p0_12866: (5.285156) net_send: could not write to fd=4, errno = 32
<br>
<p>If I use np=6 or less, it works fine.   It also works with 8 if the
<br>
machine.file just contains t01:8
<br>
Since we want to submit this to a torque/moab cluster, it's not possible
<br>
to get the latter format.
<br>
<p>The OS is a 64b RH5.2
<br>
<p><p><pre>
-- 
Pete Schmitt
Technical Director:
  Discovery Cluster / Computational Genetics Lab
URL: <a href="http://discovery.dartmouth.edu">http://discovery.dartmouth.edu</a>
179M Berry Baker Library, HB 6224
Dartmouth College
Hanover, NH 03755
Dart: 603-646-8109
DHMC: 603-653-3598
Fax:  603-646-1042
Cell: 603-252-2452
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>Previous message:</strong> <a href="6253.php">Mark Borgerding: "[OMPI users] MPI adopt-a-group: a question and status report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>Reply:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
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
