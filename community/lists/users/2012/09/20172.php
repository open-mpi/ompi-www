<?
$subject_val = "Re: [OMPI users] segmentation fault with openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 11:13:04 2012" -->
<!-- isoreceived="20120910151304" -->
<!-- sent="Mon, 10 Sep 2012 18:12:53 +0300" -->
<!-- isosent="20120910151253" -->
<!-- name="Aleksey Senin" -->
<!-- email="alekseys_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault with openmpi-1.6.2" -->
<!-- id="504E0375.8080707_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201209101242.q8ACfo0D023975_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault with openmpi-1.6.2<br>
<strong>From:</strong> Aleksey Senin (<em>alekseys_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 11:12:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20171.php">Siegmar Gross: "[OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20171.php">Siegmar Gross: "[OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20178.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/09/2012 15:41, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built openmpi-1.6.2rc1 and get the following error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr small_prog 123 mpicc -showme
</span><br>
<span class="quotelev1">&gt; cc -I/usr/local/openmpi-1.6.2_32_cc/include -mt
</span><br>
<span class="quotelev1">&gt;    -L/usr/local/openmpi-1.6.2_32_cc/lib -lmpi -lm -lkstat -llgrp
</span><br>
<span class="quotelev1">&gt;    -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev1">&gt; tyr small_prog 124 mpiexec -np 2 -host tyr init_finalize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr small_prog 125 mpiexec -np 2 -host sunpc4 init_finalize
</span><br>
<span class="quotelev1">&gt; key_from_blob: remaining bytes in key blob 81
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr small_prog 126 mpiexec -np 2 -host tyr,sunpc4 init_finalize
</span><br>
<span class="quotelev1">&gt; [tyr:23956] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:23956] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [tyr:23956] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [tyr:23956] Failing at address: 18
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:0x15434c
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.1:0xcad04
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.1:0xbf3b4
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.1:0xbf59c
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_get_target_nodes+0x1cc [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/openmpi/mca_rmaps_round_robin.so:0x1ec8
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_map_job+0xe4
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_plm_base_setup_job+0xc4
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/openmpi/mca_plm_rsh.so:orte_plm_rsh_launch+0x1b0
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:orterun+0x16a8
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:_start+0xd8
</span><br>
<span class="quotelev1">&gt; [tyr:23956] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any ideas or suggestions? As I wrote in my email from
</span><br>
<span class="quotelev1">&gt; yesterday, I had to add &quot;#include &lt;math.h&gt;&quot; into file
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.2rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp
</span><br>
<span class="quotelev1">&gt; to have a prototype for function &quot;rint&quot; in line 834. Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
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
<span class="quotelev1">&gt;
</span><br>
<p>Did you compile OMPI usins '--with-pmi' option? I saw this error when 
<br>
you have allocated job on one console, but running the test on another. 
<br>
Try to run the task on the console where you allocated it.
<br>
By the way, is there any way to disable SLURM usage even OMPI was 
<br>
compiled with it? If yes, what is the option?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20171.php">Siegmar Gross: "[OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20171.php">Siegmar Gross: "[OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20178.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
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
