<?
$subject_val = "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:21:46 2010" -->
<!-- isoreceived="20100329152146" -->
<!-- sent="Mon, 29 Mar 2010 11:21:42 -0400" -->
<!-- isosent="20100329152142" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint" -->
<!-- id="619150C7-2500-40DC-AC64-B54A2EA61315_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640D4F47A2437_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12450.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<li><strong>Previous message:</strong> <a href="12448.php">Jeff Squyres: "Re: [OMPI users] configuration and compilation outputs"</a>
<li><strong>In reply to:</strong> <a href="12391.php">Addepalli, Srirangam V: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2010, at 12:58 PM, Addepalli, Srirangam V wrote:
<br>
<p><span class="quotelev1">&gt; Yes We have seen this behavior too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another behavior I have seen is that one MPI process starts to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; show different elapsed time than its peers. Is it because  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoint happened on behalf of this process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; R
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On  
</span><br>
<span class="quotelev1">&gt; Behalf Of ananda.mudar_at_[hidden] [ananda.mudar_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, March 20, 2010 10:18 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] top command output shows huge CPU utilization  
</span><br>
<span class="quotelev1">&gt; when        openmpi processes resume after the checkpoint
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I checkpoint my openmpi application using ompi_checkpoint, I  
</span><br>
<span class="quotelev1">&gt; see that top command suddenly shows some really huge numbers in &quot;CPU  
</span><br>
<span class="quotelev1">&gt; %&quot; field such as 150% 200% etc. After sometime, these numbers do  
</span><br>
<span class="quotelev1">&gt; come back to the normal numbers under 100%. This happens exactly  
</span><br>
<span class="quotelev1">&gt; around the time checkpoint is completed and when the processes are  
</span><br>
<span class="quotelev1">&gt; resuming the execution.
</span><br>
<p>One cause for this type of CPU utilization is due to the C/R thread.  
<br>
During non-checkpoint/normal processing the thread is polling for a  
<br>
checkpoint fairly aggressively. You can change how aggressive the  
<br>
thread is by adjusting the two parameters below:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_check">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_check</a>
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_wait">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_wait</a>
<br>
<p>I usually set the latter to:
<br>
&nbsp;&nbsp;opal_cr_thread_sleep_wait=1000
<br>
<p>You can also turn off the C/R thread, either by configure'ing without  
<br>
it, or disabling it at runtime by setting the 'opal_cr_use_thread'  
<br>
parameter to '0':
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_use_thread">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_use_thread</a>
<br>
<p><p>The CPU increase during the checkpoint may be due to both the Open MPI  
<br>
C/R thread, and the BLCR thread becoming active on the machine. You  
<br>
might try to determine whether this is BLCR's CPU utilization or Open  
<br>
MPI's by creating a single process application and watching the CPU  
<br>
utilization when checkpointing with BLCR. You may also want to look at  
<br>
the memory consumption of the process to make sure that there is  
<br>
enough for BLCR to run efficiently.
<br>
<p>This may also be due to processes finished with the checkpoint waiting  
<br>
on other peer processes to finish. I don't think we have a good way to  
<br>
control how aggressively these waiting processes poll for completion  
<br>
of peers. If this becomes a problem we can look into adding a  
<br>
parameter similar to opal_cr_thread_sleep_wait to throttle the polling  
<br>
on the machine.
<br>
<p>The disadvantage of making the various polling for completion loops  
<br>
less aggressive, is that the checkpoint may stall the checkpoint and/ 
<br>
or application for a little longer than necessary. But if this is  
<br>
acceptable to the user, then they can adjust the MCA parameters as  
<br>
necessary.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another behavior I have seen is that one MPI process starts to show  
</span><br>
<span class="quotelev1">&gt; different elapsed time than its peers. Is it because checkpoint  
</span><br>
<span class="quotelev1">&gt; happened on behalf of this process?
</span><br>
<p>Can you explain a bit more about what you mean by this? Neither Open  
<br>
MPI nor BLCR messes with the timer on the machine, so we are not  
<br>
changing it in any way. The process is 'stopped' briefly while BLCR  
<br>
takes the checkpoint, so this will extend the running time of the  
<br>
process. How much the running time is extended (a.k.a. checkpoint  
<br>
overhead) is determined by a bunch of things, but primarily by the  
<br>
storage device(s) that the checkpoint is being written to.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For your reference, I am using open mpi 1.3.4 and BLCR 0.8.2 for  
</span><br>
<span class="quotelev1">&gt; checkpointing.
</span><br>
<p>It would be interesting to know if you see the same behavior with the  
<br>
trunk or v1.5 series of Open MPI.
<br>
<p>Hope that helps,
<br>
Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Anand
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
<li><strong>Next message:</strong> <a href="12450.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<li><strong>Previous message:</strong> <a href="12448.php">Jeff Squyres: "Re: [OMPI users] configuration and compilation outputs"</a>
<li><strong>In reply to:</strong> <a href="12391.php">Addepalli, Srirangam V: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
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
