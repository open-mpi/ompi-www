<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 16 11:50:21 2011" -->
<!-- isoreceived="20110916155021" -->
<!-- sent="Fri, 16 Sep 2011 11:50:03 -0400" -->
<!-- isosent="20110916155003" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E73702B.8090809_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E708F52.5090306_at_oracle.com" -->
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
<strong>Date:</strong> 2011-09-16 11:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2420.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2418.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3794)"</a>
<li><strong>In reply to:</strong> <a href="2416.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/14/2011 5:54 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 13/09/2011 22:06, TERRY DONTJE a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/13/2011 9:54 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 13/09/2011 21:51, TERRY DONTJE a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Both type and model are character strings.  An example of what I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; currently store in the sysinfo structures are:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; type = &quot;SPARC&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model = &quot;SPARC64_VI&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Other values for model are &quot;T1&quot;, &quot;T2&quot;, &quot;SPARC64_VII&quot;...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What about Solaris on non-sparc machines ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like the type is an empty string and model is &quot;i86pc&quot; in one case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These are basically values that come from calls to solairs sysinfo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Type doesn't seem that helpful then. We already have the architecture 
</span><br>
<span class="quotelev2">&gt;&gt; (taken from uname) in the machine attribute.
</span><br>
<span class="quotelev1">&gt; Yeah, I guess Solaris is a little biased :-/.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you should just put model in the CPUModel info attribute. I 
</span><br>
<span class="quotelev2">&gt;&gt; wil do the same for Linux and add the vendor to &quot;CPUVendor&quot; when 
</span><br>
<span class="quotelev2">&gt;&gt; available, we'll get something like:
</span><br>
<span class="quotelev1">&gt; So you are saying to add the a CPUModel and CPUVendor info to a socket 
</span><br>
<span class="quotelev1">&gt; object as we discussed earlier, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=Intel(R) Core(TM) i7 CPU       M 620  @ 2.67GHz
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; CPUVendor=AuthenticAMD
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=AMD Opteron(tm) Processor 6174
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=Alpha EV68CB
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=POWER7 (architected), altivec supported
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=Cell Broadband Engine, altivec supported
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=ARMv7 Processor rev 1 (v71)
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; CPUVendor=SPARC
</span><br>
<span class="quotelev1">&gt; CPUModel=SPARC64_VI
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
Brice, I started actually working on the SPARC detect code and a couple 
<br>
things became obvious to me.  First I really meant for CPUVendor to be 
<br>
CPUType ala SPARC, i386, Alpha, Power.  And the CPUModel be the fully 
<br>
described model or brand-string like &quot;SPARC64_VI&quot;, &quot;AMD Opteron(tm) 
<br>
Processor 6174&quot;,  etc.
<br>
<p>I really do not want to be using CPUVendor because SPARC is the 
<br>
Processor type not vendor or manufacturer and even though I could force 
<br>
CPUVendor to be SPARC but I feel we would regret doing so if ever we 
<br>
wanted to truly key off on the CPUVendor for SPARC type processors.
<br>
<p>So can we go back to using CPUType and can you populate it with the type 
<br>
value instead of vendor?
<br>
<p>In looking through my detect code I also figured recalled that it never 
<br>
was compiled on non-sparc machines thus the weird values I was quoting 
<br>
for CPUType and CPUModel for x386 based machines.  I am going to rework 
<br>
the code so it produces correct values when ran under Solaris on both 
<br>
SPARC and i386 type processors.  For i386 I expect to have values as such:
<br>
<p>CPUType = i386
<br>
CPUModel = Intel(R) Core(TM) i7 CPU       M 620  @ 2.67GHz
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2419/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2420.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2418.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3794)"</a>
<li><strong>In reply to:</strong> <a href="2416.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
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
