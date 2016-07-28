<?
$subject_val = "Re: [OMPI users] MPI_COMM_split hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 10:10:02 2011" -->
<!-- isoreceived="20111212151002" -->
<!-- sent="Mon, 12 Dec 2011 10:09:53 -0500" -->
<!-- isosent="20111212150953" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_split hanging" -->
<!-- id="D449EF23-C2DA-48EE-BB73-577C5F5E73D9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEnWhdnQmGAytUehm5w3uA0CUJR+notv2LSf32kZPc8xRg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMM_split hanging<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 10:09:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17932.php">Patrick Begou: "[OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17930.php">Josh Hursey: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>In reply to:</strong> <a href="17930.php">Josh Hursey: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17935.php">Gary Gorbet: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Reply:</strong> <a href="17935.php">Gary Gorbet: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2011, at 9:45 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; For MPI_Comm_split, all processes in the input communicator (oldcomm
</span><br>
<span class="quotelev1">&gt; or MPI_COMM_WORLD in your case) must call the operation since it is
</span><br>
<span class="quotelev1">&gt; collective over the input communicator. In your program rank 0 is not
</span><br>
<span class="quotelev1">&gt; calling the operation, so MPI_Comm_split is waiting for it to
</span><br>
<span class="quotelev1">&gt; participate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want rank 0 to be excluded from the any of the communicators,
</span><br>
<span class="quotelev1">&gt; you can give it a special color that is distinct from all other ranks.
</span><br>
<span class="quotelev1">&gt; Upon return from MPI_Comm_split, rank 0 will be given a new
</span><br>
<span class="quotelev1">&gt; communicator containing just one processes, itself. If you do not
</span><br>
<span class="quotelev1">&gt; intend to use that communicator you can free it immediately
</span><br>
<span class="quotelev1">&gt; afterwards.
</span><br>
<p>You can also specify MPI_UNDEFINED as your color, in which case the output communicator in that process will be MPI_COMM_NULL.  See MPI-2.2 p205.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="17932.php">Patrick Begou: "[OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17930.php">Josh Hursey: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>In reply to:</strong> <a href="17930.php">Josh Hursey: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17935.php">Gary Gorbet: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Reply:</strong> <a href="17935.php">Gary Gorbet: "Re: [OMPI users] MPI_COMM_split hanging"</a>
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
