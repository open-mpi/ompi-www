<?
$subject_val = "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:22:16 2010" -->
<!-- isoreceived="20100329152216" -->
<!-- sent="Mon, 29 Mar 2010 11:22:13 -0400" -->
<!-- isosent="20100329152213" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations" -->
<!-- id="07FD3898-05EF-4A14-A943-47826C8F9F76_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E70695D352_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:22:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12452.php">Josh Hursey: "Re: [OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;"</a>
<li><strong>Previous message:</strong> <a href="12450.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<li><strong>In reply to:</strong> <a href="12388.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2010, at 11:14 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I am observing a very strange performance issue with my openmpi  
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compute intensive openmpi based application that keeps the  
</span><br>
<span class="quotelev1">&gt; data in memory, process the data and then dumps it to GPFS parallel  
</span><br>
<span class="quotelev1">&gt; file system. GPFS parallel file system server is connected to a QDR  
</span><br>
<span class="quotelev1">&gt; infiniband switch from Voltaire.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If my cluster is connected to a DDR infiniband switch which in turn  
</span><br>
<span class="quotelev1">&gt; connects to file system server on QDR switch, I see that I can run  
</span><br>
<span class="quotelev1">&gt; my application under checkpoint/restart control (with &#150;am ft-enable- 
</span><br>
<span class="quotelev1">&gt; cr) and I can checkpoint (ompi-checkpoint) successfully and the  
</span><br>
<span class="quotelev1">&gt; application gets completed after few additional seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If my cluster is connected to the same QDR switch which connects to  
</span><br>
<span class="quotelev1">&gt; file system server, I see that my application takes close to 10x  
</span><br>
<span class="quotelev1">&gt; time to complete if I run it under checkpoint/restart control (with &#150; 
</span><br>
<span class="quotelev1">&gt; am ft-enable-cr). If I run the same application using a plain mpirun  
</span><br>
<span class="quotelev1">&gt; command (ie; without -am ft_enable_cr), it finishes within a minute.
</span><br>
<p>The 10x slowdown is without taking a checkpoint, correct? If the  
<br>
checkpoint is taking up part of the bandwidth through the same switch  
<br>
you are communicating with, then you will see diminished performance  
<br>
until the checkpoint is fully established on the storage device(s).  
<br>
Many installations separate the communication and storage networks (or  
<br>
limiting the bandwidth of one of them) to prevent one from  
<br>
unexpectedly demising the performance of the other, even outside of  
<br>
the C/R context.
<br>
<p>However for a non-checkpointing run to be 10x slower is certainly not  
<br>
normal. Try playing with the C/R thread parameters (mentioned in a  
<br>
previous email) and see if that helps. If not, we might be able to try  
<br>
other things.
<br>
<p>-- Josh 
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using open mpi 1.3.4 and BLCR 0.8.2 for checkpointing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any specific MCA parameters that I should tune to address  
</span><br>
<span class="quotelev1">&gt; this problem? Any other pointers will be really helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Anand
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
<li><strong>Next message:</strong> <a href="12452.php">Josh Hursey: "Re: [OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;"</a>
<li><strong>Previous message:</strong> <a href="12450.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<li><strong>In reply to:</strong> <a href="12388.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
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
