<?
$subject_val = "Re: [OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 07:53:10 2008" -->
<!-- isoreceived="20080623115310" -->
<!-- sent="Mon, 23 Jun 2008 07:53:00 -0400" -->
<!-- isosent="20080623115300" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable" -->
<!-- id="E7A33FCA-A8EF-4C6F-8F91-82D7A86C2CFB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="78DE440C4156CC45A35FDBCBF9B830D7038B2A79_at_sohm.kpit.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 07:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="5964.php">Aditya Vasal: "[OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable"</a>
<li><strong>In reply to:</strong> <a href="5964.php">Aditya Vasal: "[OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 23, 2008, at 7:44 AM, Aditya Vasal wrote:
<br>
<p><span class="quotelev1">&gt; I am working on a cluster and want to run 12 processes for standard  
</span><br>
<span class="quotelev1">&gt; Linpack test to measure its performance.
</span><br>
<span class="quotelev1">&gt; I have made appropriate changes to HPL.dat input file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I need to set OMPI_MCA_ns_nds_vpid and RANK environment  
</span><br>
<span class="quotelev1">&gt; variables for execution.
</span><br>
<p>The OMPI_MCA_ns_nds_vpid variable is &quot;internal&quot; -- you shouldn't need  
<br>
to set it yourself.
<br>
<p>I don't know what RANK is -- is that something in your script setup?   
<br>
AFAIK, HPL doesn't require an additional RANK environment variable.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="5964.php">Aditya Vasal: "[OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable"</a>
<li><strong>In reply to:</strong> <a href="5964.php">Aditya Vasal: "[OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable"</a>
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
