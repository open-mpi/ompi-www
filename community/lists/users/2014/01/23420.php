<?
$subject_val = "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 18:18:48 2014" -->
<!-- isoreceived="20140119231848" -->
<!-- sent="Sun, 19 Jan 2014 18:18:41 -0500" -->
<!-- isosent="20140119231841" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE13EFBF429E_at_SWEC9985.w-intra.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03180E4F-A052-484D-A01D-CE06544937E1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 18:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23421.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Previous message:</strong> <a href="23419.php">George Bosilca: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>In reply to:</strong> <a href="23416.php">Ralph Castain: "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried running &quot;hello_f90.f90&quot; and see the same behavior: 100% CPU usage, gradually increasing memory consumption, and failure to get past mpi_finalize. LD_LIBRARY_PATH is set as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/lib
<br>
<p>The installation target for this version of OpenMPI is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5
<br>
<p>1045 fischega_at_lxlogin2[/data/fischega/petsc_configure/mpi_test/simple]&gt; which mpirun
<br>
/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/bin/mpirun
<br>
<p>Perhaps something strange is happening with GCC? I've tried simple hello world C and Fortran programs, and they work normally.
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Sunday, January 19, 2014 11:36 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources
<br>
<p>The OFED warning about registration is something OMPI added at one point when we isolated the cause of jobs occasionally hanging, so you won't see that warning from other MPIs or earlier versions of OMPI (I forget exactly when we added it).
<br>
<p>The problem you describe doesn't sound like an OMPI issue - it sounds like you've got a memory corruption problem in the code. Have you tried running the examples in our example directory to confirm that the installation is good?
<br>
<p>Also, check to ensure that your LD_LIBRARY_PATH is correctly set to pickup the OMPI libs you installed - most Linux distros come with an older version, and that can cause problems if you inadvertently pick them up.
<br>
<p><p>On Jan 19, 2014, at 5:51 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&lt;mailto:fischega_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hello,
<br>
<p>I have a simple, 1-process test case that gets stuck on the mpi_finalize call. The test case is a dead-simple calculation of pi - 50 lines of Fortran. The process gradually consumes more and more memory until the system becomes unresponsive and needs to be rebooted, unless the job is killed first.
<br>
<p>In the output, attached, I see the warning message about OpenFabrics being configured to only allow registering part of physical memory. I've tried to chase this down with my administrator to no avail yet. (I am aware of the relevant FAQ entry.)  A different installation of MPI on the same system, made with a different compiler, does not produce the OpenFabrics memory registration warning - which seems strange because I thought it was a system configuration issue independent of MPI. Also curious in the output is that LSF seems to think there are 7 processes and 11 threads associated with this job.
<br>
<p>The particulars of my configuration are attached and detailed below. Does anyone see anything potentially problematic?
<br>
<p>Thanks,
<br>
Greg
<br>
<p>OpenMPI Version: 1.6.5
<br>
Compiler: GCC 4.6.1
<br>
OS: SuSE Linux Enterprise Server 10, Patchlevel 2
<br>
<p>uname -a : Linux lxlogin2 2.6.16.60-0.21-smp #1 SMP Tue May 6 12:41:02 UTC 2008 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>LD_LIBRARY_PATH=/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/lib:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/gcc-4.6.1/lib64:/tools/lsf/7.0.6.EC/7.0/linux2.6-glibc2.3-x86_64/lib
<br>
<p>PATH= /tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/python-2.7.6/bin:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/openmpi-1.6.5/bin:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/gcc-4.6.1/bin:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/git-1.7.0.4/bin:/tools/casl_sles10/vera_clean/gcc-4.6.1/toolset/cmake-2.8.11.2/bin:/tools/lsf/7.0.6.EC/7.0/linux2.6-glibc2.3-x86_64/etc:/tools/lsf/7.0.6.EC/7.0/linux2.6-glibc2.3-x86_64/bin:/usr/bin:.:/bin:/usr/scripts
<br>
<p>Execution command: (executed via LSF - effectively &quot;mpirun -np 1 test_program&quot;)
<br>
&lt;output.txt&gt;&lt;config.log.bz2&gt;&lt;ompi_info.bz2&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23420/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23421.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Previous message:</strong> <a href="23419.php">George Bosilca: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>In reply to:</strong> <a href="23416.php">Ralph Castain: "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
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
