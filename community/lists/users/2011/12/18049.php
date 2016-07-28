<?
$subject_val = "Re: [OMPI users] over-subscription of cores";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 23 15:16:26 2011" -->
<!-- isoreceived="20111223201626" -->
<!-- sent="Fri, 23 Dec 2011 15:16:20 -0500" -->
<!-- isosent="20111223201620" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] over-subscription of cores" -->
<!-- id="556A49F8-E3CF-4C00-8354-29A160B84FA1_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJd+HkNZJrALZpusZywkghu31T+NuVWY0vbtfvEjnT46VZLUhA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-23 15:16:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18048.php">Santosh Ansumali: "[OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18048.php">Santosh Ansumali: "[OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know about the grid engine/ SGE.
<br>
However, in Torque, the batch/resource manager I use,
<br>
to allow oversubscription, you need to modify the batch server nodes file 
<br>
and pretend the nodes have more cores than the physical ones.
<br>
[Something like 'node01 np=8' would change to 'node01 np=16' for instance.]
<br>
Maybe there is something similar in SGE.
<br>
<p>We had bad results [program hanging or aborting] 
<br>
when trying to run large programs which include PDE solvers
<br>
[climate models] and allowing oversubscription, even when a substantial amount
<br>
of  RAM was idle.  
<br>
That was a while ago, and I have not pursued the issue any further.
<br>
Maybe context switching among the [surplus of] processes is the problem.
<br>
Of course for 'hello, world' type of programs oversubscription works well.
<br>
Where is the threshold when oversubscription makes a program break down, 
<br>
I'd guess only trial and error may tell.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Dec 23, 2011, at 2:42 PM, Santosh Ansumali wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;        We are running a PDE solver which is memory bound. Due to
</span><br>
<span class="quotelev1">&gt; cache related issue,   smaller  number of grid point per core leads to
</span><br>
<span class="quotelev1">&gt; better performance for this code.  Thus, though available memory per
</span><br>
<span class="quotelev1">&gt; core is more than 2 GB, we are able to good  performance   by using
</span><br>
<span class="quotelev1">&gt; less than 1 GB per core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to know whether oversubscribing the cores can potentially
</span><br>
<span class="quotelev1">&gt; improve performance of such a code.  My thinking is that if I
</span><br>
<span class="quotelev1">&gt; oversubscribe the cores,  each thread will be using less than 1 GB so
</span><br>
<span class="quotelev1">&gt; cache related problems will be less severe.  Is this logic correct or
</span><br>
<span class="quotelev1">&gt; due to cache conflict performance will deteriorate further?
</span><br>
<span class="quotelev1">&gt;      In case, over-subscription can help, how shall I modify
</span><br>
<span class="quotelev1">&gt; submission file (using sun grid engine) to enable over-subscription of
</span><br>
<span class="quotelev1">&gt; cores?
</span><br>
<span class="quotelev1">&gt; my current submission file is written as follows
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -N first
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -e $JOB_ID.$JOB_NAME.ERROR
</span><br>
<span class="quotelev1">&gt; #$ -o $JOB_ID.$JOB_NAME.OUTPUT
</span><br>
<span class="quotelev1">&gt; #$ -P faculty_prj
</span><br>
<span class="quotelev1">&gt; #$ -p 0
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 8
</span><br>
<span class="quotelev1">&gt; /opt/mpi/openmpi/1.3.3/gnu/bin/mpirun -np $NSLOTS ./test_vel.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to allow over-subscription by modifying submission file
</span><br>
<span class="quotelev1">&gt; itself?  Or do I need to change hostfiles somehow?
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt; Best Regards
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
<li><strong>Next message:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18048.php">Santosh Ansumali: "[OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18048.php">Santosh Ansumali: "[OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
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
