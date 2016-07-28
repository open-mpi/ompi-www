<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 03:43:01 2014" -->
<!-- isoreceived="20140325074301" -->
<!-- sent="Tue, 25 Mar 2014 08:42:51 +0100" -->
<!-- isosent="20140325074251" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="2ff355bf-036d-42b9-8bb6-aee69911b21a_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="50320452A334BD42A5EC72BAD2145099102D8A5F_at_MBX110.d.ethz.ch" -->
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
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 03:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0990.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0990.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0990.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wait, I missed the &quot;io node&quot; part of your first mail. The bgq support is for compute nodes running cnk. Are io nodes running linux on same hardware as the compute nodes?
<br>
<p>I have an account on vesta. Where should I logon to have a look?
<br>
Brice
<br>
<p><p>On 25 mars 2014 08:12:58 UTC+01:00, &quot;Biddiscombe, John A.&quot; &lt;biddisco_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;lstopo --whole-system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;gives the same output and setting env var BG_THREADMODEL=2 does not
</span><br>
<span class="quotelev1">&gt;appear to make any visible difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;my configure command for compiling hwloc had no special options,
</span><br>
<span class="quotelev1">&gt;./configure
</span><br>
<span class="quotelev1">&gt;--prefix=/gpfs/bbp.cscs.ch/home/biddisco/apps/clang/hwloc-1.8.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;should I rerun with something set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;JB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt;Of Brice Goglin
</span><br>
<span class="quotelev1">&gt;Sent: 25 March 2014 08:04
</span><br>
<span class="quotelev1">&gt;To: Hardware locality user list
</span><br>
<span class="quotelev1">&gt;Subject: Re: [hwloc-users] BGQ question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Le 25/03/2014 07:51, Biddiscombe, John A. a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;I'm compiling hwloc using clang (bgclang++11 from ANL) to run on IO
</span><br>
<span class="quotelev1">&gt;nodes af a BGQ. It seems to have compiled ok, and when I run lstopo, I
</span><br>
<span class="quotelev1">&gt;get an output like this (below), which looks reasonable, but there are
</span><br>
<span class="quotelev1">&gt;15 sockets instead of 16. I'm a little worried because the first time I
</span><br>
<span class="quotelev1">&gt;compiled, I had problems where apps would report an error from HWLOC on
</span><br>
<span class="quotelev1">&gt;start and tell me to set HWLOC_FORCE_BGQ=1. when I did set this env
</span><br>
<span class="quotelev1">&gt;var, it would then report that &quot;topology became empty&quot; and the app
</span><br>
<span class="quotelev1">&gt;would segfault due to the unexpected return from hwloc presumably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you give a bit more details on what you did there? I'd like to
</span><br>
<span class="quotelev1">&gt;check if that case should be better supported or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I wiped everything and recompiled (not sure what I did differently),
</span><br>
<span class="quotelev1">&gt;and now it behaves more sensibly, but with 15 instead of 16 sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Should IO be worried?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The topology detection is hardwired so you shouldn't worried on the
</span><br>
<span class="quotelev1">&gt;hardware side.
</span><br>
<span class="quotelev1">&gt;The problem could be related to how you reserved resources before
</span><br>
<span class="quotelev1">&gt;running lstopo.
</span><br>
<span class="quotelev1">&gt;Does lstopo --whole-system see more sockets?
</span><br>
<span class="quotelev1">&gt;Does BG_THREADMODEL=2 help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0989/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0990.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0988.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0990.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0990.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
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
