<?
$subject_val = "Re: [OMPI users] linker library file for both fortran and c compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  8 07:43:49 2013" -->
<!-- isoreceived="20130908114349" -->
<!-- sent="Sun, 8 Sep 2013 13:43:36 +0200" -->
<!-- isosent="20130908114336" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] linker library file for both fortran and c compilers" -->
<!-- id="C5645B3C-0C3D-4AAC-94FA-5D7E8CB8A8EF_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DUB115-W92A1B757FB0B3101043874AB3D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] linker library file for both fortran and c compilers<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-08 07:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22622.php">Max Staufer: "[OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="22620.php">basma a.azeem: "[OMPI users] linker library file for both fortran and c compilers"</a>
<li><strong>In reply to:</strong> <a href="22620.php">basma a.azeem: "[OMPI users] linker library file for both fortran and c compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 08.09.2013 um 00:44 schrieb basma a.azeem:
<br>
<p><span class="quotelev1">&gt; sorry for the trivial question
</span><br>
<span class="quotelev1">&gt; i am new to open mpi and parallel computing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i installed openmpi-1.6.1 on my pc which has an ubuntu 12.10
</span><br>
<span class="quotelev1">&gt; also i have nas parallel benchmark , i need to edit the NPB make file &quot;make.def&quot; 
</span><br>
<p>What about using:
<br>
<p>F77 = mpif77
<br>
<p>resp.
<br>
<p>CC = mpicc
<br>
<p>which should supply the paths and names automatically.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; i need to know what is the linker library file for both fortran and c compilers and where i can find them in the build folder ( i think i should find them in lib folder )
</span><br>
<span class="quotelev1">&gt; it is F_LIB   and   C_LIB that are required
</span><br>
<span class="quotelev1">&gt; this is the NPB make file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #                SITE- AND/OR PLATFORM-SPECIFIC DEFINITIONS. 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Items in this file will need to be changed for each platform.
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Parallel Fortran:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # For CG, EP, FT, MG, LU, SP, BT and UA, which are in Fortran, the following 
</span><br>
<span class="quotelev1">&gt; # must be defined:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # F77        - Fortran compiler
</span><br>
<span class="quotelev1">&gt; # FFLAGS     - Fortran compilation arguments
</span><br>
<span class="quotelev1">&gt; # F_INC      - any -I arguments required for compiling Fortran 
</span><br>
<span class="quotelev1">&gt; # FLINK      - Fortran linker
</span><br>
<span class="quotelev1">&gt; # FLINKFLAGS - Fortran linker arguments
</span><br>
<span class="quotelev1">&gt; # F_LIB      - any -L and -l arguments required for linking Fortran 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; # compilations are done with $(F77) $(F_INC) $(FFLAGS) or
</span><br>
<span class="quotelev1">&gt; #                            $(F77) $(FFLAGS)
</span><br>
<span class="quotelev1">&gt; # linking is done with       $(FLINK) $(F_LIB) $(FLINKFLAGS)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # This is the fortran compiler used for Fortran programs
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; F77 = f77
</span><br>
<span class="quotelev1">&gt; # This links fortran programs; usually the same as ${F77}
</span><br>
<span class="quotelev1">&gt; FLINK    = $(F77)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # These macros are passed to the linker 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; F_LIB  =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # These macros are passed to the compiler 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; F_INC =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Global *compile time* flags for Fortran programs
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; FFLAGS    = -O
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Global *link time* flags. Flags for increasing maximum executable 
</span><br>
<span class="quotelev1">&gt; # size usually go here. 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; FLINKFLAGS = -O
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Parallel C:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # For IS and DC, which are in C, the following must be defined:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # CC         - C compiler 
</span><br>
<span class="quotelev1">&gt; # CFLAGS     - C compilation arguments
</span><br>
<span class="quotelev1">&gt; # C_INC      - any -I arguments required for compiling C 
</span><br>
<span class="quotelev1">&gt; # CLINK      - C linker
</span><br>
<span class="quotelev1">&gt; # CLINKFLAGS - C linker flags
</span><br>
<span class="quotelev1">&gt; # C_LIB      - any -L and -l arguments required for linking C 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # compilations are done with $(CC) $(C_INC) $(CFLAGS) or
</span><br>
<span class="quotelev1">&gt; #                            $(CC) $(CFLAGS)
</span><br>
<span class="quotelev1">&gt; # linking is done with       $(CLINK) $(C_LIB) $(CLINKFLAGS)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # This is the C compiler used for C programs
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; CC = cc
</span><br>
<span class="quotelev1">&gt; # This links C programs; usually the same as ${CC}
</span><br>
<span class="quotelev1">&gt; CLINK    = $(CC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # These macros are passed to the linker 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; C_LIB  = -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # These macros are passed to the compiler 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; C_INC =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Global *compile time* flags for C programs
</span><br>
<span class="quotelev1">&gt; # DC inspects the following flags (preceded by &quot;-D&quot;):
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # IN_CORE - computes all views and checksums in main memory (if there is 
</span><br>
<span class="quotelev1">&gt; # enough memory)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # VIEW_FILE_OUTPUT - forces DC to write the generated views to disk
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # OPTIMIZATION - turns on some nonstandard DC optimizations
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # _FILE_OFFSET_BITS=64 
</span><br>
<span class="quotelev1">&gt; # _LARGEFILE64_SOURCE - are standard compiler flags which allow to work with 
</span><br>
<span class="quotelev1">&gt; # files larger than 2GB.
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; CFLAGS    = -O
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Global *link time* flags. Flags for increasing maximum executable 
</span><br>
<span class="quotelev1">&gt; # size usually go here. 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; CLINKFLAGS = -O
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Utilities C:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # This is the C compiler used to compile C utilities.  Flags required by 
</span><br>
<span class="quotelev1">&gt; # this compiler go here also; typically there are few flags required; hence 
</span><br>
<span class="quotelev1">&gt; # there are no separate macros provided for such flags.
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; UCC    = cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Destination of executables, relative to subdirs of the main directory. . 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; BINDIR    = ../bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # The variable RAND controls which random number generator 
</span><br>
<span class="quotelev1">&gt; # is used. It is described in detail in README.install. 
</span><br>
<span class="quotelev1">&gt; # Use &quot;randi8&quot; unless there is a reason to use another one. 
</span><br>
<span class="quotelev1">&gt; # Other allowed values are &quot;randi8_safe&quot;, &quot;randdp&quot; and &quot;randdpvec&quot;
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; RAND   = randi8
</span><br>
<span class="quotelev1">&gt; # The following is highly reliable but may be slow:
</span><br>
<span class="quotelev1">&gt; # RAND   = randdp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # The variable WTIME is the name of the wtime source code module in the
</span><br>
<span class="quotelev1">&gt; # common directory.  
</span><br>
<span class="quotelev1">&gt; # For most machines,       use wtime.c
</span><br>
<span class="quotelev1">&gt; # For SGI power challenge: use wtime_sgi64.c
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WTIME  = wtime.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Enable if either Cray (not Cray-X1) or IBM: 
</span><br>
<span class="quotelev1">&gt; # (no such flag for most machines: see common/wtime.h)
</span><br>
<span class="quotelev1">&gt; # This is used by the C compiler to pass the machine name to common/wtime.h,
</span><br>
<span class="quotelev1">&gt; # where the C/Fortran binding interface format is determined
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # MACHINE    =    -DCRAY
</span><br>
<span class="quotelev1">&gt; # MACHINE    =    -DIBM
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22622.php">Max Staufer: "[OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="22620.php">basma a.azeem: "[OMPI users] linker library file for both fortran and c compilers"</a>
<li><strong>In reply to:</strong> <a href="22620.php">basma a.azeem: "[OMPI users] linker library file for both fortran and c compilers"</a>
<!-- nextthread="start" -->
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
