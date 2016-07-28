<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 21 14:12:48 2005" -->
<!-- isoreceived="20050921191248" -->
<!-- sent="Wed, 21 Sep 2005 12:12:28 -0700" -->
<!-- isosent="20050921191228" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[O-MPI users] problem running on a myrinet linux cluster" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F20142C8F1_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Date:</strong> 2005-09-21 14:12:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Jonathan Day: "[O-MPI users] Still working on MIPS64 port."</a>
<li><strong>Previous message:</strong> <a href="0156.php">Tim S. Woodall: "Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to get open-mpi working fine on a cluster with gige, but when
<br>
building and trying to run the Nasa Overflow
<br>
program on a cluster with Myrinet, it does not work.  The program starts
<br>
to run and then gives the following error :
<br>
<p>spawn: in job_state_callback(jobid = 1, state = 0xa)
<br>
spawn: in job_state_callback(jobid = 1, state = 0x9)
<br>
4 processes killed (possibly by Open MPI)
<br>
sess_dir_finalize: found proc session dir empty - deleting
<br>
sess_dir_finalize: job session dir not empty - leaving
<br>
Command exited with non-zero status 9
<br>
<p>I have attached the requested debugging info.
<br>
<p>Thanx,
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p>&nbsp;&lt;&lt;ompi-output.tar.gz&gt;&gt; 
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0157/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Jonathan Day: "[O-MPI users] Still working on MIPS64 port."</a>
<li><strong>Previous message:</strong> <a href="0156.php">Tim S. Woodall: "Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
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
