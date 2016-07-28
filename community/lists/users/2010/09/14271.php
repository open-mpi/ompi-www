<?
$subject_val = "Re: [OMPI users] OpenMPI on the ARM processor architecture?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 07:44:40 2010" -->
<!-- isoreceived="20100922114440" -->
<!-- sent="Wed, 22 Sep 2010 07:44:35 -0400" -->
<!-- isosent="20100922114435" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on the ARM processor architecture?" -->
<!-- id="5848FF97-AE83-4CA4-A3FC-F5AABBA19EBD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6A08178-949B-4183-AAE1-7C0C2C21161A_at_noao.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on the ARM processor architecture?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 07:44:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Previous message:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14245.php">Ken Mighell: "[OMPI users] OpenMPI on the ARM processor architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>Reply:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2010, at 2:14 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; Has there been any consideration of porting OpenMPI to the ARM processor?
</span><br>
<p>I don't believe that anyone is actively working on this, but I could be wrong.
<br>
<p><span class="quotelev1">&gt; Plans are afoot to launch 7 ARM processors on a &quot;Stage Coach&quot; card in a 3U
</span><br>
<span class="quotelev1">&gt; CubeSat.  NASA's NMP (New Millennium Program) ST-8 (Space Technology 8)
</span><br>
<span class="quotelev1">&gt; DM (Dependable Multiprocessor) uses OpenMPI as the foundation for its
</span><br>
<span class="quotelev1">&gt; fault-tolerant cluster middleware.  Thus the enquiry about the status of OpenMPI
</span><br>
<span class="quotelev1">&gt; with the ARM architecture.
</span><br>
<p>Patches would be welcome!  :-)
<br>
<p>I believe that the first step would be to get some assembly for the ARM platform for some of OMPI's key routines (locks, atomics, etc.).  Beyond that, it *might* &quot;just work&quot;...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Previous message:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14245.php">Ken Mighell: "[OMPI users] OpenMPI on the ARM processor architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>Reply:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
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
