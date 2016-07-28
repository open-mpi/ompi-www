<?
$subject_val = "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 22:52:48 2013" -->
<!-- isoreceived="20131126035248" -->
<!-- sent="Mon, 25 Nov 2013 22:52:46 -0500" -->
<!-- isosent="20131126035246" -->
<!-- name="Dominique Orban" -->
<!-- email="dominique.orban_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple" -->
<!-- id="42678DF4-401A-4023-8C37-8E82D1D3F655_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AA66198A-04FC-4DF3-9EB1-4BDADFE5BBDF_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple<br>
<strong>From:</strong> Dominique Orban (<em>dominique.orban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 22:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23067.php">Reuti: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23065.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23065.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23122.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with	--enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23122.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with	--enable-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2013-11-25, at 9:02 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 25, 2013, at 5:04 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 24, 2013, at 3:03 PM, Jed Brown &lt;jedbrown_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Given that we have no idea what Homebrew uses, I don't know how we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could clarify/respond.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, it is pretty easy to know what Homebrew uses, c.f. <a href="https://github.com/mxcl/homebrew/blob/master/Library/Formula/open-mpi.rb">https://github.com/mxcl/homebrew/blob/master/Library/Formula/open-mpi.rb</a> (sorry if you meant something else).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Might be a surprise, but I don't track all these guys :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Homebrew is new to me
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pierre provided a link to MacPorts saying that all of the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options were needed to properly enable threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If that is indeed the case, and if passing some subset of these options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results in deadlock, it's not exactly user-friendly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe --enable-mpi-thread-multiple is enough, in which case MacPorts is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing something needlessly complicated and Pierre's link was a red
</span><br>
<span class="quotelev3">&gt;&gt;&gt; herring?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is very likely, though on the other hand, Homebrew is doing something pretty straightforward. I just wanted a quick and easy fix back when I had the same hanging issue, but there should be a better explanation if --enable-mpi-thread-multiple is indeed enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is enough - we set all required things internally
</span><br>
<p>Is that for sure? My original message originates from a hang in the PETSc tests and I get quite different results depending on whether I compile OpenMPI with --enable-mpi-thread-multiple only or not.
<br>
<p>I recompiled PETSc with debugging enabled against OpenMPI built with the &quot;correct&quot; flags mentioned by Pierre, and this the stack trace I get:
<br>
<p>$ mpirun -n 2 xterm -e gdb ./ex5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program received signal SIGINT, Interrupt.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x00007fff991160fa in __psynch_cvwait ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb) where
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#0  0x00007fff991160fa in __psynch_cvwait ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#1  0x00007fff98d6ffb9 in ?? () from /usr/lib/system/libsystem_c.dylib
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program received signal SIGINT, Interrupt.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x00007fff991160fa in __psynch_cvwait ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb) where
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#0  0x00007fff991160fa in __psynch_cvwait ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#1  0x00007fff98d6ffb9 in ?? () from /usr/lib/system/libsystem_c.dylib
<br>
<p><p>If I recompile PETSc against OpenMPI built with --enable-mpi-thread-multiple only (leaving out the other flags, which Pierre suggested is wrong), I get the following traces:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program received signal SIGINT, Interrupt.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x00007fff991160fa in __psynch_cvwait ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb) where
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#0  0x00007fff991160fa in __psynch_cvwait ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#1  0x00007fff98d6ffb9 in ?? () from /usr/lib/system/libsystem_c.dylib
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program received signal SIGINT, Interrupt.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x0000000101edca28 in mca_common_sm_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb) where
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#0  0x0000000101edca28 in mca_common_sm_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#1  0x0000000101ed8a38 in mca_mpool_sm_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_mpool_sm.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#2  0x0000000101c383fa in mca_mpool_base_module_create ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#3  0x0000000102933b41 in mca_btl_sm_add_procs ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_btl_sm.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#4  0x0000000102929dfb in mca_bml_r2_add_procs ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_bml_r2.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#5  0x000000010290a59c in mca_pml_ob1_add_procs ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_pml_ob1.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#6  0x0000000101bd859b in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#7  0x0000000101bf24da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#8  0x00000001000724db in PetscInitialize (argc=0x7fff5fbfed48, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=0x7fff5fbfed40, file=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help=0x1000061c0 &quot;Bratu nonlinear PDE in 2d.\nWe solve the  Bratu (SFI - soid fuel ignition) problem in a 2D rectangular\ndomain, using distributed arrays(DMDAs) to partition the parallel grid.\nThe command line options&quot;...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at /tmp/petsc-3.4.3/src/sys/objects/pinit.c:675
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#9  0x0000000100000d8c in main ()
<br>
<p><p>Line 675 of pinit.c is
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Init_thread(argc,args,MPI_THREAD_FUNNELED,&amp;provided);CHKERRQ(ierr);
<br>
<p><p>Dominique
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23067.php">Reuti: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23065.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23065.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23122.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with	--enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23122.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with	--enable-thread-multiple"</a>
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
