<?
$subject_val = "[OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 11:44:07 2010" -->
<!-- isoreceived="20100503154407" -->
<!-- sent="Mon, 03 May 2010 17:44:03 +0200" -->
<!-- isosent="20100503154403" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod" -->
<!-- id="4BDEEF43.2030903_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 11:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12870.php">Mohamad Chaarawi: "Re: [OMPI users] Can compute, but can not output files"</a>
<li><strong>Previous message:</strong> <a href="12868.php">Jeff Squyres: "Re: [OMPI users] Can compute, but can not output files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12872.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod"</a>
<li><strong>Reply:</strong> <a href="12872.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI / Sun/Oracle MPI folks,
<br>
<p>we believe that the OpenMPI and SunMPI (Cluster Tools)  has an error in 
<br>
the Fortran-90 (f90) bindings of the MPI_Comm_set_errhandler routine.
<br>
<p>Tested MPI versions: OpenMPI/1.3.3 and Cluster Tools 8.2.1
<br>
<p>Consider the attached example. This file uses the &quot;USE MPI&quot; to bind the 
<br>
MPI routines f90-style. The f77-style &quot;include 'mpif.h'&quot; is commented out.
<br>
<p>If using Intel MPI the attached example is running error-free (with both 
<br>
bindings).
<br>
<p>If trying to compiler with OpenMPI and using f90 bindings, any compilers 
<br>
tested (Intel/11.1, Sun Studio/12.1, gcc/4.1) says the code cannot be 
<br>
build because of trying to use a constant (MPI_COMM_WORLD) as input.
<br>
<p>For example, the output of the Intel compiler:
<br>
-----------------------------------------------------------------------------
<br>
MPI_Comm_set_errhandler.f90(12): error #6638: An actual argument is an 
<br>
expression or constant; this is not valid since the associated dummy 
<br>
argument has the explicit INTENT(OUT) or INTENT(INOUT) attribute.   [0]
<br>
call MPI_Comm_set_errhandler (MPI_COMM_WORLD, errhandler, ierr)      ! 
<br>
MPI_COMM_WORLD in MPI_Comm_set_errhandler is the problem...
<br>
------------------------------^
<br>
compilation aborted for MPI_Comm_set_errhandler.f90 (code 1)
<br>
-----------------------------------------------------------------------------
<br>
With the f77 bindings, the attached program compiles and runs fine.
<br>
<p>The older (deprecated) routine MPI_Errhandler_set which is defined to 
<br>
have the same functionality works fine with both bindings and all MPI's.
<br>
<p>So, we believe the OpenMPI implementation of MPI standard erroneously 
<br>
sets the INTENT(OUT) or INTENT(INOUT) attribute for the communicator 
<br>
attribute. The definition of an error handle for MPI_COMM_WORLD should 
<br>
be possible which it is currently not.
<br>
<p>Best wishes,
<br>
Paul Kapinos
<br>
<p><p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12869/MPI_Comm_set_errhandler.f90">MPI_Comm_set_errhandler.f90</a>
</ul>
<!-- attachment="MPI_Comm_set_errhandler.f90" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12869/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12870.php">Mohamad Chaarawi: "Re: [OMPI users] Can compute, but can not output files"</a>
<li><strong>Previous message:</strong> <a href="12868.php">Jeff Squyres: "Re: [OMPI users] Can compute, but can not output files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12872.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod"</a>
<li><strong>Reply:</strong> <a href="12872.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod"</a>
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
