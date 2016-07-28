<?
$subject_val = "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 13:38:05 2012" -->
<!-- isoreceived="20120611173805" -->
<!-- sent="Mon, 11 Jun 2012 10:38:08 -0700" -->
<!-- isosent="20120611173808" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults" -->
<!-- id="4FD62D00.5040803_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57oe_G7NmTp0Eb1AfpZyFfPTLvsmbetj7xxGfRn6qF0St0w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 13:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Previous message:</strong> <a href="11087.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>In reply to:</strong> <a href="11087.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Reply:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/9/2012 6:49 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I fixed this one, I believe
</span><br>
Sorry, I'm confused.  You think you fixed the oob:ud:qp_init one you 
<br>
mean?  Which rev has the fix?
<br>
<span class="quotelev1">&gt; will have to look more at the loop_spawn issue later.
</span><br>
The original one I reported, I assume?  I see similar stacks on 
<br>
segfaults with a variety of tests.  So, I think it's not specific to 
<br>
loop_spawn.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 9, 2012 at 3:35 PM, Eugene Loh &lt;eugene.loh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:eugene.loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 6/9/2012 12:06 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         With r26565:
</span><br>
<span class="quotelev1">&gt;            Enable orte progress threads and libevent thread support by
</span><br>
<span class="quotelev1">&gt;         default
</span><br>
<span class="quotelev1">&gt;         Oracle MTT testing started showing new spawn_multiple failures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sorry.  I meant loop_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     (And then, starting I think in 26582, the problem is masked behind
</span><br>
<span class="quotelev1">&gt;     another issue, &quot;oob:ud:qp_init could not create queue pair&quot;, which
</span><br>
<span class="quotelev1">&gt;     is creating widespread problems for Cisco, IU, and Oracle MTT
</span><br>
<span class="quotelev1">&gt;     testing.  I suppose that's the subject of a different e-mail thread.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I've only seen this in 64-bit.  Here are two segfaults, both
</span><br>
<span class="quotelev1">&gt;         from Linux/x86 systems running over TCP:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This one with GNU compilers:
</span><br>
<span class="quotelev1">&gt;            [...]
</span><br>
<span class="quotelev1">&gt;            parent: MPI_Comm_spawn #300 return : 0
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 0] /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;         [0x3a21c0e7c0]
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 1] /lib64/libc.so.6(memcpy+0x35)
</span><br>
<span class="quotelev1">&gt;         [0x3a2107bde5]
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 2]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_copy+0x58)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 3]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 4]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv_nb+0x314)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 5]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_rml_oob.so(orte_rml_oob_recv_buffer_nb+0xff)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 6]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_dpm_orte.so
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 7]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/libmpi.so.0(PMPI_Comm_spawn+0x2ee)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 8] dynamic/loop_spawn [0x40120b]
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [ 9]
</span><br>
<span class="quotelev1">&gt;         /lib64/libc.so.6(__libc_start_main+0xf4) [0x3a2101d994]
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] [10] dynamic/loop_spawn [0x400dd9]
</span><br>
<span class="quotelev1">&gt;            [burl-ct-v20z-26:28518] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This one with Oracle Studio compilers:
</span><br>
<span class="quotelev1">&gt;            parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;            parent: MPI_Comm_spawn #20 return : 0
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] [ 0] /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;         [0x318ac0de80]
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] [ 1]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_handler+0xe3)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] [ 2]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] [ 3]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] [ 4]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/libmpi.so.0(opal_libevent2019_event_base_loop+0x7c7)
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] [ 5]
</span><br>
<span class="quotelev1">&gt;         /workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] [ 6] /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;         [0x318ac06307]
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] [ 7] /lib64/libc.so.6(clone+0x6d)
</span><br>
<span class="quotelev1">&gt;         [0x318a0d1ded]
</span><br>
<span class="quotelev1">&gt;            [burl-ct-x2200-12:02348] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Sometimes, I see a hang rather than a segfault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Previous message:</strong> <a href="11087.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>In reply to:</strong> <a href="11087.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Reply:</strong> <a href="11089.php">Ralph Castain: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
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
