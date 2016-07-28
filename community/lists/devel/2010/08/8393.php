<?
$subject_val = "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 16:06:55 2010" -->
<!-- isoreceived="20100826200655" -->
<!-- sent="Thu, 26 Aug 2010 16:08:34 -0400" -->
<!-- isosent="20100826200834" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)" -->
<!-- id="223C0D51-36B2-4077-82BF-532603E7E5E6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C76C706.3010108_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 16:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8394.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8392.php">Paul H. Hargrove: "[OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8392.php">Paul H. Hargrove: "[OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8396.php">Samuel K. Gutierrez: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8396.php">Samuel K. Gutierrez: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Sam already submitted CMR's for 1.5:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2545">https://svn.open-mpi.org/trac/ompi/ticket/2545</a>
<br>
<p>Sam -- can you construct an equivalent for v1.4 and CC Paul so that he knows not to follow up on it?
<br>
<p>Thanks!
<br>
<p><p>On Aug 26, 2010, at 3:56 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; The warnings below have appeared in some of my other testing results.  However, I now know what they correspond to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In both 1.5rc5 and 1.4.3rc1 there are two calls to orte_show_help() that are passing orte_process_info.nodename as the third argument, where a _Bool is expected.  It looks to me as if the third argument is actually just missing from these 2 calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For 1.4.3rc1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 111.41: 1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and &quot;char*&quot; is not allowed.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 136.45: 1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and &quot;char*&quot; is not allowed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For 1.5rc5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 110.41: 1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and &quot;char*&quot; is not allowed.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 135.45: 1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and &quot;char*&quot; is not allowed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8394.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8392.php">Paul H. Hargrove: "[OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8392.php">Paul H. Hargrove: "[OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8396.php">Samuel K. Gutierrez: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8396.php">Samuel K. Gutierrez: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
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
