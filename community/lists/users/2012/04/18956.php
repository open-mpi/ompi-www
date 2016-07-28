<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 12:41:34 2012" -->
<!-- isoreceived="20120405164134" -->
<!-- sent="Thu, 5 Apr 2012 18:41:18 +0200" -->
<!-- isosent="20120405164118" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="F4345CC9-69FE-4A30-9A63-EA278A23EFC2_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="zarafa.4f7dc05b.31e1.668ae279665688f2_at_mail.fft" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 12:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18955.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 05.04.2012 um 17:55 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here are the allocation info retrieved from `qstat -g t` for the related job:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For me the output of `qstat -g t` shows MASTER and SLAVE entries but no variables. Is there any wrapper defined for `qstat` to reformat the output (or a ~/.sge_qstat defined)?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [eg: ] sorry, i forgot about sge_qstat being defined. As I don't have any slot available right now, I cannot relaunch the job to get the output updated.
</span><br>
<span class="quotelev1">&gt; Reuti, here is the output you asked two days ago.
</span><br>
<span class="quotelev1">&gt; It was produced with another &quot;bad&quot; run for which 3 processes are running on nodes charlie and carl... but we should have only 2 processes on carl and 4 on charlie...
</span><br>
<p>This is indeed strange, as it first detects the correct allocation. And it conforms to the one granted.
<br>
<p>- You used a plain `mpiexec` without and number of processes or machinesfile?
<br>
- Can you please post while it's running the relevant lines from:
<br>
<p>ps -e f --cols=500
<br>
<p>(f w/o -) from both machines.
<br>
<p>It's allocated between the nodes more like in a round-robin fashion.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Output from qstat -g t:
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; queuename                      qtype resv/used/tot. load_avg arch          states
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; smp4.q_at_carl.fft                BIP   0/2/4          1.14     lx-amd64
</span><br>
<span class="quotelev1">&gt;   hc:mem_available=1.715G
</span><br>
<span class="quotelev1">&gt;    1391 0.57643 semi_green jj           r     04/05/2012 15:41:04 SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; smp8.q_at_charlie.fft             BIP   0/4/8          1.73     lx-amd64
</span><br>
<span class="quotelev1">&gt;   hc:mem_available=4.018G
</span><br>
<span class="quotelev1">&gt;    1391 0.57643 semi_green jj           r     04/05/2012 15:41:04 MASTER
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Debug output from orterun:
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; [charlie:08194] ras:gridengine: JOB_ID: 1391
</span><br>
<span class="quotelev1">&gt; [charlie:08194] ras:gridengine: PE_HOSTFILE: /opt/sge/default/spool/charlie/active_jobs/1391.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [charlie:08194] ras:gridengine: charlie.fft: PE_HOSTFILE shows slots=4
</span><br>
<span class="quotelev1">&gt; [charlie:08194] ras:gridengine: carl.fft: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: [[57575,0],0] Daemon launched: True
</span><br>
<span class="quotelev1">&gt;   Num slots: 4  Slots in use: 0
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 4  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev1">&gt;   Num slots: 2  Slots in use: 0
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 2  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Map generated by mapping policy: 0200
</span><br>
<span class="quotelev1">&gt;   Npernode: 0 Oversubscribe allowed: TRUE CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt;   Num new daemons: 1  New daemon starting vpid 1
</span><br>
<span class="quotelev1">&gt;   Num nodes: 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: [[57575,0],0] Daemon launched: True
</span><br>
<span class="quotelev1">&gt;   Num slots: 4  Slots in use: 3
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 4  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 3  Next node_rank: 3
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57575,1],0]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 0 Node rank: 0
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57575,1],2]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 1 Node rank: 1
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57575,1],4]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 2 Node rank: 2
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: [[57575,0],1] Daemon launched: False
</span><br>
<span class="quotelev1">&gt;   Num slots: 2  Slots in use: 3
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 2  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 3  Next node_rank: 3
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57575,1],1]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 0 Node rank: 0
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57575,1],3]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 1 Node rank: 1
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57575,1],5]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 2 Node rank: 2
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18955.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
