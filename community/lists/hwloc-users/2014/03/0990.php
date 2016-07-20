<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 03:55:29 2014" -->
<!-- isoreceived="20140325075529" -->
<!-- sent="Tue, 25 Mar 2014 07:55:25 +0000" -->
<!-- isosent="20140325075525" -->
<!-- name="Biddiscombe, John A." -->
<!-- email="biddisco_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="50320452A334BD42A5EC72BAD2145099102D8CED_at_MBX110.d.ethz.ch" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2ff355bf-036d-42b9-8bb6-aee69911b21a_at_email.android.com" -->
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
<strong>Date:</strong> 2014-03-25 03:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0991.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0991.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0991.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0994.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>

<br>
Correct : The IO nodes are running a  full linux install (RHE 6.4) on the same hardware as the CNK nodes.
<br>

<br>
On vesta I do not have an account and I am not certain the IO nodes are available for direct login. I&#226;&#128;&#153;m using the BGQ at CSCS which is an EPFL machine. The IO nodes are open for some special projects where we are trying to customise the IO.
<br>

<br>
JB
<br>

<br>
From: Brice Goglin [mailto:brice.goglin_at_[hidden]]
<br>
Sent: 25 March 2014 08:43
<br>
To: Hardware locality user list; Biddiscombe, John A.
<br>
Subject: Re: [hwloc-users] BGQ question.
<br>

<br>
Wait, I missed the &quot;io node&quot; part of your first mail. The bgq support is for compute nodes running cnk. Are io nodes running linux on same hardware as the compute nodes?
<br>

<br>
I have an account on vesta. Where should I logon to have a look?
<br>
Brice
<br>

<br>
On 25 mars 2014 08:12:58 UTC+01:00, &quot;Biddiscombe, John A.&quot; &lt;biddisco_at_[hidden]&lt;mailto:biddisco_at_[hidden]&gt;&gt; wrote:
<br>
Brice,
<br>

<br>

<br>
lstopo --whole-system
<br>

<br>

<br>
gives the same output and setting env var BG_THREADMODEL=2 does not appear to make any visible difference.
<br>

<br>

<br>
my configure command for compiling hwloc had no special options,
<br>
./configure --prefix=/gpfs/bbp.cscs.ch/home/biddisco/apps/clang/hwloc-1.8.1
<br>

<br>

<br>
should I rerun with something set?
<br>

<br>

<br>
Thanks
<br>

<br>

<br>
JB
<br>

<br>

<br>

<br>

<br>
From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: 25 March 2014 08:04
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] BGQ question.
<br>

<br>

<br>
Le 25/03/2014 07:51, Biddiscombe, John A. a &#195;&#169;crit :
<br>
I&#226;&#128;&#153;m compiling hwloc using clang (bgclang++11 from ANL) to run on IO nodes af a BGQ. It seems to have compiled ok, and when I run lstopo, I get an output like this (below), which looks reasonable, but there are 15 sockets instead of 16. I&#226;&#128;&#153;m a little worried because the first time I compiled, I had problems where apps would report an error from HWLOC on start and tell me to set HWLOC_FORCE_BGQ=1. when I did set this env var, it would then report that &#226;&#128;&#156;topology became empty&#226;&#128;&#157; and the app would segfault due to the unexpected return from hwloc presumably.
<br>

<br>
Can you give a bit more details on what you did there? I'd like to check if that case should be better supported or not.
<br>

<br>
I wiped everything and recompiled (not sure what I did differently), and now it behaves more sensibly, but with 15 instead of 16 sockets.
<br>

<br>
Should IO be worried?
<br>

<br>
The topology detection is hardwired so you shouldn't worried on the hardware side.
<br>
The problem could be related to how you reserved resources before running lstopo.
<br>
Does lstopo --whole-system see more sockets?
<br>
Does BG_THREADMODEL=2 help?
<br>

<br>
Brice
<br>

<br>
________________________________
<br>

<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0990/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0991.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0989.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0991.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0991.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0994.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
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
