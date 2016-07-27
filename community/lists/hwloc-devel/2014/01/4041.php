<?
$subject_val = "Re: [hwloc-devel] Attribute request";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 18:09:47 2014" -->
<!-- isoreceived="20140127230947" -->
<!-- sent="Tue, 28 Jan 2014 00:09:44 +0100" -->
<!-- isosent="20140127230944" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute request" -->
<!-- id="52E6E738.2090003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C38AB656-D2FE-4710-8229-43770B9FB9D2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Attribute request<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 18:09:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4042.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Previous message:</strong> <a href="4040.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-48-gf0add98)"</a>
<li><strong>In reply to:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Reply:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I have some code that seems to work. Here's what it reports below. Does
<br>
that look ok to you?
<br>
I had to modify quite a lot of things to make the parsing of
<br>
/proc/cpuinfo more robust (the code is basically arch-specific now), so
<br>
I am not sure we'll be able to backport this to OMPI.
<br>
Brice
<br>
<p><p>* Sandy-Bridge Xeon E5 (Stampede)
<br>
CPUVendor=GenuineIntel
<br>
CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
<br>
CPUModelNumber=45
<br>
CPUFamilyNumber=6
<br>
* Old Nehalem-EX
<br>
CPUVendor=GenuineIntel
<br>
CPUModel=Intel(R) Xeon(R) CPU           E7540  @ 2.00GHz
<br>
CPUModelNumber=46
<br>
CPUFamilyNumber=6
<br>
* Itanium
<br>
CPUVendor=GenuineIntel
<br>
CPUModel=Dual-Core Intel(R) Itanium(R) Processor 9140N
<br>
CPUModelNumber=1
<br>
CPUFamilyNumber=32
<br>
* AMD
<br>
CPUVendor=AuthenticAMD
<br>
CPUModel=Dual Core AMD Opteron(tm) Processor 865
<br>
CPUModelNumber=33
<br>
CPUFamilyNumber=15
<br>
* MIC (Stampede)
<br>
CPUVendor=GenuineIntel
<br>
CPUModel=0b/01
<br>
CPUModelNumber=1
<br>
CPUFamilyNumber=11
<br>
<p><p><p><p>Le 23/01/2014 19:50, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; That would be perfect! Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2014, at 10:27 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Should be easy on Linux, sure.
</span><br>
<span class="quotelev2">&gt;&gt; The model name is already known as CPUModel in hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; We should likely add CPUVendor (would be GenuineIntel or
</span><br>
<span class="quotelev2">&gt;&gt; AuthenticAMD), CPUFamily (or CPUFamilyNumber if there's a name for
</span><br>
<span class="quotelev2">&gt;&gt; these families?) and CPUModelNumber ?
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 23/01/2014 19:09, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking at the current topology info, I see you capture the model
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name for the socket, but not a couple of other key things Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could use:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model           : 44
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name      : Intel(R) Xeon(R) CPU           E5645  @ 2.40GHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both the cpu family and model are important to us - any issue with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding them to the &quot;infos&quot; array?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden] &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4042.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Previous message:</strong> <a href="4040.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-48-gf0add98)"</a>
<li><strong>In reply to:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Reply:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
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
