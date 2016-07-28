<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 09:43:34 2009" -->
<!-- isoreceived="20090609134334" -->
<!-- sent="Tue, 9 Jun 2009 07:43:28 -0600" -->
<!-- isosent="20090609134328" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="71d2d8cc0906090643o3aa72907id64f3d2d7189b87_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.0906091428240.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 09:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6204.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6202.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6204.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6204.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Couple of other things to help stimulate the thinking:
<br>
<p>1. it isn't that OMPI -couldn't- receive a message, but rather that it
<br>
-didn't- receive a message. This may or may not indicate that there is a
<br>
problem. Could just be an application that doesn't need to communicate for
<br>
awhile, as per my example. I admit, though, that 10 minutes is a tad
<br>
long...but I've seen some bizarre apps around here :-)
<br>
<p>2. instead of putting things to sleep or even adjusting the loop rate, you
<br>
might want to consider using the orte_notifier capability and notify the
<br>
system that the job may be stalled. Or perhaps adding an API to the
<br>
orte_errmgr framework to notify it that nothing has been received for
<br>
awhile, and let people implement different strategies for detecting what
<br>
might be &quot;wrong&quot; and what they want to do about it.
<br>
<p>My point with this second bullet is that there are other response options
<br>
than hardwiring putting the process to sleep. You could let someone know so
<br>
a human can decide what, if anything, to do about it, or provide a hook so
<br>
that people can explore/utilize different response strategies...or both!
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Tue, Jun 9, 2009 at 6:52 AM, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I understand your point of view, and mostly share it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the biggest point in my example is that sleep occurs only after (I
</span><br>
<span class="quotelev1">&gt; was wrong in my previous e-mail) 10 minutes of inactivity, and this value is
</span><br>
<span class="quotelev1">&gt; fully configurable. I didn't intend to call sleep after 2 seconds. Plus, as
</span><br>
<span class="quotelev1">&gt; said before, I planned to have the library do show_help() when this happens
</span><br>
<span class="quotelev1">&gt; (something like : &quot;Open MPI couldn't receive a message for 10 minutes,
</span><br>
<span class="quotelev1">&gt; lowering pressure&quot;) so that the application that really needs more than 10
</span><br>
<span class="quotelev1">&gt; minutes to receive a message can increase it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the tick rate code, I couldn't see how changing it would make
</span><br>
<span class="quotelev1">&gt; CPU usage drop. If I understand correctly your e-mail, you block in the
</span><br>
<span class="quotelev1">&gt; kernel using poll(), is that right ? So, you may well loose 10 us because of
</span><br>
<span class="quotelev1">&gt; that kernel call, but this is a lot less than the 1 ms I'm currently loosing
</span><br>
<span class="quotelev1">&gt; with usleep. This makes sense - although being hard to implement since all
</span><br>
<span class="quotelev1">&gt; btl must have this ability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your comments, I will continue to think about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 9 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My concern with any form of sleep is with the impact on the proc - since
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress might not be running in a separate thread, won't the sleep
</span><br>
<span class="quotelev2">&gt;&gt; apply to the process as a whole? In that case, the process isn't free to
</span><br>
<span class="quotelev2">&gt;&gt; continue computing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can envision applications that might call down into the MPI library and
</span><br>
<span class="quotelev2">&gt;&gt; have opal_progress not find anything, but there is nothing wrong. The
</span><br>
<span class="quotelev2">&gt;&gt; application could continue computations just fine. I would hate to see us
</span><br>
<span class="quotelev2">&gt;&gt; put the process to sleep just because the MPI library wasn't busy enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hence my suggestion to just change the tick rate. It would definitely
</span><br>
<span class="quotelev2">&gt;&gt; cause a higher latency for the first message that arrived while in this
</span><br>
<span class="quotelev2">&gt;&gt; state, which is bothersome, but would meet the stated objective without
</span><br>
<span class="quotelev2">&gt;&gt; interfering with the process itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LANL has also been looking at this problem of stalled jobs, but from a
</span><br>
<span class="quotelev2">&gt;&gt; different approach. We monitor (using a separate job) progress in terms of
</span><br>
<span class="quotelev2">&gt;&gt; output files changing in size plus other factors as specified by the user.
</span><br>
<span class="quotelev2">&gt;&gt; If we don't see any progress in those terms over some time, then we kill the
</span><br>
<span class="quotelev2">&gt;&gt; job. We chose that path because of the concerns expressed above - e.g., on
</span><br>
<span class="quotelev2">&gt;&gt; our RR machine, intense computations can be underway on the Cell blades
</span><br>
<span class="quotelev2">&gt;&gt; while the Opteron MPI processes wait for us to reach a communication point.
</span><br>
<span class="quotelev2">&gt;&gt; We -want- those processes spinning away so that, when the comm starts, it
</span><br>
<span class="quotelev2">&gt;&gt; can proceed as quickly as possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just some thoughts...
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2009, at 5:28 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm entirely convinced that MPI doesn't have to save power in a normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scenario. The idea is just that if an MPI process is blocked (i.e. has not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performed progress for -say- 5 minutes (default in my implementation), we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stop busy polling and have the process drop from 100% CPU usage to 0%.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do not call sleep() but usleep(). The result if quite the same, but is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; less hurting performance in case of (unexpected) restart.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, the goal of my RFC was also to know if there was a more clean
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; way to achieve my goal, and from what I read, I guess I should look at the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;tick&quot; rate instead of trying to do my own delaying.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  One way around this is to make all blocked communications (even SM) to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use poll to block for incoming messages.  Jeff and I have discussed this and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had many false starts on it.  The biggest issue is coming up with a way to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have blocks on the SM btl converted to the system poll call without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requiring a socket write for every packet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The usleep solution works but is kind of ugly IMO.  I think when I looked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at doing that the overhead increased signifcantly for certain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communications.  Maybe not for toy benchmarks but for less synchronized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes I saw the usleep adding overhead where I didn't want it too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Don't worry, I was quite expecting the configure-in requirement.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, I don't think my patch is good for inclusion, it is only an example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to describe what I want to achieve.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks a lot for your comments,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, 8 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I'm not entirely convinced this actually achieves your goals, but I can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see some potential benefits. I'm also not sure that power consumption is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that big of an issue that MPI needs to begin chasing &quot;power saver&quot; modes of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operation, but that can be a separate debate some day.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm assuming you don't mean that you actually call &quot;sleep()&quot; as this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would be very bad - I'm assuming you just change the opal_progress &quot;tick&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rate instead. True? If not, and you really call &quot;sleep&quot;, then I would have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to oppose adding this to the code base pending discussion with others who
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can corroborate that this won't cause problems.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Either way, I could live with this so long as it was done as a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;configure-in&quot; capability. Just having the params default to a value that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; causes the system to behave similarly to today isn't enough - we still wind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; up adding logic into a very critical timing loop for no reason. A simple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configure option of --enable-mpi-progress-monitoring would be sufficient to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protect the code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 8, 2009, at 9:50 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  What : when nothing has been received for a very long time - e.g. 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; minutes, stop busy polling in opal_progress and switch to a usleep-based
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; one.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Why : when we have long waits, and especially when an application is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; deadlock'ed, detecting it is not easy and a lot of power is wasted until the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; end of the time slice (if there is one).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Where : an example of how it could be implemented is available at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://bitbucket.org/jeaugeys/low-pressure-opal-progress/">http://bitbucket.org/jeaugeys/low-pressure-opal-progress/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Principle
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_progress() ensures the progression of MPI communication. The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; current algorithm is a loop calling progress on all registered components.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If the program is blocked, the loop will busy-poll indefinetely.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Going to sleep after a certain amount of time with nothing received is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; interesting for two things :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Administrator can easily detect whether a job is deadlocked : all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the processes are in sleep(). Currently, all processors are using 100% cpu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and it is very hard to know if progression is still happening or not.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - When there is nothing to receive, power usage is highly reduced.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, it could hurt performance in some cases, typically if we go
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to sleep just before the message arrives. This will highly depend on the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameters you give to the sleep mechanism.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; At first, we can start with the following assumption : if the sleep
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; takes T usec, then sleeping after 10000xT should slow down Receives by a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; factor less than 0.01 %.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, other processes may suffer from you being late, and be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; delayed by T usec (which may represent more than 0.01% for them).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So, the goal of this mechanism is mainly to detect far-too-long-waits
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and should quite never be used in normal MPI jobs. It could also trigger a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; warning message when starting to sleep, or at least a trace in the notifier.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Details of Implementation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Three parameters fully control the behaviour of this mechanism :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * opal_progress_sleep_count : number of unsuccessful opal_progress()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; calls before we start the timer (to prevent latency impact). It defaults to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -1, which completely deactivates the sleep (and is therefore equivalent to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the former code). A value of 1000 can be thought of as a starting point to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable this mechanism.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * opal_progress_sleep_trigger : time to wait before going to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; low-pressure-powersave mode. Default : 600 (in seconds) = 10 minutes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * opal_progress_sleep_duration : time we sleep at each further
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; unsuccessful call to opal_progress(). Default : 1000 (in us) = 1 ms.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The duration is big enough to make the process show 0% CPU in top, but
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; low enough to preserve a good trigger/duration ratio.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The trigger is voluntary high to keep a good trigger/duration ratio.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Indeed, to prevent delays from causing chain reactions, trigger should be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; higher than duration * numprocs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Possible Improvements &amp; Pitfalls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Trigger could be set automatically at max(trigger, duration *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; numprocs * 2).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * poll_start and poll_count could be fields of the opal_condition_t
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; struct.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * The sleep section may be exported in a #define and reported in all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the progress pathes (I'm not sure my patch is good for progress threads for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; example)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6203/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6204.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6202.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6204.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6204.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
