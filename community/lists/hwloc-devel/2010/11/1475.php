<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 08:50:50 2010" -->
<!-- isoreceived="20101111135050" -->
<!-- sent="Thu, 11 Nov 2010 14:50:41 +0100" -->
<!-- isosent="20101111135041" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="201011111450.41459.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20101111124338.GQ4896_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 08:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1474.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<li><strong>In reply to:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, November 11, 2010 01:43:38 pm Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Jirka Hladky, le Thu 11 Nov 2010 13:36:46 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc_get_membind failed (errno 38 Function not implemented)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, you are right!
</span><br>
<span class="quotelev2">&gt; &gt; --get --pid
</span><br>
<span class="quotelev2">&gt; &gt; works on Linux.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --get --membind --pid
</span><br>
<span class="quotelev2">&gt; &gt; will give &quot;Function not implemented&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ /tmp/hwloc-1.1rc2/utils/hwloc-bind --get --membind --pid 344
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_get_membind failed (errno 38 Function not implemented)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It actually depends on the OS. I'll see what I can.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see. It's getting difficult then. I believe that in this case more
</span><br>
<span class="quotelev2">&gt; &gt; explanatory error message would be enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmm, to me
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_get_membind failed (errno 38 Function not implemented)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is already self-explanatory actually. Do you see how could it be improved?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p>Hi Samuel,
<br>
<p>you can say that
<br>
<p>&quot;On this system function XYZ is not supported by GLIBC/KERNEL)&quot;
<br>
<p>I'm missing the information:
<br>
<p>-which function is not implemented
<br>
-where this function belong - is it system call, glibc or hwloc's function?
<br>
<p>Or perhaps something more user friendly like
<br>
&quot;On this system --get does not work together with --membind&quot;
<br>
<p>It's just my personal opinion.
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1474.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<li><strong>In reply to:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
