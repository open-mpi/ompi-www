<?
$subject_val = "Re: [OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 18 20:22:42 2012" -->
<!-- isoreceived="20120419002242" -->
<!-- sent="Wed, 18 Apr 2012 20:22:37 -0400" -->
<!-- isosent="20120419002237" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="9858B908-813E-4F2A-910E-46FF4EAABE93_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F866C39.9030508_at_inria.fr" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-18 20:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19044.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19042.php">Anton Morgan: "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>In reply to:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18993.php">Ralph Castain: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/3075">https://svn.open-mpi.org/trac/ompi/ticket/3075</a> about this.
<br>
<p>I just reviewed Brice's patch and it looks good to me (it looks like I forgot to update the logical/physical conversion in the module_set/get methods).
<br>
<p>Thanks!
<br>
<p><p>On Apr 12, 2012, at 1:46 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello Tetsuya,
</span><br>
<span class="quotelev1">&gt; I think it's expected that the displayed cpusets are different.
</span><br>
<span class="quotelev1">&gt; I only converted the code that applies/retrieves the binding, I did not
</span><br>
<span class="quotelev1">&gt; touch the code that prints it.
</span><br>
<span class="quotelev1">&gt; Good to know it works.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 12/04/2012 05:24, tmishima_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Brice.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for sending me a patch. Now, I quickly tested your try2.patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then, regarding execution speed it works well.
</span><br>
<span class="quotelev2">&gt;&gt; But, in terms of core binding reports, it's still different from
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.5.4.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure which is better for a standard user like me, reporting logical
</span><br>
<span class="quotelev2">&gt;&gt; indexes or physical ones.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; patched openmpi-1.5.5 Reports:
</span><br>
<span class="quotelev2">&gt;&gt; [node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[43552,1],1] to cpus 00f0
</span><br>
<span class="quotelev2">&gt;&gt; [node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[43552,1],2] to cpus 0f00
</span><br>
<span class="quotelev2">&gt;&gt; [node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[43552,1],3] to cpus f000
</span><br>
<span class="quotelev2">&gt;&gt; [node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[43552,1],4] to cpus f0000
</span><br>
<span class="quotelev2">&gt;&gt; [node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[43552,1],5] to cpus f00000
</span><br>
<span class="quotelev2">&gt;&gt; [node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[43552,1],6] to cpus f000000
</span><br>
<span class="quotelev2">&gt;&gt; [node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[43552,1],7] to cpus f0000000
</span><br>
<span class="quotelev2">&gt;&gt; [node03.cluster:09780] [[43552,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[43552,1],0] to cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a better patch. Still only compile tested :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 11/04/2012 10:36, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A quick look at the code seems to confirm my feeling. get/set_module()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; callbacks manipulate arrays of logical indexes, and they do not convert
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them back to physical indexes before binding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a quick patch that may help. Only compile tested...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 11/04/2012 09:49, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 11/04/2012 09:06, tmishima_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, Brice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed the latest hwloc-1.4.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the output of lstopo -p.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_node03 bin]# ./lstopo -p
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine (126GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Socket P#0 (32GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    NUMANode P#0 (16GB) + L3 (5118KB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok then the cpuset of this numanode is 1111.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[55518,1],0] to cpus 1111
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So openmpi 1.5.4 is correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[40566,1],0] to cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And openmpi 1.5.5 is indeed wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Random guess: 000f is the bitmask made of hwloc *logical* indexes. hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpusets (used for binding) are internally made of hwloc *physical*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indexes (1111 here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, Ralph:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does OMPI 1.5.5 build hwloc cpusets for binding? Are you doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bitmap operations on hwloc object cpusets?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If yes, I don't know what's going wrong here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If no, are you building hwloc cpusets manually by setting individual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bits from object indexes? If yes, you must use *physical* indexes to do
</span><br>
<span class="quotelev2">&gt;&gt; so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing
</span><br>
<span class="quotelev2">&gt;&gt; listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing
</span><br>
<span class="quotelev2">&gt;&gt; listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- opal/mca/paffinity/hwloc/paffinity_hwloc_module.c.old	2012-04-11
</span><br>
<span class="quotelev2">&gt;&gt; 10:19:36.766710073 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ opal/mca/paffinity/hwloc/paffinity_hwloc_module.c	2012-04-11
</span><br>
<span class="quotelev2">&gt;&gt; 11:13:52.930438083 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -164,9 +164,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int module_set(opal_paffinity_base_cpu_set_t mask)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    int i, ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_bitmap_t set;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_topology_t *t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    hwloc_obj_t pu;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* bozo check */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (NULL == opal_hwloc_topology) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -178,10 +179,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (NULL == set) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    hwloc_bitmap_zero(set);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_CPU_MAX; +
</span><br>
<span class="quotelev2">&gt;&gt; +i) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            hwloc_bitmap_set(set, i);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    for (pu = hwloc_get_obj_by_type(*t, HWLOC_OBJ_PU, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +         pu &amp;&amp; pu-&gt;logical_index &lt; OPAL_PAFFINITY_BITMASK_CPU_MAX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +         pu = pu-&gt;next_cousin) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (OPAL_PAFFINITY_CPU_ISSET(pu-&gt;logical_index, mask)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            hwloc_bitmap_set(set, pu-&gt;os_index);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -196,9 +198,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int module_get(opal_paffinity_base_cpu_set_t *mask)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    int i, ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int ret = OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_bitmap_t set;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_topology_t *t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    hwloc_obj_t pu;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* bozo check */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (NULL == opal_hwloc_topology) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -218,9 +221,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ret = OPAL_ERR_IN_ERRNO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_PAFFINITY_CPU_ZERO(*mask);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        for (i = 0; ((unsigned int) i) &lt; 8 * sizeof(*mask); i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            if (hwloc_bitmap_isset(set, i)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                OPAL_PAFFINITY_CPU_SET(i, *mask);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        for (pu = hwloc_get_obj_by_type(*t, HWLOC_OBJ_PU, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +             pu &amp;&amp; pu-&gt;logical_index &lt; 8 * sizeof(*mask);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +             pu = pu-&gt;next_cousin) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            if (hwloc_bitmap_isset(set, pu-&gt;os_index)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                OPAL_PAFFINITY_CPU_SET(pu-&gt;logical_index, *mask);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19044.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19042.php">Anton Morgan: "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>In reply to:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18993.php">Ralph Castain: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
