<?
$subject_val = "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  4 13:31:28 2013" -->
<!-- isoreceived="20130804173128" -->
<!-- sent="Sun, 4 Aug 2013 17:31:17 +0000" -->
<!-- isosent="20130804173117" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications." -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7328301B5_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51FDB90F.3080009_at_gmail.com" -->
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
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-04 13:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22436.php">Hugo Gagnon: "[OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22434.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22433.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22437.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22437.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/3/13 7:09 PM, RoboBeans wrote:
<br>
On first 7 nodes:
<br>
<p>[mpidemo_at_SERVER-3 ~]$ ofed_info | head -n 1
<br>
OFED-1.5.3.2:
<br>
<p>On last 4 nodes:
<br>
<p>[mpidemo_at_sv-2 ~]$ ofed_info | head -n 1
<br>
-bash: ofed_info: command not found
<br>
[Tom]
<br>
This is a pretty good clue that OFED is not installed on the last 4 nodes.  You should fix that by installing OFED 1.5.3.2 on the last 4 nodes, OR better (but more work) install a newer OFED such as 1.5.4.1 or 3.5 on ALL the nodes (You need to look at the OFED release notes to see if your OS is supported by these OFEDs).
<br>
<p>BTW, since you are using QLogic HCAs, they typically work with the best performance when using the PSM API to the HCA.  PSM is part of OFED.  To use this by default with Open MPI, you can build Open MPI as follows:
<br>
./configure --with-psm --prefix=&lt;install directory&gt;
<br>
make
<br>
make install
<br>
<p>With an Open MPI that is already built, you can try to use PSM as follows:
<br>
mpirun ... --mca mtl psm --mca btl ^openib ...
<br>
<p>-Tom
<br>
<p>[mpidemo_at_sv-2 ~]$ which ofed_info
<br>
/usr/bin/which: no ofed_info in (/usr/OPENMPI/openmpi-1.7.2/bin:/usr/OPENMPI/openmpi-1.7.2/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/bin/:/usr/lib/:/usr/lib:/usr:/usr/:/bin/:/usr/lib/:/usr/lib:/usr:/usr/)
<br>
<p><p>Are there some specific locations where I should look for ofed_info? How can I make sure that ofed was installed on a node or not?
<br>
<p>Thanks again!!!
<br>
<p><p>On 8/3/13 5:52 PM, Ralph Castain wrote:
<br>
Are the ofed versions the same across all the machines? I would suspect that might be the problem.
<br>
<p><p>On Aug 3, 2013, at 4:06 PM, RoboBeans &lt;robobeans_at_[hidden]&lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi Ralph, I tried using 1.5.4, 1.6.5 and 1.7.2 (compiled from source code) with no configuration arguments but I am facing the same issue. When I run a job using 1.5.4 (installed using yum), I get warnings but it doesn't affect my output.
<br>
<p>Example of warning that I get:
<br>
<p>sv-2.7960ipath_userinit: Mismatched user minor version (12) and driver minor version (11) while context sharing. Ensure that driver and library are from the same release.
<br>
<p>Each system has a QLogic card (&quot;QLE7342-CK dual port IB card&quot;), with the same OS but different kernel revision no. (e.g. 2.6.32-358.2.1.el6.x86_64, 2.6.32-358.el6.x86_64).
<br>
<p>Thank you for your time.
<br>
<p>On 8/3/13 2:05 PM, Ralph Castain wrote:
<br>
Hmmm...strange indeed. I would remove those four configure options and give it a try. That will eliminate all the obvious things, I would think, though they aren't generally involved in the issue shown here. Still, worth taking out potential trouble sources.
<br>
<p>What is the connectivity between SERVER-2 and node 100? Should I assume that the first seven nodes are connected via one type of interconnect, and the other four are connected to those seven by another type?
<br>
<p><p>On Aug 3, 2013, at 1:30 PM, RoboBeans &lt;robobeans_at_[hidden]&lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Thanks for looking into in Ralph. I modified the hosts file but I am still getting the same error. Any other pointers you can think of? The difference between this 1.7.2 installation and 1.5.4 is that I installed 1.5.4 using yum and for 1.7.2, I used the source code and configured with --enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
<br>
. Am I missing something here?
<br>
<p>//******************************************************************
<br>
<p>$ cat mpi_hostfile
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
$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode ./test
<br>
<p>[SERVER-2:08907] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/62216/0/0
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
[SERVER-14:10755] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/0/6
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
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYNODE  Ranking policy: NODE  Binding policy: NONE[NODE]  Cpu set: NULL  PPR: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0    New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 10
<br>
<p>&nbsp;Data for node: SERVER-2         Launch id: -1    State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],0]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 15    Max slots: 15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-15    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.24         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],1]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 2    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 2    Max slots: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.26         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],2]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 14    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 14    Max slots: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.28         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],3]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16    Max slots: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.29         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],4]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 14    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 14    Max slots: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.30         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],5]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16    Max slots: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.41         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],6]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 46    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 46    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],6]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.101         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],7]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 46    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 46    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],7]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.100         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],8]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 46    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 46    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],8]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.102         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[62216,0],9]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 22    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 22    Max slots: 22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[62216,1],9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
[sv-1:46111] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/1/8
<br>
[sv-1:46111] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/62216/1
<br>
[sv-1:46111] top: openmpi-sessions-mpidemo_at_sv-1_0
<br>
[sv-1:46111] tmp: /tmp
<br>
[SERVER-14:10768] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/62216/1/6
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
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 10
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, SERVER-2, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8912)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, x.x.x.24, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32533)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, x.x.x.26, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 27460)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, x.x.x.28, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 16418)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, x.x.x.29, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 11608)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (5, x.x.x.30, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 2620)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (6, x.x.x.41, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 10768)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (7, x.x.x.101, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7736)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (8, x.x.x.100, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 46111)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (9, x.x.x.102, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8586)
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
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
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
[SERVER-2:8912] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
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
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: SERVER-2
<br>
&nbsp;&nbsp;PID:        8912
<br>
--------------------------------------------------------------------------
<br>
[sv-1][[62216,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
<br>
[sv-1][[62216,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
<br>
[sv-1][[62216,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
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
<p>&nbsp;&nbsp;Process 1 ([[62216,1],8]) is on host: sv-1
<br>
&nbsp;&nbsp;Process 2 ([[62216,1],0]) is on host: SERVER-2
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm tcp
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
[sv-3][[62216,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
<br>
[sv-3][[62216,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
<br>
[sv-3][[62216,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
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
<p>&nbsp;* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&nbsp;&nbsp;&nbsp;available.
<br>
&nbsp;* Run your application with MPI_THREAD_SINGLE.
<br>
&nbsp;* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&nbsp;&nbsp;&nbsp;if using MTL-based communications) to see exactly which
<br>
&nbsp;&nbsp;&nbsp;communication plugins were considered and/or discarded.
<br>
--------------------------------------------------------------------------
<br>
[sv-2][[62216,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[62216,1],0]
<br>
[sv-2][[62216,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
<br>
[sv-2][[62216,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
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
[SERVER-2:08907] 6 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
<br>
[SERVER-2:08907] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[SERVER-2:08907] 9 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
<br>
[SERVER-2:08907] 9 more processes have sent help message help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
<br>
[SERVER-2:08907] 2 more processes have sent help message help-mca-bml-r2.txt / unreachable proc
<br>
[SERVER-2:08907] 2 more processes have sent help message help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
<br>
[SERVER-2:08907] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 1
<br>
<p>//******************************************************************
<br>
<p>On 8/3/13 4:34 AM, Ralph Castain wrote:
<br>
It looks like SERVER-2 cannot talk to your x.x.x.100 machine. I note that you have some entries at the end of the hostfile that I don't understand - a list of hosts that can be reached? And I see that your x.x.x.22 machine isn't on it. Is that SERVER-2 by chance?
<br>
<p>Our hostfile parsing changed between the release series, but I know we never consciously supported the syntax you show below where you list capabilities, and then re-list the hosts in an apparent attempt to filter which ones can actually be used. It is possible that the 1.5 series somehow used that to exclude the 22 machine, and that the 1.7 parser now doesn't do that.
<br>
<p>If you only include machines you actually intend to use in your hostfile, does the 1.7 series work?
<br>
<p>On Aug 3, 2013, at 3:58 AM, RoboBeans &lt;robobeans_at_[hidden]&lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hello everyone,
<br>
<p>I have installed openmpi 1.5.4 on 11 node cluster using &quot;yum install openmpi openmpi-devel&quot; and everything seems to be working fine. For testing I am using this test program
<br>
<p>//******************************************************************
<br>
<p>$ cat test.cpp
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int id, np;
<br>
&nbsp;&nbsp;char name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;int namelen;
<br>
&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;np);
<br>
&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;id);
<br>
&nbsp;&nbsp;MPI_Get_processor_name (name, &amp;namelen);
<br>
<p>&nbsp;&nbsp;printf (&quot;This is Process %2d out of %2d running on host %s\n&quot;, id, np, name);
<br>
<p>&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;return (0);
<br>
}
<br>
<p>//******************************************************************
<br>
<p>and my hosts file look like this:
<br>
<p>$ cat mpi_hostfile
<br>
<p># The Hostfile for Open MPI
<br>
<p># specify number of slots for processes to run locally.
<br>
#localhost slots=12
<br>
#x.x.x.16 slots=12 max-slots=12
<br>
#x.x.x.17 slots=12 max-slots=12
<br>
#x.x.x.18 slots=12 max-slots=12
<br>
#x.x.1x.19 slots=12 max-slots=12
<br>
#x.x.x.20 slots=12 max-slots=12
<br>
#x.x.x.55 slots=46 max-slots=46
<br>
#x.x.x.56 slots=46 max-slots=46
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
<p># The following slave nodes are available to this machine:
<br>
x.x.x.24
<br>
x.x.x.26
<br>
x.x.x.28
<br>
x.x.x.29
<br>
x.x.x.30
<br>
x.x.x.41
<br>
x.x.x.101
<br>
x.x.x.100
<br>
x.x.x.102
<br>
x.x.x.103
<br>
<p>//******************************************************************
<br>
<p>this is how my .bashrc looks like on each node:
<br>
<p>$ cat ~/.bashrc
<br>
<p># .bashrc
<br>
<p># Source global definitions
<br>
if [ -f /etc/bashrc ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;. /etc/bashrc
<br>
fi
<br>
<p># User specific aliases and functions
<br>
umask 077
<br>
<p>export PSM_SHAREDCONTEXTS_MAX=20
<br>
<p>#export PATH=/usr/lib64/openmpi/bin${PATH:+:$PATH}
<br>
export PATH=/usr/OPENMPI/openmpi-1.7.2/bin${PATH:+:$PATH}
<br>
<p>#export LD_LIBRARY_PATH=/usr/lib64/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
<br>
export LD_LIBRARY_PATH=/usr/OPENMPI/openmpi-1.7.2/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
<br>
<p>export PATH=&quot;$PATH&quot;:/bin/:/usr/lib/:/usr/lib:/usr:/usr/
<br>
<p>//******************************************************************
<br>
<p>$ mpic++ test.cpp -o test
<br>
<p>$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode ./test
<br>
<p>//******************************************************************
<br>
<p>These nodes are running 2.6.32-358.2.1.el6.x86_64 release
<br>
<p>$ uname
<br>
Linux
<br>
$ uname -r
<br>
2.6.32-358.2.1.el6.x86_64
<br>
$ cat /etc/issue
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
<p>//******************************************************************
<br>
<p>Now, if I install openmpi 1.7.2 on each node separately then I can only use it on either first 7 nodes or last 4 nodes but not on all of them.
<br>
<p>//******************************************************************
<br>
<p>$ gunzip -c openmpi-1.7.2.tar.gz | tar xf -
<br>
<p>$ cd openmpi-1.7.2
<br>
<p>$ ./configure --prefix=/usr/OPENMPI/openmpi-1.7.2 --enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
<br>
<p>$ make all install
<br>
<p>//******************************************************************
<br>
<p>This is the error message that i am receiving:
<br>
<p><p>$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode ./test
<br>
<p>[SERVER-2:05284] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0/0
<br>
[SERVER-2:05284] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0
<br>
[SERVER-2:05284] top: openmpi-sessions-mpidemo_at_SERVER-2_0
<br>
[SERVER-2:05284] tmp: /tmp
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
[SERVER-3:28993] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0/1
<br>
[SERVER-3:28993] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0
<br>
[SERVER-3:28993] top: openmpi-sessions-mpidemo_at_SERVER-3_0
<br>
[SERVER-3:28993] tmp: /tmp
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
[SERVER-6:09087] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0/4
<br>
[SERVER-6:09087] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0
<br>
[SERVER-6:09087] top: openmpi-sessions-mpidemo_at_SERVER-6_0
<br>
[SERVER-6:09087] tmp: /tmp
<br>
[SERVER-7:32563] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0/5
<br>
[SERVER-7:32563] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0
<br>
[SERVER-7:32563] top: openmpi-sessions-mpidemo_at_SERVER-7_0
<br>
[SERVER-7:32563] tmp: /tmp
<br>
[SERVER-4:15711] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0/2
<br>
[SERVER-4:15711] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0
<br>
[SERVER-4:15711] top: openmpi-sessions-mpidemo_at_SERVER-4_0
<br>
[SERVER-4:15711] tmp: /tmp
<br>
[sv-1:45701] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0/8
<br>
[sv-1:45701] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0
<br>
[sv-1:45701] top: openmpi-sessions-mpidemo_at_sv-1_0
<br>
[sv-1:45701] tmp: /tmp
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
[sv-3:08352] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0/9
<br>
[sv-3:08352] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0
<br>
[sv-3:08352] top: openmpi-sessions-mpidemo_at_sv-3_0
<br>
[sv-3:08352] tmp: /tmp
<br>
[SERVER-5:12534] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0/3
<br>
[SERVER-5:12534] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0
<br>
[SERVER-5:12534] top: openmpi-sessions-mpidemo_at_SERVER-5_0
<br>
[SERVER-5:12534] tmp: /tmp
<br>
[SERVER-14:08399] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0/6
<br>
[SERVER-14:08399] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0
<br>
[SERVER-14:08399] top: openmpi-sessions-mpidemo_at_SERVER-14_0
<br>
[SERVER-14:08399] tmp: /tmp
<br>
[sv-4:11802] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0/10
<br>
[sv-4:11802] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0
<br>
[sv-4:11802] top: openmpi-sessions-mpidemo_at_sv-4_0
<br>
[sv-4:11802] tmp: /tmp
<br>
[sv-2:07503] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0/7
<br>
[sv-2:07503] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0
<br>
[sv-2:07503] top: openmpi-sessions-mpidemo_at_sv-2_0
<br>
[sv-2:07503] tmp: /tmp
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYNODE  Ranking policy: NODE  Binding policy: NONE[NODE]  Cpu set: NULL  PPR: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0    New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 10
<br>
<p>&nbsp;Data for node: SERVER-2         Launch id: -1    State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],0]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 15    Max slots: 15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-15    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.24         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],1]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 3    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 3    Max slots: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.26         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],2]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 15    Max slots: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.28         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],3]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 17    Max slots: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.29         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],4]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 15    Max slots: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.30         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],5]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 17    Max slots: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.41         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],6]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 47    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],6]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.101         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],7]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 47    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],7]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.100         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],8]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 47    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],8]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
<p>&nbsp;Data for node: x.x.x.102         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],9]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 23    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 23    Max slots: 22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
<br>
[sv-1:45712] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1/8
<br>
[sv-1:45712] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1
<br>
[sv-1:45712] top: openmpi-sessions-mpidemo_at_sv-1_0
<br>
[sv-1:45712] tmp: /tmp
<br>
[SERVER-14:08412] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1/6
<br>
[SERVER-14:08412] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1
<br>
[SERVER-14:08412] top: openmpi-sessions-mpidemo_at_SERVER-14_0
<br>
[SERVER-14:08412] tmp: /tmp
<br>
[SERVER-2:05291] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1/0
<br>
[SERVER-2:05291] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1
<br>
[SERVER-2:05291] top: openmpi-sessions-mpidemo_at_SERVER-2_0
<br>
[SERVER-2:05291] tmp: /tmp
<br>
[SERVER-4:15726] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1/2
<br>
[SERVER-4:15726] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1
<br>
[SERVER-4:15726] top: openmpi-sessions-mpidemo_at_SERVER-4_0
<br>
[SERVER-4:15726] tmp: /tmp
<br>
[SERVER-6:09100] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1/4
<br>
[SERVER-6:09100] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1
<br>
[SERVER-6:09100] top: openmpi-sessions-mpidemo_at_SERVER-6_0
<br>
[SERVER-6:09100] tmp: /tmp
<br>
[SERVER-7:32576] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1/5
<br>
[SERVER-7:32576] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1
<br>
[SERVER-7:32576] top: openmpi-sessions-mpidemo_at_SERVER-7_0
<br>
[SERVER-7:32576] tmp: /tmp
<br>
[sv-3:08363] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1/9
<br>
[sv-3:08363] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1
<br>
[sv-3:08363] top: openmpi-sessions-mpidemo_at_sv-3_0
<br>
[sv-3:08363] tmp: /tmp
<br>
[sv-2:07514] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1/7
<br>
[sv-2:07514] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1
<br>
[sv-2:07514] top: openmpi-sessions-mpidemo_at_sv-2_0
<br>
[sv-2:07514] tmp: /tmp
<br>
[SERVER-5:12548] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1/3
<br>
[SERVER-5:12548] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1
<br>
[SERVER-5:12548] top: openmpi-sessions-mpidemo_at_SERVER-5_0
<br>
[SERVER-5:12548] tmp: /tmp
<br>
[SERVER-3:29009] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1/1
<br>
[SERVER-3:29009] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1
<br>
[SERVER-3:29009] top: openmpi-sessions-mpidemo_at_SERVER-3_0
<br>
[SERVER-3:29009] tmp: /tmp
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 10
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, SERVER-2, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 5291)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, x.x.x.24, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 29009)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, x.x.x.26, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 15726)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, x.x.x.28, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 12548)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, x.x.x.29, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 9100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (5, x.x.x.30, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32576)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (6, x.x.x.41, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8412)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (7, x.x.x.101, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7514)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (8, x.x.x.100, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 45712)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (9, x.x.x.102, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8363)
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
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[SERVER-2:5291] *** An error occurred in MPI_Init
<br>
[SERVER-2:5291] *** reported by process [140508871983105,140505560121344]
<br>
[SERVER-2:5291] *** on a NULL communicator
<br>
[SERVER-2:5291] *** Unknown error
<br>
[SERVER-2:5291] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[SERVER-2:5291] ***    and potentially your MPI job)
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: SERVER-2
<br>
&nbsp;&nbsp;PID:        5291
<br>
--------------------------------------------------------------------------
<br>
[sv-1][[50535,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
<br>
[sv-3][[50535,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
<br>
[sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
<br>
[sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
<br>
[sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
<br>
[sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
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
<p>&nbsp;&nbsp;Process 1 ([[50535,1],8]) is on host: sv-1
<br>
&nbsp;&nbsp;Process 2 ([[50535,1],0]) is on host: SERVER-2
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm tcp
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&nbsp;&nbsp;&nbsp;available.
<br>
&nbsp;* Run your application with MPI_THREAD_SINGLE.
<br>
&nbsp;* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&nbsp;&nbsp;&nbsp;if using MTL-based communications) to see exactly which
<br>
&nbsp;&nbsp;&nbsp;communication plugins were considered and/or discarded.
<br>
--------------------------------------------------------------------------
<br>
[sv-2][[50535,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
<br>
[sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
<br>
[sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
<br>
[SERVER-2:05284] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-2:05284] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-4:11802] sess_dir_finalize: job session dir not empty - leaving
<br>
[SERVER-14:08399] sess_dir_finalize: job session dir not empty - leaving
<br>
[SERVER-6:09087] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-6:09087] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-4:15711] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-4:15711] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-6:09087] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
[SERVER-7:32563] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-7:32563] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-5:12534] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-5:12534] sess_dir_finalize: proc session dir not empty - leaving
<br>
[SERVER-7:32563] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
exiting with status 0
<br>
exiting with status 0
<br>
[SERVER-4:15711] sess_dir_finalize: job session dir not empty - leaving
<br>
[SERVER-3:28993] sess_dir_finalize: proc session dir not empty - leaving
<br>
exiting with status 0
<br>
[SERVER-3:28993] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-3:08352] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-3:08352] sess_dir_finalize: job session dir not empty - leaving
<br>
[sv-1:45701] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-1:45701] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
exiting with status 0
<br>
[sv-2:07503] sess_dir_finalize: proc session dir not empty - leaving
<br>
[sv-2:07503] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
[SERVER-5:12534] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
[SERVER-3:28993] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 0
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 6 with PID 8412 on
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
[SERVER-2:05284] 6 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
<br>
[SERVER-2:05284] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[SERVER-2:05284] 9 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
<br>
[SERVER-2:05284] 9 more processes have sent help message help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
<br>
[SERVER-2:05284] 2 more processes have sent help message help-mca-bml-r2.txt / unreachable proc
<br>
[SERVER-2:05284] 2 more processes have sent help message help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
<br>
[SERVER-2:05284] sess_dir_finalize: job session dir not empty - leaving
<br>
exiting with status 1
<br>
<p>//******************************************************************
<br>
<p>Any feedback will be helpful. Thank you!
<br>
<p>Mr. Beans
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22436.php">Hugo Gagnon: "[OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22434.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22433.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22437.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22437.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
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
