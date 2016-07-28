<?
$subject_val = "[OMPI users] Proper use of sigaction in Open MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 09:28:15 2008" -->
<!-- isoreceived="20080424132815" -->
<!-- sent="Thu, 24 Apr 2008 09:27:36 -0400" -->
<!-- isosent="20080424132736" -->
<!-- name="Keller, Jesse" -->
<!-- email="jesse.keller_at_[hidden]" -->
<!-- subject="[OMPI users] Proper use of sigaction in Open MPI?" -->
<!-- id="211F72AAC0FAAA4D8C4C89FF326D43F5120533_at_rnumsem04.nala.roche.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Proper use of sigaction in Open MPI?<br>
<strong>From:</strong> Keller, Jesse (<em>jesse.keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 09:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5489.php">Tim Prins: "Re: [OMPI users] PubSub and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5502.php">Ralph H Castain: "Re: [OMPI users] Proper use of sigaction in Open MPI?"</a>
<li><strong>Maybe reply:</strong> <a href="5502.php">Ralph H Castain: "Re: [OMPI users] Proper use of sigaction in Open MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, all - 
<br>
<p>&nbsp;
<br>
<p>I have an OpenMPI application that generates a file while it runs.  No
<br>
big deal.  However, I'd like to delete the partial file if the job is
<br>
aborted via a user signal.  In a non-MPI application, I'd use sigaction
<br>
to intercept the SIGTERM and delete the open files there.  I'd then call
<br>
the &quot;old&quot; signal handler.   When I tried this with my OpenMPI program,
<br>
the signal was caught, the files deleted, the processes exited, but the
<br>
MPI exec command as a whole did not exit.   This is the technique, by
<br>
the way, that was described in this IBM MPI document:
<br>
<p>&nbsp;
<br>
<p><a href="http://publib.boulder.ibm.com/infocenter/clresctr/vxrx/index.jsp?topic=/">http://publib.boulder.ibm.com/infocenter/clresctr/vxrx/index.jsp?topic=/</a>
<br>
com.ibm.cluster.pe.doc/pe_linux42/am106l0037.html
<br>
<p>&nbsp;
<br>
<p>My question is, what is the &quot;right&quot; way to do this under OpenMPI?  The
<br>
only way I got the thing to work was by resetting the sigaction to the
<br>
old handler and re-raising the signal.  It seems to work, but I want to
<br>
know if I am going to get &quot;bit&quot; by this.  Specifically, am I &quot;closing&quot;
<br>
MPI correctly by doing this?
<br>
<p>&nbsp;
<br>
<p>I am running OpenMPI 1.2.5 under Fedora 8 on Linux in a x86_64
<br>
environment.   My compiler is gcc 4.1.2.  This behavior happens when all
<br>
processes are running on the same node using shared memory and between
<br>
nodes when using TCP transport.  I don't have access to any other
<br>
transport.
<br>
<p>&nbsp;
<br>
<p>Thanks for your help.
<br>
<p>&nbsp;
<br>
<p>Jesse Keller 
<br>
<p>454 Life Sciences
<br>
<p>&nbsp;
<br>
<p>Here's a code snippet to demonstrate what I'm talking about.
<br>
<p>&nbsp;
<br>
<p>------------------------------------------------------------------------
<br>
----------------------------
<br>
<p>&nbsp;
<br>
<p>struct sigaction sa_old_term;  /* Global. */
<br>
<p>&nbsp;
<br>
<p>void
<br>
<p>SIGTERM_handler(int signal , siginfo_t * siginfo , void * a)
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;UnlinkOpenedFiles(); /* Global function to delete partial files. */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* The commented code doesn't work. */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//if (sa_old_term.sa_sigaction)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//      sa_old_term.sa_flags =SA_SIGINFO;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//      (*sa_old_term.sa_sigaction)(signal,siginfo,a);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;sigaction(SIGTERM, &amp;sa_old_term,NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;raise(signal);
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>int main( int argc, char * argv)
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init(argc, argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;struct sigaction sa_term;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;sigemptyset(&amp;sa_term.sa_mask);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;sa_term.sa_flags = SA_SIGINFO;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;sa_term.sa_sigaction = SIGTERM_handler;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;sigaction(SIGTERM, &amp;sa_term, &amp;sa_old_term);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;doSomeMPIComputation();
<br>
<p>&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5489.php">Tim Prins: "Re: [OMPI users] PubSub and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5502.php">Ralph H Castain: "Re: [OMPI users] Proper use of sigaction in Open MPI?"</a>
<li><strong>Maybe reply:</strong> <a href="5502.php">Ralph H Castain: "Re: [OMPI users] Proper use of sigaction in Open MPI?"</a>
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
