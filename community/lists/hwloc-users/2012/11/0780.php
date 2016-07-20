<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 12:00:05 2012" -->
<!-- isoreceived="20121120170005" -->
<!-- sent="Tue, 20 Nov 2012 18:00:00 +0100" -->
<!-- isosent="20121120170000" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="20121120170000.GL6241_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20121120165800.GJ6241_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Windows api threading functions equivalent to hwloc?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 12:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0781.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0781.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Tue 20 Nov 2012 17:58:45 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Andrew Somorjai, le Tue 20 Nov 2012 09:45:12 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I'm also confused about these two lines and whether its necessary for the second one to exist?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; HANDLE thread[num_threads];
</span><br>
<span class="quotelev2">&gt; &gt; HANDLE pthread_getw32threadhandle_np(thread); 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does the second api call fill the thread array or just the first element?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does not fill anything, it returns the converted value.
</span><br>
<p>(and just the element that you pass)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0781.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0781.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
