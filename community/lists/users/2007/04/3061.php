<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 12 00:08:19 2007" -->
<!-- isoreceived="20070412040819" -->
<!-- sent="Thu, 12 Apr 2007 04:08:04 +0000" -->
<!-- isosent="20070412040804" -->
<!-- name="snj78_at_[hidden]" -->
<!-- email="snj78_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with HPL and MPI" -->
<!-- id="041220070408.19758.461DB0A4000BE12900004D2E2215567074C8C906029C_at_comcast.net" -->
<!-- inreplyto="[OMPI users] Help with HPL and MPI" -->
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
<strong>From:</strong> <a href="mailto:snj78_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Help%20with%20HPL%20and%20MPI"><em>snj78_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-04-12 00:08:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3062.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Previous message:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Maybe in reply to:</strong> <a href="3049.php">snj78_at_[hidden]: "[OMPI users] Help with HPL and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3062.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Reply:</strong> <a href="3062.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply Brock, I appreciate the help.  I have rebuilt the makefile with your suggestions and tried some other things but to no avail.  One thing that I realized but not sure if this makes a difference is that I have installed an openmpi package and an mpich package so could that cause problems using the mpicc compiler and linking the different packages/libraries?
<br>
<p>I have rebuilt my make file and something interesting that I have noticed is that no matter what I change I still get the same error.  I am always getting the following error:
<br>
<p>Makefile:47:  Make.inc: No such file or directory
<br>
*** No rule to make target 'Make.inc'. Stop
<br>
<p>I use the following command in my top directory, which is /hpl:
<br>
<p>make arch=Beowulf
<br>
<p>while my makefile is Make.Beowulf.  I am still at a loss at can't figure out what to do next so I really appreciate the help, even though this may seem trivial.
<br>
<p>The make file and error log follow:
<br>
<p>Make.Beowulf
<br>
<p>SHELL = /bin/sh
<br>
#
<br>
CD = cd
<br>
CP = cp
<br>
LN_S = ln -s
<br>
MKDIR = mkdir
<br>
RM = /bin/rm -f
<br>
TOUCH = touch
<br>
#
<br>
ARCH = Linux_x86_64
<br>
# - HPL Directory Structure / HPL library ------------------------------
<br>
TOPdir = $(HOME)/hpl
<br>
INCdir = $(TOPdir)/include
<br>
BINdir = $(TOPdir)/bin/$(ARCH)
<br>
LIBdir = $(TOPdir)/lib/$(ARCH)
<br>
#
<br>
HPLlib = $(LIBdir)/libhpl.a 
<br>
# - Message Passing library (MPI) --------------------------------------
<br>
MPdir = /usr
<br>
MPinc =-I$(MPdir)/include/openmpi
<br>
MPlib = $(MPdir)/lib64/openmpi/libmpi.so
<br>
# - Linear Algebra library (BLAS or VSIPL) -----------------------------
<br>
LAdir = /usr/lib64
<br>
LAinc =-I$(MPdir)/include
<br>
LAlib = $(LAdir)/libblas.so.3 $(LAdir)/atlas/libblas.so.3
<br>
#
<br>
F2CDEFS =
<br>
#
<br>
HPL_INCLUDES = -I$(INCdir) -I$(INCdir)/$(ARCH) $(LAinc) $(MPinc)
<br>
HPL_LIBS = $(HPLlib) $(LAlib) $(MPlib)
<br>
#
<br>
HPL_OPTS = -DHPL_CALL_CBLAS
<br>
# ----------------------------------------------------------------------
<br>
HPL_DEFS = $(F2CDEFS) $(HPL_OPTS) $(HPL_INCLUDES)
<br>
# - Compilers / linkers - Optimization flags ---------------------------
<br>
CC = mpicc
<br>
CCNOOPT = 
<br>
CCFLAGS = $(HPL_DEFS) -pipe -O3 -funroll-loops
<br>
#
<br>
LINKER = mpicc
<br>
LINKFLAGS = $(CCFLAGS)
<br>
#
<br>
ARCHIVER = ar
<br>
ARFLAGS = r
<br>
RANLIB = echo
<br>
<p>Error File ( Condensed to show the last portion with the error code )
<br>
<p>make -f Make.top refresh_tst arch=Beowulf
<br>
make[1]: Entering directory `/hpl'
<br>
cp makes/Make.matgen testing/matgen/Beowulf/Makefile
<br>
cp makes/Make.timer testing/timer/Beowulf/Makefile
<br>
cp makes/Make.pmatgen testing/pmatgen/Beowulf/Makefile
<br>
cp makes/Make.ptimer testing/ptimer/Beowulf/Makefile
<br>
cp makes/Make.ptest testing/ptest/Beowulf/Makefile
<br>
make[1]: Leaving directory `/hpl'
<br>
make -f Make.top build_src arch=Beowulf
<br>
make[1]: Entering directory `/hpl'
<br>
( cd src/auxil/Beowulf; make )
<br>
make[2]: Entering directory `/hpl/src/auxil/Beowulf'
<br>
Makefile:47: Make.inc: No such file or directory
<br>
make[2]: *** No rule to make target `Make.inc'. Stop.
<br>
make[2]: Leaving directory `/hpl/src/auxil/Beowulf'
<br>
make[1]: *** [build_src] Error 2
<br>
make[1]: Leaving directory `/hpl'
<br>
make: *** [build] Error 2
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3062.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Previous message:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Maybe in reply to:</strong> <a href="3049.php">snj78_at_[hidden]: "[OMPI users] Help with HPL and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3062.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Reply:</strong> <a href="3062.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
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
