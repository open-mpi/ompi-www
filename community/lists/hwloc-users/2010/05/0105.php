<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 18:42:38 2010" -->
<!-- isoreceived="20100527224238" -->
<!-- sent="Fri, 28 May 2010 00:42:27 +0200" -->
<!-- isosent="20100527224227" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="201005280042.27337.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4BFEE86D.70607_at_inria.fr" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 18:42:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/06/0106.php">Olivier Cessenat: "[hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 27 May 2010 11:47:25 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 27/05/2010 23:28, Jirka Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-calc doesn't accept input from stdin, it only reads the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; command-line. We have a TODO entry about this, I'll work on it soon.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For now, you can do:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      hwloc-distrib ... | xargs -n 1 utils/hwloc-calc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I forgot to use &quot;-n 1&quot; switch in xargs to send only 1 cpu set per one
</span><br>
<span class="quotelev2">&gt; &gt; hwloc- calc command.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This works just fine: :-)
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-distrib --single 8 | xargs -n1 hwloc-calc --taskset
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps you can add this example to hwloc-distrib man page?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've added the stdin support to hwloc-calc so I don't think it matters
</span><br>
<span class="quotelev1">&gt; anymore: &quot;hwloc-distrib --single 8 | hwloc-calc --taskset&quot; should do
</span><br>
<span class="quotelev1">&gt; what you want. I'll add something like this to the manpage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Great, thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/06/0106.php">Olivier Cessenat: "[hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
