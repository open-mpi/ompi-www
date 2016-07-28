<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 11:07:38 2012" -->
<!-- isoreceived="20121108160738" -->
<!-- sent="Thu, 8 Nov 2012 11:07:18 -0500" -->
<!-- isosent="20121108160718" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI" -->
<!-- id="E8674E65-7947-4B08-8594-98C5BFEFFF8B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F168EF8_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 11:07:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20675.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20675.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20754.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20754.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2012, at 10:17 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, I definitely appreciate the new, hotness of hwloc.  I just couldn't tell from the documentation or the web page how or if it was being used by OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still work with OpenMPI 1.4.x and now that I've looked into the builds, I think I understand that PLPA is used in 1.4 and hwloc is brought in as an MCA module in 1.6.x.
</span><br>
<p>Correct.  PLPA was a first attempt at a generic processor affinity solution.  hwloc is a 2nd generation, much Much MUCH better solution than PLPA (we wholly killed PLPA after the INRIA guys designed hwloc).
<br>
<p><span class="quotelev1">&gt; Re: layering, I believe you are saying that the relationship to libnuma is not one where hwloc is adding higher-level functionalities to libnuma, but rather hwloc is a much improved alternative except for a few system calls it makes via libnuma out of necessity or convenience.
</span><br>
<p>Correct.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20675.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20675.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20754.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20754.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI"</a>
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
