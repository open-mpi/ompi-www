<?
$subject_val = "Re: [OMPI devel] anyone built master on qlogic system today?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 14:17:20 2015" -->
<!-- isoreceived="20150722181720" -->
<!-- sent="Wed, 22 Jul 2015 18:17:18 +0000" -->
<!-- isosent="20150722181718" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] anyone built master on qlogic system today?" -->
<!-- id="0499508D-1AA6-458A-B4C7-B0EA8418693D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj6SpFzoH-58p_YDdCoANg7NH6igBWiSTesf7bqqAWPZAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] anyone built master on qlogic system today?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 14:17:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17684.php">Howard Pritchard: "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>Previous message:</strong> <a href="17682.php">Howard Pritchard: "[OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>In reply to:</strong> <a href="17682.php">Howard Pritchard: "[OMPI devel] anyone built master on qlogic system today?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17684.php">Howard Pritchard: "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>Reply:</strong> <a href="17684.php">Howard Pritchard: "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 22, 2015, at 1:46 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&quot;m investigating a psm/ofi mtl problem on one of our qlogic systems and ended up investigating something else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There seem to be a bunch of missing config.h.in files if I of current master head.
</span><br>
<span class="quotelev1">&gt; If I go back to bd60ce16 things seem to be okay.
</span><br>
<p>Many config.h.in files are not stored in git.  They are generated when you run autogen.
<br>
<p>Which config.h.in files are you referring to?
<br>
<p><span class="quotelev1">&gt; The upshot is that one doesn't get past  configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure if this is specific to systems with psm installed yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone else seen this?
</span><br>
<p>Nope -- I can build from master tip (dev-2119-gf7f1fc9).
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
<li><strong>Next message:</strong> <a href="17684.php">Howard Pritchard: "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>Previous message:</strong> <a href="17682.php">Howard Pritchard: "[OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>In reply to:</strong> <a href="17682.php">Howard Pritchard: "[OMPI devel] anyone built master on qlogic system today?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17684.php">Howard Pritchard: "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>Reply:</strong> <a href="17684.php">Howard Pritchard: "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
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
