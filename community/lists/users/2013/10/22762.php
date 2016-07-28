<?
$subject_val = "[OMPI users] I still have a Fortran module error in openmpi-1.9a1r29341";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 01:51:41 2013" -->
<!-- isoreceived="20131004055141" -->
<!-- sent="Fri, 4 Oct 2013 07:45:07 +0200 (CEST)" -->
<!-- isosent="20131004054507" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] I still have a Fortran module error in openmpi-1.9a1r29341" -->
<!-- id="201310040545.r945j74a029538_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] I still have a Fortran module error in openmpi-1.9a1r29341<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 01:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341"</a>
<li><strong>Previous message:</strong> <a href="22761.php">Jeff Hammond: "Re: [OMPI users] users Digest, Vol 2696, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341"</a>
<li><strong>Reply:</strong> <a href="22763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build openmpi-1.9a1r29341 on my platforms (Solaris 10
<br>
Sparc, Solaris 10 x86_64, and Linux x86_64) with Sun C 5.12 and
<br>
get the following error on all platforms.
<br>
<p><p>tyr openmpi-1.9a1r29341-SunOS.sparc.64_cc 112 tail -20 log.make.SunOS.sparc.64_cc
<br>
&nbsp;&nbsp;CCLD     libmpi_fortran_base.la
<br>
&nbsp;&nbsp;PPFC     mpi-f08-types.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces-callbacks.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces.lo
<br>
<p>module mpi_f08_interfaces
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                  
<br>
&quot;../../../../../openmpi-1.9a1r29341/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
<br>
&nbsp;&nbsp;Line = 19, Column = 8: ERROR: The compiler has detected errors in module
<br>
&nbsp;&nbsp;&quot;MPI_F08_INTERFACES&quot;.  No module information file will be created for this module.
<br>
<p>&nbsp;&nbsp;&nbsp;use :: mpi_f08_types, only : MPI_Datatype, MPI_Comm, MPI_Aint, MPI_ADDRESS_KIND
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                          
<br>
&quot;../../../../../openmpi-1.9a1r29341/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
<br>
&nbsp;&nbsp;Line = 4456, Column = 57: ERROR: &quot;MPI_AINT&quot; is not in module &quot;MPI_F08_TYPES&quot;.
<br>
<p>f90comp: 4659 SOURCE LINES
<br>
f90comp: 2 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
make[2]: *** [mpi-f08-interfaces.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29341-SunOS.sparc.64_cc/ompi/mpi/fortran/base'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
&nbsp;`/export2/src/openmpi-1.9/openmpi-1.9a1r29341-SunOS.sparc.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><p>tyr openmpi-1.9a1r29341-Linux.x86_64.64_cc 115 tail -20 log.make.Linux.x86_64.64_cc 
<br>
&nbsp;&nbsp;CCLD     libmpi_fortran_base.la
<br>
&nbsp;&nbsp;PPFC     mpi-f08-types.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces-callbacks.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces.lo
<br>
<p>module mpi_f08_interfaces
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                  
<br>
&quot;../../../../../openmpi-1.9a1r29341/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
<br>
&nbsp;&nbsp;Line = 19, Column = 8: ERROR: The compiler has detected errors in module 
<br>
&nbsp;&nbsp;&quot;MPI_F08_INTERFACES&quot;.  No module information file will be created for this module.
<br>
<p>&nbsp;&nbsp;&nbsp;use :: mpi_f08_types, only : MPI_Datatype, MPI_Comm, MPI_Aint, MPI_ADDRESS_KIND
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                          
<br>
&quot;../../../../../openmpi-1.9a1r29341/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
<br>
&nbsp;&nbsp;Line = 4456, Column = 57: ERROR: &quot;MPI_AINT&quot; is not in module &quot;MPI_F08_TYPES&quot;.
<br>
<p>f90comp: 4659 SOURCE LINES
<br>
f90comp: 2 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
make[2]: *** [mpi-f08-interfaces.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29341-Linux.x86_64.64_cc/ompi/mpi/fortran/base'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
&nbsp;`/export2/src/openmpi-1.9/openmpi-1.9a1r29341-Linux.x86_64.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>I would be grateful, if somebody could fix it. Thank you very much for
<br>
any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341"</a>
<li><strong>Previous message:</strong> <a href="22761.php">Jeff Hammond: "Re: [OMPI users] users Digest, Vol 2696, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341"</a>
<li><strong>Reply:</strong> <a href="22763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341"</a>
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
