<?
$subject_val = "Re: [OMPI devel] SSE instructions?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 21:21:25 2011" -->
<!-- isoreceived="20110520012125" -->
<!-- sent="Thu, 19 May 2011 21:21:19 -0400" -->
<!-- isosent="20110520012119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SSE instructions?" -->
<!-- id="8A4BAD65-4C28-453D-9F59-C89BCD6D4F42_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="403D1C2A-4283-4A8B-827B-1CB393E9D244_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SSE instructions?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 21:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9270.php">Jeff Squyres: "[OMPI devel] v1.4 RM: ruling?"</a>
<li><strong>Previous message:</strong> <a href="9268.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9266.php">Larry Baker: "[OMPI devel] SSE instructions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>Reply:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2011, at 8:32 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; The PGI compilers have a -fast and a -fastsse option.  Does OpenMPI make effective/safe use of SSE instructions (block moves maybe?)?  
</span><br>
<p>Not really.  The biggest thing that we do that can take advantage of vector instructions is memcpy, *mostly* in the shared memory transport, but also if your MPI application hap some funky non-contiguous MPI datatypes, too.
<br>
<p><span class="quotelev1">&gt; On their web site, PGI uses -fast in their examples for OpenMPI rather than -fastsse.  I don't know why.
</span><br>
<p>Maybe for more portability...?
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
<li><strong>Next message:</strong> <a href="9270.php">Jeff Squyres: "[OMPI devel] v1.4 RM: ruling?"</a>
<li><strong>Previous message:</strong> <a href="9268.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9266.php">Larry Baker: "[OMPI devel] SSE instructions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>Reply:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
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
