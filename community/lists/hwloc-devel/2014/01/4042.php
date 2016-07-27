<?
$subject_val = "Re: [hwloc-devel] Attribute request";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 18:53:59 2014" -->
<!-- isoreceived="20140127235359" -->
<!-- sent="Mon, 27 Jan 2014 15:53:55 -0800" -->
<!-- isosent="20140127235355" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute request" -->
<!-- id="98BBE0F1-5A3B-498F-AEB1-AFF3D3D6D877_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 18:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Previous message:</strong> <a href="4041.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I have some code that seems to work. Here's what it reports below. Does that look ok to you?
<br>
I had to modify quite a lot of things to make the parsing of /proc/cpuinfo more robust (the code is basically arch-specific now), so I am not sure we'll be able to backport this to OMPI.
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
<span class="quotelev1">&gt; On Jan 23, 2014, at 10:27 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should be easy on Linux, sure.
</span><br>
<span class="quotelev2">&gt;&gt; The model name is already known as CPUModel in hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; We should likely add CPUVendor (would be GenuineIntel or AuthenticAMD), CPUFamily (or CPUFamilyNumber if there's a name for these families?) and CPUModelNumber ?
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
<span class="quotelev3">&gt;&gt;&gt; Looking at the current topology info, I see you capture the model name for the socket, but not a couple of other key things Intel could use:
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
<span class="quotelev3">&gt;&gt;&gt; Both the cpu family and model are important to us - any issue with adding them to the &quot;infos&quot; array?
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
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
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
<p>_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Previous message:</strong> <a href="4041.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
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
