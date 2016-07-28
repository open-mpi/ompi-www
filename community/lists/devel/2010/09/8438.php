<?
$subject_val = "Re: [OMPI devel] 1/4/3rc1 over MX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 09:10:53 2010" -->
<!-- isoreceived="20100901131053" -->
<!-- sent="Wed, 1 Sep 2010 09:10:22 -0400" -->
<!-- isosent="20100901131022" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1/4/3rc1 over MX" -->
<!-- id="0AA68844-726A-4303-A234-1AAAE2C78D5A_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C690144-534E-4FE9-B605-CEA75EBA6ACE_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1/4/3rc1 over MX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 09:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8439.php">David Gunter: "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>Previous message:</strong> <a href="8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8382.php">Scott Atchley: "[OMPI devel] 1/4/3rc1 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8450.php">Jeff Squyres: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>Reply:</strong> <a href="8450.php">Jeff Squyres: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I posted a patch for this on the ticket.
<br>
<p>Scott
<br>
<p>On Aug 26, 2010, at 10:10 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled 1.4.3rc1 with MX 1.2.12 on RHEL 5.4 (2.6.18-164.el5). It does not like the memory manager and MX. Compiling using --without-memory-manager works fine. The output below is form the default configure (i.e. --with-memory-manager).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, I still see unusual latencies for some tests when using the BTL such as reduce-scatter, allgather, etc. I do not see them with the MTL. An example of BTL latencies from reduce-scatter is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          256         1000         7.01         7.01         7.01
</span><br>
<span class="quotelev1">&gt;          512         1000         7.56         7.56         7.56
</span><br>
<span class="quotelev1">&gt;         1024         1000         8.58         8.58         8.58
</span><br>
<span class="quotelev1">&gt;         2048         1000        10.36        10.36        10.36
</span><br>
<span class="quotelev1">&gt;         4096         1000        14.49        14.49        14.49
</span><br>
<span class="quotelev1">&gt;         8192         1000      5180.16      5180.57      5180.36
</span><br>
<span class="quotelev1">&gt;        16384         1000        94.96        94.97        94.96
</span><br>
<span class="quotelev1">&gt;        32768         1000      4676.30      4676.68      4676.49
</span><br>
<span class="quotelev1">&gt;        65536          640      4625.85      4626.23      4626.04
</span><br>
<span class="quotelev1">&gt;       131072          320       243.43       243.46       243.45
</span><br>
<span class="quotelev1">&gt;       262144          160       425.56       425.66       425.61
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -hostfile hosts -np 2 ./IMB-MPI1.ompi-1.4.3rc1 pingpong
</span><br>
<span class="quotelev1">&gt; [rain16:22509] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rain16:22509] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [rain16:22509] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [rain16:22509] Failing at address: 0x2c0
</span><br>
<span class="quotelev1">&gt; [rain15:24145] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rain15:24145] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [rain15:24145] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [rain15:24145] Failing at address: 0x25a0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 22509 on node rain16 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gdb shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x0000003d084075c8 in ?? () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000003d084075c8 in ?? () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #1  0x0000003d0840882b in _Unwind_Backtrace () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #2  0x0000003d060e5eb8 in backtrace () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00002af68e7a47de in opal_backtrace_buffer ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002af68e7a24ce in show_stackframe ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #5  &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt; #6  0x00000000000002c0 in ?? ()
</span><br>
<span class="quotelev1">&gt; #7  0x00002af690520640 in mca_mpool_fake_release_memory ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/openmpi/mca_mpool_fake.so
</span><br>
<span class="quotelev1">&gt; #8  0x00002af68e2f49ce in mca_mpool_base_mem_cb ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #9  0x00002af68e78347b in opal_mem_hooks_release_hook ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x00002af68e7a791f in opal_mem_free_ptmalloc2_munmap ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #11 0x00002af68e7ac2b1 in opal_memory_ptmalloc2_free_hook ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #12 0x0000003d060727c1 in free () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #13 0x00002af69197aaad in mx__rl_fini (rl=0xab5f928)
</span><br>
<span class="quotelev1">&gt;    at ../../../libmyriexpress/userspace/../mx__request.c:102
</span><br>
<span class="quotelev1">&gt; #14 0x00002af69196924d in mx_close_endpoint (endpoint=0xab5f820)
</span><br>
<span class="quotelev1">&gt;    at ../../../libmyriexpress/userspace/../mx_close_endpoint.c:124
</span><br>
<span class="quotelev1">&gt; #15 0x00002af69155e3dc in ompi_mtl_mx_finalize ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/openmpi/mca_mtl_mx.so
</span><br>
<span class="quotelev1">&gt; #16 0x00002af68e2f87e0 in mca_pml_base_select ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #17 0x00002af68e2bcf40 in ompi_mpi_init ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #18 0x00002af68e2da2b1 in PMPI_Init_thread ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #19 0x0000000000403359 in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I tell it to use BTLs only it changes to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -mca pml ob1 -hostfile hosts -np 2 ./IMB-MPI1.ompi-1.4.3rc1 pingpong
</span><br>
<span class="quotelev1">&gt; [rain16:22552] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rain15:24195] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rain15:24195] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [rain15:24195] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [rain15:24195] Failing at address: 0x290
</span><br>
<span class="quotelev1">&gt; [rain16:22552] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [rain16:22552] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [rain16:22552] Failing at address: 0x290
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 22552 on node rain16 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gdb shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x0000003d084075c8 in ?? () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #1  0x0000003d0840882b in _Unwind_Backtrace () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #2  0x0000003d060e5eb8 in backtrace () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00002b8310ee17de in opal_backtrace_buffer ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002b8310edf4ce in show_stackframe ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #5  &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000000290 in ?? ()
</span><br>
<span class="quotelev1">&gt; #7  0x00002b8312c5d640 in mca_mpool_fake_release_memory ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/openmpi/mca_mpool_fake.so
</span><br>
<span class="quotelev1">&gt; #8  0x00002b8310a319ce in mca_mpool_base_mem_cb ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #9  0x00002b8310ec047b in opal_mem_hooks_release_hook ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x00002b8310ee5195 in sYSTRIm ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #11 0x00002b8310ee92da in opal_memory_ptmalloc2_free_hook ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #12 0x0000003d060727c1 in free () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #13 0x0000003d060960bd in closedir () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #14 0x00002b8310ec7cc9 in foreachfile_callback ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #15 0x00002b8310ec797a in foreach_dirinpath ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #16 0x00002b8310ec7a1e in lt_dlforeachfile ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #17 0x00002b8310ecf2a5 in mca_base_component_find ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #18 0x00002b8310ecfc75 in mca_base_components_open ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #19 0x00002b8310a2eb46 in ompi_dpm_base_open ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #20 0x00002b83109fa3c2 in ompi_mpi_init ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #21 0x00002b8310a172b1 in PMPI_Init_thread ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #22 0x0000000000403359 in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lastly, with just the MTL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -mca pml cm -hostfile hosts -np 2 ./IMB-MPI1.ompi-1.4.3rc1 pingpong
</span><br>
<span class="quotelev1">&gt; [rain16:22607] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rain15:24247] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rain15:24247] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [rain15:24247] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [rain15:24247] Failing at address: 0x38e0
</span><br>
<span class="quotelev1">&gt; [rain16:22607] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [rain16:22607] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [rain16:22607] Failing at address: 0x38e0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 22607 on node rain16 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gdb shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x0000003d084075c8 in ?? () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #1  0x0000003d0840882b in _Unwind_Backtrace () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #2  0x0000003d060e5eb8 in backtrace () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00002afa78ae87de in opal_backtrace_buffer ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002afa78ae64ce in show_stackframe ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #5  &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt; #6  0x00000000000038e0 in ?? ()
</span><br>
<span class="quotelev1">&gt; #7  0x00002afa7a864640 in mca_mpool_fake_release_memory ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/openmpi/mca_mpool_fake.so
</span><br>
<span class="quotelev1">&gt; #8  0x00002afa786389ce in mca_mpool_base_mem_cb ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #9  0x00002afa78ac747b in opal_mem_hooks_release_hook ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x00002afa78aec195 in sYSTRIm ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #11 0x00002afa78af02da in opal_memory_ptmalloc2_free_hook ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #12 0x0000003d060727c1 in free () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #13 0x00002afa78acec45 in foreachfile_callback ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #14 0x00002afa78ace97a in foreach_dirinpath ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #15 0x00002afa78acea1e in lt_dlforeachfile ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #16 0x00002afa78ad62a5 in mca_base_component_find ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #17 0x00002afa78ad6c75 in mca_base_components_open ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #18 0x00002afa7863ca26 in ompi_pubsub_base_open ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #19 0x00002afa78601394 in ompi_mpi_init ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #20 0x00002afa7861e2b1 in PMPI_Init_thread ()
</span><br>
<span class="quotelev1">&gt;   from /nfs/home/atchley/projects/openmpi-1.4.3rc1/build/rain/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #21 0x0000000000403359 in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8439.php">David Gunter: "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>Previous message:</strong> <a href="8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8382.php">Scott Atchley: "[OMPI devel] 1/4/3rc1 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8450.php">Jeff Squyres: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>Reply:</strong> <a href="8450.php">Jeff Squyres: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
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
