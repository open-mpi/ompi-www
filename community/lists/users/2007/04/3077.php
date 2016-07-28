<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 16 18:49:07 2007" -->
<!-- isoreceived="20070416224907" -->
<!-- sent="Mon, 16 Apr 2007 16:48:51 -0600" -->
<!-- isosent="20070416224851" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with system call -- openib error on SNL tbird" -->
<!-- id="F1A65DC9F3C9404DA4B6808E58A56CD004BEFFC9_at_ES22SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-16 18:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3078.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<li><strong>Previous message:</strong> <a href="3076.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3078.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<li><strong>Reply:</strong> <a href="3078.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am attempting to port Sandia's DAKOTA code from MVAPICH to the default
<br>
OpenMPI/Intel environment on Sandia's thunderbird cluster.  I can
<br>
successfully build DAKOTA in the default tbird software environment, but
<br>
I'm having runtime problems when DAKOTA attempts to make a system call.
<br>
Typical output looks like:
<br>
<p>[0,1,1][btl_openib_component.c:897:mca_btl_openib_component_progress]
<br>
from an64 to: an64 error polling HP CQ with status LOCAL LENGTH ERROR
<br>
status number 1 for wr_id 5714048 opcode 0
<br>
<p>I'm attaching a tarball containing output from `ompi_info --all` as well
<br>
as two simple sample programs with output to demonstrate the problem
<br>
behavior.  I built them in the default tbird MPI environment
<br>
(openmpi-1.1.2-ofed-intel-9.1) with 
<br>
<p>&nbsp;&nbsp;mpicc mpi_syscall.c -i_dynamic -o mpi_syscall
<br>
&nbsp;&nbsp;mpicc mpi_nosyscall.c -i_dynamic -o mpi_nosyscall
<br>
<p>where `which mpicc` =
<br>
/apps/x86_64/mpi/openmpi/intel-9.1/openmpi-1.1.2-ofed/bin/mpicc The
<br>
latter has no system call and runs fine on two processors, whereas the
<br>
former gives the openib error (not in the attached output, though dumped
<br>
to the screen).  The problem exists regardless of whether -i_dynamic is
<br>
included.  I am executing from within an interactive 2 processor job
<br>
using 
<br>
<p>&nbsp;&nbsp;/apps/x86_64/mpi/openmpi/intel-9.1/openmpi-1.1.2-ofed/bin/mpiexec -&gt;
<br>
orterun
<br>
<p>I know some OpenMPI developers have access to thunderbird for testing,
<br>
but if you require additional information on the build or runtime
<br>
environment, please advise and I will attempt to send it along. 
<br>
<p>Note:  Both programs run fine with MVAPICH on tbird, and with OpenMPI or
<br>
MPICH on my Linux x86_64 SMP workstation.
<br>
<p>Thanks,
<br>
Brian
<br>
----------------------------------------
<br>
Brian M. Adams, PhD (briadam_at_[hidden]) 
<br>
Optimization and Uncertainty Estimation 
<br>
Sandia National Laboratories 
<br>
P.O. Box 5800, Mail Stop 1318 
<br>
Albuquerque, NM 87185-1318
<br>
Voice: 505-284-8845, FAX: 505-284-2518
<br>
<p><p><p><p><p>
<br><p>
<p><hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3077/ompi_tbird_system.tgz">ompi_tbird_system.tgz</a>
</ul>
<!-- attachment="ompi_tbird_system.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3078.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<li><strong>Previous message:</strong> <a href="3076.php">Michael Gauckler: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3078.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<li><strong>Reply:</strong> <a href="3078.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
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
