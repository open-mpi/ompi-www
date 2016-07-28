<?
$subject_val = "Re: [OMPI users] over-subscription of cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 26 12:44:35 2011" -->
<!-- isoreceived="20111226174435" -->
<!-- sent="Mon, 26 Dec 2011 18:44:18 +0100" -->
<!-- isosent="20111226174418" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] over-subscription of cores" -->
<!-- id="C8D51B6F-C5D9-46F9-8BF4-5DD75D146F2C_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJd+HkNxg6g0CYB7+ihQh61WbMMb-8Xv2qyD7T0h-2-BRO84vA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-12-26 12:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18056.php">Юлов, Дмитрий: "[OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Previous message:</strong> <a href="18054.php">Ralph Castain: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 26.12.2011 um 17:55 schrieb Santosh Ansumali:
<br>
<p><span class="quotelev1">&gt; Dear Dr. Correa,
</span><br>
<span class="quotelev1">&gt;    Sorry for my ignorance on cluster maintenance.  So far  our
</span><br>
<span class="quotelev1">&gt; cluster is just set-up by a vendor and we do not know more details.
</span><br>
<span class="quotelev1">&gt; So far I am understanding the concept but we are not able to follow
</span><br>
<span class="quotelev1">&gt; what precisely we need to try out for allowing oversubscription.
</span><br>
<span class="quotelev1">&gt; In this submission file
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
<p>if it's a common question regarding the queuing system, you can also turn to the SGE list <a href="http://gridengine.org/blog/2011/01/27/gridengine-users-mailing-list/">http://gridengine.org/blog/2011/01/27/gridengine-users-mailing-list/</a> If you have no contract with the vendor, you will need someone in charge for it at your site and gets familiar with SGE administration.
<br>
<p>$ man queue_conf # Have a look what can be defined in a queue.
<br>
<p>$ qconf -sql # Shows what queues are defined.
<br>
<p>$ qconf -mq all.q # replace all.q with the one you found above and edit the slot count.
<br>
<p>$ man sge_pe # Check the options for the PE.
<br>
<p>$ qconf -spl # Shows what PEs are defined.
<br>
<p>$ qconf -mp orte # Check the allocation rule, what's there?
<br>
<p>Then change in the job script the 8 to the number you used above.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; what change we should do to allow for oversubscription.
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Santosh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 26, 2011 at 9:02 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 23.12.2011 um 21:16 schrieb Gustavo Correa:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know about the grid engine/ SGE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, in Torque, the batch/resource manager I use,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to allow oversubscription, you need to modify the batch server nodes file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and pretend the nodes have more cores than the physical ones.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Something like 'node01 np=8' would change to 'node01 np=16' for instance.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe there is something similar in SGE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yep, it's in the queue definition, where you can define the slots per queue instance on each machine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depending on your setup: if you have more than one queue per machine, the admin might already have set up some RQS (Resource Quota Set) or an absolut limit of slots across all queues residing on a host in teh exechost definition. In this case this needs to be adjusted too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We had bad results [program hanging or aborting]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when trying to run large programs which include PDE solvers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [climate models] and allowing oversubscription, even when a substantial amount
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of  RAM was idle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That was a while ago, and I have not pursued the issue any further.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe context switching among the [surplus of] processes is the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course for 'hello, world' type of programs oversubscription works well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where is the threshold when oversubscription makes a program break down,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd guess only trial and error may tell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 23, 2011, at 2:42 PM, Santosh Ansumali wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       We are running a PDE solver which is memory bound. Due to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cache related issue,   smaller  number of grid point per core leads to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; better performance for this code.  Thus, though available memory per
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core is more than 2 GB, we are able to good  performance   by using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; less than 1 GB per core.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want to know whether oversubscribing the cores can potentially
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; improve performance of such a code.  My thinking is that if I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oversubscribe the cores,  each thread will be using less than 1 GB so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cache related problems will be less severe.  Is this logic correct or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; due to cache conflict performance will deteriorate further?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     In case, over-subscription can help, how shall I modify
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; submission file (using sun grid engine) to enable over-subscription of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my current submission file is written as follows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -N first
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -e $JOB_ID.$JOB_NAME.ERROR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -o $JOB_ID.$JOB_NAME.OUTPUT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -P faculty_prj
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -p 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -pe orte 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/mpi/openmpi/1.3.3/gnu/bin/mpirun -np $NSLOTS ./test_vel.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible to allow over-subscription by modifying submission file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; itself?  Or do I need to change hostfiles somehow?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your help!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Santosh Ansumali,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Faculty Fellow,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Engineering Mechanics Unit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jakkur, Bangalore-560 064, India
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: + 91 80 22082938
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18056.php">Юлов, Дмитрий: "[OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Previous message:</strong> <a href="18054.php">Ralph Castain: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18051.php">Santosh Ansumali: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
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
