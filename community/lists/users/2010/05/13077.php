<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 14:34:46 2010" -->
<!-- isoreceived="20100518183446" -->
<!-- sent="Tue, 18 May 2010 14:34:42 -0400" -->
<!-- isosent="20100518183442" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="89B6CCDF-6D38-4343-B0B5-3D767C148290_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E70712A61F_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 14:34:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="13076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>In reply to:</strong> <a href="13023.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-checkpoint fails sometimes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The functionality of checkpoint operation is not tied to CPU  
<br>
utilization. Are you running with the C/R thread enabled? If not then  
<br>
the checkpoint might be waiting until the process enters the MPI  
<br>
library.
<br>
<p>Does the system emit an error message describing the error that it  
<br>
encountered?
<br>
<p>The C/R support does require that all processes be between MPI_INIT  
<br>
and MPI_FINALIZE. It is difficult to guarantee that the job is between  
<br>
these two functions globally (there are race conditions to worry  
<br>
about). This might be causing the problem as well since if some of the  
<br>
processes have not passed through MPI_INIT then some of the support  
<br>
services might not be properly initialized.
<br>
<p>Let me know what you find, and we can start looking at what might be  
<br>
causing this problem.
<br>
<p>-- Josh
<br>
<p>On May 11, 2010, at 5:35 PM,  wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using open-mpi 1.3.4 with BLCR. Sometimes I am running into a  
</span><br>
<span class="quotelev1">&gt; strange problem with ompi-checkpoint command. Even though I see that  
</span><br>
<span class="quotelev1">&gt; all MPI processes (equal to np argument) are running, ompi- 
</span><br>
<span class="quotelev1">&gt; checkpoint command fails at times. I have seen this failure always  
</span><br>
<span class="quotelev1">&gt; when the MPI processes spawned are not fully running ie; these  
</span><br>
<span class="quotelev1">&gt; processes are not running above 90% CPU utilization. How do I ensure  
</span><br>
<span class="quotelev1">&gt; that the MPI processes are fully up and running before I issue ompi- 
</span><br>
<span class="quotelev1">&gt; checkpoint because dynamically detecting if the processes are  
</span><br>
<span class="quotelev1">&gt; utilizing above 90% CPU resources is not easy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any MCA parameters I can use to overcome this issue?
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
<li><strong>Next message:</strong> <a href="13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="13076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>In reply to:</strong> <a href="13023.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-checkpoint fails sometimes"</a>
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
