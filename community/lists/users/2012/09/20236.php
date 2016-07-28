<?
$subject_val = "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 17 08:31:24 2012" -->
<!-- isoreceived="20120917123124" -->
<!-- sent="Mon, 17 Sep 2012 14:24:33 +0200 (CEST)" -->
<!-- isosent="20120917122433" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)" -->
<!-- id="201209171224.q8HCOXeo011206_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-17 08:24:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20237.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20235.php">Siegmar Gross: "[OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20247.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<li><strong>Reply:</strong> <a href="20247.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just found out that I get no segmentation fault or bus error if I
<br>
add &quot;-display-devel-map&quot; to the commands.
<br>
<p>rs0 fd1026 110 mpiexec -report-bindings -np 3 -bind-to hwthread -display-devel-map date
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYSLOT  Ranking policy: SLOT  Binding policy: 
<br>
HWTHREAD[HWTHREAD]  Cpu set: NULL  PPR: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0      New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: rs0.informatik.hs-fulda.de              Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[10411,0],0]   Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 1 Oversubscribed: TRUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 3    Next node_rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[10411,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0   Node rank: 0    App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 0-15    Binding: 0[0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[10411,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 1   Node rank: 1    App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 0-15    Binding: 2[2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[10411,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 2   Node rank: 2    App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 0-15    Binding: 4[4]
<br>
[rs0.informatik.hs-fulda.de:20492] MCW rank 0 bound to : [B./../../..][../../../..]
<br>
[rs0.informatik.hs-fulda.de:20492] MCW rank 1 bound to : [../B./../..][../../../..]
<br>
[rs0.informatik.hs-fulda.de:20492] MCW rank 2 bound to : [../../B./..][../../../..]
<br>
Mon Sep 17 14:20:50 CEST 2012
<br>
Mon Sep 17 14:20:50 CEST 2012
<br>
Mon Sep 17 14:20:50 CEST 2012
<br>
<p><p><p>rs0 fd1026 111 mpiexec -report-bindings -np 2 -bynode -bind-to hwthread -display-devel-map date
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYNODE  Ranking policy: NODE  Binding policy: 
<br>
HWTHREAD[HWTHREAD]  Cpu set: NULL  PPR: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0      New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: rs0.informatik.hs-fulda.de              Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[10417,0],0]   Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 1 Oversubscribed: TRUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 2    Next node_rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[10417,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0   Node rank: 0    App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 0-15    Binding: 0[0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[10417,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 1   Node rank: 1    App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 0-15    Binding: 2[2]
<br>
[rs0.informatik.hs-fulda.de:20502] MCW rank 0 bound to : [B./../../..][../../../..]
<br>
[rs0.informatik.hs-fulda.de:20502] MCW rank 1 bound to : [../B./../..][../../../..]
<br>
Mon Sep 17 14:22:10 CEST 2012
<br>
Mon Sep 17 14:22:10 CEST 2012
<br>
<p><p>Any ideas why an additional option &quot;solves&quot; the problem?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; I have installed openmpi-1.9a1r27342 on Solaris 10 with Oracle
</span><br>
<span class="quotelev1">&gt; Solaris Studio compiler 12.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 106 mpicc -showme
</span><br>
<span class="quotelev1">&gt; cc -I/usr/local/openmpi-1.9_64_cc/include -mt -m64 \
</span><br>
<span class="quotelev1">&gt;    -L/usr/local/openmpi-1.9_64_cc/lib64 -lmpi -lpicl -lm -lkstat \
</span><br>
<span class="quotelev1">&gt;    -llgrp -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 107 mpiexec -report-bindings -np 2 -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:19704] MCW rank 0 bound to :
</span><br>
<span class="quotelev1">&gt;   [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:19704] MCW rank 1 bound to :
</span><br>
<span class="quotelev1">&gt;   [../B./../..][../../../..]
</span><br>
<span class="quotelev1">&gt; Mon Sep 17 13:07:34 CEST 2012
</span><br>
<span class="quotelev1">&gt; Mon Sep 17 13:07:34 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a segmention fault if I increase the number of processes to 3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 108 mpiexec -report-bindings -np 3 -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 19711 on node
</span><br>
<span class="quotelev1">&gt;   rs0.informatik.hs-fulda.de exited on signal 11 (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rs0:19713] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rs0:19713] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [rs0:19713] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [rs0:19713] Failing at address: 1000002e8
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x282640
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8684
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc1f8
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc404
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x2c1488 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:opal_hwloc_base_cset2str+0x28
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/openmpi/mca_odls_default.so:0xab00
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/openmpi/mca_odls_default.so:0xb7e4
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:orte_odls_base_default_launch_local+0xa20
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x2997f4
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x299a20
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:opal_libevent2019_event_base_loop+0x1e8
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/bin/orterun:orterun+0x1920
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/bin/orterun:_start+0x12c
</span><br>
<span class="quotelev1">&gt; [rs0:19713] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (same output for the other two processes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I add &quot;-bynode&quot; I get a bus error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 110 mpiexec -report-bindings -np 2 -bynode -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 19724 on node
</span><br>
<span class="quotelev1">&gt;   rs0.informatik.hs-fulda.de exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rs0:19724] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rs0:19724] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [rs0:19724] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [rs0:19724] Failing at address: 1
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x282640
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8684
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc1f8
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc404
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x2c147c [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:opal_hwloc_base_cset2str+0x28
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/openmpi/mca_odls_default.so:0xab00
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/openmpi/mca_odls_default.so:0xb7e4
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:orte_odls_base_default_launch_local+0xa20
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x2997f4
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x299a20
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:opal_libevent2019_event_base_loop+0x1e8
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/bin/orterun:orterun+0x1920
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_64_cc/bin/orterun:_start+0x12c
</span><br>
<span class="quotelev1">&gt; [rs0:19724] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ... 
</span><br>
<span class="quotelev1">&gt; (same output for the other two processes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a segmentation fault for the following commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 2 -map-by slot -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 2 -map-by numa -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 2 -map-by node -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a bus error for the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 2 -map-by socket -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following commands work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 120 mpiexec -report-bindings -np 2 -map-by hwthread -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:19788] MCW rank 0 bound to : [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:19788] MCW rank 1 bound to : [.B/../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; Mon Sep 17 13:20:30 CEST 2012
</span><br>
<span class="quotelev1">&gt; Mon Sep 17 13:20:30 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 121 mpiexec -report-bindings -np 2 -map-by core -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:19793] MCW rank 0 bound to : [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:19793] MCW rank 1 bound to : [../B./../..][../../../..]
</span><br>
<span class="quotelev1">&gt; Mon Sep 17 13:21:06 CEST 2012
</span><br>
<span class="quotelev1">&gt; Mon Sep 17 13:21:06 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that the following output is correct because I have a Sun M4000
</span><br>
<span class="quotelev1">&gt; server with two quad-core processors each supporting two hardware-threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 124 mpiexec -report-bindings -np 2 -map-by board -bind-to hwthread date
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The specified mapping policy is not recognized:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Policy: BYBOARD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please check for a typo or ensure that the option is a supported
</span><br>
<span class="quotelev1">&gt; one.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my opinion I should be able to start and bind up to 16 processes
</span><br>
<span class="quotelev1">&gt; if a map and bind to hwthreads or not? Thank you very much for any
</span><br>
<span class="quotelev1">&gt; help in advance.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20237.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20235.php">Siegmar Gross: "[OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20247.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<li><strong>Reply:</strong> <a href="20247.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
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
