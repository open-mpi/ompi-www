<?
$subject_val = "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 11:36:27 2014" -->
<!-- isoreceived="20140119163627" -->
<!-- sent="Sun, 19 Jan 2014 08:36:09 -0800" -->
<!-- isosent="20140119163609" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources" -->
<!-- id="03180E4F-A052-484D-A01D-CE06544937E1_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE13EFBF424F_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 11:36:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23417.php">Ralph Castain: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>Previous message:</strong> <a href="23415.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23413.php">Fischer, Greg A.: "[OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The OFED warning about registration is something OMPI added at one point when we isolated the cause of jobs occasionally hanging, so you won't see that warning from other MPIs or earlier versions of OMPI (I forget exactly when we added it).
<br>
<p>The problem you describe doesn't sound like an OMPI issue - it sounds like you've got a memory corruption problem in the code. Have you tried running the examples in our example directory to confirm that the installation is good?
<br>
<p>Also, check to ensure that your LD_LIBRARY_PATH is correctly set to pickup the OMPI libs you installed - most Linux distros come with an older version, and that can cause problems if you inadvertently pick them up.
<br>
<p><p>On Jan 19, 2014, at 5:51 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23417.php">Ralph Castain: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>Previous message:</strong> <a href="23415.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23413.php">Fischer, Greg A.: "[OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
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
