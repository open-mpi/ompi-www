<?
$subject_val = "Re: [OMPI users] collective communications broken on more than 4 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 10:05:27 2009" -->
<!-- isoreceived="20091029140527" -->
<!-- sent="Thu, 29 Oct 2009 10:05:22 -0400" -->
<!-- isosent="20091029140522" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective communications broken on more than 4 cores" -->
<!-- id="79C4ACE8-2A28-432C-97D3-A4A98914F5C2_at_scinet.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1N3VUy-00071D-Jt_at_gauvain.u-strasbg.fr" -->
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
<strong>Date:</strong> 2009-10-29 10:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="10999.php">Vincent Loechner: "[OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="10999.php">Vincent Loechner: "[OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2009-10-29, at 9:57AM, Vincent Loechner wrote:
<br>
<p>[...]
<br>
<span class="quotelev1">&gt; It seems that the calls to collective communication are not
</span><br>
<span class="quotelev1">&gt; returning for some MPI processes, when the number of processes is
</span><br>
<span class="quotelev1">&gt; greater or equal to 5. It's reproduceable, on two different
</span><br>
<span class="quotelev1">&gt; architectures, with two different versions of OpenMPI (1.3.2 and
</span><br>
<span class="quotelev1">&gt; 1.3.3). It was working correctly with OpenMPI version 1.2.7.
</span><br>
<p><span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; GCC version :
</span><br>
<span class="quotelev1">&gt; $ mpicc --version
</span><br>
<span class="quotelev1">&gt; gcc (Ubuntu 4.4.1-4ubuntu7) 4.4.1
</span><br>
<p><p>Does it work if you turn off the shared memory transport layer; that is,
<br>
<p>mpirun -n 6 -mca btl ^sm ./testmpi
<br>
<p>?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<pre>
-- 
Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="10999.php">Vincent Loechner: "[OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="10999.php">Vincent Loechner: "[OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11001.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
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
