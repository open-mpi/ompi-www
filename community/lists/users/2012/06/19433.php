<?
$subject_val = "Re: [OMPI users] Question about component priority (psm/sm)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 17:27:07 2012" -->
<!-- isoreceived="20120601212707" -->
<!-- sent="Sat, 2 Jun 2012 06:27:05 +0900" -->
<!-- isosent="20120601212705" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about component priority (psm/sm)" -->
<!-- id="B5E4DEE8-1DDC-4C85-93F3-1A674503D4E7_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 17:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19430.php">Tom Harvill: "[OMPI users] Question about component priority (psm/sm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MTL and BTL are mutually exclusive. If you use the psm MTL there is no way you can take advantage of the sm BTl.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 2, 2012, at 05:28 , Tom Harvill wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is my first post, I've searched the FAQ for (what I think) are relative terms but am not finding an answer to my question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have several dozen 32-core clustered worker nodes interconnected with QLogic infiniband.  Each node has two QLogic QLE7340 HCAs.  As I understand QLogic's technology, each card offers 16 'hardware contexts' that are consumed by cooperating MPI processes - this is why we have two cards per host (we do not use 'shared contexts' and do not want to).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we are seeing is when 32-process MPI jobs run on these nodes, all cooperating processes consume a hardware-context (runs using psm module). When one tries to run an MPI job using the psm module on the same node, a 'network not found' error is returned (this is expected and normal).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We would rather that OpenMPI use shared-mem (sm) module when running intra-node processes.  We believe that by using our scheduler's allocation policy (packing) and considering our job mix, we might be able to add nodes to this cluster using only one HCA per node (again, we would rather not use 'shared contexts').
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To test, I started a 32 process MPI on a single node and observed that all hardward contexts were consumed (ipathstats | awk '/CtxtsOpen/{print $2}').  Then I try to start another (mpigreetings) on the same node with these variations of mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl sm --mca mtl psm -np 32 mpigreetings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this fails with 'network not found' (it tried to use psm and did not try to use sm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl sm --mca mtl ^psm -np 32 mpigreetings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this works (it uses sm).  This will not work in general (for our customers) because not all MPI jobs will run intra-node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I messed around with MCA params mtl_psm_priority and btl_sm_priority with no success...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to make OpenMPI use sm when it's available before psm for processes on the same node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt; Tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tom Harvill
</span><br>
<span class="quotelev1">&gt; HCC - hcc.unl.edu
</span><br>
<span class="quotelev1">&gt; 402.472.5660
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19430.php">Tom Harvill: "[OMPI users] Question about component priority (psm/sm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
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
