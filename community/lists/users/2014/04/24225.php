<?
$subject_val = "Re: [OMPI users] probable bug in 1.9a1r31409";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 14:20:28 2014" -->
<!-- isoreceived="20140416182028" -->
<!-- sent="Wed, 16 Apr 2014 21:20:26 +0300" -->
<!-- isosent="20140416182026" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] probable bug in 1.9a1r31409" -->
<!-- id="CAAO1KyaZ-7zDmrLTy6FTgUB4-irvsMcxiaNTTFOJGXyPsvRbsA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KybEW9cc_jUOxEzSssLyF7WRNQ-eDeBdtdjw9QQGYznPcQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-16 14:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24226.php">Saliya Ekanayake: "[OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Previous message:</strong> <a href="24224.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24219.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I committed your patch to the trunk.
<br>
thanks
<br>
M
<br>
<p><p>On Wed, Apr 16, 2014 at 6:49 PM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; looks good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 16, 2014 at 4:35 PM, &#197;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/16/2014 02:25 PM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found this problem when building r31409 with Pathscale 5.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pshmem_barrier.c:81:6: error: redeclaration of 'pshmem_barrier_all' must
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the 'overloadable' attribute
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void shmem_barrier_all(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../oshmem/shmem/c/profile/defines.h:193:37: note: expanded from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macro 'shmem_barrier_all'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define shmem_barrier_all           pshmem_barrier_all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pshmem_barrier.c:78:14: note: previous overload of function is here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #pragma weak shmem_barrier_all = pshmem_barrier_all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../oshmem/shmem/c/profile/defines.h:193:37: note: expanded from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macro 'shmem_barrier_all'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define shmem_barrier_all           pshmem_barrier_all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pragma weak and define clashing...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Suggested patch attached (actually there where two similar cases...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev2">&gt;&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
</span><br>
<span class="quotelev2">&gt;&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24226.php">Saliya Ekanayake: "[OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Previous message:</strong> <a href="24224.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24219.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
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
