<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 14:46:46 2010" -->
<!-- isoreceived="20100816184646" -->
<!-- sent="Tue, 17 Aug 2010 00:16:39 +0530" -->
<!-- isosent="20100816184639" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="AANLkTin7Bf1qkyaawyDkumT0_nMq39AJpmVidqyySctY_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201008101615.06283.eg_at_fft.be" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 14:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14047.php">Gokhan Kir: "[OMPI users] A Problem with RAxML"</a>
<li><strong>Previous message:</strong> <a href="14045.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14055.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="14055.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The value of hdr-&gt;tag seems wrong.
<br>
<p>In ompi/mca/pml/ob1/pml_ob1_hdr.h
<br>
#define MCA_PML_OB1_HDR_TYPE_MATCH     (MCA_BTL_TAG_PML + 1)
<br>
#define MCA_PML_OB1_HDR_TYPE_RNDV      (MCA_BTL_TAG_PML + 2)
<br>
#define MCA_PML_OB1_HDR_TYPE_RGET      (MCA_BTL_TAG_PML + 3)
<br>
#define MCA_PML_OB1_HDR_TYPE_ACK       (MCA_BTL_TAG_PML + 4)
<br>
#define MCA_PML_OB1_HDR_TYPE_NACK      (MCA_BTL_TAG_PML + 5)
<br>
#define MCA_PML_OB1_HDR_TYPE_FRAG      (MCA_BTL_TAG_PML + 6)
<br>
#define MCA_PML_OB1_HDR_TYPE_GET       (MCA_BTL_TAG_PML + 7)
<br>
#define MCA_PML_OB1_HDR_TYPE_PUT       (MCA_BTL_TAG_PML + 8)
<br>
#define MCA_PML_OB1_HDR_TYPE_FIN       (MCA_BTL_TAG_PML + 9)
<br>
<p>and in ompi/mca/btl/btl.h
<br>
#define MCA_BTL_TAG_PML             0x40
<br>
<p>So hdr-&gt;tag should be a value &gt;= 65
<br>
Since the tag is incorrect you are not getting the proper callback function
<br>
pointer and hence the SEGV.
<br>
I'm not sure at this point as to why you are getting an invalid/corrupt
<br>
message header ?
<br>
<p>--Nysal
<br>
<p>On Tue, Aug 10, 2010 at 7:45 PM, Eloi Gaudry &lt;eg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sorry, i just forgot to add the values of the function parameters:
</span><br>
<span class="quotelev1">&gt; (gdb) print reg-&gt;cbdata
</span><br>
<span class="quotelev1">&gt; $1 = (void *) 0x0
</span><br>
<span class="quotelev1">&gt; (gdb) print openib_btl-&gt;super
</span><br>
<span class="quotelev1">&gt; $2 = {btl_component = 0x2b341edd7380, btl_eager_limit = 12288,
</span><br>
<span class="quotelev1">&gt; btl_rndv_eager_limit = 12288, btl_max_send_size = 65536,
</span><br>
<span class="quotelev1">&gt; btl_rdma_pipeline_send_length = 1048576,
</span><br>
<span class="quotelev1">&gt;  btl_rdma_pipeline_frag_size = 1048576, btl_min_rdma_pipeline_size =
</span><br>
<span class="quotelev1">&gt; 1060864, btl_exclusivity = 1024, btl_latency = 10, btl_bandwidth = 800,
</span><br>
<span class="quotelev1">&gt; btl_flags = 310,
</span><br>
<span class="quotelev1">&gt;  btl_add_procs = 0x2b341eb8ee47 &lt;mca_btl_openib_add_procs&gt;, btl_del_procs =
</span><br>
<span class="quotelev1">&gt; 0x2b341eb90156 &lt;mca_btl_openib_del_procs&gt;, btl_register = 0, btl_finalize =
</span><br>
<span class="quotelev1">&gt; 0x2b341eb93186 &lt;mca_btl_openib_finalize&gt;,
</span><br>
<span class="quotelev1">&gt;  btl_alloc = 0x2b341eb90a3e &lt;mca_btl_openib_alloc&gt;, btl_free =
</span><br>
<span class="quotelev1">&gt; 0x2b341eb91400 &lt;mca_btl_openib_free&gt;, btl_prepare_src = 0x2b341eb91813
</span><br>
<span class="quotelev1">&gt; &lt;mca_btl_openib_prepare_src&gt;,
</span><br>
<span class="quotelev1">&gt;  btl_prepare_dst = 0x2b341eb91f2e &lt;mca_btl_openib_prepare_dst&gt;, btl_send =
</span><br>
<span class="quotelev1">&gt; 0x2b341eb94517 &lt;mca_btl_openib_send&gt;, btl_sendi = 0x2b341eb9340d
</span><br>
<span class="quotelev1">&gt; &lt;mca_btl_openib_sendi&gt;,
</span><br>
<span class="quotelev1">&gt;  btl_put = 0x2b341eb94660 &lt;mca_btl_openib_put&gt;, btl_get = 0x2b341eb94c4e
</span><br>
<span class="quotelev1">&gt; &lt;mca_btl_openib_get&gt;, btl_dump = 0x2b341acd45cb &lt;mca_btl_base_dump&gt;,
</span><br>
<span class="quotelev1">&gt; btl_mpool = 0xf3f4110,
</span><br>
<span class="quotelev1">&gt;  btl_register_error = 0x2b341eb90565 &lt;mca_btl_openib_register_error_cb&gt;,
</span><br>
<span class="quotelev1">&gt; btl_ft_event = 0x2b341eb952e7 &lt;mca_btl_openib_ft_event&gt;}
</span><br>
<span class="quotelev1">&gt; (gdb) print hdr-&gt;tag
</span><br>
<span class="quotelev1">&gt; $3 = 0 '\0'
</span><br>
<span class="quotelev1">&gt; (gdb) print des
</span><br>
<span class="quotelev1">&gt; $4 = (mca_btl_base_descriptor_t *) 0xf4a6700
</span><br>
<span class="quotelev1">&gt; (gdb) print reg-&gt;cbfunc
</span><br>
<span class="quotelev1">&gt; $5 = (mca_btl_base_module_recv_cb_fn_t) 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 10 August 2010 16:04:08 Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is the output of a core file generated during a segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt; observed during a collective call (using openib):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) where
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002aedbc4e05f4 in btl_openib_handle_incoming
</span><br>
<span class="quotelev2">&gt; &gt; (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700, byte_len=18) at
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_component.c:2881 #2  0x00002aedbc4e25e2 in handle_wc
</span><br>
<span class="quotelev2">&gt; &gt; (device=0x19024ac0, cq=0, wc=0x7ffff279ce90) at
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_component.c:3178 #3  0x00002aedbc4e2e9d in poll_device
</span><br>
<span class="quotelev2">&gt; &gt; (device=0x19024ac0, count=2) at btl_openib_component.c:3318 #4
</span><br>
<span class="quotelev2">&gt; &gt; 0x00002aedbc4e34b8 in progress_one_device (device=0x19024ac0) at
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_component.c:3426 #5  0x00002aedbc4e3561 in
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_component_progress () at btl_openib_component.c:3451 #6
</span><br>
<span class="quotelev2">&gt; &gt; 0x00002aedb8b22ab8 in opal_progress () at runtime/opal_progress.c:207 #7
</span><br>
<span class="quotelev2">&gt; &gt; 0x00002aedb859f497 in opal_condition_wait (c=0x2aedb888ccc0,
</span><br>
<span class="quotelev2">&gt; &gt; m=0x2aedb888cd20) at ../opal/threads/condition.h:99 #8
</span><br>
<span class="quotelev1">&gt;  0x00002aedb859fa31
</span><br>
<span class="quotelev2">&gt; &gt; in ompi_request_default_wait_all (count=2, requests=0x7ffff279d0e0,
</span><br>
<span class="quotelev2">&gt; &gt; statuses=0x0) at request/req_wait.c:262 #9  0x00002aedbd7559ad in
</span><br>
<span class="quotelev2">&gt; &gt; ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x7ffff279d444,
</span><br>
<span class="quotelev2">&gt; &gt; rbuf=0x7ffff279d440, count=1, dtype=0x6788220, op=0x6787a20,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x19d81ff0, module=0x19d82b20) at coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00002aedbd7514f7 in ompi_coll_tuned_allreduce_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt; &gt; (sbuf=0x7ffff279d444, rbuf=0x7ffff279d440, count=1, dtype=0x6788220,
</span><br>
<span class="quotelev2">&gt; &gt; op=0x6787a20, comm=0x19d81ff0, module=0x19d82b20) at
</span><br>
<span class="quotelev2">&gt; &gt; coll_tuned_decision_fixed.c:63
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x00002aedb85c7792 in PMPI_Allreduce (sendbuf=0x7ffff279d444,
</span><br>
<span class="quotelev2">&gt; &gt; recvbuf=0x7ffff279d440, count=1, datatype=0x6788220, op=0x6787a20,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x19d81ff0) at pallreduce.c:102 #12 0x0000000004387dbf in
</span><br>
<span class="quotelev2">&gt; &gt; FEMTown::MPI::Allreduce (sendbuf=0x7ffff279d444, recvbuf=0x7ffff279d440,
</span><br>
<span class="quotelev2">&gt; &gt; count=1, datatype=0x6788220, op=0x6787a20, comm=0x19d81ff0) at
</span><br>
<span class="quotelev2">&gt; &gt; stubs.cpp:626 #13 0x0000000004058be8 in FEMTown::Domain::align (itf=
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; {&lt;FEMTown::Boost::shared_base_ptr&lt;FEMTown::Domain::Interface&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; = {_vptr.shared_base_ptr = 0x7ffff279d620, ptr_ = {px = 0x199942a4, pn =
</span><br>
<span class="quotelev2">&gt; &gt; {pi_ = 0x6}}}, &lt;No data fields&gt;}) at interface.cpp:371
</span><br>
<span class="quotelev2">&gt; &gt; #14 0x00000000040cb858 in
</span><br>
<span class="quotelev1">&gt; FEMTown::Field::detail::align_itfs_and_neighbhors
</span><br>
<span class="quotelev2">&gt; &gt; (dim=2, set={px = 0x7ffff279d780, pn = {pi_ = 0x2f279d640}},
</span><br>
<span class="quotelev2">&gt; &gt; check_info=@0x7ffff279d7f0) at check.cpp:63 #15 0x00000000040cbfa8 in
</span><br>
<span class="quotelev2">&gt; &gt; FEMTown::Field::align_elements (set={px = 0x7ffff279d950, pn = {pi_ =
</span><br>
<span class="quotelev2">&gt; &gt; 0x66e08d0}}, check_info=@0x7ffff279d7f0) at check.cpp:159 #16
</span><br>
<span class="quotelev2">&gt; &gt; 0x00000000039acdd4 in PyField_align_elements (self=0x0,
</span><br>
<span class="quotelev2">&gt; &gt; args=0x2aaab0765050, kwds=0x19d2e950) at check.cpp:31 #17
</span><br>
<span class="quotelev2">&gt; &gt; 0x0000000001fbf76d in FEMTown::Main::ExErrCatch&lt;_object* (*)(_object*,
</span><br>
<span class="quotelev2">&gt; &gt; _object*, _object*)&gt;::exec&lt;_object&gt; (this=0x7ffff279dc20, s=0x0,
</span><br>
<span class="quotelev2">&gt; &gt; po1=0x2aaab0765050, po2=0x19d2e950) at
</span><br>
<span class="quotelev2">&gt; &gt; /home/qa/svntop/femtown/modules/main/py/exception.hpp:463
</span><br>
<span class="quotelev2">&gt; &gt; #18 0x00000000039acc82 in PyField_align_elements_ewrap (self=0x0,
</span><br>
<span class="quotelev2">&gt; &gt; args=0x2aaab0765050, kwds=0x19d2e950) at check.cpp:39 #19
</span><br>
<span class="quotelev2">&gt; &gt; 0x00000000044093a0 in PyEval_EvalFrameEx (f=0x19b52e90, throwflag=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;) at Python/ceval.c:3921 #20 0x000000000440aae9 in
</span><br>
<span class="quotelev2">&gt; &gt; PyEval_EvalCodeEx (co=0x2aaab754ad50, globals=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev2">&gt; &gt; locals=&lt;value optimized out&gt;, args=0x3, argcount=1, kws=0x19ace4a0,
</span><br>
<span class="quotelev2">&gt; &gt; kwcount=2, defs=0x2aaab75e4800, defcount=2, closure=0x0) at
</span><br>
<span class="quotelev2">&gt; &gt; Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt; &gt; #21 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19ace2d0,
</span><br>
<span class="quotelev2">&gt; &gt; throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802 #22
</span><br>
<span class="quotelev2">&gt; &gt; 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab7550120,
</span><br>
<span class="quotelev1">&gt; globals=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x7, argcount=1,
</span><br>
<span class="quotelev2">&gt; &gt; kws=0x19acc418, kwcount=3, defs=0x2aaab759e958, defcount=6, closure=0x0)
</span><br>
<span class="quotelev2">&gt; &gt; at Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt; &gt; #23 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19acc1c0,
</span><br>
<span class="quotelev2">&gt; &gt; throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802 #24
</span><br>
<span class="quotelev2">&gt; &gt; 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab8b5e738,
</span><br>
<span class="quotelev1">&gt; globals=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x6, argcount=1,
</span><br>
<span class="quotelev2">&gt; &gt; kws=0x19abd328, kwcount=5, defs=0x2aaab891b7e8, defcount=3, closure=0x0)
</span><br>
<span class="quotelev2">&gt; &gt; at Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt; &gt; #25 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19abcea0,
</span><br>
<span class="quotelev2">&gt; &gt; throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802 #26
</span><br>
<span class="quotelev2">&gt; &gt; 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab3eb4198,
</span><br>
<span class="quotelev1">&gt; globals=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0xb, argcount=1,
</span><br>
<span class="quotelev2">&gt; &gt; kws=0x19a89df0, kwcount=10, defs=0x0, defcount=0, closure=0x0) at
</span><br>
<span class="quotelev2">&gt; &gt; Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt; &gt; #27 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19a89c40,
</span><br>
<span class="quotelev2">&gt; &gt; throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802 #28
</span><br>
<span class="quotelev2">&gt; &gt; 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab3eb4288,
</span><br>
<span class="quotelev1">&gt; globals=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x1, argcount=0,
</span><br>
<span class="quotelev2">&gt; &gt; kws=0x19a89330, kwcount=0, defs=0x2aaab8b66668, defcount=1, closure=0x0)
</span><br>
<span class="quotelev2">&gt; &gt; at Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt; &gt; #29 0x0000000004408f58 in PyEval_EvalFrameEx (f=0x19a891b0,
</span><br>
<span class="quotelev2">&gt; &gt; throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3802 #30
</span><br>
<span class="quotelev2">&gt; &gt; 0x000000000440aae9 in PyEval_EvalCodeEx (co=0x2aaab8b6a738,
</span><br>
<span class="quotelev1">&gt; globals=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x0, argcount=0,
</span><br>
<span class="quotelev2">&gt; &gt; kws=0x0, kwcount=0, defs=0x0, defcount=0, closure=0x0) at
</span><br>
<span class="quotelev2">&gt; &gt; Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt; &gt; #31 0x000000000440ac02 in PyEval_EvalCode (co=0x1902f9b0, globals=0x0,
</span><br>
<span class="quotelev2">&gt; &gt; locals=0x190d9700) at Python/ceval.c:522 #32 0x000000000442853c in
</span><br>
<span class="quotelev2">&gt; &gt; PyRun_StringFlags (str=0x192fd3d8 &quot;DIRECT.Actran.main()&quot;, start=&lt;value
</span><br>
<span class="quotelev2">&gt; &gt; optimized out&gt;, globals=0x192213d0, locals=0x192213d0, flags=0x0) at
</span><br>
<span class="quotelev2">&gt; &gt; Python/pythonrun.c:1335 #33 0x0000000004429690 in PyRun_SimpleStringFlags
</span><br>
<span class="quotelev2">&gt; &gt; (command=0x192fd3d8 &quot;DIRECT.Actran.main()&quot;, flags=0x0) at
</span><br>
<span class="quotelev2">&gt; &gt; Python/pythonrun.c:957 #34 0x0000000001fa1cf9 in
</span><br>
<span class="quotelev2">&gt; &gt; FEMTown::Python::FEMPy::run_application (this=0x7ffff279f650) at
</span><br>
<span class="quotelev2">&gt; &gt; fempy.cpp:873 #35 0x000000000434ce99 in FEMTown::Main::Batch::run
</span><br>
<span class="quotelev2">&gt; &gt; (this=0x7ffff279f650) at batch.cpp:374 #36 0x0000000001f9aa25 in main
</span><br>
<span class="quotelev2">&gt; &gt; (argc=8, argv=0x7ffff279fa48) at main.cpp:10 (gdb) f 1
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002aedbc4e05f4 in btl_openib_handle_incoming
</span><br>
<span class="quotelev2">&gt; &gt; (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700, byte_len=18) at
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_component.c:2881 2881            reg-&gt;cbfunc(
</span><br>
<span class="quotelev2">&gt; &gt; &amp;openib_btl-&gt;super, hdr-&gt;tag, des, reg-&gt;cbdata ); Current language:
</span><br>
<span class="quotelev1">&gt;  auto;
</span><br>
<span class="quotelev2">&gt; &gt; currently c
</span><br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002aedbc4e05f4 in btl_openib_handle_incoming
</span><br>
<span class="quotelev2">&gt; &gt; (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700, byte_len=18) at
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_component.c:2881 2881            reg-&gt;cbfunc(
</span><br>
<span class="quotelev2">&gt; &gt; &amp;openib_btl-&gt;super, hdr-&gt;tag, des, reg-&gt;cbdata ); (gdb) l
</span><br>
<span class="quotelev2">&gt; &gt; 2876
</span><br>
<span class="quotelev2">&gt; &gt; 2877        if(OPAL_LIKELY(!(is_credit_msg = is_credit_message(frag)))) {
</span><br>
<span class="quotelev2">&gt; &gt; 2878            /* call registered callback */
</span><br>
<span class="quotelev2">&gt; &gt; 2879            mca_btl_active_message_callback_t* reg;
</span><br>
<span class="quotelev2">&gt; &gt; 2880            reg = mca_btl_base_active_message_trigger + hdr-&gt;tag;
</span><br>
<span class="quotelev2">&gt; &gt; 2881            reg-&gt;cbfunc( &amp;openib_btl-&gt;super, hdr-&gt;tag, des,
</span><br>
<span class="quotelev1">&gt; reg-&gt;cbdata
</span><br>
<span class="quotelev2">&gt; &gt; ); 2882            if(MCA_BTL_OPENIB_RDMA_FRAG(frag)) {
</span><br>
<span class="quotelev2">&gt; &gt; 2883                cqp = (hdr-&gt;credits &gt;&gt; 11) &amp; 0x0f;
</span><br>
<span class="quotelev2">&gt; &gt; 2884                hdr-&gt;credits &amp;= 0x87ff;
</span><br>
<span class="quotelev2">&gt; &gt; 2885            } else {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 16 July 2010 16:01:02 Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Edgar,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The only difference I could observed was that the segmentation fault
</span><br>
<span class="quotelev3">&gt; &gt; &gt; appeared sometimes later during the parallel computation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm running out of idea here. I wish I could use the &quot;--mca coll tuned&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with &quot;--mca self,sm,tcp&quot; so that I could check that the issue is not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; somehow limited to the tuned collective routines.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eloi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thursday 15 July 2010 17:24:24 Edgar Gabriel wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On 7/15/2010 10:18 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; hi edgar,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; thanks for the tips, I'm gonna try this option as well. the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; segmentation fault i'm observing always happened during a
</span><br>
<span class="quotelev1">&gt; collective
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; communication indeed... does it basically switch all collective
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; communication to basic mode, right ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; sorry for my ignorance, but what's a NCA ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; sorry, I meant to type HCA (InifinBand networking card)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Edgar
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; thanks,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &#233;loi
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Thursday 15 July 2010 16:20:54 Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; you could try first to use the algorithms in the basic module,
</span><br>
<span class="quotelev1">&gt; e.g.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; mpirun -np x --mca coll basic ./mytest
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; and see whether this makes a difference. I used to observe
</span><br>
<span class="quotelev1">&gt; sometimes
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; a (similar ?) problem in the openib btl triggered from the tuned
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; collective component, in cases where the ofed libraries were
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; installed but no NCA was found on a node. It used to work however
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; with the basic component.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; On 7/15/2010 3:08 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; hi Rolf,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; unfortunately, i couldn't get rid of that annoying segmentation
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; fault when selecting another bcast algorithm. i'm now going to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; replace MPI_Bcast with a naive implementation (using MPI_Send and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; MPI_Recv) and see if that helps.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; On Wednesday 14 July 2010 10:59:53 Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; thanks for your input. You're right, I miss the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; coll_tuned_use_dynamic_rules option.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; I'll check if I the segmentation fault disappears when using the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; basic bcast linear algorithm using the proper command line you
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; provided.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; On Tuesday 13 July 2010 20:39:59 Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Hi Eloi:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; To select the different bcast algorithms, you need to add an
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; extra mca parameter that tells the library to use dynamic
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; selection. --mca coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; One way to make sure you are typing this in correctly is to use
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; it with ompi_info.  Do the following:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; ompi_info -mca coll_tuned_use_dynamic_rules 1 --param coll
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; You should see lots of output with all the different algorithms
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; that can be selected for the various collectives.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Therefore, you need this:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; --mca coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; coll_tuned_bcast_algorithm 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; On 07/13/10 11:28, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; I've found that &quot;--mca coll_tuned_bcast_algorithm 1&quot; allowed
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; switch to the basic linear algorithm. Anyway whatever the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; algorithm used, the segmentation fault remains.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Does anyone could give some advice on ways to diagnose the
</span><br>
<span class="quotelev1">&gt; issue
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; I'm facing ?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On Monday 12 July 2010 10:53:58 Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm focusing on the MPI_Bcast routine that seems to randomly
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; segfault when using the openib btl. I'd like to know if there
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; is any way to make OpenMPI switch to a different algorithm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; than the default one being selected for MPI_Bcast.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 02 July 2010 11:06:52 Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm observing a random segmentation fault during an
</span><br>
<span class="quotelev1">&gt; internode
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parallel computation involving the openib btl and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI-1.4.2 (the same issue can be observed with
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI-1.3.3).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Failing at address: (nil)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] [ 0] /lib64/libpthread.so.0 [0x349540e4c0]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    sh: line 1:  2624 Segmentation fault
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; \/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/RedHatE
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L\ -5 \/ x 86 _6 4\ /bin\/actranpy_mp
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; '--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/RedHatEL
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -5 /x 86 _ 64 /A c tran_11.0.rc2.41872'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; '--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3Dreal_m
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4_ n2 .d a t'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--mem=3200' '--threads=1' '--errorlevel=FATAL'
</span><br>
<span class="quotelev1">&gt; '--t_max=0.1'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--parallel=domain'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I choose not to use the openib btl (by using --mca btl
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; self,sm,tcp on the command line, for instance), I don't
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; encounter any problem and the parallel computation runs
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; flawlessly.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would like to get some help to be able:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - to diagnose the issue I'm facing with the openib btl
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - understand why this issue is observed only when using the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl and not when using self,sm,tcp
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any help would be very much appreciated.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The outputs of ompi_info and the configure scripts of
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are enclosed to this email, and some information on the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; infiniband drivers as well.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the command line used when launching a parallel
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; computation
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using infiniband:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    host.list --mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl openib,sm,self,tcp  --display-map --verbose --version
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --mca mpi_warn_on_fork 0 --mca btl_openib_want_fork_support
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the command line used if not using infiniband:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    host.list --mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl self,sm,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Free Field Technologies
</span><br>
<span class="quotelev1">&gt; Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev1">&gt; Company Phone:   +32 10 487 959
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14047.php">Gokhan Kir: "[OMPI users] A Problem with RAxML"</a>
<li><strong>Previous message:</strong> <a href="14045.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14055.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="14055.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
