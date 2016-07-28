<?
$subject_val = "Re: [hwloc-users] Processor numbering in Ivy-bridge";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 16:59:44 2014" -->
<!-- isoreceived="20140929205944" -->
<!-- sent="Mon, 29 Sep 2014 13:59:44 -0700" -->
<!-- isosent="20140929205944" -->
<!-- name="Vishwanath Venkatesan" -->
<!-- email="vvenkates_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Processor numbering in Ivy-bridge" -->
<!-- id="CANCxNtsF2-Be4hErsMzdnw68p=ZtZFDH7MiAj-fT=H4gor_ktw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140929204737.GF3895_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>From:</strong> Vishwanath Venkatesan (<em>vvenkates_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 16:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1103.php">Brice Goglin: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Previous message:</strong> <a href="1101.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>In reply to:</strong> <a href="1101.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1103.php">Brice Goglin: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Reply:</strong> <a href="1103.php">Brice Goglin: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Reply:</strong> <a href="1104.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick response, yes lstopo -l does make the numbers
<br>
contiguous.
<br>
Another question I had was, how does hwloc populate the information that
<br>
certain cpus share a particular cache?
<br>
is it form sys/.../cache/index*/shared_cpu_list?
<br>
<p>Thanks
<br>
Vish
<br>
<p>On Mon, Sep 29, 2014 at 1:47 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Vishwanath Venkatesan, le Mon 29 Sep 2014 13:38:35 -0700, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I was trying to use HWLOC on Ivybridge. I found that there is some
</span><br>
<span class="quotelev2">&gt; &gt; inconsistency in the core numbering.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the attached image (generated from running lstopo (hwloc - 1.9.1), we
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev2">&gt; &gt; see that cores 6,7 do not exist although, PU#6 and PU#7 does exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not very surprised. Those are physical numbers, which BIOS &amp; such
</span><br>
<span class="quotelev1">&gt; determine
</span><br>
<span class="quotelev1">&gt; in various ways, which may not be contiguous.  If you are looking for a
</span><br>
<span class="quotelev1">&gt; contiguous numbering, you need to have a look at the logical numbers,
</span><br>
<span class="quotelev1">&gt; obtained
</span><br>
<span class="quotelev1">&gt; from lstopo -l.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1102/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1103.php">Brice Goglin: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Previous message:</strong> <a href="1101.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>In reply to:</strong> <a href="1101.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1103.php">Brice Goglin: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Reply:</strong> <a href="1103.php">Brice Goglin: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Reply:</strong> <a href="1104.php">Samuel Thibault: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
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
