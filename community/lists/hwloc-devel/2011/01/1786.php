<?
$subject_val = "Re: [hwloc-devel] Current memory binding policy";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 11:15:42 2011" -->
<!-- isoreceived="20110105161542" -->
<!-- sent="Wed, 5 Jan 2011 17:15:37 +0100" -->
<!-- isosent="20110105161537" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Current memory binding policy" -->
<!-- id="20110105161537.GZ5728_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="924638407.2284717.1294236765175.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Current memory binding policy<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 11:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1787.php">Brice Goglin: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe in reply to:</strong> <a href="1783.php">Jeff Squyres: "[hwloc-devel] Current memory binding policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1790.php">Jeff Squyres: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>Reply:</strong> <a href="1790.php">Jeff Squyres: "Re: [hwloc-devel] Current memory binding policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 05 Jan 2011 15:12:45 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Quick clarification question: hwloc_alloc_membind() says --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Returns -1 with errno set to ENOSYS if the action is not 
</span><br>
<span class="quotelev1">&gt;     supported and HWLOC_MEMBIND_STRICT is given.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it also returns -1/ENOSYS if the current memory policy is STRICT, even if STRICT was not passed in flags.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
<p>Alloc_membind does not follow the current policy, so STRICT has to be
<br>
passed in flags to get ENOSYS.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1787.php">Brice Goglin: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Previous message:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Maybe in reply to:</strong> <a href="1783.php">Jeff Squyres: "[hwloc-devel] Current memory binding policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1790.php">Jeff Squyres: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>Reply:</strong> <a href="1790.php">Jeff Squyres: "Re: [hwloc-devel] Current memory binding policy"</a>
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
