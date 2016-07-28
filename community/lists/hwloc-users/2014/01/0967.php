<?
$subject_val = "Re: [hwloc-users] CPU info on ARM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 12:38:30 2014" -->
<!-- isoreceived="20140128173830" -->
<!-- sent="Tue, 28 Jan 2014 11:38:09 -0600" -->
<!-- isosent="20140128173809" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] CPU info on ARM" -->
<!-- id="CAGKz=uJdzDVoFUc6kNKZP=O_-t9ezWvtpC-ZR9z7=ss2Gj8qGA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D5B4E8D2-663D-4850-8E48-8C86A0FB6596_at_cisco.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 12:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0968.php">Brice Goglin: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Previous message:</strong> <a href="0966.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0963.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] CPU info on ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0968.php">Brice Goglin: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Reply:</strong> <a href="0968.php">Brice Goglin: "Re: [hwloc-users] CPU info on ARM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know the answer but I'm happy to test on my ARM systems if you
<br>
have an experiment to perform.
<br>
<p>Right now, I have an NVIDIA Kayla board and a Parallella board, both
<br>
of which are ARMv7.
<br>
<p>Jeff
<br>
<p>On Tue, Jan 28, 2014 at 6:51 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I passed this on to my OMPI ARM contact (Leif Lindholm).  Here's what he said:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    &quot;It gets a bit trickier on ARM... since we may also have (implementation
</span><br>
<span class="quotelev1">&gt;     time) configurable cache sizes and also big.LITTLE (different processor
</span><br>
<span class="quotelev1">&gt;     models executing in the same SMP system).&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; He passed the question on to another ARM guy, asking for further detail.  I'll pass on what he says.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2014, at 3:39 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is anybody familiar with ARM CPUs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am adding more CPU information because Intel needs more:
</span><br>
<span class="quotelev2">&gt;&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
</span><br>
<span class="quotelev2">&gt;&gt; CPUModelNumber=45
</span><br>
<span class="quotelev2">&gt;&gt; CPUFamilyNumber=6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would something similar be useful for ARM? What are the fields below
</span><br>
<span class="quotelev2">&gt;&gt; from /proc/cpuinfo on ARM that would be useful to developers?
</span><br>
<span class="quotelev2">&gt;&gt; Processor    : Marvell PJ4Bv7 Processor rev 1 (v7l)
</span><br>
<span class="quotelev2">&gt;&gt; BogoMIPS    : 1196.85
</span><br>
<span class="quotelev2">&gt;&gt; Features    : swp half thumb fastmult vfp edsp vfpv3 vfpv3d16 tls
</span><br>
<span class="quotelev2">&gt;&gt; CPU implementer    : 0x56
</span><br>
<span class="quotelev2">&gt;&gt; CPU architecture: 7
</span><br>
<span class="quotelev2">&gt;&gt; CPU variant    : 0x1
</span><br>
<span class="quotelev2">&gt;&gt; CPU part    : 0x581
</span><br>
<span class="quotelev2">&gt;&gt; CPU revision    : 1
</span><br>
<span class="quotelev2">&gt;&gt; Hardware    : Marvell Armada-370
</span><br>
<span class="quotelev2">&gt;&gt; Revision    : 0000
</span><br>
<span class="quotelev2">&gt;&gt; Serial        : 0000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0968.php">Brice Goglin: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Previous message:</strong> <a href="0966.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0963.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] CPU info on ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0968.php">Brice Goglin: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Reply:</strong> <a href="0968.php">Brice Goglin: "Re: [hwloc-users] CPU info on ARM"</a>
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
