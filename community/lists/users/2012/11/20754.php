<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 23 14:45:11 2012" -->
<!-- isoreceived="20121123194511" -->
<!-- sent="Fri, 23 Nov 2012 14:45:05 -0500" -->
<!-- isosent="20121123194505" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI" -->
<!-- id="CAHwLALM=DBhkjicDdeuBnw-LmMDFDXZb1HR+EyeT_rkHpuqOTw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E8674E65-7947-4B08-8594-98C5BFEFFF8B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-23 14:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20755.php">Ralph Castain: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20676.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 8, 2012 at 11:07 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Correct.  PLPA was a first attempt at a generic processor affinity solution.  hwloc is a 2nd generation, much Much MUCH better solution than PLPA (we wholly killed PLPA
</span><br>
<span class="quotelev1">&gt; after the INRIA guys designed hwloc).
</span><br>
<p>Edwin,
<br>
<p>We ported OGS/Grid Engine to hwloc 1.5 years ago (the original core
<br>
binding code in Grid Engine uses PLPA).
<br>
<p><a href="http://gridscheduler.sourceforge.net/projects/hwloc/GridEnginehwloc.html">http://gridscheduler.sourceforge.net/projects/hwloc/GridEnginehwloc.html</a>
<br>
<p><p><span class="quotelev1">&gt;From an API consumer (both PLPA &amp; hwloc) point of view, some of the
</span><br>
important hwloc advantages are:
<br>
<p>1) Grid Engine now can use the same piece of code for different
<br>
platforms: Linux, Solaris, AIX, Mac OS X, FreeBSD, Tru64, HP-UX,
<br>
Windows. Before with PLPA, we only have support for Linux &amp; Solaris.
<br>
<p>2) Support for newer CPU architectures &amp; hardware. As the development
<br>
of PLPA stopped a few years ago, many of the newer architectures did
<br>
not get recognized properly. We switched over to hwloc when the
<br>
original Grid Engine core binding code stopped working on the AMD
<br>
Magny-Cours (Opteron 6100 series).
<br>
<p>To be fair to PLPA, had the development continued, then it should have
<br>
no issues with those new architectures. But then, the data structures
<br>
of hwloc seem to be able to handle newer hardware components more
<br>
nicely!
<br>
<p><p>We now use information from hwloc to optimize job placement on AMD
<br>
Bulldozers (including Piledriver). Currently hwloc just treats each of
<br>
the Bulldozer module as 2 cores, so we still have to code a bit of
<br>
logic in the Grid Engine code to do what we need.
<br>
<p><a href="http://blogs.scalablelogic.com/2012/07/optimizing-grid-engine-for-amd.html">http://blogs.scalablelogic.com/2012/07/optimizing-grid-engine-for-amd.html</a>
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Re: layering, I believe you are saying that the relationship to libnuma is not one where hwloc is adding higher-level functionalities to libnuma, but rather hwloc is a much improved alternative except for a few system calls it makes via libnuma out of necessity or convenience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20755.php">Ralph Castain: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20676.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<!-- nextthread="start" -->
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
