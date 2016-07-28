<?
$subject_val = "[OMPI devel] MPI_REAL16";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 13:32:17 2009" -->
<!-- isoreceived="20090619173217" -->
<!-- sent="Fri, 19 Jun 2009 13:32:07 -0400" -->
<!-- isosent="20090619173207" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_REAL16" -->
<!-- id="4A3BCB97.8010000_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_REAL16<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 13:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6280.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have compiled Open MPI 1.3.2 with Intel Fortran and C/C++ 11.0 
<br>
compilers. Fortran Real*16 seems to be working except for MPI_Allreduce. 
<br>
I have attached a simple program to show what I mean. I am not an MPI 
<br>
programmer but I work for one and he actually wrote the attached 
<br>
program. The program sets a variable to 1 on all processes then sums.
<br>
<p>Running with real*8 (comment #define REAL16 in quad_test.F) produces the 
<br>
expected results:
<br>
<p>&nbsp;&nbsp;Number of Nodes =            4
<br>
<p>&nbsp;&nbsp;ALLREDUCE sum   =    4.00000000000000
<br>
&nbsp;&nbsp;ALLGATHER sum   =    4.00000000000000
<br>
&nbsp;&nbsp;ISEND/IRECV sum =    4.00000000000000
<br>
<p>&nbsp;&nbsp;Node =            0   Value =    1.00000000000000
<br>
&nbsp;&nbsp;Node =            2   Value =    1.00000000000000
<br>
&nbsp;&nbsp;Node =            3   Value =    1.00000000000000
<br>
&nbsp;&nbsp;Node =            1   Value =    1.00000000000000
<br>
<p>Running with real*16 produces the following:
<br>
<p>&nbsp;&nbsp;Number of Nodes =            4
<br>
<p>&nbsp;&nbsp;ALLREDUCE sum   =    1.00000000000000000000000000000000
<br>
&nbsp;&nbsp;ALLGATHER sum   =    4.00000000000000000000000000000000
<br>
&nbsp;&nbsp;ISEND/IRECV sum =    4.00000000000000000000000000000000
<br>
&nbsp;&nbsp;Node =            0   Value =    1.00000000000000000000000000000000
<br>
&nbsp;&nbsp;Node =            1   Value =    1.00000000000000000000000000000000
<br>
&nbsp;&nbsp;Node =            2   Value =    1.00000000000000000000000000000000
<br>
&nbsp;&nbsp;Node =            3   Value =    1.00000000000000000000000000000000
<br>
<p>As I mentioned, I'm not a parallel programmer but I would expect the 
<br>
similar results from identical operations on  real*8 and real*16 variables.
<br>
<p>NOTE: I get the same behavior with MPICH and MPICH2.
<br>
<p>Dave
<br>
<p>
<br><p>
# Makefile for quadruple MPI communications test.
<br>
#
<br>
<p>NEED_VERSION := 3.80 3.81
<br>
$(if $(filter $(MAKE_VERSION),$(NEED_VERSION)),,        \
<br>
&nbsp;$(error This makefile requires one of GNU make version $(NEED_VERSION).))
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IFORT ?= on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPENMPI ?= on
<br>
<p>ifdef IFORT
<br>
&nbsp;ifdef OPENMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC := /opt/intelsoft/openmpi/bin/mpif90
<br>
#          FFLAGS := -ip -O3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS := -g -check uninit -ftrapuv -traceback
<br>
&nbsp;else
<br>
#              FC := /opt/intelsoft/mpich/bin/mpif90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC := /opt/intelsoft/mpich2/mpich2-1.1/bin/mpif90
<br>
#          FFLAGS := -ip -O3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS := -g -check uninit -ftrapuv -traceback
<br>
&nbsp;endif
<br>
else
<br>
&nbsp;ifdef OPENMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC := /opt/pgisoft/openmpi/bin/mpif90
<br>
#          FFLAGS := -O3 -tp k8-64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS := -g -C
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC := /opt/pgisoft/mpich/bin/mpif90
<br>
#              FC := /opt/pgisoft/mpich2/bin/mpif90
<br>
#          FFLAGS := -O3 -tp k8-64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS := -g -C
<br>
&nbsp;endif
<br>
endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LD := $(FC)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS :=
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AR := ar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ARFLAGS := r
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPP := /usr/bin/cpp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPPFLAGS := -P -traditional
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CLEAN := $(HOME)/bin/cpp_clean
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM := rm -f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERL := perl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEST := test
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clean_list := core *.o *.oo *.inc *.mod *.f90 lib*.a *.bak
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIN := quad_test
<br>
<p>#  Set Pattern rules.
<br>
<p>%.o: %.F
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(FC) -c $(FFLAGS) $(notdir $&lt;)
<br>
<p><p>vpath %.F $(CURDIR)
<br>
vpath %.o $(CURDIR)
<br>
<p><p>OBJS := quad_test.o
<br>
<p>#  Build targets.
<br>
<p><p>.PHONY: all
<br>
<p>all: $(BIN)
<br>
<p>$(BIN): $(OBJS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(FC) $(LDFLAGS) $(OBJS) -o $(BIN)
<br>
<p>#  Clean target.
<br>
<p><p>.PHONY: clean
<br>
<p>clean:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(RM) -r $(clean_list) $(BIN)
<br>
<p>
<br><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROGRAM quad_test
<br>
<p>!     Program to test real*16 (quadruple precision) MPI communications.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>#define REAL16
<br>
<p>#ifdef REAL16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: r16 = selected_real_kind(16,3000)    ! 128-bit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: MP_FLOAT = MPI_REAL16
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: r16 = selected_real_kind(12,300)     ! 64-bit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: MP_FLOAT = MPI_REAL8
<br>
!!    integer, parameter :: MP_FLOAT = MPI_DOUBLE_PRECISION
<br>
#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical :: Master
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: Lstr, MyMaster, MyRank, Nnodes, rank, request
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: MyError, Rerror, Rstatus, Serror, Sstatus
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, allocatable :: Rrequest(:)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(r16) :: a16, asum
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(r16), allocatable :: Arecv(:)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character (len=MPI_MAX_ERROR_STRING) :: string
<br>
!
<br>
!  Initialize MPI.
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_init (MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Unable to initialize MPI.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
!
<br>
!  Get rank of the local process in the group associated with the
<br>
!  communicator.
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_comm_rank (MPI_COMM_WORLD, MyRank, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Unable to inquire rank of local node.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
!
<br>
!  Get number of processes in the group associated with the
<br>
!  communicator.
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_comm_size (MPI_COMM_WORLD, Nnodes, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Unable to inquire of processes in the group.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
!
<br>
!  Identify master node.
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master=.FALSE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyMaster=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyRank.eq.MyMaster) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master=.TRUE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (.not.allocated(Arecv)) allocate ( Arecv(0:Nnodes-1) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (.not.allocated(Rrequest)) allocate ( Rrequest(0:Nnodes-1) )
<br>
!
<br>
!  Initialize variable
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (Master) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a16=1.0_r16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a16=0.0_r16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asum=0.0_r16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arecv=0.0_r16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rrequest=0
<br>
!
<br>
!  Broadcast master value to all nodes.
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_bcast (a16, 1, MP_FLOAT, MyMaster, MPI_COMM_WORLD,       &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Unable to broadcast variable.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
!
<br>
!  Global sum using MPI_ALLREDUCE.
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_allreduce (a16,  asum, 1, MP_FLOAT, MPI_SUM,             &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                    MPI_COMM_WORLD, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Unable to compute global sum using ALLREDUCE.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (Master) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, ' '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Number of Nodes = ', Nnodes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, ' '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'ALLREDUCE sum   = ', asum
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
!
<br>
!  Global sum using MPI_ALLGATHER.
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_allgather (a16, 1, MP_FLOAT,                             &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                    Arecv, 1, MP_FLOAT,                           &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                    MPI_COMM_WORLD, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Unable to compute global sum using ALLGATHER.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asum=0.0_r16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DO rank=0,Nnodes-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asum=asum+Arecv(rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END DO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (Master) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'ALLGATHER sum   = ', asum
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
!
<br>
!  Global sum using IRECV/ISEND.
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyRank.eq.MyMaster) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DO rank=1,Nnodes-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_irecv (Arecv(rank), 1, MP_FLOAT, rank,               &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                    rank+100, MPI_COMM_WORLD, Rrequest(rank),     &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                    MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END DO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asum=a16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DO rank=1,Nnodes-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_wait (Rrequest(rank), Rstatus, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'MPI_IRECV', rank, Rerror, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asum=asum+Arecv(rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END DO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_isend (a16, 1, MP_FLOAT, MyMaster, MyRank+100,         &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                  MPI_COMM_WORLD, request, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_wait (request, Sstatus, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'MPI_ISEND', MyRank, Serror, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_bcast (asum, 1, MP_FLOAT, MyMaster, MPI_COMM_WORLD,      &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'MPI_BCAST', MyRank, MyError, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (Master) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'ISEND/IRECV sum = ', asum
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, ' '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_barrier  (MPI_COMM_WORLD, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Node = ', MyRank, '  Value = ', a16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_barrier  (MPI_COMM_WORLD, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL flush (6)
<br>
!
<br>
!  Terminate MPI communications
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_finalize (MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (MyError.ne.MPI_SUCCESS) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_error_string (MyError, string, Lstr, Serror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, 'Unable to finalize MPI.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT *, string(1:Lstr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (allocated(Arecv)) deallocate ( Arecv )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (allocated(Rrequest)) deallocate ( Rrequest )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END PROGRAM quad_test
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6280.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
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
