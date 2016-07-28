<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 08:11:20 2016" -->
<!-- isoreceived="20160302131120" -->
<!-- sent="Wed, 2 Mar 2016 05:11:17 -0800" -->
<!-- isosent="20160302131117" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="5CA5918A-2551-4368-BE1B-ED9179AEB997_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="82FD19A1-2C5B-4AA4-8CBF-6170C08234B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: warn if running a debug build<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-02 08:11:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What about this crazy idea? We already have .opal_unignore that looks at the username. Well, what if we did the same thing here? Have autogen.pl look at the username - if it is a known developer, then enable debug. If not, then disable it.
<br>
<p>I am just concerned that we are going to spend a bunch of time responding to annoyed/concerned users about this warning. Every time we ask someone to run a debug build to diagnose a problem, or someone builds a debug build for their own diagnostic purposes, they are going to get an unnecessary warning. We already have had to contend with the annoyed users dealing with auto-binding because we are trying to respond to the benchmarkers who refuse to make an effort to compare apples to apples - I would advise against extending that practice.
<br>
<p>I personally don&#226;&#128;&#153;t mind having to explicitly enable-debug as I build from a platform file, but making it more convenient for those developers who don&#226;&#128;&#153;t would be nice.
<br>
<p><span class="quotelev1">&gt; On Mar 2, 2016, at 4:51 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2016, at 6:30 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 02 Mar 2016, at 5:06 , Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what about *not* issuing this warning if OpenMPI is built from git ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that would be friendlier for OMPI developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and should basically *not* affect endusers, since they would rather build OMPI from a tarball.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; VPATH builds aren't debug builds by default, or are they?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct -- VPATH builds are *not* debug-by-default builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to be clear: the debug-by-default builds are activated when a .git directory is seen in the build directory.  This is for people who git clone and do a non-VPATH build.  Such people are typically developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And just to make *that* more clear: building from a tarball will not have a .git directory, so you get an optimized build by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18664.php">http://www.open-mpi.org/community/lists/devel/2016/03/18664.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
