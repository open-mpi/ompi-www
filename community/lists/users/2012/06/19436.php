<?
$subject_val = "Re: [OMPI users] Question about component priority (psm/sm)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 17:51:29 2012" -->
<!-- isoreceived="20120601215129" -->
<!-- sent="Fri, 1 Jun 2012 17:51:25 -0400 (EDT)" -->
<!-- isosent="20120601215125" -->
<!-- name="Tom Harvill" -->
<!-- email="tom.harvill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about component priority (psm/sm)" -->
<!-- id="alpine.LRH.2.02.1206011742060.28555_at_li115-9.members.linode.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8A0DD4FA-5A42-4226-85A6-A83529CED47C_at_cisco.com" -->
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
<strong>From:</strong> Tom Harvill (<em>tom.harvill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 17:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19437.php">Rayson Ho: "[OMPI users] OT: MPI Quiz..."</a>
<li><strong>Previous message:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>In reply to:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; We would rather that OpenMPI use shared-mem (sm) module when running 
</span><br>
<span class="quotelev2">&gt;&gt; intra-node processes.
</span><br>
<p><span class="quotelev1">&gt; Doesn't PSM use shared memory to communicate between peers on the same 
</span><br>
<span class="quotelev1">&gt; node?
</span><br>
<p>Possibly, yes (I'm not sure).  Even if it does it appears to consume a 
<br>
'hardware context' for each peer - this is what we want to avoid.
<br>
<p><span class="quotelev2">&gt;&gt; We believe that by using our scheduler's allocation policy (packing) 
</span><br>
<span class="quotelev2">&gt;&gt; and considering our job mix, we might be able to add nodes to this 
</span><br>
<span class="quotelev2">&gt;&gt; cluster using only one HCA per node (again, we would rather not use 
</span><br>
<span class="quotelev2">&gt;&gt; 'shared contexts').
</span><br>
<p><span class="quotelev1">&gt; Are you saying that you want Open MPI to not use PSM when the job 
</span><br>
<span class="quotelev1">&gt; entirely fits within a single node?
</span><br>
<p>Yes, considering that the use of sm instead of psm would conserve 
<br>
hardware contexts (and thus reduce the need for HCAs)
<br>
<p><span class="quotelev1">&gt; If so, you might want to experiment with the pre-job hook in the job 
</span><br>
<span class="quotelev1">&gt; scheduler.  You could try setting MCA parameters as environment 
</span><br>
<span class="quotelev1">&gt; variables (e.g., setenv OMPI_MCA_pml ob1 -- which would exclude the CM 
</span><br>
<span class="quotelev1">&gt; PML and therefore the PSM MTL) if your pre-job hook can tell if the job 
</span><br>
<span class="quotelev1">&gt; fits entirely on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's an interesting idea that I will investigate.
<br>
<p>Thank you,
<br>
Tom
<br>
<p>Tom Harvill
<br>
hcc.unl.edu
<br>
402.472.5660
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19437.php">Rayson Ho: "[OMPI users] OT: MPI Quiz..."</a>
<li><strong>Previous message:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>In reply to:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
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
