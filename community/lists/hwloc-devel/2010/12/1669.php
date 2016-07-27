<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 15:43:19 2010" -->
<!-- isoreceived="20101203204319" -->
<!-- sent="Fri, 03 Dec 2010 21:42:50 +0100" -->
<!-- isosent="20101203204250" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="1291408970.5409.31.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4CF8B045.7020605_at_inria.fr" -->
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
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 15:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1670.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1668.php">Samuel Thibault: "Re: [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>In reply to:</strong> <a href="1665.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1670.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1670.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-12-03 at 09:54 +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 02/12/2010 22:25, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you have any feel for if there are particular bottlenecks in hwloc / lstopo that make it take so long?  I wonder if we should just attack those (if possible)...?  Samuel and Brice have done all the work in the guts of the API, so they might know offhand if there are places that can be optimized or not...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; Hmm. I did no profiling. The machines in question have 64 NUMA nodes
</span><br>
<span class="quotelev2">&gt; &gt; with 16 logical CPUs, each. The topology depth is 10. So parsing
</span><br>
<span class="quotelev2">&gt; &gt; of /sys/devices/system/node/* and evaluating the distance matrix to
</span><br>
<span class="quotelev2">&gt; &gt; fiddle out the topology tree should be quite expensive. But I guess this
</span><br>
<span class="quotelev2">&gt; &gt; statement is trivial and does not help very much.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We should really encourage people to use XML in such cases. Setting
</span><br>
<span class="quotelev1">&gt; HWLOC_XMLFILE=/path/to/exported/file.xml in the environment should just
</span><br>
<span class="quotelev1">&gt; work (as long as you update the XML file major hwloc releases or os).
</span><br>
<span class="quotelev1">&gt; Maybe we should add a dedicated section about this in the documentation?
</span><br>
<span class="quotelev1">&gt; Something like &quot;Speeding up hwloc on large nodes&quot;? And maybe even
</span><br>
<span class="quotelev1">&gt; encourage distro-packager to create a XML export file under /var/lib
</span><br>
<span class="quotelev1">&gt; with an advice to add HWLOC_XMLFILE to /etc/environment if they care
</span><br>
<span class="quotelev1">&gt; about hwloc/HPC?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway Bernd, can you export a XML on this nice machine and reload it
</span><br>
<span class="quotelev1">&gt; and see how long it takes? I hope all the bottlenecks are in the Linux
</span><br>
<span class="quotelev1">&gt; backend parsing /sys and /proc, not in the actual hwloc core.
</span><br>
<p>I'm not sure if I understood. From my point of view it makes no sense to
<br>
create an XML representation of the topology with hwloc, and then read
<br>
this XML in again to be able to dive into it to figure out something.
<br>
When there is an API that provides direct access to parts of the
<br>
topology once it is constructed, then the XML thing is useless
<br>
additional work.
<br>
<p>However, one may prepare a static XML representation of the machine
<br>
topology at boot time and store it somewhere for public access, as you
<br>
suggested (or as I understood you). But this would not help us in many
<br>
of our use cases. We have to analyze topologies that do not represent a
<br>
whole machine. We analyze topologies that are bound to cpusets. We do
<br>
this e.g. to construct pinning schemes for MPI applications that run
<br>
inside of batch jobs, which get their cpusets created on the fly
<br>
depending on their resource requests and current load of the machine.
<br>
You find current implementations of the strategy of calculating pinning
<br>
schemes based on hwloc topology information e.g. in recent MVAPICH2. I
<br>
cannot see advantages of XML representations for this purpose. The
<br>
problem here is rather, if every task running on a node should read the
<br>
topology and figure out on which CPU it should pin itself, or if one
<br>
does this by one master task on a node, and communicate the result to
<br>
the others. But this is outside of hwloc.
<br>
<p><span class="quotelev1">&gt; By the way, we're not the only project with little scalability problems
</span><br>
<span class="quotelev1">&gt; on very large machines: <a href="https://lkml.org/lkml/2010/12/3/19">https://lkml.org/lkml/2010/12/3/19</a> :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1670.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1668.php">Samuel Thibault: "Re: [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>In reply to:</strong> <a href="1665.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1670.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1670.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
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
