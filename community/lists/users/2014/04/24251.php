<?
$subject_val = "Re: [OMPI users] MPI one-sided communication questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 12:31:48 2014" -->
<!-- isoreceived="20140424163148" -->
<!-- sent="Thu, 24 Apr 2014 10:31:45 -0600" -->
<!-- isosent="20140424163145" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI one-sided communication questions" -->
<!-- id="20140424163145.GB27221_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5354C04E.5010907_at_net-b.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI one-sided communication questions<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 12:31:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24252.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="24250.php">Vince Grimes: "[OMPI users] Connection timed out on TCP and notify question"</a>
<li><strong>In reply to:</strong> <a href="24238.php">Tobias Burnus: "[OMPI users] MPI one-sided communication questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 21, 2014 at 08:53:02AM +0200, Tobias Burnus wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to do one-sided communication as implementation of a
</span><br>
<span class="quotelev1">&gt; Fortran coarray library. &quot;MPI provides three synchronization
</span><br>
<span class="quotelev1">&gt; mechanisms:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;1. The MPI_WIN_FENCE collective synchronization call supports a
</span><br>
<span class="quotelev1">&gt; simple synchronization pattern that is often used in parallel
</span><br>
<span class="quotelev1">&gt; computations: namely a loosely-synchronous model, where global
</span><br>
<span class="quotelev1">&gt; computation phases alternate with global communication phases. [...]
</span><br>
<span class="quotelev1">&gt; &quot;2. The four functions MPI_WIN_START, MPI_WIN_COMPLETE,
</span><br>
<span class="quotelev1">&gt; MPI_WIN_POST, and MPI_WIN_WAIT [...]
</span><br>
<span class="quotelev1">&gt; &quot;3. Finally, shared lock access is provided by the functions
</span><br>
<span class="quotelev1">&gt; MPI_WIN_LOCK, MPI_WIN_LOCK_ALL, MPI_WIN_UNLOCK, and
</span><br>
<span class="quotelev1">&gt; MPI_WIN_UNLOCK_ALL.&quot; (MPIv3, p.438)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to use mechanism 1, but leaving the Win_lock/Win_unlock
</span><br>
<span class="quotelev1">&gt; away does not work. How is one supposed to use the first mechanism?
</span><br>
<span class="quotelev1">&gt; (I haven't tried to specify the &quot;no_locks&quot; for &quot;info&quot;, but that
</span><br>
<span class="quotelev1">&gt; shouldn't matter, should it?)
</span><br>
<p>From what I understand you can not mix active (PSCW, Fence) with passive
<br>
(lock/unlock) access epochs. It is ok to start an active epoch after
<br>
leaving a passive epoch or vise versa. Remember that MPI_Win_fence can
<br>
either start or end an active access epoch. The sematics of the
<br>
synchronization mechanisms are well documented in the standard. See
<br>
MPI-3 &#167; 11.5.
<br>
<p><span class="quotelev1">&gt; Follow up question: Is it semantically correct to have concurrent
</span><br>
<span class="quotelev1">&gt; write access to adjacent array elements with method 1? I mean
</span><br>
<span class="quotelev1">&gt; something like using an array of single-byte elements
</span><br>
<span class="quotelev1">&gt; (integer(kind=1)) where process 2 sets (MPI_Win_put) the elements
</span><br>
<span class="quotelev1">&gt; with odd array indexes and process 3 the ones with even indexes of
</span><br>
<span class="quotelev1">&gt; an array located in process 1? By itself, one writes to different
</span><br>
<span class="quotelev1">&gt; memory locations, but the hardware cannot typically not update
</span><br>
<span class="quotelev1">&gt; single bytes atomically in the memory but only chunks of  (e.g.) 4
</span><br>
<span class="quotelev1">&gt; bytes. The problem is that this access is semantically permitted by
</span><br>
<span class="quotelev1">&gt; Fortran while at the same time, I do not want to do unnecessary
</span><br>
<span class="quotelev1">&gt; locking. In practical terms, accessing the same window/array for
</span><br>
<span class="quotelev1">&gt; MPI_Win_put simultaneously will occur for halo exchange - but it is
</span><br>
<span class="quotelev1">&gt; likely to not access directly adjacent memory.
</span><br>
<p>Yeah. I would be very careful with concurrent write access. Right now
<br>
with osc/rdma you can get away with different process writing to
<br>
adjacent bytes but optimized versions (coming in time for 1.9) will
<br>
probably not give you correct results.
<br>
<p><span class="quotelev1">&gt; Secondly, I probably missed something but is it possible to access
</span><br>
<span class="quotelev1">&gt; arbitrary remote memory without requiring to call something
</span><br>
<span class="quotelev1">&gt; collectively (such as MPI_Win_create)? The usage case is a derived
</span><br>
<span class="quotelev1">&gt; type (C equivalent: struct) which contains a pointer. The derived
</span><br>
<span class="quotelev1">&gt; type/struct (being a coarray in my case) has an associated MPI_Win -
</span><br>
<span class="quotelev1">&gt; and I can hence obtain the address to which the pointer component
</span><br>
<span class="quotelev1">&gt; points to. That address I would then like to use for MPI_Put/MPI_Get
</span><br>
<span class="quotelev1">&gt; - without support of the remove side and, in particular, without
</span><br>
<span class="quotelev1">&gt; calling a collective on all all processes. Any idea how to do this?
</span><br>
<p>This is possible if the window was creates with
<br>
MPI_Win_create_dynamic. Be aware that you will want to keep the number
<br>
of regions attached small since each attached region will use a
<br>
potentially limited resource. See MPI-3 &#167; 11.2.4.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24251/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24252.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="24250.php">Vince Grimes: "[OMPI users] Connection timed out on TCP and notify question"</a>
<li><strong>In reply to:</strong> <a href="24238.php">Tobias Burnus: "[OMPI users] MPI one-sided communication questions"</a>
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
