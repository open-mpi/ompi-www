<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 17:47:31 2010" -->
<!-- isoreceived="20100527214731" -->
<!-- sent="Thu, 27 May 2010 23:47:25 +0200" -->
<!-- isosent="20100527214725" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="4BFEE86D.70607_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201005272328.48004.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on systems with more than 64 cpus?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 17:47:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0105.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0103.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0105.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0105.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 27/05/2010 23:28, Jirka Hladky a &#195;&#169;crit :
<br>
<span class="quotelev2">&gt;&gt; hwloc-calc doesn't accept input from stdin, it only reads the
</span><br>
<span class="quotelev2">&gt;&gt; command-line. We have a TODO entry about this, I'll work on it soon.
</span><br>
<span class="quotelev2">&gt;&gt; For now, you can do:
</span><br>
<span class="quotelev2">&gt;&gt;      hwloc-distrib ... | xargs -n 1 utils/hwloc-calc
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; I forgot to use &quot;-n 1&quot; switch in xargs to send only 1 cpu set per one hwloc-
</span><br>
<span class="quotelev1">&gt; calc command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works just fine: :-)
</span><br>
<span class="quotelev1">&gt; hwloc-distrib --single 8 | xargs -n1 hwloc-calc --taskset
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps you can add this example to hwloc-distrib man page?
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>I've added the stdin support to hwloc-calc so I don't think it matters 
<br>
anymore: &quot;hwloc-distrib --single 8 | hwloc-calc --taskset&quot; should do 
<br>
what you want. I'll add something like this to the manpage.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0105.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0103.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0105.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0105.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
