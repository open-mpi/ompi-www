<?
$subject_val = "Re: [hwloc-users] CPU info on ARM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 07:51:15 2014" -->
<!-- isoreceived="20140128125115" -->
<!-- sent="Tue, 28 Jan 2014 12:51:14 +0000" -->
<!-- isosent="20140128125114" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] CPU info on ARM" -->
<!-- id="D5B4E8D2-663D-4850-8E48-8C86A0FB6596_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52E76CCD.9040305_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] CPU info on ARM<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 07:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0958.php">Brice Goglin: "[hwloc-users] CPU info on ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0967.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Reply:</strong> <a href="0967.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I passed this on to my OMPI ARM contact (Leif Lindholm).  Here's what he said:
<br>
<p>&nbsp;&nbsp;&nbsp;&quot;It gets a bit trickier on ARM... since we may also have (implementation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;time) configurable cache sizes and also big.LITTLE (different processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;models executing in the same SMP system).&quot;
<br>
<p>He passed the question on to another ARM guy, asking for further detail.  I'll pass on what he says.
<br>
<p><p><p>On Jan 28, 2014, at 3:39 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is anybody familiar with ARM CPUs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am adding more CPU information because Intel needs more:
</span><br>
<span class="quotelev1">&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev1">&gt; CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
</span><br>
<span class="quotelev1">&gt; CPUModelNumber=45
</span><br>
<span class="quotelev1">&gt; CPUFamilyNumber=6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would something similar be useful for ARM? What are the fields below
</span><br>
<span class="quotelev1">&gt; from /proc/cpuinfo on ARM that would be useful to developers?
</span><br>
<span class="quotelev1">&gt; Processor    : Marvell PJ4Bv7 Processor rev 1 (v7l)
</span><br>
<span class="quotelev1">&gt; BogoMIPS    : 1196.85
</span><br>
<span class="quotelev1">&gt; Features    : swp half thumb fastmult vfp edsp vfpv3 vfpv3d16 tls
</span><br>
<span class="quotelev1">&gt; CPU implementer    : 0x56
</span><br>
<span class="quotelev1">&gt; CPU architecture: 7
</span><br>
<span class="quotelev1">&gt; CPU variant    : 0x1
</span><br>
<span class="quotelev1">&gt; CPU part    : 0x581
</span><br>
<span class="quotelev1">&gt; CPU revision    : 1
</span><br>
<span class="quotelev1">&gt; Hardware    : Marvell Armada-370
</span><br>
<span class="quotelev1">&gt; Revision    : 0000
</span><br>
<span class="quotelev1">&gt; Serial        : 0000000000000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0958.php">Brice Goglin: "[hwloc-users] CPU info on ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0967.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Reply:</strong> <a href="0967.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
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
