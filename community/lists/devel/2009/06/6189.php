<?
$subject_val = "[OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 11:51:09 2009" -->
<!-- isoreceived="20090608155109" -->
<!-- sent="Mon, 8 Jun 2009 17:50:56 +0200 (CEST)" -->
<!-- isosent="20090608155056" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="alpine.DEB.1.10.0905120949520.4423_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] Low pressure OPAL progress<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 11:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6188.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6200.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What : when nothing has been received for a very long time - e.g. 5 
<br>
minutes, stop busy polling in opal_progress and switch to a usleep-based 
<br>
one.
<br>
<p>Why : when we have long waits, and especially when an application is 
<br>
deadlock'ed, detecting it is not easy and a lot of power is wasted until 
<br>
the end of the time slice (if there is one).
<br>
<p>Where : an example of how it could be implemented is available at 
<br>
<a href="http://bitbucket.org/jeaugeys/low-pressure-opal-progress/">http://bitbucket.org/jeaugeys/low-pressure-opal-progress/</a>
<br>
<p>Principle
<br>
=========
<br>
<p>opal_progress() ensures the progression of MPI communication. The current 
<br>
algorithm is a loop calling progress on all registered components. If the 
<br>
program is blocked, the loop will busy-poll indefinetely.
<br>
<p>Going to sleep after a certain amount of time with nothing received is 
<br>
interesting for two things :
<br>
&nbsp;&nbsp;- Administrator can easily detect whether a job is deadlocked : all the 
<br>
processes are in sleep(). Currently, all processors are using 100% cpu and 
<br>
it is very hard to know if progression is still happening or not.
<br>
&nbsp;&nbsp;- When there is nothing to receive, power usage is highly reduced.
<br>
<p>However, it could hurt performance in some cases, typically if we go to 
<br>
sleep just before the message arrives. This will highly depend on the 
<br>
parameters you give to the sleep mechanism.
<br>
<p>At first, we can start with the following assumption : if the sleep takes 
<br>
T usec, then sleeping after 10000xT should slow down Receives by a factor 
<br>
less than 0.01 %.
<br>
<p>However, other processes may suffer from you being late, and be delayed by 
<br>
T usec (which may represent more than 0.01% for them).
<br>
<p>So, the goal of this mechanism is mainly to detect far-too-long-waits and 
<br>
should quite never be used in normal MPI jobs. It could also trigger a 
<br>
warning message when starting to sleep, or at least a trace in the 
<br>
notifier.
<br>
<p>Details of Implementation
<br>
=========================
<br>
<p>Three parameters fully control the behaviour of this mechanism :
<br>
&nbsp;&nbsp;* opal_progress_sleep_count : number of unsuccessful opal_progress() 
<br>
calls before we start the timer (to prevent latency impact). It defaults 
<br>
to -1, which completely deactivates the sleep (and is therefore equivalent 
<br>
to the former code). A value of 1000 can be thought of as a starting point 
<br>
to enable this mechanism.
<br>
&nbsp;&nbsp;* opal_progress_sleep_trigger : time to wait before going to 
<br>
low-pressure-powersave mode. Default : 600 (in seconds) = 10 minutes.
<br>
&nbsp;&nbsp;* opal_progress_sleep_duration : time we sleep at each further 
<br>
unsuccessful call to opal_progress(). Default : 1000 (in us) = 1 ms.
<br>
<p>The duration is big enough to make the process show 0% CPU in top, but low 
<br>
enough to preserve a good trigger/duration ratio.
<br>
<p>The trigger is voluntary high to keep a good trigger/duration ratio. 
<br>
Indeed, to prevent delays from causing chain reactions, trigger should be 
<br>
higher than duration * numprocs.
<br>
<p>Possible Improvements &amp; Pitfalls
<br>
================================
<br>
<p>* Trigger could be set automatically at max(trigger, duration * numprocs * 
<br>
2).
<br>
<p>* poll_start and poll_count could be fields of the opal_condition_t 
<br>
struct.
<br>
<p>* The sleep section may be exported in a #define and reported in all the 
<br>
progress pathes (I'm not sure my patch is good for progress threads for 
<br>
example)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6188.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6200.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
