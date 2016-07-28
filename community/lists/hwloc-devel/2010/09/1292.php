<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 01:46:36 2010" -->
<!-- isoreceived="20100916054636" -->
<!-- sent="Thu, 16 Sep 2010 15:42:27 +1000" -->
<!-- isosent="20100916054227" -->
<!-- name="Alexey Kardashevskiy" -->
<!-- email="aik_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="4C91AE43.9020001_at_au1.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100916052958.GM4736_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Alexey Kardashevskiy (<em>aik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 01:42:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1291.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1294.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1294.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please find the answers below.
<br>
<p><p>On 16/09/10 15:29, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Alexey Kardashevskiy, le Thu 16 Sep 2010 14:10:08 +1000, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; 1. Old kernels (RHEL5.*) do expose some numa nodes via sysfs but there
</span><br>
<span class="quotelev2">&gt;&gt; is no information regarting cache (L1/L2/L3) and CPU threads. RHEL6 does
</span><br>
<span class="quotelev2">&gt;&gt; that. The proposed patch parses PowerPC's /proc/device-tree and add
</span><br>
<span class="quotelev2">&gt;&gt; necessary information into the topology.
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Mmm, is that information not available on RHEL6 through the standard
</span><br>
<span class="quotelev1">&gt; /sys/devices/system/cpu/cpu*/cache too?
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>It is available on RHEL6 and not available on RHEL5. So the patched code 
<br>
looks to sysfs first and if there were no cache info found, goes to the 
<br>
device-tree. Workaround, yes.
<br>
<p><p><span class="quotelev1">&gt; Could you post a tgz output example of tests/linux/gather-topology.sh on
</span><br>
<span class="quotelev1">&gt; RHEL6 so we can include a testcase for your code?
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Attached, both files.
<br>
<p><p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1292/12345.tar.gz">12345.tar.gz</a>
</ul>
<!-- attachment="12345.tar.gz" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1292/12345.tar.gz.output">12345.tar.gz.output</a>
</ul>
<!-- attachment="12345.tar.gz.output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1291.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1294.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1294.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc powerpc rhel5 and power7 patch"</a>
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
