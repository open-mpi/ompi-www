<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 10 00:10:43 2007" -->
<!-- isoreceived="20070410041043" -->
<!-- sent="Tue, 10 Apr 2007 04:10:37 +0000" -->
<!-- isosent="20070410041037" -->
<!-- name="snj78_at_[hidden]" -->
<!-- email="snj78_at_[hidden]" -->
<!-- subject="[OMPI users] Help with HPL and MPI" -->
<!-- id="041020070410.20417.461B0E3D0003C57B00004FC12216566276C8C906029C_at_comcast.net" -->
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
<strong>Date:</strong> 2007-04-10 00:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="3048.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3053.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Reply:</strong> <a href="3053.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Maybe reply:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I am trying to configure HPL on a beowulf cluster that I have put together for a senior project at Weber State University, and I am having a little bit of trouble.  First of all, about the cluster:
<br>
<p>4-node diskless cluster
<br>
Fedora Core 6 - 64 bit version
<br>
Intel Pentium D dual core processors
<br>
MSI 965 motherboards
<br>
<p>Right now I have one node doing a net boot with syslinux and would like to do a benchmark before I put the rest of the nodes together, so I can have a performance comparison with subsequent nodes.  I have installed the following packages on my system for HPL:
<br>
<p>openmpi-1.1-7.fc6.x86_64.rpm
<br>
openmpi-devel-1.1-7.fc6.x86_64.rpm
<br>
openmpi-libs-1.1-7.fc6.x86_64.rpm
<br>
lapack-3.1.0-4.fc6.x86_64.rpm
<br>
Blas-3.1.0-4.fc6.x86_64.rpm
<br>
atlas-4.6.0-11.fc6.x86_64.rpm
<br>
cblas.tgz
<br>
hpl.tgz
<br>
<p>I may have installed more packages than necessary but I didn't think it would hurt.  Everything has installed successfully but I can't get the makefile.&lt;arch&gt; down.  I simply just don't understand enough of it to build it correctly.  I just keep getting 'Make.inc' errors.  The Makefile that I have attempted is below, called Make.Beowulf.  I just used a generic makefile from the setups directory and attempted to supply some paths to the libraries but to no avail.  I have tried to find documentation explaining more clearly how everything should be setup but nothing in lay-man terms, hence the errors.  A few questions:
<br>
<p>What should my arch be?  Does that even matter?  Does it have to be x86_64?
<br>
I realize I have to supply paths to the BLAS and MPI headers and libraries but exactly which libraries and header files?
<br>
The compiler I am using is mpicc which is just linked to gcc, but shouldn't that compiler supply the links to the correct libraries and header files?
<br>
The MPlib parameter points to libmpich.a so I installed mpich2 but that didn't give me a libmpich.a directory so what should I use there?
<br>
Also, I am not using an network file systems so am I correct in assuming that all of the libraries need to be on each of the nodes?  If so, I need to know exactly where to put them, and again, I believe they would need to be put into the exact same location, so the problem is, which libraries and header files exactly?  (as to save precious RAM on each of the nodes).
<br>
<p>I realize I may be asking a lot but the end of the semester is just around the corner.  I appreciate any help that you may give me ahead of time.  Thanks.
<br>
<p>Stephen Jenkins
<br>
snj78_at_[hidden]
<br>
<p><p>Make.Beowulf
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
# - Platform identifier ------------------------------------------------
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
MPdir = /usr/include/openmpi
<br>
MPinc = -I$/usr/include/include
<br>
MPlib = $(MPdir)/lib/libmpich.a
<br>
# - Linear Algebra library (BLAS or VSIPL) -----------------------------
<br>
LAdir = $(HOME)/netlib/ARCHIVES/Linux_PII
<br>
LAinc =
<br>
LAlib = $(LAdir)/libcblas.a $(LAdir)/libatlas.a
<br>
# - F77 / C interface --------------------------------------------------
<br>
F2CDEFS =
<br>
# - HPL includes / libraries / specifics -------------------------------
<br>
HPL_INCLUDES = -I$(INCdir) -I$(INCdir)/$(ARCH) $(LAinc) $(MPinc)
<br>
HPL_LIBS = $(HPLlib) $(LAlib) $(MPlib)
<br>
# - Compile time options -----------------------------------------------
<br>
HPL_OPTS = -DHPL_CALL_CBLAS
<br>
# ----------------------------------------------------------------------
<br>
HPL_DEFS = $(F2CDEFS) $(HPL_OPTS) $(HPL_INCLUDES)
<br>
# - Compilers / linkers - Optimization flags ---------------------------
<br>
CC = /usr/bin/gcc
<br>
CCNOOPT = $(HPL_DEFS)
<br>
CCFLAGS = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops
<br>
# On some platforms, it is necessary to use the Fortran linker to find
<br>
# the Fortran internals used in the BLAS library.
<br>
LINKER = /usr/bin/g77
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="3048.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3053.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Reply:</strong> <a href="3053.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Maybe reply:</strong> <a href="3061.php">snj78_at_[hidden]: "Re: [OMPI users] Help with HPL and MPI"</a>
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
