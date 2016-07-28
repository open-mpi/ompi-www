<?
$subject_val = "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 11 10:57:33 2010" -->
<!-- isoreceived="20100911145733" -->
<!-- sent="Sat, 11 Sep 2010 08:57:23 -0600" -->
<!-- isosent="20100911145723" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange Segmentation Fault inside MPI_Init" -->
<!-- id="2369B446-0AC5-4E7E-B065-3A8865529793_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinYvNSyL6JbSgdXPhejuuxY+ESJ-bc8J-UtOKs1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange Segmentation Fault inside MPI_Init<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-11 10:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14217.php">Lisandro Dalcin: "Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<li><strong>Previous message:</strong> <a href="14215.php">Arunkumar Cr: "[OMPI users] Check out my photos on Facebook"</a>
<li><strong>In reply to:</strong> <a href="14213.php">Srikanth Raju: "[OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14218.php">Srikanth Raju: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Reply:</strong> <a href="14218.php">Srikanth Raju: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How did you configure OMPI?
<br>
<p>On Sep 11, 2010, at 1:35 AM, Srikanth Raju wrote:
<br>
<p><span class="quotelev1">&gt; Hello OMPI Users,
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.4.1 with gcc 4.4.3 on my x86_64 linux system running the latest Ubuntu 10.04 distro. I don't seem to be able to run any OpenMPI application. I try running the simplest application, which goes like this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include&lt;mpi.h&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char * argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compiling it with &quot;mpicc -g test.c&quot;
</span><br>
<span class="quotelev1">&gt; Running with &quot;mpirun -n 2 -hostfile hosts a.out&quot;
</span><br>
<span class="quotelev1">&gt; hosts file contains &quot;localhost slots=2&quot;
</span><br>
<span class="quotelev1">&gt; On run, I get this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] Failing at address: 0x3c
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] Failing at address: 0x3c
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7f3b0aae08f0]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 1] /usr/local/lib/libmca_common_sm.so.1(+0x1561) [0x7f3b082e8561]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 2] /usr/local/lib/libmca_common_sm.so.1(mca_common_sm_mmap_init+0x6c1) [0x7f3b082e9137]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 3] /usr/lib/openmpi/lib/openmpi/mca_mpool_sm.so(+0x137b) [0x7f3b084ed37b]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 4] /usr/lib/libmpi.so.0(mca_mpool_base_module_create+0x7d) [0x7f3b0bacc38d]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 5] /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(+0x2a38) [0x7f3b06c52a38]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 6] /usr/lib/openmpi/lib/openmpi/mca_bml_r2.so(+0x18e7) [0x7f3b076a48e7]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 7] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x258c) [0x7f3b07aae58c]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 8] /usr/lib/libmpi.so.0(+0x392bf) [0x7f3b0ba8b2bf]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [ 9] /usr/lib/libmpi.so.0(MPI_Init+0x170) [0x7f3b0baac330]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [10] a.out(main+0x22) [0x400866]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [11] /lib/libc.so.6(__libc_start_main+0xfd) [0x7f3b0a76cc4d]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] [12] a.out() [0x400789]
</span><br>
<span class="quotelev1">&gt; [starbuck:18830] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7fb6efefe8f0]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 1] /usr/local/lib/libmca_common_sm.so.1(+0x1561) [0x7fb6ed706561]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 2] /usr/local/lib/libmca_common_sm.so.1(mca_common_sm_mmap_init+0x6c1) [0x7fb6ed707137]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 3] /usr/lib/openmpi/lib/openmpi/mca_mpool_sm.so(+0x137b) [0x7fb6ed90b37b]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 4] /usr/lib/libmpi.so.0(mca_mpool_base_module_create+0x7d) [0x7fb6f0eea38d]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 5] /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(+0x2a38) [0x7fb6ec070a38]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 6] /usr/lib/openmpi/lib/openmpi/mca_bml_r2.so(+0x18e7) [0x7fb6ecac28e7]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 7] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x258c) [0x7fb6ececc58c]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 8] /usr/lib/libmpi.so.0(+0x392bf) [0x7fb6f0ea92bf]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [ 9] /usr/lib/libmpi.so.0(MPI_Init+0x170) [0x7fb6f0eca330]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [10] a.out(main+0x22) [0x400866]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [11] /lib/libc.so.6(__libc_start_main+0xfd) [0x7fb6efb8ac4d]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] [12] a.out() [0x400789]
</span><br>
<span class="quotelev1">&gt; [starbuck:18829] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 18830 on node starbuck exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My stack trace from gdb is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00007ffff43c2561 in opal_list_get_first (list=0x7ffff45c5240)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../opal/class/opal_list.h:201
</span><br>
<span class="quotelev1">&gt; 201         assert(1 == item-&gt;opal_list_item_refcount);
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007ffff43c2561 in opal_list_get_first (list=0x7ffff45c5240)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../opal/class/opal_list.h:201
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff43c3137 in mca_common_sm_mmap_init (procs=0x673cb0, 
</span><br>
<span class="quotelev1">&gt;     num_procs=2, size=67113040, 
</span><br>
<span class="quotelev1">&gt;     file_name=0x673c40 &quot;/tmp/openmpi-sessions-srikanth_at_starbuck_0/1510/1/shared_mem_pool.starbuck&quot;, size_ctl_structure=4176, data_seg_alignment=8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../ompi/mca/common/sm/common_sm_mmap.c:291
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff45c737b in mca_mpool_sm_init (resources=&lt;value optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../ompi/mca/mpool/sm/mpool_sm_component.c:214
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff7ba638d in mca_mpool_base_module_create ()
</span><br>
<span class="quotelev1">&gt;    from /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00007ffff2d2ca38 in sm_btl_first_time_init (btl=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;     nprocs=&lt;value optimized out&gt;, procs=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;     peers=&lt;value optimized out&gt;, reachability=&lt;value optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../ompi/mca/btl/sm/btl_sm.c:228
</span><br>
<span class="quotelev1">&gt; #5  mca_btl_sm_add_procs (btl=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;     nprocs=&lt;value optimized out&gt;, procs=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;     peers=&lt;value optimized out&gt;, reachability=&lt;value optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../ompi/mca/btl/sm/btl_sm.c:500
</span><br>
<span class="quotelev1">&gt; #6  0x00007ffff377e8e7 in mca_bml_r2_add_procs (nprocs=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;     procs=0x2, reachable=0x7fffffffdd00)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../ompi/mca/bml/r2/bml_r2.c:206
</span><br>
<span class="quotelev1">&gt; #7  0x00007ffff3b8858c in mca_pml_ob1_add_procs (procs=0x678ce0, nprocs=2)
</span><br>
<span class="quotelev1">&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit--- 
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../ompi/mca/pml/ob1/pml_ob1.c:315
</span><br>
<span class="quotelev1">&gt; #8  0x00007ffff7b652bf in ?? () from /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #9  0x00007ffff7b86330 in PMPI_Init () from /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000400866 in main (argc=1, argv=0x7fffffffe008)
</span><br>
<span class="quotelev1">&gt;     at test.c:4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't figure out what's going on here! It says MPI_Init is segfaulting, but I think it is probably some kind of misconfiguration.
</span><br>
<span class="quotelev1">&gt; I have tried reinstalling the openmpi package. I have an AMD Turion X2 M500(64 bit) processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The interesting thing is, the Segfault occurs only when I try to run multiple processes. With n = 1, it has no problems.
</span><br>
<span class="quotelev1">&gt; Thanks for any help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Srikanth Raju
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
<li><strong>Next message:</strong> <a href="14217.php">Lisandro Dalcin: "Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<li><strong>Previous message:</strong> <a href="14215.php">Arunkumar Cr: "[OMPI users] Check out my photos on Facebook"</a>
<li><strong>In reply to:</strong> <a href="14213.php">Srikanth Raju: "[OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14218.php">Srikanth Raju: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Reply:</strong> <a href="14218.php">Srikanth Raju: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
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
