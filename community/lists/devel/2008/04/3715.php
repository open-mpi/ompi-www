<?
$subject_val = "[OMPI devel] SIGUSR2 response";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 15:23:28 2008" -->
<!-- isoreceived="20080417192328" -->
<!-- sent="Thu, 17 Apr 2008 13:23:07 -0600" -->
<!-- isosent="20080417192307" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] SIGUSR2 response" -->
<!-- id="C42CFFBB.4DFA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] SIGUSR2 response<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 15:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
<li><strong>Previous message:</strong> <a href="3714.php">Ralph H Castain: "[OMPI devel] Using do-not-launch, display-map, and do-not-resolve to test mappings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
<li><strong>Reply:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The question was raised on this list a short while ago about potentially
<br>
incorrect behavior by ORTE/OMPI in response to SIGUSR2 being sent to
<br>
application procs. I have spent some time chasing this down, and it does
<br>
-not- appear to be an issue within our systems.
<br>
<p>What I have found is that if you send a SIGUSR1/2 to mpirun, mpirun and the
<br>
daemons correctly transmit the provided signal to the application processes.
<br>
Neither mpirun nor the daemons directly respond to it themselves.
<br>
<p><p>If the application process has defined its own signal handler to trap
<br>
USR1/2, then the application process will successfully do so. Everything
<br>
seems to work fine - the daemon does -not- get a callback nor in any way
<br>
take action to the fact that the proc received this signal - unless the
<br>
process' signal handler orders the process to exit! In this case, the
<br>
environment reports to the orted that the process exit'd during a signal
<br>
handler, which results in a terminated-by-signal status.
<br>
<p>You can, of course, get around this by simply not exiting from within the
<br>
signal handler. Instead, set a flag and return from the handler, then have
<br>
an appropriate routine check the flag and exit. I have done that in several
<br>
codes and would be happy to advise you on how to do it. With this technique,
<br>
you clear the signal and the environment will not report you as
<br>
terminated-by-signal.
<br>
<p><p>However, if the application process has -not- defined its own signal
<br>
handler, some native environments terminate the process when it receives
<br>
SIGUSR1/2! This occurred for me under SLURM on the odin cluster, and under
<br>
TM on our RRZ cluster. I cannot say it is a universal situation and would
<br>
welcome more feedback from people with access to other environments.
<br>
<p>This termination is dutifully reported to the orted, which notes that the
<br>
proc was terminated-by-signal. The orted does not check to see -which-
<br>
signal was used to terminate the proc.
<br>
<p><p>By our own design requirements, the response to a termination-by-signal of a
<br>
process is to abort the job. If we want to modify that, it would be simple
<br>
to say &quot;except if it was a SIGUSR1/2 signal&quot;. I have no issue with making
<br>
that change, but please note that it -is- a change in our defined behavior,
<br>
and a change from what has been our behavior since the beginning of the
<br>
project.
<br>
<p>Let me know if you want to change the design requirement and we can take
<br>
care of it.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
<li><strong>Previous message:</strong> <a href="3714.php">Ralph H Castain: "[OMPI devel] Using do-not-launch, display-map, and do-not-resolve to test mappings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
<li><strong>Reply:</strong> <a href="3716.php">Richard Graham: "Re: [OMPI devel] SIGUSR2 response"</a>
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
