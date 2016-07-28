<?
$subject_val = "Re: [OMPI users] Proper use of sigaction in Open MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:57:09 2008" -->
<!-- isoreceived="20080424155709" -->
<!-- sent="Thu, 24 Apr 2008 09:56:56 -0600" -->
<!-- isosent="20080424155656" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proper use of sigaction in Open MPI?" -->
<!-- id="C43609E8.D3A7%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E7FD839BAFD8CA499213A6EE26F2368004C9EC_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Proper use of sigaction in Open MPI?<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 11:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5503.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5501.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Maybe in reply to:</strong> <a href="5490.php">Keller, Jesse: "[OMPI users] Proper use of sigaction in Open MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have never tested this before, so I could be wrong. However, my best guess
<br>
is that the following is happening:
<br>
<p>1. you trap the signal and do your cleanup. However, when your proc now
<br>
exits, it does not exit with a status of &quot;terminated-by-signal&quot;. Instead, it
<br>
exits normally.
<br>
<p>2. the local daemon sees the proc exit, but since it exit'd normally, it
<br>
takes no action to abort the job. Hence, mpirun has no idea that anything
<br>
&quot;wrong&quot; has happened, nor that it should do anything about it.
<br>
<p>3. if you re-raise the signal, the proc now exits with
<br>
&quot;terminated-by-signal&quot;, so the abort procedure works as intended.
<br>
<p>Since you call mpi_finalize before leaving, even the upcoming 1.3 release
<br>
would be &quot;fooled&quot; by this behavior. It will again think that the proc exit'd
<br>
normally, and happily wait for all the procs to &quot;complete&quot;.
<br>
<p>Now, if -all- of your procs receive this signal and terminate, then the
<br>
system should shutdown. But I gather from your note that this isn't the case
<br>
- that only a subset, perhaps only one, of the procs is taking this action?
<br>
<p>If all of the procs are exiting, then it is possible that there is a bug in
<br>
the 1.2 release that is getting confused by the signals. Mpirun does trap
<br>
SIGTERM to order a clean abort of all procs, so it is possible that a race
<br>
condition is getting activated and causing mpirun to hang. Unfortunately,
<br>
that can happen in the 1.2 series. The 1.3 release should be more robust in
<br>
that regard.
<br>
<p>I don't think what you are doing will cause any horrid problems. Like I
<br>
said, I have never tried something like this, so I might be surprised.
<br>
<p>But if you job cleans up the way you want, I certainly wouldn't worry about
<br>
it. At the worst, there might be some dangling tmp files from Open MPI.
<br>
<p>Ralph
<br>
<p><p><p>On 4/24/08 8:51 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a &quot;fixed in 1.3&quot; issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:   Keller, Jesse [mailto:jesse.keller_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent:   Thursday, April 24, 2008 09:35 AM Eastern Standard Time
</span><br>
<span class="quotelev1">&gt; To:     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject:        [OMPI users] Proper use of sigaction in Open MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an OpenMPI application that generates a file while it runs.  No big
</span><br>
<span class="quotelev1">&gt; deal.  However, I&#185;d like to delete the partial file if the job is aborted via
</span><br>
<span class="quotelev1">&gt; a user signal.  In a non-MPI application, I&#185;d use sigaction to intercept the
</span><br>
<span class="quotelev1">&gt; SIGTERM and delete the open files there.  I&#185;d then call the &#179;old&#178; signal
</span><br>
<span class="quotelev1">&gt; handler.   When I tried this with my OpenMPI program, the signal was caught,
</span><br>
<span class="quotelev1">&gt; the files deleted, the processes exited, but the MPI exec command as a whole
</span><br>
<span class="quotelev1">&gt; did not exit.   This is the technique, by the way, that was described in this
</span><br>
<span class="quotelev1">&gt; IBM MPI document:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://publib.boulder.ibm.com/infocenter/clresctr/vxrx/index.jsp?topic=/com.ib">http://publib.boulder.ibm.com/infocenter/clresctr/vxrx/index.jsp?topic=/com.ib</a>
</span><br>
<span class="quotelev1">&gt; m.cluster.pe.doc/pe_linux42/am106l0037.html
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is, what is the &#179;right&#178; way to do this under OpenMPI?  The only
</span><br>
<span class="quotelev1">&gt; way I got the thing to work was by resetting the sigaction to the old handler
</span><br>
<span class="quotelev1">&gt; and re-raising the signal.  It seems to work, but I want to know if I am going
</span><br>
<span class="quotelev1">&gt; to get &#179;bit&#178; by this.  Specifically, am I &#179;closing&#178; MPI correctly by doing
</span><br>
<span class="quotelev1">&gt; this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running OpenMPI 1.2.5 under Fedora 8 on Linux in a x86_64 environment.
</span><br>
<span class="quotelev1">&gt; My compiler is gcc 4.1.2.  This behavior happens when all processes are
</span><br>
<span class="quotelev1">&gt; running on the same node using shared memory and between nodes when using TCP
</span><br>
<span class="quotelev1">&gt; transport.  I don&#185;t have access to any other transport.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jesse Keller
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 454 Life Sciences
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here&#185;s a code snippet to demonstrate what I&#185;m talking about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct sigaction sa_old_term;  /* Global. */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SIGTERM_handler(int signal , siginfo_t * siginfo , void * a)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     UnlinkOpenedFiles(); /* Global function to delete partial files. */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* The commented code doesn&#185;t work. */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     //if (sa_old_term.sa_sigaction)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     //{
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     //      sa_old_term.sa_flags =SA_SIGINFO;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     //      (*sa_old_term.sa_sigaction)(signal,siginfo,a);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     //}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     sigaction(SIGTERM, &amp;sa_old_term,NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     raise(signal);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char * argv)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     struct sigaction sa_term;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     sigemptyset(&amp;sa_term.sa_mask);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     sa_term.sa_flags = SA_SIGINFO;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     sa_term.sa_sigaction = SIGTERM_handler;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     sigaction(SIGTERM, &amp;sa_term, &amp;sa_old_term);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    doSomeMPIComputation();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5503.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5501.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Maybe in reply to:</strong> <a href="5490.php">Keller, Jesse: "[OMPI users] Proper use of sigaction in Open MPI?"</a>
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
