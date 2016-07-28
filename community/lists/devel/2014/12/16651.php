<?
$subject_val = "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 15:52:54 2014" -->
<!-- isoreceived="20141217205254" -->
<!-- sent="Wed, 17 Dec 2014 21:52:52 +0100" -->
<!-- isosent="20141217205252" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest" -->
<!-- id="5491ED24.6090800_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17D-Zm6Rsy3VgRaVAKNmvFwQ4mQDYX5hMiM+_3k5u+x3g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 15:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Previous message:</strong> <a href="16650.php">Paul Hargrove: "[OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>In reply to:</strong> <a href="16650.php">Paul Hargrove: "[OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Reply:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 17/12/2014 21:43, Paul Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dbx gives me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     t_at_1 (l_at_1) terminated by signal SEGV (no mapping at the fault address)
</span><br>
<span class="quotelev1">&gt;     Current function is opal_hwloc172_hwloc_get_obj_by_depth
</span><br>
<span class="quotelev1">&gt;        74     return topology-&gt;levels[depth][idx];
</span><br>
<span class="quotelev1">&gt;     (dbx) where
</span><br>
<span class="quotelev1">&gt;     current thread: t_at_1
</span><br>
<span class="quotelev1">&gt;     =&gt;[1] opal_hwloc172_hwloc_get_obj_by_depth(topology = 0x4d49e0,
</span><br>
<span class="quotelev1">&gt;     depth = 0, idx = 0), line 74 in &quot;traversal.c&quot;
</span><br>
<span class="quotelev1">&gt;       [2] opal_hwloc172_hwloc_get_root_obj(topology = 0x4d49e0), line
</span><br>
<span class="quotelev1">&gt;     118 in &quot;helper.h&quot;
</span><br>
<span class="quotelev1">&gt;       [3] opal_hwloc_base_get_nbobjs_by_type(topo = 0x4d49e0, target =
</span><br>
<span class="quotelev1">&gt;     OPAL_HWLOC172_hwloc_OBJ_CORE, cache_level = 0, rtype = '\003'),
</span><br>
<span class="quotelev1">&gt;     line 833 in &quot;hwloc_base_util.c&quot;
</span><br>
<span class="quotelev1">&gt;       [4] orte_rmaps_rr_byobj(jdata = 0x43c940, app = 0x483fe0,
</span><br>
<span class="quotelev1">&gt;     node_list = 0xfffffd7fffdff4b0, num_slots = 2, num_procs = 2U,
</span><br>
<span class="quotelev1">&gt;     target = OPAL_HWLOC172_hwloc_OBJ_CORE, cache_level = 0), line 495
</span><br>
<span class="quotelev1">&gt;     in &quot;rmaps_rr_mappers.c&quot;
</span><br>
<span class="quotelev1">&gt;       [5] orte_rmaps_rr_map(jdata = 0x43c940), line 165 in &quot;rmaps_rr.c&quot;
</span><br>
<span class="quotelev1">&gt;       [6] orte_rmaps_base_map_job(fd = -1, args = 4, cbdata =
</span><br>
<span class="quotelev1">&gt;     0x4a3300), line 277 in &quot;rmaps_base_map_job.c&quot;
</span><br>
<span class="quotelev1">&gt;       [7] event_process_active_single_queue(0x0, 0x0, 0x0, 0x0, 0x0,
</span><br>
<span class="quotelev1">&gt;     0x0), at 0xfffffd7fe453afbc 
</span><br>
<span class="quotelev1">&gt;       [8] event_process_active(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at
</span><br>
<span class="quotelev1">&gt;     0xfffffd7fe453b361 
</span><br>
<span class="quotelev1">&gt;       [9] opal_libevent2021_event_base_loop(0x0, 0x0, 0x0, 0x0, 0x0,
</span><br>
<span class="quotelev1">&gt;     0x0), at 0xfffffd7fe453bc79 
</span><br>
<span class="quotelev1">&gt;       [10] orterun(argc = 9, argv = 0xfffffd7fffdffa58), line 1081 in
</span><br>
<span class="quotelev1">&gt;     &quot;orterun.c&quot;
</span><br>
<span class="quotelev1">&gt;       [11] main(argc = 9, argv = 0xfffffd7fffdffa58), line 13 in &quot;main.c&quot;
</span><br>
<span class="quotelev1">&gt;     (dbx) print depth
</span><br>
<span class="quotelev1">&gt;     depth = 0
</span><br>
<span class="quotelev1">&gt;     (dbx) print index
</span><br>
<span class="quotelev1">&gt;     index = 0xfffffd7fff19c174
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pretty sure that index value is bogus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I see &quot;idx&quot; instead of &quot;index&quot; in the code above. index may be a pointer
<br>
to the &quot;index()&quot; function in your standard library?
<br>
Anyway, depth=0 and idx=0 is totally valid, especially when called from
<br>
hwloc_get_root_obj(). Something bad happened to the topology object? Can
<br>
you print the contents of topology and topology-&gt;nblevels and
<br>
topology-&gt;levels ?
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Previous message:</strong> <a href="16650.php">Paul Hargrove: "[OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>In reply to:</strong> <a href="16650.php">Paul Hargrove: "[OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Reply:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
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
