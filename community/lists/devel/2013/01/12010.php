<?
$subject_val = "Re: [OMPI devel] One-line patch for warning in 1.7rc6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 21:21:46 2013" -->
<!-- isoreceived="20130126022146" -->
<!-- sent="Fri, 25 Jan 2013 18:21:39 -0800" -->
<!-- isosent="20130126022139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] One-line patch for warning in 1.7rc6" -->
<!-- id="6B4294B7-EFCC-4380-995F-B8D75CEADC91_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA143yRmL3tb2nFAp6nxSVMLmU8+hEPu8wY_S_jdjxqZz4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] One-line patch for warning in 1.7rc6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 21:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12011.php">Paul Hargrove: "[OMPI devel] Trunk broken on NERSC's Cray XE6"</a>
<li><strong>Previous message:</strong> <a href="12009.php">Paul Hargrove: "[OMPI devel] One-line patch for warning in 1.7rc6"</a>
<li><strong>In reply to:</strong> <a href="12009.php">Paul Hargrove: "[OMPI devel] One-line patch for warning in 1.7rc6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe we turned that component completely off, though it may have happened after rc6 was rolled (I'll check to make sure we did) - you definitely don't want to build it as it is broken and will often segfault.
<br>
<p>On Jan 25, 2013, at 6:16 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While building 1.7rc6 on a i386 w/ InfiniBand I saw numerous instances of this warning:
</span><br>
<span class="quotelev1">&gt;    ../../../../../orte/mca/oob/ud/oob_ud.h:93: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following 1-line change fixes this.
</span><br>
<span class="quotelev1">&gt; Alternatively, a single cast to type uintptr_t is probably sufficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.7rc6/orte/mca/oob/ud/oob_ud.h~    2013-01-25 18:03:20.000000000 -0800
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.7rc6/orte/mca/oob/ud/oob_ud.h     2013-01-25 18:03:37.000000000 -0800
</span><br>
<span class="quotelev1">&gt; @@ -90,7 +90,7 @@ static inline void mca_oob_ud_fill_recv_
</span><br>
<span class="quotelev1">&gt;  static inline void mca_oob_ud_fill_sge (struct ibv_sge *sge, void *addr,
</span><br>
<span class="quotelev1">&gt;                                          uint32_t length, uint32_t lkey)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    sge-&gt;addr   = (uint64_t)addr;
</span><br>
<span class="quotelev1">&gt; +    sge-&gt;addr   = (uint64_t)(uintptr_t)addr;
</span><br>
<span class="quotelev1">&gt;      sge-&gt;length = length;
</span><br>
<span class="quotelev1">&gt;      sge-&gt;lkey   = lkey;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12011.php">Paul Hargrove: "[OMPI devel] Trunk broken on NERSC's Cray XE6"</a>
<li><strong>Previous message:</strong> <a href="12009.php">Paul Hargrove: "[OMPI devel] One-line patch for warning in 1.7rc6"</a>
<li><strong>In reply to:</strong> <a href="12009.php">Paul Hargrove: "[OMPI devel] One-line patch for warning in 1.7rc6"</a>
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
