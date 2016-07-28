<?
$subject_val = "[OMPI devel] Communication Failure with orted_comm.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 08:15:50 2011" -->
<!-- isoreceived="20110308131550" -->
<!-- sent="Tue, 8 Mar 2011 14:15:44 +0100" -->
<!-- isosent="20110308131544" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Communication Failure with orted_comm.c" -->
<!-- id="AANLkTi=uXofikaWmmqPdG+sPjFVbryMSAe1AppFwyLn5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Communication Failure with orted_comm.c<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 08:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9028.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Previous message:</strong> <a href="9026.php">Jeff Squyres: "[OMPI devel] 1.5.2rc4 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9028.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Reply:</strong> <a href="9028.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Reply:</strong> <a href="9033.php">George Bosilca: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll.
<br>
<p>I've got a problem in a communication between
<br>
the*v_protocol_receiver_component.c
<br>
* and the *orted_comm.c. *
<br>
<p>In the *mca_vprotocol_receiver_component_init*  i've added a request that is
<br>
received correctly by the *orte_daemon_process_commands *but when i try to
<br>
reply to the sender i get the next error:
<br>
<p>[clus1:15593] [ 0] /lib64/libpthread.so.0 [0x2aaaabb03d40]
<br>
[clus1:15593] [ 1]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
<br>
[0x2aaaaad760db]
<br>
[clus1:15593] [ 2]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
<br>
[0x2aaaaad75aa4]
<br>
[clus1:15593] [ 3]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/openmpi/mca_errmgr_orted.so
<br>
[0x2aaaae2d2fdd]
<br>
[clus1:15593] [ 4]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_odls_base_notify_iof_complete+0x1da)
<br>
[0x2aaaaad42cb0]
<br>
[clus1:15593] [ 5]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon_process_commands+0x1068)
<br>
[0x2aaaaad19ca6]
<br>
[clus1:15593] [ 6]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x81b)
<br>
[0x2aaaaad18a55]
<br>
[clus1:15593] [ 7]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
<br>
[0x2aaaaad9710e]
<br>
[clus1:15593] [ 8]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0
<br>
[0x2aaaaad974bb]
<br>
[clus1:15593] [ 9]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(opal_event_loop+0x1a)
<br>
[0x2aaaaad972ad]
<br>
[clus1:15593] [10]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(opal_event_dispatch+0xe)
<br>
[0x2aaaaad97166]
<br>
[clus1:15593] [11]
<br>
/home/hmeyer/desarrollo/radic-ompi/binarios/lib/libopen-rte.so.0(orte_daemon+0x2322)
<br>
[0x2aaaaad17556]
<br>
[clus1:15593] [12] /home/hmeyer/desarrollo/radic-ompi/binarios/bin/orted
<br>
[0x4008a3]
<br>
[clus1:15593] [13] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2aaaabd2d8a4]
<br>
[clus1:15593] [14] /home/hmeyer/desarrollo/radic-ompi/binarios/bin/orted
<br>
[0x400799]
<br>
[clus1:15593] *** End of error message ***
<br>
<p><p>The code that i've added at the *v_protocol_receiver_component.c *is (in
<br>
bold the recv command that fails):
<br>
<p>int mca_vprotocol_receiver_request_protector(void) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_daemon_cmd_flag_t command;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_buffer_t *buffer = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int n = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;command = ORTE_DAEMON_REQUEST_PROTECTOR_CMD;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;buffer = OBJ_NEW(opal_buffer_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_dss.pack(buffer, &amp;command, 1, ORTE_DAEMON_CMD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;orte_rml.send_buffer(ORTE_PROC_MY_DAEMON, buffer, ORTE_RML_TAG_DAEMON,
<br>
0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;*orte_rml.recv_buffer(ORTE_PROC_MY_DAEMON, buffer,
<br>
ORTE_DAEMON_REQUEST_PROTECTOR_CMD, 0);*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_dss.unpack(buffer, &amp;mca_vprotocol_receiver.protector.jobid, &amp;n,
<br>
OPAL_UINT32);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_dss.unpack(buffer, &amp;mca_vprotocol_receiver.protector.vpid, &amp;n,
<br>
OPAL_UINT32);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;orte_process_info.protector.jobid =
<br>
mca_vprotocol_receiver.protector.jobid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_process_info.protector.vpid  =
<br>
mca_vprotocol_receiver.protector.vpid;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(buffer);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
<p><p>The code that i've added at the *orted_comm.c *is (in bold the send command
<br>
that fails):
<br>
<p>case ORTE_DAEMON_REQUEST_PROTECTOR_CMD:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (orte_debug_daemons_flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;%s orted_recv: received request protector from
<br>
local proc %s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
<br>
ORTE_NAME_PRINT(sender));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Define the protector */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protector = (uint32_t)ORTE_PROC_MY_NAME-&gt;vpid + 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (protector &gt;= (uint32_t)orte_process_info.num_procs) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protector = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Pack the protector data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;answer = OBJ_NEW(opal_buffer_t);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = opal_dss.pack(answer,
<br>
&amp;ORTE_PROC_MY_NAME-&gt;jobid, 1, OPAL_UINT32))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(answer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = opal_dss.pack(answer, &amp;protector, 1,
<br>
OPAL_UINT32))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(answer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (orte_debug_daemons_flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;EL PROTECTOR ASIGNADO para %s ES: %d\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(sender), protector);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Send the protector data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*if (0 &gt; orte_rml.send_buffer(sender, answer,
<br>
ORTE_DAEMON_REQUEST_PROTECTOR_CMD, 0)) {*
<br>
*            ORTE_ERROR_LOG(ORTE_ERR_COMM_FAILURE);*
<br>
*            ret = ORTE_ERR_COMM_FAILURE;*
<br>
*            OBJ_RELEASE(answer);*
<br>
*            goto CLEANUP;*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(answer);
<br>
<p><p>I assume by testing that the error is in the bolded section, maybe because
<br>
i'am missing some sentence when i try to communicate, or maybe this
<br>
communication cannot be done. Any help will be appreciated.
<br>
<p>Thanks a lot.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9028.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Previous message:</strong> <a href="9026.php">Jeff Squyres: "[OMPI devel] 1.5.2rc4 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9028.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Reply:</strong> <a href="9028.php">Ralph Castain: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
<li><strong>Reply:</strong> <a href="9033.php">George Bosilca: "Re: [OMPI devel] Communication Failure with orted_comm.c"</a>
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
