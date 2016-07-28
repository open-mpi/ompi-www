<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 10:39:22 2014" -->
<!-- isoreceived="20140110153922" -->
<!-- sent="Fri, 10 Jan 2014 15:39:21 +0000" -->
<!-- isosent="20140110153921" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc" -->
<!-- id="AA169F89-7947-4CF2-98E0-5012199103A3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15uhwB4i7bK3nXviw4Z0+diGFUJ8HynD6Yyea=UJ8_F4g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 10:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13700.php">Ralph Castain: "[OMPI devel] 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13658.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed; thanks.
<br>
<p>On Jan 9, 2014, at 8:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the following means that the compiler has determined that the two named variables DO NOT actually get initialized to NULL as written.  However, it looks like their initialization is not required, as each is set before it is read.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC       btl_usnic_component.lo
</span><br>
<span class="quotelev1">&gt; /scratch/scratchdirs/hargrove/OMPI/openmpi-1.7-latest-linux-x86_64-icc-13/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_component.c(1391): warning #589: transfer of control bypasses initialization of:
</span><br>
<span class="quotelev1">&gt;             variable &quot;ssfrag&quot; (declared at line 1392)
</span><br>
<span class="quotelev1">&gt;             variable &quot;lsfrag&quot; (declared at line 1393)
</span><br>
<span class="quotelev1">&gt;           switch (frag-&gt;uf_type) {
</span><br>
<span class="quotelev1">&gt;           ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13700.php">Ralph Castain: "[OMPI devel] 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13658.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
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
