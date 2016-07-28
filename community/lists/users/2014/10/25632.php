<?
$subject_val = "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 11:41:10 2014" -->
<!-- isoreceived="20141028154110" -->
<!-- sent="Wed, 29 Oct 2014 00:41:03 +0900" -->
<!-- isosent="20141028154103" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
<!-- id="iflfvu1c221yb14ckomnx67b.1414510863639_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 11:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25633.php">Sebastian Rettenberger: "[OMPI users] Allgather in OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="25631.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Maybe in reply to:</strong> <a href="25606.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25634.php">Marco Atzeri: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25634.php">Marco Atzeri: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Marco,
<br>
<p>pthread_mutex_init calls calloc under cygwin but does not allocate memory under linux, so not invoking pthread_mutex_destroy causes a memory leak only under cygwin.
<br>
<p>Gilles
<br>
<p>Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;On 10/28/2014 12:04 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Marco,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is attached a patch that fixes the issue
</span><br>
<span class="quotelev2">&gt;&gt; /* i could not find yet why this does not occurs on Linux ... */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you please give it a try ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It solves the issue on 64 bit.
</span><br>
<span class="quotelev1">&gt;I see no growing memory usage anymore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I will build 32 bit and then upload both as 1.8.3-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;Marco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25630.php">http://www.open-mpi.org/community/lists/users/2014/10/25630.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25633.php">Sebastian Rettenberger: "[OMPI users] Allgather in OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="25631.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Maybe in reply to:</strong> <a href="25606.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25634.php">Marco Atzeri: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25634.php">Marco Atzeri: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
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
