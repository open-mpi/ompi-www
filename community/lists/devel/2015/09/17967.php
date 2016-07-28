<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 09:29:57 2015" -->
<!-- isoreceived="20150904132957" -->
<!-- sent="Fri, 4 Sep 2015 06:29:54 -0700" -->
<!-- isosent="20150904132954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="AD1433D3-B03F-42FB-A6D5-D50679050365_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55E99544.8050701_at_redhat.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 09:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17968.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17965.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17969.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17969.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17974.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Umm&#226;&#128;&#166;why would USNIC depend on libpsm_infinipath?? Jeff or Dave - is that true?
<br>
<p><p><p><span class="quotelev1">&gt; On Sep 4, 2015, at 5:57 AM, Michal Schmidt &lt;mschmidt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 09/03/2015 03:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I guess I didn&#226;&#128;&#153;t make it clear in my prior comment, so let me try
</span><br>
<span class="quotelev2">&gt;&gt; again. I understand about dlopen and the fix that George proposed -
</span><br>
<span class="quotelev2">&gt;&gt; we had internally discussed this as well. However, the questions that
</span><br>
<span class="quotelev2">&gt;&gt; raises are:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. how does the distro (Michal) decide which PSM module to disable by
</span><br>
<span class="quotelev2">&gt;&gt; default in their package?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the RHEL package I have disabled PSM2 by default in
</span><br>
<span class="quotelev1">&gt; openmpi-mca-params.conf:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Disable the psm2 MTL by default.
</span><br>
<span class="quotelev1">&gt; # Workaround for <a href="https://bugzilla.redhat.com/show_bug.cgi?id=1259835">https://bugzilla.redhat.com/show_bug.cgi?id=1259835</a>
</span><br>
<span class="quotelev1">&gt; # This avoids a conflict between libpsm2.so.2 and libpsm_infinipath.so.1.
</span><br>
<span class="quotelev1">&gt; mtl = ^psm2
</span><br>
<span class="quotelev1">&gt; # If psm2 is needed, comment out the above line and uncomment
</span><br>
<span class="quotelev1">&gt; # the following two lines. This will disable MCAs that are known to
</span><br>
<span class="quotelev1">&gt; # depend on libpsm_infinipath.so.1:
</span><br>
<span class="quotelev1">&gt; #   mtl = ^psm,ofi
</span><br>
<span class="quotelev1">&gt; #   btl = ^usnic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. how does the user &#226;&#128;&#156;discover&#226;&#128;&#157; that their fabric has automatically
</span><br>
<span class="quotelev2">&gt;&gt; been disabled, especially since this has never been the case before?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There will be a release note.
</span><br>
<span class="quotelev1">&gt; OmniPath was not previously supported in RHEL at all, so it's not like
</span><br>
<span class="quotelev1">&gt; I'm disabling something that used to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Michal
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17965.php">http://www.open-mpi.org/community/lists/devel/2015/09/17965.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17968.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17965.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17969.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17969.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17974.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
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
