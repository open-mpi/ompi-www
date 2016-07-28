<?
$subject_val = "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 14:34:47 2011" -->
<!-- isoreceived="20110705183447" -->
<!-- sent="Tue, 05 Jul 2011 20:34:40 +0200" -->
<!-- isosent="20110705183440" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] on using hwloc_get_area_membind_nodeset" -->
<!-- id="4E135940.60500_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAA0LXa=2MrgVjQVv=sB7Mjm7YYjeTnFjrbXxhxOyTUnnomWqfw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] on using hwloc_get_area_membind_nodeset<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 14:34:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0315.php">Samuel Thibault: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0313.php">Alfredo Buttari: "[hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>In reply to:</strong> <a href="0313.php">Alfredo Buttari: "[hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Reply:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/07/2011 20:13, Alfredo Buttari a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; if I understand correctly this routine can tell on which NUMA node(s)
</span><br>
<span class="quotelev1">&gt; a specific memory area resides, is this correct?
</span><br>
<span class="quotelev1">&gt; Will this routine work on any memory area allocated with any
</span><br>
<span class="quotelev1">&gt; allocation routine other than those provided by hwloc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody provide a simple example of usage of this routine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried something simple like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_t topology;
</span><br>
<span class="quotelev1">&gt;     int *a;
</span><br>
<span class="quotelev1">&gt;     hwloc_membind_policy_t *policy;
</span><br>
<span class="quotelev1">&gt;     hwloc_nodeset_t nodeset;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_load(topology);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     a = (int *) malloc(1000*sizeof(int));
</span><br>
<span class="quotelev1">&gt;     nodeset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;     ret = hwloc_get_area_membind_nodeset( topology, a,
</span><br>
<span class="quotelev1">&gt; 1000*sizeof(int), nodeset, policy, HWLOC_MEMBIND_STRICT);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;---&gt; %d\n&quot;,ret);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_destroy(topology);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I'm always getting a -1 in ret. What's wrong?
</span><br>
<p>Hello,
<br>
<p>You're running Linux and errno is ENOSYS, right? From what I remember,
<br>
it's not supported on Linux because getting memory binding is very
<br>
poorly supported. I think we could implement it but it would be very
<br>
slow (one get_mempolicy syscall per virtual page or something like that).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0315.php">Samuel Thibault: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0313.php">Alfredo Buttari: "[hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>In reply to:</strong> <a href="0313.php">Alfredo Buttari: "[hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Reply:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
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
