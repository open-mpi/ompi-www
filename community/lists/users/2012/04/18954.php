<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 11:55:14 2012" -->
<!-- isoreceived="20120405155514" -->
<!-- sent="Thu, 5 Apr 2012 17:55:07 +0200" -->
<!-- isosent="20120405155507" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="zarafa.4f7dc05b.31e1.668ae279665688f2_at_mail.fft" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6C64D314-12A1-4B80-BB68-2F4599C1E860_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight intregration leads to bad allocation<br>
<strong>From:</strong> Eloi Gaudry (<em>eloi.gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 11:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18955.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>In reply to:</strong> <a href="18926.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; Here are the allocation info retrieved from `qstat -g t` for the related job:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me the output of `qstat -g t` shows MASTER and SLAVE entries but no variables. Is there any wrapper defined for `qstat` to reformat the output (or a ~/.sge_qstat defined)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [eg: ] sorry, i forgot about sge_qstat being defined. As I don't have any slot available right now, I cannot relaunch the job to get the output updated.
</span><br>

<br>
Reuti, here is the output you asked two days ago.
<br>

<br>
It was produced with another &quot;bad&quot; run for which 3 processes are running on nodes charlie and carl... but we should have only 2 processes on carl and 4 on charlie...
<br>

<br>
&#194;&#160;
<br>
Output from qstat -g t:
<br>

<br>
------------------------------------
<br>

<br>
queuename&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; qtype resv/used/tot. load_avg arch&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; states
<br>
---------------------------------------------------------------------------------
<br>
smp4.q_at_carl.fft&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; BIP&#194;&#160;&#194;&#160; 0/2/4&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 1.14&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; lx-amd64
<br>
&#194;&#160; hc:mem_available=1.715G
<br>
&#194;&#160;&#194;&#160; 1391 0.57643 semi_green jj&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; r&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 04/05/2012 15:41:04 SLAVE
<br>
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; SLAVE
<br>
---------------------------------------------------------------------------------
<br>
smp8.q_at_charlie.fft&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; BIP&#194;&#160;&#194;&#160; 0/4/8&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 1.73&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; lx-amd64
<br>
&#194;&#160; hc:mem_available=4.018G
<br>
&#194;&#160;&#194;&#160; 1391 0.57643 semi_green jj&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; r&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 04/05/2012 15:41:04 MASTER
<br>
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; SLAVE
<br>
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; SLAVE
<br>
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; SLAVE
<br>
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; SLAVE
<br>

<br>
&#194;&#160;
<br>
Debug output from orterun:
<br>

<br>
------------------------------------
<br>
[charlie:08194] ras:gridengine: JOB_ID: 1391
<br>
[charlie:08194] ras:gridengine: PE_HOSTFILE: /opt/sge/default/spool/charlie/active_jobs/1391.1/pe_hostfile
<br>
[charlie:08194] ras:gridengine: charlie.fft: PE_HOSTFILE shows slots=4
<br>
[charlie:08194] ras:gridengine: carl.fft: PE_HOSTFILE shows slots=2
<br>

<br>
======================&#194;&#160;&#194;&#160; ALLOCATED NODES&#194;&#160;&#194;&#160; ======================
<br>

<br>
&#194;&#160;Data for node: Name: charlie&#194;&#160;&#194;&#160; Launch id: -1 Arch: ffc91200&#194;&#160; State: 2
<br>
&#194;&#160; Num boards: 1 Num sockets/board: 2&#194;&#160; Num cores/socket: 4
<br>
&#194;&#160; Daemon: [[57575,0],0] Daemon launched: True
<br>
&#194;&#160; Num slots: 4&#194;&#160; Slots in use: 0
<br>
&#194;&#160; Num slots allocated: 4&#194;&#160; Max slots: 0
<br>
&#194;&#160; Username on node: NULL
<br>
&#194;&#160; Num procs: 0&#194;&#160; Next node_rank: 0
<br>
&#194;&#160;Data for node: Name: carl.fft&#194;&#160;&#194;&#160;&#194;&#160; Launch id: -1 Arch: 0 State: 2
<br>
&#194;&#160; Num boards: 1 Num sockets/board: 2&#194;&#160; Num cores/socket: 4
<br>
&#194;&#160; Daemon: Not defined Daemon launched: False
<br>
&#194;&#160; Num slots: 2&#194;&#160; Slots in use: 0
<br>
&#194;&#160; Num slots allocated: 2&#194;&#160; Max slots: 0
<br>
&#194;&#160; Username on node: NULL
<br>
&#194;&#160; Num procs: 0&#194;&#160; Next node_rank: 0
<br>

<br>
=================================================================
<br>

<br>
&#194;&#160;Map generated by mapping policy: 0200
<br>
&#194;&#160; Npernode: 0 Oversubscribe allowed: TRUE CPU Lists: FALSE
<br>
&#194;&#160; Num new daemons: 1&#194;&#160; New daemon starting vpid 1
<br>
&#194;&#160; Num nodes: 2
<br>

<br>
&#194;&#160;Data for node: Name: charlie&#194;&#160;&#194;&#160; Launch id: -1 Arch: ffc91200&#194;&#160; State: 2
<br>
&#194;&#160; Num boards: 1 Num sockets/board: 2&#194;&#160; Num cores/socket: 4
<br>
&#194;&#160; Daemon: [[57575,0],0] Daemon launched: True
<br>
&#194;&#160; Num slots: 4&#194;&#160; Slots in use: 3
<br>
&#194;&#160; Num slots allocated: 4&#194;&#160; Max slots: 0
<br>
&#194;&#160; Username on node: NULL
<br>
&#194;&#160; Num procs: 3&#194;&#160; Next node_rank: 3
<br>
&#194;&#160; Data for proc: [[57575,1],0]
<br>
&#194;&#160;&#194;&#160;&#194;&#160; Pid: 0&#194;&#160; Local rank: 0 Node rank: 0
<br>
&#194;&#160;&#194;&#160;&#194;&#160; State: 0&#194;&#160; App_context: 0&#194;&#160; Slot list: NULL
<br>
&#194;&#160; Data for proc: [[57575,1],2]
<br>
&#194;&#160;&#194;&#160;&#194;&#160; Pid: 0&#194;&#160; Local rank: 1 Node rank: 1
<br>
&#194;&#160;&#194;&#160;&#194;&#160; State: 0&#194;&#160; App_context: 0&#194;&#160; Slot list: NULL
<br>
&#194;&#160; Data for proc: [[57575,1],4]
<br>
&#194;&#160;&#194;&#160;&#194;&#160; Pid: 0&#194;&#160; Local rank: 2 Node rank: 2
<br>
&#194;&#160;&#194;&#160;&#194;&#160; State: 0&#194;&#160; App_context: 0&#194;&#160; Slot list: NULL
<br>

<br>
&#194;&#160;Data for node: Name: carl.fft&#194;&#160;&#194;&#160;&#194;&#160; Launch id: -1 Arch: 0 State: 2
<br>
&#194;&#160; Num boards: 1 Num sockets/board: 2&#194;&#160; Num cores/socket: 4
<br>
&#194;&#160; Daemon: [[57575,0],1] Daemon launched: False
<br>
&#194;&#160; Num slots: 2&#194;&#160; Slots in use: 3
<br>
&#194;&#160; Num slots allocated: 2&#194;&#160; Max slots: 0
<br>
&#194;&#160; Username on node: NULL
<br>
&#194;&#160; Num procs: 3&#194;&#160; Next node_rank: 3
<br>
&#194;&#160; Data for proc: [[57575,1],1]
<br>
&#194;&#160;&#194;&#160;&#194;&#160; Pid: 0&#194;&#160; Local rank: 0 Node rank: 0
<br>
&#194;&#160;&#194;&#160;&#194;&#160; State: 0&#194;&#160; App_context: 0&#194;&#160; Slot list: NULL
<br>
&#194;&#160; Data for proc: [[57575,1],3]
<br>
&#194;&#160;&#194;&#160;&#194;&#160; Pid: 0&#194;&#160; Local rank: 1 Node rank: 1
<br>
&#194;&#160;&#194;&#160;&#194;&#160; State: 0&#194;&#160; App_context: 0&#194;&#160; Slot list: NULL
<br>
&#194;&#160; Data for proc: [[57575,1],5]
<br>
&#194;&#160;&#194;&#160;&#194;&#160; Pid: 0&#194;&#160; Local rank: 2 Node rank: 2
<br>
&#194;&#160;&#194;&#160;&#194;&#160; State: 0&#194;&#160; App_context: 0&#194;&#160; Slot list: NULL
<br>

<br>
&#194;&#160;
<br>
&#194;&#160;
<br>
Regards,
<br>

<br>
Eloi
<br>

<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18955.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>In reply to:</strong> <a href="18926.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
