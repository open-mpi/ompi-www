<?
$subject_val = "Re: [OMPI devel] 16 byte real in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 17:53:08 2015" -->
<!-- isoreceived="20151014215308" -->
<!-- sent="Wed, 14 Oct 2015 22:53:03 +0100" -->
<!-- isosent="20151014215303" -->
<!-- name="Vladim&#195;&#173;r Fuka" -->
<!-- email="vladimir.fuka_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 16 byte real in Fortran" -->
<!-- id="CAKe2itcoi8S9-JAYuXyi2hA7v2kCfDqsCOpRGEB8QSGft3FEgQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Vladim&#195;&#173;r Fuka (<em>vladimir.fuka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 17:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18160.php">Vladim&#195;&#173;r Fuka: "[OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Reply:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; As that ticket notes if REAL*16 &lt;&gt; long double Open MPI should be
</span><br>
<span class="quotelev1">&gt; disabling redutions on MPI_REAL16. I can take a look and see if I can
</span><br>
<span class="quotelev1">&gt; determine why that is not working as expected.
</span><br>
<p>Does it really need to be just disabled when the `real(real128)` is
<br>
actually equivalent to c_long_double? Wouldn't making the explicit
<br>
interfaces to MPI_Send and others to accept `real(real128)` make more
<br>
sense? As I wrote in the stackoverflow post, the MPI standard (3.1,
<br>
pages 628 and 674) is not very clear if MPI_REAL16 corresponds to
<br>
real*16 or real(real128) if these differ, but making it correspond to
<br>
real(real128) might be reasonable.
<br>
<p>&nbsp;&nbsp;&nbsp;Vladimir
<br>
<p>2015-10-14 14:40 GMT+01:00 Vladim&#195;&#173;r Fuka &lt;vladimir.fuka_at_[hidden]&gt;:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought, maybe the underlying long double is 80-bit extended
</span><br>
<span class="quotelev1">&gt; precision then and I tried to use REAL*10 variables and MPI_REAL16. I
</span><br>
<span class="quotelev1">&gt; actually received a correct answer from the reduction, but when I
</span><br>
<span class="quotelev1">&gt; tried to use REAL*10 or REAL(10) I am getting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_recv' at (1)
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_ssend' at (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is strange, because I should be able to use even types and array
</span><br>
<span class="quotelev1">&gt; ranks which I construct myself in point to point send/receives and
</span><br>
<span class="quotelev1">&gt; which are unknown to the MPI library, so the explicit interface should
</span><br>
<span class="quotelev1">&gt; not be required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a correct way how to use the extended or quadruple precision
</span><br>
<span class="quotelev1">&gt; in OpenMPI? My intended usage is mainly checking if differences seen
</span><br>
<span class="quotelev1">&gt; numerical computations are getting smaller with increasing precision
</span><br>
<span class="quotelev1">&gt; and can therefore be attributed to rounding errors. If not they could
</span><br>
<span class="quotelev1">&gt; be a sign of a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Vladimir
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18160.php">Vladim&#195;&#173;r Fuka: "[OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Reply:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
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
