<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 15:02:04 2015" -->
<!-- isoreceived="20150225200204" -->
<!-- sent="Wed, 25 Feb 2015 20:02:02 +0000" -->
<!-- isosent="20150225200202" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="94F5C973-EAE2-4CC3-A6FA-0F446AE7C824_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2263AD1F-767A-4972-89D4-5E7D4C89D585_at_cisco.com" -->
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
<strong>Date:</strong> 2015-02-25 15:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17045.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17045.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17045.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I meant:
<br>
<p>bot:hargrove
<br>
<p><p><span class="quotelev1">&gt; On Feb 25, 2015, at 3:01 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per my prior mail, m4 typo fixed -- could you release the hounds again?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 25, 2015, at 2:13 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 25, 2015 at 10:17 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I did that and just shipped a tarball to get Hargroved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tests have been dispatched...  I will report complete results later today.
</span><br>
<span class="quotelev2">&gt;&gt; The first of the BSD results should be in soon, and I'll plan to report go/nogo.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;NOGO&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have full results (and no backtraces, yet), however things actually look *worse* than the previous tarball.
</span><br>
<span class="quotelev2">&gt;&gt; While the previous tarball gave a pretty message, the current one SEGVs on {Free,Net}BSD.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On FreeBSD-{8,9,10}/amd64 I don't get past &quot;make check&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev2">&gt;&gt; Oddly, my FreeBSD-10/i386 tester passed my tests (I don't test FreeBSD-{8,9} on i386).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On NetBSD-6/amd64 I also fail &quot;make check&quot;, but w/o the &quot;Segmentation fault&quot; message (difference might not be OMPI-related):
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On NetBSD-6/i386 I don't see the problem during &quot;make check&quot; but get a terse failure from mpirun:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev2">&gt;&gt; [netbsd6-i386:05263] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [netbsd6-i386:05263] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [netbsd6-i386:05263] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [netbsd6-i386:05263] Failing at address: 0xbb800000
</span><br>
<span class="quotelev2">&gt;&gt; Unable to print stack trace!
</span><br>
<span class="quotelev2">&gt;&gt; [netbsd6-i386:05263] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On OpenBSD-5 everything appears to &quot;just work&quot; now on both amd64 and i386.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I have a chance (might not be until Thu) I will collect backtraces from the SEGVs on FreeBSD and NetBSD, as well as sanity checking the related configure output.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the meantime you may want to visit
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=FreeBSD+10.1-RELEASE">https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=FreeBSD+10.1-RELEASE</a>
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=NetBSD+6.1.5">https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=NetBSD+6.1.5</a>
</span><br>
<span class="quotelev2">&gt;&gt; and see if the OMPI usage of dlopen() is consistent with the docs for FreeBSD and NetBSD.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17040.php">http://www.open-mpi.org/community/lists/devel/2015/02/17040.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="17045.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17045.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17045.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
