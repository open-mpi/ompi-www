<?
$subject_val = "Re: [OMPI users] Occasional mpirun hang on completion";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 20:33:27 2008" -->
<!-- isoreceived="20080119013327" -->
<!-- sent="Fri, 18 Jan 2008 20:33:10 -0500" -->
<!-- isosent="20080119013310" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Occasional mpirun hang on completion" -->
<!-- id="64A7543C-57A6-47EF-8E6C-D5274FDCB3A8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080113151706.GB16176_at_eponymous" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 20:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4855.php">Jeff Squyres: "Re: [OMPI users] compiler warnings in openmpi-1.2.5rc2"</a>
<li><strong>Previous message:</strong> <a href="4853.php">Jeff Squyres: "Re: [OMPI users] odd network behavior"</a>
<li><strong>In reply to:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4873.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Barry --
<br>
<p>Could you check what apps are still running when it hangs?  I.e., I  
<br>
assume that all the uptime's are dead; are all the orted's dead on the  
<br>
remote nodes?  (orted = our helper process that is launched on the  
<br>
remote nodes to exert process control, funnel I/O back and forth to  
<br>
mpirun, etc.)
<br>
<p>If any of the orted's are still running, can you connect to them with  
<br>
gdb and get a backtrace to see where they are hung?
<br>
<p>Likewise, can you connect to mpirun with gdb and get a backtrace of  
<br>
where it's hung?
<br>
<p>Ralph, the main ORTE developer, is pretty sure that it's stuck in the  
<br>
IO flushing routines that are executed at the end of time (look for  
<br>
function names like iof_flush or similar).  We thought we had fixed  
<br>
all of those on the 1.2 branch, but perhaps there's some other weird  
<br>
race condition happening that doesn't happen on our test machines...
<br>
<p><p><p>On Jan 13, 2008, at 10:17 AM, Barry Rountree wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, Jan 13, 2008 at 09:54:47AM -0500, Barry Rountree wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -hostfile ~/hostfile uptime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; will occasionally hang after completing.  The expected output  
</span><br>
<span class="quotelev1">&gt; appears on
</span><br>
<span class="quotelev2">&gt; &gt; the screen, but mpirun needs a SIGKILL to return to the console.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This has been verified with OpenMPI v1.2.4 compiled with both icc  
</span><br>
<span class="quotelev1">&gt; 9.1
</span><br>
<span class="quotelev2">&gt; &gt; 20061101 (aka 9.1.045) and gcc 4.1.0 20060304 (aka Red Hat  
</span><br>
<span class="quotelev1">&gt; 4.1.0-3).  I
</span><br>
<span class="quotelev2">&gt; &gt; have also tried earlier versions of OpenMPI and found the same bug
</span><br>
<span class="quotelev2">&gt; &gt; (1.1.2 and 1.2.2).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Using  -verbose didn't provide any additional output.  I'm happy  
</span><br>
<span class="quotelev1">&gt; to help
</span><br>
<span class="quotelev2">&gt; &gt; tracking down whatever is causing this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple more data points:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -hostfile ~/hostfile --no-daemonize uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hung twice over 100 runs.  Without the --no-daemonize, the command  
</span><br>
<span class="quotelev1">&gt; hung
</span><br>
<span class="quotelev1">&gt; 16 times over 100 runs.  (This is using the version compiled with  
</span><br>
<span class="quotelev1">&gt; icc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Barry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Many thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Barry Rountree
</span><br>
<span class="quotelev2">&gt; &gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev2">&gt; &gt; University of Georgia
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4855.php">Jeff Squyres: "Re: [OMPI users] compiler warnings in openmpi-1.2.5rc2"</a>
<li><strong>Previous message:</strong> <a href="4853.php">Jeff Squyres: "Re: [OMPI users] odd network behavior"</a>
<li><strong>In reply to:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4873.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
