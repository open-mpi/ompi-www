<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 03:04:14 2014" -->
<!-- isoreceived="20140325070414" -->
<!-- sent="Tue, 25 Mar 2014 08:04:10 +0100" -->
<!-- isosent="20140325070410" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="53312A6A.8030709_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50320452A334BD42A5EC72BAD2145099102D8A2B_at_MBX110.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-users] BGQ question.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 03:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0986.php">Biddiscombe, John A.: "[hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0986.php">Biddiscombe, John A.: "[hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/03/2014 07:51, Biddiscombe, John A. a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm compiling hwloc using clang (bgclang++11 from ANL) to run on IO
</span><br>
<span class="quotelev1">&gt; nodes af a BGQ. It seems to have compiled ok, and when I run lstopo, I
</span><br>
<span class="quotelev1">&gt; get an output like this (below), which looks reasonable, but there are
</span><br>
<span class="quotelev1">&gt; 15 sockets instead of 16. I'm a little worried because the first time
</span><br>
<span class="quotelev1">&gt; I compiled, I had problems where apps would report an error from HWLOC
</span><br>
<span class="quotelev1">&gt; on start and tell me to set HWLOC_FORCE_BGQ=1. when I did set this env
</span><br>
<span class="quotelev1">&gt; var, it would then report that &quot;topology became empty&quot; and the app
</span><br>
<span class="quotelev1">&gt; would segfault due to the unexpected return from hwloc presumably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Can you give a bit more details on what you did there? I'd like to check
<br>
if that case should be better supported or not.
<br>
<p><span class="quotelev1">&gt; I wiped everything and recompiled (not sure what I did differently),
</span><br>
<span class="quotelev1">&gt; and now it behaves more sensibly, but with 15 instead of 16 sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should IO be worried?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The topology detection is hardwired so you shouldn't worried on the
<br>
hardware side.
<br>
The problem could be related to how you reserved resources before
<br>
running lstopo.
<br>
Does lstopo --whole-system see more sockets?
<br>
Does BG_THREADMODEL=2 help?
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0987/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0986.php">Biddiscombe, John A.: "[hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0986.php">Biddiscombe, John A.: "[hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
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
