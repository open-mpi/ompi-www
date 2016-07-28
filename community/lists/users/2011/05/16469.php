<?
$subject_val = "Re: [OMPI users] Error when trying to kill a spawned process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 16:10:51 2011" -->
<!-- isoreceived="20110506201051" -->
<!-- sent="Fri, 6 May 2011 14:10:42 -0600" -->
<!-- isosent="20110506201042" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when trying to kill a spawned process" -->
<!-- id="8F833925-36D8-4626-9508-C30E9C27AD80_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=KAVoyb_=8==0a6-iu3Voa_9a82Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when trying to kill a spawned process<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 16:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16470.php">Lee Eric: "[OMPI users] Help: HPL Problem"</a>
<li><strong>Previous message:</strong> <a href="16468.php">Rodrigo Oliveira: "[OMPI users] Error when trying to kill a spawned process"</a>
<li><strong>In reply to:</strong> <a href="16468.php">Rodrigo Oliveira: "[OMPI users] Error when trying to kill a spawned process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16715.php">Rodrigo Oliveira: "Re: [OMPI users] Error when trying to kill a spawned process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why are you using ompi-clean for this purpose instead of a simple ctrl-c?
<br>
<p>It wasn't intended for killing jobs, but only for attempting cleanup of lost processes in extremity (i.e., when everything else short of rebooting the node fails). So it isn't robust by any means.
<br>
<p><p>On May 6, 2011, at 11:51 AM, Rodrigo Oliveira wrote:
<br>
<p><span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having a problem when I try to kill a spawned process. I am using ompi 1.4.3. I use the command ompi-clean to kill all the processes I have running, but those ones which were dynamically spawned are not killed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
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
<li><strong>Next message:</strong> <a href="16470.php">Lee Eric: "[OMPI users] Help: HPL Problem"</a>
<li><strong>Previous message:</strong> <a href="16468.php">Rodrigo Oliveira: "[OMPI users] Error when trying to kill a spawned process"</a>
<li><strong>In reply to:</strong> <a href="16468.php">Rodrigo Oliveira: "[OMPI users] Error when trying to kill a spawned process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16715.php">Rodrigo Oliveira: "Re: [OMPI users] Error when trying to kill a spawned process"</a>
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
