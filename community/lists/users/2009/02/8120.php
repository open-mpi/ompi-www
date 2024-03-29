<?
$subject_val = "Re: [OMPI users] WRF, OpenMPI and PGI 7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 18:22:52 2009" -->
<!-- isoreceived="20090219232252" -->
<!-- sent="Thu, 19 Feb 2009 17:22:46 -0600" -->
<!-- isosent="20090219232246" -->
<!-- name="Gerry Creager" -->
<!-- email="gerry.creager_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF, OpenMPI and PGI 7.2" -->
<!-- id="499DE9C6.6000501_at_tamu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499D88B6.7080304_at_umn.edu" -->
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
<strong>From:</strong> Gerry Creager (<em>gerry.creager_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 18:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8121.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8119.php">Jeff Pummill: "[OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8111.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8115.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Elvedin Trnjanin wrote:
<br>
<span class="quotelev1">&gt; That would be one way it dies, but we kept getting errors during 
</span><br>
<span class="quotelev1">&gt; compilation without the compilation process exiting which is arguably 
</span><br>
<span class="quotelev1">&gt; worse than the behavior you saw.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI's mpicc doesn't support the -cc flag so it just passes it to 
</span><br>
<span class="quotelev1">&gt; pgcc, which doesn't support it either. The easy way to fix it is 
</span><br>
<span class="quotelev1">&gt; recompiling OpenMPI with gcc and pgf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=gcc CXX=g++ F77=pgf... FC=pgf... ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After that, edit the WRF configure.wrf and remove every instance of 
</span><br>
<span class="quotelev1">&gt; -cc=${SOMEVAR} I think there should be two, but I don't have access to 
</span><br>
<span class="quotelev1">&gt; mine at the moment to tell you the exact names.
</span><br>
<p>I'll try that in a few minutes
<br>
<p>Thanks!
<br>
<p>gerry
<br>
<p><span class="quotelev1">&gt; Gerry Creager wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Elvedin,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, I thought about that after finding a reference to this in the 
</span><br>
<span class="quotelev2">&gt;&gt; archives, so I redirected the path to MPI toward the gnu-compiled 
</span><br>
<span class="quotelev2">&gt;&gt; version.  It died in THIS manner:
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/RSL_LITE'
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -cc=gcc -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev2">&gt;&gt; pgcc-Error-Unknown switch: -cc=gcc
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: [c_code.o] Error 1 (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Methinks the wrf configuration script and make file will need some 
</span><br>
<span class="quotelev2">&gt;&gt; tweeks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting thing: I have another system (alas, with mpich) where it 
</span><br>
<span class="quotelev2">&gt;&gt; compiles just fine.  I'm trying to sort this out, as on 2 systems, 
</span><br>
<span class="quotelev2">&gt;&gt; with openMPI, it does odd dances before dying.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm still trying things.  I've gotta get this up both for MY research 
</span><br>
<span class="quotelev2">&gt;&gt; and to support other users.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Gerry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Elvedin Trnjanin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WRF almost requires that you use gcc for the C/C++ part and the PGI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran compilers, if you choose that option. I'd suggest compiling 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI in the same way as that has resolved our various issues. Have 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you tried that with the same result?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gerry Creager wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Howdy,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm new to this list.  I've done a little review but likely missed 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something specific to what I'm asking.  I'll keep looking but need 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to resolve this soon.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm running a Rocks cluster (centos 5), with PGI 7.2-3 compilers, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Myricom MX2 hardware and drivers, and OpenMPI1.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I installed the Myricom roll which has OpenMPI compiled with gcc.  I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recently compiled the openmpi code w/ PGI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've the MPICH_F90 pointing to the right place, and we're looking 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the right includes and libs by means of LD_LIBRARY_PATH, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I tried to run, I got the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/RSL_LITE'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC/x86-64 Linux 7.2-3: compilation completed with warnings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c buf_for_proc.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting identifier 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .Z0000 before '(' (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-S-0082-Function returning array not allowed 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-S-0043-Redefinition of symbol, MPI_Comm 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (/share/apps/openmpi-1.3-pgi/include/mpi.h: 903)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC/x86-64 Linux 7.2-3: compilation completed with severe errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: [buf_for_proc.o] Error 2 (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that I had modified the makefile to use PGI in place of gcc, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and thus, the PGI-compiled openMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, Gerry
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Gerry Creager -- gerry.creager_at_[hidden]
Texas Mesonet -- AATLT, Texas A&amp;M University
Cell: 979.229.5301 Office: 979.458.4020 FAX: 979.862.3983
Office: 1700 Research Parkway Ste 160, TAMU, College Station, TX 77843
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8121.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8119.php">Jeff Pummill: "[OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8111.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8115.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
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
