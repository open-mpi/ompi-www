<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 19:14:28 2015" -->
<!-- isoreceived="20150226001428" -->
<!-- sent="Thu, 26 Feb 2015 00:14:26 +0000" -->
<!-- isosent="20150226001426" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="F1218C9D-F08E-4E0E-AA04-0D3673FCA08B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA169PaSYAVXUYKHRjiDw5fU_=OFm4iTGO2=Ds9QmPJ4XRQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-25 19:14:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17051.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17049.php">Ralph Castain: "[OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>In reply to:</strong> <a href="17048.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17051.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17051.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2015, at 4:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Linux and Solaris verbs issues are resolved.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; The BSD results are unchanged.
</span><br>
<p>That means this, right:
<br>
<p>------
<br>
On FreeBSD-{8,9,10}/amd64 I don't get past &quot;make check&quot;:
<br>
Segmentation fault (core dumped)
<br>
FAIL: dlopen_test
<br>
Oddly, my FreeBSD-10/i386 tester passed my tests (I don't test FreeBSD-{8,9} on i386).
<br>
<p>On NetBSD-6/amd64 I also fail &quot;make check&quot;, but w/o the &quot;Segmentation fault&quot; message (difference might not be OMPI-related):
<br>
FAIL: dlopen_test
<br>
<p>On NetBSD-6/i386 I don't see the problem during &quot;make check&quot; but get a terse failure from mpirun:
<br>
$ mpirun -mca btl sm,self -np 2 examples/ring_c'
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
-----
<br>
<p>I think you said you'd get bt's on Thursday.
<br>
<p>It's quite possible / probably that I simply borked that test.
<br>
<p>Let's iterate off-list to get this right.
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
<li><strong>Next message:</strong> <a href="17051.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17049.php">Ralph Castain: "[OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>In reply to:</strong> <a href="17048.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17051.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17051.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
