<?
$subject_val = "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 15:09:15 2016" -->
<!-- isoreceived="20160609190915" -->
<!-- sent="Thu, 9 Jun 2016 12:09:12 -0700" -->
<!-- isosent="20160609190912" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)" -->
<!-- id="7643348E-D364-48F9-B65B-A9151305E811_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="143559c3-ce91-f571-3d39-ea79fab39734_at_informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-09 15:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29423.php">Grodowitz, Nathan T.: "[OMPI users] Openib Selection and Dual Port ConnectX"</a>
<li><strong>Previous message:</strong> <a href="29421.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<li><strong>In reply to:</strong> <a href="29421.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just pushed the fix to master today - not required for 2.x.
<br>
<p><span class="quotelev1">&gt; On Jun 9, 2016, at 10:44 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 08.06.2016 um 21:19 schrieb rhc54:
</span><br>
<span class="quotelev2">&gt;&gt; Closed #1771 &lt;<a href="https://github.com/open-mpi/ompi/issues/1771">https://github.com/open-mpi/ompi/issues/1771</a>&gt; via #1772 &lt;<a href="https://github.com/open-mpi/ompi/pull/1772">https://github.com/open-mpi/ompi/pull/1772</a>&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help. Now I have new problems
</span><br>
<span class="quotelev1">&gt; with the same program on my Sparc and x86_64 Solaris machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 106 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: dev-4251-g1f651d1
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 107 mpiexec -np 2 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; [tyr:08647] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:08647] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:08647] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:08647] Failing at address: 1001c94eb
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:0xdefa4
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so:0x8c800 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so:0x8cba4
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so:0x8de10
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:0xee62c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:0xee948
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/libopen-pal.so.0.0.0:opal_libevent2022_event_base_loop+0x310
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so:0x4b7f4
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8a6c
</span><br>
<span class="quotelev1">&gt; [tyr:08647] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Bus error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 108 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /export2/prog/SunOS_sparc/openmpi-master_64_gcc/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt; (gdb) set args -np 2 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; (gdb) r
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-master_64_gcc/bin/mpiexec -np 2 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; [New LWP    3        ]
</span><br>
<span class="quotelev1">&gt; [New LWP    4        ]
</span><br>
<span class="quotelev1">&gt; [New LWP    5        ]
</span><br>
<span class="quotelev1">&gt; [New Thread 3 (LWP 3)]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 3 (LWP 3)]
</span><br>
<span class="quotelev1">&gt; 0xffffffff7988c800 in parse_connect_ack (msg=0x1001c97bb &quot;&quot;, len=13, nspace=0xffffffff797fbac0,
</span><br>
<span class="quotelev1">&gt;    rank=0xffffffff797fbaa8, version=0xffffffff797fbab8, cred=0xffffffff797fbab0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c:332
</span><br>
<span class="quotelev1">&gt; 332             *rank = *(int *)msg;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7988c800 in parse_connect_ack (msg=0x1001c97bb &quot;&quot;, len=13,
</span><br>
<span class="quotelev1">&gt;    nspace=0xffffffff797fbac0, rank=0xffffffff797fbaa8, version=0xffffffff797fbab8,
</span><br>
<span class="quotelev1">&gt;    cred=0xffffffff797fbab0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c:332
</span><br>
<span class="quotelev1">&gt; #1  0xffffffff7988cbac in pmix_server_authenticate (sd=29, out_rank=0xffffffff797fbc0c,
</span><br>
<span class="quotelev1">&gt;    peer=0xffffffff797fbc10)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c:403
</span><br>
<span class="quotelev1">&gt; #2  0xffffffff7988de18 in connection_handler (sd=-1, flags=4, cbdata=0x1001cdc30)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c:564
</span><br>
<span class="quotelev1">&gt; #3  0xffffffff7ecee634 in event_process_active_single_queue ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-master_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0xffffffff7ecee950 in event_process_active ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-master_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #5  0xffffffff7ecef22c in opal_libevent2022_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-master_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #6  0xffffffff7984b7fc in progress_engine (obj=0x1001bb0b0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/util/progress_threads.c:52
</span><br>
<span class="quotelev1">&gt; #7  0xffffffff7d9d8a74 in _lwp_start () from /lib/sparcv9/libc.so.1
</span><br>
<span class="quotelev1">&gt; #8  0xffffffff7d9d8a74 in _lwp_start () from /lib/sparcv9/libc.so.1
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) print msg
</span><br>
<span class="quotelev1">&gt; $1 = 0x1001c97bb &quot;&quot;
</span><br>
<span class="quotelev1">&gt; (gdb) print (int *)msg
</span><br>
<span class="quotelev1">&gt; $2 = (int *) 0x1001c97bb
</span><br>
<span class="quotelev1">&gt; (gdb) print *(int *)msg
</span><br>
<span class="quotelev1">&gt; $3 = 0
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 102 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: dev-4251-g1f651d1
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 103 mpiexec -np 2 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; [sunpc1:27530] PMIX ERROR: NOT-SUPPORTED in file ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/server/pmix_server_listener.c at line 540
</span><br>
<span class="quotelev1">&gt; [sunpc1:27532] PMIX ERROR: UNREACHABLE in file ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/client/pmix_client.c at line 983
</span><br>
<span class="quotelev1">&gt; [sunpc1:27532] PMIX ERROR: UNREACHABLE in file ../../../../../../openmpi-dev-4251-g1f651d1/opal/mca/pmix/pmix114/pmix/src/client/pmix_client.c at line 199
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  pmix init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unreachable (-12) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unreachable (-12) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;  ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [sunpc1:27532] Local abort before MPI_INIT completed completed successfully, but am not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[26724,1],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 104
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully you can solve the problem as well. Thank you very much
</span><br>
<span class="quotelev1">&gt; for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29421.php">http://www.open-mpi.org/community/lists/users/2016/06/29421.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29423.php">Grodowitz, Nathan T.: "[OMPI users] Openib Selection and Dual Port ConnectX"</a>
<li><strong>Previous message:</strong> <a href="29421.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<li><strong>In reply to:</strong> <a href="29421.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
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
