<?
$subject_val = "Re: [OMPI devel] RFC: Public Test Repo";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 10:09:22 2016" -->
<!-- isoreceived="20160520140922" -->
<!-- sent="Fri, 20 May 2016 09:09:20 -0500" -->
<!-- isosent="20160520140920" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Public Test Repo" -->
<!-- id="CAANzjEnSTMA1yAOOVn9-NeJ7vsiVaekW6OZQ=WE31nkn5gCgnA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CD256EA0-8267-45D8-B673-49DED6D88D39_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-05-20 10:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19008.php">Ralph Castain: "[OMPI devel] Datatype flag?"</a>
<li><strong>Previous message:</strong> <a href="19006.php">Abhishek Joshi: "[OMPI devel] Use non-cpu frequency for timers"</a>
<li><strong>In reply to:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If OpenHPC folks want to cultivate such a repo I think that would be great.
<br>
<p>If such a repo existed then I think we should work with them on making sure
<br>
that it integrates nicely into MTT so we can add it to the nightly
<br>
regressions. Getting a release of MTT is something I would like to see
<br>
happen sooner rather than later. Now that we have more folks working in the
<br>
code, we might be able to do that this year. But that's a discussion for
<br>
the MTT list.
<br>
<p><p>The things I would want in such a repo would be:
<br>
&nbsp;(1) Ability to submit new individual unit tests and test suites
<br>
&nbsp;(2) Ability to discuss existing and proposed tests in a similar way to
<br>
what we have on GitHub
<br>
&nbsp;(3) Ability to create some 'best practice' notes on running a test suite
<br>
with a particular MPI implementation. This will become important for any
<br>
performance regression tests that might get pushed there.
<br>
<p>If such a repo existed, then we (Open MPI) could come up with a nice
<br>
FAQ/wikipage describing how 'ompi-tests' is private, but if one wanted a
<br>
broader range of tests then look at the public repo from OpenHPC. Then give
<br>
some instructions on the MTT side about how to drop it in to those
<br>
configurations.
<br>
<p><p>On Thu, May 19, 2016 at 5:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Assume that we are able to &#226;&#128;&#156;package&#226;&#128;&#157; MTT so it can be upstreamed to the
</span><br>
<span class="quotelev1">&gt; OpenHPC folks (as they have requested). It then becomes a little more
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;salable&#226;&#128;&#157; as a generalized testing tool, which means that the tests in our
</span><br>
<span class="quotelev1">&gt; repo could be used by others without having to deal with the MTT-specific
</span><br>
<span class="quotelev1">&gt; harness calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At that point, it seems to me one could make a case for a general MPI test
</span><br>
<span class="quotelev1">&gt; repo that supported MTT, and OpenHPC could even be a reasonable home for
</span><br>
<span class="quotelev1">&gt; it. I can certainly raise the question there, if you like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 19, 2016, at 8:24 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think talking to the MPICH folks about creating a common test pool might
</span><br>
<span class="quotelev1">&gt; be useful. More useful would be to get the MPI Forum to 'bless' it and take
</span><br>
<span class="quotelev1">&gt; input from all of the MPI venders. Maybe you all can talk about that in a
</span><br>
<span class="quotelev1">&gt; sidebar at the MPI Forum - depending on what we figure out here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPICH tests [1] contains a few test suites that are freely available
</span><br>
<span class="quotelev1">&gt; as tarball downloads on their site (though they seem a bit stale - last
</span><br>
<span class="quotelev1">&gt; updated 2012). They also have the 'tests' subdirectory in their repo [2].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From my perspective, the benefits of creating a new public test repo on
</span><br>
<span class="quotelev1">&gt; GitHub would be (in no particular order, numbers provided to aid in
</span><br>
<span class="quotelev1">&gt; reference during followup discussion):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (1) As we create new MPI test cases for issues, we file them publicly.
</span><br>
<span class="quotelev1">&gt; Currently, we drop them in ompi-tests for convenience. As a result, the
</span><br>
<span class="quotelev1">&gt; public cannot see/use them. Same for new test suites that we might create
</span><br>
<span class="quotelev1">&gt; as part of a new MPI standard interface proposal (e.g., FT, Sessions, or
</span><br>
<span class="quotelev1">&gt; even back to Nonblocking collectives).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (2) GitHub allows us to foster a discussion about the tests in a way that
</span><br>
<span class="quotelev1">&gt; is easily traceable. More so than using a mailing list and discussing a
</span><br>
<span class="quotelev1">&gt; tarball drop of a test suite.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (3) We can associate a MTT snippet of code for Test Build/Run that can be
</span><br>
<span class="quotelev1">&gt; used to run that test suite. Instead of putting this in with the MTT repo.
</span><br>
<span class="quotelev1">&gt; This would make these snippets slightly easier to find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (4) We can contain references to other test suites, even if we don't copy
</span><br>
<span class="quotelev1">&gt; them into our public test suite. This would allow us to say &quot;hey, there are
</span><br>
<span class="quotelev1">&gt; these great MPICH/Netpipe/IMB/... tests at this URL&quot; then give them
</span><br>
<span class="quotelev1">&gt; instructions on how we run them in MTT (or outside of MTT). If we have any
</span><br>
<span class="quotelev1">&gt; patches for that test suite we could collect them in the sub-directory
</span><br>
<span class="quotelev1">&gt; until (if) they get incorporated upstream. We could also associate notes on
</span><br>
<span class="quotelev1">&gt; runtime parameters that help tune Open MPI for a particular performance
</span><br>
<span class="quotelev1">&gt; test at various scales.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (5) Generally, it would make it easier for the community to pick up some
</span><br>
<span class="quotelev1">&gt; unit tests and run them to do a 'make deep-check' on their MPI install. I
</span><br>
<span class="quotelev1">&gt; think there is a hesitation to use the test suite from another MPI
</span><br>
<span class="quotelev1">&gt; implementation with Open MPI as it might not be as consistent as one would
</span><br>
<span class="quotelev1">&gt; like. Any failures would have to be investigated as a difference of
</span><br>
<span class="quotelev1">&gt; implementation (do their tests use our CLI correctly?), difference of MPI
</span><br>
<span class="quotelev1">&gt; Standard interpretation (as often happens as the MPI Forum rolls out
</span><br>
<span class="quotelev1">&gt; errata), or actual bug in Open MPI. For an end user that is tough to
</span><br>
<span class="quotelev1">&gt; determine. For MPI implementers it is easier since we live those
</span><br>
<span class="quotelev1">&gt; differences.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me play a little devils advocate here too on a couple points [not that
</span><br>
<span class="quotelev1">&gt; I need to really, I'm sure I'll get some help here]. (#) reference the
</span><br>
<span class="quotelev1">&gt; points above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) Shouldn't the MPI forum be doing this? Maybe. That is for the MPI
</span><br>
<span class="quotelev1">&gt; Forum to decide, and might be difficult to achieve given the diversity of
</span><br>
<span class="quotelev1">&gt; stakeholders at that level. However, if there is a public repo for MPI
</span><br>
<span class="quotelev1">&gt; tests that the MPI Forum can all agree on then that might be a good place
</span><br>
<span class="quotelev1">&gt; to start. I still think (4) would apply, but maybe we can solve that
</span><br>
<span class="quotelev1">&gt; differently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) How much do we really debate the correctness of our tests? Early on in
</span><br>
<span class="quotelev1">&gt; the project, quite often. Lately it still happens (NULL datatype issue, for
</span><br>
<span class="quotelev1">&gt; example). That discussion can only happen internally since the test cases
</span><br>
<span class="quotelev1">&gt; we reference are not public unless we expose them (which is toe'ing the
</span><br>
<span class="quotelev1">&gt; line of redistribution). There is value in broadening the discussion
</span><br>
<span class="quotelev1">&gt; outside of the Open MPI developers on some of those test cases. At the very
</span><br>
<span class="quotelev1">&gt; least for educational benefit of the community about some of the more
</span><br>
<span class="quotelev1">&gt; subtle edges of the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (3) Shouldn't that sample code live with MTT? Maybe. I can see both sides
</span><br>
<span class="quotelev1">&gt; of this one. I do think there is some value in separating out the
</span><br>
<span class="quotelev1">&gt; functional code of MTT from the test suite configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html">http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html</a>
</span><br>
<span class="quotelev1">&gt; [2] <a href="http://trac.mpich.org/projects/mpich/browser/test">http://trac.mpich.org/projects/mpich/browser/test</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 19, 2016 at 6:50 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was initially for this idea, but now I find myself conflicted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically: what's the value in yet another MPI test suite?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure, we've got a bunch of tests that no one else has (i.e., the things
</span><br>
<span class="quotelev2">&gt;&gt; we've home-grown over the years). Some are great tests.  Some will need to
</span><br>
<span class="quotelev2">&gt;&gt; be cleaned up and generalized. Some are user-contributed. Some are
</span><br>
<span class="quotelev2">&gt;&gt; ompi-specific.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Should these tests be contributed to some other test suite?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically: I'm wondering about the MPICH test suite - that seems to be
</span><br>
<span class="quotelev2">&gt;&gt; the only remaining big MPI test suite these days. Is it worth having a
</span><br>
<span class="quotelev2">&gt;&gt; discussion w the MPICH folks to see if a) their test suite is general
</span><br>
<span class="quotelev2">&gt;&gt; enough for all MPI implementations, and B) if they would accept a bunch of
</span><br>
<span class="quotelev2">&gt;&gt; random tests from us?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And if not, I think I'd like to understand better the value add that we
</span><br>
<span class="quotelev2">&gt;&gt; can provide by making another MPI test suite.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On May 18, 2016, at 11:54 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WHAT: Create a public test repo (ompi-tests-public) to collect
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WHY: ompi-tests is private, and difficult/impossible to open up. There
</span><br>
<span class="quotelev2">&gt;&gt; is a demand for a public collection of unit tests. This repo would allow us
</span><br>
<span class="quotelev2">&gt;&gt; to cultivate such a collection of unit tests.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WHERE: open-mpi GitHub project
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; TIMEOUT: Teleconf, Tue., May 24, 2016
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MORE DETAIL:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Over the years we have had periodic public requests for access to our
</span><br>
<span class="quotelev2">&gt;&gt; ompi-tests repo. Opening up ompi-tests to the public is nearly impossible
</span><br>
<span class="quotelev2">&gt;&gt; since, given the age of some of these tests, determining if we can
</span><br>
<span class="quotelev2">&gt;&gt; redistribute these tests has become complicated.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Recently we had two different requests on the MTT users and Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; devel list about access to the ompi-tests repo for testing. This got me
</span><br>
<span class="quotelev2">&gt;&gt; thinking that we could try to cultivate a public set of tests with a clear
</span><br>
<span class="quotelev2">&gt;&gt; lineage and license.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Below are my current thoughts for structure and maintenance of the
</span><br>
<span class="quotelev2">&gt;&gt; repo. Certainly up for discussion.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Similar to the existing ompi-tests repo structure.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  - Call the repository &quot;ompi-tests-public&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  - The repo will contain at least one test suite ('misc' - see below).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  - Each test suite can have its own build system
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  - Each test suite should contain a README-MTT.md which will contain a
</span><br>
<span class="quotelev2">&gt;&gt; sample Test Build and Test Run section for use in MTT.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; All tests contributed will be covered under the Open MPI license
</span><br>
<span class="quotelev2">&gt;&gt; agreement unless a specific test suite has a different, but compatible
</span><br>
<span class="quotelev2">&gt;&gt; license. To contribute a test to the repo a developer must sign the
</span><br>
<span class="quotelev2">&gt;&gt; contributor agreement. Contributions must go through a PR + Review process
</span><br>
<span class="quotelev2">&gt;&gt; (similar to how we maintain ompi-release). This is meant to provide an
</span><br>
<span class="quotelev2">&gt;&gt; opportunity to review the tests for correctness before acceptance into the
</span><br>
<span class="quotelev2">&gt;&gt; repo.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We will seed the repo with a 'misc' test suite. This test suite is
</span><br>
<span class="quotelev2">&gt;&gt; meant to collect all of the miscellaneous tests created by Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developers including those regression tests that emerge as part of Issues
</span><br>
<span class="quotelev2">&gt;&gt; or MPI Forum discussions, for example. It will contain the unit tests
</span><br>
<span class="quotelev2">&gt;&gt; currently in the Open MPI's examples directory - what we have been calling
</span><br>
<span class="quotelev2">&gt;&gt; the 'trivial' test suite. I was thinking about breaking it down into
</span><br>
<span class="quotelev2">&gt;&gt; roughly MPI Standard chapters.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If someone wants to contribute a whole suite of tests they can do so in
</span><br>
<span class="quotelev2">&gt;&gt; a separate directory in the repo with it's own build system. The license
</span><br>
<span class="quotelev2">&gt;&gt; must be compatible with the Open MPI license, and, in particular, allow the
</span><br>
<span class="quotelev2">&gt;&gt; code to be freely distributed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Let me know what you think. Certainly everything here is open for
</span><br>
<span class="quotelev2">&gt;&gt; discussion, and we will likely need to refine aspects as we go.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18997.php">http://www.open-mpi.org/community/lists/devel/2016/05/18997.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19000.php">http://www.open-mpi.org/community/lists/devel/2016/05/19000.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19002.php">http://www.open-mpi.org/community/lists/devel/2016/05/19002.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19005.php">http://www.open-mpi.org/community/lists/devel/2016/05/19005.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19008.php">Ralph Castain: "[OMPI devel] Datatype flag?"</a>
<li><strong>Previous message:</strong> <a href="19006.php">Abhishek Joshi: "[OMPI devel] Use non-cpu frequency for timers"</a>
<li><strong>In reply to:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
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
