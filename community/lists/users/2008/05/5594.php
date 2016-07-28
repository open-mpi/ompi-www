<?
$subject_val = "[OMPI users] Problems with gcc 4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 08:15:52 2008" -->
<!-- isoreceived="20080505121552" -->
<!-- sent="Mon, 05 May 2008 14:15:45 +0200" -->
<!-- isosent="20080505121545" -->
<!-- name="Ilmar Wilbers" -->
<!-- email="ilmarw_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with gcc 4.3" -->
<!-- id="481EFA71.5020304_at_simula.no" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Problems with gcc 4.3<br>
<strong>From:</strong> Ilmar Wilbers (<em>ilmarw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 08:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5595.php">Ilmar Wilbers: "Re: [OMPI users] Problems with gcc 4.3"</a>
<li><strong>Previous message:</strong> <a href="5593.php">Christian Simon: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5595.php">Ilmar Wilbers: "Re: [OMPI users] Problems with gcc 4.3"</a>
<li><strong>Reply:</strong> <a href="5595.php">Ilmar Wilbers: "Re: [OMPI users] Problems with gcc 4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This email is a follow-up to the following: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/12/4756.php">http://www.open-mpi.org/community/lists/users/2007/12/4756.php</a>
<br>
<p>I experience the same problems with gcc 4.3 and the Debias packages og 
<br>
openmpi for Ubuntu Hardy:
<br>
cc1plus: warnings being treated as errors
<br>
In file included from 
<br>
/usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/mpicxx.h:246,
<br>
from /usr/lib/openmpi/include/mpi.h:1783,
<br>
from /usr/lib/petsc/include/petsc.h:138,
<br>
from /usr/lib/petsc/include/petscis.h:7,
<br>
from /usr/lib/petsc/include/petscvec.h:9,
<br>
from ./dolfin/la/PETScVector.h:18,
<br>
from ./dolfin/la/default_la_types.h:10,
<br>
from ./dolfin/la/Vector.h:15,
<br>
from ./dolfin/function/Function.h:16,
<br>
from ./dolfin/fem/Form.h:14,
<br>
from dolfin/elements/ProjectionLibrary.h:12,
<br>
from dolfin/elements/ProjectionLibrary.cpp:5:
<br>
/usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/request_inln.h: In static 
<br>
member function &#145;static MPI::Grequest MPI::Grequest::Start(int 
<br>
(*)(void*, MPI::Status&amp;), int (*)(void*), int (*)(void*, bool), void*)&#146;:
<br>
/usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/request_inln.h:347: error: 
<br>
declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything
<br>
In file included from 
<br>
/usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/mpicxx.h:247,
<br>
from /usr/lib/openmpi/include/mpi.h:1783,
<br>
from /usr/lib/petsc/include/petsc.h:138,
<br>
from /usr/lib/petsc/include/petscis.h:7,
<br>
from /usr/lib/petsc/include/petscvec.h:9,
<br>
from ./dolfin/la/PETScVector.h:18,
<br>
from ./dolfin/la/default_la_types.h:10,
<br>
from ./dolfin/la/Vector.h:15,
<br>
from ./dolfin/function/Function.h:16,
<br>
from ./dolfin/fem/Form.h:14,
<br>
from dolfin/elements/ProjectionLibrary.h:12,
<br>
from dolfin/elements/ProjectionLibrary.cpp:5:
<br>
/usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/comm_inln.h: In static 
<br>
member function &#145;static int MPI::Comm::NULL_COPY_FN(const MPI::Comm&amp;, 
<br>
int, void*, void*, void*, bool&amp;)&#146;:
<br>
/usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/comm_inln.h:641: error: 
<br>
the address of &#145;int OMPI_C_MPI_NULL_COPY_FN(ompi_communicator_t*, int, 
<br>
void*, void*, void*, int*)&#146; will never be NULL
<br>
/usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/comm_inln.h: In static 
<br>
member function &#145;static int MPI::Comm::NULL_DELETE_FN(MPI::Comm&amp;, int, 
<br>
void*, void*)&#146;:
<br>
/usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/comm_inln.h:698: error: 
<br>
the address of &#145;int OMPI_C_MPI_NULL_DELETE_FN(ompi_communicator_t*, int, 
<br>
void*, void*)&#146; will never be NULL
<br>
<p>Similar error come for each time the header files are included. Does 
<br>
anyone know what causes this?
<br>
<p>ilmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5595.php">Ilmar Wilbers: "Re: [OMPI users] Problems with gcc 4.3"</a>
<li><strong>Previous message:</strong> <a href="5593.php">Christian Simon: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5595.php">Ilmar Wilbers: "Re: [OMPI users] Problems with gcc 4.3"</a>
<li><strong>Reply:</strong> <a href="5595.php">Ilmar Wilbers: "Re: [OMPI users] Problems with gcc 4.3"</a>
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
