<?
$subject_val = "[OMPI devel] New crash on trunk (r32246)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 09:54:46 2014" -->
<!-- isoreceived="20140715135446" -->
<!-- sent="Tue, 15 Jul 2014 06:54:42 -0700" -->
<!-- isosent="20140715135442" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] New crash on trunk (r32246)" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36047583977_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] New crash on trunk (r32246)<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 09:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15144.php">Ralph Castain: "[OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15142.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the latest trunk (r32246) I am getting crashes while the program is shutting down.  I assume this is related to some of the changes George just made.  George, can you take a look when you get a chance?
<br>
Looks like everyone is getting the segv during shutdown (mpirun, orted, and application)  Stacktrace of the application shows this:
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0x00007fc48c6a3145 in opal_class_finalize () at ../../opal/class/opal_object.c:175
<br>
175                free(cls-&gt;cls_construct_array);
<br>
Missing separate debuginfos, use: debuginfo-install glibc-2.12-1.107.el6_4.5.x86_64 libgcc-4.4.7-3.el6.x86_64
<br>
(gdb) where
<br>
#0  0x00007fc48c6a3145 in opal_class_finalize () at ../../opal/class/opal_object.c:175
<br>
#1  0x00007fc48c6a8253 in opal_finalize_util () at ../../opal/runtime/opal_finalize.c:110
<br>
#2  0x00007fc48d2697e9 in ompi_mpi_finalize () at ../../ompi/runtime/ompi_mpi_finalize.c:454
<br>
#3  0x00007fc48d2925a9 in PMPI_Finalize () at pfinalize.c:46
<br>
#4  0x0000000000401687 in main (argc=1, argv=0x7fff0e936fb8) at isend.c:109
<br>
(gdb) quit
<br>
<p>mpirun -host drossetti-ivy0,drossetti-ivy1 -np 2 --mca pml ob1 --mca btl sm,tcp,self --mca coll_ml_disable_allgather 1 --mca btl_openib_warn_default_gid_prefix 0 isend [drossetti-ivy0:13073] *** Process received signal *** [drossetti-ivy0:13073] Signal: Segmentation fault (11) [drossetti-ivy0:13073] Signal code: Address not mapped (1) [drossetti-ivy0:13073] Failing at address: 0x7fc48abb2d68 [drossetti-ivy0:13073] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7fc48d005500]
<br>
[drossetti-ivy0:13073] [ 1] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_class_finalize+0x4a)[0x7fc48c6a3145]
<br>
[drossetti-ivy0:13073] [ 2] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_finalize_util+0xc3)[0x7fc48c6a8253]
<br>
[drossetti-ivy0:13073] [ 3] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libmpi.so.0(ompi_mpi_finalize+0xc4c)[0x7fc48d2697e9]
<br>
[drossetti-ivy0:13073] [ 4] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libmpi.so.0(PMPI_Finalize+0x59)[0x7fc48d2925a9]
<br>
[drossetti-ivy0:13073] [ 5] isend[0x401687] [drossetti-ivy0:13073] [ 6] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fc48cc81cdd]
<br>
[drossetti-ivy0:13073] [ 7] isend[0x400f49] [drossetti-ivy0:13073] *** End of error message *** [drossetti-ivy1:29629] *** Process received signal *** [drossetti-ivy1:29629] Signal: Segmentation fault (11) [drossetti-ivy1:29629] Signal code: Address not mapped (1) [drossetti-ivy1:29629] Failing at address: 0x7f239ded6d68 [drossetti-ivy1:29629] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7f23a0329500]
<br>
[drossetti-ivy1:29629] [ 1] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_class_finalize+0x4a)[0x7f239f9c7145]
<br>
[drossetti-ivy1:29629] [ 2] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_finalize_util+0xc3)[0x7f239f9cc253]
<br>
[drossetti-ivy1:29629] [ 3] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libmpi.so.0(ompi_mpi_finalize+0xc4c)[0x7f23a058d7e9]
<br>
[drossetti-ivy1:29629] [ 4] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libmpi.so.0(PMPI_Finalize+0x59)[0x7f23a05b65a9]
<br>
[drossetti-ivy1:29629] [ 5] isend[0x401687] [drossetti-ivy1:29629] [ 6] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f239ffa5cdd]
<br>
[drossetti-ivy1:29629] [ 7] isend[0x400f49] [drossetti-ivy1:29629] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 0 on node drossetti-ivy0 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[drossetti-ivy0:13070] *** Process received signal *** [drossetti-ivy0:13070] Signal: Segmentation fault (11) [drossetti-ivy0:13070] Signal code: Address not mapped (1) [drossetti-ivy0:13070] Failing at address: 0x7eff348fbd68 [drossetti-ivy0:13070] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7eff362d1500]
<br>
[drossetti-ivy0:13070] [ 1] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_class_finalize+0x4a)[0x7eff36fb4145]
<br>
[drossetti-ivy0:13070] [ 2] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_finalize_util+0xc3)[0x7eff36fb9253]
<br>
[drossetti-ivy0:13070] [ 3] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_finalize+0x105)[0x7eff36fb935f]
<br>
[drossetti-ivy0:13070] [ 4] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-rte.so.0(orte_finalize+0xd3)[0x7eff372b9f9f]
<br>
[drossetti-ivy0:13070] [ 5] mpirun(orterun+0x15b5)[0x40573e] [drossetti-ivy0:13070] [ 6] mpirun(main+0x20)[0x403a14] [drossetti-ivy0:13070] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7eff35f4dcdd]
<br>
[drossetti-ivy0:13070] [ 8] mpirun[0x403939] [drossetti-ivy0:13070] *** End of error message *** [drossetti-ivy1:29628] *** Process received signal *** [drossetti-ivy1:29628] Signal: Segmentation fault (11) [drossetti-ivy1:29628] Signal code: Address not mapped (1) [drossetti-ivy1:29628] Failing at address: 0x7fc78217ed68 [drossetti-ivy1:29628] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7fc783b4f500]
<br>
[drossetti-ivy1:29628] [ 1] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_class_finalize+0x4a)[0x7fc784832145]
<br>
[drossetti-ivy1:29628] [ 2] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_finalize_util+0xc3)[0x7fc784837253]
<br>
[drossetti-ivy1:29628] [ 3] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-pal.so.0(opal_finalize+0x105)[0x7fc78483735f]
<br>
[drossetti-ivy1:29628] [ 4] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-rte.so.0(orte_finalize+0xd3)[0x7fc784b37f9f]
<br>
[drossetti-ivy1:29628] [ 5] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/lib/libopen-rte.so.0(orte_daemon+0x23b9)[0x7fc784b6a47d]
<br>
[drossetti-ivy1:29628] [ 6] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/bin/orted(main+0x86)[0x40094a]
<br>
[drossetti-ivy1:29628] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fc7837cbcdd]
<br>
[drossetti-ivy1:29628] [ 8] /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/bin/orted[0x400809]
<br>
[drossetti-ivy1:29628] *** End of error message ***
<br>
bash: line 1: 29628 Segmentation fault      /ivylogin/home/rvandevaart/ompi-repos/ompi-trunk-original/64-dbg-nocuda/bin/orted -mca ess env -mca orte_ess_jobid 3963420672 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca orte_hnp_uri &quot;3963420672.0;tcp://10.31.124.51:45481&quot; --tree-spawn --mca pml ob1 --mca btl sm,tcp,self --mca coll_ml_disable_allgather 1 --mca btl_openib_warn_default_gid_prefix 0 -mca plm rsh -mca dstore ^pmi
<br>
Segmentation fault (core dumped)
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15144.php">Ralph Castain: "[OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15142.php">George Bosilca: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
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
