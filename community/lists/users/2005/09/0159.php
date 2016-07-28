<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 28 15:47:40 2005" -->
<!-- isoreceived="20050928204740" -->
<!-- sent="Wed, 28 Sep 2005 13:46:58 -0700" -->
<!-- isosent="20050928204658" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[O-MPI users] more information on my overflow problem" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F20142C930_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Date:</strong> 2005-09-28 15:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0160.php">Brian Barrett: "Re: [O-MPI users] more information on my overflow problem"</a>
<li><strong>Previous message:</strong> <a href="0158.php">Jonathan Day: "[O-MPI users] Still working on MIPS64 port."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0160.php">Brian Barrett: "Re: [O-MPI users] more information on my overflow problem"</a>
<li><strong>Reply:</strong> <a href="0160.php">Brian Barrett: "Re: [O-MPI users] more information on my overflow problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I posted an issue with the Nasa Overflow 1.8 code and have traced it
<br>
further to a program failure in the malloc
<br>
areas of the code (data in these areas gets corrupted).  Overflow is
<br>
mostly fortran, but since it is an old program, 
<br>
it uses some c routines to do dynamic memory allocation.  I'm still
<br>
tracing down the problem, but could you enlighten me as to
<br>
how OPENMPI does the malloc_hooks and intercepts memory allocation calls
<br>
to run on a linux myrinet cluster.
<br>
<p>Is there any easy way to debug what is happening?? I'm using brute force
<br>
to track it down.
<br>
<p>Thanx,
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0160.php">Brian Barrett: "Re: [O-MPI users] more information on my overflow problem"</a>
<li><strong>Previous message:</strong> <a href="0158.php">Jonathan Day: "[O-MPI users] Still working on MIPS64 port."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0160.php">Brian Barrett: "Re: [O-MPI users] more information on my overflow problem"</a>
<li><strong>Reply:</strong> <a href="0160.php">Brian Barrett: "Re: [O-MPI users] more information on my overflow problem"</a>
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
