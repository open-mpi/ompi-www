<?
$subject_val = "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 08:14:00 2016" -->
<!-- isoreceived="20160505121400" -->
<!-- sent="Thu, 5 May 2016 14:13:29 +0200" -->
<!-- isosent="20160505121329" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)" -->
<!-- id="78571a89-7e80-9c60-5d31-6cb8dde7a0b1_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5thQn3L5PtdHS95pm4agwR=adjUZpE4cWLHaZhwyDUB8g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-05 08:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29092.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Reply:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>is the following output helpful to find the error? I've put
<br>
another output below the output from gdb, which shows that
<br>
things are a little bit &quot;random&quot; if I use only 3+2 or 4+1
<br>
Sparc machines.
<br>
<p><p>tyr spawn 127 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.10.3_64_cc/bin/orterun...done.
<br>
(gdb) set args -np 1 --host tyr,sunpc1,linpc1,ruester spawn_multiple_master
<br>
(gdb) run
<br>
Starting program: /usr/local/openmpi-1.10.3_64_cc/bin/mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester spawn_multiple_master
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (proc_pointer))-&gt;obj_magic_id, file ../../openmpi-v1.10.2-163-g42da15d/ompi/group/group_init.c, line 
<br>
215, function ompi_group_increment_proc_count
<br>
[ruester:17809] *** Process received signal ***
<br>
[ruester:17809] Signal: Abort (6)
<br>
[ruester:17809] Signal code:  (-1)
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x1c
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:0x1b10f0
<br>
/lib/sparcv9/libc.so.1:0xd8c28
<br>
/lib/sparcv9/libc.so.1:0xcc79c
<br>
/lib/sparcv9/libc.so.1:0xcc9a8
<br>
/lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 2091943080 (?)]
<br>
/lib/sparcv9/libc.so.1:abort+0xd0
<br>
/lib/sparcv9/libc.so.1:_assert_c99+0x78
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0x10c
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0xe758
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0x113d4
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_mpi_init+0x188c
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:MPI_Init+0x26c
<br>
/home/fd1026/SunOS/sparc/bin/spawn_slave:main+0x18
<br>
/home/fd1026/SunOS/sparc/bin/spawn_slave:_start+0x108
<br>
[ruester:17809] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 2 with PID 0 on node ruester exited on signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
<br>
(gdb) bt
<br>
#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
<br>
#1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
<br>
#2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
<br>
#3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
<br>
#4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
<br>
#5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
<br>
#6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
<br>
#7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
<br>
#8  0xffffffff7e5f9718 in dlopen_close (handle=0x100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/dl/dlopen/dl_dlopen_module.c:144
<br>
#9  0xffffffff7e5f364c in opal_dl_close (handle=0xffffff7d700200ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/dl/base/dl_base_fns.c:53
<br>
#10 0xffffffff7e546714 in ri_destructor (obj=0x1200)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_component_repository.c:357
<br>
#11 0xffffffff7e543840 in opal_obj_run_destructors (object=0xffffff7f607a6cff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/class/opal_object.h:451
<br>
#12 0xffffffff7e545f54 in mca_base_component_repository_release (component=0xffffff7c801df0ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_component_repository.c:223
<br>
#13 0xffffffff7e54d0d8 in mca_base_component_unload (component=0xffffff7d00003000, output_id=-1610596097)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7e54d17c in mca_base_component_close (component=0x100, output_id=-1878702080)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7e54d28c in mca_base_components_close (output_id=1942099968, components=0xff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7f61c5a800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7e54d1cc in mca_base_framework_components_close (framework=0x1000000ff, skip=0x10018ebb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_components_close.c:68
<br>
#17 0xffffffff7ee4db88 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/orte/mca/oob/base/oob_base_frame.c:94
<br>
#18 0xffffffff7e580054 in mca_base_framework_close (framework=0xffffff0000004fff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/opal/mca/base/mca_base_framework.c:198
<br>
#19 0xffffffff7c514cdc in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-v1.10.2-163-g42da15d/orte/mca/ess/hnp/ess_hnp_module.c:882
<br>
#20 0xffffffff7ec5c414 in orte_finalize () at ../../openmpi-v1.10.2-163-g42da15d/orte/runtime/orte_finalize.c:65
<br>
#21 0x000000010000eb24 in orterun (argc=1423033599, argv=0xffffff7fffce41ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/orte/tools/orterun/orterun.c:1151
<br>
#22 0x0000000100004d4c in main (argc=416477439, argv=0xffffff7fffd7f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-v1.10.2-163-g42da15d/orte/tools/orterun/main.c:13
<br>
(gdb)
<br>
<p><p><p><p>tyr spawn 145 mpiexec -np 1 --host ruester,ruester,ruester,tyr,tyr spawn_multiple_master
<br>
<p>Parent process 0 running on ruester.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (proc_pointer))-&gt;obj_magic_id, file ../../openmpi-v1.10.2-163-g42da15d/ompi/group/group_init.c, line 
<br>
215, function ompi_group_increment_proc_count
<br>
[ruester:18238] *** Process received signal ***
<br>
[ruester:18238] Signal: Abort (6)
<br>
[ruester:18238] Signal code:  (-1)
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x1c
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:0x1b10f0
<br>
/lib/sparcv9/libc.so.1:0xd8c28
<br>
------------------------------------------------------------
<br>
A process or daemon was unable to complete a TCP connection
<br>
to another process:
<br>
&nbsp;&nbsp;&nbsp;Local host:    ruester
<br>
&nbsp;&nbsp;&nbsp;Remote host:   ruester
<br>
This is usually caused by a firewall on the remote host. Please
<br>
check that any firewall (e.g., iptables) has been disabled and
<br>
try again.
<br>
------------------------------------------------------------
<br>
/lib/sparcv9/libc.so.1:0xcc79c
<br>
/lib/sparcv9/libc.so.1:0xcc9a8
<br>
/lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 2091943080 (?)]
<br>
/lib/sparcv9/libc.so.1:abort+0xd0
<br>
/lib/sparcv9/libc.so.1:_assert_c99+0x78
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0x10c
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0xe758
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:MPI_Comm_spawn_multiple+0x8f4
<br>
/home/fd1026/SunOS/sparc/bin/spawn_multiple_master:main+0x188
<br>
/home/fd1026/SunOS/sparc/bin/spawn_multiple_master:_start+0x108
<br>
[ruester:18238] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 0 on node ruester exited on signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>tyr spawn 146 mpiexec -np 1 --host ruester,ruester,ruester,ruester,tyr spawn_multiple_master
<br>
<p>Parent process 0 running on ruester.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>Parent process 0: tasks in MPI_COMM_WORLD:                    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES local group:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES remote group: 3
<br>
<p>Slave process 2 of 3 running on ruester.informatik.hs-fulda.de
<br>
Slave process 0 of 3 running on ruester.informatik.hs-fulda.de
<br>
spawn_slave 0: argv[0]: spawn_slave
<br>
Slave process 1 of 3 running on ruester.informatik.hs-fulda.de
<br>
spawn_slave 1: argv[0]: spawn_slave
<br>
spawn_slave 1: argv[1]: program type 2
<br>
spawn_slave 1: argv[2]: another parameter
<br>
spawn_slave 2: argv[0]: spawn_slave
<br>
spawn_slave 2: argv[1]: program type 2
<br>
spawn_slave 2: argv[2]: another parameter
<br>
spawn_slave 0: argv[1]: program type 1
<br>
tyr spawn 147
<br>
<p><p><p>Hopefully you can sort these things out. I've no idea what happens
<br>
and why I get different outputs, if I use different sets of the
<br>
same machines.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p>Am 05.05.2016 um 11:13 schrieb Gilles Gouaillardet:
<br>
<span class="quotelev1">&gt; Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is this Solaris 10 specific (e.g. Solaris 11 works fine)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ( I only have a x86_64 vm with Solaris 11 and sun compilers ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, May 5, 2016, Siegmar Gross &lt;siegmar.gross_at_[hidden] &lt;mailto:siegmar.gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Ralph and Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Am 04.05.2016 um 20:02 schrieb rhc54:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         @ggouaillardet &lt;<a href="https://github.com/ggouaillardet">https://github.com/ggouaillardet</a>&gt; Where does this stand?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         &#151;
</span><br>
<span class="quotelev1">&gt;         You are receiving this because you were mentioned.
</span><br>
<span class="quotelev1">&gt;         Reply to this email directly or view it on GitHub
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="https://github.com/open-mpi/ompi/issues/1569#issuecomment-216950103">https://github.com/open-mpi/ompi/issues/1569#issuecomment-216950103</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     With my last installed version of openmpi-v1.10.x all of my
</span><br>
<span class="quotelev1">&gt;     spawn programs fail on Solaris Sparc and x86_64 with the same
</span><br>
<span class="quotelev1">&gt;     error for both compilers (gcc-5.1.0 and Sun C 5.13). Everything
</span><br>
<span class="quotelev1">&gt;     works as expected on Linux. Tomorrow I'm back in my office and
</span><br>
<span class="quotelev1">&gt;     I can try to build and test the latest version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sunpc1 fd1026 108 ompi_info | grep -e &quot;OPAL repo&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;           OPAL repo revision: v1.10.2-163-g42da15d
</span><br>
<span class="quotelev1">&gt;          C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt;     sunpc1 fd1026 114 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1 spawnmaster
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00957] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00957] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00957] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00957] Failing at address: 0
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev1">&gt;     /home/fd1026/SunOS/x86_64/bin/spawn_master:main+0x21
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00957] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpiexec noticed that process rank 0 with PID 957 on node sunpc1 exited on signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sunpc1 fd1026 115 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1 spawnmultiple_master
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00960] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00960] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00960] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00960] Failing at address: 0
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev1">&gt;     /home/fd1026/SunOS/x86_64/bin/spawn_multiple_master:main+0x5d
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00960] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpiexec noticed that process rank 0 with PID 960 on node sunpc1 exited on signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sunpc1 fd1026 116 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1,sunpc1 spawnintra_comm
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00963] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00963] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00963] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00963] Failing at address: 0
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalbacktrace_print+0x2d
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:0x2383c
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:0xdd6b6
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:0xd1f82
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:vsnprintf+0x51
</span><br>
<span class="quotelev1">&gt;     /lib/amd64/libc.so.1:vasprintf+0x49
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-pal.so.20.0.0:opalshow_help_vstring+0x83
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libopen-rte.so.20.0.0:orteshow_help+0xd6
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:ompi_mpi_nit+0x1010
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/libmpi.so.20.0.0:PMPI_Init0x9d
</span><br>
<span class="quotelev1">&gt;     /home/fd1026/SunOS/x86_64/bin/spawn_intra_comm:main+0x23
</span><br>
<span class="quotelev1">&gt;     [sunpc1:00963] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpiexec noticed that process rank 0 with PID 963 on node sunpc1 exited on signa 11 (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     sunpc1 fd1026 117
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Siegmar
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29090.php">http://www.open-mpi.org/community/lists/users/2016/05/29090.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29092.php">http://www.open-mpi.org/community/lists/users/2016/05/29092.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
########################################################################
#                                                                      #
# Hochschule Fulda          University of Applied Sciences             #
# FB Angewandte Informatik  Department of Applied Computer Science     #
#                                                                      #
# Prof. Dr. Siegmar Gross   Tel.: +49 (0)661 9640 - 333                #
#                           Fax:  +49 (0)661 9640 - 349                #
# Leipziger Str. 123        WWW:  <a href="http://www.hs-fulda.de/~gross">http://www.hs-fulda.de/~gross</a>        #
# D-36037 Fulda             Mail: Siegmar.Gross_at_[hidden] #
#                                                                      #
#                                                                      #
# IT-Sicherheit: <a href="http://www.hs-fulda.de/it-sicherheit">http://www.hs-fulda.de/it-sicherheit</a>                  #
#                                                                      #
########################################################################

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29096/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29092.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Reply:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
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
