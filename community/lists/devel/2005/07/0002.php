<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 08:15:19 2005" -->
<!-- isoreceived="20050718131519" -->
<!-- sent="Mon, 18 Jul 2005 07:14:34 -0600" -->
<!-- isosent="20050718131434" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="1121692474.5123.2.camel_at_culveroot.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1ff3204d84573e5bfaab0d8584a21f89_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 08:14:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0003.php">Edgar Gabriel: "Re:  collectives discussion @LANL"</a>
<li><strong>Previous message:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0018.php">Matt Leininger: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did a little digging into this last night, and finally figured out what
<br>
you were getting at in your comments here. Yeah, I think an &quot;affinity&quot;
<br>
framework would definitely be the best approach - can handle both cpu
<br>
and memory, I  imagine. Isn't clear how pressing that is as it is mostly
<br>
an optimization issue, but you're welcome to create the framework if you
<br>
like.
<br>
<p><p>On Sun, 2005-07-17 at 09:13, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It needs to be done in the launched process itself.  So we'd either 
</span><br>
<span class="quotelev1">&gt; have to extend rmaps (from my understanding of rmaps, that doesn't seem 
</span><br>
<span class="quotelev1">&gt; like a good idea), or do something different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps the easiest thing to do is to add this to the LANL meeting 
</span><br>
<span class="quotelev1">&gt; agenda...?  Then we can have a whiteboard to discuss.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2005, at 10:26 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Wouldn't it belong in the rmaps framework? That's where we tell the
</span><br>
<span class="quotelev2">&gt; &gt; launcher where to put each process - seems like a natural fit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 17, 2005, at 6:45 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm thinking that we should add some processor affinity code to OMPI 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; possibly in the orte layer (ORTE is the interface to the back-end
</span><br>
<span class="quotelev3">&gt; &gt;&gt; launcher, after all).  This will really help on systems like opterons
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (and others) to prevent processes from bouncing between processors, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; potentially getting located far from &quot;their&quot; RAM.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This has the potential to help even micro-benchmark results (e.g.,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ping-pong).  It's going to be quite relevant for my shared memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collective work on mauve.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; General scheme:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think that somewhere in ORTE, we should actively set processor
</span><br>
<span class="quotelev3">&gt; &gt;&gt; affinity when:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    - Supported by the OS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    - Not disabled by the user (via MCA param)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    - The node is not over-subscribed with processes from this job
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Generally speaking, if you launch &lt;=N processes in a job on a node
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (where N == number of CPUs on that node), then we set processor
</span><br>
<span class="quotelev3">&gt; &gt;&gt; affinity.  We set each process's affinity to the CPU number according
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to the VPID ordering of the procs in that job on that node.  So if you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; launch VPIDs 5, 6, 7, 8 on a node, 5 would go to processor 0, 6 would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; go to processor 1, etc. (it's an easy, locally-determined ordering).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Someday, we might want to make this scheme universe-aware (i.e., see 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any other ORTE jobs are running on that node, and not schedule on any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processors that are already claimed by the processes on that(those)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; job(s)), but I think single-job awareness is sufficient for the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; moment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Implementation:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We'll need relevant configure tests to figure out if the target system
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as CPU affinity system calls.  Those are simple to add.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We could use simply #if statements for the affinity stuff or make it a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; real framework.  Since it's only 1 function call to set the affinity, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tend to lean towards the [simpler] #if solution, but could probably be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pretty easily convinced that a framework is the Right solution.  I'm 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the fence (and if someone convinces me, I'd volunteer for the extra
</span><br>
<span class="quotelev3">&gt; &gt;&gt; work to setup the framework).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not super-familiar with the processor-affinity stuff (e.g., for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; best effect, should it be done after the fork and before the exec?), 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sure exactly where this would go in ORTE.  Potentially either
</span><br>
<span class="quotelev3">&gt; &gt;&gt; before new processes are exec'd (where we only have control of that in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; some kinds of systems, like rsh/ssh) or right up very very near the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; top
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of orte_init().
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Comments?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0003.php">Edgar Gabriel: "Re:  collectives discussion @LANL"</a>
<li><strong>Previous message:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0018.php">Matt Leininger: "Re:  processor affinity"</a>
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
