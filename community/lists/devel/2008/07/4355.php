<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 07:39:53 2008" -->
<!-- isoreceived="20080715113953" -->
<!-- sent="Tue, 15 Jul 2008 14:39:47 +0300" -->
<!-- isosent="20080715113947" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487C8C83.2020707_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4A1E692.58A5%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 07:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Guess what - we don't always put them out there because - tada - we don't
</span><br>
<span class="quotelev1">&gt; use them! What goes out on the backend is a stripped down version of
</span><br>
<span class="quotelev1">&gt; libraries we require. Given the huge number of libraries people provide
</span><br>
<span class="quotelev1">&gt; (looking at the bigger, beyond OMPI picture), it consumes a lot of limited
</span><br>
<span class="quotelev1">&gt; disk space to install every library on every node. So sometimes we build our
</span><br>
<span class="quotelev1">&gt; own rpm's to pick up only what we need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As long as --without-rdmacm --without-ibcm are present, then we are happy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
FYI
<br>
I recently added options that allow enable/disable all the *cm stuff:
<br>
<p>&nbsp;&nbsp;--enable-openib-ibcm    Enable Open Fabrics IBCM support in openib BTL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(default: enabled)
<br>
&nbsp;&nbsp;--enable-openib-rdmacm  Enable Open Fabrics RDMACM support in openib BTL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(default: enabled)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
