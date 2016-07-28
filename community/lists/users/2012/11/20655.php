<?
$subject_val = "Re: [OMPI users] How is hwloc used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 15:26:22 2012" -->
<!-- isoreceived="20121107202622" -->
<!-- sent="Wed, 7 Nov 2012 15:26:17 -0500" -->
<!-- isosent="20121107202617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How is hwloc used by OpenMPI" -->
<!-- id="1F99F8F6-47FE-444F-89C2-6E051672FB55_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F168D6E_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How is hwloc used by OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 15:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20654.php">Josh Hursey: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20653.php">Blosch, Edwin L: "[OMPI users] How is hwloc used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20658.php">Brice Goglin: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20658.php">Brice Goglin: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2012, at 1:33 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I see hwloc is a subproject hosted under OpenMPI but, in reading the documentation, I was unable to figure out if hwloc is a module within OpenMPI, or if some of the code base is borrowed into OpenMPI, or something else.  Is hwloc used by OpenMPI internally?  Is it a layer above libnuma?  Or is it just a project that is useful to OpenMPI in support of targeting various new platforms?
</span><br>
<p>Open MPI uses hwloc internally for three main things:
<br>
<p>1. all of the processor affinity options to mpirun (e.g., --bind-to-core)
<br>
2. all its internal memory affinity functionality
<br>
3. gather topology information about the machine it's running on
<br>
<p>#3 isn't used too heavily yet -- that will be more developed over time (shared memory collectives have some obvious applications here).  But we use it to know if processes are in the same NUMA domain, which OpenFabrics devices are &quot;near&quot; to a given process' NUMA domain, etc.
<br>
<p>But hwloc also stands alone quite well; it actually has nothing to do with MPI.  So it made sense to keep it as a standalone library+tool suite, too.
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
<li><strong>Next message:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20654.php">Josh Hursey: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20653.php">Blosch, Edwin L: "[OMPI users] How is hwloc used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20658.php">Brice Goglin: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20658.php">Brice Goglin: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
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
