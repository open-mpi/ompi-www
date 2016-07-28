<?
$subject_val = "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 17:04:00 2010" -->
<!-- isoreceived="20100826210400" -->
<!-- sent="Thu, 26 Aug 2010 15:03:53 -0600" -->
<!-- isosent="20100826210353" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)" -->
<!-- id="A4FC9441-9BC4-4F1E-B38A-C3A1AE7C7634_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="223C0D51-36B2-4077-82BF-532603E7E5E6_at_cisco.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 17:03:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8397.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<li><strong>Previous message:</strong> <a href="8395.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do.
<br>
<p>Sam
<br>
<p>On Aug 26, 2010, at 2:08 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think Sam already submitted CMR's for 1.5:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2545">https://svn.open-mpi.org/trac/ompi/ticket/2545</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam -- can you construct an equivalent for v1.4 and CC Paul so that  
</span><br>
<span class="quotelev1">&gt; he knows not to follow up on it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2010, at 3:56 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The warnings below have appeared in some of my other testing  
</span><br>
<span class="quotelev2">&gt;&gt; results.  However, I now know what they correspond to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In both 1.5rc5 and 1.4.3rc1 there are two calls to orte_show_help()  
</span><br>
<span class="quotelev2">&gt;&gt; that are passing orte_process_info.nodename as the third argument,  
</span><br>
<span class="quotelev2">&gt;&gt; where a _Bool is expected.  It looks to me as if the third argument  
</span><br>
<span class="quotelev2">&gt;&gt; is actually just missing from these 2 calls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For 1.4.3rc1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 111.41:  
</span><br>
<span class="quotelev2">&gt;&gt; 1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;char*&quot; is not allowed.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 136.45:  
</span><br>
<span class="quotelev2">&gt;&gt; 1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;char*&quot; is not allowed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For 1.5rc5:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 110.41:  
</span><br>
<span class="quotelev2">&gt;&gt; 1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;char*&quot; is not allowed.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../../ompi/mca/common/sm/common_sm_mmap.c&quot;, line 135.45:  
</span><br>
<span class="quotelev2">&gt;&gt; 1506-280 (W) Function argument assignment between types &quot;_Bool&quot; and  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;char*&quot; is not allowed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8397.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<li><strong>Previous message:</strong> <a href="8395.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
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
