<?
$subject_val = "Re: [hwloc-devel] Docs questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 20:06:01 2010" -->
<!-- isoreceived="20100114010601" -->
<!-- sent="Thu, 14 Jan 2010 02:05:55 +0100" -->
<!-- isosent="20100114010555" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Docs questions" -->
<!-- id="20100114010555.GO5260_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F334ADE9-1F32-4B20-AC68-678925BEA150_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Docs questions<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 20:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0604.php">Jeff Squyres: "Re: [hwloc-devel] Docs questions"</a>
<li><strong>Previous message:</strong> <a href="0602.php">Jeff Squyres: "[hwloc-devel] Docs questions"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Jeff Squyres: "[hwloc-devel] Docs questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0604.php">Jeff Squyres: "Re: [hwloc-devel] Docs questions"</a>
<li><strong>Reply:</strong> <a href="0604.php">Jeff Squyres: "Re: [hwloc-devel] Docs questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 13 Jan 2010 19:58:45 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; 1. In the supported list in hwloc.doxy, it says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;li&gt;*FreeBSD&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the &quot;*&quot; a typo, or is it supposed to indicate any BSD? (or something else?)
</span><br>
<p>It means any FreeBSD, i.e. FreeBSD or kFreeBSD/GNU for instance.
<br>
<p><span class="quotelev1">&gt; 2. In lstopo.1, the colors description says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .TP
</span><br>
<span class="quotelev1">&gt; White
</span><br>
<span class="quotelev1">&gt; The CPU is allowed but not in the current CPU binding mask.
</span><br>
<span class="quotelev1">&gt; .TP
</span><br>
<span class="quotelev1">&gt; Red
</span><br>
<span class="quotelev1">&gt; The CPU is not allowed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Who/what allows or disallows a CPU?
</span><br>
<p>Administration rules
<br>
<p><span class="quotelev1">&gt; Is this a reference to Linux cpuset functionality?
</span><br>
<p>For instance.
<br>
<p><span class="quotelev1">&gt; I.e., the CPU is online, but the OS won't let you bind to it?
</span><br>
<p>Yes. See the documentation of the allowed_cpuset field.
<br>
<p><span class="quotelev1">&gt; (do other OS's have similar kind of restrictions to Linux's cpuset functionality?)
</span><br>
<p>Probably.  They haven't been implemented in hwloc yet mostly due to lack
<br>
of administration rights on the machines I've ported hwloc to.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0604.php">Jeff Squyres: "Re: [hwloc-devel] Docs questions"</a>
<li><strong>Previous message:</strong> <a href="0602.php">Jeff Squyres: "[hwloc-devel] Docs questions"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Jeff Squyres: "[hwloc-devel] Docs questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0604.php">Jeff Squyres: "Re: [hwloc-devel] Docs questions"</a>
<li><strong>Reply:</strong> <a href="0604.php">Jeff Squyres: "Re: [hwloc-devel] Docs questions"</a>
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
