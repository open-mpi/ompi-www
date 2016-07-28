<?
$subject_val = "Re: [OMPI users] GCC 4.9 and MPI_F08?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 12:11:47 2014" -->
<!-- isoreceived="20140812161147" -->
<!-- sent="Tue, 12 Aug 2014 16:11:45 +0000" -->
<!-- isosent="20140812161145" -->
<!-- name="Daniels, Marcus G" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GCC 4.9 and MPI_F08?" -->
<!-- id="1407859906.472.10.camel_at_brixpro.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA7E2461-A8FE-49E2-B4DB-8CA4A58AC14C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GCC 4.9 and MPI_F08?<br>
<strong>From:</strong> Daniels, Marcus G (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 12:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="24997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="24997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2014-08-12 at 15:50 +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; It should be in the 1.8.2rc tarball (i.e., to be included in the soon-to-be-released 1.8.2).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Want to give it a whirl before release to let us know if it works for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>

<br>
Here's what I get..
<br>

<br>
mdaniels_at_ml-fey2[/scratch/mdaniels/openmpi-1.8.2rc3] $ gcc -v
<br>
Using built-in specs.
<br>
COLLECT_GCC=gcc
<br>
COLLECT_LTO_WRAPPER=/yellow/usr/projects/eap/tools/gcc_tree/4.9.1/bin/../libexec/gcc/x86_64-unknown-linux-gnu/4.9.1/lto-wrapper
<br>
Target: x86_64-unknown-linux-gnu
<br>
Configured with: ./configure
<br>
--prefix=/usr/projects/eap/tools/gcc_tree/4.9.1 --disable-multilib
<br>
Thread model: posix
<br>
gcc version 4.9.1 (GCC) 
<br>
mdaniels_at_ml-fey2[/scratch/mdaniels/openmpi-1.8.2rc3] $  grep
<br>
^OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS config.log
<br>
OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS_FALSE=''
<br>
OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS_TRUE='#'
<br>

<br>
Compared to..
<br>

<br>
mdaniels_at_ml-fey2[/scratch/mdaniels/openmpi-1.8.1] $ ifort -v
<br>
ifort version 14.0.2
<br>

<br>
mdaniels_at_ml-fey2[/scratch/mdaniels/openmpi-1.8.1] $ grep
<br>
^OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS config.log
<br>
OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS_FALSE='#'
<br>
OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS_TRUE=''
<br>

<br>
I see it in the interfaces, but not the M4..
<br>

<br>
[mdaniels_at_brixpro openmpi-1.8.2rc3]$ grep -r NO_ARG_CHECK config
<br>
config/ompi_fortran_check_ignore_tkr.m4:              [!DEC\$ ATTRIBUTES
<br>
NO_ARG_CHECK ::], [real, dimension(*)],
<br>
config/ompi_fortran_check_ignore_tkr.m4:              [!DEC\$ ATTRIBUTES
<br>
NO_ARG_CHECK],
<br>

<br>

<br>
Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="24997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="24997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
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
