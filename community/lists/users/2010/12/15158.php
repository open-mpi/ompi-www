<?
$subject_val = "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 21:13:46 2010" -->
<!-- isoreceived="20101216021346" -->
<!-- sent="Wed, 15 Dec 2010 21:13:39 -0500" -->
<!-- isosent="20101216021339" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="D8DE1D20-13A8-4790-9FC2-20C69BC23659_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D097506.2060303_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling MPI_Test() too many times results in a time spike<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 21:13:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>In reply to:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2010, at 9:10 PM, Ioannis Papadopoulos wrote:
<br>
<p><span class="quotelev1">&gt; I agree that MPI_Test() has to do some progress, but as you can see I am only sending one message and I busy wait on it - since there is nothing else to do and no other incoming traffic, I would expect no difference among MPI_Test() calls, apart from the last one (the one that will notify me that my message arrived).
</span><br>
<p>There's no other incoming traffic *for MPI*.  But we're trapping down into the kernel (albeit in a non-blocking manner) and therefore the OS may stall us for longer than expected due to OS issues.
<br>
<p>Have you eliminated all other sources of jitter?  Are you binding to specific cores?  Have you turned off all unused daemons?  Do you see the same behavior with shared memory transport (which should make jitter issues more pronounced)?  ...etc.
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
<li><strong>Next message:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>In reply to:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
