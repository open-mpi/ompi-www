<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 06:42:21 2014" -->
<!-- isoreceived="20141106114221" -->
<!-- sent="Thu, 6 Nov 2014 11:42:02 +0000" -->
<!-- isosent="20141106114202" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="6837EF03-401B-465E-BB68-9E6D450410FC_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E1737100D_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 06:42:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Previous message:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25699.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25699.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2014, at 5:37 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; a) When looking in your  mpi_sizeof_mpifh.f90  test program I found a little thing:  You may (but need not) change the name of the integer variable  size
</span><br>
<span class="quotelev1">&gt;    to e.g.   isize  , because   size   is just an intrinsic function in Fortran (you may see it already, if you have an editor with Fortran-highlighting).
</span><br>
<span class="quotelev1">&gt;   Although your type declaration overrides the intrinsic function, a renaming would make the coding unambiguous. 
</span><br>
<p>Good catch.  I'll do that.
<br>
<p><span class="quotelev1">&gt; b)  My idea was, that OPENMPI should provide always an declaration (interface) for each MPI-routine
</span><br>
<span class="quotelev1">&gt;    (and that's what the MPI-3.0 Standard document (Sept.21, 2012) prescribes (p. 599+601+603)),
</span><br>
<p>Note that MPI-3 p603 says (about mpif.h):
<br>
<p>&quot;For each MPI routine, an implementation can choose to use an implicit or explicit interface...&quot;
<br>
<p>I.e., it is *not* mandated that MPI implementations have explicit interfaces for mpif.h (although, obviously, it *is* mandated for the mpi and mpi_f08 modules).
<br>
<p>There are several reasons why MPI implementations have not added explicit interfaces to their mpif.h files, mostly boiling down to: they may/will break real world MPI programs.
<br>
<p>1. All modern compilers have ignore-TKR syntax, so it's at least not a problem for subroutines like MPI_SEND (with a choice buffer).  However: a) this was not true at the time when MPI-3 was written, and b) it's not standard fortran.
<br>
<p>2. There are (very) likely real-world programs out there that aren't quite right (i.e., would fail to compile with explicit interfaces), but still work fine.  On the one hand, it's terrible that we implementers continue to allow people to run &quot;incorrect&quot; programs.  But on the other hand, users *have* very simple option to run their codes through explicit interfaces (the mpi module), and can do so if they choose to.  Hence, the MPI Forum has decided that backwards compatibility is important enough for legacy codes -- some of which are tens of thousands of lines long (and more!), and there are no maintainers for them any more (!) -- to allow the &quot;good enough&quot; to keep going.
<br>
<p>3. But #1 and #2 are mostly trumped by: the goal is to deprecate mpif.h, anyway (perhaps in MPI-4?) -- so why bother spending any more time on it than we have to?  Ultimately, we'd like to get rid of the mpi module too (maybe in MPI-5?) -- the mpi_f08 module is the True Way Forward.
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
<li><strong>Next message:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Previous message:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25699.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25699.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
