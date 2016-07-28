<?
$subject_val = "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 15:54:52 2014" -->
<!-- isoreceived="20141217205452" -->
<!-- sent="Wed, 17 Dec 2014 20:54:38 +0000" -->
<!-- isosent="20141217205438" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest" -->
<!-- id="aff3ba633fe6470aa416eb48067bcdea_at_DRHQMAIL102.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5491ED24.6090800_at_inria.fr" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 15:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16653.php">Paul Hargrove: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Previous message:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>In reply to:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16653.php">Paul Hargrove: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Reply:</strong> <a href="16653.php">Paul Hargrove: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this has already been fixed by Ralph this morning.  I had observed the same issue but is now gone.
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Wednesday, December 17, 2014 3:53 PM
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest
<br>
<p>Le 17/12/2014 21:43, Paul Hargrove a &#233;crit :
<br>
<p>Dbx gives me
<br>
t_at_1 (l_at_1) terminated by signal SEGV (no mapping at the fault address)
<br>
Current function is opal_hwloc172_hwloc_get_obj_by_depth
<br>
&nbsp;&nbsp;&nbsp;74     return topology-&gt;levels[depth][idx];
<br>
(dbx) where
<br>
current thread: t_at_1
<br>
=&gt;[1] opal_hwloc172_hwloc_get_obj_by_depth(topology = 0x4d49e0, depth = 0, idx = 0), line 74 in &quot;traversal.c&quot;
<br>
&nbsp;&nbsp;[2] opal_hwloc172_hwloc_get_root_obj(topology = 0x4d49e0), line 118 in &quot;helper.h&quot;
<br>
&nbsp;&nbsp;[3] opal_hwloc_base_get_nbobjs_by_type(topo = 0x4d49e0, target = OPAL_HWLOC172_hwloc_OBJ_CORE, cache_level = 0, rtype = '\003'), line 833 in &quot;hwloc_base_util.c&quot;
<br>
&nbsp;&nbsp;[4] orte_rmaps_rr_byobj(jdata = 0x43c940, app = 0x483fe0, node_list = 0xfffffd7fffdff4b0, num_slots = 2, num_procs = 2U, target = OPAL_HWLOC172_hwloc_OBJ_CORE, cache_level = 0), line 495 in &quot;rmaps_rr_mappers.c&quot;
<br>
&nbsp;&nbsp;[5] orte_rmaps_rr_map(jdata = 0x43c940), line 165 in &quot;rmaps_rr.c&quot;
<br>
&nbsp;&nbsp;[6] orte_rmaps_base_map_job(fd = -1, args = 4, cbdata = 0x4a3300), line 277 in &quot;rmaps_base_map_job.c&quot;
<br>
&nbsp;&nbsp;[7] event_process_active_single_queue(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at 0xfffffd7fe453afbc
<br>
&nbsp;&nbsp;[8] event_process_active(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at 0xfffffd7fe453b361
<br>
&nbsp;&nbsp;[9] opal_libevent2021_event_base_loop(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at 0xfffffd7fe453bc79
<br>
&nbsp;&nbsp;[10] orterun(argc = 9, argv = 0xfffffd7fffdffa58), line 1081 in &quot;orterun.c&quot;
<br>
&nbsp;&nbsp;[11] main(argc = 9, argv = 0xfffffd7fffdffa58), line 13 in &quot;main.c&quot;
<br>
(dbx) print depth
<br>
depth = 0
<br>
(dbx) print index
<br>
index = 0xfffffd7fff19c174
<br>
<p>Pretty sure that index value is bogus.
<br>
<p><p>I see &quot;idx&quot; instead of &quot;index&quot; in the code above. index may be a pointer to the &quot;index()&quot; function in your standard library?
<br>
Anyway, depth=0 and idx=0 is totally valid, especially when called from hwloc_get_root_obj(). Something bad happened to the topology object? Can you print the contents of topology and topology-&gt;nblevels and topology-&gt;levels ?
<br>
<p>Brice
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16653.php">Paul Hargrove: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Previous message:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>In reply to:</strong> <a href="16651.php">Brice Goglin: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16653.php">Paul Hargrove: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Reply:</strong> <a href="16653.php">Paul Hargrove: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
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
