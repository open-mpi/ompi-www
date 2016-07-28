<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 15:10:23 2009" -->
<!-- isoreceived="20090514191023" -->
<!-- sent="Thu, 14 May 2009 20:11:24 +0100" -->
<!-- isosent="20090514191124" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="1242328284.3702.82.camel_at_alpha" -->
<!-- inreplyto="20090514174620.GA12180_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 15:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6043.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6041.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6037.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-05-14 at 19:46 +0200, Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley, did you rebootstrap with Debian's Libtool?
</span><br>
<p>I'm not sure I understand the question, I did a fresh checkout and
<br>
re-ran ./autogen.sh if that's what you mean.
<br>
<p><span class="quotelev1">&gt; They enable link_all_deplibs=no in their Libtool
</span><br>
<p>That appears to the the case.
<br>
<p><span class="quotelev1">&gt; which changes some
</span><br>
<span class="quotelev1">&gt; things and can cause issues like this.  Can't hurt to open a Debian
</span><br>
<span class="quotelev1">&gt; bug report about it (targeted against libtool) so they know this issue
</span><br>
<span class="quotelev1">&gt; exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try working around it by setting link_all_deplibs to &quot;yes&quot;,
</span><br>
<span class="quotelev1">&gt; then rebuilding all the libraries?  Like this, done in the top build
</span><br>
<span class="quotelev1">&gt; directory with your current build tree:
</span><br>
<span class="quotelev1">&gt;   find . -name libtool | xargs \
</span><br>
<span class="quotelev1">&gt;     sed -i 's/^\(link_all_deplibs=\).*/&amp;no/'
</span><br>
<span class="quotelev1">&gt;   find . -name \*.la | xargs ./libtool --mode=clean rm -f
</span><br>
<span class="quotelev1">&gt;   make
</span><br>
<p>Moving back in the install dir which luckily I still had lying around
<br>
and re-compiling did work so I assume you are correct.
<br>
<p><span class="quotelev1">&gt; If that does not work, then I'd be very interested in what the failure
</span><br>
<span class="quotelev1">&gt; would look at that point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A more permanent workaround could be in OpenMPI to list each library
</span><br>
<span class="quotelev1">&gt; that is used *directly* by some other library as a dependency.  Sigh.
</span><br>
<p>Would it be this or would it be listing library's which are used
<br>
directly by some other library and are distributed as part of  OpenMPI.
<br>
Sounds slightly more sensible when you phrase it like that.
<br>
<p><span class="quotelev1">&gt; Or fix Debian Libtool.
</span><br>
<p>My naive view here is that link_all_deplibs=no sounds like a sensible
<br>
default as the linker should do the right thing if they aren't named.
<br>
It sounds to me like Brians suggestion of stating a dependency from
<br>
libmpi.la to libopen-pal.la might have more miles in it.
<br>
<p>That still doesn't explain why my link line didn't show either being
<br>
linked and Geoff sees both however.
<br>
<p>I'll keep the code here lying around in case you want me to perform
<br>
further tests.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6043.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6041.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6037.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
