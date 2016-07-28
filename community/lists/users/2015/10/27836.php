<?
$subject_val = "Re: [OMPI users] worse latency in 1.8 c.f. 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 12:38:39 2015" -->
<!-- isoreceived="20151007163839" -->
<!-- sent="Wed, 07 Oct 2015 17:38:34 +0100" -->
<!-- isosent="20151007163834" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] worse latency in 1.8 c.f. 1.6" -->
<!-- id="877fmyprat.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAO1Kybsi_tZ2hFigk1dGhjt7T9UGsppNJrYPLLt4Ta84t=Eqg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-07 12:38:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27837.php">Tom Rosmond: "[OMPI users] Problem with multi-dimensional index arrays"</a>
<li><strong>Previous message:</strong> <a href="27835.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>In reply to:</strong> <a href="27822.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike Dubman &lt;miked_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; these flags available in master and v1.10 branches and make sure that ranks
</span><br>
<span class="quotelev1">&gt; to core allocation is done starting from cpu socket closer to the HCA.
</span><br>
<p>I'm confused by the 1.8.8 below, then.  I haven't tried 1.10 since it
<br>
breaks binary compatibility and seemed to have core binding issues.
<br>
<p>I expected openmpi to bind next to the HCA anyhow, since hwloc finds it,
<br>
and wonder why that would be different with MXM.
<br>
<p>Incidentally, the different results with 1.6 seem to be because it
<br>
ignores MXM for low core counts.  Maybe that's the thing to do.
<br>
<p><span class="quotelev1">&gt; Of course you can have same effect with taskset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 5, 2015 at 8:46 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mike Dubman &lt;miked_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; what is your command line and setup? (ofed version, distro)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is what was just measured w/ fdr on haswell with v1.8.8 and mxm and
</span><br>
<span class="quotelev2">&gt;&gt; UD
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + mpirun -np 2 -bind-to core -display-map -mca rmaps_base_mapping_policy
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dist:span -x MXM_RDMA_PORTS=mlx5_3:1 -mca rmaps_dist_device mlx5_3:1  -x
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MXM_TLS=self,shm,ud osu_latency
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27837.php">Tom Rosmond: "[OMPI users] Problem with multi-dimensional index arrays"</a>
<li><strong>Previous message:</strong> <a href="27835.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>In reply to:</strong> <a href="27822.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
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
