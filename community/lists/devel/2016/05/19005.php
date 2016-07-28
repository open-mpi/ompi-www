<?
$subject_val = "Re: [OMPI devel] RFC: Public Test Repo";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 18:24:33 2016" -->
<!-- isoreceived="20160519222433" -->
<!-- sent="Thu, 19 May 2016 15:24:28 -0700" -->
<!-- isosent="20160519222428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Public Test Repo" -->
<!-- id="CD256EA0-8267-45D8-B673-49DED6D88D39_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAANzjEnH+_sMYUwZqkEg73tVui_Up9jeOGmsR5Q+o9-Xdps=2w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 18:24:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19006.php">Abhishek Joshi: "[OMPI devel] Use non-cpu frequency for timers"</a>
<li><strong>Previous message:</strong> <a href="19004.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>In reply to:</strong> <a href="19002.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19007.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="19007.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Assume that we are able to &#226;&#128;&#156;package&#226;&#128;&#157; MTT so it can be upstreamed to the OpenHPC folks (as they have requested). It then becomes a little more &#226;&#128;&#156;salable&#226;&#128;&#157; as a generalized testing tool, which means that the tests in our repo could be used by others without having to deal with the MTT-specific harness calls.
<br>
<p>At that point, it seems to me one could make a case for a general MPI test repo that supported MTT, and OpenHPC could even be a reasonable home for it. I can certainly raise the question there, if you like.
<br>
<p><p><span class="quotelev1">&gt; On May 19, 2016, at 8:24 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think talking to the MPICH folks about creating a common test pool might be useful. More useful would be to get the MPI Forum to 'bless' it and take input from all of the MPI venders. Maybe you all can talk about that in a sidebar at the MPI Forum - depending on what we figure out here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPICH tests [1] contains a few test suites that are freely available as tarball downloads on their site (though they seem a bit stale - last updated 2012). They also have the 'tests' subdirectory in their repo [2].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From my perspective, the benefits of creating a new public test repo on GitHub would be (in no particular order, numbers provided to aid in reference during followup discussion):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  (1) As we create new MPI test cases for issues, we file them publicly. Currently, we drop them in ompi-tests for convenience. As a result, the public cannot see/use them. Same for new test suites that we might create as part of a new MPI standard interface proposal (e.g., FT, Sessions, or even back to Nonblocking collectives).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  (2) GitHub allows us to foster a discussion about the tests in a way that is easily traceable. More so than using a mailing list and discussing a tarball drop of a test suite.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  (3) We can associate a MTT snippet of code for Test Build/Run that can be used to run that test suite. Instead of putting this in with the MTT repo. This would make these snippets slightly easier to find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  (4) We can contain references to other test suites, even if we don't copy them into our public test suite. This would allow us to say &quot;hey, there are these great MPICH/Netpipe/IMB/... tests at this URL&quot; then give them instructions on how we run them in MTT (or outside of MTT). If we have any patches for that test suite we could collect them in the sub-directory until (if) they get incorporated upstream. We could also associate notes on runtime parameters that help tune Open MPI for a particular performance test at various scales.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  (5) Generally, it would make it easier for the community to pick up some unit tests and run them to do a 'make deep-check' on their MPI install. I think there is a hesitation to use the test suite from another MPI implementation with Open MPI as it might not be as consistent as one would like. Any failures would have to be investigated as a difference of implementation (do their tests use our CLI correctly?), difference of MPI Standard interpretation (as often happens as the MPI Forum rolls out errata), or actual bug in Open MPI. For an end user that is tough to determine. For MPI implementers it is easier since we live those differences.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me play a little devils advocate here too on a couple points [not that I need to really, I'm sure I'll get some help here]. (#) reference the points above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) Shouldn't the MPI forum be doing this? Maybe. That is for the MPI Forum to decide, and might be difficult to achieve given the diversity of stakeholders at that level. However, if there is a public repo for MPI tests that the MPI Forum can all agree on then that might be a good place to start. I still think (4) would apply, but maybe we can solve that differently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) How much do we really debate the correctness of our tests? Early on in the project, quite often. Lately it still happens (NULL datatype issue, for example). That discussion can only happen internally since the test cases we reference are not public unless we expose them (which is toe'ing the line of redistribution). There is value in broadening the discussion outside of the Open MPI developers on some of those test cases. At the very least for educational benefit of the community about some of the more subtle edges of the MPI standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (3) Shouldn't that sample code live with MTT? Maybe. I can see both sides of this one. I do think there is some value in separating out the functional code of MTT from the test suite configurations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html">http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html</a> &lt;<a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html">http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; [2] <a href="http://trac.mpich.org/projects/mpich/browser/test">http://trac.mpich.org/projects/mpich/browser/test</a> &lt;<a href="http://trac.mpich.org/projects/mpich/browser/test">http://trac.mpich.org/projects/mpich/browser/test</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 19, 2016 at 6:50 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I was initially for this idea, but now I find myself conflicted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically: what's the value in yet another MPI test suite?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure, we've got a bunch of tests that no one else has (i.e., the things we've home-grown over the years). Some are great tests.  Some will need to be cleaned up and generalized. Some are user-contributed. Some are ompi-specific.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should these tests be contributed to some other test suite?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically: I'm wondering about the MPICH test suite - that seems to be the only remaining big MPI test suite these days. Is it worth having a discussion w the MPICH folks to see if a) their test suite is general enough for all MPI implementations, and B) if they would accept a bunch of random tests from us?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And if not, I think I'd like to understand better the value add that we can provide by making another MPI test suite.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 18, 2016, at 11:54 PM, Josh Hursey &lt;jjhursey_at_[hidden] &lt;mailto:jjhursey_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Create a public test repo (ompi-tests-public) to collect
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHY: ompi-tests is private, and difficult/impossible to open up. There is a demand for a public collection of unit tests. This repo would allow us to cultivate such a collection of unit tests.
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
<span class="quotelev2">&gt; &gt; Over the years we have had periodic public requests for access to our ompi-tests repo. Opening up ompi-tests to the public is nearly impossible since, given the age of some of these tests, determining if we can redistribute these tests has become complicated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Recently we had two different requests on the MTT users and Open MPI devel list about access to the ompi-tests repo for testing. This got me thinking that we could try to cultivate a public set of tests with a clear lineage and license.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Below are my current thoughts for structure and maintenance of the repo. Certainly up for discussion.
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
<span class="quotelev2">&gt; &gt;  - Each test suite should contain a README-MTT.md which will contain a sample Test Build and Test Run section for use in MTT.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All tests contributed will be covered under the Open MPI license agreement unless a specific test suite has a different, but compatible license. To contribute a test to the repo a developer must sign the contributor agreement. Contributions must go through a PR + Review process (similar to how we maintain ompi-release). This is meant to provide an opportunity to review the tests for correctness before acceptance into the repo.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We will seed the repo with a 'misc' test suite. This test suite is meant to collect all of the miscellaneous tests created by Open MPI developers including those regression tests that emerge as part of Issues or MPI Forum discussions, for example. It will contain the unit tests currently in the Open MPI's examples directory - what we have been calling the 'trivial' test suite. I was thinking about breaking it down into roughly MPI Standard chapters.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If someone wants to contribute a whole suite of tests they can do so in a separate directory in the repo with it's own build system. The license must be compatible with the Open MPI license, and, in particular, allow the code to be freely distributed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know what you think. Certainly everything here is open for discussion, and we will likely need to refine aspects as we go.
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
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18997.php">http://www.open-mpi.org/community/lists/devel/2016/05/18997.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18997.php">http://www.open-mpi.org/community/lists/devel/2016/05/18997.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19000.php">http://www.open-mpi.org/community/lists/devel/2016/05/19000.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/19000.php">http://www.open-mpi.org/community/lists/devel/2016/05/19000.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19002.php">http://www.open-mpi.org/community/lists/devel/2016/05/19002.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19006.php">Abhishek Joshi: "[OMPI devel] Use non-cpu frequency for timers"</a>
<li><strong>Previous message:</strong> <a href="19004.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>In reply to:</strong> <a href="19002.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19007.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="19007.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
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
