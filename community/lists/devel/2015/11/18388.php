<?
$subject_val = "[OMPI devel] RFC: Jenkins testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 04:13:14 2015" -->
<!-- isoreceived="20151125091314" -->
<!-- sent="Wed, 25 Nov 2015 01:13:08 -0800" -->
<!-- isosent="20151125091308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Jenkins testing" -->
<!-- id="4CCCFA68-3539-4451-9A46-44B6686CC3D7_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="open-mpi/ompi-release/pull/783/c159521805_at_github.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Jenkins testing<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-25 04:13:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Previous message:</strong> <a href="18387.php">Nathan Hjelm: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Reply:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I wanted to pull this conversation out from the specific issue where it was being conducted as I think it merits a broader discussion. I understand and appreciate the role of the Jenkins testing - what I am trying to find is a way to make that testing more usable.
<br>
<p>There are two things that I think would help:
<br>
<p>1. separating the tests being conducted into different &#226;&#128;&#156;buckets&#226;&#128;&#157;. We now have several types of testing being conducted:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* simple build tests. These don&#226;&#128;&#153;t involve any execution. If something fails a build test, it would be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;very helpful to clearly state exactly what configure options were being used, and what compiler.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ideally, such failures would be labeled as &#226;&#128;&#156;build&#226;&#128;&#157;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* valgrind tests. These are problematic in that they are not necessarily PR-specific - if anything
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;causes a leak or valgrind issue, every PR is marked as &#226;&#128;&#156;failed&#226;&#128;&#157; and can lead to wasted time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;chasing non-existent problems with a specific PR. Unfortunately, I can&#226;&#128;&#153;t think of a way to get
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenkins to properly deal with the issue other than to mark such test results as &#226;&#128;&#156;valgrind&#226;&#128;&#157; so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;they are clearly called out as being in that category
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* distribution tests that build tarballs, run &#226;&#128;&#156;make distcheck&#226;&#128;&#157;, etc. These usually fail due to something
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not being included in the tarball, or some directory not being completely cleaned. This is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;another case where it is really important to know, for example, that someone used a platform
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file when building the tarball, so it would really help to know exactly how this test was conducted.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ideally, any distribution test failure would be marked as &#226;&#128;&#156;distribution&#226;&#128;&#157; so we know what happened.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* run tests that execute various programs. Lots of things can go wrong here, many of them
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dependent on exactly how the code was built (so we know which components were
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;around) and how it was run (e.g., default MCA param file). Ideally, these failures would
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be marked as &#226;&#128;&#156;run&#226;&#128;&#157;.
<br>
<p>Please note: when I ask for a clear statement of configuration options etc, what I&#226;&#128;&#153;m saying is that it is very hard to sift thru hundreds of lines of output to find, for example, the cmd line that failed. A more concise test output would make debugging much faster and easier, and therefore make Jenkins testing much more usable.
<br>
<p><p>2. having the Jenkins testers clearly tell us what tests they are expecting us to pass. Perhaps a list of these could be posted somewhere, and some notification given as to when those lists are being changed? It would help avoid surprises and allow developers a chance to test things themselves before posting PRs.
<br>
<p>I know I&#226;&#128;&#153;m asking for some effort on behalf of those running these servers. However, I think it would make those efforts much more useful.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Previous message:</strong> <a href="18387.php">Nathan Hjelm: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Reply:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
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
