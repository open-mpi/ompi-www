<?
$subject_val = "[OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 15:57:04 2010" -->
<!-- isoreceived="20100826195704" -->
<!-- sent="Thu, 26 Aug 2010 12:56:54 -0700" -->
<!-- isosent="20100826195654" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C76C706.3010108_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 15:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8391.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The warnings below have appeared in some of my other testing results.  
<br>
However, I now know what they correspond to.
<br>
<p>In both 1.5rc5 and 1.4.3rc1 there are two calls to orte_show_help() that 
<br>
are passing orte_process_info.nodename as the third argument, where a 
<br>
_Bool is expected.  It looks to me as if the third argument is actually 
<br>
just missing from these 2 calls.
<br>
<p>-Paul
<br>
<p>For 1.4.3rc1:
<br>
<p>&quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 111.41: 
<br>
1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and 
<br>
&quot;char*&quot; is not allowed.
<br>
&quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 136.45: 
<br>
1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and 
<br>
&quot;char*&quot; is not allowed.
<br>
<p>For 1.5rc5:
<br>
<p>&quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 110.41: 
<br>
1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and 
<br>
&quot;char*&quot; is not allowed.
<br>
&quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 135.45: 
<br>
1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and 
<br>
&quot;char*&quot; is not allowed.
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
<li><strong>Next message:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8391.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
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
