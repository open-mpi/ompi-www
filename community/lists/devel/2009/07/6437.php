<?
$subject_val = "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 18:08:52 2009" -->
<!-- isoreceived="20090715220852" -->
<!-- sent="Wed, 15 Jul 2009 18:08:47 -0400 (EDT)" -->
<!-- isosent="20090715220847" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank" -->
<!-- id="alpine.DEB.1.10.0907151802290.19160_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40907151450g27b05b2bn68da8458237e6eb6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 18:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6438.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6436.php">Lisandro Dalcin: "[OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<li><strong>In reply to:</strong> <a href="6436.php">Lisandro Dalcin: "[OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 15 Jul 2009, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; The MPI 2-1 standard says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;MPI_PROC_NULL is a valid target rank in the MPI RMA calls
</span><br>
<span class="quotelev1">&gt; MPI_ACCUMULATE, MPI_GET, and MPI_PUT. The effect is the same as for
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL in MPI point-to-point communication. After any RMA
</span><br>
<span class="quotelev1">&gt; operation with rank MPI_PROC_NULL, it is still necessary to finish the
</span><br>
<span class="quotelev1">&gt; RMA epoch with the synchronization method that started the epoch.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, MPI_Accumulate() is not quite the same as
</span><br>
<span class="quotelev1">&gt; point-to-point, as a reduction is involved. Suppose you make this call
</span><br>
<span class="quotelev1">&gt; (let me abuse and use keyword arguments):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Accumulate(..., target_rank=MPI_PROC_NULL,
</span><br>
<span class="quotelev1">&gt; target_datatype=MPI_BYTE, op=MPI_SUM, ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIUC, the call fails (with MPI_ERR_OP) in Open MPI because MPI_BYTE is
</span><br>
<span class="quotelev1">&gt; an invalid datatype for MPI_SUM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But provided that the target rank is MPI_PROC_NULL, would it make
</span><br>
<span class="quotelev1">&gt; sense for the call to success?
</span><br>
<p>I believe no.  We do full argument error checking (that you provided a 
<br>
valid communicator and datatype) on send, receive, put, and get when the 
<br>
source/dest is MPI_PROC_NULL.  Therefore, I think it's logical that we 
<br>
extend that to include valid operations for accumulate.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6438.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6436.php">Lisandro Dalcin: "[OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<li><strong>In reply to:</strong> <a href="6436.php">Lisandro Dalcin: "[OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
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
