<?
$subject_val = "[OMPI users] Alignment of Fortran variables with ifort";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 18:41:00 2010" -->
<!-- isoreceived="20100728224100" -->
<!-- sent="Wed, 28 Jul 2010 15:40:55 -0700" -->
<!-- isosent="20100728224055" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] Alignment of Fortran variables with ifort" -->
<!-- id="20100728224055.GA31544_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Alignment of Fortran variables with ifort<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 18:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13858.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13856.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am creating a new thread (was: MPI_Allreduce on local machine).
<br>
<p>On Wed, Jul 28, 2010 at 05:07:29PM -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Still, the alignment under Intel may or may not be right.
</span><br>
<span class="quotelev1">&gt; And this may or may not explain the errors that Hugo has got.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, the ompi_info from my OpenMPI 1.3.2 and 1.2.8
</span><br>
<span class="quotelev1">&gt; report exactly the same as OpenMPI 1.4.2, namely
</span><br>
<span class="quotelev1">&gt; Fort dbl prec size: 4  and
</span><br>
<span class="quotelev1">&gt; Fort dbl prec align: 4,
</span><br>
<span class="quotelev1">&gt; except that *if the Intel Fortran compiler (ifort) was used*
</span><br>
<span class="quotelev1">&gt; I get 1 byte alignment:
</span><br>
<span class="quotelev1">&gt; Fort dbl prec align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, this issue has been around for a while,
</span><br>
<span class="quotelev1">&gt; and involves both the size and the alignment (in Intel)
</span><br>
<span class="quotelev1">&gt; of double precision.
</span><br>
<p>There is something strange going on when configuring with ifort.
<br>
This is the output from configure:
<br>
<p># grep 'alignment of Fortran' configure-intel.log
<br>
checking alignment of Fortran LOGICAL... 1
<br>
checking alignment of Fortran LOGICAL*1... 1
<br>
checking alignment of Fortran LOGICAL*2... 1
<br>
checking alignment of Fortran LOGICAL*4... 1
<br>
checking alignment of Fortran LOGICAL*8... 1
<br>
checking alignment of Fortran INTEGER... 1
<br>
checking alignment of Fortran INTEGER*1... 1
<br>
checking alignment of Fortran INTEGER*2... 1
<br>
checking alignment of Fortran INTEGER*4... 1
<br>
checking alignment of Fortran INTEGER*8... 1
<br>
checking alignment of Fortran REAL... 1
<br>
checking alignment of Fortran REAL*4... 1
<br>
checking alignment of Fortran REAL*8... 1
<br>
checking alignment of Fortran REAL*16... 1
<br>
checking alignment of Fortran DOUBLE PRECISION... 1
<br>
checking alignment of Fortran COMPLEX... 1
<br>
checking alignment of Fortran COMPLEX*8... 1
<br>
checking alignment of Fortran COMPLEX*16... 1
<br>
checking alignment of Fortran COMPLEX*32... 1
<br>
<p>All alignments are 1. And this gets entered into opal/include/opal_config.h:
<br>
<p># grep OMPI_ALIGNMENT_FORTRAN opal/include/opal_config.h
<br>
#define OMPI_ALIGNMENT_FORTRAN_COMPLEX 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_INTEGER 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
#define OMPI_ALIGNMENT_FORTRAN_INTEGER2 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_INTEGER4 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_INTEGER8 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_LOGICAL 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_LOGICAL1 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_LOGICAL2 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_LOGICAL4 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_LOGICAL8 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_REAL 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_REAL16 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_REAL2 4
<br>
#define OMPI_ALIGNMENT_FORTRAN_REAL4 1
<br>
#define OMPI_ALIGNMENT_FORTRAN_REAL8 1
<br>
<p>Whereas with gfortran everything appears correctly:
<br>
<p># grep 'alignment of Fortran' configure-gfortran.log
<br>
checking alignment of Fortran LOGICAL... 4
<br>
checking alignment of Fortran LOGICAL*1... 1
<br>
checking alignment of Fortran LOGICAL*2... 2
<br>
checking alignment of Fortran LOGICAL*4... 4
<br>
checking alignment of Fortran LOGICAL*8... 8
<br>
checking alignment of Fortran INTEGER... 4
<br>
checking alignment of Fortran INTEGER*1... 1
<br>
checking alignment of Fortran INTEGER*2... 2
<br>
checking alignment of Fortran INTEGER*4... 4
<br>
checking alignment of Fortran INTEGER*8... 8
<br>
checking alignment of Fortran REAL... 4
<br>
checking alignment of Fortran REAL*4... 4
<br>
checking alignment of Fortran REAL*8... 8
<br>
checking alignment of Fortran DOUBLE PRECISION... 8
<br>
checking alignment of Fortran COMPLEX... 4
<br>
checking alignment of Fortran COMPLEX*8... 4
<br>
checking alignment of Fortran COMPLEX*16... 8
<br>
<p>I may be totally lucky here: I never really use ifort to compile
<br>
openmpi - I only use it to compile the mpi.mod module, but use it
<br>
with the gfortran &quot;compiled&quot; openmpi
<br>
(see:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/07/10017.php">http://www.open-mpi.org/community/lists/users/2009/07/10017.php</a>
<br>
)
<br>
As far as I can tell the Fortran compiler is only used by configure
<br>
and to compile the Fortran module. It is not used for anything else
<br>
when compiling openmpi.
<br>
<p>Thus this procedure may have saved me - or not:
<br>
a grep through the openmpi code
<br>
# grep -r -l --exclude=*.log OMPI_ALIGNMENT_FORTRAN .
<br>
./ompi/datatype/dt_module.c
<br>
./ompi/tools/ompi_info/param.cc
<br>
./opal/include/opal_config.h
<br>
shows that there are only three files that reference such variables.
<br>
The only one that is worrisome is dt_module.c.
<br>
Maybe these macros do not play a role?
<br>
<p>- Martin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13858.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13856.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
