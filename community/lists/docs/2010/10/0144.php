<?
$subject_val = "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 18 11:17:40 2010" -->
<!-- isoreceived="20101018151740" -->
<!-- sent="Mon, 18 Oct 2010 17:18:13 +0200" -->
<!-- isosent="20101018151813" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page" -->
<!-- id="843d79a2f60a10c4a1b8.1287415093_at_localhost.localdomain" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-18 11:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2010/07/0143.php">Jeff Squyres: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>Reply:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
# HG changeset patch
<br>
# User Jed Brown &lt;jed_at_[hidden]&gt;
<br>
# Date 1287414821 -7200
<br>
# Branch v1.5
<br>
# Node ID 843d79a2f60a10c4a1b88defe3f4106486d75e8f
<br>
# Parent  a4d831b5ce157ecd9a0ab01f6ae0e66782912ce7
<br>
Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page
<br>
<p>diff --git a/ompi/mpi/man/man3/MPI_Allgatherv.3in b/ompi/mpi/man/man3/MPI_Allgatherv.3in
<br>
--- a/ompi/mpi/man/man3/MPI_Allgatherv.3in
<br>
+++ b/ompi/mpi/man/man3/MPI_Allgatherv.3in
<br>
@@ -84,7 +84,7 @@
<br>
&nbsp;for root = 0 , ..., n-1. The rules for correct usage of MPI_Allgatherv are easily found from the corresponding rules for MPI_Gatherv. 
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
&nbsp;&nbsp;&nbsp;&nbsp;MPI_GATHERV ( MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, recvbuf, 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2010/07/0143.php">Jeff Squyres: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>Reply:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
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
