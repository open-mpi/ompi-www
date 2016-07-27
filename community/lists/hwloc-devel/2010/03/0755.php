<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 11:31:25 2010" -->
<!-- isoreceived="20100312163125" -->
<!-- sent="Fri, 12 Mar 2010 17:31:20 +0100" -->
<!-- isosent="20100312163120" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="20100312163120.GZ5044_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7FB9E31F-9FA7-46F5-A306-E8CE5224AE9E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] thread safety<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 11:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 12 Mar 2010 08:25:11 -0800, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 12, 2010, at 8:16 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With a full memory barrier, you do not have any issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we're saying that the only way to use hwloc safely with multiple different thread readers and writers is to do a full memory barrier across the entire machine?
</span><br>
<p>That is the only way to safely do anything with shared memory on a
<br>
parallel machine. Mutexes and spinlocks have to do it, or else they are
<br>
buggy.
<br>
<p><span class="quotelev1">&gt; That seems like a big hammer,
</span><br>
<p>It is a way smaller hammer than, say, a mutex or a spinlock.
<br>
<p><span class="quotelev1">&gt; and can have performance implications on other parts of the system that you aren't even using.
</span><br>
<p>It _has_ to be done, else your application is buggy, it is not just
<br>
hwloc.
<br>
<p><span class="quotelev1">&gt; Is it sufficient, for example, for the app to mark the entire topology struct instance volatile?  I.e.:
</span><br>
<p>No, because that will not automatically issue hardware memory barriers,
<br>
which are needed on basically all architectures but x86 (which has
<br>
in-order stores) to ensure seeing writes coherently.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
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
