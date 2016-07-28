<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 07:29:26 2009" -->
<!-- isoreceived="20090609112926" -->
<!-- sent="Tue, 09 Jun 2009 07:28:34 -0400" -->
<!-- isosent="20090609112834" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="4A2E4762.4090304_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0906090941430.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 07:28:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6196.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>Previous message:</strong> <a href="6194.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6198.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6198.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6253.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm entirely convinced that MPI doesn't have to save power in a normal 
</span><br>
<span class="quotelev1">&gt; scenario. The idea is just that if an MPI process is blocked (i.e. has 
</span><br>
<span class="quotelev1">&gt; not performed progress for -say- 5 minutes (default in my 
</span><br>
<span class="quotelev1">&gt; implementation), we stop busy polling and have the process drop from 
</span><br>
<span class="quotelev1">&gt; 100% CPU usage to 0%.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not call sleep() but usleep(). The result if quite the same, but 
</span><br>
<span class="quotelev1">&gt; is less hurting performance in case of (unexpected) restart.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the goal of my RFC was also to know if there was a more clean 
</span><br>
<span class="quotelev1">&gt; way to achieve my goal, and from what I read, I guess I should look at 
</span><br>
<span class="quotelev1">&gt; the &quot;tick&quot; rate instead of trying to do my own delaying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
One way around this is to make all blocked communications (even SM) to 
<br>
use poll to block for incoming messages.  Jeff and I have discussed this 
<br>
and had many false starts on it.  The biggest issue is coming up with a 
<br>
way to have blocks on the SM btl converted to the system poll call 
<br>
without requiring a socket write for every packet.
<br>
<p>The usleep solution works but is kind of ugly IMO.  I think when I 
<br>
looked at doing that the overhead increased signifcantly for certain 
<br>
communications.  Maybe not for toy benchmarks but for less synchronized 
<br>
processes I saw the usleep adding overhead where I didn't want it too.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Don't worry, I was quite expecting the configure-in requirement. 
</span><br>
<span class="quotelev1">&gt; However, I don't think my patch is good for inclusion, it is only an 
</span><br>
<span class="quotelev1">&gt; example to describe what I want to achieve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your comments,
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 8 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely convinced this actually achieves your goals, but I 
</span><br>
<span class="quotelev2">&gt;&gt; can see some potential benefits. I'm also not sure that power 
</span><br>
<span class="quotelev2">&gt;&gt; consumption is that big of an issue that MPI needs to begin chasing 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;power saver&quot; modes of operation, but that can be a separate debate 
</span><br>
<span class="quotelev2">&gt;&gt; some day.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm assuming you don't mean that you actually call &quot;sleep()&quot; as this 
</span><br>
<span class="quotelev2">&gt;&gt; would be very bad - I'm assuming you just change the opal_progress 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;tick&quot; rate instead. True? If not, and you really call &quot;sleep&quot;, then 
</span><br>
<span class="quotelev2">&gt;&gt; I would have to oppose adding this to the code base pending 
</span><br>
<span class="quotelev2">&gt;&gt; discussion with others who can corroborate that this won't cause 
</span><br>
<span class="quotelev2">&gt;&gt; problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either way, I could live with this so long as it was done as a 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;configure-in&quot; capability. Just having the params default to a value 
</span><br>
<span class="quotelev2">&gt;&gt; that causes the system to behave similarly to today isn't enough - we 
</span><br>
<span class="quotelev2">&gt;&gt; still wind up adding logic into a very critical timing loop for no 
</span><br>
<span class="quotelev2">&gt;&gt; reason. A simple configure option of --enable-mpi-progress-monitoring 
</span><br>
<span class="quotelev2">&gt;&gt; would be sufficient to protect the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 8, 2009, at 9:50 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What : when nothing has been received for a very long time - e.g. 5 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; minutes, stop busy polling in opal_progress and switch to a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usleep-based one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why : when we have long waits, and especially when an application is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deadlock'ed, detecting it is not easy and a lot of power is wasted 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; until the end of the time slice (if there is one).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where : an example of how it could be implemented is available at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://bitbucket.org/jeaugeys/low-pressure-opal-progress/">http://bitbucket.org/jeaugeys/low-pressure-opal-progress/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Principle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_progress() ensures the progression of MPI communication. The 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current algorithm is a loop calling progress on all registered 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components. If the program is blocked, the loop will busy-poll 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indefinetely.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Going to sleep after a certain amount of time with nothing received 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is interesting for two things :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Administrator can easily detect whether a job is deadlocked : all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the processes are in sleep(). Currently, all processors are using 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 100% cpu and it is very hard to know if progression is still 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happening or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - When there is nothing to receive, power usage is highly reduced.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it could hurt performance in some cases, typically if we go 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to sleep just before the message arrives. This will highly depend on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the parameters you give to the sleep mechanism.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At first, we can start with the following assumption : if the sleep 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; takes T usec, then sleeping after 10000xT should slow down Receives 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by a factor less than 0.01 %.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, other processes may suffer from you being late, and be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; delayed by T usec (which may represent more than 0.01% for them).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the goal of this mechanism is mainly to detect 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; far-too-long-waits and should quite never be used in normal MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs. It could also trigger a warning message when starting to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sleep, or at least a trace in the notifier.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Details of Implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Three parameters fully control the behaviour of this mechanism :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * opal_progress_sleep_count : number of unsuccessful opal_progress() 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls before we start the timer (to prevent latency impact). It 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defaults to -1, which completely deactivates the sleep (and is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; therefore equivalent to the former code). A value of 1000 can be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought of as a starting point to enable this mechanism.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * opal_progress_sleep_trigger : time to wait before going to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; low-pressure-powersave mode. Default : 600 (in seconds) = 10 minutes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * opal_progress_sleep_duration : time we sleep at each further 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unsuccessful call to opal_progress(). Default : 1000 (in us) = 1 ms.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The duration is big enough to make the process show 0% CPU in top, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but low enough to preserve a good trigger/duration ratio.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The trigger is voluntary high to keep a good trigger/duration ratio. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed, to prevent delays from causing chain reactions, trigger 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be higher than duration * numprocs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Possible Improvements &amp; Pitfalls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Trigger could be set automatically at max(trigger, duration * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; numprocs * 2).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * poll_start and poll_count could be fields of the opal_condition_t 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; struct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * The sleep section may be exported in a #define and reported in all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the progress pathes (I'm not sure my patch is good for progress 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads for example)
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
<li><strong>Next message:</strong> <a href="6196.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>Previous message:</strong> <a href="6194.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6198.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6198.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6253.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
