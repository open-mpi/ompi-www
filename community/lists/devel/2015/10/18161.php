<?
$subject_val = "Re: [OMPI devel] 16 byte real in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 10:23:31 2015" -->
<!-- isoreceived="20151014142331" -->
<!-- sent="Wed, 14 Oct 2015 08:23:27 -0600" -->
<!-- isosent="20151014142327" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 16 byte real in Fortran" -->
<!-- id="20151014142327.GA50260_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAKe2itcE1GdQsXyVqbbSH__hyHFnw9miab49LAWa-b4mXeJA3g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 16 byte real in Fortran<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 10:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18162.php">Paul Kapinos: "[OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Previous message:</strong> <a href="18160.php">Vladim&#195;&#173;r Fuka: "[OMPI devel] 16 byte real in Fortran"</a>
<li><strong>In reply to:</strong> <a href="18160.php">Vladim&#195;&#173;r Fuka: "[OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18168.php">Vladimír Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 14, 2015 at 02:40:00PM +0100, Vladim&#237;r Fuka wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I have a problem with using the  quadruple (128bit) or extended
</span><br>
<span class="quotelev1">&gt; (80bit) precision reals in Fortran. I did my tests with gfortran-4.8.5
</span><br>
<span class="quotelev1">&gt; and OpenMPI-1.7.2 (preinstalled OpenSuSE 13.2), but others confirmed
</span><br>
<span class="quotelev1">&gt; this behaviour for more recent versions at
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/33109040/strange-result-of-mpi-allreduce-for-16-byte-real?noredirect=1#comment54060649_33109040">http://stackoverflow.com/questions/33109040/strange-result-of-mpi-allreduce-for-16-byte-real?noredirect=1#comment54060649_33109040</a>
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   When I try to use REAL*16 variables (or equivalent kind-based
</span><br>
<span class="quotelev1">&gt; definition) and MPI_REAL16 the reductions don't give correct results
</span><br>
<span class="quotelev1">&gt; (see the link for the exact code). I was pointed to this issue ticket
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/issues/63">https://github.com/open-mpi/ompi/issues/63</a>.
</span><br>
<p>As that ticket notes if REAL*16 &lt;&gt; long double Open MPI should be
<br>
disabling redutions on MPI_REAL16. I can take a look and see if I can
<br>
determine why that is not working as expected.
<br>
<p><span class="quotelev1">&gt; Is there a correct way how to use the extended or quadruple precision
</span><br>
<span class="quotelev1">&gt; in OpenMPI? My intended usage is mainly checking if differences seen
</span><br>
<span class="quotelev1">&gt; numerical computations are getting smaller with increasing precision
</span><br>
<span class="quotelev1">&gt; and can therefore be attributed to rounding errors. If not they could
</span><br>
<span class="quotelev1">&gt; be a sign of a bug.
</span><br>
<p>Take a look at the following article:
<br>
<p><a href="http://dl.acm.org/citation.cfm?id=1988419&amp;CFID=553203244&amp;CFTOKEN=11814269">http://dl.acm.org/citation.cfm?id=1988419&amp;CFID=553203244&amp;CFTOKEN=11814269</a>
<br>
<p>You may be able to use the method described to get the enhanced
<br>
precision you need.
<br>
<p>-Nathan
<br>
HPC-5, LANL
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18161/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18162.php">Paul Kapinos: "[OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Previous message:</strong> <a href="18160.php">Vladim&#195;&#173;r Fuka: "[OMPI devel] 16 byte real in Fortran"</a>
<li><strong>In reply to:</strong> <a href="18160.php">Vladim&#195;&#173;r Fuka: "[OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18168.php">Vladimír Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
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
