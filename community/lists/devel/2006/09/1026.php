<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 15:07:39 2006" -->
<!-- isoreceived="20060905190739" -->
<!-- sent="Tue, 5 Sep 2006 12:07:33 -0700" -->
<!-- isosent="20060905190733" -->
<!-- name="Ben Byer" -->
<!-- email="bbyer_at_[hidden]" -->
<!-- subject="[OMPI devel] include file locations" -->
<!-- id="9A9A1E24-A29C-427E-BA0F-DD74048C6597_at_apple.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ben Byer (<em>bbyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 15:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
<li><strong>Previous message:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
<li><strong>Reply:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all!  I'm happy to report that I was able to build OpenMPI 1.1 4- 
<br>
way fat (ppc, i386, ppc64, x86_64) using buildpackage.sh.
<br>
<p>When I installed the resulting package, it installed the following  
<br>
include files:
<br>
<p>/usr/include/constants.h
<br>
/usr/include/mpi.h
<br>
/usr/include/mpif-common.h
<br>
/usr/include/mpif-config.h
<br>
/usr/include/mpif.h
<br>
/usr/include/totalview.h
<br>
/usr/include/types.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/comm.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/comm_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/constants.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/datatype.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/datatype_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/errhandler.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/errhandler_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/exception.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/file.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/file_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/functions.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/functions_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/group.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/group_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/info.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/info_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/intercomm.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/intercomm_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/intracomm.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/intracomm_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/mpicxx.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/op.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/op_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/request.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/request_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/status.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/status_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/topology.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/topology_inln.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/win.h
<br>
/usr/include/openmpi/ompi/mpi/cxx/win_inln.h
<br>
<p>Is there a reason that those 7 include files installed in /usr/ 
<br>
include shouldn't be installed in /usr/include/openmpi instead?
<br>
<p>Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
<li><strong>Previous message:</strong> <a href="1025.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
<li><strong>Reply:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
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
