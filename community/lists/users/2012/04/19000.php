<?
$subject_val = "Re: [OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 23:25:07 2012" -->
<!-- isoreceived="20120412032507" -->
<!-- sent="Thu, 12 Apr 2012 12:24:54 +0900" -->
<!-- isosent="20120412032454" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="OF50B61130.111C04AC-ON492579DE.0011BD62-492579DE.0012C420_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F854BA0.8020808_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong core binding by openmpi-1.5.5<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20wrong%20core%20binding%20by%20openmpi-1.5.5"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-04-11 23:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18999.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>In reply to:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Brice.
<br>
<p>Thank you for sending me a patch. Now, I quickly tested your try2.patch.
<br>
<p>Then, regarding execution speed it works well.
<br>
But, in terms of core binding reports, it's still different from
<br>
openmpi-1.5.4.
<br>
I'm not sure which is better for a standard user like me, reporting logical
<br>
indexes or physical ones.
<br>
<p>patched openmpi-1.5.5 Reports:
<br>
[node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
<br>
[[43552,1],1] to cpus 00f0
<br>
[node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
<br>
[[43552,1],2] to cpus 0f00
<br>
[node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
<br>
[[43552,1],3] to cpus f000
<br>
[node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
<br>
[[43552,1],4] to cpus f0000
<br>
[node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
<br>
[[43552,1],5] to cpus f00000
<br>
[node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
<br>
[[43552,1],6] to cpus f000000
<br>
[node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
<br>
[[43552,1],7] to cpus f0000000
<br>
[node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
<br>
[[43552,1],0] to cpus 000f
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Here's a better patch. Still only compile tested :)
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 11/04/2012 10:36, Brice Goglin a &#233;crit&#160;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A quick look at the code seems to confirm my feeling. get/set_module()
</span><br>
<span class="quotelev1">&gt; callbacks manipulate arrays of logical indexes, and they do not convert
</span><br>
<span class="quotelev1">&gt; them back to physical indexes before binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a quick patch that may help. Only compile tested...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 11/04/2012 09:49, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 11/04/2012 09:06, tmishima_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, Brice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed the latest hwloc-1.4.1.
</span><br>
<span class="quotelev1">&gt; Here is the output of lstopo -p.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_node03 bin]# ./lstopo -p
</span><br>
<span class="quotelev1">&gt; Machine (126GB)
</span><br>
<span class="quotelev1">&gt;   Socket P#0 (32GB)
</span><br>
<span class="quotelev1">&gt;     NUMANode P#0 (16GB) + L3 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok then the cpuset of this numanode is 1111.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],0] to cpus 1111
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So openmpi 1.5.4 is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],0] to cpus 000f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And openmpi 1.5.5 is indeed wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Random guess: 000f is the bitmask made of hwloc *logical* indexes. hwloc
</span><br>
<span class="quotelev1">&gt; cpusets (used for binding) are internally made of hwloc *physical*
</span><br>
<span class="quotelev1">&gt; indexes (1111 here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, Ralph:
</span><br>
<span class="quotelev1">&gt; How does OMPI 1.5.5 build hwloc cpusets for binding? Are you doing
</span><br>
<span class="quotelev1">&gt; bitmap operations on hwloc object cpusets?
</span><br>
<span class="quotelev1">&gt; If yes, I don't know what's going wrong here.
</span><br>
<span class="quotelev1">&gt; If no, are you building hwloc cpusets manually by setting individual
</span><br>
<span class="quotelev1">&gt; bits from object indexes? If yes, you must use *physical* indexes to do
</span><br>
so.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing
</span><br>
listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing
</span><br>
listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- opal/mca/paffinity/hwloc/paffinity_hwloc_module.c.old	2012-04-11
</span><br>
10:19:36.766710073 +0200
<br>
<span class="quotelev1">&gt; +++ opal/mca/paffinity/hwloc/paffinity_hwloc_module.c	2012-04-11
</span><br>
11:13:52.930438083 +0200
<br>
<span class="quotelev1">&gt; @@ -164,9 +164,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int module_set(opal_paffinity_base_cpu_set_t mask)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int i, ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    int ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_t set;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_t *t;
</span><br>
<span class="quotelev1">&gt; +    hwloc_obj_t pu;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* bozo check */
</span><br>
<span class="quotelev1">&gt; if (NULL == opal_hwloc_topology) {
</span><br>
<span class="quotelev1">&gt; @@ -178,10 +179,11 @@
</span><br>
<span class="quotelev1">&gt; if (NULL == set) {
</span><br>
<span class="quotelev1">&gt; return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -    hwloc_bitmap_zero(set);
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_CPU_MAX; +
</span><br>
+i) {
<br>
<span class="quotelev1">&gt; -        if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
</span><br>
<span class="quotelev1">&gt; -            hwloc_bitmap_set(set, i);
</span><br>
<span class="quotelev1">&gt; +    for (pu = hwloc_get_obj_by_type(*t, HWLOC_OBJ_PU, 0);
</span><br>
<span class="quotelev1">&gt; +         pu &amp;&amp; pu-&gt;logical_index &lt; OPAL_PAFFINITY_BITMASK_CPU_MAX;
</span><br>
<span class="quotelev1">&gt; +         pu = pu-&gt;next_cousin) {
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_PAFFINITY_CPU_ISSET(pu-&gt;logical_index, mask)) {
</span><br>
<span class="quotelev1">&gt; +            hwloc_bitmap_set(set, pu-&gt;os_index);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -196,9 +198,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int module_get(opal_paffinity_base_cpu_set_t *mask)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int i, ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    int ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_t set;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_t *t;
</span><br>
<span class="quotelev1">&gt; +    hwloc_obj_t pu;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* bozo check */
</span><br>
<span class="quotelev1">&gt; if (NULL == opal_hwloc_topology) {
</span><br>
<span class="quotelev1">&gt; @@ -218,9 +221,11 @@
</span><br>
<span class="quotelev1">&gt; ret = OPAL_ERR_IN_ERRNO;
</span><br>
<span class="quotelev1">&gt; } else {
</span><br>
<span class="quotelev1">&gt; OPAL_PAFFINITY_CPU_ZERO(*mask);
</span><br>
<span class="quotelev1">&gt; -        for (i = 0; ((unsigned int) i) &lt; 8 * sizeof(*mask); i++) {
</span><br>
<span class="quotelev1">&gt; -            if (hwloc_bitmap_isset(set, i)) {
</span><br>
<span class="quotelev1">&gt; -                OPAL_PAFFINITY_CPU_SET(i, *mask);
</span><br>
<span class="quotelev1">&gt; +        for (pu = hwloc_get_obj_by_type(*t, HWLOC_OBJ_PU, 0);
</span><br>
<span class="quotelev1">&gt; +             pu &amp;&amp; pu-&gt;logical_index &lt; 8 * sizeof(*mask);
</span><br>
<span class="quotelev1">&gt; +             pu = pu-&gt;next_cousin) {
</span><br>
<span class="quotelev1">&gt; +            if (hwloc_bitmap_isset(set, pu-&gt;os_index)) {
</span><br>
<span class="quotelev1">&gt; +                OPAL_PAFFINITY_CPU_SET(pu-&gt;logical_index, *mask);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18999.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>In reply to:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
