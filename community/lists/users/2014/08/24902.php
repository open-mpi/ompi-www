<?
$subject_val = "Re: [OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 15:11:46 2014" -->
<!-- isoreceived="20140804191146" -->
<!-- sent="Mon, 4 Aug 2014 12:11:28 -0700" -->
<!-- isosent="20140804191128" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="26EC76F6-4D47-4AE2-B641-2D2BC36DB473_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHhAqLHh4cAGcoQARtqNML9OQT7+ZZ9iAxxbOt=cSsWM1SUNkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.8.1 gfortran not working<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 15:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24901.php">Dan Shell: "[OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24901.php">Dan Shell: "[OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know there were some lingering issues in 1.8.1 - you might want to try the latest nightly 1.8 tarball as I believe things have been fixed now.
<br>
<p><p>On Aug 4, 2014, at 11:09 AM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the following env variables set
</span><br>
<span class="quotelev1">&gt; export OMPI_CC=gcc
</span><br>
<span class="quotelev1">&gt; echo $OMPI_CC
</span><br>
<span class="quotelev1">&gt; export OMPI_CXX=g++
</span><br>
<span class="quotelev1">&gt; echo $OMPI_CXX
</span><br>
<span class="quotelev1">&gt; export OMPI_F77=gfortran
</span><br>
<span class="quotelev1">&gt; echo $OMPI_F77
</span><br>
<span class="quotelev1">&gt; export OMPI_FC=gfortran 
</span><br>
<span class="quotelev1">&gt; echo $OMPI_FC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run the configure script
</span><br>
<span class="quotelev1">&gt; See fortran section below
</span><br>
<span class="quotelev1">&gt; Looks like mpifort should be configure
</span><br>
<span class="quotelev1">&gt; From what I can tell make install is fine
</span><br>
<span class="quotelev1">&gt; When I goto the command line and type mpifort I get the wrapper.txt error
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev1">&gt;  &quot;No underlying compiler was specified in the wrapper compiler data file&quot;
</span><br>
<span class="quotelev1">&gt; mpifort.wrapper.txt is in the right place 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gfortran is installed correctly on unbuntu 10 linux PC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated
</span><br>
<span class="quotelev1">&gt; Dan Shell
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** Fortran compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking whether ln -s works... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking for extra arguments to build a shared library... none needed
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f90 files... none
</span><br>
<span class="quotelev1">&gt; checking to see if Fortran compilers need additional linker flags... none
</span><br>
<span class="quotelev1">&gt; checking  external symbol convention... single underscore
</span><br>
<span class="quotelev1">&gt; checking if C and Fortran are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking to see if Fortran compiler likes the C++ exception flags... skipped (no C++ exceptions flags)
</span><br>
<span class="quotelev1">&gt; checking to see if mpifort compiler needs additional linker flags... none
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports CHARACTER... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran CHARACTER... 1
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to CHARACTER... char
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran CHARACTER... 1
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of CHARACTER... C_SIGNED_CHAR
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_SIGNED_CHAR... 1
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports LOGICAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran LOGICAL... 4
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to LOGICAL... int
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran LOGICAL... 4
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of LOGICAL... C_INT
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_INT... 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports LOGICAL*1... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran LOGICAL*1... 1
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to LOGICAL*1... char
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran LOGICAL*1... 1
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of LOGICAL*1... C_SIGNED_CHAR
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_SIGNED_CHAR... (cached) 1
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports LOGICAL*2... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran LOGICAL*2... 2
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to LOGICAL*2... short
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran LOGICAL*2... 2
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of LOGICAL*2... C_SHORT
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_SHORT... 2
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports LOGICAL*4... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran LOGICAL*4... 4
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to LOGICAL*4... int
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran LOGICAL*4... 4
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of LOGICAL*4... C_INT
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_INT... (cached) 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports LOGICAL*8... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran LOGICAL*8... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to LOGICAL*8... long long
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran LOGICAL*8... 8
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of LOGICAL*8... C_LONG_LONG
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_LONG_LONG... 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports INTEGER... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran INTEGER... 4
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to INTEGER... int
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran INTEGER... 4
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of INTEGER... C_INT
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_INT... (cached) 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports INTEGER*1... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran INTEGER*1... 1
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to INTEGER*1... char
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran INTEGER*1... 1
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of INTEGER*1... C_SIGNED_CHAR
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_SIGNED_CHAR... (cached) 1
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports INTEGER*2... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran INTEGER*2... 2
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to INTEGER*2... short
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran INTEGER*2... 2
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of INTEGER*2... C_SHORT
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_SHORT... (cached) 2
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports INTEGER*4... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran INTEGER*4... 4
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to INTEGER*4... int
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran INTEGER*4... 4
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of INTEGER*4... C_INT
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_INT... (cached) 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports INTEGER*8... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran INTEGER*8... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to INTEGER*8... long long
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran INTEGER*8... 8
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of INTEGER*8... C_LONG_LONG
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_LONG_LONG... (cached) 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports INTEGER*16... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports REAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran REAL... 4
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to REAL... float
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran REAL... 4
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of REAL... C_FLOAT
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_FLOAT... 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports REAL*2... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports REAL*4... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran REAL*4... 4
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to REAL*4... float
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran REAL*4... 4
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of REAL*4... C_FLOAT
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_FLOAT... (cached) 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports REAL*8... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran REAL*8... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to REAL*8... double
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran REAL*8... 8
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of REAL*8... C_DOUBLE
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_DOUBLE... 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports REAL*16... no
</span><br>
<span class="quotelev1">&gt; checking for C type matching bit representation of REAL*16... skipped (no REAL*16)
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports DOUBLE PRECISION... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran DOUBLE PRECISION... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to DOUBLE PRECISION... double
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran DOUBLE PRECISION... 8
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of DOUBLE PRECISION... C_DOUBLE
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_DOUBLE... (cached) 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports COMPLEX... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran COMPLEX... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to COMPLEX... float _Complex
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran COMPLEX... 4
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of COMPLEX... C_FLOAT_COMPLEX
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_FLOAT_COMPLEX... 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports COMPLEX*4... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports COMPLEX*8... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran COMPLEX*8... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to COMPLEX*8... float _Complex
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran COMPLEX*8... 4
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of COMPLEX*8... C_FLOAT_COMPLEX
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_FLOAT_COMPLEX... (cached) 4
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports COMPLEX*16... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran COMPLEX*16... 16
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to COMPLEX*16... double _Complex
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran COMPLEX*16... 8
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of COMPLEX*16... C_DOUBLE_COMPLEX
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_DOUBLE_COMPLEX... 8
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports COMPLEX*32... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports DOUBLE COMPLEX... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran DOUBLE COMPLEX... 16
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to DOUBLE COMPLEX... double _Complex
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran DOUBLE COMPLEX... 8
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of DOUBLE COMPLEX... C_DOUBLE_COMPLEX
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_DOUBLE_COMPLEX... (cached) 8
</span><br>
<span class="quotelev1">&gt; checking for max Fortran MPI handle index... 2147483647
</span><br>
<span class="quotelev1">&gt; checking Fortran value for .TRUE. logical type... 1
</span><br>
<span class="quotelev1">&gt; checking for correct handling of Fortran logical arrays... yes
</span><br>
<span class="quotelev1">&gt; checking for the value of MPI_STATUS_SIZE... 5 Fortran INTEGERs
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_INT16_T... 2
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_INT32_T... 4
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_INT64_T... 8
</span><br>
<span class="quotelev1">&gt; checking if building Fortran mpif.h bindings... yes
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler module include flag... -I
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking variants
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !IBM* IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 0:real:!
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24901.php">http://www.open-mpi.org/community/lists/users/2014/08/24901.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24901.php">Dan Shell: "[OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24901.php">Dan Shell: "[OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
