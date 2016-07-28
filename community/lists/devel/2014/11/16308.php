<?
$subject_val = "Re: [OMPI devel] Error in version 1.8.3?!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 06:00:55 2014" -->
<!-- isoreceived="20141113110055" -->
<!-- sent="Thu, 13 Nov 2014 20:01:10 +0900" -->
<!-- isosent="20141113110110" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in version 1.8.3?!" -->
<!-- id="54648F76.5020802_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4497565.CSbBQmRQZm_at_rzm-haefner" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error in version 1.8.3?!<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 06:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16309.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16307.php">SCC: "[OMPI devel] Error in version 1.8.3?!"</a>
<li><strong>In reply to:</strong> <a href="16307.php">SCC: "[OMPI devel] Error in version 1.8.3?!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Harmut,
<br>
<p>this is a known bug.
<br>
<p>in the mean time, can you give a try to 1.8.4rc1 ?
<br>
<a href="http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.4rc1.tar.gz">http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.4rc1.tar.gz</a>
<br>
<p>/* if i remember correctly, this is fixed already in the rc1 */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/11/13 19:48, Hartmut H&#228;fner (SCC) wrote:
<br>
<span class="quotelev1">&gt; Dear developers,
</span><br>
<span class="quotelev1">&gt; we have compiled OpenMPI 1.8.3 with Intel Compiler in version 13.1.5 (and 
</span><br>
<span class="quotelev1">&gt; 15.0.0). The configure command is:
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc FC=ifort F90=ifort CFLAGS=&quot;-O2 -fno-strict-
</span><br>
<span class="quotelev1">&gt; aliasing&quot; CXXFLAGS=&quot;-O2&quot; \
</span><br>
<span class="quotelev1">&gt;     FCFLAGS=&quot;-O2&quot; --enable-shared --enable-static --enable-mpi-
</span><br>
<span class="quotelev1">&gt; fortran=usempif08 --with-verbs --without-psm --with-slurm --
</span><br>
<span class="quotelev1">&gt; prefix=/software/all/openmpi
</span><br>
<span class="quotelev1">&gt; /1.8.3_intel_13.1
</span><br>
<span class="quotelev1">&gt; We also tried the configure command without the option --enable-mpi-fortran
</span><br>
<span class="quotelev1">&gt; and additionally with option  -D__INTEL_COMPILER in CFLAGS, CXXFLAGS and 
</span><br>
<span class="quotelev1">&gt; FCFLAGS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to use the subroutine MPI_Sizeof within a Fortran program, you 
</span><br>
<span class="quotelev1">&gt; always get a undefined reference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We also have tried a test program:
</span><br>
<span class="quotelev1">&gt; program testbcast
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; logical :: a
</span><br>
<span class="quotelev1">&gt; integer :: ierror, rank, size
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; a = .true.
</span><br>
<span class="quotelev1">&gt; call mpi_init(ierror)
</span><br>
<span class="quotelev1">&gt; call mpi_sizeof(a, size, ierror)
</span><br>
<span class="quotelev1">&gt; print *,size
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierror)
</span><br>
<span class="quotelev1">&gt; end program testbcast
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using 
</span><br>
<span class="quotelev1">&gt; mpif90 -o mpi_sizetest mpi_sizetest.f90
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<span class="quotelev1">&gt; /scratch/ifortahgFcM.o: In function `MAIN__':
</span><br>
<span class="quotelev1">&gt; mpi_sizetest.f90:(.text+0x4c): undefined reference to `mpi_sizeof0dl_'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Environment variable OMPI_FCFLAGS is unset)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we use the GNU compiler instead of the Intel compiler, it works!( but then 
</span><br>
<span class="quotelev1">&gt; we run into trouble with the module &quot;mpi&quot; using the Intel compiler for our 
</span><br>
<span class="quotelev1">&gt; application.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We did not find any hints on this erroneous behaviour!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerly yours
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Hartmut H&#228;fner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------ 
</span><br>
<span class="quotelev1">&gt; Hartmut H&#228;fner
</span><br>
<span class="quotelev1">&gt; Karlsruhe Institute of Technology (KIT)
</span><br>
<span class="quotelev1">&gt; University Karlsruhe (TH)
</span><br>
<span class="quotelev1">&gt; Steinbuch Centre for Computing (SCC)
</span><br>
<span class="quotelev1">&gt; Scientific Computing and Simulation (SCS)
</span><br>
<span class="quotelev1">&gt; Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
</span><br>
<span class="quotelev1">&gt; D-76128 Karlsruhe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fon +49(0)721 608 44869
</span><br>
<span class="quotelev1">&gt; Fax +49(0)721 32550
</span><br>
<span class="quotelev1">&gt; Hartmut.Haefner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scc.kit.edu/personen/hartmut.haefner">http://www.scc.kit.edu/personen/hartmut.haefner</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16307.php">http://www.open-mpi.org/community/lists/devel/2014/11/16307.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16309.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16307.php">SCC: "[OMPI devel] Error in version 1.8.3?!"</a>
<li><strong>In reply to:</strong> <a href="16307.php">SCC: "[OMPI devel] Error in version 1.8.3?!"</a>
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
