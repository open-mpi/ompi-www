<?
$subject_val = "Re: [OMPI users] SIGTERM propagation across MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 25 13:14:33 2012" -->
<!-- isoreceived="20120325171433" -->
<!-- sent="Sun, 25 Mar 2012 11:14:24 -0600" -->
<!-- isosent="20120325171424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGTERM propagation across MPI processes" -->
<!-- id="01266F52-B5E8-470C-913D-38A63EB18F5B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFRVdT9fx7Sc7iHUjBqHd7bmBspTmtSYHHBvo71NH_wWSdiC1g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-03-25 13:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18836.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18834.php">Rohan Deshpande: "[OMPI users] Data distribution on different machines"</a>
<li><strong>In reply to:</strong> <a href="18833.php">J&#250;lio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18836.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18836.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2012, at 10:57 AM, J&#250;lio Hoffimann wrote:
<br>
<p><span class="quotelev1">&gt; I forgot to mention, i tried to set the odls_base_sigkill_timeout as you told, even 5s was not sufficient for the root execute it's task, and most important, the kill was instantaneous, there is no 5s hang. My erroneous conclusion: SIGKILL was being sent instead of SIGTERM.
</span><br>
<p>Which version are you using? Could be a bug in there - I can take a look.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About the man page, at least for me, the word &quot;kill&quot; is not clear. The SIGTERM+SIGKILL keywords would be unambiguous.
</span><br>
<p>I'll clarify it - thanks!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; J&#250;lio.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/3/25 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2012, at 7:19 AM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your prompt reply. I confirmed what you just said by reading the mpirun man page at the sections Signal Propagation and Process Termination / Signal Handling.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;During the run of an MPI  application,  if  any  rank  dies  abnormally (either exiting before invoking MPI_FINALIZE, or dying as the result of a signal), mpirun will print out an error message and kill the rest  of the MPI application.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If i understood correctly, the SIGKILL signal is sent to every process on a premature death.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each process receives a SIGTERM, and then a SIGKILL if it doesn't exit within a specified time frame. I told you how to adjust that time period in the prior message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my point of view, i consider this a bug. If OpenMPI allows handling signals such as SIGTERM, the other processes in the communicator should also have the opportunity to die prettily. Perhaps i'm missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, you are - you do get a SIGTERM first, but you are required to exit in a timely fashion. You are not allowed to continue running. This is required in order to ensure proper cleanup of the job, per the MPI standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Supposing the described behaviour in the last paragraph, i think would be great to explicitly mention the SIGKILL in the man page, or even better, fix the implementation to send SIGTERM instead, making possible for the user cleanup all processes before exit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We already do, as described above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I solved my particular problem by adding another flag unexpected_error_on_slave:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; volatile sig_atomic_t unexpected_error_occurred = 0;
</span><br>
<span class="quotelev2">&gt;&gt; int unexpected_error_on_slave = 0;
</span><br>
<span class="quotelev2">&gt;&gt; enum tag { work_tag, die_tag }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; void my_handler( int sig )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     unexpected_error_occurred = 1;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; //
</span><br>
<span class="quotelev2">&gt;&gt; // somewhere in the code...
</span><br>
<span class="quotelev2">&gt;&gt; //
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; signal(SIGTERM, my_handler);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if (root process) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     // do stuff
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     world.recv(mpi::any_source, die_tag, unexpected_error_on_slave);
</span><br>
<span class="quotelev2">&gt;&gt;     if ( unexpected_error_occurred || unexpected_error_on_slave ) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         // save something
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         world.abort(SIGABRT);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; else { // slave process
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     // do different stuff
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         // just communicate the problem to the root
</span><br>
<span class="quotelev2">&gt;&gt;         world.send(root,die_tag,1);
</span><br>
<span class="quotelev2">&gt;&gt;         signal(SIGTERM,SIG_DFL);
</span><br>
<span class="quotelev2">&gt;&gt;         while(true)
</span><br>
<span class="quotelev2">&gt;&gt;             ; // wait, master will take care of this
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     world.send(root,die_tag,0); // everything is fine
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; signal(SIGTERM, SIG_DFL);                       // reassign default handler
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; // continues the code...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note the slave must hang for the store operation get executed at the root, otherwise we back for the previous scenario. It's theoretically unnecessary send MPI messages to accomplish the desired cleanup, and in more complex applications this can turn into a nightmare. As we know, asynchronous events are insane to debug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; J&#250;lio.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S.: MPI 1.4.3 from Ubuntu 11.10 repositories.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2012/3/23 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, yes and no. When a process abnormally terminates, OMPI will kill the job - this is done by first hitting each process with a SIGTERM, followed shortly thereafter by a SIGKILL. So you do have a short time on each process to attempt to cleanup.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that your signal handler actually is getting called, but we then kill the process before you can detect that it was called.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might try adjusting the time between sigterm and sigkill using the odls_base_sigkill_timeout MCA param:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca odls_base_sigkill_timeout N
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; should cause it to wait for N seconds before issuing the sigkill. Not sure if that will help or not - it used to work for me, but I haven't tried it for awhile. What versions of OMPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 22, 2012, at 4:49 PM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to handle signals inside a MPI task farming model. Following is a pseudo-code of what i'm trying to achieve:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; volatile sig_atomic_t unexpected_error_occurred = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void my_handler( int sig )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     unexpected_error_occurred = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // somewhere in the code...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal(SIGTERM, my_handler);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (root process) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     // do stuff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         // save something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         // reraise the SIGTERM again, but now with the default handler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else { // slave process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     // do different stuff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         // just propragate the signal to the root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal(SIGTERM, SIG_DFL);                       // reassign default handler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // continues the code...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As can be seen, the signal handling is required for implementing a restart feature. All the problem resides in the assumption i made that all processes in the communicator will receive a SIGTERM as a side effect. Is it a valid assumption? How the actual MPI implementation deals with such scenarios?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also tried to replace all the raise() calls by MPI_Abort(), which according to the documentation (<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php</a>), sends a SIGTERM to all associated processes. The undesired behaviour persists: when killing a slave process, the save section in the root branch is not executed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Appreciate any help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; J&#250;lio.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18836.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18834.php">Rohan Deshpande: "[OMPI users] Data distribution on different machines"</a>
<li><strong>In reply to:</strong> <a href="18833.php">J&#250;lio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18836.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18836.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
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
