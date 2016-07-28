<?
$subject_val = "Re: [hwloc-devel] want 1.0rc4?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 03:56:21 2010" -->
<!-- isoreceived="20100504075621" -->
<!-- sent="Tue, 4 May 2010 09:56:15 +0200" -->
<!-- isosent="20100504075615" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] want 1.0rc4?" -->
<!-- id="20100504075615.GG5108_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BDFB6A7.8080400_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] want 1.0rc4?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 03:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0958.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2044"</a>
<li><strong>Previous message:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>In reply to:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 04 May 2010 07:54:47 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt;     line 41 of src/misc.c in hwloc_snprintf():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          str = malloc(size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure what to do about this one... Is there any value we could return
</span><br>
<span class="quotelev1">&gt; without possibly breaking the caller ?
</span><br>
<p>0 seems relatively safe to me. At worse the caller allocates 0 bytes,
<br>
which might also return ENOMEM, but that's up to him to handle it.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0958.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2044"</a>
<li><strong>Previous message:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>In reply to:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
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
