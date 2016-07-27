<?
$subject_val = "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 12:18:04 2010" -->
<!-- isoreceived="20101118171804" -->
<!-- sent="Thu, 18 Nov 2010 18:17:52 +0100" -->
<!-- isosent="20101118171752" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among" -->
<!-- id="201011181817.53029.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20101118164003.GD12569_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 12:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1500.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1498.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>In reply to:</strong> <a href="1498.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1500.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, November 18, 2010 05:40:03 pm Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Jirka Hladky, le Thu 18 Nov 2010 15:14:07 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; thanks for looking into it! I'm using hwloc_distribute to distribute
</span><br>
<span class="quotelev2">&gt; &gt; parallel jobs on multi-socket systems.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Usually, it gives nice results: running
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-distrib --single &lt;N&gt;
</span><br>
<span class="quotelev2">&gt; &gt; on box with &lt;N&gt; sockets will ditrbitute one job per socket. This is what
</span><br>
<span class="quotelev2">&gt; &gt; I want.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-distrib --single &lt;2*N&gt;
</span><br>
<span class="quotelev2">&gt; &gt; will distribute 2 jobs per socket, picking-up PU wisely.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It breaks however on strange systems. Please check with
</span><br>
<span class="quotelev2">&gt; &gt; lstopo --input
</span><br>
<span class="quotelev2">&gt; &gt; or hwloc-distrib --input
</span><br>
<span class="quotelev2">&gt; &gt; on topology I sent you with my last e-mail (hp-dl980g7-01.tar.bz2, sent
</span><br>
<span class="quotelev2">&gt; &gt; on Tuesday 09:30:37 pm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, use the --from socket of hwloc-distrib (previously called --among
</span><br>
<span class="quotelev1">&gt; socket).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is not working. So I have tried various --among and -ignore options
</span><br>
<span class="quotelev2">&gt; &gt; to achieve this but without success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --among socket is what should be working (renamed to --from after rc2),
</span><br>
<span class="quotelev1">&gt; at least it does work for me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./utils/hwloc-distrib --input /tmp/hp-dl980g7-01 --from socket 8
</span><br>
<span class="quotelev1">&gt; 0x000000ff,,0x000000ff
</span><br>
<span class="quotelev1">&gt; 0x00ff0000,,0x00ff0000
</span><br>
<span class="quotelev1">&gt; 0xff000000,,0xff000000
</span><br>
<span class="quotelev1">&gt; 0x000000ff,,0x000000ff,0x0
</span><br>
<span class="quotelev1">&gt; 0x0000ff00,,0x0000ff00,0x0
</span><br>
<span class="quotelev1">&gt; 0x00ff0000,,0x00ff0000,0x0
</span><br>
<span class="quotelev1">&gt; 0xff000000,,0xff000000,0x0
</span><br>
<span class="quotelev1">&gt; 0x0000ff00,,0x0000ff00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Isn't this what you want? (with additional --single of course)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I'm considering to just implement unbalanced distribution
</span><br>
<span class="quotelev1">&gt; support for v1.1, it shouldn't be too hard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p>Hi Samuel,
<br>
<p>yes, I was wrong. I was playing with --among on another box. On the box I have 
<br>
sent you the topology data I have tried --ignore option. 
<br>
<p><p>So this works for me: 
<br>
<p>$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single --among socket 8)
<br>
0,16,24,32,40,48,56,8
<br>
<p>I'm going to use --among in my scripts :-) 
<br>
<p>Thanks for looking into it!!
<br>
<p>To summarize:
<br>
--among can be used to specify the highest level of hierarchy where to start 
<br>
the distribution, right?
<br>
<p>Possible inputs are:
<br>
machine (default), numa, socket, core, pu
<br>
<p>Is this correct?
<br>
<p>I do understand following output:
<br>
===================================================
<br>
$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single 8)
<br>
0,16,24,32,8,9,10,11
<br>
<p>$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single --among machine 8)
<br>
0,16,24,32,8,9,10,11
<br>
<p>$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single --among numa 8)
<br>
0,16,24,32,8,9,10,11
<br>
<p>Starting from socket:
<br>
$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single --among socket 8)
<br>
0,16,24,32,40,48,56,8
<br>
<p>Starting from core:
<br>
$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single --among core 8)
<br>
0,1,2,3,4,5,6,7
<br>
<p>Starting from PU:
<br>
$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single --among pu 8)
<br>
0,64,1,65,2,66,3,67
<br>
==================================================
<br>
<p><p>I have tried {machine, numa, socket, core, pu} with --ignore but I'm not sure 
<br>
if I understand the results.
<br>
<p>==================================================
<br>
This is clear - balancing between NUMA nodes:
<br>
<p>$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single 8)
<br>
0,16,24,32,8,9,10,11
<br>
<p>This is not clear to me:
<br>
$hwloc-calc --input ../hp-dl980g7-01 --po --proclist $(hwloc-distrib --input 
<br>
../hp-dl980g7-01 --single --ignore machine 8)
<br>
0,1,16,24,32,40,48,56
<br>
<p><p>{socket,core, pu} are giving the same output as without --ignore
<br>
==================================================
<br>
<p>Could you explain this to me as well?
<br>
<p>Thanks a lot (and sorry for asking dummy questions)
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1500.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1498.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>In reply to:</strong> <a href="1498.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1500.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
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
