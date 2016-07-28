<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 13:58:09 2012" -->
<!-- isoreceived="20120119185809" -->
<!-- sent="Thu, 19 Jan 2012 13:58:04 -0500" -->
<!-- isosent="20120119185804" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742" -->
<!-- id="D0CA164F-4974-47C4-8F42-37A2E2E0A66C_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201201191838.q0JIcxtQ002740_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 13:58:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10228.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<li><strong>Previous message:</strong> <a href="10226.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10228.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<li><strong>Reply:</strong> <a href="10228.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a critical change, with a significant impact on the code base. Basically by moving the binding later in the code after the modex was completed, all memory allocated before (which is all memory allocated during the registration of all OMPI modules) will endue being on the wrong NUMA node (at least by default on Linux). This can have tremendous impact on performance!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jan 19, 2012, at 13:38 , rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2012-01-19 13:38:58 EST (Thu, 19 Jan 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 25742
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25742">https://svn.open-mpi.org/trac/ompi/changeset/25742</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Correct ordering in MPI_Init so that we do the modex prior to attempting to bind ourselves in the direct launch case as the modex contains info required for self-binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_mpi_init.c |   238 ++++++++++++++++++++--------------------
</span><br>
<span class="quotelev1">&gt;   1 files changed, 119 insertions(+), 119 deletions(-)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10228.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<li><strong>Previous message:</strong> <a href="10226.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10228.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
<li><strong>Reply:</strong> <a href="10228.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25742"</a>
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
