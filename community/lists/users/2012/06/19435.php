<?
$subject_val = "Re: [OMPI users] Question about component priority (psm/sm)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 17:36:13 2012" -->
<!-- isoreceived="20120601213613" -->
<!-- sent="Fri, 1 Jun 2012 17:36:08 -0400" -->
<!-- isosent="20120601213608" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about component priority (psm/sm)" -->
<!-- id="8A0DD4FA-5A42-4226-85A6-A83529CED47C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1206011548100.28555_at_li115-9.members.linode.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about component priority (psm/sm)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 17:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19436.php">Tom Harvill: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Previous message:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19430.php">Tom Harvill: "[OMPI users] Question about component priority (psm/sm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19436.php">Tom Harvill: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Reply:</strong> <a href="19436.php">Tom Harvill: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 1, 2012, at 4:28 PM, Tom Harvill wrote:
<br>
<p><span class="quotelev1">&gt; We would rather that OpenMPI use shared-mem (sm) module when running intra-node processes.  
</span><br>
<p>Doesn't PSM use shared memory to communicate between peers on the same node?
<br>
<p>(that is hidden from us in Open MPI; I am *assuming* that internal to PSM, it uses shared memory for on-node communication and QLogic IB for off-node communication)
<br>
<p><span class="quotelev1">&gt; We believe that by using our scheduler's allocation policy (packing) and considering our job mix, we might be able to add nodes to this cluster using only one HCA per node (again, we would rather not use 'shared contexts').
</span><br>
<p>Are you saying that you want Open MPI to not use PSM when the job entirely fits within a single node?
<br>
<p>If so, you might want to experiment with the pre-job hook in the job scheduler.  You could try setting MCA parameters as environment variables (e.g., setenv OMPI_MCA_pml ob1 -- which would exclude the CM PML and therefore the PSM MTL) if your pre-job hook can tell if the job fits entirely on a single node.
<br>
<p>Does that help?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19436.php">Tom Harvill: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Previous message:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19430.php">Tom Harvill: "[OMPI users] Question about component priority (psm/sm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19436.php">Tom Harvill: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Reply:</strong> <a href="19436.php">Tom Harvill: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
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
