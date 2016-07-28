<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 16:18:03 2015" -->
<!-- isoreceived="20150225211803" -->
<!-- sent="Wed, 25 Feb 2015 13:17:59 -0800" -->
<!-- isosent="20150225211759" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="CAAvDA169PaSYAVXUYKHRjiDw5fU_=OFm4iTGO2=Ds9QmPJ4XRQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D5C66B3-2BD9-4E4C-AEE3-E0F8DCD5E937_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 16:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17049.php">Ralph Castain: "[OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>Previous message:</strong> <a href="17047.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17046.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17050.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17050.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Linux and Solaris verbs issues are resolved.
<br>
<p>The BSD results are unchanged.
<br>
<p>-Paul [Sent from my phone]
<br>
On Feb 25, 2015 12:29 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Probably no point in re-testing the ones that already worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The m4 typo affected systems that require extra libraries (e.g.,
</span><br>
<span class="quotelev1">&gt; libibverbs, or even libdl).  Instead of filling in &lt;foo&gt;_LIBS, &lt;foo&gt;_LIBS
</span><br>
<span class="quotelev1">&gt; was accidentally being left empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /me wishes yet again that shell scripting had a &quot;strict&quot; mode that would
</span><br>
<span class="quotelev1">&gt; yell at you when you use &quot;$foop&quot; instead of &quot;$foo&quot; (and $foop doesn't
</span><br>
<span class="quotelev1">&gt; exist/was never set).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 25, 2015, at 3:04 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've queued new tests for the platforms w/ verbs-related failures.
</span><br>
<span class="quotelev2">&gt; &gt; Is there any point retesting the BSDs as well?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Feb 25, 2015 at 12:02 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, I meant:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bot:hargrove
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 25, 2015, at 3:01 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Per my prior mail, m4 typo fixed -- could you release the hounds again?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Feb 25, 2015, at 2:13 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Wed, Feb 25, 2015 at 10:17 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I did that and just shipped a tarball to get Hargroved.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Tests have been dispatched...  I will report complete results later
</span><br>
<span class="quotelev1">&gt; today.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The first of the BSD results should be in soon, and I'll plan to
</span><br>
<span class="quotelev1">&gt; report go/nogo.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &quot;NOGO&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I don't have full results (and no backtraces, yet), however things
</span><br>
<span class="quotelev1">&gt; actually look *worse* than the previous tarball.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; While the previous tarball gave a pretty message, the current one
</span><br>
<span class="quotelev1">&gt; SEGVs on {Free,Net}BSD.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On FreeBSD-{8,9,10}/amd64 I don't get past &quot;make check&quot;:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Oddly, my FreeBSD-10/i386 tester passed my tests (I don't test
</span><br>
<span class="quotelev1">&gt; FreeBSD-{8,9} on i386).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On NetBSD-6/amd64 I also fail &quot;make check&quot;, but w/o the &quot;Segmentation
</span><br>
<span class="quotelev1">&gt; fault&quot; message (difference might not be OMPI-related):
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On NetBSD-6/i386 I don't see the problem during &quot;make check&quot; but get
</span><br>
<span class="quotelev1">&gt; a terse failure from mpirun:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [netbsd6-i386:05263] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [netbsd6-i386:05263] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [netbsd6-i386:05263] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [netbsd6-i386:05263] Failing at address: 0xbb800000
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Unable to print stack trace!
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [netbsd6-i386:05263] *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On OpenBSD-5 everything appears to &quot;just work&quot; now on both amd64 and
</span><br>
<span class="quotelev1">&gt; i386.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; When I have a chance (might not be until Thu) I will collect
</span><br>
<span class="quotelev1">&gt; backtraces from the SEGVs on FreeBSD and NetBSD, as well as sanity checking
</span><br>
<span class="quotelev1">&gt; the related configure output.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jeff,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; In the meantime you may want to visit
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=FreeBSD+10.1-RELEASE">https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=FreeBSD+10.1-RELEASE</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=NetBSD+6.1.5">https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=NetBSD+6.1.5</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and see if the OMPI usage of dlopen() is consistent with the docs for
</span><br>
<span class="quotelev1">&gt; FreeBSD and NetBSD.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17040.php">http://www.open-mpi.org/community/lists/devel/2015/02/17040.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17044.php">http://www.open-mpi.org/community/lists/devel/2015/02/17044.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17045.php">http://www.open-mpi.org/community/lists/devel/2015/02/17045.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17046.php">http://www.open-mpi.org/community/lists/devel/2015/02/17046.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17048/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17049.php">Ralph Castain: "[OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>Previous message:</strong> <a href="17047.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17046.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17050.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17050.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
