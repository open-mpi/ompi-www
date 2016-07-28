<?
$subject_val = "[OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 08:53:31 2014" -->
<!-- isoreceived="20140119135331" -->
<!-- sent="Sun, 19 Jan 2014 08:51:15 -0500" -->
<!-- isosent="20140119135115" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="[OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE13EFBF424F_at_SWEC9985.w-intra.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 08:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23414.php">thomas.forde_at_[hidden]: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Previous message:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23416.php">Ralph Castain: "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23416.php">Ralph Castain: "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
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
<p><p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23413/output.txt">output.txt</a>
</ul>
<!-- attachment="output.txt" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23413/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23413/ompi_info.bz2">ompi_info.bz2</a>
</ul>
<!-- attachment="ompi_info.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23414.php">thomas.forde_at_[hidden]: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Previous message:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23416.php">Ralph Castain: "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23416.php">Ralph Castain: "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
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
