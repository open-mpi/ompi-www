<?
$subject_val = "[OMPI users] Open mpi 123 install error for BLACS";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 14:03:28 2009" -->
<!-- isoreceived="20090131190328" -->
<!-- sent="Sat, 31 Jan 2009 12:03:23 -0700" -->
<!-- isosent="20090131190323" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] Open mpi 123 install error for BLACS" -->
<!-- id="BLU149-W68D687722425D81E9FF834CBC70_at_phx.gbl" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Open mpi 123 install error for BLACS<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-31 14:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7913.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Previous message:</strong> <a href="7911.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7942.php">Rainer Keller: "Re: [OMPI users] Open mpi 123 install error for BLACS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7942.php">Rainer Keller: "Re: [OMPI users] Open mpi 123 install error for BLACS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am installing BLACS in order to install PCSDP - a parallell interior point
<br>
solver for linear programming. 
<br>
<p>I need to install it on Open MPI 1.2.3 platform. 
<br>
<p>I ahve installed BLAS, LAPACK successfully. 
<br>
<p>Now I need to install BLACS.
<br>
<p>I can run &quot;make mpi&quot; successfully. 
<br>
<p>But, When I run &quot;make tester&quot;.
<br>
<p>[BLACS]$ make tester
<br>
( cd TESTING ; make  )
<br>
make[1]: Entering directory `/home/PCSDP/BLACS/TESTING'
<br>
mpif77  -o /home/PCSDP/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0 blacstest.o btprim_MPI.o tools.o /home/PCSDP/BLACS/LIB/blacsF77init_MPI-LINUX-0.a /home/PCSDP/BLACS/LIB/blacs_MPI-LINUX-0.a /home/PCSDP/BLACS/LIB/blacsF77init_MPI-LINUX-0.a /home/openmpi_123/lib/libmpi_cxx.la
<br>
/home/openmpi_123/lib/libmpi_cxx.la: file not recognized: File format not recognized
<br>
collect2: ld returned 1 exit status
<br>
<p>make[1]: *** [/home/PCSDP/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0] Error 1
<br>
make[1]: Leaving directory `/home/PCSDP/BLACS/TESTING'
<br>
make: *** [tester] Error 2
<br>
-------------------------------------
<br>
<p>In the &quot;Makefile&quot; of TESTING/, I have changed :
<br>
<p>tools.o : tools.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#$(F77) $(F77NO_OPTFLAGS) -c $*.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(F77) $(F77NO_OPTFLAGS) -fno-globals -fno-f90 -fugly-complex -w -c $*.f
<br>
<p>blacstest.o : blacstest.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#$(F77) $(F77NO_OPTFLAGS) -c $*.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(F77) $(F77NO_OPTFLAGS) -fno-globals -fno-f90 -fugly-complex -w -c $*.f
<br>
<p><p>------------------------------------------
<br>
<p>In &quot;Bconfig.h&quot;, I have changed 
<br>
<p>include &quot;/home/openmpi_123/include/mpi.h&quot;
<br>
<p>In OpenMPI 1.2.3, the lib directory does not include: &quot;*.a&quot; library.
<br>
only &quot;*.la&quot; library. 
<br>
<p><p>Any help is appreciated. 
<br>
<p>Jack
<br>
<p>Jan.  30  2009
<br>
<p><p>My &quot;Bmake.inc&quot; is:
<br>
<p>---------------------------------
<br>
SECTION 1: PATHS AND LIBRARIES
<br>
SHELL = /bin/sh
<br>
BTOPdir = /home/PCSDP/BLACS
<br>
COMMLIB = MPI
<br>
PLAT = LINUX
<br>
<p>BLACSdir    = $(BTOPdir)/LIB
<br>
&nbsp;&nbsp;&nbsp;BLACSDBGLVL = 0
<br>
&nbsp;&nbsp;&nbsp;BLACSFINIT  = $(BLACSdir)/blacsF77init_$(COMMLIB)-$(PLAT)-$(BLACSDBGLVL).a
<br>
&nbsp;&nbsp;&nbsp;BLACSCINIT  = $(BLACSdir)/blacsCinit_$(COMMLIB)-$(PLAT)-$(BLACSDBGLVL).a
<br>
&nbsp;&nbsp;&nbsp;BLACSLIB    = $(BLACSdir)/blacs_$(COMMLIB)-$(PLAT)-$(BLACSDBGLVL).a
<br>
<p>&nbsp;&nbsp;&nbsp;MPIdir =  /home/openmpi_123
<br>
&nbsp;&nbsp;&nbsp;MPILIBdir = $(MPIdir)/lib
<br>
&nbsp;&nbsp;&nbsp;MPIINCdir = $(MPIdir)/include
<br>
<p>MPILIB = $(MPILIBdir)/libmpi_cxx.la
<br>
<p>BTLIBS = $(BLACSFINIT) $(BLACSLIB) $(BLACSFINIT) $(MPILIB)
<br>
<p>INSTdir = $(BTOPdir)/INSTALL/EXE
<br>
<p><p>&nbsp;TESTdir = $(BTOPdir)/TESTING/EXE
<br>
&nbsp;&nbsp;&nbsp;FTESTexe = $(TESTdir)/xFbtest_$(COMMLIB)-$(PLAT)-$(BLACSDBGLVL)
<br>
&nbsp;&nbsp;&nbsp;CTESTexe = $(TESTdir)/xCbtest_$(COMMLIB)-$(PLAT)-$(BLACSDBGLVL)
<br>
<p>SYSINC = -I$(MPIINCdir)
<br>
<p>&nbsp;INTFACE = -Df77IsF2C
<br>
SENDIS =
<br>
BUFF =
<br>
&nbsp;TRANSCOMM = -DCSameF77
<br>
&nbsp;WHATMPI =              
<br>
SYSERRORS =
<br>
DEBUGLVL = -DBlacsDebugLvl=$(BLACSDBGLVL)
<br>
DEFS1 = -DSYSINC $(SYSINC) $(INTFACE) $(DEFBSTOP) $(DEFCOMBTOP) $(DEBUGLVL)
<br>
BLACSDEFS = $(DEFS1) $(SENDIS) $(BUFF) $(TRANSCOMM) $(WHATMPI) $(SYSERRORS)
<br>
<p>SECTION 3: COMPILERS
<br>
<p>&nbsp;F77            = mpif77
<br>
&nbsp;&nbsp;&nbsp;F77NO_OPTFLAGS =
<br>
&nbsp;&nbsp;&nbsp;F77FLAGS       = $(F77NO_OPTFLAGS) -O
<br>
&nbsp;&nbsp;&nbsp;F77LOADER      = $(F77)
<br>
&nbsp;&nbsp;&nbsp;F77LOADFLAGS   =
<br>
<p>CC             = mpicc
<br>
&nbsp;&nbsp;&nbsp;CCFLAGS        = -O4
<br>
&nbsp;&nbsp;&nbsp;CCLOADER       = $(CC)
<br>
&nbsp;&nbsp;&nbsp;CCLOADFLAGS    =
<br>
<p>&nbsp;ARCH      = ar
<br>
&nbsp;&nbsp;&nbsp;ARCHFLAGS = r
<br>
&nbsp;&nbsp;&nbsp;RANLIB    = ranlib
<br>
<p>-------------------------------
<br>
<p><p><p><p><p>_________________________________________________________________
<br>
Windows Live&#153; Hotmail&#174;&#133;more than just e-mail. 
<br>
<a href="http://windowslive.com/howitworks?ocid=TXT_TAGLM_WL_t2_hm_justgotbetter_howitworks_012009">http://windowslive.com/howitworks?ocid=TXT_TAGLM_WL_t2_hm_justgotbetter_howitworks_012009</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7913.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Previous message:</strong> <a href="7911.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7942.php">Rainer Keller: "Re: [OMPI users] Open mpi 123 install error for BLACS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7942.php">Rainer Keller: "Re: [OMPI users] Open mpi 123 install error for BLACS"</a>
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
