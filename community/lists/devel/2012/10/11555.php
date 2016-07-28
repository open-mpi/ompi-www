<?
$subject_val = "[OMPI devel] [patch] Invalid MPI_Status for null or inactive request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 07:00:21 2012" -->
<!-- isoreceived="20121004110021" -->
<!-- sent="Thu, 4 Oct 2012 11:00:11 +0000" -->
<!-- isosent="20121004110011" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] Invalid MPI_Status for null or inactive request" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E892A1A_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] Invalid MPI_Status for null or inactive request<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 07:00:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11556.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11554.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11557.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11557.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11559.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI developers,
<br>
<p>I found some bugs in Open MPI and attach a patch to fix them.
<br>
<p>The bugs are:
<br>
<p>(1) MPI_SOURCE of MPI_Status for a null request must be MPI_ANY_SOURCE.
<br>
<p>&nbsp;&nbsp;3.7.3 Communication Completion in MPI-3.0 (and also MPI-2.2)
<br>
&nbsp;&nbsp;says an MPI_Status object returned by MPI_{Wait|Test}{|any|all}
<br>
&nbsp;&nbsp;must be an empty status for a null request (MPI_REQUEST_NULL).
<br>
&nbsp;&nbsp;And the MPI_SOURCE field of the empty status must be
<br>
&nbsp;&nbsp;MPI_ANY_SOURCE.
<br>
<p>&nbsp;&nbsp;But MPI_Wait, MPI_Waitall, and MPI_Testall set MPI_PROC_NULL
<br>
&nbsp;&nbsp;to the MPI_SOURCE field of such status object.
<br>
<p>&nbsp;&nbsp;This bug is caused by a use of an incorrect variable in
<br>
&nbsp;&nbsp;ompi/mpi/c/wait.c (for MPI_Wait) and by an incorrect
<br>
&nbsp;&nbsp;initialization of ompi_request_null in ompi/request/request.c
<br>
&nbsp;&nbsp;(for MPI_Waitall and MPI_Testall).
<br>
<p>(2) MPI_Status for an inactive request must be an empty status.
<br>
<p>&nbsp;&nbsp;3.7.3 Communication Completion in MPI-3.0 (and also MPI-2.2)
<br>
&nbsp;&nbsp;says an MPI_Status object returned by MPI_{Wait|Test}{|any|all}
<br>
&nbsp;&nbsp;must be an empty status for an inactive persistent request.
<br>
<p>&nbsp;&nbsp;But MPI_Wait, MPI_Waitall, and MPI_Testall return an old
<br>
&nbsp;&nbsp;status (that was returned when the request was active) for
<br>
&nbsp;&nbsp;an inactive persistent request.
<br>
<p>&nbsp;&nbsp;This bug is caused by not updating a req_status field of an
<br>
&nbsp;&nbsp;inactive persistent request object in ompi/request/req_wait.c
<br>
&nbsp;&nbsp;and ompi/request/req_test.c.
<br>
<p>(3) Possible BUS errors on sparc64 processors.
<br>
<p>&nbsp;&nbsp;r23554 fixed possible BUS errors on sparc64 processors.
<br>
&nbsp;&nbsp;But the fix seems to be insufficient.
<br>
<p>&nbsp;&nbsp;We should use OMPI_STATUS_SET macro for all user-supplied
<br>
&nbsp;&nbsp;MPI_Status objects.
<br>
<p>The attached patch is for Open MPI trunk and it also fixes some
<br>
typos in comments. A program to reproduce bugs (1) and (2) is
<br>
also attached.
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>


<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11555/status.patch">status.patch</a>
</ul>
<!-- attachment="status.patch" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11555/status.c">status.c</a>
</ul>
<!-- attachment="status.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11555/License.txt">License.txt</a>
</ul>
<!-- attachment="License.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11556.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11554.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11557.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11557.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Reply:</strong> <a href="11559.php">Eugene Loh: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
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
