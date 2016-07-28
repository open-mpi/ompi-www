<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 07:51:37 2016" -->
<!-- isoreceived="20160302125137" -->
<!-- sent="Wed, 2 Mar 2016 12:51:35 +0000" -->
<!-- isosent="20160302125135" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="82FD19A1-2C5B-4AA4-8CBF-6170C08234B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B3CAAFA2-2C7A-46D9-AD2F-EF17DE3FB2A7_at_rutgers.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-02 07:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18663.php">Mark Santcroos: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18663.php">Mark Santcroos: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2016, at 6:30 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 02 Mar 2016, at 5:06 , Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; what about *not* issuing this warning if OpenMPI is built from git ?
</span><br>
<span class="quotelev2">&gt;&gt; that would be friendlier for OMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; and should basically *not* affect endusers, since they would rather build OMPI from a tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; VPATH builds aren't debug builds by default, or are they?
</span><br>
<p>Correct -- VPATH builds are *not* debug-by-default builds.
<br>
<p>Just to be clear: the debug-by-default builds are activated when a .git directory is seen in the build directory.  This is for people who git clone and do a non-VPATH build.  Such people are typically developers.
<br>
<p>And just to make *that* more clear: building from a tarball will not have a .git directory, so you get an optimized build by default.
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
<li><strong>Next message:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18663.php">Mark Santcroos: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18663.php">Mark Santcroos: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18665.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
