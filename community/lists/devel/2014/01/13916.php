<?
$subject_val = "Re: [OMPI devel] 1.7.4 fortran status?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 19:09:14 2014" -->
<!-- isoreceived="20140125000914" -->
<!-- sent="Fri, 24 Jan 2014 16:09:12 -0800" -->
<!-- isosent="20140125000912" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 fortran status?" -->
<!-- id="CAAvDA16D5UGYS_5oBSY9+abU-wH4=uuP5EqeuE_4KsKdiXs6rA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA163SA7YTuQrjoAQ=Yd0QiATLy6ByOZd0MDy6tP6D=YD_Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4 fortran status?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 19:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Previous message:</strong> <a href="13915.php">Paul Hargrove: "[OMPI devel] more f77 cruft"</a>
<li><strong>In reply to:</strong> <a href="13914.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Reply:</strong> <a href="13917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 24, 2014 at 3:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Jan 24, 2014 at 3:27 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just committed a change on the trunk to configure that should
</span><br>
<span class="quotelev2">&gt;&gt; disqualify the older pathscale and open64 compilers from compiling the
</span><br>
<span class="quotelev2">&gt;&gt; mpi_f08 module (like we did in 1.7.3 and earlier).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, I will plan to test tonight's trunk tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, as my &quot;real job&quot; has me compiling gcc today, I have the free time
</span><br>
<span class="quotelev1">&gt; to at least attempt to autogen from svn trunk.
</span><br>
<span class="quotelev1">&gt; So, results may come sooner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>autogen + rsync worked fine.
<br>
<p>I can confirm trunk (r30421) is now correctly disqualifying f08 support in
<br>
the PathScale and Open64 compilers.
<br>
Both produce the following output:
<br>
<p>checking if building Fortran 'use mpi' bindings... yes
<br>
checking if Fortran compiler supports ISO_C_BINDING... yes
<br>
checking if Fortran compiler supports SUBROUTINE BIND(C)... yes
<br>
checking if Fortran compiler supports TYPE, BIND(C)... yes
<br>
*checking if Fortran compiler supports TYPE(type), BIND(C, NAME=&quot;name&quot;)...
<br>
no*
<br>
checking if building Fortran 'use mpi_f08' bindings... no
<br>
<p>Still enough time to CMR before the 1.7.4 nightly tarball.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Previous message:</strong> <a href="13915.php">Paul Hargrove: "[OMPI devel] more f77 cruft"</a>
<li><strong>In reply to:</strong> <a href="13914.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Reply:</strong> <a href="13917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
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
