<?
$subject_val = "Re: [OMPI users] Orted path with module manager on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 17:56:35 2016" -->
<!-- isoreceived="20160303225635" -->
<!-- sent="Thu, 3 Mar 2016 23:56:23 +0100" -->
<!-- isosent="20160303225623" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Orted path with module manager on cluster" -->
<!-- id="70949738-A079-42EC-85E6-2A09C6F20719_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1457043723.11487.8.camel_at_accre.vanderbilt.edu" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 17:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Previous message:</strong> <a href="28630.php">Davide Vanzo: "[OMPI users] Pass RoCE flags to srun under SLURM"</a>
<li><strong>In reply to:</strong> <a href="28629.php">Davide Vanzo: "[OMPI users] Orted path with module manager on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 03 Mar 2016, at 23:22 , Davide Vanzo &lt;vanzod_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have built OpenMPI 1.10.2 with RoCE network support on our test cluster. On the cluster we use lmod to manage paths to different versions of softwares. The problem I have is that I receive the &quot;orted: command not found&quot; message given that the path to the orted binary is not exported to the other nodes where my run is launched via a non-interactive ssh connection. I temporarily solved the problem by exporting PATH with the correct path to orted on my .bashrc file but this is not obviously a solution.
</span><br>
<span class="quotelev1">&gt; Any idea how I can fix it?
</span><br>
<p>Did you configure with '--enable-orterun-prefix-by-default' ?<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Previous message:</strong> <a href="28630.php">Davide Vanzo: "[OMPI users] Pass RoCE flags to srun under SLURM"</a>
<li><strong>In reply to:</strong> <a href="28629.php">Davide Vanzo: "[OMPI users] Orted path with module manager on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
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
