<?
$subject_val = "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  3 22:09:17 2013" -->
<!-- isoreceived="20130804020917" -->
<!-- sent="Sat, 03 Aug 2013 19:09:09 -0700" -->
<!-- isosent="20130804020909" -->
<!-- name="RoboBeans" -->
<!-- email="robobeans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications." -->
<!-- id="51FDB7C5.4030202_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="116B989B-70EE-46EA-AE9C-5354CC039481_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.<br>
<strong>From:</strong> RoboBeans (<em>robobeans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-03 22:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22433.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22431.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22431.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22433.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22433.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On first 7 nodes:
<br>
<p>*[mpidemo_at_SERVER-3 ~]$ ofed_info | head -n 1*
<br>
OFED-1.5.3.2:
<br>
<p>*[mpidemo_at_SERVER-3 ~]$ which ofed_info*
<br>
/usr/bin/ofed_info
<br>
<p>On last 4 nodes:
<br>
<p>*[mpidemo_at_sv-2 ~]$ ofed_info | head -n 1*
<br>
-bash: ofed_info: command not found
<br>
<p>*[mpidemo_at_sv-2 ~]$ which ofed_info*
<br>
/usr/bin/which: no ofed_info in 
<br>
(/usr/OPENMPI/openmpi-1.7.2/bin:/usr/OPENMPI/openmpi-1.7.2/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/bin/:/usr/lib/:/usr/lib:/usr:/usr/:/bin/:/usr/lib/:/usr/lib:/usr:/usr/)
<br>
<p><p>Are there some specific locations where I should look for ofed_info? How 
<br>
can I make sure that ofed was installed on a node or not?
<br>
<p>Thanks again!!!
<br>
<p><p>On 8/3/13 5:52 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Are the ofed versions the same across all the machines? I would 
</span><br>
<span class="quotelev1">&gt; suspect that might be the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2013, at 4:06 PM, RoboBeans &lt;robobeans_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, I tried using 1.5.4, 1.6.5 and 1.7.2 (compiled from source 
</span><br>
<span class="quotelev2">&gt;&gt; code) with no configuration arguments but I am facing the same issue. 
</span><br>
<span class="quotelev2">&gt;&gt; When I run a job using 1.5.4 (installed using yum), I get warnings 
</span><br>
<span class="quotelev2">&gt;&gt; but it doesn't affect my output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example of warning that I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sv-2.7960ipath_userinit: Mismatched user minor version (12) and 
</span><br>
<span class="quotelev2">&gt;&gt; driver minor version (11) while context sharing. Ensure that driver 
</span><br>
<span class="quotelev2">&gt;&gt; and library are from the same release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each system has a QLogic card (&quot;QLE7342-CK dual port IB card&quot;), with 
</span><br>
<span class="quotelev2">&gt;&gt; the same OS but different kernel revision no. (e.g. 
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.32-358.2.1.el6.x86_64, 2.6.32-358.el6.x86_64).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/3/13 2:05 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...strange indeed. I would remove those four configure options 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and give it a try. That will eliminate all the obvious things, I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would think, though they aren't generally involved in the issue 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shown here. Still, worth taking out potential trouble sources.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the connectivity between SERVER-2 and node 100? Should I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume that the first seven nodes are connected via one type of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interconnect, and the other four are connected to those seven by 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another type?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 3, 2013, at 1:30 PM, RoboBeans &lt;robobeans_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for looking into in Ralph. I modified the hosts file but I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; am still getting the same error. Any other pointers you can think 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of? The difference between this 1.7.2 installation and 1.5.4 is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that I installed 1.5.4 using yum and for 1.7.2, I used the source 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code and configured with *--enable-event-thread-support 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-opal-multi-threads --enable-orte-progress-threads 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-mpi-thread-multiple**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *. Am I missing something here?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *$ cat mpi_hostfile*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.22 slots=15 max-slots=15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.24 slots=2 max-slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.26 slots=14 max-slots=14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.28 slots=16 max-slots=16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.29 slots=14 max-slots=14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.30 slots=16 max-slots=16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.41 slots=46 max-slots=46
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.101 slots=46 max-slots=46
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.100 slots=46 max-slots=46
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.102 slots=22 max-slots=22
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x.x.x.103 slots=22 max-slots=22
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./test**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/0/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32517] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/0/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32517] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32517] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32517] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11595] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/0/4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11595] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11595] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11595] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27445] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/0/2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27445] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27445] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27445] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02607] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/0/5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02607] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02607] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02607] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46100] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/0/8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46100] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46100] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46100] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16404] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/0/3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16404] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16404] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16404] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08575] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/0/9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08575] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08575] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08575] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10755] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/0/6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10755] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10755] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10755] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-4:12040] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/62216/0/10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-4:12040] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-4:12040] top: openmpi-sessions-mpidemo_at_sv-4_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-4:12040] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07725] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/0/7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07725] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07725] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07725] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping policy: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BYNODE  Ranking policy: NODE  Binding policy: NONE[NODE]  Cpu set: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NULL  PPR: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num new daemons: 0    New daemon starting vpid INVALID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num nodes: 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: SERVER-2         Launch id: -1    State: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],0]    Daemon launched: True
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 15    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 15    Max slots: 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-15    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.24         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],1]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 2    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 2    Max slots: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.26         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],2]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 14    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 14    Max slots: 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.28         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],3]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 16    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 16    Max slots: 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.29         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],4]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 14    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 14    Max slots: 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.30         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],5]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 16    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 16    Max slots: 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.41         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],6]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 46    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 46    Max slots: 46
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.101         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],7]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 46    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 46    Max slots: 46
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.100         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],8]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 46    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 46    Max slots: 46
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: x.x.x.102         Launch id: -1    State: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Daemon: [[62216,0],9]    Daemon launched: False
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots: 22    Slots in use: 1  Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num slots allocated: 22    Max slots: 22
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Data for proc: [[62216,1],9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          State: INITIALIZED    Restarts: 0  App_context: 0   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46111] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/1/8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46111] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46111] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46111] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10768] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/1/6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10768] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10768] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10768] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08912] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/1/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08912] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08912] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08912] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27460] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/1/2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27460] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27460] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27460] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11608] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/1/4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11608] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11608] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11608] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02620] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/1/5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02620] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02620] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02620] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08586] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/1/9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08586] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08586] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08586] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07736] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/1/7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07736] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07736] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07736] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16418] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/1/3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16418] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16418] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16418] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32533] procdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/1/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32533] jobdir: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32533] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32533] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPIR_forward_output = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPIR_proctable_size = 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPIR_proctable:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (0, SERVER-2, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8912)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (1, x.x.x.24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32533)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (2, x.x.x.26, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 27460)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (3, x.x.x.28, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 16418)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (4, x.x.x.29, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 11608)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (5, x.x.x.30, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 2620)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (6, x.x.x.41, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 10768)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (7, x.x.x.101, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7736)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (8, x.x.x.100, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 46111)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (9, x.x.x.102, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8586)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:8912] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:8912] *** reported by process 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [140393673392129,140389596004352]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:8912] *** on a NULL communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:8912] *** Unknown error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:8912] *** MPI_ERRORS_ARE_FATAL (processes in this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicator will now abort,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:8912] ***    and potentially your MPI job)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local host: SERVER-2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   PID:        8912
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1][[62216,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1][[62216,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1][[62216,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 1 ([[62216,1],8]) is on host: sv-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 2 ([[62216,1],0]) is on host: SERVER-2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   BTLs attempted: openib self sm tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3][[62216,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3][[62216,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3][[62216,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    available.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2][[62216,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2][[62216,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2][[62216,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-4:12040] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-14:10755] sess_dir_finalize: job session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11595] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11595] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27445] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27445] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-6:11595] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02607] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02607] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-7:02607] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16404] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16404] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-4:27445] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32517] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32517] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08575] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-3:08575] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46100] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-1:46100] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07725] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sv-2:07725] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-5:16404] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-3:32517] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun has exited due to process rank 6 with PID 10768 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node x.x.x.41 exiting improperly. There are three reasons this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could occur:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_create_session_dirs is set to false. In this case, the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run-time cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error message you will receive is this one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can avoid this message by specifying -quiet on the mpirun 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command line.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] 6 more processes have sent help message 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] 9 more processes have sent help message 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] 9 more processes have sent help message 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] 2 more processes have sent help message 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] 2 more processes have sent help message 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [SERVER-2:08907] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting with status 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 8/3/13 4:34 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like SERVER-2 cannot talk to your x.x.x.100 machine. I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; note that you have some entries at the end of the hostfile that I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't understand - a list of hosts that can be reached? And I see 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that your x.x.x.22 machine isn't on it. Is that SERVER-2 by chance?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Our hostfile parsing changed between the release series, but I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; know we never consciously supported the syntax you show below 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where you list capabilities, and then re-list the hosts in an 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apparent attempt to filter which ones can actually be used. It is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; possible that the 1.5 series somehow used that to exclude the 22 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machine, and that the 1.7 parser now doesn't do that.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you only include machines you actually intend to use in your 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile, does the 1.7 series work?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 3, 2013, at 3:58 AM, RoboBeans &lt;robobeans_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have installed openmpi 1.5.4 on 11 node cluster using &quot;yum 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; install openmpi openmpi-devel&quot; and everything seems to be working 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fine. For testing I am using this test program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ cat test.cpp*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   int id, np;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   int namelen;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   int i;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;id);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Get_processor_name (name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   printf (&quot;This is Process %2d out of %2d running on host %s\n&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; id, np, name);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   return (0);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and my hosts file look like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ cat mpi_hostfile*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # The Hostfile for Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # specify number of slots for processes to run locally.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #localhost slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #x.x.x.16 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #x.x.x.17 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #x.x.x.18 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #x.x.1x.19 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #x.x.x.20 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #x.x.x.55 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #x.x.x.56 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.22 slots=15 max-slots=15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.24 slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.26 slots=14 max-slots=14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.28 slots=16 max-slots=16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.29 slots=14 max-slots=14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.30 slots=16 max-slots=16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.41 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.101 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.100 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.102 slots=22 max-slots=22
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.103 slots=22 max-slots=22
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # The following slave nodes are available to this machine:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.24
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.26
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.28
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.29
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.30
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.41
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.101
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.100
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.102
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x.x.x.103
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this is how my .bashrc looks like on each node:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ cat ~/.bashrc*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Source global definitions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if [ -f /etc/bashrc ]; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     . /etc/bashrc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # User specific aliases and functions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; umask 077
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export PSM_SHAREDCONTEXTS_MAX=20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #export PATH=/usr/lib64/openmpi/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export PATH=/usr/OPENMPI/openmpi-1.7.2/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #export 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib64/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/OPENMPI/openmpi-1.7.2/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export PATH=&quot;$PATH&quot;:/bin/:/usr/lib/:/usr/lib:/usr:/usr/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ mpic++ test.cpp -o test*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --bynode ./test*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; These nodes are running 2.6.32-358.2.1.el6.x86_64 release
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ **uname*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Linux
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ **uname -r*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2.6.32-358.2.1.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ cat /etc/issue*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now, if I install openmpi 1.7.2 on each node separately then I 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can only use it on either first 7 nodes or last 4 nodes but not 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on all of them.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ gunzip -c openmpi-1.7.2.tar.gz | tar xf -**
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **$ cd openmpi-1.7.2**
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ****
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **$ ./configure --prefix=/usr/OPENMPI/openmpi-1.7.2 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --enable-event-thread-support --enable-opal-multi-threads 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --enable-orte-progress-threads --enable-mpi-thread-multiple**
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; **$ make all install*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is the error message that i am receiving:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --bynode ./test*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:28993] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:28993] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:28993] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:28993] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09087] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0/4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09087] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09087] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09087] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32563] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0/5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32563] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32563] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32563] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15711] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0/2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15711] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15711] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15711] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45701] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0/8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45701] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45701] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45701] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08352] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0/9
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08352] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08352] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08352] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12534] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0/3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12534] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12534] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12534] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08399] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0/6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08399] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08399] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08399] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-4:11802] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0/10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-4:11802] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-4:11802] top: openmpi-sessions-mpidemo_at_sv-4_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-4:11802] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07503] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0/7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07503] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07503] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07503] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; policy: BYNODE Ranking policy: NODE  Binding policy: NONE[NODE]  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cpu set: NULL  PPR: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num new daemons: 0    New daemon starting vpid INVALID
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num nodes: 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: SERVER-2 Launch id: -1    State: 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],0]    Daemon launched: True
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 15    Max slots: 15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-15    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.24 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],1]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 3    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 3    Max slots: 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.26 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],2]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 15    Max slots: 14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.28 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],3]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 17    Max slots: 16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.29 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],4]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 15    Max slots: 14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.30 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],5]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 17    Max slots: 16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.41 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],6]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.101 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],7]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],7]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.100 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],8]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],8]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: x.x.x.102 Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Daemon: [[50535,0],9]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots: 23    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num slots allocated: 23    Max slots: 22
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Data for proc: [[50535,1],9]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Pid: 0    Local rank: 0 Node rank: 0    App rank: 9
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          State: INITIALIZED Restarts: 0    App_context: 0 Locale: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45712] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1/8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45712] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45712] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45712] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08412] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1/6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08412] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08412] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08412] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05291] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05291] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05291] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05291] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15726] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1/2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15726] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15726] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15726] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09100] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1/4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09100] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09100] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09100] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32576] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1/5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32576] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32576] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32576] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08363] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1/9
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08363] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08363] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08363] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07514] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1/7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07514] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07514] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07514] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12548] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1/3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12548] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12548] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12548] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:29009] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:29009] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:29009] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:29009] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPIR_forward_output = 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPIR_proctable_size = 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPIR_proctable:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (0, SERVER-2, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 5291)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (1, x.x.x.24, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 29009)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (2, x.x.x.26, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 15726)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (3, x.x.x.28, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 12548)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (4, x.x.x.29, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 9100)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (5, x.x.x.30, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32576)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (6, x.x.x.41, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8412)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (7, x.x.x.101, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7514)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (8, x.x.x.100, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 45712)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (i, host, exe, pid) = (9, x.x.x.102, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8363)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:5291] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:5291] *** reported by process 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [140508871983105,140505560121344]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:5291] *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:5291] *** Unknown error
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:5291] *** MPI_ERRORS_ARE_FATAL (processes in this 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:5291] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; An MPI process is aborting at a time when it cannot guarantee 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Local host: SERVER-2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PID:        5291
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1][[50535,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3][[50535,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Process 1 ([[50535,1],8]) is on host: sv-1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Process 2 ([[50535,1],0]) is on host: SERVER-2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   BTLs attempted: openib self sm tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    available.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  * Set the MCA parameter btl_base_verbose to 100 (or 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtl_base_verbose,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2][[50535,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-4:11802] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-14:08399] sess_dir_finalize: job session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09087] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09087] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15711] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15711] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-6:09087] sess_dir_finalize: job session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32563] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32563] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12534] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12534] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-7:32563] sess_dir_finalize: job session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-4:15711] sess_dir_finalize: job session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:28993] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:28993] sess_dir_finalize: proc session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08352] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-3:08352] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45701] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-1:45701] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07503] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sv-2:07503] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-5:12534] sess_dir_finalize: job session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-3:28993] sess_dir_finalize: job session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun has exited due to process rank 6 with PID 8412 on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node x.x.x.41 exiting improperly. There are three reasons this 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; could occur:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_create_session_dirs is set to false. In this case, the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; run-time cannot
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; detect that the abort call was an abnormal termination. Hence, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the only
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error message you will receive is this one.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can avoid this message by specifying -quiet on the mpirun 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; command line.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] 6 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] 9 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] 9 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] 2 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] 2 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [SERVER-2:05284] sess_dir_finalize: job session dir not empty - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting with status 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any feedback will be helpful. Thank you!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mr. Beans
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22433.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22431.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22431.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22433.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22433.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
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
