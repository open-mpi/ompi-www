<?
$subject_val = "Re: [OMPI users] worse latency in 1.8 c.f. 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 15:47:57 2015" -->
<!-- isoreceived="20151006194757" -->
<!-- sent="Tue, 6 Oct 2015 22:47:53 +0300" -->
<!-- isosent="20151006194753" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] worse latency in 1.8 c.f. 1.6" -->
<!-- id="CAAO1Kybsi_tZ2hFigk1dGhjt7T9UGsppNJrYPLLt4Ta84t=Eqg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87vbalqkde.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 15:47:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27823.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27821.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27801.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27836.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27836.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
these flags available in master and v1.10 branches and make sure that ranks
<br>
to core allocation is done starting from cpu socket closer to the HCA.
<br>
<p>Of course you can have same effect with taskset.
<br>
<p>On Mon, Oct 5, 2015 at 8:46 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike Dubman &lt;miked_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; what is your command line and setup? (ofed version, distro)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is what was just measured w/ fdr on haswell with v1.8.8 and mxm and
</span><br>
<span class="quotelev1">&gt; UD
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; + mpirun -np 2 -bind-to core -display-map -mca rmaps_base_mapping_policy
</span><br>
<span class="quotelev2">&gt; &gt; dist:span -x MXM_RDMA_PORTS=mlx5_3:1 -mca rmaps_dist_device mlx5_3:1  -x
</span><br>
<span class="quotelev2">&gt; &gt; MXM_TLS=self,shm,ud osu_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Revisiting this, I'm confused, because rmaps_dist_device isn't in my
</span><br>
<span class="quotelev1">&gt; build and I don't know what it is.  (I tried the binary hpcx stuff, but
</span><br>
<span class="quotelev1">&gt; it failed to run -- I've forgotten how -- and the build instructions for
</span><br>
<span class="quotelev1">&gt; ompi under it correspond to what I've used anyway.)  The obvious
</span><br>
<span class="quotelev1">&gt; difference between the above and what I have is mlx5 v. mlx4; is that
</span><br>
<span class="quotelev1">&gt; likely to account for it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27801.php">http://www.open-mpi.org/community/lists/users/2015/10/27801.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27823.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27821.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27801.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27836.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27836.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
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
