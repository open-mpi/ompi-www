<?
$subject_val = "[OMPI devel] MPIR attach from padb broken (1.5.5rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 16:55:33 2011" -->
<!-- isoreceived="20111215215533" -->
<!-- sent="Thu, 15 Dec 2011 21:55:20 +0000" -->
<!-- isosent="20111215215520" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] MPIR attach from padb broken (1.5.5rc1)" -->
<!-- id="61B8301D-1512-4C7E-884D-FF77C0EFB2E7_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] MPIR attach from padb broken (1.5.5rc1)<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 16:55:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10144.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Reply:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Reply:</strong> <a href="10147.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a problem with 1.5.5rc1 that prevents padb from loading the process table start from the orterun process, what appears to be happening is that MPIR_proctable and MPIR_proctable_size is present in both orterun itself and also in libopen-rte.so, the code is correctly setting them in libopen-rte.so however when gdb is picking the variable from orterun in preference and hence padb is reading NULL values.
<br>
<p>Attached is a log showing the problem, the only change I made to the source is to add a call to orte_debugger_base_dump() before the return from orte_debugger_base_init_after_spawn(), it looks like this could also have been achieved via a debug setting but I couldn't see how.
<br>
<p>Ashley.
<br>
<p>ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ orterun -H c0,c2 -n 2 sleep 100000&amp;
<br>
[1] 6572
<br>
ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$   MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, c0, /cloud/ubuntu/imb_3.2.3/src/sleep, 6574)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, c2, /cloud/ubuntu/imb_3.2.3/src/sleep, 17557)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
<p>ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ ps auwx | grep orterun
<br>
ubuntu    6572  0.1  0.2  60384  2616 pts/0    S    21:50   0:00 orterun -H c0,c2 -n 2 sleep 100000
<br>
ubuntu    6576  0.0  0.0   7964   880 pts/0    S+   21:50   0:00 grep --color=auto orterun
<br>
ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ gdb -p 6572
<br>
GNU gdb (Ubuntu/Linaro 7.3-0ubuntu2) 7.3-2011.08
<br>
Copyright (C) 2011 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-linux-gnu&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://bugs.launchpad.net/gdb-linaro/">http://bugs.launchpad.net/gdb-linaro/</a>&gt;.
<br>
Attaching to process 6572
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/bin/orterun...done.
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/libopen-rte.so.3...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/libopen-rte.so.3
<br>
Reading symbols from /lib/x86_64-linux-gnu/libpthread.so.0...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libpthread-2.13.so...done.
<br>
[Thread debugging using libthread_db enabled]
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/libpthread.so.0
<br>
Reading symbols from /lib/x86_64-linux-gnu/libc.so.6...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libc-2.13.so...done.
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/libc.so.6
<br>
Reading symbols from /lib/x86_64-linux-gnu/libdl.so.2...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libdl-2.13.so...done.
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/libdl.so.2
<br>
Reading symbols from /lib/x86_64-linux-gnu/libutil.so.1...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libutil-2.13.so...done.
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/libutil.so.1
<br>
Reading symbols from /lib64/ld-linux-x86-64.so.2...(no debugging symbols found)...done.
<br>
Loaded symbols for /lib64/ld-linux-x86-64.so.2
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_paffinity_hwloc.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_paffinity_hwloc.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_carto_auto_detect.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_carto_auto_detect.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_shmem_mmap.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_shmem_mmap.so
<br>
Reading symbols from /lib/x86_64-linux-gnu/librt.so.1...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/librt-2.13.so...done.
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/librt.so.1
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_ess_hnp.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_ess_hnp.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_pstat_linux.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_pstat_linux.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_sysinfo_linux.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_sysinfo_linux.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_plm_rsh.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_plm_rsh.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_rml_oob.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_rml_oob.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_oob_tcp.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_oob_tcp.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_routed_binomial.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_routed_binomial.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_grpcomm_bad.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_grpcomm_bad.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_rmaps_round_robin.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_rmaps_round_robin.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_errmgr_default.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_errmgr_default.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_odls_default.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_odls_default.so
<br>
Reading symbols from /lib/x86_64-linux-gnu/libnss_compat.so.2...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libnss_compat-2.13.so...done.
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/libnss_compat.so.2
<br>
Reading symbols from /lib/x86_64-linux-gnu/libnsl.so.1...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libnsl-2.13.so...done.
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/libnsl.so.1
<br>
Reading symbols from /lib/x86_64-linux-gnu/libnss_nis.so.2...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libnss_nis-2.13.so...done.
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/libnss_nis.so.2
<br>
Reading symbols from /lib/x86_64-linux-gnu/libnss_files.so.2...Reading symbols from /usr/lib/debug/lib/x86_64-linux-gnu/libnss_files-2.13.so...done.
<br>
done.
<br>
Loaded symbols for /lib/x86_64-linux-gnu/libnss_files.so.2
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_iof_hnp.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_iof_hnp.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_filem_rsh.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_filem_rsh.so
<br>
Reading symbols from /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_debugger_mpir.so...done.
<br>
Loaded symbols for /cloud/ubuntu/openmpi-1.5.5rc1/lib/openmpi/mca_debugger_mpir.so
<br>
0x00007f09d37b4738 in __GI___poll (fds=0xb89010, nfds=10, timeout=1000) at ../sysdeps/unix/sysv/linux/poll.c:83
<br>
83	../sysdeps/unix/sysv/linux/poll.c: No such file or directory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in ../sysdeps/unix/sysv/linux/poll.c
<br>
(gdb) p MPIR_proctable_size
<br>
$1 = 0
<br>
(gdb) p MPIR_proctable
<br>
$1 = (struct MPIR_PROCDESC *) 0x0
<br>
(gdb) quit
<br>
A debugging session is active.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inferior 1 [process 6572] will be detached.
<br>
<p>Quit anyway? (y or n) y
<br>
Detaching from program: /cloud/ubuntu/openmpi-1.5.5rc1/bin/orterun, process 6572
<br>
ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ nm /cloud/ubuntu/openmpi-1.5.5rc1/bin/orterun | grep MPIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U MPIR_Breakpoint
<br>
000000000060dc60 B MPIR_attach_fifo
<br>
000000000060e994 B MPIR_being_debugged
<br>
000000000060e238 B MPIR_debug_state
<br>
000000000060de60 B MPIR_executable_path
<br>
000000000060e990 B MPIR_force_to_main
<br>
000000000060e0c4 B MPIR_forward_comm
<br>
000000000060e980 B MPIR_forward_output
<br>
000000000060e8c8 B MPIR_i_am_starter
<br>
000000000060e0c0 B MPIR_partial_attach_ok
<br>
000000000060e988 B MPIR_proctable
<br>
000000000060e7c0 B MPIR_proctable_size
<br>
000000000060e360 B MPIR_server_arguments
<br>
ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ ldd /cloud/ubuntu/openmpi-1.5.5rc1/bin/orterun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff8eec2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.3 =&gt; /cloud/ubuntu/openmpi-1.5.5rc1/lib/libopen-rte.so.3 (0x00007f875b209000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f875afe5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f875ac45000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f875aa41000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007f875a83e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f875b504000)
<br>
ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ nm /cloud/ubuntu/openmpi-1.5.5rc1/lib/libopen-rte.so.3 | grep MPIR
<br>
0000000000048da0 T MPIR_Breakpoint
<br>
00000000002f5ac0 B MPIR_attach_fifo
<br>
00000000002f1dcc B MPIR_being_debugged
<br>
00000000002f1dc8 B MPIR_debug_state
<br>
00000000002f5cc0 B MPIR_executable_path
<br>
00000000002f1db8 B MPIR_force_to_main
<br>
00000000002f1dbc B MPIR_forward_comm
<br>
00000000002f1dc0 B MPIR_forward_output
<br>
00000000002f1dc4 B MPIR_i_am_starter
<br>
00000000002ef4e0 D MPIR_partial_attach_ok
<br>
00000000002f1dd8 B MPIR_proctable
<br>
00000000002f1dd0 B MPIR_proctable_size
<br>
00000000002f5ee0 B MPIR_server_arguments
<br>
ubuntu_at_c0:/cloud/ubuntu/imb_3.2.3/src$ 
<br>
<p><p><p>Ashley.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10144.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Reply:</strong> <a href="10146.php">George Bosilca: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Reply:</strong> <a href="10147.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
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
