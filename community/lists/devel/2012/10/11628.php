<?
$subject_val = "Re: [OMPI devel] MPI-RMA on uGNI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 22 14:34:08 2012" -->
<!-- isoreceived="20121022183408" -->
<!-- sent="Mon, 22 Oct 2012 11:34:02 -0700" -->
<!-- isosent="20121022183402" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI-RMA on uGNI?" -->
<!-- id="CAAvDA15Xti-k9HVdaw0ifnGNgOSeN_E_Wq2tFdSayLVpzH8n+w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F4650B4E-FB48-4B6A-8755-7A8E31D774CE_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI-RMA on uGNI?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-22 14:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11629.php">Ralph Castain: "[OMPI devel] OMPI developers meeting: Dec 2012"</a>
<li><strong>Previous message:</strong> <a href="11627.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11624.php">Shamis, Pavel: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Pasha.  I see them now.
<br>
<p>I asked precisely because I doubted that I have enough understanding of the
<br>
code structure to find this code on my own (and I did look).  Obviously I
<br>
was right to doubt myself.
<br>
<p>-Paul
<br>
<p>On Mon, Oct 22, 2012 at 7:10 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you look at   mca_btl_ugni_put / mca_btl_ugni_get functions  in the
</span><br>
<span class="quotelev1">&gt; ugni btl ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to resolve an odd issue I am seeing with my one uGNI-based
</span><br>
<span class="quotelev1">&gt; code, and was hoping to use OMPI's uGNI support as an example of correct
</span><br>
<span class="quotelev1">&gt; usage.  My particular interest is in RDMA, but as far as I can tell the
</span><br>
<span class="quotelev1">&gt; uGNI blt in ompi-trunk doesn't have the btl_put or blt_get entry points.
</span><br>
<span class="quotelev1">&gt;  So, if I understand correctly, that means osc/pt2pt is used for MPI-RMA
</span><br>
<span class="quotelev1">&gt; support on a Cray XE.  Is that correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11629.php">Ralph Castain: "[OMPI devel] OMPI developers meeting: Dec 2012"</a>
<li><strong>Previous message:</strong> <a href="11627.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11624.php">Shamis, Pavel: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
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
