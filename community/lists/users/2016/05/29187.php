<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 12 04:30:00 2016" -->
<!-- isoreceived="20160512083000" -->
<!-- sent="Thu, 12 May 2016 17:29:39 +0900" -->
<!-- isosent="20160512082939" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="fe974c3f-af5d-8ca6-2959-a0182a9cc9b6_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDijRQ24W0g-DzyogKZTJ5FMmC7XxCgX_7gCLZi+W_33CA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] No core dump in some cases<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-12 04:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29188.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29186.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29186.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29188.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29188.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you configure with --disable-dlopen, then libinfinipath.so is slurped 
<br>
and hence the infinipath signal handler is always set, even if you 
<br>
disable the psm mtl or choose to only use the ob1 pml.
<br>
<p>if you do not configure with --disable-dlopen, then the infinipath 
<br>
signal handler is set when mca_mtl_psm.so is loaded. and it is not 
<br>
loaded if it is disabled or if only ob1 is used.
<br>
<p><p>it seems some verbs destructors are called twice here.
<br>
<p>can you please give the attached patches a try ?
<br>
<p>/* they are exclusive, e.g. you should only apply one at a time */
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 5/12/2016 4:54 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if I understand you correctly, but let me answer based 
</span><br>
<span class="quotelev1">&gt; on what I think you mean:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;quote&gt;
</span><br>
<span class="quotelev1">&gt; the infinipath signal handler only dump the stack (into a .btr file, 
</span><br>
<span class="quotelev1">&gt; yeah !)
</span><br>
<span class="quotelev1">&gt; so if your application crashes without it, you should examine the core
</span><br>
<span class="quotelev1">&gt; file and see what is going wrong.
</span><br>
<span class="quotelev1">&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is true, then there is a bug in OMPI proper, since it is 
</span><br>
<span class="quotelev1">&gt; crashing inside MPI_Init(). Here is the stack:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007ff3104ac7d8 in main_arena () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007ff30f6869ac in device_destruct (device=0x1284b30) at 
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:985
</span><br>
<span class="quotelev1">&gt; #2  0x00007ff30f6820ae in opal_obj_run_destructors (object=0x1284b30) 
</span><br>
<span class="quotelev1">&gt; at ../../../../opal/class/opal_object.h:460
</span><br>
<span class="quotelev1">&gt; #3  0x00007ff30f689d3c in init_one_device (btl_list=0x7fff96c3a200, 
</span><br>
<span class="quotelev1">&gt; ib_dev=0x12843f0) at btl_openib_component.c:2255
</span><br>
<span class="quotelev1">&gt; #4  0x00007ff30f68b800 in btl_openib_component_init 
</span><br>
<span class="quotelev1">&gt; (num_btl_modules=0x7fff96c3a330, enable_progress_threads=true,
</span><br>
<span class="quotelev1">&gt;     enable_mpi_threads=false) at btl_openib_component.c:2752
</span><br>
<span class="quotelev1">&gt; #5  0x00007ff30f648971 in mca_btl_base_select 
</span><br>
<span class="quotelev1">&gt; (enable_progress_threads=true, enable_mpi_threads=false) at 
</span><br>
<span class="quotelev1">&gt; base/btl_base_select.c:110
</span><br>
<span class="quotelev1">&gt; #6  0x00007ff3108100a0 in mca_bml_r2_component_init 
</span><br>
<span class="quotelev1">&gt; (priority=0x7fff96c3a3fc, enable_progress_threads=true, 
</span><br>
<span class="quotelev1">&gt; enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at bml_r2_component.c:86
</span><br>
<span class="quotelev1">&gt; #7  0x00007ff31080d033 in mca_bml_base_init 
</span><br>
<span class="quotelev1">&gt; (enable_progress_threads=true, enable_mpi_threads=false) at 
</span><br>
<span class="quotelev1">&gt; base/bml_base_init.c:74
</span><br>
<span class="quotelev1">&gt; #8  0x00007ff310754675 in ompi_mpi_init (argc=1, argv=0x7fff96c3a7b8, 
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0x7fff96c3a56c)
</span><br>
<span class="quotelev1">&gt;     at runtime/ompi_mpi_init.c:590
</span><br>
<span class="quotelev1">&gt; #9  0x00007ff3107918b7 in PMPI_Init (argc=0x7fff96c3a5ac, 
</span><br>
<span class="quotelev1">&gt; argv=0x7fff96c3a5a0) at pinit.c:66
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000400aa0 in main (argc=1, argv=0x7fff96c3a7b8) at 
</span><br>
<span class="quotelev1">&gt; mpitest.c:17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, the crash happens inside the verbs library and the 
</span><br>
<span class="quotelev1">&gt; following gets printed to the console:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 ./mpitest
</span><br>
<span class="quotelev1">&gt; [smallMPI:05754] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [smallMPI:05754] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [smallMPI:05754] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [smallMPI:05754] Failing at address: 0x7ff3104ac7d8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That sort of tells me the perhaps the signal handler does more than 
</span><br>
<span class="quotelev1">&gt; simply prints the stack; it might be manipulating page permissions 
</span><br>
<span class="quotelev1">&gt; (since I see a different behaviour when PSM signal handlers are enabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI app that I am running is a simple program and it runs fine 
</span><br>
<span class="quotelev1">&gt; with the work around you mention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;quote&gt;
</span><br>
<span class="quotelev1">&gt; note the infinipath signal handler is set in the constructor of
</span><br>
<span class="quotelev1">&gt; libinfinipath.so,
</span><br>
<span class="quotelev1">&gt; and used *not* to be removed in the destructor.
</span><br>
<span class="quotelev1">&gt; that means that if the signal handler is invoked *after* the pml MTL
</span><br>
<span class="quotelev1">&gt; is unloaded, a crash will likely occur because the psm signal handler
</span><br>
<span class="quotelev1">&gt; is likely pointing to unmapped memory.
</span><br>
<span class="quotelev1">&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But during normal operation, this should not be an issue, right? The 
</span><br>
<span class="quotelev1">&gt; signal handler, even if it points to unmapped memory, is being invoked 
</span><br>
<span class="quotelev1">&gt; in response to an exception that will kill the process anyway. The 
</span><br>
<span class="quotelev1">&gt; only side effect of this I see is that the stack will be misleading. 
</span><br>
<span class="quotelev1">&gt; In any case, I am compiling with --disable-dlopen set, so my 
</span><br>
<span class="quotelev1">&gt; understanding is that since all the components are slurped onto one 
</span><br>
<span class="quotelev1">&gt; giant .so file, the memory will not be unmapped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;quote&gt;
</span><br>
<span class="quotelev1">&gt; on top of that, there used to be a bug if some PSM device is detected
</span><br>
<span class="quotelev1">&gt; but with no link (e.g. crash)
</span><br>
<span class="quotelev1">&gt; with the latest ompi master, this bug should be fixed (e.g. no crash)
</span><br>
<span class="quotelev1">&gt; this means the PSM mtl should disqualify itself if there is no link on
</span><br>
<span class="quotelev1">&gt; any of the PSM ports, so, unless your infinipath library is fixed or
</span><br>
<span class="quotelev1">&gt; you configure'd with --disable-dlopen, you will run into trouble if
</span><br>
<span class="quotelev1">&gt; the ipath signal handler is invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you confirm you have the latest master and there is no link on
</span><br>
<span class="quotelev1">&gt; your ipath device ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what does
</span><br>
<span class="quotelev1">&gt; grep ACTIVE /sys/class/infiniband/qib*/ports/*/state
</span><br>
<span class="quotelev1">&gt; returns ?
</span><br>
<span class="quotelev1">&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I confirm that I have the latest from master (by running 'git pull'). 
</span><br>
<span class="quotelev1">&gt; Also, I have a single Qlogic card with a single port and here is the 
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ cat /sys/class/infiniband/qib0/ports/1/state
</span><br>
<span class="quotelev1">&gt; 1: DOWN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;quote&gt;
</span><br>
<span class="quotelev1">&gt; if you did not configure with --disable-dlopen *and* you do not need
</span><br>
<span class="quotelev1">&gt; the psm mtl, you can
</span><br>
<span class="quotelev1">&gt; mpirun --mca mtl ^psm ...
</span><br>
<span class="quotelev1">&gt; or if you do not need any mtl at all
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml ob1 ...
</span><br>
<span class="quotelev1">&gt; should be enough
</span><br>
<span class="quotelev1">&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did configure with --disable-dlopen, but why does that make a 
</span><br>
<span class="quotelev1">&gt; difference? This is the part that I don't understand.
</span><br>
<span class="quotelev1">&gt; And yes, I do have a reasonable work around now, but I am passing on 
</span><br>
<span class="quotelev1">&gt; my observations so that if there is a bug, the developers can fix it, 
</span><br>
<span class="quotelev1">&gt; or if I am doing something wrong, then they can correct me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and 
</span><br>
<span class="quotelev1">&gt; quit ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 12, 2016 at 12:38 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the infinipath signal handler only dump the stack (into a .btr
</span><br>
<span class="quotelev1">&gt;     file, yeah !)
</span><br>
<span class="quotelev1">&gt;     so if your application crashes without it, you should examine the core
</span><br>
<span class="quotelev1">&gt;     file and see what is going wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     note the infinipath signal handler is set in the constructor of
</span><br>
<span class="quotelev1">&gt;     libinfinipath.so,
</span><br>
<span class="quotelev1">&gt;     and used *not* to be removed in the destructor.
</span><br>
<span class="quotelev1">&gt;     that means that if the signal handler is invoked *after* the pml MTL
</span><br>
<span class="quotelev1">&gt;     is unloaded, a crash will likely occur because the psm signal handler
</span><br>
<span class="quotelev1">&gt;     is likely pointing to unmapped memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     on top of that, there used to be a bug if some PSM device is detected
</span><br>
<span class="quotelev1">&gt;     but with no link (e.g. crash)
</span><br>
<span class="quotelev1">&gt;     with the latest ompi master, this bug should be fixed (e.g. no crash)
</span><br>
<span class="quotelev1">&gt;     this means the PSM mtl should disqualify itself if there is no link on
</span><br>
<span class="quotelev1">&gt;     any of the PSM ports, so, unless your infinipath library is fixed or
</span><br>
<span class="quotelev1">&gt;     you configure'd with --disable-dlopen, you will run into trouble if
</span><br>
<span class="quotelev1">&gt;     the ipath signal handler is invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     can you confirm you have the latest master and there is no link on
</span><br>
<span class="quotelev1">&gt;     your ipath device ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     what does
</span><br>
<span class="quotelev1">&gt;     grep ACTIVE /sys/class/infiniband/qib*/ports/*/state
</span><br>
<span class="quotelev1">&gt;     returns ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if you did not configure with --disable-dlopen *and* you do not need
</span><br>
<span class="quotelev1">&gt;     the psm mtl, you can
</span><br>
<span class="quotelev1">&gt;     mpirun --mca mtl ^psm ...
</span><br>
<span class="quotelev1">&gt;     or if you do not need any mtl at all
</span><br>
<span class="quotelev1">&gt;     mpirun --mca pml ob1 ...
</span><br>
<span class="quotelev1">&gt;     should be enough
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     commit 4d026e223ce717345712e669d26f78ed49082df6
</span><br>
<span class="quotelev1">&gt;     Merge: f8facb1 4071719
</span><br>
<span class="quotelev1">&gt;     Author: rhc54 &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Date:   Wed May 11 17:43:17 2016 -0700
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Merge pull request #1661 from matcabral/master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         PSM and PSM2 MTLs to detect drivers and link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Thu, May 12, 2016 at 12:42 PM, dpchoudh . &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Sorry for belabouring on this, but this (hopefully final!) piece of
</span><br>
<span class="quotelev2">&gt;     &gt; information might be of interest to the developers:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; There must be a reason why PSM is installing its signal
</span><br>
<span class="quotelev1">&gt;     handlers; often this
</span><br>
<span class="quotelev2">&gt;     &gt; is done to modify the permission of a page in response to a SEGV
</span><br>
<span class="quotelev1">&gt;     and attempt
</span><br>
<span class="quotelev2">&gt;     &gt; access again. By disabling the handlers, I am preventing the
</span><br>
<span class="quotelev1">&gt;     library from
</span><br>
<span class="quotelev2">&gt;     &gt; doing that, and here is what it tells me:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; [durga_at_smallMPI ~]$ mpirun -np 2  ./mpitest
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20496] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20496] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20496] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20496] Failing at address: 0x7f0b2fdb57d8
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20496] [ 0]
</span><br>
<span class="quotelev1">&gt;     /lib64/libpthread.so.0(+0xf100)[0x7f0b2fdcb100]
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20496] [ 1] /lib64/libc.so.6(+0x3ba7d8)[0x7f0b2fdb57d8]
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20496] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20497] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20497] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20497] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20497] Failing at address: 0x7fbfe2b387d8
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20497] [ 0]
</span><br>
<span class="quotelev1">&gt;     /lib64/libpthread.so.0(+0xf100)[0x7fbfe2b4e100]
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20497] [ 1] /lib64/libc.so.6(+0x3ba7d8)[0x7fbfe2b387d8]
</span><br>
<span class="quotelev2">&gt;     &gt; [smallMPI:20497] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;     &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;     &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;     &gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;     &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; However, even without disabling it, it crashes anyway, as follows:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; unset IPATH_NO_BACKTRACE
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; [durga_at_smallMPI ~]$ mpirun -np 2  ./mpitest
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; mpitest:22009 terminated with signal 11 at PC=7f908bb2a7d8
</span><br>
<span class="quotelev1">&gt;     SP=7ffebb4ee5b8.
</span><br>
<span class="quotelev2">&gt;     &gt; Backtrace:
</span><br>
<span class="quotelev2">&gt;     &gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f908bb2a7d8]
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; mpitest:22010 terminated with signal 11 at PC=7f7a2caa67d8
</span><br>
<span class="quotelev1">&gt;     SP=7ffd73dec3e8.
</span><br>
<span class="quotelev2">&gt;     &gt; Backtrace:
</span><br>
<span class="quotelev2">&gt;     &gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f7a2caa67d8]
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The PC is at a different location but I do not have any more
</span><br>
<span class="quotelev1">&gt;     information
</span><br>
<span class="quotelev2">&gt;     &gt; without a core file.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; It seems like some interaction between OMPI and PSM library is
</span><br>
<span class="quotelev1">&gt;     incorrect.
</span><br>
<span class="quotelev2">&gt;     &gt; I'll let the developers figure it out :-)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks
</span><br>
<span class="quotelev2">&gt;     &gt; Durga
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The surgeon general advises you to eat right, exercise regularly
</span><br>
<span class="quotelev1">&gt;     and quit
</span><br>
<span class="quotelev2">&gt;     &gt; ageing.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Wed, May 11, 2016 at 11:23 PM, dpchoudh . &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Hello Gilles
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Mystery solved! In fact, this one line is exactly what was
</span><br>
<span class="quotelev1">&gt;     needed!! It
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; turns out the OMPI signal handlers are irrelevant. (i.e. don't
</span><br>
<span class="quotelev1">&gt;     make any
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; difference when this env variable is set)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; This explains:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; 1. The difference in the behaviour in the two clusters (one has
</span><br>
<span class="quotelev1">&gt;     PSM, the
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; other does not)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; 2. Why you couldn't find where in OMPI code the .btr files are
</span><br>
<span class="quotelev1">&gt;     being
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; generated (looks like they are being generated in PSM library)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; And, now that I can get a core file (finally!), I can present
</span><br>
<span class="quotelev1">&gt;     the back
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; trace where the crash in MPI_Init() is happening. It is as follows:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #0  0x00007f1c114977d8 in main_arena () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #1  0x00007f1c106719ac in device_destruct (device=0x1c85b70) at
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; btl_openib_component.c:985
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #2  0x00007f1c1066d0ae in opal_obj_run_destructors
</span><br>
<span class="quotelev1">&gt;     (object=0x1c85b70) at
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; ../../../../opal/class/opal_object.h:460
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #3  0x00007f1c10674d3c in init_one_device (btl_list=0x7ffd00dada50,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; ib_dev=0x1c85430) at btl_openib_component.c:2255
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #4  0x00007f1c10676800 in btl_openib_component_init
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; (num_btl_modules=0x7ffd00dadb80, enable_progress_threads=true,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; enable_mpi_threads=false)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     at btl_openib_component.c:2752
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #5  0x00007f1c10633971 in mca_btl_base_select
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; (enable_progress_threads=true, enable_mpi_threads=false) at
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; base/btl_base_select.c:110
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #6  0x00007f1c117fb0a0 in mca_bml_r2_component_init
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; (priority=0x7ffd00dadc4c, enable_progress_threads=true,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; enable_mpi_threads=false)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     at bml_r2_component.c:86
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #7  0x00007f1c117f8033 in mca_bml_base_init
</span><br>
<span class="quotelev1">&gt;     (enable_progress_threads=true,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; enable_mpi_threads=false) at base/bml_base_init.c:74
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #8  0x00007f1c1173f675 in ompi_mpi_init (argc=1,
</span><br>
<span class="quotelev1">&gt;     argv=0x7ffd00dae008,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; requested=0, provided=0x7ffd00daddbc) at
</span><br>
<span class="quotelev1">&gt;     runtime/ompi_mpi_init.c:590
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #9  0x00007f1c1177c8b7 in PMPI_Init (argc=0x7ffd00daddfc,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; argv=0x7ffd00daddf0) at pinit.c:66
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; #10 0x0000000000400aa0 in main (argc=1, argv=0x7ffd00dae008) at
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; mpitest.c:17
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; This is with the absolute latest code from master.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Thanks everyone for their help.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;     regularly and quit
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; ageing.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; On Wed, May 11, 2016 at 10:55 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Note the psm library sets its own signal handler, possibly
</span><br>
<span class="quotelev1">&gt;     after the
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; OpenMPI one.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; that can be disabled by
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; export IPATH_NO_BACKTRACE=1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; On 5/12/2016 11:34 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Thank you for your continued support. With your help, I have a
</span><br>
<span class="quotelev1">&gt;     better
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; understanding of what is happening. Here are the details.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; 1. Yes, I am sure that ulimit -c is 'unlimited' (and for the
</span><br>
<span class="quotelev1">&gt;     test in
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; question, I am running it on a single node, so there are no
</span><br>
<span class="quotelev1">&gt;     other nodes)
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; 2. The command I am running is possibly the simplest MPI command:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; mpirun -np 2 &lt;program&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; It looks to me, after running your test code, that what is
</span><br>
<span class="quotelev1">&gt;     crashing is
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; MPI_Init() itself. The output from your code (I called it
</span><br>
<span class="quotelev1">&gt;     'btrtest') is as
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; follows:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; [durga_at_smallMPI ~]$ mpirun -np 2 ./btrtest
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; btrtest:7275 terminated with signal 11 at PC=7f401f49e7d8
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; SP=7ffec47e7578.  Backtrace:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f401f49e7d8]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; btrtest:7274 terminated with signal 11 at PC=7f1ba21897d8
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; SP=7ffc516ac8d8.  Backtrace:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f1ba21897d8]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; a non-zero exit code. Per user-direction, the job has been
</span><br>
<span class="quotelev1">&gt;     aborted.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; mpirun detected that one or more processes exited with
</span><br>
<span class="quotelev1">&gt;     non-zero status,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;   Process name: [[7936,1],1]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; So obviously the code does not make it past MPI_Init()
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; This is an issue that I have been observing for quite a while in
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; different forms and have reported on the forum a few times
</span><br>
<span class="quotelev1">&gt;     also. Let me
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; elaborate:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Both my 'well-behaving' and crashing clusters run CentOS 7
</span><br>
<span class="quotelev1">&gt;     (the crashing
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; one has the latest updates, the well-behaving one does not as
</span><br>
<span class="quotelev1">&gt;     I am not
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; allowed to apply updates on that). They both have OMPI, from
</span><br>
<span class="quotelev1">&gt;     the master
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; branch, compiled from the source. Both consist of 64 bit Dell
</span><br>
<span class="quotelev1">&gt;     servers,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; although not identical models (I doubt if that matters)
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; The only significant difference between the two is this:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; The well behaved one (if it does core dump, that is because
</span><br>
<span class="quotelev1">&gt;     there is a
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; bug in the MPI app) has very simple network hardware: two
</span><br>
<span class="quotelev1">&gt;     different NICs
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; (one Broadcom GbE, one proprietary NIC that is currently being
</span><br>
<span class="quotelev1">&gt;     exposed as an
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; IP interface). There is no RDMA capability there at all.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; The crashing one have 4 different NICs:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; 1. Broadcom GbE
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; 2. Chelsio T3 based 10Gb iWARP NIC
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; 3. QLogic 20Gb Infiniband (PSM capable)
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; 4. LSI logic Fibre channel
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; In this situation, WITH ALL BUT THE GbE LINK DOWN (the GbE
</span><br>
<span class="quotelev1">&gt;     connects the
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; machine to the WAN link), it seems just the presence of these
</span><br>
<span class="quotelev1">&gt;     NICs matter.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Here are the various commands and outputs:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; [durga_at_smallMPI ~]$ mpirun -np 2 ./btrtest
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; btrtest:10032 terminated with signal 11 at PC=7f6897c197d8
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; SP=7ffcae2b2ef8.  Backtrace:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f6897c197d8]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; btrtest:10033 terminated with signal 11 at PC=7fb035c3e7d8
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; SP=7ffe61a92088.  Backtrace:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7fb035c3e7d8]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; a non-zero exit code. Per user-direction, the job has been
</span><br>
<span class="quotelev1">&gt;     aborted.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; mpirun detected that one or more processes exited with
</span><br>
<span class="quotelev1">&gt;     non-zero status,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;   Process name: [[9294,1],0]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -mca pml ob1 ./btrtest
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; btrtest:10076 terminated with signal 11 at PC=7fa92d20b7d8
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; SP=7ffebb106028.  Backtrace:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7fa92d20b7d8]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; btrtest:10077 terminated with signal 11 at PC=7f5012fa57d8
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; SP=7ffea4f4fdf8.  Backtrace:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f5012fa57d8]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; a non-zero exit code. Per user-direction, the job has been
</span><br>
<span class="quotelev1">&gt;     aborted.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; mpirun detected that one or more processes exited with
</span><br>
<span class="quotelev1">&gt;     non-zero status,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;   Process name: [[9266,1],0]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -mca pml ob1 -mca btl self,sm
</span><br>
<span class="quotelev1">&gt;     ./btrtest
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; btrtest:10198 terminated with signal 11 at PC=400829
</span><br>
<span class="quotelev1">&gt;     SP=7ffe6e148870.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Backtrace:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; btrtest:10197 terminated with signal 11 at PC=400829
</span><br>
<span class="quotelev1">&gt;     SP=7ffe87be6cd0.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Backtrace:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; ./btrtest[0x400829]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f9473bbeb15]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; ./btrtest[0x4006d9]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; ./btrtest[0x400829]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7fdfe2d8eb15]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; ./btrtest[0x4006d9]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; after MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; after MPI_Init : -1 -1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; a non-zero exit code. Per user-direction, the job has been
</span><br>
<span class="quotelev1">&gt;     aborted.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; mpirun detected that one or more processes exited with
</span><br>
<span class="quotelev1">&gt;     non-zero status,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;   Process name: [[9384,1],1]
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; [durga_at_smallMPI ~]$ ulimit -a
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; core file size          (blocks, -c) unlimited
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; pending signals                 (-i) 216524
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; max user processes              (-u) 4096
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; [durga_at_smallMPI ~]$
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; I do realize that my setup is very unusual (I am a
</span><br>
<span class="quotelev1">&gt;     quasi-developer of MPI
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; whereas most other folks in this list are likely end-users),
</span><br>
<span class="quotelev1">&gt;     but somehow
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; just disabling this 'execinfo' MCA would allow me to make
</span><br>
<span class="quotelev1">&gt;     progress (and also
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; find out why/where MPI_Init() is crashing!). Is there any way
</span><br>
<span class="quotelev1">&gt;     I can do that?
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;     regularly and quit
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; ageing.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; On Wed, May 11, 2016 at 8:58 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Are you sure ulimit -c unlimited is *really* applied on all hosts
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; can you please run the simple program below and confirm that ?
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; #include &lt;sys/resource.h&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; #include &lt;poll.h&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     struct rlimit rlim;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     char * c = (char *)0;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     getrlimit(RLIMIT_CORE, &amp;rlim);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     printf (&quot;before MPI_Init : %d %d\n&quot;, rlim.rlim_cur,
</span><br>
<span class="quotelev1">&gt;     rlim.rlim_max);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     getrlimit(RLIMIT_CORE, &amp;rlim);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     printf (&quot;after MPI_Init : %d %d\n&quot;, rlim.rlim_cur,
</span><br>
<span class="quotelev1">&gt;     rlim.rlim_max);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     *c = 0;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; On 5/12/2016 4:22 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Thank you for the advice. However, that did not seem to make any
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; difference. Here is what I did (on the cluster that generates
</span><br>
<span class="quotelev1">&gt;     .btr files for
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; core dumps):
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; [durga_at_smallMPI git]$ ompi_info --all | grep opal_signal
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;            MCA opal base: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; &quot;6,7,8,11&quot;, data source: default, level: 3 user/all, type:
</span><br>
<span class="quotelev1">&gt;     string)
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; [durga_at_smallMPI git]$
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; According to &lt;bits/signum.h&gt;, signals 6.7,8,11 are this:
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; #define    SIGABRT        6    /* Abort (ANSI).  */
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; #define    SIGBUS        7    /* BUS error (4.2 BSD).  */
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; #define    SIGFPE        8    /* Floating-point exception
</span><br>
<span class="quotelev1">&gt;     (ANSI).  */
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; #define    SIGSEGV        11    /* Segmentation violation
</span><br>
<span class="quotelev1">&gt;     (ANSI).  */
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; And thus I added the following just after MPI_Init()
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     signal(SIGBUS, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     signal(SIGFPE, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     signal(SIGSEGV, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;     signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; (I added the 'SIGTERM' part later, just in case it would make a
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; difference; i didn't)
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; The resulting code still generates .btr files instead of core
</span><br>
<span class="quotelev1">&gt;     files.
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; It looks like the 'execinfo' MCA component is being used as the
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; backtrace mechanism:
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; [durga_at_smallMPI git]$ ompi_info | grep backtrace
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;            MCA backtrace: execinfo (MCA v2.1.0, API v2.0.0,
</span><br>
<span class="quotelev1">&gt;     Component
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; v3.0.0)
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; However, I could not find any way to choose 'none' instead of
</span><br>
<span class="quotelev1">&gt;     'execinfo'
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; And the strange thing is, on the cluster where regular core
</span><br>
<span class="quotelev1">&gt;     dump is
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; happening, the output of
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; $ ompi_info | grep backtrace
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; is identical to the above. (Which kind of makes sense because
</span><br>
<span class="quotelev1">&gt;     they were
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; created from the same source with the same configure options.)
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Sorry to harp on this, but without a core file it is hard to
</span><br>
<span class="quotelev1">&gt;     debug the
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; application (e.g. examine stack variables).
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;     regularly and
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; quit ageing.
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; On Wed, May 11, 2016 at 3:37 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Durga,
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; you might wanna try to restore the signal handler for other
</span><br>
<span class="quotelev1">&gt;     signals as
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; well
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; (SIGSEGV, SIGBUS, ...)
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; ompi_info --all | grep opal_signal
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; does list the signal you should restore the handler
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; only one backtrace component is built (out of several
</span><br>
<span class="quotelev1">&gt;     candidates :
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; execinfo, none, printstack)
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; nm -l libopen-pal.so | grep backtrace
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; will hint you which component was built
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; your two similar distros might have different backtrace
</span><br>
<span class="quotelev1">&gt;     component
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Gus,
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; btr is a plain text file with a back trace &quot;ala&quot; gdb
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Nathan,
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; i did a 'grep btr' and could not find anything :-(
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; opal_backtrace_buffer and opal_backtrace_print are only used
</span><br>
<span class="quotelev1">&gt;     with
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; stderr.
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; so i am puzzled who creates the tracefile name and where ...
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; also, no stack is printed by default unless
</span><br>
<span class="quotelev1">&gt;     opal_abort_print_stack is
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; true
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; On Wed, May 11, 2016 at 3:43 PM, dpchoudh .
</span><br>
<span class="quotelev1">&gt;     &lt;dpchoudh_at_[hidden] &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; Hello Nathan
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; Thank you for your response. Could you please be more
</span><br>
<span class="quotelev1">&gt;     specific?
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; Adding the
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; following after MPI_Init() does not seem to make a difference.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;   signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;   signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; I also find it puzzling that nearly identical OMPI distro
</span><br>
<span class="quotelev1">&gt;     running on
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; a
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; different machine shows different behaviour.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; Best regards
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; Durga
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;     regularly and
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; quit
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; ageing.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; On Tue, May 10, 2016 at 10:02 AM, Hjelm, Nathan Thomas
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; &lt;hjelmn_at_[hidden] &lt;mailto:hjelmn_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; btr files are indeed created by open mpi's backtrace
</span><br>
<span class="quotelev1">&gt;     mechanism. I
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; think we
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; should revisit it at some point but for now the only
</span><br>
<span class="quotelev1">&gt;     effective way i
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; have
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; found to prevent it is to restore the default signal
</span><br>
<span class="quotelev1">&gt;     handlers after
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; MPI_Init.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Excuse the quoting style. Good sucks.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; ________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; From: users on behalf of dpchoudh .
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Sent: Monday, May 09, 2016 2:59:37 PM
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] No core dump in some cases
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Hi Gus
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Thanks for your suggestion. But I am not using any
</span><br>
<span class="quotelev1">&gt;     resource manager
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; (i.e.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; I am launching mpirun from the bash shell.). In fact,
</span><br>
<span class="quotelev1">&gt;     both of the
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; two
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; clusters I talked about run CentOS 7 and I launch the job
</span><br>
<span class="quotelev1">&gt;     the same
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; way on
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; both of these, yet one of them creates standard core
</span><br>
<span class="quotelev1">&gt;     files and the
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; other
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; creates the 'btr; files. Strange thing is, I could not
</span><br>
<span class="quotelev1">&gt;     find anything
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; on the
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; .btr (= Backtrace?) files on Google, which is any I asked
</span><br>
<span class="quotelev1">&gt;     on this
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; forum.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Best regards
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;     regularly and
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; quit
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; ageing.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; On Mon, May 9, 2016 at 12:04 PM, Gus Correa
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gus_at_[hidden]&gt;&lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Hi Durga
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Just in case ...
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; If you're using a resource manager to start the jobs
</span><br>
<span class="quotelev1">&gt;     (Torque, etc),
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; you need to have them set the limits (for coredump size,
</span><br>
<span class="quotelev1">&gt;     stacksize,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; locked
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; memory size, etc).
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; This way the jobs will inherit the limits from the
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; resource manager daemon.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; On Torque (which I use) I do this on the pbs_mom daemon
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; init script (I am still before the systemd era, that
</span><br>
<span class="quotelev1">&gt;     lovely POS).
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; And set the hard/soft limits on /etc/security/limits.conf
</span><br>
<span class="quotelev1">&gt;     as well.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; On 05/07/2016 12:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; I'm afraid I don't know what a .btr file is -- that is
</span><br>
<span class="quotelev1">&gt;     not something
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; that
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; is controlled by Open MPI.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; You might want to look into your OS settings to see if it
</span><br>
<span class="quotelev1">&gt;     has some
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; kind of
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; alternate corefile mechanism...?
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; On May 6, 2016, at 8:58 PM, dpchoudh .
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dpchoudh_at_[hidden]&gt;&lt;mailto:dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dpchoudh_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Hello all
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; I run MPI jobs (for test purpose only) on two different
</span><br>
<span class="quotelev1">&gt;     'clusters'.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Both
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; 'clusters' have two nodes only, connected back-to-back.
</span><br>
<span class="quotelev1">&gt;     The two are
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; very
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; similar, but not identical, both software and hardware wise.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Both have ulimit -c set to unlimited. However, only one
</span><br>
<span class="quotelev1">&gt;     of the two
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; creates
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; core files when an MPI job crashes. The other creates a
</span><br>
<span class="quotelev1">&gt;     text file
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; named
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; something like
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; I'd much prefer a core file because that allows me to
</span><br>
<span class="quotelev1">&gt;     debug with a
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; lot
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; more options than a static text file with addresses. How
</span><br>
<span class="quotelev1">&gt;     do I get a
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; core
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; file in all situations? I am using MPI source from the master
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; branch.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Thanks in advance
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;     regularly and
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; quit
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; ageing.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/05/29141.php">http://www.open-mpi.org/community/lists/users/2016/05/29141.php</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/05/29154.php">http://www.open-mpi.org/community/lists/users/2016/05/29154.php</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; Subscription:
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/05/29169.php">http://www.open-mpi.org/community/lists/users/2016/05/29169.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29170.php">http://www.open-mpi.org/community/lists/users/2016/05/29170.php</a>
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29176.php">http://www.open-mpi.org/community/lists/users/2016/05/29176.php</a>
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29177.php">http://www.open-mpi.org/community/lists/users/2016/05/29177.php</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29178.php">http://www.open-mpi.org/community/lists/users/2016/05/29178.php</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29181.php">http://www.open-mpi.org/community/lists/users/2016/05/29181.php</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29184.php">http://www.open-mpi.org/community/lists/users/2016/05/29184.php</a>
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/05/29185.php">http://www.open-mpi.org/community/lists/users/2016/05/29185.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29186.php">http://www.open-mpi.org/community/lists/users/2016/05/29186.php</a>
</span><br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29187/openib.1.patch">openib.1.patch</a>
</ul>
<!-- attachment="openib.1.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29187/openib.2.patch">openib.2.patch</a>
</ul>
<!-- attachment="openib.2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29188.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29186.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29186.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29188.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29188.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
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
