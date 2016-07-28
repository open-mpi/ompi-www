<?
$subject_val = "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 18 11:35:41 2010" -->
<!-- isoreceived="20101018153541" -->
<!-- sent="Mon, 18 Oct 2010 17:36:16 +0200" -->
<!-- isosent="20101018153616" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page" -->
<!-- id="6f3923ce83805b9aca84.1287416176_at_localhost.localdomain" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="843d79a2f60a10c4a1b8.1287415093_at_localhost.localdomain" -->
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
<strong>Subject:</strong> [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-18 11:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Jeff Squyres: "Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page"</a>
<li><strong>In reply to:</strong> <a href="0144.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Jeff Squyres: "Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>Reply:</strong> <a href="0146.php">Jeff Squyres: "Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
# HG changeset patch
<br>
# User Jed Brown &lt;jed_at_[hidden]&gt;
<br>
# Date 1287416079 -7200
<br>
# Branch v1.5
<br>
# Node ID 6f3923ce83805b9aca845f65c57c0fa86ecbcce8
<br>
# Parent  843d79a2f60a10c4a1b88defe3f4106486d75e8f
<br>
Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page
<br>
<p>diff --git a/ompi/mpi/man/man3/MPI_Allgather.3in b/ompi/mpi/man/man3/MPI_Allgather.3in
<br>
--- a/ompi/mpi/man/man3/MPI_Allgather.3in
<br>
+++ b/ompi/mpi/man/man3/MPI_Allgather.3in
<br>
@@ -95,7 +95,7 @@
<br>
&nbsp;After the call, every process has the group-wide concatenation of the sets of data. 
<br>
&nbsp;
<br>
&nbsp;.SH USE OF IN-PLACE OPTION
<br>
-When the communicator is an intracommunicator, you can perform an all-gather operation in-place (the output buffer is used as the input buffer).  Use the variable MPI_IN_PLACE as the value of both \fIsendbuf\fR and \fIrecvbuf\fR.  In this case, \fIsendcount\fR and \fIsendtype\fR are ignored.  The input data of each process is assumed to be in the area where that process would receive its own contribution to the receive buffer.  Specifically, the outcome of a call to MPI_Allgather that used the in-place option is identical to the case in which all processes executed \fIn\fR calls to
<br>
+When the communicator is an intracommunicator, you can perform an all-gather operation in-place (the output buffer is used as the input buffer).  Use the variable MPI_IN_PLACE as the value of \fIsendbuf\fR on all processes.  In this case, \fIsendcount\fR and \fIsendtype\fR are ignored.  The input data of each process is assumed to be in the area where that process would receive its own contribution to the receive buffer.  Specifically, the outcome of a call to MPI_Allgather that used the in-place option is identical to the case in which all processes executed \fIn\fR calls to
<br>
&nbsp;.sp
<br>
&nbsp;.nf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_GATHER ( MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, recvbuf, 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Jeff Squyres: "Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page"</a>
<li><strong>In reply to:</strong> <a href="0144.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Jeff Squyres: "Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>Reply:</strong> <a href="0146.php">Jeff Squyres: "Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
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
