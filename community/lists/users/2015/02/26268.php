<?
$subject_val = "[OMPI users] configuring a code with MPI/OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 12:14:35 2015" -->
<!-- isoreceived="20150203171435" -->
<!-- sent="Tue, 3 Feb 2015 20:13:47 +0300" -->
<!-- isosent="20150203171347" -->
<!-- name="Elio Physics" -->
<!-- email="elio-physics_at_[hidden]" -->
<!-- subject="[OMPI users] configuring a code with MPI/OPENMPI" -->
<!-- id="BLU179-W29AB7EB01694A23FAF1508EA3D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] configuring a code with MPI/OPENMPI<br>
<strong>From:</strong> Elio Physics (<em>elio-physics_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 12:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26269.php">Burns, Andrew J CTR (US): "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26267.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26269.php">Burns, Andrew J CTR (US): "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26269.php">Burns, Andrew J CTR (US): "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
II am trying to configure a code  with mpi (for parallel processing)  to do some calculations so basically I type:
<br>
./configure 
<br>
and I get:
<br>
configure: error: Fortran compiler does not provide iso_c_binding module. Use a more recent version or a different compiler
<br>
<p>which means that my GCC 4.1 compiler is too old to build the code (something i do not have control over..It is a cluster of the Uni where I work). so I tried another compiler ifort:
<br>
./configure  --enable-mpi=yes  FC=ifort but now I get another error:
<br>
&nbsp;============================================================================== === Multicore architecture support                                         === ==============================================================================
<br>
checking whether to enable OpenMP support... nochecking whether to build MPI code... yeschecking whether the C compiler supports MPI... nochecking whether the C++ compiler supports MPI... nochecking whether the Fortran Compiler supports MPI... nochecking whether MPI is usable... noconfigure: error: MPI support is broken - please fix your config parameters and/or MPI installation
<br>
Agaiin, I tried ti give a path for the mpi compiler:
<br>
&nbsp;./configure  --enable-mpi  --with-mpi-prefix=/usr FC=ifort
<br>
WHICH APPARENTLY SOLVED THE PREVIOUS ERROR: ============================================================================== === Multicore architecture startup                                         === ==============================================================================
<br>
configure: Initializing MPI supportconfigure: looking for MPI in /usrchecking for a MPI C compiler... /usr/bin/mpiccchecking for a MPI C++ compiler... /usr/bin/mpicxxchecking for a MPI Fortran compiler... /usr/bin/mpif90configure: creating wrapper for MPI Fortran compilerconfigure: GPU support disabled from command-line But stranegly enough got me back to the furst error although I am using ifort!!
<br>
checking whether the Fortran compiler provides the iso_c_binding module... configure: error: Fortran compiler does not provide iso_c_binding module. Use a more recent version or a different compiler
<br>
so what is going on?? please can anyone help me on this..Thank youu
<br>
ElioUniversity of RondoniaBrazil
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26268/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26269.php">Burns, Andrew J CTR (US): "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26267.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26269.php">Burns, Andrew J CTR (US): "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26269.php">Burns, Andrew J CTR (US): "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
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
