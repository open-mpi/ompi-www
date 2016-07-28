<?
$subject_val = "Re: [OMPI users] ga-4.1 on mx segmentation violation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:10:10 2008" -->
<!-- isoreceived="20081022181010" -->
<!-- sent="Wed, 22 Oct 2008 10:41:56 -0500" -->
<!-- isosent="20081022154156" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ga-4.1 on mx segmentation violation" -->
<!-- id="6E0B3569-2C8D-48E0-9AF9-DF4221D0E614_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE801BDF7DC_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] ga-4.1 on mx segmentation violation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 11:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7077.php">Jeff Squyres: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Previous message:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>In reply to:</strong> <a href="7058.php">SLIM H.A.: "[OMPI users] ga-4.1 on mx segmentation violation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7078.php">Patrick Geoffray: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2008, at 9:14 AM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt; I have built the release candidate for ga-4.1 with OpenMPI 1.2.3 and
</span><br>
<span class="quotelev1">&gt; portland compilers 7.0.2 for Myrinet mx.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running the test.x for 3 Myrinet nodes each with 4 cores I get the
</span><br>
<span class="quotelev1">&gt; following error messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [0,1,3]: OpenIB on host node057 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<p>FWIW, this specific warning is fixed in the upcoming v1.3 series (I  
<br>
assume you built on a machine with libibverbs installed, but no  
<br>
OpenFabrics-capable devices).
<br>
<p>IIRC, you can manually disable this warning by telling Open MPI to  
<br>
avoid the openib BTL (I can't test the v1.2 series on a linux machine  
<br>
ATM to verify this):
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl ^openib ...
<br>
<p><span class="quotelev1">&gt; ARMCI configured for 3 cluster nodes. Network protocol is 'MPI-SPAWN'.
</span><br>
<span class="quotelev1">&gt; 0:Segmentation Violation error, status=: 11
</span><br>
<span class="quotelev1">&gt; 0:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
</span><br>
<span class="quotelev1">&gt; 4:Segmentation Violation error, status=: 11
</span><br>
<span class="quotelev1">&gt; 4:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
</span><br>
<span class="quotelev1">&gt; 6:Segmentation Violation error, status=: 11
</span><br>
<span class="quotelev1">&gt; 6:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
</span><br>
<p>It looks like ARMCI is seg faulting...?  Beyond that, Bad Things will  
<br>
happen at the MPI layer before it aborts.
<br>
<p>I'm unfamiliar with &quot;ga&quot; or ARMCI, so I don't know exactly what's  
<br>
happening here...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7077.php">Jeff Squyres: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Previous message:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>In reply to:</strong> <a href="7058.php">SLIM H.A.: "[OMPI users] ga-4.1 on mx segmentation violation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7078.php">Patrick Geoffray: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
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
