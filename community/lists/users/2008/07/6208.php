<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 08:51:27 2008" -->
<!-- isoreceived="20080730125127" -->
<!-- sent="Wed, 30 Jul 2008 08:49:33 -0400" -->
<!-- isosent="20080730124933" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="4890635D.8040300_at_3dB-Labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d105ee120807291401n1872267fmedd29148f3a0b544_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to specify hosts for MPI_Comm_spawn<br>
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 08:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6207.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I keep checking my email in hopes that someone will come up with 
<br>
something that Matt or I might've missed. 
<br>
<p>I'm just having a hard time accepting that something so fundamental 
<br>
would be so broken.
<br>
The MPI_Comm_spawn command is essentially useless without the ability to 
<br>
spawn processes on other nodes.
<br>
<p>If this is true, then my personal scorecard reads:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Days spent using openmpi: 4 (off and on)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# identified bugs in openmpi :2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# useful programs built: 0
<br>
<p>Please prove me wrong.  I'm eager to be shown my ignorance -- to find 
<br>
out where I've been stupid and what documentation I should've read.
<br>
<p><p>Matt Hughes wrote:
<br>
<span class="quotelev1">&gt; I've found that I always have to use mpirun to start my spawner
</span><br>
<span class="quotelev1">&gt; process, due to the exact problem you are having:  the need to give
</span><br>
<span class="quotelev1">&gt; OMPI a hosts file!  It seems the singleton functionality is lacking
</span><br>
<span class="quotelev1">&gt; somehow... it won't allow you to spawn on arbitrary hosts.  I have not
</span><br>
<span class="quotelev1">&gt; tested if this is fixed in the 1.3 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 -H op2-1,op2-2 spawner op2-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec should start the first process on op2-1, and the spawn call
</span><br>
<span class="quotelev1">&gt; should start the second on op2-2.  If you don't use the Info object to
</span><br>
<span class="quotelev1">&gt; set the hostname specifically, then on 1.2.x it will automatically
</span><br>
<span class="quotelev1">&gt; start on op2-2.  With 1.3, the spawn call will start processes
</span><br>
<span class="quotelev1">&gt; starting with the first item in the host list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mch
</span><br>
<p>[snip]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6207.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
