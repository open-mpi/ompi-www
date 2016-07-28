<?
$subject_val = "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 13:41:30 2016" -->
<!-- isoreceived="20160420174130" -->
<!-- sent="Wed, 20 Apr 2016 10:41:14 -0700" -->
<!-- isosent="20160420174114" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')" -->
<!-- id="EF48B415-4C29-492E-8D11-1FEB09ADBBAE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="532F9EE6-0A29-4A52-BEE0-25BC850B4E00_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 13:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18794.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18794.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 20, 2016, at 10:24 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 20, 2016, at 9:14 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was under the impression that this warning script only ran for developer builds.  But it looks like it's unconditionally run at the end of &quot;make install&quot; (on master only -- so far).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should we make this only run for developer builds?  (e.g., check for $srcdir/.git, or somesuch)  I think it's our goal to have zero common symbols, but that may not always be the case, and we don't want this potentially alarming warning showing up for users, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMO, this is basically just another warning flag.  If you enable most compiler warnings for non-developer builds, I don't see why you would go out of your way to disable this particular one.  You could always tweak the output to point to a wiki page that explains what the warning means, so concerned users can hopefully be assuaged.
</span><br>
<p>I guess this is where I differ. I see no benefit in warning a user about something they cannot control and that has no impact on them. These warnings were intended solely for developers as a reminder/suggestion that they follow a specific policy regarding common variables. Thus, they convey nothing of interest or use to a user.
<br>
<p>So I fail to see why we should include this warning in a non-developer build. As for other warnings, we have a stated policy (and proactive effort) to always stamp them out, so I don&#226;&#128;&#153;t think the user is actually seeing many (or any) of them. Remember, we turn off pedantic and other levels when doing non-developer builds.
<br>
<p>Seems like this warning falls into the same category to me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18794.php">http://www.open-mpi.org/community/lists/devel/2016/04/18794.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18794.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18794.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18796.php">dpchoudh .: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
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
