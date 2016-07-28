<?
$subject_val = "Re: [OMPI users] SIGTERM propagation across MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 25 09:19:40 2012" -->
<!-- isoreceived="20120325131940" -->
<!-- sent="Sun, 25 Mar 2012 10:19:34 -0300" -->
<!-- isosent="20120325131934" -->
<!-- name="J&#250;lio Hoffimann" -->
<!-- email="julio.hoffimann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGTERM propagation across MPI processes" -->
<!-- id="CAFRVdT_wmVz_jgPx62G0uMBArcZ=roHyGBQKTwwrZAyUJ-F9aw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6E625C22-8247-44AE-9852-D8E5CDAF1F00_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-03-25 09:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18830.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>Thank you for your prompt reply. I confirmed what you just said by reading
<br>
the mpirun man page at the sections *Signal Propagation* and *Process
<br>
Termination / Signal Handling*.
<br>
<p>&quot;During the run of an MPI  application,  if  any  rank  dies
<br>
&nbsp;abnormally (either exiting before invoking MPI_FINALIZE, or dying as the
<br>
result of a signal), mpirun will print out an error message and kill the
<br>
rest  of the MPI application.&quot;
<br>
<p>If i understood correctly, the SIGKILL signal is sent to every process on a
<br>
premature death. In my point of view, i consider this a bug. If OpenMPI
<br>
allows handling signals such as SIGTERM, the other processes in the
<br>
communicator should also have the opportunity to die prettily. Perhaps i'm
<br>
missing something?
<br>
<p>Supposing the described behaviour in the last paragraph, i think would be
<br>
great to explicitly mention the SIGKILL in the man page, or even better,
<br>
fix the implementation to send SIGTERM instead, making possible for the
<br>
user cleanup all processes before exit.
<br>
<p>I solved my particular problem by adding another flag *
<br>
unexpected_error_on_slave*:
<br>
<p>volatile sig_atomic_t unexpected_error_occurred = 0;int
<br>
unexpected_error_on_slave = 0;enum tag { work_tag, die_tag }
<br>
void my_handler( int sig ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unexpected_error_occurred = 1;}
<br>
//// somewhere in the code...//
<br>
signal(SIGTERM, my_handler);
<br>
if (root process) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// do stuff
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;world.recv(mpi::any_source, die_tag, unexpected_error_on_slave);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( unexpected_error_occurred || unexpected_error_on_slave ) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// save something
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;world.abort(SIGABRT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}}else { // slave process
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// do different stuff
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( unexpected_error_occurred ) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// just communicate the problem to the root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;world.send(root,die_tag,1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;signal(SIGTERM,SIG_DFL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;; // wait, master will take care of this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;world.send(root,die_tag,0); // everything is fine}
<br>
signal(SIGTERM, SIG_DFL);                       // reassign default handler
<br>
// continues the code...
<br>
<p><p>Note the slave must hang for the store operation get executed at the root,
<br>
otherwise we back for the previous scenario. It's theoretically unnecessary
<br>
send MPI messages to accomplish the desired cleanup, and in more complex
<br>
applications this can turn into a nightmare. As we know, asynchronous
<br>
events are insane to debug.
<br>
<p>Best regards,
<br>
J&#250;lio.
<br>
<p>P.S.: MPI 1.4.3 from Ubuntu 11.10 repositories.
<br>
<p>2012/3/23 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Well, yes and no. When a process abnormally terminates, OMPI will kill the
</span><br>
<span class="quotelev1">&gt; job - this is done by first hitting each process with a SIGTERM, followed
</span><br>
<span class="quotelev1">&gt; shortly thereafter by a SIGKILL. So you do have a short time on each
</span><br>
<span class="quotelev1">&gt; process to attempt to cleanup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that your signal handler actually is getting called, but we
</span><br>
<span class="quotelev1">&gt; then kill the process before you can detect that it was called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might try adjusting the time between sigterm and sigkill using
</span><br>
<span class="quotelev1">&gt; the odls_base_sigkill_timeout MCA param:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca odls_base_sigkill_timeout N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should cause it to wait for N seconds before issuing the sigkill. Not sure
</span><br>
<span class="quotelev1">&gt; if that will help or not - it used to work for me, but I haven't tried it
</span><br>
<span class="quotelev1">&gt; for awhile. What versions of OMPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2012, at 4:49 PM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to handle signals inside a MPI task farming model. Following is
</span><br>
<span class="quotelev1">&gt; a pseudo-code of what i'm trying to achieve:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; volatile sig_atomic_t unexpected_error_occurred = 0;
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
<span class="quotelev1">&gt;         // just propragate the signal to the root
</span><br>
<span class="quotelev1">&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev1">&gt;     }}
</span><br>
<span class="quotelev1">&gt; signal(SIGTERM, SIG_DFL);                       // reassign default handler
</span><br>
<span class="quotelev1">&gt; // continues the code...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As can be seen, the signal handling is required for implementing a restart
</span><br>
<span class="quotelev1">&gt; feature. All the problem resides in the assumption i made that all
</span><br>
<span class="quotelev1">&gt; processes in the communicator will receive a SIGTERM as a side effect. Is
</span><br>
<span class="quotelev1">&gt; it a valid assumption? How the actual MPI implementation deals with such
</span><br>
<span class="quotelev1">&gt; scenarios?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried to replace all the raise() calls by MPI_Abort(), which
</span><br>
<span class="quotelev1">&gt; according to the documentation (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php</a>), sends a SIGTERM
</span><br>
<span class="quotelev1">&gt; to all associated processes. The undesired behaviour persists: when killing
</span><br>
<span class="quotelev1">&gt; a slave process, the save section in the root branch is not executed.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18830.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18832.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
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
