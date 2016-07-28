<?
$subject_val = "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 17:08:22 2011" -->
<!-- isoreceived="20111215220822" -->
<!-- sent="Thu, 15 Dec 2011 15:08:14 -0700" -->
<!-- isosent="20111215220814" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)" -->
<!-- id="D134BDCB-4629-48E8-BFF3-BFD59FB1303C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="029F531E-987C-4178-B16A-57D0E619041B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 17:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10151.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10149.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10148.php">Ralph Castain: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10149.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: the makefile.am in that directory no longer includes that file, as it should. So the file itself just needs to be deleted as the patch apparently missed it.
<br>
<p><p>On Dec 15, 2011, at 3:06 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; This file does not exist in the trunk, and should not exist in 1.5 any more. Perhaps the patch for 1.5 didn't correctly delete it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2011, at 3:02 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/tools/orterun/debuggers.c:142:struct MPIR_PROCDESC *MPIR_proctable = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/tools/orterun/debuggers.c:143:int MPIR_proctable_size = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10151.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10149.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10148.php">Ralph Castain: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10149.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
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
