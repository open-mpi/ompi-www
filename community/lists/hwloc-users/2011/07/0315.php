<?
$subject_val = "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 19:13:25 2011" -->
<!-- isoreceived="20110705231325" -->
<!-- sent="Wed, 6 Jul 2011 01:13:19 +0200" -->
<!-- isosent="20110705231319" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] on using hwloc_get_area_membind_nodeset" -->
<!-- id="20110705231319.GH4668_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1140163211.1658163.1309889635805.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 19:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Maybe in reply to:</strong> <a href="0313.php">Alfredo Buttari: "[hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alfredo Buttari, le Tue 05 Jul 2011 20:13:55 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; if I understand correctly this routine can tell on which NUMA node(s)
</span><br>
<span class="quotelev1">&gt; a specific memory area resides, is this correct?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Will this routine work on any memory area allocated with any
</span><br>
<span class="quotelev1">&gt; allocation routine other than those provided by hwloc?
</span><br>
<p>Yes, provided that the OS supports it.
<br>
<p><span class="quotelev1">&gt;     a = (int *) malloc(1000*sizeof(int));
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
<p>Nothing. As Brice said, check errno, it's probably ENOSYS.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Maybe in reply to:</strong> <a href="0313.php">Alfredo Buttari: "[hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
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
