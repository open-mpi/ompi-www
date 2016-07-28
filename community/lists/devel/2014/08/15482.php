<?
$subject_val = "Re: [OMPI devel] trunk warnings on x86";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 00:14:53 2014" -->
<!-- isoreceived="20140803041453" -->
<!-- sent="Sat, 2 Aug 2014 21:14:39 -0700" -->
<!-- isosent="20140803041439" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk warnings on x86" -->
<!-- id="24911C35-50DF-44F2-BD1B-5AC9D6799369_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA141XTDhS9GxQ57CvEyNL1L8gvm_R6+-mFvMnJzgHiiqDg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-03 00:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15483.php">Paul Hargrove: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15481.php">Paul Hargrove: "[OMPI devel] trunk warnings on x86"</a>
<li><strong>In reply to:</strong> <a href="15481.php">Paul Hargrove: "[OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15483.php">Paul Hargrove: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>Reply:</strong> <a href="15483.php">Paul Hargrove: "Re: [OMPI devel] trunk warnings on x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arg - that raises an interesting point. This is a pointer to a 64-bit number. Will uintptr_t resolve that problem on such platforms?
<br>
<p>On Aug 2, 2014, at 8:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks like on a 32-bit platform a (uintptr_t) cast is desired in the OMPI_CAST_RTE_NAME() macro.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Warnings from current trunk tarball attributable to the missing case include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:89: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:97: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/mca/pml/bfo/pml_bfo_failover.c:1417: warning: cast to pointer from integer of different size
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15481.php">http://www.open-mpi.org/community/lists/devel/2014/08/15481.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15482/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15483.php">Paul Hargrove: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15481.php">Paul Hargrove: "[OMPI devel] trunk warnings on x86"</a>
<li><strong>In reply to:</strong> <a href="15481.php">Paul Hargrove: "[OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15483.php">Paul Hargrove: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>Reply:</strong> <a href="15483.php">Paul Hargrove: "Re: [OMPI devel] trunk warnings on x86"</a>
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
