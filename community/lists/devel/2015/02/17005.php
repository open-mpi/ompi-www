<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 06:09:21 2015" -->
<!-- isoreceived="20150220110921" -->
<!-- sent="Fri, 20 Feb 2015 20:09:27 +0900" -->
<!-- isosent="20150220110927" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="54E715E7.5000207_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMJJpkXmDn9M3dudHScmUBynACR+7pJDRHJUv7bJSBFvY9TMCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran issue<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 06:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17004.php">Dave Turner: "Re: [OMPI devel] devel Digest, Vol 2917, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="16994.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>this is correctly handled in ompi_testany_f :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Increment index by one for fortran conventions.  Note that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all Fortran compilers have FALSE==0; we just need to check
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for any nonzero value (because TRUE is not always 1) */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/02/20 1:15, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; While looking the MPI_Testany issue, I came across a very unsettling
</span><br>
<span class="quotelev1">&gt; sentence in the MPI standard (3.0 page 58 line 36).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The array is indexed from zero in C, and from one in Fortran.
</span><br>
<span class="quotelev1">&gt; This sentence seems to indicate that the index returned by the TestAny and
</span><br>
<span class="quotelev1">&gt; TestSome (as well as the corresponding Wait functions) should be indexed
</span><br>
<span class="quotelev1">&gt; starting from 1 in Fortran, but from 0 in C. Our C code returns all indexes
</span><br>
<span class="quotelev1">&gt; starting from 0 (C), but I failed to find where we handle this case in
</span><br>
<span class="quotelev1">&gt; Fortran? Or maybe I am interpreting too much the MPI standard?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16994.php">http://www.open-mpi.org/community/lists/devel/2015/02/16994.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17004.php">Dave Turner: "Re: [OMPI devel] devel Digest, Vol 2917, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="16994.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
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
