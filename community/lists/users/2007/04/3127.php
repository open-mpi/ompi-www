<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 10:14:20 2007" -->
<!-- isoreceived="20070424141420" -->
<!-- sent="Tue, 24 Apr 2007 10:14:05 -0400" -->
<!-- isosent="20070424141405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using mpiexec to run multiple non-mpi processes" -->
<!-- id="FBDB1409-3686-43BD-B3A5-A0630826B7EC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="462E07F6.2050404_at_ualberta.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 10:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3128.php">Andreas Kuntze: "[OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3126.php">Bert Wesarg: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>In reply to:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you actually have a few options:
<br>
<p>1. If I'm reading the original mail right, I don't think you need  
<br>
mpirun/mpiexec at all.  When you submit a scripted job to PBS, the  
<br>
script runs on the &quot;mother superior&quot; node -- the first node that was  
<br>
allocated to you.  In this, case it's your only node.  Since you're  
<br>
already running on the target node, there's nothing special that you  
<br>
need to do to launch your jobs; you can just do something like this:
<br>
<p># Launch app 1
<br>
program-executable &lt;inputfile1 &gt;outputfile1 &amp;
<br>
# Launch app 2
<br>
program-executable &lt;inputfile2 &gt;outputfile2 &amp;
<br>
# Wait for both to finish
<br>
wait
<br>
<p>Note that the following is *not* sufficient, unless you know for  
<br>
absolutely sure that the 2nd executable will take longer than the first:
<br>
<p># Launch app 1
<br>
program-executable &lt;inputfile1 &gt;outputfile1 &amp;
<br>
# Launch and wait for app 2
<br>
program-executable &lt;inputfile2 &gt;outputfile2
<br>
<p>If the first app keeps running beyond the second, your script will  
<br>
end and PBS will kill the job (including the first app).
<br>
<p>2. If you really want to use mpiexec, you can use a single command  
<br>
line to launch both executables, but note that we currently have  
<br>
mpiexec hard-coded to only redirect stdin to the *first* executable  
<br>
(this may change in future releases, but that's the way it is right  
<br>
now).  So you'd probably want to change your executables to read  
<br>
from / write to a file directly instead of stdin/stdout.   
<br>
Incidentally, using a single command line is the *only* way to get  
<br>
OMPI to be aware of multiple executables and therefore launch in a  
<br>
non-oversubscribed situation.  This is not really much of a factor  
<br>
since you're only running on a single node; it would be more of a  
<br>
factor if you had grabbed a bunch of nodes and were trying to launch  
<br>
individual jobs across them.
<br>
<p>But for completeness, you could do the following (subject to the  
<br>
stdin / stdout limitation listed above):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 executable1 [argv1] : -np 1 executable2 [argv2]
<br>
<p>Hope that helps!
<br>
<p><p>On Apr 24, 2007, at 9:36 AM, Edmund Sumbar wrote:
<br>
<p><span class="quotelev1">&gt; John Borchardt wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I was hoping someone could help me with the following situation.   
</span><br>
<span class="quotelev2">&gt;&gt; I have a
</span><br>
<span class="quotelev2">&gt;&gt; program which has no MPI support that I'd like to run &quot;in  
</span><br>
<span class="quotelev2">&gt;&gt; parallel&quot; by
</span><br>
<span class="quotelev2">&gt;&gt; running a portion of my total task on N CPUs of a PBS/Maui/Open-MPI
</span><br>
<span class="quotelev2">&gt;&gt; cluster.  (The algorithm is such that there is no real need for  
</span><br>
<span class="quotelev2">&gt;&gt; MPI, I am
</span><br>
<span class="quotelev2">&gt;&gt; just as well-off running N processes on N CPUs as I would be  
</span><br>
<span class="quotelev2">&gt;&gt; adding MPI
</span><br>
<span class="quotelev2">&gt;&gt; support to my program and then running on N CPUs.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it's easy enough to set up a Perl script to submit N jobs to  
</span><br>
<span class="quotelev2">&gt;&gt; the queue to
</span><br>
<span class="quotelev2">&gt;&gt; run on N nodes.  But, my cluster has two CPUs per node, and I am not
</span><br>
<span class="quotelev2">&gt;&gt; RAM-limited, so I'd like to run two serial jobs per node, one on  
</span><br>
<span class="quotelev2">&gt;&gt; each node
</span><br>
<span class="quotelev2">&gt;&gt; CPU.  From what my admin tells me, I must use the mpiexec command  
</span><br>
<span class="quotelev2">&gt;&gt; to run my
</span><br>
<span class="quotelev2">&gt;&gt; program so that the scheduler knows to run my program on the nodes  
</span><br>
<span class="quotelev2">&gt;&gt; which it
</span><br>
<span class="quotelev2">&gt;&gt; has assigned to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my PBS script (this is one of N/2 similar scripts),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=1:ppn=2
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l walltime=1:00:00:00
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -pernode program-executable&lt;inputfile1&gt;outputfile1
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -pernode program-executable&lt;inputfile2&gt;outputfile2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To run two serial programs on one dual-cpu node, try
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=2
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=1:00:00:00
</span><br>
<span class="quotelev1">&gt; program-executable&lt;inputfile1&gt;outputfile1 &amp;
</span><br>
<span class="quotelev1">&gt; program-executable&lt;inputfile2&gt;outputfile2
</span><br>
<span class="quotelev1">&gt; wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ed[mund [Sumbar]]
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3128.php">Andreas Kuntze: "[OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3126.php">Bert Wesarg: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>In reply to:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
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
