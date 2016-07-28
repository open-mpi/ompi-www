<?
$subject_val = "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 10:22:06 2014" -->
<!-- isoreceived="20140122152206" -->
<!-- sent="Wed, 22 Jan 2014 10:21:54 -0500" -->
<!-- isosent="20140122152154" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE13EFD8BD2E_at_SWEC9985.w-intra.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FE8A8ED6-33F4-4333-A800-13178385BF8F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 10:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23429.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Previous message:</strong> <a href="23427.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>In reply to:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, this is a little strange. The hanging behavior is gone, but I'm getting a segfault now. The output of &quot;hello_c.c&quot; and &quot;ring_c.c&quot; are attached. 
<br>
<p>I'm getting a segfault with the Fortran test, also. I'm afraid I may have polluted the experiment by removing the target openmpi-1.6.5 installation directory yesterday. To produce the attached outputs, I just went back and did &quot;make install&quot; in the openmpi-1.6.5 build directory. I've re-set the environment variables as they were a few days ago by sourcing the same bash script. Perhaps I forgot something, or something on the system changed? Regardless, LD_LIBRARY_PATH and PATH are set correctly, and aberrant behavior persists.
<br>
<p>The reason for deleting the openmpi-1.6.5 installation was that I went back and installed openmpi-1.4.3 and the problem (mostly) went away. Openmpi-1.4.3 can run the simple tests without issue, but on my &quot;real&quot; program, I'm getting symbol lookup errors: 
<br>
<p>mca_paffinity_linux.so: undefined symbol: mca_base_param_reg_int
<br>
<p>Perhaps that's a separate thread.
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev1">&gt;Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, January 21, 2014 3:57 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] simple test problem hangs on mpi_finalize and
</span><br>
<span class="quotelev1">&gt;consumes all system resources
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Just for giggles, can you repeat the same test but with hello_c.c and ring_c.c?
</span><br>
<span class="quotelev1">&gt;I.e., let's get the Fortran out of the way and use just the base C bindings, and
</span><br>
<span class="quotelev1">&gt;see what happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jan 19, 2014, at 6:18 PM, &quot;Fischer, Greg A.&quot; &lt;fischega_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just tried running &quot;hello_f90.f90&quot; and see the same behavior: 100% CPU
</span><br>
<span class="quotelev1">&gt;usage, gradually increasing memory consumption, and failure to get past
</span><br>
<span class="quotelev1">&gt;mpi_finalize. LD_LIBRARY_PATH is set as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The installation target for this version of OpenMPI is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1045
</span><br>
<span class="quotelev2">&gt;&gt; fischega_at_lxlogin2[/data/fischega/petsc_configure/mpi_test/simple]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/bin/mpir
</span><br>
<span class="quotelev2">&gt;&gt; un
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps something strange is happening with GCC? I've tried simple hello
</span><br>
<span class="quotelev1">&gt;world C and Fortran programs, and they work normally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev2">&gt;&gt; Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, January 19, 2014 11:36 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] simple test problem hangs on mpi_finalize
</span><br>
<span class="quotelev2">&gt;&gt; and consumes all system resources
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OFED warning about registration is something OMPI added at one point
</span><br>
<span class="quotelev1">&gt;when we isolated the cause of jobs occasionally hanging, so you won't see
</span><br>
<span class="quotelev1">&gt;that warning from other MPIs or earlier versions of OMPI (I forget exactly
</span><br>
<span class="quotelev1">&gt;when we added it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem you describe doesn't sound like an OMPI issue - it sounds like
</span><br>
<span class="quotelev1">&gt;you've got a memory corruption problem in the code. Have you tried running
</span><br>
<span class="quotelev1">&gt;the examples in our example directory to confirm that the installation is
</span><br>
<span class="quotelev1">&gt;good?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, check to ensure that your LD_LIBRARY_PATH is correctly set to pickup
</span><br>
<span class="quotelev1">&gt;the OMPI libs you installed - most Linux distros come with an older version,
</span><br>
<span class="quotelev1">&gt;and that can cause problems if you inadvertently pick them up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 19, 2014, at 5:51 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a simple, 1-process test case that gets stuck on the mpi_finalize call.
</span><br>
<span class="quotelev1">&gt;The test case is a dead-simple calculation of pi - 50 lines of Fortran. The
</span><br>
<span class="quotelev1">&gt;process gradually consumes more and more memory until the system
</span><br>
<span class="quotelev1">&gt;becomes unresponsive and needs to be rebooted, unless the job is killed
</span><br>
<span class="quotelev1">&gt;first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the output, attached, I see the warning message about OpenFabrics
</span><br>
<span class="quotelev1">&gt;being configured to only allow registering part of physical memory. I've tried
</span><br>
<span class="quotelev1">&gt;to chase this down with my administrator to no avail yet. (I am aware of the
</span><br>
<span class="quotelev1">&gt;relevant FAQ entry.)  A different installation of MPI on the same system,
</span><br>
<span class="quotelev1">&gt;made with a different compiler, does not produce the OpenFabrics memory
</span><br>
<span class="quotelev1">&gt;registration warning - which seems strange because I thought it was a system
</span><br>
<span class="quotelev1">&gt;configuration issue independent of MPI. Also curious in the output is that LSF
</span><br>
<span class="quotelev1">&gt;seems to think there are 7 processes and 11 threads associated with this job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The particulars of my configuration are attached and detailed below. Does
</span><br>
<span class="quotelev1">&gt;anyone see anything potentially problematic?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI Version: 1.6.5
</span><br>
<span class="quotelev2">&gt;&gt; Compiler: GCC 4.6.1
</span><br>
<span class="quotelev2">&gt;&gt; OS: SuSE Linux Enterprise Server 10, Patchlevel 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; uname -a : Linux lxlogin2 2.6.16.60-0.21-smp #1 SMP Tue May 6 12:41:02
</span><br>
<span class="quotelev2">&gt;&gt; UTC 2008 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/tools/casl_sles10/vera_clean/gcc-
</span><br>
<span class="quotelev1">&gt;4.6.1/toolset/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i-1.6.5/lib:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/gcc-4.6.1/
</span><br>
<span class="quotelev2">&gt;&gt; lib64:/tools/lsf/7.0.6.EC/7.0/linux2.6-glibc2.3-x86_64/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=
</span><br>
<span class="quotelev2">&gt;&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/python-2.7.6/bin:/tool
</span><br>
<span class="quotelev2">&gt;&gt; s/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/bin:/tools/ca
</span><br>
<span class="quotelev2">&gt;&gt; sl_sles10/vera_clean/gcc-4.6.1/toolset/gcc-4.6.1/bin:/tools/casl_sles1
</span><br>
<span class="quotelev2">&gt;&gt; 0/vera_clean/gcc-4.6.1/toolset/git-1.7.0.4/bin:/tools/casl_sles10/vera
</span><br>
<span class="quotelev2">&gt;&gt; _clean/gcc-4.6.1/toolset/cmake-2.8.11.2/bin:/tools/lsf/7.0.6.EC/7.0/li
</span><br>
<span class="quotelev2">&gt;&gt; nux2.6-glibc2.3-x86_64/etc:/tools/lsf/7.0.6.EC/7.0/linux2.6-glibc2.3-x
</span><br>
<span class="quotelev2">&gt;&gt; 86_64/bin:/usr/bin:.:/bin:/usr/scripts
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Execution command: (executed via LSF - effectively &quot;mpirun -np 1
</span><br>
<span class="quotelev2">&gt;&gt; test_program&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&lt;output.txt&gt;&lt;config.log.bz2&gt;&lt;ompi_info.bz2&gt;___________________________
</span><br>
<span class="quotelev2">&gt;&gt; ____________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23428/hello.out">hello.out</a>
</ul>
<!-- attachment="hello.out" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23428/ring.out">ring.out</a>
</ul>
<!-- attachment="ring.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23429.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Previous message:</strong> <a href="23427.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>In reply to:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources"</a>
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
