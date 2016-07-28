<?
$subject_val = "Re: [OMPI users] GCC 4.9 and MPI_F08?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 12:32:32 2014" -->
<!-- isoreceived="20140812163232" -->
<!-- sent="Tue, 12 Aug 2014 16:32:26 +0000" -->
<!-- isosent="20140812163226" -->
<!-- name="Daniels, Marcus G" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GCC 4.9 and MPI_F08?" -->
<!-- id="1407861146.472.13.camel_at_brixpro.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FB7232E8-D1AC-4C4D-9263-61F85EEEF7B9_at_cisco.com" -->
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
<strong>Date:</strong> 2014-08-12 12:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25001.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25004.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="25004.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>

<br>
On Tue, 2014-08-12 at 16:18 +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Can you send the output from configure, the config.log file, and the ompi_config.h file?
</span><br>

<br>
Attached.  configure.log comes from
<br>

<br>
(./configure --prefix=/usr/projects/eap/tools/openmpi/1.8.2rc3  2&gt;&amp;1) &gt;
<br>
configure.log
<br>

<br>
Seems fishy that there is no &quot;checking for Fortran compiler support of !
<br>
GCC$ ATTRIBUTES NO_ARG_CHECK&quot;.
<br>

<br>
checking for Fortran compiler module include flag... -I
<br>
checking Fortran compiler ignore TKR syntax... not cached; checking
<br>
variants
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
<br>
checking for Fortran compiler support of !DEC$ ATTRIBUTES
<br>
NO_ARG_CHECK... no
<br>
checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
<br>
checking for Fortran compiler support of !DIR$ IGNORE_TKR... no
<br>
checking for Fortran compiler support of !IBM* IGNORE_TKR... no
<br>
checking Fortran compiler ignore TKR syntax... 0:real:!
<br>
checking if Fortran compiler supports ISO_C_BINDING... yes
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
checking if building Fortran 'use mpi_f08' bindings... no
<br>

<br>
Marcus
<br>

<br>

<br>

<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25000/openmpi-1.8.2rc3-config.tar.gz">openmpi-1.8.2rc3-config.tar.gz</a>
</ul>
<!-- attachment="openmpi-1.8.2rc3-config.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25001.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="24999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25004.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="25004.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
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
