<?
$subject_val = "[OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 17:47:00 2012" -->
<!-- isoreceived="20120227224700" -->
<!-- sent="Mon, 27 Feb 2012 14:46:38 -0800" -->
<!-- isosent="20120227224638" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID" -->
<!-- id="4F4C07CE.9080302_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5060DB4C-C576-4D92-A9B4-9E25293C691A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 17:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10616.php">Eugene Loh: "[OMPI devel] locked memory consumption with openib and spawn"</a>
<li><strong>Previous message:</strong> <a href="10614.php">Jeffrey Squyres: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10580.php">Jeffrey Squyres: "[OMPI devel] 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10643.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<li><strong>Reply:</strong> <a href="10643.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing 1.5.5rc2, I see warnings about an unknown IB HCA unless I make 
<br>
the following simple addition:
<br>
<p>--- ompi-v1.5/ompi/mca/btl/openib/mca-btl-openib-device-params.ini      
<br>
(revision 26056)
<br>
+++ ompi-v1.5/ompi/mca/btl/openib/mca-btl-openib-device-params.ini      
<br>
(working copy)
<br>
@@ -127,7 +127,7 @@
<br>
&nbsp;&nbsp;############################################################################
<br>
<p>&nbsp;&nbsp;[Mellanox Tavor Infinihost]
<br>
-vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba
<br>
+vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba,0x15b3
<br>
&nbsp;&nbsp;vendor_part_id = 23108
<br>
&nbsp;&nbsp;use_eager_rdma = 1
<br>
&nbsp;&nbsp;mtu = 1024
<br>
<p><p>This one-line patch applies equally to v1.5 and to the trunk.
<br>
I suspect that this vendor ID should be added to the Arbel and Sinai HCA 
<br>
entries as well.
<br>
It is already listed for Hermon.
<br>
<p>-Paul
<br>
<p>On 2/23/2012 5:17 AM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; We finally have 1.5.5rc2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given the amount of testing we've had, this rc might actually be pretty close.  Lots and lots of changes since rc1; I'm not even going to bother to list them all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="10616.php">Eugene Loh: "[OMPI devel] locked memory consumption with openib and spawn"</a>
<li><strong>Previous message:</strong> <a href="10614.php">Jeffrey Squyres: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10580.php">Jeffrey Squyres: "[OMPI devel] 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10643.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<li><strong>Reply:</strong> <a href="10643.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
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
