<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 04:49:57 2010" -->
<!-- isoreceived="20100916084957" -->
<!-- sent="Thu, 16 Sep 2010 10:49:51 +0200" -->
<!-- isosent="20100916084951" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="20100916084951.GC5420_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C91B1DB.3060307_at_au1.ibm.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 04:49:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1296.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1294.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1296.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1296.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alexey Kardashevskiy, le Thu 16 Sep 2010 15:57:47 +1000, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt;Is the device tree linux-specific ? If so, it can stay in linux file as
</span><br>
<span class="quotelev2">&gt; &gt;long as it's not 30k lines :) We already have both sysfs and
</span><br>
<span class="quotelev2">&gt; &gt;/proc/cpuinfo  code there anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is powerpc-specific. It is mapped from the system firmware (aka bios) 
</span><br>
<span class="quotelev1">&gt; by the powerpc kernel. However it is just a folder within /proc so it is 
</span><br>
<span class="quotelev1">&gt; usual linux folder. But PowerPC might be not the only architecture which 
</span><br>
<span class="quotelev1">&gt; uses the same pathname for the same thing.
</span><br>
<p>Apparently microblaze uses it too, but it doesn't provide the cpus/
<br>
subdirectory.
<br>
<p><span class="quotelev3">&gt; &gt;&gt;- may be there is a better way to detect that no cache info was
</span><br>
<span class="quotelev3">&gt; &gt;&gt;fetched from sysfs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;That's something that's not clear to me yet. There will likely be other
</span><br>
<span class="quotelev2">&gt; &gt;cases in the future where we will fetch some info from different
</span><br>
<span class="quotelev2">&gt; &gt;backends, and merging them may not be easy. Do you think the device tree
</span><br>
<span class="quotelev2">&gt; &gt;generally contains more information than sysfs? If so, we could start by
</span><br>
<span class="quotelev2">&gt; &gt;disabling cache info from sysfs when a device-tree is found, and maybe
</span><br>
<span class="quotelev2">&gt; &gt;have a way to change that default (we already have a hidden en variable
</span><br>
<span class="quotelev2">&gt; &gt;to use cpuinfo when sysfs is available).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See my note above about the system firmware :) Almost every powerpc 
</span><br>
<span class="quotelev1">&gt; system has device-tree no matter which OS you run on it (sony ps3 is 
</span><br>
<span class="quotelev1">&gt; probably the only exception). /proc/device-tree is the only source for 
</span><br>
<span class="quotelev1">&gt; sysfs on powerpc linux.
</span><br>
<p>Do you perhaps happen to know where it might be on AIX?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1296.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1294.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1296.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1296.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
