<?
$subject_val = "Re: [OMPI users] WRF, OpenMPI and PGI 7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 11:00:54 2009" -->
<!-- isoreceived="20090219160054" -->
<!-- sent="Thu, 19 Feb 2009 10:00:45 -0600" -->
<!-- isosent="20090219160045" -->
<!-- name="Elvedin Trnjanin" -->
<!-- email="trnja001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF, OpenMPI and PGI 7.2" -->
<!-- id="499D822D.3020107_at_umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499D7DB2.6070805_at_tamu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF, OpenMPI and PGI 7.2<br>
<strong>From:</strong> Elvedin Trnjanin (<em>trnja001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 11:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8107.php">Gerry Creager: "[OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>In reply to:</strong> <a href="8107.php">Gerry Creager: "[OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Reply:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WRF almost requires that you use gcc for the C/C++ part and the PGI 
<br>
Fortran compilers, if you choose that option. I'd suggest compiling 
<br>
OpenMPI in the same way as that has resolved our various issues. Have 
<br>
you tried that with the same result?
<br>
<p>Gerry Creager wrote:
<br>
<span class="quotelev1">&gt; Howdy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to this list.  I've done a little review but likely missed 
</span><br>
<span class="quotelev1">&gt; something specific to what I'm asking.  I'll keep looking but need to 
</span><br>
<span class="quotelev1">&gt; resolve this soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running a Rocks cluster (centos 5), with PGI 7.2-3 compilers, 
</span><br>
<span class="quotelev1">&gt; Myricom MX2 hardware and drivers, and OpenMPI1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed the Myricom roll which has OpenMPI compiled with gcc.  I 
</span><br>
<span class="quotelev1">&gt; recently compiled the openmpi code w/ PGI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've the MPICH_F90 pointing to the right place, and we're looking for 
</span><br>
<span class="quotelev1">&gt; the right includes and libs by means of LD_LIBRARY_PATH, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to run, I got the following error:
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/RSL_LITE'
</span><br>
<span class="quotelev1">&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 7.2-3: compilation completed with warnings
</span><br>
<span class="quotelev1">&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c buf_for_proc.c
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting identifier 
</span><br>
<span class="quotelev1">&gt; .Z0000 before '(' (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev1">&gt; PGC-S-0082-Function returning array not allowed 
</span><br>
<span class="quotelev1">&gt; (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev1">&gt; PGC-S-0043-Redefinition of symbol, MPI_Comm 
</span><br>
<span class="quotelev1">&gt; (/share/apps/openmpi-1.3-pgi/include/mpi.h: 903)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 7.2-3: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; make[3]: [buf_for_proc.o] Error 2 (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I had modified the makefile to use PGI in place of gcc, and 
</span><br>
<span class="quotelev1">&gt; thus, the PGI-compiled openMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Gerry
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8107.php">Gerry Creager: "[OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>In reply to:</strong> <a href="8107.php">Gerry Creager: "[OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Reply:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
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
