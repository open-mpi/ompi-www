<?
$subject_val = "Re: [OMPI users] openmpi linking problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 13:22:50 2014" -->
<!-- isoreceived="20140609172250" -->
<!-- sent="Mon, 09 Jun 2014 13:22:46 -0400" -->
<!-- isosent="20140609172246" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi linking problem" -->
<!-- id="5395ED66.6050105_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHaow__UzUC+=EOJfnG5cPGcjmn+QtCLt3fatNTzGDyZYJh_sw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi linking problem<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 13:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24606.php">Marco Atzeri: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Previous message:</strong> <a href="24604.php">Sergii Veremieiev: "[OMPI users] openmpi linking problem"</a>
<li><strong>In reply to:</strong> <a href="24604.php">Sergii Veremieiev: "[OMPI users] openmpi linking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24606.php">Marco Atzeri: "Re: [OMPI users] openmpi linking problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/9/2014 1:14 PM, Sergii Veremieiev wrote:
<br>
<span class="quotelev1">&gt; Dear Sir/Madam,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to link a C/FORTRAN code on Cygwin with Open MPI 1.7.5 and 
</span><br>
<span class="quotelev1">&gt; GCC 4.8.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx ./lib/Multigrid.o ./lib/GridFE.o ./lib/Data.o ./lib/GridFD.o 
</span><br>
<span class="quotelev1">&gt; ./lib/Parameters.o ./lib/MtInt.o ./lib/MtPol.o ./lib/MtDob.o -o 
</span><br>
<span class="quotelev1">&gt; Test_cygwin_openmpi_gcc  -L./external/MUMPS/lib 
</span><br>
<span class="quotelev1">&gt; -ldmumps_cygwin_openmpi_gcc -lmumps_common_cygwin_openmpi_gcc 
</span><br>
<span class="quotelev1">&gt; -lpord_cygwin_openmpi_gcc -L./external/ParMETIS 
</span><br>
<span class="quotelev1">&gt; -lparmetis_cygwin_openmpi_gcc -lmetis_cygwin_openmpi_gcc 
</span><br>
<span class="quotelev1">&gt; -L./external/SCALAPACK -lscalapack_cygwin_openmpi_gcc 
</span><br>
<span class="quotelev1">&gt; -L./external/BLACS/LIB -lblacs-0_cygwin_openmpi_gcc 
</span><br>
<span class="quotelev1">&gt; -lblacsF77init-0_cygwin_openmpi_gcc -lblacsCinit-0_cygwin_openmpi_gcc 
</span><br>
<span class="quotelev1">&gt; -lblacs-0_cygwin_openmpi_gcc -L./external/BLAS 
</span><br>
<span class="quotelev1">&gt; -lblas_cygwin_openmpi_gcc -lmpi -lgfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following error messages are returned:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o): 
</span><br>
<span class="quotelev1">&gt; In function `dmumps_127_':
</span><br>
<span class="quotelev1">&gt; /cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:6068: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `mpi_send_'
</span><br>
<span class="quotelev1">&gt;
</span><br>
You appear to need the MPI Fortran libraries (built with your version of 
<br>
gfortran) corresponding to mpif.h or use mpi...
<br>
If you can use mpifort to link, you would use -lstdc++ in place of -lmpi 
<br>
-lgfortran .
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24606.php">Marco Atzeri: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Previous message:</strong> <a href="24604.php">Sergii Veremieiev: "[OMPI users] openmpi linking problem"</a>
<li><strong>In reply to:</strong> <a href="24604.php">Sergii Veremieiev: "[OMPI users] openmpi linking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24606.php">Marco Atzeri: "Re: [OMPI users] openmpi linking problem"</a>
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
