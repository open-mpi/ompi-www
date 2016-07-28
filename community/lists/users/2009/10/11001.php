<?
$subject_val = "Re: [OMPI users] collective communications broken on more than 4 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 10:21:18 2009" -->
<!-- isoreceived="20091029142118" -->
<!-- sent="Thu, 29 Oct 2009 15:21:13 +0100" -->
<!-- isosent="20091029142113" -->
<!-- name="Vincent Loechner" -->
<!-- email="loechner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective communications broken on more than 4 cores" -->
<!-- id="E1N3VsH-00076U-DP_at_gauvain.u-strasbg.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="79C4ACE8-2A28-432C-97D3-A4A98914F5C2_at_scinet.utoronto.ca" -->
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
<strong>From:</strong> Vincent Loechner (<em>loechner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 10:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; It seems that the calls to collective communication are not
</span><br>
<span class="quotelev2">&gt; &gt; returning for some MPI processes, when the number of processes is
</span><br>
<span class="quotelev2">&gt; &gt; greater or equal to 5. It's reproduceable, on two different
</span><br>
<span class="quotelev2">&gt; &gt; architectures, with two different versions of OpenMPI (1.3.2 and
</span><br>
<span class="quotelev2">&gt; &gt; 1.3.3). It was working correctly with OpenMPI version 1.2.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it work if you turn off the shared memory transport layer; that is,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 6 -mca btl ^sm ./testmpi
</span><br>
<p>Yes it does, on both my configurations (AMD and Intel processor).
<br>
So it seems that the shared memory synchronization process is
<br>
broken.
<br>
<p>Could be a system bug, I don't know what library OpenMPI uses
<br>
(is it IPC ?). Both my systems are Linux 2.6.31, the AMD is Ubuntu,
<br>
and the Intel is an ARCH-linux.
<br>
<p>--Vincent
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="11000.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
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
