<?
$subject_val = "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 06:42:10 2014" -->
<!-- isoreceived="20140515104210" -->
<!-- sent="Thu, 15 May 2014 12:40:58 +0200 (CEST)" -->
<!-- isosent="20140515104058" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
<!-- id="201405151040.s4FAewbj023339_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 06:40:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24376.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Maybe in reply to:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24380.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Reply:</strong> <a href="24380.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; Just committed a potential fix to the trunk - please let me know
</span><br>
<span class="quotelev1">&gt; if it worked for you
</span><br>
<p>Now I get the hostnames but also a segmentation fault.
<br>
<p>tyr fd1026 101 which mpiexec
<br>
/usr/local/openmpi-1.9_64_cc/bin/mpiexec
<br>
tyr fd1026 102 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
<br>
tyr.informatik.hs-fulda.de
<br>
linpc1
<br>
sunpc1
<br>
[tyr:22835] *** Process received signal ***
<br>
[tyr:22835] Signal: Segmentation Fault (11)
<br>
[tyr:22835] Signal code: Address not mapped (1)
<br>
[tyr:22835] Failing at address: ffffffff7bf16de0
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x1c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x183960
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1ce0e8 [ Signal 2125151224 (?)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1ccde4
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_libevent2021_event_del+0x88
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_libevent2021_event_base_free+0x154
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1bb9e8
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:mca_base_framework_close+0x1a0
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_finalize+0xcc
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:orte_finalize+0x168
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun:orterun+0x23e0
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun:main+0x24
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun:_start+0x12c
<br>
[tyr:22835] *** End of error message ***
<br>
Segmentation fault
<br>
tyr fd1026 103 ompi_info | grep &quot;revision:&quot;
<br>
&nbsp;&nbsp;Open MPI repo revision: r31769
<br>
&nbsp;&nbsp;Open RTE repo revision: r31769
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: r31769
<br>
tyr fd1026 104 
<br>
<p><p><p>I get the following output in &quot;dbx&quot;.
<br>
<p>tyr fd1026 104 /opt/solstudio12.3/bin/sparcv9/dbx /usr/local/openmpi-1.9_64_cc/bin/mpiexec 
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
Reading libopen-rte.so.0.0.0
<br>
Reading libopen-pal.so.0.0.0
<br>
Reading libsendfile.so.1
<br>
Reading libpicl.so.1
<br>
Reading libkstat.so.1
<br>
Reading liblgrp.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
Reading librt.so.1
<br>
Reading libm.so.2
<br>
Reading libthread.so.1
<br>
Reading libc.so.1
<br>
Reading libdoor.so.1
<br>
Reading libaio.so.1
<br>
Reading libmd.so.1
<br>
(dbx) run -np 3 --host tyr,sunpc1,linpc1 hostname
<br>
Running: mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname 
<br>
(process id 23328)
<br>
Reading libc_psr.so.1
<br>
Reading mca_shmem_mmap.so
<br>
Reading libmp.so.2
<br>
Reading libscf.so.1
<br>
Reading libuutil.so.1
<br>
Reading libgen.so.1
<br>
Reading mca_shmem_posix.so
<br>
Reading mca_shmem_sysv.so
<br>
Reading mca_sec_basic.so
<br>
Reading mca_ess_env.so
<br>
Reading mca_ess_hnp.so
<br>
Reading mca_ess_singleton.so
<br>
Reading mca_ess_tool.so
<br>
Reading mca_pstat_test.so
<br>
Reading mca_state_app.so
<br>
Reading mca_state_hnp.so
<br>
Reading mca_state_novm.so
<br>
Reading mca_state_orted.so
<br>
Reading mca_state_staged_hnp.so
<br>
Reading mca_state_staged_orted.so
<br>
Reading mca_state_tool.so
<br>
Reading mca_errmgr_default_app.so
<br>
Reading mca_errmgr_default_hnp.so
<br>
Reading mca_errmgr_default_orted.so
<br>
Reading mca_errmgr_default_tool.so
<br>
Reading mca_plm_isolated.so
<br>
Reading mca_plm_rsh.so
<br>
Reading mca_oob_tcp.so
<br>
Reading mca_rml_oob.so
<br>
Reading mca_routed_binomial.so
<br>
Reading mca_routed_debruijn.so
<br>
Reading mca_routed_direct.so
<br>
Reading mca_routed_radix.so
<br>
Reading mca_dstore_hash.so
<br>
Reading mca_grpcomm_bad.so
<br>
Reading mca_ras_simulator.so
<br>
Reading mca_rmaps_lama.so
<br>
Reading mca_rmaps_mindist.so
<br>
Reading mca_rmaps_ppr.so
<br>
Reading mca_rmaps_rank_file.so
<br>
Reading mca_rmaps_resilient.so
<br>
Reading mca_rmaps_round_robin.so
<br>
Reading mca_rmaps_seq.so
<br>
Reading mca_rmaps_staged.so
<br>
Reading mca_odls_default.so
<br>
Reading mca_rtc_hwloc.so
<br>
Reading mca_iof_hnp.so
<br>
Reading mca_iof_mr_hnp.so
<br>
Reading mca_iof_mr_orted.so
<br>
Reading mca_iof_orted.so
<br>
Reading mca_iof_tool.so
<br>
Reading mca_filem_raw.so
<br>
Reading mca_dfs_app.so
<br>
Reading mca_dfs_orted.so
<br>
Reading mca_dfs_test.so
<br>
tyr.informatik.hs-fulda.de
<br>
linpc1
<br>
sunpc1
<br>
t_at_1 (l_at_1) signal SEGV (no mapping at the fault address) in event_queue_remove at 0xffffffff7e9ce0e8
<br>
0xffffffff7e9ce0e8: event_queue_remove+0x01a8:  stx      %l0, [%l3 + 24]
<br>
Current function is opal_event_base_close
<br>
&nbsp;&nbsp;&nbsp;62       opal_event_base_free (opal_event_base);
<br>
<p>(dbx) check -all
<br>
dbx: warning: check -all will be turned on in the next run of the process
<br>
access checking - OFF
<br>
memuse checking - OFF
<br>
<p>(dbx) run -np 3 --host tyr,sunpc1,linpc1 hostname
<br>
Running: mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname 
<br>
(process id 23337)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
Reading rtcaudit.so
<br>
Reading libmapmalloc.so.1
<br>
Reading rtcboot.so
<br>
Reading librtc.so
<br>
Reading libmd_psr.so.1
<br>
RTC: Enabling Error Checking...
<br>
RTC: Using UltraSparc trap mechanism
<br>
RTC: See `help rtc showmap' and `help rtc limitations' for details.
<br>
RTC: Running program...
<br>
Write to unallocated (wua) on thread 1:
<br>
Attempting to write 1 byte at address 0xffffffff79f04000
<br>
t_at_1 (l_at_1) stopped in _readdir at 0xffffffff56574da0
<br>
0xffffffff56574da0: _readdir+0x0064:    call     _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff56742a80
<br>
Current function is find_dyn_components
<br>
&nbsp;&nbsp;393                       if (0 != lt_dlforeachfile(dir, save_filename, NULL)) {
<br>
(dbx) 
<br>
<p><p><p>Do you need anything else?
<br>
<p><p>KInd regards
<br>
<p>Siegmar
<br>
<p><p><p><p>&nbsp;On May 14, 2014, at 11:44 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hmmm...well, that's an interesting naming scheme :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try adding &quot;-mca oob_base_verbose 10 --report-uri -&quot; on your cmd line
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and let's see what it thinks is happening
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 105 mpiexec -np 3 --host tyr,sunpc1,linpc1 --mca oob_base_verbose 10 --report-uri - hostname
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:tcp:init creating module for V4 address on interface bge0
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] creating OOB-TCP module for interface bge0
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:tcp:init adding 193.174.24.39 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] TCP STARTUP
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] assigned IPv4 port 55567
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt; &gt; 3170566144.0;tcp://193.174.24.39:55567
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] oob:tcp:init creating module for V4 address on interface nge0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] creating OOB-TCP module for interface nge0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] oob:tcp:init adding 193.174.26.210 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] TCP STARTUP
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] assigned IPv4 port 39616
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]: set_addr to uri 3170566144.0;tcp://193.174.24.39:55567
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]:set_addr checking if peer [[48379,0],0] is reachable via component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] oob:tcp: working peer [[48379,0],0] address tcp://193.174.24.39:55567
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] UNFOUND KERNEL INDEX -13 FOR ADDRESS 193.174.24.39
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] PEER [[48379,0],0] MAY BE REACHABLE BY ROUTING - ASSIGNING MODULE AT KINDEX 2 
</span><br>
INTERFACE nge0
<br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] PASSING ADDR 193.174.24.39 TO INTERFACE nge0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]:tcp set addr for peer [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]: peer [[48379,0],0] is reachable via component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] OOB_SEND: ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]:tcp:processing set_peer cmd for interface nge0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] oob:base:send to target [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] oob:tcp:send_nb to peer [[48379,0],0]:10
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] tcp:send_nb to peer [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:508] post send to 
</span><br>
[[48379,0],0]
<br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:442] processing 
</span><br>
send to peer 
<br>
<span class="quotelev2">&gt; &gt; [[48379,0],0]:10
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:476] queue pending 
</span><br>
to [[48379,0],0]
<br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] tcp:send_nb: initiating connection to [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:490] connect to 
</span><br>
[[48379,0],0]
<br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface 
</span><br>
nge0
<br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] oob:tcp:peer creating socket to [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface 
</span><br>
nge0 on socket 10
<br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] on 
</span><br>
193.174.24.39:55567 - 0 retries
<br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] mca_oob_tcp_listen_thread: new connection: (15, 0) 
</span><br>
193.174.26.210:39617
<br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] connection_handler: working connection (15, 11) 
</span><br>
193.174.26.210:39617
<br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] CONNECTION REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] waiting for connect completion to [[48379,0],0] - activating send event
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] tcp:send_handler called to send to peer [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1]:tcp:complete_connect called for peer [[48379,0],0] on socket 10
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] tcp_peer_complete_connect: sending ack to [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] SEND CONNECT ACK
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] send blocking of 48 bytes to socket 10
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] connect-ack sent to socket 10
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:07690] [[48379,0],1] tcp_peer_complete_connect: setting read event on connection to [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] oob:tcp:init creating module for V4 address on interface eth0
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] creating OOB-TCP module for interface eth0
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] oob:tcp:init adding 193.174.26.208 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] TCP STARTUP
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] assigned IPv4 port 39724
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]: set_addr to uri 3170566144.0;tcp://193.174.24.39:55567
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]:set_addr checking if peer [[48379,0],0] is reachable via component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] oob:tcp: working peer [[48379,0],0] address tcp://193.174.24.39:55567
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] UNFOUND KERNEL INDEX -13 FOR ADDRESS 193.174.24.39
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] PEER [[48379,0],0] MAY BE REACHABLE BY ROUTING - ASSIGNING MODULE AT KINDEX 2 
</span><br>
INTERFACE eth0
<br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] PASSING ADDR 193.174.24.39 TO INTERFACE eth0 AT KERNEL INDEX 2
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]:tcp set addr for peer [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]: peer [[48379,0],0] is reachable via component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] OOB_SEND: ../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]:tcp:processing set_peer cmd for interface eth0
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] oob:base:send to target [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] oob:tcp:send_nb to peer [[48379,0],0]:10
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] tcp:send_nb to peer [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:508] post send to 
</span><br>
[[48379,0],0]
<br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:442] processing 
</span><br>
send to peer 
<br>
<span class="quotelev2">&gt; &gt; [[48379,0],0]:10
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:476] queue pending 
</span><br>
to [[48379,0],0]
<br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] tcp:send_nb: initiating connection to [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]:[../../../../../openmpi-1.8.2a1r31742/orte/mca/oob/tcp/oob_tcp.c:490] connect to 
</span><br>
[[48379,0],0]
<br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface 
</span><br>
eth0
<br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] oob:tcp:peer creating socket to [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] via interface 
</span><br>
eth0 on socket 9
<br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] orte_tcp_peer_try_connect: attempting to connect to proc [[48379,0],0] on 
</span><br>
193.174.24.39:55567 - 0 retries
<br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] waiting for connect completion to [[48379,0],0] - activating send event
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] tcp:send_handler called to send to peer [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2]:tcp:complete_connect called for peer [[48379,0],0] on socket 9
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] tcp_peer_complete_connect: sending ack to [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] SEND CONNECT ACK
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] send blocking of 48 bytes to socket 9
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] connect-ack sent to socket 9
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:21511] [[48379,0],2] tcp_peer_complete_connect: setting read event on connection to [[48379,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] mca_oob_tcp_listen_thread: new connection: (16, 11) 
</span><br>
193.174.26.208:53741
<br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] connection_handler: working connection (16, 11) 
</span><br>
193.174.26.208:53741
<br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] CONNECTION REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev2">&gt; &gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] OOB_SEND: 
</span><br>
../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
<br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] OOB_SEND: 
</span><br>
../../../../../openmpi-1.8.2a1r31742/orte/mca/rml/oob/rml_oob_send.c:199
<br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send to target [[48379,0],1]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send unknown peer [[48379,0],1]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] is NOT reachable by TCP
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send to target [[48379,0],2]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] oob:base:send unknown peer [[48379,0],2]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] is NOT reachable by TCP
</span><br>
<span class="quotelev2">&gt; &gt; Killed by signal 2.
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] [[48379,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca: base: close: component tcp closed
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:06877] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 106 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for your help in advance. Do you need anything else?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 14, 2014, at 9:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What are the interfaces on these machines?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 111 ifconfig -a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       inet 127.0.0.1 netmask ff000000 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       inet 193.174.24.39 netmask ffffffe0 broadcast 193.174.24.63
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 112 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 112 ssh sunpc1 ifconfig -a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       inet 127.0.0.1 netmask ff000000 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       inet 193.174.26.210 netmask ffffffc0 broadcast 193.174.26.255
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 113 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 113 ssh linpc1 /sbin/ifconfig -a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:14:4F:23:FD:A8  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         inet addr:193.174.26.208  Bcast:193.174.26.255  Mask:255.255.255.192
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         RX packets:18052524 errors:127 dropped:0 overruns:0 frame:127
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         TX packets:15917888 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         RX bytes:4158294157 (3965.6 Mb)  TX bytes:12060556809 (11501.8 Mb)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         Interrupt:23 Base address:0x4000 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:14:4F:23:FD:A9  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         Interrupt:45 Base address:0xa000 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; lo        Link encap:Local Loopback  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         RX packets:1083 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         TX packets:1083 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         collisions:0 txqueuelen:0 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         RX bytes:329323 (321.6 Kb)  TX bytes:329323 (321.6 Kb)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr fd1026 114 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do you need something else?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On May 14, 2014, at 7:45 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I just installed openmpi-1.8.2a1r31742 on my machines (Solaris 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sun C5.12 and still have the following problem.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The command works fine with openmpi-1.6.6rc1.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.6.6_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; linpc1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I have reported the problem before and I would be grateful, if
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; somebody could solve it. Please let me know if I can provide any
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; other information.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24376.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Maybe in reply to:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24380.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Reply:</strong> <a href="24380.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
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
