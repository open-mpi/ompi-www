<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 14 12:34:02 2006" -->
<!-- isoreceived="20060414163402" -->
<!-- sent="Fri, 14 Apr 2006 10:33:59 -0600" -->
<!-- isosent="20060414163359" -->
<!-- name="Lee D. Peterson" -->
<!-- email="Lee.Peterson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster" -->
<!-- id="D6A117CD-34F6-4E82-BE0D-8BD54322547D_at_Colorado.EDU" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1320CD18-493B-4DBC-BB82-8CA81ED000A1_at_Colorado.EDU" -->
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
<strong>From:</strong> Lee D. Peterson (<em>Lee.Peterson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-14 12:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1066.php">Warner Yuen: "[OMPI users] OMPI and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="1064.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>In reply to:</strong> <a href="1012.php">Lee D. Peterson: "[OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem went away yesterday. There was no intervening reboot of  
<br>
my cluster or a recompile of the code. So all I can surmise is  
<br>
something got cleaned up in a cron script. Wierd.
<br>
<p>Anyways, now I've benchmarked the HPL using OpenMPI vs LAM-MPI. The  
<br>
OpenMPI runs about 13% to sometimes 50% slower than the LAM-MPI. I'm  
<br>
running over TCP and using SSH.
<br>
<p>Does anyone expect OpenMPI to be slower than LAM-MPI under these  
<br>
conditions?
<br>
<p>Lee Peterson
<br>
<p>On Apr 10, 2006, at 9:57 PM, Lee D. Peterson wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm transitioning from LAM-MPI to OpenMPI and have just compiled  
</span><br>
<span class="quotelev1">&gt; OMPI 1.0.2 on OS X server 10.4.6. I'm using gcc 3.3 and XLF (both  
</span><br>
<span class="quotelev1">&gt; f77 and f90), and I'm using ssh to run the jobs. My cluster is all  
</span><br>
<span class="quotelev1">&gt; G5 dual 2GHz+ xserves, and I am using both ethernet ports for  
</span><br>
<span class="quotelev1">&gt; communication. One is used for NFS and the other is for MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've had few problems the past year running this config with LAM- 
</span><br>
<span class="quotelev1">&gt; MPI (latest release). But what worked before doesn't with OpenMPI  
</span><br>
<span class="quotelev1">&gt; 1.0.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run any parallel job that spans multiple machines, the  
</span><br>
<span class="quotelev1">&gt; process runs indefinitely. I've checked this using the BLACS and  
</span><br>
<span class="quotelev1">&gt; PBLAS test routines, the HPL benchmark, and even a simple mpi-pong  
</span><br>
<span class="quotelev1">&gt; program. All of them execute but produce no output past some  
</span><br>
<span class="quotelev1">&gt; initial output, consuming 100% of the CPU on every node that's  
</span><br>
<span class="quotelev1">&gt; launched. In contrast, all of these programs run in a few seconds  
</span><br>
<span class="quotelev1">&gt; on a single node, with two processors, and up to -np 8. When I  
</span><br>
<span class="quotelev1">&gt; cntrl-C to stop the program, openmpi safely stops all the  
</span><br>
<span class="quotelev1">&gt; processes, no matter how many machines have been used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed a couple postings from the past few months that seem to  
</span><br>
<span class="quotelev1">&gt; be related but didn't seem to be quite the same symptoms. Any ideas  
</span><br>
<span class="quotelev1">&gt; what could be going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI is a really great project, and it is obvious the quality of  
</span><br>
<span class="quotelev1">&gt; software development that has gone into it. I appreciate all your  
</span><br>
<span class="quotelev1">&gt; help. My config.log and omni-info.out files are attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lee Peterson
</span><br>
<span class="quotelev1">&gt; Professor
</span><br>
<span class="quotelev1">&gt; Aerospace Engineering Sciences
</span><br>
<span class="quotelev1">&gt; University of Colorado
</span><br>
<span class="quotelev1">&gt; Boulder, CO
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tgz&gt;
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
<li><strong>Next message:</strong> <a href="1066.php">Warner Yuen: "[OMPI users] OMPI and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="1064.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>In reply to:</strong> <a href="1012.php">Lee D. Peterson: "[OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
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
