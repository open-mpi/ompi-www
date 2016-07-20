<?
$subject_val = "Re: [hwloc-users] CPU info on ARM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 13:02:28 2014" -->
<!-- isoreceived="20140128180228" -->
<!-- sent="Tue, 28 Jan 2014 19:02:26 +0100" -->
<!-- isosent="20140128180226" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] CPU info on ARM" -->
<!-- id="52E7F0B2.7050508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGKz=uJdzDVoFUc6kNKZP=O_-t9ezWvtpC-ZR9z7=ss2Gj8qGA_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 13:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0969.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Previous message:</strong> <a href="0967.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>In reply to:</strong> <a href="0967.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0969.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Reply:</strong> <a href="0969.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send their /proc/cpuinfo ?
<br>
<p>It looks like all ARM platforms have very similar cpuinfo files in
<br>
Linux, so I expect something similar to what's below, but maybe we'll
<br>
see better which fields are interesting.
<br>
<p>Brice
<br>
<p><p><p><p>Le 28/01/2014 18:38, Jeff Hammond a &#233;crit :
<br>
<span class="quotelev1">&gt; I don't know the answer but I'm happy to test on my ARM systems if you
</span><br>
<span class="quotelev1">&gt; have an experiment to perform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, I have an NVIDIA Kayla board and a Parallella board, both
</span><br>
<span class="quotelev1">&gt; of which are ARMv7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 28, 2014 at 6:51 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I passed this on to my OMPI ARM contact (Leif Lindholm).  Here's what he said:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;It gets a bit trickier on ARM... since we may also have (implementation
</span><br>
<span class="quotelev2">&gt;&gt;     time) configurable cache sizes and also big.LITTLE (different processor
</span><br>
<span class="quotelev2">&gt;&gt;     models executing in the same SMP system).&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; He passed the question on to another ARM guy, asking for further detail.  I'll pass on what he says.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2014, at 3:39 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is anybody familiar with ARM CPUs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am adding more CPU information because Intel needs more:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPUModelNumber=45
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPUFamilyNumber=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would something similar be useful for ARM? What are the fields below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from /proc/cpuinfo on ARM that would be useful to developers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Processor    : Marvell PJ4Bv7 Processor rev 1 (v7l)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BogoMIPS    : 1196.85
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Features    : swp half thumb fastmult vfp edsp vfpv3 vfpv3d16 tls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU implementer    : 0x56
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU architecture: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU variant    : 0x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU part    : 0x581
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU revision    : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hardware    : Marvell Armada-370
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Revision    : 0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Serial        : 0000000000000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0969.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Previous message:</strong> <a href="0967.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>In reply to:</strong> <a href="0967.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0969.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Reply:</strong> <a href="0969.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
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
