<?
$subject_val = "Re: [OMPI users] over-subscription of cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 26 10:32:33 2011" -->
<!-- isoreceived="20111226153233" -->
<!-- sent="Mon, 26 Dec 2011 16:32:18 +0100" -->
<!-- isosent="20111226153218" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] over-subscription of cores" -->
<!-- id="89202274-DCB8-48C2-B33B-4DC3562066F0_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="556A49F8-E3CF-4C00-8354-29A160B84FA1_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-26 10:32:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 23.12.2011 um 21:16 schrieb Gustavo Correa:
<br>
<p><span class="quotelev1">&gt; I don't know about the grid engine/ SGE.
</span><br>
<span class="quotelev1">&gt; However, in Torque, the batch/resource manager I use,
</span><br>
<span class="quotelev1">&gt; to allow oversubscription, you need to modify the batch server nodes file 
</span><br>
<span class="quotelev1">&gt; and pretend the nodes have more cores than the physical ones.
</span><br>
<span class="quotelev1">&gt; [Something like 'node01 np=8' would change to 'node01 np=16' for instance.]
</span><br>
<span class="quotelev1">&gt; Maybe there is something similar in SGE.
</span><br>
<p>Yep, it's in the queue definition, where you can define the slots per queue instance on each machine.
<br>
<p>Depending on your setup: if you have more than one queue per machine, the admin might already have set up some RQS (Resource Quota Set) or an absolut limit of slots across all queues residing on a host in teh exechost definition. In this case this needs to be adjusted too.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; We had bad results [program hanging or aborting] 
</span><br>
<span class="quotelev1">&gt; when trying to run large programs which include PDE solvers
</span><br>
<span class="quotelev1">&gt; [climate models] and allowing oversubscription, even when a substantial amount
</span><br>
<span class="quotelev1">&gt; of  RAM was idle.  
</span><br>
<span class="quotelev1">&gt; That was a while ago, and I have not pursued the issue any further.
</span><br>
<span class="quotelev1">&gt; Maybe context switching among the [surplus of] processes is the problem.
</span><br>
<span class="quotelev1">&gt; Of course for 'hello, world' type of programs oversubscription works well.
</span><br>
<span class="quotelev1">&gt; Where is the threshold when oversubscription makes a program break down, 
</span><br>
<span class="quotelev1">&gt; I'd guess only trial and error may tell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2011, at 2:42 PM, Santosh Ansumali wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;       We are running a PDE solver which is memory bound. Due to
</span><br>
<span class="quotelev2">&gt;&gt; cache related issue,   smaller  number of grid point per core leads to
</span><br>
<span class="quotelev2">&gt;&gt; better performance for this code.  Thus, though available memory per
</span><br>
<span class="quotelev2">&gt;&gt; core is more than 2 GB, we are able to good  performance   by using
</span><br>
<span class="quotelev2">&gt;&gt; less than 1 GB per core.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to know whether oversubscribing the cores can potentially
</span><br>
<span class="quotelev2">&gt;&gt; improve performance of such a code.  My thinking is that if I
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribe the cores,  each thread will be using less than 1 GB so
</span><br>
<span class="quotelev2">&gt;&gt; cache related problems will be less severe.  Is this logic correct or
</span><br>
<span class="quotelev2">&gt;&gt; due to cache conflict performance will deteriorate further?
</span><br>
<span class="quotelev2">&gt;&gt;     In case, over-subscription can help, how shall I modify
</span><br>
<span class="quotelev2">&gt;&gt; submission file (using sun grid engine) to enable over-subscription of
</span><br>
<span class="quotelev2">&gt;&gt; cores?
</span><br>
<span class="quotelev2">&gt;&gt; my current submission file is written as follows
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N first
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -e $JOB_ID.$JOB_NAME.ERROR
</span><br>
<span class="quotelev2">&gt;&gt; #$ -o $JOB_ID.$JOB_NAME.OUTPUT
</span><br>
<span class="quotelev2">&gt;&gt; #$ -P faculty_prj
</span><br>
<span class="quotelev2">&gt;&gt; #$ -p 0
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 8
</span><br>
<span class="quotelev2">&gt;&gt; /opt/mpi/openmpi/1.3.3/gnu/bin/mpirun -np $NSLOTS ./test_vel.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to allow over-subscription by modifying submission file
</span><br>
<span class="quotelev2">&gt;&gt; itself?  Or do I need to change hostfiles somehow?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help!
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards
</span><br>
<span class="quotelev2">&gt;&gt; Santosh Ansumali,
</span><br>
<span class="quotelev2">&gt;&gt; Faculty Fellow,
</span><br>
<span class="quotelev2">&gt;&gt; Engineering Mechanics Unit
</span><br>
<span class="quotelev2">&gt;&gt; Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
</span><br>
<span class="quotelev2">&gt;&gt; Jakkur, Bangalore-560 064, India
</span><br>
<span class="quotelev2">&gt;&gt; Tel: + 91 80 22082938
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
<li><strong>Next message:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
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
