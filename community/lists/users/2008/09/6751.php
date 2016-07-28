<?
$subject_val = "[OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 28 21:02:51 2008" -->
<!-- isoreceived="20080929010251" -->
<!-- sent="Sun, 28 Sep 2008 20:02:26 -0500" -->
<!-- isosent="20080929010226" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="[OMPI users] qsub - mpirun problem" -->
<!-- id="200809290102.m8T12ic5022727_at_despam-11.iastate.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] qsub - mpirun problem<br>
<strong>From:</strong> Zhiliang Hu (<em>zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-28 21:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6752.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6750.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6752.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6752.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6760.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6765.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6778.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6781.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6785.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have asked this question on TorqueUsers list.  Responses from that list suggests that the question be asked on this list:
<br>
<p>The situation is:
<br>
<p>I can submit my jobs as in:
<br>
<span class="quotelev1">&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<p>where &quot;mpi_program&quot; is:
<br>
/path/to/mpirun -np 12 /path/to/my_program
<br>
<p>-- however everything went to run on the head node (one time on the first compute node).  Jobs can be done anyway.
<br>
<p>While the mpirun can run on its own by specifying a &quot;-machinefile&quot;, it is pointed out by Glen among others, and also on this web site <a href="http://wiki.hpc.ufl.edu/index.php/Common_Problems">http://wiki.hpc.ufl.edu/index.php/Common_Problems</a> (I got the same error as the last example on that web page) that it's not a good idea to provide machinefile since it's &quot;already handled by OpenMPI and Torque&quot;.
<br>
<p>My question is, why the OpenMPI and Torque is not handling the jobs to all nodes?
<br>
<p>ps 1:
<br>
The OpenMPI is configured and installed with the &quot;--with-tm&quot; option, and the &quot;ompi_info&quot; does show lines:
<br>
<p>&nbsp;MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.7)
<br>
<p>ps 2:
<br>
&quot;/path/to/mpirun -np 12 -machinefile /path/to/machinefile /path/to/my_program&quot;
<br>
works normal (send jobs to all nodes).
<br>
<p>Thanks,
<br>
<p>Zhiliang 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6752.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6750.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6752.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6752.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6753.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6760.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6762.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6765.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6766.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6778.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6781.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe reply:</strong> <a href="6785.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
