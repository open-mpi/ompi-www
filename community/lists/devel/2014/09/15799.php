<?
$subject_val = "Re: [OMPI devel] clang alignment warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 16:29:24 2014" -->
<!-- isoreceived="20140910202924" -->
<!-- sent="Wed, 10 Sep 2014 20:29:23 +0000" -->
<!-- isosent="20140910202923" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] clang alignment warnings" -->
<!-- id="9D0D1BB4-2E20-4E08-9629-4C68AC50D092_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8540D495-35DA-4176-BDA3-16FEF368C37C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] clang alignment warnings<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 16:29:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15800.php">George Bosilca: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Previous message:</strong> <a href="15798.php">Jeff Squyres (jsquyres): "[OMPI devel] clang alignment warnings"</a>
<li><strong>In reply to:</strong> <a href="15798.php">Jeff Squyres (jsquyres): "[OMPI devel] clang alignment warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15800.php">George Bosilca: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Reply:</strong> <a href="15800.php">George Bosilca: "Re: [OMPI devel] clang alignment warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 10, 2014, at 4:23 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Regardless, what do we do about this?
</span><br>
<p>To answer my own question, I guess we can replace:
<br>
<p>&nbsp;&nbsp;&nbsp;dst-&gt;intval = int_value
<br>
<p>with
<br>
<p>&nbsp;&nbsp;&nbsp;int *bogus = (int*) dst;
<br>
&nbsp;&nbsp;&nbsp;*bogus = int_value;
<br>
<p>and do a similar thing for the bool.
<br>
<p>Seems kludgey, and kinda defeats the point of having a union, though.
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
<li><strong>Next message:</strong> <a href="15800.php">George Bosilca: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Previous message:</strong> <a href="15798.php">Jeff Squyres (jsquyres): "[OMPI devel] clang alignment warnings"</a>
<li><strong>In reply to:</strong> <a href="15798.php">Jeff Squyres (jsquyres): "[OMPI devel] clang alignment warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15800.php">George Bosilca: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Reply:</strong> <a href="15800.php">George Bosilca: "Re: [OMPI devel] clang alignment warnings"</a>
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
