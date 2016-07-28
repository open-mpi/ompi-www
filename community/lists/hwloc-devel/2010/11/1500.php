<?
$subject_val = "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 12:45:41 2010" -->
<!-- isoreceived="20101118174541" -->
<!-- sent="Thu, 18 Nov 2010 18:45:26 +0100" -->
<!-- isosent="20101118174526" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among" -->
<!-- id="20101118174526.GH12569_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1897768512.415286.1290100679585.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 12:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1501.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1499.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Maybe in reply to:</strong> <a href="1498.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1543.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka Hladky, le Thu 18 Nov 2010 18:17:59 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; To summarize:
</span><br>
<span class="quotelev1">&gt; --among can be used to specify the highest level of hierarchy where to start 
</span><br>
<span class="quotelev1">&gt; the distribution, right?
</span><br>
<p>Yes. I've renamed it into --from, and extended the manpage documentation
<br>
on it.
<br>
<p><span class="quotelev1">&gt; Possible inputs are:
</span><br>
<span class="quotelev1">&gt; machine (default), numa, socket, core, pu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this correct?
</span><br>
<p>Possible inputs are all kinds of hwloc objects which have a unique
<br>
occurence in the tree. It's thus the correct current list (more may come
<br>
in the future).
<br>
<p><span class="quotelev1">&gt; This is clear - balancing between NUMA nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
</span><br>
<span class="quotelev1">&gt; ../hp-dl980g7-01 --single 8)
</span><br>
<span class="quotelev1">&gt; 0,16,24,32,8,9,10,11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is not clear to me:
</span><br>
<span class="quotelev1">&gt; $hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
</span><br>
<span class="quotelev1">&gt; ../hp-dl980g7-01 --single --ignore machine 8)
</span><br>
<span class="quotelev1">&gt; 0,1,16,24,32,40,48,56
</span><br>
<p>Mmm, I think the problem is because --ignore is passed as such to the
<br>
hwloc detection code, which then misses the second NUMA node:
<br>
<p>$ lstopo --input ../hp-dl980g7-01 --ignore machine
<br>
<p>will indeed not show the second NUMA node.
<br>
<p><span class="quotelev1">&gt; Thanks a lot (and sorry for asking dummy questions)
</span><br>
<p>They surely are not dummy questions, as they actually even raise issues :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1501.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1499.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Maybe in reply to:</strong> <a href="1498.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1543.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
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
