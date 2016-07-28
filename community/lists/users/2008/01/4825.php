<?
$subject_val = "Re: [OMPI users] Occasional mpirun hang on completion";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 13 10:17:32 2008" -->
<!-- isoreceived="20080113151732" -->
<!-- sent="Sun, 13 Jan 2008 10:17:06 -0500" -->
<!-- isosent="20080113151706" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Occasional mpirun hang on completion" -->
<!-- id="20080113151706.GB16176_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080113145447.GA16176_at_eponymous" -->
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
<strong>Subject:</strong> Re: [OMPI users] Occasional mpirun hang on completion<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-13 10:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4826.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4824.php">Barry Rountree: "[OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="4824.php">Barry Rountree: "[OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Jan 13, 2008 at 09:54:47AM -0500, Barry Rountree wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile ~/hostfile uptime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; will occasionally hang after completing.  The expected output appears on
</span><br>
<span class="quotelev1">&gt; the screen, but mpirun needs a SIGKILL to return to the console.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has been verified with OpenMPI v1.2.4 compiled with both icc 9.1
</span><br>
<span class="quotelev1">&gt; 20061101 (aka 9.1.045) and gcc 4.1.0 20060304 (aka Red Hat 4.1.0-3).  I
</span><br>
<span class="quotelev1">&gt; have also tried earlier versions of OpenMPI and found the same bug
</span><br>
<span class="quotelev1">&gt; (1.1.2 and 1.2.2).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using  -verbose didn't provide any additional output.  I'm happy to help
</span><br>
<span class="quotelev1">&gt; tracking down whatever is causing this.
</span><br>
<p>A couple more data points:
<br>
<p>mpirun -np 4 -hostfile ~/hostfile --no-daemonize uptime
<br>
<p>hung twice over 100 runs.  Without the --no-daemonize, the command hung
<br>
16 times over 100 runs.  (This is using the version compiled with icc.)
<br>
<p>Barry
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barry Rountree
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev1">&gt; University of Georgia
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
<li><strong>Next message:</strong> <a href="4826.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4824.php">Barry Rountree: "[OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="4824.php">Barry Rountree: "[OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
