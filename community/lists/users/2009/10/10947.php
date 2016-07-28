<?
$subject_val = "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batchsystem integration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 18:06:00 2009" -->
<!-- isoreceived="20091022220600" -->
<!-- sent="Thu, 22 Oct 2009 18:05:55 -0400" -->
<!-- isosent="20091022220555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batchsystem integration" -->
<!-- id="5B275897-2BEC-4049-9EEF-7F174CA997C5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="73a01bf20910220826g18ace684ta5bd73f6e1ae54d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batchsystem integration<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 18:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10948.php">Roy Dragseth: "[OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Previous message:</strong> <a href="10946.php">Jeff Squyres: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>In reply to:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SGE might want to be aware that PLPA has now been deprecated -- we're  
<br>
doing all future work on &quot;hwloc&quot; (hardware locality).  That is, hwloc  
<br>
represents the merger of PLPA and libtopology from INRIA.  The  
<br>
majority of the initial code base came from libtopology; more PLPA- 
<br>
like features will come in over time (e.g., embedding capabilities).
<br>
<p>hwloc provides all kinds of topology information about the machine.
<br>
<p>The first release of hwloc -- v0.9.1 -- will be &quot;soon&quot; (we're in rc  
<br>
status right now), but it will not include PLPA-like embedding  
<br>
capabilities.  Embedding is slated for v1.0.
<br>
<p>Come join our mailing lists if you're interested:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p><p>On Oct 22, 2009, at 11:26 AM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; Yes, on page 14 of the presentation: &quot;Support for OpenMPI and OpenMP
</span><br>
<span class="quotelev1">&gt; Through -binding [pe|env] linear|striding&quot; -- SGE performs no binding,
</span><br>
<span class="quotelev1">&gt; but instead it outputs the binding decision to OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Support for OpenMPI's binding is part of the &quot;Job to Core Binding&quot;  
</span><br>
<span class="quotelev1">&gt; project.
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
<span class="quotelev1">&gt; On Thu, Oct 22, 2009 at 10:16 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Rayson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You're probably aware: starting with 1.3.4, OMPI will detect and  
</span><br>
<span class="quotelev1">&gt; abide by
</span><br>
<span class="quotelev2">&gt; &gt; external bindings. So if grid engine sets a binding, we'll follow  
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 22, 2009, at 9:03 AM, Rayson Ho wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The code for the Job to Core Binding (aka. thread binding, or CPU
</span><br>
<span class="quotelev3">&gt; &gt;&gt; binding) feature was checked into the Grid Engine project cvs. It  
</span><br>
<span class="quotelev1">&gt; uses
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI's Portable Linux Processor Affinity (PLPA) library, and is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; topology and NUMA aware.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The presentation from HPC Software Workshop '09:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://wikis.sun.com/download/attachments/170755116/job2core.pdf">http://wikis.sun.com/download/attachments/170755116/job2core.pdf</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The design doc:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=213897">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=213897</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Initial support is planned for 6.2 update 5 (current release is  
</span><br>
<span class="quotelev1">&gt; update
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4, so update 5 is likely to be released in the next 2 or 3 months).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rayson
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Sep 30, 2008 at 2:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that we would also have to modify OMPI to:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1. recognize these environmental variables, and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2. use them to actually set the binding, instead of using OMPI- 
</span><br>
<span class="quotelev1">&gt; internal
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; directives
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Not a big deal to do, but not something currently in the system.  
</span><br>
<span class="quotelev1">&gt; Since we
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; launch through our own daemons (something that isn't likely to  
</span><br>
<span class="quotelev1">&gt; change in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; your time frame), these changes would be required.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Otherwise, we could come up with some method by which you could  
</span><br>
<span class="quotelev1">&gt; provide
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mapper information we use. While I agree with Jeff that having  
</span><br>
<span class="quotelev1">&gt; you tell
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; us
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; which cores to use for each rank would generally be better, it  
</span><br>
<span class="quotelev1">&gt; does raise
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; issues when users want specific mapping algorithms that you  
</span><br>
<span class="quotelev1">&gt; might not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; support. For example, we are working on mappers that will take  
</span><br>
<span class="quotelev1">&gt; input from
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the user regarding comm topology plus system info on network  
</span><br>
<span class="quotelev1">&gt; wiring
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; topology
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and generate a near-optimal mapping of ranks. As part of that,  
</span><br>
<span class="quotelev1">&gt; users may
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; request some number of cores be reserved for that rank for  
</span><br>
<span class="quotelev1">&gt; threading or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; other purposes.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So perhaps both  options would be best - give us the list of cores
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; available
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to us so we can map and do affinity, and pass in your own  
</span><br>
<span class="quotelev1">&gt; mapping. Maybe
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with some logic so we can decide which to use based on whether  
</span><br>
<span class="quotelev1">&gt; OMPI or GE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; did the mapping??
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Not sure here - just thinking out loud.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 30, 2008, at 12:58 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Sep 30, 2008, at 2:51 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Restarting this discussion. A new update version of Grid  
</span><br>
<span class="quotelev1">&gt; Engine 6.2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; will come out early next year [1], and I really hope that we  
</span><br>
<span class="quotelev1">&gt; can get
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; at least the interface defined.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Great!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; At the minimum, is it enough for the batch system to tell  
</span><br>
<span class="quotelev1">&gt; OpenMPI via
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; an env variable which core (or virtual core, in the SMT case)  
</span><br>
<span class="quotelev1">&gt; to start
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; binding the first MPI task?? I guess an added bonus would be
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; information about the number of processors to skip (the stride)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; between the sibling tasks?? Stride of one is usually the case,  
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; something larger than one would allow the batch system to  
</span><br>
<span class="quotelev1">&gt; control the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; level of cache and memory bandwidth sharing between the MPI  
</span><br>
<span class="quotelev1">&gt; tasks...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Wouldn't it be better to give us a specific list of cores to  
</span><br>
<span class="quotelev1">&gt; bind to?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  As
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; core counts go up in servers, I think we may see a re-emergence  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; having
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; multiple MPI jobs on a single server.  And as core counts go even
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; *higher*,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; then fragmentation of available cores over time is possible/ 
</span><br>
<span class="quotelev1">&gt; likely.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Would you be giving us a list of *relative* cores to bind to  
</span><br>
<span class="quotelev1">&gt; (i.e.,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;bind
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to the Nth online core on the machine&quot; -- which may be  
</span><br>
<span class="quotelev1">&gt; different than
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; OS's ID for that processor) or will you be giving us the actual  
</span><br>
<span class="quotelev1">&gt; OS
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; virtual
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; processor ID(s) to bind to?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10948.php">Roy Dragseth: "[OMPI users] torque integration when tm ras/plm isn't compiled in."</a>
<li><strong>Previous message:</strong> <a href="10946.php">Jeff Squyres: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>In reply to:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
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
