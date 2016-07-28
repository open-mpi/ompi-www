<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 10:23:52 2012" -->
<!-- isoreceived="20120403142352" -->
<!-- sent="Tue, 3 Apr 2012 16:23:35 +0200" -->
<!-- isosent="20120403142335" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="57D6969E-3F59-438F-9370-E14F4C456690_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="zarafa.4f7b0542.0d43.00c3431260dbf7ad_at_mail.fft" -->
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
<strong>Date:</strong> 2012-04-03 10:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18923.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18921.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18921.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18923.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18923.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 03.04.2012 um 16:12 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; Thanks for your feedback.
</span><br>
<span class="quotelev1">&gt; No, this is the other way around, the &#147;reserved&#148; slots on all nodes are ok but the &#147;used&#148; slots are different.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Basically, I&#146;m using SGE to schedule and book resources for a distributed job. When the job is finally launched, it uses a different allocation than the one that was reported by pls_gridengine_info.
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
<span class="quotelev1">&gt; I&#146;ve observed a strange behavior during rank allocation on a distributed run schedule and submitted using Sge (Son of Grid Egine 8.0.0d) and OpenMPI-1.4.4.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18923.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18921.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18921.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18923.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18923.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
