<?
$subject_val = "Re: [OMPI users] probable bug in 1.9a1r31409";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 09:35:39 2014" -->
<!-- isoreceived="20140416133539" -->
<!-- sent="Wed, 16 Apr 2014 15:35:35 +0200" -->
<!-- isosent="20140416133535" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] probable bug in 1.9a1r31409" -->
<!-- id="534E8727.4020300_at_hpc2n.umu.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="534E76C7.3060504_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] probable bug in 1.9a1r31409<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 09:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24216.php">Ralph Castain: "Re: [OMPI users] FW: Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24213.php">&#197;ke Sandgren: "[OMPI users] probable bug in 1.9a1r31409"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24219.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>Reply:</strong> <a href="24219.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/16/2014 02:25 PM, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Found this problem when building r31409 with Pathscale 5.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pshmem_barrier.c:81:6: error: redeclaration of 'pshmem_barrier_all' must
</span><br>
<span class="quotelev1">&gt; have the 'overloadable' attribute
</span><br>
<span class="quotelev1">&gt; void shmem_barrier_all(void)
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; ../../../../oshmem/shmem/c/profile/defines.h:193:37: note: expanded from
</span><br>
<span class="quotelev1">&gt; macro 'shmem_barrier_all'
</span><br>
<span class="quotelev1">&gt; #define shmem_barrier_all           pshmem_barrier_all
</span><br>
<span class="quotelev1">&gt;                                      ^
</span><br>
<span class="quotelev1">&gt; pshmem_barrier.c:78:14: note: previous overload of function is here
</span><br>
<span class="quotelev1">&gt; #pragma weak shmem_barrier_all = pshmem_barrier_all
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../../../oshmem/shmem/c/profile/defines.h:193:37: note: expanded from
</span><br>
<span class="quotelev1">&gt; macro 'shmem_barrier_all'
</span><br>
<span class="quotelev1">&gt; #define shmem_barrier_all           pshmem_barrier_all
</span><br>
<span class="quotelev1">&gt;                                      ^
</span><br>
<span class="quotelev1">&gt; pragma weak and define clashing...
</span><br>
<p><p>Suggested patch attached (actually there where two similar cases...)
<br>
<p><p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24217/fix.weak.define.clash">fix.weak.define.clash</a>
</ul>
<!-- attachment="fix.weak.define.clash" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24216.php">Ralph Castain: "Re: [OMPI users] FW: Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24213.php">&#197;ke Sandgren: "[OMPI users] probable bug in 1.9a1r31409"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24219.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>Reply:</strong> <a href="24219.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
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
