<?
$subject_val = "[OMPI devel] 1.8.8rc1 testing report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 12:09:05 2015" -->
<!-- isoreceived="20150731160905" -->
<!-- sent="Fri, 31 Jul 2015 09:07:14 -0700" -->
<!-- isosent="20150731160714" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.8rc1 testing report" -->
<!-- id="CAAvDA14QOCxJzjj6ODqAd-yi0c8rjsC=M48gY8xc-bgVxzSbUw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.8rc1 testing report<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-31 12:07:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Previous message:</strong> <a href="17723.php">Orion Poplawski: "Re: [OMPI devel] 1.8.8rc1 ready"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Reply:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My testing has completed all but the last few QEMU-emulated ARM and MIPS
<br>
platforms.
<br>
However I do have complete (successful) results from 1 MIPS and 2 ARM
<br>
platforms at this point.
<br>
<p>The only issue I encountered is one we learned of with 1.10.0rc2: &quot;pgcc
<br>
-m32&quot; has issues with some inline asm in hwloc-1.11.0
<br>
Since hwloc's v1.11 branch has been updated to resolve that issue, I
<br>
suggest cherry-picking the commit (
<br>
<a href="https://github.com/open-mpi/hwloc/commit/46deaebf">https://github.com/open-mpi/hwloc/commit/46deaebf</a>) that addresses this
<br>
particular issue.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17724/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Previous message:</strong> <a href="17723.php">Orion Poplawski: "Re: [OMPI devel] 1.8.8rc1 ready"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
<li><strong>Reply:</strong> <a href="17725.php">Ralph Castain: "Re: [OMPI devel] 1.8.8rc1 testing report"</a>
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
