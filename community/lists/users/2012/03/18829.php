<?
$subject_val = "Re: [OMPI users] SIGTERM propagation across MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 23 03:06:33 2012" -->
<!-- isoreceived="20120323070633" -->
<!-- sent="Fri, 23 Mar 2012 01:06:25 -0600" -->
<!-- isosent="20120323070625" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGTERM propagation across MPI processes" -->
<!-- id="6E625C22-8247-44AE-9852-D8E5CDAF1F00_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFRVdT9CD94=c9SPf3RD-V+jx-77RKrG2fRgiidGVSf3hGfmJA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGTERM propagation across MPI processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-23 03:06:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18830.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18828.php">J&#250;lio Hoffimann: "[OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18828.php">J&#250;lio Hoffimann: "[OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18831.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18831.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, yes and no. When a process abnormally terminates, OMPI will kill the job - this is done by first hitting each process with a SIGTERM, followed shortly thereafter by a SIGKILL. So you do have a short time on each process to attempt to cleanup.
<br>
<p>My guess is that your signal handler actually is getting called, but we then kill the process before you can detect that it was called.
<br>
<p>You might try adjusting the time between sigterm and sigkill using the odls_base_sigkill_timeout MCA param:
<br>
<p>mpirun -mca odls_base_sigkill_timeout N
<br>
<p>should cause it to wait for N seconds before issuing the sigkill. Not sure if that will help or not - it used to work for me, but I haven't tried it for awhile. What versions of OMPI are you using?
<br>
<p><p>On Mar 22, 2012, at 4:49 PM, J&#250;lio Hoffimann wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to handle signals inside a MPI task farming model. Following is a pseudo-code of what i'm trying to achieve:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; volatile sig_atomic_t unexpected_error_occurred = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void my_handler( int sig )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     unexpected_error_occurred = 1;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; // somewhere in the code...
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; signal(SIGTERM, my_handler);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (root process) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     // do stuff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         // save something
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         // reraise the SIGTERM again, but now with the default handler
</span><br>
<span class="quotelev1">&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; else { // slave process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     // do different stuff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         // just propragate the signal to the root
</span><br>
<span class="quotelev1">&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; signal(SIGTERM, SIG_DFL);                       // reassign default handler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // continues the code...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As can be seen, the signal handling is required for implementing a restart feature. All the problem resides in the assumption i made that all processes in the communicator will receive a SIGTERM as a side effect. Is it a valid assumption? How the actual MPI implementation deals with such scenarios?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried to replace all the raise() calls by MPI_Abort(), which according to the documentation (<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php</a>), sends a SIGTERM to all associated processes. The undesired behaviour persists: when killing a slave process, the save section in the root branch is not executed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Appreciate any help,
</span><br>
<span class="quotelev1">&gt; J&#250;lio.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18830.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18828.php">J&#250;lio Hoffimann: "[OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18828.php">J&#250;lio Hoffimann: "[OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18831.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18831.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
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
