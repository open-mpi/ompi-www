<?
$subject_val = "Re: [OMPI devel] trunk warnings on x86";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 00:21:26 2014" -->
<!-- isoreceived="20140803042126" -->
<!-- sent="Sat, 2 Aug 2014 21:21:25 -0700" -->
<!-- isosent="20140803042125" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk warnings on x86" -->
<!-- id="CAAvDA14YVhjvgRR0D4Kvuk_qwdhvkXPfDfUzBxPsVO7VcRparA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="24911C35-50DF-44F2-BD1B-5AC9D6799369_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk warnings on x86<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-03 00:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15484.php">Gilles GOUAILLARDET: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>In reply to:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whether just adding a (uintptr_t) cast is sufficient or not depends on the
<br>
usage, and I don't pretend to have looked much deeper than seeing that this
<br>
macro is common to the line numbers in the warnings I quoted.
<br>
<p>If the intent is to uniformly store a pointer then a (uintptr_t *) cast may
<br>
be appropriate, though that would use the most-significant 32-bits on ppc32
<br>
and least-significant 32-bits on x86.  Again, the appropriate form for the
<br>
macro depends on how the field is used.
<br>
<p>-Paul
<br>
<p><p>On Sat, Aug 2, 2014 at 9:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Arg - that raises an interesting point. This is a pointer to a 64-bit
</span><br>
<span class="quotelev1">&gt; number. Will uintptr_t resolve that problem on such platforms?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 2, 2014, at 8:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like on a 32-bit platform a (uintptr_t) cast is desired in the
</span><br>
<span class="quotelev1">&gt; OMPI_CAST_RTE_NAME() macro.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warnings from current trunk tarball attributable to the missing case
</span><br>
<span class="quotelev1">&gt; include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:89:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:97:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/mca/pml/bfo/pml_bfo_failover.c:1417:
</span><br>
<span class="quotelev1">&gt; warning: cast to pointer from integer of different size
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15481.php">http://www.open-mpi.org/community/lists/devel/2014/08/15481.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15482.php">http://www.open-mpi.org/community/lists/devel/2014/08/15482.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15483/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15484.php">Gilles GOUAILLARDET: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>In reply to:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
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
