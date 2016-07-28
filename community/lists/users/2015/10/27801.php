<?
$subject_val = "Re: [OMPI users] worse latency in 1.8 c.f. 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 13:46:26 2015" -->
<!-- isoreceived="20151005174626" -->
<!-- sent="Mon, 05 Oct 2015 18:46:05 +0100" -->
<!-- isosent="20151005174605" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] worse latency in 1.8 c.f. 1.6" -->
<!-- id="87vbalqkde.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAO1Kyb2EGZMGt7-+GdGEHcEJcDcXnn6koRQqvSbe6G2UcTN5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] worse latency in 1.8 c.f. 1.6<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-05 13:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27802.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27800.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27822.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27822.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike Dubman &lt;miked_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; what is your command line and setup? (ofed version, distro)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what was just measured w/ fdr on haswell with v1.8.8 and mxm and UD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + mpirun -np 2 -bind-to core -display-map -mca rmaps_base_mapping_policy
</span><br>
<span class="quotelev1">&gt; dist:span -x MXM_RDMA_PORTS=mlx5_3:1 -mca rmaps_dist_device mlx5_3:1  -x
</span><br>
<span class="quotelev1">&gt; MXM_TLS=self,shm,ud osu_latency
</span><br>
<p>Revisiting this, I'm confused, because rmaps_dist_device isn't in my
<br>
build and I don't know what it is.  (I tried the binary hpcx stuff, but
<br>
it failed to run -- I've forgotten how -- and the build instructions for
<br>
ompi under it correspond to what I've used anyway.)  The obvious
<br>
difference between the above and what I have is mlx5 v. mlx4; is that
<br>
likely to account for it?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27802.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27800.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27822.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27822.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
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
