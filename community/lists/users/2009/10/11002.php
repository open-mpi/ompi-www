<?
$subject_val = "Re: [OMPI users] collective communications broken on more than 4 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 10:27:22 2009" -->
<!-- isoreceived="20091029142722" -->
<!-- sent="Thu, 29 Oct 2009 10:27:15 -0400" -->
<!-- isosent="20091029142715" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective communications broken on more than 4 cores" -->
<!-- id="93A28CE9-613B-47C6-8B74-CE1D51209453_at_scinet.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1N3VsH-00076U-DP_at_gauvain.u-strasbg.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective communications broken on more than 4 cores<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 10:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2009-10-29, at 10:21AM, Vincent Loechner wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the calls to collective communication are not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returning for some MPI processes, when the number of processes is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; greater or equal to 5. It's reproduceable, on two different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; architectures, with two different versions of OpenMPI (1.3.2 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.3.3). It was working correctly with OpenMPI version 1.2.7.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does it work if you turn off the shared memory transport layer;  
</span><br>
<span class="quotelev2">&gt;&gt; that is,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 6 -mca btl ^sm ./testmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes it does, on both my configurations (AMD and Intel processor).
</span><br>
<span class="quotelev1">&gt; So it seems that the shared memory synchronization process is
</span><br>
<span class="quotelev1">&gt; broken.
</span><br>
<p>Presumably that is this bug:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
<br>
<p>I also found by trial and error that increasing the number of fifos, eg
<br>
-mca btl_sm_num_fifos 5
<br>
on a 6-processor job, apparently worked around the problem.
<br>
But yes, something seems broken in OpenMP shared memory transport with  
<br>
gcc 4.4.x.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Jonathan
<br>
<pre>
-- 
Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
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
