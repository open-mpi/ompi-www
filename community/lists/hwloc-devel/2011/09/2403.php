<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 15:10:11 2011" -->
<!-- isoreceived="20110908191011" -->
<!-- sent="Thu, 08 Sep 2011 21:10:05 +0200" -->
<!-- isosent="20110908191005" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E69130D.3040105_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E691015.2060800_at_oracle.com" -->
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
<strong>Date:</strong> 2011-09-08 15:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2404.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2402.php">TERRY DONTJE: "[hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2402.php">TERRY DONTJE: "[hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2404.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2404.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Terry,
<br>
<p>Indeed there's nothing like this as of today. We talked about it in the
<br>
past but it's not very easy to implement on Linux (see below) so we
<br>
forgot about it until somebody complained.
<br>
<p>Adding infos would certainly be fine. I think it should rather be
<br>
&quot;CPUType&quot; and &quot;CPUModel&quot; since existing infos have no underscore in
<br>
their name if I remember correctly. You could also set object-&gt;name to a
<br>
combination of type and model. Socket looks like the right object to put
<br>
this. Maybe even use &quot;Model&quot; and &quot;Type&quot; as the info names then?
<br>
<p>The reason it's not easy on Linux is that we usually take infos from
<br>
either sysfs, or /proc/cpuinfo if sysfs isn't available, but not from
<br>
both. Processor names are only in /proc/cpuinfo IIRC. So we'd need to
<br>
mix sysfs and /proc/cpuinfo. Not easy with the current code, especially
<br>
if you can't assume that all sockets are similar. But definitely
<br>
something that I will do at some point.
<br>
<p>Brice
<br>
<p><p><p>Le 08/09/2011 20:57, TERRY DONTJE a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I wanted to verify that I am not overlooking something, but is there
</span><br>
<span class="quotelev1">&gt; any information stored in the hwloc topology tree that contains the
</span><br>
<span class="quotelev1">&gt; CPU Model and Type of chips in a machine?  The closest I came was the
</span><br>
<span class="quotelev1">&gt; Machine &quot;Architecture&quot; info object.  Unfortunately this object is not
</span><br>
<span class="quotelev1">&gt; specific enough so I am considering adding a couple info objects
</span><br>
<span class="quotelev1">&gt; (CPU_Model and CPU_Type) to the HWLOC_OBJ_SOCKET objects or maybe to
</span><br>
<span class="quotelev1">&gt; the Machine object in topology_solaris.c in the OMPI hwloc source base. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First does that make sense and secondly does this sound like it might
</span><br>
<span class="quotelev1">&gt; be useful enough outside of OMPI that you'd want to buy back the
</span><br>
<span class="quotelev1">&gt; changes?  There is similar data that can be gotten for Linux too. 
</span><br>
<span class="quotelev1">&gt; Though I personally only need this for Solaris/SPARC systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2403/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2404.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2402.php">TERRY DONTJE: "[hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2402.php">TERRY DONTJE: "[hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2404.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2404.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
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
