<?
$subject_val = "Re: [OMPI devel] Signals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 13:56:03 2008" -->
<!-- isoreceived="20080408175603" -->
<!-- sent="Tue, 08 Apr 2008 13:54:53 -0400" -->
<!-- isosent="20080408175453" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Signals" -->
<!-- id="C42129AD.18E49%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4210BEB.CFDE%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Signals<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 13:54:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3686.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3686.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3686.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3687.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What happens if I deliver sigusr2 to mpirun ?  What I observe (for both
<br>
ssh/rsh and torque) that if I deliver a sigusr2 to mpirun, the signal does
<br>
get propagated to the mpi procs, which do invoke the signal handler I
<br>
registered, but the job is terminated right after that.  However, if I
<br>
deliver the signal directly to the mpi procs, the signal handler is invoked,
<br>
and the job continues to run.
<br>
<p>So, I think that what was intended to happen is the correct thing, but for
<br>
some reason it is not happening.
<br>
<p>Rich
<br>
<p><p>On 4/8/08 1:47 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I found what Pak said a little confusing as the wait_daemon function doesn't
</span><br>
<span class="quotelev1">&gt; actually receive a signal itself - it only detects that a proc has exited
</span><br>
<span class="quotelev1">&gt; and checks to see if that happened due to a signal. If so, it flags that
</span><br>
<span class="quotelev1">&gt; situation and will order the job aborted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if the proc continues alive, the fact that it was hit with SIGUSR2 will
</span><br>
<span class="quotelev1">&gt; not be detected by ORTE nor will anything happen - however, if the OS uses
</span><br>
<span class="quotelev1">&gt; SIGUSR2 to terminate the proc, or if the proc terminates when it gets that
</span><br>
<span class="quotelev1">&gt; signal, we will see that proc terminate due to signal and abort the rest of
</span><br>
<span class="quotelev1">&gt; the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We could change it if that is what people want - it is trivial to insert
</span><br>
<span class="quotelev1">&gt; code to say &quot;kill everything except if it died due to a certain signal&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;shrug&gt; up to you folks. Current behavior is what you said you wanted a long
</span><br>
<span class="quotelev1">&gt; time ago - nothing has changed in this regard for several years.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/8/08 11:36 AM, &quot;Pak Lui&quot; &lt;Pak.Lui_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First, can your user executable create a signal handler to catch the
</span><br>
<span class="quotelev2">&gt;&gt; SIGUSR2 to not exit? By default on Solaris it is going to exit, unless
</span><br>
<span class="quotelev2">&gt;&gt; you catch the signal and have the process to do nothing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; from signal(3HEAD)
</span><br>
<span class="quotelev2">&gt;&gt;       Name             Value   Default    Event
</span><br>
<span class="quotelev2">&gt;&gt;       SIGUSR1          16      Exit       User Signal 1
</span><br>
<span class="quotelev2">&gt;&gt;       SIGUSR2          17      Exit       User Signal 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The other thing is, I suspect orte_plm_rsh_wait_daemon() in the rsh plm
</span><br>
<span class="quotelev2">&gt;&gt; might cause the processes to exit if the orted (or mpirun if it's on
</span><br>
<span class="quotelev2">&gt;&gt; HNP) receives a signal like SIGUSR2; it'd work on killing all the user
</span><br>
<span class="quotelev2">&gt;&gt; processes on that node once it receives a signal.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I workaround this for gridengine PLM. Once the gridengine_wait_daemon()
</span><br>
<span class="quotelev2">&gt;&gt; receives a SIGUSR1/SIGUSR2 signal, it just lets the signals to
</span><br>
<span class="quotelev2">&gt;&gt; acknowledge a signal returns, without declaring the launch_failed which
</span><br>
<span class="quotelev2">&gt;&gt; would kill off the user processes. The signals would also get passed to
</span><br>
<span class="quotelev2">&gt;&gt; the user processes, and let them decide what to do with the signals
</span><br>
<span class="quotelev2">&gt;&gt; themselves.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SGE needed this so the job kill or job suspension notification to work
</span><br>
<span class="quotelev2">&gt;&gt; properly since they would send a SIGUSR1/2 to mpirun. I believe this is
</span><br>
<span class="quotelev2">&gt;&gt; probably what you need in the rsh plm.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running into a situation where I am trying to deliver a signal to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi procs (sigusr2).  I deliver this to mpirun, which propagates it to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi procs, but then proceeds to kill the children.  Is there an easy way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I can get around this ?  I am using this mechanism in a situation where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have a debugger, and trying to use this to turn on debugging when I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hit a hang, so killing the mpi procs is really not what I want to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happen.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="3686.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3686.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3686.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3687.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
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
