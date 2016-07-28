<?
$subject_val = "Re: [OMPI users] multi-threaded programming";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 14:10:24 2011" -->
<!-- isoreceived="20110308191024" -->
<!-- sent="Tue, 8 Mar 2011 14:10:20 -0500" -->
<!-- isosent="20110308191020" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-threaded programming" -->
<!-- id="AANLkTinoaZdueWa+SzHExzkDJ=sh67iU8yGKvmjP9+wq_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D766897.2020905_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-threaded programming<br>
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 14:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15815.php">Eugene Loh: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Previous message:</strong> <a href="15813.php">Eugene Loh: "[OMPI users] multi-threaded programming"</a>
<li><strong>In reply to:</strong> <a href="15813.php">Eugene Loh: "[OMPI users] multi-threaded programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15815.php">Eugene Loh: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Reply:</strong> <a href="15815.php">Eugene Loh: "Re: [OMPI users] multi-threaded programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A follow-up question (and pardon if this sounds stupid) is this:
<br>
<p>If I want to make my process multithreaded, BUT only one thread has
<br>
anything to do with MPI (for example, using OpenMP inside MPI), then
<br>
the results will be correct EVEN IF #1 or #2 of Eugene holds true. Is
<br>
this correct?
<br>
<p>Thanks
<br>
Durga
<br>
<p>On Tue, Mar 8, 2011 at 12:34 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Let's say you have multi-threaded MPI processes, you request
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE and get MPI_THREAD_MULTIPLE, and you use the self,sm,tcp
</span><br>
<span class="quotelev1">&gt; BTLs (which have some degree of threading support). &#160;Is it okay to have an
</span><br>
<span class="quotelev1">&gt; [MPI_Isend|MPI_Irecv] on one thread be completed by an MPI_Wait on another
</span><br>
<span class="quotelev1">&gt; thread? &#160;I'm assuming some sort of synchronization and memory barrier/flush
</span><br>
<span class="quotelev1">&gt; in between to protect against funny race conditions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it makes things any easier on you, we can do this multiple-choice style:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) &#160;Forbidden by the MPI standard.
</span><br>
<span class="quotelev1">&gt; 2) &#160;Not forbidden by the MPI standard, but will not work with OMPI (not even
</span><br>
<span class="quotelev1">&gt; with the BTLs that claim to be multi-threaded).
</span><br>
<span class="quotelev1">&gt; 3) &#160;Works well with OMPI (provided you use a BTL that's multi-threaded).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's looking like #2 to me, but I'm not sure.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15815.php">Eugene Loh: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Previous message:</strong> <a href="15813.php">Eugene Loh: "[OMPI users] multi-threaded programming"</a>
<li><strong>In reply to:</strong> <a href="15813.php">Eugene Loh: "[OMPI users] multi-threaded programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15815.php">Eugene Loh: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>Reply:</strong> <a href="15815.php">Eugene Loh: "Re: [OMPI users] multi-threaded programming"</a>
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
