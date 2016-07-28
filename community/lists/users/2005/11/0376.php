<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 13:34:04 2005" -->
<!-- isoreceived="20051121183404" -->
<!-- sent="Mon, 21 Nov 2005 10:33:39 -0800" -->
<!-- isosent="20051121183339" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[O-MPI users] another overflow 1.8ab problem" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F20142CA7A_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 13:33:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0377.php">Galen M. Shipman: "Re: [O-MPI users] problem with overflow 1.8ab code using GM"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Borenstein, Bernard S: "[O-MPI users] problem with overflow 1.8ab code using GM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just tried to run a very large case on another cluster with TCP.  It
<br>
cranks away for quite awhile then I get this message :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOR GRID  78  AT STEP   733   L2NORM =  0.30385345E-03^M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOR GRID  79  AT STEP   733   L2NORM =  0.26182533E+00^M
<br>
[hsd660:02490] spawn: in job_state_callback(jobid = 1, state = 0xa)
<br>
[hsd660:02490] spawn: in job_state_callback(jobid = 1, state = 0x9)
<br>
32 processes killed (possibly by Open MPI)
<br>
[hsd660:02490] sess_dir_finalize: found proc session dir empty -
<br>
deleting
<br>
[hsd660:02490] sess_dir_finalize: found job session dir empty - deleting
<br>
[hsd660:02490] sess_dir_finalize: found univ session dir empty -
<br>
deleting
<br>
[hsd660:02490] sess_dir_finalize: found top session dir empty - deleting
<br>
Command exited with non-zero status 9
<br>
0.39user 2.44system 56:42.65elapsed 0%CPU (0avgtext+0avgdata
<br>
0maxresident)k
<br>
0inputs+0outputs (3major+1012minor)pagefaults 0swaps
<br>
<p>How can I get more output to try and determine where the problem is.
<br>
<p>Thanx,
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0377.php">Galen M. Shipman: "Re: [O-MPI users] problem with overflow 1.8ab code using GM"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Borenstein, Bernard S: "[O-MPI users] problem with overflow 1.8ab code using GM"</a>
<!-- nextthread="start" -->
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
