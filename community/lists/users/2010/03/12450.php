<?
$subject_val = "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:21:50 2010" -->
<!-- isoreceived="20100329152150" -->
<!-- sent="Mon, 29 Mar 2010 11:21:47 -0400" -->
<!-- isosent="20100329152147" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled" -->
<!-- id="320262A9-DA71-4879-990A-BEC46188E290_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7069D10D5_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12451.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<li><strong>Previous message:</strong> <a href="12449.php">Josh Hursey: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12394.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2010, at 4:41 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the run my compute intensive openmpi based program using regular  
</span><br>
<span class="quotelev1">&gt; invocation of mpirun (ie; mpirun &#150;host &lt;hostnamelist&gt; -np &lt;number of  
</span><br>
<span class="quotelev1">&gt; cores&gt;), it gets completed in few seconds but if I run the same  
</span><br>
<span class="quotelev1">&gt; program with &#147;-am ft-enable-cr&#148; option, the program takes 10x time  
</span><br>
<span class="quotelev1">&gt; to complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I enable hyperthreading on my cluster nodes and then call mpirun  
</span><br>
<span class="quotelev1">&gt; with &#147;-am ft-enable-cr&#148; option, the program gets completed with few  
</span><br>
<span class="quotelev1">&gt; additional seconds than the normal mpirun!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I improve the performance of mpirun with &#147;-am ft-enable-cr&#148;  
</span><br>
<span class="quotelev1">&gt; option when I disable hyperthreading on my cluster nodes? Any  
</span><br>
<span class="quotelev1">&gt; pointers will be really useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, I am using openmpi 1.3.4 library and BLCR 0.8.2. Cluster nodes  
</span><br>
<span class="quotelev1">&gt; are Nehalem based nodes with  8 cores.
</span><br>
<p>I have not done any performance studies focused on hyperthreading, so  
<br>
I can not say specifically what is happening.
<br>
<p>The 10x slowdown is certainly unexpected (I don't see this in my  
<br>
testing). There usually is a small slowdown (few microseconds) because  
<br>
of the message tracking technique used to support the checkpoint  
<br>
coordination protocol. I suspect that the cause of your problem is the  
<br>
C/R thread which is probably too aggressive for your system. The  
<br>
improvement with hyperthreading may be that this thread is able to sit  
<br>
on one of the hardware threads and not completely steal the CPU from  
<br>
the main application.
<br>
<p>You can change how aggressive the thread is by adjusting the two  
<br>
parameters below:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_check">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_check</a>
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_wait">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_wait</a>
<br>
<p>I usually set the latter to:
<br>
&nbsp;&nbsp;opal_cr_thread_sleep_wait=1000
<br>
<p>Give that a try and let me know is that helps. You might also try to  
<br>
upgrade to the 1.4 series, or even the upcoming v1.5.0 release and see  
<br>
if the problem persists there.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="12451.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<li><strong>Previous message:</strong> <a href="12449.php">Josh Hursey: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12394.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
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
