<?
$subject_val = "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 15:08:20 2016" -->
<!-- isoreceived="20160420190820" -->
<!-- sent="Wed, 20 Apr 2016 19:08:18 +0000" -->
<!-- isosent="20160420190818" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')" -->
<!-- id="F5FA7E0B-4BEF-444E-8353-9F483899A1E0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDhwW1trW6+L-qEsFkQje+ZXjzz=Y0dnAc+m6L6YMyqt2w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 15:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18798.php">Howard Pritchard: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18798.php">Howard Pritchard: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18798.php">Howard Pritchard: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2016, at 2:08 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to clarify, I was doing a build (after adding code to support a new transport) from code pulled from git (a 'git clone') when I came across this warning, so I suppose this would be a 'developer build'.
</span><br>
<p>No worries.  I only brought it up because this is currently on master (and not v2.x), but it will eventually end up in a release branch -- even if it's v3.0.0.  So it's something we'd want figure out before it hits the release branch.
<br>
<p><span class="quotelev1">&gt; I know I am not a real MPI developer (I am doing OMPI internal development for the second time in my whole career), but if my vote counts, I'd vote for leaving the warning in.
</span><br>
<p>I don't know why you keep pretending that you're not an OMPI developer.  :-)
<br>
<p>You're developing a BTL and asking all kinds of good questions about the code, and that's good enough for all of us.
<br>
<p><span class="quotelev1">&gt; It, in my opinion, encourages good coding practice, that should matter to everyone, not just 'core developers'. However, I agree that the phrasing of the warning is confusing, and adding a URL there to an appropriate page should be enough to prevent future questions like this in the support forum.
</span><br>
<p>FWIW: I think I agree with Ralph on this one.  Yes, we should make those common symbols zero.  But a user seeing this warning will likely be concerned, and there's nothing they can do about it.  So I think it should be a &quot;developer only&quot; kind of warning.
<br>
<p>My $0.02.
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
<li><strong>Next message:</strong> <a href="18798.php">Howard Pritchard: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18798.php">Howard Pritchard: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18798.php">Howard Pritchard: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
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
