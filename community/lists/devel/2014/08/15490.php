<?
$subject_val = "Re: [OMPI devel] OMPI devel] trunk warnings on x86";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 23:02:40 2014" -->
<!-- isoreceived="20140804030240" -->
<!-- sent="Mon, 04 Aug 2014 12:02:38 +0900" -->
<!-- isosent="20140804030238" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] trunk warnings on x86" -->
<!-- id="53DEF7CE.9020803_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53DEF68A.3070300_at_iferc.org" -->
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
<strong>Date:</strong> 2014-08-03 23:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15491.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Previous message:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>In reply to:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul and all,
<br>
<p>before r32408, the environment/abort test from the ibm test suite
<br>
crashed with SIGSEGV.
<br>
<p>there is no more crash after the fix :-)
<br>
<p>that being said, i experience some (random) hangs on my VM :
<br>
--mca btl tcp,self =&gt; no hang
<br>
--mca btl sm,self or --mca btl vader,self =&gt; hang about 25% of the time
<br>
--mca btl scif,self =&gt; always hang
<br>
<p>only the mpirun process remains and is hanging.
<br>
<p>i will try to debug this, and i welcome any help !
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/04 11:57, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i confirm ampersand was missing and this was a bug
</span><br>
<span class="quotelev1">&gt; /* a similar bug was fixed by Ralph in r32357 */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i commited r32408 in order to fix these three bugs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i also took the liberty to replace the OMPI_CAST_RTE_NAME
</span><br>
<span class="quotelev1">&gt; with an inline function (only in debug mode) in order to get a
</span><br>
<span class="quotelev1">&gt; compiler warning on both 32 and 64 bits arch in this case :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; static inline orte_process_name_t *
</span><br>
<span class="quotelev1">&gt; OMPI_CAST_RTE_NAME(opal_process_name_t * name);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #define OMPI_CAST_RTE_NAME(a) ((orte_process_name_t*)(a))
</span><br>
<span class="quotelev1">&gt; #endif
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
<span class="quotelev1">&gt; On 2014/08/03 14:49, Gilles GOUAILLARDET wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; imho, the root cause is a missing ampersand.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will double check this from tomorrow only
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Arg - that raises an interesting point. This is a pointer to a 64-bit number. Will uintptr_t resolve that problem on such platforms?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 2, 2014, at 8:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like on a 32-bit platform a (uintptr_t) cast is desired in the OMPI_CAST_RTE_NAME() macro.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnings from current trunk tarball attributable to the missing case include:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:89: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:97: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/mca/pml/bfo/pml_bfo_failover.c:1417: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15481.php">http://www.open-mpi.org/community/lists/devel/2014/08/15481.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15484.php">http://www.open-mpi.org/community/lists/devel/2014/08/15484.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15489.php">http://www.open-mpi.org/community/lists/devel/2014/08/15489.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15491.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Previous message:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>In reply to:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
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
