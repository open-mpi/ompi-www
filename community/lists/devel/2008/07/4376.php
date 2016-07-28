<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 14:39:05 2008" -->
<!-- isoreceived="20080717183905" -->
<!-- sent="Thu, 17 Jul 2008 21:38:59 +0300" -->
<!-- isosent="20080717183859" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487F91C3.7020108_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000001c8e833$5fdb1ab0$9d37170a_at_amr.corp.intel.com" -->
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
<strong>Date:</strong> 2008-07-17 14:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4377.php">Jeff Squyres: "[OMPI devel] Using Mercurial for OMPI devel"</a>
<li><strong>Previous message:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4496.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4496.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sean Hefty wrote:
<br>
<span class="quotelev2">&gt;&gt; It is not zero, it should be:
</span><br>
<span class="quotelev2">&gt;&gt; #define IB_CM_ASSIGN_SERVICE_ID __cpu_to_be64(0x0200000000000000ULL)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately the value defined in kernel level IBCM and does not
</span><br>
<span class="quotelev2">&gt;&gt; exposed to user level.
</span><br>
<span class="quotelev2">&gt;&gt; Can you please expose it to user level (infiniband/cm.h)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops - good catch.  I will add the assign ID and mask values to the header file
</span><br>
<span class="quotelev1">&gt; for the next release.  Until then, can you try using the values given in the
</span><br>
<span class="quotelev1">&gt; kernel header file and let me know if it solves the problem?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I already prepared patch for OMPI that defines the value.
<br>
Few people already reported that the patch ok ( 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1388">https://svn.open-mpi.org/trac/ompi/ticket/1388</a> )
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4377.php">Jeff Squyres: "[OMPI devel] Using Mercurial for OMPI devel"</a>
<li><strong>Previous message:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4496.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4496.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
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
