<?
$subject_val = "Re: [OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 06:41:19 2008" -->
<!-- isoreceived="20080730104119" -->
<!-- sent="Wed, 30 Jul 2008 12:41:06 +0200" -->
<!-- isosent="20080730104106" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0" -->
<!-- id="1F433B7E-365F-4384-A326-A5B77EB55A5B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A240BA19-82FE-4434-B23C-59D21A4792B9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 06:41:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4489.php">Jeff Squyres: "[OMPI devel] OMPI v1.3 report"</a>
<li><strong>Previous message:</strong> <a href="4487.php">Adrian Knoth: "Re: [OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>In reply to:</strong> <a href="4477.php">Jeff Squyres: "[OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right, these defines are now useless. I remove them with the  
<br>
commit 19091. Thanks for noticing.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 29, 2008, at 2:43 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Since the trunk has now been bumped to MCA v2.0, and all frameworks  
</span><br>
<span class="quotelev1">&gt; have also been bumped to v2.0, are these two #defines relevant  
</span><br>
<span class="quotelev1">&gt; anymore:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA_BTL_BASE_VERSION_1_0_1
</span><br>
<span class="quotelev1">&gt; MCA_BTL_BASE_VERSION_1_0_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know there was at least one BTL being developed at an organization  
</span><br>
<span class="quotelev1">&gt; that may not have kept up with the trunk.  Do we need to put in  
</span><br>
<span class="quotelev1">&gt; backwards compatibility for that BTL, or should we delete these  
</span><br>
<span class="quotelev1">&gt; #defines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4488/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4489.php">Jeff Squyres: "[OMPI devel] OMPI v1.3 report"</a>
<li><strong>Previous message:</strong> <a href="4487.php">Adrian Knoth: "Re: [OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>In reply to:</strong> <a href="4477.php">Jeff Squyres: "[OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0"</a>
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
