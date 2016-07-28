<?
$subject_val = "Re: [OMPI users] error in ompi-checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 09:16:58 2009" -->
<!-- isoreceived="20090923131658" -->
<!-- sent="Wed, 23 Sep 2009 09:16:55 -0400" -->
<!-- isosent="20090923131655" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in ompi-checkpoint" -->
<!-- id="F1E288DD-E75B-4A07-ADCC-72D5893C0481_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="867092.54308.qm_at_web37305.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error in ompi-checkpoint<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 09:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10742.php">Dave Love: "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<li><strong>Previous message:</strong> <a href="10740.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10717.php">Mallikarjuna Shastry: "[OMPI users] error in ompi-checkpoint"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How did you configure Open MPI? Is your application using SIGUSR1?
<br>
<p>This error message indicates that Open MPI's daemons could not  
<br>
communicate with the application processes. The daemons send SIGUSR1  
<br>
to the process to initiate the handshake (you can change this signal  
<br>
with -mca opal_cr_signal). If your application does not respond to the  
<br>
daemon within a time bound (default 20 sec, though you can change it  
<br>
with -mca snapc_full_max_wait_time) then this error is printed, and  
<br>
the checkpoint is aborted.
<br>
<p>-- Josh
<br>
<p><p>On Sep 22, 2009, at 1:43 AM, Mallikarjuna Shastry wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;error.txt&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10742.php">Dave Love: "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<li><strong>Previous message:</strong> <a href="10740.php">Josh Hursey: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10717.php">Mallikarjuna Shastry: "[OMPI users] error in ompi-checkpoint"</a>
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
