<?
$subject_val = "Re: [OMPI users] Orted path with module manager on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 10:07:54 2016" -->
<!-- isoreceived="20160304150754" -->
<!-- sent="Fri, 04 Mar 2016 09:07:51 -0600" -->
<!-- isosent="20160304150751" -->
<!-- name="Davide Vanzo" -->
<!-- email="vanzod_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Orted path with module manager on cluster" -->
<!-- id="1457104071.3708.0.camel_at_accre.vanderbilt.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56D8CB83.60000_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Orted path with module manager on cluster<br>
<strong>From:</strong> Davide Vanzo (<em>vanzod_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-04 10:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28637.php">Davide Vanzo: "Re: [OMPI users] Pass RoCE flags to srun under SLURM"</a>
<li><strong>Previous message:</strong> <a href="28635.php">Gilles Gouaillardet: "Re: [OMPI users] Fw: Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That made the trick!
<br>
Thank you guys.
<br>
Davide
<br>
On Fri, 2016-03-04 at 08:40 +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Davide,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can invoke `which mpirun` instead of mpirun, or mpirun --
</span><br>
<span class="quotelev1">&gt; prefix=...
</span><br>
<span class="quotelev1">&gt; an other option is to rebuild OpenMPI with --enable-mpirun-prefix-by-
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/4/2016 7:22 AM, Davide Vanzo wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; I have built OpenMPI 1.10.2 with RoCE network support on our test
</span><br>
<span class="quotelev2">&gt; &gt; cluster. On the cluster we use lmod to manage paths to different
</span><br>
<span class="quotelev2">&gt; &gt; versions of softwares. The problem I have is that I receive the
</span><br>
<span class="quotelev2">&gt; &gt; &quot;orted: command not found&quot; message given that the&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;path to
</span><br>
<span class="quotelev2">&gt; &gt; the orted binary is not exported to the other nodes where my run is
</span><br>
<span class="quotelev2">&gt; &gt; launched via a non-interactive ssh connection.
</span><br>
<span class="quotelev2">&gt; &gt; I&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;temporarily solved the problem by exporting PATH with the
</span><br>
<span class="quotelev2">&gt; &gt; correct path to orted on my .bashrc file but this is not obviously
</span><br>
<span class="quotelev2">&gt; &gt; a solution.
</span><br>
<span class="quotelev2">&gt; &gt; Any idea how I can fix it?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Davide
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/20">http://www.open-mpi.org/community/lists/users/20</a>
</span><br>
<span class="quotelev2">&gt; &gt; 16/03/28629.php
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016">http://www.open-mpi.org/community/lists/users/2016</a>
</span><br>
<span class="quotelev1">&gt; /03/28632.php
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28637.php">Davide Vanzo: "Re: [OMPI users] Pass RoCE flags to srun under SLURM"</a>
<li><strong>Previous message:</strong> <a href="28635.php">Gilles Gouaillardet: "Re: [OMPI users] Fw: Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
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
