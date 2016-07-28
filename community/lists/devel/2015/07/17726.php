<?
$subject_val = "Re: [OMPI devel] 1.8.8rc1 testing report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 16:24:03 2015" -->
<!-- isoreceived="20150731202403" -->
<!-- sent="Fri, 31 Jul 2015 22:23:58 +0200" -->
<!-- isosent="20150731202358" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.8rc1 testing report" -->
<!-- id="8CF80242-CD78-440C-8FED-D470BE25D679_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="212FFBD4-D835-41A5-A1BF-CBC74323EA49_at_open-mpi.org" -->
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
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-31 16:23:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17727.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Previous message:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>In reply to:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17727.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Reply:</strong> <a href="17727.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was renamed from cpuid.h to cpuid-x86.h at some point. Can't check from here but the actual code should be the same in all these branches.
<br>
Brice
<br>
<p><p>Le 31 juillet 2015 22:19:47 UTC+02:00, Ralph Castain &lt;rhc_at_[hidden]&gt; a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt;Yo Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1.8.8 and 1.10 do not have hwloc-1.11 in them - they remain on
</span><br>
<span class="quotelev1">&gt;hwloc-1.9. The referenced commit doesn&#226;&#128;&#153;t apply to that version of hwloc
</span><br>
<span class="quotelev1">&gt;because the affected file doesn&#226;&#128;&#153;t exist there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 31, 2015, at 9:07 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My testing has completed all but the last few QEMU-emulated ARM and
</span><br>
<span class="quotelev1">&gt;MIPS platforms.
</span><br>
<span class="quotelev2">&gt;&gt; However I do have complete (successful) results from 1 MIPS and 2 ARM
</span><br>
<span class="quotelev1">&gt;platforms at this point.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only issue I encountered is one we learned of with 1.10.0rc2:
</span><br>
<span class="quotelev1">&gt;&quot;pgcc -m32&quot; has issues with some inline asm in hwloc-1.11.0
</span><br>
<span class="quotelev2">&gt;&gt; Since hwloc's v1.11 branch has been updated to resolve that issue, I
</span><br>
<span class="quotelev1">&gt;suggest cherry-picking the commit
</span><br>
<span class="quotelev1">&gt;(<a href="https://github.com/open-mpi/hwloc/commit/46deaebf">https://github.com/open-mpi/hwloc/commit/46deaebf</a>
</span><br>
<span class="quotelev1">&gt;&lt;<a href="https://github.com/open-mpi/hwloc/commit/46deaebf">https://github.com/open-mpi/hwloc/commit/46deaebf</a>&gt;) that addresses
</span><br>
<span class="quotelev1">&gt;this particular issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&lt;mailto:PHHargrove_at_[hidden]&gt;
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17724.php">http://www.open-mpi.org/community/lists/devel/2015/07/17724.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17725.php">http://www.open-mpi.org/community/lists/devel/2015/07/17725.php</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17726/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17727.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Previous message:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>In reply to:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17727.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Reply:</strong> <a href="17727.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
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
