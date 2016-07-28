<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 16:28:25 2015" -->
<!-- isoreceived="20150728202825" -->
<!-- sent="Tue, 28 Jul 2015 13:28:00 -0700" -->
<!-- isosent="20150728202800" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="CAAvDA17uPRRzhTcOhmRFiXnMx1cn1=enj3ZUvFwshT=H6TQJ4g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150728142315.GS3090_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 16:28:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4522.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4520.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4518.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree that mov instead of xchg is harmless since %ebx is overwrtten by
<br>
the very next instruction.
<br>
I am more concerned about dropping the input constraints in favor of &quot;+a&quot;
<br>
and &quot;+c&quot;.
<br>
For a *correct* compiler that should be equivalent, but the reason we are
<br>
doing this is because some compilers are buggy.
<br>
If all compilers were correct then &quot;=r&quot; (or maybe &quot;=&amp;r&quot;?) should have
<br>
worked.
<br>
<p>So, I will see if I can retest the newer version on at least the compilers
<br>
that behaved oddly previously.
<br>
<p>-Paul
<br>
<p>On Tue, Jul 28, 2015 at 7:23 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Tue 28 Jul 2015 16:13:49 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; and your commit is slightly different: (s/xchg/mov/ and removed last
</span><br>
<span class="quotelev1">&gt; line).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xchg is spurious here, mov is enough.  I didn't remove the last line, I
</span><br>
<span class="quotelev1">&gt; just kept the original source, which uses +a instead of =a and a.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, in master we don't have multiple inlining anymore (there's a
</span><br>
<span class="quotelev2">&gt; &gt; wrapper function calling this inline asm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean the cpuid_or_from_dump function?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4518.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4518.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4522.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4520.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4518.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
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
