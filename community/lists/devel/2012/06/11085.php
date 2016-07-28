<?
$subject_val = "[OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  9 15:06:13 2012" -->
<!-- isoreceived="20120609190613" -->
<!-- sent="Sat, 09 Jun 2012 15:06:06 -0400" -->
<!-- isosent="20120609190606" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults" -->
<!-- id="4FD39E9E.4000400_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-09 15:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11086.php">Eugene Loh: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Previous message:</strong> <a href="11084.php">Jeff Squyres: "[OMPI devel] Trac -&gt; Redmine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11086.php">Eugene Loh: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Reply:</strong> <a href="11086.php">Eugene Loh: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With r26565:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enable orte progress threads and libevent thread support by default
<br>
Oracle MTT testing started showing new spawn_multiple failures.  I've 
<br>
only seen this in 64-bit.  Here are two segfaults, both from Linux/x86 
<br>
systems running over TCP:
<br>
<p>This one with GNU compilers:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent: MPI_Comm_spawn #300 return : 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] *** Process received signal ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] Signal code: Address not mapped (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] Failing at address: (nil)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 0] /lib64/libpthread.so.0 [0x3a21c0e7c0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 1] /lib64/libc.so.6(memcpy+0x35) 
<br>
[0x3a2107bde5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 2] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_copy+0x58)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 3] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_oob_tcp.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 4] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv_nb+0x314)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 5] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_rml_oob.so(orte_rml_oob_recv_buffer_nb+0xff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 6] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/openmpi/mca_dpm_orte.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 7] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-v20z-26/ompi-tarball-testing/installs/smMv/install/lib/lib64/libmpi.so.0(PMPI_Comm_spawn+0x2ee)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 8] dynamic/loop_spawn [0x40120b]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [ 9] 
<br>
/lib64/libc.so.6(__libc_start_main+0xf4) [0x3a2101d994]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] [10] dynamic/loop_spawn [0x400dd9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-v20z-26:28518] *** End of error message ***
<br>
<p>This one with Oracle Studio compilers:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent: MPI_Comm_spawn #0 return : 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent: MPI_Comm_spawn #20 return : 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] *** Process received signal ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] Signal code: Address not mapped (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] Failing at address: 0x10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] [ 0] /lib64/libpthread.so.0 [0x318ac0de80]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] [ 1] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_handler+0xe3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] [ 2] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/openmpi/mca_oob_tcp.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] [ 3] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/libmpi.so.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] [ 4] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/libmpi.so.0(opal_libevent2019_event_base_loop+0x7c7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] [ 5] 
<br>
/workspace/tdontje/hpc/mtt-scratch/burl-ct-x2200-12/ompi-tarball-testing/installs/Q7wT/install/lib/lib64/libmpi.so.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] [ 6] /lib64/libpthread.so.0 [0x318ac06307]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] [ 7] /lib64/libc.so.6(clone+0x6d) 
<br>
[0x318a0d1ded]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[burl-ct-x2200-12:02348] *** End of error message ***
<br>
<p>Sometimes, I see a hang rather than a segfault.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11086.php">Eugene Loh: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Previous message:</strong> <a href="11084.php">Jeff Squyres: "[OMPI devel] Trac -&gt; Redmine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11086.php">Eugene Loh: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
<li><strong>Reply:</strong> <a href="11086.php">Eugene Loh: "Re: [OMPI devel] r26565 (orte progress threads and libevent thread support by default) causing segfaults"</a>
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
