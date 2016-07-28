<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 12:41:55 2009" -->
<!-- isoreceived="20091203174155" -->
<!-- sent="Thu, 03 Dec 2009 18:42:32 +0100" -->
<!-- isosent="20091203174232" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="87k4x4dkdz.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5839821C-518D-49E4-AE80-8E6F74AE9F1F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 12:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11403.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11403.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 3 Dec 2009 12:21:50 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Dec 3, 2009, at 10:56 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The allocation statement is ok:
</span><br>
<span class="quotelev2">&gt; &gt; allocate(vec(vec_size,vec_per_proc*(size-1)))
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This allocates memory vec(32768, 2350)
</span><br>
<p>It's easier to translate to C rather than trying to read Fortran
<br>
directly.
<br>
<p>&nbsp;&nbsp;#define M 2350
<br>
&nbsp;&nbsp;#define N 32768
<br>
&nbsp;&nbsp;complex double vec[M*N];
<br>
<p><span class="quotelev1">&gt; This means that in the first iteration, you're calling:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; irank = 1
</span><br>
<span class="quotelev1">&gt; ivec = 1
</span><br>
<span class="quotelev1">&gt; vec_ind = (47 - 1) * 50 + 1 = 
</span><br>
<span class="quotelev1">&gt; call MPI_RECV(vec(1, 2301), 32768, ...)
</span><br>
<p>&nbsp;&nbsp;MPI_Recv(&amp;vec[2300*N],N,...);
<br>
<p><span class="quotelev1">&gt; And in the last iteration, you're calling:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; irank = 47
</span><br>
<span class="quotelev1">&gt; ivec = 50
</span><br>
<span class="quotelev1">&gt; vec_ind = (47 - 1) * 50 + 50 = 
</span><br>
<span class="quotelev1">&gt; call MPI_RECV(vec(1, 2350), 32768, ...)
</span><br>
<p>&nbsp;&nbsp;MPI_Recv(&amp;vec[2349*N],N,...);
<br>
<p><span class="quotelev1">&gt; That doesn't seem right.
</span><br>
<p>Should be one non-overlapping column (C row) at a time.  It will be
<br>
contiguous in memory, but this isn't using that property.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11403.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11403.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
