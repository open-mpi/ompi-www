<?
$subject_val = "Re: [hwloc-users] Selecting real cores vs HT cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 16:45:16 2014" -->
<!-- isoreceived="20141211214516" -->
<!-- sent="Thu, 11 Dec 2014 16:45:11 -0500" -->
<!-- isosent="20141211214511" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Selecting real cores vs HT cores" -->
<!-- id="2850CE07-E054-4669-A19D-98F1383C5967_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="930D148A-C1C5-446F-8DD8-EBC32C6FE06B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Selecting real cores vs HT cores<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 16:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1132.php">Samuel Thibault: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right and that is what I figured, they quote performance metrics.  I'm almost trying to divine what mapping they use and if its static, 1:1 mapping. 
<br>
<p>Thanks for the thoughts.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><span class="quotelev1">&gt; On Dec 11, 2014, at 4:41 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2014, at 1:36 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok let me expand then.  I don't have control over the bios.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The testing I am doing resides on a cloud provider and from our testing it appears that it has HT enabled.  It is ambiguous though to me what I see vs how they allocate on their hypervisor. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, if you're in a hypervisor, then what you're seeing has zero correlation to reality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it's an HPC cloud provider, they *likely* paired cores in the hypervisor with real/physical cores.  More specifically: they *probably* paired hyper threads in the hypervisor with real/physical hyper threads (i.e., so that the lstopo in the hypervisor is equivalent to lstopo outside the hypervisor).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But you'll need to ask them, because modern VMs let you do whatever you want in terms of mapping VM cores/HTs to physical cores/HTs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider: you can run dozens on web server VMs on a machine with 10 cores.  Each VM will say that it has, say, 1 or 2 cores.  But clearly, the sum of number of cores in the VMs is larger than the total number of physical cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1129.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1129.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1128.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1132.php">Samuel Thibault: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
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
