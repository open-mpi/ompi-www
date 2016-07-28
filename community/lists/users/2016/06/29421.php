<?
$subject_val = "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 13:44:46 2016" -->
<!-- isoreceived="20160609174446" -->
<!-- sent="Thu, 9 Jun 2016 19:44:24 +0200" -->
<!-- isosent="20160609174424" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)" -->
<!-- id="143559c3-ce91-f571-3d39-ea79fab39734_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="open-mpi/ompi/issue/1771/issue_event/686315008_at_github.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-09 13:44:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29422.php">Ralph Castain: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<li><strong>Previous message:</strong> <a href="29420.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29422.php">Ralph Castain: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<li><strong>Reply:</strong> <a href="29422.php">Ralph Castain: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Am 08.06.2016 um 21:19 schrieb rhc54:
<br>
<span class="quotelev1">&gt; Closed #1771 &lt;<a href="https://github.com/open-mpi/ompi/issues/1771">https://github.com/open-mpi/ompi/issues/1771</a>&gt; via #1772 &lt;<a href="https://github.com/open-mpi/ompi/pull/1772">https://github.com/open-mpi/ompi/pull/1772</a>&gt;.
</span><br>
<p>Thank you very much for your help. Now I have new problems
<br>
with the same program on my Sparc and x86_64 Solaris machines.
<br>
<p>tyr hello_1 106 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: dev-4251-g1f651d1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p>tyr hello_1 107 mpiexec -np 2 hello_1_mpi
<br>
[tyr:08647] *** Process received signal ***
<br>
[tyr:08647] Signal: Bus Error (10)
<br>
[tyr:08647] Signal code: Invalid address alignment (1)
<br>
[tyr:08647] Failing at address: 1001c94eb
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:0xdefa4
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so:0x8c800 [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so:0x8cba4
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so:0x8de10
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:0xee62c
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:0xee948
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:opal_libevent2022_event_base_loop+0x310
<br>
/export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so:0x4b7f4
<br>
/lib/sparcv9/libc.so.1:0xd8a6c
<br>
[tyr:08647] *** End of error message ***
<br>
Bus error
<br>
<p>tyr hello_1 108 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
Reading symbols from /export2/prog/SunOS_sparc/openmpi-master_64_gcc/bin/orterun...done.
<br>
(gdb) set args -np 2 hello_1_mpi
<br>
(gdb) r
<br>
Starting program: /usr/local/openmpi-master_64_gcc/bin/mpiexec -np 2 hello_1_mpi
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
[New Thread 3 (LWP 3)]
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 3 (LWP 3)]
<br>
0xffffffff7988c800 in parse_connect_ack (msg=0x1001c97bb &quot;&quot;, len=13, nspace=0xffffffff797fbac0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank=0xffffffff797fbaa8, version=0xffffffff797fbab8, cred=0xffffffff797fbab0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c:332
<br>
332             *rank = *(int *)msg;
<br>
(gdb) bt
<br>
#0  0xffffffff7988c800 in parse_connect_ack (msg=0x1001c97bb &quot;&quot;, len=13,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nspace=0xffffffff797fbac0, rank=0xffffffff797fbaa8, version=0xffffffff797fbab8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cred=0xffffffff797fbab0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c:332
<br>
#1  0xffffffff7988cbac in pmix_server_authenticate (sd=29, out_rank=0xffffffff797fbc0c,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peer=0xffffffff797fbc10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c:403
<br>
#2  0xffffffff7988de18 in connection_handler (sd=-1, flags=4, cbdata=0x1001cdc30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c:564
<br>
#3  0xffffffff7ecee634 in event_process_active_single_queue ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-master_64_gcc/lib64/libopen-pal.so.0
<br>
#4  0xffffffff7ecee950 in event_process_active ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-master_64_gcc/lib64/libopen-pal.so.0
<br>
#5  0xffffffff7ecef22c in opal_libevent2022_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-master_64_gcc/lib64/libopen-pal.so.0
<br>
#6  0xffffffff7984b7fc in progress_engine (obj=0x1001bb0b0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/util/progress_threads.c:52
<br>
#7  0xffffffff7d9d8a74 in _lwp_start () from /lib/sparcv9/libc.so.1
<br>
#8  0xffffffff7d9d8a74 in _lwp_start () from /lib/sparcv9/libc.so.1
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) print msg
<br>
$1 = 0x1001c97bb &quot;&quot;
<br>
(gdb) print (int *)msg
<br>
$2 = (int *) 0x1001c97bb
<br>
(gdb) print *(int *)msg
<br>
$3 = 0
<br>
(gdb)
<br>
<p><p><p><p><p><p>sunpc1 fd1026 102 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: dev-4251-g1f651d1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p>sunpc1 fd1026 103 mpiexec -np 2 hello_1_mpi
<br>
[sunpc1:27530] PMIX ERROR: NOT-SUPPORTED in file ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c at 
<br>
line 540
<br>
[sunpc1:27532] PMIX ERROR: UNREACHABLE in file ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/client/pmix_client.c at line 983
<br>
[sunpc1:27532] PMIX ERROR: UNREACHABLE in file ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/client/pmix_client.c at line 199
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;pmix init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Unreachable (-12) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Unreachable (-12) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;&nbsp;ompi_mpi_init: ompi_rte_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[sunpc1:27532] Local abort before MPI_INIT completed completed successfully, but am not able to aggregate error messages, and not able to guarantee that all 
<br>
other processes were killed!
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[26724,1],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
sunpc1 fd1026 104
<br>
<p><p><p>Hopefully you can solve the problem as well. Thank you very much
<br>
for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29422.php">Ralph Castain: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<li><strong>Previous message:</strong> <a href="29420.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29422.php">Ralph Castain: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<li><strong>Reply:</strong> <a href="29422.php">Ralph Castain: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
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
