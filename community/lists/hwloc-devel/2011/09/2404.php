<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  9 07:25:17 2011" -->
<!-- isoreceived="20110909112517" -->
<!-- sent="Fri, 09 Sep 2011 07:25:07 -0400" -->
<!-- isosent="20110909112507" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E69F793.6080707_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E69130D.3040105_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-09 07:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2405.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2405.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2405.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2407.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/8/2011 3:10 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed there's nothing like this as of today. We talked about it in 
</span><br>
<span class="quotelev1">&gt; the past but it's not very easy to implement on Linux (see below) so 
</span><br>
<span class="quotelev1">&gt; we forgot about it until somebody complained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adding infos would certainly be fine. I think it should rather be 
</span><br>
<span class="quotelev1">&gt; &quot;CPUType&quot; and &quot;CPUModel&quot; since existing infos have no underscore in 
</span><br>
<span class="quotelev1">&gt; their name if I remember correctly. You could also set object-&gt;name to 
</span><br>
<span class="quotelev1">&gt; a combination of type and model. Socket looks like the right object to 
</span><br>
<span class="quotelev1">&gt; put this. Maybe even use &quot;Model&quot; and &quot;Type&quot; as the info names then?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason it's not easy on Linux is that we usually take infos from 
</span><br>
<span class="quotelev1">&gt; either sysfs, or /proc/cpuinfo if sysfs isn't available, but not from 
</span><br>
<span class="quotelev1">&gt; both. Processor names are only in /proc/cpuinfo IIRC. So we'd need to 
</span><br>
<span class="quotelev1">&gt; mix sysfs and /proc/cpuinfo. Not easy with the current code, 
</span><br>
<span class="quotelev1">&gt; especially if you can't assume that all sockets are similar. But 
</span><br>
<span class="quotelev1">&gt; definitely something that I will do at some point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
The way info objects would be attached to a Socket object I assume it 
<br>
would be ok to just attach such an object under Solaris but not not for 
<br>
the other OSes.  Since one can look for the named object and it is 
<br>
either going to be there or not :-).
<br>
<p>Anyway, I'll play around with this for Solaris.  Can I then email you 
<br>
the diff for a review?
<br>
<p>thanks,
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 08/09/2011 20:57, TERRY DONTJE a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I wanted to verify that I am not overlooking something, but is there 
</span><br>
<span class="quotelev2">&gt;&gt; any information stored in the hwloc topology tree that contains the 
</span><br>
<span class="quotelev2">&gt;&gt; CPU Model and Type of chips in a machine?  The closest I came was the 
</span><br>
<span class="quotelev2">&gt;&gt; Machine &quot;Architecture&quot; info object.  Unfortunately this object is not 
</span><br>
<span class="quotelev2">&gt;&gt; specific enough so I am considering adding a couple info objects 
</span><br>
<span class="quotelev2">&gt;&gt; (CPU_Model and CPU_Type) to the HWLOC_OBJ_SOCKET objects or maybe to 
</span><br>
<span class="quotelev2">&gt;&gt; the Machine object in topology_solaris.c in the OMPI hwloc source base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First does that make sense and secondly does this sound like it might 
</span><br>
<span class="quotelev2">&gt;&gt; be useful enough outside of OMPI that you'd want to buy back the 
</span><br>
<span class="quotelev2">&gt;&gt; changes?  There is similar data that can be gotten for Linux too.  
</span><br>
<span class="quotelev2">&gt;&gt; Though I personally only need this for Solaris/SPARC systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Oracle
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2404/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2404/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2404/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2405.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2405.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2405.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2407.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
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
