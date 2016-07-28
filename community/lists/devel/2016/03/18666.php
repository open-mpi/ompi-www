<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 08:48:09 2016" -->
<!-- isoreceived="20160302134809" -->
<!-- sent="Wed, 2 Mar 2016 22:48:08 +0900" -->
<!-- isosent="20160302134808" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="CAAkFZ5tZjsthJaRMgKEgbZ-jUgWO9ojXWvKmg=5x_czSbydg5A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5CA5918A-2551-4368-BE1B-ED9179AEB997_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-02 08:48:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>that means that when a developer truse to reproduce exactly what an end
<br>
user did, he/she will get a different behavior because only one of them is
<br>
known. imho, that sounds a bit too crazy.
<br>
<p>what about an other approach :
<br>
have mpirun --version (and MPI api if any) clearly state this is a debug
<br>
build ?
<br>
I mean a &quot;serious&quot; benchmark should list the third party libs and their
<br>
versions, so that could be enough.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, March 2, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What about this crazy idea? We already have .opal_unignore that looks at
</span><br>
<span class="quotelev1">&gt; the username. Well, what if we did the same thing here? Have autogen.pl
</span><br>
<span class="quotelev1">&gt; look at the username - if it is a known developer, then enable debug. If
</span><br>
<span class="quotelev1">&gt; not, then disable it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am just concerned that we are going to spend a bunch of time responding
</span><br>
<span class="quotelev1">&gt; to annoyed/concerned users about this warning. Every time we ask someone to
</span><br>
<span class="quotelev1">&gt; run a debug build to diagnose a problem, or someone builds a debug build
</span><br>
<span class="quotelev1">&gt; for their own diagnostic purposes, they are going to get an unnecessary
</span><br>
<span class="quotelev1">&gt; warning. We already have had to contend with the annoyed users dealing with
</span><br>
<span class="quotelev1">&gt; auto-binding because we are trying to respond to the benchmarkers who
</span><br>
<span class="quotelev1">&gt; refuse to make an effort to compare apples to apples - I would advise
</span><br>
<span class="quotelev1">&gt; against extending that practice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I personally don&#226;&#128;&#153;t mind having to explicitly enable-debug as I build from
</span><br>
<span class="quotelev1">&gt; a platform file, but making it more convenient for those developers who
</span><br>
<span class="quotelev1">&gt; don&#226;&#128;&#153;t would be nice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 2, 2016, at 4:51 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 2, 2016, at 6:30 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 02 Mar 2016, at 5:06 , Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; what about *not* issuing this warning if OpenMPI is built from git ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that would be friendlier for OMPI developers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and should basically *not* affect endusers, since they would rather
</span><br>
<span class="quotelev1">&gt; build OMPI from a tarball.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; VPATH builds aren't debug builds by default, or are they?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Correct -- VPATH builds are *not* debug-by-default builds.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to be clear: the debug-by-default builds are activated when a .git
</span><br>
<span class="quotelev1">&gt; directory is seen in the build directory.  This is for people who git clone
</span><br>
<span class="quotelev1">&gt; and do a non-VPATH build.  Such people are typically developers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And just to make *that* more clear: building from a tarball will not
</span><br>
<span class="quotelev1">&gt; have a .git directory, so you get an optimized build by default.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18664.php">http://www.open-mpi.org/community/lists/devel/2016/03/18664.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18665.php">http://www.open-mpi.org/community/lists/devel/2016/03/18665.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18666/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
