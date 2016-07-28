<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 08:33:40 2009" -->
<!-- isoreceived="20090122133340" -->
<!-- sent="Thu, 22 Jan 2009 06:33:30 -0700" -->
<!-- isosent="20090122133330" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="BB04B9F1-0C97-458D-BD10-678A280160C5_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0901220058n6e534224i78a6daf6b0afc209_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 08:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7760.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7758.php">Geoffroy Pignot: "[OMPI users] 1.3 hangs running 2 exes with different names"</a>
<li><strong>In reply to:</strong> <a href="7757.php">jody: "[OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7761.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7761.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7787.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are willing/able to upgrade to 1.3, you will find a new utility  
<br>
called &quot;ompi-iof&quot;  (or &quot;orte-iof&quot;) that allows you to capture the  
<br>
output from any specified rank or combination of ranks. Note that the  
<br>
output is copied to the tool, so it will also still arrive at the  
<br>
output of mpirun.
<br>
<p>If you want to build your own version of that utility, you can use  
<br>
this tool as an example of how to do it - the source is at orte/tools/ 
<br>
orte-iof. Feel free to ask questions.
<br>
<p>If you need to do this with a prior release....well, I'm afraid it  
<br>
won't work. :-)
<br>
<p>Ralph
<br>
<p>On Jan 22, 2009, at 1:58 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4 CPUs).
</span><br>
<span class="quotelev1">&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev1">&gt; separately during an mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev1">&gt; opens a xterm for each process,
</span><br>
<span class="quotelev1">&gt; which then starts the actual application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev1">&gt; interested in among 19 others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev1">&gt; outputs separately, so
</span><br>
<span class="quotelev1">&gt; i can make an application in which i can switch between the different
</span><br>
<span class="quotelev1">&gt; processor outputs?
</span><br>
<span class="quotelev1">&gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev1">&gt; redirect the output over a TCP
</span><br>
<span class="quotelev1">&gt; socket to a server application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But perhaps there is an easier way, or something like this alread  
</span><br>
<span class="quotelev1">&gt; does exist?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
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
<li><strong>Next message:</strong> <a href="7760.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7758.php">Geoffroy Pignot: "[OMPI users] 1.3 hangs running 2 exes with different names"</a>
<li><strong>In reply to:</strong> <a href="7757.php">jody: "[OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7761.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7761.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7787.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
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
