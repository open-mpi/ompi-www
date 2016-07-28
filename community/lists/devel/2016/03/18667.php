<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 08:54:32 2016" -->
<!-- isoreceived="20160302135432" -->
<!-- sent="Wed, 2 Mar 2016 05:54:28 -0800" -->
<!-- isosent="20160302135428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="88F98B97-A3EC-4B88-A9CB-CBE773EB4323_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tZjsthJaRMgKEgbZ-jUgWO9ojXWvKmg=5x_czSbydg5A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-02 08:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18668.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18668.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18668.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18669.php">Mark Santcroos: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps we can all meet in the middle:
<br>
<p>* remove the enable-debug-by-default logic
<br>
<p>* have mpirun -version clearly state that it is a debug build and include Jeff&#226;&#128;&#153;s warning about debug builds being used for performance testing
<br>
<p>I&#226;&#128;&#153;m increasingly feeling that we shouldn&#226;&#128;&#153;t output that message every time someone executes a debug-based operation, even if we add a param to turn off the warning.
<br>
<p><p><span class="quotelev1">&gt; On Mar 2, 2016, at 5:48 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that means that when a developer truse to reproduce exactly what an end user did, he/she will get a different behavior because only one of them is known. imho, that sounds a bit too crazy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what about an other approach :
</span><br>
<span class="quotelev1">&gt; have mpirun --version (and MPI api if any) clearly state this is a debug build ?
</span><br>
<span class="quotelev1">&gt; I mean a &quot;serious&quot; benchmark should list the third party libs and their versions, so that could be enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday, March 2, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; What about this crazy idea? We already have .opal_unignore that looks at the username. Well, what if we did the same thing here? Have autogen.pl &lt;<a href="http://autogen.pl/">http://autogen.pl/</a>&gt; look at the username - if it is a known developer, then enable debug. If not, then disable it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am just concerned that we are going to spend a bunch of time responding to annoyed/concerned users about this warning. Every time we ask someone to run a debug build to diagnose a problem, or someone builds a debug build for their own diagnostic purposes, they are going to get an unnecessary warning. We already have had to contend with the annoyed users dealing with auto-binding because we are trying to respond to the benchmarkers who refuse to make an effort to compare apples to apples - I would advise against extending that practice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I personally don&#226;&#128;&#153;t mind having to explicitly enable-debug as I build from a platform file, but making it more convenient for those developers who don&#226;&#128;&#153;t would be nice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 2, 2016, at 4:51 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 2, 2016, at 6:30 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 02 Mar 2016, at 5:06 , Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; what about *not* issuing this warning if OpenMPI is built from git ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that would be friendlier for OMPI developers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and should basically *not* affect endusers, since they would rather build OMPI from a tarball.
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
<span class="quotelev2">&gt; &gt; Just to be clear: the debug-by-default builds are activated when a .git directory is seen in the build directory.  This is for people who git clone and do a non-VPATH build.  Such people are typically developers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And just to make *that* more clear: building from a tarball will not have a .git directory, so you get an optimized build by default.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18664.php">http://www.open-mpi.org/community/lists/devel/2016/03/18664.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/03/18664.php">http://www.open-mpi.org/community/lists/devel/2016/03/18664.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18665.php">http://www.open-mpi.org/community/lists/devel/2016/03/18665.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/03/18665.php">http://www.open-mpi.org/community/lists/devel/2016/03/18665.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18666.php">http://www.open-mpi.org/community/lists/devel/2016/03/18666.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18668.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18666.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18668.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18668.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18669.php">Mark Santcroos: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
