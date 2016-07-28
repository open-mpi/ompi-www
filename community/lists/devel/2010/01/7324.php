<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 18 04:16:03 2010" -->
<!-- isoreceived="20100118091603" -->
<!-- sent="Mon, 18 Jan 2010 10:17:28 +0100 (CET)" -->
<!-- isosent="20100118091728" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="alpine.DEB.2.00.1001181008300.3534_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EDBF0425-A585-48E6-A418-A25F8E17B7A6_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-18 04:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7325.php">Sylvain Jeaugey: "[OMPI devel] VT config.h.in"</a>
<li><strong>Previous message:</strong> <a href="7323.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7322.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7350.php">Chris Samuel: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2010, at 11:31 AM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; Tuning the libc malloc implementation using the options they provide to 
</span><br>
<span class="quotelev1">&gt; do is is valid and provides real benefit to a lot of applications.  For 
</span><br>
<span class="quotelev1">&gt; the record we used to disable mmap based allocations by default on 
</span><br>
<span class="quotelev1">&gt; Quadrics systems and I can't think of a single case of people who needed 
</span><br>
<span class="quotelev1">&gt; to re-enable it.
</span><br>
It happened to me once. An application couldn't run (not enough memory) 
<br>
because of the Quadrics stack setting the malloc options.
<br>
<p>On Sun, 17 Jan 2010, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; I'm glad that you've been so fortunate.  Unfortunately, I have a large 
</span><br>
<span class="quotelev1">&gt; application base in which that is not the case, and we have had to use 
</span><br>
<span class="quotelev1">&gt; mmap based allocation, otherwise memory usage would essentially grow 
</span><br>
<span class="quotelev1">&gt; without bound.  So we go back to the age-old debate of correctness vs. 
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
It would be interesting (though difficult) to know which proportion of 
<br>
applications are suffering from these settings.
<br>
<p>For my part, it is less than 1% (but not 0!).
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7325.php">Sylvain Jeaugey: "[OMPI devel] VT config.h.in"</a>
<li><strong>Previous message:</strong> <a href="7323.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7322.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7350.php">Chris Samuel: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
