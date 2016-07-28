<?
$subject_val = "Re: [OMPI users] ompi-restart, ompi-ps problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 17:45:58 2010" -->
<!-- isoreceived="20100716214558" -->
<!-- sent="Fri, 16 Jul 2010 17:45:56 -0400" -->
<!-- isosent="20100716214556" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart, ompi-ps problem" -->
<!-- id="53D81C7E-3A80-43C4-BB8E-92B7D0AA9A81_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimhDRXjPkXUahL7c3_fCAsr6YuuBFXd7eHIHz2q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart, ompi-ps problem<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 17:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13676.php">Qiyang Hu: "[OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>Previous message:</strong> <a href="13674.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13238.php">Nguyen Kim Son: "[OMPI users] ompi-restart, ompi-ps problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the late reply)
<br>
<p>On Jun 7, 2010, at 4:48 AM, Nguyen Kim Son wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'n trying to get functions like orte-checkpoint, orte-restart,... works but there are some errors that I don't have any clue about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Blcr (0.8.2) works fine apparently and  I have installed openmpi 1.4.2 from source with option blcr. 
</span><br>
<span class="quotelev1">&gt; The command
</span><br>
<span class="quotelev1">&gt; mpirun -np 4  -am ft-enable-cr ./checkpoint_test
</span><br>
<span class="quotelev1">&gt; seemed OK but 
</span><br>
<span class="quotelev1">&gt; orte-checkpoint --term PID_of_checkpoint_test ( obtaining after ps -ef | grep mpirun )
</span><br>
<span class="quotelev1">&gt; does not return and shows nothing like errors!
</span><br>
<p>You mean the PID of 'mpirun', right?
<br>
<p>Does it checkpoint correctly without the '--term' argument?
<br>
<p>Can you try the v1.5 release candidate to see if you have the same problem?
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
<br>
<p>What MCA parameters do you have set in your environment?
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I checked with 
</span><br>
<span class="quotelev1">&gt; ompi-ps
</span><br>
<span class="quotelev1">&gt; this time, I obtain:
</span><br>
<span class="quotelev1">&gt; oob-tcp: Communication retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone has the same problem?
</span><br>
<span class="quotelev1">&gt; Any idea is welcomed!
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Son.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Son NGUYEN KIM          
</span><br>
<span class="quotelev1">&gt; Antibes 06600
</span><br>
<span class="quotelev1">&gt; Tel: 06 48 28 37 47 
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
<li><strong>Next message:</strong> <a href="13676.php">Qiyang Hu: "[OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>Previous message:</strong> <a href="13674.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13238.php">Nguyen Kim Son: "[OMPI users] ompi-restart, ompi-ps problem"</a>
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
