<?
$subject_val = "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 10:43:49 2014" -->
<!-- isoreceived="20140730144349" -->
<!-- sent="Wed, 30 Jul 2014 23:43:41 +0900" -->
<!-- isosent="20140730144341" -->
<!-- name="Gilles GOUAILLARDET" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins" -->
<!-- id="yjv4rknmgydgtkaw7h68wjjl.1406731004119_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] trunk compilation errors in jenkins" -->
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
<strong>From:</strong> Gilles GOUAILLARDET (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 10:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15356.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15354.php">Rolf vandeVaart: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15356.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15356.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>r32353 can be seen as a suspect...
<br>
Even if it is correct, it might have exposed the bug discussed in #4815 even more (e.g. we hit the bug 100% after the fix)
<br>
<p>does the attached patch to #4815 fixes the problem ?
<br>
<p>If yes, and if you see this issue as a showstopper, feel free to commit it and drop a note to #4815
<br>
( I am afk until tomorrow)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;&lt;!-- /* Font Definitions */ @font-face 	{font-family:&quot;Cambria Math&quot;; 	panose-1:2 4 5 3 5 4 6 3 2 4;} @font-face 	{font-family:Calibri; 	panose-1:2 15 5 2 2 2 4 3 2 4;} /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{margin:0in; 	margin-bottom:.0001pt; 	font-size:11.0pt; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;} a:link, span.MsoHyperlink 	{mso-style-priority:99; 	color:blue; 	text-decoration:underline;} a:visited, span.MsoHyperlinkFollowed 	{mso-style-priority:99; 	color:purple; 	text-decoration:underline;} p.MsoPlainText, li.MsoPlainText, div.MsoPlainText 	{mso-style-priority:99; 	mso-style-link:&quot;Plain Text Char&quot;; 	margin:0in; 	margin-bottom:.0001pt; 	font-size:11.0pt; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;} span.PlainTextChar 	{mso-style-name:&quot;Plain Text Char&quot;; 	mso-style-priority:99; 	mso-style-link:&quot;Plain Text&quot;; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;} .MsoChpDefault 	{mso-style-type:export-only; 	font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;} @page WordSection1 	{size:8.5in 11.0in; 	margin:1.0in 127.35pt 1.0in 127.3pt;} div.WordSection1 	{page:WordSection1;} --&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Just an FYI that my trunk version (r32355) does not work at all anymore if I do not include &quot;--mca coll ^ml&quot;. &#194;&#160;&#194;&#160;&#194;&#160;Here is a stack trace from the ibm/pt2pt/send test running on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) where
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#0&#194;&#160; 0x00007f6c0d1321d0 in ?? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#1&#194;&#160; &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#2&#194;&#160; 0x00007f6c183abd52 in orte_util_compare_name_fields (fields=15 '\017', name1=0x192350001, name2=0xbaf76c) at ../../orte/util/name_fns.c:522
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#3&#194;&#160; 0x00007f6c0bea17be in bcol_basesmuma_smcm_allgather_connection (sm_bcol_module=0x7f6bf3b68040, module=0xb3d200, peer_list=0x7f6c0c0a6748, back_files=0x7f6bf3ffd6c8, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;comm=0x6037a0, input=..., base_fname=0x7f6c0bea2606 &quot;sm_payload_mem_&quot;, map_all=false) at ../../../../../ompi/mca/bcol/basesmuma/bcol_basesmuma_smcm.c:237
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#4&#194;&#160; 0x00007f6c0be98307 in bcol_basesmuma_bank_init_opti (payload_block=0xbc0f60, data_offset=64, bcol_module=0x7f6bf3b68040, reg_data=0xba28c0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; at ../../../../../ompi/mca/bcol/basesmuma/bcol_basesmuma_buf_mgmt.c:302
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#5&#194;&#160; 0x00007f6c0cced386 in mca_coll_ml_register_bcols (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:510
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#6&#194;&#160; 0x00007f6c0cced68f in ml_module_memory_initialization (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:558
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#7&#194;&#160; 0x00007f6c0ccf06b1 in ml_discover_hierarchy (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:1539
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#8&#194;&#160; 0x00007f6c0ccf4e0b in mca_coll_ml_comm_query (comm=0x6037a0, priority=0x7fffe7991b58) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:2963
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#9&#194;&#160; 0x00007f6c18cc5b09 in query_2_0_0 (component=0x7f6c0cf50940, comm=0x6037a0, priority=0x7fffe7991b58, module=0x7fffe7991b90)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:372
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#10 0x00007f6c18cc5ac8 in query (component=0x7f6c0cf50940, comm=0x6037a0, priority=0x7fffe7991b58, module=0x7fffe7991b90)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:355
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#11 0x00007f6c18cc59d2 in check_one_component (comm=0x6037a0, component=0x7f6c0cf50940, module=0x7fffe7991b90)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:317
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#12 0x00007f6c18cc5818 in check_components (components=0x7f6c18f46ef0, comm=0x6037a0) at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:281
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#13 0x00007f6c18cbe3c9 in mca_coll_base_comm_select (comm=0x6037a0) at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:117
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#14 0x00007f6c18c52301 in ompi_mpi_init (argc=1, argv=0x7fffe79924c8, requested=0, provided=0x7fffe79922e8) at ../../ompi/runtime/ompi_mpi_init.c:918
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#15 0x00007f6c18c86e92 in PMPI_Init (argc=0x7fffe799234c, argv=0x7fffe7992340) at pinit.c:84
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#16 0x0000000000401056 in main (argc=1, argv=0x7fffe79924c8) at send.c:32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#1&#194;&#160; &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#2&#194;&#160; 0x00007f6c183abd52 in orte_util_compare_name_fields (fields=15 '\017', name1=0x192350001, name2=0xbaf76c) at ../../orte/util/name_fns.c:522
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;522&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; if (name1-&gt;jobid &lt; name2-&gt;jobid) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) print name1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$1 = (const orte_process_name_t *) 0x192350001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) print *name1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cannot access memory at address 0x192350001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) print name2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$2 = (const orte_process_name_t *) 0xbaf76c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) print *name2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$3 = {jobid = 2452946945, vpid = 1}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Gouaillardet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Wednesday, July 30, 2014 2:16 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [OMPI devel] trunk compilation errors in jenkins
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;#4815 is indirectly related to the move :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;in bcol/basesmuma, we used to compare ompi_process_name_t, and now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;we (try to) compare an ompi_process_name_t and an opal_process_name_t
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;(which causes a glory SIGSEGV)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;i proposed a temporary patch which is both broken and unelegant, could you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;please advise a correct solution ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On 2014/07/27 7:37, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have any issue with the move, I&#226;&#128;&#153;ll be happy to help and/or support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;you on your last move toward a completely generic BTL. To facilitate your
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;work I exposed a minimalistic set of OMPI information at the OPAL level. Take
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;a look at opal/util/proc.h for more info, but please try not to expose more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;mpi.org/community/lists/devel/2014/07/15348.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This email message is for the sole use of the intended recipient(s) and may contain confidential information.&#194;&#160; Any unauthorized review, use, disclosure or distribution is prohibited.&#194;&#160; If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15355/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15356.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15354.php">Rolf vandeVaart: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15356.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15356.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
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
