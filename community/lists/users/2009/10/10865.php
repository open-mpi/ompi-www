<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 15:19:06 2009" -->
<!-- isoreceived="20091001191906" -->
<!-- sent="Thu, 1 Oct 2009 15:19:01 -0400" -->
<!-- isosent="20091001191901" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew" -->
<!-- id="D4241BF3-EAB1-4497-9AA9-D03F88412CDA_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1254421191.7098.2.camel_at_y-boda.ydc.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 15:19:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10866.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10864.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10858.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10866.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
<li><strong>Reply:</strong> <a href="10866.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 1, 2009, at 2:19 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; No it didn't. And memalign is obsolete according to the manpage.
</span><br>
<span class="quotelev1">&gt; posix_memalign is the one to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>This particular call is testing the memalign intercept in the ptmalloc  
<br>
component during startup; we can't replace it with posix_memalign.
<br>
<p>Hence, the values that are passed are fairly meaningless.  It's just  
<br>
testing that the intercept works.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10866.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10864.php">Peter Thompson: "Re: [OMPI users] memalign usage in OpenMPI and it's consequences for TotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10858.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10866.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
<li><strong>Reply:</strong> <a href="10866.php">흆e Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
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
