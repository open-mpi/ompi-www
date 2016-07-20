<?
$subject_val = "Re: [hwloc-users] Processor numbering in Ivy-bridge";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 17:15:04 2014" -->
<!-- isoreceived="20140929211504" -->
<!-- sent="Mon, 29 Sep 2014 23:15:02 +0200" -->
<!-- isosent="20140929211502" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Processor numbering in Ivy-bridge" -->
<!-- id="5429CBD6.9020304_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANCxNtsF2-Be4hErsMzdnw68p=ZtZFDH7MiAj-fT=H4gor_ktw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Processor numbering in Ivy-bridge<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 17:15:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1104.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Previous message:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>In reply to:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1104.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. Most of locality info comes from /sys/... on Linux.
<br>
Brice
<br>
<p>Le 29/09/2014 22:59, Vishwanath Venkatesan a &#233;crit :
<br>
<span class="quotelev1">&gt; Thanks for the quick response, yes lstopo -l does make the numbers
</span><br>
<span class="quotelev1">&gt; contiguous.
</span><br>
<span class="quotelev1">&gt; Another question I had was, how does hwloc populate the information
</span><br>
<span class="quotelev1">&gt; that certain cpus share a particular cache?
</span><br>
<span class="quotelev1">&gt; is it form sys/.../cache/index*/shared_cpu_list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Vish
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 29, 2014 at 1:47 PM, Samuel Thibault
</span><br>
<span class="quotelev1">&gt; &lt;samuel.thibault_at_[hidden] &lt;mailto:samuel.thibault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Vishwanath Venkatesan, le Mon 29 Sep 2014 13:38:35 -0700, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt; I was trying to use HWLOC on Ivybridge. I found that there is some
</span><br>
<span class="quotelev2">&gt;     &gt; inconsistency in the core numbering.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; In the attached image (generated from running lstopo (hwloc -
</span><br>
<span class="quotelev1">&gt;     1.9.1), we can
</span><br>
<span class="quotelev2">&gt;     &gt; see that cores 6,7 do not exist although, PU#6 and PU#7 does exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am not very surprised. Those are physical numbers, which BIOS &amp;
</span><br>
<span class="quotelev1">&gt;     such determine
</span><br>
<span class="quotelev1">&gt;     in various ways, which may not be contiguous.  If you are looking
</span><br>
<span class="quotelev1">&gt;     for a
</span><br>
<span class="quotelev1">&gt;     contiguous numbering, you need to have a look at the logical
</span><br>
<span class="quotelev1">&gt;     numbers, obtained
</span><br>
<span class="quotelev1">&gt;     from lstopo -l.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1103.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1103.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1104.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Previous message:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>In reply to:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1104.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
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
