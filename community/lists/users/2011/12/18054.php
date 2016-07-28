<?
$subject_val = "Re: [OMPI users] over-subscription of cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 26 12:43:05 2011" -->
<!-- isoreceived="20111226174305" -->
<!-- sent="Mon, 26 Dec 2011 10:42:57 -0700" -->
<!-- isosent="20111226174257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] over-subscription of cores" -->
<!-- id="18B557E9-FE2E-4000-96A2-E76C67B85063_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJd+HkMHBfu3DSb32H3okYxn_PVQKxq69-rXfov33128Z2pWsw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] over-subscription of cores<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-26 12:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18055.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I confess I'm confused. OMPI allows you to &quot;oversubscribe&quot; a node without any modification of job allocations. Just ask it to launch however many processes you want - it will ignore the allocated number of slots and do it.
<br>
<p>It will set the sched_yield appropriately to deal with the oversubscription - i.e., each individual process will run a little slower than it would otherwise have done, but play nicer when it comes to &quot;sharing&quot; the available cpus. Likewise, it won't bind your processes to a specific core, which is what you want in this scenario.
<br>
<p>So all you have to do is change your mpirun line to have -np N, where N is the actual number of desired processes. Or, if you prefer, you can use
<br>
<p>&nbsp;-npernode M
<br>
<p>to tell mpirun to launch M processes on each node. Either will work.
<br>
<p><p>On Dec 26, 2011, at 10:32 AM, Santosh Ansumali wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the response. May be I am wrong. However my argument is as
</span><br>
<span class="quotelev1">&gt; follows: our test shows that a 100^3 grid per core performs 10 times
</span><br>
<span class="quotelev1">&gt; faster (normalised in proper unit)  than 200^3.  Both of these sizes
</span><br>
<span class="quotelev1">&gt; are not fitting in cache.  100^3 run is benefiting due to smaller size
</span><br>
<span class="quotelev1">&gt; where compiler is guessing access pattern in slightly better way.
</span><br>
<span class="quotelev1">&gt; So, in case of running  one large job of 200^3 per core if I
</span><br>
<span class="quotelev1">&gt; oversubscribe the core with smaller jobs of size comparable to 100^3,
</span><br>
<span class="quotelev1">&gt; high saving due to better memory access should  compensate for thread
</span><br>
<span class="quotelev1">&gt; compition.
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Santosh
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 26, 2011 at 10:31 PM, Matthieu Brucher
</span><br>
<span class="quotelev1">&gt; &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If your problem is memory bound and if you don't use the whole memory
</span><br>
<span class="quotelev2">&gt;&gt; capacity of one node, it means that you are limited by your memory
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth. In this case oversubscribing the number of processes will lead to
</span><br>
<span class="quotelev2">&gt;&gt; worse behavior, as all processes will fight for the same memory bandwidth.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just my opinion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matthieu Brucher
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2011/12/23 Santosh Ansumali &lt;ansumali_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        We are running a PDE solver which is memory bound. Due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache related issue,   smaller  number of grid point per core leads to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better performance for this code.  Thus, though available memory per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core is more than 2 GB, we are able to good  performance   by using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; less than 1 GB per core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I want to know whether oversubscribing the cores can potentially
</span><br>
<span class="quotelev3">&gt;&gt;&gt; improve performance of such a code.  My thinking is that if I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscribe the cores,  each thread will be using less than 1 GB so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache related problems will be less severe.  Is this logic correct or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; due to cache conflict performance will deteriorate further?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      In case, over-subscription can help, how shall I modify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; submission file (using sun grid engine) to enable over-subscription of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my current submission file is written as follows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -N first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -e $JOB_ID.$JOB_NAME.ERROR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -o $JOB_ID.$JOB_NAME.OUTPUT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -P faculty_prj
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -p 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe orte 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mpi/openmpi/1.3.3/gnu/bin/mpirun -np $NSLOTS ./test_vel.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to allow over-subscription by modifying submission file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; itself?  Or do I need to change hostfiles somehow?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Santosh Ansumali,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Faculty Fellow,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Engineering Mechanics Unit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jakkur, Bangalore-560 064, India
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: + 91 80 22082938
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Santosh Ansumali,
</span><br>
<span class="quotelev1">&gt; Faculty Fellow,
</span><br>
<span class="quotelev1">&gt; Engineering Mechanics Unit
</span><br>
<span class="quotelev1">&gt; Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
</span><br>
<span class="quotelev1">&gt;  Jakkur, Bangalore-560 064, India
</span><br>
<span class="quotelev1">&gt; Tel: + 91 80 22082938
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
<li><strong>Next message:</strong> <a href="18055.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18053.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
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
