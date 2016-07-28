<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 12:57:18 2012" -->
<!-- isoreceived="20120703165718" -->
<!-- sent="Tue, 3 Jul 2012 12:57:13 -0400" -->
<!-- isosent="20120703165713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm" -->
<!-- id="E724E868-97F7-4BCA-9488-B10582878948_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FF21C1E.60902_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 12:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11220.php">Juan Antonio Rico Gallego: "[OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11218.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<li><strong>In reply to:</strong> <a href="11214.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11207.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 2, 2012, at 6:09 PM, Steve Wise wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Can you extend this new stuff to support RDMACM, including the warp-needed connector-sends-first stuff?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no time right now.  I could test something perhaps if someone can do the initial pull of the rdma cpc code into the ofacm...
</span><br>
<p>The compromise we came to on the call today was:
<br>
<p>- someone may pull the RDMA CM code to ofacm (e.g., Mellanox, because they care about RoCE)
<br>
- if this happens, you can then go add the iwarp-specific junk in there (i.e., connector has to be the first to send, etc.)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11220.php">Juan Antonio Rico Gallego: "[OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11218.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<li><strong>In reply to:</strong> <a href="11214.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11207.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
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
