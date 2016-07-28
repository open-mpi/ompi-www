<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 10:59:08 2012" -->
<!-- isoreceived="20120403145908" -->
<!-- sent="Tue, 3 Apr 2012 16:59:01 +0200" -->
<!-- isosent="20120403145901" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="zarafa.4f7b1035.3189.2445988953fafc83_at_mail.fft" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="57D6969E-3F59-438F-9370-E14F4C456690_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-04-03 10:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18924.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18922.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18922.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18924.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18924.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>I configured OpenMPI to support SGE tight integration and used the defined below PE for submitting the job:
<br>
<p>[16:36][eg_at_moe:~]$ qconf -sp fill_up
<br>
pe_name            fill_up
<br>
slots              80
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $fill_up
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary FALSE
<br>
<p>Here are the allocation info retrieved from `qstat -g t` for the related job:
<br>
---------------------------------------------------------------------------------
<br>
smp4.q_at_barney.fft              BIP   0/1/4          0.70     lx-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hc:num_proc=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hl:mem_free=31.215G
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hl:mem_used=280.996M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hc:mem_available=1.715G
<br>
&nbsp;&nbsp;&nbsp;1296 0.54786 semi_direc jj           r     04/03/2012 16:43:49     1
<br>
---------------------------------------------------------------------------------
<br>
smp4.q_at_carl.fft                BIP   0/1/4          0.69     lx-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hc:num_proc=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hl:mem_free=30.764G
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hl:mem_used=742.805M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hc:mem_available=1.715G
<br>
&nbsp;&nbsp;&nbsp;1296 0.54786 semi_direc jj           r     04/03/2012 16:43:49     1
<br>
---------------------------------------------------------------------------------
<br>
smp8.q_at_charlie.fft             BIP   0/2/8          0.57     lx-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hc:num_proc=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hl:mem_free=62.234G
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hl:mem_used=836.797M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hc:mem_available=4.018G
<br>
&nbsp;&nbsp;&nbsp;1296 0.54786 semi_direc jj           r     04/03/2012 16:43:49     2
<br>
---------------------------------------------------------------------------------
<br>
<p>Sge reports whatr pls_gridengine_report does, i.e. what was reserved.
<br>
But here is the ouput of the current job (after started by openmpi):
<br>
[charlie:05294] ras:gridengine: JOB_ID: 1296
<br>
[charlie:05294] ras:gridengine: PE_HOSTFILE: /opt/sge/default/spool/charlie/active_jobs/1296.1/pe_hostfile
<br>
[charlie:05294] ras:gridengine: charlie.fft: PE_HOSTFILE shows slots=2
<br>
[charlie:05294] ras:gridengine: barney.fft: PE_HOSTFILE shows slots=1
<br>
[charlie:05294] ras:gridengine: carl.fft: PE_HOSTFILE shows slots=1
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
<br>
&nbsp;&nbsp;Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
<br>
&nbsp;&nbsp;Daemon: [[54347,0],0] Daemon launched: True
<br>
&nbsp;&nbsp;Num slots: 2  Slots in use: 0
<br>
&nbsp;&nbsp;Num slots allocated: 2  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 0  Next node_rank: 0
<br>
&nbsp;Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
<br>
&nbsp;&nbsp;Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
<br>
&nbsp;&nbsp;Daemon: Not defined Daemon launched: False
<br>
&nbsp;&nbsp;Num slots: 1  Slots in use: 0
<br>
&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 0  Next node_rank: 0
<br>
&nbsp;Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
<br>
&nbsp;&nbsp;Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
<br>
&nbsp;&nbsp;Daemon: Not defined Daemon launched: False
<br>
&nbsp;&nbsp;Num slots: 1  Slots in use: 0
<br>
&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 0  Next node_rank: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;Map generated by mapping policy: 0200
<br>
&nbsp;&nbsp;Npernode: 0 Oversubscribe allowed: TRUE CPU Lists: FALSE
<br>
&nbsp;&nbsp;Num new daemons: 2  New daemon starting vpid 1
<br>
&nbsp;&nbsp;Num nodes: 3
<br>
<p>&nbsp;Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
<br>
&nbsp;&nbsp;Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
<br>
&nbsp;&nbsp;Daemon: [[54347,0],0] Daemon launched: True
<br>
&nbsp;&nbsp;Num slots: 2  Slots in use: 2
<br>
&nbsp;&nbsp;Num slots allocated: 2  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 2  Next node_rank: 2
<br>
&nbsp;&nbsp;Data for proc: [[54347,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0 Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;State: 0  App_context: 0  Slot list: NULL
<br>
&nbsp;&nbsp;Data for proc: [[54347,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 1 Node rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;State: 0  App_context: 0  Slot list: NULL
<br>
Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
<br>
&nbsp;&nbsp;Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
<br>
&nbsp;&nbsp;Daemon: [[54347,0],1] Daemon launched: False
<br>
&nbsp;&nbsp;Num slots: 1  Slots in use: 1
<br>
&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 1  Next node_rank: 1
<br>
&nbsp;&nbsp;Data for proc: [[54347,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0 Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;State: 0  App_context: 0  Slot list: NULL
<br>
<p>&nbsp;Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
<br>
&nbsp;&nbsp;Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
<br>
&nbsp;&nbsp;Daemon: [[54347,0],2] Daemon launched: False
<br>
&nbsp;&nbsp;Num slots: 1  Slots in use: 1
<br>
&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 1  Next node_rank: 1
<br>
&nbsp;&nbsp;Data for proc: [[54347,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0 Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;State: 0  App_context: 0  Slot list: NULL
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
<br>
Sent: mardi 3 avril 2012 16:24
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] sge tight intregration leads to bad allocation
<br>
<p>Hi,
<br>
<p>Am 03.04.2012 um 16:12 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; Thanks for your feedback.
</span><br>
<span class="quotelev1">&gt; No, this is the other way around, the &quot;reserved&quot; slots on all nodes are ok but the &quot;used&quot; slots are different.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Basically, I'm using SGE to schedule and book resources for a distributed job. When the job is finally launched, it uses a different allocation than the one that was reported by pls_gridengine_info.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; pls_grid_engine_info report states that 3 nodes were booked: barney (1 slot), carl (1 slot) and charlie (2 slots). This booking was done by sge depending on the memory requirements of the job (among others).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When orterun starts the jobs (i.e. when Sge finally start the scheduled job), it uses 3 nodes but the first one (barney: 2 slots instead of 1) is oversubscribed and the last one (carl: 1 slot instead of 2) is underused.
</span><br>
<p>you configured Open MPI to support SGE tight integration and used a PE for submitting the job? Can you please post the defintion of the PE.
<br>
<p>What was the allocation you saw in SGE's `qstat -g t ` for the job?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; If you need further information, please let me know.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: mardi 3 avril 2012 15:58
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] sge tight intregration leads to bad allocation
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm afraid there isn't enough info here to help. Are you saying you only allocated one slot/node, so the two slots on charlie is in error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2012, at 6:23 AM, &quot;Eloi Gaudry&quot; &lt;eloi.gaudry_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I've observed a strange behavior during rank allocation on a distributed run schedule and submitted using Sge (Son of Grid Egine 8.0.0d) and OpenMPI-1.4.4.
</span><br>
<span class="quotelev1">&gt; Briefly, there is a one-slot difference between allocated rank/slot for Sge and OpenMPI. The issue here is that one node becomes oversubscribed at runtime.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here is the output of the allocation done for gridengine:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Data for node: Name: barney                 Launch id: -1      Arch: ffc91200   State: 2
</span><br>
<span class="quotelev1">&gt;                Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev1">&gt;                Daemon: [[22904,0],0]  Daemon launched: True
</span><br>
<span class="quotelev1">&gt;                Num slots: 1      Slots in use: 0
</span><br>
<span class="quotelev1">&gt;                Num slots allocated: 1   Max slots: 0
</span><br>
<span class="quotelev1">&gt;                Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                Num procs: 0     Next node_rank: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: carl.fft                  Launch id: -1      Arch: 0  State: 2
</span><br>
<span class="quotelev1">&gt;                Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev1">&gt;                Daemon: Not defined   Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                Num slots: 1      Slots in use: 0
</span><br>
<span class="quotelev1">&gt;                Num slots allocated: 1   Max slots: 0
</span><br>
<span class="quotelev1">&gt;                Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                Num procs: 0     Next node_rank: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: charlie.fft                            Launch id: -1      Arch: 0  State: 2
</span><br>
<span class="quotelev1">&gt;                Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev1">&gt;                Daemon: Not defined   Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                Num slots: 2      Slots in use: 0
</span><br>
<span class="quotelev1">&gt;                Num slots allocated: 2   Max slots: 0
</span><br>
<span class="quotelev1">&gt;                Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                Num procs: 0     Next node_rank: 0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; And here is the allocation finally used:
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Map generated by mapping policy: 0200
</span><br>
<span class="quotelev1">&gt;                Npernode: 0      Oversubscribe allowed: TRUE   CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt;                Num new daemons: 2  New daemon starting vpid 1
</span><br>
<span class="quotelev1">&gt;                Num nodes: 3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Data for node: Name: barney                 Launch id: -1      Arch: ffc91200   State: 2
</span><br>
<span class="quotelev1">&gt;                Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev1">&gt;                Daemon: [[22904,0],0]  Daemon launched: True
</span><br>
<span class="quotelev1">&gt;                Num slots: 1      Slots in use: 2
</span><br>
<span class="quotelev1">&gt;                Num slots allocated: 1   Max slots: 0
</span><br>
<span class="quotelev1">&gt;                Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                Num procs: 2     Next node_rank: 2
</span><br>
<span class="quotelev1">&gt;                Data for proc: [[22904,1],0]
</span><br>
<span class="quotelev1">&gt;                               Pid: 0     Local rank: 0       Node rank: 0
</span><br>
<span class="quotelev1">&gt;                               State: 0                App_context: 0                Slot list: NULL
</span><br>
<span class="quotelev1">&gt;                Data for proc: [[22904,1],3]
</span><br>
<span class="quotelev1">&gt;                               Pid: 0     Local rank: 1       Node rank: 1
</span><br>
<span class="quotelev1">&gt;                               State: 0                App_context: 0                Slot list: NULL
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Data for node: Name: carl.fft                  Launch id: -1      Arch: 0  State: 2
</span><br>
<span class="quotelev1">&gt;                Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev1">&gt;                Daemon: [[22904,0],1]  Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                Num slots: 1      Slots in use: 1
</span><br>
<span class="quotelev1">&gt;                Num slots allocated: 1   Max slots: 0
</span><br>
<span class="quotelev1">&gt;                Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                Num procs: 1     Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                Data for proc: [[22904,1],1]
</span><br>
<span class="quotelev1">&gt;                               Pid: 0     Local rank: 0       Node rank: 0
</span><br>
<span class="quotelev1">&gt;                               State: 0                App_context: 0                Slot list: NULL
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Data for node: Name: charlie.fft                            Launch id: -1      Arch: 0  State: 2
</span><br>
<span class="quotelev1">&gt;                Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev1">&gt;                Daemon: [[22904,0],2]  Daemon launched: False
</span><br>
<span class="quotelev1">&gt;                Num slots: 2      Slots in use: 1
</span><br>
<span class="quotelev1">&gt;                Num slots allocated: 2   Max slots: 0
</span><br>
<span class="quotelev1">&gt;                Username on node: NULL
</span><br>
<span class="quotelev1">&gt;                Num procs: 1     Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;                Data for proc: [[22904,1],2]
</span><br>
<span class="quotelev1">&gt;                               Pid: 0     Local rank: 0       Node rank: 0
</span><br>
<span class="quotelev1">&gt;                               State: 0                App_context: 0                Slot list: NULL
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Has anyone already encounter the same behavior ?
</span><br>
<span class="quotelev1">&gt; Is there a simple fix than not using the tight integration mode between Sge and OpenMPI ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Eloi
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18924.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18922.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18922.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18924.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18924.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
