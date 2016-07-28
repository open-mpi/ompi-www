<?
$subject_val = "Re: [OMPI devel] 16 byte real in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 19:05:49 2015" -->
<!-- isoreceived="20151014230549" -->
<!-- sent="Wed, 14 Oct 2015 16:05:35 -0700" -->
<!-- isosent="20151014230535" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 16 byte real in Fortran" -->
<!-- id="4186C440-3D8C-4904-8761-C643D07F123A_at_usgs.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7E2E6657-58ED-4073-AA5E-27981B9D0E9F_at_cisco.com" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 19:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18173.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Previous message:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The INTEGER*n, LOGICAL*n, REAL*n, etc., syntax has never been legal Fortran.  Fortran originally had only INTEGER, REAL, DOUBLE PRECISION, and COMPLEX numeric types.  Fortran 90 added the notion of a KIND of numeric, but left unspecified the mapping of numeric KINDs to processor-specific storage.  KIND can be thought of as an opaque identifier.  There is no requirement, for example that KIND n means a variable occupies n bytes of storage, though this is commonly done.  (As is the association of KIND=1 to REAL and KIND=2 to DOUBLE PRECISION.)  Instead, the language provides portable means of specifying the desired behavior of an available KIND, such as digits of precision.  Unfortunately, when marshalling data for interchange, bits matter&#151;the number and their meaning.  High-level languages don't support such concepts very well. Starting  with C99 (Section 7.18.1), C forces the compiler implementation to define macros for supported integer widths (in bits).  However, like Fortran, there is no requirement that any exact number of bits be supported (Section 7.18.1.1); the standard only requires integer types with a minimum of 8, 16, 32, and 64 bits (Section 7.18.1.2).  Nothing is said at all about floating-point data types and the correspondence with the integer types.  This is what APIs like OpenMPI have to struggle with in the real world.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 14 Oct 2015, at 3:38 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 14, 2015, at 5:53 PM, Vladim&#237;r Fuka &lt;vladimir.fuka_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As that ticket notes if REAL*16 &lt;&gt; long double Open MPI should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disabling redutions on MPI_REAL16. I can take a look and see if I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; determine why that is not working as expected.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does it really need to be just disabled when the `real(real128)` is
</span><br>
<span class="quotelev2">&gt;&gt; actually equivalent to c_long_double? Wouldn't making the explicit
</span><br>
<span class="quotelev2">&gt;&gt; interfaces to MPI_Send and others to accept `real(real128)` make more
</span><br>
<span class="quotelev2">&gt;&gt; sense? As I wrote in the stackoverflow post, the MPI standard (3.1,
</span><br>
<span class="quotelev2">&gt;&gt; pages 628 and 674) is not very clear if MPI_REAL16 corresponds to
</span><br>
<span class="quotelev2">&gt;&gt; real*16 or real(real128) if these differ, but making it correspond to
</span><br>
<span class="quotelev2">&gt;&gt; real(real128) might be reasonable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I understand it, real*16 is not a real type -- it's a commonly-used type and supported by many (all?) compilers, but it's not actually defined in the Fortran spec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18170.php">http://www.open-mpi.org/community/lists/devel/2015/10/18170.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18173.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Previous message:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
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
