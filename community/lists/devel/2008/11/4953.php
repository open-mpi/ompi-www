<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 24 16:16:28 2008" -->
<!-- isoreceived="20081124211628" -->
<!-- sent="Mon, 24 Nov 2008 16:16:22 -0500" -->
<!-- isosent="20081124211622" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="F3767B1E-3233-4571-9EE4-6DD267C91D3F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081124190128.GB2554_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-24 16:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4954.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4952.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4949.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4952.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2008, at 2:01 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; More likely, one or more of the patches are not needed with the  
</span><br>
<span class="quotelev1">&gt; Libtool
</span><br>
<span class="quotelev1">&gt; version you're using, because they have already been integrated into
</span><br>
<span class="quotelev1">&gt; that version.
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; Ergo, the advantage of patching input files here is that there is a
</span><br>
<span class="quotelev1">&gt; clean upgrade path.  Except for *.rej files (which autogen.sh could
</span><br>
<span class="quotelev1">&gt; clean up after itself, I guess).
</span><br>
<p>I've known about this for a long time, but never bothered to add the  
<br>
&quot;rm&quot; into autogen.sh.  Easy enough to do if someone cares.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4954.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4952.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4949.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4952.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
