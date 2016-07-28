<?
$subject_val = "Re: [OMPI users] Same bug in v1.0.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 17:31:15 2009" -->
<!-- isoreceived="20090326213115" -->
<!-- sent="Thu, 26 Mar 2009 14:30:44 -0700" -->
<!-- isosent="20090326213044" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Same bug in v1.0.6" -->
<!-- id="49CBF404.3010901_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C5F10C25.B4C3%heywood_at_cshl.edu" -->
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
<strong>Date:</strong> 2009-03-26 17:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8603.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
<li><strong>Previous message:</strong> <a href="8601.php">Shaun Jackman: "[OMPI users] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8603.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
<li><strong>Reply:</strong> <a href="8603.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Todd,
<br>
<p>Back to the drawing board for me. The assertion is stating that all 
<br>
the tips should have been eroded in a single pass (and 2654086 tips 
<br>
were), but in a second pass it unexpectedly found 2 more tips. As a 
<br>
workaround until I nail this bug, you can downgrade this error to a 
<br>
warning by replacing the assertion in 
<br>
Parallel/NetworkSequenceCollection.cpp line  371:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(controlErode() == 0);
<br>
with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;controlErode();
<br>
<p>Thanks for your bug report. Cheers,
<br>
Shaun
<br>
<p>Heywood, Todd wrote:
<br>
<span class="quotelev1">&gt; Hi Shaun,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed v1.0.6 (and verified it really was installed with &quot;ABYSS-P
</span><br>
<span class="quotelev1">&gt; --version&quot; on all nodes). But we are getting the same issue with 32 MPI
</span><br>
<span class="quotelev1">&gt; tasks. Both v1.0.5 and v1.0.6 worked fine with 8 and 16 tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is the stdout and stderr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Todd Heywood
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8603.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
<li><strong>Previous message:</strong> <a href="8601.php">Shaun Jackman: "[OMPI users] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8603.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
<li><strong>Reply:</strong> <a href="8603.php">Shaun Jackman: "Re: [OMPI users] Same bug in v1.0.6"</a>
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
