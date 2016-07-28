<?
$subject_val = "Re: [OMPI users] Torque+BCLR+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 15:01:34 2010" -->
<!-- isoreceived="20100225200134" -->
<!-- sent="Thu, 25 Feb 2010 10:37:19 -0800" -->
<!-- isosent="20100225183719" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque+BCLR+OpenMPI" -->
<!-- id="954D5262-F0DC-4854-827C-829EC5BFFA77_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="39B6A0E9-32C9-4618-A532-901511503A72_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Torque+BCLR+OpenMPI<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 13:37:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12159.php">Josh Hursey: "Re: [OMPI users] orte-checkpoint hangs"</a>
<li><strong>Previous message:</strong> <a href="12157.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12076.php">Anton Starikov: "[OMPI users] Torque+BCLR+OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anton,
<br>
<p>I don't know if there usual or typical way of initiating a checkpoint amongst various resource managers. I know that the BLCR folks (I believe Eric Roman is heading this effort - CC'ed) have been investigating a tighter integration of Open MPI, BLCR and Torque. He might be able to give you a bit more guidance on this topic.
<br>
<p>-- Josh
<br>
<p>On Feb 10, 2010, at 11:54 PM, Anton Starikov wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; I'm trying to implement checkpointing on out cluster, and I have obvious question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess this was implemented many times by other users, so I would like is someone share experience with me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With serial/multithreaded jobs it is kind of clear. But for parallel?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have &quot;fat&quot; 16-core nodes, so user use both OpenMP and MPI programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shell I just do perform some checks in my checkpointing script and call ompi-checkpoint if after tests I figure our that there is MPI job?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is &quot;usual&quot; way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anton
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12159.php">Josh Hursey: "Re: [OMPI users] orte-checkpoint hangs"</a>
<li><strong>Previous message:</strong> <a href="12157.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12076.php">Anton Starikov: "[OMPI users] Torque+BCLR+OpenMPI"</a>
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
