<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 14:00:22 2015" -->
<!-- isoreceived="20150219190022" -->
<!-- sent="Thu, 19 Feb 2015 19:00:17 +0000" -->
<!-- isosent="20150219190017" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="4FE3AB5F-D92F-4F6A-8F40-61F2EB5C1E43_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 14:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17002.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17000.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] git commit id in coverity"</a>
<li><strong>In reply to:</strong> <a href="16994.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17002.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17002.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2015, at 10:15 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While looking the MPI_Testany issue, I came across a very unsettling sentence in the MPI standard (3.0 page 58 line 36).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The array is indexed from zero in C, and from one in Fortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This sentence seems to indicate that the index returned by the TestAny and TestSome (as well as the corresponding Wait functions) should be indexed starting from 1 in Fortran, but from 0 in C. Our C code returns all indexes starting from 0 (C), but I failed to find where we handle this case in Fortran? Or maybe I am interpreting too much the MPI standard?
</span><br>
<p>Jeff is Mr. Fortran, so I'll let him answer more definitely, but in the meantime you could try running this test from the MPICH test suite:
<br>
<p><a href="http://git.mpich.org/mpich.git/blob/v3.0:/test/mpi/f77/pt2pt/allpairf.f">http://git.mpich.org/mpich.git/blob/v3.0:/test/mpi/f77/pt2pt/allpairf.f</a>
<br>
<p>Surely there must be a test in ompi-tests that covers this area too.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17002.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17000.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] git commit id in coverity"</a>
<li><strong>In reply to:</strong> <a href="16994.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17002.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17002.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
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
