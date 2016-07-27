<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:47:44 2011" -->
<!-- isoreceived="20110804154744" -->
<!-- sent="Thu, 4 Aug 2011 17:47:39 +0200" -->
<!-- isosent="20110804154739" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="20110804154739.GK4409_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1482359162.1946440.1312471091995.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 11:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2270.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 04 Aug 2011 17:18:11 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Aug 4, 2011, at 11:13 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Where do we use the pthread functions -- in the libhwloc core, or just in the utils?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In the core, but only if they are linked-in, through weak references.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if building statically (libhwloc.a), they'll need to be resolved -- right?
</span><br>
<p>Only if the application uses -lpthread. Else the weak reference becomes
<br>
NULL, which we check for.
<br>
<p><span class="quotelev1">&gt; I.e., is there harm in (effectively) adding -lpthread?
</span><br>
<p>Generally slower glibc.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2270.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
