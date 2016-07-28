<?
$subject_val = "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 06:22:11 2008" -->
<!-- isoreceived="20080111112211" -->
<!-- sent="Fri, 11 Jan 2008 06:22:01 -0500" -->
<!-- isosent="20080111112201" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration" -->
<!-- id="47875159.4060503_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a0ba9d430801091259g55cb19c6o530ba939b0f2aa70_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration<br>
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 06:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2963.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2961.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2949.php">Rayson Ho: "[OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2964.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Reply:</strong> <a href="2964.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rayson,
<br>
<p>I guess this is an issue only for SGE. I believe there is something 
<br>
called 'carto' framework is being developed to represent the node-socket 
<br>
relationship in order to address the multicore issue. I think there are 
<br>
other folks in the team who are actively working on it so they probably 
<br>
can address it better than I can. Here some descriptions on the wiki for it:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription">https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription</a>
<br>
<p>Rayson Ho wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm from the Sun Grid Engine (SGE) project (
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net">http://gridengine.sunsource.net</a> ). I am working on processor affinity
</span><br>
<span class="quotelev1">&gt; support for SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In 2005, we had some discussions on the SGE mailing list with Jeff on
</span><br>
<span class="quotelev1">&gt; this topic. As quad-core processors are available from AMD and Intel,
</span><br>
<span class="quotelev1">&gt; and higher core count per socket is coming soon, I would like to see
</span><br>
<span class="quotelev1">&gt; what we can do to come up with a simple interface for the SGE 6.2
</span><br>
<span class="quotelev1">&gt; release, which will be available in Q2 this year (or at least into an
</span><br>
<span class="quotelev1">&gt; &quot;update&quot; release of SGE6.2 if we couldn't get the changes in on time).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The discussions we had before:
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked at the SGE code, the simplest we can do is to set an
</span><br>
<span class="quotelev1">&gt; environment variable to tell the task group the processor mask of the
</span><br>
<span class="quotelev1">&gt; node before we start each task group. Is it good enough for OpenMPI??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After reading the OpenMPI code, I believe what we need to do is that
</span><br>
<span class="quotelev1">&gt; in ompi/runtime/ompi_mpi_init.c , we need to add an else case:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (ompi_mpi_paffinity_alone) {
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    // get processor affinity information from batch system via the env var
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2963.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2961.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2949.php">Rayson Ho: "[OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2964.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Reply:</strong> <a href="2964.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
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
