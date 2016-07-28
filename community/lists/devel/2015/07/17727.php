<?
$subject_val = "Re: [OMPI devel] 1.8.8rc1 testing report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 16:57:31 2015" -->
<!-- isoreceived="20150731205731" -->
<!-- sent="Fri, 31 Jul 2015 13:57:27 -0700" -->
<!-- isosent="20150731205727" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.8rc1 testing report" -->
<!-- id="E8422651-26C7-4711-92A5-482D587B81E2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8CF80242-CD78-440C-8FED-D470BE25D679_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.8rc1 testing report<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-31 16:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17728.php">SCC: "[OMPI devel] Error in version 1.8.7?"</a>
<li><strong>Previous message:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>In reply to:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I figured out why I had the conflict and fixed it. Patch coming
<br>
<p><span class="quotelev1">&gt; On Jul 31, 2015, at 1:23 PM, Brice Goglin &lt;brice.goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was renamed from cpuid.h to cpuid-x86.h at some point. Can't check from here but the actual code should be the same in all these branches.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 31 juillet 2015 22:19:47 UTC+02:00, Ralph Castain &lt;rhc_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; Yo Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.8.8 and 1.10 do not have hwloc-1.11 in them - they remain on hwloc-1.9. The referenced commit doesn&#226;&#128;&#153;t apply to that version of hwloc because the affected file doesn&#226;&#128;&#153;t exist there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 31, 2015, at 9:07 AM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My testing has completed all but the last few QEMU-emulated ARM and MIPS platforms.
</span><br>
<span class="quotelev2">&gt;&gt; However I do have complete (successful) results from 1 MIPS and 2 ARM platforms at this point.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only issue I encountered is one we learned of with 1.10.0rc2: &quot;pgcc -m32&quot; has issues with some inline asm in hwloc-1.11.0
</span><br>
<span class="quotelev2">&gt;&gt; Since h wloc's v1.11 branch has been updated to resolve that issue, I suggest cherry-picking the commit (<a href="https://github.com/open-mpi/hwloc/commit/46deaebf">https://github.com/open-mpi/hwloc/commit/46deaebf</a> &lt;<a href="https://github.com/open-mpi/hwloc/commit/46deaebf">https://github.com/open-mpi/hwloc/commit/46deaebf</a>&gt;) that addresses this particular issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17724.php">http://www.open-mpi.org/community/lists/devel/2015/07/17724.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17725.php">http://www.open-mpi.org/community/lists/devel/2015/07/17725.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17725.php">http://www.open-mpi.org/community/lists/devel/2015/07/17725.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17726.php">http://www.open-mpi.org/community/lists/devel/2015/07/17726.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17727/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17728.php">SCC: "[OMPI devel] Error in version 1.8.7?"</a>
<li><strong>Previous message:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>In reply to:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
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
