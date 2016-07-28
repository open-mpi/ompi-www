<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 10:57:50 2015" -->
<!-- isoreceived="20150418145750" -->
<!-- sent="Sat, 18 Apr 2015 16:57:42 +0200" -->
<!-- isosent="20150418145742" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="553270E6.3030908_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8D44CDCB-2A1B-4B30-901E-DB52F8F70311_at_cisco.com" -->
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
<strong>Date:</strong> 2015-04-18 10:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17267.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>In reply to:</strong> <a href="17264.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17267.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17267.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/18/2015 1:01 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Marco --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm super-late to this -- did this issue get resolved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not that I am aware of.
<br>
I was busy on other things and I did not work further on the matter.
<br>
<p>Suggestion for solving it ?
<br>
<p><span class="quotelev2">&gt;&gt; On Apr 7, 2015, at 5:12 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/7/2015 10:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What version of libtool do you have? We require 2.4.2 - newer versions don&#226;&#128;&#153;t necessarily work, I fear.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2.4.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for what I can see opal/mca/backtrace/configure.m4 exist on
</span><br>
<span class="quotelev2">&gt;&gt; the source tree
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so it seems a lack of relative/absolute path when invoking
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory '/cygdrive/e/cyg_pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/build/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl &amp;&amp; aclocal-1.15 -I ../../config
</span><br>
<span class="quotelev2">&gt;&gt; aclocal-1.15: error: ../../config/autogen_found_items.m4:304: file 'opal/mca/backtrace/configure.m4' does not exist
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:539: recipe for target '/pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl/aclocal.m4' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [/pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl/aclocal.m4] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17267.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>In reply to:</strong> <a href="17264.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17267.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17267.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
