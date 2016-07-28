<?
$subject_val = "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 14:51:44 2008" -->
<!-- isoreceived="20080930185144" -->
<!-- sent="Tue, 30 Sep 2008 13:51:38 -0500" -->
<!-- isosent="20080930185138" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration" -->
<!-- id="73a01bf20809301151o1233dd58r140b0a976525ff80_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a0ba9d430809301133q7dc2f292pae6625ac8fdd9c75_at_mail.gmail.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 14:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="4718.php">Jeff Squyres: "[OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2949.php">Rayson Ho: "[OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Reply:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Restarting this discussion. A new update version of Grid Engine 6.2
<br>
will come out early next year [1], and I really hope that we can get
<br>
at least the interface defined.
<br>
<p>At the minimum, is it enough for the batch system to tell OpenMPI via
<br>
an env variable which core (or virtual core, in the SMT case) to start
<br>
binding the first MPI task?? I guess an added bonus would be
<br>
information about the number of processors to skip (the stride)
<br>
between the sibling tasks?? Stride of one is usually the case, but
<br>
something larger than one would allow the batch system to control the
<br>
level of cache and memory bandwidth sharing between the MPI tasks...
<br>
<p>Rayson
<br>
<p>[1]: <a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=26002">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=26002</a>
<br>
<p><p><p>On 1/11/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; carto is more intended to be a discovery and provider of topology
</span><br>
<span class="quotelev1">&gt; information.  How various parts of the OMPI code base use that
</span><br>
<span class="quotelev1">&gt; information is a different issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With regards to processor affinity, there are two general ways of
</span><br>
<span class="quotelev1">&gt; doing it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The resource manager tells us what processors have been allocated
</span><br>
<span class="quotelev1">&gt; to us.  E.g., provide us some environment variables saying what
</span><br>
<span class="quotelev1">&gt; processors/cores/whatever have been allocated to us on a per-host
</span><br>
<span class="quotelev1">&gt; basis (e.g., in the environment of the launched applications, and
</span><br>
<span class="quotelev1">&gt; therefore may be different on every host).  Then Open MPI decides how
</span><br>
<span class="quotelev1">&gt; to split up the allocated host processors amongst all the Open MPI
</span><br>
<span class="quotelev1">&gt; processes on that host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be great if SGE could provide some environment variables to us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The resource manager does all the processor affinity itself.
</span><br>
<span class="quotelev1">&gt; SLURM, for example, has a nice command line syntax for all kinds of
</span><br>
<span class="quotelev1">&gt; processor affinity stuff in their &quot;srun&quot; command.  A traditional
</span><br>
<span class="quotelev1">&gt; roadblock to this has been that OMPI currently uses the resource
</span><br>
<span class="quotelev1">&gt; manager to launch a single &quot;orted&quot; process on each node, and then that
</span><br>
<span class="quotelev1">&gt; orted, in turn, launches all the MPI processes locally.  However,
</span><br>
<span class="quotelev1">&gt; there is work progressing to remove this roadblock.  If I try to
</span><br>
<span class="quotelev1">&gt; describe it, I'm sure I'll get it wrong :-) -- Ralph / IU?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI will need to be able to tell the difference between #1 and
</span><br>
<span class="quotelev1">&gt; #2.  So it might be good if the RM always provides the environment
</span><br>
<span class="quotelev1">&gt; variables, but in those env variables, tell us whether the RM did the
</span><br>
<span class="quotelev1">&gt; affinity pinning or not.  I.e., in #1, you'll get information about
</span><br>
<span class="quotelev1">&gt; all the processors that are available -- all the processes on a single
</span><br>
<span class="quotelev1">&gt; host will get the same information.  In #2, each process will get
</span><br>
<span class="quotelev1">&gt; individualized information about where it has been pinned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2008, at 6:22 AM, Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Rayson,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess this is an issue only for SGE. I believe there is something
</span><br>
<span class="quotelev2">&gt; &gt; called 'carto' framework is being developed to represent the node-
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; relationship in order to address the multicore issue. I think there
</span><br>
<span class="quotelev2">&gt; &gt; are
</span><br>
<span class="quotelev2">&gt; &gt; other folks in the team who are actively working on it so they
</span><br>
<span class="quotelev2">&gt; &gt; probably
</span><br>
<span class="quotelev2">&gt; &gt; can address it better than I can. Here some descriptions on the wiki
</span><br>
<span class="quotelev2">&gt; &gt; for it:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription">https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rayson Ho wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm from the Sun Grid Engine (SGE) project (
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://gridengine.sunsource.net">http://gridengine.sunsource.net</a> ). I am working on processor affinity
</span><br>
<span class="quotelev3">&gt; &gt;&gt; support for SGE.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In 2005, we had some discussions on the SGE mailing list with Jeff on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this topic. As quad-core processors are available from AMD and Intel,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and higher core count per socket is coming soon, I would like to see
</span><br>
<span class="quotelev3">&gt; &gt;&gt; what we can do to come up with a simple interface for the SGE 6.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; release, which will be available in Q2 this year (or at least into an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;update&quot; release of SGE6.2 if we couldn't get the changes in on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; time).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The discussions we had before:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I looked at the SGE code, the simplest we can do is to set an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment variable to tell the task group the processor mask of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node before we start each task group. Is it good enough for OpenMPI??
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; After reading the OpenMPI code, I believe what we need to do is that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in ompi/runtime/ompi_mpi_init.c , we need to add an else case:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if (ompi_mpi_paffinity_alone) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; else
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   // get processor affinity information from batch system via the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; env var
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rayson
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Pak Lui
</span><br>
<span class="quotelev2">&gt; &gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="4718.php">Jeff Squyres: "[OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2949.php">Rayson Ho: "[OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Reply:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
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
