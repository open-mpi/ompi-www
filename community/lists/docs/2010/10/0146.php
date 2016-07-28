<?
$subject_val = "Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 18 14:32:15 2010" -->
<!-- isoreceived="20101018183215" -->
<!-- sent="Mon, 18 Oct 2010 14:32:10 -0400" -->
<!-- isosent="20101018183210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page" -->
<!-- id="B1CC9867-F291-45F5-8772-C2659C4156B3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6f3923ce83805b9aca84.1287416176_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-18 14:32:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0147.php">Richard Pitre: "[OMPI docs] please remove me from your mailing list"</a>
<li><strong>Previous message:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>In reply to:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed both.  Thanks!
<br>
<p><p>On Oct 18, 2010, at 11:36 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; # HG changeset patch
</span><br>
<span class="quotelev1">&gt; # User Jed Brown &lt;jed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; # Date 1287416079 -7200
</span><br>
<span class="quotelev1">&gt; # Branch v1.5
</span><br>
<span class="quotelev1">&gt; # Node ID 6f3923ce83805b9aca845f65c57c0fa86ecbcce8
</span><br>
<span class="quotelev1">&gt; # Parent  843d79a2f60a10c4a1b88defe3f4106486d75e8f
</span><br>
<span class="quotelev1">&gt; Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mpi/man/man3/MPI_Allgather.3in b/ompi/mpi/man/man3/MPI_Allgather.3in
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mpi/man/man3/MPI_Allgather.3in
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mpi/man/man3/MPI_Allgather.3in
</span><br>
<span class="quotelev1">&gt; @@ -95,7 +95,7 @@
</span><br>
<span class="quotelev1">&gt; After the call, every process has the group-wide concatenation of the sets of data. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .SH USE OF IN-PLACE OPTION
</span><br>
<span class="quotelev1">&gt; -When the communicator is an intracommunicator, you can perform an all-gather operation in-place (the output buffer is used as the input buffer).  Use the variable MPI_IN_PLACE as the value of both \fIsendbuf\fR and \fIrecvbuf\fR.  In this case, \fIsendcount\fR and \fIsendtype\fR are ignored.  The input data of each process is assumed to be in the area where that process would receive its own contribution to the receive buffer.  Specifically, the outcome of a call to MPI_Allgather that used the in-place option is identical to the case in which all processes executed \fIn\fR calls to
</span><br>
<span class="quotelev1">&gt; +When the communicator is an intracommunicator, you can perform an all-gather operation in-place (the output buffer is used as the input buffer).  Use the variable MPI_IN_PLACE as the value of \fIsendbuf\fR on all processes.  In this case, \fIsendcount\fR and \fIsendtype\fR are ignored.  The input data of each process is assumed to be in the area where that process would receive its own contribution to the receive buffer.  Specifically, the outcome of a call to MPI_Allgather that used the in-place option is identical to the case in which all processes executed \fIn\fR calls to
</span><br>
<span class="quotelev1">&gt; .sp
</span><br>
<span class="quotelev1">&gt; .nf
</span><br>
<span class="quotelev1">&gt;    MPI_GATHER ( MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, recvbuf, 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0147.php">Richard Pitre: "[OMPI docs] please remove me from your mailing list"</a>
<li><strong>Previous message:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
<li><strong>In reply to:</strong> <a href="0145.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page"</a>
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
