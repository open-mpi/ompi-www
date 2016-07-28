<?
$subject_val = "Re: [OMPI devel] SIGUSR2 response";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 16:13:26 2008" -->
<!-- isoreceived="20080417201326" -->
<!-- sent="Thu, 17 Apr 2008 14:13:05 -0600" -->
<!-- isosent="20080417201305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SIGUSR2 response" -->
<!-- id="C42D0B71.4E06%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C42D2567.1D23B%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SIGUSR2 response<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 16:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3718.php">George Bosilca: "Re: [OMPI devel] MPI_Barrier performance"</a>
<li><strong>Previous message:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
<li><strong>In reply to:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is strange. If your procs are trapping the signal, then it should be
<br>
okay - at least, my signal traps are operating cleanly in Mac, TM, and SLURM
<br>
environments.
<br>
<p>Let me know if you see anything further and maybe we can figure out why it
<br>
is behaving that way.
<br>
<p>Ralph
<br>
<p><p><p>On 4/17/08 2:03 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;   Thanks for looking into this.  I do not think that the behaviour needs to
</span><br>
<span class="quotelev1">&gt; change - it is correct.  However, for some reason this is not how things
</span><br>
<span class="quotelev1">&gt; were running for me -  I wander what the difference is.  I worked around
</span><br>
<span class="quotelev1">&gt; this by getting the pid's of the mpi processes, and delivered the signals
</span><br>
<span class="quotelev1">&gt; directly to them, so was able to avoid the kill, and this was sufficient for
</span><br>
<span class="quotelev1">&gt; me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/17/08 3:23 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The question was raised on this list a short while ago about potentially
</span><br>
<span class="quotelev2">&gt;&gt; incorrect behavior by ORTE/OMPI in response to SIGUSR2 being sent to
</span><br>
<span class="quotelev2">&gt;&gt; application procs. I have spent some time chasing this down, and it does
</span><br>
<span class="quotelev2">&gt;&gt; -not- appear to be an issue within our systems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I have found is that if you send a SIGUSR1/2 to mpirun, mpirun and the
</span><br>
<span class="quotelev2">&gt;&gt; daemons correctly transmit the provided signal to the application processes.
</span><br>
<span class="quotelev2">&gt;&gt; Neither mpirun nor the daemons directly respond to it themselves.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the application process has defined its own signal handler to trap
</span><br>
<span class="quotelev2">&gt;&gt; USR1/2, then the application process will successfully do so. Everything
</span><br>
<span class="quotelev2">&gt;&gt; seems to work fine - the daemon does -not- get a callback nor in any way
</span><br>
<span class="quotelev2">&gt;&gt; take action to the fact that the proc received this signal - unless the
</span><br>
<span class="quotelev2">&gt;&gt; process' signal handler orders the process to exit! In this case, the
</span><br>
<span class="quotelev2">&gt;&gt; environment reports to the orted that the process exit'd during a signal
</span><br>
<span class="quotelev2">&gt;&gt; handler, which results in a terminated-by-signal status.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can, of course, get around this by simply not exiting from within the
</span><br>
<span class="quotelev2">&gt;&gt; signal handler. Instead, set a flag and return from the handler, then have
</span><br>
<span class="quotelev2">&gt;&gt; an appropriate routine check the flag and exit. I have done that in several
</span><br>
<span class="quotelev2">&gt;&gt; codes and would be happy to advise you on how to do it. With this technique,
</span><br>
<span class="quotelev2">&gt;&gt; you clear the signal and the environment will not report you as
</span><br>
<span class="quotelev2">&gt;&gt; terminated-by-signal.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, if the application process has -not- defined its own signal
</span><br>
<span class="quotelev2">&gt;&gt; handler, some native environments terminate the process when it receives
</span><br>
<span class="quotelev2">&gt;&gt; SIGUSR1/2! This occurred for me under SLURM on the odin cluster, and under
</span><br>
<span class="quotelev2">&gt;&gt; TM on our RRZ cluster. I cannot say it is a universal situation and would
</span><br>
<span class="quotelev2">&gt;&gt; welcome more feedback from people with access to other environments.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This termination is dutifully reported to the orted, which notes that the
</span><br>
<span class="quotelev2">&gt;&gt; proc was terminated-by-signal. The orted does not check to see -which-
</span><br>
<span class="quotelev2">&gt;&gt; signal was used to terminate the proc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By our own design requirements, the response to a termination-by-signal of a
</span><br>
<span class="quotelev2">&gt;&gt; process is to abort the job. If we want to modify that, it would be simple
</span><br>
<span class="quotelev2">&gt;&gt; to say &quot;except if it was a SIGUSR1/2 signal&quot;. I have no issue with making
</span><br>
<span class="quotelev2">&gt;&gt; that change, but please note that it -is- a change in our defined behavior,
</span><br>
<span class="quotelev2">&gt;&gt; and a change from what has been our behavior since the beginning of the
</span><br>
<span class="quotelev2">&gt;&gt; project.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if you want to change the design requirement and we can take
</span><br>
<span class="quotelev2">&gt;&gt; care of it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3718.php">George Bosilca: "Re: [OMPI devel] MPI_Barrier performance"</a>
<li><strong>Previous message:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
<li><strong>In reply to:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
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
