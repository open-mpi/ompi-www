<?
$subject_val = "Re: [hwloc-users] hwloc sockets support on solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 16:30:45 2010" -->
<!-- isoreceived="20100623203045" -->
<!-- sent="Wed, 23 Jun 2010 22:29:57 +0200" -->
<!-- isosent="20100623202957" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc sockets support on solaris" -->
<!-- id="4C226EC5.90608_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AC3A1E1-BEDA-4587-AD4B-4EC9D83BF89E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc sockets support on solaris<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 16:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0215.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>In reply to:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0215.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Reply:</strong> <a href="0215.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 23/06/2010 22:27, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Hm.  We should be.  Here's the hwloc plugin code for setting CPU affinity (it's static because it's invoked by function pointer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int module_set(opal_paffinity_base_cpu_set_t mask)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int i, ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     hwloc_cpuset_t set;
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_t *t = &amp;mca_paffinity_hwloc_component.topology;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     set = hwloc_cpuset_alloc();
</span><br>
<span class="quotelev1">&gt;     hwloc_cpuset_zero(set);
</span><br>
<span class="quotelev1">&gt;     for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; ++i) {
</span><br>
<span class="quotelev1">&gt;         if (OPAL_PAFFINITY_CPU_ISSET(i, mask) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;             i &lt; mca_paffinity_hwloc_component.cpuset_max_size) {
</span><br>
<span class="quotelev1">&gt;             hwloc_cpuset_cpu(set, i);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Don't you want hwloc_cpuset_set(set, i) instead ?
<br>
hwloc_cpuset_cpu(set, i) changes the cpuset into a single CPU, i.e. it's
<br>
zero(set) + set(set, i).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0215.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>In reply to:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0215.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Reply:</strong> <a href="0215.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
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
