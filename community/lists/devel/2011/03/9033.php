<?
$subject_val = "Re: [OMPI devel] Communication Failure with orted_comm.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 11:17:28 2011" -->
<!-- isoreceived="20110308161728" -->
<!-- sent="Tue, 8 Mar 2011 11:17:23 -0500" -->
<!-- isosent="20110308161723" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Communication Failure with orted_comm.c" -->
<!-- id="39F468D8-A2C1-4AB5-A713-547844D407FA_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=uXofikaWmmqPdG+sPjFVbryMSAe1AppFwyLn5_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 11:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9034.php">Damien Guinier: "[OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Previous message:</strong> <a href="9032.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>In reply to:</strong> <a href="9027.php">Hugo Meyer: "[OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9039.php">Hugo Meyer: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Reply:</strong> <a href="9039.php">Hugo Meyer: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The stack trace indicate that your orted segfaulted in the orte_odls_base_notify_iof_complete which means it received a message that was interpreted as a ORTE_DAEMON_IOF_COMPLETE (21). Nothing more to get out from your output unfortunately.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 8, 2011, at 08:15 , Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got a problem in a communication between the v_protocol_receiver_component.c and the orted_comm.c. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the mca_vprotocol_receiver_component_init  i've added a request that is received correctly by the orte_daemon_process_commands but when i try to reply to the sender i get the next error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 0] /lib64/libpthread.so.0 [0x2aaaabb03d40]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 1] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0 [0x2aaaaad760db]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 2] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0 [0x2aaaaad75aa4]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 3] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/openmpi/mca_errmgr_orted.so [0x2aaaae2d2fdd]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 4] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_odls_base_notify_iof_complete+0x1da) [0x2aaaaad42cb0]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 5] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon_process_commands+0x1068) [0x2aaaaad19ca6]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 6] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x81b) [0x2aaaaad18a55]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 7] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0 [0x2aaaaad9710e]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 8] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0 [0x2aaaaad974bb]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [ 9] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(opal_event_loop+0x1a) [0x2aaaaad972ad]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [10] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(opal_event_dispatch+0xe) [0x2aaaaad97166]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [11] /home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon+0x2322) [0x2aaaaad17556]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [12] /home/hmeyer/desarrollo/radic-ompi/binarios/bin/orted [0x4008a3]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [13] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2aaaabd2d8a4]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] [14] /home/hmeyer/desarrollo/radic-ompi/binarios/bin/orted [0x400799]
</span><br>
<span class="quotelev1">&gt; [clus1:15593] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code that i've added at the v_protocol_receiver_component.c is (in bold the recv command that fails):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int mca_vprotocol_receiver_request_protector(void) {
</span><br>
<span class="quotelev1">&gt;     orte_daemon_cmd_flag_t command;
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t *buffer = NULL;
</span><br>
<span class="quotelev1">&gt;     int n = 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     command = ORTE_DAEMON_REQUEST_PROTECTOR_CMD;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     buffer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt;     opal_dss.pack(buffer, &amp;command, 1, ORTE_DAEMON_CMD);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, buffer, ORTE_RML_TAG_DAEMON, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON, buffer, ORTE_DAEMON_REQUEST_PROTECTOR_CMD, 0);
</span><br>
<span class="quotelev1">&gt;     opal_dss.unpack(buffer, &amp;mca_vprotocol_receiver.protector.jobid, &amp;n, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt;     opal_dss.unpack(buffer, &amp;mca_vprotocol_receiver.protector.vpid, &amp;n, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     orte_process_info.protector.jobid = mca_vprotocol_receiver.protector.jobid;
</span><br>
<span class="quotelev1">&gt;     orte_process_info.protector.vpid  = mca_vprotocol_receiver.protector.vpid;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code that i've added at the orted_comm.c is (in bold the send command that fails):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; case ORTE_DAEMON_REQUEST_PROTECTOR_CMD:
</span><br>
<span class="quotelev1">&gt;         if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;%s orted_recv: received request protector from local proc %s&quot;,
</span><br>
<span class="quotelev1">&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), ORTE_NAME_PRINT(sender));
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         /* Define the protector */
</span><br>
<span class="quotelev1">&gt;         protector = (uint32_t)ORTE_PROC_MY_NAME-&gt;vpid + 1;
</span><br>
<span class="quotelev1">&gt;         if (protector &gt;= (uint32_t)orte_process_info.num_procs) {
</span><br>
<span class="quotelev1">&gt;             protector = 0;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* Pack the protector data */
</span><br>
<span class="quotelev1">&gt;         answer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (ORTE_SUCCESS != (ret = opal_dss.pack(answer, &amp;ORTE_PROC_MY_NAME-&gt;jobid, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;             OBJ_RELEASE(answer);
</span><br>
<span class="quotelev1">&gt;             goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (ORTE_SUCCESS != (ret = opal_dss.pack(answer, &amp;protector, 1, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;             OBJ_RELEASE(answer);
</span><br>
<span class="quotelev1">&gt;             goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (orte_debug_daemons_flag) {
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;EL PROTECTOR ASIGNADO para %s ES: %d\n&quot;,
</span><br>
<span class="quotelev1">&gt;                         ORTE_NAME_PRINT(sender), protector);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* Send the protector data */
</span><br>
<span class="quotelev1">&gt;         if (0 &gt; orte_rml.send_buffer(sender, answer, ORTE_DAEMON_REQUEST_PROTECTOR_CMD, 0)) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ORTE_ERR_COMM_FAILURE);
</span><br>
<span class="quotelev1">&gt;             ret = ORTE_ERR_COMM_FAILURE;
</span><br>
<span class="quotelev1">&gt;             OBJ_RELEASE(answer);
</span><br>
<span class="quotelev1">&gt;             goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(answer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume by testing that the error is in the bolded section, maybe because i'am missing some sentence when i try to communicate, or maybe this communication cannot be done. Any help will be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
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
<p>&quot;I disapprove of what you say, but I will defend to the death your right to say it&quot;
<br>
&nbsp;&nbsp;-- Evelyn Beatrice Hall
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9034.php">Damien Guinier: "[OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Previous message:</strong> <a href="9032.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>In reply to:</strong> <a href="9027.php">Hugo Meyer: "[OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9039.php">Hugo Meyer: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Reply:</strong> <a href="9039.php">Hugo Meyer: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
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
