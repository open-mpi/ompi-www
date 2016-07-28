<?
$subject_val = "Re: [OMPI users] OS X - Can't find the absoft directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 12:20:21 2010" -->
<!-- isoreceived="20100419162021" -->
<!-- sent="Mon, 19 Apr 2010 12:20:16 -0400" -->
<!-- isosent="20100419162016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X - Can't find the absoft directory" -->
<!-- id="591DC2F5-C855-4EF9-9BAC-B1CA3A68FACC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FCF674AC-4858-4A93-B511-876B45873A53_at_mac.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OS X - Can't find the absoft directory<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 12:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12701.php">Andrew Wiles: "[OMPI users] Error on sending argv"</a>
<li><strong>Previous message:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2010, at 12:11 PM, Paul Cizmas wrote:
<br>
<p><span class="quotelev1">&gt; Here there was a difference - it did work for both cases:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~$ ABSOFT=foo
</span><br>
<span class="quotelev1">&gt; ~$ testme
</span><br>
<span class="quotelev1">&gt; ABSOFT=foo
</span><br>
<span class="quotelev1">&gt; ~$ export ABSOFT=foo
</span><br>
<span class="quotelev1">&gt; ~$ testme
</span><br>
<span class="quotelev1">&gt; ABSOFT=foo
</span><br>
<span class="quotelev1">&gt; ~$ 
</span><br>
<p>This could well be because you had previously exported ABSOFT...?  (I forget the exact semantics offhand)
<br>
<p>I'm somewhat at a loss to explain the behavior you're seeing, then.  In this regard, OMPI is a pretty standard configure/make open source project -- we're not frobbing the environment before calling the underlying libtool script (this stuff is totally handled by Automake, actually).  
<br>
<p>Some off-the-wall-ideas:
<br>
<p>1. Is $ABSOFT set to the correct value?  I.e., could the error message be interpreted as &quot;The absoft compiler was unable to find what it expected to find in $ABSOFT&quot;?
<br>
<p>2. Is there anything different/unique about your build environment compared to the environment you just ran those tests in?
<br>
<p>3. You might want to try editing &quot;libtool&quot; script that is emitted after running OMPI's configure and add some debugging to see if $ABSOFT really is set when that script is launched.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12701.php">Andrew Wiles: "[OMPI users] Error on sending argv"</a>
<li><strong>Previous message:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
