<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 14:25:03 2015" -->
<!-- isoreceived="20150202192503" -->
<!-- sent="Mon, 2 Feb 2015 19:25:02 +0000" -->
<!-- isosent="20150202192502" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="53D8EC30-048E-42D8-9AA0-F57B8C4C07D3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ocW0GHjArLK0sJJ4GLzAVRfv7d5jHd8wxePvGxT6vdU=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 14:25:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Previous message:</strong> <a href="16878.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16877.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16884.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16884.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Uuuurggghhh.
<br>
<p>More below.
<br>
<p><p><span class="quotelev1">&gt; On Feb 2, 2015, at 1:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Returning to the libltdl question: I think we may have a problem here. If we remove libltdl and default to disable-dlopen, then the user will - without warning - slurp all components that are able to build into libompi. This includes everything they specified, BUT because of our &quot;build if you can&quot; policy, it also includes a lot of stuff that they didn't specify and may not even realize is present.
</span><br>
<p>Yes, this is true -- the size of libmpi.so (etc.) will actually go up.
<br>
<p>&lt;digression&gt;
<br>
<p>It would be an interesting experiment to see if the process size actually increases.  When you dlopen() a DSO, it's loaded into distinct pages -- even components that are fairly small (e.g., mca_btl_self.so is 63726 bytes on my system) are automatically inflated to be multiples of 4K.  When all the components are packed into libmpi.so (etc), the end result is actually smaller.
<br>
<p>That being said, when built as DSOs, OMPI can (and likely does) dlclose components that you don't use at run time.  You obviously can't do that when all the components are in libmpi.so (etc.).  Meaning: there's forces pulling both ways here -- I wonder whether users will typically grow or shrink their process sizes...?
<br>
<p>The answer may be an obvious &quot;your process will grow&quot;, but it may not be.  If someone has some spare cycles (hah!), this would be an interesting experiment.  :-)
<br>
<p>&lt;/digression&gt;
<br>
<p>We've had these discussions before; the conclusion of which was to ensure that we provide &quot;--disable&quot; and &quot;--without&quot; options for those people who know exactly what they want, and don't want anything else.
<br>
<p>So Ralph -- I hear the cautionary warning that you're raising.  Are the --disable/--without options no longer viable?
<br>
<p><span class="quotelev1">&gt; As a result, they not only will have a bloated memory footprint, but they also may very well have slurped in GPL libraries (e.g., if Slurm is present) that could potentially impact their legal situation. We may need to reconsider our build policy in light of this situation.
</span><br>
<p>IANAL and all that.
<br>
<p>If you're distributing binaries, my understanding is that this doesn't change your legal situation.  I.e., if you're a) building an OMPI component that links against GPL libraries, and then b) distributing those binaries, it doesn't matter if you built the component as a DSO or as part of (for example) libmpi.so.
<br>
<p>-----
<br>
<p>All that being said, yes, removing our default model of plugins is a *big* change.  There are many subtle issues involved (including those that Ralph brought up in this mail).
<br>
<p>If we want to keep this model (plugins by default), the only way I can think of to do that is to manually embed libltdl ourselves.
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
<li><strong>Next message:</strong> <a href="16880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Previous message:</strong> <a href="16878.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16877.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16884.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16884.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
