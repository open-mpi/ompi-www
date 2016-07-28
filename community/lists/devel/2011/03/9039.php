<?
$subject_val = "Re: [OMPI devel] Communication Failure with orted_comm.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  9 08:08:39 2011" -->
<!-- isoreceived="20110309130839" -->
<!-- sent="Wed, 9 Mar 2011 14:08:33 +0100" -->
<!-- isosent="20110309130833" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Communication Failure with orted_comm.c" -->
<!-- id="AANLkTim9EyOVRTFhAfz03wxtE0mNZ03nOHjk2cSL5KKp_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39F468D8-A2C1-4AB5-A713-547844D407FA_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-03-09 08:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9040.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Previous message:</strong> <a href="9038.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>In reply to:</strong> <a href="9033.php">George Bosilca: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your suggestion worked Ralph.
<br>
<p>I only add :
<br>
<p>OBJ_RELEASE(buffer);
<br>
buffer = OBJ_NEW(opal_buffer_t);
<br>
<p>Thank you both for your help.
<br>
<p>Hugo
<br>
<p>2011/3/8 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; The stack trace indicate that your orted segfaulted in the
</span><br>
<span class="quotelev1">&gt; orte_odls_base_notify_iof_complete which means it received a message that
</span><br>
<span class="quotelev1">&gt; was interpreted as a ORTE_DAEMON_IOF_COMPLETE (21). Nothing more to get out
</span><br>
<span class="quotelev1">&gt; from your output unfortunately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2011, at 08:15 , Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello @ll.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've got a problem in a communication between the
</span><br>
<span class="quotelev1">&gt; v_protocol_receiver_component.c and the orted_comm.c.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the mca_vprotocol_receiver_component_init  i've added a request that
</span><br>
<span class="quotelev1">&gt; is received correctly by the orte_daemon_process_commands but when i try to
</span><br>
<span class="quotelev1">&gt; reply to the sender i get the next error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 0] /lib64/libpthread.so.0 [0x2aaaabb03d40]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad760db]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad75aa4]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/openmpi/mca_errmgr_orted.so
</span><br>
<span class="quotelev1">&gt; [0x2aaaae2d2fdd]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_odls_base_notify_iof_complete+0x1da)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad42cb0]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon_process_commands+0x1068)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad19ca6]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x81b)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad18a55]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad9710e]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad974bb]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(opal_event_loop+0x1a)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad972ad]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [10]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(opal_event_dispatch+0xe)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad97166]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [11]
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon+0x2322)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad17556]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [12] /home/hmeyer/desarrollo/radic-ompi/binarios/bin/orted
</span><br>
<span class="quotelev1">&gt; [0x4008a3]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [13] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x2aaaabd2d8a4]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] [14] /home/hmeyer/desarrollo/radic-ompi/binarios/bin/orted
</span><br>
<span class="quotelev1">&gt; [0x400799]
</span><br>
<span class="quotelev2">&gt; &gt; [clus1:15593] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code that i've added at the v_protocol_receiver_component.c is (in
</span><br>
<span class="quotelev1">&gt; bold the recv command that fails):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int mca_vprotocol_receiver_request_protector(void) {
</span><br>
<span class="quotelev2">&gt; &gt;     orte_daemon_cmd_flag_t command;
</span><br>
<span class="quotelev2">&gt; &gt;     opal_buffer_t *buffer = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     int n = 1;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     command = ORTE_DAEMON_REQUEST_PROTECTOR_CMD;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     buffer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt; &gt;     opal_dss.pack(buffer, &amp;command, 1, ORTE_DAEMON_CMD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DAEMON, 0);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON, buffer,
</span><br>
<span class="quotelev1">&gt; ORTE_DAEMON_REQUEST_PROTECTOR_CMD, 0);
</span><br>
<span class="quotelev2">&gt; &gt;     opal_dss.unpack(buffer, &amp;mca_vprotocol_receiver.protector.jobid, &amp;n,
</span><br>
<span class="quotelev1">&gt; OPAL_UINT32);
</span><br>
<span class="quotelev2">&gt; &gt;     opal_dss.unpack(buffer, &amp;mca_vprotocol_receiver.protector.vpid, &amp;n,
</span><br>
<span class="quotelev1">&gt; OPAL_UINT32);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     orte_process_info.protector.jobid =
</span><br>
<span class="quotelev1">&gt; mca_vprotocol_receiver.protector.jobid;
</span><br>
<span class="quotelev2">&gt; &gt;     orte_process_info.protector.vpid  =
</span><br>
<span class="quotelev1">&gt; mca_vprotocol_receiver.protector.vpid;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code that i've added at the orted_comm.c is (in bold the send command
</span><br>
<span class="quotelev1">&gt; that fails):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; case ORTE_DAEMON_REQUEST_PROTECTOR_CMD:
</span><br>
<span class="quotelev2">&gt; &gt;         if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev2">&gt; &gt;             opal_output(0, &quot;%s orted_recv: received request protector
</span><br>
<span class="quotelev1">&gt; from local proc %s&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(sender));
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         /* Define the protector */
</span><br>
<span class="quotelev2">&gt; &gt;         protector = (uint32_t)ORTE_PROC_MY_NAME-&gt;vpid + 1;
</span><br>
<span class="quotelev2">&gt; &gt;         if (protector &gt;= (uint32_t)orte_process_info.num_procs) {
</span><br>
<span class="quotelev2">&gt; &gt;             protector = 0;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* Pack the protector data */
</span><br>
<span class="quotelev2">&gt; &gt;         answer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         if (ORTE_SUCCESS != (ret = opal_dss.pack(answer,
</span><br>
<span class="quotelev1">&gt; &amp;ORTE_PROC_MY_NAME-&gt;jobid, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_RELEASE(answer);
</span><br>
<span class="quotelev2">&gt; &gt;             goto CLEANUP;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         if (ORTE_SUCCESS != (ret = opal_dss.pack(answer, &amp;protector, 1,
</span><br>
<span class="quotelev1">&gt; OPAL_UINT32))) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_RELEASE(answer);
</span><br>
<span class="quotelev2">&gt; &gt;             goto CLEANUP;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev2">&gt; &gt;             opal_output(0, &quot;EL PROTECTOR ASIGNADO para %s ES: %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                         ORTE_NAME_PRINT(sender), protector);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* Send the protector data */
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 &gt; orte_rml.send_buffer(sender, answer,
</span><br>
<span class="quotelev1">&gt; ORTE_DAEMON_REQUEST_PROTECTOR_CMD, 0)) {
</span><br>
<span class="quotelev2">&gt; &gt;             ORTE_ERROR_LOG(ORTE_ERR_COMM_FAILURE);
</span><br>
<span class="quotelev2">&gt; &gt;             ret = ORTE_ERR_COMM_FAILURE;
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_RELEASE(answer);
</span><br>
<span class="quotelev2">&gt; &gt;             goto CLEANUP;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_RELEASE(answer);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I assume by testing that the error is in the bolded section, maybe
</span><br>
<span class="quotelev1">&gt; because i'am missing some sentence when i try to communicate, or maybe this
</span><br>
<span class="quotelev1">&gt; communication cannot be done. Any help will be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;I disapprove of what you say, but I will defend to the death your right to
</span><br>
<span class="quotelev1">&gt; say it&quot;
</span><br>
<span class="quotelev1">&gt;  -- Evelyn Beatrice Hall
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9040.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Previous message:</strong> <a href="9038.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>In reply to:</strong> <a href="9033.php">George Bosilca: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
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
