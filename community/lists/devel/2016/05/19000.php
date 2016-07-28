<?
$subject_val = "Re: [OMPI devel] RFC: Public Test Repo";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 07:50:30 2016" -->
<!-- isoreceived="20160519115030" -->
<!-- sent="Thu, 19 May 2016 11:50:27 +0000" -->
<!-- isosent="20160519115027" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Public Test Repo" -->
<!-- id="D679EE19-1983-4CF1-B73F-55CDF06652EA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjE=_=op_DEzARkhhxJoCCNGLnGdo3_sv56ZiJ7WzpZFTuA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 07:50:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19001.php">George Bosilca: "[OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>Previous message:</strong> <a href="18999.php">Christopher Samuel: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>In reply to:</strong> <a href="18997.php">Josh Hursey: "[OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19002.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="19002.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was initially for this idea, but now I find myself conflicted. 
<br>
<p>Specifically: what's the value in yet another MPI test suite?
<br>
<p>Sure, we've got a bunch of tests that no one else has (i.e., the things we've home-grown over the years). Some are great tests.  Some will need to be cleaned up and generalized. Some are user-contributed. Some are ompi-specific.  
<br>
<p>Should these tests be contributed to some other test suite?
<br>
<p>Specifically: I'm wondering about the MPICH test suite - that seems to be the only remaining big MPI test suite these days. Is it worth having a discussion w the MPICH folks to see if a) their test suite is general enough for all MPI implementations, and B) if they would accept a bunch of random tests from us?
<br>
<p>And if not, I think I'd like to understand better the value add that we can provide by making another MPI test suite. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On May 18, 2016, at 11:54 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: Create a public test repo (ompi-tests-public) to collect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: ompi-tests is private, and difficult/impossible to open up. There is a demand for a public collection of unit tests. This repo would allow us to cultivate such a collection of unit tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: open-mpi GitHub project
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Teleconf, Tue., May 24, 2016
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Over the years we have had periodic public requests for access to our ompi-tests repo. Opening up ompi-tests to the public is nearly impossible since, given the age of some of these tests, determining if we can redistribute these tests has become complicated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recently we had two different requests on the MTT users and Open MPI devel list about access to the ompi-tests repo for testing. This got me thinking that we could try to cultivate a public set of tests with a clear lineage and license.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below are my current thoughts for structure and maintenance of the repo. Certainly up for discussion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Similar to the existing ompi-tests repo structure.
</span><br>
<span class="quotelev1">&gt;  - Call the repository &quot;ompi-tests-public&quot;
</span><br>
<span class="quotelev1">&gt;  - The repo will contain at least one test suite ('misc' - see below).
</span><br>
<span class="quotelev1">&gt;  - Each test suite can have its own build system
</span><br>
<span class="quotelev1">&gt;  - Each test suite should contain a README-MTT.md which will contain a sample Test Build and Test Run section for use in MTT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All tests contributed will be covered under the Open MPI license agreement unless a specific test suite has a different, but compatible license. To contribute a test to the repo a developer must sign the contributor agreement. Contributions must go through a PR + Review process (similar to how we maintain ompi-release). This is meant to provide an opportunity to review the tests for correctness before acceptance into the repo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We will seed the repo with a 'misc' test suite. This test suite is meant to collect all of the miscellaneous tests created by Open MPI developers including those regression tests that emerge as part of Issues or MPI Forum discussions, for example. It will contain the unit tests currently in the Open MPI's examples directory - what we have been calling the 'trivial' test suite. I was thinking about breaking it down into roughly MPI Standard chapters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If someone wants to contribute a whole suite of tests they can do so in a separate directory in the repo with it's own build system. The license must be compatible with the Open MPI license, and, in particular, allow the code to be freely distributed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know what you think. Certainly everything here is open for discussion, and we will likely need to refine aspects as we go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18997.php">http://www.open-mpi.org/community/lists/devel/2016/05/18997.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19001.php">George Bosilca: "[OMPI devel] Fwd: Errored: open-mpi/ompi#1160 (master - 50b3775)"</a>
<li><strong>Previous message:</strong> <a href="18999.php">Christopher Samuel: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>In reply to:</strong> <a href="18997.php">Josh Hursey: "[OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19002.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Reply:</strong> <a href="19002.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
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
