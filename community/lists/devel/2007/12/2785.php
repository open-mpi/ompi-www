<?
$subject_val = "Re: [OMPI devel] opal_condition_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 10:38:25 2007" -->
<!-- isoreceived="20071211153825" -->
<!-- sent="Tue, 11 Dec 2007 17:38:20 +0200" -->
<!-- isosent="20071211153820" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_condition_wait" -->
<!-- id="20071211153820.GE3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="475EAC7B.2060203_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_condition_wait<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 10:38:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2786.php">Gleb Natapov: "[OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2784.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 11, 2007 at 10:27:55AM -0500, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; My understanding was that this behavior was not right, but upon further 
</span><br>
<span class="quotelev1">&gt; inspection of the pthreads documentation this behavior seems to be 
</span><br>
<span class="quotelev1">&gt; allowable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I think that Open MPI does not implement condition variable in the strict
<br>
sense. Open MPI condition variable has to progress devices and wait for a
<br>
condition simultaneously and not just wait till a condition is satisfied.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2786.php">Gleb Natapov: "[OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2784.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
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
