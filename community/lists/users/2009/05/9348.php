<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 16:50:10 2009" -->
<!-- isoreceived="20090514205010" -->
<!-- sent="Thu, 14 May 2009 22:49:57 +0200" -->
<!-- isosent="20090514204957" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2" -->
<!-- id="1242334197.6645.1.camel_at_skutt.ydc.se" -->
<!-- inreplyto="4A0C8097.3060505_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 16:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9347.php">Joshua Bernstein: "[OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9347.php">Joshua Bernstein: "[OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-05-14 at 13:35 -0700, Joshua Bernstein wrote:
<br>
<span class="quotelev1">&gt; Greetings All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	I'm trying to build OpenMPI 1.3.2 with the Pathscale compiler, version 3.2. A 
</span><br>
<span class="quotelev1">&gt; bit of the way through the build the compiler dies with what it things is a bad 
</span><br>
<span class="quotelev1">&gt; optimization. Has anybody else seen this, or know a work around for it? I'm 
</span><br>
<span class="quotelev1">&gt; going to take it up with Pathscale of course, but I thought I'd throw it out here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---SNIP---
</span><br>
<span class="quotelev1">&gt; /opt/pathscale/bin/pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib 
</span><br>
<span class="quotelev1">&gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE -mp 
</span><br>
<span class="quotelev1">&gt; -DVT_OMP -O3 -DNDEBUG -finline-functions -pthread -MT vtfilter-vt_tracefilter.o 
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-vt_tracefilter.o 
</span><br>
<span class="quotelev1">&gt; `test -f 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault in Global Optimization -- Dead Store Elimination phase.
</span><br>
<span class="quotelev1">&gt; Error: Signal Segmentation fault in phase Global Optimization -- Dead Store 
</span><br>
<span class="quotelev1">&gt; Elimination -- processing aborted
</span><br>
<span class="quotelev1">&gt; *** Internal stack backtrace:
</span><br>
<span class="quotelev1">&gt; pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
</span><br>
<p>Haven't seen it. But I'm only using -O2 when building openmpi.
<br>
Report it quickly, if we're lucky they might get a fix into the 3.3
<br>
release that is due out very soon. (I just got the beta yesterday)
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9347.php">Joshua Bernstein: "[OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9347.php">Joshua Bernstein: "[OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
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
