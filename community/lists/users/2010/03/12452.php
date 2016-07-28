<?
$subject_val = "Re: [OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:32:27 2010" -->
<!-- isoreceived="20100329153227" -->
<!-- sent="Mon, 29 Mar 2010 11:32:23 -0400" -->
<!-- isosent="20100329153223" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Meaning and the significance of MCA parameter &amp;quot;opal_cr_use_thread&amp;quot;" -->
<!-- id="08619FD4-3319-452F-A72E-7745B02C2793_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7069D1D04_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12451.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<li><strong>In reply to:</strong> <a href="12417.php">ananda.mudar_at_[hidden]: "[OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So the MCA parameter that you mention is explained at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_use_thread">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_use_thread</a>
<br>
<p>This enables/disables the C/R thread a runtime if Open MPI was  
<br>
configured with C/R thread support:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#conf-enable-ft-thread">http://osl.iu.edu/research/ft/ompi-cr/api.php#conf-enable-ft-thread</a>
<br>
<p>The C/R thread enables asynchronous processing of checkpoint requests  
<br>
when the application process is not inside the MPI library. The  
<br>
purpose of this thread is to improve the responsiveness of the  
<br>
checkpoint operation. Without the thread, if the application is in a  
<br>
computation loop then the checkpoint will be delayed until the process  
<br>
enters the MPI library. With the thread enabled, the checkpoint will  
<br>
start in the C/R thread if the application is not in the MPI library.
<br>
<p>The primary advantages of the C/R thread are:
<br>
&nbsp;&nbsp;- Response time to the C/R request since the checkpoint is not  
<br>
delayed until the process enters the MPI library,
<br>
&nbsp;&nbsp;- Asynchronous processing of the checkpoint while the application is  
<br>
executing outside the MPI library (improves the checkpoint overhead  
<br>
experienced by the process).
<br>
<p>The primary disadvantage of the C/R thread is the additional  
<br>
processing task running in parallel with the application. If the C/R  
<br>
thread is polling too often it could slow down the main process by  
<br>
forcing frequent context switches between the C/R thread and the main  
<br>
execution thread. You can adjust the aggressiveness by adjusting the  
<br>
parameters at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_check">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_check</a>
<br>
<p>-- Josh
<br>
<p>On Mar 24, 2010, at 11:24 AM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; The description for MCA parameter &#147;opal_cr_use_thread&#148; is very short  
</span><br>
<span class="quotelev1">&gt; at URL:  <a href="http://osl.iu.edu/research/ft/ompi-cr/api.php">http://osl.iu.edu/research/ft/ompi-cr/api.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone explain the usefulness of enabling this parameter vs  
</span><br>
<span class="quotelev1">&gt; disabling it? In other words, what are pros/cons of disabling it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I found that this gets enabled automatically when openmpi library  
</span><br>
<span class="quotelev1">&gt; is configured with &#150;ft-enable-threads option.
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
<li><strong>Next message:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12451.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<li><strong>In reply to:</strong> <a href="12417.php">ananda.mudar_at_[hidden]: "[OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;"</a>
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
