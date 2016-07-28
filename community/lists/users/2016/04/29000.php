<?
$subject_val = "[OMPI users] MPIRUN SEGMENTATION FAULT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 23:32:29 2016" -->
<!-- isoreceived="20160423033229" -->
<!-- sent="Sat, 23 Apr 2016 03:32:27 +0000" -->
<!-- isosent="20160423033227" -->
<!-- name="Elio Physics" -->
<!-- email="Elio-Physics_at_[hidden]" -->
<!-- subject="[OMPI users] MPIRUN SEGMENTATION FAULT" -->
<!-- id="BLUPR10MB0754DF3A1536947D67B4BE61EA600_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI users] MPIRUN SEGMENTATION FAULT<br>
<strong>From:</strong> Elio Physics (<em>Elio-Physics_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-22 23:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29001.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="28999.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29001.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29001.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p><p>I have successfully compiled a code where the executable have been produced. However when I started using the executable with mpirun, the code stopped with the following error:
<br>
<p><p>&quot;mpirun noticed that process rank 0 with PID 570 on node compute-1-9.local exited on signal 11 (Segmentation fault).&quot;
<br>
<p><p>What is that error due to? and How can i solve it?
<br>
<p><p>I will post the make.inc compilation file:
<br>
<p><p>BUILD_TYPE ?=
<br>
#BUILD_TYPE := debug
<br>
<p>VERSION = 6.3
<br>
<p>ifeq ($(BUILD_TYPE), debug)
<br>
&nbsp;VERSION := $(VERSION)$(BUILD_TYPE)
<br>
endif
<br>
<p>BIN =~/Elie/SPRKKR/bin
<br>
#BIN=~/bin
<br>
#BIN=/tmp/$(USER)
<br>
<p>LIB =  -L/opt/intel/mkl/lib/intel64/libmkl_blas95_ilp64 -L/opt/intel/mkl/lib/intel64/libmkl_lapack95_ilp64 -L/opt/intel/mkl/lib/intel64 -lmkl_scalapack_ilp64 -lmkl_intel_ilp64 -lmkl_core -lmkl_sequential -lmkl_blacs_i
<br>
ntelmpi_ilp64 -lpthread -lm -ldl
<br>
<p>#Include mpif.h
<br>
INCLUDE = -I/opt/intel/mkl/include/intel64/ilp64  -I/opt/intel/mkl/lib/include
<br>
<p>#FFLAGS
<br>
FFLAGS = -O2
<br>
<p>FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
<br>
LINK = mpif90   $(FFLAGS) $(INCLUDE)
<br>
<p>MPI=MPI
<br>
<p><p>Thanks in advance
<br>
<p><p>Elio
<br>
<p>University of Rondonia, brazil
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29001.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="28999.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29001.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29001.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
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
