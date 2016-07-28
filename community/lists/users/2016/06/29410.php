<?
$subject_val = "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 09:33:56 2016" -->
<!-- isoreceived="20160608133356" -->
<!-- sent="Wed, 8 Jun 2016 13:33:52 +0000" -->
<!-- isosent="20160608133352" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol" -->
<!-- id="A8440177-85DC-4253-91A8-3BC0C8B69C41_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUk=k5Oz_vSJ6+suT5W6yRL9qxiS3ekyNj63WvoWEgQVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 09:33:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29411.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29409.php">Kristina Tesch: "[OMPI users] cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>In reply to:</strong> <a href="29407.php">George Bosilca: "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Filed <a href="https://github.com/open-mpi/ompi/issues/1771">https://github.com/open-mpi/ompi/issues/1771</a> to track the issue.
<br>
<p><span class="quotelev1">&gt; On Jun 8, 2016, at 1:47 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apparently Solaris 10 lacks support for strnlen. We should add it to our configure and provide a replacement where needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 8, 2016 at 4:30 PM, Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built openmpi-dev-4221-gb707d13  on my machines (Solaris 10
</span><br>
<span class="quotelev1">&gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev1">&gt; gcc-5.1.0 and Sun C 5.13. Unfortunately I get an error for a small
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 109 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: dev-4221-gb707d13
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 110 mpiexec -np 4 --host tyr,sunpc1,linpc1,tyr hello_1_mpi
</span><br>
<span class="quotelev1">&gt; ld.so.1: orted: fatal: relocation error: file /usr/local/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so: symbol strnlen: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE has lost communication with its daemon located on node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   hostname:  sunpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is usually due to either a failure of the TCP network
</span><br>
<span class="quotelev1">&gt; connection to the node, or possibly an internal failure of
</span><br>
<span class="quotelev1">&gt; the daemon itself. We cannot recover from this failure, and
</span><br>
<span class="quotelev1">&gt; therefore will terminate the job.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the same error, if I login on a Solaris x86_64 machine and only use
</span><br>
<span class="quotelev1">&gt; that machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 101 mpiexec -np 2 --host sunpc1,sunpc1 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; ld.so.1: orterun: fatal: relocation error: file /usr/local/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so: symbol strnlen: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; Killed
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 102
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
<span class="quotelev1">&gt; tyr hello_1 111 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /export2/prog/SunOS_sparc/openmpi-master_64_gcc/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt; (gdb) set args -np 4 --host tyr,sunpc1,linpc1,tyr hello_1_mpi
</span><br>
<span class="quotelev1">&gt; (gdb) r
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-master_64_gcc/bin/mpiexec -np 4 --host tyr,sunpc1,linpc1,tyr hello_1_mpi
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
<span class="quotelev1">&gt; ld.so.1: orted: fatal: relocation error: file /usr/local/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so: symbol strnlen: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE has lost communication with its daemon located on node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   hostname:  sunpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is usually due to either a failure of the TCP network
</span><br>
<span class="quotelev1">&gt; connection to the node, or possibly an internal failure of
</span><br>
<span class="quotelev1">&gt; the daemon itself. We cannot recover from this failure, and
</span><br>
<span class="quotelev1">&gt; therefore will terminate the job.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [LWP    5         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 5        ]
</span><br>
<span class="quotelev1">&gt; [LWP    4         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 4        ]
</span><br>
<span class="quotelev1">&gt; [LWP    3         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 3        ]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev1">&gt; (gdb) Killed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #8  0xffffffff7ece8d30 in dlopen_close (handle=0x1001a8350)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-dev-4221-gb707d13/opal/mca/dl/dlopen/dl_dlopen_module.c:148
</span><br>
<span class="quotelev1">&gt; #9  0xffffffff7ece8464 in opal_dl_close (handle=0x1001a8350)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/dl/base/dl_base_fns.c:53
</span><br>
<span class="quotelev1">&gt; #10 0xffffffff7ecab1c0 in mca_base_component_repository_release_internal (ri=0x1001406d0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_component_repository.c:280
</span><br>
<span class="quotelev1">&gt; #11 0xffffffff7ecab338 in mca_base_component_repository_release (
</span><br>
<span class="quotelev1">&gt;     component=0xffffffff799a70c0 &lt;mca_pmix_pmix114_component&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_component_repository.c:317
</span><br>
<span class="quotelev1">&gt; #12 0xffffffff7ecad0d8 in mca_base_component_unload (
</span><br>
<span class="quotelev1">&gt;     component=0xffffffff799a70c0 &lt;mca_pmix_pmix114_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_components_close.c:46
</span><br>
<span class="quotelev1">&gt; #13 0xffffffff7ecad170 in mca_base_component_close (
</span><br>
<span class="quotelev1">&gt;     component=0xffffffff799a70c0 &lt;mca_pmix_pmix114_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_components_close.c:59
</span><br>
<span class="quotelev1">&gt; #14 0xffffffff7ecad240 in mca_base_components_close (output_id=-1,
</span><br>
<span class="quotelev1">&gt;     components=0xffffffff7ee9f558 &lt;opal_pmix_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_components_close.c:85
</span><br>
<span class="quotelev1">&gt; #15 0xffffffff7ecad1b0 in mca_base_framework_components_close (
</span><br>
<span class="quotelev1">&gt;     framework=0xffffffff7ee9f508 &lt;opal_pmix_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_components_close.c:65
</span><br>
<span class="quotelev1">&gt; #16 0xffffffff7ed4921c in opal_pmix_base_frame_close ()
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/pmix/base/pmix_base_frame.c:57
</span><br>
<span class="quotelev1">&gt; #17 0xffffffff7ecc3418 in mca_base_framework_close (
</span><br>
<span class="quotelev1">&gt;     framework=0xffffffff7ee9f508 &lt;opal_pmix_base_framework&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/opal/mca/base/mca_base_framework.c:214
</span><br>
<span class="quotelev1">&gt; #18 0xffffffff7c20782c in rte_finalize ()
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-dev-4221-gb707d13/orte/mca/ess/hnp/ess_hnp_module.c:795
</span><br>
<span class="quotelev1">&gt; #19 0xffffffff7ef39e20 in orte_finalize ()
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-4221-gb707d13/orte/runtime/orte_finalize.c:73
</span><br>
<span class="quotelev1">&gt; #20 0x0000000100002d08 in orterun (argc=6, argv=0xffffffff7fffdf88)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/orte/tools/orterun/orterun.c:293
</span><br>
<span class="quotelev1">&gt; #21 0x0000000100001928 in main (argc=6, argv=0xffffffff7fffdf88)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-4221-gb707d13/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) q
</span><br>
<span class="quotelev1">&gt; A debugging session is active.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Inferior 1 [process 27925    ] will be killed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quit anyway? (y or n) y
</span><br>
<span class="quotelev1">&gt; Quitting: sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev1">&gt; tyr hello_1 112
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
<span class="quotelev1">&gt; tyr hello_1 112 mpiexec -np 4 --host tyr,linpc1,linpc1,tyr hello_1_mpi
</span><br>
<span class="quotelev1">&gt; ld.so.1: orterun: fatal: relocation error: file /usr/local/openmpi-master_64_gcc/lib64/openmpi/mca_pmix_pmix114.so: symbol strnlen: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; Killed
</span><br>
<span class="quotelev1">&gt; tyr hello_1 113 Speicherschutzverletzung
</span><br>
<span class="quotelev1">&gt; [linpc1:25689] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [linpc1:25689] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [linpc1:25689] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [linpc1:25689] Failing at address: 0x7f721f828aa1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 113
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Please let me
</span><br>
<span class="quotelev1">&gt; know, if you need more information. Thank you very much for any help
</span><br>
<span class="quotelev1">&gt; in advance.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29405.php">http://www.open-mpi.org/community/lists/users/2016/06/29405.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29407.php">http://www.open-mpi.org/community/lists/users/2016/06/29407.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29411.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29409.php">Kristina Tesch: "[OMPI users] cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>In reply to:</strong> <a href="29407.php">George Bosilca: "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
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
