<?
$subject_val = "[OMPI devel] On Host Topology Description (carto)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 15:10:15 2008" -->
<!-- isoreceived="20080111201015" -->
<!-- sent="Fri, 11 Jan 2008 15:10:06 -0500" -->
<!-- isosent="20080111201006" -->
<!-- name="Rayson Ho" -->
<!-- email="rayrayson_at_[hidden]" -->
<!-- subject="[OMPI devel] On Host Topology Description (carto)" -->
<!-- id="a0ba9d430801111210g5ac8e1d6je6cff531f1a82b6d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] On Host Topology Description (carto)<br>
<strong>From:</strong> Rayson Ho (<em>rayrayson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 15:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2968.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Previous message:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The OnHostTopologyDescription is actually quite similar to the
<br>
Locality Group API and MPO on Solaris:
<br>
<p><a href="http://www.opensolaris.org/os/community/performance/mpo_overview.pdf">http://www.opensolaris.org/os/community/performance/mpo_overview.pdf</a>
<br>
<a href="http://www.opensolaris.org/os/community/performance/numa/mpo_update.pdf">http://www.opensolaris.org/os/community/performance/numa/mpo_update.pdf</a>
<br>
<p>And we have some discussions on the OpenSolaris forum, &quot;NUMA and
<br>
interconnect transfers&quot;:
<br>
<a href="http://opensolaris.org/jive/thread.jspa?messageID=185268">http://opensolaris.org/jive/thread.jspa?messageID=185268</a>
<br>
<p>Rayson
<br>
<p><p>On Jan 11, 2008 6:22 AM, Pak Lui &lt;Pak.Lui_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription">https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson Ho wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm from the Sun Grid Engine (SGE) project (
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://gridengine.sunsource.net">http://gridengine.sunsource.net</a> ). I am working on processor affinity
</span><br>
<span class="quotelev2">&gt; &gt; support for SGE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In 2005, we had some discussions on the SGE mailing list with Jeff on
</span><br>
<span class="quotelev2">&gt; &gt; this topic. As quad-core processors are available from AMD and Intel,
</span><br>
<span class="quotelev2">&gt; &gt; and higher core count per socket is coming soon, I would like to see
</span><br>
<span class="quotelev2">&gt; &gt; what we can do to come up with a simple interface for the SGE 6.2
</span><br>
<span class="quotelev2">&gt; &gt; release, which will be available in Q2 this year (or at least into an
</span><br>
<span class="quotelev2">&gt; &gt; &quot;update&quot; release of SGE6.2 if we couldn't get the changes in on time).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The discussions we had before:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I looked at the SGE code, the simplest we can do is to set an
</span><br>
<span class="quotelev2">&gt; &gt; environment variable to tell the task group the processor mask of the
</span><br>
<span class="quotelev2">&gt; &gt; node before we start each task group. Is it good enough for OpenMPI??
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After reading the OpenMPI code, I believe what we need to do is that
</span><br>
<span class="quotelev2">&gt; &gt; in ompi/runtime/ompi_mpi_init.c , we need to add an else case:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  if (ompi_mpi_paffinity_alone) {
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  else
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    // get processor affinity information from batch system via the env var
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2968.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Previous message:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
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
