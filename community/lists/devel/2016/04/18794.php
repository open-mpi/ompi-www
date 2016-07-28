<?
$subject_val = "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 13:24:32 2016" -->
<!-- isoreceived="20160420172432" -->
<!-- sent="Wed, 20 Apr 2016 17:24:30 +0000" -->
<!-- isosent="20160420172430" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')" -->
<!-- id="532F9EE6-0A29-4A52-BEE0-25BC850B4E00_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="26D39D0C-31CC-4BBE-BC8C-C3EBAC780A8A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 13:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18793.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>In reply to:</strong> <a href="18790.php">Jeff Squyres (jsquyres): "[OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2016, at 9:14 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was under the impression that this warning script only ran for developer builds.  But it looks like it's unconditionally run at the end of &quot;make install&quot; (on master only -- so far).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should we make this only run for developer builds?  (e.g., check for $srcdir/.git, or somesuch)  I think it's our goal to have zero common symbols, but that may not always be the case, and we don't want this potentially alarming warning showing up for users, right?
</span><br>
<p>IMO, this is basically just another warning flag.  If you enable most compiler warnings for non-developer builds, I don't see why you would go out of your way to disable this particular one.  You could always tweak the output to point to a wiki page that explains what the warning means, so concerned users can hopefully be assuaged.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18793.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>In reply to:</strong> <a href="18790.php">Jeff Squyres (jsquyres): "[OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18795.php">Ralph Castain: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
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
