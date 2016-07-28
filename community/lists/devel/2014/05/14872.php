<?
$subject_val = "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 18:43:52 2014" -->
<!-- isoreceived="20140527224352" -->
<!-- sent="Tue, 27 May 2014 15:43:48 -0700" -->
<!-- isosent="20140527224348" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework" -->
<!-- id="D23EE1BD-7BA0-4D47-B559-2145C1E5CA60_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkXXnhV5o491KRD_jY9P-ucY97o-P77PnmDdhACfR7PdEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 18:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14873.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI Opengrok config"</a>
<li><strong>Previous message:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14865.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2014, at 2:28 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, May 27, 2014 at 5:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said, I agree with Ralph on the fact that accepting them in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trunk doesn't automatically qualify it for inclusion in any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; further stable release. However, if ORNL setup nightly builds to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; validate their module, I'm pretty certain nothing will stay against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their inclusion in some future release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I strongly disagree - we've discussed this at length before, and the issue of release schedule coordination is a deal buster. If people think it helpful to have their component in the devel trunk, I can somewhat absorb that one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no such coordination issue in this particular case, as we
</span><br>
<span class="quotelev1">&gt; don't coordinate with their releases. They maintain their component,
</span><br>
<span class="quotelev1">&gt; check for the right version of their software and enable their
</span><br>
<span class="quotelev1">&gt; component if every requirement is fulfilled.
</span><br>
<p>Ah, but we do have to coordinate George. The scenario we encountered in this before was when someone needed to make a change in their component because of a change in their corresponding system. So the pressure mounted to generate a release from OMPI that would contain that revision - but that raised further issues. Was this a &quot;bug&quot; fix that could go in a stable series, as requested? How did we deal with their schedule vs ours in terms of what version of OMPI works with what version of their software?
<br>
<p>Been thru this with Slurm (when we added some specific OMPI-support into Slurm) and it was a terrible problem. Finally had to break the connection at the end of 1.6 as both sides were too frustrated to continue it. It was just too hard to keep track of what version of Slurm worked with what version of OMPI, explaining and helping users to figure out the combinations, etc.
<br>
<p>Now, that said - in these cases, we have a much smaller version of that problem. Only one STCI site (plus you folks in a less-critical role), and no HPX sites (outside of a couple of academic researchers) at this time. So coordination may indeed be something we simply offload to them - they can keep track of version-to-version matching at that small scale.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Adding them to a release is a non-starter with me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On which base are you making this assessment? This is a community
</span><br>
<span class="quotelev1">&gt; based project, if one of the members of the community undergo the
</span><br>
<span class="quotelev1">&gt; effort to develop and validate a specialized component and if they
</span><br>
<span class="quotelev1">&gt; engage to follow up on the bug reports on their work, I don't see any
</span><br>
<span class="quotelev1">&gt; valid ground we can forbid them from including their module on a
</span><br>
<span class="quotelev1">&gt; stable release.
</span><br>
<p>I agree that we have similar issues with other 3rd party libraries, and it has been interesting to watch the recent issues with MOFED on the user list in that regard. In some ways, I guess we could consider it in a similar light and argue that the coordination with RTE release mirrors things like OFED. Our current dependencies are on broader community libraries that undergo slow rates of change, not on independent libraries, and that does make some degree of difference. We also have never been asked to coordinate with those libraries - at least, not yet, though this entire discussion raises the question of &quot;if we do it for them, then why not for others?&quot;.
<br>
<p>So maybe you have the right approach to that issue. Let the contributing member wrestle with the woes of coordinating their releases on their end, with the RM on this end having the right to say &quot;no&quot; to pressures regarding schedule and/or modifications to stable release branches. Sadly it will definitely make the RM's life even harder as these pressures aren't always easy to resolve...but that will be the next guy's problem :-)
<br>
<p>Will have to ponder more and hopefully deal with it if/when it becomes an issue. Your comments definitely sparked the thinking, though, so thanks!
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14871.php">http://www.open-mpi.org/community/lists/devel/2014/05/14871.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14873.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI Opengrok config"</a>
<li><strong>Previous message:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14871.php">George Bosilca: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14865.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
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
