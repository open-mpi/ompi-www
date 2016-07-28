<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 16:48:00 2015" -->
<!-- isoreceived="20151020204800" -->
<!-- sent="Tue, 20 Oct 2015 20:47:38 +0000" -->
<!-- isosent="20151020204738" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)" -->
<!-- id="4E34F649-3EE4-46D1-B86A-223A0EAC13B9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17MAtfPP4kws3VkKe+AVgJeuC=-bUrvZe3dHwQWSa8KnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 16:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2015, at 4:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As an example, I might have two ethernet cards, one of which is a Cisco VNIC.
</span><br>
<span class="quotelev1">&gt; I would want be able to control which BTL or MTL is used on those NICs independently, including the option to disable use of one or the other.
</span><br>
<span class="quotelev1">&gt; I do not want to learn distinct include/exclude MCA params for every BTL and MTL to accomplish that.
</span><br>
<p>Hmm.
<br>
<p>I think heterogeneous multirail is still pretty uncommon.  It might still be ok to force users (or better yet, their admins -- via the global mca-params.conf file) to use level 3 to precisely specify which network / OMPI API to use (e.g., BTL, MTL, ...etc.).
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
<li><strong>Next message:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18208.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>Reply:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
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
