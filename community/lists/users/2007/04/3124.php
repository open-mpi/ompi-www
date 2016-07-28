<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 08:24:43 2007" -->
<!-- isoreceived="20070424122443" -->
<!-- sent="Tue, 24 Apr 2007 06:24:38 -0600" -->
<!-- isosent="20070424122438" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using mpiexec to run multiple non-mpi processes" -->
<!-- id="C2535326.2925%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cf924b390704232218q702c029ax59ce2c02ee27577c_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-04-24 08:24:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Previous message:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>In reply to:</strong> <a href="3121.php">John Borchardt: "[OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John
<br>
<p>I'm afraid that the straightforward approach you're trying isn't going to
<br>
work with Open MPI in its current implementation. I had plans for supporting
<br>
this kind of operation, but....not happening. And as you discovered, you
<br>
cannot run mpiexec/mpirun in the background, and the &quot;do-not-wait&quot; option
<br>
doesn't work (may even be turned &quot;off&quot; by now, depending which version you
<br>
are using).
<br>
<p>Your best bet would be to put a call in your first executable to &quot;spawn&quot; the
<br>
second executable. You don't need to do this via MPI - you can do it
<br>
directly from a non-MPI program by calling the appropriate RTE function.
<br>
Several OpenRTE (the RTE underneath Open MPI) users do this regularly,
<br>
myself included.
<br>
<p>I don't know what version you are using, but assuming it is 1.2 or the
<br>
&quot;trunk&quot;, you will find an example of this in a test program in
<br>
orte/test/system/orte_spawn.c. I can provide advice/details on how to make
<br>
this work, if needed (probably best done off-list, or use the OpenRTE
<br>
mailing lists - see <a href="http://www.open-rte.org">http://www.open-rte.org</a>).
<br>
<p>Ralph
<br>
<p><p><p>On 4/23/07 11:18 PM, &quot;John Borchardt&quot; &lt;john.borchardt_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was hoping someone could help me with the following situation.  I have a
</span><br>
<span class="quotelev1">&gt; program which has no MPI support that I'd like to run &quot;in parallel&quot; by running
</span><br>
<span class="quotelev1">&gt; a portion of my total task on N CPUs of a PBS/Maui/Open-MPI cluster.  (The
</span><br>
<span class="quotelev1">&gt; algorithm is such that there is no real need for MPI, I am just as well-off
</span><br>
<span class="quotelev1">&gt; running N processes on N CPUs as I would be adding MPI support to my program
</span><br>
<span class="quotelev1">&gt; and then running on N CPUs.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it's easy enough to set up a Perl script to submit N jobs to the queue to
</span><br>
<span class="quotelev1">&gt; run on N nodes.  But, my cluster has two CPUs per node, and I am not
</span><br>
<span class="quotelev1">&gt; RAM-limited, so I'd like to run two serial jobs per node, one on each node
</span><br>
<span class="quotelev1">&gt; CPU.  From what my admin tells me, I must use the mpiexec command to run my
</span><br>
<span class="quotelev1">&gt; program so that the scheduler knows to run my program on the nodes which it
</span><br>
<span class="quotelev1">&gt; has assigned to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my PBS script (this is one of N/2 similar scripts),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=2
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=1:00:00:00
</span><br>
<span class="quotelev1">&gt; mpiexec -pernode program-executable&lt;inputfile1&gt;outputfile1
</span><br>
<span class="quotelev1">&gt; mpiexec -pernode program-executable&lt;inputfile2&gt;outputfile2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does not have the desired effect.  It appears that (1) the second process
</span><br>
<span class="quotelev1">&gt; waits for the first to finish, and (2) MPI or the scheduler (I can't tell
</span><br>
<span class="quotelev1">&gt; which) tries to re-start the program a few times (you can see this in the
</span><br>
<span class="quotelev1">&gt; output files).  Adding an ampersand to the first mpiexec line appears to cause
</span><br>
<span class="quotelev1">&gt; mpiexec to crash and the job does not run at all.  Using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 program-executable&lt;inputfile&gt;outputfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; avoids the strange re-start problem I mentioned above, but of course does not
</span><br>
<span class="quotelev1">&gt; use both CPUs on a node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe I am making a simple mistake, but I am quite new to cluster computing...
</span><br>
<span class="quotelev1">&gt; Any help you can offer is greatly appreciated!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --John Borchardt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Previous message:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>In reply to:</strong> <a href="3121.php">John Borchardt: "[OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
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
