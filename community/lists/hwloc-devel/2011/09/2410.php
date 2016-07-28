<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 09:24:05 2011" -->
<!-- isoreceived="20110913132405" -->
<!-- sent="Tue, 13 Sep 2011 21:23:53 +0800" -->
<!-- isosent="20110913132353" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E6F5969.20809_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E6E029A.8050203_at_inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 09:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2409.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2407.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/09/2011 21:01, Brice Goglin a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Le 09/09/2011 13:25, TERRY DONTJE a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 9/8/2011 3:10 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed there's nothing like this as of today. We talked about it in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the past but it's not very easy to implement on Linux (see below) so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we forgot about it until somebody complained.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Adding infos would certainly be fine. I think it should rather be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;CPUType&quot; and &quot;CPUModel&quot; since existing infos have no underscore in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their name if I remember correctly. You could also set object-&gt;name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a combination of type and model. Socket looks like the right
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object to put this. Maybe even use &quot;Model&quot; and &quot;Type&quot; as the info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; names then?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason it's not easy on Linux is that we usually take infos from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; either sysfs, or /proc/cpuinfo if sysfs isn't available, but not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from both. Processor names are only in /proc/cpuinfo IIRC. So we'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to mix sysfs and /proc/cpuinfo. Not easy with the current code,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; especially if you can't assume that all sockets are similar. But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; definitely something that I will do at some point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The way info objects would be attached to a Socket object I assume it
</span><br>
<span class="quotelev2">&gt;&gt; would be ok to just attach such an object under Solaris but not not
</span><br>
<span class="quotelev2">&gt;&gt; for the other OSes.  Since one can look for the named object and it
</span><br>
<span class="quotelev2">&gt;&gt; is either going to be there or not :-).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, I'll play around with this for Solaris.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the code, you might want to drop hwloc_setup_level() and
</span><br>
<span class="quotelev1">&gt; copy it back into the caller. It will make the addition of info
</span><br>
<span class="quotelev1">&gt; attributes much easier. I am looking at the Linux side.
</span><br>
<p>I just pushed some code that will make this much easier on Linux (I may
<br>
change the Solaris code similarly when I'll take time to test on a real
<br>
solaris machine).
<br>
<p>Now I have a patch that reads the CPU vendor and model in /proc/cpuinfo
<br>
(x86 only for now) and use them to set Socket info attributes (CPUVendor
<br>
and CPUModel) and name (CPUVendor+CPUModel).
<br>
<p>Before I push this, we need to clarify what we want. You were talking
<br>
about &quot;CPUType&quot; and &quot;CPUModel&quot;. Can you give some example of what it
<br>
would look like under Solaris? I want to compare to what I can get on Linux.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2409.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2407.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2411.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
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
