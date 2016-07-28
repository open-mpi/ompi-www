<?
$subject_val = "Re: [hwloc-users] Processor numbering in Ivy-bridge";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 16:47:54 2014" -->
<!-- isoreceived="20140929204754" -->
<!-- sent="Mon, 29 Sep 2014 22:47:37 +0200" -->
<!-- isosent="20140929204737" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Processor numbering in Ivy-bridge" -->
<!-- id="20140929204737.GF3895_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANCxNtssGj7Oywrb+0GPyw5HfFKMD5SsjTBQUWB0FZ0_S=0hfA_at_mail.gmail.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 16:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Previous message:</strong> <a href="1100.php">Vishwanath Venkatesan: "[hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>In reply to:</strong> <a href="1100.php">Vishwanath Venkatesan: "[hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Reply:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vishwanath Venkatesan, le Mon 29 Sep 2014 13:38:35 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; I was trying to use HWLOC on Ivybridge. I found that there is some
</span><br>
<span class="quotelev1">&gt; inconsistency in the core numbering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the attached image (generated from running lstopo (hwloc - 1.9.1), we can
</span><br>
<span class="quotelev1">&gt; see that cores 6,7 do not exist although, PU#6 and PU#7 does exist.
</span><br>
<p>I am not very surprised. Those are physical numbers, which BIOS &amp; such determine
<br>
in various ways, which may not be contiguous.  If you are looking for a
<br>
contiguous numbering, you need to have a look at the logical numbers, obtained
<br>
from lstopo -l.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Previous message:</strong> <a href="1100.php">Vishwanath Venkatesan: "[hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>In reply to:</strong> <a href="1100.php">Vishwanath Venkatesan: "[hwloc-users] Processor numbering in Ivy-bridge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Reply:</strong> <a href="1102.php">Vishwanath Venkatesan: "Re: [hwloc-users] Processor numbering in Ivy-bridge"</a>
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
