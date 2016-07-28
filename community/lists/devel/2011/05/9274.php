<?
$subject_val = "Re: [OMPI devel] SSE instructions?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 21:49:28 2011" -->
<!-- isoreceived="20110520014928" -->
<!-- sent="Thu, 19 May 2011 21:49:22 -0400" -->
<!-- isosent="20110520014922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SSE instructions?" -->
<!-- id="A7857CEF-30CC-46E1-909C-E3F375C92103_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9921BD36-D4B0-4798-83B0-4559D2BAFADC_at_usgs.gov" -->
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
<strong>Date:</strong> 2011-05-19 21:49:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9275.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9273.php">Ralph Castain: "[OMPI devel] IO forwarding"</a>
<li><strong>In reply to:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2011, at 9:46 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; I inquired the same of PGI.  Dave Borer, PGI Customer Service Manager, responded:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  I believe -fast and -fastsse are identical for 64-bit compilers, but there are some differences
</span><br>
<span class="quotelev2">&gt;&gt; with 32-bit compilers.  I don't think TCP/IP based MPI routines have better performance from
</span><br>
<span class="quotelev2">&gt;&gt; optimizations, unless the processes are all running on the same machine.   I will ask engineering
</span><br>
<span class="quotelev2">&gt;&gt; how messages are passed when all the processes are running on the same hardware.
</span><br>
<p>Ya -- he's pretty much right.  When the procs are on the same machine, we end up memcpy'ing through shared memory.  Hence, if the memcpy is sped up by using -fast or -fastsse, that would be your extra bonus points.  :-)
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
<li><strong>Next message:</strong> <a href="9275.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9273.php">Ralph Castain: "[OMPI devel] IO forwarding"</a>
<li><strong>In reply to:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
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
