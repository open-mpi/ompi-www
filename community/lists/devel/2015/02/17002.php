<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 14:02:49 2015" -->
<!-- isoreceived="20150219190249" -->
<!-- sent="Thu, 19 Feb 2015 14:02:48 -0500" -->
<!-- isosent="20150219190248" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="CAMJJpkVwfxrFnueJpgEj43Aaz4wnkVTXV+Ovrun3rSiLdKYMiQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4FE3AB5F-D92F-4F6A-8F40-61F2EB5C1E43_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 14:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17003.php">Nathan Hjelm: "[OMPI devel] RFC: merge opal_free_list_t and ompi_free_list_t"</a>
<li><strong>Previous message:</strong> <a href="17001.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17001.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry but I miss the connection between this test and the issue of TestAny
<br>
in Fortran?
<br>
<p><p>On Thu, Feb 19, 2015 at 2:00 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Feb 19, 2015, at 10:15 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; While looking the MPI_Testany issue, I came across a very unsettling
</span><br>
<span class="quotelev1">&gt; sentence in the MPI standard (3.0 page 58 line 36).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The array is indexed from zero in C, and from one in Fortran.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This sentence seems to indicate that the index returned by the TestAny
</span><br>
<span class="quotelev1">&gt; and TestSome (as well as the corresponding Wait functions) should be
</span><br>
<span class="quotelev1">&gt; indexed starting from 1 in Fortran, but from 0 in C. Our C code returns all
</span><br>
<span class="quotelev1">&gt; indexes starting from 0 (C), but I failed to find where we handle this case
</span><br>
<span class="quotelev1">&gt; in Fortran? Or maybe I am interpreting too much the MPI standard?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff is Mr. Fortran, so I'll let him answer more definitely, but in the
</span><br>
<span class="quotelev1">&gt; meantime you could try running this test from the MPICH test suite:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/v3.0:/test/mpi/f77/pt2pt/allpairf.f">http://git.mpich.org/mpich.git/blob/v3.0:/test/mpi/f77/pt2pt/allpairf.f</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Surely there must be a test in ompi-tests that covers this area too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17001.php">http://www.open-mpi.org/community/lists/devel/2015/02/17001.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17003.php">Nathan Hjelm: "[OMPI devel] RFC: merge opal_free_list_t and ompi_free_list_t"</a>
<li><strong>Previous message:</strong> <a href="17001.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17001.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
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
