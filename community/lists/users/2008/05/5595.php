<?
$subject_val = "Re: [OMPI users] Problems with gcc 4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 08:25:28 2008" -->
<!-- isoreceived="20080505122528" -->
<!-- sent="Mon, 05 May 2008 14:25:21 +0200" -->
<!-- isosent="20080505122521" -->
<!-- name="Ilmar Wilbers" -->
<!-- email="ilmarw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gcc 4.3" -->
<!-- id="481EFCB1.6090806_at_simula.no" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="481EFA71.5020304_at_simula.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with gcc 4.3<br>
<strong>From:</strong> Ilmar Wilbers (<em>ilmarw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 08:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5596.php">Jeff Squyres: "Re: [OMPI users] IRIX Assembler messages unrecognized opcode &gt; `leaf(opal_atomic_mb)"</a>
<li><strong>Previous message:</strong> <a href="5594.php">Ilmar Wilbers: "[OMPI users] Problems with gcc 4.3"</a>
<li><strong>In reply to:</strong> <a href="5594.php">Ilmar Wilbers: "[OMPI users] Problems with gcc 4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems as though this problem is fixed with version 1.2.6. I did not 
<br>
get the error when using the packages from Debin Sid who use this 
<br>
version instead of 1.2.5.
<br>
<p>ilmar
<br>
<p>Ilmar Wilbers wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email is a follow-up to the following: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/12/4756.php">http://www.open-mpi.org/community/lists/users/2007/12/4756.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I experience the same problems with gcc 4.3 and the Debias packages og 
</span><br>
<span class="quotelev1">&gt; openmpi for Ubuntu Hardy:
</span><br>
<span class="quotelev1">&gt; cc1plus: warnings being treated as errors
</span><br>
<span class="quotelev1">&gt; In file included from 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/mpicxx.h:246,
</span><br>
<span class="quotelev1">&gt; from /usr/lib/openmpi/include/mpi.h:1783,
</span><br>
<span class="quotelev1">&gt; from /usr/lib/petsc/include/petsc.h:138,
</span><br>
<span class="quotelev1">&gt; from /usr/lib/petsc/include/petscis.h:7,
</span><br>
<span class="quotelev1">&gt; from /usr/lib/petsc/include/petscvec.h:9,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/la/PETScVector.h:18,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/la/default_la_types.h:10,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/la/Vector.h:15,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/function/Function.h:16,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/fem/Form.h:14,
</span><br>
<span class="quotelev1">&gt; from dolfin/elements/ProjectionLibrary.h:12,
</span><br>
<span class="quotelev1">&gt; from dolfin/elements/ProjectionLibrary.cpp:5:
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/request_inln.h: In static 
</span><br>
<span class="quotelev1">&gt; member function &#145;static MPI::Grequest MPI::Grequest::Start(int 
</span><br>
<span class="quotelev1">&gt; (*)(void*, MPI::Status&amp;), int (*)(void*), int (*)(void*, bool), void*)&#146;:
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/request_inln.h:347: error: 
</span><br>
<span class="quotelev1">&gt; declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything
</span><br>
<span class="quotelev1">&gt; In file included from 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/mpicxx.h:247,
</span><br>
<span class="quotelev1">&gt; from /usr/lib/openmpi/include/mpi.h:1783,
</span><br>
<span class="quotelev1">&gt; from /usr/lib/petsc/include/petsc.h:138,
</span><br>
<span class="quotelev1">&gt; from /usr/lib/petsc/include/petscis.h:7,
</span><br>
<span class="quotelev1">&gt; from /usr/lib/petsc/include/petscvec.h:9,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/la/PETScVector.h:18,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/la/default_la_types.h:10,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/la/Vector.h:15,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/function/Function.h:16,
</span><br>
<span class="quotelev1">&gt; from ./dolfin/fem/Form.h:14,
</span><br>
<span class="quotelev1">&gt; from dolfin/elements/ProjectionLibrary.h:12,
</span><br>
<span class="quotelev1">&gt; from dolfin/elements/ProjectionLibrary.cpp:5:
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/comm_inln.h: In static 
</span><br>
<span class="quotelev1">&gt; member function &#145;static int MPI::Comm::NULL_COPY_FN(const MPI::Comm&amp;, 
</span><br>
<span class="quotelev1">&gt; int, void*, void*, void*, bool&amp;)&#146;:
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/comm_inln.h:641: error: 
</span><br>
<span class="quotelev1">&gt; the address of &#145;int OMPI_C_MPI_NULL_COPY_FN(ompi_communicator_t*, int, 
</span><br>
<span class="quotelev1">&gt; void*, void*, void*, int*)&#146; will never be NULL
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/comm_inln.h: In static 
</span><br>
<span class="quotelev1">&gt; member function &#145;static int MPI::Comm::NULL_DELETE_FN(MPI::Comm&amp;, int, 
</span><br>
<span class="quotelev1">&gt; void*, void*)&#146;:
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/include/openmpi/ompi/mpi/cxx/comm_inln.h:698: error: 
</span><br>
<span class="quotelev1">&gt; the address of &#145;int OMPI_C_MPI_NULL_DELETE_FN(ompi_communicator_t*, int, 
</span><br>
<span class="quotelev1">&gt; void*, void*)&#146; will never be NULL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similar error come for each time the header files are included. Does 
</span><br>
<span class="quotelev1">&gt; anyone know what causes this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ilmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5596.php">Jeff Squyres: "Re: [OMPI users] IRIX Assembler messages unrecognized opcode &gt; `leaf(opal_atomic_mb)"</a>
<li><strong>Previous message:</strong> <a href="5594.php">Ilmar Wilbers: "[OMPI users] Problems with gcc 4.3"</a>
<li><strong>In reply to:</strong> <a href="5594.php">Ilmar Wilbers: "[OMPI users] Problems with gcc 4.3"</a>
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
