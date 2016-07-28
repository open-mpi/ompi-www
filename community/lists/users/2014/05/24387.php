<?
$subject_val = "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 15:04:10 2014" -->
<!-- isoreceived="20140515190410" -->
<!-- sent="Thu, 15 May 2014 19:04:07 +0000" -->
<!-- isosent="20140515190407" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
<!-- id="861EEE07-D5A5-43A6-BB0B-C3D509C12BE1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7364DA49-313A-4B6A-9A35-22E9FCBBBC4D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 15:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24388.php">Ajay Nair: "[OMPI users] openMPI in 64 bit"</a>
<li><strong>Previous message:</strong> <a href="24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>In reply to:</strong> <a href="24380.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24414.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This bug should be fixed in tonight's tarball, BTW.
<br>
<p><p>On May 15, 2014, at 9:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is an unrelated bug introduced by a different commit - causing mpirun to segfault upon termination. The fact that you got the hostname to run indicates that this original fix works, so at least we know the connection logic is now okay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 15, 2014, at 3:40 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just committed a potential fix to the trunk - please let me know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if it worked for you
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now I get the hostnames but also a segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 101 which mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.9_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 102 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev2">&gt;&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt; linpc1
</span><br>
<span class="quotelev2">&gt;&gt; sunpc1
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:22835] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:22835] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:22835] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:22835] Failing at address: ffffffff7bf16de0
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x1c
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x183960
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev2">&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1ce0e8 [ Signal 2125151224 (?)]
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1ccde4
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_libevent2021_event_del+0x88
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_libevent2021_event_base_free+0x154
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1bb9e8
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:mca_base_framework_close+0x1a0
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_finalize+0xcc
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:orte_finalize+0x168
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun:orterun+0x23e0
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev2">&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun:_start+0x12c
</span><br>
<span class="quotelev2">&gt;&gt; [tyr:22835] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 103 ompi_info | grep &quot;revision:&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI repo revision: r31769
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE repo revision: r31769
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL repo revision: r31769
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the following output in &quot;dbx&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 104 /opt/solstudio12.3/bin/sparcv9/dbx /usr/local/openmpi-1.9_64_cc/bin/mpiexec 
</span><br>
<span class="quotelev2">&gt;&gt; For information about new features see `help changes'
</span><br>
<span class="quotelev2">&gt;&gt; To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
</span><br>
<span class="quotelev2">&gt;&gt; Reading mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; Reading ld.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libopen-rte.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; Reading libopen-pal.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; Reading libsendfile.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libpicl.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libkstat.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading liblgrp.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libsocket.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libnsl.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading librt.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libm.so.2
</span><br>
<span class="quotelev2">&gt;&gt; Reading libthread.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libc.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libdoor.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libaio.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libmd.so.1
</span><br>
<span class="quotelev2">&gt;&gt; (dbx) run -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev2">&gt;&gt; Running: mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname 
</span><br>
<span class="quotelev2">&gt;&gt; (process id 23328)
</span><br>
<span class="quotelev2">&gt;&gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_shmem_mmap.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading libmp.so.2
</span><br>
<span class="quotelev2">&gt;&gt; Reading libscf.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libuutil.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading libgen.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_shmem_posix.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_shmem_sysv.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_sec_basic.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_ess_env.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_ess_hnp.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_ess_singleton.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_ess_tool.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_pstat_test.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_state_app.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_state_hnp.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_state_novm.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_state_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_state_staged_hnp.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_state_staged_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_state_tool.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_errmgr_default_app.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_errmgr_default_hnp.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_errmgr_default_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_errmgr_default_tool.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_plm_isolated.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_oob_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rml_oob.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_routed_binomial.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_routed_debruijn.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_routed_direct.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_routed_radix.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_dstore_hash.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_grpcomm_bad.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_ras_simulator.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rmaps_lama.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rmaps_mindist.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rmaps_ppr.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rmaps_rank_file.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rmaps_resilient.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rmaps_round_robin.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rmaps_seq.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rmaps_staged.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_odls_default.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_rtc_hwloc.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_iof_hnp.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_iof_mr_hnp.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_iof_mr_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_iof_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_iof_tool.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_filem_raw.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_dfs_app.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_dfs_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading mca_dfs_test.so
</span><br>
<span class="quotelev2">&gt;&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt; linpc1
</span><br>
<span class="quotelev2">&gt;&gt; sunpc1
</span><br>
<span class="quotelev2">&gt;&gt; t_at_1 (l_at_1) signal SEGV (no mapping at the fault address) in event_queue_remove at 0xffffffff7e9ce0e8
</span><br>
<span class="quotelev2">&gt;&gt; 0xffffffff7e9ce0e8: event_queue_remove+0x01a8:  stx      %l0, [%l3 + 24]
</span><br>
<span class="quotelev2">&gt;&gt; Current function is opal_event_base_close
</span><br>
<span class="quotelev2">&gt;&gt;   62       opal_event_base_free (opal_event_base);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (dbx) check -all
</span><br>
<span class="quotelev2">&gt;&gt; dbx: warning: check -all will be turned on in the next run of the process
</span><br>
<span class="quotelev2">&gt;&gt; access checking - OFF
</span><br>
<span class="quotelev2">&gt;&gt; memuse checking - OFF
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (dbx) run -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev2">&gt;&gt; Running: mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname 
</span><br>
<span class="quotelev2">&gt;&gt; (process id 23337)
</span><br>
<span class="quotelev2">&gt;&gt; Reading rtcapihook.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading libdl.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading rtcaudit.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading libmapmalloc.so.1
</span><br>
<span class="quotelev2">&gt;&gt; Reading rtcboot.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading librtc.so
</span><br>
<span class="quotelev2">&gt;&gt; Reading libmd_psr.so.1
</span><br>
<span class="quotelev2">&gt;&gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev2">&gt;&gt; RTC: Using UltraSparc trap mechanism
</span><br>
<span class="quotelev2">&gt;&gt; RTC: See `help rtc showmap' and `help rtc limitations' for details.
</span><br>
<span class="quotelev2">&gt;&gt; RTC: Running program...
</span><br>
<span class="quotelev2">&gt;&gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev2">&gt;&gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev2">&gt;&gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff56574da0
</span><br>
<span class="quotelev2">&gt;&gt; 0xffffffff56574da0: _readdir+0x0064:    call     _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff56742a80
</span><br>
<span class="quotelev2">&gt;&gt; Current function is find_dyn_components
</span><br>
<span class="quotelev2">&gt;&gt;  393                       if (0 != lt_dlforeachfile(dir, save_filename, NULL)) {
</span><br>
<span class="quotelev2">&gt;&gt; (dbx) 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you need anything else?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; KInd regards
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 14, 2014, at 11:44 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmmm...well, that's an interesting naming scheme :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try adding &quot;-mca oob_base_verbose 10 --report-uri -&quot; on your cmd line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and let's see what it thinks is happening
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 105 mpiexec -np 3 --host tyr,sunpc1,linpc1 --mca oob_base_verbose 10 --report-uri - hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] oob:tcp: component_available called
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:tcp:init creating module for V4 address on interface bge0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] creating OOB-TCP module for interface bge0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:tcp:init adding 193.174.24.39 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] TCP STARTUP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] assigned IPv4 port 55567
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3170566144.0;tcp://193.174.24.39:55567
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] oob:tcp: component_available called
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] oob:tcp:init creating module for V4 address on interface nge0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] creating OOB-TCP module for interface nge0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] oob:tcp:init adding 193.174.26.210 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] TCP STARTUP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] assigned IPv4 port 39616
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]: set_addr to uri 3170566144.0;tcp://193.174.24.39:55567
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]:set_addr checking if peer [[48379,0],0] is reachable via component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] oob:tcp: working peer [[48379,0],0] address tcp://193.174.24.39:55567
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] UNFOUND KERNEL INDEX -13 FOR ADDRESS 193.174.24.39
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] PEER [[48379,0],0] MAY BE REACHABLE BY ROUTING - ASSIGNING MODULE AT KINDEX 2 
</span><br>
<span class="quotelev2">&gt;&gt; INTERFACE nge0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] PASSING ADDR 193.174.24.39 TO INTERFACE nge0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]:tcp set addr for peer [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]: peer [[48379,0],0] is reachable via component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] OOB_SEND: ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]:tcp:processing set_peer cmd for interface nge0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] oob:base:send to target [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] oob:tcp:send_nb to peer [[48379,0],0]:10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] tcp:send_nb to peer [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:508] post send to 
</span><br>
<span class="quotelev2">&gt;&gt; [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:442] processing 
</span><br>
<span class="quotelev2">&gt;&gt; send to peer 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[48379,0],0]:10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:476] queue pending 
</span><br>
<span class="quotelev2">&gt;&gt; to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] tcp:send_nb: initiating connection to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:490] connect to 
</span><br>
<span class="quotelev2">&gt;&gt; [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface 
</span><br>
<span class="quotelev2">&gt;&gt; nge0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] oob:tcp:peer creating socket to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface 
</span><br>
<span class="quotelev2">&gt;&gt; nge0 on socket 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] on 
</span><br>
<span class="quotelev2">&gt;&gt; 193.174.24.39:55567 - 0 retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] mca_oob_tcp_listen_thread: new connection: (15, 0) 
</span><br>
<span class="quotelev2">&gt;&gt; 193.174.26.210:39617
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] connection_handler: working connection (15, 11) 
</span><br>
<span class="quotelev2">&gt;&gt; 193.174.26.210:39617
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] CONNECTION REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] waiting for connect completion to [[48379,0],0] - activating send event
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] tcp:send_handler called to send to peer [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1]:tcp:complete_connect called for peer [[48379,0],0] on socket 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] tcp_peer_complete_connect: sending ack to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] SEND CONNECT ACK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] send blocking of 48 bytes to socket 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] connect-ack sent to socket 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:07690] [[48379,0],1] tcp_peer_complete_connect: setting read event on connection to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] oob:tcp: component_available called
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] oob:tcp:init creating module for V4 address on interface eth0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] creating OOB-TCP module for interface eth0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] oob:tcp:init adding 193.174.26.208 to our list of V4 connections
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] TCP STARTUP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] assigned IPv4 port 39724
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]: set_addr to uri 3170566144.0;tcp://193.174.24.39:55567
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]:set_addr checking if peer [[48379,0],0] is reachable via component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] oob:tcp: working peer [[48379,0],0] address tcp://193.174.24.39:55567
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] UNFOUND KERNEL INDEX -13 FOR ADDRESS 193.174.24.39
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] PEER [[48379,0],0] MAY BE REACHABLE BY ROUTING - ASSIGNING MODULE AT KINDEX 2 
</span><br>
<span class="quotelev2">&gt;&gt; INTERFACE eth0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] PASSING ADDR 193.174.24.39 TO INTERFACE eth0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]:tcp set addr for peer [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]: peer [[48379,0],0] is reachable via component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] OOB_SEND: ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]:tcp:processing set_peer cmd for interface eth0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] oob:base:send to target [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] oob:tcp:send_nb to peer [[48379,0],0]:10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] tcp:send_nb to peer [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:508] post send to 
</span><br>
<span class="quotelev2">&gt;&gt; [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:442] processing 
</span><br>
<span class="quotelev2">&gt;&gt; send to peer 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[48379,0],0]:10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:476] queue pending 
</span><br>
<span class="quotelev2">&gt;&gt; to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] tcp:send_nb: initiating connection to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:490] connect to 
</span><br>
<span class="quotelev2">&gt;&gt; [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface 
</span><br>
<span class="quotelev2">&gt;&gt; eth0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] oob:tcp:peer creating socket to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface 
</span><br>
<span class="quotelev2">&gt;&gt; eth0 on socket 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] on 
</span><br>
<span class="quotelev2">&gt;&gt; 193.174.24.39:55567 - 0 retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] waiting for connect completion to [[48379,0],0] - activating send event
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] tcp:send_handler called to send to peer [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2]:tcp:complete_connect called for peer [[48379,0],0] on socket 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] tcp_peer_complete_connect: sending ack to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] SEND CONNECT ACK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] send blocking of 48 bytes to socket 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] connect-ack sent to socket 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:21511] [[48379,0],2] tcp_peer_complete_connect: setting read event on connection to [[48379,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] mca_oob_tcp_listen_thread: new connection: (16, 11) 
</span><br>
<span class="quotelev2">&gt;&gt; 193.174.26.208:53741
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] connection_handler: working connection (16, 11) 
</span><br>
<span class="quotelev2">&gt;&gt; 193.174.26.208:53741
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] CONNECTION REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] OOB_SEND: 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] OOB_SEND: 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send to target [[48379,0],1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send unknown peer [[48379,0],1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] is NOT reachable by TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send to target [[48379,0],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send unknown peer [[48379,0],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] is NOT reachable by TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca: base: close: component tcp closed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:06877] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr fd1026 106 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you very much for your help in advance. Do you need anything else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 14, 2014, at 9:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; What are the interfaces on these machines?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 111 ifconfig -a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      inet 127.0.0.1 netmask ff000000 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      inet 193.174.24.39 netmask ffffffe0 broadcast 193.174.24.63
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 112 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 112 ssh sunpc1 ifconfig -a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      inet 127.0.0.1 netmask ff000000 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      inet 193.174.26.210 netmask ffffffc0 broadcast 193.174.26.255
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 113 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 113 ssh linpc1 /sbin/ifconfig -a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:14:4F:23:FD:A8  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        inet addr:193.174.26.208  Bcast:193.174.26.255  Mask:255.255.255.192
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        RX packets:18052524 errors:127 dropped:0 overruns:0 frame:127
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        TX packets:15917888 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        RX bytes:4158294157 (3965.6 Mb)  TX bytes:12060556809 (11501.8 Mb)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        Interrupt:23 Base address:0x4000 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:14:4F:23:FD:A9  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        Interrupt:45 Base address:0xa000 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lo        Link encap:Local Loopback  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        RX packets:1083 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        TX packets:1083 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        collisions:0 txqueuelen:0 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        RX bytes:329323 (321.6 Kb)  TX bytes:329323 (321.6 Kb)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 114 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you need something else?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 14, 2014, at 7:45 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I just installed openmpi-1.8.2a1r31742 on my machines (Solaris 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sun C5.12 and still have the following problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The command works fine with openmpi-1.6.6rc1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.6.6_64_cc/bin/mpiexec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have reported the problem before and I would be grateful, if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; somebody could solve it. Please let me know if I can provide any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; other information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24388.php">Ajay Nair: "[OMPI users] openMPI in 64 bit"</a>
<li><strong>Previous message:</strong> <a href="24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>In reply to:</strong> <a href="24380.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24414.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
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
