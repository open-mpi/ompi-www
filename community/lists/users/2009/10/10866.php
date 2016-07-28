<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 15:27:42 2009" -->
<!-- isoreceived="20091001192742" -->
<!-- sent="Thu, 01 Oct 2009 21:27:36 +0200" -->
<!-- isosent="20091001192736" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew" -->
<!-- id="1254425256.7098.9.camel_at_y-boda.ydc.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D4241BF3-EAB1-4497-9AA9-D03F88412CDA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 15:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10867.php">Aniruddha Marathe: "[OMPI users] Profiling OpenMPI routines"</a>
<li><strong>Previous message:</strong> <a href="10865.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10865.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10868.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew"</a>
<li><strong>Reply:</strong> <a href="10868.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-10-01 at 15:19 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 1, 2009, at 2:19 PM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No it didn't. And memalign is obsolete according to the manpage.
</span><br>
<span class="quotelev2">&gt; &gt; posix_memalign is the one to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This particular call is testing the memalign intercept in the ptmalloc  
</span><br>
<span class="quotelev1">&gt; component during startup; we can't replace it with posix_memalign.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, the values that are passed are fairly meaningless.  It's just  
</span><br>
<span class="quotelev1">&gt; testing that the intercept works.
</span><br>
<p>Yes, but perhaps you need to verify that posix_memalign is also
<br>
intercepted?
<br>
<p>I commented on memalign being obsolete since there are a couple of uses
<br>
of it in the rest of the openmpi code apart from that particular case.
<br>
They should probably be changed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10867.php">Aniruddha Marathe: "[OMPI users] Profiling OpenMPI routines"</a>
<li><strong>Previous message:</strong> <a href="10865.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10865.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesforTotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10868.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew"</a>
<li><strong>Reply:</strong> <a href="10868.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew"</a>
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
