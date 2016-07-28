<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 28 22:07:50 2008" -->
<!-- isoreceived="20080929020750" -->
<!-- sent="Sun, 28 Sep 2008 21:07:38 -0500" -->
<!-- isosent="20080929020738" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="200809290207.m8T27hg6030500_at_despam-10.iastate.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5118_1222651029_m8T1H7c9014112_297D3668-BBFA-480C-8AA3-4DF E9A7DC71F_at_lanl.gov" -->
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
<strong>From:</strong> Zhiliang Hu (<em>zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-28 22:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6754.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6752.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6754.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6754.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thank you for your quick response.
<br>
<p>Indeed as you expected, &quot;printenv | grep PBS&quot; produced nothing.
<br>
<p>BTW, I have:
<br>
<p><span class="quotelev1">&gt; qmgr -c 'p s'
</span><br>
<p># Create queues and set their attributes.
<br>
#
<br>
#
<br>
# Create and define queue default
<br>
#
<br>
create queue default
<br>
set queue default queue_type = Execution
<br>
set queue default resources_default.nodes = 7
<br>
set queue default enabled = True
<br>
set queue default started = True
<br>
#
<br>
# Set server attributes.
<br>
#
<br>
set server scheduling = True
<br>
set server acl_hosts = nagrp2
<br>
set server default_queue = default
<br>
set server log_events = 511
<br>
set server mail_from = adm
<br>
set server query_other_jobs = True
<br>
set server resources_available.nodect = 6
<br>
set server scheduler_iteration = 600
<br>
set server node_check_rate = 150
<br>
set server tcp_timeout = 6
<br>
set server next_job_number = 793
<br>
<p>- I am not sure what/how is missing from my configurations (do you mean the installation &quot;configure&quot; step with optional directives) or else?
<br>
<p>Thank you,
<br>
<p>Zhiliang
<br>
<p>At 07:16 PM 9/28/2008 -0600, you wrote:
<br>
<span class="quotelev1">&gt;Hi Zhiliang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;First thing to check is that your Torque system is defining and  
</span><br>
<span class="quotelev1">&gt;setting the environmental variables we are expecting in a Torque  
</span><br>
<span class="quotelev1">&gt;system. It is quite possible that your Torque system isn't configured  
</span><br>
<span class="quotelev1">&gt;as we expect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you run a job and send us the output from &quot;printenv | grep PBS&quot;?  
</span><br>
<span class="quotelev1">&gt;We should see a PBS jobid, the name of the file containing the names  
</span><br>
<span class="quotelev1">&gt;of the allocated nodes, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Since you are able to run with -machinefile, my guess is that your  
</span><br>
<span class="quotelev1">&gt;system isn't setting those environmental variables as we expect. In  
</span><br>
<span class="quotelev1">&gt;that case, you will have to keep specifying the machinefile by hand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sep 28, 2008, at 7:02 PM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have asked this question on TorqueUsers list.  Responses from that  
</span><br>
<span class="quotelev2">&gt;&gt;list suggests that the question be asked on this list:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The situation is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I can submit my jobs as in:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;where &quot;mpi_program&quot; is:
</span><br>
<span class="quotelev2">&gt;&gt;/path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- however everything went to run on the head node (one time on the  
</span><br>
<span class="quotelev2">&gt;&gt;first compute node).  Jobs can be done anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;While the mpirun can run on its own by specifying a &quot;-machinefile&quot;,  
</span><br>
<span class="quotelev2">&gt;&gt;it is pointed out by Glen among others, and also on this web site <a href="http://wiki.hpc.ufl.edu/index.php/Common_Problems">http://wiki.hpc.ufl.edu/index.php/Common_Problems</a>  (I got the same error as the last example on that web page) that  
</span><br>
<span class="quotelev2">&gt;&gt;it's not a good idea to provide machinefile since it's &quot;already  
</span><br>
<span class="quotelev2">&gt;&gt;handled by OpenMPI and Torque&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;My question is, why the OpenMPI and Torque is not handling the jobs  
</span><br>
<span class="quotelev2">&gt;&gt;to all nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;ps 1:
</span><br>
<span class="quotelev2">&gt;&gt;The OpenMPI is configured and installed with the &quot;--with-tm&quot; option,  
</span><br>
<span class="quotelev2">&gt;&gt;and the &quot;ompi_info&quot; does show lines:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;ps 2:
</span><br>
<span class="quotelev2">&gt;&gt;&quot;/path/to/mpirun -np 12 -machinefile /path/to/machinefile /path/to/ my_program&quot;
</span><br>
<span class="quotelev2">&gt;&gt;works normal (send jobs to all nodes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Zhiliang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6754.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6752.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6754.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6754.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
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
