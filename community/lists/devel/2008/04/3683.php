<?
$subject_val = "Re: [OMPI devel] Signals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 13:36:53 2008" -->
<!-- isoreceived="20080408173653" -->
<!-- sent="Tue, 08 Apr 2008 13:36:46 -0400" -->
<!-- isosent="20080408173646" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Signals" -->
<!-- id="47FBAD2E.4030502_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4211CC9.18E3C%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 13:36:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3682.php">Richard Graham: "[OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="3682.php">Richard Graham: "[OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, can your user executable create a signal handler to catch the 
<br>
SIGUSR2 to not exit? By default on Solaris it is going to exit, unless 
<br>
you catch the signal and have the process to do nothing.
<br>
<p>from signal(3HEAD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name             Value   Default    Event
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGUSR1          16      Exit       User Signal 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGUSR2          17      Exit       User Signal 2
<br>
<p>The other thing is, I suspect orte_plm_rsh_wait_daemon() in the rsh plm 
<br>
might cause the processes to exit if the orted (or mpirun if it's on 
<br>
HNP) receives a signal like SIGUSR2; it'd work on killing all the user 
<br>
processes on that node once it receives a signal.
<br>
<p>I workaround this for gridengine PLM. Once the gridengine_wait_daemon() 
<br>
receives a SIGUSR1/SIGUSR2 signal, it just lets the signals to 
<br>
acknowledge a signal returns, without declaring the launch_failed which 
<br>
would kill off the user processes. The signals would also get passed to 
<br>
the user processes, and let them decide what to do with the signals 
<br>
themselves.
<br>
<p>SGE needed this so the job kill or job suspension notification to work 
<br>
properly since they would send a SIGUSR1/2 to mpirun. I believe this is 
<br>
probably what you need in the rsh plm.
<br>
<p>Richard Graham wrote:
<br>
<span class="quotelev1">&gt; I am running into a situation where I am trying to deliver a signal to the
</span><br>
<span class="quotelev1">&gt; mpi procs (sigusr2).  I deliver this to mpirun, which propagates it to the
</span><br>
<span class="quotelev1">&gt; mpi procs, but then proceeds to kill the children.  Is there an easy way
</span><br>
<span class="quotelev1">&gt; that I can get around this ?  I am using this mechanism in a situation where
</span><br>
<span class="quotelev1">&gt; I don't have a debugger, and trying to use this to turn on debugging when I
</span><br>
<span class="quotelev1">&gt; hit a hang, so killing the mpi procs is really not what I want to have
</span><br>
<span class="quotelev1">&gt; happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rich
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
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3682.php">Richard Graham: "[OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="3682.php">Richard Graham: "[OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="3684.php">Ralph H Castain: "Re: [OMPI devel] Signals"</a>
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
