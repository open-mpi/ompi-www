<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 11:00:15 2007" -->
<!-- isoreceived="20071211160015" -->
<!-- sent="Tue, 11 Dec 2007 10:00:08 -0600 (CST)" -->
<!-- isosent="20071211160008" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="Pine.LNX.4.64.0712110958390.2252_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071211155452.GF3360_at_minantech.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 11:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2788.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2786.php">Gleb Natapov: "[OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2786.php">Gleb Natapov: "[OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2791.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2791.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 11 Dec 2007, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;   I did a rewrite of matching code in OB1. I made it much simpler and 2
</span><br>
<span class="quotelev1">&gt; times smaller (which is good, less code - less bugs). I also got rid
</span><br>
<span class="quotelev1">&gt; of huge macros - very helpful if you need to debug something. There
</span><br>
<span class="quotelev1">&gt; is no performance degradation, actually I even see very small performance
</span><br>
<span class="quotelev1">&gt; improvement. I ran MTT with this patch and the result is the same as on
</span><br>
<span class="quotelev1">&gt; trunk. I would like to commit this to the trunk. The patch is attached
</span><br>
<span class="quotelev1">&gt; for everybody to try.
</span><br>
<p>I don't think we can live without those macros :).  Out of curiousity, is 
<br>
there any functionality that was removed as a result of this change?
<br>
<p>I'll test on a couple systems over the next couple of days...
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2788.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2786.php">Gleb Natapov: "[OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2786.php">Gleb Natapov: "[OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2791.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2791.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
