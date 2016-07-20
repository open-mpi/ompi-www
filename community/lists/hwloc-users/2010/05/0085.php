<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 15:43:15 2010" -->
<!-- isoreceived="20100524194315" -->
<!-- sent="Mon, 24 May 2010 21:43:08 +0200" -->
<!-- isosent="20100524194308" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="4BFAD6CC.1010901_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201005242128.02384.jhladky_at_redhat.com" -->
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
<strong>Date:</strong> 2010-05-24 15:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0084.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0103.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0103.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 24/05/2010 21:28, Jirka Hladky wrote:
<br>
<span class="quotelev1">&gt; What's confusing is that --taskset alone (without --cpuset) has no effect at 
</span><br>
<span class="quotelev1">&gt; all. IMHO, --cpuset and --taskset should be mutually exclusive options.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>My feeling is that --taskset is just an option that changes the way
<br>
cpuset are displayed with --cpuset or --cpuset-only.
<br>
I'll change the code so that --taskset also enables --cpuset if not
<br>
already done.
<br>
<p><span class="quotelev1">&gt; I was not able to get hwloc-distrib working together with hwloc-calc to get 
</span><br>
<span class="quotelev1">&gt; expected output:
</span><br>
<span class="quotelev1">&gt; hwloc-distrib --single 8
</span><br>
<span class="quotelev1">&gt; 0x00000001
</span><br>
<span class="quotelev1">&gt; 0x00000010
</span><br>
<span class="quotelev1">&gt; 0x00000002
</span><br>
<span class="quotelev1">&gt; 0x00000020
</span><br>
<span class="quotelev1">&gt; 0x00000004
</span><br>
<span class="quotelev1">&gt; 0x00000040
</span><br>
<span class="quotelev1">&gt; 0x00000008
</span><br>
<span class="quotelev1">&gt; 0x00000080
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; hwloc-distrib --single 8 | xargs hwloc-calc --taskset
</span><br>
<span class="quotelev1">&gt; will produce
</span><br>
<span class="quotelev1">&gt; 0xff ???
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>hwloc-calc doesn't accept input from stdin, it only reads the
<br>
command-line. We have a TODO entry about this, I'll work on it soon.
<br>
For now, you can do:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc-distrib ... | xargs -n 1 utils/hwloc-calc
<br>
<p><span class="quotelev1">&gt; Could you please suggest what am I doing wrong or  perhaps add support of 
</span><br>
<span class="quotelev1">&gt; --taskset to
</span><br>
<span class="quotelev1">&gt; hwloc-distrib
</span><br>
<span class="quotelev1">&gt; command directly?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yeah, I can do that too :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0084.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0103.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0103.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
