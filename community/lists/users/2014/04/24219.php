<?
$subject_val = "Re: [OMPI users] probable bug in 1.9a1r31409";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 11:49:17 2014" -->
<!-- isoreceived="20140416154917" -->
<!-- sent="Wed, 16 Apr 2014 18:49:14 +0300" -->
<!-- isosent="20140416154914" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] probable bug in 1.9a1r31409" -->
<!-- id="CAAO1KybEW9cc_jUOxEzSssLyF7WRNQ-eDeBdtdjw9QQGYznPcQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="534E8727.4020300_at_hpc2n.umu.se" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 11:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24220.php">flavienne sayou: "[OMPI users] problem with open mpi"</a>
<li><strong>Previous message:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24217.php">&#197;ke Sandgren: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24225.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>Reply:</strong> <a href="24225.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
looks good.
<br>
<p><p>On Wed, Apr 16, 2014 at 4:35 PM, &#197;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On 04/16/2014 02:25 PM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Found this problem when building r31409 with Pathscale 5.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pshmem_barrier.c:81:6: error: redeclaration of 'pshmem_barrier_all' must
</span><br>
<span class="quotelev2">&gt;&gt; have the 'overloadable' attribute
</span><br>
<span class="quotelev2">&gt;&gt; void shmem_barrier_all(void)
</span><br>
<span class="quotelev2">&gt;&gt;       ^
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../oshmem/shmem/c/profile/defines.h:193:37: note: expanded from
</span><br>
<span class="quotelev2">&gt;&gt; macro 'shmem_barrier_all'
</span><br>
<span class="quotelev2">&gt;&gt; #define shmem_barrier_all           pshmem_barrier_all
</span><br>
<span class="quotelev2">&gt;&gt;                                      ^
</span><br>
<span class="quotelev2">&gt;&gt; pshmem_barrier.c:78:14: note: previous overload of function is here
</span><br>
<span class="quotelev2">&gt;&gt; #pragma weak shmem_barrier_all = pshmem_barrier_all
</span><br>
<span class="quotelev2">&gt;&gt;               ^
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../oshmem/shmem/c/profile/defines.h:193:37: note: expanded from
</span><br>
<span class="quotelev2">&gt;&gt; macro 'shmem_barrier_all'
</span><br>
<span class="quotelev2">&gt;&gt; #define shmem_barrier_all           pshmem_barrier_all
</span><br>
<span class="quotelev2">&gt;&gt;                                      ^
</span><br>
<span class="quotelev2">&gt;&gt; pragma weak and define clashing...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggested patch attached (actually there where two similar cases...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24220.php">flavienne sayou: "[OMPI users] problem with open mpi"</a>
<li><strong>Previous message:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24217.php">&#197;ke Sandgren: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24225.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>Reply:</strong> <a href="24225.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
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
