<?
$subject_val = "[OMPI devel] openib error for message size 1.5 GB";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 09:17:01 2011" -->
<!-- isoreceived="20110606131701" -->
<!-- sent="Mon, 06 Jun 2011 15:16:56 +0200" -->
<!-- isosent="20110606131656" -->
<!-- name="Sebastian Rinke" -->
<!-- email="s.rinke_at_[hidden]" -->
<!-- subject="[OMPI devel] openib error for message size 1.5 GB" -->
<!-- id="3E935415-DC3D-4D16-9163-1557E613C3B7_at_grs-sim.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] openib error for message size 1.5 GB<br>
<strong>From:</strong> Sebastian Rinke (<em>s.rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-06 09:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9299.php">George Bosilca: "[OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Reply:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>While trying to send a message of size 1610612736 B (1.5 GB), I get the following error:
<br>
<p>[[52363,1],1][../../../../../../ompi/mca/btl/openib/btl_openib_component.c:2951:handle_wc] from grsacc20 to: grsacc19 error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for wr_id 18729360 opcode 128  vendor error 105 qp_idx 3
<br>
<p>Reducing the size to 1 GB works fine. I assume that this is rather related to Infiniband itself than to Open MPI.
<br>
I'm using Open MPI 1.4.1.
<br>
<p>Any ideas on that?
<br>
<p>Thank you very much.
<br>
Sebastian.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9299.php">George Bosilca: "[OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9297.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Reply:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
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
