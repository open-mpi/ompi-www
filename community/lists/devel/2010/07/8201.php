<?
$subject_val = "Re: [OMPI devel] IB warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 20:18:47 2010" -->
<!-- isoreceived="20100721001847" -->
<!-- sent="Wed, 21 Jul 2010 09:48:39 +0930" -->
<!-- isosent="20100721001839" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB warnings" -->
<!-- id="20100721094839.7f28bd33_at_lilo" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.3.1007201303570.31608_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IB warnings<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 20:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8202.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>In reply to:</strong> <a href="8195.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20 Jul 2010 13:03:57 +0100
<br>
&quot;N.M. Maclaren&quot; &lt;nmm1_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not on most systems.  While this is more clearly illegal, similar
</span><br>
<span class="quotelev1">&gt; remarks apply to its safety.  If there were any debugging C compilers
</span><br>
<span class="quotelev1">&gt; around, it might well get trapped, but those are about as common as
</span><br>
<span class="quotelev1">&gt; unicorns.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a horrible coding style, but this is a case of damned if you do,
</span><br>
<span class="quotelev1">&gt; and damned if you don't.
</span><br>
<p>Yep the only other way to do it I saw was to create an unsigned version
<br>
of OPAL_ATOMIC_CMPSET_32. But this code is *only* used for debug
<br>
purposes for so I thought that was excessive. And I agree that
<br>
twos complement representation should make this ok, albeit ugly.
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8202.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>In reply to:</strong> <a href="8195.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
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
