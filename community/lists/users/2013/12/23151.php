<?
$subject_val = "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 12:20:43 2013" -->
<!-- isoreceived="20131204172043" -->
<!-- sent="Wed, 4 Dec 2013 10:20:42 -0700" -->
<!-- isosent="20131204172042" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple" -->
<!-- id="20131204172042.GA6088_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="897A99FB-4172-4104-B538-249C69B191A2_at_gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 12:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23152.php">Matt Burgess: "[OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Previous message:</strong> <a href="23150.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23150.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not fixed in the trunk. At this time MPI_THREAD_MULTIPLE will always hang (though
<br>
there may be some configurations that don't.) The problem is when multiple threads are
<br>
active opal_condition_wait ALWAYS blocks on a condition variable instead of calling
<br>
opal_progress(). Thus we will not progress since opal_progress() will never be called in
<br>
the MPI_Wait_all/any paths. This will probably be fixed as we address other threading issues
<br>
over the next several months. It is unlikely this will happen in time for 1.8.0.
<br>
<p>-Nathan Hjelm
<br>
Application Readiness, HPC-5, LANL
<br>
<p>On Wed, Dec 04, 2013 at 12:13:25PM -0500, Dominique Orban wrote:
<br>
<span class="quotelev1">&gt; I built the 1.7.x nightly tar ball on 10.8 (Mountain Lion) and 10.9 (Mavericks) and it still hangs. I tried compiling with --enable-mpi-thread-multiple only and with the other options Pierre mentioned. The PETSc tests hang in both cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm curious to know if the nightly tar ball fixes the issue for other users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2013-12-02, at 6:40 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm joining this thread late, but I think I know what is going on:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - I am able to replicate the hang with 1.7.3 on Mavericks (with threading enabled, etc.)
</span><br>
<span class="quotelev2">&gt; &gt; - I notice that the hang has disappeared at the 1.7.x branch head (also on Mavericks)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Meaning: can you try with the latest 1.7.x nightly tarball and verify that the problem disappears for you?  See <a href="http://www.open-mpi.org/nightly/v1.7/">http://www.open-mpi.org/nightly/v1.7/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ralph recently brought over a major ORTE control message change to the 1.7.x branch (after 1.7.3 was released) that -- skipping lots of details -- changes how the shared memory bootstrapping works.  Based on the stack traces you sent and the ones I was also able to get, I'm thinking that Ralph's big ORTE change fixes this issue.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 25, 2013, at 10:52 PM, Dominique Orban &lt;dominique.orban_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 2013-11-25, at 9:02 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Nov 25, 2013, at 5:04 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Nov 24, 2013, at 3:03 PM, Jed Brown &lt;jedbrown_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Given that we have no idea what Homebrew uses, I don't know how we
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; could clarify/respond.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph, it is pretty easy to know what Homebrew uses, c.f. <a href="https://github.com/mxcl/homebrew/blob/master/Library/Formula/open-mpi.rb">https://github.com/mxcl/homebrew/blob/master/Library/Formula/open-mpi.rb</a> (sorry if you meant something else).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Might be a surprise, but I don't track all these guys :-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Homebrew is new to me
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Pierre provided a link to MacPorts saying that all of the following
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; options were needed to properly enable threads.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If that is indeed the case, and if passing some subset of these options
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; results in deadlock, it's not exactly user-friendly.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Maybe --enable-mpi-thread-multiple is enough, in which case MacPorts is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; doing something needlessly complicated and Pierre's link was a red
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; herring?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; That is very likely, though on the other hand, Homebrew is doing something pretty straightforward. I just wanted a quick and easy fix back when I had the same hanging issue, but there should be a better explanation if --enable-mpi-thread-multiple is indeed enough.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It is enough - we set all required things internally
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is that for sure? My original message originates from a hang in the PETSc tests and I get quite different results depending on whether I compile OpenMPI with --enable-mpi-thread-multiple only or not.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I recompiled PETSc with debugging enabled against OpenMPI built with the &quot;correct&quot; flags mentioned by Pierre, and this the stack trace I get:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun -n 2 xterm -e gdb ./ex5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	^C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	0x00007fff991160fa in __psynch_cvwait ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	(gdb) where
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#0  0x00007fff991160fa in __psynch_cvwait ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#1  0x00007fff98d6ffb9 in ?? () from /usr/lib/system/libsystem_c.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	^C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	0x00007fff991160fa in __psynch_cvwait ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	(gdb) where
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#0  0x00007fff991160fa in __psynch_cvwait ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#1  0x00007fff98d6ffb9 in ?? () from /usr/lib/system/libsystem_c.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I recompile PETSc against OpenMPI built with --enable-mpi-thread-multiple only (leaving out the other flags, which Pierre suggested is wrong), I get the following traces:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	^C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	0x00007fff991160fa in __psynch_cvwait ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	(gdb) where
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#0  0x00007fff991160fa in __psynch_cvwait ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#1  0x00007fff98d6ffb9 in ?? () from /usr/lib/system/libsystem_c.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	^C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	0x0000000101edca28 in mca_common_sm_init ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	(gdb) where
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#0  0x0000000101edca28 in mca_common_sm_init ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#1  0x0000000101ed8a38 in mca_mpool_sm_init ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#2  0x0000000101c383fa in mca_mpool_base_module_create ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#3  0x0000000102933b41 in mca_btl_sm_add_procs ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#4  0x0000000102929dfb in mca_bml_r2_add_procs ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#5  0x000000010290a59c in mca_pml_ob1_add_procs ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#6  0x0000000101bd859b in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#7  0x0000000101bf24da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#8  0x00000001000724db in PetscInitialize (argc=0x7fff5fbfed48, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	    args=0x7fff5fbfed40, file=0x0, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	    help=0x1000061c0 &quot;Bratu nonlinear PDE in 2d.\nWe solve the  Bratu (SFI - soid fuel ignition) problem in a 2D rectangular\ndomain, using distributed arrays(DMDAs) to partition the parallel grid.\nThe command line options&quot;...)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	    at /tmp/petsc-3.4.3/src/sys/objects/pinit.c:675
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	#9  0x0000000100000d8c in main ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Line 675 of pinit.c is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	ierr = MPI_Init_thread(argc,args,MPI_THREAD_FUNNELED,&amp;provided);CHKERRQ(ierr);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dominique
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dominique
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23151/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23152.php">Matt Burgess: "[OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Previous message:</strong> <a href="23150.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23150.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
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
