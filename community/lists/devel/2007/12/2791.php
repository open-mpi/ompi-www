<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 11:10:31 2007" -->
<!-- isoreceived="20071211161031" -->
<!-- sent="Tue, 11 Dec 2007 18:10:26 +0200" -->
<!-- isosent="20071211161026" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071211161026.GH3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0712110958390.2252_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 11:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2792.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2790.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2787.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2788.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 11, 2007 at 10:00:08AM -0600, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Tue, 11 Dec 2007, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   I did a rewrite of matching code in OB1. I made it much simpler and 2
</span><br>
<span class="quotelev2">&gt; &gt; times smaller (which is good, less code - less bugs). I also got rid
</span><br>
<span class="quotelev2">&gt; &gt; of huge macros - very helpful if you need to debug something. There
</span><br>
<span class="quotelev2">&gt; &gt; is no performance degradation, actually I even see very small performance
</span><br>
<span class="quotelev2">&gt; &gt; improvement. I ran MTT with this patch and the result is the same as on
</span><br>
<span class="quotelev2">&gt; &gt; trunk. I would like to commit this to the trunk. The patch is attached
</span><br>
<span class="quotelev2">&gt; &gt; for everybody to try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think we can live without those macros :).  Out of curiousity, is 
</span><br>
<span class="quotelev1">&gt; there any functionality that was removed as a result of this change?
</span><br>
No. The way out of order packets are handled changed a little bit, but
<br>
they are handled in correct order.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll test on a couple systems over the next couple of days...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Thanks!
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2792.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2790.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2787.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2788.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
