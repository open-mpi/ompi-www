<?
$subject_val = "Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 07:22:12 2009" -->
<!-- isoreceived="20090512112212" -->
<!-- sent="Tue, 12 May 2009 05:21:51 -0600" -->
<!-- isosent="20090512112151" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5" -->
<!-- id="7C85B7A2-087C-4A89-897F-8115C542ED7C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CD1D2FB0F264404190BCCD2B8D40CEB7018F410B_at_MYS-MIA-MSG.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 07:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9303.php">Ralph Castain: "Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9301.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9296.php">ansul.srivastava1_at_[hidden]: "[OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 1.2.x series has a bug in it when used with Torque. Simply do not  
<br>
include -machinefile on your mpiexec cmd line and it should work fine.  
<br>
It will  automatically pickup the PBS_NODEFILE contents.
<br>
<p><p>On May 12, 2009, at 1:17 AM, &lt;ansul.srivastava1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OFED 1.3 version  inw hich OPENMPI 1.2.5 is included , I  
</span><br>
<span class="quotelev1">&gt; have compiled with Intel and gcc .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem is that during qsub i am not able to run the jobs but same  
</span><br>
<span class="quotelev1">&gt; time when i use mpiexec command it is working fine without any issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is my script file ; Please help me to diagnose this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -N Ad2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=3:ppn=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=100:00:00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; date
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd ${PBS_O_WORKDIR}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nprocs=`wc -l &lt; ${PBS_NODEFILE}`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;--- PBS_NODEFILE CONTENT ---&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;--- PBS_NODEFILE CONTENT ---&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;Submit host: $(hostname)&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -machinefile ${PBS_NODEFILE} -n ${nprocs} ./prewet.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; date
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards
</span><br>
<span class="quotelev1">&gt; ANSUL SRIVASTAVA
</span><br>
<span class="quotelev1">&gt; MOBILE -- 9900180278
</span><br>
<span class="quotelev1">&gt; Sr. CSE
</span><br>
<span class="quotelev1">&gt; TSG Group(Infrastructure Availability Services )
</span><br>
<span class="quotelev1">&gt; Wipro Infotech | 146-147, Metagalli Industrial Area
</span><br>
<span class="quotelev1">&gt; Metagalli, Mysore 570016
</span><br>
<span class="quotelev1">&gt; Direct Number :  0821-2419074/3088125
</span><br>
<span class="quotelev1">&gt; &lt;image002.jpg&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any  
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of  
</span><br>
<span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you  
</span><br>
<span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please  
</span><br>
<span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message  
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The  
</span><br>
<span class="quotelev1">&gt; recipient should check this email and any attachments for the  
</span><br>
<span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage  
</span><br>
<span class="quotelev1">&gt; caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.wipro.com
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9303.php">Ralph Castain: "Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9301.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9296.php">ansul.srivastava1_at_[hidden]: "[OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
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
