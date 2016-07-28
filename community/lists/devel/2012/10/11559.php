<?
$subject_val = "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 12:19:20 2012" -->
<!-- isoreceived="20121004161920" -->
<!-- sent="Thu, 04 Oct 2012 12:19:10 -0400" -->
<!-- isosent="20121004161910" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request" -->
<!-- id="506DB6FE.3060602_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC0E892A1A_at_G01JPEXMBYT02" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 12:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11560.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11558.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>In reply to:</strong> <a href="11555.php">Kawashima, Takahiro: "[OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/04/12 07:00, Kawashima, Takahiro wrote:
<br>
<span class="quotelev1">&gt; (1) MPI_SOURCE of MPI_Status for a null request must be MPI_ANY_SOURCE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    This bug is caused by a use of an incorrect variable in
</span><br>
<span class="quotelev1">&gt;    ompi/mpi/c/wait.c (for MPI_Wait) and by an incorrect
</span><br>
<span class="quotelev1">&gt;    initialization of ompi_request_null in ompi/request/request.c
</span><br>
<span class="quotelev1">&gt;    (for MPI_Waitall and MPI_Testall).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) MPI_Status for an inactive request must be an empty status.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    This bug is caused by not updating a req_status field of an
</span><br>
<span class="quotelev1">&gt;    inactive persistent request object in ompi/request/req_wait.c
</span><br>
<span class="quotelev1">&gt;    and ompi/request/req_test.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (3) Possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    r23554 fixed possible BUS errors on sparc64 processors.
</span><br>
<span class="quotelev1">&gt;    But the fix seems to be insufficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    We should use OMPI_STATUS_SET macro for all user-supplied
</span><br>
<span class="quotelev1">&gt;    MPI_Status objects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch is for Open MPI trunk and it also fixes some
</span><br>
<span class="quotelev1">&gt; typos in comments. A program to reproduce bugs (1) and (2) is
</span><br>
<span class="quotelev1">&gt; also attached.
</span><br>
Again, I apologize for the delays in fixing #3.  Anyhow, the fix is 
<br>
available in r27403 and I updated trac ticket 3218.  This particular fix 
<br>
does not address #1 or #2.  Note that OMPI_STATUS_SET has been removed 
<br>
as part of r27403 and status structs can now be accessed directly in the 
<br>
OMPI C internals.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11560.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11558.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>In reply to:</strong> <a href="11555.php">Kawashima, Takahiro: "[OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
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
