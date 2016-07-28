<?
$subject_val = "Re: [OMPI devel] RFC: Public Test Repo";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 11:25:00 2016" -->
<!-- isoreceived="20160519152500" -->
<!-- sent="Thu, 19 May 2016 10:24:58 -0500" -->
<!-- isosent="20160519152458" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Public Test Repo" -->
<!-- id="CAANzjEnH+_sMYUwZqkEg73tVui_Up9jeOGmsR5Q+o9-Xdps=2w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D679EE19-1983-4CF1-B73F-55CDF06652EA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Public Test Repo<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 11:24:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19003.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>Previous message:</strong> <a href="19001.php">George Bosilca: "[OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>In reply to:</strong> <a href="19000.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think talking to the MPICH folks about creating a common test pool might
<br>
be useful. More useful would be to get the MPI Forum to 'bless' it and take
<br>
input from all of the MPI venders. Maybe you all can talk about that in a
<br>
sidebar at the MPI Forum - depending on what we figure out here.
<br>
<p>The MPICH tests [1] contains a few test suites that are freely available as
<br>
tarball downloads on their site (though they seem a bit stale - last
<br>
updated 2012). They also have the 'tests' subdirectory in their repo [2].
<br>
<p><p><span class="quotelev1">&gt;From my perspective, the benefits of creating a new public test repo on
</span><br>
GitHub would be (in no particular order, numbers provided to aid in
<br>
reference during followup discussion):
<br>
<p>&nbsp;(1) As we create new MPI test cases for issues, we file them publicly.
<br>
Currently, we drop them in ompi-tests for convenience. As a result, the
<br>
public cannot see/use them. Same for new test suites that we might create
<br>
as part of a new MPI standard interface proposal (e.g., FT, Sessions, or
<br>
even back to Nonblocking collectives).
<br>
<p>&nbsp;(2) GitHub allows us to foster a discussion about the tests in a way that
<br>
is easily traceable. More so than using a mailing list and discussing a
<br>
tarball drop of a test suite.
<br>
<p>&nbsp;(3) We can associate a MTT snippet of code for Test Build/Run that can be
<br>
used to run that test suite. Instead of putting this in with the MTT repo.
<br>
This would make these snippets slightly easier to find.
<br>
<p>&nbsp;(4) We can contain references to other test suites, even if we don't copy
<br>
them into our public test suite. This would allow us to say &quot;hey, there are
<br>
these great MPICH/Netpipe/IMB/... tests at this URL&quot; then give them
<br>
instructions on how we run them in MTT (or outside of MTT). If we have any
<br>
patches for that test suite we could collect them in the sub-directory
<br>
until (if) they get incorporated upstream. We could also associate notes on
<br>
runtime parameters that help tune Open MPI for a particular performance
<br>
test at various scales.
<br>
<p>&nbsp;(5) Generally, it would make it easier for the community to pick up some
<br>
unit tests and run them to do a 'make deep-check' on their MPI install. I
<br>
think there is a hesitation to use the test suite from another MPI
<br>
implementation with Open MPI as it might not be as consistent as one would
<br>
like. Any failures would have to be investigated as a difference of
<br>
implementation (do their tests use our CLI correctly?), difference of MPI
<br>
Standard interpretation (as often happens as the MPI Forum rolls out
<br>
errata), or actual bug in Open MPI. For an end user that is tough to
<br>
determine. For MPI implementers it is easier since we live those
<br>
differences.
<br>
<p><p>Let me play a little devils advocate here too on a couple points [not that
<br>
I need to really, I'm sure I'll get some help here]. (#) reference the
<br>
points above.
<br>
<p>(1) Shouldn't the MPI forum be doing this? Maybe. That is for the MPI Forum
<br>
to decide, and might be difficult to achieve given the diversity of
<br>
stakeholders at that level. However, if there is a public repo for MPI
<br>
tests that the MPI Forum can all agree on then that might be a good place
<br>
to start. I still think (4) would apply, but maybe we can solve that
<br>
differently.
<br>
<p>(2) How much do we really debate the correctness of our tests? Early on in
<br>
the project, quite often. Lately it still happens (NULL datatype issue, for
<br>
example). That discussion can only happen internally since the test cases
<br>
we reference are not public unless we expose them (which is toe'ing the
<br>
line of redistribution). There is value in broadening the discussion
<br>
outside of the Open MPI developers on some of those test cases. At the very
<br>
least for educational benefit of the community about some of the more
<br>
subtle edges of the MPI standard.
<br>
<p>(3) Shouldn't that sample code live with MTT? Maybe. I can see both sides
<br>
of this one. I do think there is some value in separating out the
<br>
functional code of MTT from the test suite configurations.
<br>
<p><p>-- Josh
<br>
<p>[1] <a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html">http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html</a>
<br>
[2] <a href="http://trac.mpich.org/projects/mpich/browser/test">http://trac.mpich.org/projects/mpich/browser/test</a>
<br>
<p><p>On Thu, May 19, 2016 at 6:50 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I was initially for this idea, but now I find myself conflicted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: what's the value in yet another MPI test suite?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, we've got a bunch of tests that no one else has (i.e., the things
</span><br>
<span class="quotelev1">&gt; we've home-grown over the years). Some are great tests.  Some will need to
</span><br>
<span class="quotelev1">&gt; be cleaned up and generalized. Some are user-contributed. Some are
</span><br>
<span class="quotelev1">&gt; ompi-specific.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should these tests be contributed to some other test suite?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: I'm wondering about the MPICH test suite - that seems to be
</span><br>
<span class="quotelev1">&gt; the only remaining big MPI test suite these days. Is it worth having a
</span><br>
<span class="quotelev1">&gt; discussion w the MPICH folks to see if a) their test suite is general
</span><br>
<span class="quotelev1">&gt; enough for all MPI implementations, and B) if they would accept a bunch of
</span><br>
<span class="quotelev1">&gt; random tests from us?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And if not, I think I'd like to understand better the value add that we
</span><br>
<span class="quotelev1">&gt; can provide by making another MPI test suite.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 18, 2016, at 11:54 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Create a public test repo (ompi-tests-public) to collect
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHY: ompi-tests is private, and difficult/impossible to open up. There
</span><br>
<span class="quotelev1">&gt; is a demand for a public collection of unit tests. This repo would allow us
</span><br>
<span class="quotelev1">&gt; to cultivate such a collection of unit tests.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHERE: open-mpi GitHub project
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TIMEOUT: Teleconf, Tue., May 24, 2016
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MORE DETAIL:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Over the years we have had periodic public requests for access to our
</span><br>
<span class="quotelev1">&gt; ompi-tests repo. Opening up ompi-tests to the public is nearly impossible
</span><br>
<span class="quotelev1">&gt; since, given the age of some of these tests, determining if we can
</span><br>
<span class="quotelev1">&gt; redistribute these tests has become complicated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Recently we had two different requests on the MTT users and Open MPI
</span><br>
<span class="quotelev1">&gt; devel list about access to the ompi-tests repo for testing. This got me
</span><br>
<span class="quotelev1">&gt; thinking that we could try to cultivate a public set of tests with a clear
</span><br>
<span class="quotelev1">&gt; lineage and license.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Below are my current thoughts for structure and maintenance of the repo.
</span><br>
<span class="quotelev1">&gt; Certainly up for discussion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Similar to the existing ompi-tests repo structure.
</span><br>
<span class="quotelev2">&gt; &gt;  - Call the repository &quot;ompi-tests-public&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  - The repo will contain at least one test suite ('misc' - see below).
</span><br>
<span class="quotelev2">&gt; &gt;  - Each test suite can have its own build system
</span><br>
<span class="quotelev2">&gt; &gt;  - Each test suite should contain a README-MTT.md which will contain a
</span><br>
<span class="quotelev1">&gt; sample Test Build and Test Run section for use in MTT.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All tests contributed will be covered under the Open MPI license
</span><br>
<span class="quotelev1">&gt; agreement unless a specific test suite has a different, but compatible
</span><br>
<span class="quotelev1">&gt; license. To contribute a test to the repo a developer must sign the
</span><br>
<span class="quotelev1">&gt; contributor agreement. Contributions must go through a PR + Review process
</span><br>
<span class="quotelev1">&gt; (similar to how we maintain ompi-release). This is meant to provide an
</span><br>
<span class="quotelev1">&gt; opportunity to review the tests for correctness before acceptance into the
</span><br>
<span class="quotelev1">&gt; repo.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We will seed the repo with a 'misc' test suite. This test suite is meant
</span><br>
<span class="quotelev1">&gt; to collect all of the miscellaneous tests created by Open MPI developers
</span><br>
<span class="quotelev1">&gt; including those regression tests that emerge as part of Issues or MPI Forum
</span><br>
<span class="quotelev1">&gt; discussions, for example. It will contain the unit tests currently in the
</span><br>
<span class="quotelev1">&gt; Open MPI's examples directory - what we have been calling the 'trivial'
</span><br>
<span class="quotelev1">&gt; test suite. I was thinking about breaking it down into roughly MPI Standard
</span><br>
<span class="quotelev1">&gt; chapters.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If someone wants to contribute a whole suite of tests they can do so in
</span><br>
<span class="quotelev1">&gt; a separate directory in the repo with it's own build system. The license
</span><br>
<span class="quotelev1">&gt; must be compatible with the Open MPI license, and, in particular, allow the
</span><br>
<span class="quotelev1">&gt; code to be freely distributed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know what you think. Certainly everything here is open for
</span><br>
<span class="quotelev1">&gt; discussion, and we will likely need to refine aspects as we go.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18997.php">http://www.open-mpi.org/community/lists/devel/2016/05/18997.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19000.php">http://www.open-mpi.org/community/lists/devel/2016/05/19000.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19003.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>Previous message:</strong> <a href="19001.php">George Bosilca: "[OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>In reply to:</strong> <a href="19000.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
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
