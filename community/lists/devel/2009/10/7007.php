<?
$subject_val = "Re: [OMPI devel] processor affinity -- OpenMPI / batch system integration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 11:03:23 2009" -->
<!-- isoreceived="20091022150323" -->
<!-- sent="Thu, 22 Oct 2009 10:03:17 -0500" -->
<!-- isosent="20091022150317" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] processor affinity -- OpenMPI / batch system integration" -->
<!-- id="73a01bf20910220803t430ea27ajcd497e126ff49c59_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] processor affinity -- OpenMPI / batch system integration" -->
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
<strong>Subject:</strong> Re: [OMPI devel] processor affinity -- OpenMPI / batch system integration<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 11:03:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7008.php">Jeff Squyres: "Re: [OMPI devel] Stack traces and message queues in MTT results."</a>
<li><strong>Previous message:</strong> <a href="7006.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The code for the Job to Core Binding (aka. thread binding, or CPU
<br>
binding) feature was checked into the Grid Engine project cvs. It uses
<br>
OpenMPI's Portable Linux Processor Affinity (PLPA) library, and is
<br>
topology and NUMA aware.
<br>
<p>The presentation from HPC Software Workshop '09:
<br>
<a href="http://wikis.sun.com/download/attachments/170755116/job2core.pdf">http://wikis.sun.com/download/attachments/170755116/job2core.pdf</a>
<br>
<p>The design doc:
<br>
<a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=213897">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=213897</a>
<br>
<p>Initial support is planned for 6.2 update 5 (current release is update
<br>
4, so update 5 is likely to be released in the next 2 or 3 months).
<br>
<p>Rayson
<br>
<p><p><p>On Tue, Sep 30, 2008 at 2:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Note that we would also have to modify OMPI to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. recognize these environmental variables, and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. use them to actually set the binding, instead of using OMPI-internal
</span><br>
<span class="quotelev1">&gt; directives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not a big deal to do, but not something currently in the system. Since we
</span><br>
<span class="quotelev1">&gt; launch through our own daemons (something that isn't likely to change in
</span><br>
<span class="quotelev1">&gt; your time frame), these changes would be required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, we could come up with some method by which you could provide
</span><br>
<span class="quotelev1">&gt; mapper information we use. While I agree with Jeff that having you tell us
</span><br>
<span class="quotelev1">&gt; which cores to use for each rank would generally be better, it does raise
</span><br>
<span class="quotelev1">&gt; issues when users want specific mapping algorithms that you might not
</span><br>
<span class="quotelev1">&gt; support. For example, we are working on mappers that will take input from
</span><br>
<span class="quotelev1">&gt; the user regarding comm topology plus system info on network wiring topology
</span><br>
<span class="quotelev1">&gt; and generate a near-optimal mapping of ranks. As part of that, users may
</span><br>
<span class="quotelev1">&gt; request some number of cores be reserved for that rank for threading or
</span><br>
<span class="quotelev1">&gt; other purposes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So perhaps both  options would be best - give us the list of cores available
</span><br>
<span class="quotelev1">&gt; to us so we can map and do affinity, and pass in your own mapping. Maybe
</span><br>
<span class="quotelev1">&gt; with some logic so we can decide which to use based on whether OMPI or GE
</span><br>
<span class="quotelev1">&gt; did the mapping??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure here - just thinking out loud.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2008, at 12:58 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2008, at 2:51 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Restarting this discussion. A new update version of Grid Engine 6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will come out early next year [1], and I really hope that we can get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at least the interface defined.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Great!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At the minimum, is it enough for the batch system to tell OpenMPI via
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an env variable which core (or virtual core, in the SMT case) to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; binding the first MPI task?? I guess an added bonus would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information about the number of processors to skip (the stride)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between the sibling tasks?? Stride of one is usually the case, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something larger than one would allow the batch system to control the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; level of cache and memory bandwidth sharing between the MPI tasks...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wouldn't it be better to give us a specific list of cores to bind to?  As
</span><br>
<span class="quotelev2">&gt;&gt; core counts go up in servers, I think we may see a re-emergence of having
</span><br>
<span class="quotelev2">&gt;&gt; multiple MPI jobs on a single server.  And as core counts go even *higher*,
</span><br>
<span class="quotelev2">&gt;&gt; then fragmentation of available cores over time is possible/likely.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you be giving us a list of *relative* cores to bind to (i.e., &quot;bind
</span><br>
<span class="quotelev2">&gt;&gt; to the Nth online core on the machine&quot; -- which may be different than the
</span><br>
<span class="quotelev2">&gt;&gt; OS's ID for that processor) or will you be giving us the actual OS virtual
</span><br>
<span class="quotelev2">&gt;&gt; processor ID(s) to bind to?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="7008.php">Jeff Squyres: "Re: [OMPI devel] Stack traces and message queues in MTT results."</a>
<li><strong>Previous message:</strong> <a href="7006.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
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
