<?
$subject_val = "Re: [OMPI users] How to replace --cpus-per-proc by --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 16:12:30 2014" -->
<!-- isoreceived="20140515201230" -->
<!-- sent="Thu, 15 May 2014 13:10:43 -0700" -->
<!-- isosent="20140515201043" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to replace --cpus-per-proc by --map-by" -->
<!-- id="5316E9D5-4BEF-4371-A677-082C38842079_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LFD.2.02.1405131210400.20620_at_coffee.psychology.mcmaster.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to replace --cpus-per-proc by --map-by<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 16:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24393.php">Tim Prince: "Re: [OMPI users] openMPI in 64 bit"</a>
<li><strong>In reply to:</strong> <a href="24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure of the issue, but so far as I'm aware the cpus-per-proc functionality continued to work thru all those releases and into today. Yes, the syntax changed during the 1.7 series to reflect a broader desire to consolidate options into something that could be contained in a minimum number of MCA parameters - but the original option was only deprecated and will still work (though we will emit a deprecation warning). Regardless, the 1.8.1 release should certainly understand the &quot;pe=3&quot; modifier and do the right thing.
<br>
<p>The &quot;processing element (pe)&quot; terminology is one the general community is migrating towards as the use of hyperthreads grows. The old &quot;slot&quot; terminology simply wasn't accurate enough any more as a processing &quot;slot&quot; could contain multiple hardware threads (or even cores), especially if someone is allocating &quot;containers&quot;. So we adopted the &quot;pe&quot; term as indicating the number of processors to be assigned to the process, with &quot;processor&quot; equating to either &quot;core&quot; or &quot;hwthread&quot; depending on whether or not you set the &quot;use-hwthreads-as-cpus&quot; flag.
<br>
<p>The comments regarding the meaning of the term &quot;rank&quot; certainly aren't intended to be &quot;snide&quot; - they only reflect the fact that the &quot;rank&quot; or a process is only defined in terms of a given communicator. Thus, one process can have multiple &quot;ranks&quot; depending on (a) how many communicators have been created, and (b) what position it occupies within each of those. In general, we had been using the term only in relation to the initial comm_world communicator, but we unfortunately then started using the term in discussions over comm_spawn and other communicator creation functions - and generating confusion as to the process we were discussing.
<br>
<p>We don't support cgroup directly, so if you are using cgroups, it is possible that we aren't picking up resource limits that cgroup might be setting. We *should* be seeing the core limits on the backend nodes, but I can't swear to it as we haven't (to my knowledge) tested against cgroups.
<br>
<p><p>On May 15, 2014, at 11:16 AM, Mark Hahn &lt;hahn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; We're open to suggestion, really - just need some help identifying the best
</span><br>
<span class="quotelev2">&gt;&gt; way to get this info out there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; well, OpenMPI information is fragmented and sprayed all over.
</span><br>
<span class="quotelev1">&gt; In some places, there is mention of a wiki to be updated with an explanation; for other things, a consumer needs to wander around loosely-related blogs, mail archives, FAQs, usage statements, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance, I've been trying to figure out how to do a simple thing,
</span><br>
<span class="quotelev1">&gt; launch a hybrid job.  Assume I have a scheduled, heterogenous cluster
</span><br>
<span class="quotelev1">&gt; where mpirun simply receives a normal nodefile like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; clu357
</span><br>
<span class="quotelev1">&gt; clu357
</span><br>
<span class="quotelev1">&gt; clu357
</span><br>
<span class="quotelev1">&gt; clu354
</span><br>
<span class="quotelev1">&gt; clu354
</span><br>
<span class="quotelev1">&gt; clu354
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I want to launch a 2-rank, 3-thread-per-rank job.  forget about frills like hwloc or binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; back when --cpus-per-proc was around, this was obvious and worked flawlessly.  I honestly can't figure out how it works now, though - for any definition of &quot;now&quot; since:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10060.php">http://www.open-mpi.org/community/lists/devel/2011/12/10060.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011!  then there's a dribble more info in 2014 (!) that hints that &quot;--map-by node:pe=3&quot; might do the trick here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21193">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21193</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where did &quot;pe&quot; come from?  is it the same as slot, hwthread, core?
</span><br>
<span class="quotelev1">&gt; why does the documentation make snide comments about how the conventional
</span><br>
<span class="quotelev1">&gt; understanding of &quot;rank&quot; (~ equivalent to process) might not be true?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; most of all, when was the break introduced?  at this point, I tell people
</span><br>
<span class="quotelev1">&gt; that 1.4.3 worked, and that everything after that is broken.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; recent releases (I tried 1.7.3, 1.7.5 and 1.8.1) choke on this. I wonder whether it's having trouble with the fact that a job gets an arbitrary set of cores via cgroup, and perhaps hwloc doesn't understand that it can only work within this set...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   So please see this URL below(especially the first half part
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   of it - from 1 to 20 pages):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Although these slides by Jeff are the explanation for LAMA,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   which is another mapping system installed in the openmpi-1.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   series, I guess you can easily understand what is mapping and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   binding in general terms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AFAIKT, the lama slide deck seemed to be only concerned with affinity settings, which are irrelevant here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; confused,
</span><br>
<span class="quotelev1">&gt; Mark Hahn.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24393.php">Tim Prince: "Re: [OMPI users] openMPI in 64 bit"</a>
<li><strong>In reply to:</strong> <a href="24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
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
