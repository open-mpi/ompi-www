<?
$subject_val = "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 16:57:09 2014" -->
<!-- isoreceived="20140803205709" -->
<!-- sent="Sun, 3 Aug 2014 13:57:08 -0700" -->
<!-- isosent="20140803205708" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)" -->
<!-- id="CAAvDA17hx4yQJGt3Lj9sK+QnLyfv94-_BPv=XmPK2zdiryjo=w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14uSkMJpLEPkvQ-YVdsehcAZ3WCh8PUAFL3z5tY52fhCA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-03 16:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15487.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>Previous message:</strong> <a href="15485.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<li><strong>In reply to:</strong> <a href="15485.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Aug 3, 2014 at 12:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; BTW:
</span><br>
<span class="quotelev1">&gt; Even with the &quot;ignore_device=1&quot; problem fixed, I can't get btl:openib
</span><br>
<span class="quotelev1">&gt; running on x86.
</span><br>
<span class="quotelev1">&gt; So, there may be additional reports in the next few hours.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That turned out to be the already known issue in 1.8.2rc3 that was since
<br>
fixed.
<br>
So, with manual application of r32395 + the patch for ticket #4377 I can
<br>
run btl:openib on x86+tavor
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15486/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15487.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>Previous message:</strong> <a href="15485.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<li><strong>In reply to:</strong> <a href="15485.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
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
