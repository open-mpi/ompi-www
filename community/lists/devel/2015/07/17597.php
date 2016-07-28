<?
$subject_val = "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 11:29:51 2015" -->
<!-- isoreceived="20150706152951" -->
<!-- sent="Mon, 6 Jul 2015 15:29:49 +0000" -->
<!-- isosent="20150706152949" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Testing of &amp;quot;OMP_PROC_BIND value is invalid&amp;quot; errors" -->
<!-- id="AF7F0443-11F4-47B6-AAC0-D80ED4DD45FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z8H4-kJjpD4kRtC==Z1-8DDAtVU74ts0oJAKdrZ8Lsw5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-06 11:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17598.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17596.php">Ralph Castain: "Re: [OMPI devel] channel initialization failed MPI"</a>
<li><strong>In reply to:</strong> <a href="17584.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems like we've all cooled off a bit about this.  :-)
<br>
<p>I've thought a bunch about this over the past several days; here's my $0.02 (in no particular order):
<br>
<p>- The request for OpenMP support came from two Open MPI community members who are deeply involved in OpenMP (including the OpenMP standards body itself): IBM and LLNL.  To be clear: this wasn't an arbitrary request.  I believe the feature was implemented in good faith with what seemed to be a reasonable representation of the OpenMP (and Open MPI) community.
<br>
<p>- From looking at this objectively, I think the process did work like it was supposed to: there was some initial development and testing, it went to a pull request, it passed all the Jenkins tests, and then it was pushed to master.  That night, it failed in MTT, which caused further discussion.
<br>
<p>- Recently, we have started adding Jenkins into the mix for pre-master-commit validation, and it's helped a lot.  But it also hasn't been perfect -- as a community, we are still working to make Jenkins more useful (e.g., dealing with instability in Jenkins / the Github Pull Request Builder plugin, random local failures, ...etc).  We need more work in this area.
<br>
<p>- My $0.02: Jenkins testing -- when it works -- has shown to be great for limited smoke testing.  MTT, however, is still also required: the Open MPI code base is so large that the amount of time required for full validation (for a single platform) can be upwards of 24 hours.  This is simply too much for individual pull request testing -- we don't (and won't) have the resources to invoke that level of testing on each pull request.  Put simply: bugs show up in MTT that (intentionally) do not show up in smoke testing.
<br>
<p>- Another $0.02: a unique strength of the Open MPI community is our speed of development and reaction to user requests.  When someone asks for a feature, sometimes we are able to implement it very, very quickly.  That is -- quite frankly -- fantastic, and one of the reasons that users like Open MPI so much.  On the other hand, sometimes quick development like this leads to instability; there is definite value in the enterprise development model: extended testing and verification before committing, etc.  This end of the spectrum can lead to fewer bugs.  
<br>
<p>- There must be a compromise between the two ends of this spectrum; both ends seem undesirable.  I think the combination of pull requests + Jenkins (once it becomes stable) and MTT is nicely in the middle, and represents a good compromise.
<br>
<p>My final $0.01: master breaks.  It happens.  I wish it didn't, but I also a) strongly value the fact that we can bring in random features quickly, and b) am unwilling to require every developer to test every possible platform before pushing to master.  More testing and review will help reduce breakage; it seems like a good step in this direction will be to a) help make the pull request CI testing be more stable, and b) publish recipes for more organizations to hook into both our pull request smoke testing and MTT.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17598.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17596.php">Ralph Castain: "Re: [OMPI devel] channel initialization failed MPI"</a>
<li><strong>In reply to:</strong> <a href="17584.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
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
