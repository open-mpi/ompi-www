<?
$subject_val = "Re: [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 18:03:54 2010" -->
<!-- isoreceived="20100618220354" -->
<!-- sent="Sat, 19 Jun 2010 00:03:49 +0200" -->
<!-- isosent="20100618220349" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc and rpath" -->
<!-- id="20100618220349.GH4931_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201006182209.56861.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc and rpath<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 18:03:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0170.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0168.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<li><strong>In reply to:</strong> <a href="0164.php">Jirka Hladky: "[hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0178.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0178.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I agree that rpath should be avoided. However, hwloc itself doesn't add
<br>
any.
<br>
<p>Jirka Hladky, le Fri 18 Jun 2010 22:09:56 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt;  hwloc.x86_64: E: binary-or-shlib-defines-rpath /usr/bin/hwloc-distrib 
</span><br>
<span class="quotelev1">&gt; ['/usr/lib64']
</span><br>
<p>So apparently libtool somehow doesn't realizes that /usr/lib64 is in the
<br>
standard search path.  I'd tend to believe it's a bug in libtool or the
<br>
distribution which don't understand each other.  How does configure get
<br>
invoked?  What is the output of gcc -print-search-dirs?
<br>
<p>(On debian, we use --libdir=/usr/lib/x86_64-linux-gnu and that doesn't
<br>
introduce any rpath).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0170.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0168.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<li><strong>In reply to:</strong> <a href="0164.php">Jirka Hladky: "[hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0178.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0178.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
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
