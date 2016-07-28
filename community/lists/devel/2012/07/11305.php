<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 19 09:11:25 2012" -->
<!-- isoreceived="20120719131125" -->
<!-- sent="Thu, 19 Jul 2012 15:11:18 +0200" -->
<!-- isosent="20120719131118" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include" -->
<!-- id="6D2D370F-6B69-4460-9BEF-5BC1109387D3_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D0324F27-97AA-4614-BFDF-D21394857B7C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-19 09:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11306.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="11304.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include"</a>
<li><strong>In reply to:</strong> <a href="11304.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jul 19, 2012, at 14:30 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I had to revert this commit so the trunk would build again. Perhaps you and Brian could work together to update the implementation to match whatever API is correct, and then commit the entire change as one revision so the trunk remains buildable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2012, at 7:23 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-07-18 10:23:23 EDT (Wed, 18 Jul 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 26801
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26801">https://svn.open-mpi.org/trac/ompi/changeset/26801</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix the non-blocking collective prototypes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/include/mpi.h.in |     6 ++----                                  
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 2 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/include/mpi.h.in
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/include/mpi.h.in	Wed Jul 18 10:22:45 2012	(r26800)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/include/mpi.h.in	2012-07-18 10:23:23 EDT (Wed, 18 Jul 2012)	(r26801)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2003,12 +2003,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                     MPI_Datatype datatype, MPI_Op);
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC  int PMPI_Reduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
</span><br>
<span class="quotelev2">&gt;&gt;                                       MPI_Datatype datatype, MPI_Op op, MPI_Comm comm);
</span><br>
<span class="quotelev2">&gt;&gt; -OMPI_DECLSPEC  int PMPI_Ireduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
</span><br>
<span class="quotelev2">&gt;&gt; -                                        MPI_Datatype datatype, MPI_Op op, MPI_Comm comm, MPI_Request *request);
</span><br>
<span class="quotelev2">&gt;&gt; -OMPI_DECLSPEC  int PMPI_Reduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
</span><br>
<span class="quotelev2">&gt;&gt; -                                       MPI_Datatype datatype, MPI_Op op, MPI_Comm comm);
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC  int PMPI_Reduce_scatter_block(void *sendbuf, void *recvbuf, int recvcount,
</span><br>
<span class="quotelev2">&gt;&gt;                                             MPI_Datatype datatype, MPI_Op op, MPI_Comm comm);
</span><br>
<span class="quotelev2">&gt;&gt; +OMPI_DECLSPEC  int PMPI_Ireduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
</span><br>
<span class="quotelev2">&gt;&gt; +                                       MPI_Datatype datatype, MPI_Op op, MPI_Comm comm);
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC  int PMPI_Ireduce_scatter_block(void *sendbuf, void *recvbuf, int recvcount,
</span><br>
<span class="quotelev2">&gt;&gt;                                              MPI_Datatype datatype, MPI_Op op, MPI_Comm comm, MPI_Request *request);
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC  int PMPI_Register_datarep(char *datarep,
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="11306.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="11304.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include"</a>
<li><strong>In reply to:</strong> <a href="11304.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include"</a>
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
