<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 00:33:18 2014" -->
<!-- isoreceived="20140429043318" -->
<!-- sent="Tue, 29 Apr 2014 07:33:15 +0300" -->
<!-- isosent="20140429043315" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="CAAO1KybS6iMyOaQmwjydGJZu5TV9p3D=BiLrfpo9RbksikW3Cg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6E9615FB-81C1-4F39-B7CD-66F0F0FC5084_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Well-known mca parameters<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 00:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14645.php">Mike Dubman: "[OMPI devel] trunk fails to compile"</a>
<li><strong>Previous message:</strong> <a href="14643.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14643.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt; I didn't see a reply to my question about the primary use case for this
</span><br>
being for scripts, and therefore a slightly-more-than-trivial regexp...
<br>
<p>The primary use-case:
<br>
<p>collect system related info w/ help of ompi_info and validate cluster setup
<br>
is according to site/vendor rules.
<br>
Can be done manually with help of command line or with script provided by
<br>
sysadmin or vendor.
<br>
<p><p><p><p><p><p>On Tue, Apr 29, 2014 at 1:12 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Apr 27, 2014, at 9:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Changing/updating architecture to fulfill this specific use-case seems
</span><br>
<span class="quotelev1">&gt; a overkill. The arch is powerfull to resolve it w/o adding specific class
</span><br>
<span class="quotelev1">&gt; (IMHO).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nobody would be changing the architecture of the system. All I'm
</span><br>
<span class="quotelev1">&gt; suggesting is adding a new variable type. Something like
</span><br>
<span class="quotelev1">&gt; &quot;MCA_BASE_VAR_TYPE_VERSION  _STRING&quot; instead of &quot;MCA_BASE_VAR_TYPE_STRING&quot;.
</span><br>
<span class="quotelev1">&gt; This eliminates the need to force a standard param string format, and may
</span><br>
<span class="quotelev1">&gt; provide a cleaner mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph and I chatted about this on the phone today.  In principle, I'm not
</span><br>
<span class="quotelev1">&gt; opposed to this.  Indeed, it seems to have the added benefit that the
</span><br>
<span class="quotelev1">&gt; OPAL/ORTE/OMPI/OSHMEM version numbers themselves could also be registered
</span><br>
<span class="quotelev1">&gt; with this type (thereby removing some special case code from ompi_info).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, I just didn't want us to exclude the simple possibility
</span><br>
<span class="quotelev1">&gt; first: using an MCA parameter naming convention.  I didn't see a reply to
</span><br>
<span class="quotelev1">&gt; my question about the primary use case for this being for scripts, and
</span><br>
<span class="quotelev1">&gt; therefore a slightly-more-than-trivial regexp...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14643.php">http://www.open-mpi.org/community/lists/devel/2014/04/14643.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14645.php">Mike Dubman: "[OMPI devel] trunk fails to compile"</a>
<li><strong>Previous message:</strong> <a href="14643.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14643.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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
