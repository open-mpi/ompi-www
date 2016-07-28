<?
$subject_val = "Re: [OMPI users] OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 20:26:55 2014" -->
<!-- isoreceived="20141029002655" -->
<!-- sent="Wed, 29 Oct 2014 09:26:48 +0900" -->
<!-- isosent="20141029002648" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
<!-- id="8cj1480phnh86cuecp713foy.1414542408312_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 20:26:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25638.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="25636.php">Ralph Castain: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, will do today
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Gilles: will you be committing this to trunk and PR to 1.8?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 28, 2014, at 11:05 AM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 10/28/2014 4:41 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Marco,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthread_mutex_init calls calloc under cygwin but does not allocate memory under linux, so not invoking pthread_mutex_destroy causes a memory leak only under cygwin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the work .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; uploading 1.8.3-2 on www.cygwin.com
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Marco
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25634.php">http://www.open-mpi.org/community/lists/users/2014/10/25634.php</a>
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
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25636.php">http://www.open-mpi.org/community/lists/users/2014/10/25636.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25638.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="25636.php">Ralph Castain: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
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
