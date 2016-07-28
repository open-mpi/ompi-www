<?
$subject_val = "Re: [OMPI devel] Memory hooks stuff";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 26 09:28:11 2008" -->
<!-- isoreceived="20080526132811" -->
<!-- sent="Mon, 26 May 2008 09:27:51 -0400" -->
<!-- isosent="20080526132751" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks stuff" -->
<!-- id="483ABAD7.7040805_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080526085505.GJ4014_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memory hooks stuff<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-26 09:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4032.php">Jeff Squyres: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4030.php">Pavel Shamis (Pasha): "Re: [OMPI devel] New HCA vendor part ID"</a>
<li><strong>In reply to:</strong> <a href="4027.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4025.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gleb,
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; Not just that but also when swapping out or pagefault happens so even no
</span><br>
<span class="quotelev1">&gt; page pinning is needed. But HW should be designed to work with changing
</span><br>
<span class="quotelev1">&gt; page mappings and I am not sure that Mellanox HW designed for that. What
</span><br>
<span class="quotelev1">&gt; about Myricom HW?
</span><br>
<p>Yes, we can support it. However, if you stick to the registration cache 
<br>
problem, then there it no need for hardware support (pages are pinned 
<br>
during registration, but it's safe to keep them pinned).
<br>
<p>I don't think swapping registered pages is important for HPC, but it may 
<br>
be for non-HPC applications.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4032.php">Jeff Squyres: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4030.php">Pavel Shamis (Pasha): "Re: [OMPI devel] New HCA vendor part ID"</a>
<li><strong>In reply to:</strong> <a href="4027.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4025.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks stuff"</a>
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
