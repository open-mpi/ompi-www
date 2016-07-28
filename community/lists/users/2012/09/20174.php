<?
$subject_val = "Re: [OMPI users] segmentation fault with openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 12:12:46 2012" -->
<!-- isoreceived="20120910161246" -->
<!-- sent="Mon, 10 Sep 2012 12:12:38 -0400" -->
<!-- isosent="20120910161238" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault with openmpi-1.6.2" -->
<!-- id="504E1176.4010800_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44E9DF5C-D6B3-447D-BCE5-DA43386409E9_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 12:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20175.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20175.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20175.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/10/12 11:37, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Sep 10, 2012, at 8:12 AM, Aleksey Senin&lt;alekseys_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/09/2012 15:41, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have built openmpi-1.6.2rc1 and get the following error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 123 mpicc -showme
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cc -I/usr/local/openmpi-1.6.2_32_cc/include -mt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -L/usr/local/openmpi-1.6.2_32_cc/lib -lmpi -lm -lkstat -llgrp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 124 mpiexec -np 2 -host tyr init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 125 mpiexec -np 2 -host sunpc4 init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; key_from_blob: remaining bytes in key blob 81
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 126 mpiexec -np 2 -host tyr,sunpc4 init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] Failing at address: 18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:0x15434c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xcad04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xbf3b4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xbf59c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_get_target_nodes+0x1cc [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/lib/openmpi/mca_rmaps_round_robin.so:0x1ec8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_map_job+0xe4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_plm_base_setup_job+0xc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/lib/openmpi/mca_plm_rsh.so:orte_plm_rsh_launch+0x1b0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:orterun+0x16a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:_start+0xd8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any ideas or suggestions? As I wrote in my email from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yesterday, I had to add &quot;#include&lt;math.h&gt;&quot; into file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.6.2rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to have a prototype for function &quot;rint&quot; in line 834. Thank you very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much for any help in advance.
</span><br>
<span class="quotelev1">&gt; Really? That shouldn't happen - I'll take a look at that one.
</span><br>
Yes, Oracle MTT testing shows 1.6.2rc2r27272 DOA:
<br>
<p>% mpirun --host burl-ct-x2200-2                 -np 2 hostname
<br>
burl-ct-x2200-2
<br>
burl-ct-x2200-2
<br>
% mpirun --host                 burl-ct-x2200-3 -np 2 hostname
<br>
burl-ct-x2200-3
<br>
burl-ct-x2200-3
<br>
% mpirun --host burl-ct-x2200-2,burl-ct-x2200-3 -np 2 hostname
<br>
[burl-ct-x2200-2:26019] *** Process received signal ***
<br>
[burl-ct-x2200-2:26019] Signal: Segmentation fault (11)
<br>
[burl-ct-x2200-2:26019] Signal code: Address not mapped (1)
<br>
[burl-ct-x2200-2:26019] Failing at address: 0x18
<br>
[burl-ct-x2200-2:26019] [ 0] [0xffffe600]
<br>
[burl-ct-x2200-2:26019] [ 1] 
<br>
/workspace/euloh/hpc/mtt-scratch/burl-ct-x2200-2/ompi-tarball-testing/installs/kBc6/install/lib/libopen-rte.so.4(orte_rmaps_base_get_target_nodes+0x432) 
<br>
[0xf7e6d482]
<br>
[burl-ct-x2200-2:26019] [ 2] 
<br>
/workspace/euloh/hpc/mtt-scratch/burl-ct-x2200-2/ompi-tarball-testing/installs/kBc6/install/lib/openmpi/mca_rmaps_round_robin.so 
<br>
[0xf7dcd8e5]
<br>
[burl-ct-x2200-2:26019] [ 3] 
<br>
/workspace/euloh/hpc/mtt-scratch/burl-ct-x2200-2/ompi-tarball-testing/installs/kBc6/install/lib/libopen-rte.so.4(orte_rmaps_base_map_job+0x46) 
<br>
[0xf7e6c4d6]
<br>
[burl-ct-x2200-2:26019] [ 4] 
<br>
/workspace/euloh/hpc/mtt-scratch/burl-ct-x2200-2/ompi-tarball-testing/installs/kBc6/install/lib/libopen-rte.so.4(orte_plm_base_setup_job+0x9c) 
<br>
[0xf7e647ec]
<br>
[burl-ct-x2200-2:26019] [ 5] 
<br>
/workspace/euloh/hpc/mtt-scratch/burl-ct-x2200-2/ompi-tarball-testing/installs/kBc6/install/lib/openmpi/mca_plm_rsh.so(orte_plm_rsh_launch+0x244) 
<br>
[0xf7dfb634]
<br>
[burl-ct-x2200-2:26019] [ 6] mpirun(orterun+0xf5e) [0x804b868]
<br>
[burl-ct-x2200-2:26019] [ 7] mpirun(main+0x22) [0x804a8f6]
<br>
[burl-ct-x2200-2:26019] [ 8] /lib/libc.so.6(__libc_start_main+0xdc) 
<br>
[0xb10dec]
<br>
[burl-ct-x2200-2:26019] [ 9] mpirun [0x804a851]
<br>
[burl-ct-x2200-2:26019] *** End of error message ***
<br>
Segmentation fault
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20175.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20173.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20175.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20175.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
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
