<?
$subject_val = "Re: [OMPI devel] OMPI BCOL hang with PMI1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 10:03:38 2014" -->
<!-- isoreceived="20141022140338" -->
<!-- sent="Wed, 22 Oct 2014 10:03:36 -0400" -->
<!-- isosent="20141022140336" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI BCOL hang with PMI1" -->
<!-- id="CAG4F6z-kLZ9A-ii0JZ5Prq+c2UOup_msBB74_dr=Wg0-_qxwQA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ2Qj5oMepzZ9U3dLu68TSgUuL102VpVctFUcDtiqxsGp+-znA_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-22 10:03:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16079.php">Mike Dubman: "[OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>Previous message:</strong> <a href="16077.php">Paul Kapinos: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16069.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16080.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Reply:</strong> <a href="16080.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Privet, Artem
<br>
<p>ML is the collective component that is invoking the calls into BCOL. The
<br>
triplet basesmuma,basesmuma,ptpcoll, for example, means I want three levels
<br>
of hierarchy - socket level, UMA level, and then network level. I am
<br>
guessing (only a guess after a quick glance) that maybe srun is not binding
<br>
processes which could result in the socket subgrouping code to fail (it
<br>
should gracefully declare nothing to subgroup, but this is where the bug
<br>
could be.) It will always come to the conclusion that processes are bound
<br>
to the host, so the two level command line should work. Also, you need to
<br>
look at the variable OMPI_MCA_sbgp_base_string (this defines the subgouping
<br>
rules, and the BCOLs are the collective primitives mapped onto a particular
<br>
communication substrate e.g. shared memory, CORE-Direct, vanilla
<br>
point-to-point.)
<br>
<p>Can you try with:
<br>
srun -N .. --cpu_bind=cores ...
<br>
and see if this resolves the issue? Also, are you running on a
<br>
hyperthreaded machine?
<br>
<p>Another experiment to try:
<br>
I'm assuming this will hang?
<br>
export OMPI_MCA_bcol_base_string=basesmuma,basesmuma,ptpcoll   (this says
<br>
map shared memory collective primitives to both the group of processes
<br>
export OMPI_MCA_sbgp_base_string=basesmsocket,basesmuma,p2p
<br>
<p>I would guess this will work
<br>
export OMPI_MCA_bcol_base_string=basesmuma,ptpcoll   (This says only form a
<br>
single shared memory subgroup consisting of processes on host and then a
<br>
single point-to-point subgroup consisting of all host leaders)
<br>
export OMPI_MCA_sbgp_base_string=basesmuma,p2p
<br>
<p>I'm speculating that this will hang because of something
<br>
export OMPI_MCA_bcol_base_string=basesmuma,ptpcoll  (This says form groups
<br>
consisting of all procs on the same socket and then take a local leader
<br>
from each of these groups and form a point-to-point group)
<br>
export OMPI_MCA_sbgp_base_string=basesmsocket,p2p
<br>
<p>In any case, Elena's suggestion to add -mca coll ^ml will silence all of
<br>
this.
<br>
<p>Josh
<br>
<p><p><p>On Fri, Oct 17, 2014 at 11:46 AM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey, Lena :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-10-17 22:07 GMT+07:00 Elena Elkina &lt;elena.elkina_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Artem,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually some time ago there was a known issue with coll ml. I used to
</span><br>
<span class="quotelev2">&gt;&gt; run my command lines with -mca coll ^ml to avoid these problems, so I don't
</span><br>
<span class="quotelev2">&gt;&gt; know if it was fixed or not. It looks like you have the same problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but mine is with bcol, not coll framework. And as you can see modules
</span><br>
<span class="quotelev1">&gt; itself doesn't brake the program. Only some of their combinations. Also I
</span><br>
<span class="quotelev1">&gt; am curious why basesmuma module listed twice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elena
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Oct 17, 2014 at 7:01 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked your patch and it doesn't solve the problem I observe. I think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the reason is somewhere else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-10-17 19:13 GMT+07:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Artem,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is a known issue #235 with modex and i made PR #238 with a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tentative fix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you please give it a try and reports if it solves your problem ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, I have troubles with latest trunk if I use PMI1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example, if I use 2 nodes the application hangs. See backtraces
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from both nodes below. From them I can see that second (non launching) node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hangs in bcol component selection. Here is the default setting of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bcol_base_string parameter:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bcol_base_string=&quot;basesmuma,basesmuma,iboffload,ptpcoll,ugni&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; according to ompi_info. I don't know if it is correct that basesmuma is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; duplicated or not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Experiments with this parameter showed that it directly influences the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bug:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;&quot; #  [SEGFAULT]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;ptpcoll&quot; #  [OK]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;basesmuma,ptpcoll&quot; #  [OK]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;basesmuma,ptpcoll,iboffload&quot; #  [OK]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;basesmuma,ptpcoll,iboffload,ugni&quot; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [OK]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,ptpcoll,iboffload,ugni&quot; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [HANG]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,iboffload,ptpcoll&quot; # [HANG]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,iboffload&quot; # [OK]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,iboffload,ugni&quot; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [OK]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;basesmuma,basesmuma,ptpcoll&quot; #  [HANG]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;ptpcoll,basesmuma&quot; #  [OK]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_bcol_base_string=&quot;ptpcoll,basesmuma,basesmuma&quot; #  [HANG]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can provide other information if nessesary.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cn1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0  0x00007fdebd30ac6d in poll () from /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1  0x00007fdebcca64e0 in poll_dispatch (base=0x1d466b0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tv=0x7fff71aab880) at poll.c:165
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2  0x00007fdebcc9b041 in opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (base=0x1d466b0, flags=2) at event.c:1631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3  0x00007fdebcc35891 in opal_progress () at runtime/opal_progress.c:169
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4  0x00007fdeb32f78cb in opal_condition_wait (c=0x7fdebdb51bc0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_request_cond&gt;, m=0x7fdebdb51cc0 &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5  0x00007fdeb32f79b8 in ompi_request_wait_completion
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (req=0x7fff71aab920) at ../../../../ompi/request/request.h:381
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6  0x00007fdeb32f84b8 in mca_pml_ob1_recv (addr=0x7fff71aabd80,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; count=1, datatype=0x6026c0 &lt;ompi_mpi_int&gt;, src=1, tag=0, comm=0x6020a0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     status=0x7fff71aabd90) at pml_ob1_irecv.c:109
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 7  0x00007fdebd88f54d in PMPI_Recv (buf=0x7fff71aabd80, count=1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; type=0x6026c0 &lt;ompi_mpi_int&gt;, source=1, tag=0, comm=0x6020a0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     status=0x7fff71aabd90) at precv.c:78
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8  0x0000000000400c44 in main (argc=1, argv=0x7fff71aabe98) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hellompi.c:33
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cn2:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0  0x00007fa65aa78c6d in poll () from /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1  0x00007fa65a4144e0 in poll_dispatch (base=0x20e96b0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tv=0x7fff46f44a80) at poll.c:165
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2  0x00007fa65a409041 in opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (base=0x20e96b0, flags=2) at event.c:1631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3  0x00007fa65a3a3891 in opal_progress () at runtime/opal_progress.c:169
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4  0x00007fa65afbbc25 in opal_condition_wait (c=0x7fa65b2bfbc0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_request_cond&gt;, m=0x7fa65b2bfcc0 &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../opal/threads/condition.h:78
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5  0x00007fa65afbc1b5 in ompi_request_default_wait_all (count=2,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requests=0x7fff46f44c70, statuses=0x0) at request/req_wait.c:287
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6  0x00007fa65afc7906 in comm_allgather_pml (src_buf=0x7fff46f44da0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dest_buf=0x233dac0, count=288, dtype=0x7fa65b29fee0 &lt;ompi_mpi_char&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my_rank_in_group=1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     n_peers=2, ranks_in_comm=0x210a760, comm=0x6020a0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_mpi_comm_world&gt;) at patterns/comm/allgather.c:250
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 7  0x00007fa64f14ba08 in bcol_basesmuma_smcm_allgather_connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sm_bcol_module=0x7fa64e64d010, module=0x232c800,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     peer_list=0x7fa64f3513e8 &lt;mca_bcol_basesmuma_component+456&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back_files=0x7fa64eae2690, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;, input=...,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     base_fname=0x7fa64f14ca8c &quot;sm_ctl_mem_&quot;, map_all=false) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bcol_basesmuma_smcm.c:205
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8  0x00007fa64f146525 in base_bcol_basesmuma_setup_ctl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sm_bcol_module=0x7fa64e64d010, cs=0x7fa64f351220
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mca_bcol_basesmuma_component&gt;) at bcol_basesmuma_setup.c:344
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 9  0x00007fa64f146cbb in base_bcol_basesmuma_setup_library_buffers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sm_bcol_module=0x7fa64e64d010, cs=0x7fa64f351220
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mca_bcol_basesmuma_component&gt;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at bcol_basesmuma_setup.c:550
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10 0x00007fa64f1418d0 in mca_bcol_basesmuma_comm_query
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (module=0x232c800, num_modules=0x232e570) at bcol_basesmuma_module.c:532
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 11 0x00007fa64fd9e5f2 in mca_coll_ml_tree_hierarchy_discovery
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ml_module=0x232fbe0, topo=0x232fd98, n_hierarchies=3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exclude_sbgp_name=0x0, include_sbgp_name=0x0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at coll_ml_module.c:1964
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 12 0x00007fa64fd9f3a3 in mca_coll_ml_fulltree_hierarchy_discovery
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ml_module=0x232fbe0, n_hierarchies=3) at coll_ml_module.c:2211
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 13 0x00007fa64fd9cbe4 in ml_discover_hierarchy (ml_module=0x232fbe0) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll_ml_module.c:1518
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14 0x00007fa64fda164f in mca_coll_ml_comm_query (comm=0x6020a0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_mpi_comm_world&gt;, priority=0x7fff46f45358) at coll_ml_module.c:2970
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15 0x00007fa65b02f6aa in query_2_0_0 (component=0x7fa64fffe4e0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mca_coll_ml_component&gt;, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority=0x7fff46f45358,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     module=0x7fff46f45390) at base/coll_base_comm_select.c:374
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16 0x00007fa65b02f66e in query (component=0x7fa64fffe4e0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mca_coll_ml_component&gt;, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority=0x7fff46f45358, module=0x7fff46f45390)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at base/coll_base_comm_select.c:357
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17 0x00007fa65b02f581 in check_one_component (comm=0x6020a0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_mpi_comm_world&gt;, component=0x7fa64fffe4e0 &lt;mca_coll_ml_component&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module=0x7fff46f45390)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at base/coll_base_comm_select.c:319
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 18 0x00007fa65b02f3c7 in check_components (components=0x7fa65b2a9530
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_coll_base_framework+80&gt;, comm=0x6020a0 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at base/coll_base_comm_select.c:283
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 19 0x00007fa65b027d45 in mca_coll_base_comm_select (comm=0x6020a0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_mpi_comm_world&gt;) at base/coll_base_comm_select.c:119
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 20 0x00007fa65afbdb2c in ompi_mpi_init (argc=1, argv=0x7fff46f45a78,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requested=0, provided=0x7fff46f4590c) at runtime/ompi_mpi_init.c:858
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 21 0x00007fa65aff20ef in PMPI_Init (argc=0x7fff46f4594c,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv=0x7fff46f45940) at pinit.c:84
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 22 0x0000000000400b66 in main (argc=1, argv=0x7fff46f45a78) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hellompi.c:11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16055.php">http://www.open-mpi.org/community/lists/devel/2014/10/16055.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16067.php">http://www.open-mpi.org/community/lists/devel/2014/10/16067.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16068.php">http://www.open-mpi.org/community/lists/devel/2014/10/16068.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16069.php">http://www.open-mpi.org/community/lists/devel/2014/10/16069.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16078/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16079.php">Mike Dubman: "[OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>Previous message:</strong> <a href="16077.php">Paul Kapinos: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16069.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16080.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Reply:</strong> <a href="16080.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
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
