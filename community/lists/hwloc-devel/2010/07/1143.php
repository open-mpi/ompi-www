<?
$subject_val = "Re: [hwloc-devel] Ad";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 12:23:11 2010" -->
<!-- isoreceived="20100707162311" -->
<!-- sent="Wed, 7 Jul 2010 18:23:02 +0200" -->
<!-- isosent="20100707162302" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Ad" -->
<!-- id="201007071823.02352.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[hwloc-devel] Ad" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Ad<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 12:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1144.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2291)"</a>
<li><strong>Previous message:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Forgot to CC the list)
<br>
<p>Hi Brice,
<br>
<p>On Wednesday, July 07, 2010 04:16:19 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 07/07/2010 13:40, Jirka Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Well, I would expect to get following reported on STDERR (refer to lstopo
</span><br>
<span class="quotelev2">&gt; &gt; output) when -v is specified:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./hwloc-calc -v --list 4 proc:60
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         L2 #30 (256KB)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./hwloc-calc -v --list 5 proc:60
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;           L1 #30 (32KB)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./hwloc-calc -v --list 6 proc:60
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;             Core #30
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Without &quot;-v&quot; it's fine to report just a number. Does it make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, --list was designed to generate x,y,z strings that may be passed
</span><br>
<span class="quotelev1">&gt; to external tools such as numactl or taskset. Adding the type as a
</span><br>
<span class="quotelev1">&gt; prefix would not help much there.
</span><br>
Right. I completely agree. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BTW, --objects reports Cache (It would be useful to add the size of Cache
</span><br>
<span class="quotelev2">&gt; &gt; to the report)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could add that to -v maybe.
</span><br>
That was my point. STDOUT output has to stay intact. This is nice-to-have 
<br>
(IMHO very low priority) for STDERR.
<br>
<p><span class="quotelev1">&gt; the above is expected. --objects return the largest objects included
</span><br>
<span class="quotelev1">&gt; inside your input.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The largest object inside a hypethread is this hyperthread. The largest
</span><br>
<span class="quotelev1">&gt; object inside two hyperthreads of the same core is this entire core. The
</span><br>
<span class="quotelev1">&gt; largest objects inside 2 hyperthreads of one core and another
</span><br>
<span class="quotelev1">&gt; hyperthread of another core is the first core + the other hyperthread.
</span><br>
<span class="quotelev1">&gt; See ? Maybe it's not well documented, and --objects is probably not the
</span><br>
<span class="quotelev1">&gt; right name. In the API, I say:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /** \brief Get the first largest object included in the given cpuset \p
</span><br>
<span class="quotelev1">&gt; set. *
</span><br>
<span class="quotelev1">&gt;  * \return the first object that is included in \p set and whose parent is
</span><br>
<span class="quotelev1">&gt; not. *
</span><br>
<span class="quotelev1">&gt;  * This is convenient for iterating over all largest objects within a CPU
</span><br>
<span class="quotelev1">&gt; set * by doing a loop getting the first largest object and clearing its
</span><br>
<span class="quotelev1">&gt; CPU set * from the remaining CPU set.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t hwloc_get_first_largest_obj_inside_cpuset(hwloc_topology_t
</span><br>
<span class="quotelev1">&gt; topology, hwloc_const_cpuset_t set);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /** \brief Get the set of largest objects covering exactly a given cpuset
</span><br>
<span class="quotelev1">&gt; \p set *
</span><br>
<span class="quotelev1">&gt;  * \return the number of objects returned in \p objs.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; int hwloc_get_largest_objs_inside_cpuset (hwloc_topology_t topology,
</span><br>
<span class="quotelev1">&gt; hwloc_const_cpuset_t set, hwloc_obj_t * __hwloc_restrict objs, int max);
</span><br>
I do agree with you. hwloc_get_largest_objs_inside_cpuset does it right. On 
<br>
the other hand, I do believe that on user level you would expect --objects to 
<br>
give you the parrent object. If it gives you the same object as in input it's 
<br>
not useful. 
<br>
<p>IMHO, hwloc_get_largest_objs_inside_cpuset is right but hwloc-calc --objects 
<br>
should call hwloc_get_largest_objs_inside_cpuset 2 times on system with 
<br>
hyperthreading enabled to get meaningful output. 
<br>
<p>You can perhaps solve this problem by adding the new option 
<br>
--ancestor_tree
<br>
to show all ancestors.
<br>
<p>IMHO, these options do not belong to hwloc-calc utility anyhow. The output of 
<br>
this utility should be passed to either numactl or taskset or hwloc-bind. The 
<br>
output of objects option does not fit into this framework:
<br>
<p><p>[root_at_dell-per810-01 utils]# ./hwloc-calc --objects core:0 2&gt;/dev/null
<br>
L2Cache:0
<br>
<p>IMHO, not even hwloc-bind can handle &quot;L2Cache:0&quot; output. I would suggest to 
<br>
move --objects option to hwloc-info or change it's behaviour so that it gives 
<br>
output useful for CPU affinity commands (taskset, numactl, hwloc-bind)
<br>
<p>Please notice that I'm not using --objects option in real life and I may be 
<br>
just wrong. These are just mine 2 cents.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, recently added error messages are ok, I need to fix the old ones,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; those that only appear in verbose mode.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks! :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I committed this fix.
</span><br>
Thanks Brice!!
<br>
<p>I do apologize for the long posts today. I really love hwloc. Perhaps I'm just 
<br>
too picky:-) and I'm pointing out tiny problems. You see, I'm not using --
<br>
objects but I will definitely use --list option once it's released.
<br>
<p>Greetings,
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1144.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2291)"</a>
<li><strong>Previous message:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
