<?
$subject_val = "Re: [hwloc-devel] multiple simultaneous topology inits?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 06:35:35 2011" -->
<!-- isoreceived="20110301113535" -->
<!-- sent="Tue, 1 Mar 2011 06:34:59 -0500" -->
<!-- isosent="20110301113459" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multiple simultaneous topology inits?" -->
<!-- id="81E3D4A0-995C-4775-885F-7F976E84D6CE_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1298972805.21890.90.camel_at_kallies" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 06:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2030.php">Brice Goglin: "[hwloc-devel] pgi 11.1"</a>
<li><strong>Previous message:</strong> <a href="2028.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/2016.php">Samuel Thibault: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW OMPI is moving to a model like that. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Mar 1, 2011, at 4:47 AM, &quot;Bernd Kallies&quot; &lt;kallies_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2011-02-28 at 22:17 +0100, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 28/02/2011 22:04, Jeff Squyres a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said, someone cited on this list a long time ago that running the hwloc detection on very large machines (e.g., SGI machines with 1000+ cores) takes on the order of seconds (because it traverses /sys, etc.).  So if you want your tool to be used on machines like that, then it might be better to do the discovery once and share that data among your threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; People running on such large machines should really export the machine
</span><br>
<span class="quotelev2">&gt;&gt; topology to XML once and reload from there all the time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Btw. lstopo on such a large machine (64 NUMA nodes, 1024 logical CPUs)
</span><br>
<span class="quotelev1">&gt; takes about 0.6 seconds at our site.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is accepteable for scripts, that run only frequently. It is also
</span><br>
<span class="quotelev1">&gt; accepteable for executables that need the topology info at start time
</span><br>
<span class="quotelev1">&gt; (e.g. pbs_mom of Torque).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To calculate topology-based pinning schemes and do process pinning (like
</span><br>
<span class="quotelev1">&gt; done e.g. by OpenMPI or MVAPICH2) this is too long, when every process
</span><br>
<span class="quotelev1">&gt; (MPI task) or thread loads the topology in parallel. But exporting an
</span><br>
<span class="quotelev1">&gt; XML topology and using this for this purpose is inaccepteable, when
</span><br>
<span class="quotelev1">&gt; Linux cpusets are used, because one needs the topology of a subset of
</span><br>
<span class="quotelev1">&gt; the machine depending on the caller context. What we currently do is to
</span><br>
<span class="quotelev1">&gt; let only one process per machine load the topology, and distribute the
</span><br>
<span class="quotelev1">&gt; essentials needed for pinning to the remaining processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Bernd Kallies
</span><br>
<span class="quotelev1">&gt; Konrad-Zuse-Zentrum f&#195;&#188;r Informationstechnik Berlin
</span><br>
<span class="quotelev1">&gt; Takustr. 7
</span><br>
<span class="quotelev1">&gt; 14195 Berlin
</span><br>
<span class="quotelev1">&gt; Tel: +49-30-84185-270
</span><br>
<span class="quotelev1">&gt; Fax: +49-30-84185-311
</span><br>
<span class="quotelev1">&gt; e-mail: kallies_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2030.php">Brice Goglin: "[hwloc-devel] pgi 11.1"</a>
<li><strong>Previous message:</strong> <a href="2028.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/2016.php">Samuel Thibault: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
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
