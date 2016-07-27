<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 09:01:23 2011" -->
<!-- isoreceived="20110912130123" -->
<!-- sent="Mon, 12 Sep 2011 15:01:14 +0200" -->
<!-- isosent="20110912130114" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E6E029A.8050203_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E69F793.6080707_at_oracle.com" -->
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
<strong>Date:</strong> 2011-09-12 09:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2408.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Previous message:</strong> <a href="2406.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2404.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/09/2011 13:25, TERRY DONTJE a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On 9/8/2011 3:10 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Indeed there's nothing like this as of today. We talked about it in
</span><br>
<span class="quotelev2">&gt;&gt; the past but it's not very easy to implement on Linux (see below) so
</span><br>
<span class="quotelev2">&gt;&gt; we forgot about it until somebody complained.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Adding infos would certainly be fine. I think it should rather be
</span><br>
<span class="quotelev2">&gt;&gt; &quot;CPUType&quot; and &quot;CPUModel&quot; since existing infos have no underscore in
</span><br>
<span class="quotelev2">&gt;&gt; their name if I remember correctly. You could also set object-&gt;name
</span><br>
<span class="quotelev2">&gt;&gt; to a combination of type and model. Socket looks like the right
</span><br>
<span class="quotelev2">&gt;&gt; object to put this. Maybe even use &quot;Model&quot; and &quot;Type&quot; as the info
</span><br>
<span class="quotelev2">&gt;&gt; names then?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason it's not easy on Linux is that we usually take infos from
</span><br>
<span class="quotelev2">&gt;&gt; either sysfs, or /proc/cpuinfo if sysfs isn't available, but not from
</span><br>
<span class="quotelev2">&gt;&gt; both. Processor names are only in /proc/cpuinfo IIRC. So we'd need to
</span><br>
<span class="quotelev2">&gt;&gt; mix sysfs and /proc/cpuinfo. Not easy with the current code,
</span><br>
<span class="quotelev2">&gt;&gt; especially if you can't assume that all sockets are similar. But
</span><br>
<span class="quotelev2">&gt;&gt; definitely something that I will do at some point.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The way info objects would be attached to a Socket object I assume it
</span><br>
<span class="quotelev1">&gt; would be ok to just attach such an object under Solaris but not not
</span><br>
<span class="quotelev1">&gt; for the other OSes.  Since one can look for the named object and it is
</span><br>
<span class="quotelev1">&gt; either going to be there or not :-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I'll play around with this for Solaris.
</span><br>
<p>Looking at the code, you might want to drop hwloc_setup_level() and copy
<br>
it back into the caller. It will make the addition of info attributes
<br>
much easier. I am looking at the Linux side.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2407/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2408.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Previous message:</strong> <a href="2406.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2404.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
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
