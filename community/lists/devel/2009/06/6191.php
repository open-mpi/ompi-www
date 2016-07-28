<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 20:09:17 2009" -->
<!-- isoreceived="20090609000917" -->
<!-- sent="Mon, 8 Jun 2009 18:09:04 -0600" -->
<!-- isosent="20090609000904" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="408C8223-E245-4135-BF60-46786D05EBC9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0905120949520.4423_at_jeaugeys.frec.bull.fr" -->
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
<strong>Date:</strong> 2009-06-08 20:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6189.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not entirely convinced this actually achieves your goals, but I  
<br>
can see some potential benefits. I'm also not sure that power  
<br>
consumption is that big of an issue that MPI needs to begin chasing  
<br>
&quot;power saver&quot; modes of operation, but that can be a separate debate  
<br>
some day.
<br>
<p>I'm assuming you don't mean that you actually call &quot;sleep()&quot; as this  
<br>
would be very bad - I'm assuming you just change the opal_progress  
<br>
&quot;tick&quot; rate instead. True? If not, and you really call &quot;sleep&quot;, then I  
<br>
would have to oppose adding this to the code base pending discussion  
<br>
with others who can corroborate that this won't cause problems.
<br>
<p>Either way, I could live with this so long as it was done as a  
<br>
&quot;configure-in&quot; capability. Just having the params default to a value  
<br>
that causes the system to behave similarly to today isn't enough - we  
<br>
still wind up adding logic into a very critical timing loop for no  
<br>
reason. A simple configure option of --enable-mpi-progress-monitoring  
<br>
would be sufficient to protect the code.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Jun 8, 2009, at 9:50 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; What : when nothing has been received for a very long time - e.g. 5  
</span><br>
<span class="quotelev1">&gt; minutes, stop busy polling in opal_progress and switch to a usleep- 
</span><br>
<span class="quotelev1">&gt; based one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why : when we have long waits, and especially when an application is  
</span><br>
<span class="quotelev1">&gt; deadlock'ed, detecting it is not easy and a lot of power is wasted  
</span><br>
<span class="quotelev1">&gt; until the end of the time slice (if there is one).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where : an example of how it could be implemented is available at <a href="http://bitbucket.org/jeaugeys/low-pressure-opal-progress/">http://bitbucket.org/jeaugeys/low-pressure-opal-progress/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Principle
</span><br>
<span class="quotelev1">&gt; =========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_progress() ensures the progression of MPI communication. The  
</span><br>
<span class="quotelev1">&gt; current algorithm is a loop calling progress on all registered  
</span><br>
<span class="quotelev1">&gt; components. If the program is blocked, the loop will busy-poll  
</span><br>
<span class="quotelev1">&gt; indefinetely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Going to sleep after a certain amount of time with nothing received  
</span><br>
<span class="quotelev1">&gt; is interesting for two things :
</span><br>
<span class="quotelev1">&gt; - Administrator can easily detect whether a job is deadlocked : all  
</span><br>
<span class="quotelev1">&gt; the processes are in sleep(). Currently, all processors are using  
</span><br>
<span class="quotelev1">&gt; 100% cpu and it is very hard to know if progression is still  
</span><br>
<span class="quotelev1">&gt; happening or not.
</span><br>
<span class="quotelev1">&gt; - When there is nothing to receive, power usage is highly reduced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it could hurt performance in some cases, typically if we go  
</span><br>
<span class="quotelev1">&gt; to sleep just before the message arrives. This will highly depend on  
</span><br>
<span class="quotelev1">&gt; the parameters you give to the sleep mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At first, we can start with the following assumption : if the sleep  
</span><br>
<span class="quotelev1">&gt; takes T usec, then sleeping after 10000xT should slow down Receives  
</span><br>
<span class="quotelev1">&gt; by a factor less than 0.01 %.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, other processes may suffer from you being late, and be  
</span><br>
<span class="quotelev1">&gt; delayed by T usec (which may represent more than 0.01% for them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the goal of this mechanism is mainly to detect far-too-long- 
</span><br>
<span class="quotelev1">&gt; waits and should quite never be used in normal MPI jobs. It could  
</span><br>
<span class="quotelev1">&gt; also trigger a warning message when starting to sleep, or at least a  
</span><br>
<span class="quotelev1">&gt; trace in the notifier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Details of Implementation
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Three parameters fully control the behaviour of this mechanism :
</span><br>
<span class="quotelev1">&gt; * opal_progress_sleep_count : number of unsuccessful opal_progress()  
</span><br>
<span class="quotelev1">&gt; calls before we start the timer (to prevent latency impact). It  
</span><br>
<span class="quotelev1">&gt; defaults to -1, which completely deactivates the sleep (and is  
</span><br>
<span class="quotelev1">&gt; therefore equivalent to the former code). A value of 1000 can be  
</span><br>
<span class="quotelev1">&gt; thought of as a starting point to enable this mechanism.
</span><br>
<span class="quotelev1">&gt; * opal_progress_sleep_trigger : time to wait before going to low- 
</span><br>
<span class="quotelev1">&gt; pressure-powersave mode. Default : 600 (in seconds) = 10 minutes.
</span><br>
<span class="quotelev1">&gt; * opal_progress_sleep_duration : time we sleep at each further  
</span><br>
<span class="quotelev1">&gt; unsuccessful call to opal_progress(). Default : 1000 (in us) = 1 ms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The duration is big enough to make the process show 0% CPU in top,  
</span><br>
<span class="quotelev1">&gt; but low enough to preserve a good trigger/duration ratio.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The trigger is voluntary high to keep a good trigger/duration ratio.  
</span><br>
<span class="quotelev1">&gt; Indeed, to prevent delays from causing chain reactions, trigger  
</span><br>
<span class="quotelev1">&gt; should be higher than duration * numprocs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Possible Improvements &amp; Pitfalls
</span><br>
<span class="quotelev1">&gt; ================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Trigger could be set automatically at max(trigger, duration *  
</span><br>
<span class="quotelev1">&gt; numprocs * 2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * poll_start and poll_count could be fields of the opal_condition_t  
</span><br>
<span class="quotelev1">&gt; struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * The sleep section may be exported in a #define and reported in all  
</span><br>
<span class="quotelev1">&gt; the progress pathes (I'm not sure my patch is good for progress  
</span><br>
<span class="quotelev1">&gt; threads for example)
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
<li><strong>Next message:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6189.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
