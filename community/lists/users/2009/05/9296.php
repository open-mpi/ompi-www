<?
$subject_val = "[OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 03:17:57 2009" -->
<!-- isoreceived="20090512071757" -->
<!-- sent="Tue, 12 May 2009 12:47:16 +0530" -->
<!-- isosent="20090512071716" -->
<!-- name="ansul.srivastava1_at_[hidden]" -->
<!-- email="ansul.srivastava1_at_[hidden]" -->
<!-- subject="[OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5" -->
<!-- id="CD1D2FB0F264404190BCCD2B8D40CEB7018F410B_at_MYS-MIA-MSG.wipro.com" -->
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
<strong>Subject:</strong> [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5<br>
<strong>From:</strong> <a href="mailto:ansul.srivastava1_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Torque%202.2.1%20problem%20with%20OpenMPI%201.2.5"><em>ansul.srivastava1_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-05-12 03:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9297.php">Matthieu Brucher: "[OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9295.php">Anton Starikov: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
<li><strong>Reply:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;
<br>
I am using OFED 1.3 version  inw hich OPENMPI 1.2.5 is included , I have
<br>
compiled with Intel and gcc .
<br>
&nbsp;
<br>
&nbsp;
<br>
Problem is that during qsub i am not able to run the jobs but same time
<br>
when i use mpiexec command it is working fine without any issue.
<br>
&nbsp;
<br>
here is my script file ; Please help me to diagnose this issue.
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
#!/bin/sh
<br>
<p>#PBS -N Ad2.0
<br>
<p>#PBS -l nodes=3:ppn=8
<br>
<p>#PBS -l walltime=100:00:00
<br>
<p>date 
<br>
<p>cd ${PBS_O_WORKDIR}
<br>
<p>nprocs=`wc -l &lt; ${PBS_NODEFILE}`
<br>
<p>echo &quot;--- PBS_NODEFILE CONTENT ---&quot;
<br>
<p>cat $PBS_NODEFILE
<br>
<p>echo &quot;--- PBS_NODEFILE CONTENT ---&quot;
<br>
<p>echo &quot;Submit host: $(hostname)&quot;
<br>
<p>mpiexec -machinefile ${PBS_NODEFILE} -n ${nprocs} ./prewet.out
<br>
<p>date 
<br>
<p>Thanks and Regards
<br>
<p>ANSUL SRIVASTAVA
<br>
MOBILE -- 9900180278
<br>
Sr. CSE
<br>
TSG Group(Infrastructure Availability Services )
<br>
Wipro Infotech | 146-147, Metagalli Industrial Area 
<br>
Metagalli, Mysore 570016
<br>
Direct Number :  0821-2419074/3088125
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Please do not print this email unless it is absolutely necessary. 
<br>
<p>The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
<br>
<p>WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
<br>
<p>www.wipro.com
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-9296/image002.jpg" alt="image002.jpg
">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9297.php">Matthieu Brucher: "[OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9295.php">Anton Starikov: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
<li><strong>Reply:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
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
