<?
$subject_val = "[OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 16:02:32 2010" -->
<!-- isoreceived="20100210210232" -->
<!-- sent="Wed, 10 Feb 2010 16:02:27 -0500" -->
<!-- isosent="20100210210227" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90" -->
<!-- id="440A7301-CE9B-447F-AE48-A095F80A8A6A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 16:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7400.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add -DOPEN_MPI=1 to the mpif77 and mpif90 command lines
<br>
<p>WHY: Parity with mpi.h's &quot;#define OPEN_MPI 1&quot;
<br>
<p>WHERE: ompi/config/ompi_setup_wrappers.m4
<br>
<p>WHEN: v1.5.1
<br>
<p>TIMEOUT: Friday, Feb 19
<br>
<p>--------------------------------------------
<br>
<p>We've long-since had &quot;#define OPEN_MPI 1&quot; in mpi.h for anyone who wanted to use it.  There's a nonzero number of people who do.  
<br>
<p>Earlier this week, a user asked me for the equivalent in Fortran.  That seems like a reasonable request to me.  However, we can't put a #define in mpif.h because not all Fortran files are sent to the preprocessor by the compiler (e.g., foo.f will be compiled without preprocessor; foo.F will be sent to the preprocessor first and then compiled).  
<br>
<p>But we can put -DOPEN_MPI=1 in the argv that the wrapper adds.  This seems like a safe way to add it; it makes no difference whether the Fortran file is set to the preprocessor or not when it is compiled.
<br>
<p>I tested this concept with gfortran, ifort 11.1, and pgf77/pgf90 10.0 -- it seems to work for me in all cases.  I'll ask Absoft to test their compiler as well.  Can others try their favorite Fortran compilers?  (e.g., Sun)
<br>
<p>If no one has any objections, I'd like to add this for eventual inclusion in the v1.5 series (e.g., 1.5.1).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7400.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
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
