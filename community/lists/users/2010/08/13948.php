<?
$subject_val = "Re: [OMPI users] Checkpointing mpi4py program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 16:37:59 2010" -->
<!-- isoreceived="20100809203759" -->
<!-- sent="Mon, 9 Aug 2010 16:37:58 -0400" -->
<!-- isosent="20100809203758" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing mpi4py program" -->
<!-- id="270BD450-743A-4662-9568-1FEDFCC6F9C6_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E707EB54DD_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing mpi4py program<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 16:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13949.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>In reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13959.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not tried to checkpoint an mpi4py application, so I cannot say for sure if it works or not. You might be hitting something with the Python runtime interacting in an odd way with either Open MPI or BLCR.
<br>
<p>Can you attach a debugger and get a backtrace on a stuck checkpoint? That might show us where things are held up.
<br>
<p>-- Josh
<br>
<p><p>On Aug 9, 2010, at 4:04 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have integrated mpi4py with openmpi 1.4.2 that was built with BLCR 0.8.2. When I run ompi-checkpoint on the program written using mpi4py, I see that program doesn&#146;t resume sometimes after successful checkpoint creation. This doesn&#146;t occur always meaning the program resumes after successful checkpoint creation most of the time and completes successfully. Has anyone tested the checkpoint/restart functionality with mpi4py programs? Are there any best practices that I should keep in mind while checkpointing mpi4py programs?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for your time
</span><br>
<span class="quotelev1">&gt; -          Ananda
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email.
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
<li><strong>Next message:</strong> <a href="13949.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>In reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13959.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
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
