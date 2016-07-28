<?
$subject_val = "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 10:20:46 2010" -->
<!-- isoreceived="20100518142046" -->
<!-- sent="Tue, 18 May 2010 10:20:41 -0400" -->
<!-- isosent="20100518142041" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart fails with &amp;quot;found pid in use&amp;quot;" -->
<!-- id="E894160B-6B0D-4249-A1DC-AECB3FD0FF34_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E70719099A_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 10:20:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13075.php">Josh Hursey: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13073.php">Ralph Castain: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>In reply to:</strong> <a href="13046.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I recently hit this same problem while doing some scalability  
<br>
testing. I experimented with adding the --no-restore-pid option, but  
<br>
found the same problem as you mention. Unfortunately, the problem is  
<br>
with BLCR, not Open MPI.
<br>
<p>BLCR will restart the process with a new PID, but the value returned  
<br>
from getpid() is the old PID, not the new one. So when we connect the  
<br>
daemon and the newly restarted process they are exchanging an invalid  
<br>
PID. This eventually leads to ompi-checkpoint waiting for a PID to  
<br>
respond that may not exist on the machine.
<br>
<p>I am working on a bug report for BLCR at the moment. Once it is fixed  
<br>
on that side, then I would be happy to add a -no-restore-pid like  
<br>
option to the Open MPI C/R system.
<br>
<p>-- Josh
<br>
<p>On May 14, 2010, at 11:34 AM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using open mpi v1.3.4 with BLCR 0.8.2. I have been testing my  
</span><br>
<span class="quotelev1">&gt; openmpi based program on a 3-node cluster (each node is a Intel  
</span><br>
<span class="quotelev1">&gt; Nehalem based dual quad core) and I have been successful in  
</span><br>
<span class="quotelev1">&gt; checkpointing and restarting the program successfully multiple times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Recently I moved to a 15 node cluster with the same configuration  
</span><br>
<span class="quotelev1">&gt; and I started seeing the problem with ompi-restart.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ompi-checkpoint gets completed successfully and I terminate the  
</span><br>
<span class="quotelev1">&gt; program after that. I have ensured that there are no MPI processes  
</span><br>
<span class="quotelev1">&gt; before I restarted. When I restart using ompi-restart, I get the  
</span><br>
<span class="quotelev1">&gt; error in restarting few of the MPI processes and the error message  
</span><br>
<span class="quotelev1">&gt; is &#147;found pid 4185 in use; Restart failed: Device or Resource  
</span><br>
<span class="quotelev1">&gt; busy&#148; (of course with different pid numbers). What I found was that  
</span><br>
<span class="quotelev1">&gt; when the MPI process was restarted, it got restarted on a different  
</span><br>
<span class="quotelev1">&gt; node than what it was running before termination and found that it  
</span><br>
<span class="quotelev1">&gt; cannot reuse the pid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unlike cr_restart (BLCR), ompi-restart doesn&#146;t have an option to say  
</span><br>
<span class="quotelev1">&gt; not to use the same pid with option such as &#147;--no-restore-pid&#148;.  
</span><br>
<span class="quotelev1">&gt; Since ompi-restart in turn calls cr_restart, I tried to alias  
</span><br>
<span class="quotelev1">&gt; cr_restart to &#147;cr_restart --no-restore-pid&#148;. This actually made the  
</span><br>
<span class="quotelev1">&gt; problem &#147;pid in use&#148; go away and the process completes successfully.  
</span><br>
<span class="quotelev1">&gt; However if I call ompi-checkpoint on the restarted open MPI job,  
</span><br>
<span class="quotelev1">&gt; both the openMPI job (all MPI processes) and the checkpoint command  
</span><br>
<span class="quotelev1">&gt; hang forever. I guess this is because of the fact that ompi-restart  
</span><br>
<span class="quotelev1">&gt; has different set of pids compared to the actual pids that are  
</span><br>
<span class="quotelev1">&gt; running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long story short, I am stuck with this problem as I cannot get the  
</span><br>
<span class="quotelev1">&gt; original pids during restart.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I really appreciate if you have any other options to share with me  
</span><br>
<span class="quotelev1">&gt; which I can use to overcome this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ananda
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13075.php">Josh Hursey: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13073.php">Ralph Castain: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>In reply to:</strong> <a href="13046.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
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
