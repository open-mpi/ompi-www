<?
$subject_val = "Re: [OMPI devel] Communication Failure with orted_comm.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 10:46:00 2011" -->
<!-- isoreceived="20110308154600" -->
<!-- sent="Tue, 8 Mar 2011 16:45:55 +0100" -->
<!-- isosent="20110308154555" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Communication Failure with orted_comm.c" -->
<!-- id="AANLkTinRX1RKWC57KqMnNCqWECTc2Q=6EeCCVQxLz1XB_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7C83B410-0F85-4E6E-9AEB-6A9D71524407_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Communication Failure with orted_comm.c<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 10:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9032.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Previous message:</strong> <a href="9030.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>In reply to:</strong> <a href="9030.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9032.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Reply:</strong> <a href="9032.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, after the release is a break. I'm sending now all my output, maybe that
<br>
helps more. But the code is basically the one i sent. The normal execution
<br>
reaches to the send/receive between the orted_comm and the receiver.
<br>
<p>Best regards.
<br>
<p>Hugo
<br>
<p>2011/3/8 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; The comm can most certainly be done - there are other sections of that code
</span><br>
<span class="quotelev1">&gt; that also send messages. I can't see the end of your new code section, but I
</span><br>
<span class="quotelev1">&gt; assume you ended it properly with a &quot;break&quot;? Otherwise, you'll execute
</span><br>
<span class="quotelev1">&gt; whatever lies below it as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2011, at 8:19 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, i set the value 31 and it is not duplicated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/3/8 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What value did you set for this new command? Did you look at the cmds in
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/odls/odls_types.h to ensure you weren't using a duplicate value?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 8, 2011, at 6:15 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello @ll.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've got a problem in a communication between the*v_protocol_receiver_component.c
</span><br>
<span class="quotelev2">&gt;&gt; * and the *orted_comm.c. *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the *mca_vprotocol_receiver_component_init*  i've added a request that
</span><br>
<span class="quotelev2">&gt;&gt; is received correctly by the *orte_daemon_process_commands *but when i
</span><br>
<span class="quotelev2">&gt;&gt; try to reply to the sender i get the next error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 0] /lib64/libpthread.so.0 [0x2aaaabb03d40]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad760db]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad75aa4]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/openmpi/mca_errmgr_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaae2d2fdd]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_odls_base_notify_iof_complete+0x1da)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad42cb0]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon_process_commands+0x1068)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad19ca6]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x81b)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad18a55]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad9710e]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad974bb]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(opal_event_loop+0x1a)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad972ad]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(opal_event_dispatch+0xe)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad97166]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon+0x2322)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaad17556]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [12] /home/hmeyer/desarrollo/radic-ompi/binarios/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; [0x4008a3]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [13] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaabd2d8a4]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] [14] /home/hmeyer/desarrollo/radic-ompi/binarios/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; [0x400799]
</span><br>
<span class="quotelev2">&gt;&gt; [clus1:15593] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code that i've added at the *v_protocol_receiver_component.c *is (in
</span><br>
<span class="quotelev2">&gt;&gt; bold the recv command that fails):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int mca_vprotocol_receiver_request_protector(void) {
</span><br>
<span class="quotelev2">&gt;&gt;     orte_daemon_cmd_flag_t command;
</span><br>
<span class="quotelev2">&gt;&gt;     opal_buffer_t *buffer = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;     int n = 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     command = ORTE_DAEMON_REQUEST_PROTECTOR_CMD;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     buffer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;     opal_dss.pack(buffer, &amp;command, 1, ORTE_DAEMON_CMD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, buffer, ORTE_RML_TAG_DAEMON,
</span><br>
<span class="quotelev2">&gt;&gt; 0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     *orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON, buffer,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DAEMON_REQUEST_PROTECTOR_CMD, 0);*
</span><br>
<span class="quotelev2">&gt;&gt;     opal_dss.unpack(buffer, &amp;mca_vprotocol_receiver.protector.jobid, &amp;n,
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_UINT32);
</span><br>
<span class="quotelev2">&gt;&gt;     opal_dss.unpack(buffer, &amp;mca_vprotocol_receiver.protector.vpid, &amp;n,
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_UINT32);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_process_info.protector.jobid =
</span><br>
<span class="quotelev2">&gt;&gt; mca_vprotocol_receiver.protector.jobid;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_process_info.protector.vpid  =
</span><br>
<span class="quotelev2">&gt;&gt; mca_vprotocol_receiver.protector.vpid;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code that i've added at the *orted_comm.c *is (in bold the send
</span><br>
<span class="quotelev2">&gt;&gt; command that fails):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; case ORTE_DAEMON_REQUEST_PROTECTOR_CMD:
</span><br>
<span class="quotelev2">&gt;&gt;         if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev2">&gt;&gt;             opal_output(0, &quot;%s orted_recv: received request protector from
</span><br>
<span class="quotelev2">&gt;&gt; local proc %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_PRINT(sender));
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         /* Define the protector */
</span><br>
<span class="quotelev2">&gt;&gt;         protector = (uint32_t)ORTE_PROC_MY_NAME-&gt;vpid + 1;
</span><br>
<span class="quotelev2">&gt;&gt;         if (protector &gt;= (uint32_t)orte_process_info.num_procs) {
</span><br>
<span class="quotelev2">&gt;&gt;             protector = 0;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /* Pack the protector data */
</span><br>
<span class="quotelev2">&gt;&gt;         answer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         if (ORTE_SUCCESS != (ret = opal_dss.pack(answer,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;ORTE_PROC_MY_NAME-&gt;jobid, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev2">&gt;&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;             OBJ_RELEASE(answer);
</span><br>
<span class="quotelev2">&gt;&gt;             goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         if (ORTE_SUCCESS != (ret = opal_dss.pack(answer, &amp;protector, 1,
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_UINT32))) {
</span><br>
<span class="quotelev2">&gt;&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;             OBJ_RELEASE(answer);
</span><br>
<span class="quotelev2">&gt;&gt;             goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev2">&gt;&gt;             opal_output(0, &quot;EL PROTECTOR ASIGNADO para %s ES: %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                         ORTE_NAME_PRINT(sender), protector);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /* Send the protector data */
</span><br>
<span class="quotelev2">&gt;&gt;         *if (0 &gt; orte_rml.send_buffer(sender, answer,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DAEMON_REQUEST_PROTECTOR_CMD, 0)) {*
</span><br>
<span class="quotelev2">&gt;&gt; *            ORTE_ERROR_LOG(ORTE_ERR_COMM_FAILURE);*
</span><br>
<span class="quotelev2">&gt;&gt; *            ret = ORTE_ERR_COMM_FAILURE;*
</span><br>
<span class="quotelev2">&gt;&gt; *            OBJ_RELEASE(answer);*
</span><br>
<span class="quotelev2">&gt;&gt; *            goto CLEANUP;*
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         OBJ_RELEASE(answer);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume by testing that the error is in the bolded section, maybe because
</span><br>
<span class="quotelev2">&gt;&gt; i'am missing some sentence when i try to communicate, or maybe this
</span><br>
<span class="quotelev2">&gt;&gt; communication cannot be done. Any help will be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9031/output1">output1</a>
</ul>
<!-- attachment="output1" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9032.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Previous message:</strong> <a href="9030.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>In reply to:</strong> <a href="9030.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9032.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Reply:</strong> <a href="9032.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
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
