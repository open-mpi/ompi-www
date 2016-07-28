<?
$subject_val = "[OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 11:15:36 2015" -->
<!-- isoreceived="20150219161536" -->
<!-- sent="Thu, 19 Feb 2015 11:15:34 -0500" -->
<!-- isosent="20150219161534" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Fortran issue" -->
<!-- id="CAMJJpkXmDn9M3dudHScmUBynACR+7pJDRHJUv7bJSBFvY9TMCQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Fortran issue<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 11:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16995.php">Joshua Ladd: "[OMPI devel] MCA Aliases"</a>
<li><strong>Previous message:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI devel] MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17001.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17001.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While looking the MPI_Testany issue, I came across a very unsettling
<br>
sentence in the MPI standard (3.0 page 58 line 36).
<br>
<p><span class="quotelev1">&gt; The array is indexed from zero in C, and from one in Fortran.
</span><br>
<p>This sentence seems to indicate that the index returned by the TestAny and
<br>
TestSome (as well as the corresponding Wait functions) should be indexed
<br>
starting from 1 in Fortran, but from 0 in C. Our C code returns all indexes
<br>
starting from 0 (C), but I failed to find where we handle this case in
<br>
Fortran? Or maybe I am interpreting too much the MPI standard?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16995.php">Joshua Ladd: "[OMPI devel] MCA Aliases"</a>
<li><strong>Previous message:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI devel] MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17001.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17001.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
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
