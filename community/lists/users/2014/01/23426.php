<?
$subject_val = "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 15:57:32 2014" -->
<!-- isoreceived="20140121205732" -->
<!-- sent="Tue, 21 Jan 2014 20:57:30 +0000" -->
<!-- isosent="20140121205730" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources" -->
<!-- id="FE8A8ED6-33F4-4333-A800-13178385BF8F_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE13EFBF429E_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 15:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23427.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Previous message:</strong> <a href="23425.php">Nathan Hjelm: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just for giggles, can you repeat the same test but with hello_c.c and ring_c.c?  I.e., let's get the Fortran out of the way and use just the base C bindings, and see what happens.
<br>
<p><p>On Jan 19, 2014, at 6:18 PM, &quot;Fischer, Greg A.&quot; &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just tried running &#147;hello_f90.f90&#148; and see the same behavior: 100% CPU usage, gradually increasing memory consumption, and failure to get past mpi_finalize. LD_LIBRARY_PATH is set as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The installation target for this version of OpenMPI is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1045 fischega_at_lxlogin2[/data/fischega/petsc_configure/mpi_test/simple]&gt; which mpirun
</span><br>
<span class="quotelev1">&gt; /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/bin/mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps something strange is happening with GCC? I&#146;ve tried simple hello world C and Fortran programs, and they work normally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, January 19, 2014 11:36 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OFED warning about registration is something OMPI added at one point when we isolated the cause of jobs occasionally hanging, so you won't see that warning from other MPIs or earlier versions of OMPI (I forget exactly when we added it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem you describe doesn't sound like an OMPI issue - it sounds like you've got a memory corruption problem in the code. Have you tried running the examples in our example directory to confirm that the installation is good?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, check to ensure that your LD_LIBRARY_PATH is correctly set to pickup the OMPI libs you installed - most Linux distros come with an older version, and that can cause problems if you inadvertently pick them up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2014, at 5:51 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a simple, 1-process test case that gets stuck on the mpi_finalize call. The test case is a dead-simple calculation of pi - 50 lines of Fortran. The process gradually consumes more and more memory until the system becomes unresponsive and needs to be rebooted, unless the job is killed first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the output, attached, I see the warning message about OpenFabrics being configured to only allow registering part of physical memory. I&#146;ve tried to chase this down with my administrator to no avail yet. (I am aware of the relevant FAQ entry.)  A different installation of MPI on the same system, made with a different compiler, does not produce the OpenFabrics memory registration warning &#150; which seems strange because I thought it was a system configuration issue independent of MPI. Also curious in the output is that LSF seems to think there are 7 processes and 11 threads associated with this job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The particulars of my configuration are attached and detailed below. Does anyone see anything potentially problematic?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI Version: 1.6.5
</span><br>
<span class="quotelev1">&gt; Compiler: GCC 4.6.1
</span><br>
<span class="quotelev1">&gt; OS: SuSE Linux Enterprise Server 10, Patchlevel 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; uname &#150;a : Linux lxlogin2 2.6.16.60-0.21-smp #1 SMP Tue May 6 12:41:02 UTC 2008 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/lib:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/gcc-4.6.1/lib64:/tools/lsf/7.0.6.EC/7.0/linux2.6-glibc2.3-x86_64/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH= /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/python-2.7.6/bin:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/bin:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/gcc-4.6.1/bin:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/git-1.7.0.4/bin:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/cmake-2.8.11.2/bin:/tools/lsf/7.0.6.EC/7.0/linux2.6-glibc2.3-x86_64/etc:/tools/lsf/7.0.6.EC/7.0/linux2.6-glibc2.3-x86_64/bin:/usr/bin:.:/bin:/usr/scripts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Execution command: (executed via LSF &#150; effectively &#147;mpirun &#150;np 1 test_program&#148;)
</span><br>
<span class="quotelev1">&gt; &lt;output.txt&gt;&lt;config.log.bz2&gt;&lt;ompi_info.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23427.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Previous message:</strong> <a href="23425.php">Nathan Hjelm: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
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
