<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 09:38:34 2007" -->
<!-- isoreceived="20070424133834" -->
<!-- sent="Tue, 24 Apr 2007 07:36:54 -0600" -->
<!-- isosent="20070424133654" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using mpiexec to run multiple non-mpi processes" -->
<!-- id="462E07F6.2050404_at_ualberta.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 09:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3126.php">Bert Wesarg: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Previous message:</strong> <a href="3124.php">Ralph Castain: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>In reply to:</strong> <a href="3121.php">John Borchardt: "[OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3127.php">Jeff Squyres: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Reply:</strong> <a href="3127.php">Jeff Squyres: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John Borchardt wrote:
<br>
<span class="quotelev1">&gt; I was hoping someone could help me with the following situation.  I have a
</span><br>
<span class="quotelev1">&gt; program which has no MPI support that I'd like to run &quot;in parallel&quot; by
</span><br>
<span class="quotelev1">&gt; running a portion of my total task on N CPUs of a PBS/Maui/Open-MPI
</span><br>
<span class="quotelev1">&gt; cluster.  (The algorithm is such that there is no real need for MPI, I am
</span><br>
<span class="quotelev1">&gt; just as well-off running N processes on N CPUs as I would be adding MPI
</span><br>
<span class="quotelev1">&gt; support to my program and then running on N CPUs.)
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
<p>Hi,
<br>
<p>To run two serial programs on one dual-cpu node, try
<br>
<p>#!/bin/bash
<br>
#PBS -l nodes=1:ppn=2
<br>
#PBS -l walltime=1:00:00:00
<br>
program-executable&lt;inputfile1&gt;outputfile1 &amp;
<br>
program-executable&lt;inputfile2&gt;outputfile2
<br>
wait
<br>
<p><pre>
-- 
Ed[mund [Sumbar]]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3126.php">Bert Wesarg: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Previous message:</strong> <a href="3124.php">Ralph Castain: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>In reply to:</strong> <a href="3121.php">John Borchardt: "[OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3127.php">Jeff Squyres: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Reply:</strong> <a href="3127.php">Jeff Squyres: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
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
