<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 18:08:21 2015" -->
<!-- isoreceived="20150407220821" -->
<!-- sent="Tue, 7 Apr 2015 15:08:16 -0700" -->
<!-- isosent="20150407220816" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="D068627C-C33D-4F29-A73E-19DD30EBDAFB_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55244827.3010103_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 18:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17196.php">George Bosilca: "Re: [OMPI devel] .ompi_info dependency files"</a>
<li><strong>Previous message:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17264.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that version will cause us problems. We fixed in the master, but bringing it over to 1.8 is no small thing. I&#226;&#128;&#153;m waiting for Jeff to return next week (since he&#226;&#128;&#153;s the one that created the fix) to decide on best path forward.
<br>
<p><p><span class="quotelev1">&gt; On Apr 7, 2015, at 2:12 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/7/2015 10:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What version of libtool do you have? We require 2.4.2 - newer versions don&#226;&#128;&#153;t necessarily work, I fear.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.4.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for what I can see opal/mca/backtrace/configure.m4 exist on
</span><br>
<span class="quotelev1">&gt; the source tree
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so it seems a lack of relative/absolute path when invoking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory '/cygdrive/e/cyg_pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/build/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl &amp;&amp; aclocal-1.15 -I ../../config
</span><br>
<span class="quotelev1">&gt; aclocal-1.15: error: ../../config/autogen_found_items.m4:304: file 'opal/mca/backtrace/configure.m4' does not exist
</span><br>
<span class="quotelev1">&gt; Makefile:539: recipe for target '/pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl/aclocal.m4' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [/pub/devel/openmpi/openmpi-1.8.5rc1-1.x86_64/src/openmpi-1.8.5rc1/opal/libltdl/aclocal.m4] Error 1
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17194.php">http://www.open-mpi.org/community/lists/devel/2015/04/17194.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17196.php">George Bosilca: "Re: [OMPI devel] .ompi_info dependency files"</a>
<li><strong>Previous message:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17194.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17264.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
