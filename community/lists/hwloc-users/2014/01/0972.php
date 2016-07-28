<?
$subject_val = "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 04:31:22 2014" -->
<!-- isoreceived="20140129093122" -->
<!-- sent="Wed, 29 Jan 2014 10:31:20 +0100" -->
<!-- isosent="20140129093120" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="52E8CA68.5020900_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C26DDC98-2451-4C53-9688-C1E095FD0261_at_uberware.net" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 04:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0973.php">Yury Vorobyov: "[hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="0971.php">Brice Goglin: "Re: [hwloc-users] Finding closest host bridge"</a>
<li><strong>Maybe in reply to:</strong> <a href="0956.php">Robin Scher: "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will be releasing a v1.8.1 with this fix in the near future. I still
<br>
need to decide the names of the new CPUModelNumber fields [1] and see if
<br>
I can backport the easy x86 support to v1.8.1 too.
<br>
<p>Rhanks for reporting the issue and testing the &quot;patched winball&quot;
<br>
Brice
<br>
<p>[1] <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4043.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4043.php</a>
<br>
<p><p><p>Le 29/01/2014 06:50, Robin Scher a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works great now. Thank you for your help!
</span><br>
<span class="quotelev1">&gt; -robin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robin Scher
</span><br>
<span class="quotelev1">&gt; robin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; +1 (213) 448-0443
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2014, at 7:47 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the new winball from the git master branch.
</span><br>
<span class="quotelev2">&gt;&gt; It also brings additional CPU attributes (CPUVendor etc).
</span><br>
<span class="quotelev2">&gt;&gt; Aside of this, there are no major changes against v1.8.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 28/01/2014 16:44, Robin Scher a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That would be awesome. Thank you for looking into this. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Robin Scher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; robin_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1 (213) 448-0443
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 28, 2014, at 7:32 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Robin, I can send a new win64 build (based on master/v1.9) if you want
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to test before I release an official v1.8 fix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hwloc-win64-build-gitclone.zip&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0973.php">Yury Vorobyov: "[hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="0971.php">Brice Goglin: "Re: [hwloc-users] Finding closest host bridge"</a>
<li><strong>Maybe in reply to:</strong> <a href="0956.php">Robin Scher: "[hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
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
