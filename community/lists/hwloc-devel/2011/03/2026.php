<?
$subject_val = "Re: [hwloc-devel] multiple simultaneous topology inits?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 04:47:06 2011" -->
<!-- isoreceived="20110301094706" -->
<!-- sent="Tue, 01 Mar 2011 10:46:45 +0100" -->
<!-- isosent="20110301094645" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multiple simultaneous topology inits?" -->
<!-- id="1298972805.21890.90.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D6C1105.9050608_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] multiple simultaneous topology inits?<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 04:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/2025.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2029.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2011-02-28 at 22:17 +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 28/02/2011 22:04, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; That being said, someone cited on this list a long time ago that running the hwloc detection on very large machines (e.g., SGI machines with 1000+ cores) takes on the order of seconds (because it traverses /sys, etc.).  So if you want your tool to be used on machines like that, then it might be better to do the discovery once and share that data among your threads.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; People running on such large machines should really export the machine
</span><br>
<span class="quotelev1">&gt; topology to XML once and reload from there all the time.
</span><br>
<p>Btw. lstopo on such a large machine (64 NUMA nodes, 1024 logical CPUs)
<br>
takes about 0.6 seconds at our site.
<br>
<p>This is accepteable for scripts, that run only frequently. It is also
<br>
accepteable for executables that need the topology info at start time
<br>
(e.g. pbs_mom of Torque).
<br>
<p>To calculate topology-based pinning schemes and do process pinning (like
<br>
done e.g. by OpenMPI or MVAPICH2) this is too long, when every process
<br>
(MPI task) or thread loads the topology in parallel. But exporting an
<br>
XML topology and using this for this purpose is inaccepteable, when
<br>
Linux cpusets are used, because one needs the topology of a subset of
<br>
the machine depending on the caller context. What we currently do is to
<br>
let only one process per machine load the topology, and distribute the
<br>
essentials needed for pinning to the remaining processes.
<br>
<p>BK
<br>
<p><span class="quotelev1">&gt; Brice
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
<li><strong>Next message:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/2025.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2029.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
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
