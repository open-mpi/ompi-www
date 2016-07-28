<?
$subject_val = "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 11:16:20 2009" -->
<!-- isoreceived="20091022151620" -->
<!-- sent="Thu, 22 Oct 2009 09:16:08 -0600" -->
<!-- isosent="20091022151608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration" -->
<!-- id="657EB3BF-B6B7-47D9-BCBF-9C12B0FEC8A8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="73a01bf20910220803t430ea27ajcd497e126ff49c59_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 11:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>Previous message:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>In reply to:</strong> <a href="10935.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>Reply:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rayson
<br>
<p>You're probably aware: starting with 1.3.4, OMPI will detect and abide  
<br>
by external bindings. So if grid engine sets a binding, we'll follow it.
<br>
<p>Ralph
<br>
<p>On Oct 22, 2009, at 9:03 AM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; The code for the Job to Core Binding (aka. thread binding, or CPU
</span><br>
<span class="quotelev1">&gt; binding) feature was checked into the Grid Engine project cvs. It uses
</span><br>
<span class="quotelev1">&gt; OpenMPI's Portable Linux Processor Affinity (PLPA) library, and is
</span><br>
<span class="quotelev1">&gt; topology and NUMA aware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The presentation from HPC Software Workshop '09:
</span><br>
<span class="quotelev1">&gt; <a href="http://wikis.sun.com/download/attachments/170755116/job2core.pdf">http://wikis.sun.com/download/attachments/170755116/job2core.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The design doc:
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=213897">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=213897</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initial support is planned for 6.2 update 5 (current release is update
</span><br>
<span class="quotelev1">&gt; 4, so update 5 is likely to be released in the next 2 or 3 months).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 30, 2008 at 2:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Note that we would also have to modify OMPI to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. recognize these environmental variables, and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. use them to actually set the binding, instead of using OMPI- 
</span><br>
<span class="quotelev2">&gt;&gt; internal
</span><br>
<span class="quotelev2">&gt;&gt; directives
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not a big deal to do, but not something currently in the system.  
</span><br>
<span class="quotelev2">&gt;&gt; Since we
</span><br>
<span class="quotelev2">&gt;&gt; launch through our own daemons (something that isn't likely to  
</span><br>
<span class="quotelev2">&gt;&gt; change in
</span><br>
<span class="quotelev2">&gt;&gt; your time frame), these changes would be required.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, we could come up with some method by which you could  
</span><br>
<span class="quotelev2">&gt;&gt; provide
</span><br>
<span class="quotelev2">&gt;&gt; mapper information we use. While I agree with Jeff that having you  
</span><br>
<span class="quotelev2">&gt;&gt; tell us
</span><br>
<span class="quotelev2">&gt;&gt; which cores to use for each rank would generally be better, it does  
</span><br>
<span class="quotelev2">&gt;&gt; raise
</span><br>
<span class="quotelev2">&gt;&gt; issues when users want specific mapping algorithms that you might not
</span><br>
<span class="quotelev2">&gt;&gt; support. For example, we are working on mappers that will take  
</span><br>
<span class="quotelev2">&gt;&gt; input from
</span><br>
<span class="quotelev2">&gt;&gt; the user regarding comm topology plus system info on network wiring  
</span><br>
<span class="quotelev2">&gt;&gt; topology
</span><br>
<span class="quotelev2">&gt;&gt; and generate a near-optimal mapping of ranks. As part of that,  
</span><br>
<span class="quotelev2">&gt;&gt; users may
</span><br>
<span class="quotelev2">&gt;&gt; request some number of cores be reserved for that rank for  
</span><br>
<span class="quotelev2">&gt;&gt; threading or
</span><br>
<span class="quotelev2">&gt;&gt; other purposes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So perhaps both  options would be best - give us the list of cores  
</span><br>
<span class="quotelev2">&gt;&gt; available
</span><br>
<span class="quotelev2">&gt;&gt; to us so we can map and do affinity, and pass in your own mapping.  
</span><br>
<span class="quotelev2">&gt;&gt; Maybe
</span><br>
<span class="quotelev2">&gt;&gt; with some logic so we can decide which to use based on whether OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; or GE
</span><br>
<span class="quotelev2">&gt;&gt; did the mapping??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure here - just thinking out loud.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2008, at 12:58 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 30, 2008, at 2:51 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Restarting this discussion. A new update version of Grid Engine 6.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will come out early next year [1], and I really hope that we can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at least the interface defined.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Great!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At the minimum, is it enough for the batch system to tell OpenMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; via
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an env variable which core (or virtual core, in the SMT case) to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binding the first MPI task?? I guess an added bonus would be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information about the number of processors to skip (the stride)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between the sibling tasks?? Stride of one is usually the case, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something larger than one would allow the batch system to control  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; level of cache and memory bandwidth sharing between the MPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tasks...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wouldn't it be better to give us a specific list of cores to bind  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to?  As
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core counts go up in servers, I think we may see a re-emergence of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple MPI jobs on a single server.  And as core counts go even  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *higher*,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then fragmentation of available cores over time is possible/likely.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would you be giving us a list of *relative* cores to bind to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e., &quot;bind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the Nth online core on the machine&quot; -- which may be different  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OS's ID for that processor) or will you be giving us the actual OS  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor ID(s) to bind to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>Previous message:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>In reply to:</strong> <a href="10935.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>Reply:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
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
