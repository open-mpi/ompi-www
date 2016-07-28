<?
$subject_val = "Re: [OMPI users] LAM/MPI -&gt; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 11:20:31 2015" -->
<!-- isoreceived="20150227162031" -->
<!-- sent="Fri, 27 Feb 2015 10:21:54 -0600" -->
<!-- isosent="20150227162154" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAM/MPI -&amp;gt; OpenMPI" -->
<!-- id="54F099A2.30109_at_mcs.anl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7E81D82B-05A7-46E9-A30B-11D5F0BD364C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] LAM/MPI -&gt; OpenMPI<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 11:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26411.php">Syed Ahsan Ali: "[OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26409.php">Ralph Castain: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="26409.php">Ralph Castain: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26424.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26424.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/27/2015 09:40 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Yeah, any other recommendations I can give to convince the
</span><br>
<span class="quotelev2">&gt;&gt; powers-that-be that immediate sun-setting of LAM/MPI would be great.
</span><br>
<span class="quotelev2">&gt;&gt;  Sometimes I feel like I am trying to fit a square peg in a round holeL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than the fact that LAM/MPI no longer is supported, the only real
</span><br>
<span class="quotelev1">&gt; rationale would be that OMPI has a lot of enhancements in terms of
</span><br>
<span class="quotelev1">&gt; binding options and other features, supports thru MPI-3, etc.
</span><br>
<p>Does this application do any I/O?  I was curious so I dug around in 
<br>
LAM's suversion repository.  Last change to ROMIO, the MPI-IO 
<br>
implementation, was this one:
<br>
<p>r10377 | brbarret | 2007-07-02 21:53:06
<br>
<p>so you're missing out on 8 years of I/O related bug fixes and optimizations.
<br>
<p><p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26411.php">Syed Ahsan Ali: "[OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26409.php">Ralph Castain: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="26409.php">Ralph Castain: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26424.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26424.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
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
