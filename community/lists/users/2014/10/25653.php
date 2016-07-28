<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 02:08:35 2014" -->
<!-- isoreceived="20141031060835" -->
<!-- sent="Fri, 31 Oct 2014 07:08:33 +0100" -->
<!-- isosent="20141031060833" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="54532761.5010203_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5452C8A5.8090304_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem in Open MPI 1.8.3<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-31 02:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25654.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Previous message:</strong> <a href="25652.php">Marshall Ward: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>In reply to:</strong> <a href="25649.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25655.php">Roland Fehrenbacher: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/10/2014 00:24, Gus Correa a &#233;crit :
<br>
<span class="quotelev1">&gt; 2) Any recommendation for the values of the
</span><br>
<span class="quotelev1">&gt; various vader btl parameters?
</span><br>
<span class="quotelev1">&gt; [There are 12 of them in OMPI 1.8.3!
</span><br>
<span class="quotelev1">&gt; That is real challenge to get right.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which values did you use in your benchmarks?
</span><br>
<span class="quotelev1">&gt; Defaults?
</span><br>
<span class="quotelev1">&gt; Other?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In particular, is there an optimal value for the eager/rendevous
</span><br>
<span class="quotelev1">&gt; threshold value? (btl_vader_eager_limit, default=4kB)
</span><br>
<span class="quotelev1">&gt; [The INRIA web site suggests 32kB for the sm+knem counterpart
</span><br>
<span class="quotelev1">&gt; (btl_sm_eager_limit, default=4kB).]
</span><br>
<p>There's no perfect value, and no easy way to tune all this.
<br>
<p>The impact of direct copy mechanisms such as XPMEM/KNEM/CMA depends on
<br>
the contention in your memory bus and caches. If you're doing a
<br>
Alltoall, the optimal threshold for enabling them will be much lower
<br>
than if you're doing a pingpong because doing a single copy instead of
<br>
two usually helps more when the memory subsystem is overloaded. And it
<br>
also depends on your process placement and what cache (and cache size)
<br>
is shared between them.
<br>
<p>Unfortunately, microbenchmarks will hardly help you decide of a better
<br>
threshold because performance also depend on the state of buffers in
<br>
caches (did the application writes the send buffer recently? will the
<br>
application read the buffer soon? microbenchmark ignore these), and each
<br>
copy strategy may have different impact of caches (which process is
<br>
reading and writing from which processors and from/to which buffer?).
<br>
<p>So I'd say don't bother tuning things for too long...
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25654.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Previous message:</strong> <a href="25652.php">Marshall Ward: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>In reply to:</strong> <a href="25649.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25655.php">Roland Fehrenbacher: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
