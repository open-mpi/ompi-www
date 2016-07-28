<?
$subject_val = "Re: [OMPI users] round-robin scheduling question [hostfile]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 21 03:05:17 2009" -->
<!-- isoreceived="20090221080517" -->
<!-- sent="Sat, 21 Feb 2009 17:05:07 +0900" -->
<!-- isosent="20090221080507" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] round-robin scheduling question [hostfile]" -->
<!-- id="499FB5B3.5040909_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E5E80B40-28BD-4D43-9A12-A94D45D3A3A3_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] round-robin scheduling question [hostfile]<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-21 03:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8152.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8150.php">Terry Frankcombe: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8152.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Reply:</strong> <a href="8152.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thank you very much for your explanation!
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It is a little bit of both:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * historical, because most MPI's default to mapping by slot, and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * performance, because procs that share a node can communicate via 
</span><br>
<span class="quotelev1">&gt; shared memory, which is faster than sending messages over an 
</span><br>
<span class="quotelev1">&gt; interconnect, and most apps are communication-bound
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If your app is disk-intensive, then mapping it -bynode may be a better 
</span><br>
<p><p>Ok -- by this, it seems that there is no &quot;rule&quot; that says one is obviously better than the other.  It depends on factors such as disk access and shared memory access and which one is dominating.  So, it is worth to try both to see?
<br>
<p><p><span class="quotelev1">&gt; option for you. That's why we provide it. Note, however, that you can 
</span><br>
<span class="quotelev1">&gt; still wind up with multiple procs on a node. All &quot;bynode&quot; means is that 
</span><br>
<span class="quotelev1">&gt; the ranks are numbered consecutively bynode - it doesn't mean that there 
</span><br>
<span class="quotelev1">&gt; is only one proc/node.
</span><br>
<p><p><p>I see.  But if the number of processes (as specified using -np) is less than the number of nodes, if &quot;by node&quot; is chosen, then is it guaranteed that only one process will be on each node?  Is there a way to write the hostfile to ensure this?  
<br>
<p>I was curious if a node has 4 slots, whether writing it 4 times in the hostfile with 1 slot each has any meaning.  Might be a bad idea as we are trying to fool mpirun?
<br>
<p><p><p><span class="quotelev1">&gt; If you truly want one proc/node, then you should use the -pernode 
</span><br>
<span class="quotelev1">&gt; option. This maps one proc on each node up to either the number of procs 
</span><br>
<span class="quotelev1">&gt; you specified or the number of available nodes. If you don't specify 
</span><br>
<span class="quotelev1">&gt; -np, we just put one proc on each node in your allocation/hostfile.
</span><br>
<p><p>I see ... I was not aware of that option; thank you!
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8152.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8150.php">Terry Frankcombe: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8152.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Reply:</strong> <a href="8152.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
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
