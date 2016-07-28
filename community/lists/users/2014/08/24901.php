<?
$subject_val = "[OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 14:09:18 2014" -->
<!-- isoreceived="20140804180918" -->
<!-- sent="Mon, 4 Aug 2014 14:09:16 -0400" -->
<!-- isosent="20140804180916" -->
<!-- name="Dan Shell" -->
<!-- email="dshellwireless_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="CAHhAqLHh4cAGcoQARtqNML9OQT7+ZZ9iAxxbOt=cSsWM1SUNkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.8.1 gfortran not working<br>
<strong>From:</strong> Dan Shell (<em>dshellwireless_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 14:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24902.php">Ralph Castain: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24900.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24902.php">Ralph Castain: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24902.php">Ralph Castain: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;openmpi
<br>
<p>I have the following env variables set
<br>
export OMPI_CC=gcc
<br>
echo $OMPI_CC
<br>
export OMPI_CXX=g++
<br>
echo $OMPI_CXX
<br>
export OMPI_F77=gfortran
<br>
echo $OMPI_F77
<br>
export OMPI_FC=gfortran
<br>
echo $OMPI_FC
<br>
<p>I run the configure script
<br>
See fortran section below
<br>
Looks like mpifort should be configure
<br>
<span class="quotelev1">&gt;From what I can tell make install is fine
</span><br>
When I goto the command line and type mpifort I get the wrapper.txt error
<br>
message:
<br>
&nbsp;&quot;No underlying compiler was specified in the wrapper compiler data file&quot;
<br>
mpifort.wrapper.txt is in the right place
<br>
<p>gfortran is installed correctly on unbuntu 10 linux PC
<br>
<p>Any help is greatly appreciated
<br>
Dan Shell
<br>
<p>** Fortran compiler
<br>
checking for gfortran... gfortran
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether gfortran accepts -g... yes
<br>
checking whether ln -s works... yes
<br>
checking if Fortran compiler works... yes
<br>
checking for extra arguments to build a shared library... none needed
<br>
checking for Fortran flag to compile .f files... none
<br>
checking for Fortran flag to compile .f90 files... none
<br>
checking to see if Fortran compilers need additional linker flags... none
<br>
checking  external symbol convention... single underscore
<br>
checking if C and Fortran are link compatible... yes
<br>
checking to see if Fortran compiler likes the C++ exception flags...
<br>
skipped (no C++ exceptions flags)
<br>
checking to see if mpifort compiler needs additional linker flags... none
<br>
checking if Fortran compiler supports CHARACTER... yes
<br>
checking size of Fortran CHARACTER... 1
<br>
checking for C type corresponding to CHARACTER... char
<br>
checking alignment of Fortran CHARACTER... 1
<br>
checking for corresponding KIND value of CHARACTER... C_SIGNED_CHAR
<br>
checking KIND value of Fortran C_SIGNED_CHAR... 1
<br>
checking if Fortran compiler supports LOGICAL... yes
<br>
checking size of Fortran LOGICAL... 4
<br>
checking for C type corresponding to LOGICAL... int
<br>
checking alignment of Fortran LOGICAL... 4
<br>
checking for corresponding KIND value of LOGICAL... C_INT
<br>
checking KIND value of Fortran C_INT... 4
<br>
checking if Fortran compiler supports LOGICAL*1... yes
<br>
checking size of Fortran LOGICAL*1... 1
<br>
checking for C type corresponding to LOGICAL*1... char
<br>
checking alignment of Fortran LOGICAL*1... 1
<br>
checking for corresponding KIND value of LOGICAL*1... C_SIGNED_CHAR
<br>
checking KIND value of Fortran C_SIGNED_CHAR... (cached) 1
<br>
checking if Fortran compiler supports LOGICAL*2... yes
<br>
checking size of Fortran LOGICAL*2... 2
<br>
checking for C type corresponding to LOGICAL*2... short
<br>
checking alignment of Fortran LOGICAL*2... 2
<br>
checking for corresponding KIND value of LOGICAL*2... C_SHORT
<br>
checking KIND value of Fortran C_SHORT... 2
<br>
checking if Fortran compiler supports LOGICAL*4... yes
<br>
checking size of Fortran LOGICAL*4... 4
<br>
checking for C type corresponding to LOGICAL*4... int
<br>
checking alignment of Fortran LOGICAL*4... 4
<br>
checking for corresponding KIND value of LOGICAL*4... C_INT
<br>
checking KIND value of Fortran C_INT... (cached) 4
<br>
checking if Fortran compiler supports LOGICAL*8... yes
<br>
checking size of Fortran LOGICAL*8... 8
<br>
checking for C type corresponding to LOGICAL*8... long long
<br>
checking alignment of Fortran LOGICAL*8... 8
<br>
checking for corresponding KIND value of LOGICAL*8... C_LONG_LONG
<br>
checking KIND value of Fortran C_LONG_LONG... 8
<br>
checking if Fortran compiler supports INTEGER... yes
<br>
checking size of Fortran INTEGER... 4
<br>
checking for C type corresponding to INTEGER... int
<br>
checking alignment of Fortran INTEGER... 4
<br>
checking for corresponding KIND value of INTEGER... C_INT
<br>
checking KIND value of Fortran C_INT... (cached) 4
<br>
checking if Fortran compiler supports INTEGER*1... yes
<br>
checking size of Fortran INTEGER*1... 1
<br>
checking for C type corresponding to INTEGER*1... char
<br>
checking alignment of Fortran INTEGER*1... 1
<br>
checking for corresponding KIND value of INTEGER*1... C_SIGNED_CHAR
<br>
checking KIND value of Fortran C_SIGNED_CHAR... (cached) 1
<br>
checking if Fortran compiler supports INTEGER*2... yes
<br>
checking size of Fortran INTEGER*2... 2
<br>
checking for C type corresponding to INTEGER*2... short
<br>
checking alignment of Fortran INTEGER*2... 2
<br>
checking for corresponding KIND value of INTEGER*2... C_SHORT
<br>
checking KIND value of Fortran C_SHORT... (cached) 2
<br>
checking if Fortran compiler supports INTEGER*4... yes
<br>
checking size of Fortran INTEGER*4... 4
<br>
checking for C type corresponding to INTEGER*4... int
<br>
checking alignment of Fortran INTEGER*4... 4
<br>
checking for corresponding KIND value of INTEGER*4... C_INT
<br>
checking KIND value of Fortran C_INT... (cached) 4
<br>
checking if Fortran compiler supports INTEGER*8... yes
<br>
checking size of Fortran INTEGER*8... 8
<br>
checking for C type corresponding to INTEGER*8... long long
<br>
checking alignment of Fortran INTEGER*8... 8
<br>
checking for corresponding KIND value of INTEGER*8... C_LONG_LONG
<br>
checking KIND value of Fortran C_LONG_LONG... (cached) 8
<br>
checking if Fortran compiler supports INTEGER*16... no
<br>
checking if Fortran compiler supports REAL... yes
<br>
checking size of Fortran REAL... 4
<br>
checking for C type corresponding to REAL... float
<br>
checking alignment of Fortran REAL... 4
<br>
checking for corresponding KIND value of REAL... C_FLOAT
<br>
checking KIND value of Fortran C_FLOAT... 4
<br>
checking if Fortran compiler supports REAL*2... no
<br>
checking if Fortran compiler supports REAL*4... yes
<br>
checking size of Fortran REAL*4... 4
<br>
checking for C type corresponding to REAL*4... float
<br>
checking alignment of Fortran REAL*4... 4
<br>
checking for corresponding KIND value of REAL*4... C_FLOAT
<br>
checking KIND value of Fortran C_FLOAT... (cached) 4
<br>
checking if Fortran compiler supports REAL*8... yes
<br>
checking size of Fortran REAL*8... 8
<br>
checking for C type corresponding to REAL*8... double
<br>
checking alignment of Fortran REAL*8... 8
<br>
checking for corresponding KIND value of REAL*8... C_DOUBLE
<br>
checking KIND value of Fortran C_DOUBLE... 8
<br>
checking if Fortran compiler supports REAL*16... no
<br>
checking for C type matching bit representation of REAL*16... skipped (no
<br>
REAL*16)
<br>
checking if Fortran compiler supports DOUBLE PRECISION... yes
<br>
checking size of Fortran DOUBLE PRECISION... 8
<br>
checking for C type corresponding to DOUBLE PRECISION... double
<br>
checking alignment of Fortran DOUBLE PRECISION... 8
<br>
checking for corresponding KIND value of DOUBLE PRECISION... C_DOUBLE
<br>
checking KIND value of Fortran C_DOUBLE... (cached) 8
<br>
checking if Fortran compiler supports COMPLEX... yes
<br>
checking size of Fortran COMPLEX... 8
<br>
checking for C type corresponding to COMPLEX... float _Complex
<br>
checking alignment of Fortran COMPLEX... 4
<br>
checking for corresponding KIND value of COMPLEX... C_FLOAT_COMPLEX
<br>
checking KIND value of Fortran C_FLOAT_COMPLEX... 4
<br>
checking if Fortran compiler supports COMPLEX*4... no
<br>
checking if Fortran compiler supports COMPLEX*8... yes
<br>
checking size of Fortran COMPLEX*8... 8
<br>
checking for C type corresponding to COMPLEX*8... float _Complex
<br>
checking alignment of Fortran COMPLEX*8... 4
<br>
checking for corresponding KIND value of COMPLEX*8... C_FLOAT_COMPLEX
<br>
checking KIND value of Fortran C_FLOAT_COMPLEX... (cached) 4
<br>
checking if Fortran compiler supports COMPLEX*16... yes
<br>
checking size of Fortran COMPLEX*16... 16
<br>
checking for C type corresponding to COMPLEX*16... double _Complex
<br>
checking alignment of Fortran COMPLEX*16... 8
<br>
checking for corresponding KIND value of COMPLEX*16... C_DOUBLE_COMPLEX
<br>
checking KIND value of Fortran C_DOUBLE_COMPLEX... 8
<br>
checking if Fortran compiler supports COMPLEX*32... no
<br>
checking if Fortran compiler supports DOUBLE COMPLEX... yes
<br>
checking size of Fortran DOUBLE COMPLEX... 16
<br>
checking for C type corresponding to DOUBLE COMPLEX... double _Complex
<br>
checking alignment of Fortran DOUBLE COMPLEX... 8
<br>
checking for corresponding KIND value of DOUBLE COMPLEX... C_DOUBLE_COMPLEX
<br>
checking KIND value of Fortran C_DOUBLE_COMPLEX... (cached) 8
<br>
checking for max Fortran MPI handle index... 2147483647
<br>
checking Fortran value for .TRUE. logical type... 1
<br>
checking for correct handling of Fortran logical arrays... yes
<br>
checking for the value of MPI_STATUS_SIZE... 5 Fortran INTEGERs
<br>
checking KIND value of Fortran C_INT16_T... 2
<br>
checking KIND value of Fortran C_INT32_T... 4
<br>
checking KIND value of Fortran C_INT64_T... 8
<br>
checking if building Fortran mpif.h bindings... yes
<br>
checking for Fortran compiler module include flag... -I
<br>
checking Fortran compiler ignore TKR syntax... not cached; checking variants
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
<br>
checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
<br>
checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
<br>
checking for Fortran compiler support of !DIR$ IGNORE_TKR... no
<br>
checking for Fortran compiler support of !IBM* IGNORE_TKR... no
<br>
checking Fortran compiler ignore TKR syntax... 0:real:!
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
checking if building Fortran 'use mpi_f08' bindings... no
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24901/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24902.php">Ralph Castain: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24900.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24902.php">Ralph Castain: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24902.php">Ralph Castain: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
