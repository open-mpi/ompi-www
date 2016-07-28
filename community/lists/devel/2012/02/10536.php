<?
$subject_val = "Re: [OMPI devel] non-portable code in examples/Makefile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 06:47:26 2012" -->
<!-- isoreceived="20120221114726" -->
<!-- sent="Tue, 21 Feb 2012 06:47:21 -0500" -->
<!-- isosent="20120221114721" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable code in examples/Makefile" -->
<!-- id="469E5C95-0670-468F-974B-ED5A9E32C6E5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F43825D.4080907_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] non-portable code in examples/Makefile<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 06:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10537.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10535.php">TERRY DONTJE: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10535.php">TERRY DONTJE: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10537.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2012, at 6:39 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Heads up that in the upcoming fortran revamp, we *only* use FC. I.E., there's only mpifort wrapper compiler (mpif77 and mpif90 still exist, but only as sym links to mpifort, signifying that mpifort is the way of the future). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This was done because there have been no f77 compilers for decades (literally), and no f90 compilers for 10+ years. All the fortran compiler vendors have long-since moved to a single compiler executable name (e.g., ifort, gfortran), so mpifort just reflects that. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm, well Oracle's compiler is still named f90 :-).   (now to duck and cover)
</span><br>
<p>Yes, multiple vendors still have &lt;foo&gt;f90 (and/or &lt;foo&gt;f77)-named compilers.  But these are just multiple entry points to a common back end, usually for legacy reasons (just like we'll still have mpif90 and mpif77).
<br>
<p>Another fun fact: MPI-1 was never compliant with Fortran 77.  The most obvious/easiest point to cite is that F77 only allowed 6-character variable and subroutine names.  :-)
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
<li><strong>Next message:</strong> <a href="10537.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10535.php">TERRY DONTJE: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10535.php">TERRY DONTJE: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10537.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
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
