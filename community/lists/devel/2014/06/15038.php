<?
$subject_val = "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 05:48:44 2014" -->
<!-- isoreceived="20140620094844" -->
<!-- sent="Fri, 20 Jun 2014 02:48:39 -0700" -->
<!-- isosent="20140620094839" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile" -->
<!-- id="DEC114E5-B73E-4DDA-A08F-4804696861DA_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53A3DA18.8090904_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 05:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15039.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>Previous message:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15039.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...this is a tough one. It basically comes down to what we mean by relative locality. Initially, we meant &quot;at what level do these procs share cpus&quot; - however, coll/ml is using it as &quot;at what level are these procs commonly bound&quot;. Subtle difference, but significant.
<br>
<p>Your proposed version implements the second interpretation - even though we share cpus down to the hwthread level, it correctly reports that we are only commonly bound to the node. I'm unclear how the shared memory system (or other areas using that value) will respond to that change in meaning.
<br>
<p>Probably requires looking a little more broadly (just search the ompi layer for anything referencing the ompi_proc_t locality flag) to ensure everything can handle (or be adjusted to handle) the revised definition. If so, then I have no issue with replacing the locality algorithm.
<br>
<p>Would also require an RFC as that might impact folks working on branches.
<br>
<p><p>On Jun 19, 2014, at 11:52 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is attached a patch that fixes/works around my issue.
</span><br>
<span class="quotelev1">&gt; this is more of a proof of concept, so i did not commit it to the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_hwloc_base_get_relative_locality (topo, set1, set2)
</span><br>
<span class="quotelev1">&gt; sets the locality based on the deepest element that is part of both set1 and set2.
</span><br>
<span class="quotelev1">&gt; in my case, set2 means &quot;all the available cpus&quot; that is why the subroutine
</span><br>
<span class="quotelev1">&gt; will return OPAL_PROC_ON_HWTHREAD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the patch uses opal_hwloc_base_get_relative_locality2 instead.
</span><br>
<span class="quotelev1">&gt; if one of the cpuset means &quot;all the available cpus&quot;, then the subroutine will
</span><br>
<span class="quotelev1">&gt; simply return OPAL_PROC_ON_NODE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am puzzled wether this is a bug in opal_hwloc_base_get_relative_locality
</span><br>
<span class="quotelev1">&gt; or in proc.c that should not call this subroutine because it does not do what
</span><br>
<span class="quotelev1">&gt; should be expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/06/20 13:59, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; my test VM is single socket four cores.
</span><br>
<span class="quotelev2">&gt;&gt; here is something odd i just found when running mpirun -np 2
</span><br>
<span class="quotelev2">&gt;&gt; intercomm_create.
</span><br>
<span class="quotelev2">&gt;&gt; tasks [0,1] are bound on cpus [0,1] =&gt; OK
</span><br>
<span class="quotelev2">&gt;&gt; tasks[2-3] (first spawn) are bound on cpus [2,3] =&gt; OK
</span><br>
<span class="quotelev2">&gt;&gt; tasks[4-5] (second spawn) are not bound (and cpuset is [0-3]) =&gt; OK
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in ompi_proc_set_locality (ompi/proc/proc.c:228) on task 0
</span><br>
<span class="quotelev2">&gt;&gt;                    locality =
</span><br>
<span class="quotelev2">&gt;&gt; opal_hwloc_base_get_relative_locality(opal_hwloc_topology,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_process_info.cpuset,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cpu_bitmap);
</span><br>
<span class="quotelev2">&gt;&gt; where
</span><br>
<span class="quotelev2">&gt;&gt; ompi_process_info.cpuset is &quot;0&quot;
</span><br>
<span class="quotelev2">&gt;&gt; cpu_bitmap is &quot;0-3&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and locality is set to OPAL_PROC_ON_HWTHREAD (!)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; is this correct ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i would have expected OPAL_PROC_ON_L2CACHE (since there is a single L2
</span><br>
<span class="quotelev2">&gt;&gt; cache on my vm,
</span><br>
<span class="quotelev2">&gt;&gt; as reported by lstopo) or even OPAL_PROC_LOCALITY_UNKNOWN
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; then in mca_coll_ml_comm_query (ompi/mca/coll/ml/coll_ml_module.c:2899)
</span><br>
<span class="quotelev2">&gt;&gt; the module
</span><br>
<span class="quotelev2">&gt;&gt; disqualifies itself if !ompi_rte_proc_bound.
</span><br>
<span class="quotelev2">&gt;&gt; if locality were previously set to OPAL_PROC_LOCALITY_UNKNOWN, coll/ml
</span><br>
<span class="quotelev2">&gt;&gt; could checked the flag
</span><br>
<span class="quotelev2">&gt;&gt; of all the procs of the communicator and disqualify itself if at least
</span><br>
<span class="quotelev2">&gt;&gt; one of them is OPAL_PROC_LOCALITY_UNKNOWN.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as you wrote, there might be a bunch of other corner cases.
</span><br>
<span class="quotelev2">&gt;&gt; that being said, i ll try to write a simple proof of concept and see it
</span><br>
<span class="quotelev2">&gt;&gt; this specific hang can be avoided
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/06/20 12:08, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is related, but it means that coll/ml has a higher degree of sensitivity to the binding pattern than what you reported (which was that coll/ml doesn't work with unbound processes). What we are now seeing is that coll/ml also doesn't work when processes are bound across sockets.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which means that Nathan's revised tests are going to have to cover a lot more corner cases. Our locality flags don't currently include &quot;bound-to-multiple-sockets&quot;, and I'm not sure how he is going to easily resolve that case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15036.php">http://www.open-mpi.org/community/lists/devel/2014/06/15036.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;proc.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15037.php">http://www.open-mpi.org/community/lists/devel/2014/06/15037.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15039.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>Previous message:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15037.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15039.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
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
