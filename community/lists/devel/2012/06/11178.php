<?
$subject_val = "Re: [OMPI devel] Warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 09:47:21 2012" -->
<!-- isoreceived="20120626134721" -->
<!-- sent="Tue, 26 Jun 2012 15:47:14 +0200" -->
<!-- isosent="20120626134714" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings" -->
<!-- id="A896F41B-F56C-403D-9E97-3F20A8DEED77_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AEAA00EE-08D2-4B63-98B5-8C13E4D04635_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 09:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11179.php">Jeff Squyres: "Re: [OMPI devel] Warnings"</a>
<li><strong>Previous message:</strong> <a href="11177.php">George Bosilca: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11176.php">Ralph Castain: "[OMPI devel] Warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11179.php">Jeff Squyres: "Re: [OMPI devel] Warnings"</a>
<li><strong>Reply:</strong> <a href="11179.php">Jeff Squyres: "Re: [OMPI devel] Warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a copy/paste typo in mpi.h.in. Please try with the attached patch:
<br>
<p>Index: ompi/include/mpi.h.in
<br>
===================================================================
<br>
--- ompi/include/mpi.h.in	(revision 26662)
<br>
+++ ompi/include/mpi.h.in	(working copy)
<br>
@@ -2006,9 +2006,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype datatype, MPI_Op op, MPI_Comm comm);
<br>
&nbsp;OMPI_DECLSPEC  int PMPI_Ireduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype datatype, MPI_Op op, MPI_Comm comm, MPI_Request *request);
<br>
-OMPI_DECLSPEC  int PMPI_Reduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
<br>
+OMPI_DECLSPEC  int PMPI_Reduce_scatter_block(void *sendbuf, void *recvbuf, int recvcounts,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype datatype, MPI_Op op, MPI_Comm comm);
<br>
-OMPI_DECLSPEC  int PMPI_Ireduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
<br>
+OMPI_DECLSPEC  int PMPI_Ireduce_scatter_block(void *sendbuf, void *recvbuf, int recvcounts,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype datatype, MPI_Op op, MPI_Comm comm, MPI_Request *request);
<br>
&nbsp;OMPI_DECLSPEC  int PMPI_Register_datarep(char *datarep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datarep_conversion_function *read_conversion_fn,
<br>
<p><p><p>&nbsp;&nbsp;george.
<br>
<p><p>On Jun 26, 2012, at 15:39 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Anyone recognize these?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; preduce_scatter_block.c:44: warning: no previous prototype for 'PMPI_Reduce_scatter_block'
</span><br>
<span class="quotelev1">&gt; pireduce_scatter_block.c:45: warning: no previous prototype for 'PMPI_Ireduce_scatter_block'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure where they came from - seeing this on Linux.
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="11179.php">Jeff Squyres: "Re: [OMPI devel] Warnings"</a>
<li><strong>Previous message:</strong> <a href="11177.php">George Bosilca: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11176.php">Ralph Castain: "[OMPI devel] Warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11179.php">Jeff Squyres: "Re: [OMPI devel] Warnings"</a>
<li><strong>Reply:</strong> <a href="11179.php">Jeff Squyres: "Re: [OMPI devel] Warnings"</a>
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
