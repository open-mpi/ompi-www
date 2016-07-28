<?
$subject_val = "Re: [OMPI users] MPI-IO problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 09:16:00 2008" -->
<!-- isoreceived="20080131141600" -->
<!-- sent="Thu, 31 Jan 2008 08:15:51 -0600" -->
<!-- isosent="20080131141551" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO problems" -->
<!-- id="20080131141550.GL19342_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="820177.35446.qm_at_web50507.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO problems<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 09:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4937.php">Bruno Santos: "[OMPI users] Doubts regarding mpi configuration"</a>
<li><strong>Previous message:</strong> <a href="4935.php">Robert Latham: "Re: [OMPI users] problems with flash"</a>
<li><strong>In reply to:</strong> <a href="4898.php">R C: "[OMPI users] MPI-IO problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 28, 2008 at 03:26:14PM -0800, R C wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  I compiled a molecular dynamics program DLPOLY3.09 on an AMD64 cluster running
</span><br>
<span class="quotelev1">&gt; openmpi 1.2.4 with Portland group compilers.The program seems to run alright,
</span><br>
<span class="quotelev1">&gt; however, each processor outputs:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ADIOI_GEN_DELETE (line 22): **io No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was suggested that it was an issue with MPI-IO. I would appreciate any help
</span><br>
<span class="quotelev1">&gt; in fixing the problem.
</span><br>
<p>It's ok.  Your program tried to delete a file (perhaps a log file or
<br>
something that contains a single run's data), and when the file did
<br>
not exist, printed this message.
<br>
<p>One way to avoid seeing this message is to ignore errors from
<br>
MPI_File_delete.  Looks like DLPOLY3.09 is being good about checking
<br>
error codes from MPI routines, though, and I'd hate to discourage that
<br>
good behavior.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4937.php">Bruno Santos: "[OMPI users] Doubts regarding mpi configuration"</a>
<li><strong>Previous message:</strong> <a href="4935.php">Robert Latham: "Re: [OMPI users] problems with flash"</a>
<li><strong>In reply to:</strong> <a href="4898.php">R C: "[OMPI users] MPI-IO problems"</a>
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
