<?
$subject_val = "Re: [OMPI users] SIGTERM propagation across MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 25 12:57:59 2012" -->
<!-- isoreceived="20120325165759" -->
<!-- sent="Sun, 25 Mar 2012 13:57:54 -0300" -->
<!-- isosent="20120325165754" -->
<!-- name="J&#250;lio Hoffimann" -->
<!-- email="julio.hoffimann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGTERM propagation across MPI processes" -->
<!-- id="CAFRVdT9fx7Sc7iHUjBqHd7bmBspTmtSYHHBvo71NH_wWSdiC1g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46B9A715-CB24-49E5-99F2-95A7126F1F53_at_open-mpi.org" -->
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
<strong>From:</strong> J&#250;lio Hoffimann (<em>julio.hoffimann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-25 12:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18834.php">Rohan Deshpande: "[OMPI users] Data distribution on different machines"</a>
<li><strong>Previous message:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18835.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18835.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to mention, i tried to set the odls_base_sigkill_timeout as you
<br>
told, even 5s was not sufficient for the root execute it's task, and most
<br>
important, the kill was instantaneous, there is no 5s hang. My erroneous
<br>
conclusion: SIGKILL was being sent instead of SIGTERM.
<br>
<p>About the man page, at least for me, the word &quot;kill&quot; is not clear. The
<br>
SIGTERM+SIGKILL keywords would be unambiguous.
<br>
<p>Regards,
<br>
J&#250;lio.
<br>
<p>2012/3/25 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2012, at 7:19 AM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your prompt reply. I confirmed what you just said by reading
</span><br>
<span class="quotelev1">&gt; the mpirun man page at the sections *Signal Propagation* and *Process
</span><br>
<span class="quotelev1">&gt; Termination / Signal Handling*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;During the run of an MPI  application,  if  any  rank  dies
</span><br>
<span class="quotelev1">&gt;  abnormally (either exiting before invoking MPI_FINALIZE, or dying as the
</span><br>
<span class="quotelev1">&gt; result of a signal), mpirun will print out an error message and kill the
</span><br>
<span class="quotelev1">&gt; rest  of the MPI application.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i understood correctly, the SIGKILL signal is sent to every process on
</span><br>
<span class="quotelev1">&gt; a premature death.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each process receives a SIGTERM, and then a SIGKILL if it doesn't exit
</span><br>
<span class="quotelev1">&gt; within a specified time frame. I told you how to adjust that time period in
</span><br>
<span class="quotelev1">&gt; the prior message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my point of view, i consider this a bug. If OpenMPI allows handling
</span><br>
<span class="quotelev1">&gt; signals such as SIGTERM, the other processes in the communicator should
</span><br>
<span class="quotelev1">&gt; also have the opportunity to die prettily. Perhaps i'm missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, you are - you do get a SIGTERM first, but you are required to exit in
</span><br>
<span class="quotelev1">&gt; a timely fashion. You are not allowed to continue running. This is required
</span><br>
<span class="quotelev1">&gt; in order to ensure proper cleanup of the job, per the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supposing the described behaviour in the last paragraph, i think would be
</span><br>
<span class="quotelev1">&gt; great to explicitly mention the SIGKILL in the man page, or even better,
</span><br>
<span class="quotelev1">&gt; fix the implementation to send SIGTERM instead, making possible for the
</span><br>
<span class="quotelev1">&gt; user cleanup all processes before exit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We already do, as described above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I solved my particular problem by adding another flag *
</span><br>
<span class="quotelev1">&gt; unexpected_error_on_slave*:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; volatile sig_atomic_t unexpected_error_occurred = 0;int unexpected_error_on_slave = 0;enum tag { work_tag, die_tag }
</span><br>
<span class="quotelev1">&gt; void my_handler( int sig ){
</span><br>
<span class="quotelev1">&gt;     unexpected_error_occurred = 1;}
</span><br>
<span class="quotelev1">&gt; //// somewhere in the code...//
</span><br>
<span class="quotelev1">&gt; signal(SIGTERM, my_handler);
</span><br>
<span class="quotelev1">&gt; if (root process) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // do stuff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     world.recv(mpi::any_source, die_tag, unexpected_error_on_slave);
</span><br>
<span class="quotelev1">&gt;     if ( unexpected_error_occurred || unexpected_error_on_slave ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         // save something
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         world.abort(SIGABRT);
</span><br>
<span class="quotelev1">&gt;     }}else { // slave process
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
<span class="quotelev1">&gt;         // just communicate the problem to the root
</span><br>
<span class="quotelev1">&gt;         world.send(root,die_tag,1);
</span><br>
<span class="quotelev1">&gt;         signal(SIGTERM,SIG_DFL);
</span><br>
<span class="quotelev1">&gt;         while(true)
</span><br>
<span class="quotelev1">&gt;             ; // wait, master will take care of this
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     world.send(root,die_tag,0); // everything is fine}
</span><br>
<span class="quotelev1">&gt; signal(SIGTERM, SIG_DFL);                       // reassign default handler
</span><br>
<span class="quotelev1">&gt; // continues the code...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the slave must hang for the store operation get executed at the root,
</span><br>
<span class="quotelev1">&gt; otherwise we back for the previous scenario. It's theoretically unnecessary
</span><br>
<span class="quotelev1">&gt; send MPI messages to accomplish the desired cleanup, and in more complex
</span><br>
<span class="quotelev1">&gt; applications this can turn into a nightmare. As we know, asynchronous
</span><br>
<span class="quotelev1">&gt; events are insane to debug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; J&#250;lio.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.: MPI 1.4.3 from Ubuntu 11.10 repositories.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/3/23 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, yes and no. When a process abnormally terminates, OMPI will kill
</span><br>
<span class="quotelev2">&gt;&gt; the job - this is done by first hitting each process with a SIGTERM,
</span><br>
<span class="quotelev2">&gt;&gt; followed shortly thereafter by a SIGKILL. So you do have a short time on
</span><br>
<span class="quotelev2">&gt;&gt; each process to attempt to cleanup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that your signal handler actually is getting called, but we
</span><br>
<span class="quotelev2">&gt;&gt; then kill the process before you can detect that it was called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might try adjusting the time between sigterm and sigkill using
</span><br>
<span class="quotelev2">&gt;&gt; the odls_base_sigkill_timeout MCA param:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca odls_base_sigkill_timeout N
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; should cause it to wait for N seconds before issuing the sigkill. Not
</span><br>
<span class="quotelev2">&gt;&gt; sure if that will help or not - it used to work for me, but I haven't tried
</span><br>
<span class="quotelev2">&gt;&gt; it for awhile. What versions of OMPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 22, 2012, at 4:49 PM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to handle signals inside a MPI task farming model. Following
</span><br>
<span class="quotelev2">&gt;&gt; is a pseudo-code of what i'm trying to achieve:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; volatile sig_atomic_t unexpected_error_occurred = 0;
</span><br>
<span class="quotelev2">&gt;&gt; void my_handler( int sig ){
</span><br>
<span class="quotelev2">&gt;&gt;     unexpected_error_occurred = 1;}
</span><br>
<span class="quotelev2">&gt;&gt; //// somewhere in the code...//
</span><br>
<span class="quotelev2">&gt;&gt; signal(SIGTERM, my_handler);
</span><br>
<span class="quotelev2">&gt;&gt; if (root process) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     // do stuff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         // save something
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         // reraise the SIGTERM again, but now with the default handler
</span><br>
<span class="quotelev2">&gt;&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev2">&gt;&gt;     }}else { // slave process
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
<span class="quotelev2">&gt;&gt;         // just propragate the signal to the root
</span><br>
<span class="quotelev2">&gt;&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev2">&gt;&gt;     }}
</span><br>
<span class="quotelev2">&gt;&gt; signal(SIGTERM, SIG_DFL);                       // reassign default handler
</span><br>
<span class="quotelev2">&gt;&gt; // continues the code...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As can be seen, the signal handling is required for implementing a
</span><br>
<span class="quotelev2">&gt;&gt; restart feature. All the problem resides in the assumption i made that all
</span><br>
<span class="quotelev2">&gt;&gt; processes in the communicator will receive a SIGTERM as a side effect. Is
</span><br>
<span class="quotelev2">&gt;&gt; it a valid assumption? How the actual MPI implementation deals with such
</span><br>
<span class="quotelev2">&gt;&gt; scenarios?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also tried to replace all the raise() calls by MPI_Abort(), which
</span><br>
<span class="quotelev2">&gt;&gt; according to the documentation (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php</a>), sends a SIGTERM
</span><br>
<span class="quotelev2">&gt;&gt; to all associated processes. The undesired behaviour persists: when killing
</span><br>
<span class="quotelev2">&gt;&gt; a slave process, the save section in the root branch is not executed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Appreciate any help,
</span><br>
<span class="quotelev2">&gt;&gt; J&#250;lio.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18834.php">Rohan Deshpande: "[OMPI users] Data distribution on different machines"</a>
<li><strong>Previous message:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18835.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18835.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
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
