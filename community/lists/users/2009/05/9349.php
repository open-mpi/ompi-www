<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 19:26:47 2009" -->
<!-- isoreceived="20090514232647" -->
<!-- sent="Thu, 14 May 2009 17:26:38 -0600" -->
<!-- isosent="20090514232638" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2" -->
<!-- id="1B8075B2-726B-4AD3-9551-D60974D67C4B_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1242334197.6645.1.camel_at_skutt.ydc.se" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 19:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9350.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>Previous message:</strong> <a href="9348.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9348.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9353.php">David O. Gunter: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9353.php">David O. Gunter: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Last I checked when we were building here, I'm not sure Pathscale  
<br>
supports -O3. IIRC, O2 is the max supported value, though it has been  
<br>
awhile since I played with it.
<br>
<p>Have you checked the man page for it?
<br>
<p>It could also be something in the VampirTrace code since that is where  
<br>
you are failing. That is a contributed code - not part of OMPI itself  
<br>
- so we would have to check with those developers.
<br>
<p><p>On May 14, 2009, at 2:49 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2009-05-14 at 13:35 -0700, Joshua Bernstein wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Greetings All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	I'm trying to build OpenMPI 1.3.2 with the Pathscale compiler,  
</span><br>
<span class="quotelev2">&gt;&gt; version 3.2. A
</span><br>
<span class="quotelev2">&gt;&gt; bit of the way through the build the compiler dies with what it  
</span><br>
<span class="quotelev2">&gt;&gt; things is a bad
</span><br>
<span class="quotelev2">&gt;&gt; optimization. Has anybody else seen this, or know a work around for  
</span><br>
<span class="quotelev2">&gt;&gt; it? I'm
</span><br>
<span class="quotelev2">&gt;&gt; going to take it up with Pathscale of course, but I thought I'd  
</span><br>
<span class="quotelev2">&gt;&gt; throw it out here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---SNIP---
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pathscale/bin/pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../ 
</span><br>
<span class="quotelev2">&gt;&gt; extlib/otf/otflib
</span><br>
<span class="quotelev2">&gt;&gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  - 
</span><br>
<span class="quotelev2">&gt;&gt; D_GNU_SOURCE -mp
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_OMP -O3 -DNDEBUG -finline-functions -pthread -MT vtfilter- 
</span><br>
<span class="quotelev2">&gt;&gt; vt_tracefilter.o
</span><br>
<span class="quotelev2">&gt;&gt; -MD -MP -MF .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter- 
</span><br>
<span class="quotelev2">&gt;&gt; vt_tracefilter.o
</span><br>
<span class="quotelev2">&gt;&gt; `test -f 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
</span><br>
<span class="quotelev2">&gt;&gt; Signal: Segmentation fault in Global Optimization -- Dead Store  
</span><br>
<span class="quotelev2">&gt;&gt; Elimination phase.
</span><br>
<span class="quotelev2">&gt;&gt; Error: Signal Segmentation fault in phase Global Optimization --  
</span><br>
<span class="quotelev2">&gt;&gt; Dead Store
</span><br>
<span class="quotelev2">&gt;&gt; Elimination -- processing aborted
</span><br>
<span class="quotelev2">&gt;&gt; *** Internal stack backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Haven't seen it. But I'm only using -O2 when building openmpi.
</span><br>
<span class="quotelev1">&gt; Report it quickly, if we're lucky they might get a fix into the 3.3
</span><br>
<span class="quotelev1">&gt; release that is due out very soon. (I just got the beta yesterday)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9350.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>Previous message:</strong> <a href="9348.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9348.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9353.php">David O. Gunter: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9353.php">David O. Gunter: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
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
