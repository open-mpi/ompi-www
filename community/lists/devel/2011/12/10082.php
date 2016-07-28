<?
$subject_val = "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 20:27:05 2011" -->
<!-- isoreceived="20111214012705" -->
<!-- sent="Tue, 13 Dec 2011 20:27:00 -0500" -->
<!-- isosent="20111214012700" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5" -->
<!-- id="DFC98C80-C413-4CBF-A956-BDAAB0A4CE05_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20111214112941.6f5ebf2c_at_Gantu.yeoh.info" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 20:27:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10081.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>In reply to:</strong> <a href="10081.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10120.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10120.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2011, at 7:59 PM, Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, late to the discussion. This is a spurious warning caused by
</span><br>
<span class="quotelev1">&gt; passing the NULL pointer to the opal free function which is actually ok.
</span><br>
<span class="quotelev1">&gt; It was fixed by #2884 - this is why you don't see the problem in trunk.
</span><br>
<p>I have a dim recollection that we talked about this before, but I'm going to ask again, anyway...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/25430">https://svn.open-mpi.org/trac/ompi/changeset/25430</a>
<br>
<p>Why are we removing this debug message?  It seems like a useful thing.  It might well be legal to call free(NULL), but it seems like a bad idea to call free if we know the value will be NULL.
<br>
<p>Did we talk about this before, and I was in the minority for thinking removing it was a bad idea?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10081.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>In reply to:</strong> <a href="10081.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10120.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10120.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
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
