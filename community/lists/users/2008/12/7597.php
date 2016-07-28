<?
$subject_val = "Re: [OMPI users] BTL question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 08:59:36 2008" -->
<!-- isoreceived="20081224135936" -->
<!-- sent="Wed, 24 Dec 2008 15:59:28 +0200" -->
<!-- isosent="20081224135928" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BTL question" -->
<!-- id="49524040.5040208_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081224072842.utmxklyllk4wsogk_at_webmail.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] BTL question<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 08:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7598.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7596.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>In reply to:</strong> <a href="7595.php">Teige,  Scott W: "[OMPI users] BTL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7607.php">Teige,  Scott W: "Re: [OMPI users] BTL question"</a>
<li><strong>Reply:</strong> <a href="7607.php">Teige,  Scott W: "Re: [OMPI users] BTL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Teige, Scott W wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have observed strange behavior with an application running with
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.8, OFED 1.2. The application runs in two &quot;modes&quot;, fast
</span><br>
<span class="quotelev1">&gt; and slow. The exectution time is either within one second of 108 sec.
</span><br>
<span class="quotelev1">&gt; or within one second of 67 sec. My cluster has 1 Gig ethernet and
</span><br>
<span class="quotelev1">&gt; DDR Infiniband so the byte transport layer is a prime suspect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, is there a way to determine (from my application code) which
</span><br>
<span class="quotelev1">&gt; BTL is really being used?
</span><br>
You may specify:
<br>
--mca btl openib,sm,self
<br>
And OpenMPI will use IB and shared memory for communication.
<br>
--mca btl tcp,sm,self
<br>
And OpenMPI will use TCP and shared memory for communication.
<br>
<p>Thanks,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7598.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7596.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>In reply to:</strong> <a href="7595.php">Teige,  Scott W: "[OMPI users] BTL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7607.php">Teige,  Scott W: "Re: [OMPI users] BTL question"</a>
<li><strong>Reply:</strong> <a href="7607.php">Teige,  Scott W: "Re: [OMPI users] BTL question"</a>
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
