<?
$subject_val = "Re: [OMPI users] SIGTERM propagation across MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 25 16:02:11 2012" -->
<!-- isoreceived="20120325200211" -->
<!-- sent="Sun, 25 Mar 2012 17:02:05 -0300" -->
<!-- isosent="20120325200205" -->
<!-- name="J&#250;lio Hoffimann" -->
<!-- email="julio.hoffimann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGTERM propagation across MPI processes" -->
<!-- id="CAFRVdT94Eitt4W3Rr3MJu60U1UeP4Ej2na8QB8jdTAjMDV7bAw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6778F069-9ADB-46D1-87BB-7129BB061F48_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-03-25 16:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18841.php">Hameed Alzahrani: "[OMPI users] How to check that open MPI installed and work correctly"</a>
<li><strong>Previous message:</strong> <a href="18839.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18839.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is great news! I also would have voted to remove the bindings.
<br>
Boost.MPI is the only library i ever used for MPI in C++, it's a much
<br>
better designed object-oriented library, not just bindings. ;-)
<br>
<p>With Boost.MPI we can send our own types through MPI messages by
<br>
serializing the objects, which is amazing.
<br>
<p>A great post about it:
<br>
<a href="http://daveabrahams.com/2010/09/03/whats-so-cool-about-boost-mpi/">http://daveabrahams.com/2010/09/03/whats-so-cool-about-boost-mpi/</a>
<br>
The library: <a href="http://www.boost.org/doc/libs/1_49_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_49_0/doc/html/mpi.html</a>
<br>
<p>Regards,
<br>
J&#250;lio.
<br>
<p>2012/3/25 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I doubt anything will be done about those warnings, given that the MPI
</span><br>
<span class="quotelev1">&gt; Forum has voted to remove the C++ bindings altogether.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2012, at 12:36 PM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no much time now for trying a more recent version, but i'll keep
</span><br>
<span class="quotelev1">&gt; that in mind. I also dislike the warnings my current version is giving me (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9606.php">http://www.open-mpi.org/community/lists/devel/2011/08/9606.php</a>). I'll see
</span><br>
<span class="quotelev1">&gt; how to contact Ubuntu maintainers to update OpenMPI and solve both problems
</span><br>
<span class="quotelev1">&gt; in one shot. ;-)
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2012, at 11:28 AM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wrote the version in a previous P.S. statement: MPI 1.4.3 from Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; 11.10 repositories. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry - I see a lot of emails over the day, and forgot. :-/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried this on something more recent, like 1.5.4 or even the
</span><br>
<span class="quotelev2">&gt;&gt; developer's trunk? IIRC, there were some issues in the older 1.4 releases,
</span><br>
<span class="quotelev2">&gt;&gt; but they have since been fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the clarifications!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/3/25 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 25, 2012, at 10:57 AM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I forgot to mention, i tried to set the odls_base_sigkill_timeout as you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; told, even 5s was not sufficient for the root execute it's task, and most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; important, the kill was instantaneous, there is no 5s hang. My erroneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conclusion: SIGKILL was being sent instead of SIGTERM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which version are you using? Could be a bug in there - I can take a look.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; About the man page, at least for me, the word &quot;kill&quot; is not clear. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SIGTERM+SIGKILL keywords would be unambiguous.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll clarify it - thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; J&#250;lio.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2012/3/25 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 25, 2012, at 7:19 AM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you for your prompt reply. I confirmed what you just said by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reading the mpirun man page at the sections *Signal Propagation* and *Process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Termination / Signal Handling*.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;During the run of an MPI  application,  if  any  rank  dies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  abnormally (either exiting before invoking MPI_FINALIZE, or dying as the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; result of a signal), mpirun will print out an error message and kill the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rest  of the MPI application.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If i understood correctly, the SIGKILL signal is sent to every process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on a premature death.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Each process receives a SIGTERM, and then a SIGKILL if it doesn't exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; within a specified time frame. I told you how to adjust that time period in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the prior message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my point of view, i consider this a bug. If OpenMPI allows handling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signals such as SIGTERM, the other processes in the communicator should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also have the opportunity to die prettily. Perhaps i'm missing something?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, you are - you do get a SIGTERM first, but you are required to exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in a timely fashion. You are not allowed to continue running. This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; required in order to ensure proper cleanup of the job, per the MPI standard.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Supposing the described behaviour in the last paragraph, i think would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be great to explicitly mention the SIGKILL in the man page, or even better,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fix the implementation to send SIGTERM instead, making possible for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user cleanup all processes before exit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We already do, as described above.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I solved my particular problem by adding another flag *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unexpected_error_on_slave*:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; volatile sig_atomic_t unexpected_error_occurred = 0;int unexpected_error_on_slave = 0;enum tag { work_tag, die_tag }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void my_handler( int sig ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     unexpected_error_occurred = 1;}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; //// somewhere in the code...//
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signal(SIGTERM, my_handler);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if (root process) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     // do stuff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     world.recv(mpi::any_source, die_tag, unexpected_error_on_slave);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if ( unexpected_error_occurred || unexpected_error_on_slave ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         // save something
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         world.abort(SIGABRT);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }}else { // slave process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     // do different stuff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         // just communicate the problem to the root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         world.send(root,die_tag,1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         signal(SIGTERM,SIG_DFL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         while(true)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             ; // wait, master will take care of this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     world.send(root,die_tag,0); // everything is fine}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signal(SIGTERM, SIG_DFL);                       // reassign default handler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; // continues the code...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note the slave must hang for the store operation get executed at the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root, otherwise we back for the previous scenario. It's theoretically
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unnecessary send MPI messages to accomplish the desired cleanup, and in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more complex applications this can turn into a nightmare. As we know,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; asynchronous events are insane to debug.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; J&#250;lio.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S.: MPI 1.4.3 from Ubuntu 11.10 repositories.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2012/3/23 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well, yes and no. When a process abnormally terminates, OMPI will kill
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job - this is done by first hitting each process with a SIGTERM,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; followed shortly thereafter by a SIGKILL. So you do have a short time on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each process to attempt to cleanup.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My guess is that your signal handler actually is getting called, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we then kill the process before you can detect that it was called.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You might try adjusting the time between sigterm and sigkill using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the odls_base_sigkill_timeout MCA param:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -mca odls_base_sigkill_timeout N
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should cause it to wait for N seconds before issuing the sigkill. Not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sure if that will help or not - it used to work for me, but I haven't tried
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it for awhile. What versions of OMPI are you using?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 22, 2012, at 4:49 PM, J&#250;lio Hoffimann wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm trying to handle signals inside a MPI task farming model.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Following is a pseudo-code of what i'm trying to achieve:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; volatile sig_atomic_t unexpected_error_occurred = 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; void my_handler( int sig ){
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     unexpected_error_occurred = 1;}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; //// somewhere in the code...//
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; signal(SIGTERM, my_handler);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if (root process) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     // do stuff
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         // save something
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         // reraise the SIGTERM again, but now with the default handler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     }}else { // slave process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     // do different stuff
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     if ( unexpected_error_occurred ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         // just propragate the signal to the root
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         raise(SIGTERM);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     }}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; signal(SIGTERM, SIG_DFL);                       // reassign default handler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; // continues the code...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As can be seen, the signal handling is required for implementing a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; restart feature. All the problem resides in the assumption i made that all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes in the communicator will receive a SIGTERM as a side effect. Is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it a valid assumption? How the actual MPI implementation deals with such
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; scenarios?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I also tried to replace all the raise() calls by MPI_Abort(), which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; according to the documentation (
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php</a>), sends a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SIGTERM to all associated processes. The undesired behaviour persists: when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; killing a slave process, the save section in the root branch is not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; executed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Appreciate any help,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; J&#250;lio.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18841.php">Hameed Alzahrani: "[OMPI users] How to check that open MPI installed and work correctly"</a>
<li><strong>Previous message:</strong> <a href="18839.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18839.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
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
