<?
$subject_val = "[OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  3 06:58:18 2013" -->
<!-- isoreceived="20130803105818" -->
<!-- sent="Sat, 03 Aug 2013 03:58:11 -0700" -->
<!-- isosent="20130803105811" -->
<!-- name="RoboBeans" -->
<!-- email="robobeans_at_[hidden]" -->
<!-- subject="[OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications." -->
<!-- id="51FCE243.7090504_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.<br>
<strong>From:</strong> RoboBeans (<em>robobeans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-03 06:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22425.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I have installed openmpi 1.5.4 on 11 node cluster using &quot;yum install 
<br>
openmpi openmpi-devel&quot; and everything seems to be working fine. For 
<br>
testing I am using this test program
<br>
<p>//******************************************************************
<br>
<p>*$ cat test.cpp*
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int id, np;
<br>
&nbsp;&nbsp;&nbsp;char name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;int namelen;
<br>
&nbsp;&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;np);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;id);
<br>
&nbsp;&nbsp;&nbsp;MPI_Get_processor_name (name, &amp;namelen);
<br>
<p>&nbsp;&nbsp;&nbsp;printf (&quot;This is Process %2d out of %2d running on host %s\n&quot;, id, 
<br>
np, name);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;&nbsp;return (0);
<br>
}
<br>
<p>//******************************************************************
<br>
<p>and my hosts file look like this:
<br>
<p>*$ cat mpi_hostfile*
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
<p>*$ cat ~/.bashrc*
<br>
<p># .bashrc
<br>
<p># Source global definitions
<br>
if [ -f /etc/bashrc ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. /etc/bashrc
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
<p>#export 
<br>
LD_LIBRARY_PATH=/usr/lib64/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
<br>
export 
<br>
LD_LIBRARY_PATH=/usr/OPENMPI/openmpi-1.7.2/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
<br>
<p>export PATH=&quot;$PATH&quot;:/bin/:/usr/lib/:/usr/lib:/usr:/usr/
<br>
<p>//******************************************************************
<br>
<p>*$ mpic++ test.cpp -o test*
<br>
<p>*$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode ./test*
<br>
<p>//******************************************************************
<br>
<p>These nodes are running 2.6.32-358.2.1.el6.x86_64 release
<br>
<p>*$ **uname*
<br>
Linux
<br>
*$ **uname -r*
<br>
2.6.32-358.2.1.el6.x86_64
<br>
*$ cat /etc/issue*
<br>
CentOS release 6.4 (Final)
<br>
Kernel \r on an \m
<br>
<p>//******************************************************************
<br>
<p>Now, if I install openmpi 1.7.2 on each node separately then I can only 
<br>
use it on either first 7 nodes or last 4 nodes but not on all of them.
<br>
<p>//******************************************************************
<br>
<p>*$ gunzip -c openmpi-1.7.2.tar.gz | tar xf -**
<br>
**
<br>
**$ cd openmpi-1.7.2**
<br>
****
<br>
**$ ./configure --prefix=/usr/OPENMPI/openmpi-1.7.2 
<br>
--enable-event-thread-support --enable-opal-multi-threads 
<br>
--enable-orte-progress-threads --enable-mpi-thread-multiple**
<br>
**
<br>
**$ make all install*
<br>
<p>//******************************************************************
<br>
<p>This is the error message that i am receiving:
<br>
<p><p>*$ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode ./test*
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
[SERVER-14:08399] procdir: 
<br>
/tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0/6
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],0]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 15    Max slots: 15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-15    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.24         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],1]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 3    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 3    Max slots: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.26         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],2]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 15    Max slots: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.28         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],3]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 17    Max slots: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.29         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],4]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 15    Max slots: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.30         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],5]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 17    Max slots: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.41         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],6]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 47    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],6]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.101         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],7]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 47    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],7]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.100         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],8]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 47    Max slots: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],8]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
<p>&nbsp;&nbsp;Data for node: x.x.x.102         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[50535,0],9]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 23    Slots in use: 1    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 23    Max slots: 22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[50535,1],9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    Restarts: 0    App_context: 0 Locale: 
<br>
0-7    Binding: NULL[0]
<br>
[sv-1:45712] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1/8
<br>
[sv-1:45712] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1
<br>
[sv-1:45712] top: openmpi-sessions-mpidemo_at_sv-1_0
<br>
[sv-1:45712] tmp: /tmp
<br>
[SERVER-14:08412] procdir: 
<br>
/tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1/6
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
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 5291)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, x.x.x.24, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 29009)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, x.x.x.26, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 15726)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, x.x.x.28, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 12548)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, x.x.x.29, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 9100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (5, x.x.x.30, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32576)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (6, x.x.x.41, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8412)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (7, x.x.x.101, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7514)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (8, x.x.x.100, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 45712)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (9, x.x.x.102, 
<br>
/usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8363)
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
[SERVER-2:5291] *** An error occurred in MPI_Init
<br>
[SERVER-2:5291] *** reported by process [140508871983105,140505560121344]
<br>
[SERVER-2:5291] *** on a NULL communicator
<br>
[SERVER-2:5291] *** Unknown error
<br>
[SERVER-2:5291] *** MPI_ERRORS_ARE_FATAL (processes in this communicator 
<br>
will now abort,
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
<p>&nbsp;&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;&nbsp;Local host: SERVER-2
<br>
&nbsp;&nbsp;&nbsp;PID:        5291
<br>
--------------------------------------------------------------------------
<br>
[sv-1][[50535,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
<br>
[btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
<br>
[sv-3][[50535,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
<br>
[btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
<br>
[sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
[sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
[sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
[sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
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
<p>&nbsp;&nbsp;&nbsp;Process 1 ([[50535,1],8]) is on host: sv-1
<br>
&nbsp;&nbsp;&nbsp;Process 2 ([[50535,1],0]) is on host: SERVER-2
<br>
&nbsp;&nbsp;&nbsp;BTLs attempted: openib self sm tcp
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
[sv-2][[50535,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create] 
<br>
[btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
<br>
[sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
<br>
[sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] 
<br>
mca_base_modex_recv: failed with return value=-13
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
[SERVER-2:05284] 6 more processes have sent help message 
<br>
help-mpi-runtime / mpi_init:startup:internal-failure
<br>
[SERVER-2:05284] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
<br>
see all help / error messages
<br>
[SERVER-2:05284] 9 more processes have sent help message 
<br>
help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
<br>
[SERVER-2:05284] 9 more processes have sent help message 
<br>
help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
<br>
[SERVER-2:05284] 2 more processes have sent help message 
<br>
help-mca-bml-r2.txt / unreachable proc
<br>
[SERVER-2:05284] 2 more processes have sent help message 
<br>
help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22425.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22427.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
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
