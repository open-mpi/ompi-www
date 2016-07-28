<?
$subject_val = "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 09:39:11 2008" -->
<!-- isoreceived="20080111143911" -->
<!-- sent="Fri, 11 Jan 2008 09:38:49 -0500" -->
<!-- isosent="20080111143849" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration" -->
<!-- id="4F0675BB-4DF5-4467-94E4-A3F4829EE774_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47875159.4060503_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 09:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2963.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
carto is more intended to be a discovery and provider of topology  
<br>
information.  How various parts of the OMPI code base use that  
<br>
information is a different issue.
<br>
<p>With regards to processor affinity, there are two general ways of  
<br>
doing it:
<br>
<p>1. The resource manager tells us what processors have been allocated  
<br>
to us.  E.g., provide us some environment variables saying what  
<br>
processors/cores/whatever have been allocated to us on a per-host  
<br>
basis (e.g., in the environment of the launched applications, and  
<br>
therefore may be different on every host).  Then Open MPI decides how  
<br>
to split up the allocated host processors amongst all the Open MPI  
<br>
processes on that host.
<br>
<p>It would be great if SGE could provide some environment variables to us.
<br>
<p>2. The resource manager does all the processor affinity itself.   
<br>
SLURM, for example, has a nice command line syntax for all kinds of  
<br>
processor affinity stuff in their &quot;srun&quot; command.  A traditional  
<br>
roadblock to this has been that OMPI currently uses the resource  
<br>
manager to launch a single &quot;orted&quot; process on each node, and then that  
<br>
orted, in turn, launches all the MPI processes locally.  However,  
<br>
there is work progressing to remove this roadblock.  If I try to  
<br>
describe it, I'm sure I'll get it wrong :-) -- Ralph / IU?
<br>
<p>-----
<br>
<p>Open MPI will need to be able to tell the difference between #1 and  
<br>
#2.  So it might be good if the RM always provides the environment  
<br>
variables, but in those env variables, tell us whether the RM did the  
<br>
affinity pinning or not.  I.e., in #1, you'll get information about  
<br>
all the processors that are available -- all the processes on a single  
<br>
host will get the same information.  In #2, each process will get  
<br>
individualized information about where it has been pinned.
<br>
<p>Make sense?
<br>
<p><p><p>On Jan 11, 2008, at 6:22 AM, Pak Lui wrote:
<br>
<p><span class="quotelev1">&gt; Hi Rayson,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess this is an issue only for SGE. I believe there is something
</span><br>
<span class="quotelev1">&gt; called 'carto' framework is being developed to represent the node- 
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev1">&gt; relationship in order to address the multicore issue. I think there  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; other folks in the team who are actively working on it so they  
</span><br>
<span class="quotelev1">&gt; probably
</span><br>
<span class="quotelev1">&gt; can address it better than I can. Here some descriptions on the wiki  
</span><br>
<span class="quotelev1">&gt; for it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription">https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson Ho wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm from the Sun Grid Engine (SGE) project (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net">http://gridengine.sunsource.net</a> ). I am working on processor affinity
</span><br>
<span class="quotelev2">&gt;&gt; support for SGE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In 2005, we had some discussions on the SGE mailing list with Jeff on
</span><br>
<span class="quotelev2">&gt;&gt; this topic. As quad-core processors are available from AMD and Intel,
</span><br>
<span class="quotelev2">&gt;&gt; and higher core count per socket is coming soon, I would like to see
</span><br>
<span class="quotelev2">&gt;&gt; what we can do to come up with a simple interface for the SGE 6.2
</span><br>
<span class="quotelev2">&gt;&gt; release, which will be available in Q2 this year (or at least into an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;update&quot; release of SGE6.2 if we couldn't get the changes in on  
</span><br>
<span class="quotelev2">&gt;&gt; time).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The discussions we had before:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I looked at the SGE code, the simplest we can do is to set an
</span><br>
<span class="quotelev2">&gt;&gt; environment variable to tell the task group the processor mask of the
</span><br>
<span class="quotelev2">&gt;&gt; node before we start each task group. Is it good enough for OpenMPI??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After reading the OpenMPI code, I believe what we need to do is that
</span><br>
<span class="quotelev2">&gt;&gt; in ompi/runtime/ompi_mpi_init.c , we need to add an else case:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (ompi_mpi_paffinity_alone) {
</span><br>
<span class="quotelev2">&gt;&gt;   ...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   // get processor affinity information from batch system via the  
</span><br>
<span class="quotelev2">&gt;&gt; env var
</span><br>
<span class="quotelev2">&gt;&gt;   ...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2963.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
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
