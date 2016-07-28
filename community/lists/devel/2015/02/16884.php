<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 17:24:33 2015" -->
<!-- isoreceived="20150202222433" -->
<!-- sent="Mon, 2 Feb 2015 22:24:32 +0000" -->
<!-- isosent="20150202222432" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="2CAFB422-B53E-43DB-B86A-30DBA55C57FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53D8EC30-048E-42D8-9AA0-F57B8C4C07D3_at_cisco.com" -->
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
<strong>Date:</strong> 2015-02-02 17:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16879.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and I just chatted about this on the phone.
<br>
<p>IANAL, but after talking through the license stuff, we think there will be new license issues caused by --disable-dlopen behavior.
<br>
<p>It feels like there's a lot of unexpected issues coming up with (more-or-less) causing (most?) people to build with --disable-dlopen support:
<br>
<p>- (probably?) larger libraries and process memory footprint
<br>
- wonky behavior on Cray/NERSC Hopper system (but perhaps Howard will solve that one?)
<br>
- after talking to Howard and Rolf today, might well need to (re)add --with-libltdl=DIR support (for libltdl installed in non-standard locations)
<br>
- difference in behavior between git clone builds (require libltdl by default) and production builds (build libltdl support or not)
<br>
- it seems that there are valid use cases where people want to add plugins to existing Open MPI installations
<br>
<p>It might well be worth investigating manually embedding libltdl ourselves (i.e., git committing libltdl vs. having autogen copy it in).  The bootstrapping will be a bit different; Dave raised the point last week that it's not guaranteed that this will work -- would need to be investigated.
<br>
<p><p><p><p><span class="quotelev1">&gt; On Feb 2, 2015, at 2:25 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Uuuurggghhh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 2, 2015, at 1:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Returning to the libltdl question: I think we may have a problem here. If we remove libltdl and default to disable-dlopen, then the user will - without warning - slurp all components that are able to build into libompi. This includes everything they specified, BUT because of our &quot;build if you can&quot; policy, it also includes a lot of stuff that they didn't specify and may not even realize is present.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this is true -- the size of libmpi.so (etc.) will actually go up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;digression&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be an interesting experiment to see if the process size actually increases.  When you dlopen() a DSO, it's loaded into distinct pages -- even components that are fairly small (e.g., mca_btl_self.so is 63726 bytes on my system) are automatically inflated to be multiples of 4K.  When all the components are packed into libmpi.so (etc), the end result is actually smaller.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, when built as DSOs, OMPI can (and likely does) dlclose components that you don't use at run time.  You obviously can't do that when all the components are in libmpi.so (etc.).  Meaning: there's forces pulling both ways here -- I wonder whether users will typically grow or shrink their process sizes...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The answer may be an obvious &quot;your process will grow&quot;, but it may not be.  If someone has some spare cycles (hah!), this would be an interesting experiment.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;/digression&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've had these discussions before; the conclusion of which was to ensure that we provide &quot;--disable&quot; and &quot;--without&quot; options for those people who know exactly what they want, and don't want anything else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So Ralph -- I hear the cautionary warning that you're raising.  Are the --disable/--without options no longer viable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As a result, they not only will have a bloated memory footprint, but they also may very well have slurped in GPL libraries (e.g., if Slurm is present) that could potentially impact their legal situation. We may need to reconsider our build policy in light of this situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IANAL and all that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're distributing binaries, my understanding is that this doesn't change your legal situation.  I.e., if you're a) building an OMPI component that links against GPL libraries, and then b) distributing those binaries, it doesn't matter if you built the component as a DSO or as part of (for example) libmpi.so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All that being said, yes, removing our default model of plugins is a *big* change.  There are many subtle issues involved (including those that Ralph brought up in this mail).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we want to keep this model (plugins by default), the only way I can think of to do that is to manually embed libltdl ourselves.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16879.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
