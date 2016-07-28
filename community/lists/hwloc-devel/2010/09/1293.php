<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 02:01:26 2010" -->
<!-- isoreceived="20100916060126" -->
<!-- sent="Thu, 16 Sep 2010 15:57:47 +1000" -->
<!-- isosent="20100916055747" -->
<!-- name="Alexey Kardashevskiy" -->
<!-- email="aik_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="4C91B1DB.3060307_at_au1.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C91AE01.2030902_at_inria.fr" -->
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
<strong>Date:</strong> 2010-09-16 01:57:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1294.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1292.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1291.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1295.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1295.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1300.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 16/09/10 15:41, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 16/09/2010 06:10, Alexey Kardashevskiy a &#233;crit :
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. The HWLOC expects numa nodes to be numbered consecutively, like
</span><br>
<span class="quotelev2">&gt;&gt; 1-2-3-4-5.... However this is not necessary true for PowerPC with
</span><br>
<span class="quotelev2">&gt;&gt; LPARs or on systems with numa hotswap (do they exist? don't know).
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Yes, I've never implemented any sparse-aware code since I haven't ever
</span><br>
<span class="quotelev1">&gt; seen sparse-numbered system :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>I posted tgz - you may take a look :)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - where do I put IBM-specific code?
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Is the device tree linux-specific ? If so, it can stay in linux file as
</span><br>
<span class="quotelev1">&gt; long as it's not 30k lines :) We already have both sysfs and
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo  code there anyway.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>It is powerpc-specific. It is mapped from the system firmware (aka bios) 
<br>
by the powerpc kernel. However it is just a folder within /proc so it is 
<br>
usual linux folder. But PowerPC might be not the only architecture which 
<br>
uses the same pathname for the same thing.
<br>
<p><p><span class="quotelev2">&gt;&gt; - may be there is a better way to detect that no cache info was
</span><br>
<span class="quotelev2">&gt;&gt; fetched from sysfs
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; That's something that's not clear to me yet. There will likely be other
</span><br>
<span class="quotelev1">&gt; cases in the future where we will fetch some info from different
</span><br>
<span class="quotelev1">&gt; backends, and merging them may not be easy. Do you think the device tree
</span><br>
<span class="quotelev1">&gt; generally contains more information than sysfs? If so, we could start by
</span><br>
<span class="quotelev1">&gt; disabling cache info from sysfs when a device-tree is found, and maybe
</span><br>
<span class="quotelev1">&gt; have a way to change that default (we already have a hidden en variable
</span><br>
<span class="quotelev1">&gt; to use cpuinfo when sysfs is available).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
See my note above about the system firmware :) Almost every powerpc 
<br>
system has device-tree no matter which OS you run on it (sony ps3 is 
<br>
probably the only exception). /proc/device-tree is the only source for 
<br>
sysfs on powerpc linux.
<br>
<p><span class="quotelev2">&gt;&gt; - is the coding style ok? :-)
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; It doesn't look bad.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>The current topology-linux.c consist of several coding styles so I could 
<br>
not detect which one is primary :)
<br>
<p><span class="quotelev1">&gt; One question though: Is the device tree completely save-able for
</span><br>
<span class="quotelev1">&gt; external reuse? We like being able to save /proc and /sys so as to debug
</span><br>
<span class="quotelev1">&gt; distant machines locally. Doing the same for the device tree would be
</span><br>
<span class="quotelev1">&gt; great. If so, could you send a tarball of a machine with sparse-numa
</span><br>
<span class="quotelev1">&gt; numbers? And we'll likely make gather-topology.sh store it too.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>I am attaching a result of the &quot;tar czf 256cpu_device_tree.tgz 
<br>
/proc/device-tree/&quot; command. Looks good. TAR complained multiple times 
<br>
that &quot;file changed as we read it&quot; though.
<br>
<p><p>ps: I get every mail twice. I know I screwed up with subscription but 
<br>
how do I or somebody fix that? I need to have only aik_at_[hidden] 
<br>
subscribed. Thank you :)
<br>
<p>
<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1293/256cpu_device_tree.tgz">256cpu_device_tree.tgz</a>
</ul>
<!-- attachment="256cpu_device_tree.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1294.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1292.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1291.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1295.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1295.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1300.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
