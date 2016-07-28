<?
$subject_val = "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 14:08:47 2016" -->
<!-- isoreceived="20160420180847" -->
<!-- sent="Wed, 20 Apr 2016 14:08:46 -0400" -->
<!-- isosent="20160420180846" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')" -->
<!-- id="CAHXxYDhwW1trW6+L-qEsFkQje+ZXjzz=Y0dnAc+m6L6YMyqt2w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF48B415-4C29-492E-8D11-1FEB09ADBBAE_at_open-mpi.org" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 14:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all
<br>
<p>Just to clarify, I was doing a build (after adding code to support a new
<br>
transport) from code pulled from git (a 'git clone') when I came across
<br>
this warning, so I suppose this would be a 'developer build'.
<br>
<p>I know I am not a real MPI developer (I am doing OMPI internal development
<br>
for the second time in my whole career), but if my vote counts, I'd vote
<br>
for leaving the warning in. It, in my opinion, encourages good coding
<br>
practice, that should matter to everyone, not just 'core developers'.
<br>
However, I agree that the phrasing of the warning is confusing, and adding
<br>
a URL there to an appropriate page should be enough to prevent future
<br>
questions like this in the support forum.
<br>
<p>Thanks
<br>
Durga
<br>
<p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p>On Wed, Apr 20, 2016 at 1:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 20, 2016, at 10:24 AM, Dave Goodell (dgoodell) &lt;
</span><br>
<span class="quotelev1">&gt; dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 20, 2016, at 9:14 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was under the impression that this warning script only ran for
</span><br>
<span class="quotelev1">&gt; developer builds.  But it looks like it's unconditionally run at the end of
</span><br>
<span class="quotelev1">&gt; &quot;make install&quot; (on master only -- so far).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Should we make this only run for developer builds?  (e.g., check for
</span><br>
<span class="quotelev1">&gt; $srcdir/.git, or somesuch)  I think it's our goal to have zero common
</span><br>
<span class="quotelev1">&gt; symbols, but that may not always be the case, and we don't want this
</span><br>
<span class="quotelev1">&gt; potentially alarming warning showing up for users, right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; IMO, this is basically just another warning flag.  If you enable most
</span><br>
<span class="quotelev1">&gt; compiler warnings for non-developer builds, I don't see why you would go
</span><br>
<span class="quotelev1">&gt; out of your way to disable this particular one.  You could always tweak the
</span><br>
<span class="quotelev1">&gt; output to point to a wiki page that explains what the warning means, so
</span><br>
<span class="quotelev1">&gt; concerned users can hopefully be assuaged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess this is where I differ. I see no benefit in warning a user about
</span><br>
<span class="quotelev1">&gt; something they cannot control and that has no impact on them. These
</span><br>
<span class="quotelev1">&gt; warnings were intended solely for developers as a reminder/suggestion that
</span><br>
<span class="quotelev1">&gt; they follow a specific policy regarding common variables. Thus, they convey
</span><br>
<span class="quotelev1">&gt; nothing of interest or use to a user.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I fail to see why we should include this warning in a non-developer
</span><br>
<span class="quotelev1">&gt; build. As for other warnings, we have a stated policy (and proactive
</span><br>
<span class="quotelev1">&gt; effort) to always stamp them out, so I don&#226;&#128;&#153;t think the user is actually
</span><br>
<span class="quotelev1">&gt; seeing many (or any) of them. Remember, we turn off pedantic and other
</span><br>
<span class="quotelev1">&gt; levels when doing non-developer builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems like this warning falls into the same category to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Dave
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18794.php">http://www.open-mpi.org/community/lists/devel/2016/04/18794.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18795.php">http://www.open-mpi.org/community/lists/devel/2016/04/18795.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18796/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
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
