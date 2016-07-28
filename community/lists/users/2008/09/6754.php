<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 03:28:07 2008" -->
<!-- isoreceived="20080929072807" -->
<!-- sent="Mon, 29 Sep 2008 01:27:56 -0600" -->
<!-- isosent="20080929072756" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="17EF58C1-28AC-4004-8F38-0952EC291E81_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809290207.m8T27hg6030500_at_despam-10.iastate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] qsub - mpirun problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 03:27:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6755.php">Gabriele Fatigati: "[OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Zhiliang
<br>
<p>This has nothing to do with how you configured Open MPI. The issue is  
<br>
that your Torque queue manager isn't setting the expected environment  
<br>
variables to tell us the allocation. I'm not sure why it wouldn't be  
<br>
doing so, and I'm afraid I'm not enough of a Torque person to know how  
<br>
to guide you.
<br>
<p>What is happening, though, is that we are actually launching via ssh  
<br>
instead of Torque since we don't see the Torque system. Your system  
<br>
appears happy to let us do so, so this may not be a real problem for  
<br>
you other than the annoyance of having to specify the machinefile  
<br>
every time.
<br>
<p>I'm curious as to how you find the machinefile - what is the file  
<br>
named? In a typical Torque install, the file is located in some  
<br>
default tmp directory and is given a name that includes the PBS jobid.  
<br>
Since you didn't find that environment variable, how did you know what  
<br>
filename to pass mpirun?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Sep 28, 2008, at 8:07 PM, Zhiliang Hu wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your quick response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed as you expected, &quot;printenv | grep PBS&quot; produced nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; qmgr -c 'p s'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Create queues and set their attributes.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Create and define queue default
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; create queue default
</span><br>
<span class="quotelev1">&gt; set queue default queue_type = Execution
</span><br>
<span class="quotelev1">&gt; set queue default resources_default.nodes = 7
</span><br>
<span class="quotelev1">&gt; set queue default enabled = True
</span><br>
<span class="quotelev1">&gt; set queue default started = True
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Set server attributes.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; set server scheduling = True
</span><br>
<span class="quotelev1">&gt; set server acl_hosts = nagrp2
</span><br>
<span class="quotelev1">&gt; set server default_queue = default
</span><br>
<span class="quotelev1">&gt; set server log_events = 511
</span><br>
<span class="quotelev1">&gt; set server mail_from = adm
</span><br>
<span class="quotelev1">&gt; set server query_other_jobs = True
</span><br>
<span class="quotelev1">&gt; set server resources_available.nodect = 6
</span><br>
<span class="quotelev1">&gt; set server scheduler_iteration = 600
</span><br>
<span class="quotelev1">&gt; set server node_check_rate = 150
</span><br>
<span class="quotelev1">&gt; set server tcp_timeout = 6
</span><br>
<span class="quotelev1">&gt; set server next_job_number = 793
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I am not sure what/how is missing from my configurations (do you  
</span><br>
<span class="quotelev1">&gt; mean the installation &quot;configure&quot; step with optional directives) or  
</span><br>
<span class="quotelev1">&gt; else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhiliang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 07:16 PM 9/28/2008 -0600, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Zhiliang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First thing to check is that your Torque system is defining and
</span><br>
<span class="quotelev2">&gt;&gt; setting the environmental variables we are expecting in a Torque
</span><br>
<span class="quotelev2">&gt;&gt; system. It is quite possible that your Torque system isn't configured
</span><br>
<span class="quotelev2">&gt;&gt; as we expect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you run a job and send us the output from &quot;printenv | grep PBS&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; We should see a PBS jobid, the name of the file containing the names
</span><br>
<span class="quotelev2">&gt;&gt; of the allocated nodes, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since you are able to run with -machinefile, my guess is that your
</span><br>
<span class="quotelev2">&gt;&gt; system isn't setting those environmental variables as we expect. In
</span><br>
<span class="quotelev2">&gt;&gt; that case, you will have to keep specifying the machinefile by hand.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 28, 2008, at 7:02 PM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have asked this question on TorqueUsers list.  Responses from that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list suggests that the question be asked on this list:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The situation is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can submit my jobs as in:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where &quot;mpi_program&quot; is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- however everything went to run on the head node (one time on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first compute node).  Jobs can be done anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While the mpirun can run on its own by specifying a &quot;-machinefile&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is pointed out by Glen among others, and also on this web site <a href="http://wiki.hpc.ufl.edu/index.php/Common_Problems">http://wiki.hpc.ufl.edu/index.php/Common_Problems</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   (I got the same error as the last example on that web page) that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's not a good idea to provide machinefile since it's &quot;already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; handled by OpenMPI and Torque&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question is, why the OpenMPI and Torque is not handling the jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to all nodes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ps 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OpenMPI is configured and installed with the &quot;--with-tm&quot; option,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the &quot;ompi_info&quot; does show lines:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ps 2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/path/to/mpirun -np 12 -machinefile /path/to/machinefile /path/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to/ my_program&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works normal (send jobs to all nodes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zhiliang
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
<li><strong>Next message:</strong> <a href="6755.php">Gabriele Fatigati: "[OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
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
