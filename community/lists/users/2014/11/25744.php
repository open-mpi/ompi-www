<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 09:38:34 2014" -->
<!-- isoreceived="20141111143834" -->
<!-- sent="Tue, 11 Nov 2014 14:38:19 +0000" -->
<!-- isosent="20141111143819" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="87vbmln6p0.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6837EF03-401B-465E-BB68-9E6D450410FC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 09:38:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25743.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; There are several reasons why MPI implementations have not added explicit interfaces to their mpif.h files, mostly boiling down to: they may/will break real world MPI programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. All modern compilers have ignore-TKR syntax,
</span><br>
<p>Hang on!  (An equivalent of) ignore_tkr only appeared in gfortran 4.9
<br>
(the latest release) as far as I know.  The system compiler of the bulk
<br>
of GNU/Linux HPC systems currently is distinctly older (and the RHEL
<br>
devtoolset packaging of gcc-4.9 is still beta).  RHEL 6 has gcc 4.4 as
<br>
te system compiler and Debian stable has 4.7 and older.
<br>
<p>I'm just pointing that out in case decisions are being made assuming
<br>
everyone has this.  No worries if not.
<br>
<p><span class="quotelev1">&gt; so it's at least not a problem for subroutines like MPI_SEND (with a choice buffer).  However: a) this was not true at the time when MPI-3 was written, and b) it's not standard fortran.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25743.php">Joshua Ladd: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
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
