<?
$subject_val = "Re: [OMPI users] How is hwloc used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 19:19:52 2012" -->
<!-- isoreceived="20121108001952" -->
<!-- sent="Thu, 08 Nov 2012 01:19:46 +0100" -->
<!-- isosent="20121108001946" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How is hwloc used by OpenMPI" -->
<!-- id="509AFAA2.1040207_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1F99F8F6-47FE-444F-89C2-6E051672FB55_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 19:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20659.php">Jens Glaser: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20655.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20660.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20660.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20675.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/11/2012 21:26, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Nov 7, 2012, at 1:33 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see hwloc is a subproject hosted under OpenMPI but, in reading the documentation, I was unable to figure out if hwloc is a module within OpenMPI, or if some of the code base is borrowed into OpenMPI, or something else.  Is hwloc used by OpenMPI internally?  Is it a layer above libnuma?  Or is it just a project that is useful to OpenMPI in support of targeting various new platforms?
</span><br>
<span class="quotelev1">&gt; Open MPI uses hwloc internally for three main things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. all of the processor affinity options to mpirun (e.g., --bind-to-core)
</span><br>
<span class="quotelev1">&gt; 2. all its internal memory affinity functionality
</span><br>
<span class="quotelev1">&gt; 3. gather topology information about the machine it's running on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3 isn't used too heavily yet -- that will be more developed over time (shared memory collectives have some obvious applications here).  But we use it to know if processes are in the same NUMA domain, which OpenFabrics devices are &quot;near&quot; to a given process' NUMA domain, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But hwloc also stands alone quite well; it actually has nothing to do with MPI.  So it made sense to keep it as a standalone library+tool suite, too.
</span><br>
<p>Edwin's question about libnuma also deserves an answer, and I need to
<br>
prepare my marketing material for SC next week :)
<br>
<p>hwloc may somehow be considered as a layer above libnuma but:
<br>
* hwloc is more portable (works on non-NUMA and non-Linux platforms)
<br>
* hwloc does everything libnuma does, but it does a lot more (everything
<br>
that isn't related to NUMA)
<br>
* hwloc only uses libnuma for some syscalls (memory binding and
<br>
migration syscalls are not in the libc unfortunately). We don't use
<br>
anything else because we don't want to rely on their numa_*() interface
<br>
(they broke the ABI in the past, things are not well documented, and
<br>
their API is broken is some cases)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20659.php">Jens Glaser: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20655.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20660.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20660.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20675.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
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
