<?
$subject_val = "Re: [OMPI devel] OMPI devel] trunk warnings on x86";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 01:49:29 2014" -->
<!-- isoreceived="20140803054929" -->
<!-- sent="Sun, 03 Aug 2014 14:49:22 +0900" -->
<!-- isosent="20140803054922" -->
<!-- name="Gilles GOUAILLARDET" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] trunk warnings on x86" -->
<!-- id="c2l1s625p9wo117xpro68u60.1407044962751_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] trunk warnings on x86" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] trunk warnings on x86<br>
<strong>From:</strong> Gilles GOUAILLARDET (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-03 01:49:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15485.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<li><strong>Previous message:</strong> <a href="15483.php">Paul Hargrove: "Re: [OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Reply:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>imho, the root cause is a missing ampersand.
<br>
<p>I will double check this from tomorrow only
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Arg - that raises an interesting point. This is a pointer to a 64-bit number. Will uintptr_t resolve that problem on such platforms?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 2, 2014, at 8:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Looks like on a 32-bit platform a (uintptr_t) cast is desired in the OMPI_CAST_RTE_NAME() macro.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Warnings from current trunk tarball attributable to the missing case include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:89: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:97: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/mca/pml/bfo/pml_bfo_failover.c:1417: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Paul H. Hargrove &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Future Technologies Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Computer and Data Sciences Department &#194;&#160; &#194;&#160; Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Lawrence Berkeley National Laboratory &#194;&#160; &#194;&#160; Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15481.php">http://www.open-mpi.org/community/lists/devel/2014/08/15481.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15484/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15485.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<li><strong>Previous message:</strong> <a href="15483.php">Paul Hargrove: "Re: [OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Reply:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
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
