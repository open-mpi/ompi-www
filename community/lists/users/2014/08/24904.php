<?
$subject_val = "Re: [OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 16:38:09 2014" -->
<!-- isoreceived="20140804203809" -->
<!-- sent="Mon, 04 Aug 2014 16:39:14 -0400" -->
<!-- isosent="20140804203914" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="53DFEF72.6030005_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1DD5003595D249AB922B04AFDA121421_at_WDC" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 16:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24905.php">Syed Ahsan Ali: "[OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24911.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24911.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2"> &gt;&gt; I have the following env variables set export OMPI_CC=gcc echo
</span><br>
<span class="quotelev2"> &gt;&gt; $OMPI_CC export OMPI_CXX=g++ echo $OMPI_CXX export OMPI_F77=gfortran
</span><br>
<span class="quotelev2"> &gt;&gt; echo $OMPI_F77 export OMPI_FC=gfortran echo $OMPI_FC
</span><br>
<p>Dan
<br>
<p>Have you tried to set/export the compilers without the &quot;OMPI_&quot; prefix?
<br>
(CC, CXX, FC)
<br>
Then &quot;make distclean; configure; make; make install&quot;.
<br>
<p>Gus Correa
<br>
<p><p>On 08/04/2014 04:10 PM, Dan Shell wrote:
<br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; Ok
</span><br>
<span class="quotelev1">&gt; I will give that a try
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Dan Shell
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 04, 2014 3:11 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi 1.8.1 gfortran not working
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know there were some lingering issues in 1.8.1 - you might want to try the
</span><br>
<span class="quotelev1">&gt; latest nightly 1.8 tarball as I believe things have been fixed now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2014, at 11:09 AM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the following env variables set export OMPI_CC=gcc echo
</span><br>
<span class="quotelev2">&gt;&gt; $OMPI_CC export OMPI_CXX=g++ echo $OMPI_CXX export OMPI_F77=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; echo $OMPI_F77 export OMPI_FC=gfortran echo $OMPI_FC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run the configure script
</span><br>
<span class="quotelev2">&gt;&gt; See fortran section below
</span><br>
<span class="quotelev2">&gt;&gt; Looks like mpifort should be configure From what I can tell make
</span><br>
<span class="quotelev2">&gt;&gt; install is fine When I goto the command line and type mpifort I get
</span><br>
<span class="quotelev2">&gt;&gt; the wrapper.txt error
</span><br>
<span class="quotelev2">&gt;&gt; message:
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;No underlying compiler was specified in the wrapper compiler data file&quot;
</span><br>
<span class="quotelev2">&gt;&gt; mpifort.wrapper.txt is in the right place
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gfortran is installed correctly on unbuntu 10 linux PC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help is greatly appreciated
</span><br>
<span class="quotelev2">&gt;&gt; Dan Shell
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ** Fortran compiler
</span><br>
<span class="quotelev2">&gt;&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU Fortran compiler... yes checking
</span><br>
<span class="quotelev2">&gt;&gt; whether gfortran accepts -g... yes checking whether ln -s works... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler works... yes checking for extra arguments
</span><br>
<span class="quotelev2">&gt;&gt; to build a shared library... none needed checking for Fortran flag to
</span><br>
<span class="quotelev2">&gt;&gt; compile .f files... none checking for Fortran flag to compile .f90
</span><br>
<span class="quotelev2">&gt;&gt; files... none checking to see if Fortran compilers need additional
</span><br>
<span class="quotelev2">&gt;&gt; linker flags... none checking  external symbol convention... single
</span><br>
<span class="quotelev2">&gt;&gt; underscore checking if C and Fortran are link compatible... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking to see if Fortran compiler likes the C++ exception flags...
</span><br>
<span class="quotelev2">&gt;&gt; skipped (no C++ exceptions flags) checking to see if mpifort compiler
</span><br>
<span class="quotelev2">&gt;&gt; needs additional linker flags... none checking if Fortran compiler
</span><br>
<span class="quotelev2">&gt;&gt; supports CHARACTER... yes checking size of Fortran CHARACTER... 1
</span><br>
<span class="quotelev2">&gt;&gt; checking for C type corresponding to CHARACTER... char checking
</span><br>
<span class="quotelev2">&gt;&gt; alignment of Fortran CHARACTER... 1 checking for corresponding KIND
</span><br>
<span class="quotelev2">&gt;&gt; value of CHARACTER... C_SIGNED_CHAR checking KIND value of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; C_SIGNED_CHAR... 1 checking if Fortran compiler supports LOGICAL...
</span><br>
<span class="quotelev2">&gt;&gt; yes checking size of Fortran LOGICAL... 4 checking for C type
</span><br>
<span class="quotelev2">&gt;&gt; corresponding to LOGICAL... int checking alignment of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; LOGICAL... 4 checking for corresponding KIND value of LOGICAL... C_INT
</span><br>
<span class="quotelev2">&gt;&gt; checking KIND value of Fortran C_INT... 4 checking if Fortran compiler
</span><br>
<span class="quotelev2">&gt;&gt; supports LOGICAL*1... yes checking size of Fortran LOGICAL*1... 1
</span><br>
<span class="quotelev2">&gt;&gt; checking for C type corresponding to LOGICAL*1... char checking
</span><br>
<span class="quotelev2">&gt;&gt; alignment of Fortran LOGICAL*1... 1 checking for corresponding KIND
</span><br>
<span class="quotelev2">&gt;&gt; value of LOGICAL*1... C_SIGNED_CHAR checking KIND value of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; C_SIGNED_CHAR... (cached) 1 checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; LOGICAL*2... yes checking size of Fortran LOGICAL*2... 2 checking for
</span><br>
<span class="quotelev2">&gt;&gt; C type corresponding to LOGICAL*2... short checking alignment of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran LOGICAL*2... 2 checking for corresponding KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; LOGICAL*2... C_SHORT checking KIND value of Fortran C_SHORT... 2
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler supports LOGICAL*4... yes checking size
</span><br>
<span class="quotelev2">&gt;&gt; of Fortran LOGICAL*4... 4 checking for C type corresponding to
</span><br>
<span class="quotelev2">&gt;&gt; LOGICAL*4... int checking alignment of Fortran LOGICAL*4... 4 checking
</span><br>
<span class="quotelev2">&gt;&gt; for corresponding KIND value of LOGICAL*4... C_INT checking KIND value
</span><br>
<span class="quotelev2">&gt;&gt; of Fortran C_INT... (cached) 4 checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; LOGICAL*8... yes checking size of Fortran LOGICAL*8... 8 checking for
</span><br>
<span class="quotelev2">&gt;&gt; C type corresponding to LOGICAL*8... long long checking alignment of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran LOGICAL*8... 8 checking for corresponding KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; LOGICAL*8... C_LONG_LONG checking KIND value of Fortran C_LONG_LONG...
</span><br>
<span class="quotelev2">&gt;&gt; 8 checking if Fortran compiler supports INTEGER... yes checking size
</span><br>
<span class="quotelev2">&gt;&gt; of Fortran INTEGER... 4 checking for C type corresponding to
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER... int checking alignment of Fortran INTEGER... 4 checking for
</span><br>
<span class="quotelev2">&gt;&gt; corresponding KIND value of INTEGER... C_INT checking KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran C_INT... (cached) 4 checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER*1... yes checking size of Fortran INTEGER*1... 1 checking for
</span><br>
<span class="quotelev2">&gt;&gt; C type corresponding to INTEGER*1... char checking alignment of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran INTEGER*1... 1 checking for corresponding KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER*1... C_SIGNED_CHAR checking KIND value of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; C_SIGNED_CHAR... (cached) 1 checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER*2... yes checking size of Fortran INTEGER*2... 2 checking for
</span><br>
<span class="quotelev2">&gt;&gt; C type corresponding to INTEGER*2... short checking alignment of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran INTEGER*2... 2 checking for corresponding KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER*2... C_SHORT checking KIND value of Fortran C_SHORT...
</span><br>
<span class="quotelev2">&gt;&gt; (cached) 2 checking if Fortran compiler supports INTEGER*4... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking size of Fortran INTEGER*4... 4 checking for C type
</span><br>
<span class="quotelev2">&gt;&gt; corresponding to INTEGER*4... int checking alignment of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER*4... 4 checking for corresponding KIND value of INTEGER*4...
</span><br>
<span class="quotelev2">&gt;&gt; C_INT checking KIND value of Fortran C_INT... (cached) 4 checking if
</span><br>
<span class="quotelev2">&gt;&gt; Fortran compiler supports INTEGER*8... yes checking size of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER*8... 8 checking for C type corresponding to INTEGER*8... long
</span><br>
<span class="quotelev2">&gt;&gt; long checking alignment of Fortran INTEGER*8... 8 checking for
</span><br>
<span class="quotelev2">&gt;&gt; corresponding KIND value of INTEGER*8... C_LONG_LONG checking KIND
</span><br>
<span class="quotelev2">&gt;&gt; value of Fortran C_LONG_LONG... (cached) 8 checking if Fortran
</span><br>
<span class="quotelev2">&gt;&gt; compiler supports INTEGER*16... no checking if Fortran compiler
</span><br>
<span class="quotelev2">&gt;&gt; supports REAL... yes checking size of Fortran REAL... 4 checking for C
</span><br>
<span class="quotelev2">&gt;&gt; type corresponding to REAL... float checking alignment of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; REAL... 4 checking for corresponding KIND value of REAL... C_FLOAT
</span><br>
<span class="quotelev2">&gt;&gt; checking KIND value of Fortran C_FLOAT... 4 checking if Fortran
</span><br>
<span class="quotelev2">&gt;&gt; compiler supports REAL*2... no checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; REAL*4... yes checking size of Fortran REAL*4... 4 checking for C type
</span><br>
<span class="quotelev2">&gt;&gt; corresponding to REAL*4... float checking alignment of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; REAL*4... 4 checking for corresponding KIND value of REAL*4... C_FLOAT
</span><br>
<span class="quotelev2">&gt;&gt; checking KIND value of Fortran C_FLOAT... (cached) 4 checking if
</span><br>
<span class="quotelev2">&gt;&gt; Fortran compiler supports REAL*8... yes checking size of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; REAL*8... 8 checking for C type corresponding to REAL*8... double
</span><br>
<span class="quotelev2">&gt;&gt; checking alignment of Fortran REAL*8... 8 checking for corresponding
</span><br>
<span class="quotelev2">&gt;&gt; KIND value of REAL*8... C_DOUBLE checking KIND value of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; C_DOUBLE... 8 checking if Fortran compiler supports REAL*16... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for C type matching bit representation of REAL*16... skipped
</span><br>
<span class="quotelev2">&gt;&gt; (no REAL*16) checking if Fortran compiler supports DOUBLE PRECISION...
</span><br>
<span class="quotelev2">&gt;&gt; yes checking size of Fortran DOUBLE PRECISION... 8 checking for C type
</span><br>
<span class="quotelev2">&gt;&gt; corresponding to DOUBLE PRECISION... double checking alignment of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran DOUBLE PRECISION... 8 checking for corresponding KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; DOUBLE PRECISION... C_DOUBLE checking KIND value of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; C_DOUBLE... (cached) 8 checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX... yes checking size of Fortran COMPLEX... 8 checking for C
</span><br>
<span class="quotelev2">&gt;&gt; type corresponding to COMPLEX... float _Complex checking alignment of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran COMPLEX... 4 checking for corresponding KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX... C_FLOAT_COMPLEX checking KIND value of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; C_FLOAT_COMPLEX... 4 checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX*4... no checking if Fortran compiler supports COMPLEX*8... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking size of Fortran COMPLEX*8... 8 checking for C type
</span><br>
<span class="quotelev2">&gt;&gt; corresponding to COMPLEX*8... float _Complex checking alignment of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran COMPLEX*8... 4 checking for corresponding KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX*8... C_FLOAT_COMPLEX checking KIND value of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; C_FLOAT_COMPLEX... (cached) 4 checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX*16... yes checking size of Fortran COMPLEX*16... 16 checking
</span><br>
<span class="quotelev2">&gt;&gt; for C type corresponding to COMPLEX*16... double _Complex checking
</span><br>
<span class="quotelev2">&gt;&gt; alignment of Fortran COMPLEX*16... 8 checking for corresponding KIND
</span><br>
<span class="quotelev2">&gt;&gt; value of COMPLEX*16... C_DOUBLE_COMPLEX checking KIND value of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; C_DOUBLE_COMPLEX... 8 checking if Fortran compiler supports
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX*32... no checking if Fortran compiler supports DOUBLE
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX... yes checking size of Fortran DOUBLE COMPLEX... 16 checking
</span><br>
<span class="quotelev2">&gt;&gt; for C type corresponding to DOUBLE COMPLEX... double _Complex checking
</span><br>
<span class="quotelev2">&gt;&gt; alignment of Fortran DOUBLE COMPLEX... 8 checking for corresponding
</span><br>
<span class="quotelev2">&gt;&gt; KIND value of DOUBLE COMPLEX... C_DOUBLE_COMPLEX checking KIND value
</span><br>
<span class="quotelev2">&gt;&gt; of Fortran C_DOUBLE_COMPLEX... (cached) 8 checking for max Fortran MPI
</span><br>
<span class="quotelev2">&gt;&gt; handle index... 2147483647 checking Fortran value for .TRUE. logical
</span><br>
<span class="quotelev2">&gt;&gt; type... 1 checking for correct handling of Fortran logical arrays...
</span><br>
<span class="quotelev2">&gt;&gt; yes checking for the value of MPI_STATUS_SIZE... 5 Fortran INTEGERs
</span><br>
<span class="quotelev2">&gt;&gt; checking KIND value of Fortran C_INT16_T... 2 checking KIND value of
</span><br>
<span class="quotelev2">&gt;&gt; Fortran C_INT32_T... 4 checking KIND value of Fortran C_INT64_T... 8
</span><br>
<span class="quotelev2">&gt;&gt; checking if building Fortran mpif.h bindings... yes checking for
</span><br>
<span class="quotelev2">&gt;&gt; Fortran compiler module include flag... -I checking Fortran compiler
</span><br>
<span class="quotelev2">&gt;&gt; ignore TKR syntax... not cached; checking variants checking for
</span><br>
<span class="quotelev2">&gt;&gt; Fortran compiler support of TYPE(*), DIMENSION(*)... no checking for
</span><br>
<span class="quotelev2">&gt;&gt; Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for Fortran compiler support of !IBM* IGNORE_TKR... no
</span><br>
<span class="quotelev2">&gt;&gt; checking Fortran compiler ignore TKR syntax... 0:real:!
</span><br>
<span class="quotelev2">&gt;&gt; checking if building Fortran 'use mpi' bindings... yes checking if
</span><br>
<span class="quotelev2">&gt;&gt; building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24905.php">Syed Ahsan Ali: "[OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24903.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24911.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24911.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
