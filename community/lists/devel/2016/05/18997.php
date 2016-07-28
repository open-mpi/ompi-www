<?
$subject_val = "[OMPI devel] RFC: Public Test Repo";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 23:54:35 2016" -->
<!-- isoreceived="20160519035435" -->
<!-- sent="Wed, 18 May 2016 22:54:33 -0500" -->
<!-- isosent="20160519035433" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Public Test Repo" -->
<!-- id="CAANzjE=_=op_DEzARkhhxJoCCNGLnGdo3_sv56ZiJ7WzpZFTuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Public Test Repo<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-18 23:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18998.php">Josh Hursey: "Re: [OMPI devel] Github pricing plan changes announced today"</a>
<li><strong>Previous message:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18999.php">Christopher Samuel: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="18999.php">Christopher Samuel: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="19000.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Create a public test repo (ompi-tests-public) to collect
<br>
<p>WHY: ompi-tests is private, and difficult/impossible to open up. There is a
<br>
demand for a public collection of unit tests. This repo would allow us to
<br>
cultivate such a collection of unit tests.
<br>
<p>WHERE: open-mpi GitHub project
<br>
<p>TIMEOUT: Teleconf, Tue., May 24, 2016
<br>
<p>MORE DETAIL:
<br>
<p>Over the years we have had periodic public requests for access to our
<br>
ompi-tests repo. Opening up ompi-tests to the public is nearly impossible
<br>
since, given the age of some of these tests, determining if we can
<br>
redistribute these tests has become complicated.
<br>
<p>Recently we had two different requests on the MTT users and Open MPI devel
<br>
list about access to the ompi-tests repo for testing. This got me thinking
<br>
that we could try to cultivate a public set of tests with a clear lineage
<br>
and license.
<br>
<p><p>Below are my current thoughts for structure and maintenance of the repo.
<br>
Certainly up for discussion.
<br>
<p>Similar to the existing ompi-tests repo structure.
<br>
&nbsp;- Call the repository &quot;ompi-tests-public&quot;
<br>
&nbsp;- The repo will contain at least one test suite ('misc' - see below).
<br>
&nbsp;- Each test suite can have its own build system
<br>
&nbsp;- Each test suite should contain a README-MTT.md which will contain a
<br>
sample Test Build and Test Run section for use in MTT.
<br>
<p>All tests contributed will be covered under the Open MPI license agreement
<br>
unless a specific test suite has a different, but compatible license. To
<br>
contribute a test to the repo a developer must sign the contributor
<br>
agreement. Contributions must go through a PR + Review process (similar to
<br>
how we maintain ompi-release). This is meant to provide an opportunity to
<br>
review the tests for correctness before acceptance into the repo.
<br>
<p>We will seed the repo with a 'misc' test suite. This test suite is meant to
<br>
collect all of the miscellaneous tests created by Open MPI developers
<br>
including those regression tests that emerge as part of Issues or MPI Forum
<br>
discussions, for example. It will contain the unit tests currently in the
<br>
Open MPI's examples directory - what we have been calling the 'trivial'
<br>
test suite. I was thinking about breaking it down into roughly MPI Standard
<br>
chapters.
<br>
<p>If someone wants to contribute a whole suite of tests they can do so in a
<br>
separate directory in the repo with it's own build system. The license must
<br>
be compatible with the Open MPI license, and, in particular, allow the code
<br>
to be freely distributed.
<br>
<p><p>Let me know what you think. Certainly everything here is open for
<br>
discussion, and we will likely need to refine aspects as we go.
<br>
<p>-- Josh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18998.php">Josh Hursey: "Re: [OMPI devel] Github pricing plan changes announced today"</a>
<li><strong>Previous message:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18999.php">Christopher Samuel: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="18999.php">Christopher Samuel: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="19000.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Public Test Repo"</a>
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
