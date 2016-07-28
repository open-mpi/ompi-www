<?
$subject_val = "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 17:03:52 2011" -->
<!-- isoreceived="20111215220352" -->
<!-- sent="Thu, 15 Dec 2011 15:03:47 -0700 (MST)" -->
<!-- isosent="20111215220347" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)" -->
<!-- id="alpine.OSX.2.00.1112151503150.9108_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="61B8301D-1512-4C7E-884D-FF77C0EFB2E7_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 17:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10148.php">Ralph Castain: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10145.php">Ashley Pittman: "[OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That appears to be a similar problem to the MPIR_Breakpoint bug. Let me play around and see if I can find a fix.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>On Thu, 15 Dec 2011, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a problem with 1.5.5rc1 that prevents padb from loading the process table start from the orterun process, what appears to be happening is that MPIR_proctable and MPIR_proctable_size is present in both orterun itself and also in libopen-rte.so, the code is correctly setting them in libopen-rte.so however when gdb is picking the variable from orterun in preference and hence padb is reading NULL values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a log showing the problem, the only change I made to the source is to add a call to orte_debugger_base_dump() before the return from orte_debugger_base_init_after_spawn(), it looks like this could also have been achieved via a debug setting but I couldn't see how.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ orterun -H c0,c2 -n 2 sleep 100000&amp;
</span><br>
<span class="quotelev1">&gt; [1] 6572
</span><br>
<span class="quotelev1">&gt; ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (0, c0, /cloud/ubuntu/imb_3.2.3/src/sleep, 6574)
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (1, c2, /cloud/ubuntu/imb_3.2.3/src/sleep, 17557)
</span><br>
<span class="quotelev1">&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ ps auwx | grep orterun
</span><br>
<span class="quotelev1">&gt; ubuntu    6572  0.1  0.2  60384  2616 pts/0    S    21:50   0:00 orterun -H c0,c2 -n 2 sleep 100000
</span><br>
<span class="quotelev1">&gt; ubuntu    6576  0.0  0.0   7964   880 pts/0    S+   21:50   0:00 grep --color=auto orterun
</span><br>
<span class="quotelev1">&gt; ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ gdb -p 6572
</span><br>
<span class="quotelev1">&gt; GNU gdb (Ubuntu/Linaro 7.3-0ubuntu2) 7.3-2011.08
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2011 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-linux-gnu&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://bugs.launchpad.net/gdb-linaro/">http://bugs.launchpad.net/gdb-linaro/</a>&gt;.
</span><br>
<span class="quotelev1">&gt; Attaching to process 6572
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/libopen-rte.so.3...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/libopen-rte.so.3
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/libpthread.so.0...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libpthread-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/libc.so.6...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libc-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/libdl.so.2...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libdl-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/libdl.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/libutil.so.1...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libutil-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/libutil.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/ld-linux-x86-64.so.2...(no debugging symbols found)...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_paffinity_hwloc.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_paffinity_hwloc.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_carto_auto_detect.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_carto_auto_detect.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_shmem_mmap.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_shmem_mmap.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/librt.so.1...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/librt-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/librt.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_ess_hnp.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_ess_hnp.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_pstat_linux.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_pstat_linux.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_sysinfo_linux.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_sysinfo_linux.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_plm_rsh.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_rml_oob.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_rml_oob.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_oob_tcp.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_routed_binomial.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_routed_binomial.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_grpcomm_bad.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_grpcomm_bad.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_rmaps_round_robin.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_rmaps_round_robin.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_errmgr_default.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_errmgr_default.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_odls_default.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_odls_default.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/libnss_compat.so.2...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libnss_compat-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/libnss_compat.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/libnsl.so.1...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libnsl-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/libnss_nis.so.2...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libnss_nis-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/libnss_nis.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib/x86_64-linux-gnu/libnss_files.so.2...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libnss_files-2.13.so...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/x86_64-linux-gnu/libnss_files.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_iof_hnp.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_iof_hnp.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_filem_rsh.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_filem_rsh.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_debugger_mpir.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_debugger_mpir.so
</span><br>
<span class="quotelev1">&gt; 0x00007f09d37b4738 in __GI___poll (fds=0xb89010, nfds=10, timeout=1000) at ../sysdeps/unix/sysv/linux/poll.c:83
</span><br>
<span class="quotelev1">&gt; 83	../sysdeps/unix/sysv/linux/poll.c: No such file or directory.
</span><br>
<span class="quotelev1">&gt; 	in ../sysdeps/unix/sysv/linux/poll.c
</span><br>
<span class="quotelev1">&gt; (gdb) p MPIR_proctable_size
</span><br>
<span class="quotelev1">&gt; $1 = 0
</span><br>
<span class="quotelev1">&gt; (gdb) p MPIR_proctable
</span><br>
<span class="quotelev1">&gt; $1 = (struct MPIR_PROCDESC *) 0x0
</span><br>
<span class="quotelev1">&gt; (gdb) quit
</span><br>
<span class="quotelev1">&gt; A debugging session is active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Inferior 1 [process 6572] will be detached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quit anyway? (y or n) y
</span><br>
<span class="quotelev1">&gt; Detaching from program: /cloud/ubuntu/openmpi-1.5.5rc1/bin/orterun, process 6572
</span><br>
<span class="quotelev1">&gt; ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ nm /cloud/ubuntu/openmpi-1.5.5rc1/bin/orterun | grep MPIR
</span><br>
<span class="quotelev1">&gt;                 U MPIR_Breakpoint
</span><br>
<span class="quotelev1">&gt; 000000000060dc60 B MPIR_attach_fifo
</span><br>
<span class="quotelev1">&gt; 000000000060e994 B MPIR_being_debugged
</span><br>
<span class="quotelev1">&gt; 000000000060e238 B MPIR_debug_state
</span><br>
<span class="quotelev1">&gt; 000000000060de60 B MPIR_executable_path
</span><br>
<span class="quotelev1">&gt; 000000000060e990 B MPIR_force_to_main
</span><br>
<span class="quotelev1">&gt; 000000000060e0c4 B MPIR_forward_comm
</span><br>
<span class="quotelev1">&gt; 000000000060e980 B MPIR_forward_output
</span><br>
<span class="quotelev1">&gt; 000000000060e8c8 B MPIR_i_am_starter
</span><br>
<span class="quotelev1">&gt; 000000000060e0c0 B MPIR_partial_attach_ok
</span><br>
<span class="quotelev1">&gt; 000000000060e988 B MPIR_proctable
</span><br>
<span class="quotelev1">&gt; 000000000060e7c0 B MPIR_proctable_size
</span><br>
<span class="quotelev1">&gt; 000000000060e360 B MPIR_server_arguments
</span><br>
<span class="quotelev1">&gt; ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ ldd /cloud/ubuntu/openmpi-1.5.5rc1/bin/orterun
</span><br>
<span class="quotelev1">&gt; 	linux-vdso.so.1 =&gt;  (0x00007fff8eec2000)
</span><br>
<span class="quotelev1">&gt; 	libopen-rte.so.3 =&gt; /cloud/ubuntu/openmpi-1.5.5rc1/lib/libopen-rte.so.3 (0x00007f875b209000)
</span><br>
<span class="quotelev1">&gt; 	libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f875afe5000)
</span><br>
<span class="quotelev1">&gt; 	libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f875ac45000)
</span><br>
<span class="quotelev1">&gt; 	libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f875aa41000)
</span><br>
<span class="quotelev1">&gt; 	libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007f875a83e000)
</span><br>
<span class="quotelev1">&gt; 	/lib64/ld-linux-x86-64.so.2 (0x00007f875b504000)
</span><br>
<span class="quotelev1">&gt; ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ nm /cloud/ubuntu/openmpi-1.5.5rc1/lib/libopen-rte.so.3 | grep MPIR
</span><br>
<span class="quotelev1">&gt; 0000000000048da0 T MPIR_Breakpoint
</span><br>
<span class="quotelev1">&gt; 00000000002f5ac0 B MPIR_attach_fifo
</span><br>
<span class="quotelev1">&gt; 00000000002f1dcc B MPIR_being_debugged
</span><br>
<span class="quotelev1">&gt; 00000000002f1dc8 B MPIR_debug_state
</span><br>
<span class="quotelev1">&gt; 00000000002f5cc0 B MPIR_executable_path
</span><br>
<span class="quotelev1">&gt; 00000000002f1db8 B MPIR_force_to_main
</span><br>
<span class="quotelev1">&gt; 00000000002f1dbc B MPIR_forward_comm
</span><br>
<span class="quotelev1">&gt; 00000000002f1dc0 B MPIR_forward_output
</span><br>
<span class="quotelev1">&gt; 00000000002f1dc4 B MPIR_i_am_starter
</span><br>
<span class="quotelev1">&gt; 00000000002ef4e0 D MPIR_partial_attach_ok
</span><br>
<span class="quotelev1">&gt; 00000000002f1dd8 B MPIR_proctable
</span><br>
<span class="quotelev1">&gt; 00000000002f1dd0 B MPIR_proctable_size
</span><br>
<span class="quotelev1">&gt; 00000000002f5ee0 B MPIR_server_arguments
</span><br>
<span class="quotelev1">&gt; ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10148.php">Ralph Castain: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10145.php">Ashley Pittman: "[OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
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
