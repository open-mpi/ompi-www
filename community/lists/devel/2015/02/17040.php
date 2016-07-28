<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 14:13:13 2015" -->
<!-- isoreceived="20150225191313" -->
<!-- sent="Wed, 25 Feb 2015 11:13:10 -0800" -->
<!-- isosent="20150225191310" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="CAAvDA14Qc9h5eD5=aU1Hpdf1MbaFQ4=n6XJrOENCBHgpdBuHsQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 14:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17041.php">Paul Hargrove: "[OMPI devel] verbs and oob_ub breakage?"</a>
<li><strong>Previous message:</strong> <a href="17039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 25, 2015 at 10:17 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I did that and just shipped a tarball to get Hargroved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tests have been dispatched...  I will report complete results later today.
</span><br>
<span class="quotelev1">&gt; The first of the BSD results should be in soon, and I'll plan to report
</span><br>
<span class="quotelev1">&gt; go/nogo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;NOGO&quot;
<br>
<p>I don't have full results (and no backtraces, yet), however things actually
<br>
look *worse* than the previous tarball.
<br>
While the previous tarball gave a pretty message, the current one SEGVs on
<br>
{Free,Net}BSD.
<br>
<p><p>On FreeBSD-{8,9,10}/amd64 I don't get past &quot;make check&quot;:
<br>
<p>Segmentation fault (core dumped)
<br>
FAIL: dlopen_test
<br>
<p>Oddly, my FreeBSD-10/i386 tester passed my tests (I don't test
<br>
FreeBSD-{8,9} on i386).
<br>
<p>On NetBSD-6/amd64 I also fail &quot;make check&quot;, but w/o the &quot;Segmentation
<br>
fault&quot; message (difference might not be OMPI-related):
<br>
<p>FAIL: dlopen_test
<br>
<p><p>On NetBSD-6/i386 I don't see the problem during &quot;make check&quot; but get a
<br>
terse failure from mpirun:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
[netbsd6-i386:05263] *** Process received signal ***
<br>
[netbsd6-i386:05263] Signal: Segmentation fault (11)
<br>
[netbsd6-i386:05263] Signal code: Address not mapped (1)
<br>
[netbsd6-i386:05263] Failing at address: 0xbb800000
<br>
Unable to print stack trace!
<br>
[netbsd6-i386:05263] *** End of error message ***
<br>
<p><p><p>On OpenBSD-5 everything appears to &quot;just work&quot; now on both amd64 and i386.
<br>
<p>When I have a chance (might not be until Thu) I will collect backtraces
<br>
from the SEGVs on FreeBSD and NetBSD, as well as sanity checking the
<br>
related configure output.
<br>
<p><p>Jeff,
<br>
<p>In the meantime you may want to visit
<br>
<p><a href="https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=FreeBSD+10.1-RELEASE">https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=FreeBSD+10.1-RELEASE</a>
<br>
<p><a href="https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=NetBSD+6.1.5">https://www.freebsd.org/cgi/man.cgi?query=dlopen&amp;sektion=3&amp;manpath=NetBSD+6.1.5</a>
<br>
and see if the OMPI usage of dlopen() is consistent with the docs for
<br>
FreeBSD and NetBSD.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17041.php">Paul Hargrove: "[OMPI devel] verbs and oob_ub breakage?"</a>
<li><strong>Previous message:</strong> <a href="17039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
