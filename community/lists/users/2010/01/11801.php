<?
$subject_val = "[OMPI users] shared memory (sm) module not working properly?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 17:47:41 2010" -->
<!-- isoreceived="20100115224741" -->
<!-- sent="Fri, 15 Jan 2010 15:47:16 -0700" -->
<!-- isosent="20100115224716" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="[OMPI users] shared memory (sm) module not working properly?" -->
<!-- id="dcf611bd1001151447t4ecfeeccgb460fb6f68de8ab9_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] shared memory (sm) module not working properly?<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 17:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11800.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>I am running a job on a 4 quadcore AMD Opteron. This machine has 16 cores,
<br>
which I can verify by looking at /proc/cpuinfo. However, when I run a job
<br>
with
<br>
<p>mpirun -np 16 -mca btl self,sm job
<br>
<p>I get this error:
<br>
<p>--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[56972,2],0]) is on host: rust
<br>
&nbsp;&nbsp;Process 2 ([[56972,1],0]) is on host: rust
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
<p>By adding the tcp btl I can run the job. I don't understand why openmpi
<br>
claims that a pair of processes can not reach each other, all processor
<br>
cores should have access to all memory after all. Do I need to set some
<br>
other btl limit?
<br>
<p>nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11800.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11802.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
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
