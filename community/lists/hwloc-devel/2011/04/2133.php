<?
$subject_val = "Re: [hwloc-devel] specifying I/O devices on the command-line";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 11:31:56 2011" -->
<!-- isoreceived="20110412153156" -->
<!-- sent="Tue, 12 Apr 2011 17:31:49 +0200" -->
<!-- isosent="20110412153149" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] specifying I/O devices on the command-line" -->
<!-- id="20110412153149.GA5750_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="614922015.476759.1302610233546.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] specifying I/O devices on the command-line<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 11:31:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2134.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2132.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Maybe in reply to:</strong> <a href="2130.php">Brice Goglin: "[hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Reply:</strong> <a href="2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 12 Apr 2011 14:10:33 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; * pci:0000:00:00.0 or pci:00:00.0 for a given PCI device
</span><br>
<p>I believe we can make the function number optional too.
<br>
<p><span class="quotelev1">&gt; * pci:aaaa:bbbb:c for the c-th PCI device with vendor ID aaaa and device
</span><br>
<span class="quotelev1">&gt; ID bbbb
</span><br>
<p>:c being optional if there is only one of those.
<br>
<p><span class="quotelev1">&gt; It's actually the first time we select objects on something different
</span><br>
<span class="quotelev1">&gt; than just a type or a depth and some indexes. So we could introduce a
</span><br>
<span class="quotelev1">&gt; new syntax here. For instance:
</span><br>
<span class="quotelev1">&gt;    &lt;type&gt;[attributename=attributevalue,...]:index
</span><br>
<span class="quotelev1">&gt;    &lt;type&gt;[attributename=attributevalue,...]:firstindex:lastindex
</span><br>
<span class="quotelev1">&gt;    &lt;type&gt;[attributename=attributevalue,...]:firstindex:amount
</span><br>
<span class="quotelev1">&gt; Not sure it's worth doing this.
</span><br>
<p>I'm not sure either. It may be overengineering. We need user input on
<br>
this.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2134.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Previous message:</strong> <a href="2132.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Maybe in reply to:</strong> <a href="2130.php">Brice Goglin: "[hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Reply:</strong> <a href="2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
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
