<?
$subject_val = "Re: [OMPI users] over-subscription of cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 26 11:55:28 2011" -->
<!-- isoreceived="20111226165528" -->
<!-- sent="Mon, 26 Dec 2011 22:25:00 +0530" -->
<!-- isosent="20111226165500" -->
<!-- name="Santosh Ansumali" -->
<!-- email="ansumali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] over-subscription of cores" -->
<!-- id="CAJd+HkNxg6g0CYB7+ihQh61WbMMb-8Xv2qyD7T0h-2-BRO84vA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="89202274-DCB8-48C2-B33B-4DC3562066F0_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Santosh Ansumali (<em>ansumali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-26 11:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18055.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18055.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dr. Correa,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Sorry for my ignorance on cluster maintenance.  So far  our
<br>
cluster is just set-up by a vendor and we do not know more details.
<br>
So far I am understanding the concept but we are not able to follow
<br>
what precisely we need to try out for allowing oversubscription.
<br>
In this submission file
<br>
my current submission file is written as follows
<br>
#!/bin/bash
<br>
#$ -N first
<br>
#$ -S /bin/bash
<br>
#$ -cwd
<br>
#$ -e $JOB_ID.$JOB_NAME.ERROR
<br>
#$ -o $JOB_ID.$JOB_NAME.OUTPUT
<br>
#$ -P faculty_prj
<br>
#$ -p 0
<br>
#$ -pe orte 8
<br>
/opt/mpi/openmpi/1.3.3/gnu/bin/mpirun -np $NSLOTS ./test_vel.out
<br>
<p>what change we should do to allow for oversubscription.
<br>
Best,
<br>
Santosh
<br>
<p><p><p>On Mon, Dec 26, 2011 at 9:02 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Am 23.12.2011 um 21:16 schrieb Gustavo Correa:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know about the grid engine/ SGE.
</span><br>
<span class="quotelev2">&gt;&gt; However, in Torque, the batch/resource manager I use,
</span><br>
<span class="quotelev2">&gt;&gt; to allow oversubscription, you need to modify the batch server nodes file
</span><br>
<span class="quotelev2">&gt;&gt; and pretend the nodes have more cores than the physical ones.
</span><br>
<span class="quotelev2">&gt;&gt; [Something like 'node01 np=8' would change to 'node01 np=16' for instance.]
</span><br>
<span class="quotelev2">&gt;&gt; Maybe there is something similar in SGE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yep, it's in the queue definition, where you can define the slots per queue instance on each machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on your setup: if you have more than one queue per machine, the admin might already have set up some RQS (Resource Quota Set) or an absolut limit of slots across all queues residing on a host in teh exechost definition. In this case this needs to be adjusted too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We had bad results [program hanging or aborting]
</span><br>
<span class="quotelev2">&gt;&gt; when trying to run large programs which include PDE solvers
</span><br>
<span class="quotelev2">&gt;&gt; [climate models] and allowing oversubscription, even when a substantial amount
</span><br>
<span class="quotelev2">&gt;&gt; of &#160;RAM was idle.
</span><br>
<span class="quotelev2">&gt;&gt; That was a while ago, and I have not pursued the issue any further.
</span><br>
<span class="quotelev2">&gt;&gt; Maybe context switching among the [surplus of] processes is the problem.
</span><br>
<span class="quotelev2">&gt;&gt; Of course for 'hello, world' type of programs oversubscription works well.
</span><br>
<span class="quotelev2">&gt;&gt; Where is the threshold when oversubscription makes a program break down,
</span><br>
<span class="quotelev2">&gt;&gt; I'd guess only trial and error may tell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 23, 2011, at 2:42 PM, Santosh Ansumali wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; We are running a PDE solver which is memory bound. Due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache related issue, &#160; smaller &#160;number of grid point per core leads to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better performance for this code. &#160;Thus, though available memory per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core is more than 2 GB, we are able to good &#160;performance &#160; by using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; less than 1 GB per core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to know whether oversubscribing the cores can potentially
</span><br>
<span class="quotelev3">&gt;&gt;&gt; improve performance of such a code. &#160;My thinking is that if I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscribe the cores, &#160;each thread will be using less than 1 GB so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache related problems will be less severe. &#160;Is this logic correct or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; due to cache conflict performance will deteriorate further?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; In case, over-subscription can help, how shall I modify
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
<span class="quotelev3">&gt;&gt;&gt; itself? &#160;Or do I need to change hostfiles somehow?
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
<span class="quotelev3">&gt;&gt;&gt; Jakkur, Bangalore-560 064, India
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
<p><p><p><pre>
-- 
Santosh Ansumali,
Faculty Fellow,
Engineering Mechanics Unit
Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
&#160;Jakkur, Bangalore-560 064, India
Tel: + 91 80 22082938
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>In reply to:</strong> <a href="18050.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18055.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18055.php">Reuti: "Re: [OMPI users] over-subscription of cores"</a>
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
