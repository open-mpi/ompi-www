<?
$subject_val = "[OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 17 07:42:25 2012" -->
<!-- isoreceived="20120917114225" -->
<!-- sent="Mon, 17 Sep 2012 13:34:59 +0200 (CEST)" -->
<!-- isosent="20120917113459" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)" -->
<!-- id="201209171135.q8HBYxpf010979_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-17 07:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20236.php">Siegmar Gross: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<li><strong>Previous message:</strong> <a href="20234.php">toufik hadjazi: "[OMPI users] How to make a connection uninterruptible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20238.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<li><strong>Reply:</strong> <a href="20238.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed openmpi-1.9a1r27342 on Solaris 10 with Oracle
<br>
Solaris Studio compiler 12.3.
<br>
<p>rs0 fd1026 106 mpicc -showme
<br>
cc -I/usr/local/openmpi-1.9_64_cc/include -mt -m64 \
<br>
&nbsp;&nbsp;&nbsp;-L/usr/local/openmpi-1.9_64_cc/lib64 -lmpi -lpicl -lm -lkstat \
<br>
&nbsp;&nbsp;&nbsp;-llgrp -lsocket -lnsl -lrt -lm
<br>
<p>I can run the following command.
<br>
<p>rs0 fd1026 107 mpiexec -report-bindings -np 2 -bind-to hwthread date
<br>
[rs0.informatik.hs-fulda.de:19704] MCW rank 0 bound to :
<br>
&nbsp;&nbsp;[B./../../..][../../../..]
<br>
[rs0.informatik.hs-fulda.de:19704] MCW rank 1 bound to :
<br>
&nbsp;&nbsp;[../B./../..][../../../..]
<br>
Mon Sep 17 13:07:34 CEST 2012
<br>
Mon Sep 17 13:07:34 CEST 2012
<br>
<p>I get a segmention fault if I increase the number of processes to 3.
<br>
<p>rs0 fd1026 108 mpiexec -report-bindings -np 3 -bind-to hwthread date
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 19711 on node
<br>
&nbsp;&nbsp;rs0.informatik.hs-fulda.de exited on signal 11 (Segmentation Fault).
<br>
--------------------------------------------------------------------------
<br>
[rs0:19713] *** Process received signal ***
<br>
[rs0:19713] Signal: Segmentation Fault (11)
<br>
[rs0:19713] Signal code: Invalid permissions (2)
<br>
[rs0:19713] Failing at address: 1000002e8
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x282640
<br>
/lib/sparcv9/libc.so.1:0xd8684
<br>
/lib/sparcv9/libc.so.1:0xcc1f8
<br>
/lib/sparcv9/libc.so.1:0xcc404
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x2c1488 [ Signal 11 (SEGV)]
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:opal_hwloc_base_cset2str+0x28
<br>
/usr/local/openmpi-1.9_64_cc/lib64/openmpi/mca_odls_default.so:0xab00
<br>
/usr/local/openmpi-1.9_64_cc/lib64/openmpi/mca_odls_default.so:0xb7e4
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:orte_odls_base_default_launch_local+0xa20
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x2997f4
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x299a20
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:opal_libevent2019_event_base_loop+0x1e8
<br>
/usr/local/openmpi-1.9_64_cc/bin/orterun:orterun+0x1920
<br>
/usr/local/openmpi-1.9_64_cc/bin/orterun:main+0x24
<br>
/usr/local/openmpi-1.9_64_cc/bin/orterun:_start+0x12c
<br>
[rs0:19713] *** End of error message ***
<br>
...
<br>
(same output for the other two processes)
<br>
<p><p>If I add &quot;-bynode&quot; I get a bus error.
<br>
<p>rs0 fd1026 110 mpiexec -report-bindings -np 2 -bynode -bind-to hwthread date
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 19724 on node
<br>
&nbsp;&nbsp;rs0.informatik.hs-fulda.de exited on signal 10 (Bus Error).
<br>
--------------------------------------------------------------------------
<br>
[rs0:19724] *** Process received signal ***
<br>
[rs0:19724] Signal: Bus Error (10)
<br>
[rs0:19724] Signal code: Invalid address alignment (1)
<br>
[rs0:19724] Failing at address: 1
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x282640
<br>
/lib/sparcv9/libc.so.1:0xd8684
<br>
/lib/sparcv9/libc.so.1:0xcc1f8
<br>
/lib/sparcv9/libc.so.1:0xcc404
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x2c147c [ Signal 10 (BUS)]
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:opal_hwloc_base_cset2str+0x28
<br>
/usr/local/openmpi-1.9_64_cc/lib64/openmpi/mca_odls_default.so:0xab00
<br>
/usr/local/openmpi-1.9_64_cc/lib64/openmpi/mca_odls_default.so:0xb7e4
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:orte_odls_base_default_launch_local+0xa20
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x2997f4
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:0x299a20
<br>
/usr/local/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:opal_libevent2019_event_base_loop+0x1e8
<br>
/usr/local/openmpi-1.9_64_cc/bin/orterun:orterun+0x1920
<br>
/usr/local/openmpi-1.9_64_cc/bin/orterun:main+0x24
<br>
/usr/local/openmpi-1.9_64_cc/bin/orterun:_start+0x12c
<br>
[rs0:19724] *** End of error message ***
<br>
... 
<br>
(same output for the other two processes)
<br>
<p><p>I get a segmentation fault for the following commands.
<br>
<p>mpiexec -report-bindings -np 2 -map-by slot -bind-to hwthread date
<br>
mpiexec -report-bindings -np 2 -map-by numa -bind-to hwthread date
<br>
mpiexec -report-bindings -np 2 -map-by node -bind-to hwthread date
<br>
<p><p>I get a bus error for the following command.
<br>
<p>mpiexec -report-bindings -np 2 -map-by socket -bind-to hwthread date
<br>
<p><p>The following commands work.
<br>
<p>rs0 fd1026 120 mpiexec -report-bindings -np 2 -map-by hwthread -bind-to hwthread date
<br>
[rs0.informatik.hs-fulda.de:19788] MCW rank 0 bound to : [B./../../..][../../../..]
<br>
[rs0.informatik.hs-fulda.de:19788] MCW rank 1 bound to : [.B/../../..][../../../..]
<br>
Mon Sep 17 13:20:30 CEST 2012
<br>
Mon Sep 17 13:20:30 CEST 2012
<br>
<p>rs0 fd1026 121 mpiexec -report-bindings -np 2 -map-by core -bind-to hwthread date
<br>
[rs0.informatik.hs-fulda.de:19793] MCW rank 0 bound to : [B./../../..][../../../..]
<br>
[rs0.informatik.hs-fulda.de:19793] MCW rank 1 bound to : [../B./../..][../../../..]
<br>
Mon Sep 17 13:21:06 CEST 2012
<br>
Mon Sep 17 13:21:06 CEST 2012
<br>
<p><p>I think that the following output is correct because I have a Sun M4000
<br>
server with two quad-core processors each supporting two hardware-threads.
<br>
<p>rs0 fd1026 124 mpiexec -report-bindings -np 2 -map-by board -bind-to hwthread date
<br>
--------------------------------------------------------------------------
<br>
The specified mapping policy is not recognized:
<br>
<p>&nbsp;&nbsp;Policy: BYBOARD
<br>
<p>Please check for a typo or ensure that the option is a supported
<br>
one.
<br>
--------------------------------------------------------------------------
<br>
<p><p>In my opinion I should be able to start and bind up to 16 processes
<br>
if a map and bind to hwthreads or not? Thank you very much for any
<br>
help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20236.php">Siegmar Gross: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<li><strong>Previous message:</strong> <a href="20234.php">toufik hadjazi: "[OMPI users] How to make a connection uninterruptible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20238.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<li><strong>Reply:</strong> <a href="20238.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
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
