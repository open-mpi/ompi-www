<?
$subject_val = "Re: [OMPI devel] Broken flex-required error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:08:50 2015" -->
<!-- isoreceived="20150422210850" -->
<!-- sent="Wed, 22 Apr 2015 14:08:37 -0700" -->
<!-- isosent="20150422210837" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Broken flex-required error message" -->
<!-- id="CAAvDA16VzeJsnAia4BBHmchy3D_jbngvyPJNhGDdaHF7TkJdBA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25C3306C-175F-47E8-A081-12342CF9FDD7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Broken flex-required error message<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 17:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Previous message:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>In reply to:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Reply:</strong> <a href="17322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 22, 2015 at 2:02 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; FWIW, it *did* print a list of files for me on my Mac when I faked it out
</span><br>
<span class="quotelev1">&gt; and forced it to *not* find flex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>A quick look and the commit shows
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for lfile in `find . -name \*.l -print`; do
<br>
<p>Notice the find is rooted at &quot;.&quot;.
<br>
I pretty much always use VPATH builds, and I am guessing you did not.
<br>
That would explain the difference in output.
<br>
<p>If you should happen to want to restore the logic to print the files, then
<br>
&quot;find .&quot; should probably be &quot;find $(top_srcdir)&quot;
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17321/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Previous message:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>In reply to:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Reply:</strong> <a href="17322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
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
