<?
$subject_val = "[OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 21:55:47 2012" -->
<!-- isoreceived="20121002015547" -->
<!-- sent="Tue, 02 Oct 2012 14:55:42 +1300" -->
<!-- isosent="20121002015542" -->
<!-- name="Gib Bogle" -->
<!-- email="g.bogle_at_[hidden]" -->
<!-- subject="[OMPI users] Linking failure on Windows" -->
<!-- id="506A499E.7090000_at_auckland.ac.nz" -->
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
<strong>Subject:</strong> [OMPI users] Linking failure on Windows<br>
<strong>From:</strong> Gib Bogle (<em>g.bogle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 21:55:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20364.php">Jeff Squyres: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am building the Sundials examples, with MS Visual Studio 2005 version 8 (i.e. 
<br>
32-bit) on Windows 7 64-bit.  The OpenMPI version is OpenMPI_1.6.2-win32.
<br>
All the parallel examples fail with the same linker errors.  I have added the 
<br>
preprocessor definitions OMPI_IMPORTS, OPAL_IMPORTS and ORTE_IMPORTS.  The 
<br>
libraries that are being linked are: libmpi.lib, libmpi_cxx.lib, 
<br>
libopen-pal.lib, libopen-rte.lib.
<br>
<p>Here are the errors:
<br>
<p>1&gt;Linking...
<br>
1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
<br>
external symbol _ompi_mpi_op_sum referenced in function _VAllReduce_Parallel
<br>
1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
<br>
external symbol _ompi_mpi_op_max referenced in function _VAllReduce_Parallel
<br>
1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
<br>
external symbol _ompi_mpi_double referenced in function _VAllReduce_Parallel
<br>
1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
<br>
external symbol _ompi_mpi_op_min referenced in function _VAllReduce_Parallel
<br>
1&gt;sundials_nvecparallel.lib(nvector_parallel.obj) : error LNK2019: unresolved 
<br>
external symbol _ompi_mpi_long referenced in function _N_VNewEmpty_Parallel
<br>
1&gt;E:\Sundials-Win32\examples\cvode\parallel\Release\cvDiurnal_kry_bbd_p.exe : 
<br>
fatal error LNK1120: 5 unresolved externals
<br>
<p>What am I missing?
<br>
<p>Thanks
<br>
Gib
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20364.php">Jeff Squyres: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20366.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
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
