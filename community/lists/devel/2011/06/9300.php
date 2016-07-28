<?
$subject_val = "Re: [OMPI devel] openib error for message size 1.5 GB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 00:43:25 2011" -->
<!-- isoreceived="20110607044325" -->
<!-- sent="Tue, 7 Jun 2011 07:43:18 +0300" -->
<!-- isosent="20110607044318" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib error for message size 1.5 GB" -->
<!-- id="BANLkTinKuP3LGJt=cLGRsz_Oj57knw4FgA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3E935415-DC3D-4D16-9163-1557E613C3B7_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib error for message size 1.5 GB<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 00:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9301.php">Sebastian Rinke: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Previous message:</strong> <a href="9299.php">George Bosilca: "[OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9298.php">Sebastian Rinke: "[OMPI devel] openib error for message size 1.5 GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9301.php">Sebastian Rinke: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Reply:</strong> <a href="9301.php">Sebastian Rinke: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please try with &quot;--mca mpi_leave_pinned 0&quot;
<br>
<p>On Mon, Jun 6, 2011 at 4:16 PM, Sebastian Rinke &lt;s.rinke_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While trying to send a message of size 1610612736 B (1.5 GB), I get the
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[52363,1],1][../../../../../../ompi/mca/btl/openib/btl_openib_component.c:2951:handle_wc]
</span><br>
<span class="quotelev1">&gt; from grsacc20 to: grsacc19 error polling LP CQ with status LOCAL LENGTH
</span><br>
<span class="quotelev1">&gt; ERROR status number 1 for wr_id 18729360 opcode 128  vendor error 105 qp_idx
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reducing the size to 1 GB works fine. I assume that this is rather related
</span><br>
<span class="quotelev1">&gt; to Infiniband itself than to Open MPI.
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI 1.4.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas on that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; Sebastian.
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9301.php">Sebastian Rinke: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Previous message:</strong> <a href="9299.php">George Bosilca: "[OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9298.php">Sebastian Rinke: "[OMPI devel] openib error for message size 1.5 GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9301.php">Sebastian Rinke: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Reply:</strong> <a href="9301.php">Sebastian Rinke: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
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
