<?
$subject_val = "Re: [OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 10:35:44 2014" -->
<!-- isoreceived="20140805143544" -->
<!-- sent="Tue, 5 Aug 2014 14:35:42 +0000" -->
<!-- isosent="20140805143542" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="528F9D37-A8AB-4B65-B249-17456208E6D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8CEBB199E7A4480580A26456E2888577_at_WDC" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 10:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24911.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24911.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dan --
<br>
<p>The version of gfortran that you have does not support the mpi_f08 bindings. Note that:
<br>
<p>- newer versions of gfortran will support the mpi_f08 bindings
<br>
- all versions of gfortran support the mpi module and the mpif.h Fortran bindings
<br>
<p>See the README:
<br>
<p>------
<br>
&nbsp;&nbsp;The following notes apply to the above-listed Fortran bindings:
<br>
<p>&nbsp;&nbsp;- All Fortran compilers support the mpif.h/shmem.fh-based bindings.
<br>
<p>&nbsp;&nbsp;- The level of support provided by the mpi module is based on your
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Fortran compiler.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;If Open MPI is built with a non-GNU Fortran compiler, or if Open
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI is built with the GNU Fortran compiler &gt;= v4.9, all MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subroutines will be prototyped in the mpi module.  All calls to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI subroutines will therefore have their parameter types checked
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at compile time.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;If Open MPI is built with an old gfortran (i.e., &lt; v4.9), a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;limited &quot;mpi&quot; module will be built.  Due to the limitations of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;these compilers, and per guidance from the MPI-3 specification,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all MPI subroutines with &quot;choice&quot; buffers are specifically *not*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;included in the &quot;mpi&quot; module, and their parameters will not be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;checked at compile time.  Specifically, all MPI subroutines with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no &quot;choice&quot; buffers are prototyped and will receive strong
<br>
&nbsp;&nbsp;&nbsp;&nbsp;parameter type checking at run-time (e.g., MPI_INIT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_RANK, etc.).
<br>
<p>&nbsp;&nbsp;- The mpi_f08 module is new and has been tested with the Intel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Fortran compiler and gfortran &gt;= 4.9.  Other modern Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;compilers may also work (but are, as yet, only lightly tested).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It is expected that this support will mature over time.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Many older Fortran compilers do not provide enough modern Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;features to support the mpi_f08 module.  For example, gfortran &lt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;v4.9 does provide enough support for the mpi_f08 module.
<br>
-----
<br>
<p><p>On Aug 5, 2014, at 10:17 AM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gus
</span><br>
<span class="quotelev1">&gt; Ok
</span><br>
<span class="quotelev1">&gt; I will give that a try
</span><br>
<span class="quotelev1">&gt; Thank you for the help
</span><br>
<span class="quotelev1">&gt; Dan Shell
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 04, 2014 4:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi 1.8.1 gfortran not working
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the following env variables set export OMPI_CC=gcc echo  &gt;&gt;
</span><br>
<span class="quotelev1">&gt; $OMPI_CC export OMPI_CXX=g++ echo $OMPI_CXX export OMPI_F77=gfortran  &gt;&gt;
</span><br>
<span class="quotelev1">&gt; echo $OMPI_F77 export OMPI_FC=gfortran echo $OMPI_FC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried to set/export the compilers without the &quot;OMPI_&quot; prefix?
</span><br>
<span class="quotelev1">&gt; (CC, CXX, FC)
</span><br>
<span class="quotelev1">&gt; Then &quot;make distclean; configure; make; make install&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/04/2014 04:10 PM, Dan Shell wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; Ok
</span><br>
<span class="quotelev2">&gt;&gt; I will give that a try
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Dan Shell
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph 
</span><br>
<span class="quotelev2">&gt;&gt; Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, August 04, 2014 3:11 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] openmpi 1.8.1 gfortran not working
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know there were some lingering issues in 1.8.1 - you might want to 
</span><br>
<span class="quotelev2">&gt;&gt; try the latest nightly 1.8 tarball as I believe things have been fixed
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 4, 2014, at 11:09 AM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the following env variables set export OMPI_CC=gcc echo 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $OMPI_CC export OMPI_CXX=g++ echo $OMPI_CXX export OMPI_F77=gfortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo $OMPI_F77 export OMPI_FC=gfortran echo $OMPI_FC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run the configure script
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See fortran section below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like mpifort should be configure From what I can tell make 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install is fine When I goto the command line and type mpifort I get 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the wrapper.txt error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &quot;No underlying compiler was specified in the wrapper compiler data
</span><br>
<span class="quotelev1">&gt; file&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpifort.wrapper.txt is in the right place
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran is installed correctly on unbuntu 10 linux PC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help is greatly appreciated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dan Shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** Fortran compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether we are using the GNU Fortran compiler... yes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether gfortran accepts -g... yes checking whether ln -s 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works... yes checking if Fortran compiler works... yes checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extra arguments to build a shared library... none needed checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran flag to compile .f files... none checking for Fortran flag to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile .f90 files... none checking to see if Fortran compilers need 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional linker flags... none checking  external symbol 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convention... single underscore checking if C and Fortran are link 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compatible... yes checking to see if Fortran compiler likes the C++
</span><br>
<span class="quotelev1">&gt; exception flags...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; skipped (no C++ exceptions flags) checking to see if mpifort compiler 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needs additional linker flags... none checking if Fortran compiler 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports CHARACTER... yes checking size of Fortran CHARACTER... 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C type corresponding to CHARACTER... char checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alignment of Fortran CHARACTER... 1 checking for corresponding KIND 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of CHARACTER... C_SIGNED_CHAR checking KIND value of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_SIGNED_CHAR... 1 checking if Fortran compiler supports LOGICAL...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes checking size of Fortran LOGICAL... 4 checking for C type 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding to LOGICAL... int checking alignment of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOGICAL... 4 checking for corresponding KIND value of LOGICAL... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_INT checking KIND value of Fortran C_INT... 4 checking if Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler supports LOGICAL*1... yes checking size of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOGICAL*1... 1 checking for C type corresponding to LOGICAL*1... char 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking alignment of Fortran LOGICAL*1... 1 checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding KIND value of LOGICAL*1... C_SIGNED_CHAR checking KIND 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of Fortran C_SIGNED_CHAR... (cached) 1 checking if Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler supports LOGICAL*2... yes checking size of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOGICAL*2... 2 checking for C type corresponding to LOGICAL*2... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; short checking alignment of Fortran LOGICAL*2... 2 checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding KIND value of LOGICAL*2... C_SHORT checking KIND value 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Fortran C_SHORT... 2 checking if Fortran compiler supports 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOGICAL*4... yes checking size of Fortran LOGICAL*4... 4 checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C type corresponding to LOGICAL*4... int checking alignment of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran LOGICAL*4... 4 checking for corresponding KIND value of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOGICAL*4... C_INT checking KIND value of Fortran C_INT... (cached) 4 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran compiler supports LOGICAL*8... yes checking size 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Fortran LOGICAL*8... 8 checking for C type corresponding to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOGICAL*8... long long checking alignment of Fortran LOGICAL*8... 8 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for corresponding KIND value of LOGICAL*8... C_LONG_LONG
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_LONG_LONG...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 checking if Fortran compiler supports INTEGER... yes checking size 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Fortran INTEGER... 4 checking for C type corresponding to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTEGER... int checking alignment of Fortran INTEGER... 4 checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for corresponding KIND value of INTEGER... C_INT checking KIND value 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Fortran C_INT... (cached) 4 checking if Fortran compiler supports 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTEGER*1... yes checking size of Fortran INTEGER*1... 1 checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C type corresponding to INTEGER*1... char checking alignment of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran INTEGER*1... 1 checking for corresponding KIND value of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTEGER*1... C_SIGNED_CHAR checking KIND value of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_SIGNED_CHAR... (cached) 1 checking if Fortran compiler supports 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTEGER*2... yes checking size of Fortran INTEGER*2... 2 checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C type corresponding to INTEGER*2... short checking alignment of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran INTEGER*2... 2 checking for corresponding KIND value of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTEGER*2... C_SHORT checking KIND value of Fortran C_SHORT...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (cached) 2 checking if Fortran compiler supports INTEGER*4... yes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking size of Fortran INTEGER*4... 4 checking for C type 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding to INTEGER*4... int checking alignment of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTEGER*4... 4 checking for corresponding KIND value of INTEGER*4...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_INT checking KIND value of Fortran C_INT... (cached) 4 checking if 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran compiler supports INTEGER*8... yes checking size of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTEGER*8... 8 checking for C type corresponding to INTEGER*8... long 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long checking alignment of Fortran INTEGER*8... 8 checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding KIND value of INTEGER*8... C_LONG_LONG checking KIND 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of Fortran C_LONG_LONG... (cached) 8 checking if Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler supports INTEGER*16... no checking if Fortran compiler 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports REAL... yes checking size of Fortran REAL... 4 checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C type corresponding to REAL... float checking alignment of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REAL... 4 checking for corresponding KIND value of REAL... C_FLOAT 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking KIND value of Fortran C_FLOAT... 4 checking if Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler supports REAL*2... no checking if Fortran compiler supports 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REAL*4... yes checking size of Fortran REAL*4... 4 checking for C 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type corresponding to REAL*4... float checking alignment of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REAL*4... 4 checking for corresponding KIND value of REAL*4... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_FLOAT checking KIND value of Fortran C_FLOAT... (cached) 4 checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if Fortran compiler supports REAL*8... yes checking size of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REAL*8... 8 checking for C type corresponding to REAL*8... double 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking alignment of Fortran REAL*8... 8 checking for corresponding 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; KIND value of REAL*8... C_DOUBLE checking KIND value of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_DOUBLE... 8 checking if Fortran compiler supports REAL*16... no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C type matching bit representation of REAL*16... skipped 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (no REAL*16) checking if Fortran compiler supports DOUBLE PRECISION...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes checking size of Fortran DOUBLE PRECISION... 8 checking for C 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type corresponding to DOUBLE PRECISION... double checking alignment 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Fortran DOUBLE PRECISION... 8 checking for corresponding KIND 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of DOUBLE PRECISION... C_DOUBLE checking KIND value of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_DOUBLE... (cached) 8 checking if Fortran compiler supports 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX... yes checking size of Fortran COMPLEX... 8 checking for C 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type corresponding to COMPLEX... float _Complex checking alignment of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran COMPLEX... 4 checking for corresponding KIND value of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX... C_FLOAT_COMPLEX checking KIND value of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_FLOAT_COMPLEX... 4 checking if Fortran compiler supports 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX*4... no checking if Fortran compiler supports COMPLEX*8... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes checking size of Fortran COMPLEX*8... 8 checking for C type 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding to COMPLEX*8... float _Complex checking alignment of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran COMPLEX*8... 4 checking for corresponding KIND value of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX*8... C_FLOAT_COMPLEX checking KIND value of Fortran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_FLOAT_COMPLEX... (cached) 4 checking if Fortran compiler supports 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX*16... yes checking size of Fortran COMPLEX*16... 16 checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for C type corresponding to COMPLEX*16... double _Complex checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alignment of Fortran COMPLEX*16... 8 checking for corresponding KIND 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of COMPLEX*16... C_DOUBLE_COMPLEX checking KIND value of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran C_DOUBLE_COMPLEX... 8 checking if Fortran compiler supports 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX*32... no checking if Fortran compiler supports DOUBLE 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX... yes checking size of Fortran DOUBLE COMPLEX... 16 checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for C type corresponding to DOUBLE COMPLEX... double _Complex 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking alignment of Fortran DOUBLE COMPLEX... 8 checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding KIND value of DOUBLE COMPLEX... C_DOUBLE_COMPLEX 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking KIND value of Fortran C_DOUBLE_COMPLEX... (cached) 8 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for max Fortran MPI handle index... 2147483647 checking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran value for .TRUE. logical type... 1 checking for correct handling
</span><br>
<span class="quotelev1">&gt; of Fortran logical arrays...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes checking for the value of MPI_STATUS_SIZE... 5 Fortran INTEGERs 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking KIND value of Fortran C_INT16_T... 2 checking KIND value of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran C_INT32_T... 4 checking KIND value of Fortran C_INT64_T... 8 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if building Fortran mpif.h bindings... yes checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran compiler module include flag... -I checking Fortran compiler 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ignore TKR syntax... not cached; checking variants checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran compiler support of TYPE(*), DIMENSION(*)... no checking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran compiler support of !DEC$ ATTRIBUTES NO_ARG_CHECK... no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for Fortran compiler support of !IBM* IGNORE_TKR... no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking Fortran compiler ignore TKR syntax... 0:real:!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if building Fortran 'use mpi' bindings... yes checking if 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24904.php">http://www.open-mpi.org/community/lists/users/2014/08/24904.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24911.php">http://www.open-mpi.org/community/lists/users/2014/08/24911.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24911.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24911.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
