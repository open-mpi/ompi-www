<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 12:00:46 2015" -->
<!-- isoreceived="20150904160046" -->
<!-- sent="Fri, 4 Sep 2015 16:00:12 +0000" -->
<!-- isosent="20150904160012" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="2966EF26-CFCE-49DC-BB59-B3CA665C5822_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AD1433D3-B03F-42FB-A6D5-D50679050365_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 12:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17975.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17975.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17975.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael: Wait, why are you disabling usnic?
<br>

<br>
Please don't penalize usNIC because of Intel's PSM issues.
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Sep 4, 2015, at 9:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Umm&#226;&#128;&#166;why would USNIC depend on libpsm_infinipath?? Jeff or Dave - is that true?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 4, 2015, at 5:57 AM, Michal Schmidt &lt;mschmidt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 09/03/2015 03:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess I didn&#226;&#128;&#153;t make it clear in my prior comment, so let me try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; again. I understand about dlopen and the fix that George proposed -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we had internally discussed this as well. However, the questions that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; raises are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. how does the distro (Michal) decide which PSM module to disable by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default in their package?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the RHEL package I have disabled PSM2 by default in
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-mca-params.conf:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # Disable the psm2 MTL by default.
</span><br>
<span class="quotelev2">&gt;&gt; # Workaround for <a href="https://bugzilla.redhat.com/show_bug.cgi?id=1259835">https://bugzilla.redhat.com/show_bug.cgi?id=1259835</a>
</span><br>
<span class="quotelev2">&gt;&gt; # This avoids a conflict between libpsm2.so.2 and libpsm_infinipath.so.1.
</span><br>
<span class="quotelev2">&gt;&gt; mtl = ^psm2
</span><br>
<span class="quotelev2">&gt;&gt; # If psm2 is needed, comment out the above line and uncomment
</span><br>
<span class="quotelev2">&gt;&gt; # the following two lines. This will disable MCAs that are known to
</span><br>
<span class="quotelev2">&gt;&gt; # depend on libpsm_infinipath.so.1:
</span><br>
<span class="quotelev2">&gt;&gt; #   mtl = ^psm,ofi
</span><br>
<span class="quotelev2">&gt;&gt; #   btl = ^usnic
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. how does the user &#226;&#128;&#156;discover&#226;&#128;&#157; that their fabric has automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been disabled, especially since this has never been the case before?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There will be a release note.
</span><br>
<span class="quotelev2">&gt;&gt; OmniPath was not previously supported in RHEL at all, so it's not like
</span><br>
<span class="quotelev2">&gt;&gt; I'm disabling something that used to work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Michal
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17965.php">http://www.open-mpi.org/community/lists/devel/2015/09/17965.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17967.php">http://www.open-mpi.org/community/lists/devel/2015/09/17967.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17975.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17975.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17975.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
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
