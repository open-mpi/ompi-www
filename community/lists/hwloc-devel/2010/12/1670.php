<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 15:51:33 2010" -->
<!-- isoreceived="20101203205133" -->
<!-- sent="Fri, 03 Dec 2010 21:51:26 +0100" -->
<!-- isosent="20101203205126" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="4CF9584E.9080604_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1291408970.5409.31.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] SWIG bindings<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 15:51:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1671.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2903)"</a>
<li><strong>Previous message:</strong> <a href="1669.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1669.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1658.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/12/2010 21:42, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; We should really encourage people to use XML in such cases. Setting
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_XMLFILE=/path/to/exported/file.xml in the environment should just
</span><br>
<span class="quotelev2">&gt;&gt; work (as long as you update the XML file major hwloc releases or os).
</span><br>
<span class="quotelev2">&gt;&gt; Maybe we should add a dedicated section about this in the documentation?
</span><br>
<span class="quotelev2">&gt;&gt; Something like &quot;Speeding up hwloc on large nodes&quot;? And maybe even
</span><br>
<span class="quotelev2">&gt;&gt; encourage distro-packager to create a XML export file under /var/lib
</span><br>
<span class="quotelev2">&gt;&gt; with an advice to add HWLOC_XMLFILE to /etc/environment if they care
</span><br>
<span class="quotelev2">&gt;&gt; about hwloc/HPC?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway Bernd, can you export a XML on this nice machine and reload it
</span><br>
<span class="quotelev2">&gt;&gt; and see how long it takes? I hope all the bottlenecks are in the Linux
</span><br>
<span class="quotelev2">&gt;&gt; backend parsing /sys and /proc, not in the actual hwloc core.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I'm not sure if I understood. From my point of view it makes no sense to
</span><br>
<span class="quotelev1">&gt; create an XML representation of the topology with hwloc, and then read
</span><br>
<span class="quotelev1">&gt; this XML in again to be able to dive into it to figure out something.
</span><br>
<span class="quotelev1">&gt; When there is an API that provides direct access to parts of the
</span><br>
<span class="quotelev1">&gt; topology once it is constructed, then the XML thing is useless
</span><br>
<span class="quotelev1">&gt; additional work.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Don't see the XML as a way to represent the topology and traverse it.
<br>
Just see it as a cache that you can read much faster than /proc and
<br>
/sys. Once you load the XML, you get the usual hwloc API.
<br>
<p><span class="quotelev1">&gt; But this would not help us in many
</span><br>
<span class="quotelev1">&gt; of our use cases. We have to analyze topologies that do not represent a
</span><br>
<span class="quotelev1">&gt; whole machine. We analyze topologies that are bound to cpusets. We do
</span><br>
<span class="quotelev1">&gt; this e.g. to construct pinning schemes for MPI applications that run
</span><br>
<span class="quotelev1">&gt; inside of batch jobs, which get their cpusets created on the fly
</span><br>
<span class="quotelev1">&gt; depending on their resource requests and current load of the machine.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Right, if the cpuset changes, caching in XML is useless (except if we
<br>
implement a way to restrict a given topology in the future).
<br>
<p><span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; problem here is rather, if every task running on a node should read the
</span><br>
<span class="quotelev1">&gt; topology and figure out on which CPU it should pin itself, or if one
</span><br>
<span class="quotelev1">&gt; does this by one master task on a node, and communicate the result to
</span><br>
<span class="quotelev1">&gt; the others. But this is outside of hwloc.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Well, having hundreds of processes read /proc and /sys at the same time
<br>
is also another reason to use XML. The master can read the topology once
<br>
and pass it to all other processes through XML-files or
<br>
XML-buffers-over-socket. I assume that's what Open MPI will do in the
<br>
near future.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1671.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2903)"</a>
<li><strong>Previous message:</strong> <a href="1669.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1669.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1658.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
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
