<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 13:34:03 2015" -->
<!-- isoreceived="20150225183403" -->
<!-- sent="Wed, 25 Feb 2015 18:34:02 +0000" -->
<!-- isosent="20150225183402" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="8498A5CF-465D-4E71-837F-03BF56C0A336_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14HhEZfmeKkeh2EFtZgbGP+7A2mZgdUcrs51VKsFmdcgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: DL / DSO functionality<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 13:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17040.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17040.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2015, at 1:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming that the new tarball finds dlopen() support in libc on the BSDs then I am not going to encounter the new behavior unless I manually disable (something like &quot;--enable-mca-no-build=dl-dlopen&quot;, right?).  To be honest, any platform that does reach this point is going to be rare (in the absence of the bugs that Dave refers to).  So, this &quot;departure&quot; seems to be pretty minor (IMHO).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It really comes down to:
</span><br>
<span class="quotelev1">&gt; &quot;Sorry, but we can't fix the situation without your help - you must chose to either (1) install libltdl for dynamically linked components or (2) --disable-dlopen for statically linked components&quot;. 
</span><br>
<p>Well, that's a good point (that platforms that don't support dlopen() these days are kinda rare).  Hence, this solution could be &quot;good enough&quot;.
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
<li><strong>Next message:</strong> <a href="17040.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17040.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
