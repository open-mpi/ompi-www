<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 11:30:18 2012" -->
<!-- isoreceived="20120403153018" -->
<!-- sent="Tue, 3 Apr 2012 17:30:03 +0200" -->
<!-- isosent="20120403153003" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="6C64D314-12A1-4B80-BB68-2F4599C1E860_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="zarafa.4f7b1634.452f.3f59efe17fa0e30c_at_mail.fft" -->
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
<strong>Date:</strong> 2012-04-03 11:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18927.php">Hameed Alzahrani: "[OMPI users] Problem in using Linpack with open MPI when specifying the host file"</a>
<li><strong>Previous message:</strong> <a href="18925.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18925.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 03.04.2012 um 17:24 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: mardi 3 avril 2012 17:13
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] sge tight intregration leads to bad allocation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 03.04.2012 um 16:59 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Reuti,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I configured OpenMPI to support SGE tight integration and used the defined below PE for submitting the job:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [16:36][eg_at_moe:~]$ qconf -sp fill_up
</span><br>
<span class="quotelev2">&gt;&gt; pe_name            fill_up
</span><br>
<span class="quotelev2">&gt;&gt; slots              80
</span><br>
<span class="quotelev2">&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should fill a host completely before moving to the next one with this definition.
</span><br>
<span class="quotelev1">&gt; [eg: ] yes, and it should also make sure that all hard requirements are met. Note that the allocation done by sge is correct here, this is what is finally done by openmpi at startup that is different (and incorrect).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And why is &quot;num_proc=0&quot; output everywhere - was it redefined (usually it's a load sensor set to the found cores in the machines and shoudn't be touched by hand making it a consumable complex).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [eg: ] my mistake i think, this was made a consumable complex so that we could easily schedule multithread and parallel job on the cluster. I guess I should define another complex (proc_available), make it consumable and consume from this complex instead of touching the num_proc sensor one then...
</span><br>
<p>No. Also a threaded job is a parallel one with allocation_rule $pe_slots, no custom complex necessary. Often such a PE is called &quot;smp&quot;.
<br>
<p>So, for now we can't solve the initial issue.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; smp4.q_at_barney.fft              BIP   0/1/4          0.70     lx-amd64
</span><br>
<span class="quotelev2">&gt;&gt;       hc:num_proc=0
</span><br>
<span class="quotelev2">&gt;&gt;       hl:mem_free=31.215G
</span><br>
<span class="quotelev2">&gt;&gt;       hl:mem_used=280.996M
</span><br>
<span class="quotelev2">&gt;&gt;       hc:mem_available=1.715G
</span><br>
<span class="quotelev2">&gt;&gt;  1296 0.54786 semi_direc jj           r     04/03/2012 16:43:49     1
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; smp4.q_at_carl.fft                BIP   0/1/4          0.69     lx-amd64
</span><br>
<span class="quotelev2">&gt;&gt;       hc:num_proc=0
</span><br>
<span class="quotelev2">&gt;&gt;       hl:mem_free=30.764G
</span><br>
<span class="quotelev2">&gt;&gt;       hl:mem_used=742.805M
</span><br>
<span class="quotelev2">&gt;&gt;       hc:mem_available=1.715G
</span><br>
<span class="quotelev2">&gt;&gt;  1296 0.54786 semi_direc jj           r     04/03/2012 16:43:49     1
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; smp8.q_at_charlie.fft             BIP   0/2/8          0.57     lx-amd64
</span><br>
<span class="quotelev2">&gt;&gt;       hc:num_proc=0
</span><br>
<span class="quotelev2">&gt;&gt;       hl:mem_free=62.234G
</span><br>
<span class="quotelev2">&gt;&gt;       hl:mem_used=836.797M
</span><br>
<span class="quotelev2">&gt;&gt;       hc:mem_available=4.018G
</span><br>
<span class="quotelev2">&gt;&gt;  1296 0.54786 semi_direc jj           r     04/03/2012 16:43:49     2
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -----------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sge reports whatr pls_gridengine_report does, i.e. what was reserved.
</span><br>
<span class="quotelev2">&gt;&gt; But here is the ouput of the current job (after started by openmpi):
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:05294] ras:gridengine: JOB_ID: 1296 [charlie:05294] 
</span><br>
<span class="quotelev2">&gt;&gt; ras:gridengine: PE_HOSTFILE: 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sge/default/spool/charlie/active_jobs/1296.1/pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:05294] ras:gridengine: charlie.fft: PE_HOSTFILE shows slots=2 
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:05294] ras:gridengine: barney.fft: PE_HOSTFILE shows slots=1 
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:05294] ras:gridengine: carl.fft: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
</span><br>
<span class="quotelev2">&gt;&gt; Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev2">&gt;&gt; Daemon: [[54347,0],0] Daemon launched: True  Num slots: 2  Slots in 
</span><br>
<span class="quotelev2">&gt;&gt; use: 0  Num slots allocated: 2  Max slots: 0  Username on node: NULL  
</span><br>
<span class="quotelev2">&gt;&gt; Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev2">&gt;&gt; Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev2">&gt;&gt; Daemon: Not defined Daemon launched: False  Num slots: 1  Slots in 
</span><br>
<span class="quotelev2">&gt;&gt; use: 0  Num slots allocated: 1  Max slots: 0  Username on node: NULL  
</span><br>
<span class="quotelev2">&gt;&gt; Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev2">&gt;&gt; Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev2">&gt;&gt; Daemon: Not defined Daemon launched: False  Num slots: 1  Slots in 
</span><br>
<span class="quotelev2">&gt;&gt; use: 0  Num slots allocated: 1  Max slots: 0  Username on node: NULL  
</span><br>
<span class="quotelev2">&gt;&gt; Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Map generated by mapping policy: 0200
</span><br>
<span class="quotelev2">&gt;&gt; Npernode: 0 Oversubscribe allowed: TRUE CPU Lists: FALSE  Num new 
</span><br>
<span class="quotelev2">&gt;&gt; daemons: 2  New daemon starting vpid 1  Num nodes: 3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
</span><br>
<span class="quotelev2">&gt;&gt; Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev2">&gt;&gt; Daemon: [[54347,0],0] Daemon launched: True  Num slots: 2  Slots in 
</span><br>
<span class="quotelev2">&gt;&gt; use: 2  Num slots allocated: 2  Max slots: 0  Username on node: NULL  
</span><br>
<span class="quotelev2">&gt;&gt; Num procs: 2  Next node_rank: 2  Data for proc: [[54347,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0  Local rank: 0 Node rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;   State: 0  App_context: 0  Slot list: NULL  Data for proc: 
</span><br>
<span class="quotelev2">&gt;&gt; [[54347,1],3]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0  Local rank: 1 Node rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;   State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev2">&gt;&gt; Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev2">&gt;&gt; Daemon: [[54347,0],1] Daemon launched: False  Num slots: 1  Slots in 
</span><br>
<span class="quotelev2">&gt;&gt; use: 1  Num slots allocated: 1  Max slots: 0  Username on node: NULL  
</span><br>
<span class="quotelev2">&gt;&gt; Num procs: 1  Next node_rank: 1  Data for proc: [[54347,1],1]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0  Local rank: 0 Node rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;   State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev2">&gt;&gt; Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev2">&gt;&gt; Daemon: [[54347,0],2] Daemon launched: False  Num slots: 1  Slots in 
</span><br>
<span class="quotelev2">&gt;&gt; use: 1  Num slots allocated: 1  Max slots: 0  Username on node: NULL  
</span><br>
<span class="quotelev2">&gt;&gt; Num procs: 1  Next node_rank: 1  Data for proc: [[54347,1],2]
</span><br>
<span class="quotelev2">&gt;&gt;   Pid: 0  Local rank: 0 Node rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;   State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Reuti
</span><br>
<span class="quotelev2">&gt;&gt; Sent: mardi 3 avril 2012 16:24
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] sge tight intregration leads to bad 
</span><br>
<span class="quotelev2">&gt;&gt; allocation
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 03.04.2012 um 16:12 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your feedback.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, this is the other way around, the &quot;reserved&quot; slots on all nodes are ok but the &quot;used&quot; slots are different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically, I'm using SGE to schedule and book resources for a distributed job. When the job is finally launched, it uses a different allocation than the one that was reported by pls_gridengine_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_grid_engine_info report states that 3 nodes were booked: barney (1 slot), carl (1 slot) and charlie (2 slots). This booking was done by sge depending on the memory requirements of the job (among others).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When orterun starts the jobs (i.e. when Sge finally start the scheduled job), it uses 3 nodes but the first one (barney: 2 slots instead of 1) is oversubscribed and the last one (carl: 1 slot instead of 2) is underused.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; you configured Open MPI to support SGE tight integration and used a PE for submitting the job? Can you please post the defintion of the PE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What was the allocation you saw in SGE's `qstat -g t ` for the job?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you need further information, please let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: mardi 3 avril 2012 15:58
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] sge tight intregration leads to bad 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid there isn't enough info here to help. Are you saying you only allocated one slot/node, so the two slots on charlie is in error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 3, 2012, at 6:23 AM, &quot;Eloi Gaudry&quot; &lt;eloi.gaudry_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've observed a strange behavior during rank allocation on a distributed run schedule and submitted using Sge (Son of Grid Egine 8.0.0d) and OpenMPI-1.4.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Briefly, there is a one-slot difference between allocated rank/slot for Sge and OpenMPI. The issue here is that one node becomes oversubscribed at runtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the output of the allocation done for gridengine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: barney                 Launch id: -1      Arch: ffc91200   State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Daemon: [[22904,0],0]  Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots: 1      Slots in use: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots allocated: 1   Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num procs: 0     Next node_rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: carl.fft                  Launch id: -1      Arch: 0  State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Daemon: Not defined   Daemon launched: False
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots: 1      Slots in use: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots allocated: 1   Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num procs: 0     Next node_rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: charlie.fft                            Launch id: -1      Arch: 0  State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Daemon: Not defined   Daemon launched: False
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots: 2      Slots in use: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots allocated: 2   Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num procs: 0     Next node_rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And here is the allocation finally used:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Map generated by mapping policy: 0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Npernode: 0      Oversubscribe allowed: TRUE   CPU Lists: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num new daemons: 2  New daemon starting vpid 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num nodes: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: barney                 Launch id: -1      Arch: ffc91200   State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Daemon: [[22904,0],0]  Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots: 1      Slots in use: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots allocated: 1   Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num procs: 2     Next node_rank: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Data for proc: [[22904,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             Pid: 0     Local rank: 0       Node rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             State: 0                App_context: 0                Slot list: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Data for proc: [[22904,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             Pid: 0     Local rank: 1       Node rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             State: 0                App_context: 0                Slot list: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: carl.fft                  Launch id: -1      Arch: 0  State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Daemon: [[22904,0],1]  Daemon launched: False
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots: 1      Slots in use: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots allocated: 1   Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num procs: 1     Next node_rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Data for proc: [[22904,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             Pid: 0     Local rank: 0       Node rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             State: 0                App_context: 0                Slot list: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: charlie.fft                            Launch id: -1      Arch: 0  State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Daemon: [[22904,0],2]  Daemon launched: False
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots: 2      Slots in use: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num slots allocated: 2   Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Num procs: 1     Next node_rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Data for proc: [[22904,1],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             Pid: 0     Local rank: 0       Node rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             State: 0                App_context: 0                Slot list: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone already encounter the same behavior ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a simple fix than not using the tight integration mode between Sge and OpenMPI ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18927.php">Hameed Alzahrani: "[OMPI users] Problem in using Linpack with open MPI when specifying the host file"</a>
<li><strong>Previous message:</strong> <a href="18925.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18925.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
