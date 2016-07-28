<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 21:05:58 2006" -->
<!-- isoreceived="20060203020558" -->
<!-- sent="Thu, 02 Feb 2006 18:04:54 -0800" -->
<!-- isosent="20060203020454" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] does btl_openib work ?" -->
<!-- id="1138932294.22996.149.camel_at_jhugly.pantasys.com" -->
<!-- inreplyto="4FBE0C2F-1A72-4C90-B9C9-9CB2E0188C45_at_lanl.gov" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 21:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0567.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0564.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-02-02 at 15:19 -0700, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible for you to get a stack trace where this is hanging?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might try:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np  
</span><br>
<span class="quotelev1">&gt; 2 -d xterm -e gdb PMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I did that, and when it was hanging I control-C'd in each gdb and asked
<br>
for a bt.
<br>
<p>Here's the debug output from the mpirun command:
<br>
==================================================================================================
<br>
<p>mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np 2
<br>
-d xterm -e gdb PMB-MPI1
<br>
[bench1:16017] procdir: (null)
<br>
[bench1:16017] jobdir: (null)
<br>
[bench1:16017]
<br>
unidir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe
<br>
[bench1:16017] top: openmpi-sessions-root_at_bench1_0
<br>
[bench1:16017] tmp: /tmp
<br>
[bench1:16017] connect_uni: contact info read
<br>
[bench1:16017] connect_uni: connection not allowed
<br>
[bench1:16017] [0,0,0] setting up session dir with
<br>
[bench1:16017]  tmpdir /tmp
<br>
[bench1:16017]  universe default-universe-16017
<br>
[bench1:16017]  user root
<br>
[bench1:16017]  host bench1
<br>
[bench1:16017]  jobid 0
<br>
[bench1:16017]  procid 0
<br>
[bench1:16017]
<br>
procdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017/0/0
<br>
[bench1:16017]
<br>
jobdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017/0
<br>
[bench1:16017]
<br>
unidir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017
<br>
[bench1:16017] top: openmpi-sessions-root_at_bench1_0
<br>
[bench1:16017] tmp: /tmp
<br>
[bench1:16017] [0,0,0]
<br>
contact_file /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017/universe-setup.txt
<br>
[bench1:16017] [0,0,0] wrote setup file
<br>
[bench1:16017] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[bench1:16017] pls:rsh: local csh: 0, local bash: 1
<br>
[bench1:16017] pls:rsh: assuming same remote shell as local shell
<br>
[bench1:16017] pls:rsh: remote csh: 0, remote bash: 1
<br>
[bench1:16017] pls:rsh: final template argv:
<br>
[bench1:16017] pls:rsh:     /usr/bin/ssh -X &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe root_at_bench1:default-universe-16017 --nsreplica
<br>
&quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --gprreplica
<br>
&quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --mpi-call-yield 0
<br>
[bench1:16017] pls:rsh: launching on node bench2
<br>
[bench1:16017] pls:rsh: not oversubscribed -- setting
<br>
mpi_yield_when_idle to 0
<br>
[bench1:16017] pls:rsh: bench2 is a REMOTE node
<br>
[bench1:16017] pls:rsh: executing: /usr/bin/ssh -X bench2
<br>
PATH=/opt/ompi/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/opt/ompi/lib:
<br>
$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; /opt/ompi/bin/orted --debug
<br>
--bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename
<br>
bench2 --universe root_at_bench1:default-universe-16017 --nsreplica
<br>
&quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --gprreplica
<br>
&quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --mpi-call-yield 0
<br>
[bench2:16980] [0,0,1] setting up session dir with
<br>
[bench2:16980]  universe default-universe-16017
<br>
[bench2:16980]  user root
<br>
[bench2:16980]  host bench2
<br>
[bench2:16980]  jobid 0
<br>
[bench2:16980]  procid 1
<br>
[bench2:16980]
<br>
procdir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-16017/0/1
<br>
[bench2:16980]
<br>
jobdir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-16017/0
<br>
[bench2:16980]
<br>
unidir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-16017
<br>
[bench2:16980] top: openmpi-sessions-root_at_bench2_0
<br>
[bench2:16980] tmp: /tmp
<br>
[bench1:16017] pls:rsh: launching on node bench1
<br>
[bench1:16017] pls:rsh: not oversubscribed -- setting
<br>
mpi_yield_when_idle to 0
<br>
[bench1:16017] pls:rsh: bench1 is a LOCAL node
<br>
[bench1:16017] pls:rsh: reset
<br>
PATH: /opt/ompi/bin:/sbin:/usr/sbin:/usr/local/sbin:/opt/gnome/sbin:/usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/gnome/bin:/usr/lib/mit/bin:/usr/lib/mit/sbin:/opt/ompi/bin
<br>
[bench1:16017] pls:rsh: reset LD_LIBRARY_PATH: /opt/ompi/lib
<br>
[bench1:16017] pls:rsh: executing: orted --debug --bootproxy 1 --name
<br>
0.0.2 --num_procs 3 --vpid_start 0 --nodename bench1 --universe
<br>
root_at_bench1:default-universe-16017 --nsreplica
<br>
&quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --gprreplica
<br>
&quot;0.0.0;tcp://10.1.40.61:32793;tcp://10.2.40.61:32793&quot; --mpi-call-yield 0
<br>
[bench1:16021] [0,0,2] setting up session dir with
<br>
[bench1:16021]  universe default-universe-16017
<br>
[bench1:16021]  user root
<br>
[bench1:16021]  host bench1
<br>
[bench1:16021]  jobid 0
<br>
[bench1:16021]  procid 2
<br>
[bench1:16021]
<br>
procdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017/0/2
<br>
[bench1:16021]
<br>
jobdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017/0
<br>
[bench1:16021]
<br>
unidir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-16017
<br>
[bench1:16021] top: openmpi-sessions-root_at_bench1_0
<br>
[bench1:16021] tmp: /tmp
<br>
Warning: translation table syntax error: Unknown keysym name:  DRemove
<br>
Warning: ... found while parsing '&lt;Key&gt;DRemove: ignore()'
<br>
Warning: String to TranslationTable conversion encountered errors
<br>
Warning: translation table syntax error: Unknown keysym name:  DRemove
<br>
Warning: ... found while parsing '&lt;Key&gt;DRemove: ignore()'
<br>
Warning: String to TranslationTable conversion encountered errors
<br>
[bench1:16017] spawn: in job_state_callback(jobid = 1, state = 0x3)
<br>
[bench1:16017] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, bench1, /usr/bin/xterm, 16025)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, bench2, /usr/bin/xterm, 16984)
<br>
[bench1:16017] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
<p><p>Here's the output in one xterm:
<br>
=========================================================================
<br>
GNU gdb 6.3
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you
<br>
are
<br>
welcome to change it and/or distribute copies of it under certain
<br>
conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
<br>
details.
<br>
This GDB was configured as &quot;x86_64-suse-linux&quot;...Using host libthread_db
<br>
library
<br>
&nbsp;&quot;/lib64/tls/libthread_db.so.1&quot;.
<br>
<p>(gdb) run
<br>
Starting program: /root/SRC_PMB/PMB-MPI1 
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 46912509890080 (LWP 16984)]
<br>
[bench2:16984] [0,1,0] setting up session dir with
<br>
[bench2:16984]  universe default-universe-16017
<br>
[bench2:16984]  user root
<br>
[bench2:16984]  host bench2
<br>
[bench2:16984]  jobid 1
<br>
[bench2:16984]  procid 0
<br>
[bench2:16984]
<br>
procdir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-160
<br>
17/1/0
<br>
[bench2:16984]
<br>
jobdir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-1601
<br>
7/1
<br>
[bench2:16984]
<br>
unidir: /tmp/openmpi-sessions-root_at_bench2_0/default-universe-1601
<br>
7
<br>
[bench2:16984] top: openmpi-sessions-root_at_bench2_0
<br>
[bench2:16984] tmp: /tmp
<br>
[bench2:16984] [0,1,0] ompi_mpi_init completed
<br>
#---------------------------------------------------
<br>
#    PALLAS MPI Benchmark Suite V2.2, MPI-1 part    
<br>
#---------------------------------------------------
<br>
# Date       : Thu Feb  2 09:51:32 2006
<br>
# Machine    : x86_64# System     : Linux
<br>
# Release    : 2.6.13-15-smp
<br>
# Version    : #7 SMP Mon Jan 30 12:05:45 PST 2006
<br>
<p>#
<br>
# Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   4194304
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE 
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM  
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># PingPong
<br>
# PingPing
<br>
# Sendrecv
<br>
# Exchange
<br>
# Allreduce
<br>
# Reduce
<br>
# Reduce_scatter
<br>
# Allgather
<br>
# Allgatherv
<br>
# Alltoall
<br>
# Bcast
<br>
# Barrier
<br>
<p>Program received signal SIGINT, Interrupt.
<br>
[Switching to Thread 46912509890080 (LWP 16984)]
<br>
mthca_poll_cq (ibcq=0x718820, ne=1, wc=0x7fffffd071a0) at cq.c:469
<br>
469     cq.c: No such file or directory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in cq.c
<br>
(gdb) inf st
<br>
#0  mthca_poll_cq (ibcq=0x718820, ne=1, wc=0x7fffffd071a0) at cq.c:469
<br>
#1  0x00002aaaadef1a85 in mca_btl_openib_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_btl_openib.so
<br>
#2  0x00002aaaadde8f62 in mca_bml_r2_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_bml_r2.so
<br>
#3  0x00002aaaaaec79c0 in opal_progress ()
<br>
from /opt/ompi/lib/libopal.so.0
<br>
#4  0x00002aaaadac7255 in mca_pml_ob1_recv ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_pml_ob1.so
<br>
#5  0x00002aaaaea434c2 in ompi_coll_tuned_reduce_intra_basic_linear ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_coll_tuned.so
<br>
#6  0x00002aaaaea405e6 in ompi_coll_tuned_allreduce_intra_nonoverlapping
<br>
()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_coll_tuned.so
<br>
#7  0x00002aaaaac06b17 in ompi_comm_nextcid ()
<br>
from /opt/ompi/lib/libmpi.so.0
<br>
#8  0x00002aaaaac0513b in ompi_comm_split ()
<br>
from /opt/ompi/lib/libmpi.so.0
<br>
#9  0x00002aaaaac2bcd8 in PMPI_Comm_split ()
<br>
from /opt/ompi/lib/libmpi.so.0
<br>
#10 0x0000000000403b81 in Set_Communicator ()
<br>
#11 0x000000000040385e in Init_Communicator ()
<br>
#12 0x0000000000402e06 in main ()
<br>
(gdb) 
<br>
<p>Here's the output in the other xterm:
<br>
================================================================================================
<br>
GNU gdb 6.3
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you
<br>
are
<br>
welcome to change it and/or distribute copies of it under certain
<br>
conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
<br>
details.
<br>
This GDB was configured as &quot;x86_64-suse-linux&quot;...Using host libthread_db
<br>
library
<br>
&nbsp;&quot;/lib64/tls/libthread_db.so.1&quot;.
<br>
<p>(gdb) run
<br>
Starting program: /root/SRC_PMB/PMB-MPI1 
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 46912509889280 (LWP 16025)]
<br>
[bench1:16025] [0,1,1] setting up session dir with
<br>
[bench1:16025]  universe default-universe-16017
<br>
[bench1:16025]  user root
<br>
[bench1:16025]  host bench1
<br>
[bench1:16025]  jobid 1
<br>
[bench1:16025]  procid 1
<br>
[bench1:16025]
<br>
procdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-160
<br>
17/1/1
<br>
[bench1:16025]
<br>
jobdir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-1601
<br>
7/1
<br>
[bench1:16025]
<br>
unidir: /tmp/openmpi-sessions-root_at_bench1_0/default-universe-1601
<br>
7
<br>
[bench1:16025] top: openmpi-sessions-root_at_bench1_0
<br>
[bench1:16025] tmp: /tmp
<br>
[bench1:16025] [0,1,1] ompi_mpi_init completed
<br>
<p>Program received signal SIGINT, Interrupt.
<br>
[Switching to Thread 46912509889280 (LWP 16025)]
<br>
0x00002aaaab493fc5 in pthread_spin_lock ()
<br>
from /lib64/tls/libpthread.so.0
<br>
(gdb) inf st
<br>
#0  0x00002aaaab493fc5 in pthread_spin_lock ()
<br>
from /lib64/tls/libpthread.so.0
<br>
#1  0x00002aaaaeb50d3e in mthca_poll_cq (ibcq=0x8b4990, ne=1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wc=0x7fffffbe0290) at cq.c:454
<br>
#2  0x00002aaaaddf0ce0 in mca_btl_openib_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_btl_openib.so
<br>
#3  0x00002aaaadce7f62 in mca_bml_r2_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_bml_r2.so
<br>
#4  0x00002aaaaaec79c0 in opal_progress ()
<br>
from /opt/ompi/lib/libopal.so.0
<br>
#5  0x00002aaaad9c6255 in mca_pml_ob1_recv ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_pml_ob1.so
<br>
#6  0x00002aaaae940ba9 in ompi_coll_tuned_bcast_intra_basic_linear ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_coll_tuned.so
<br>
#7  0x00002aaaae52830f in mca_coll_basic_allgather_intra ()
<br>
&nbsp;&nbsp;&nbsp;from /opt/ompi/lib/openmpi/mca_coll_basic.so
<br>
#8  0x00002aaaaac04ee3 in ompi_comm_split ()
<br>
from /opt/ompi/lib/libmpi.so.0
<br>
#9  0x00002aaaaac2bcd8 in PMPI_Comm_split ()
<br>
from /opt/ompi/lib/libmpi.so.0
<br>
#10 0x0000000000403b81 in Set_Communicator ()
<br>
#11 0x000000000040385e in Init_Communicator ()
<br>
#12 0x0000000000402e06 in main ()
<br>
(gdb) 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0567.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0564.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
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
