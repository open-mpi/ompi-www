<?
$subject_val = "Re: [OMPI devel] openib error for message size 1.5 GB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 05:09:55 2011" -->
<!-- isoreceived="20110607090955" -->
<!-- sent="Tue, 07 Jun 2011 11:09:52 +0200" -->
<!-- isosent="20110607090952" -->
<!-- name="Sebastian Rinke" -->
<!-- email="s.rinke_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib error for message size 1.5 GB" -->
<!-- id="C85F7B8D-1A54-481D-B16E-6541ABE02BEE_at_grs-sim.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinKuP3LGJt=cLGRsz_Oj57knw4FgA_at_mail.gmail.com" -->
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
<strong>From:</strong> Sebastian Rinke (<em>s.rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 05:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>In reply to:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Worked.
<br>
<p>Thanks a lot!
<br>
<p>On Jun 7, 2011, at 6:43 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please try with &quot;--mca mpi_leave_pinned 0&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 6, 2011 at 4:16 PM, Sebastian Rinke &lt;s.rinke_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While trying to send a message of size 1610612736 B (1.5 GB), I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[52363,1],1][../../../../../../ompi/mca/btl/openib/btl_openib_component.c:2951:handle_wc] from grsacc20 to: grsacc19 error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for wr_id 18729360 opcode 128  vendor error 105 qp_idx 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reducing the size to 1 GB works fine. I assume that this is rather related to Infiniband itself than to Open MPI.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>In reply to:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
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
