<?
$subject_val = "Re: [OMPI users] Bad Infiniband latency with subounce";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 23:21:22 2010" -->
<!-- isoreceived="20100216042122" -->
<!-- sent="Mon, 15 Feb 2010 21:21:13 -0700" -->
<!-- isosent="20100216042113" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad Infiniband latency with subounce" -->
<!-- id="AF1E5329-C5F0-4DB1-9EC7-138BFA21C3E6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1266291858.5841.102.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad Infiniband latency with subounce<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 23:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12089.php">vighnesh_at_[hidden]: "[OMPI users] Error while configuring openmpi with pgi"</a>
<li><strong>Previous message:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>In reply to:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Reply:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 15, 2010, at 8:44 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2010-02-15 at 20:18 -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Did you run it with -mca mpi_paffinity_alone 1? Given this is 1.4.1, you can set the bindings to -bind-to-socket or -bind-to-core. Either will give you improved performance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, MVAPICH defaults to -bind-to-socket. OMPI defaults to no binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this sensible?  Won't most users want processes bound?  OMPI's
</span><br>
<span class="quotelev1">&gt; supposed to &quot;to the right thing&quot; out of the box, right?
</span><br>
<p>Well, that depends on how you look at it. Been the subject of a lot of debate within the devel community. If you bind by default and it is a shared node cluster, then you can really mess people up. On the other hand, if you don't bind by default, then people that run benchmarks without looking at the options can get bad numbers. Unfortunately, there is no automated way to tell if the cluster is configured for shared use or dedicated nodes.
<br>
<p>I honestly don't know that &quot;most users want processes bound&quot;. One installation I was at set binding by default using the system mca param file, and got yelled at by a group of users that had threaded apps - and most definitely did -not- want their processes bound. After a while, it became clear that nothing we could do would make everyone happy :-/
<br>
<p>I doubt there is a right/wrong answer - at least, we sure can't find one. So we don't bind by default so we &quot;do no harm&quot;, and put out FAQs, man pages, mpirun option help messages, etc. that explain the situation and tell you when/how to bind.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12089.php">vighnesh_at_[hidden]: "[OMPI users] Error while configuring openmpi with pgi"</a>
<li><strong>Previous message:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>In reply to:</strong> <a href="12087.php">Terry Frankcombe: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Reply:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
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
