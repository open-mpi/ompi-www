<?
$subject_val = "Re: [OMPI devel] still supporting pgi?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 13:45:20 2014" -->
<!-- isoreceived="20141211184520" -->
<!-- sent="Thu, 11 Dec 2014 18:45:19 +0000" -->
<!-- isosent="20141211184519" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] still supporting pgi?" -->
<!-- id="5FC79A6A-D106-4987-9D3A-77CB7BBEB3B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj7bfYcEGHey++hmYFagXUNKTo++BSWF+2xdgBi0hn=9TQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] still supporting pgi?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 13:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16508.php">Paul Kapinos: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16506.php">Howard Pritchard: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16506.php">Howard Pritchard: "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16508.php">Paul Kapinos: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16508.php">Paul Kapinos: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2014, at 9:58 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay, I'll try to fix things.  problem in opal_datatype_internal.h, then a meltdown with libfabric owing to the fact that its probably
</span><br>
<span class="quotelev1">&gt; only been used in a gnu env.  I'll open an issue on that one and assign it to Jeff.   
</span><br>
<p>Ok.
<br>
<p>FWIW: I test with gcc and the intel compiler suite.  I do not have a PGI license to test with.
<br>
<p><span class="quotelev1">&gt; I think we should be turning this libfabric build off unless one asks for it.
</span><br>
<p>Obviously, I disagree.  :-)
<br>
<p>I'm sorry for the annoyances, but we have long since found out that features that are not enabled by default do not get tested in the wild and therefore do not get debugged.
<br>
<p>If you send me the details of the PGI problem, I'll be happy to look in to it.
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
<li><strong>Next message:</strong> <a href="16508.php">Paul Kapinos: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16506.php">Howard Pritchard: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16506.php">Howard Pritchard: "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16508.php">Paul Kapinos: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16508.php">Paul Kapinos: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
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
