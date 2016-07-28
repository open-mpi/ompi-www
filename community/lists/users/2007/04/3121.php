<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 01:19:00 2007" -->
<!-- isoreceived="20070424051900" -->
<!-- sent="Mon, 23 Apr 2007 23:18:55 -0600" -->
<!-- isosent="20070424051855" -->
<!-- name="John Borchardt" -->
<!-- email="john.borchardt_at_[hidden]" -->
<!-- subject="[OMPI users] Using mpiexec to run multiple non-mpi processes" -->
<!-- id="cf924b390704232218q702c029ax59ce2c02ee27577c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> John Borchardt (<em>john.borchardt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 01:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3122.php">Jeff Squyres: "Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>Previous message:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3124.php">Ralph Castain: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Reply:</strong> <a href="3124.php">Ralph Castain: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Reply:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I was hoping someone could help me with the following situation.  I have a
<br>
program which has no MPI support that I'd like to run &quot;in parallel&quot; by
<br>
running a portion of my total task on N CPUs of a PBS/Maui/Open-MPI
<br>
cluster.  (The algorithm is such that there is no real need for MPI, I am
<br>
just as well-off running N processes on N CPUs as I would be adding MPI
<br>
support to my program and then running on N CPUs.)
<br>
<p>So it's easy enough to set up a Perl script to submit N jobs to the queue to
<br>
run on N nodes.  But, my cluster has two CPUs per node, and I am not
<br>
RAM-limited, so I'd like to run two serial jobs per node, one on each node
<br>
CPU.  From what my admin tells me, I must use the mpiexec command to run my
<br>
program so that the scheduler knows to run my program on the nodes which it
<br>
has assigned to me.
<br>
<p>In my PBS script (this is one of N/2 similar scripts),
<br>
<p>#!/bin/bash
<br>
#PBS -l nodes=1:ppn=2
<br>
#PBS -l walltime=1:00:00:00
<br>
mpiexec -pernode program-executable&lt;inputfile1&gt;outputfile1
<br>
mpiexec -pernode program-executable&lt;inputfile2&gt;outputfile2
<br>
<p>does not have the desired effect.  It appears that (1) the second process
<br>
waits for the first to finish, and (2) MPI or the scheduler (I can't tell
<br>
which) tries to re-start the program a few times (you can see this in the
<br>
output files).  Adding an ampersand to the first mpiexec line appears to
<br>
cause mpiexec to crash and the job does not run at all.  Using:
<br>
<p>mpiexec -np 1 program-executable&lt;inputfile&gt;outputfile
<br>
<p>avoids the strange re-start problem I mentioned above, but of course does
<br>
not use both CPUs on a node.
<br>
<p><p>Maybe I am making a simple mistake, but I am quite new to cluster
<br>
computing...  Any help you can offer is greatly appreciated!
<br>
<p><p>Thanks,
<br>
<p>--John Borchardt
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3122.php">Jeff Squyres: "Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>Previous message:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3124.php">Ralph Castain: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Reply:</strong> <a href="3124.php">Ralph Castain: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Reply:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
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
