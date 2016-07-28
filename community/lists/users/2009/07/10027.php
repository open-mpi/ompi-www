<?
$subject_val = "[OMPI users] Help: HPL Compiled Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 00:26:58 2009" -->
<!-- isoreceived="20090722042658" -->
<!-- sent="Wed, 22 Jul 2009 12:26:53 +0800" -->
<!-- isosent="20090722042653" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="[OMPI users] Help: HPL Compiled Problem" -->
<!-- id="289665360907212126y5219df9dsa94087b23957ee73_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help: HPL Compiled Problem<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 00:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10028.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Previous message:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10028.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Reply:</strong> <a href="10028.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm going to compile HPL by using OpenMPI-1.2.4. Here's my
<br>
Make.Linux_ATHLON_CBLAS file.
<br>
<p># ######################################################################
<br>
#
<br>
# ----------------------------------------------------------------------
<br>
# - shell --------------------------------------------------------------
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
ARCH         = Linux_ATHLON_CBLAS
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
TOPdir       = /ma/hpl-2.0
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
# - MPI directories - library ------------------------------------------
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
MPdir        = /ma/openmpi-1.2.4
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
LAdir        = /ma/GotoBLAS-1.26
<br>
LAinc        =
<br>
LAlib        = $(LAdir)/libgoto.a
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
HPL_LIBS     = $(HPLlib) $(LAlib) $(MPlib)
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
#    *) call the Fortran 77 BLAS interface
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
CC           = /usr/bin/gcc
<br>
CCNOOPT      = $(HPL_DEFS)
<br>
CCFLAGS      = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops -W -Wall
<br>
#
<br>
LINKER       = /usr/bin/gcc
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
<p>When I type make arch=Linux_ATHLON_CBLAS, some errors reported.
<br>
<p>/usr/bin/gcc  -DHPL_CALL_CBLAS -I/ma/hpl-2.0/include
<br>
-I/ma/hpl-2.0/include/Linux_ATHLON_CBLAS  -I/ma/openmpi-1.2.4/include
<br>
-fomit-frame-pointer -O3 -funroll-loops -W -Wall -o
<br>
/ma/hpl-2.0/bin/Linux_ATHLON_CBLAS/xhpl HPL_pddriver.o
<br>
HPL_pdinfo.o           HPL_pdtest.o
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a
<br>
/ma/GotoBLAS-1.26/libgoto.a /ma/openmpi-1.2.4/lib/libmpi.so
<br>
HPL_pdtest.o: In function `HPL_pdtest':
<br>
HPL_pdtest.c:(.text+0x652): undefined reference to `cblas_dgemv'
<br>
HPL_pdtest.c:(.text+0x921): undefined reference to `cblas_idamax'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdlange.o): In
<br>
function `HPL_pdlange':
<br>
HPL_pdlange.c:(.text+0xd20): undefined reference to `cblas_idamax'
<br>
HPL_pdlange.c:(.text+0xf26): undefined reference to `cblas_idamax'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdpancrN.o): In
<br>
function `HPL_pdpancrN':
<br>
HPL_pdpancrN.c:(.text+0x17b): undefined reference to `cblas_dgemv'
<br>
HPL_pdpancrN.c:(.text+0x219): undefined reference to `cblas_dgemv'
<br>
HPL_pdpancrN.c:(.text+0x2ff): undefined reference to `cblas_dscal'
<br>
HPL_pdpancrN.c:(.text+0x338): undefined reference to `cblas_dcopy'
<br>
HPL_pdpancrN.c:(.text+0x3ff): undefined reference to `cblas_dscal'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdpancrT.o): In
<br>
function `HPL_pdpancrT':
<br>
HPL_pdpancrT.c:(.text+0x177): undefined reference to `cblas_dgemv'
<br>
HPL_pdpancrT.c:(.text+0x217): undefined reference to `cblas_dgemv'
<br>
HPL_pdpancrT.c:(.text+0x2f5): undefined reference to `cblas_dscal'
<br>
HPL_pdpancrT.c:(.text+0x331): undefined reference to `cblas_dcopy'
<br>
HPL_pdpancrT.c:(.text+0x3f1): undefined reference to `cblas_dscal'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdpanllN.o): In
<br>
function `HPL_pdpanllN':
<br>
HPL_pdpanllN.c:(.text+0x1ab): undefined reference to `cblas_dgemv'
<br>
HPL_pdpanllN.c:(.text+0x268): undefined reference to `cblas_dtrsv'
<br>
HPL_pdpanllN.c:(.text+0x2b2): undefined reference to `cblas_dscal'
<br>
HPL_pdpanllN.c:(.text+0x2d8): undefined reference to `cblas_dcopy'
<br>
HPL_pdpanllN.c:(.text+0x3b9): undefined reference to `cblas_dscal'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdpanllT.o): In
<br>
function `HPL_pdpanllT':
<br>
HPL_pdpanllT.c:(.text+0x192): undefined reference to `cblas_dgemv'
<br>
HPL_pdpanllT.c:(.text+0x24b): undefined reference to `cblas_dtrsv'
<br>
HPL_pdpanllT.c:(.text+0x295): undefined reference to `cblas_dscal'
<br>
HPL_pdpanllT.c:(.text+0x2ba): undefined reference to `cblas_dcopy'
<br>
HPL_pdpanllT.c:(.text+0x39b): undefined reference to `cblas_dscal'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdpanrlN.o): In
<br>
function `HPL_pdpanrlN':
<br>
HPL_pdpanrlN.c:(.text+0xf9): undefined reference to `cblas_dger'
<br>
HPL_pdpanrlN.c:(.text+0x1b8): undefined reference to `cblas_daxpy'
<br>
HPL_pdpanrlN.c:(.text+0x1fd): undefined reference to `cblas_dscal'
<br>
HPL_pdpanrlN.c:(.text+0x2a8): undefined reference to `cblas_dscal'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdpanrlT.o): In
<br>
function `HPL_pdpanrlT':
<br>
HPL_pdpanrlT.c:(.text+0x146): undefined reference to `cblas_dger'
<br>
HPL_pdpanrlT.c:(.text+0x20f): undefined reference to `cblas_daxpy'
<br>
HPL_pdpanrlT.c:(.text+0x258): undefined reference to `cblas_dscal'
<br>
HPL_pdpanrlT.c:(.text+0x2fe): undefined reference to `cblas_dscal'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdrpanllN.o): In
<br>
function `HPL_pdrpanllN':
<br>
HPL_pdrpanllN.c:(.text+0x1d5): undefined reference to `cblas_dtrsm'
<br>
HPL_pdrpanllN.c:(.text+0x253): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdrpanllT.o): In
<br>
function `HPL_pdrpanllT':
<br>
HPL_pdrpanllT.c:(.text+0x1ac): undefined reference to `cblas_dtrsm'
<br>
HPL_pdrpanllT.c:(.text+0x22c): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdrpancrN.o): In
<br>
function `HPL_pdrpancrN':
<br>
HPL_pdrpancrN.c:(.text+0x1c5): undefined reference to `cblas_dgemm'
<br>
HPL_pdrpancrN.c:(.text+0x21d): undefined reference to `cblas_dtrsm'
<br>
HPL_pdrpancrN.c:(.text+0x30d): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdrpancrT.o): In
<br>
function `HPL_pdrpancrT':
<br>
HPL_pdrpancrT.c:(.text+0x1cf): undefined reference to `cblas_dgemm'
<br>
HPL_pdrpancrT.c:(.text+0x221): undefined reference to `cblas_dtrsm'
<br>
HPL_pdrpancrT.c:(.text+0x2ff): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdrpanrlN.o): In
<br>
function `HPL_pdrpanrlN':
<br>
HPL_pdrpanrlN.c:(.text+0x230): undefined reference to `cblas_dtrsm'
<br>
HPL_pdrpanrlN.c:(.text+0x2e0): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdrpanrlT.o): In
<br>
function `HPL_pdrpanrlT':
<br>
HPL_pdrpanrlT.c:(.text+0x1fd): undefined reference to `cblas_dtrsm'
<br>
HPL_pdrpanrlT.c:(.text+0x2b3): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdupdateNN.o): In
<br>
function `HPL_pdupdateNN':
<br>
HPL_pdupdateNN.c:(.text+0x1aa): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNN.c:(.text+0x254): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateNN.c:(.text+0x2b4): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNN.c:(.text+0x324): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateNN.c:(.text+0x384): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNN.c:(.text+0x6ea): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateNN.c:(.text+0x750): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNN.c:(.text+0x7f3): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateNN.c:(.text+0x858): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNN.c:(.text+0x8b7): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdupdateNT.o): In
<br>
function `HPL_pdupdateNT':
<br>
HPL_pdupdateNT.c:(.text+0x1bc): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNT.c:(.text+0x262): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateNT.c:(.text+0x2c3): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNT.c:(.text+0x322): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateNT.c:(.text+0x383): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNT.c:(.text+0x428): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNT.c:(.text+0x782): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateNT.c:(.text+0x7eb): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateNT.c:(.text+0x88f): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateNT.c:(.text+0x8f5): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdupdateTN.o): In
<br>
function `HPL_pdupdateTN':
<br>
HPL_pdupdateTN.c:(.text+0x1aa): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTN.c:(.text+0x254): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateTN.c:(.text+0x2b4): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTN.c:(.text+0x324): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateTN.c:(.text+0x384): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTN.c:(.text+0x6ea): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateTN.c:(.text+0x750): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTN.c:(.text+0x7f3): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateTN.c:(.text+0x858): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTN.c:(.text+0x8b7): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdupdateTT.o): In
<br>
function `HPL_pdupdateTT':
<br>
HPL_pdupdateTT.c:(.text+0x1bc): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTT.c:(.text+0x262): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateTT.c:(.text+0x2c3): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTT.c:(.text+0x322): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateTT.c:(.text+0x383): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTT.c:(.text+0x428): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTT.c:(.text+0x782): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateTT.c:(.text+0x7eb): undefined reference to `cblas_dgemm'
<br>
HPL_pdupdateTT.c:(.text+0x88f): undefined reference to `cblas_dtrsm'
<br>
HPL_pdupdateTT.c:(.text+0x8f5): undefined reference to `cblas_dgemm'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_dlocmax.o): In
<br>
function `HPL_dlocmax':
<br>
HPL_dlocmax.c:(.text+0x78): undefined reference to `cblas_idamax'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdmxswp.o): In
<br>
function `HPL_pdmxswp':
<br>
HPL_pdmxswp.c:(.text+0xf5): undefined reference to `cblas_dcopy'
<br>
HPL_pdmxswp.c:(.text+0x252): undefined reference to `cblas_dcopy'
<br>
HPL_pdmxswp.c:(.text+0x4be): undefined reference to `cblas_dcopy'
<br>
HPL_pdmxswp.c:(.text+0x62a): undefined reference to `cblas_dcopy'
<br>
HPL_pdmxswp.c:(.text+0x6c7): undefined reference to `cblas_dcopy'
<br>
/ma/hpl-2.0/lib/Linux_ATHLON_CBLAS/libhpl.a(HPL_pdtrsv.o): In function
<br>
`HPL_pdtrsv':
<br>
HPL_pdtrsv.c:(.text+0xaf2): undefined reference to `cblas_dgemv'
<br>
HPL_pdtrsv.c:(.text+0xbee): undefined reference to `cblas_dgemv'
<br>
HPL_pdtrsv.c:(.text+0xd01): undefined reference to `cblas_daxpy'
<br>
HPL_pdtrsv.c:(.text+0xd6d): undefined reference to `cblas_dtrsv'
<br>
HPL_pdtrsv.c:(.text+0xd93): undefined reference to `cblas_dcopy'
<br>
HPL_pdtrsv.c:(.text+0xf6f): undefined reference to `cblas_dtrsv'
<br>
HPL_pdtrsv.c:(.text+0xf8e): undefined reference to `cblas_dcopy'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [dexe.grd] Error 1
<br>
make[2]: Leaving directory `/ma/hpl-2.0/testing/ptest/Linux_ATHLON_CBLAS'
<br>
make[1]: *** [build_tst] Error 2
<br>
make[1]: Leaving directory `/ma/hpl-2.0'
<br>
make: *** [build] Error 2
<br>
<p>I don't know how to fix that. I use GotoBLAS-1.26 with Nehalem
<br>
support. Could anyone show me tips to solve that?
<br>
<p>Thanks very much.
<br>
<p>Best Regards,
<br>
<p>Amy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10028.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Previous message:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10028.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Reply:</strong> <a href="10028.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
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
