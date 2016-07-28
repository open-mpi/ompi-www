<?
$subject_val = "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 02:52:01 2014" -->
<!-- isoreceived="20140620065201" -->
<!-- sent="Fri, 20 Jun 2014 15:52:08 +0900" -->
<!-- isosent="20140620065208" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile" -->
<!-- id="53A3DA18.8090904_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="53A3BFA2.40008_at_iferc.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 02:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Here is attached a patch that fixes/works around my issue.
<br>
this is more of a proof of concept, so i did not commit it to the trunk.
<br>
<p>basically :
<br>
<p>opal_hwloc_base_get_relative_locality (topo, set1, set2)
<br>
sets the locality based on the deepest element that is part of both set1 and set2.
<br>
in my case, set2 means &quot;all the available cpus&quot; that is why the subroutine
<br>
will return OPAL_PROC_ON_HWTHREAD
<br>
<p>the patch uses opal_hwloc_base_get_relative_locality2 instead.
<br>
if one of the cpuset means &quot;all the available cpus&quot;, then the subroutine will
<br>
simply return OPAL_PROC_ON_NODE.
<br>
<p>i am puzzled wether this is a bug in opal_hwloc_base_get_relative_locality
<br>
or in proc.c that should not call this subroutine because it does not do what
<br>
should be expected.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/06/20 13:59, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my test VM is single socket four cores.
</span><br>
<span class="quotelev1">&gt; here is something odd i just found when running mpirun -np 2
</span><br>
<span class="quotelev1">&gt; intercomm_create.
</span><br>
<span class="quotelev1">&gt; tasks [0,1] are bound on cpus [0,1] =&gt; OK
</span><br>
<span class="quotelev1">&gt; tasks[2-3] (first spawn) are bound on cpus [2,3] =&gt; OK
</span><br>
<span class="quotelev1">&gt; tasks[4-5] (second spawn) are not bound (and cpuset is [0-3]) =&gt; OK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in ompi_proc_set_locality (ompi/proc/proc.c:228) on task 0
</span><br>
<span class="quotelev1">&gt;                     locality =
</span><br>
<span class="quotelev1">&gt; opal_hwloc_base_get_relative_locality(opal_hwloc_topology,
</span><br>
<span class="quotelev1">&gt;                                                                     
</span><br>
<span class="quotelev1">&gt; ompi_process_info.cpuset,
</span><br>
<span class="quotelev1">&gt;                                                                     
</span><br>
<span class="quotelev1">&gt; cpu_bitmap);
</span><br>
<span class="quotelev1">&gt; where
</span><br>
<span class="quotelev1">&gt; ompi_process_info.cpuset is &quot;0&quot;
</span><br>
<span class="quotelev1">&gt; cpu_bitmap is &quot;0-3&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and locality is set to OPAL_PROC_ON_HWTHREAD (!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is this correct ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i would have expected OPAL_PROC_ON_L2CACHE (since there is a single L2
</span><br>
<span class="quotelev1">&gt; cache on my vm,
</span><br>
<span class="quotelev1">&gt; as reported by lstopo) or even OPAL_PROC_LOCALITY_UNKNOWN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then in mca_coll_ml_comm_query (ompi/mca/coll/ml/coll_ml_module.c:2899)
</span><br>
<span class="quotelev1">&gt; the module
</span><br>
<span class="quotelev1">&gt; disqualifies itself if !ompi_rte_proc_bound.
</span><br>
<span class="quotelev1">&gt; if locality were previously set to OPAL_PROC_LOCALITY_UNKNOWN, coll/ml
</span><br>
<span class="quotelev1">&gt; could checked the flag
</span><br>
<span class="quotelev1">&gt; of all the procs of the communicator and disqualify itself if at least
</span><br>
<span class="quotelev1">&gt; one of them is OPAL_PROC_LOCALITY_UNKNOWN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as you wrote, there might be a bunch of other corner cases.
</span><br>
<span class="quotelev1">&gt; that being said, i ll try to write a simple proof of concept and see it
</span><br>
<span class="quotelev1">&gt; this specific hang can be avoided
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
<span class="quotelev1">&gt; On 2014/06/20 12:08, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It is related, but it means that coll/ml has a higher degree of sensitivity to the binding pattern than what you reported (which was that coll/ml doesn't work with unbound processes). What we are now seeing is that coll/ml also doesn't work when processes are bound across sockets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which means that Nathan's revised tests are going to have to cover a lot more corner cases. Our locality flags don't currently include &quot;bound-to-multiple-sockets&quot;, and I'm not sure how he is going to easily resolve that case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15036.php">http://www.open-mpi.org/community/lists/devel/2014/06/15036.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15037/proc.patch">proc.patch</a>
</ul>
<!-- attachment="proc.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15036.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
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
