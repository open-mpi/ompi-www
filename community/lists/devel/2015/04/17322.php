<?
$subject_val = "Re: [OMPI devel] Broken flex-required error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:17:10 2015" -->
<!-- isoreceived="20150422211710" -->
<!-- sent="Wed, 22 Apr 2015 21:17:08 +0000" -->
<!-- isosent="20150422211708" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Broken flex-required error message" -->
<!-- id="86A9D5DA-7A47-4F5B-A081-295A2E9E862A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16VzeJsnAia4BBHmchy3D_jbngvyPJNhGDdaHF7TkJdBA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 17:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17323.php">Paul Hargrove: "[OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Previous message:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>In reply to:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch.
<br>
<p>But I'm ok forcing devs to install flex.  Or be creative -- without any help -- to generate .c files from .l files themselves.  :-)
<br>
<p><p><span class="quotelev1">&gt; On Apr 22, 2015, at 5:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 22, 2015 at 2:02 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; FWIW, it *did* print a list of files for me on my Mac when I faked it out and forced it to *not* find flex.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A quick look and the commit shows
</span><br>
<span class="quotelev1">&gt;     for lfile in `find . -name \*.l -print`; do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notice the find is rooted at &quot;.&quot;.
</span><br>
<span class="quotelev1">&gt; I pretty much always use VPATH builds, and I am guessing you did not.
</span><br>
<span class="quotelev1">&gt; That would explain the difference in output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you should happen to want to restore the logic to print the files, then &quot;find .&quot; should probably be &quot;find $(top_srcdir)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17321.php">http://www.open-mpi.org/community/lists/devel/2015/04/17321.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17323.php">Paul Hargrove: "[OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Previous message:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>In reply to:</strong> <a href="17321.php">Paul Hargrove: "Re: [OMPI devel] Broken flex-required error message"</a>
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
