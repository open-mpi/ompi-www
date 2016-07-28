<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 05:33:58 2009" -->
<!-- isoreceived="20090723093358" -->
<!-- sent="Thu, 23 Jul 2009 03:33:42 -0600" -->
<!-- isosent="20090723093342" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="B822923D-0BB6-4173-8D1C-44026C2F33DD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fa4af8200907222155w6791e306uca47ac91f5722424_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Network connection check<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 05:33:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10049.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="10047.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10046.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends on which network fails. If you lose all TCP connectivity,  
<br>
Open MPI should abort the job as the out-of-band system will detect  
<br>
the loss of connection. If you only lose the MPI connection (whether  
<br>
TCP or some other interconnect), then I believe the system will  
<br>
eventually generate an error after it retries sending the message a  
<br>
specified number of times, though it may not abort.
<br>
<p><p>On Jul 22, 2009, at 10:55 PM, vipin kumar wrote:
<br>
<p><span class="quotelev1">&gt; Are you asking to find out this information before issuing  
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot;?  Open MPI does assume that the nodes you are trying to use  
</span><br>
<span class="quotelev1">&gt; are reachable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  NO,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario is a pair of processes are running one in &quot;master&quot; node say  
</span><br>
<span class="quotelev1">&gt; &quot;masterprocess&quot; and one in &quot;slave&quot; node say &quot;slaveprocess&quot;. When  
</span><br>
<span class="quotelev1">&gt; &quot;masterprocess&quot; needs service of slave process, it sends message to  
</span><br>
<span class="quotelev1">&gt; &quot;slaveprocess&quot; and &quot;slaveprocess&quot; serves its request. In case of  
</span><br>
<span class="quotelev1">&gt; Network failure(by any means) &quot;masterprocess&quot; will keep trying to  
</span><br>
<span class="quotelev1">&gt; send message to &quot;slaveprocess&quot; without knowing that it is not  
</span><br>
<span class="quotelev1">&gt; reachable. So how &quot;masterprocess&quot; should finds out that  
</span><br>
<span class="quotelev1">&gt; &quot;slaveprocess&quot; can't be reached and leave attempting to send  
</span><br>
<span class="quotelev1">&gt; messages till Connection is not up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<li><strong>Next message:</strong> <a href="10049.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="10047.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10046.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
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
