<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 03:13:02 2014" -->
<!-- isoreceived="20140325071302" -->
<!-- sent="Tue, 25 Mar 2014 07:12:58 +0000" -->
<!-- isosent="20140325071258" -->
<!-- name="Biddiscombe, John A." -->
<!-- email="biddisco_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="50320452A334BD42A5EC72BAD2145099102D8A5F_at_MBX110.d.ethz.ch" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53312A6A.8030709_at_inria.fr" -->
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
<strong>From:</strong> Biddiscombe, John A. (<em>biddisco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 03:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>lstopo --whole-system
<br>
<p>gives the same output and setting env var BG_THREADMODEL=2 does not appear to make any visible difference.
<br>
<p>my configure command for compiling hwloc had no special options,
<br>
./configure --prefix=/gpfs/bbp.cscs.ch/home/biddisco/apps/clang/hwloc-1.8.1
<br>
<p>should I rerun with something set?
<br>
<p>Thanks
<br>
<p>JB
<br>
<p><p>From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: 25 March 2014 08:04
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] BGQ question.
<br>
<p>Le 25/03/2014 07:51, Biddiscombe, John A. a &#233;crit :
<br>
I'm compiling hwloc using clang (bgclang++11 from ANL) to run on IO nodes af a BGQ. It seems to have compiled ok, and when I run lstopo, I get an output like this (below), which looks reasonable, but there are 15 sockets instead of 16. I'm a little worried because the first time I compiled, I had problems where apps would report an error from HWLOC on start and tell me to set HWLOC_FORCE_BGQ=1. when I did set this env var, it would then report that &quot;topology became empty&quot; and the app would segfault due to the unexpected return from hwloc presumably.
<br>
<p>Can you give a bit more details on what you did there? I'd like to check if that case should be better supported or not.
<br>
<p><p>I wiped everything and recompiled (not sure what I did differently), and now it behaves more sensibly, but with 15 instead of 16 sockets.
<br>
<p>Should IO be worried?
<br>
<p>The topology detection is hardwired so you shouldn't worried on the hardware side.
<br>
The problem could be related to how you reserved resources before running lstopo.
<br>
Does lstopo --whole-system see more sockets?
<br>
Does BG_THREADMODEL=2 help?
<br>
<p>Brice
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0988/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
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
