<?
$subject_val = "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 12:06:08 2014" -->
<!-- isoreceived="20140730160608" -->
<!-- sent="Wed, 30 Jul 2014 12:06:03 -0400" -->
<!-- isosent="20140730160603" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins" -->
<!-- id="CAMJJpkVycA6D1mBL-vcmOy--=UbUgFdaCJdcLKWn+s3+8mvjjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5ueXKeNLr4x3v475WbvEc6WmBdh9dRLcpYjG_iPDk7z=g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 12:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15363.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15363.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. opal_process_name_t has basically no meaning by itself, it is a 64
<br>
bits storage location used by the upper layer to save some local key that
<br>
can be later used to extract information. Calling the OPAL level compare
<br>
function might be a better fit there.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Wed, Jul 30, 2014 at 11:50 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; was it really that simple ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; proc_temp-&gt;super.proc_name has type opal_process_name_t :
</span><br>
<span class="quotelev1">&gt; typedef opal_identifier_t opal_process_name_t;
</span><br>
<span class="quotelev1">&gt; typedef uint64_t opal_identifier_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *but*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; item_ptr-&gt;peer has type orte_process_name_t :
</span><br>
<span class="quotelev1">&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev1">&gt;    orte_jobid_t jobid;
</span><br>
<span class="quotelev1">&gt;    orte_vpid_t vpid;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, is r32357 still valid on a big endian arch ?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 11:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just fixed this one - all that was required was an ampersand as the
</span><br>
<span class="quotelev2">&gt;&gt; name was being passed into the function instead of a pointer to the name
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r32357
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 30, 2014, at 7:43 AM, Gilles GOUAILLARDET &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r32353 can be seen as a suspect...
</span><br>
<span class="quotelev2">&gt;&gt; Even if it is correct, it might have exposed the bug discussed in #4815
</span><br>
<span class="quotelev2">&gt;&gt; even more (e.g. we hit the bug 100% after the fix)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; does the attached patch to #4815 fixes the problem ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If yes, and if you see this issue as a showstopper, feel free to commit
</span><br>
<span class="quotelev2">&gt;&gt; it and drop a note to #4815
</span><br>
<span class="quotelev2">&gt;&gt; ( I am afk until tomorrow)
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
<span class="quotelev2">&gt;&gt; Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just an FYI that my trunk version (r32355) does not work at all anymore
</span><br>
<span class="quotelev2">&gt;&gt; if I do not include &quot;--mca coll ^ml&quot;.    Here is a stack trace from the
</span><br>
<span class="quotelev2">&gt;&gt; ibm/pt2pt/send test running on a single node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f6c0d1321d0 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f6c183abd52 in orte_util_compare_name_fields (fields=15
</span><br>
<span class="quotelev2">&gt;&gt; '\017', name1=0x192350001, name2=0xbaf76c) at ../../orte/util/name_fns.c:522
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f6c0bea17be in bcol_basesmuma_smcm_allgather_connection
</span><br>
<span class="quotelev2">&gt;&gt; (sm_bcol_module=0x7f6bf3b68040, module=0xb3d200, peer_list=0x7f6c0c0a6748,
</span><br>
<span class="quotelev2">&gt;&gt; back_files=0x7f6bf3ffd6c8,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     comm=0x6037a0, input=..., base_fname=0x7f6c0bea2606
</span><br>
<span class="quotelev2">&gt;&gt; &quot;sm_payload_mem_&quot;, map_all=false) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/bcol/basesmuma/bcol_basesmuma_smcm.c:237
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f6c0be98307 in bcol_basesmuma_bank_init_opti
</span><br>
<span class="quotelev2">&gt;&gt; (payload_block=0xbc0f60, data_offset=64, bcol_module=0x7f6bf3b68040,
</span><br>
<span class="quotelev2">&gt;&gt; reg_data=0xba28c0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/bcol/basesmuma/bcol_basesmuma_buf_mgmt.c:302
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f6c0cced386 in mca_coll_ml_register_bcols (ml_module=0xba5c40)
</span><br>
<span class="quotelev2">&gt;&gt; at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:510
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f6c0cced68f in ml_module_memory_initialization
</span><br>
<span class="quotelev2">&gt;&gt; (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:558
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f6c0ccf06b1 in ml_discover_hierarchy (ml_module=0xba5c40) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/coll/ml/coll_ml_module.c:1539
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007f6c0ccf4e0b in mca_coll_ml_comm_query (comm=0x6037a0,
</span><br>
<span class="quotelev2">&gt;&gt; priority=0x7fffe7991b58) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/coll/ml/coll_ml_module.c:2963
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007f6c18cc5b09 in query_2_0_0 (component=0x7f6c0cf50940,
</span><br>
<span class="quotelev2">&gt;&gt; comm=0x6037a0, priority=0x7fffe7991b58, module=0x7fffe7991b90)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:372
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00007f6c18cc5ac8 in query (component=0x7f6c0cf50940, comm=0x6037a0,
</span><br>
<span class="quotelev2">&gt;&gt; priority=0x7fffe7991b58, module=0x7fffe7991b90)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:355
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00007f6c18cc59d2 in check_one_component (comm=0x6037a0,
</span><br>
<span class="quotelev2">&gt;&gt; component=0x7f6c0cf50940, module=0x7fffe7991b90)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:317
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x00007f6c18cc5818 in check_components (components=0x7f6c18f46ef0,
</span><br>
<span class="quotelev2">&gt;&gt; comm=0x6037a0) at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:281
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x00007f6c18cbe3c9 in mca_coll_base_comm_select (comm=0x6037a0) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/mca/coll/base/coll_base_comm_select.c:117
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x00007f6c18c52301 in ompi_mpi_init (argc=1, argv=0x7fffe79924c8,
</span><br>
<span class="quotelev2">&gt;&gt; requested=0, provided=0x7fffe79922e8) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../ompi/runtime/ompi_mpi_init.c:918
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #15 0x00007f6c18c86e92 in PMPI_Init (argc=0x7fffe799234c,
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7fffe7992340) at pinit.c:84
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #16 0x0000000000401056 in main (argc=1, argv=0x7fffe79924c8) at send.c:32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) up
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) up
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f6c183abd52 in orte_util_compare_name_fields (fields=15
</span><br>
<span class="quotelev2">&gt;&gt; '\017', name1=0x192350001, name2=0xbaf76c) at ../../orte/util/name_fns.c:522
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 522           if (name1-&gt;jobid &lt; name2-&gt;jobid) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) print name1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $1 = (const orte_process_name_t *) 0x192350001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) print *name1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cannot access memory at address 0x192350001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) print name2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $2 = (const orte_process_name_t *) 0xbaf76c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) print *name2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $3 = {jobid = 2452946945, vpid = 1}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From: devel [mailto:devel-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;devel-bounces_at_[hidden]&gt;] On Behalf Of Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Sent: Wednesday, July 30, 2014 2:16 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Subject: Re: [OMPI devel] trunk compilation errors in jenkins
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;#4815 is indirectly related to the move :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;in bcol/basesmuma, we used to compare ompi_process_name_t, and now
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;we (try to) compare an ompi_process_name_t and an opal_process_name_t
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;(which causes a glory SIGSEGV)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;i proposed a temporary patch which is both broken and unelegant, could
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;please advise a correct solution ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;On 2014/07/27 7:37, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; If you have any issue with the move, I&#226;&#128;&#153;ll be happy to help and/or
</span><br>
<span class="quotelev2">&gt;&gt; support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;you on your last move toward a completely generic BTL. To facilitate your
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;work I exposed a minimalistic set of OMPI information at the OPAL level.
</span><br>
<span class="quotelev2">&gt;&gt; Take
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;a look at opal/util/proc.h for more info, but please try not to expose
</span><br>
<span class="quotelev2">&gt;&gt; more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15348.php">http://www.open-mpi.org/community/lists/devel/2014/07/15348.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;mpi.org/community/lists/devel/2014/07/15348.php
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15348.php">http://www.open-mpi.org/community/lists/devel/2014/07/15348.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev2">&gt;&gt; may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev2">&gt;&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev2">&gt;&gt; of the original message.
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15355.php">http://www.open-mpi.org/community/lists/devel/2014/07/15355.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15356.php">http://www.open-mpi.org/community/lists/devel/2014/07/15356.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15363.php">http://www.open-mpi.org/community/lists/devel/2014/07/15363.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15364/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15363.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15363.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
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
