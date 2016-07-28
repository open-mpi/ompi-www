<?
$subject_val = "Re: [OMPI users] openib issue with 1.6.5 but not later releases";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 15:42:29 2015" -->
<!-- isoreceived="20151021194229" -->
<!-- sent="Wed, 21 Oct 2015 19:42:18 +0000" -->
<!-- isosent="20151021194218" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib issue with 1.6.5 but not later releases" -->
<!-- id="8B48B672-A291-4C98-A498-2D07EDCF8C9E_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56254884.7080403_at_ssc-spc.gc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib issue with 1.6.5 but not later releases<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 15:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27913.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27911.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see inline.
<br>
(Liran, can you please comment)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, is this setting required if there are multiple IB interfaces (as
</span><br>
<span class="quotelev2">&gt;&gt; when there are multiple eth interfaces)? What is curious is that
</span><br>
<span class="quotelev2">&gt;&gt; there is only one interface visible from the container. Does the
</span><br>
<span class="quotelev2">&gt;&gt; openib btl look deeper and find all that exist in the host?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pasha &gt; Not really. We use Verbs driver to fetch the list of devices on the &quot;node&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there something about the openib implementations in 1.8 and
</span><br>
<span class="quotelev2">&gt;&gt; 1.10 that may handle this differently since we do not set
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_if_include but our tests seem to work? Or,
</span><br>
<span class="quotelev2">&gt;&gt; is it a fluke?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pasha &gt; I was not involved that much in 1.8 and 1.10 so it is a bit hard to comment.
</span><br>
<span class="quotelev2">&gt;&gt; I would suspect that this might be somehow related to the locality feature and openib btl selects and creates only one btl instance and ignores all the rest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if I understand correctly, we do not need to worry for 1.8 and 1.10.
</span><br>
<p>Probably. The fact that it works well actually might be a bug :) 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since it is possible to see many hca_id entries, even in the container, what
</span><br>
<span class="quotelev1">&gt; do we need to do under 1.6.5? Can we use a single mlx4_# (e.g., mlx4_0) for
</span><br>
<span class="quotelev1">&gt; all or do we need to select one based on the ib# interface? We expect to
</span><br>
<span class="quotelev1">&gt; run multiple containers on a single host where each container gets a
</span><br>
<span class="quotelev1">&gt; unique/dedicated ib# interface.
</span><br>
<p>You may find this useful: <a href="http://lists.openfabrics.org/pipermail/ofvwg/attachments/20150512/245833e1/attachment-0001.pdf">http://lists.openfabrics.org/pipermail/ofvwg/attachments/20150512/245833e1/attachment-0001.pdf</a>
<br>
<p>Best,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27913.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>Previous message:</strong> <a href="27911.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<li><strong>In reply to:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
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
