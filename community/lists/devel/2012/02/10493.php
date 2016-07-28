<?
$subject_val = "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 00:31:29 2012" -->
<!-- isoreceived="20120220053129" -->
<!-- sent="Sun, 19 Feb 2012 21:31:13 -0800" -->
<!-- isosent="20120220053113" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]" -->
<!-- id="4F41DAA1.5000104_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16PW8aZn5jOyVhBdJwaY57DfFFfUvH6TMdW74KyW4ibVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 00:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10494.php">Paul H. Hargrove: "[OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10492.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>In reply to:</strong> <a href="10470.php">Paul Hargrove: "[OMPI devel] trunk build failure on OpenBSD-5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10497.php">Jeffrey Squyres: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<li><strong>Reply:</strong> <a href="10497.php">Jeffrey Squyres: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attachment adds the necessary (cached) check for aio.h before 
<br>
enabling fbtl:posix.
<br>
-Paul
<br>
<p>On 2/17/2012 12:55 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; OpenBSD lacks an aio.h header.
</span><br>
<span class="quotelev1">&gt; configure knows this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ grep aio.h configure.log
</span><br>
<span class="quotelev1">&gt;     checking aio.h usability... no
</span><br>
<span class="quotelev1">&gt;     checking aio.h presence... no
</span><br>
<span class="quotelev1">&gt;     checking for aio.h... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet fbtl/posix is enabled, despite needing aio.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     checking if MCA component fbtl:posix can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am guessing this problem will appear on any platform w/o aio.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think is just a simple matter of requiring OPAL_HAVE_AIO_H when 
</span><br>
<span class="quotelev1">&gt; &quot;checking if component fbtl:posix can compile&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10493/fbtl_posix_config.diff">fbtl_posix_config.diff</a>
</ul>
<!-- attachment="fbtl_posix_config.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10494.php">Paul H. Hargrove: "[OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10492.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>In reply to:</strong> <a href="10470.php">Paul Hargrove: "[OMPI devel] trunk build failure on OpenBSD-5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10497.php">Jeffrey Squyres: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<li><strong>Reply:</strong> <a href="10497.php">Jeffrey Squyres: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
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
