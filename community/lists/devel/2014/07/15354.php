<?
$subject_val = "Re: [OMPI devel] trunk compilation errors in jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 10:28:41 2014" -->
<!-- isoreceived="20140730142841" -->
<!-- sent="Wed, 30 Jul 2014 07:28:37 -0700" -->
<!-- isosent="20140730142837" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk compilation errors in jenkins" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360477A17B1_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53D88DB0.7030307_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk compilation errors in jenkins<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 10:28:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15355.php">Gilles GOUAILLARDET: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15353.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15348.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an FYI that my trunk version (r32355) does not work at all anymore if I do not include &quot;--mca coll ^ml&quot;.    Here is a stack trace from the ibm/pt2pt/send test running on a single node.
<br>
<p><p><p>(gdb) where
<br>
<p>#0  0x00007f6c0d1321d0 in ?? ()
<br>
<p>#1  &lt;signal handler called&gt;
<br>
<p>#2  0x00007f6c183abd52 in orte_util_compare_name_fields (fields=15 '\017', name1=0x192350001, name2=0xbaf76c) at ../../orte/util/name_fns.c:522
<br>
<p>#3  0x00007f6c0bea17be in bcol_basesmuma_smcm_allgather_connection (sm_bcol_module=0x7f6bf3b68040, module=0xb3d200, peer_list=0x7f6c0c0a6748, back_files=0x7f6bf3ffd6c8,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;comm=0x6037a0, input=..., base_fname=0x7f6c0bea2606 &quot;sm_payload_mem_&quot;, map_all=false) at ../../../../../ompi/mca/bcol/basesmuma/bcol_basesmuma_smcm.c:237
<br>
<p>#4  0x00007f6c0be98307 in bcol_basesmuma_bank_init_opti (payload_block=0xbc0f60, data_offset=64, bcol_module=0x7f6bf3b68040, reg_data=0xba28c0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/bcol/basesmuma/bcol_basesmuma_buf_mgmt.c:302
<br>
<p>#5  0x00007f6c0cced386 in mca_coll_ml_register_bcols (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:510
<br>
<p>#6  0x00007f6c0cced68f in ml_module_memory_initialization (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:558
<br>
<p>#7  0x00007f6c0ccf06b1 in ml_discover_hierarchy (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:1539
<br>
<p>#8  0x00007f6c0ccf4e0b in mca_coll_ml_comm_query (comm=0x6037a0, priority=0x7fffe7991b58) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:2963
<br>
<p>#9  0x00007f6c18cc5b09 in query_2_0_0 (component=0x7f6c0cf50940, comm=0x6037a0, priority=0x7fffe7991b58, module=0x7fffe7991b90)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:372
<br>
<p>#10 0x00007f6c18cc5ac8 in query (component=0x7f6c0cf50940, comm=0x6037a0, priority=0x7fffe7991b58, module=0x7fffe7991b90)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:355
<br>
<p>#11 0x00007f6c18cc59d2 in check_one_component (comm=0x6037a0, component=0x7f6c0cf50940, module=0x7fffe7991b90)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:317
<br>
<p>#12 0x00007f6c18cc5818 in check_components (components=0x7f6c18f46ef0, comm=0x6037a0) at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:281
<br>
<p>#13 0x00007f6c18cbe3c9 in mca_coll_base_comm_select (comm=0x6037a0) at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:117
<br>
<p>#14 0x00007f6c18c52301 in ompi_mpi_init (argc=1, argv=0x7fffe79924c8, requested=0, provided=0x7fffe79922e8) at ../../ompi/runtime/ompi_mpi_init.c:918
<br>
<p>#15 0x00007f6c18c86e92 in PMPI_Init (argc=0x7fffe799234c, argv=0x7fffe7992340) at pinit.c:84
<br>
<p>#16 0x0000000000401056 in main (argc=1, argv=0x7fffe79924c8) at send.c:32
<br>
<p>(gdb) up
<br>
<p>#1  &lt;signal handler called&gt;
<br>
<p>(gdb) up
<br>
<p>#2  0x00007f6c183abd52 in orte_util_compare_name_fields (fields=15 '\017', name1=0x192350001, name2=0xbaf76c) at ../../orte/util/name_fns.c:522
<br>
<p>522           if (name1-&gt;jobid &lt; name2-&gt;jobid) {
<br>
<p>(gdb) print name1
<br>
<p>$1 = (const orte_process_name_t *) 0x192350001
<br>
<p>(gdb) print *name1
<br>
<p>Cannot access memory at address 0x192350001
<br>
<p>(gdb) print name2
<br>
<p>$2 = (const orte_process_name_t *) 0xbaf76c
<br>
<p>(gdb) print *name2
<br>
<p>$3 = {jobid = 2452946945, vpid = 1}
<br>
<p>(gdb)
<br>
<p><p><p><p><p><p><p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<p><span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Gilles
</span><br>
<p><span class="quotelev1">&gt;Gouaillardet
</span><br>
<p><span class="quotelev1">&gt;Sent: Wednesday, July 30, 2014 2:16 AM
</span><br>
<p><span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<p><span class="quotelev1">&gt;Subject: Re: [OMPI devel] trunk compilation errors in jenkins
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;George,
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;#4815 is indirectly related to the move :
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;in bcol/basesmuma, we used to compare ompi_process_name_t, and now
</span><br>
<p><span class="quotelev1">&gt;we (try to) compare an ompi_process_name_t and an opal_process_name_t
</span><br>
<p><span class="quotelev1">&gt;(which causes a glory SIGSEGV)
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;i proposed a temporary patch which is both broken and unelegant, could you
</span><br>
<p><span class="quotelev1">&gt;please advise a correct solution ?
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;Cheers,
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;Gilles
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;On 2014/07/27 7:37, George Bosilca wrote:
</span><br>
<p><span class="quotelev2">&gt;&gt; If you have any issue with the move, I'll be happy to help and/or support
</span><br>
<p><span class="quotelev1">&gt;you on your last move toward a completely generic BTL. To facilitate your
</span><br>
<p><span class="quotelev1">&gt;work I exposed a minimalistic set of OMPI information at the OPAL level. Take
</span><br>
<p><span class="quotelev1">&gt;a look at opal/util/proc.h for more info, but please try not to expose more.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;_______________________________________________
</span><br>
<p><span class="quotelev1">&gt;devel mailing list
</span><br>
<p><span class="quotelev1">&gt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<p><span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><span class="quotelev1">&gt;Link to this post: <a href="http://www.open-<http://www.open-mpi.org/community/lists/devel/2014/07/15348.php">http://www.open-<http://www.open-mpi.org/community/lists/devel/2014/07/15348.php</a>&gt;
</span><br>
<p><span class="quotelev1">&gt;mpi.org/community/lists/devel/2014/07/15348.php&lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15348.php">http://www.open-mpi.org/community/lists/devel/2014/07/15348.php</a>&gt;
</span><br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15355.php">Gilles GOUAILLARDET: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15353.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15348.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
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
