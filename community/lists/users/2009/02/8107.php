<?
$subject_val = "[OMPI users] WRF, OpenMPI and PGI 7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 10:41:44 2009" -->
<!-- isoreceived="20090219154144" -->
<!-- sent="Thu, 19 Feb 2009 09:41:38 -0600" -->
<!-- isosent="20090219154138" -->
<!-- name="Gerry Creager" -->
<!-- email="gerry.creager_at_[hidden]" -->
<!-- subject="[OMPI users] WRF, OpenMPI and PGI 7.2" -->
<!-- id="499D7DB2.6070805_at_tamu.edu" -->
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
<strong>Subject:</strong> [OMPI users] WRF, OpenMPI and PGI 7.2<br>
<strong>From:</strong> Gerry Creager (<em>gerry.creager_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 10:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8108.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8106.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8108.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Reply:</strong> <a href="8108.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howdy,
<br>
<p>I'm new to this list.  I've done a little review but likely missed 
<br>
something specific to what I'm asking.  I'll keep looking but need to 
<br>
resolve this soon.
<br>
<p>I'm running a Rocks cluster (centos 5), with PGI 7.2-3 compilers, 
<br>
Myricom MX2 hardware and drivers, and OpenMPI1.3
<br>
<p>I installed the Myricom roll which has OpenMPI compiled with gcc.  I 
<br>
recently compiled the openmpi code w/ PGI.
<br>
<p>I've the MPICH_F90 pointing to the right place, and we're looking for 
<br>
the right includes and libs by means of LD_LIBRARY_PATH, etc.
<br>
<p>When I tried to run, I got the following error:
<br>
make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/RSL_LITE'
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
<br>
PGC/x86-64 Linux 7.2-3: compilation completed with warnings
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c buf_for_proc.c
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting identifier 
<br>
.Z0000 before '(' (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
<br>
PGC-S-0082-Function returning array not allowed 
<br>
(/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
<br>
PGC-S-0043-Redefinition of symbol, MPI_Comm 
<br>
(/share/apps/openmpi-1.3-pgi/include/mpi.h: 903)
<br>
PGC/x86-64 Linux 7.2-3: compilation completed with severe errors
<br>
make[3]: [buf_for_proc.o] Error 2 (ignored)
<br>
<p>Note that I had modified the makefile to use PGI in place of gcc, and 
<br>
thus, the PGI-compiled openMPI.
<br>
<p>Thanks, Gerry
<br>
<pre>
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
<li><strong>Next message:</strong> <a href="8108.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8106.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8108.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Reply:</strong> <a href="8108.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
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
