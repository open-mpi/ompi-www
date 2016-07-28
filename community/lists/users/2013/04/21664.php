<?
$subject_val = "[OMPI users] Segmentation fault with HPCC benchmark";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  3 08:28:43 2013" -->
<!-- isoreceived="20130403122843" -->
<!-- sent="Wed, 3 Apr 2013 16:58:17 +0430" -->
<!-- isosent="20130403122817" -->
<!-- name="Reza Bakhshayeshi" -->
<!-- email="reza.b2008_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault with HPCC benchmark" -->
<!-- id="CAMGoRG3jscpuy4h2hFDyCGmAKtB8AtP-YGmgFn5u+ccvhCukFA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault with HPCC benchmark<br>
<strong>From:</strong> Reza Bakhshayeshi (<em>reza.b2008_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-03 08:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Previous message:</strong> <a href="21663.php">Brock Palen: "[OMPI users] FCA collectives disabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#226;&#128;&#139;Hi
<br>
&#226;&#128;&#139;&#226;&#128;&#139;I have installed HPCC benchmark suite and openmpi on a private cloud
<br>
instances.
<br>
Unfortunately I get Segmentation fault error mostly when I want to run it
<br>
simultaneously on two or more instances with:
<br>
mpirun -np 2 --hostfile ./myhosts hpcc
<br>
<p>Everything is on Ubuntu server 12.04 (updated)
<br>
and this is my make.intel64 file:
<br>
<p>shell --------------------------------------------------------------
<br>
# ----------------------------------------------------------------------
<br>
#
<br>
SHELL        = /bin/sh
<br>
#
<br>
CD           = cd
<br>
CP           = cp
<br>
LN_S         = ln -s
<br>
MKDIR        = mkdir
<br>
RM           = /bin/rm -f
<br>
TOUCH        = touch
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
# - Platform identifier ------------------------------------------------
<br>
# ----------------------------------------------------------------------
<br>
#
<br>
ARCH         = intel64
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
# - HPL Directory Structure / HPL library ------------------------------
<br>
# ----------------------------------------------------------------------
<br>
#
<br>
TOPdir       = ../../..
<br>
INCdir       = $(TOPdir)/include
<br>
BINdir       = $(TOPdir)/bin/$(ARCH)
<br>
LIBdir       = $(TOPdir)/lib/$(ARCH)
<br>
#
<br>
HPLlib       = $(LIBdir)/libhpl.a
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
# - Message Passing library (MPI) --------------------------------------
<br>
# ----------------------------------------------------------------------
<br>
# MPinc tells the  C  compiler where to find the Message Passing library
<br>
# header files,  MPlib  is defined  to be the name of  the library to be
<br>
# used. The variable MPdir is only used for defining MPinc and MPlib.
<br>
#
<br>
MPdir        = /usr/lib/openmpi
<br>
MPinc        = -I$(MPdir)/include
<br>
MPlib        = $(MPdir)/lib/libmpi.so
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
# - Linear Algebra library (BLAS or VSIPL) -----------------------------
<br>
# ----------------------------------------------------------------------
<br>
# LAinc tells the  C  compiler where to find the Linear Algebra  library
<br>
# header files,  LAlib  is defined  to be the name of  the library to be
<br>
# used. The variable LAdir is only used for defining LAinc and LAlib.
<br>
#
<br>
LAdir        = /usr/local/ATLAS/obj64
<br>
LAinc        = -I$(LAdir)/include
<br>
LAlib        = $(LAdir)/lib/libcblas.a $(LAdir)/lib/libatlas.a
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
# - F77 / C interface --------------------------------------------------
<br>
# ----------------------------------------------------------------------
<br>
# You can skip this section  if and only if  you are not planning to use
<br>
# a  BLAS  library featuring a Fortran 77 interface.  Otherwise,  it  is
<br>
# necessary  to  fill out the  F2CDEFS  variable  with  the  appropriate
<br>
# options.  **One and only one**  option should be chosen in **each** of
<br>
# the 3 following categories:
<br>
#
<br>
# 1) name space (How C calls a Fortran 77 routine)
<br>
#
<br>
# -DAdd_              : all lower case and a suffixed underscore  (Suns,
<br>
#                       Intel, ...),                           [default]
<br>
# -DNoChange          : all lower case (IBM RS6000),
<br>
# -DUpCase            : all upper case (Cray),
<br>
# -DAdd__             : the FORTRAN compiler in use is f2c.
<br>
#
<br>
# 2) C and Fortran 77 integer mapping
<br>
#
<br>
# -DF77_INTEGER=int   : Fortran 77 INTEGER is a C int,         [default]
<br>
# -DF77_INTEGER=long  : Fortran 77 INTEGER is a C long,
<br>
# -DF77_INTEGER=short : Fortran 77 INTEGER is a C short.
<br>
#
<br>
# 3) Fortran 77 string handling
<br>
#
<br>
# -DStringSunStyle    : The string address is passed at the string loca-
<br>
#                       tion on the stack, and the string length is then
<br>
#                       passed as  an  F77_INTEGER  after  all  explicit
<br>
#                       stack arguments,                       [default]
<br>
# -DStringStructPtr   : The address  of  a  structure  is  passed  by  a
<br>
#                       Fortran 77  string,  and the structure is of the
<br>
#                       form: struct {char *cp; F77_INTEGER len;},
<br>
# -DStringStructVal   : A structure is passed by value for each  Fortran
<br>
#                       77 string,  and  the  structure is  of the form:
<br>
#                       struct {char *cp; F77_INTEGER len;},
<br>
# -DStringCrayStyle   : Special option for  Cray  machines,  which  uses
<br>
#                       Cray  fcd  (fortran  character  descriptor)  for
<br>
#                       interoperation.
<br>
#
<br>
F2CDEFS      =
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
# - HPL includes / libraries / specifics -------------------------------
<br>
# ----------------------------------------------------------------------
<br>
#
<br>
HPL_INCLUDES = -I$(INCdir) -I$(INCdir)/$(ARCH) $(LAinc) $(MPinc)
<br>
HPL_LIBS     = $(HPLlib) $(LAlib) $(MPlib) -lm
<br>
#
<br>
# - Compile time options -----------------------------------------------
<br>
#
<br>
# -DHPL_COPY_L           force the copy of the panel L before bcast;
<br>
# -DHPL_CALL_CBLAS       call the cblas interface;
<br>
# -DHPL_CALL_VSIPL       call the vsip  library;
<br>
# -DHPL_DETAILED_TIMING  enable detailed timers;
<br>
#
<br>
# By default HPL will:
<br>
#    *) not copy L before broadcast,
<br>
#    *) call the BLAS Fortran 77 interface,
<br>
#    *) not display detailed timing information.
<br>
#
<br>
HPL_OPTS     = -DHPL_CALL_CBLAS
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
#
<br>
HPL_DEFS     = $(F2CDEFS) $(HPL_OPTS) $(HPL_INCLUDES)
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
# - Compilers / linkers - Optimization flags ---------------------------
<br>
# ----------------------------------------------------------------------
<br>
#
<br>
CC           = /usr/bin/mpicc
<br>
CCNOOPT      = $(HPL_DEFS)
<br>
CCFLAGS      = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops
<br>
#CCFLAGS      = $(HPL_DEFS)
<br>
#
<br>
# On some platforms,  it is necessary  to use the Fortran linker to find
<br>
# the Fortran internals used in the BLAS library.
<br>
#
<br>
LINKER       = /usr/bin/mpif90
<br>
LINKFLAGS    = $(CCFLAGS)
<br>
#
<br>
ARCHIVER     = ar
<br>
ARFLAGS      = r
<br>
RANLIB       = echo
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
<p>Would you mind please help me figure this problem out?
<br>
<p>Regards,
<br>
Reza
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21664/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Previous message:</strong> <a href="21663.php">Brock Palen: "[OMPI users] FCA collectives disabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
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
