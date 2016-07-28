<?
$subject_val = "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  3 07:34:26 2013" -->
<!-- isoreceived="20130803113426" -->
<!-- sent="Sat, 3 Aug 2013 04:34:19 -0700" -->
<!-- isosent="20130803113419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications." -->
<!-- id="4A4A2D4D-94A7-4240-96BE-59173650C80F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51FCE243.7090504_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-03 07:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22428.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22426.php">RoboBeans: "[OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22426.php">RoboBeans: "[OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22428.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22428.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like SERVER-2 cannot talk to your x.x.x.100 machine. I note that you have some entries at the end of the hostfile that I don't understand - a list of hosts that can be reached? And I see that your x.x.x.22 machine isn't on it. Is that SERVER-2 by chance?
<br>
<p>Our hostfile parsing changed between the release series, but I know we never consciously supported the syntax you show below where you list capabilities, and then re-list the hosts in an apparent attempt to filter which ones can actually be used. It is possible that the 1.5 series somehow used that to exclude the 22 machine, and that the 1.7 parser now doesn't do that.
<br>
<p>If you only include machines you actually intend to use in your hostfile, does the 1.7 series work?
<br>
<p>On Aug 3, 2013, at 3:58 AM, RoboBeans &lt;robobeans_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed openmpi 1.5.4 on 11 node cluster using &quot;yum install openmpi openmpi-devel&quot; and everything seems to be working fine. For testing I am using this test program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat test.cpp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int id, np;
</span><br>
<span class="quotelev1">&gt;   char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;   int namelen;
</span><br>
<span class="quotelev1">&gt;   int i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;id);
</span><br>
<span class="quotelev1">&gt;   MPI_Get_processor_name (name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   printf (&quot;This is Process %2d out of %2d running on host %s\n&quot;, id, np, name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   return (0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and my hosts file look like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat mpi_hostfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # The Hostfile for Open MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # specify number of slots for processes to run locally.
</span><br>
<span class="quotelev1">&gt; #localhost slots=12
</span><br>
<span class="quotelev1">&gt; #x.x.x.16 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt; #x.x.x.17 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt; #x.x.x.18 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt; #x.x.1x.19 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt; #x.x.x.20 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt; #x.x.x.55 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt; #x.x.x.56 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; x.x.x.22 slots=15 max-slots=15
</span><br>
<span class="quotelev1">&gt; x.x.x.24 slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; x.x.x.26 slots=14 max-slots=14
</span><br>
<span class="quotelev1">&gt; x.x.x.28 slots=16 max-slots=16
</span><br>
<span class="quotelev1">&gt; x.x.x.29 slots=14 max-slots=14
</span><br>
<span class="quotelev1">&gt; x.x.x.30 slots=16 max-slots=16
</span><br>
<span class="quotelev1">&gt; x.x.x.41 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt; x.x.x.101 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt; x.x.x.100 slots=46 max-slots=46
</span><br>
<span class="quotelev1">&gt; x.x.x.102 slots=22 max-slots=22
</span><br>
<span class="quotelev1">&gt; x.x.x.103 slots=22 max-slots=22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # The following slave nodes are available to this machine:
</span><br>
<span class="quotelev1">&gt; x.x.x.24
</span><br>
<span class="quotelev1">&gt; x.x.x.26
</span><br>
<span class="quotelev1">&gt; x.x.x.28
</span><br>
<span class="quotelev1">&gt; x.x.x.29
</span><br>
<span class="quotelev1">&gt; x.x.x.30
</span><br>
<span class="quotelev1">&gt; x.x.x.41
</span><br>
<span class="quotelev1">&gt; x.x.x.101
</span><br>
<span class="quotelev1">&gt; x.x.x.100
</span><br>
<span class="quotelev1">&gt; x.x.x.102
</span><br>
<span class="quotelev1">&gt; x.x.x.103
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is how my .bashrc looks like on each node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat ~/.bashrc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # .bashrc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Source global definitions
</span><br>
<span class="quotelev1">&gt; if [ -f /etc/bashrc ]; then
</span><br>
<span class="quotelev1">&gt;     . /etc/bashrc
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # User specific aliases and functions
</span><br>
<span class="quotelev1">&gt; umask 077
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PSM_SHAREDCONTEXTS_MAX=20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #export PATH=/usr/lib64/openmpi/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/OPENMPI/openmpi-1.7.2/bin${PATH:+:$PATH}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #export LD_LIBRARY_PATH=/usr/lib64/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/usr/OPENMPI/openmpi-1.7.2/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=&quot;$PATH&quot;:/bin/:/usr/lib/:/usr/lib:/usr:/usr/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpic++ test.cpp -o test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode ./test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These nodes are running 2.6.32-358.2.1.el6.x86_64 release
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname
</span><br>
<span class="quotelev1">&gt; Linux
</span><br>
<span class="quotelev1">&gt; $ uname -r
</span><br>
<span class="quotelev1">&gt; 2.6.32-358.2.1.el6.x86_64
</span><br>
<span class="quotelev1">&gt; $ cat /etc/issue
</span><br>
<span class="quotelev1">&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt; Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, if I install openmpi 1.7.2 on each node separately then I can only use it on either first 7 nodes or last 4 nodes but not on all of them.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gunzip -c openmpi-1.7.2.tar.gz | tar xf -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cd openmpi-1.7.2
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/usr/OPENMPI/openmpi-1.7.2 --enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the error message that i am receiving:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -d --display-map -np 10 --hostfile mpi_hostfile --bynode ./test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0/0
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/0
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt; Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt; Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt; Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt; [SERVER-3:28993] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0/1
</span><br>
<span class="quotelev1">&gt; [SERVER-3:28993] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/0
</span><br>
<span class="quotelev1">&gt; [SERVER-3:28993] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev1">&gt; [SERVER-3:28993] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt; Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt; Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09087] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0/4
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09087] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/0
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09087] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09087] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32563] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0/5
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32563] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/0
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32563] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32563] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15711] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0/2
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15711] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/0
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15711] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15711] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [sv-1:45701] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0/8
</span><br>
<span class="quotelev1">&gt; [sv-1:45701] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/0
</span><br>
<span class="quotelev1">&gt; [sv-1:45701] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev1">&gt; [sv-1:45701] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; CentOS release 6.4 (Final)
</span><br>
<span class="quotelev1">&gt; Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt; [sv-3:08352] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0/9
</span><br>
<span class="quotelev1">&gt; [sv-3:08352] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/0
</span><br>
<span class="quotelev1">&gt; [sv-3:08352] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev1">&gt; [sv-3:08352] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12534] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0/3
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12534] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/0
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12534] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12534] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08399] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0/6
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08399] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/0
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08399] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08399] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [sv-4:11802] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0/10
</span><br>
<span class="quotelev1">&gt; [sv-4:11802] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-4_0/50535/0
</span><br>
<span class="quotelev1">&gt; [sv-4:11802] top: openmpi-sessions-mpidemo_at_sv-4_0
</span><br>
<span class="quotelev1">&gt; [sv-4:11802] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [sv-2:07503] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0/7
</span><br>
<span class="quotelev1">&gt; [sv-2:07503] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/0
</span><br>
<span class="quotelev1">&gt; [sv-2:07503] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev1">&gt; [sv-2:07503] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYNODE  Ranking policy: NODE  Binding policy: NONE[NODE]  Cpu set: NULL  PPR: NULL
</span><br>
<span class="quotelev1">&gt;      Num new daemons: 0    New daemon starting vpid INVALID
</span><br>
<span class="quotelev1">&gt;      Num nodes: 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: SERVER-2         Launch id: -1    State: 2
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],0]    Daemon launched: True
</span><br>
<span class="quotelev1">&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 15    Max slots: 15
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],0]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-15    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.24         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],1]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 3    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 3    Max slots: 2
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],1]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 1
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.26         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],2]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 15    Max slots: 14
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],2]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 2
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.28         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],3]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 17    Max slots: 16
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],3]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 3
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.29         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],4]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 15    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 15    Max slots: 14
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],4]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.30         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],5]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 17    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 17    Max slots: 16
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],5]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 5
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.41         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],6]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],6]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 6
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.101         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],7]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],7]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 7
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.100         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],8]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 47    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 47    Max slots: 46
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],8]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: x.x.x.102         Launch id: -1    State: 0
</span><br>
<span class="quotelev1">&gt;      Daemon: [[50535,0],9]    Daemon launched: False
</span><br>
<span class="quotelev1">&gt;      Num slots: 23    Slots in use: 1    Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;      Num slots allocated: 23    Max slots: 22
</span><br>
<span class="quotelev1">&gt;      Username on node: NULL
</span><br>
<span class="quotelev1">&gt;      Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;      Data for proc: [[50535,1],9]
</span><br>
<span class="quotelev1">&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 9
</span><br>
<span class="quotelev1">&gt;          State: INITIALIZED    Restarts: 0    App_context: 0    Locale: 0-7    Binding: NULL[0]
</span><br>
<span class="quotelev1">&gt; [sv-1:45712] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1/8
</span><br>
<span class="quotelev1">&gt; [sv-1:45712] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-1_0/50535/1
</span><br>
<span class="quotelev1">&gt; [sv-1:45712] top: openmpi-sessions-mpidemo_at_sv-1_0
</span><br>
<span class="quotelev1">&gt; [sv-1:45712] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08412] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1/6
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08412] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-14_0/50535/1
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08412] top: openmpi-sessions-mpidemo_at_SERVER-14_0
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08412] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05291] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1/0
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05291] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-2_0/50535/1
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05291] top: openmpi-sessions-mpidemo_at_SERVER-2_0
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05291] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15726] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1/2
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15726] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-4_0/50535/1
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15726] top: openmpi-sessions-mpidemo_at_SERVER-4_0
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15726] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09100] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1/4
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09100] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-6_0/50535/1
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09100] top: openmpi-sessions-mpidemo_at_SERVER-6_0
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09100] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32576] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1/5
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32576] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-7_0/50535/1
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32576] top: openmpi-sessions-mpidemo_at_SERVER-7_0
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32576] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [sv-3:08363] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1/9
</span><br>
<span class="quotelev1">&gt; [sv-3:08363] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-3_0/50535/1
</span><br>
<span class="quotelev1">&gt; [sv-3:08363] top: openmpi-sessions-mpidemo_at_sv-3_0
</span><br>
<span class="quotelev1">&gt; [sv-3:08363] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [sv-2:07514] procdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1/7
</span><br>
<span class="quotelev1">&gt; [sv-2:07514] jobdir: /tmp/openmpi-sessions-mpidemo_at_sv-2_0/50535/1
</span><br>
<span class="quotelev1">&gt; [sv-2:07514] top: openmpi-sessions-mpidemo_at_sv-2_0
</span><br>
<span class="quotelev1">&gt; [sv-2:07514] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12548] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1/3
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12548] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-5_0/50535/1
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12548] top: openmpi-sessions-mpidemo_at_SERVER-5_0
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12548] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [SERVER-3:29009] procdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1/1
</span><br>
<span class="quotelev1">&gt; [SERVER-3:29009] jobdir: /tmp/openmpi-sessions-mpidemo_at_SERVER-3_0/50535/1
</span><br>
<span class="quotelev1">&gt; [SERVER-3:29009] top: openmpi-sessions-mpidemo_at_SERVER-3_0
</span><br>
<span class="quotelev1">&gt; [SERVER-3:29009] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 10
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, SERVER-2, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 5291)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, x.x.x.24, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 29009)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (2, x.x.x.26, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 15726)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (3, x.x.x.28, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 12548)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (4, x.x.x.29, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 9100)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (5, x.x.x.30, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 32576)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (6, x.x.x.41, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8412)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (7, x.x.x.101, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 7514)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (8, x.x.x.100, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 45712)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (9, x.x.x.102, /usr2/mpidemo/dev/DISTRIBUTED_COMPUTING/./test, 8363)
</span><br>
<span class="quotelev1">&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [SERVER-2:5291] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [SERVER-2:5291] *** reported by process [140508871983105,140505560121344]
</span><br>
<span class="quotelev1">&gt; [SERVER-2:5291] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [SERVER-2:5291] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [SERVER-2:5291] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [SERVER-2:5291] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;   Local host: SERVER-2
</span><br>
<span class="quotelev1">&gt;   PID:        5291
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sv-1][[50535,1],8][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev1">&gt; [sv-3][[50535,1],9][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev1">&gt; [sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt; [sv-3][[50535,1],9][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt; [sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt; [sv-1][[50535,1],8][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[50535,1],8]) is on host: sv-1
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[50535,1],0]) is on host: SERVER-2
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib self sm tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev1">&gt; from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev1">&gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev1">&gt; allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev1">&gt;    available.
</span><br>
<span class="quotelev1">&gt;  * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;  * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt;    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt;    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sv-2][[50535,1],7][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[50535,1],0]
</span><br>
<span class="quotelev1">&gt; [sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt; [sv-2][[50535,1],7][btl_tcp_proc.c:128:mca_btl_tcp_proc_create] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [sv-4:11802] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-14:08399] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09087] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09087] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15711] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15711] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-6:09087] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32563] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32563] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12534] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12534] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-7:32563] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; [SERVER-4:15711] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [SERVER-3:28993] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; [SERVER-3:28993] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [sv-3:08352] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [sv-3:08352] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [sv-1:45701] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [sv-1:45701] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; [sv-2:07503] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [sv-2:07503] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; [SERVER-5:12534] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; [SERVER-3:28993] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 6 with PID 8412 on
</span><br>
<span class="quotelev1">&gt; node x.x.x.41 exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] 6 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] 9 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] 9 more processes have sent help message help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] 2 more processes have sent help message help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] 2 more processes have sent help message help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev1">&gt; [SERVER-2:05284] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //******************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any feedback will be helpful. Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mr. Beans
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22428.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22426.php">RoboBeans: "[OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22426.php">RoboBeans: "[OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22428.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Reply:</strong> <a href="22428.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
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
