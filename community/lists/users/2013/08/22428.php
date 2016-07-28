<?
$subject_val = "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  3 16:30:37 2013" -->
<!-- isoreceived="20130803203037" -->
<!-- sent="Sat, 03 Aug 2013 13:30:30 -0700" -->
<!-- isosent="20130803203030" -->
<!-- name="RoboBeans" -->
<!-- email="robobeans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications." -->
<!-- id="51FD6866.5070908_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A4A2D4D-94A7-4240-96BE-59173650C80F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-08-03 16:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22429.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22429.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22429.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for looking into in Ralph. I modified the hosts file but I am 
<br>
still getting the same error. Any other pointers you can think of? The 
<br>
difference between this 1.7.2 installation and 1.5.4 is that I installed 
<br>
1.5.4 using yum and for 1.7.2, I used the source code and configured 
<br>
with *--enable-event-thread-support --enable-opal-multi-threads 
<br>
--enable-orte-progress-threads --enable-mpi-thread-multiple**
<br>
*. Am I missing something here?
<br>
<p>//******************************************************************
<br>
<p>*$ cat mpi_hostfile*
<br>
<p>x.x.x.22 slots=15 max-slots=15
<br>
x.x.x.24 slots=2 max-slots=2
<br>
x.x.x.26 slots=14 max-slots=14
<br>
x.x.x.28 slots=16 max-slots=16
<br>
x.x.x.29 slots=14 max-slots=14
<br>
x.x.x.30 slots=16 max-slots=16
<br>
x.x.x.41 slots=46 max-slots=46
<br>
x.x.x.101 slots=46 max-slots=46
<br>
x.x.x.100 slots=46 max-slots=46
<br>
x.x.x.102 slots=22 max-slots=22
<br>
x.x.x.103 slots=22 max-slots=22
<br>
<p>//******************************************************************
<br>
*$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode ./test**
<br>
*
<br>
[SERVER-2:08907] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/0/0
<br>
[SERVER-2:08907] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/0
<br>
[SERVER-2:08907] top: openmpi-sessions-mpidemo_at_SERVER-2_0
<br>
[SERVER-2:08907] tmp: /tmp
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
[SERVER-3:32517] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/0/1
<br>
[SERVER-3:32517] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/0
<br>
[SERVER-3:32517] top: openmpi-sessions-mpidemo_at_SERVER-3_0
<br>
[SERVER-3:32517] tmp: /tmp
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
[SERVER-6:11595] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/0/4
<br>
[SERVER-6:11595] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/0
<br>
[SERVER-6:11595] top: openmpi-sessions-mpidemo_at_SERVER-6_0
<br>
[SERVER-6:11595] tmp: /tmp
<br>
[SERVER-4:27445] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/0/2
<br>
[SERVER-4:27445] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/0
<br>
[SERVER-4:27445] top: openmpi-sessions-mpidemo_at_SERVER-4_0
<br>
[SERVER-4:27445] tmp: /tmp
<br>
[SERVER-7:02607] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/0/5
<br>
[SERVER-7:02607] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/0
<br>
[SERVER-7:02607] top: openmpi-sessions-mpidemo_at_SERVER-7_0
<br>
[SERVER-7:02607] tmp: /tmp
<br>
[sv-1:46100] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/0/8
<br>
[sv-1:46100] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/0
<br>
[sv-1:46100] top: openmpi-sessions-mpidemo_at_sv-1_0
<br>
[sv-1:46100] tmp: /tmp
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
[SERVER-5:16404] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/0/3
<br>
[SERVER-5:16404] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/0
<br>
[SERVER-5:16404] top: openmpi-sessions-mpidemo_at_SERVER-5_0
<br>
[SERVER-5:16404] tmp: /tmp
<br>
[sv-3:08575] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/0/9
<br>
[sv-3:08575] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/0
<br>
[sv-3:08575] top: openmpi-sessions-mpidemo_at_sv-3_0
<br>
[sv-3:08575] tmp: /tmp
<br>
[SERVER-14:10755] procdir: 
<br>
/tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/0/6
<br>
[SERVER-14:10755] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/0
<br>
[SERVER-14:10755] top: openmpi-sessions-mpidemo_at_SERVER-14_0
<br>
[SERVER-14:10755] tmp: /tmp
<br>
[sv-4:12040] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/62216/0/10
<br>
[sv-4:12040] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/62216/0
<br>
[sv-4:12040] top: openmpi-sessions-mpidemo_at_sv-4_0
<br>
[sv-4:12040] tmp: /tmp
<br>
[sv-2:07725] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/0/7
<br>
[sv-2:07725] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/0
<br>
[sv-2:07725] top: openmpi-sessions-mpidemo_at_sv-2_0
<br>
[sv-2:07725] tmp: /tmp
<br>
<p>&nbsp;&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: 
<br>
BYNODE  Ranking policy: NODE  Binding policy: NONE[NODE]  Cpu set: NULL  
<br>
PPR: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0    New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 10
<br>
<p>&nbsp;&nbsp;Data for node: SERVER-2         Launch id: -1    State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],0]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 15    Max slots: 15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-15    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.24         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],1]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 2    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 2    Max slots: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.26         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],2]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 14    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 14    Max slots: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.28         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],3]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16    Max slots: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.29         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],4]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 14    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 14    Max slots: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.30         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],5]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16    Max slots: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.41         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],6]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 46    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 46    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],6]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.101         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],7]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 46    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 46    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],7]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.100         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],8]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 46    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 46    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],8]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.102         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],9]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 22    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 22    Max slots: 22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0  Locale: 
<br>
0-7    Binding: NULL[0]
<br>
[sv-1:46111] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/1/8
<br>
[sv-1:46111] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/1
<br>
[sv-1:46111] top: openmpi-sessions-mpidemo_at_sv-1_0
<br>
[sv-1:46111] tmp: /tmp
<br>
[SERVER-14:10768] procdir: 
<br>
/tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/1/6
<br>
[SERVER-14:10768] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/1
<br>
[SERVER-14:10768] top: openmpi-sessions-mpidemo_at_SERVER-14_0
<br>
[SERVER-14:10768] tmp: /tmp
<br>
[SERVER-2:08912] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/1/0
<br>
[SERVER-2:08912] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/1
<br>
[SERVER-2:08912] top: openmpi-sessions-mpidemo_at_SERVER-2_0
<br>
[SERVER-2:08912] tmp: /tmp
<br>
[SERVER-4:27460] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/1/2
<br>
[SERVER-4:27460] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/62216/1
<br>
[SERVER-4:27460] top: openmpi-sessions-mpidemo_at_SERVER-4_0
<br>
[SERVER-4:27460] tmp: /tmp
<br>
[SERVER-6:11608] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/1/4
<br>
[SERVER-6:11608] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/62216/1
<br>
[SERVER-6:11608] top: openmpi-sessions-mpidemo_at_SERVER-6_0
<br>
[SERVER-6:11608] tmp: /tmp
<br>
[SERVER-7:02620] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/1/5
<br>
[SERVER-7:02620] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/62216/1
<br>
[SERVER-7:02620] top: openmpi-sessions-mpidemo_at_SERVER-7_0
<br>
[SERVER-7:02620] tmp: /tmp
<br>
[sv-3:08586] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/1/9
<br>
[sv-3:08586] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/62216/1
<br>
[sv-3:08586] top: openmpi-sessions-mpidemo_at_sv-3_0
<br>
[sv-3:08586] tmp: /tmp
<br>
[sv-2:07736] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/1/7
<br>
[sv-2:07736] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/62216/1
<br>
[sv-2:07736] top: openmpi-sessions-mpidemo_at_sv-2_0
<br>
[sv-2:07736] tmp: /tmp
<br>
[SERVER-5:16418] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/1/3
<br>
[SERVER-5:16418] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/62216/1
<br>
[SERVER-5:16418] top: openmpi-sessions-mpidemo_at_SERVER-5_0
<br>
[SERVER-5:16418] tmp: /tmp
<br>
[SERVER-3:32533] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/1/1
<br>
[SERVER-3:32533] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/62216/1
<br>
[SERVER-3:32533] top: openmpi-sessions-mpidemo_at_SERVER-3_0
<br>
[SERVER-3:32533] tmp: /tmp
<br>
&nbsp;&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable_size = 10
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, SERVER-2, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8912)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, x.x.x.24, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32533)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, x.x.x.26, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 27460)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, x.x.x.28, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 16418)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, x.x.x.29, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 11608)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (5, x.x.x.30, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 2620)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (6, x.x.x.41, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 10768)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (7, x.x.x.101, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7736)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (8, x.x.x.100, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 46111)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (9, x.x.x.102, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8586)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[SERVER-2:8912] *** An error occurred in MPI_Init
<br>
[SERVER-2:8912] *** reported by process [140393673392129,140389596004352]
<br>
[SERVER-2:8912] *** on a NULL communicator
<br>
[SERVER-2:8912] *** Unknown error
<br>
[SERVER-2:8912] *** MPI_ERRORS_ARE_FATAL (processes in this communicator 
<br>
will now abort,
<br>
[SERVER-2:8912] ***    and potentially your MPI job)
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;&nbsp;Local host: SERVER-2
<br>
&nbsp;&nbsp;&nbsp;PID:        8912
<br>
--------------------------------------------------------------------------
<br>
[sv-1][[62216,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
<br>
[btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
<br>
[sv-1][[62216,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
[sv-1][[62216,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;Process 1 ([[62216,1],8]) is on host: sv-1
<br>
&nbsp;&nbsp;&nbsp;Process 2 ([[62216,1],0]) is on host: SERVER-2
<br>
&nbsp;&nbsp;&nbsp;BTLs attempted: openib self sm tcp
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
[sv-3][[62216,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
<br>
[btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
<br>
[sv-3][[62216,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
[sv-3][[62216,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
--------------------------------------------------------------------------
<br>
MPI_INIT has failed because at least one MPI process is unreachable
<br>
from another.  This *usually* means that an underlying communication
<br>
plugin -- such as a BTL or an MTL -- has either not loaded or not
<br>
allowed itself to be used.  Your MPI job will now abort.
<br>
<p>You may wish to try to narrow down the problem;
<br>
<p>&nbsp;&nbsp;* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;available.
<br>
&nbsp;&nbsp;* Run your application with MPI_THREAD_SINGLE.
<br>
&nbsp;&nbsp;* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if using MTL-based communications) to see exactly which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;communication plugins were considered and/or discarded.
<br>
--------------------------------------------------------------------------
<br>
[sv-2][[62216,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
<br>
[btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
<br>
[sv-2][[62216,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
[sv-2][[62216,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
[SERVER-2:08907] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-4:12040] sess_dir_finalize: job session dir not empty - leaving
<br>
[SERVER-14:10755] sess_dir_finalize: job session dir not empty - leaving
<br>
[SERVER-2:08907] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-6:11595] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-6:11595] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-4:27445] sess_dir_finalize: proc session dir not empty - leaving
<br>
exiting with status 0
<br>
[SERVER-4:27445] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-6:11595] sess_dir_finalize: job session dir not empty - leaving
<br>
[SERVER-7:02607] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-7:02607] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-7:02607] sess_dir_finalize: job session dir not empty - leaving
<br>
[SERVER-5:16404] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-5:16404] sess_dir_finalize: proc session dir not empty - leaving
<br>
exiting with status 0
<br>
exiting with status 0
<br>
exiting with status 0
<br>
[SERVER-4:27445] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
[SERVER-3:32517] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-3:32517] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-3:08575] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-3:08575] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
[sv-1:46100] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-1:46100] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
[sv-2:07725] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-2:07725] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
[SERVER-5:16404] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
[SERVER-3:32517] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 6 with PID 10768 on
<br>
node x.x.x.41 exiting improperly. There are three reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p>--------------------------------------------------------------------------
<br>
[SERVER-2:08907] 6 more processes have sent help message 
<br>
help-mpi-runtime / mpi_init:startup:internal-failure
<br>
[SERVER-2:08907] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
<br>
see all help / error messages
<br>
[SERVER-2:08907] 9 more processes have sent help message 
<br>
help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
<br>
[SERVER-2:08907] 9 more processes have sent help message 
<br>
help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
<br>
[SERVER-2:08907] 2 more processes have sent help message 
<br>
help-mca-bml-r2.txt / unreachable proc
<br>
[SERVER-2:08907] 2 more processes have sent help message 
<br>
help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
<br>
[SERVER-2:08907] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 1
<br>
<p>//******************************************************************
<br>
<p>On 8/3/13 4:34 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It looks like SERVER-2 cannot talk to your x.x.x.100 machine. I note 
</span><br>
<span class="quotelev1">&gt; that you have some entries at the end of the hostfile that I don't 
</span><br>
<span class="quotelev1">&gt; understand - a list of hosts that can be reached? And I see that your 
</span><br>
<span class="quotelev1">&gt; x.x.x.22 machine isn't on it. Is that SERVER-2 by chance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our hostfile parsing changed between the release series, but I know we 
</span><br>
<span class="quotelev1">&gt; never consciously supported the syntax you show below where you list 
</span><br>
<span class="quotelev1">&gt; capabilities, and then re-list the hosts in an apparent attempt to 
</span><br>
<span class="quotelev1">&gt; filter which ones can actually be used. It is possible that the 1.5 
</span><br>
<span class="quotelev1">&gt; series somehow used that to exclude the 22 machine, and that the 1.7 
</span><br>
<span class="quotelev1">&gt; parser now doesn't do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you only include machines you actually intend to use in your 
</span><br>
<span class="quotelev1">&gt; hostfile, does the 1.7 series work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2013, at 3:58 AM, RoboBeans &lt;robobeans_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed openmpi 1.5.4 on 11 node cluster using &quot;yum install 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi openmpi-devel&quot; and everything seems to be working fine. For 
</span><br>
<span class="quotelev2">&gt;&gt; testing I am using this test program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ cat test.cpp*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int id, np;
</span><br>
<span class="quotelev2">&gt;&gt;   char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;   int namelen;
</span><br>
<span class="quotelev2">&gt;&gt;   int i;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;id);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Get_processor_name (name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf (&quot;This is Process %2d out of %2d running on host %s\n&quot;, id, 
</span><br>
<span class="quotelev2">&gt;&gt; np, name);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   return (0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and my hosts file look like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ cat mpi_hostfile*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # The Hostfile for Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # specify number of slots for processes to run locally.
</span><br>
<span class="quotelev2">&gt;&gt; #localhost slots=12
</span><br>
<span class="quotelev2">&gt;&gt; #x.x.x.16 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt; #x.x.x.17 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt; #x.x.x.18 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt; #x.x.1x.19 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt; #x.x.x.20 slots=12 max-slots=12
</span><br>
<span class="quotelev2">&gt;&gt; #x.x.x.55 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt; #x.x.x.56 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.22 slots=15 max-slots=15
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.24 slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.26 slots=14 max-slots=14
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.28 slots=16 max-slots=16
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.29 slots=14 max-slots=14
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.30 slots=16 max-slots=16
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.41 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.101 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.100 slots=46 max-slots=46
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.102 slots=22 max-slots=22
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.103 slots=22 max-slots=22
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # The following slave nodes are available to this machine:
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.24
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.26
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.28
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.29
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.30
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.41
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.101
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.100
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.102
</span><br>
<span class="quotelev2">&gt;&gt; x.x.x.103
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is how my .bashrc looks like on each node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ cat ~/.bashrc*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Source global definitions
</span><br>
<span class="quotelev2">&gt;&gt; if [ -f /etc/bashrc ]; then
</span><br>
<span class="quotelev2">&gt;&gt;     . /etc/bashrc
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # User specific aliases and functions
</span><br>
<span class="quotelev2">&gt;&gt; umask 077
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export PSM_SHAREDCONTEXTS_MAX=20
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #export PATH=/usr/lib64/openmpi/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=/usr/OPENMPI/openmpi-1.7.2/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #export 
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/usr/lib64/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt;&gt; export 
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/usr/OPENMPI/openmpi-1.7.2/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=&quot;$PATH&quot;:/bin/:/usr/lib/:/usr/lib:/usr:/usr/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ mpic++ test.cpp -o test*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode 
</span><br>
<span class="quotelev2">&gt;&gt; ./test*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These nodes are running 2.6.32-358.2.1.el6.x86_64 release
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ **uname*
</span><br>
<span class="quotelev2">&gt;&gt; Linux
</span><br>
<span class="quotelev2">&gt;&gt; *$ **uname -r*
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.32-358.2.1.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; *$ cat /etc/issue*
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, if I install openmpi 1.7.2 on each node separately then I can 
</span><br>
<span class="quotelev2">&gt;&gt; only use it on either first 7 nodes or last 4 nodes but not on all of 
</span><br>
<span class="quotelev2">&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ gunzip -c openmpi-1.7.2.tar.gz | tar xf -**
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **$ cd openmpi-1.7.2**
</span><br>
<span class="quotelev2">&gt;&gt; ****
</span><br>
<span class="quotelev2">&gt;&gt; **$ ./configure --prefix=/usr/OPENMPI/openmpi-1.7.2 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-event-thread-support --enable-opal-multi-threads 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orte-progress-threads --enable-mpi-thread-multiple**
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **$ make all install*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the error message that i am receiving:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode 
</span><br>
<span class="quotelev2">&gt;&gt; ./test*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:28993] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:28993] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:28993] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:28993] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09087] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0/4
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09087] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09087] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09087] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32563] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0/5
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32563] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32563] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32563] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15711] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0/2
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15711] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15711] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15711] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45701] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0/8
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45701] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45701] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45701] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev2">&gt;&gt; Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08352] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0/9
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08352] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08352] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08352] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12534] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0/3
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12534] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12534] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12534] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08399] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0/6
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08399] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08399] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08399] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [sv-4:11802] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0/10
</span><br>
<span class="quotelev2">&gt;&gt; [sv-4:11802] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-4:11802] top: openmpi-sessions-mpidemo_at_sv-4_0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-4:11802] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07503] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0/7
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07503] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07503] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07503] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping policy: 
</span><br>
<span class="quotelev2">&gt;&gt; BYNODE  Ranking policy: NODE  Binding policy: NONE[NODE]  Cpu set: 
</span><br>
<span class="quotelev2">&gt;&gt; NULL  PPR: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num new daemons: 0    New daemon starting vpid INVALID
</span><br>
<span class="quotelev2">&gt;&gt;      Num nodes: 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: SERVER-2         Launch id: -1    State: 2
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],0]    Daemon launched: True
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 15    Max slots: 15
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-15    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.24         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],1]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 3    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 3    Max slots: 2
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],1]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.26         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],2]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 15    Max slots: 14
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],2]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 2
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.28         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],3]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 17    Max slots: 16
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],3]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 3
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.29         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],4]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 15    Max slots: 14
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],4]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.30         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],5]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 17    Max slots: 16
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],5]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 5
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.41         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],6]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],6]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 6
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.101         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],7]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],7]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 7
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.100         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],8]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],8]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: x.x.x.102         Launch id: -1    State: 0
</span><br>
<span class="quotelev2">&gt;&gt;      Daemon: [[50535,0],9]    Daemon launched: False
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots: 23    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt;&gt;      Num slots allocated: 23    Max slots: 22
</span><br>
<span class="quotelev2">&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev2">&gt;&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Data for proc: [[50535,1],9]
</span><br>
<span class="quotelev2">&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 9
</span><br>
<span class="quotelev2">&gt;&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45712] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1/8
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45712] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45712] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45712] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08412] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1/6
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08412] jobdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08412] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08412] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05291] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1/0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05291] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05291] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05291] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15726] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1/2
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15726] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15726] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15726] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09100] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1/4
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09100] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09100] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09100] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32576] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1/5
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32576] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32576] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32576] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08363] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1/9
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08363] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08363] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08363] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07514] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1/7
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07514] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07514] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07514] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12548] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1/3
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12548] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12548] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12548] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:29009] procdir: 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:29009] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:29009] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:29009] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_forward_output = 0
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_proctable_size = 10
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_proctable:
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (0, SERVER-2, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 5291)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (1, x.x.x.24, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 29009)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (2, x.x.x.26, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 15726)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (3, x.x.x.28, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 12548)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (4, x.x.x.29, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 9100)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (5, x.x.x.30, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32576)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (6, x.x.x.41, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8412)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (7, x.x.x.101, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7514)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (8, x.x.x.100, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 45712)
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (9, x.x.x.102, 
</span><br>
<span class="quotelev2">&gt;&gt; /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8363)
</span><br>
<span class="quotelev2">&gt;&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev2">&gt;&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:5291] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:5291] *** reported by process [140508871983105,140505560121344]
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:5291] *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:5291] *** Unknown error
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:5291] *** MPI_ERRORS_ARE_FATAL (processes in this 
</span><br>
<span class="quotelev2">&gt;&gt; communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:5291] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev2">&gt;&gt; of its peer processes in the job will be killed properly. You should
</span><br>
<span class="quotelev2">&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev2">&gt;&gt;   Local host: SERVER-2
</span><br>
<span class="quotelev2">&gt;&gt;   PID:        5291
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1][[50535,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3][[50535,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[50535,1],8]) is on host: sv-1
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[50535,1],0]) is on host: SERVER-2
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: openib self sm tcp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev2">&gt;&gt; from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev2">&gt;&gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev2">&gt;&gt; allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev2">&gt;&gt;    available.
</span><br>
<span class="quotelev2">&gt;&gt;  * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev2">&gt;&gt;  * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev2">&gt;&gt;    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev2">&gt;&gt;    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2][[50535,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [sv-4:11802] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-14:08399] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09087] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09087] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15711] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15711] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-6:09087] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32563] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32563] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12534] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12534] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-7:32563] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-4:15711] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:28993] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:28993] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08352] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [sv-3:08352] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45701] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [sv-1:45701] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07503] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [sv-2:07503] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-5:12534] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-3:28993] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 6 with PID 8412 on
</span><br>
<span class="quotelev2">&gt;&gt; node x.x.x.41 exiting improperly. There are three reasons this could 
</span><br>
<span class="quotelev2">&gt;&gt; occur:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev2">&gt;&gt; orte_create_session_dirs is set to false. In this case, the run-time 
</span><br>
<span class="quotelev2">&gt;&gt; cannot
</span><br>
<span class="quotelev2">&gt;&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev2">&gt;&gt; error message you will receive is this one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can avoid this message by specifying -quiet on the mpirun command 
</span><br>
<span class="quotelev2">&gt;&gt; line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] 6 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
</span><br>
<span class="quotelev2">&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] 9 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] 9 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] 2 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] 2 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev2">&gt;&gt; [SERVER-2:05284] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; exiting with status 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //******************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any feedback will be helpful. Thank you!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mr. Beans
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22429.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22429.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22429.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
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
