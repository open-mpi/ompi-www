<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 07:54:42 2009" -->
<!-- isoreceived="20090609115442" -->
<!-- sent="Tue, 9 Jun 2009 05:54:27 -0600" -->
<!-- isosent="20090609115427" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="0342D95E-BA46-4492-BB6F-D46AE61E6262_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A2E4762.4090304_at_sun.com" -->
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
<strong>Date:</strong> 2009-06-09 07:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6197.php">Ralph Castain: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>In reply to:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My concern with any form of sleep is with the impact on the proc -  
<br>
since opal_progress might not be running in a separate thread, won't  
<br>
the sleep apply to the process as a whole? In that case, the process  
<br>
isn't free to continue computing.
<br>
<p>I can envision applications that might call down into the MPI library  
<br>
and have opal_progress not find anything, but there is nothing wrong.  
<br>
The application could continue computations just fine. I would hate to  
<br>
see us put the process to sleep just because the MPI library wasn't  
<br>
busy enough.
<br>
<p>Hence my suggestion to just change the tick rate. It would definitely  
<br>
cause a higher latency for the first message that arrived while in  
<br>
this state, which is bothersome, but would meet the stated objective  
<br>
without interfering with the process itself.
<br>
<p>LANL has also been looking at this problem of stalled jobs, but from a  
<br>
different approach. We monitor (using a separate job) progress in  
<br>
terms of output files changing in size plus other factors as specified  
<br>
by the user. If we don't see any progress in those terms over some  
<br>
time, then we kill the job. We chose that path because of the concerns  
<br>
expressed above - e.g., on our RR machine, intense computations can be  
<br>
underway on the Cell blades while the Opteron MPI processes wait for  
<br>
us to reach a communication point. We -want- those processes spinning  
<br>
away so that, when the comm starts, it can proceed as quickly as  
<br>
possible.
<br>
<p>Just some thoughts...
<br>
Ralph
<br>
<p><p>On Jun 9, 2009, at 5:28 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm entirely convinced that MPI doesn't have to save power in a  
</span><br>
<span class="quotelev2">&gt;&gt; normal scenario. The idea is just that if an MPI process is blocked  
</span><br>
<span class="quotelev2">&gt;&gt; (i.e. has not performed progress for -say- 5 minutes (default in my  
</span><br>
<span class="quotelev2">&gt;&gt; implementation), we stop busy polling and have the process drop  
</span><br>
<span class="quotelev2">&gt;&gt; from 100% CPU usage to 0%.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not call sleep() but usleep(). The result if quite the same,  
</span><br>
<span class="quotelev2">&gt;&gt; but is less hurting performance in case of (unexpected) restart.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the goal of my RFC was also to know if there was a more  
</span><br>
<span class="quotelev2">&gt;&gt; clean way to achieve my goal, and from what I read, I guess I  
</span><br>
<span class="quotelev2">&gt;&gt; should look at the &quot;tick&quot; rate instead of trying to do my own  
</span><br>
<span class="quotelev2">&gt;&gt; delaying.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; One way around this is to make all blocked communications (even SM)  
</span><br>
<span class="quotelev1">&gt; to use poll to block for incoming messages.  Jeff and I have  
</span><br>
<span class="quotelev1">&gt; discussed this and had many false starts on it.  The biggest issue  
</span><br>
<span class="quotelev1">&gt; is coming up with a way to have blocks on the SM btl converted to  
</span><br>
<span class="quotelev1">&gt; the system poll call without requiring a socket write for every  
</span><br>
<span class="quotelev1">&gt; packet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usleep solution works but is kind of ugly IMO.  I think when I  
</span><br>
<span class="quotelev1">&gt; looked at doing that the overhead increased signifcantly for certain  
</span><br>
<span class="quotelev1">&gt; communications.  Maybe not for toy benchmarks but for less  
</span><br>
<span class="quotelev1">&gt; synchronized processes I saw the usleep adding overhead where I  
</span><br>
<span class="quotelev1">&gt; didn't want it too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Don't worry, I was quite expecting the configure-in requirement.  
</span><br>
<span class="quotelev2">&gt;&gt; However, I don't think my patch is good for inclusion, it is only  
</span><br>
<span class="quotelev2">&gt;&gt; an example to describe what I want to achieve.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for your comments,
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 8 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not entirely convinced this actually achieves your goals, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can see some potential benefits. I'm also not sure that power  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consumption is that big of an issue that MPI needs to begin  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chasing &quot;power saver&quot; modes of operation, but that can be a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separate debate some day.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm assuming you don't mean that you actually call &quot;sleep()&quot; as  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this would be very bad - I'm assuming you just change the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_progress &quot;tick&quot; rate instead. True? If not, and you really  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call &quot;sleep&quot;, then I would have to oppose adding this to the code  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base pending discussion with others who can corroborate that this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; won't cause problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either way, I could live with this so long as it was done as a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;configure-in&quot; capability. Just having the params default to a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value that causes the system to behave similarly to today isn't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enough - we still wind up adding logic into a very critical timing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loop for no reason. A simple configure option of --enable-mpi- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress-monitoring would be sufficient to protect the code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 8, 2009, at 9:50 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What : when nothing has been received for a very long time - e.g.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5 minutes, stop busy polling in opal_progress and switch to a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usleep-based one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why : when we have long waits, and especially when an application  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is deadlock'ed, detecting it is not easy and a lot of power is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wasted until the end of the time slice (if there is one).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Where : an example of how it could be implemented is available at <a href="http://bitbucket.org/jeaugeys/low-pressure-opal-progress/">http://bitbucket.org/jeaugeys/low-pressure-opal-progress/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Principle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress() ensures the progression of MPI communication. The  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; current algorithm is a loop calling progress on all registered  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; components. If the program is blocked, the loop will busy-poll  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; indefinetely.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Going to sleep after a certain amount of time with nothing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; received is interesting for two things :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Administrator can easily detect whether a job is deadlocked :  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the processes are in sleep(). Currently, all processors are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using 100% cpu and it is very hard to know if progression is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still happening or not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - When there is nothing to receive, power usage is highly reduced.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, it could hurt performance in some cases, typically if we  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; go to sleep just before the message arrives. This will highly  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depend on the parameters you give to the sleep mechanism.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At first, we can start with the following assumption : if the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sleep takes T usec, then sleeping after 10000xT should slow down  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Receives by a factor less than 0.01 %.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, other processes may suffer from you being late, and be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; delayed by T usec (which may represent more than 0.01% for them).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, the goal of this mechanism is mainly to detect far-too-long- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; waits and should quite never be used in normal MPI jobs. It could  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also trigger a warning message when starting to sleep, or at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; least a trace in the notifier.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Details of Implementation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Three parameters fully control the behaviour of this mechanism :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * opal_progress_sleep_count : number of unsuccessful  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress() calls before we start the timer (to prevent  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; latency impact). It defaults to -1, which completely deactivates  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the sleep (and is therefore equivalent to the former code). A  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value of 1000 can be thought of as a starting point to enable  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this mechanism.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * opal_progress_sleep_trigger : time to wait before going to low- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pressure-powersave mode. Default : 600 (in seconds) = 10 minutes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * opal_progress_sleep_duration : time we sleep at each further  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unsuccessful call to opal_progress(). Default : 1000 (in us) = 1  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ms.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The duration is big enough to make the process show 0% CPU in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; top, but low enough to preserve a good trigger/duration ratio.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The trigger is voluntary high to keep a good trigger/duration  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ratio. Indeed, to prevent delays from causing chain reactions,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trigger should be higher than duration * numprocs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Possible Improvements &amp; Pitfalls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Trigger could be set automatically at max(trigger, duration *  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; numprocs * 2).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * poll_start and poll_count could be fields of the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_condition_t struct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * The sleep section may be exported in a #define and reported in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the progress pathes (I'm not sure my patch is good for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; progress threads for example)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6197.php">Ralph Castain: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>In reply to:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
