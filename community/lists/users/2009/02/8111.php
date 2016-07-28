<?
$subject_val = "Re: [OMPI users] WRF, OpenMPI and PGI 7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 11:28:41 2009" -->
<!-- isoreceived="20090219162841" -->
<!-- sent="Thu, 19 Feb 2009 10:28:38 -0600" -->
<!-- isosent="20090219162838" -->
<!-- name="Elvedin Trnjanin" -->
<!-- email="trnja001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF, OpenMPI and PGI 7.2" -->
<!-- id="499D88B6.7080304_at_umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499D850A.3080801_at_tamu.edu" -->
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
<strong>Date:</strong> 2009-02-19 11:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8110.php">Jeff Squyres: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>In reply to:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8120.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Reply:</strong> <a href="8120.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That would be one way it dies, but we kept getting errors during 
<br>
compilation without the compilation process exiting which is arguably 
<br>
worse than the behavior you saw.
<br>
<p>OpenMPI's mpicc doesn't support the -cc flag so it just passes it to 
<br>
pgcc, which doesn't support it either. The easy way to fix it is 
<br>
recompiling OpenMPI with gcc and pgf
<br>
<p>./configure CC=gcc CXX=g++ F77=pgf... FC=pgf... ...
<br>
<p>After that, edit the WRF configure.wrf and remove every instance of 
<br>
-cc=${SOMEVAR} I think there should be two, but I don't have access to 
<br>
mine at the moment to tell you the exact names.
<br>
<p>Gerry Creager wrote:
<br>
<span class="quotelev1">&gt; Elvedin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, I thought about that after finding a reference to this in the 
</span><br>
<span class="quotelev1">&gt; archives, so I redirected the path to MPI toward the gnu-compiled 
</span><br>
<span class="quotelev1">&gt; version.  It died in THIS manner:
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/RSL_LITE'
</span><br>
<span class="quotelev1">&gt; mpicc -cc=gcc -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev1">&gt; pgcc-Error-Unknown switch: -cc=gcc
</span><br>
<span class="quotelev1">&gt; make[3]: [c_code.o] Error 1 (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Methinks the wrf configuration script and make file will need some 
</span><br>
<span class="quotelev1">&gt; tweeks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting thing: I have another system (alas, with mpich) where it 
</span><br>
<span class="quotelev1">&gt; compiles just fine.  I'm trying to sort this out, as on 2 systems, 
</span><br>
<span class="quotelev1">&gt; with openMPI, it does odd dances before dying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still trying things.  I've gotta get this up both for MY research 
</span><br>
<span class="quotelev1">&gt; and to support other users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Gerry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elvedin Trnjanin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; WRF almost requires that you use gcc for the C/C++ part and the PGI 
</span><br>
<span class="quotelev2">&gt;&gt; Fortran compilers, if you choose that option. I'd suggest compiling 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI in the same way as that has resolved our various issues. Have 
</span><br>
<span class="quotelev2">&gt;&gt; you tried that with the same result?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gerry Creager wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howdy,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm new to this list.  I've done a little review but likely missed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something specific to what I'm asking.  I'll keep looking but need 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to resolve this soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running a Rocks cluster (centos 5), with PGI 7.2-3 compilers, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Myricom MX2 hardware and drivers, and OpenMPI1.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed the Myricom roll which has OpenMPI compiled with gcc.  I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recently compiled the openmpi code w/ PGI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've the MPICH_F90 pointing to the right place, and we're looking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the right includes and libs by means of LD_LIBRARY_PATH, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I tried to run, I got the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/RSL_LITE'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC/x86-64 Linux 7.2-3: compilation completed with warnings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c buf_for_proc.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting identifier 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .Z0000 before '(' (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0082-Function returning array not allowed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0043-Redefinition of symbol, MPI_Comm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/share/apps/openmpi-1.3-pgi/include/mpi.h: 903)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC/x86-64 Linux 7.2-3: compilation completed with severe errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: [buf_for_proc.o] Error 2 (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that I had modified the makefile to use PGI in place of gcc, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and thus, the PGI-compiled openMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Gerry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8110.php">Jeff Squyres: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>In reply to:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8120.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Reply:</strong> <a href="8120.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
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
