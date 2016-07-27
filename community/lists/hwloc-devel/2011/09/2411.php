<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 09:52:10 2011" -->
<!-- isoreceived="20110913135210" -->
<!-- sent="Tue, 13 Sep 2011 09:51:51 -0400" -->
<!-- isosent="20110913135151" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E6F5FF7.7030101_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E6F5969.20809_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-13 09:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2412.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2412.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2412.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/13/2011 9:23 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 12/09/2011 21:01, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Le 09/09/2011 13:25, TERRY DONTJE a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/8/2011 3:10 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indeed there's nothing like this as of today. We talked about it in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the past but it's not very easy to implement on Linux (see below) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so we forgot about it until somebody complained.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Adding infos would certainly be fine. I think it should rather be 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;CPUType&quot; and &quot;CPUModel&quot; since existing infos have no underscore in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; their name if I remember correctly. You could also set object-&gt;name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to a combination of type and model. Socket looks like the right 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; object to put this. Maybe even use &quot;Model&quot; and &quot;Type&quot; as the info 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; names then?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason it's not easy on Linux is that we usually take infos 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from either sysfs, or /proc/cpuinfo if sysfs isn't available, but 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not from both. Processor names are only in /proc/cpuinfo IIRC. So 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we'd need to mix sysfs and /proc/cpuinfo. Not easy with the current 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code, especially if you can't assume that all sockets are similar. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But definitely something that I will do at some point.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The way info objects would be attached to a Socket object I assume 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it would be ok to just attach such an object under Solaris but not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not for the other OSes.  Since one can look for the named object and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is either going to be there or not :-).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, I'll play around with this for Solaris.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the code, you might want to drop hwloc_setup_level() and 
</span><br>
<span class="quotelev2">&gt;&gt; copy it back into the caller. It will make the addition of info 
</span><br>
<span class="quotelev2">&gt;&gt; attributes much easier. I am looking at the Linux side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just pushed some code that will make this much easier on Linux (I 
</span><br>
<span class="quotelev1">&gt; may change the Solaris code similarly when I'll take time to test on a 
</span><br>
<span class="quotelev1">&gt; real solaris machine).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I have a patch that reads the CPU vendor and model in 
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo (x86 only for now) and use them to set Socket info 
</span><br>
<span class="quotelev1">&gt; attributes (CPUVendor and CPUModel) and name (CPUVendor+CPUModel).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before I push this, we need to clarify what we want. You were talking 
</span><br>
<span class="quotelev1">&gt; about &quot;CPUType&quot; and &quot;CPUModel&quot;. Can you give some example of what it 
</span><br>
<span class="quotelev1">&gt; would look like under Solaris? I want to compare to what I can get on 
</span><br>
<span class="quotelev1">&gt; Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Both type and model are character strings.  An example of what I 
<br>
currently store in the sysinfo structures are:
<br>
<p>type = &quot;SPARC&quot;
<br>
model = &quot;SPARC64_VI&quot;
<br>
<p>Other values for model are &quot;T1&quot;, &quot;T2&quot;, &quot;SPARC64_VII&quot;...
<br>
<p>--td
<br>
<p><p><span class="quotelev1">&gt; Brice
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2411/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2412.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>In reply to:</strong> <a href="2410.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2412.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2412.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
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
