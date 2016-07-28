<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 14:12:46 2012" -->
<!-- isoreceived="20120119191246" -->
<!-- sent="Thu, 19 Jan 2012 12:12:37 -0700" -->
<!-- isosent="20120119191237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742" -->
<!-- id="61EC5FE2-2B3C-4565-8CB4-5B4E3450B2D5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D0CA164F-4974-47C4-8F42-37A2E2E0A66C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 14:12:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10229.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Previous message:</strong> <a href="10227.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<li><strong>In reply to:</strong> <a href="10227.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2012, at 11:58 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This is a critical change, with a significant impact on the code base. Basically by moving the binding later in the code after the modex was completed, all memory allocated before (which is all memory allocated during the registration of all OMPI modules) will endue being on the wrong NUMA node (at least by default on Linux). This can have tremendous impact on performance!
</span><br>
<p>Yes and no. First, any process launched via mpirun is already bound (both cpu and memory) prior to being exec'd, so this change has no impact on them.
<br>
<p>Second, any process direct-launched where the RM is setting the binding is also bound prior to being exec'd, so this change has no impact there.
<br>
<p>Thus, the change -only- impacts those processes that are direct-launched but want OMPI to bind them anyway. In that one case, this change is required because the proc has no way to self-determine its binding prior to doing the modex.
<br>
<p>Jeff/Nathan are adding language to btl.h to highlight the need to avoid allocating memory during registration - we informally have always stated that any allocation should only occur during add_procs, but people may have forgotten over time.
<br>
<p>Memory allocated by other frameworks should follow similar rules.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2012, at 13:38 , rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-01-19 13:38:58 EST (Thu, 19 Jan 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25742
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25742">https://svn.open-mpi.org/trac/ompi/changeset/25742</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Correct ordering in MPI_Init so that we do the modex prior to attempting to bind ourselves in the direct launch case as the modex contains info required for self-binding.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_init.c |   238 ++++++++++++++++++++--------------------
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 119 insertions(+), 119 deletions(-)
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10229.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Previous message:</strong> <a href="10227.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<li><strong>In reply to:</strong> <a href="10227.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
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
