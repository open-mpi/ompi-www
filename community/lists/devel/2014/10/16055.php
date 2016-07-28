<?
$subject_val = "Re: [OMPI devel] OMPI BCOL hang with PMI1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 08:13:45 2014" -->
<!-- isoreceived="20141017121345" -->
<!-- sent="Fri, 17 Oct 2014 21:13:37 +0900" -->
<!-- isosent="20141017121337" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI BCOL hang with PMI1" -->
<!-- id="gftla5fderwwq9v8h89gcq7f.1413548017385_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI BCOL hang with PMI1" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI BCOL hang with PMI1<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 08:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16056.php">Jed Brown: "[OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16054.php">Artem Polyakov: "[OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Maybe in reply to:</strong> <a href="16054.php">Artem Polyakov: "[OMPI devel] OMPI BCOL hang with PMI1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16067.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Reply:</strong> <a href="16067.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Artem,
<br>
<p>There is a known issue #235 with modex and i made PR #238 with a tentative fix.
<br>
<p>Could you please give it a try and reports if it solves your problem ?
<br>
<p>Cheers
<br>
<p>Gilles
<br>
<p>Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hello, I have troubles with latest trunk if I use PMI1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For example, if I use 2 nodes the application hangs. See backtraces from both nodes below. From them I can see that second (non launching) node hangs in bcol component selection. Here is the default setting of bcol_base_string parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;bcol_base_string=&quot;basesmuma,basesmuma,iboffload,ptpcoll,ugni&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;according to ompi_info. I don't know if it is correct that basesmuma is duplicated or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Experiments with this parameter showed that it directly influences the bug:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;&quot; # &#194;&#160;[SEGFAULT]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;ptpcoll&quot; # &#194;&#160;[OK]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;basesmuma,ptpcoll&quot; # &#194;&#160;[OK]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;basesmuma,ptpcoll,iboffload&quot; # &#194;&#160;[OK]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;basesmuma,ptpcoll,iboffload,ugni&quot; # &#194;&#160;[OK]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,ptpcoll,iboffload,ugni&quot; # &#194;&#160;[HANG]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,iboffload,ptpcoll&quot; # [HANG]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,iboffload&quot; # [OK]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,iboffload,ugni&quot; # [OK]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,ptpcoll&quot; # &#194;&#160;[HANG]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;ptpcoll,basesmuma&quot; # &#194;&#160;[OK]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export OMPI_MCA_bcol_base_string=&quot;ptpcoll,basesmuma,basesmuma&quot; # &#194;&#160;[HANG]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I can provide other information if nessesary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;cn1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) bt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;0 &#194;&#160;0x00007fdebd30ac6d in poll () from /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1 &#194;&#160;0x00007fdebcca64e0 in poll_dispatch (base=0x1d466b0, tv=0x7fff71aab880) at poll.c:165
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2 &#194;&#160;0x00007fdebcc9b041 in opal_libevent2021_event_base_loop (base=0x1d466b0, flags=2) at event.c:1631
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3 &#194;&#160;0x00007fdebcc35891 in opal_progress () at runtime/opal_progress.c:169
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4 &#194;&#160;0x00007fdeb32f78cb in opal_condition_wait (c=0x7fdebdb51bc0 &lt;ompi_request_cond&gt;, m=0x7fdebdb51cc0 &lt;ompi_request_lock&gt;) at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;5 &#194;&#160;0x00007fdeb32f79b8 in ompi_request_wait_completion (req=0x7fff71aab920) at ../../../../ompi/request/request.h:381
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;6 &#194;&#160;0x00007fdeb32f84b8 in mca_pml_ob1_recv (addr=0x7fff71aabd80, count=1, datatype=0x6026c0 &lt;ompi_mpi_int&gt;, src=1, tag=0, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;,&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; status=0x7fff71aabd90) at pml_ob1_irecv.c:109
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;7 &#194;&#160;0x00007fdebd88f54d in PMPI_Recv (buf=0x7fff71aabd80, count=1, type=0x6026c0 &lt;ompi_mpi_int&gt;, source=1, tag=0, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;,&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; status=0x7fff71aabd90) at precv.c:78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;8 &#194;&#160;0x0000000000400c44 in main (argc=1, argv=0x7fff71aabe98) at hellompi.c:33
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;cn2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) bt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;0 &#194;&#160;0x00007fa65aa78c6d in poll () from /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1 &#194;&#160;0x00007fa65a4144e0 in poll_dispatch (base=0x20e96b0, tv=0x7fff46f44a80) at poll.c:165
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2 &#194;&#160;0x00007fa65a409041 in opal_libevent2021_event_base_loop (base=0x20e96b0, flags=2) at event.c:1631
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3 &#194;&#160;0x00007fa65a3a3891 in opal_progress () at runtime/opal_progress.c:169
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4 &#194;&#160;0x00007fa65afbbc25 in opal_condition_wait (c=0x7fa65b2bfbc0 &lt;ompi_request_cond&gt;, m=0x7fa65b2bfcc0 &lt;ompi_request_lock&gt;) at ../opal/threads/condition.h:78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;5 &#194;&#160;0x00007fa65afbc1b5 in ompi_request_default_wait_all (count=2, requests=0x7fff46f44c70, statuses=0x0) at request/req_wait.c:287
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;6 &#194;&#160;0x00007fa65afc7906 in comm_allgather_pml (src_buf=0x7fff46f44da0, dest_buf=0x233dac0, count=288, dtype=0x7fa65b29fee0 &lt;ompi_mpi_char&gt;, my_rank_in_group=1,&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; n_peers=2, ranks_in_comm=0x210a760, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;) at patterns/comm/allgather.c:250
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;7 &#194;&#160;0x00007fa64f14ba08 in bcol_basesmuma_smcm_allgather_connection (sm_bcol_module=0x7fa64e64d010, module=0x232c800,&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; peer_list=0x7fa64f3513e8 &lt;mca_bcol_basesmuma_component+456&gt;, back_files=0x7fa64eae2690, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;, input=...,&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; base_fname=0x7fa64f14ca8c &quot;sm_ctl_mem_&quot;, map_all=false) at bcol_basesmuma_smcm.c:205
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;8 &#194;&#160;0x00007fa64f146525 in base_bcol_basesmuma_setup_ctl (sm_bcol_module=0x7fa64e64d010, cs=0x7fa64f351220 &lt;mca_bcol_basesmuma_component&gt;) at bcol_basesmuma_setup.c:344
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;9 &#194;&#160;0x00007fa64f146cbb in base_bcol_basesmuma_setup_library_buffers (sm_bcol_module=0x7fa64e64d010, cs=0x7fa64f351220 &lt;mca_bcol_basesmuma_component&gt;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; at bcol_basesmuma_setup.c:550
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;10 0x00007fa64f1418d0 in mca_bcol_basesmuma_comm_query (module=0x232c800, num_modules=0x232e570) at bcol_basesmuma_module.c:532
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;11 0x00007fa64fd9e5f2 in mca_coll_ml_tree_hierarchy_discovery (ml_module=0x232fbe0, topo=0x232fd98, n_hierarchies=3, exclude_sbgp_name=0x0, include_sbgp_name=0x0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; at coll_ml_module.c:1964
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;12 0x00007fa64fd9f3a3 in mca_coll_ml_fulltree_hierarchy_discovery (ml_module=0x232fbe0, n_hierarchies=3) at coll_ml_module.c:2211
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;13 0x00007fa64fd9cbe4 in ml_discover_hierarchy (ml_module=0x232fbe0) at coll_ml_module.c:1518
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;14 0x00007fa64fda164f in mca_coll_ml_comm_query (comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;, priority=0x7fff46f45358) at coll_ml_module.c:2970
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;15 0x00007fa65b02f6aa in query_2_0_0 (component=0x7fa64fffe4e0 &lt;mca_coll_ml_component&gt;, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;, priority=0x7fff46f45358,&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; module=0x7fff46f45390) at base/coll_base_comm_select.c:374
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;16 0x00007fa65b02f66e in query (component=0x7fa64fffe4e0 &lt;mca_coll_ml_component&gt;, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;, priority=0x7fff46f45358, module=0x7fff46f45390)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; at base/coll_base_comm_select.c:357
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;17 0x00007fa65b02f581 in check_one_component (comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;, component=0x7fa64fffe4e0 &lt;mca_coll_ml_component&gt;, module=0x7fff46f45390)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; at base/coll_base_comm_select.c:319
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;18 0x00007fa65b02f3c7 in check_components (components=0x7fa65b2a9530 &lt;ompi_coll_base_framework+80&gt;, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; at base/coll_base_comm_select.c:283
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;19 0x00007fa65b027d45 in mca_coll_base_comm_select (comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;) at base/coll_base_comm_select.c:119
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;20 0x00007fa65afbdb2c in ompi_mpi_init (argc=1, argv=0x7fff46f45a78, requested=0, provided=0x7fff46f4590c) at runtime/ompi_mpi_init.c:858
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;21 0x00007fa65aff20ef in PMPI_Init (argc=0x7fff46f4594c, argv=0x7fff46f45940) at pinit.c:84
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;22 0x0000000000400b66 in main (argc=1, argv=0x7fff46f45a78) at hellompi.c:11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt;Best regards, Artem Y. Polyakov 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16056.php">Jed Brown: "[OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16054.php">Artem Polyakov: "[OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Maybe in reply to:</strong> <a href="16054.php">Artem Polyakov: "[OMPI devel] OMPI BCOL hang with PMI1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16067.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Reply:</strong> <a href="16067.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
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
