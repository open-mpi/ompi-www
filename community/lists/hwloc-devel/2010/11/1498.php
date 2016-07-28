<?
$subject_val = "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 11:40:08 2010" -->
<!-- isoreceived="20101118164008" -->
<!-- sent="Thu, 18 Nov 2010 17:40:03 +0100" -->
<!-- isosent="20101118164003" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among" -->
<!-- id="20101118164003.GD12569_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1287195397.384098.1290089647234.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2010-11-18 11:40:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1499.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1497.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1499.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Reply:</strong> <a href="1499.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1500.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1543.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1556.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka Hladky, le Thu 18 Nov 2010 15:14:07 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; thanks for looking into it! I'm using hwloc_distribute to distribute parallel 
</span><br>
<span class="quotelev1">&gt; jobs on multi-socket systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Usually, it gives nice results: running 
</span><br>
<span class="quotelev1">&gt; hwloc-distrib --single &lt;N&gt;
</span><br>
<span class="quotelev1">&gt; on box with &lt;N&gt; sockets will ditrbitute one job per socket. This is what I 
</span><br>
<span class="quotelev1">&gt; want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc-distrib --single &lt;2*N&gt;
</span><br>
<span class="quotelev1">&gt; will distribute 2 jobs per socket, picking-up PU wisely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It breaks however on strange systems. Please check with
</span><br>
<span class="quotelev1">&gt; lstopo --input
</span><br>
<span class="quotelev1">&gt; or hwloc-distrib --input
</span><br>
<span class="quotelev1">&gt; on topology I sent you with my last e-mail (hp-dl980g7-01.tar.bz2, sent on  
</span><br>
<span class="quotelev1">&gt; Tuesday 09:30:37 pm)
</span><br>
<p>Yes, use the --from socket of hwloc-distrib (previously called --among
<br>
socket).
<br>
<p><span class="quotelev1">&gt; This is not working. So I have tried various --among and -ignore options to 
</span><br>
<span class="quotelev1">&gt; achieve this but without success. 
</span><br>
<p>--among socket is what should be working (renamed to --from after rc2),
<br>
at least it does work for me:
<br>
<p>$ ./utils/hwloc-distrib --input /tmp/hp-dl980g7-01 --from socket 8
<br>
0x000000ff,,0x000000ff
<br>
0x00ff0000,,0x00ff0000
<br>
0xff000000,,0xff000000
<br>
0x000000ff,,0x000000ff,0x0
<br>
0x0000ff00,,0x0000ff00,0x0
<br>
0x00ff0000,,0x00ff0000,0x0
<br>
0xff000000,,0xff000000,0x0
<br>
0x0000ff00,,0x0000ff00
<br>
<p>Isn't this what you want? (with additional --single of course)
<br>
<p>Actually, I'm considering to just implement unbalanced distribution
<br>
support for v1.1, it shouldn't be too hard.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1499.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1497.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1499.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Reply:</strong> <a href="1499.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1500.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1543.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1556.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
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
