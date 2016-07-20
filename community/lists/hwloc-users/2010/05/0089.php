<?
$subject_val = "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 22:28:01 2010" -->
<!-- isoreceived="20100525022801" -->
<!-- sent="Tue, 25 May 2010 05:26:25 +0300" -->
<!-- isosent="20100525022625" -->
<!-- name="&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows" -->
<!-- id="COL124-W4A8101F5E7150F91D0817D6E80_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100525000720.GO5350_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows<br>
<strong>From:</strong> &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 22:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Previous message:</strong> <a href="0088.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>In reply to:</strong> <a href="0087.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0090.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Reply:</strong> <a href="0090.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
I just compiled tags\hwloc-1.0.0 with cygwin (I'd prefer mingw). Now 
<br>
how do I enable debugging? Also the output of lstopo is very strange
<br>
(maybe debugging info is already enabled)
<br>

<br>
--------------------------
<br>
Alexandros Papadogiannakis
<br>

<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; Date: Tue, 25 May 2010 02:07:20 +0200
</span><br>
<span class="quotelev1">&gt; From: samuel.thibault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Tue 25 May 2010 02:58:57 +0300, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; As you can see hwloc 1.0 doesn't show my L3 and L2 cache while it
</span><br>
<span class="quotelev2">&gt; &gt; worked fine with hwloc 0.9.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you able to rebuild a version yourself with debugging enabled to
</span><br>
<span class="quotelev1">&gt; check the output?  On windows 7, the difference is that the extended
</span><br>
<span class="quotelev1">&gt; GetLogicalProcessorInformationEx interface is used instead of 
</span><br>
<span class="quotelev1">&gt; GetLogicalProcessorInformation, maybe hwloc has some bugs in the former,
</span><br>
<span class="quotelev1">&gt; but that may just be Windows itself not reporting things properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also both versions fail to show my RAM correctly, they both report the
</span><br>
<span class="quotelev2">&gt; &gt; currently available instead of the 4GB that I have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Windows does not provide any sane way to report the latter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Hotmail: Trusted email with powerful SPAM protection.
<br>
<a href="https://signup.live.com/signup.aspx?id=60969">https://signup.live.com/signup.aspx?id=60969</a><br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0089/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0089/stderr.txt">stderr.txt</a>
</ul>
<!-- attachment="stderr.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Previous message:</strong> <a href="0088.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>In reply to:</strong> <a href="0087.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0090.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Reply:</strong> <a href="0090.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
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
