<?
$subject_val = "Re: [OMPI users] Same bug in v1.0.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 19:01:30 2009" -->
<!-- isoreceived="20090326230130" -->
<!-- sent="Thu, 26 Mar 2009 16:00:59 -0700" -->
<!-- isosent="20090326230059" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Same bug in v1.0.6" -->
<!-- id="49CC092B.6000106_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49CBF404.3010901_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Same bug in v1.0.6<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 19:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8604.php">Russell McQueeney: "[OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8602.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
<li><strong>In reply to:</strong> <a href="8602.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please ignore the following message. It wasn't intended for the Open 
<br>
MPI list. My apologies.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>Shaun Jackman wrote:
<br>
<span class="quotelev1">&gt; Hi Todd,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Back to the drawing board for me. The assertion is stating that all 
</span><br>
<span class="quotelev1">&gt; the tips should have been eroded in a single pass (and 2654086 tips 
</span><br>
<span class="quotelev1">&gt; were), but in a second pass it unexpectedly found 2 more tips. As a 
</span><br>
<span class="quotelev1">&gt; workaround until I nail this bug, you can downgrade this error to a 
</span><br>
<span class="quotelev1">&gt; warning by replacing the assertion in 
</span><br>
<span class="quotelev1">&gt; Parallel/NetworkSequenceCollection.cpp line  371:
</span><br>
<span class="quotelev1">&gt;      assert(controlErode() == 0);
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;      controlErode();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your bug report. Cheers,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8604.php">Russell McQueeney: "[OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8602.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
<li><strong>In reply to:</strong> <a href="8602.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
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
