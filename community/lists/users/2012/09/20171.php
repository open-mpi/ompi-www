<?
$subject_val = "[OMPI users] segmentation fault with openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 08:55:25 2012" -->
<!-- isoreceived="20120910125525" -->
<!-- sent="Mon, 10 Sep 2012 14:41:50 +0200 (CEST)" -->
<!-- isosent="20120910124150" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault with openmpi-1.6.2" -->
<!-- id="201209101242.q8ACfo0D023975_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault with openmpi-1.6.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 08:41:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20172.php">Aleksey Senin: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20172.php">Aleksey Senin: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20172.php">Aleksey Senin: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20176.php">Siegmar Gross: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-1.6.2rc1 and get the following error.
<br>
<p>tyr small_prog 123 mpicc -showme
<br>
cc -I/usr/local/openmpi-1.6.2_32_cc/include -mt
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.6.2_32_cc/lib -lmpi -lm -lkstat -llgrp
<br>
&nbsp;&nbsp;-lsocket -lnsl -lrt -lm
<br>
tyr small_prog 124 mpiexec -np 2 -host tyr init_finalize
<br>
<p>Hello!
<br>
Hello!
<br>
<p>tyr small_prog 125 mpiexec -np 2 -host sunpc4 init_finalize
<br>
key_from_blob: remaining bytes in key blob 81
<br>
<p>Hello!
<br>
Hello!
<br>
<p>tyr small_prog 126 mpiexec -np 2 -host tyr,sunpc4 init_finalize
<br>
[tyr:23956] *** Process received signal ***
<br>
[tyr:23956] Signal: Segmentation Fault (11)
<br>
[tyr:23956] Signal code: Address not mapped (1)
<br>
[tyr:23956] Failing at address: 18
<br>
/.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:0x15434c
<br>
/lib/libc.so.1:0xcad04
<br>
/lib/libc.so.1:0xbf3b4
<br>
/lib/libc.so.1:0xbf59c
<br>
/.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_get_target_nodes+0x1cc [ Signal 11 (SEGV)]
<br>
/.../openmpi-1.6.2_32_cc/lib/openmpi/mca_rmaps_round_robin.so:0x1ec8
<br>
/.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_map_job+0xe4
<br>
/.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_plm_base_setup_job+0xc4
<br>
/.../openmpi-1.6.2_32_cc/lib/openmpi/mca_plm_rsh.so:orte_plm_rsh_launch+0x1b0
<br>
/.../openmpi-1.6.2_32_cc/bin/orterun:orterun+0x16a8
<br>
/.../openmpi-1.6.2_32_cc/bin/orterun:main+0x24
<br>
/.../openmpi-1.6.2_32_cc/bin/orterun:_start+0xd8
<br>
[tyr:23956] *** End of error message ***
<br>
Segmentation fault
<br>
<p>Do you have any ideas or suggestions? As I wrote in my email from
<br>
yesterday, I had to add &quot;#include &lt;math.h&gt;&quot; into file
<br>
openmpi-1.6.2rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp
<br>
to have a prototype for function &quot;rint&quot; in line 834. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20172.php">Aleksey Senin: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20172.php">Aleksey Senin: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20172.php">Aleksey Senin: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20176.php">Siegmar Gross: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
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
