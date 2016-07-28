<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 13:06:13 2014" -->
<!-- isoreceived="20141105180613" -->
<!-- sent="Wed, 5 Nov 2014 18:06:11 +0000" -->
<!-- isosent="20141105180611" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF" -->
<!-- id="134C6ACB-7BB5-4CD2-810C-BFFE2CBFF3B4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87fvdxr26y.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 13:06:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Previous message:</strong> <a href="25692.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25692.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25726.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25726.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2014, at 12:23 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is the issue documented publicly?  I'm puzzled, because it certainly
</span><br>
<span class="quotelev1">&gt; works in a simple case:
</span><br>
<p>There were several commits; this was the first one:
<br>
<p><a href="https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c">https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c</a>
<br>
<p>A few more were required after that one to clean up some bugs and corner cases that grew from that commit.
<br>
<p><span class="quotelev1">&gt;  $ cat x.f90
</span><br>
<span class="quotelev1">&gt;  use mpi
</span><br>
<p>...trying to remember the details...
<br>
<p>IIRC, it only affected certain configure situations (e.g., only certain fortran compilers).  I'm failing to remember the exact scenario offhand that was problematic right now, but it led to the larger question of: &quot;hey, wait, don't we have to support MPI_SIZEOF in mpif.h, too?&quot;
<br>
<p><span class="quotelev1">&gt; I don't understand how it can work generally with mpif.h (f77?), as
</span><br>
<span class="quotelev1">&gt; implied by the man page, rather than the module.
</span><br>
<p>According to discussion in the Forum Fortran working group, it is required that MPI_SIZEOF must be supported in *all* MPI Fortran interfaces, including mpif.h.
<br>
<p>Hence, if certain conditions are met by your Fortran compiler (i.e., it's modern enough), OMPI 1.8.4 will have MPI_SIZEOF prototypes in mpif.h.  If not, then you get the same old mpif.h you've always had (i.e., no MPI_SIZEOF prototypes, and MPI_SIZEOF won't work properly if you use the mpif.h interfaces).
<br>
<p>Keep in mind that MPI does not prohibit having prototypes in mpif.h -- it's just that most (all?) MPI implementations don't tend to provide them.  However, in the case of MPI_SIZEOF, it is *required* that prototypes are available because the implementation needs the type information to return the size properly (in mpif.h., mpi module, and mpi_f08 module).
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Previous message:</strong> <a href="25692.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25692.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25726.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25726.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
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
