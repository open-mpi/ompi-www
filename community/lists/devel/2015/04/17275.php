<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 12:35:25 2015" -->
<!-- isoreceived="20150420163525" -->
<!-- sent="Mon, 20 Apr 2015 18:35:14 +0200" -->
<!-- isosent="20150420163514" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="55352AC2.4080401_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2CE7D188-C186-49D5-9DDA-D9DE6B2403CA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 is ready for testing<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 12:35:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17274.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17274.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/20/2015 5:16 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I looked at this thread in a little more detail...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question below is a little moot because of the change that was done to v1.8, but please humor me anyway.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Macro: I think you told me before, but I forget, so please refresh my memory: I seem to recall that there's a reason you're invoking autogen in a tarball, but I don't remember what it is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Jeff,
<br>
<p>It is a standard best practice for cygwin package build.
<br>
Our package build system (cygport) has autoreconf as default
<br>
before configure..
<br>
<p>90% of the time is not really needed, but some packages are really
<br>
a pain. So to avoid surprise we play safe.
<br>
<p><p><span class="quotelev1">&gt; I ask because in all POSIX cases at least, end users should be able to just untar, configure, make, make install -- they don't/shouldn't run autogen).  I.e., it doesn't matter what version of Libtool end users have installed (or not!) because we bootstrapped the tarball with a Libtool version that we know works.  Even more specifically: the error you're running in to should not have happened with a plain tarball -- the only cases where I can think of it happening would be if you got a git clone and ran autogen, or if you got a tarball and (re-)ran autogen.
</span><br>
<p>It is &quot;got a tarball and (re-)ran autogen&quot;
<br>
<p>I can disable it and test anyway, if it is really needed, but
<br>
I will prefer that autogen.sh works as expected.
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17274.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17274.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17276.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
