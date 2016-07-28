<?
$subject_val = "Re: [OMPI devel] New OMPI MPI extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 11:35:12 2010" -->
<!-- isoreceived="20100422153512" -->
<!-- sent="Thu, 22 Apr 2010 11:35:05 -0400" -->
<!-- isosent="20100422153505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New OMPI MPI extension" -->
<!-- id="675891EC-AE99-42FE-907C-1DF6794BE179_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="m2y73a01bf21004212135k282e0df2w5862739a1910d979_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New OMPI MPI extension<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 11:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7787.php">Timur Magomedov: "[OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="7785.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Reply:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed -- thanks!
<br>
<p>On Apr 22, 2010, at 12:35 AM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a typo in trunk/README:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -&gt; 1175 ...unrelated to wach other
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess you mean &quot;unrelated to each other&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 21, 2010 at 12:35 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Per the telecon Tuesday, I committed a new OMPI MPI extension to the trunk:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/23018">https://svn.open-mpi.org/trac/ompi/changeset/23018</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please read the commit message and let me know what you think.  Suggestions are welcome.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If everyone is ok with it, I'd like to see this functionality hit the 1.5 series at some point.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7787.php">Timur Magomedov: "[OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="7785.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Reply:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
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
