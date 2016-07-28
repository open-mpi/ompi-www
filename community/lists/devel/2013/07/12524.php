<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 11:18:03 2013" -->
<!-- isoreceived="20130702151803" -->
<!-- sent="Tue, 2 Jul 2013 15:17:52 +0000" -->
<!-- isosent="20130702151752" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6CD217_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CDF84285.11D4E%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 11:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12525.php">Barrett, Brian W: "[OMPI devel] RFC: Remove Darwin backtrace support"</a>
<li><strong>Previous message:</strong> <a href="12523.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.7) ==="</a>
<li><strong>In reply to:</strong> <a href="12521.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Reply:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.
<br>
<p>I submitted a patch like this a while ago, and it met violent resistance.  :-)  Although no one on the call today remembers exactly who raised the resistance... 
<br>
<p><p><p>On Jul 2, 2013, at 10:40 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 7/2/13 8:22 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our macros for the OMPI-level free list had one extra argument, a possible return value to signal that the operation of retrieving the element from the free list failed. However in this case the returned pointer was set to NULL as well, so the error code was redundant. Moreover, this was a continuous source of warnings when the picky mode was on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The attached parch remove the rc argument from the OMPI_FREE_LIST_GET and OMPI_FREE_LIST_WAIT macros, and change to check if the item is NULL instead of using the return code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Deadline: July 4th
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
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
<li><strong>Next message:</strong> <a href="12525.php">Barrett, Brian W: "[OMPI devel] RFC: Remove Darwin backtrace support"</a>
<li><strong>Previous message:</strong> <a href="12523.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.7) ==="</a>
<li><strong>In reply to:</strong> <a href="12521.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Reply:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
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
