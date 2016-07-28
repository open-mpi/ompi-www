<?
$subject_val = "Re: [OMPI users] OpenMPI Suspend/Resume";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 07:02:12 2010" -->
<!-- isoreceived="20100203120212" -->
<!-- sent="Wed, 03 Feb 2010 07:02:05 -0500" -->
<!-- isosent="20100203120205" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Suspend/Resume" -->
<!-- id="9704C0B7-ADB3-4B27-9169-CCB1D0AF8B56_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="68119efe1002021959y59752ffao9bc12b1d482f2ab4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Suspend/Resume<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 07:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11987.php">Damien Hocking: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>Previous message:</strong> <a href="11985.php">Shiqing Fan: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>In reply to:</strong> <a href="11983.php">Andreea Costea: "[OMPI users] OpenMPI Suspend/Resume"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 2, 2010, at 10:59 PM, Andreea Costea wrote:
<br>
<p><span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's say I have an MPI application that runs on several hosts. I  
</span><br>
<span class="quotelev1">&gt; want to suspend the application. I do that by sending to the mpirun  
</span><br>
<span class="quotelev1">&gt; process the signal TSTP. Is there any way to measure how long does  
</span><br>
<span class="quotelev1">&gt; it take to the application to completely suspend? Doing this &quot;time  
</span><br>
<span class="quotelev1">&gt; kill -TSTP PID&quot; will measure just the time for sending the signal, I  
</span><br>
<span class="quotelev1">&gt; suppose, right?
</span><br>
<p>Right.  There is no good way to measure this.  You could set up  
<br>
daemons on all the nodes to watch the processes in the job, but even  
<br>
then there could be clock skew between the hosts.  You could at best  
<br>
get an approximate number.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11987.php">Damien Hocking: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>Previous message:</strong> <a href="11985.php">Shiqing Fan: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>In reply to:</strong> <a href="11983.php">Andreea Costea: "[OMPI users] OpenMPI Suspend/Resume"</a>
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
