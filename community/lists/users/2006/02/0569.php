<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 23:49:30 2006" -->
<!-- isoreceived="20060203044930" -->
<!-- sent="Thu, 2 Feb 2006 21:49:01 -0700" -->
<!-- isosent="20060203044901" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] does btl_openib work ?" -->
<!-- id="89454A8B-5EE0-4408-9925-C5FCB503968D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1138932294.22996.149.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 23:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0570.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0568.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0568.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Reply:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jean,
<br>
<p>I suspect the problem may be in the bcast,  
<br>
ompi_coll_tuned_bcast_intra_basic_linear. Can you try the same run using
<br>
<p>mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np   
<br>
2 -mca coll self,basic -d xterm -e gdb PMB-MPI1
<br>
<p><p>This will use the basic collectives and may isolate the problem.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><p>On Feb 2, 2006, at 7:04 PM, Jean-Christophe Hugly wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2006-02-02 at 15:19 -0700, Galen M. Shipman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible for you to get a stack trace where this is hanging?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might try:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np
</span><br>
<span class="quotelev2">&gt;&gt; 2 -d xterm -e gdb PMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did that, and when it was hanging I control-C'd in each gdb and  
</span><br>
<span class="quotelev1">&gt; asked
</span><br>
<span class="quotelev1">&gt; for a bt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the debug output from the mpirun command:
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ============================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np 2
</span><br>
<span class="quotelev1">&gt; -d xterm -e gdb PMB-MPI1
</span><br>
<span class="quotelev1">&gt; [bench1:16017] procdir: (null)
</span><br>
<span class="quotelev1">&gt; [bench1:16017] jobdir: (null)
</span><br>
<span class="quotelev1">&gt; [bench1:16017]
</span><br>
<span class="quotelev1">&gt; unidir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe
</span><br>
<span class="quotelev1">&gt; [bench1:16017] top: openmpi-sessions-root_at_bench1_0
</span><br>
<span class="quotelev1">&gt; [bench1:16017] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [bench1:16017] connect_uni: contact info read
</span><br>
<span class="quotelev1">&gt; [bench1:16017] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [bench1:16017] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [bench1:16017]  tmpdir /tmp
</span><br>
<span class="quotelev1">&gt; [bench1:16017]  universe default-universe-16017
</span><br>
<span class="quotelev1">&gt; [bench1:16017]  user root
</span><br>
<span class="quotelev1">&gt; [bench1:16017]  host bench1
</span><br>
<span class="quotelev1">&gt; [bench1:16017]  jobid 0
</span><br>
<span class="quotelev1">&gt; [bench1:16017]  procid 0
</span><br>
<span class="quotelev1">&gt; [bench1:16017]
</span><br>
<span class="quotelev1">&gt; procdir: /tmp/openmpi-sessions-root_at_bench1_0/default- 
</span><br>
<span class="quotelev1">&gt; universe-16017/0/0
</span><br>
<span class="quotelev1">&gt; [bench1:16017]
</span><br>
<span class="quotelev1">&gt; jobdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017/0
</span><br>
<span class="quotelev1">&gt; [bench1:16017]
</span><br>
<span class="quotelev1">&gt; unidir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017
</span><br>
<span class="quotelev1">&gt; [bench1:16017] top: openmpi-sessions-root_at_bench1_0
</span><br>
<span class="quotelev1">&gt; [bench1:16017] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [bench1:16017] [0,0,0]
</span><br>
<span class="quotelev1">&gt; contact_file /tmp/openmpi-sessions-root_at_bench1_0/default- 
</span><br>
<span class="quotelev1">&gt; universe-16017/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [bench1:16017] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [bench1:16017] spawn: in job_state_callback(jobid = 1, state = 0x1)
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh:     /usr/bin/ssh -X &lt;template&gt; orted --debug
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 -- 
</span><br>
<span class="quotelev1">&gt; nodename
</span><br>
<span class="quotelev1">&gt; &lt;template&gt; --universe root_at_bench1:default-universe-16017 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --mpi-call- 
</span><br>
<span class="quotelev1">&gt; yield 0
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: launching on node bench2
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: bench2 is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: executing: /usr/bin/ssh -X bench2
</span><br>
<span class="quotelev1">&gt; PATH=/opt/ompi/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/opt/ompi/ 
</span><br>
<span class="quotelev1">&gt; lib:
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; /opt/ompi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; debug
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename
</span><br>
<span class="quotelev1">&gt; bench2 --universe root_at_bench1:default-universe-16017 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --mpi-call- 
</span><br>
<span class="quotelev1">&gt; yield 0
</span><br>
<span class="quotelev1">&gt; [bench2:16980] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [bench2:16980]  universe default-universe-16017
</span><br>
<span class="quotelev1">&gt; [bench2:16980]  user root
</span><br>
<span class="quotelev1">&gt; [bench2:16980]  host bench2
</span><br>
<span class="quotelev1">&gt; [bench2:16980]  jobid 0
</span><br>
<span class="quotelev1">&gt; [bench2:16980]  procid 1
</span><br>
<span class="quotelev1">&gt; [bench2:16980]
</span><br>
<span class="quotelev1">&gt; procdir: /tmp/openmpi-sessions-root_at_bench2_0/default- 
</span><br>
<span class="quotelev1">&gt; universe-16017/0/1
</span><br>
<span class="quotelev1">&gt; [bench2:16980]
</span><br>
<span class="quotelev1">&gt; jobdir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-16017/0
</span><br>
<span class="quotelev1">&gt; [bench2:16980]
</span><br>
<span class="quotelev1">&gt; unidir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-16017
</span><br>
<span class="quotelev1">&gt; [bench2:16980] top: openmpi-sessions-root_at_bench2_0
</span><br>
<span class="quotelev1">&gt; [bench2:16980] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: launching on node bench1
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: bench1 is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: reset
</span><br>
<span class="quotelev1">&gt; PATH: /opt/ompi/bin:/sbin:/usr/sbin:/usr/local/sbin:/opt/gnome/ 
</span><br>
<span class="quotelev1">&gt; sbin:/usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/ 
</span><br>
<span class="quotelev1">&gt; gnome/bin:/usr/lib/mit/bin:/usr/lib/mit/sbin:/opt/ompi/bin
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: reset LD_LIBRARY_PATH: /opt/ompi/lib
</span><br>
<span class="quotelev1">&gt; [bench1:16017] pls:rsh: executing: orted --debug --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.2 --num_procs 3 --vpid_start 0 --nodename bench1 --universe
</span><br>
<span class="quotelev1">&gt; root_at_bench1:default-universe-16017 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --mpi-call- 
</span><br>
<span class="quotelev1">&gt; yield 0
</span><br>
<span class="quotelev1">&gt; [bench1:16021] [0,0,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [bench1:16021]  universe default-universe-16017
</span><br>
<span class="quotelev1">&gt; [bench1:16021]  user root
</span><br>
<span class="quotelev1">&gt; [bench1:16021]  host bench1
</span><br>
<span class="quotelev1">&gt; [bench1:16021]  jobid 0
</span><br>
<span class="quotelev1">&gt; [bench1:16021]  procid 2
</span><br>
<span class="quotelev1">&gt; [bench1:16021]
</span><br>
<span class="quotelev1">&gt; procdir: /tmp/openmpi-sessions-root_at_bench1_0/default- 
</span><br>
<span class="quotelev1">&gt; universe-16017/0/2
</span><br>
<span class="quotelev1">&gt; [bench1:16021]
</span><br>
<span class="quotelev1">&gt; jobdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017/0
</span><br>
<span class="quotelev1">&gt; [bench1:16021]
</span><br>
<span class="quotelev1">&gt; unidir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017
</span><br>
<span class="quotelev1">&gt; [bench1:16021] top: openmpi-sessions-root_at_bench1_0
</span><br>
<span class="quotelev1">&gt; [bench1:16021] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; Warning: translation table syntax error: Unknown keysym name:  DRemove
</span><br>
<span class="quotelev1">&gt; Warning: ... found while parsing '&lt;Key&gt;DRemove: ignore()'
</span><br>
<span class="quotelev1">&gt; Warning: String to TranslationTable conversion encountered errors
</span><br>
<span class="quotelev1">&gt; Warning: translation table syntax error: Unknown keysym name:  DRemove
</span><br>
<span class="quotelev1">&gt; Warning: ... found while parsing '&lt;Key&gt;DRemove: ignore()'
</span><br>
<span class="quotelev1">&gt; Warning: String to TranslationTable conversion encountered errors
</span><br>
<span class="quotelev1">&gt; [bench1:16017] spawn: in job_state_callback(jobid = 1, state = 0x3)
</span><br>
<span class="quotelev1">&gt; [bench1:16017] Info: Setting up debugger process table for  
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, bench1, /usr/bin/xterm, 16025)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, bench2, /usr/bin/xterm, 16984)
</span><br>
<span class="quotelev1">&gt; [bench1:16017] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the output in one xterm:
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.3
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License,  
</span><br>
<span class="quotelev1">&gt; and you
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev1">&gt; conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-suse-linux&quot;...Using host  
</span><br>
<span class="quotelev1">&gt; libthread_db
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev1">&gt;  &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /root/SRC_PMB/PMB-MPI1
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 46912509890080 (LWP 16984)]
</span><br>
<span class="quotelev1">&gt; [bench2:16984] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [bench2:16984]  universe default-universe-16017
</span><br>
<span class="quotelev1">&gt; [bench2:16984]  user root
</span><br>
<span class="quotelev1">&gt; [bench2:16984]  host bench2
</span><br>
<span class="quotelev1">&gt; [bench2:16984]  jobid 1
</span><br>
<span class="quotelev1">&gt; [bench2:16984]  procid 0
</span><br>
<span class="quotelev1">&gt; [bench2:16984]
</span><br>
<span class="quotelev1">&gt; procdir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-160
</span><br>
<span class="quotelev1">&gt; 17/1/0
</span><br>
<span class="quotelev1">&gt; [bench2:16984]
</span><br>
<span class="quotelev1">&gt; jobdir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-1601
</span><br>
<span class="quotelev1">&gt; 7/1
</span><br>
<span class="quotelev1">&gt; [bench2:16984]
</span><br>
<span class="quotelev1">&gt; unidir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-1601
</span><br>
<span class="quotelev1">&gt; 7
</span><br>
<span class="quotelev1">&gt; [bench2:16984] top: openmpi-sessions-root_at_bench2_0
</span><br>
<span class="quotelev1">&gt; [bench2:16984] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [bench2:16984] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #    PALLAS MPI Benchmark Suite V2.2, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Date       : Thu Feb  2 09:51:32 2006
</span><br>
<span class="quotelev1">&gt; # Machine    : x86_64# System     : Linux
</span><br>
<span class="quotelev1">&gt; # Release    : 2.6.13-15-smp
</span><br>
<span class="quotelev1">&gt; # Version    : #7 SMP Mon Jan 30 12:05:45 PST 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Minimum message length in bytes:   0
</span><br>
<span class="quotelev1">&gt; # Maximum message length in bytes:   4194304
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype                   :   MPI_BYTE
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype for reductions    :   MPI_FLOAT
</span><br>
<span class="quotelev1">&gt; # MPI_Op                         :   MPI_SUM
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # PingPong
</span><br>
<span class="quotelev1">&gt; # PingPing
</span><br>
<span class="quotelev1">&gt; # Sendrecv
</span><br>
<span class="quotelev1">&gt; # Exchange
</span><br>
<span class="quotelev1">&gt; # Allreduce
</span><br>
<span class="quotelev1">&gt; # Reduce
</span><br>
<span class="quotelev1">&gt; # Reduce_scatter
</span><br>
<span class="quotelev1">&gt; # Allgather
</span><br>
<span class="quotelev1">&gt; # Allgatherv
</span><br>
<span class="quotelev1">&gt; # Alltoall
</span><br>
<span class="quotelev1">&gt; # Bcast
</span><br>
<span class="quotelev1">&gt; # Barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 46912509890080 (LWP 16984)]
</span><br>
<span class="quotelev1">&gt; mthca_poll_cq (ibcq=0x718820, ne=1, wc=0x7fffffd071a0) at cq.c:469
</span><br>
<span class="quotelev1">&gt; 469     cq.c: No such file or directory.
</span><br>
<span class="quotelev1">&gt;         in cq.c
</span><br>
<span class="quotelev1">&gt; (gdb) inf st
</span><br>
<span class="quotelev1">&gt; #0  mthca_poll_cq (ibcq=0x718820, ne=1, wc=0x7fffffd071a0) at cq.c:469
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaadef1a85 in mca_btl_openib_component_progress ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaaadde8f62 in mca_bml_r2_progress ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaaaec79c0 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; from /opt/ompi/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaaadac7255 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x00002aaaaea434c2 in ompi_coll_tuned_reduce_intra_basic_linear ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #6  0x00002aaaaea405e6 in  
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_nonoverlapping
</span><br>
<span class="quotelev1">&gt; ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #7  0x00002aaaaac06b17 in ompi_comm_nextcid ()
</span><br>
<span class="quotelev1">&gt; from /opt/ompi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x00002aaaaac0513b in ompi_comm_split ()
</span><br>
<span class="quotelev1">&gt; from /opt/ompi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #9  0x00002aaaaac2bcd8 in PMPI_Comm_split ()
</span><br>
<span class="quotelev1">&gt; from /opt/ompi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000403b81 in Set_Communicator ()
</span><br>
<span class="quotelev1">&gt; #11 0x000000000040385e in Init_Communicator ()
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000402e06 in main ()
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the output in the other xterm:
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ==========================
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.3
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License,  
</span><br>
<span class="quotelev1">&gt; and you
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev1">&gt; conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-suse-linux&quot;...Using host  
</span><br>
<span class="quotelev1">&gt; libthread_db
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev1">&gt;  &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /root/SRC_PMB/PMB-MPI1
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 46912509889280 (LWP 16025)]
</span><br>
<span class="quotelev1">&gt; [bench1:16025] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [bench1:16025]  universe default-universe-16017
</span><br>
<span class="quotelev1">&gt; [bench1:16025]  user root
</span><br>
<span class="quotelev1">&gt; [bench1:16025]  host bench1
</span><br>
<span class="quotelev1">&gt; [bench1:16025]  jobid 1
</span><br>
<span class="quotelev1">&gt; [bench1:16025]  procid 1
</span><br>
<span class="quotelev1">&gt; [bench1:16025]
</span><br>
<span class="quotelev1">&gt; procdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-160
</span><br>
<span class="quotelev1">&gt; 17/1/1
</span><br>
<span class="quotelev1">&gt; [bench1:16025]
</span><br>
<span class="quotelev1">&gt; jobdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-1601
</span><br>
<span class="quotelev1">&gt; 7/1
</span><br>
<span class="quotelev1">&gt; [bench1:16025]
</span><br>
<span class="quotelev1">&gt; unidir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-1601
</span><br>
<span class="quotelev1">&gt; 7
</span><br>
<span class="quotelev1">&gt; [bench1:16025] top: openmpi-sessions-root_at_bench1_0
</span><br>
<span class="quotelev1">&gt; [bench1:16025] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [bench1:16025] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 46912509889280 (LWP 16025)]
</span><br>
<span class="quotelev1">&gt; 0x00002aaaab493fc5 in pthread_spin_lock ()
</span><br>
<span class="quotelev1">&gt; from /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) inf st
</span><br>
<span class="quotelev1">&gt; #0  0x00002aaaab493fc5 in pthread_spin_lock ()
</span><br>
<span class="quotelev1">&gt; from /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaaeb50d3e in mthca_poll_cq (ibcq=0x8b4990, ne=1,
</span><br>
<span class="quotelev1">&gt;     wc=0x7fffffbe0290) at cq.c:454
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaaaddf0ce0 in mca_btl_openib_component_progress ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaadce7f62 in mca_bml_r2_progress ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaaaaec79c0 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; from /opt/ompi/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x00002aaaad9c6255 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #6  0x00002aaaae940ba9 in ompi_coll_tuned_bcast_intra_basic_linear ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #7  0x00002aaaae52830f in mca_coll_basic_allgather_intra ()
</span><br>
<span class="quotelev1">&gt;    from /opt/ompi/lib/openmpi/mca_coll_basic.so
</span><br>
<span class="quotelev1">&gt; #8  0x00002aaaaac04ee3 in ompi_comm_split ()
</span><br>
<span class="quotelev1">&gt; from /opt/ompi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #9  0x00002aaaaac2bcd8 in PMPI_Comm_split ()
</span><br>
<span class="quotelev1">&gt; from /opt/ompi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000403b81 in Set_Communicator ()
</span><br>
<span class="quotelev1">&gt; #11 0x000000000040385e in Init_Communicator ()
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000402e06 in main ()
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0570.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0568.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0568.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Reply:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
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
