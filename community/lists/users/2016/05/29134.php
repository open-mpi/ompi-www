<?
$subject_val = "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 07:00:48 2016" -->
<!-- isoreceived="20160507110048" -->
<!-- sent="Sat, 7 May 2016 13:00:35 +0200" -->
<!-- isosent="20160507110035" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)" -->
<!-- id="2ab5d843-fdff-7573-4e1f-c39d25b779f7_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="f9c32661-c072-6991-bed4-9d11fe9f1b7e_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 07:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29135.php">Siegmar Gross: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Previous message:</strong> <a href="29133.php">Siegmar Gross: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>In reply to:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>the minimal configuration to reproduce an error with spawn_master
<br>
are two Sparc machines.
<br>
<p><p>tyr spawn 124 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-176-g9d45e07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p>tyr spawn 125 ssh ruester ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C 
<br>
compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-176-g9d45e07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p><p>tyr spawn 126 uname -a
<br>
SunOS tyr.informatik.hs-fulda.de 5.10 Generic_150400-11 sun4u sparc SUNW,A70 Solaris
<br>
<p>tyr spawn 127 ssh ruester uname -a
<br>
SunOS ruester.informatik.hs-fulda.de 5.10 Generic_150400-04 sun4u sparc 
<br>
SUNW,SPARC-Enterprise Solaris
<br>
<p><p>tyr spawn 128 mpiexec -np 1 --host tyr,tyr,tyr,tyr,tyr spawn_master
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>Parent process 0: tasks in MPI_COMM_WORLD:                    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES local group:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES remote group: 4
<br>
<p>Slave process 1 of 4 running on tyr.informatik.hs-fulda.de
<br>
Slave process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
Slave process 3 of 4 running on tyr.informatik.hs-fulda.de
<br>
Slave process 2 of 4 running on tyr.informatik.hs-fulda.de
<br>
spawn_slave 2: argv[0]: spawn_slave
<br>
spawn_slave 0: argv[0]: spawn_slave
<br>
spawn_slave 3: argv[0]: spawn_slave
<br>
spawn_slave 1: argv[0]: spawn_slave
<br>
<p><p>tyr spawn 129 mpiexec -np 1 --host tyr,tyr,tyr,tyr,ruester spawn_master
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) 
<br>
(proc_pointer))-&gt;obj_magic_id, file 
<br>
../../openmpi-v1.10.2-176-g9d45e07/ompi/group/group_init.c, line 215, function 
<br>
ompi_group_increment_proc_count
<br>
[ruester:23592] *** Process received signal ***
<br>
[ruester:23592] Signal: Abort (6)
<br>
[ruester:23592] Signal code:  (-1)
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x2c
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libopen-pal.so.13.0.2:0xc2c0c
<br>
/lib/sparcv9/libc.so.1:0xd8c28
<br>
/lib/sparcv9/libc.so.1:0xcc79c
<br>
/lib/sparcv9/libc.so.1:0xcc9a8
<br>
/lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 6 (ABRT)]
<br>
/lib/sparcv9/libc.so.1:abort+0xd0
<br>
/lib/sparcv9/libc.so.1:_assert_c99+0x78
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0xf0
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/openmpi/mca_dpm_orte.so:0x6638
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/openmpi/mca_dpm_orte.so:0x948c
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:ompi_mpi_init+0x1978
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:MPI_Init+0x2a8
<br>
/home/fd1026/SunOS/sparc/bin/spawn_slave:main+0x10
<br>
/home/fd1026/SunOS/sparc/bin/spawn_slave:_start+0x7c
<br>
[ruester:23592] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 3 with PID 0 on node ruester exited on signal 
<br>
6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
tyr spawn 130
<br>
<p><p><p><p><p>A minimal configuration to reproduce an error with spawn_intra_comm
<br>
is a single machine for openmpi-2.x and openmpi-master. I didn't get
<br>
an error message on Linux (it just hangs after displaying the messages).
<br>
<p><p>tyr spawn 114 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: dev-4010-g6c9d65c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p>tyr spawn 115 mpiexec -np 1 --host tyr,tyr,tyr spawn_intra_comm
<br>
Parent process 0: I create 2 slave processes
<br>
<p>Child process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        1
<br>
<p>Child process 1 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        2
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_local:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_remote: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        0
<br>
[[48188,1],0][../../../../../openmpi-dev-4010-g6c9d65c/opal/mca/btl/tcp/btl_tcp_endpoint.c:755:mca_btl_tcp_endpoint_start_connect] 
<br>
from tyr to: tyr Unable to connect to the peer 193.174.24.39 on port 1026: 
<br>
Connection refused
<br>
<p>[tyr.informatik.hs-fulda.de:06684] 
<br>
../../../../../openmpi-dev-4010-g6c9d65c/ompi/mca/pml/ob1/pml_ob1_sendreq.c:237 
<br>
FATAL
<br>
tyr spawn 116
<br>
<p><p><p><p><p>sunpc1 fd1026 102 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: dev-4010-g6c9d65c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p>sunpc1 fd1026 103 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1 spawn_intra_comm
<br>
Parent process 0: I create 2 slave processes
<br>
<p>Parent process 0 running on sunpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_local:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_remote: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        0
<br>
<p>Child process 0 running on sunpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        1
<br>
<p>Child process 1 running on sunpc1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        2
<br>
[[15953,2],0][../../../../../openmpi-dev-4010-g6c9d65c/opal/mca/btl/tcp/btl_tcp_endpoint.c:755:mca_btl_tcp_endpoint_start_connect] 
<br>
from sunpc1 to: sunpc1 Unable to connect to the peer 193.174.26.210 on port 
<br>
1024: Connection refused
<br>
<p>[[15953,2],1][../../../../../openmpi-dev-4010-g6c9d65c/opal/mca/btl/tcp/btl_tcp_endpoint.c:755:mca_btl_tcp_endpoint_start_connect] 
<br>
from sunpc1 to: sunpc1 Unable to connect to the peer 193.174.26.210 on port 
<br>
1024: Connection refused
<br>
<p>[sunpc1:15813] 
<br>
../../../../../openmpi-dev-4010-g6c9d65c/ompi/mca/pml/ob1/pml_ob1_sendreq.c:237 
<br>
FATAL
<br>
[[15953,2],0][../../../../../openmpi-dev-4010-g6c9d65c/opal/mca/btl/tcp/btl_tcp_endpoint.c:755:mca_btl_tcp_endpoint_start_connect] 
<br>
from sunpc1 to: sunpc1 Unable to connect to the peer 193.174.26.210 on port 
<br>
1024: Connection refused
<br>
<p>[sunpc1:15811] 
<br>
../../../../../openmpi-dev-4010-g6c9d65c/ompi/mca/pml/ob1/pml_ob1_sendreq.c:237 
<br>
FATAL
<br>
sunpc1 fd1026 104
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p>On 05/06/16 10:36, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was unable to reproduce the issue with one solaris 11 x86_64 VM and one linux
</span><br>
<span class="quotelev1">&gt; x86_64 VM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what is the minimal configuration you need to reproduce the issue ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are you able to reproduce the issue with only x86_64 nodes ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was under the impression that solaris vs linux is the issue, but is big vs
</span><br>
<span class="quotelev1">&gt; little endian instead ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/5/2016 9:13 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is the following output helpful to find the error? I've put
</span><br>
<span class="quotelev2">&gt;&gt; another output below the output from gdb, which shows that
</span><br>
<span class="quotelev2">&gt;&gt; things are a little bit &quot;random&quot; if I use only 3+2 or 4+1
</span><br>
<span class="quotelev2">&gt;&gt; Sparc machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr spawn 127 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev2">&gt;&gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev2">&gt;&gt; Reading symbols from
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.10.3_64_cc/bin/orterun...done.
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) set args -np 1 --host tyr,sunpc1,linpc1,ruester spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) run
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /usr/local/openmpi-1.10.3_64_cc/bin/mpiexec -np 1 --host
</span><br>
<span class="quotelev2">&gt;&gt; tyr,sunpc1,linpc1,ruester spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *)
</span><br>
<span class="quotelev2">&gt;&gt; (proc_pointer))-&gt;obj_magic_id, file
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-v1.10.2-163-g42da15d/ompi/group/group_init.c, line 215, function
</span><br>
<span class="quotelev2">&gt;&gt; ompi_group_increment_proc_count
</span><br>
<span class="quotelev2">&gt;&gt; [ruester:17809] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [ruester:17809] Signal: Abort (6)
</span><br>
<span class="quotelev2">&gt;&gt; [ruester:17809] Signal code:  (-1)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x1c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:0x1b10f0
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xd8c28
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xcc79c
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xcc9a8
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 2091943080 (?)]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:abort+0xd0
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:_assert_c99+0x78
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0x10c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0xe758
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0x113d4
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_mpi_init+0x188c
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:MPI_Init+0x26c
</span><br>
<span class="quotelev2">&gt;&gt; /home/fd1026/SunOS/sparc/bin/spawn_slave:main+0x18
</span><br>
<span class="quotelev2">&gt;&gt; /home/fd1026/SunOS/sparc/bin/spawn_slave:_start+0x108
</span><br>
<span class="quotelev2">&gt;&gt; [ruester:17809] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 2 with PID 0 on node ruester exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 6 (Abort).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [LWP    2         exited]
</span><br>
<span class="quotelev2">&gt;&gt; [New Thread 2        ]
</span><br>
<span class="quotelev2">&gt;&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt;&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to
</span><br>
<span class="quotelev2">&gt;&gt; satisfy query
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #8  0xffffffff7e5f9718 in dlopen_close (handle=0x100)
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/dl/dlopen/dl_dlopen_module.c:144
</span><br>
<span class="quotelev2">&gt;&gt; #9  0xffffffff7e5f364c in opal_dl_close (handle=0xffffff7d700200ff)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/dl/base/dl_base_fns.c:53
</span><br>
<span class="quotelev2">&gt;&gt; #10 0xffffffff7e546714 in ri_destructor (obj=0x1200)
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_component_repository.c:357
</span><br>
<span class="quotelev2">&gt;&gt; #11 0xffffffff7e543840 in opal_obj_run_destructors (object=0xffffff7f607a6cff)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../openmpi-v1.10.2-163-g42da15d/opal/class/opal_object.h:451
</span><br>
<span class="quotelev2">&gt;&gt; #12 0xffffffff7e545f54 in mca_base_component_repository_release
</span><br>
<span class="quotelev2">&gt;&gt; (component=0xffffff7c801df0ff)
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_component_repository.c:223
</span><br>
<span class="quotelev2">&gt;&gt; #13 0xffffffff7e54d0d8 in mca_base_component_unload
</span><br>
<span class="quotelev2">&gt;&gt; (component=0xffffff7d00003000, output_id=-1610596097)
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev2">&gt;&gt; #14 0xffffffff7e54d17c in mca_base_component_close (component=0x100,
</span><br>
<span class="quotelev2">&gt;&gt; output_id=-1878702080)
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev2">&gt;&gt; #15 0xffffffff7e54d28c in mca_base_components_close (output_id=1942099968,
</span><br>
<span class="quotelev2">&gt;&gt; components=0xff,
</span><br>
<span class="quotelev2">&gt;&gt;     skip=0xffffff7f61c5a800)
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev2">&gt;&gt; #16 0xffffffff7e54d1cc in mca_base_framework_components_close
</span><br>
<span class="quotelev2">&gt;&gt; (framework=0x1000000ff, skip=0x10018ebb000)
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_components_close.c:68
</span><br>
<span class="quotelev2">&gt;&gt; #17 0xffffffff7ee4db88 in orte_oob_base_close ()
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-v1.10.2-163-g42da15d/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev2">&gt;&gt; #18 0xffffffff7e580054 in mca_base_framework_close (framework=0xffffff0000004fff)
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_framework.c:198
</span><br>
<span class="quotelev2">&gt;&gt; #19 0xffffffff7c514cdc in rte_finalize ()
</span><br>
<span class="quotelev2">&gt;&gt;     at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v1.10.2-163-g42da15d/orte/mca/ess/hnp/ess_hnp_module.c:882
</span><br>
<span class="quotelev2">&gt;&gt; #20 0xffffffff7ec5c414 in orte_finalize () at
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-v1.10.2-163-g42da15d/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev2">&gt;&gt; #21 0x000000010000eb24 in orterun (argc=1423033599, argv=0xffffff7fffce41ff)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../openmpi-v1.10.2-163-g42da15d/orte/tools/orterun/orterun.c:1151
</span><br>
<span class="quotelev2">&gt;&gt; #22 0x0000000100004d4c in main (argc=416477439, argv=0xffffff7fffd7f000)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../openmpi-v1.10.2-163-g42da15d/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr spawn 145 mpiexec -np 1 --host ruester,ruester,ruester,tyr,tyr
</span><br>
<span class="quotelev2">&gt;&gt; spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on ruester.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *)
</span><br>
<span class="quotelev2">&gt;&gt; (proc_pointer))-&gt;obj_magic_id, file
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-v1.10.2-163-g42da15d/ompi/group/group_init.c, line 215, function
</span><br>
<span class="quotelev2">&gt;&gt; ompi_group_increment_proc_count
</span><br>
<span class="quotelev2">&gt;&gt; [ruester:18238] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [ruester:18238] Signal: Abort (6)
</span><br>
<span class="quotelev2">&gt;&gt; [ruester:18238] Signal code:  (-1)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x1c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:0x1b10f0
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xd8c28
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev2">&gt;&gt; to another process:
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:    ruester
</span><br>
<span class="quotelev2">&gt;&gt;   Remote host:   ruester
</span><br>
<span class="quotelev2">&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev2">&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev2">&gt;&gt; try again.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xcc79c
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xcc9a8
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 2091943080 (?)]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:abort+0xd0
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:_assert_c99+0x78
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0x10c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0xe758
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:MPI_Comm_spawn_multiple+0x8f4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/fd1026/SunOS/sparc/bin/spawn_multiple_master:main+0x188
</span><br>
<span class="quotelev2">&gt;&gt; /home/fd1026/SunOS/sparc/bin/spawn_multiple_master:_start+0x108
</span><br>
<span class="quotelev2">&gt;&gt; [ruester:18238] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 0 with PID 0 on node ruester exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 6 (Abort).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr spawn 146 mpiexec -np 1 --host ruester,ruester,ruester,ruester,tyr
</span><br>
<span class="quotelev2">&gt;&gt; spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on ruester.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;   I create 3 slave processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0: tasks in MPI_COMM_WORLD:                    1
</span><br>
<span class="quotelev2">&gt;&gt;                   tasks in COMM_CHILD_PROCESSES local group:  1
</span><br>
<span class="quotelev2">&gt;&gt;                   tasks in COMM_CHILD_PROCESSES remote group: 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Slave process 2 of 3 running on ruester.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt; Slave process 0 of 3 running on ruester.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 0: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt; Slave process 1 of 3 running on ruester.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 1: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 1: argv[1]: program type 2
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 1: argv[2]: another parameter
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 2: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 2: argv[1]: program type 2
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 2: argv[2]: another parameter
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 0: argv[1]: program type 1
</span><br>
<span class="quotelev2">&gt;&gt; tyr spawn 147
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully you can sort these things out. I've no idea what happens
</span><br>
<span class="quotelev2">&gt;&gt; and why I get different outputs, if I use different sets of the
</span><br>
<span class="quotelev2">&gt;&gt; same machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 05.05.2016 um 11:13 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is this Solaris 10 specific (e.g. Solaris 11 works fine)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( I only have a x86_64 vm with Solaris 11 and sun compilers ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, May 5, 2016, Siegmar Gross &lt;siegmar.gross_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:siegmar.gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi Ralph and Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Am 04.05.2016 um 20:02 schrieb rhc54:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         @ggouaillardet &lt;<a href="https://github.com/ggouaillardet">https://github.com/ggouaillardet</a>&gt; Where does this stand?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &#151;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         You are receiving this because you were mentioned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Reply to this email directly or view it on GitHub
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;<a href="https://github.com/open-mpi/ompi/issues/1569#issuecomment-216950103">https://github.com/open-mpi/ompi/issues/1569#issuecomment-216950103</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     With my last installed version of openmpi-v1.10.x all of my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     spawn programs fail on Solaris Sparc and x86_64 with the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     error for both compilers (gcc-5.1.0 and Sun C 5.13). Everything
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     works as expected on Linux. Tomorrow I'm back in my office and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I can try to build and test the latest version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sunpc1 fd1026 108 ompi_info | grep -e &quot;OPAL repo&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           OPAL repo revision: v1.10.2-163-g42da15d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sunpc1 fd1026 114 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawnmaster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00957] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00957] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00957] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00957] Failing at address: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /home/fd1026/SunOS/x86_64/bin/spawn_master:main+0x21
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00957] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpiexec noticed that process rank 0 with PID 957 on node sunpc1 exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sunpc1 fd1026 115 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawnmultiple_master
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00960] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00960] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00960] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00960] Failing at address: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /home/fd1026/SunOS/x86_64/bin/spawn_multiple_master:main+0x5d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00960] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpiexec noticed that process rank 0 with PID 960 on node sunpc1 exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sunpc1 fd1026 116 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawnintra_comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00963] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00963] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00963] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00963] Failing at address: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /home/fd1026/SunOS/x86_64/bin/spawn_intra_comm:main+0x23
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [sunpc1:00963] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpiexec noticed that process rank 0 with PID 963 on node sunpc1 exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sunpc1 fd1026 117
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29090.php">http://www.open-mpi.org/community/lists/users/2016/05/29090.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29092.php">http://www.open-mpi.org/community/lists/users/2016/05/29092.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29096.php">http://www.open-mpi.org/community/lists/users/2016/05/29096.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29110.php">http://www.open-mpi.org/community/lists/users/2016/05/29110.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29135.php">Siegmar Gross: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Previous message:</strong> <a href="29133.php">Siegmar Gross: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>In reply to:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- nextthread="start" -->
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
