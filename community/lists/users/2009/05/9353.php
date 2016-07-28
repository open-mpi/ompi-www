<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 09:17:30 2009" -->
<!-- isoreceived="20090515131730" -->
<!-- sent="Fri, 15 May 2009 07:17:25 -0600 (MDT)" -->
<!-- isosent="20090515131725" -->
<!-- name="David O. Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2" -->
<!-- id="13286.128.165.0.81.1242393445.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1B8075B2-726B-4AD3-9551-D60974D67C4B_at_open-mpi.org" -->
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
<strong>From:</strong> David O. Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 09:17:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9354.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9352.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>In reply to:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9354.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9354.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pathscale supports -O3 (at least as of the 3.1 line).  Here are some
<br>
suggestions from the 3.2 Users Manual you may also want to try.
<br>
<p>-david
<br>
<p><p>If there are numerical problems with -O3 -OPT:Ofast, then try either of the
<br>
following:
<br>
<p>&nbsp;&nbsp;-O3 -OPT:Ofast:ro=1
<br>
&nbsp;&nbsp;-O3 -OPT:Ofast:div_split=OFF
<br>
<p>Note that &#146;ro&#146; is short for roundoff.
<br>
<p>-Ofast is equivalent to -O3 -ipa -OPT:Ofast -fno-math-errno -ffast-math
<br>
so similar cautions apply to it as to -O3 -OPT:Ofast.
<br>
<p>To use interprocedural analysis without the &quot;Ofast-type&quot; optimizations,
<br>
use either of the following:
<br>
&nbsp;&nbsp;-O3 -ipa
<br>
&nbsp;&nbsp;-O2 -ipa
<br>
<p>Testing different optimizations can be automated by pathopt2. This program
<br>
compiles and runs your program with a variety of compiler options and
<br>
creates a sorted list of the execution times for each run.
<br>
<p><pre>
--
David Gunter
Los Alamos National Laboratory
&gt; Last I checked when we were building here, I'm not sure Pathscale
&gt; supports -O3. IIRC, O2 is the max supported value, though it has been
&gt; awhile since I played with it.
&gt;
&gt; Have you checked the man page for it?
&gt;
&gt; It could also be something in the VampirTrace code since that is where
&gt; you are failing. That is a contributed code - not part of OMPI itself
&gt; - so we would have to check with those developers.
&gt;
&gt;
&gt; On May 14, 2009, at 2:49 PM, &#197;ke Sandgren wrote:
&gt;
&gt;&gt; On Thu, 2009-05-14 at 13:35 -0700, Joshua Bernstein wrote:
&gt;&gt;&gt; Greetings All,
&gt;&gt;&gt;
&gt;&gt;&gt; 	I'm trying to build OpenMPI 1.3.2 with the Pathscale compiler,
&gt;&gt;&gt; version 3.2. A
&gt;&gt;&gt; bit of the way through the build the compiler dies with what it
&gt;&gt;&gt; things is a bad
&gt;&gt;&gt; optimization. Has anybody else seen this, or know a work around for
&gt;&gt;&gt; it? I'm
&gt;&gt;&gt; going to take it up with Pathscale of course, but I thought I'd
&gt;&gt;&gt; throw it out here:
&gt;&gt;&gt;
&gt;&gt;&gt; ---SNIP---
&gt;&gt;&gt; /opt/pathscale/bin/pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../
&gt;&gt;&gt; extlib/otf/otflib
&gt;&gt;&gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -
&gt;&gt;&gt; D_GNU_SOURCE -mp
&gt;&gt;&gt; -DVT_OMP -O3 -DNDEBUG -finline-functions -pthread -MT vtfilter-
&gt;&gt;&gt; vt_tracefilter.o
&gt;&gt;&gt; -MD -MP -MF .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-
&gt;&gt;&gt; vt_tracefilter.o
&gt;&gt;&gt; `test -f 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
&gt;&gt;&gt; Signal: Segmentation fault in Global Optimization -- Dead Store
&gt;&gt;&gt; Elimination phase.
&gt;&gt;&gt; Error: Signal Segmentation fault in phase Global Optimization --
&gt;&gt;&gt; Dead Store
&gt;&gt;&gt; Elimination -- processing aborted
&gt;&gt;&gt; *** Internal stack backtrace:
&gt;&gt;&gt; pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
&gt;&gt;
&gt;&gt; Haven't seen it. But I'm only using -O2 when building openmpi.
&gt;&gt; Report it quickly, if we're lucky they might get a fix into the 3.3
&gt;&gt; release that is due out very soon. (I just got the beta yesterday)
&gt;&gt;
&gt;&gt; --
&gt;&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
&gt;&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
&gt;&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9354.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9352.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>In reply to:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9354.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9354.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
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
