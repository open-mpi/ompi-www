<?
$subject_val = "[OMPI devel] Open MPI 1.10.0rc2 and &quot;pgcc -m32&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 20:45:24 2015" -->
<!-- isoreceived="20150722004524" -->
<!-- sent="Tue, 21 Jul 2015 17:45:18 -0700" -->
<!-- isosent="20150722004518" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI 1.10.0rc2 and &amp;quot;pgcc -m32&amp;quot;" -->
<!-- id="CAAvDA16djMCSkB_0fgB5o-m=-u1WcDW1yewTLMAOLvdCQaU_HQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI 1.10.0rc2 and &quot;pgcc -m32&quot;<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 20:45:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17674.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Pavan Balaji recently reported on the hwloc-devel list, there is a
<br>
problem with some inline asm in hwloc-1.11.0 that leads to failures with
<br>
PGI compilers and x86 (32-bit) targets.
<br>
<p>I have determined that this issue *is* also present in the hwloc version
<br>
embedded in Open MPI 1.10.0rc2.
<br>
<p>This is *NOT* a regression relative to previous Open MPI releases, since
<br>
this code had been wrong for a while.
<br>
However, if Brice can decide soon whether to accept my suggested fix to
<br>
hwloc-1.11.0, then it might be worth cherry-picking the fix.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17674.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
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
