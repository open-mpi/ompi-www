<?
$subject_val = "[OMPI users] Question about component priority (psm/sm)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 16:28:08 2012" -->
<!-- isoreceived="20120601202808" -->
<!-- sent="Fri, 1 Jun 2012 16:28:03 -0400 (EDT)" -->
<!-- isosent="20120601202803" -->
<!-- name="Tom Harvill" -->
<!-- email="tom.harvill_at_[hidden]" -->
<!-- subject="[OMPI users] Question about component priority (psm/sm)" -->
<!-- id="alpine.LRH.2.02.1206011548100.28555_at_li115-9.members.linode.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Question about component priority (psm/sm)<br>
<strong>From:</strong> Tom Harvill (<em>tom.harvill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 16:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19429.php">Jeremy: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19433.php">George Bosilca: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Reply:</strong> <a href="19433.php">George Bosilca: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Reply:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>This is my first post, I've searched the FAQ for (what I think) are 
<br>
relative terms but am not finding an answer to my question.
<br>
<p>We have several dozen 32-core clustered worker nodes interconnected with 
<br>
QLogic infiniband.  Each node has two QLogic QLE7340 HCAs.  As I 
<br>
understand QLogic's technology, each card offers 16 'hardware contexts' 
<br>
that are consumed by cooperating MPI processes - this is why we have two 
<br>
cards per host (we do not use 'shared contexts' and do not want to).
<br>
<p>What we are seeing is when 32-process MPI jobs run on these nodes, all 
<br>
cooperating processes consume a hardware-context (runs using psm module). 
<br>
When one tries to run an MPI job using the psm module on the same node, a 
<br>
'network not found' error is returned (this is expected and normal).
<br>
<p>We would rather that OpenMPI use shared-mem (sm) module when running 
<br>
intra-node processes.  We believe that by using our scheduler's allocation 
<br>
policy (packing) and considering our job mix, we might be able to add 
<br>
nodes to this cluster using only one HCA per node (again, we would rather 
<br>
not use 'shared contexts').
<br>
<p>To test, I started a 32 process MPI on a single node and observed that all 
<br>
hardward contexts were consumed (ipathstats | awk '/CtxtsOpen/{print 
<br>
$2}').  Then I try to start another (mpigreetings) on the same node with 
<br>
these variations of mpirun:
<br>
<p>mpirun --mca btl sm --mca mtl psm -np 32 mpigreetings
<br>
<p>this fails with 'network not found' (it tried to use psm and did not try 
<br>
to use sm)
<br>
<p>mpirun --mca btl sm --mca mtl ^psm -np 32 mpigreetings
<br>
<p>this works (it uses sm).  This will not work in general (for our 
<br>
customers) because not all MPI jobs will run intra-node.
<br>
<p>I messed around with MCA params mtl_psm_priority and btl_sm_priority with 
<br>
no success...
<br>
<p>Is it possible to make OpenMPI use sm when it's available before psm for 
<br>
processes on the same node?
<br>
<p>TIA,
<br>
Tom
<br>
<p>Tom Harvill
<br>
HCC - hcc.unl.edu
<br>
402.472.5660
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19429.php">Jeremy: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19433.php">George Bosilca: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Reply:</strong> <a href="19433.php">George Bosilca: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Reply:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
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
