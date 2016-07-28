<?
$subject_val = "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 13:29:35 2012" -->
<!-- isoreceived="20120229182935" -->
<!-- sent="Wed, 29 Feb 2012 13:29:30 -0500" -->
<!-- isosent="20120229182930" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID" -->
<!-- id="95E57FB6-35A3-4195-BC68-1F3140DA8224_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4C07CE.9080302_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 13:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Previous message:</strong> <a href="10642.php">Jeffrey Squyres: "[OMPI devel] OMPI tool CLI improvements"</a>
<li><strong>In reply to:</strong> <a href="10615.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox -- can you confirm that this is ok?
<br>
<p><p>On Feb 27, 2012, at 5:46 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Testing 1.5.5rc2, I see warnings about an unknown IB HCA unless I make the following simple addition:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- ompi-v1.5/ompi/mca/btl/openib/mca-btl-openib-device-params.ini      (revision 26056)
</span><br>
<span class="quotelev1">&gt; +++ ompi-v1.5/ompi/mca/btl/openib/mca-btl-openib-device-params.ini      (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -127,7 +127,7 @@
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Mellanox Tavor Infinihost]
</span><br>
<span class="quotelev1">&gt; -vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba
</span><br>
<span class="quotelev1">&gt; +vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba,0x15b3
</span><br>
<span class="quotelev1">&gt; vendor_part_id = 23108
</span><br>
<span class="quotelev1">&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev1">&gt; mtu = 1024
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This one-line patch applies equally to v1.5 and to the trunk.
</span><br>
<span class="quotelev1">&gt; I suspect that this vendor ID should be added to the Arbel and Sinai HCA entries as well.
</span><br>
<span class="quotelev1">&gt; It is already listed for Hermon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/23/2012 5:17 AM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We finally have 1.5.5rc2:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given the amount of testing we've had, this rc might actually be pretty close.  Lots and lots of changes since rc1; I'm not even going to bother to list them all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please test!
</span><br>
<span class="quotelev2">&gt;&gt; 
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Previous message:</strong> <a href="10642.php">Jeffrey Squyres: "[OMPI devel] OMPI tool CLI improvements"</a>
<li><strong>In reply to:</strong> <a href="10615.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
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
