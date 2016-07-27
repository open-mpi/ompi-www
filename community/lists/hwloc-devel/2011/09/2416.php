<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 07:26:33 2011" -->
<!-- isoreceived="20110914112633" -->
<!-- sent="Wed, 14 Sep 2011 07:26:10 -0400" -->
<!-- isosent="20110914112610" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E708F52.5090306_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E7079CF.5050307_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CPU Model and type<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 07:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2417.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3793)"</a>
<li><strong>Previous message:</strong> <a href="2415.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2415.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2419.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2419.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/14/2011 5:54 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 13/09/2011 22:06, TERRY DONTJE a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 9/13/2011 9:54 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 13/09/2011 21:51, TERRY DONTJE a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Both type and model are character strings.  An example of what I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently store in the sysinfo structures are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; type = &quot;SPARC&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; model = &quot;SPARC64_VI&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Other values for model are &quot;T1&quot;, &quot;T2&quot;, &quot;SPARC64_VII&quot;...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What about Solaris on non-sparc machines ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like the type is an empty string and model is &quot;i86pc&quot; in one case.
</span><br>
<span class="quotelev2">&gt;&gt; These are basically values that come from calls to solairs sysinfo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Type doesn't seem that helpful then. We already have the architecture 
</span><br>
<span class="quotelev1">&gt; (taken from uname) in the machine attribute.
</span><br>
Yeah, I guess Solaris is a little biased :-/.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you should just put model in the CPUModel info attribute. I 
</span><br>
<span class="quotelev1">&gt; wil do the same for Linux and add the vendor to &quot;CPUVendor&quot; when 
</span><br>
<span class="quotelev1">&gt; available, we'll get something like:
</span><br>
So you are saying to add the a CPUModel and CPUVendor info to a socket 
<br>
object as we discussed earlier, right?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev1">&gt; CPUModel=Intel(R) Core(TM) i7 CPU       M 620  @ 2.67GHz
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; CPUVendor=AuthenticAMD
</span><br>
<span class="quotelev1">&gt; CPUModel=AMD Opteron(tm) Processor 6174
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; CPUModel=Alpha EV68CB
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; CPUModel=POWER7 (architected), altivec supported
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; CPUModel=Cell Broadband Engine, altivec supported
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; CPUModel=ARMv7 Processor rev 1 (v71)
</span><br>
or
<br>
CPUVendor=SPARC
<br>
CPUModel=SPARC64_VI
<br>
...
<br>
<p>thanks,
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2416/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2417.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3793)"</a>
<li><strong>Previous message:</strong> <a href="2415.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2415.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2419.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2419.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
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
