<?
$subject_val = "Re: [OMPI users] ompi-clean on single executable";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 24 04:44:21 2012" -->
<!-- isoreceived="20121024084421" -->
<!-- sent="Wed, 24 Oct 2012 10:44:15 +0200" -->
<!-- isosent="20121024084415" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-clean on single executable" -->
<!-- id="CE0B5E11-6122-4482-8836-47C5A5E3A720_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABvLwVA4yPodOWXRsMK02bk-wEuvzNmq=59mn3gMAJMFV_66qw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-clean on single executable<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-24 04:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20521.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20519.php">Nicolas Deladerriere: "[OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20519.php">Nicolas Deladerriere: "[OMPI users] ompi-clean on single executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20521.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Reply:</strong> <a href="20521.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 24.10.2012 um 09:36 schrieb Nicolas Deladerriere:
<br>
<p><span class="quotelev1">&gt; I am having issue running ompi-clean which clean up (this is normal) session associated to a user which means it kills all running jobs assoicated to this session (this is also normal). But I would like to be able to clean up session associated to a job (a not user).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is my point:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running two executable :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  % mpirun -np 2 myexec1
</span><br>
<span class="quotelev1">&gt;        --&gt; run with PID 2399 ...
</span><br>
<span class="quotelev1">&gt;  % mpirun -np 2 myexec2
</span><br>
<span class="quotelev1">&gt;        --&gt; run with PID 2402 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run orte-clean I got this result :
</span><br>
<span class="quotelev1">&gt;  % orte-clean -v
</span><br>
<span class="quotelev1">&gt;  orte-clean: cleaning session dir tree openmpi-sessions-ndelader_at_myhost_0
</span><br>
<span class="quotelev1">&gt;  orte-clean: killing any lingering procs
</span><br>
<span class="quotelev1">&gt;  orte-clean: found potential rogue orterun process (pid=2399,user=ndelader), sending SIGKILL...
</span><br>
<span class="quotelev1">&gt;  orte-clean: found potential rogue orterun process (pid=2402,user=ndelader), sending SIGKILL...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which means that both jobs have been killed :-(
</span><br>
<span class="quotelev1">&gt; Basically I would like to perform orte-clean using executable name or PID or whatever that identify which job I want to stop an clean. It seems I would need to create an openmpi session per job. Does it make sense ? And I would like to be able to do something like following command and get following result :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   % orte-clean -v myexec1
</span><br>
<span class="quotelev1">&gt;  orte-clean: cleaning session dir tree openmpi-sessions-ndelader_at_myhost_0
</span><br>
<span class="quotelev1">&gt;  orte-clean: killing any lingering procs
</span><br>
<span class="quotelev1">&gt;  orte-clean: found potential rogue orterun process (pid=2399,user=ndelader), sending SIGKILL...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it make sense ? Is there a way to perform this kind of selection in cleaning process ?
</span><br>
<p>How many jobs are you starting on how many nodes at one time? This requirement could be a point to start to use a queuing system, where can remove job individually and also serialize your workflow. In fact: we use GridEngine also local on workstations for this purpose.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20521.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20519.php">Nicolas Deladerriere: "[OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20519.php">Nicolas Deladerriere: "[OMPI users] ompi-clean on single executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20521.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Reply:</strong> <a href="20521.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
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
