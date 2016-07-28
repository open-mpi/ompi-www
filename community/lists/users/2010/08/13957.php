<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 10:05:04 2010" -->
<!-- isoreceived="20100810140504" -->
<!-- sent="Tue, 10 Aug 2010 16:04:08 +0200" -->
<!-- isosent="20100810140408" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="201008101604.08949.eg_at_fft.be" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="201007161601.02229.eg_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] [openib] segfault when using openib btl<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 10:04:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13956.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13668.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Here is the output of a core file generated during a segmentation fault observed during a collective call (using openib):
<br>
<p>#0  0x0000000000000000 in ?? ()
<br>
(gdb) where
<br>
#0  0x0000000000000000 in ?? ()
<br>
#1  0x00002aedbc4e05f4 in btl_openib_handle_incoming (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700, byte_len=18) at btl_openib_component.c:2881
<br>
#2  0x00002aedbc4e25e2 in handle_wc (device=0x19024ac0, cq=0, wc=0x7ffff279ce90) at btl_openib_component.c:3178
<br>
#3  0x00002aedbc4e2e9d in poll_device (device=0x19024ac0, count=2) at btl_openib_component.c:3318
<br>
#4  0x00002aedbc4e34b8 in progress_one_device (device=0x19024ac0) at btl_openib_component.c:3426
<br>
#5  0x00002aedbc4e3561 in btl_openib_component_progress () at btl_openib_component.c:3451
<br>
#6  0x00002aedb8b22ab8 in opal_progress () at runtime/opal_progress.c:207
<br>
#7  0x00002aedb859f497 in opal_condition_wait (c=0x2aedb888ccc0, m=0x2aedb888cd20) at ../opal/threads/condition.h:99
<br>
#8  0x00002aedb859fa31 in ompi_request_default_wait_all (count=2, requests=0x7ffff279d0e0, statuses=0x0) at request/req_wait.c:262
<br>
#9  0x00002aedbd7559ad in ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x7ffff279d444, rbuf=0x7ffff279d440, count=1, dtype=0x6788220, op=0x6787a20, comm=0x19d81ff0, module=0x19d82b20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_allreduce.c:223
<br>
#10 0x00002aedbd7514f7 in ompi_coll_tuned_allreduce_intra_dec_fixed (sbuf=0x7ffff279d444, rbuf=0x7ffff279d440, count=1, dtype=0x6788220, op=0x6787a20, comm=0x19d81ff0, module=0x19d82b20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_decision_fixed.c:63
<br>
#11 0x00002aedb85c7792 in PMPI_Allreduce (sendbuf=0x7ffff279d444, recvbuf=0x7ffff279d440, count=1, datatype=0x6788220, op=0x6787a20, comm=0x19d81ff0) at pallreduce.c:102
<br>
#12 0x0000000004387dbf in FEMTown::MPI::Allreduce (sendbuf=0x7ffff279d444, recvbuf=0x7ffff279d440, count=1, datatype=0x6788220, op=0x6787a20, comm=0x19d81ff0) at stubs.cpp:626
<br>
#13 0x0000000004058be8 in FEMTown::Domain::align (itf=
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&lt;FEMTown::Boost::shared_base_ptr&lt;FEMTown::Domain::Interface&gt;&gt; = {_vptr.shared_base_ptr = 0x7ffff279d620, ptr_ = {px = 0x199942a4, pn = {pi_ = 0x6}}}, &lt;No data fields&gt;})
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at interface.cpp:371
<br>
#14 0x00000000040cb858 in FEMTown::Field::detail::align_itfs_and_neighbhors (dim=2, set={px = 0x7ffff279d780, pn = {pi_ = 0x2f279d640}}, check_info=@0x7ffff279d7f0) at check.cpp:63
<br>
#15 0x00000000040cbfa8 in FEMTown::Field::align_elements (set={px = 0x7ffff279d950, pn = {pi_ = 0x66e08d0}}, check_info=@0x7ffff279d7f0) at check.cpp:159
<br>
#16 0x00000000039acdd4 in PyField_align_elements (self=0x0, args=0x2aaab0765050, kwds=0x19d2e950) at check.cpp:31
<br>
#17 0x0000000001fbf76d in FEMTown::Main::ExErrCatch&lt;_object* (*)(_object*, _object*, _object*)&gt;::exec&lt;_object&gt; (this=0x7ffff279dc20, s=0x0, po1=0x2aaab0765050, po2=0x19d2e950)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /home/qa/svntop/femtown/modules/main/py/exception.hpp:463
<br>
#18 0x00000000039acc82 in PyField_align_elements_ewrap (self=0x0, args=0x2aaab0765050, kwds=0x19d2e950) at check.cpp:39
<br>
#19 0x00000000044093a0 in PyEval_EvalFrameEx (f=0x19b52e90, throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3921
<br>
#20 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab754ad50, globals=&lt;value optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x3, argcount=1, kws=0x19ace4a0, kwcount=2, defs=0x2aaab75e4800, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;defcount=2, closure=0x0) at Python/ceval.c:2968
<br>
#21 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19ace2d0, throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802
<br>
#22 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab7550120, globals=&lt;value optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x7, argcount=1, kws=0x19acc418, kwcount=3, defs=0x2aaab759e958, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;defcount=6, closure=0x0) at Python/ceval.c:2968
<br>
#23 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19acc1c0, throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802
<br>
#24 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab8b5e738, globals=&lt;value optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x6, argcount=1, kws=0x19abd328, kwcount=5, defs=0x2aaab891b7e8, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;defcount=3, closure=0x0) at Python/ceval.c:2968
<br>
#25 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19abcea0, throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802
<br>
#26 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab3eb4198, globals=&lt;value optimized out&gt;, locals=&lt;value optimized out&gt;, args=0xb, argcount=1, kws=0x19a89df0, kwcount=10, defs=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;defcount=0, closure=0x0) at Python/ceval.c:2968
<br>
#27 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19a89c40, throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802
<br>
#28 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab3eb4288, globals=&lt;value optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x1, argcount=0, kws=0x19a89330, kwcount=0, defs=0x2aaab8b66668, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;defcount=1, closure=0x0) at Python/ceval.c:2968
<br>
#29 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19a891b0, throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802
<br>
#30 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab8b6a738, globals=&lt;value optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x0, argcount=0, kws=0x0, kwcount=0, defs=0x0, defcount=0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;closure=0x0) at Python/ceval.c:2968
<br>
#31 0x000000000440ac02 in PyEval_EvalCode (co=0x1902f9b0, globals=0x0, locals=0x190d9700) at Python/ceval.c:522
<br>
#32 0x000000000442853c in PyRun_StringFlags (str=0x192fd3d8 &quot;DIRECT.Actran.main()&quot;, start=&lt;value optimized out&gt;, globals=0x192213d0, locals=0x192213d0, flags=0x0) at Python/pythonrun.c:1335
<br>
#33 0x0000000004429690 in PyRun_SimpleStringFlags (command=0x192fd3d8 &quot;DIRECT.Actran.main()&quot;, flags=0x0) at Python/pythonrun.c:957
<br>
#34 0x0000000001fa1cf9 in FEMTown::Python::FEMPy::run_application (this=0x7ffff279f650) at fempy.cpp:873
<br>
#35 0x000000000434ce99 in FEMTown::Main::Batch::run (this=0x7ffff279f650) at batch.cpp:374
<br>
#36 0x0000000001f9aa25 in main (argc=8, argv=0x7ffff279fa48) at main.cpp:10
<br>
(gdb) f 1
<br>
#1  0x00002aedbc4e05f4 in btl_openib_handle_incoming (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700, byte_len=18) at btl_openib_component.c:2881
<br>
2881            reg-&gt;cbfunc( &amp;openib_btl-&gt;super, hdr-&gt;tag, des, reg-&gt;cbdata );
<br>
Current language:  auto; currently c
<br>
(gdb) 
<br>
#1  0x00002aedbc4e05f4 in btl_openib_handle_incoming (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700, byte_len=18) at btl_openib_component.c:2881
<br>
2881            reg-&gt;cbfunc( &amp;openib_btl-&gt;super, hdr-&gt;tag, des, reg-&gt;cbdata );
<br>
(gdb) l
<br>
2876
<br>
2877        if(OPAL_LIKELY(!(is_credit_msg = is_credit_message(frag)))) {
<br>
2878            /* call registered callback */
<br>
2879            mca_btl_active_message_callback_t* reg;
<br>
2880            reg = mca_btl_base_active_message_trigger + hdr-&gt;tag;
<br>
2881            reg-&gt;cbfunc( &amp;openib_btl-&gt;super, hdr-&gt;tag, des, reg-&gt;cbdata );
<br>
2882            if(MCA_BTL_OPENIB_RDMA_FRAG(frag)) {
<br>
2883                cqp = (hdr-&gt;credits &gt;&gt; 11) &amp; 0x0f;
<br>
2884                hdr-&gt;credits &amp;= 0x87ff;
<br>
2885            } else {
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p>On Friday 16 July 2010 16:01:02 Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; Hi Edgar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only difference I could observed was that the segmentation fault
</span><br>
<span class="quotelev1">&gt; appeared sometimes later during the parallel computation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running out of idea here. I wish I could use the &quot;--mca coll tuned&quot;
</span><br>
<span class="quotelev1">&gt; with &quot;--mca self,sm,tcp&quot; so that I could check that the issue is not
</span><br>
<span class="quotelev1">&gt; somehow limited to the tuned collective routines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 15 July 2010 17:24:24 Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On 7/15/2010 10:18 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hi edgar,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks for the tips, I'm gonna try this option as well. the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; segmentation fault i'm observing always happened during a collective
</span><br>
<span class="quotelev3">&gt; &gt; &gt; communication indeed... does it basically switch all collective
</span><br>
<span class="quotelev3">&gt; &gt; &gt; communication to basic mode, right ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sorry for my ignorance, but what's a NCA ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sorry, I meant to type HCA (InifinBand networking card)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Edgar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &#233;loi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thursday 15 July 2010 16:20:54 Edgar Gabriel wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; you could try first to use the algorithms in the basic module, e.g.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun -np x --mca coll basic ./mytest
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and see whether this makes a difference. I used to observe sometimes a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (similar ?) problem in the openib btl triggered from the tuned
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; collective component, in cases where the ofed libraries were installed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; but no NCA was found on a node. It used to work however with the basic
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; component.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Edgar
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On 7/15/2010 3:08 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; hi Rolf,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; unfortunately, i couldn't get rid of that annoying segmentation fault
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; when selecting another bcast algorithm. i'm now going to replace
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; MPI_Bcast with a naive implementation (using MPI_Send and MPI_Recv)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; and see if that helps.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; regards,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Wednesday 14 July 2010 10:59:53 Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; thanks for your input. You're right, I miss the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; coll_tuned_use_dynamic_rules option.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I'll check if I the segmentation fault disappears when using the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; basic bcast linear algorithm using the proper command line you
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; provided.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; On Tuesday 13 July 2010 20:39:59 Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Hi Eloi:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; To select the different bcast algorithms, you need to add an extra
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; mca parameter that tells the library to use dynamic selection.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; --mca coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; One way to make sure you are typing this in correctly is to use it
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; with ompi_info.  Do the following:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; ompi_info -mca coll_tuned_use_dynamic_rules 1 --param coll
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; You should see lots of output with all the different algorithms
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; that can be selected for the various collectives.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Therefore, you need this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; --mca coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; coll_tuned_bcast_algorithm 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; On 07/13/10 11:28, Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; I've found that &quot;--mca coll_tuned_bcast_algorithm 1&quot; allowed to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; switch to the basic linear algorithm. Anyway whatever the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; algorithm used, the segmentation fault remains.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Does anyone could give some advice on ways to diagnose the issue
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; I'm facing ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On Monday 12 July 2010 10:53:58 Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm focusing on the MPI_Bcast routine that seems to randomly
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; segfault when using the openib btl. I'd like to know if there is
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; any way to make OpenMPI switch to a different algorithm than the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; default one being selected for MPI_Bcast.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 02 July 2010 11:06:52 Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm observing a random segmentation fault during an internode
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parallel computation involving the openib btl and OpenMPI-1.4.2
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (the same issue can be observed with OpenMPI-1.3.3).
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] [ 0] /lib64/libpthread.so.0 [0x349540e4c0]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    sh: line 1:  2624 Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; \/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/RedHatEL\
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -5 \/ x 86 _6 4\ /bin\/actranpy_mp
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/RedHatEL-5
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /x 86 _ 64 /A c tran_11.0.rc2.41872'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3Dreal_m4_
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; n2 .d a t'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--mem=3200' '--threads=1' '--errorlevel=FATAL' '--t_max=0.1'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--parallel=domain'
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I choose not to use the openib btl (by using --mca btl
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; self,sm,tcp on the command line, for instance), I don't
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; encounter any problem and the parallel computation runs
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; flawlessly.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would like to get some help to be able:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - to diagnose the issue I'm facing with the openib btl
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - understand why this issue is observed only when using the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl and not when using self,sm,tcp
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any help would be very much appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The outputs of ompi_info and the configure scripts of OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are enclosed to this email, and some information on the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; infiniband drivers as well.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the command line used when launching a parallel
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; computation
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using infiniband:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --mca
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl openib,sm,self,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the command line used if not using infiniband:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --mca
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl self,sm,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
Company Phone:   +32 10 487 959
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13956.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13668.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
