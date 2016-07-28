<?
$subject_val = "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 12:42:05 2016" -->
<!-- isoreceived="20160511164205" -->
<!-- sent="Wed, 11 May 2016 09:42:02 -0700" -->
<!-- isosent="20160511164202" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v2.x] printf format warnings w/ -m32" -->
<!-- id="67E7E6C8-7EA2-4FF0-B277-70A09D11A4E8_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA176ku5b7HERhSbenJQSSopwEhwpTm0y3tdj2L5CXLbd2Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [v2.x] printf format warnings w/ -m32<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 12:42:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18971.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>Previous message:</strong> <a href="18969.php">Josh Hursey: "Re: [OMPI devel] New Github labels"</a>
<li><strong>In reply to:</strong> <a href="18932.php">Paul Hargrove: "[OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18971.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>Reply:</strong> <a href="18971.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took a look at this, and the problem isn&#226;&#128;&#153;t in the print statements. The problem is that PRIsize_t is being incorrectly set to &#226;&#128;&#156;unsigned long&#226;&#128;&#157; instead of something correct for the -m32 directive in that environment
<br>
<p><p><span class="quotelev1">&gt; On May 6, 2016, at 9:48 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 96 printf format warnings in the attachment come from an Linux/x86-64 system w/ Clang and &quot;-m32&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some of the warnings are &quot;size_t&quot; vs &quot;unigned long&quot;, which is harmless since both are 32-bits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, there are several cases in sharedfp/sm where a 64-bit (long long) format has a 32-bit (long) argument.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;format_warn_m32.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18932.php">http://www.open-mpi.org/community/lists/devel/2016/05/18932.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18970/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18971.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>Previous message:</strong> <a href="18969.php">Josh Hursey: "Re: [OMPI devel] New Github labels"</a>
<li><strong>In reply to:</strong> <a href="18932.php">Paul Hargrove: "[OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18971.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>Reply:</strong> <a href="18971.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
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
