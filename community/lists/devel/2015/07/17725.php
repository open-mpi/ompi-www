<?
$subject_val = "Re: [OMPI devel] 1.8.8rc1 testing report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 16:19:52 2015" -->
<!-- isoreceived="20150731201952" -->
<!-- sent="Fri, 31 Jul 2015 13:19:47 -0700" -->
<!-- isosent="20150731201947" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.8rc1 testing report" -->
<!-- id="212FFBD4-D835-41A5-A1BF-CBC74323EA49_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA14QOCxJzjj6ODqAd-yi0c8rjsC=M48gY8xc-bgVxzSbUw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-31 16:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Previous message:</strong> <a href="17724.php">Paul Hargrove: "[OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>In reply to:</strong> <a href="17724.php">Paul Hargrove: "[OMPI devel] 1.8.8rc1 testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Reply:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Paul
<br>
<p>1.8.8 and 1.10 do not have hwloc-1.11 in them - they remain on hwloc-1.9. The referenced commit doesn&#226;&#128;&#153;t apply to that version of hwloc because the affected file doesn&#226;&#128;&#153;t exist there.
<br>
<p><p><span class="quotelev1">&gt; On Jul 31, 2015, at 9:07 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My testing has completed all but the last few QEMU-emulated ARM and MIPS platforms.
</span><br>
<span class="quotelev1">&gt; However I do have complete (successful) results from 1 MIPS and 2 ARM platforms at this point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only issue I encountered is one we learned of with 1.10.0rc2: &quot;pgcc -m32&quot; has issues with some inline asm in hwloc-1.11.0
</span><br>
<span class="quotelev1">&gt; Since hwloc's v1.11 branch has been updated to resolve that issue, I suggest cherry-picking the commit (<a href="https://github.com/open-mpi/hwloc/commit/46deaebf">https://github.com/open-mpi/hwloc/commit/46deaebf</a> &lt;<a href="https://github.com/open-mpi/hwloc/commit/46deaebf">https://github.com/open-mpi/hwloc/commit/46deaebf</a>&gt;) that addresses this particular issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17724.php">http://www.open-mpi.org/community/lists/devel/2015/07/17724.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Previous message:</strong> <a href="17724.php">Paul Hargrove: "[OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>In reply to:</strong> <a href="17724.php">Paul Hargrove: "[OMPI devel] 1.8.8rc1 testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Reply:</strong> <a href="17726.php">Brice Goglin: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
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
