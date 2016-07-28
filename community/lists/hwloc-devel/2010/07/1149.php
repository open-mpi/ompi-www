<?
$subject_val = "Re: [hwloc-devel] hwloc on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 11 13:59:49 2010" -->
<!-- isoreceived="20100711175949" -->
<!-- sent="Sun, 11 Jul 2010 19:57:48 +0200" -->
<!-- isosent="20100711175748" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on PPC64" -->
<!-- id="4C3A061C.2020408_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007111948.30293.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on PPC64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-11 13:57:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1148.php">Jirka Hladky: "[hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1148.php">Jirka Hladky: "[hwloc-devel] hwloc on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Reply:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/07/2010 19:48, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have run into two bugs on PPC64 on 2.6.32 kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lt-lstopo 1.0.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BUG #1: No Socket information in lstopo output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./lstopo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (3654MB) + L2 #0 (4096KB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; L1 #0 (64KB) + Core #0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PU #1 (phys=1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; L1 #1 (64KB) + Core #1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PU #2 (phys=2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PU #3 (phys=3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixed in the latest version (tried hwloc-1.1a1r2301.tar.gz)
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2301.tar.gz">http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2301.tar.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In 1.0.1, there's a patch that prevents us from showing invalid socket
<br>
info on old kernels but it also prevents us from showing valid socket
<br>
info on recent kernel. I reverted the commit in trunk (and in the
<br>
upcoming 1.0.2).
<br>
<p><span class="quotelev1">&gt; BUG #2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On some PPC64, kernel 2.6.32 I have crash when running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ lstopo a.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gdb /usr/local/bin/lstopo core.8771
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0 0x00000000100060b4 in .merge ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears only on some PPC64 boxes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This issue is also gone with in the latest version (tried
</span><br>
<span class="quotelev1">&gt; hwloc-1.1a1r2301.tar.gz)
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2301.tar.gz">http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2301.tar.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if you are aware of these problems. let me know if you need
</span><br>
<span class="quotelev1">&gt; more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you do &quot;lstopo a.xml&quot; first, does &quot;lstopo --xml a.xml a.txt&quot; crash as
<br>
above? If so, please send a.xml so that I debug this.
<br>
<p>thanks,
<br>
Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1148.php">Jirka Hladky: "[hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1148.php">Jirka Hladky: "[hwloc-devel] hwloc on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Reply:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
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
