<?
$subject_val = "Re: [OMPI devel] Warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 09:52:04 2012" -->
<!-- isoreceived="20120626135204" -->
<!-- sent="Tue, 26 Jun 2012 09:52:00 -0400" -->
<!-- isosent="20120626135200" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings" -->
<!-- id="D3A56BF5-DF46-46DF-98B4-958FC830F8A0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A896F41B-F56C-403D-9E97-3F20A8DEED77_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 09:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11180.php">Jeff Squyres: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11178.php">George Bosilca: "Re: [OMPI devel] Warnings"</a>
<li><strong>In reply to:</strong> <a href="11178.php">George Bosilca: "Re: [OMPI devel] Warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the patch.
<br>
<p>These got confused / lost in the last few days of furious commits.  :-(
<br>
<p><p>On Jun 26, 2012, at 9:47 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; It's a copy/paste typo in mpi.h.in. Please try with the attached patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi/include/mpi.h.in
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/include/mpi.h.in	(revision 26662)
</span><br>
<span class="quotelev1">&gt; +++ ompi/include/mpi.h.in	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -2006,9 +2006,9 @@
</span><br>
<span class="quotelev1">&gt;                                        MPI_Datatype datatype, MPI_Op op, MPI_Comm comm);
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC  int PMPI_Ireduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
</span><br>
<span class="quotelev1">&gt;                                         MPI_Datatype datatype, MPI_Op op, MPI_Comm comm, MPI_Request *request);
</span><br>
<span class="quotelev1">&gt; -OMPI_DECLSPEC  int PMPI_Reduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC  int PMPI_Reduce_scatter_block(void *sendbuf, void *recvbuf, int recvcounts,
</span><br>
<span class="quotelev1">&gt;                                        MPI_Datatype datatype, MPI_Op op, MPI_Comm comm);
</span><br>
<span class="quotelev1">&gt; -OMPI_DECLSPEC  int PMPI_Ireduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC  int PMPI_Ireduce_scatter_block(void *sendbuf, void *recvbuf, int recvcounts,
</span><br>
<span class="quotelev1">&gt;                                         MPI_Datatype datatype, MPI_Op op, MPI_Comm comm, MPI_Request *request);
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC  int PMPI_Register_datarep(char *datarep,
</span><br>
<span class="quotelev1">&gt;                                          MPI_Datarep_conversion_function *read_conversion_fn,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 26, 2012, at 15:39 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone recognize these?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; preduce_scatter_block.c:44: warning: no previous prototype for 'PMPI_Reduce_scatter_block'
</span><br>
<span class="quotelev2">&gt;&gt; pireduce_scatter_block.c:45: warning: no previous prototype for 'PMPI_Ireduce_scatter_block'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure where they came from - seeing this on Linux.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11180.php">Jeff Squyres: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11178.php">George Bosilca: "Re: [OMPI devel] Warnings"</a>
<li><strong>In reply to:</strong> <a href="11178.php">George Bosilca: "Re: [OMPI devel] Warnings"</a>
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
