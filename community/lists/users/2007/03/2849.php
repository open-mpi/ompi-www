<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 16:37:37 2007" -->
<!-- isoreceived="20070320203737" -->
<!-- sent="Tue, 20 Mar 2007 14:37:31 -0600" -->
<!-- isosent="20070320203731" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.2 Bus Error (/tmp usage)" -->
<!-- id="C225A22B.216A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070320203226.GA474_at_grizzly.cita.utoronto.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-20 16:37:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2850.php">Mike Houston: "[OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2848.php">Hugh Merz: "[OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<li><strong>In reply to:</strong> <a href="2848.php">Hugh Merz: "[OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One option would be to amend your mpirun command with -mca btl ^sm. This
<br>
turns off the shared memory subsystem, so you'll see some performance loss
<br>
in your collectives. However, it will reduce your /tmp usage to almost
<br>
nothing.
<br>
<p>Others may suggest alternative solutions.
<br>
Ralph
<br>
<p><p><p>On 3/20/07 2:32 PM, &quot;Hugh Merz&quot; &lt;merz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good Day,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I'm using Open MPI on a diskless cluster (/tmp is part of a 1m ramdisk), and
</span><br>
<span class="quotelev1">&gt; I found that after upgrading from v1.1.4 to v1.2 that jobs using np &gt; 4 would
</span><br>
<span class="quotelev1">&gt; fail to start during MPI_Init, due to what appears to be a lack of space in
</span><br>
<span class="quotelev1">&gt; /tmp.  The error output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] Failing at address: 0x2a998f4120
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 0] /lib64/tls/libpthread.so.0 [0x2a95f6e430]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 1]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.gcc3/lib/libmpi.so.0(ompi_free_list_grow+0x138)
</span><br>
<span class="quotelev1">&gt; [0x2a9568abc8]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.gcc3/lib/libmpi.so.0(ompi_free_list_resize+0x2d)
</span><br>
<span class="quotelev1">&gt; [0x2a9568b0dd]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 3]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.gcc3/lib/openmpi/mca_btl_sm.so(mca_btl_sm_add_procs_same_base
</span><br>
<span class="quotelev1">&gt; _addr+0x6bf) [0x2a98ba419f]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 4]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.gcc3/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x28a)
</span><br>
<span class="quotelev1">&gt; [0x2a9899a4fa]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 5]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.gcc3/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xe8)
</span><br>
<span class="quotelev1">&gt; [0x2a98889308]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 6] /opt/openmpi/1.2.gcc3/lib/libmpi.so.0(ompi_mpi_init+0x45d)
</span><br>
<span class="quotelev1">&gt; [0x2a956a32ed]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 7] /opt/openmpi/1.2.gcc3/lib/libmpi.so.0(MPI_Init+0x93)
</span><br>
<span class="quotelev1">&gt; [0x2a956c5c93]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 8] a.out(main+0x1c) [0x400a44]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [ 9] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x2a960933fb]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] [10] a.out [0x40099a]
</span><br>
<span class="quotelev1">&gt; [tpb200:32193] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ... lots of the above for each process ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 32040 on node tpb200 exited on signal
</span><br>
<span class="quotelev1">&gt; 7 (Bus error). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --/--
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   If I increase the size of my ramdisk or point $TMP to a network filesystem
</span><br>
<span class="quotelev1">&gt; then jobs start and complete fine, so it's not a showstopper, but with v1.1.4
</span><br>
<span class="quotelev1">&gt; (or LAM v7.1.2) I didn't encounter this issue with my default 1m ramdisk (even
</span><br>
<span class="quotelev1">&gt; with np &gt; 100 ).  Is there a way to limit /tmp usage in Open MPI v1.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugh 
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
<li><strong>Next message:</strong> <a href="2850.php">Mike Houston: "[OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2848.php">Hugh Merz: "[OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<li><strong>In reply to:</strong> <a href="2848.php">Hugh Merz: "[OMPI users] v1.2 Bus Error (/tmp usage)"</a>
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
