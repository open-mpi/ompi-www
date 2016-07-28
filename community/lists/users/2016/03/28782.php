<?
$subject_val = "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 16:54:56 2016" -->
<!-- isoreceived="20160321205456" -->
<!-- sent="Mon, 21 Mar 2016 14:54:54 -0600" -->
<!-- isosent="20160321205454" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines" -->
<!-- id="CAFkGP2keOD=dNGcmFS+dhR=OEdSpEa=oR-H60gNHGEw4dg19OQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="871t73ftvm.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 16:54:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28783.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p>With which compiler, and even optimized?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ `mpif90 --showme` --version | head -n1
</span><br>
<span class="quotelev1">&gt;   GNU Fortran (GCC) 4.4.7 20120313 (Red Hat 4.4.7-17)
</span><br>
<span class="quotelev1">&gt;   $ cat a.f90
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt;   if (mpi_version == 3) call undefined()
</span><br>
<span class="quotelev1">&gt;   print *, mpi_version
</span><br>
<span class="quotelev1">&gt;   end
</span><br>
<span class="quotelev1">&gt;   $ mpif90 a.f90 &amp;&amp; ./a.out
</span><br>
<span class="quotelev1">&gt;              2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No, optimized works, actually - unoptimized is the issue.  I should've
<br>
added that in the beginning.  Since MPI_VERSION is a parameter, the
<br>
optimizer *knows* the code path won't be used, and thus it doesn't include
<br>
it in the binary and life is good.  Compiling with -O0 results in an issue,
<br>
however, at least with Intel 15/16 compilers, and I'd guess gfortran
<br>
too(?).
<br>
<p>So, once again, maybe I'm trying too hard to find a problem.  ;-)
<br>
<p>If I don't ever need to build with -O0, *or* simply request the user to
<br>
provide the -DMPI3 (or maybe -DMPI2, since that's the less-common one now)
<br>
flag, I have no issues.
<br>
<p>Yes, not using cmake is definitely better -- people like me should be
<br>
<span class="quotelev1">&gt; able to build the result!  With autoconf, you could run the above to get
</span><br>
<span class="quotelev1">&gt; mpi_version, or adapt it to produce a link-time error for a specific
</span><br>
<span class="quotelev1">&gt; version if cross-compiling.  However, you should test for the routines
</span><br>
<span class="quotelev1">&gt; you need in the normal autoconf way.  Presumably checking one is enough
</span><br>
<span class="quotelev1">&gt; for a particular standard level.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, this is an option too.  It's more a mild nuisance in the dissimilarity
<br>
of how C/C++ can, by default, process the #defines due to the preprocessor,
<br>
whereas Fortran code doesn't have the same flexibility.  Autoconf to
<br>
provide the -D flag is an option, indeed.
<br>
<p><p><span class="quotelev1">&gt; I'd hope you could modularize things and select the right modules to
</span><br>
<span class="quotelev1">&gt; link using a configure test and possibly automake.  That's probably
</span><br>
<span class="quotelev1">&gt; easier for Fortran than the sort of C I encounter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm only responsible for a tiny fraction of the code, none of which is the
<br>
build process.  I think I'm attempting to over-simplify an already
<br>
fairly-simple-but-not-quite-perfect reality.  ;)
<br>
<p>&nbsp;&nbsp;Thanks for the feedback and ideas!
<br>
<p>&nbsp;&nbsp;- Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28782/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28783.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
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
