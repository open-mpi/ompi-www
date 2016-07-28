<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 16:32:31 2007" -->
<!-- isoreceived="20070320203231" -->
<!-- sent="Tue, 20 Mar 2007 16:32:26 -0400" -->
<!-- isosent="20070320203226" -->
<!-- name="Hugh Merz" -->
<!-- email="merz_at_[hidden]" -->
<!-- subject="[OMPI users] v1.2 Bus Error (/tmp usage)" -->
<!-- id="20070320203226.GA474_at_grizzly.cita.utoronto.ca" -->
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
<strong>From:</strong> Hugh Merz (<em>merz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-20 16:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2849.php">Ralph Castain: "Re: [OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<li><strong>Previous message:</strong> <a href="2847.php">Ron Brightwell: "[OMPI users] CFP: 2007 IEEE International Conference on Cluster Computing (Cluster2007)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2849.php">Ralph Castain: "Re: [OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<li><strong>Reply:</strong> <a href="2849.php">Ralph Castain: "Re: [OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good Day,
<br>
<p>&nbsp;&nbsp;I'm using Open MPI on a diskless cluster (/tmp is part of a 1m ramdisk), and I found that after upgrading from v1.1.4 to v1.2 that jobs using np &gt; 4 would fail to start during MPI_Init, due to what appears to be a lack of space in /tmp.  The error output is:
<br>
<p>-----
<br>
<p>[tpb200:32193] *** Process received signal ***
<br>
[tpb200:32193] Signal: Bus error (7)
<br>
[tpb200:32193] Signal code:  (2)
<br>
[tpb200:32193] Failing at address: 0x2a998f4120
<br>
[tpb200:32193] [ 0] /lib64/tls/libpthread.so.0 [0x2a95f6e430]
<br>
[tpb200:32193] [ 1] /opt/openmpi/1.2.gcc3/lib/libmpi.so.0(ompi_free_list_grow+0x138) [0x2a9568abc8]
<br>
[tpb200:32193] [ 2] /opt/openmpi/1.2.gcc3/lib/libmpi.so.0(ompi_free_list_resize+0x2d) [0x2a9568b0dd]
<br>
[tpb200:32193] [ 3] /opt/openmpi/1.2.gcc3/lib/openmpi/mca_btl_sm.so(mca_btl_sm_add_procs_same_base_addr+0x6bf) [0x2a98ba419f]
<br>
[tpb200:32193] [ 4] /opt/openmpi/1.2.gcc3/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x28a) [0x2a9899a4fa]
<br>
[tpb200:32193] [ 5] /opt/openmpi/1.2.gcc3/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xe8) [0x2a98889308]
<br>
[tpb200:32193] [ 6] /opt/openmpi/1.2.gcc3/lib/libmpi.so.0(ompi_mpi_init+0x45d) [0x2a956a32ed]
<br>
[tpb200:32193] [ 7] /opt/openmpi/1.2.gcc3/lib/libmpi.so.0(MPI_Init+0x93) [0x2a956c5c93]
<br>
[tpb200:32193] [ 8] a.out(main+0x1c) [0x400a44]
<br>
[tpb200:32193] [ 9] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x2a960933fb]
<br>
[tpb200:32193] [10] a.out [0x40099a]
<br>
[tpb200:32193] *** End of error message ***
<br>
<p>... lots of the above for each process ...
<br>
<p>mpirun noticed that job rank 0 with PID 32040 on node tpb200 exited on signal 7 (Bus error). 
<br>
<p>--/--
<br>
<p>&nbsp;&nbsp;If I increase the size of my ramdisk or point $TMP to a network filesystem then jobs start and complete fine, so it's not a showstopper, but with v1.1.4 (or LAM v7.1.2) I didn't encounter this issue with my default 1m ramdisk (even with np &gt; 100 ).  Is there a way to limit /tmp usage in Open MPI v1.2?    
<br>
<p>Hugh 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2849.php">Ralph Castain: "Re: [OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<li><strong>Previous message:</strong> <a href="2847.php">Ron Brightwell: "[OMPI users] CFP: 2007 IEEE International Conference on Cluster Computing (Cluster2007)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2849.php">Ralph Castain: "Re: [OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<li><strong>Reply:</strong> <a href="2849.php">Ralph Castain: "Re: [OMPI users] v1.2 Bus Error (/tmp usage)"</a>
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
