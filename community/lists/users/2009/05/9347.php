<?
$subject_val = "[OMPI users] OpenMPI 1.3.2 with PathScale 3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 16:35:56 2009" -->
<!-- isoreceived="20090514203556" -->
<!-- sent="Thu, 14 May 2009 13:35:35 -0700" -->
<!-- isosent="20090514203535" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3.2 with PathScale 3.2" -->
<!-- id="4A0C8097.3060505_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3.2 with PathScale 3.2<br>
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 16:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9348.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9346.php">Gilliland, Spenser D: "[OMPI users] Cross-Compile MPI Programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9348.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9348.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings All,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm trying to build OpenMPI 1.3.2 with the Pathscale compiler, version 3.2. A 
<br>
bit of the way through the build the compiler dies with what it things is a bad 
<br>
optimization. Has anybody else seen this, or know a work around for it? I'm 
<br>
going to take it up with Pathscale of course, but I thought I'd throw it out here:
<br>
<p>---SNIP---
<br>
/opt/pathscale/bin/pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib 
<br>
-I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE -mp 
<br>
-DVT_OMP -O3 -DNDEBUG -finline-functions -pthread -MT vtfilter-vt_tracefilter.o 
<br>
-MD -MP -MF .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-vt_tracefilter.o 
<br>
`test -f 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
<br>
Signal: Segmentation fault in Global Optimization -- Dead Store Elimination phase.
<br>
Error: Signal Segmentation fault in phase Global Optimization -- Dead Store 
<br>
Elimination -- processing aborted
<br>
*** Internal stack backtrace:
<br>
pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
<br>
Please report this problem to &lt;support_at_[hidden]&gt;.
<br>
Problem report saved as /root/.ekopath-bugs/pathCC_error_LvXsJk.ii
<br>
Please review the above file and, if possible, attach it to your problem report.
<br>
<p>bash-3.00# /opt/pathscale/bin/pathCC -version
<br>
PathScale(TM) Compiler Suite: Version 3.2
<br>
Built on: 2008-06-16 16:45:36 -0700
<br>
Thread model: posix
<br>
GNU gcc version 3.3.1 (PathScale 3.2 driver)
<br>
<p>Copyright 2000, 2001 Silicon Graphics, Inc.  All Rights Reserved.
<br>
Copyright 2002, 2003, 2004, 2005, 2006 PathScale, Inc.  All Rights Reserved.
<br>
Copyright 2006, 2007 QLogic Corporation.  All Rights Reserved.
<br>
Copyright 2007, 2008 PathScale LLC.  All Rights Reserved.
<br>
See complete copyright, patent and legal notices in the
<br>
/opt/pathscale/share/doc/pathscale-compilers-3.2/LEGAL.pdf file.
<br>
---END SNIP---
<br>
<p>-Joshua Bernstein
<br>
Software Engineer
<br>
Penguin Computing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9348.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9346.php">Gilliland, Spenser D: "[OMPI users] Cross-Compile MPI Programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9348.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9348.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
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
