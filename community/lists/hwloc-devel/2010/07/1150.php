<?
$subject_val = "Re: [hwloc-devel] hwloc on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 11 18:08:51 2010" -->
<!-- isoreceived="20100711220851" -->
<!-- sent="Mon, 12 Jul 2010 00:08:40 +0200" -->
<!-- isosent="20100711220840" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on PPC64" -->
<!-- id="201007120008.41114.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C3A061C.2020408_at_inria.fr" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-11 18:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Reply:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sunday, July 11, 2010 07:57:48 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 11/07/2010 19:48, Jirka Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have run into two bugs on PPC64 on 2.6.32 kernel.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Version:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; lt-lstopo 1.0.1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BUG #1: No Socket information in lstopo output:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./lstopo
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Machine (3654MB) + L2 #0 (4096KB)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; L1 #0 (64KB) + Core #0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; PU #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; PU #1 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; L1 #1 (64KB) + Core #1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; PU #2 (phys=2)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; PU #3 (phys=3)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Fixed in the latest version (tried hwloc-1.1a1r2301.tar.gz)
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2301.ta">http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2301.ta</a>
</span><br>
<span class="quotelev2">&gt; &gt; r.gz&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In 1.0.1, there's a patch that prevents us from showing invalid socket
</span><br>
<span class="quotelev1">&gt; info on old kernels but it also prevents us from showing valid socket
</span><br>
<span class="quotelev1">&gt; info on recent kernel. I reverted the commit in trunk (and in the
</span><br>
<span class="quotelev1">&gt; upcoming 1.0.2).
</span><br>
Thanks for shading some light into it!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BUG #2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On some PPC64, kernel 2.6.32 I have crash when running
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ lstopo a.txt
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ gdb /usr/local/bin/lstopo core.8771
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #0 0x00000000100060b4 in .merge ()
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It appears only on some PPC64 boxes.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This issue is also gone with in the latest version (tried
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-1.1a1r2301.tar.gz)
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2301.ta">http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2301.ta</a>
</span><br>
<span class="quotelev2">&gt; &gt; r.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if you are aware of these problems. let me know if you need
</span><br>
<span class="quotelev2">&gt; &gt; more details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you do &quot;lstopo a.xml&quot; first, does &quot;lstopo --xml a.xml a.txt&quot; crash as
</span><br>
<span class="quotelev1">&gt; above? If so, please send a.xml so that I debug this.
</span><br>
<p>$./lstopo --version
<br>
lt-lstopo 1.0.1
<br>
<p>$./lstopo --xml /tmp/2010-Jul-10_22h14m_results/2.6.32-44.el6.ppc64_OS-
<br>
indexing.xml a.txt
<br>
Segmentation fault (core dumped)
<br>
<p>xml was generated with
<br>
lstopo --physical a.xml
<br>
<p>Output of command: &quot;lstopo --physical -&quot;
<br>
Machine (4096MB)
<br>
&nbsp;&nbsp;NUMANode p#0 (2240MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L1 (64KB) + Core p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L1 (64KB) + Core p#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L1 (64KB) + Core p#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L1 (64KB) + Core p#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#7
<br>
&nbsp;&nbsp;NUMANode p#1 (1856MB)
<br>
<p>Note missing socket.
<br>
<p>I will attach:
<br>
-xml causing crash (2.6.32-44.el6.ppc64_OS-indexing.xml)
<br>
-whole run directory (notice that png, pdf, ... are created (no crash) but are 
<br>
empty. Others format are OK (check .fig) ) Please notice that hwloc-distrib is 
<br>
also not working correctly - check CPU_AFFINITY/0008.log for example.
<br>
-runtest.sh - script used to create the data. 
<br>
<p>Let me know if you need more data.
<br>
<p>Thanks!
<br>
Jirka
<br>
<p>


<br><hr>
<ul>
<li>application/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1150/2.6.32-44.el6.ppc64_OS-indexing.xml">2.6.32-44.el6.ppc64_OS-indexing.xml</a>
</ul>
<!-- attachment="2.6.32-44.el6.ppc64_OS-indexing.xml" -->
<hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1150/2010-Jul-10_22h14m_hwloc-results.tar.gz">2010-Jul-10_22h14m_hwloc-results.tar.gz</a>
</ul>
<!-- attachment="2010-Jul-10_22h14m_hwloc-results.tar.gz" -->
<hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1150/runtest.sh">runtest.sh</a>
</ul>
<!-- attachment="runtest.sh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Reply:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
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
