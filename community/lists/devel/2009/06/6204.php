<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 10:20:25 2009" -->
<!-- isoreceived="20090609142025" -->
<!-- sent="Tue, 9 Jun 2009 16:20:11 +0200 (CEST)" -->
<!-- isosent="20090609142011" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="alpine.DEB.2.00.0906091611010.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0906090643o3aa72907id64f3d2d7189b87_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-09 10:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6203.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6203.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 9 Jun 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 2. instead of putting things to sleep or even adjusting the loop rate, you might want to consider using the orte_notifier
</span><br>
<span class="quotelev1">&gt; capability and notify the system that the job may be stalled. Or perhaps adding an API to the orte_errmgr framework to
</span><br>
<span class="quotelev1">&gt; notify it that nothing has been received for awhile, and let people implement different strategies for detecting what might
</span><br>
<span class="quotelev1">&gt; be &quot;wrong&quot; and what they want to do about it.
</span><br>
Great remark. What is really needed here is the information of &quot;nothing 
<br>
received for X minutes&quot;. Just having the information somewhere should be 
<br>
sufficient. We often see users asking if their application is still 
<br>
progressing, and this should answer their questions. This would also 
<br>
address the need of administrators to stop deadlocked runs during the 
<br>
night.
<br>
<p>I guess I'll redirect my work on this and couple it with our current 
<br>
effort on logging and administration tools coupling.
<br>
<p>Thanks a lot guys !
<br>
<p>Sylvain
<br>
<p><span class="quotelev1">&gt; My point with this second bullet is that there are other response options than hardwiring putting the process to sleep. You
</span><br>
<span class="quotelev1">&gt; could let someone know so a human can decide what, if anything, to do about it, or provide a hook so that people can
</span><br>
<span class="quotelev1">&gt; explore/utilize different response strategies...or both!
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
<span class="quotelev1">&gt; On Tue, Jun 9, 2009 at 6:52 AM, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       I understand your point of view, and mostly share it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I think the biggest point in my example is that sleep occurs only after (I was wrong in my previous e-mail) 10
</span><br>
<span class="quotelev1">&gt;       minutes of inactivity, and this value is fully configurable. I didn't intend to call sleep after 2 seconds.
</span><br>
<span class="quotelev1">&gt;       Plus, as said before, I planned to have the library do show_help() when this happens (something like : &quot;Open
</span><br>
<span class="quotelev1">&gt;       MPI couldn't receive a message for 10 minutes, lowering pressure&quot;) so that the application that really needs
</span><br>
<span class="quotelev1">&gt;       more than 10 minutes to receive a message can increase it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Looking at the tick rate code, I couldn't see how changing it would make CPU usage drop. If I understand
</span><br>
<span class="quotelev1">&gt;       correctly your e-mail, you block in the kernel using poll(), is that right ? So, you may well loose 10 us
</span><br>
<span class="quotelev1">&gt;       because of that kernel call, but this is a lot less than the 1 ms I'm currently loosing with usleep. This makes
</span><br>
<span class="quotelev1">&gt;       sense - although being hard to implement since all btl must have this ability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Thanks for your comments, I will continue to think about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 9 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       My concern with any form of sleep is with the impact on the proc - since opal_progress might not be
</span><br>
<span class="quotelev1">&gt;       running in a separate thread, won't the sleep apply to the process as a whole? In that case, the process
</span><br>
<span class="quotelev1">&gt;       isn't free to continue computing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I can envision applications that might call down into the MPI library and have opal_progress not find
</span><br>
<span class="quotelev1">&gt;       anything, but there is nothing wrong. The application could continue computations just fine. I would hate
</span><br>
<span class="quotelev1">&gt;       to see us put the process to sleep just because the MPI library wasn't busy enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Hence my suggestion to just change the tick rate. It would definitely cause a higher latency for the
</span><br>
<span class="quotelev1">&gt;       first message that arrived while in this state, which is bothersome, but would meet the stated objective
</span><br>
<span class="quotelev1">&gt;       without interfering with the process itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       LANL has also been looking at this problem of stalled jobs, but from a different approach. We monitor
</span><br>
<span class="quotelev1">&gt;       (using a separate job) progress in terms of output files changing in size plus other factors as specified
</span><br>
<span class="quotelev1">&gt;       by the user. If we don't see any progress in those terms over some time, then we kill the job. We chose
</span><br>
<span class="quotelev1">&gt;       that path because of the concerns expressed above - e.g., on our RR machine, intense computations can be
</span><br>
<span class="quotelev1">&gt;       underway on the Cell blades while the Opteron MPI processes wait for us to reach a communication point.
</span><br>
<span class="quotelev1">&gt;       We -want- those processes spinning away so that, when the comm starts, it can proceed as quickly as
</span><br>
<span class="quotelev1">&gt;       possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Just some thoughts...
</span><br>
<span class="quotelev1">&gt;       Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       On Jun 9, 2009, at 5:28 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;                   Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   I'm entirely convinced that MPI doesn't have to save power in a normal scenario.
</span><br>
<span class="quotelev1">&gt;                   The idea is just that if an MPI process is blocked (i.e. has not performed
</span><br>
<span class="quotelev1">&gt;                   progress for -say- 5 minutes (default in my implementation), we stop busy polling
</span><br>
<span class="quotelev1">&gt;                   and have the process drop from 100% CPU usage to 0%.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   I do not call sleep() but usleep(). The result if quite the same, but is less
</span><br>
<span class="quotelev1">&gt;                   hurting performance in case of (unexpected) restart.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   However, the goal of my RFC was also to know if there was a more clean way to
</span><br>
<span class="quotelev1">&gt;                   achieve my goal, and from what I read, I guess I should look at the &quot;tick&quot; rate
</span><br>
<span class="quotelev1">&gt;                   instead of trying to do my own delaying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             One way around this is to make all blocked communications (even SM) to use poll to block for
</span><br>
<span class="quotelev1">&gt;             incoming messages. &#160;Jeff and I have discussed this and had many false starts on it. &#160;The
</span><br>
<span class="quotelev1">&gt;             biggest issue is coming up with a way to have blocks on the SM btl converted to the system
</span><br>
<span class="quotelev1">&gt;             poll call without requiring a socket write for every packet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             The usleep solution works but is kind of ugly IMO. &#160;I think when I looked at doing that the
</span><br>
<span class="quotelev1">&gt;             overhead increased signifcantly for certain communications. &#160;Maybe not for toy benchmarks but
</span><br>
<span class="quotelev1">&gt;             for less synchronized processes I saw the usleep adding overhead where I didn't want it too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --td
</span><br>
<span class="quotelev1">&gt;                   Don't worry, I was quite expecting the configure-in requirement. However, I don't
</span><br>
<span class="quotelev1">&gt;                   think my patch is good for inclusion, it is only an example to describe what I
</span><br>
<span class="quotelev1">&gt;                   want to achieve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Thanks a lot for your comments,
</span><br>
<span class="quotelev1">&gt;                   Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   On Mon, 8 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         I'm not entirely convinced this actually achieves your goals, but I
</span><br>
<span class="quotelev1">&gt;                         can see some potential benefits. I'm also not sure that power
</span><br>
<span class="quotelev1">&gt;                         consumption is that big of an issue that MPI needs to begin chasing
</span><br>
<span class="quotelev1">&gt;                         &quot;power saver&quot; modes of operation, but that can be a separate debate
</span><br>
<span class="quotelev1">&gt;                         some day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         I'm assuming you don't mean that you actually call &quot;sleep()&quot; as this
</span><br>
<span class="quotelev1">&gt;                         would be very bad - I'm assuming you just change the opal_progress
</span><br>
<span class="quotelev1">&gt;                         &quot;tick&quot; rate instead. True? If not, and you really call &quot;sleep&quot;, then
</span><br>
<span class="quotelev1">&gt;                         I would have to oppose adding this to the code base pending
</span><br>
<span class="quotelev1">&gt;                         discussion with others who can corroborate that this won't cause
</span><br>
<span class="quotelev1">&gt;                         problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Either way, I could live with this so long as it was done as a
</span><br>
<span class="quotelev1">&gt;                         &quot;configure-in&quot; capability. Just having the params default to a value
</span><br>
<span class="quotelev1">&gt;                         that causes the system to behave similarly to today isn't enough - we
</span><br>
<span class="quotelev1">&gt;                         still wind up adding logic into a very critical timing loop for no
</span><br>
<span class="quotelev1">&gt;                         reason. A simple configure option of --enable-mpi-progress-monitoring
</span><br>
<span class="quotelev1">&gt;                         would be sufficient to protect the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         HTH
</span><br>
<span class="quotelev1">&gt;                         Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         On Jun 8, 2009, at 9:50 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               What : when nothing has been received for a very long
</span><br>
<span class="quotelev1">&gt;                               time - e.g. 5 minutes, stop busy polling in opal_progress
</span><br>
<span class="quotelev1">&gt;                               and switch to a usleep-based one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Why : when we have long waits, and especially when an
</span><br>
<span class="quotelev1">&gt;                               application is deadlock'ed, detecting it is not easy and
</span><br>
<span class="quotelev1">&gt;                               a lot of power is wasted until the end of the time slice
</span><br>
<span class="quotelev1">&gt;                               (if there is one).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Where : an example of how it could be implemented is
</span><br>
<span class="quotelev1">&gt;                               available at
</span><br>
<span class="quotelev1">&gt;                               <a href="http://bitbucket.org/jeaugeys/low-pressure-opal-progress/">http://bitbucket.org/jeaugeys/low-pressure-opal-progress/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Principle
</span><br>
<span class="quotelev1">&gt;                               =========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               opal_progress() ensures the progression of MPI
</span><br>
<span class="quotelev1">&gt;                               communication. The current algorithm is a loop calling
</span><br>
<span class="quotelev1">&gt;                               progress on all registered components. If the program is
</span><br>
<span class="quotelev1">&gt;                               blocked, the loop will busy-poll indefinetely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Going to sleep after a certain amount of time with
</span><br>
<span class="quotelev1">&gt;                               nothing received is interesting for two things :
</span><br>
<span class="quotelev1">&gt;                               - Administrator can easily detect whether a job is
</span><br>
<span class="quotelev1">&gt;                               deadlocked : all the processes are in sleep(). Currently,
</span><br>
<span class="quotelev1">&gt;                               all processors are using 100% cpu and it is very hard to
</span><br>
<span class="quotelev1">&gt;                               know if progression is still happening or not.
</span><br>
<span class="quotelev1">&gt;                               - When there is nothing to receive, power usage is highly
</span><br>
<span class="quotelev1">&gt;                               reduced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               However, it could hurt performance in some cases,
</span><br>
<span class="quotelev1">&gt;                               typically if we go to sleep just before the message
</span><br>
<span class="quotelev1">&gt;                               arrives. This will highly depend on the parameters you
</span><br>
<span class="quotelev1">&gt;                               give to the sleep mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               At first, we can start with the following assumption : if
</span><br>
<span class="quotelev1">&gt;                               the sleep takes T usec, then sleeping after 10000xT
</span><br>
<span class="quotelev1">&gt;                               should slow down Receives by a factor less than 0.01 %.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               However, other processes may suffer from you being late,
</span><br>
<span class="quotelev1">&gt;                               and be delayed by T usec (which may represent more than
</span><br>
<span class="quotelev1">&gt;                               0.01% for them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               So, the goal of this mechanism is mainly to detect
</span><br>
<span class="quotelev1">&gt;                               far-too-long-waits and should quite never be used in
</span><br>
<span class="quotelev1">&gt;                               normal MPI jobs. It could also trigger a warning message
</span><br>
<span class="quotelev1">&gt;                               when starting to sleep, or at least a trace in the
</span><br>
<span class="quotelev1">&gt;                               notifier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Details of Implementation
</span><br>
<span class="quotelev1">&gt;                               =========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Three parameters fully control the behaviour of this
</span><br>
<span class="quotelev1">&gt;                               mechanism :
</span><br>
<span class="quotelev1">&gt;                               * opal_progress_sleep_count : number of unsuccessful
</span><br>
<span class="quotelev1">&gt;                               opal_progress() calls before we start the timer (to
</span><br>
<span class="quotelev1">&gt;                               prevent latency impact). It defaults to -1, which
</span><br>
<span class="quotelev1">&gt;                               completely deactivates the sleep (and is therefore
</span><br>
<span class="quotelev1">&gt;                               equivalent to the former code). A value of 1000 can be
</span><br>
<span class="quotelev1">&gt;                               thought of as a starting point to enable this mechanism.
</span><br>
<span class="quotelev1">&gt;                               * opal_progress_sleep_trigger : time to wait before going
</span><br>
<span class="quotelev1">&gt;                               to low-pressure-powersave mode. Default : 600 (in
</span><br>
<span class="quotelev1">&gt;                               seconds) = 10 minutes.
</span><br>
<span class="quotelev1">&gt;                               * opal_progress_sleep_duration : time we sleep at each
</span><br>
<span class="quotelev1">&gt;                               further unsuccessful call to opal_progress(). Default :
</span><br>
<span class="quotelev1">&gt;                               1000 (in us) = 1 ms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               The duration is big enough to make the process show 0%
</span><br>
<span class="quotelev1">&gt;                               CPU in top, but low enough to preserve a good
</span><br>
<span class="quotelev1">&gt;                               trigger/duration ratio.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               The trigger is voluntary high to keep a good
</span><br>
<span class="quotelev1">&gt;                               trigger/duration ratio. Indeed, to prevent delays from
</span><br>
<span class="quotelev1">&gt;                               causing chain reactions, trigger should be higher than
</span><br>
<span class="quotelev1">&gt;                               duration * numprocs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               Possible Improvements &amp; Pitfalls
</span><br>
<span class="quotelev1">&gt;                               ================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               * Trigger could be set automatically at max(trigger,
</span><br>
<span class="quotelev1">&gt;                               duration * numprocs * 2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               * poll_start and poll_count could be fields of the
</span><br>
<span class="quotelev1">&gt;                               opal_condition_t struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               * The sleep section may be exported in a #define and
</span><br>
<span class="quotelev1">&gt;                               reported in all the progress pathes (I'm not sure my
</span><br>
<span class="quotelev1">&gt;                               patch is good for progress threads for example)
</span><br>
<span class="quotelev1">&gt;                               _______________________________________________
</span><br>
<span class="quotelev1">&gt;                               devel mailing list
</span><br>
<span class="quotelev1">&gt;                               devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                               <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;                         devel mailing list
</span><br>
<span class="quotelev1">&gt;                         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   _______________________________________________
</span><br>
<span class="quotelev1">&gt;                   devel mailing list
</span><br>
<span class="quotelev1">&gt;                   devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       devel mailing list
</span><br>
<span class="quotelev1">&gt;       devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6203.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6203.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
