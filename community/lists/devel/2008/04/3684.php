<?
$subject_val = "Re: [OMPI devel] Signals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 13:48:06 2008" -->
<!-- isoreceived="20080408174806" -->
<!-- sent="Tue, 08 Apr 2008 11:47:55 -0600" -->
<!-- isosent="20080408174755" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Signals" -->
<!-- id="C4210BEB.CFDE%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47FBAD2E.4030502_at_Sun.COM" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 13:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3685.php">Richard Graham: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3685.php">Richard Graham: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3685.php">Richard Graham: "Re: [OMPI devel] Signals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found what Pak said a little confusing as the wait_daemon function doesn't
<br>
actually receive a signal itself - it only detects that a proc has exited
<br>
and checks to see if that happened due to a signal. If so, it flags that
<br>
situation and will order the job aborted.
<br>
<p>So if the proc continues alive, the fact that it was hit with SIGUSR2 will
<br>
not be detected by ORTE nor will anything happen - however, if the OS uses
<br>
SIGUSR2 to terminate the proc, or if the proc terminates when it gets that
<br>
signal, we will see that proc terminate due to signal and abort the rest of
<br>
the job.
<br>
<p>We could change it if that is what people want - it is trivial to insert
<br>
code to say &quot;kill everything except if it died due to a certain signal&quot;.
<br>
<p>&lt;shrug&gt; up to you folks. Current behavior is what you said you wanted a long
<br>
time ago - nothing has changed in this regard for several years.
<br>
<p><p>On 4/8/08 11:36 AM, &quot;Pak Lui&quot; &lt;Pak.Lui_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; First, can your user executable create a signal handler to catch the
</span><br>
<span class="quotelev1">&gt; SIGUSR2 to not exit? By default on Solaris it is going to exit, unless
</span><br>
<span class="quotelev1">&gt; you catch the signal and have the process to do nothing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from signal(3HEAD)
</span><br>
<span class="quotelev1">&gt;       Name             Value   Default    Event
</span><br>
<span class="quotelev1">&gt;       SIGUSR1          16      Exit       User Signal 1
</span><br>
<span class="quotelev1">&gt;       SIGUSR2          17      Exit       User Signal 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The other thing is, I suspect orte_plm_rsh_wait_daemon() in the rsh plm
</span><br>
<span class="quotelev1">&gt; might cause the processes to exit if the orted (or mpirun if it's on
</span><br>
<span class="quotelev1">&gt; HNP) receives a signal like SIGUSR2; it'd work on killing all the user
</span><br>
<span class="quotelev1">&gt; processes on that node once it receives a signal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I workaround this for gridengine PLM. Once the gridengine_wait_daemon()
</span><br>
<span class="quotelev1">&gt; receives a SIGUSR1/SIGUSR2 signal, it just lets the signals to
</span><br>
<span class="quotelev1">&gt; acknowledge a signal returns, without declaring the launch_failed which
</span><br>
<span class="quotelev1">&gt; would kill off the user processes. The signals would also get passed to
</span><br>
<span class="quotelev1">&gt; the user processes, and let them decide what to do with the signals
</span><br>
<span class="quotelev1">&gt; themselves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE needed this so the job kill or job suspension notification to work
</span><br>
<span class="quotelev1">&gt; properly since they would send a SIGUSR1/2 to mpirun. I believe this is
</span><br>
<span class="quotelev1">&gt; probably what you need in the rsh plm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am running into a situation where I am trying to deliver a signal to the
</span><br>
<span class="quotelev2">&gt;&gt; mpi procs (sigusr2).  I deliver this to mpirun, which propagates it to the
</span><br>
<span class="quotelev2">&gt;&gt; mpi procs, but then proceeds to kill the children.  Is there an easy way
</span><br>
<span class="quotelev2">&gt;&gt; that I can get around this ?  I am using this mechanism in a situation where
</span><br>
<span class="quotelev2">&gt;&gt; I don't have a debugger, and trying to use this to turn on debugging when I
</span><br>
<span class="quotelev2">&gt;&gt; hit a hang, so killing the mpi procs is really not what I want to have
</span><br>
<span class="quotelev2">&gt;&gt; happen.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rich
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3685.php">Richard Graham: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="3683.php">Pak Lui: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3685.php">Richard Graham: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3685.php">Richard Graham: "Re: [OMPI devel] Signals"</a>
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
