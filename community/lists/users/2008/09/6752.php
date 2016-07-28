<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 28 21:16:45 2008" -->
<!-- isoreceived="20080929011645" -->
<!-- sent="Sun, 28 Sep 2008 19:16:38 -0600" -->
<!-- isosent="20080929011638" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="297D3668-BBFA-480C-8AA3-4DFE9A7DC71F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809290102.m8T12ic5022727_at_despam-11.iastate.edu" -->
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
<strong>Date:</strong> 2008-09-28 21:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Zhiliang
<br>
<p>First thing to check is that your Torque system is defining and  
<br>
setting the environmental variables we are expecting in a Torque  
<br>
system. It is quite possible that your Torque system isn't configured  
<br>
as we expect.
<br>
<p>Can you run a job and send us the output from &quot;printenv | grep PBS&quot;?  
<br>
We should see a PBS jobid, the name of the file containing the names  
<br>
of the allocated nodes, etc.
<br>
<p>Since you are able to run with -machinefile, my guess is that your  
<br>
system isn't setting those environmental variables as we expect. In  
<br>
that case, you will have to keep specifying the machinefile by hand.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Sep 28, 2008, at 7:02 PM, Zhiliang Hu wrote:
<br>
<p><span class="quotelev1">&gt; I have asked this question on TorqueUsers list.  Responses from that  
</span><br>
<span class="quotelev1">&gt; list suggests that the question be asked on this list:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The situation is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can submit my jobs as in:
</span><br>
<span class="quotelev2">&gt;&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where &quot;mpi_program&quot; is:
</span><br>
<span class="quotelev1">&gt; /path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- however everything went to run on the head node (one time on the  
</span><br>
<span class="quotelev1">&gt; first compute node).  Jobs can be done anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While the mpirun can run on its own by specifying a &quot;-machinefile&quot;,  
</span><br>
<span class="quotelev1">&gt; it is pointed out by Glen among others, and also on this web site <a href="http://wiki.hpc.ufl.edu/index.php/Common_Problems">http://wiki.hpc.ufl.edu/index.php/Common_Problems</a> 
</span><br>
<span class="quotelev1">&gt;  (I got the same error as the last example on that web page) that  
</span><br>
<span class="quotelev1">&gt; it's not a good idea to provide machinefile since it's &quot;already  
</span><br>
<span class="quotelev1">&gt; handled by OpenMPI and Torque&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is, why the OpenMPI and Torque is not handling the jobs  
</span><br>
<span class="quotelev1">&gt; to all nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps 1:
</span><br>
<span class="quotelev1">&gt; The OpenMPI is configured and installed with the &quot;--with-tm&quot; option,  
</span><br>
<span class="quotelev1">&gt; and the &quot;ompi_info&quot; does show lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt; MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps 2:
</span><br>
<span class="quotelev1">&gt; &quot;/path/to/mpirun -np 12 -machinefile /path/to/machinefile /path/to/ 
</span><br>
<span class="quotelev1">&gt; my_program&quot;
</span><br>
<span class="quotelev1">&gt; works normal (send jobs to all nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhiliang
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
<li><strong>Next message:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
