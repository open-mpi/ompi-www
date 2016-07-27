<?
$subject_val = "Re: [hwloc-devel] multiple simultaneous topology inits?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 05:16:58 2011" -->
<!-- isoreceived="20110301101658" -->
<!-- sent="Tue, 01 Mar 2011 11:16:43 +0100" -->
<!-- isosent="20110301101643" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multiple simultaneous topology inits?" -->
<!-- id="1298974603.21890.99.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D6CC3A2.6050206_at_inria.fr" -->
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
<strong>Date:</strong> 2011-03-01 05:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2029.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2042.php">Brice Goglin: "[hwloc-devel] restrict branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2011-03-01 at 11:00 +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 01/03/2011 10:46, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; To calculate topology-based pinning schemes and do process pinning (like
</span><br>
<span class="quotelev2">&gt; &gt; done e.g. by OpenMPI or MVAPICH2) this is too long, when every process
</span><br>
<span class="quotelev2">&gt; &gt; (MPI task) or thread loads the topology in parallel. But exporting an
</span><br>
<span class="quotelev2">&gt; &gt; XML topology and using this for this purpose is inaccepteable, when
</span><br>
<span class="quotelev2">&gt; &gt; Linux cpusets are used, because one needs the topology of a subset of
</span><br>
<span class="quotelev2">&gt; &gt; the machine depending on the caller context. What we currently do is to
</span><br>
<span class="quotelev2">&gt; &gt; let only one process per machine load the topology, and distribute the
</span><br>
<span class="quotelev2">&gt; &gt; essentials needed for pinning to the remaining processes.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can still export one XML file per cpuset and load the right one in
</span><br>
<span class="quotelev1">&gt; each process. If the batch scheduler creates the cpuset, my feeling is
</span><br>
<span class="quotelev1">&gt; that the batch scheduler should create the XML file at the same time,
</span><br>
<span class="quotelev1">&gt; and do something like export HWLOC_XMLFILE=mycpuset.xml when launching
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<p>Yes, that's a good idea, as long as the extent of the cpuset is not
<br>
modified after the batch scheduler created it (e.g. because it is not
<br>
aware of SMT, or because the scheduler does not handle node access
<br>
policies correctly). Things are in progress regarding this for Torque,
<br>
so letting it create a HWLOC_XMLFILE is definitely worth to implement.
<br>
<p><span class="quotelev1">&gt; Also, in 1.2, we'll have a hwloc_topology_restrict() function which will
</span><br>
<span class="quotelev1">&gt; let you load the whole machine topology and then restrict it to whatever
</span><br>
<span class="quotelev1">&gt; part of it (a part is defined by a hwloc_cpuset_t). We'll need to make
</span><br>
<span class="quotelev1">&gt; sure that you'll have everything you need to get your cpuset's
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t.
</span><br>
<p>Thanks for the info. Such a thing is definitely needed.
<br>
<p>BK
<br>
<p><span class="quotelev1">&gt; Brice
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
<li><strong>Next message:</strong> <a href="2029.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2042.php">Brice Goglin: "[hwloc-devel] restrict branch"</a>
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
