<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 03:56:09 2009" -->
<!-- isoreceived="20090609075609" -->
<!-- sent="Tue, 9 Jun 2009 09:55:46 +0200 (CEST)" -->
<!-- isosent="20090609075546" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="alpine.DEB.2.00.0906090941430.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="408C8223-E245-4135-BF60-46786D05EBC9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Low pressure OPAL progress<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 03:55:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6193.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I'm entirely convinced that MPI doesn't have to save power in a normal 
<br>
scenario. The idea is just that if an MPI process is blocked (i.e. has not 
<br>
performed progress for -say- 5 minutes (default in my implementation), we 
<br>
stop busy polling and have the process drop from 100% CPU usage to 0%.
<br>
<p>I do not call sleep() but usleep(). The result if quite the same, but is 
<br>
less hurting performance in case of (unexpected) restart.
<br>
<p>However, the goal of my RFC was also to know if there was a more clean way 
<br>
to achieve my goal, and from what I read, I guess I should look at the 
<br>
&quot;tick&quot; rate instead of trying to do my own delaying.
<br>
<p>Don't worry, I was quite expecting the configure-in requirement. However, 
<br>
I don't think my patch is good for inclusion, it is only an example to 
<br>
describe what I want to achieve.
<br>
<p>Thanks a lot for your comments,
<br>
Sylvain
<br>
<p>On Mon, 8 Jun 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm not entirely convinced this actually achieves your goals, but I can see 
</span><br>
<span class="quotelev1">&gt; some potential benefits. I'm also not sure that power consumption is that big 
</span><br>
<span class="quotelev1">&gt; of an issue that MPI needs to begin chasing &quot;power saver&quot; modes of operation, 
</span><br>
<span class="quotelev1">&gt; but that can be a separate debate some day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm assuming you don't mean that you actually call &quot;sleep()&quot; as this would be 
</span><br>
<span class="quotelev1">&gt; very bad - I'm assuming you just change the opal_progress &quot;tick&quot; rate 
</span><br>
<span class="quotelev1">&gt; instead. True? If not, and you really call &quot;sleep&quot;, then I would have to 
</span><br>
<span class="quotelev1">&gt; oppose adding this to the code base pending discussion with others who can 
</span><br>
<span class="quotelev1">&gt; corroborate that this won't cause problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, I could live with this so long as it was done as a &quot;configure-in&quot; 
</span><br>
<span class="quotelev1">&gt; capability. Just having the params default to a value that causes the system 
</span><br>
<span class="quotelev1">&gt; to behave similarly to today isn't enough - we still wind up adding logic 
</span><br>
<span class="quotelev1">&gt; into a very critical timing loop for no reason. A simple configure option of 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-progress-monitoring would be sufficient to protect the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2009, at 9:50 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What : when nothing has been received for a very long time - e.g. 5 
</span><br>
<span class="quotelev2">&gt;&gt; minutes, stop busy polling in opal_progress and switch to a usleep-based 
</span><br>
<span class="quotelev2">&gt;&gt; one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why : when we have long waits, and especially when an application is 
</span><br>
<span class="quotelev2">&gt;&gt; deadlock'ed, detecting it is not easy and a lot of power is wasted until 
</span><br>
<span class="quotelev2">&gt;&gt; the end of the time slice (if there is one).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where : an example of how it could be implemented is available at 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bitbucket.org/jeaugeys/low-pressure-opal-progress/">http://bitbucket.org/jeaugeys/low-pressure-opal-progress/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Principle
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress() ensures the progression of MPI communication. The current 
</span><br>
<span class="quotelev2">&gt;&gt; algorithm is a loop calling progress on all registered components. If the 
</span><br>
<span class="quotelev2">&gt;&gt; program is blocked, the loop will busy-poll indefinetely.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Going to sleep after a certain amount of time with nothing received is 
</span><br>
<span class="quotelev2">&gt;&gt; interesting for two things :
</span><br>
<span class="quotelev2">&gt;&gt; - Administrator can easily detect whether a job is deadlocked : all the 
</span><br>
<span class="quotelev2">&gt;&gt; processes are in sleep(). Currently, all processors are using 100% cpu and 
</span><br>
<span class="quotelev2">&gt;&gt; it is very hard to know if progression is still happening or not.
</span><br>
<span class="quotelev2">&gt;&gt; - When there is nothing to receive, power usage is highly reduced.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, it could hurt performance in some cases, typically if we go to 
</span><br>
<span class="quotelev2">&gt;&gt; sleep just before the message arrives. This will highly depend on the 
</span><br>
<span class="quotelev2">&gt;&gt; parameters you give to the sleep mechanism.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At first, we can start with the following assumption : if the sleep takes T 
</span><br>
<span class="quotelev2">&gt;&gt; usec, then sleeping after 10000xT should slow down Receives by a factor 
</span><br>
<span class="quotelev2">&gt;&gt; less than 0.01 %.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, other processes may suffer from you being late, and be delayed by 
</span><br>
<span class="quotelev2">&gt;&gt; T usec (which may represent more than 0.01% for them).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, the goal of this mechanism is mainly to detect far-too-long-waits and 
</span><br>
<span class="quotelev2">&gt;&gt; should quite never be used in normal MPI jobs. It could also trigger a 
</span><br>
<span class="quotelev2">&gt;&gt; warning message when starting to sleep, or at least a trace in the 
</span><br>
<span class="quotelev2">&gt;&gt; notifier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Details of Implementation
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Three parameters fully control the behaviour of this mechanism :
</span><br>
<span class="quotelev2">&gt;&gt; * opal_progress_sleep_count : number of unsuccessful opal_progress() calls 
</span><br>
<span class="quotelev2">&gt;&gt; before we start the timer (to prevent latency impact). It defaults to -1, 
</span><br>
<span class="quotelev2">&gt;&gt; which completely deactivates the sleep (and is therefore equivalent to the 
</span><br>
<span class="quotelev2">&gt;&gt; former code). A value of 1000 can be thought of as a starting point to 
</span><br>
<span class="quotelev2">&gt;&gt; enable this mechanism.
</span><br>
<span class="quotelev2">&gt;&gt; * opal_progress_sleep_trigger : time to wait before going to 
</span><br>
<span class="quotelev2">&gt;&gt; low-pressure-powersave mode. Default : 600 (in seconds) = 10 minutes.
</span><br>
<span class="quotelev2">&gt;&gt; * opal_progress_sleep_duration : time we sleep at each further unsuccessful 
</span><br>
<span class="quotelev2">&gt;&gt; call to opal_progress(). Default : 1000 (in us) = 1 ms.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The duration is big enough to make the process show 0% CPU in top, but low 
</span><br>
<span class="quotelev2">&gt;&gt; enough to preserve a good trigger/duration ratio.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The trigger is voluntary high to keep a good trigger/duration ratio. 
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, to prevent delays from causing chain reactions, trigger should be 
</span><br>
<span class="quotelev2">&gt;&gt; higher than duration * numprocs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Possible Improvements &amp; Pitfalls
</span><br>
<span class="quotelev2">&gt;&gt; ================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Trigger could be set automatically at max(trigger, duration * numprocs * 
</span><br>
<span class="quotelev2">&gt;&gt; 2).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * poll_start and poll_count could be fields of the opal_condition_t struct.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * The sleep section may be exported in a #define and reported in all the 
</span><br>
<span class="quotelev2">&gt;&gt; progress pathes (I'm not sure my patch is good for progress threads for 
</span><br>
<span class="quotelev2">&gt;&gt; example)
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6193.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
