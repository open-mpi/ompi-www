<?
$subject_val = "[OMPI users] linker library file for both fortran and c compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  7 18:44:39 2013" -->
<!-- isoreceived="20130907224439" -->
<!-- sent="Sun, 8 Sep 2013 00:44:37 +0200" -->
<!-- isosent="20130907224437" -->
<!-- name="basma a.azeem" -->
<!-- email="basmaabdelazeem_at_[hidden]" -->
<!-- subject="[OMPI users] linker library file for both fortran and c compilers" -->
<!-- id="DUB115-W92A1B757FB0B3101043874AB3D0_at_phx.gbl" -->
<!-- charset="windows-1256" -->
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
<strong>Subject:</strong> [OMPI users] linker library file for both fortran and c compilers<br>
<strong>From:</strong> basma a.azeem (<em>basmaabdelazeem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-07 18:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22621.php">Reuti: "Re: [OMPI users] linker library file for both fortran and c compilers"</a>
<li><strong>Previous message:</strong> <a href="22619.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22621.php">Reuti: "Re: [OMPI users] linker library file for both fortran and c compilers"</a>
<li><strong>Reply:</strong> <a href="22621.php">Reuti: "Re: [OMPI users] linker library file for both fortran and c compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry for the trivial question
<br>
i am new to open mpi and parallel computing
<br>

<br>
i installed openmpi-1.6.1 on my pc which has an ubuntu 12.10
<br>
also i have nas parallel benchmark , i need to edit the NPB make file &quot;make.def&quot; 
<br>
i need to know what is the linker library file for both fortran and c compilers and where i can find them in the build folder ( i think i should find them in lib folder )
<br>
it is F_LIB   and   C_LIB that are required
<br>
this is the NPB make file:
<br>

<br>

<br>
#---------------------------------------------------------------------------
<br>
#
<br>
#                SITE- AND/OR PLATFORM-SPECIFIC DEFINITIONS. 
<br>
#
<br>
#---------------------------------------------------------------------------
<br>

<br>
#---------------------------------------------------------------------------
<br>
# Items in this file will need to be changed for each platform.
<br>
#---------------------------------------------------------------------------
<br>

<br>
#---------------------------------------------------------------------------
<br>
# Parallel Fortran:
<br>
#
<br>
# For CG, EP, FT, MG, LU, SP, BT and UA, which are in Fortran, the following 
<br>
# must be defined:
<br>
#
<br>
# F77        - Fortran compiler
<br>
# FFLAGS     - Fortran compilation arguments
<br>
# F_INC      - any -I arguments required for compiling Fortran 
<br>
# FLINK      - Fortran linker
<br>
# FLINKFLAGS - Fortran linker arguments
<br>
# F_LIB      - any -L and -l arguments required for linking Fortran 
<br>
# 
<br>
# compilations are done with $(F77) $(F_INC) $(FFLAGS) or
<br>
#                            $(F77) $(FFLAGS)
<br>
# linking is done with       $(FLINK) $(F_LIB) $(FLINKFLAGS)
<br>
#---------------------------------------------------------------------------
<br>

<br>
#---------------------------------------------------------------------------
<br>
# This is the fortran compiler used for Fortran programs
<br>
#---------------------------------------------------------------------------
<br>
F77 = f77
<br>
# This links fortran programs; usually the same as ${F77}
<br>
FLINK    = $(F77)
<br>

<br>
#---------------------------------------------------------------------------
<br>
# These macros are passed to the linker 
<br>
#---------------------------------------------------------------------------
<br>
F_LIB  =
<br>

<br>
#---------------------------------------------------------------------------
<br>
# These macros are passed to the compiler 
<br>
#---------------------------------------------------------------------------
<br>
F_INC =
<br>

<br>
#---------------------------------------------------------------------------
<br>
# Global *compile time* flags for Fortran programs
<br>
#---------------------------------------------------------------------------
<br>
FFLAGS    = -O
<br>

<br>
#---------------------------------------------------------------------------
<br>
# Global *link time* flags. Flags for increasing maximum executable 
<br>
# size usually go here. 
<br>
#---------------------------------------------------------------------------
<br>
FLINKFLAGS = -O
<br>

<br>

<br>
#---------------------------------------------------------------------------
<br>
# Parallel C:
<br>
#
<br>
# For IS and DC, which are in C, the following must be defined:
<br>
#
<br>
# CC         - C compiler 
<br>
# CFLAGS     - C compilation arguments
<br>
# C_INC      - any -I arguments required for compiling C 
<br>
# CLINK      - C linker
<br>
# CLINKFLAGS - C linker flags
<br>
# C_LIB      - any -L and -l arguments required for linking C 
<br>
#
<br>
# compilations are done with $(CC) $(C_INC) $(CFLAGS) or
<br>
#                            $(CC) $(CFLAGS)
<br>
# linking is done with       $(CLINK) $(C_LIB) $(CLINKFLAGS)
<br>
#---------------------------------------------------------------------------
<br>

<br>
#---------------------------------------------------------------------------
<br>
# This is the C compiler used for C programs
<br>
#---------------------------------------------------------------------------
<br>
CC = cc
<br>
# This links C programs; usually the same as ${CC}
<br>
CLINK    = $(CC)
<br>

<br>
#---------------------------------------------------------------------------
<br>
# These macros are passed to the linker 
<br>
#---------------------------------------------------------------------------
<br>
C_LIB  = -lm
<br>

<br>
#---------------------------------------------------------------------------
<br>
# These macros are passed to the compiler 
<br>
#---------------------------------------------------------------------------
<br>
C_INC =
<br>

<br>
#---------------------------------------------------------------------------
<br>
# Global *compile time* flags for C programs
<br>
# DC inspects the following flags (preceded by &quot;-D&quot;):
<br>
#
<br>
# IN_CORE - computes all views and checksums in main memory (if there is 
<br>
# enough memory)
<br>
#
<br>
# VIEW_FILE_OUTPUT - forces DC to write the generated views to disk
<br>
#
<br>
# OPTIMIZATION - turns on some nonstandard DC optimizations
<br>
#
<br>
# _FILE_OFFSET_BITS=64 
<br>
# _LARGEFILE64_SOURCE - are standard compiler flags which allow to work with 
<br>
# files larger than 2GB.
<br>
#---------------------------------------------------------------------------
<br>
CFLAGS    = -O
<br>

<br>
#---------------------------------------------------------------------------
<br>
# Global *link time* flags. Flags for increasing maximum executable 
<br>
# size usually go here. 
<br>
#---------------------------------------------------------------------------
<br>
CLINKFLAGS = -O
<br>

<br>

<br>
#---------------------------------------------------------------------------
<br>
# Utilities C:
<br>
#
<br>
# This is the C compiler used to compile C utilities.  Flags required by 
<br>
# this compiler go here also; typically there are few flags required; hence 
<br>
# there are no separate macros provided for such flags.
<br>
#---------------------------------------------------------------------------
<br>
UCC    = cc
<br>

<br>

<br>
#---------------------------------------------------------------------------
<br>
# Destination of executables, relative to subdirs of the main directory. . 
<br>
#---------------------------------------------------------------------------
<br>
BINDIR    = ../bin
<br>

<br>

<br>
#---------------------------------------------------------------------------
<br>
# The variable RAND controls which random number generator 
<br>
# is used. It is described in detail in README.install. 
<br>
# Use &quot;randi8&quot; unless there is a reason to use another one. 
<br>
# Other allowed values are &quot;randi8_safe&quot;, &quot;randdp&quot; and &quot;randdpvec&quot;
<br>
#---------------------------------------------------------------------------
<br>
RAND   = randi8
<br>
# The following is highly reliable but may be slow:
<br>
# RAND   = randdp
<br>

<br>

<br>
#---------------------------------------------------------------------------
<br>
# The variable WTIME is the name of the wtime source code module in the
<br>
# common directory.  
<br>
# For most machines,       use wtime.c
<br>
# For SGI power challenge: use wtime_sgi64.c
<br>
#---------------------------------------------------------------------------
<br>
WTIME  = wtime.c
<br>

<br>

<br>
#---------------------------------------------------------------------------
<br>
# Enable if either Cray (not Cray-X1) or IBM: 
<br>
# (no such flag for most machines: see common/wtime.h)
<br>
# This is used by the C compiler to pass the machine name to common/wtime.h,
<br>
# where the C/Fortran binding interface format is determined
<br>
#---------------------------------------------------------------------------
<br>
# MACHINE    =    -DCRAY
<br>
# MACHINE    =    -DIBM
<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22621.php">Reuti: "Re: [OMPI users] linker library file for both fortran and c compilers"</a>
<li><strong>Previous message:</strong> <a href="22619.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22621.php">Reuti: "Re: [OMPI users] linker library file for both fortran and c compilers"</a>
<li><strong>Reply:</strong> <a href="22621.php">Reuti: "Re: [OMPI users] linker library file for both fortran and c compilers"</a>
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
