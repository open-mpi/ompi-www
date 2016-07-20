<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 17:28:59 2010" -->
<!-- isoreceived="20100527212859" -->
<!-- sent="Thu, 27 May 2010 23:28:47 +0200" -->
<!-- isosent="20100527212847" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="201005272328.48004.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4BFAD6CC.1010901_at_inria.fr" -->
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
<strong>Date:</strong> 2010-05-27 17:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0102.php">Samuel Thibault: "Re: [hwloc-users] topology object"</a>
<li><strong>In reply to:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My feeling is that --taskset is just an option that changes the way
</span><br>
<span class="quotelev1">&gt; cpuset are displayed with --cpuset or --cpuset-only.
</span><br>
<span class="quotelev1">&gt; I'll change the code so that --taskset also enables --cpuset if not
</span><br>
<span class="quotelev1">&gt; already done.
</span><br>
Yes, you are right. I agree!
<br>
<p><span class="quotelev1">&gt; hwloc-calc doesn't accept input from stdin, it only reads the
</span><br>
<span class="quotelev1">&gt; command-line. We have a TODO entry about this, I'll work on it soon.
</span><br>
<span class="quotelev1">&gt; For now, you can do:
</span><br>
<span class="quotelev1">&gt;     hwloc-distrib ... | xargs -n 1 utils/hwloc-calc
</span><br>
I forgot to use &quot;-n 1&quot; switch in xargs to send only 1 cpu set per one hwloc-
<br>
calc command.
<br>
<p>This works just fine: :-)
<br>
hwloc-distrib --single 8 | xargs -n1 hwloc-calc --taskset
<br>
<p>Perhaps you can add this example to hwloc-distrib man page?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you please suggest what am I doing wrong or  perhaps add support of
</span><br>
<span class="quotelev2">&gt; &gt; --taskset to
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-distrib
</span><br>
<span class="quotelev2">&gt; &gt; command directly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, I can do that too :)
</span><br>
Great, thanks!
<br>
<p>Have a nice day and many thanks for changes to hwloc you made!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0102.php">Samuel Thibault: "Re: [hwloc-users] topology object"</a>
<li><strong>In reply to:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0104.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
