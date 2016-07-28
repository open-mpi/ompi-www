<?
$subject_val = "[OMPI users] openmpi-dev-4221-gb707d13: referenced symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 03:30:57 2016" -->
<!-- isoreceived="20160608073057" -->
<!-- sent="Wed, 8 Jun 2016 09:30:45 +0200" -->
<!-- isosent="20160608073045" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-dev-4221-gb707d13: referenced symbol" -->
<!-- id="cec0bc04-81f0-b901-c996-ce8ed04a4a33_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 03:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29406.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Previous message:</strong> <a href="29404.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-1468-g6011906 : problem with &quot;--host&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29407.php">George Bosilca: "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>Reply:</strong> <a href="29407.php">George Bosilca: "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-dev-4221-gb707d13  on my machines (Solaris 10
<br>
Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
<br>
gcc-5.1.0 and Sun C 5.13. Unfortunately I get an error for a small
<br>
program.
<br>
<p><p>tyr hello_1 109 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: dev-4221-gb707d13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p>tyr hello_1 110 mpiexec -np 4 --host tyr,sunpc1,linpc1,tyr hello_1_mpi
<br>
ld.so.1: orted: fatal: relocation error: file 
<br>
/usr/local/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so: symbol 
<br>
strnlen: referenced symbol not found
<br>
--------------------------------------------------------------------------
<br>
ORTE has lost communication with its daemon located on node:
<br>
<p>&nbsp;&nbsp;&nbsp;hostname:  sunpc1
<br>
<p>This is usually due to either a failure of the TCP network
<br>
connection to the node, or possibly an internal failure of
<br>
the daemon itself. We cannot recover from this failure, and
<br>
therefore will terminate the job.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p>I get the same error, if I login on a Solaris x86_64 machine and only use
<br>
that machine.
<br>
<p>sunpc1 fd1026 101 mpiexec -np 2 --host sunpc1,sunpc1 hello_1_mpi
<br>
ld.so.1: orterun: fatal: relocation error: file 
<br>
/usr/local/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so: symbol 
<br>
strnlen: referenced symbol not found
<br>
Killed
<br>
sunpc1 fd1026 102
<br>
<p><p><p><p><p>tyr hello_1 111 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
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
Reading symbols from 
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/bin/orterun...done.
<br>
(gdb) set args -np 4 --host tyr,sunpc1,linpc1,tyr hello_1_mpi
<br>
(gdb) r
<br>
Starting program: /usr/local/openmpi-master_64_gcc/bin/mpiexec -np 4 --host 
<br>
tyr,sunpc1,linpc1,tyr hello_1_mpi
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
[New LWP    3        ]
<br>
[New LWP    4        ]
<br>
[New LWP    5        ]
<br>
ld.so.1: orted: fatal: relocation error: file 
<br>
/usr/local/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so: symbol 
<br>
strnlen: referenced symbol not found
<br>
--------------------------------------------------------------------------
<br>
ORTE has lost communication with its daemon located on node:
<br>
<p>&nbsp;&nbsp;&nbsp;hostname:  sunpc1
<br>
<p>This is usually due to either a failure of the TCP network
<br>
connection to the node, or possibly an internal failure of
<br>
the daemon itself. We cannot recover from this failure, and
<br>
therefore will terminate the job.
<br>
--------------------------------------------------------------------------
<br>
[LWP    5         exited]
<br>
[New Thread 5        ]
<br>
[LWP    4         exited]
<br>
[New Thread 4        ]
<br>
[LWP    3         exited]
<br>
[New Thread 3        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy 
<br>
query
<br>
(gdb) Killed
<br>
<p>(gdb) bt
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
#8  0xffffffff7ece8d30 in dlopen_close (handle=0x1001a8350)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../openmpi-dev-4221-gb707d13/opal/mca/dl/dlopen/dl_dlopen_module.c:148
<br>
#9  0xffffffff7ece8464 in opal_dl_close (handle=0x1001a8350)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-4221-gb707d13/opal/mca/dl/base/dl_base_fns.c:53
<br>
#10 0xffffffff7ecab1c0 in mca_base_component_repository_release_internal 
<br>
(ri=0x1001406d0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_component_repository.c:280
<br>
#11 0xffffffff7ecab338 in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff799a70c0 &lt;mca_pmix_pmix114_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_component_repository.c:317
<br>
#12 0xffffffff7ecad0d8 in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff799a70c0 &lt;mca_pmix_pmix114_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_components_close.c:46
<br>
#13 0xffffffff7ecad170 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff799a70c0 &lt;mca_pmix_pmix114_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_components_close.c:59
<br>
#14 0xffffffff7ecad240 in mca_base_components_close (output_id=-1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7ee9f558 &lt;opal_pmix_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_components_close.c:85
<br>
#15 0xffffffff7ecad1b0 in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7ee9f508 &lt;opal_pmix_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_components_close.c:65
<br>
#16 0xffffffff7ed4921c in opal_pmix_base_frame_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-4221-gb707d13/opal/mca/pmix/base/pmix_base_frame.c:57
<br>
#17 0xffffffff7ecc3418 in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7ee9f508 &lt;opal_pmix_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_framework.c:214
<br>
#18 0xffffffff7c20782c in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../openmpi-dev-4221-gb707d13/orte/mca/ess/hnp/ess_hnp_module.c:795
<br>
#19 0xffffffff7ef39e20 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-4221-gb707d13/orte/runtime/orte_finalize.c:73
<br>
#20 0x0000000100002d08 in orterun (argc=6, argv=0xffffffff7fffdf88)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-4221-gb707d13/orte/tools/orterun/orterun.c:293
<br>
#21 0x0000000100001928 in main (argc=6, argv=0xffffffff7fffdf88)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-4221-gb707d13/orte/tools/orterun/main.c:13
<br>
(gdb) q
<br>
A debugging session is active.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inferior 1 [process 27925    ] will be killed.
<br>
<p>Quit anyway? (y or n) y
<br>
Quitting: sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found 
<br>
to satisfy query
<br>
tyr hello_1 112
<br>
<p><p><p><p><p>tyr hello_1 112 mpiexec -np 4 --host tyr,linpc1,linpc1,tyr hello_1_mpi
<br>
ld.so.1: orterun: fatal: relocation error: file 
<br>
/usr/local/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so: symbol 
<br>
strnlen: referenced symbol not found
<br>
Killed
<br>
tyr hello_1 113 Speicherschutzverletzung
<br>
[linpc1:25689] *** Process received signal ***
<br>
[linpc1:25689] Signal: Segmentation fault (11)
<br>
[linpc1:25689] Signal code: Address not mapped (1)
<br>
[linpc1:25689] Failing at address: 0x7f721f828aa1
<br>
<p>tyr hello_1 113
<br>
<p><p><p><p><p><p><p><p><p><p>I would be grateful if somebody can fix the problem. Please let me
<br>
know, if you need more information. Thank you very much for any help
<br>
in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29405/hello_1_mpi.c">hello_1_mpi.c</a>
</ul>
<!-- attachment="hello_1_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29406.php">Gilles Gouaillardet: "Re: [OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Previous message:</strong> <a href="29404.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-1468-g6011906 : problem with &quot;--host&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29407.php">George Bosilca: "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>Reply:</strong> <a href="29407.php">George Bosilca: "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
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
