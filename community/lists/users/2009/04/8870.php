<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 18:10:39 2009" -->
<!-- isoreceived="20090410221039" -->
<!-- sent="Fri, 10 Apr 2009 15:10:35 -0700" -->
<!-- isosent="20090410221035" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090410221035.GA24807_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0E82508D-E700-44BD-BFEB-1F592CC06A60_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-10 18:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8871.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8869.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8868.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8871.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8871.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Apr 10, 2009 at 05:10:29PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 7, 2009, at 4:25 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Does OpenMPI know about the number of CPUS per node for FreeBSD?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is exactly the right question: apparently it does not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, it looks like we have a bad configure test in the  
</span><br>
<span class="quotelev1">&gt; &quot;posix&quot; paffinity component which triggers it to not be built.  Hence,  
</span><br>
<span class="quotelev1">&gt; OMPI *always* thinks there's only 1 processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The setup for how to get the number of processors was totally changed  
</span><br>
<span class="quotelev1">&gt; between the 1.2 and 1.3 series.  I think that this completely explains  
</span><br>
<span class="quotelev1">&gt; the issue (OMPI didn't have a paffinity component, so it assumed 1  
</span><br>
<span class="quotelev1">&gt; processor, then it saw that there were 2 processes running, and  
</span><br>
<span class="quotelev1">&gt; therefore decided that it was running in oversubscribed mode).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll fix.  I don't know if it'll make the cut for 1.3.2 or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I applied your patch to openmpi-1.3.2a1r20942.  It built fine
<br>
and the running my test indicate that it fixes the problem.
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8871.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8869.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8868.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8871.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8871.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
