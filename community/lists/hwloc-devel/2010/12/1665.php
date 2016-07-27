<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 03:54:35 2010" -->
<!-- isoreceived="20101203085435" -->
<!-- sent="Fri, 03 Dec 2010 09:54:29 +0100" -->
<!-- isosent="20101203085429" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="4CF8B045.7020605_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1291325144.2480.327.camel_at_kallies" -->
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
<strong>Date:</strong> 2010-12-03 03:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1666.php">Jiri Hladky: "[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Previous message:</strong> <a href="1664.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2897)"</a>
<li><strong>In reply to:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1669.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1669.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 02/12/2010 22:25, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any feel for if there are particular bottlenecks in hwloc / lstopo that make it take so long?  I wonder if we should just attack those (if possible)...?  Samuel and Brice have done all the work in the guts of the API, so they might know offhand if there are places that can be optimized or not...
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Hmm. I did no profiling. The machines in question have 64 NUMA nodes
</span><br>
<span class="quotelev1">&gt; with 16 logical CPUs, each. The topology depth is 10. So parsing
</span><br>
<span class="quotelev1">&gt; of /sys/devices/system/node/* and evaluating the distance matrix to
</span><br>
<span class="quotelev1">&gt; fiddle out the topology tree should be quite expensive. But I guess this
</span><br>
<span class="quotelev1">&gt; statement is trivial and does not help very much.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We should really encourage people to use XML in such cases. Setting
<br>
HWLOC_XMLFILE=/path/to/exported/file.xml in the environment should just
<br>
work (as long as you update the XML file major hwloc releases or os).
<br>
Maybe we should add a dedicated section about this in the documentation?
<br>
Something like &quot;Speeding up hwloc on large nodes&quot;? And maybe even
<br>
encourage distro-packager to create a XML export file under /var/lib
<br>
with an advice to add HWLOC_XMLFILE to /etc/environment if they care
<br>
about hwloc/HPC?
<br>
<p>Anyway Bernd, can you export a XML on this nice machine and reload it
<br>
and see how long it takes? I hope all the bottlenecks are in the Linux
<br>
backend parsing /sys and /proc, not in the actual hwloc core.
<br>
<p>By the way, we're not the only project with little scalability problems
<br>
on very large machines: <a href="https://lkml.org/lkml/2010/12/3/19">https://lkml.org/lkml/2010/12/3/19</a> :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1666.php">Jiri Hladky: "[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Previous message:</strong> <a href="1664.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2897)"</a>
<li><strong>In reply to:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1669.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1669.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
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
