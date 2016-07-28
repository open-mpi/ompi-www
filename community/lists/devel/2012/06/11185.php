<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26669 - trunk/ompi/mpi/c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 17:36:42 2012" -->
<!-- isoreceived="20120626213642" -->
<!-- sent="Tue, 26 Jun 2012 17:36:37 -0400" -->
<!-- isosent="20120626213637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26669 - trunk/ompi/mpi/c" -->
<!-- id="D6839CCD-B25F-41F1-9AFB-EC846386169D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120626212446.543D8160B86_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26669 - trunk/ompi/mpi/c<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 17:36:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11186.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Previous message:</strong> <a href="11184.php">Josh Hursey: "[OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Crap.  We're in quiet time.
<br>
<p>+1 beer for Josh.
<br>
<p>Sorry Josh!
<br>
<p><p><p>On Jun 26, 2012, at 5:24 PM, &lt;svn-commit-mailer_at_[hidden]&gt; &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2012-06-26 17:24:45 EDT (Tue, 26 Jun 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26669
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26669">https://svn.open-mpi.org/trac/ompi/changeset/26669</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix memchecker usage in these functions -- these variables are not
</span><br>
<span class="quotelev1">&gt; used.  They're just copy-n-paste errors from the MPI_Reduce_scatter
</span><br>
<span class="quotelev1">&gt; variants.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mpi/c/ireduce_scatter_block.c |     3 ---                                     
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mpi/c/reduce_scatter_block.c  |     3 ---                                     
</span><br>
<span class="quotelev1">&gt;   2 files changed, 0 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/c/ireduce_scatter_block.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/c/ireduce_scatter_block.c	Tue Jun 26 15:53:26 2012	(r26668)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/c/ireduce_scatter_block.c	2012-06-26 17:24:45 EDT (Tue, 26 Jun 2012)	(r26669)
</span><br>
<span class="quotelev1">&gt; @@ -47,9 +47,6 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MEMCHECKER(
</span><br>
<span class="quotelev1">&gt;         int rank;
</span><br>
<span class="quotelev1">&gt; -        
</span><br>
<span class="quotelev1">&gt; -        size = ompi_comm_size(comm);
</span><br>
<span class="quotelev1">&gt; -        rank = ompi_comm_rank(comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         memchecker_comm(comm);
</span><br>
<span class="quotelev1">&gt;         memchecker_datatype(datatype);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/c/reduce_scatter_block.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/c/reduce_scatter_block.c	Tue Jun 26 15:53:26 2012	(r26668)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/c/reduce_scatter_block.c	2012-06-26 17:24:45 EDT (Tue, 26 Jun 2012)	(r26669)
</span><br>
<span class="quotelev1">&gt; @@ -47,9 +47,6 @@
</span><br>
<span class="quotelev1">&gt;     MEMCHECKER(
</span><br>
<span class="quotelev1">&gt;         int rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        size = ompi_comm_size(comm);
</span><br>
<span class="quotelev1">&gt; -        rank = ompi_comm_rank(comm);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;         memchecker_comm(comm);
</span><br>
<span class="quotelev1">&gt;         memchecker_datatype(datatype);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="11186.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Previous message:</strong> <a href="11184.php">Josh Hursey: "[OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
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
