<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 12:59:06 2005" -->
<!-- isoreceived="20051121175906" -->
<!-- sent="Mon, 21 Nov 2005 09:58:38 -0800" -->
<!-- isosent="20051121175838" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[O-MPI users] problem with overflow 1.8ab code using GM" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F20142CA79_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Date:</strong> 2005-11-21 12:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0376.php">Borenstein, Bernard S: "[O-MPI users] another overflow 1.8ab problem"</a>
<li><strong>Previous message:</strong> <a href="0374.php">Brian Barrett: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0377.php">Galen M. Shipman: "Re: [O-MPI users] problem with overflow 1.8ab code using GM"</a>
<li><strong>Reply:</strong> <a href="0377.php">Galen M. Shipman: "Re: [O-MPI users] problem with overflow 1.8ab code using GM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Things have improved alot since I ran the code using the earlier betas,
<br>
but it still fails near the end of the run.
<br>
<p><p>&nbsp;&lt;&lt;ompi-output.tar.gz&gt;&gt; 
<br>
<p>The error messages are :
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOR GRID   4  AT STEP   466   L2NORM =  0.74601987E-09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOR GRID   5  AT STEP   466   L2NORM =  0.86085437E-08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOR GRID   6  AT STEP   466   L2NORM =  0.17810240E-07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOR GRID   7  AT STEP   466   L2NORM =  0.14586522E-07
<br>
[v057:31700] [mpool_gm_module.c:100] error(8) registering gm memory
<br>
[v057:31700] *** An error occurred in MPI_Alloc_mem
<br>
[v057:31700] *** on communicator MPI_COMM_WORLD
<br>
[v057:31700] *** MPI_ERR_NO_MEM: out of memory
<br>
[v057:31700] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[v120:05052] spawn: in job_state_callback(jobid = 1, state = 0xa)
<br>
[v120:05052] spawn: in job_state_callback(jobid = 1, state = 0x9)
<br>
20 processes killed (possibly by Open MPI)
<br>
[v120:05052] sess_dir_finalize: found proc session dir empty - deleting
<br>
[v120:05052] sess_dir_finalize: found job session dir empty - deleting
<br>
[v120:05052] sess_dir_finalize: found univ session dir empty - deleting
<br>
[v120:05052] sess_dir_finalize: found top session dir empty - deleting
<br>
Command exited with non-zero status 9
<br>
0.06user 0.18system 10:32.68elapsed 0%CPU (0avgtext+0avgdata
<br>
0maxresident)k
<br>
0inputs+0outputs (18major+782minor)pagefaults 0swaps
<br>
<p>Hope you can help me out with this one.
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0375/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0375/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0376.php">Borenstein, Bernard S: "[O-MPI users] another overflow 1.8ab problem"</a>
<li><strong>Previous message:</strong> <a href="0374.php">Brian Barrett: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0377.php">Galen M. Shipman: "Re: [O-MPI users] problem with overflow 1.8ab code using GM"</a>
<li><strong>Reply:</strong> <a href="0377.php">Galen M. Shipman: "Re: [O-MPI users] problem with overflow 1.8ab code using GM"</a>
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
