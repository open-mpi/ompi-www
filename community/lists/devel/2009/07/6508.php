<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 16:43:20 2009" -->
<!-- isoreceived="20090722204320" -->
<!-- sent="Wed, 22 Jul 2009 14:43:06 -0600" -->
<!-- isosent="20090722204306" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="796B4DC6-2A60-40EA-A21A-E6712A2C897A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B925CB4C-B544-40F4-B029-D8A5C3BD29A9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 16:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6507.php">Don Kerr: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>In reply to:</strong> <a href="6503.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6520.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I apologize for coming to this late - IU's email forwarding jammed up  
<br>
yesterday, so I'm only now getting around to reading the backlog.
<br>
<p>There has been some off-list discussion about advanced paffinity  
<br>
mappings/bindings. As I noted there, I am in the latter stages of  
<br>
completing a new mapper that allows users to easily specify #cpus to  
<br>
&quot;bind&quot; to each processor.
<br>
<p>As part of that effort, we have interfaced to the slurm cpus_per_task  
<br>
and cpuset envars. So we should (once this gets done) pretty much  
<br>
handle the slurm environment in that regard.
<br>
<p>Having worked on the paffinity issue for some time, I am somewhat  
<br>
strongly opinionated that PLPA is doing exactly what it should do. It  
<br>
is up to OMPI/ORTE to identify what cpusets were assigned to the job  
<br>
and figure out the mappings - the PLPA is there to tell us how many  
<br>
processors are available, how many are in each socket, etc., and to do  
<br>
the mechanics of binding the specified process to the specified cpus.
<br>
<p>I would tend to oppose any change in the relative responsibilities of  
<br>
OMPI/ORTE and PLPA. It is a good division as it stands, and is working  
<br>
well. I haven't read anything in this chain that would change my  
<br>
opinion.
<br>
<p>Just my $0.0002
<br>
Ralph
<br>
<p>On Jul 22, 2009, at 11:22 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 22, 2009, at 11:17 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm interested in joining the effort, since we will likely have the  
</span><br>
<span class="quotelev2">&gt;&gt; same
</span><br>
<span class="quotelev2">&gt;&gt; problem with SLURM's cpuset support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But as to why it's getting EINVAL, that could be wonky.  We might  
</span><br>
<span class="quotelev2">&gt;&gt; want to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; take this to the PLPA list and have you run some small, non-MPI  
</span><br>
<span class="quotelev2">&gt;&gt; examples to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ensure that PLPA is parsing your /sys tree properly, etc.
</span><br>
<span class="quotelev2">&gt;&gt; I don't see the /sys implication here. Can you be more precise on  
</span><br>
<span class="quotelev2">&gt;&gt; which
</span><br>
<span class="quotelev2">&gt;&gt; files are read to determine placement ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check in opal/mca/paffinity/linux/plpa/src/libplpa/ 
</span><br>
<span class="quotelev1">&gt; plpa_map.c:load_cache().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, when you are inside a cpuset, you can see all cpus (/sys  
</span><br>
<span class="quotelev2">&gt;&gt; should be
</span><br>
<span class="quotelev2">&gt;&gt; unmodified) but calling set_schedaffinity with a mask containing a  
</span><br>
<span class="quotelev2">&gt;&gt; cpu
</span><br>
<span class="quotelev2">&gt;&gt; outside the cpuset will return EINVAL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, that could be the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only solution I see to solve
</span><br>
<span class="quotelev2">&gt;&gt; this would be to get the &quot;allowed&quot; cpus with sched_getaffinity,
</span><br>
<span class="quotelev2">&gt;&gt; which should be set according to the cpuset mask.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two issues here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - what should OMPI do
</span><br>
<span class="quotelev1">&gt; - what should PLPA do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PLPA currently does two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. provide a portable set/get affinity API (to isolate you from  
</span><br>
<span class="quotelev1">&gt; whatever version you have in your linux install)
</span><br>
<span class="quotelev1">&gt; 2. provide topology mapping information (sockets, cores)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PLPA does not currently deal with cpusets.  If we want to expand  
</span><br>
<span class="quotelev1">&gt; PLPA to somehow interact with cpusets, that should probably be  
</span><br>
<span class="quotelev1">&gt; brought up on the PLPA mailing lists (someone made this suggestion  
</span><br>
<span class="quotelev1">&gt; to me about a month or two ago and I haven't had a chance to follow  
</span><br>
<span class="quotelev1">&gt; up on it :-( ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI (as a whole -- meaning: including the ORTE layer) does the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. decide whether to bind MPI processes or not
</span><br>
<span class="quotelev1">&gt; 2. if we do bind, use the paffinity module to bind processes to  
</span><br>
<span class="quotelev1">&gt; specific processors (the linux paffinity module uses PLPA to do the  
</span><br>
<span class="quotelev1">&gt; actual binding -- PLPA is wholly embedded inside OMPI's linux  
</span><br>
<span class="quotelev1">&gt; paffinity module)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And there's two layers involved here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the main ORTE logic saying both &quot;yes, bind&quot; and making the  
</span><br>
<span class="quotelev1">&gt; decision as to which processors to bind to
</span><br>
<span class="quotelev1">&gt; - the linux paffinity component does a thin layer of translation  
</span><br>
<span class="quotelev1">&gt; between ORTE's/OMPI's requests and calling the back-end PLPA library
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Ralph described, OMPI is currently fairly &quot;dumb&quot; about how it  
</span><br>
<span class="quotelev1">&gt; chooses which processors it uses -- 0 to N-1.  I think the issue  
</span><br>
<span class="quotelev1">&gt; here is to make OMPI smarter about how it chooses which processors  
</span><br>
<span class="quotelev1">&gt; to use.  It could be in ORTE itself, or it could be in the linux  
</span><br>
<span class="quotelev1">&gt; paffinity translation layer (e.g., linux paffinity component could  
</span><br>
<span class="quotelev1">&gt; report only as many processors as are available in the cpuset...?   
</span><br>
<span class="quotelev1">&gt; And binding could be relative to the cpuset...?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6507.php">Don Kerr: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>In reply to:</strong> <a href="6503.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6520.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
