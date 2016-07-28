<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:57:29 2009" -->
<!-- isoreceived="20090330175729" -->
<!-- sent="Mon, 30 Mar 2009 13:57:21 -0400" -->
<!-- isosent="20090330175721" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49D10801.2060001_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F6903E7B-4F61-4C9F-B7C7-F768A4E613CD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5756.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5754.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5757.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5757.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Why not?  The &quot;owning&quot; process can do the touch; then it'll be 
</span><br>
<span class="quotelev1">&gt; affinity'ed properly.  Right?
</span><br>
<p>Yes, that's what I meant by forcing allocation. From the thread, it 
<br>
looked like nobody touched the pages of the mapped file. If it's already 
<br>
done, no need to write in the whole file.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5756.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5754.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5757.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5757.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
