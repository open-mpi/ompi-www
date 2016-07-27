<?
$subject_val = "[hwloc-devel] Fwd: Ad";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 10:23:13 2010" -->
<!-- isoreceived="20100707142313" -->
<!-- sent="Wed, 07 Jul 2010 16:21:14 +0200" -->
<!-- isosent="20100707142114" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd: Ad" -->
<!-- id="4C348D5A.8010701_at_inria.fr" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] Fwd: Ad<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 10:21:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1140.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Forgot to CC the list)
<br>
<p><p>Le 07/07/2010 13:40, Jirka Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Well, I would expect to get following reported on STDERR (refer to lstopo
</span><br>
<span class="quotelev1">&gt; output) when -v is specified:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./hwloc-calc -v --list 4 proc:60
</span><br>
<span class="quotelev1">&gt;         L2 #30 (256KB) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./hwloc-calc -v --list 5 proc:60
</span><br>
<span class="quotelev1">&gt;           L1 #30 (32KB) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./hwloc-calc -v --list 6 proc:60
</span><br>
<span class="quotelev1">&gt;             Core #30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without &quot;-v&quot; it's fine to report just a number. Does it make sense?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Well, --list was designed to generate x,y,z strings that may be passed
<br>
to external tools such as numactl or taskset. Adding the type as a
<br>
prefix would not help much there.
<br>
<p><span class="quotelev1">&gt; BTW, --objects reports Cache (It would be useful to add the size of Cache to 
</span><br>
<span class="quotelev1">&gt; the report)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Could add that to -v maybe.
<br>
<p><span class="quotelev1">&gt; I do believe that --objects is fooled by hyper threading being enabled when 
</span><br>
<span class="quotelev1">&gt; trying to traverse to the next (parent) object in hierarchy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested it on another box:
</span><br>
<span class="quotelev1">&gt; ===========================================
</span><br>
<span class="quotelev1">&gt; CPU GenuineIntel Intel(R) Xeon(R) CPU E6510 @ 1.73GHz 
</span><br>
<span class="quotelev1">&gt; Processors 16 
</span><br>
<span class="quotelev1">&gt; Cores 8 
</span><br>
<span class="quotelev1">&gt; Sockets 2 
</span><br>
<span class="quotelev1">&gt; Hyperthreading True 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_dell-per810-01 utils]# ./lstopo
</span><br>
<span class="quotelev1">&gt; Machine (4025MB)
</span><br>
<span class="quotelev1">&gt;   NUMANode #0 (phys=0 2005MB) + Socket #0 + L3 #0 (12MB)
</span><br>
<span class="quotelev1">&gt;     L2 #0 (256KB) + L1 #0 (32KB) + Core #0
</span><br>
<span class="quotelev1">&gt;       PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;       PU #1 (phys=8)
</span><br>
<span class="quotelev1">&gt;     L2 #1 (256KB) + L1 #1 (32KB) + Core #1
</span><br>
<span class="quotelev1">&gt;       PU #2 (phys=2)
</span><br>
<span class="quotelev1">&gt;       PU #3 (phys=10)
</span><br>
<span class="quotelev1">&gt;     L2 #2 (256KB) + L1 #2 (32KB) + Core #2
</span><br>
<span class="quotelev1">&gt;       PU #4 (phys=4)
</span><br>
<span class="quotelev1">&gt;       PU #5 (phys=12)
</span><br>
<span class="quotelev1">&gt;     L2 #3 (256KB) + L1 #3 (32KB) + Core #3
</span><br>
<span class="quotelev1">&gt;       PU #6 (phys=6)
</span><br>
<span class="quotelev1">&gt;       PU #7 (phys=14)
</span><br>
<span class="quotelev1">&gt;   NUMANode #1 (phys=1 2020MB) + Socket #1 + L3 #1 (12MB)
</span><br>
<span class="quotelev1">&gt;     L2 #4 (256KB) + L1 #4 (32KB) + Core #4
</span><br>
<span class="quotelev1">&gt;       PU #8 (phys=1)
</span><br>
<span class="quotelev1">&gt;       PU #9 (phys=9)
</span><br>
<span class="quotelev1">&gt;     L2 #5 (256KB) + L1 #5 (32KB) + Core #5
</span><br>
<span class="quotelev1">&gt;       PU #10 (phys=3)
</span><br>
<span class="quotelev1">&gt;       PU #11 (phys=11)
</span><br>
<span class="quotelev1">&gt;     L2 #6 (256KB) + L1 #6 (32KB) + Core #6
</span><br>
<span class="quotelev1">&gt;       PU #12 (phys=5)
</span><br>
<span class="quotelev1">&gt;       PU #13 (phys=13)
</span><br>
<span class="quotelev1">&gt;     L2 #7 (256KB) + L1 #7 (32KB) + Core #7
</span><br>
<span class="quotelev1">&gt;       PU #14 (phys=7)
</span><br>
<span class="quotelev1">&gt;       PU #15 (phys=15)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_dell-per810-01 utils]# ./hwloc-calc --objects proc:0
</span><br>
<span class="quotelev1">&gt; PU:0
</span><br>
<span class="quotelev1">&gt; [root_at_dell-per810-01 utils]# ./hwloc-calc --objects proc:1
</span><br>
<span class="quotelev1">&gt; PU:1
</span><br>
<span class="quotelev1">&gt; ===============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached xml file if you want to check what's wrong. (I'm not using 
</span><br>
<span class="quotelev1">&gt; --objects 
</span><br>
<span class="quotelev1">&gt; at the moment. I just wanted to see what it does.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --objects works fine no boxes without hyper threading. However, it seems to do 
</span><br>
<span class="quotelev1">&gt; the wrong thing on boxes with hyper threading.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>the above is expected. --objects return the largest objects included
<br>
inside your input.
<br>
<p>The largest object inside a hypethread is this hyperthread. The largest
<br>
object inside two hyperthreads of the same core is this entire core. The
<br>
largest objects inside 2 hyperthreads of one core and another
<br>
hyperthread of another core is the first core + the other hyperthread.
<br>
See ? Maybe it's not well documented, and --objects is probably not the
<br>
right name. In the API, I say:
<br>
<p>/** \brief Get the first largest object included in the given cpuset \p set.
<br>
&nbsp;*
<br>
&nbsp;* \return the first object that is included in \p set and whose parent is not.
<br>
&nbsp;*
<br>
&nbsp;* This is convenient for iterating over all largest objects within a CPU set
<br>
&nbsp;* by doing a loop getting the first largest object and clearing its CPU set
<br>
&nbsp;* from the remaining CPU set.
<br>
&nbsp;*/
<br>
hwloc_obj_t hwloc_get_first_largest_obj_inside_cpuset(hwloc_topology_t topology, hwloc_const_cpuset_t set);
<br>
<p>/** \brief Get the set of largest objects covering exactly a given cpuset \p set
<br>
&nbsp;*
<br>
&nbsp;* \return the number of objects returned in \p objs.
<br>
&nbsp;*/
<br>
int hwloc_get_largest_objs_inside_cpuset (hwloc_topology_t topology, hwloc_const_cpuset_t set, hwloc_obj_t * __hwloc_restrict objs, int max);
<br>
<p><p><span class="quotelev2">&gt;&gt; Yes, recently added error messages are ok, I need to fix the old ones,
</span><br>
<span class="quotelev2">&gt;&gt; those that only appear in verbose mode.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Thanks! :-)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I committed this fix.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1140.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
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
