<?
$subject_val = "Re: [OMPI devel] OMPI devel] trunk warnings on x86";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 22:57:17 2014" -->
<!-- isoreceived="20140804025717" -->
<!-- sent="Mon, 04 Aug 2014 11:57:14 +0900" -->
<!-- isosent="20140804025714" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] trunk warnings on x86" -->
<!-- id="53DEF68A.3070300_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c2l1s625p9wo117xpro68u60.1407044962751_at_email.android.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-03 22:57:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15490.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15488.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>In reply to:</strong> <a href="15484.php">Gilles GOUAILLARDET: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15490.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Reply:</strong> <a href="15490.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>i confirm ampersand was missing and this was a bug
<br>
/* a similar bug was fixed by Ralph in r32357 */
<br>
<p>i commited r32408 in order to fix these three bugs.
<br>
<p>i also took the liberty to replace the OMPI_CAST_RTE_NAME
<br>
with an inline function (only in debug mode) in order to get a
<br>
compiler warning on both 32 and 64 bits arch in this case :
<br>
<p>#if OPAL_ENABLE_DEBUG
<br>
static inline orte_process_name_t *
<br>
OMPI_CAST_RTE_NAME(opal_process_name_t * name);
<br>
#else
<br>
#define OMPI_CAST_RTE_NAME(a) ((orte_process_name_t*)(a))
<br>
#endif
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/03 14:49, Gilles GOUAILLARDET wrote:
<br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; imho, the root cause is a missing ampersand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will double check this from tomorrow only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Arg - that raises an interesting point. This is a pointer to a 64-bit number. Will uintptr_t resolve that problem on such platforms?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 2, 2014, at 8:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like on a 32-bit platform a (uintptr_t) cast is desired in the OMPI_CAST_RTE_NAME() macro.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Warnings from current trunk tarball attributable to the missing case include:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:89: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:97: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/mca/pml/bfo/pml_bfo_failover.c:1417: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15481.php">http://www.open-mpi.org/community/lists/devel/2014/08/15481.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15484.php">http://www.open-mpi.org/community/lists/devel/2014/08/15484.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15489/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15490.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15488.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>In reply to:</strong> <a href="15484.php">Gilles GOUAILLARDET: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15490.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Reply:</strong> <a href="15490.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
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
