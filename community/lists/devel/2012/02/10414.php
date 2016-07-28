<?
$subject_val = "[OMPI devel] trunk build failed when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 20:10:42 2012" -->
<!-- isoreceived="20120215011042" -->
<!-- sent="Tue, 14 Feb 2012 17:10:30 -0800" -->
<!-- isosent="20120215011030" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk build failed when configured with --disable-hwloc" -->
<!-- id="4F3B0606.1080900_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk build failed when configured with --disable-hwloc<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 20:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10413.php">Paul H. Hargrove: "[OMPI devel] the dangers of configure probing argument counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have configured the ompi-trunk (from last night's tarball: 
<br>
1.7a1r25913) with --without-hwloc.
<br>
Having done so, I see the following failure at build time:
<br>
<p><span class="quotelev1">&gt;   CC     rmaps_rank_file_component.lo
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_compo
</span><br>
<span class="quotelev1">&gt; nent.c: In function 'orte_rmaps_rank_file_open':
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_compo
</span><br>
<span class="quotelev1">&gt; nent.c:111: error: 'opal_hwloc_binding_policy' undeclared (first use 
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_compo
</span><br>
<span class="quotelev1">&gt; nent.c:111: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_compo
</span><br>
<span class="quotelev1">&gt; nent.c:111: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_component.c:111: 
</span><br>
<span class="quotelev1">&gt; error: 'OPAL_BIND_TO_CPUSET' undeclared (first use in this function)
</span><br>
<p>Looks like this code is not &quot;aware&quot; that hwloc has been configured out.
<br>
This is not present in the 1.5 branch configured with identical arguments.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10413.php">Paul H. Hargrove: "[OMPI devel] the dangers of configure probing argument counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
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
