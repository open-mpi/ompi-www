<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 11:47:39 2009" -->
<!-- isoreceived="20090609154739" -->
<!-- sent="Tue, 9 Jun 2009 08:31:39 -0700" -->
<!-- isosent="20090609153139" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="D8A10FC5-05AF-4265-94A5-A81916F08CC1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 11:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6206.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6204.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6203.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6206.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6206.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6208.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll throw in my random $0.02.  I'm at the Forum this week, so my  
<br>
latency on replies here will likely be large.
<br>
<p>1. Ashley is correct that we shouldn't sleep.  A better solution would  
<br>
be to block waiting for something to happen (rather than spin).  As  
<br>
Terry mentioned, we pretty much know how to do this -- it's just that  
<br>
no one has done it yet.  The full solution would then be: if we spin  
<br>
for a while (probably MCA-param settable) with nothing happening,  
<br>
switch to the blocking mode and continue waiting.  I'm happy to pass  
<br>
on the information on how we've imagined that this should be done, if  
<br>
you want.
<br>
<p>2. Note that your solution presupposes that one MPI process can detect  
<br>
that the entire job is deadlocked.  This is not quite correct.  What  
<br>
exactly do you want to detect -- that one process may be imbalanced on  
<br>
its receives (waiting for long periods of time without doing  
<br>
anything), or that the entire job is deadlocked?  The former may be ok  
<br>
-- it depends on the app.  If the latter, it requires a bit more work  
<br>
-- e.g., if one process detects that nothing has happened for a long  
<br>
time, it can initiate a collective/distributed deadlock detection  
<br>
algorithm with all the other MPI processes in the job.  Only if *all*  
<br>
processes agree, then you can say &quot;this job is deadlocked, we might as  
<br>
well abort.&quot;  IIRC, there are some 3rd party tools / libraries that do  
<br>
this kind of stuff...?  (although it might be cool / useful to  
<br>
incorporate some of this technology into OMPI itself)
<br>
<p>3. As Ralph noted, how exactly do you know when &quot;nothing happens for a  
<br>
long time&quot; is a bad thing?  a) some codes are structured that way --  
<br>
that they'll have no MPI activity for a long time, even if they have  
<br>
pending non-blocking receives pre-posted.  b) are you looking within  
<br>
the scope of *one* MPI blocking call?  I.e., if nothing happens  
<br>
*within the span of one blocking MPI call*, or are you looking if  
<br>
nothing happens across successive calls to opal_progress() (which may  
<br>
be few and far between after OMPI hits steady state when using non-TCP  
<br>
networks)?  It seems like there would need to be a [thread safe]  
<br>
&quot;reset&quot; at some point -- indicating that something has happened.  That  
<br>
either would be when something has happened, or that a blocking MPI  
<br>
call has exited, or ....?  Need to make sure that that &quot;reset&quot; doesn't  
<br>
get expensive.
<br>
<p>4. Note, too, that opal_progress() doesn't see *all* progress - the  
<br>
openib BTL doesn't use opal_progress to know when OpenFabrics messages  
<br>
arrive, for example.
<br>
<p><p>On Jun 9, 2009, at 6:43 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Couple of other things to help stimulate the thinking:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. it isn't that OMPI -couldn't- receive a message, but rather that  
</span><br>
<span class="quotelev1">&gt; it -didn't- receive a message. This may or may not indicate that  
</span><br>
<span class="quotelev1">&gt; there is a problem. Could just be an application that doesn't need  
</span><br>
<span class="quotelev1">&gt; to communicate for awhile, as per my example. I admit, though, that  
</span><br>
<span class="quotelev1">&gt; 10 minutes is a tad long...but I've seen some bizarre apps around  
</span><br>
<span class="quotelev1">&gt; here :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. instead of putting things to sleep or even adjusting the loop  
</span><br>
<span class="quotelev1">&gt; rate, you might want to consider using the orte_notifier capability  
</span><br>
<span class="quotelev1">&gt; and notify the system that the job may be stalled. Or perhaps adding  
</span><br>
<span class="quotelev1">&gt; an API to the orte_errmgr framework to notify it that nothing has  
</span><br>
<span class="quotelev1">&gt; been received for awhile, and let people implement different  
</span><br>
<span class="quotelev1">&gt; strategies for detecting what might be &quot;wrong&quot; and what they want to  
</span><br>
<span class="quotelev1">&gt; do about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point with this second bullet is that there are other response  
</span><br>
<span class="quotelev1">&gt; options than hardwiring putting the process to sleep. You could let  
</span><br>
<span class="quotelev1">&gt; someone know so a human can decide what, if anything, to do about  
</span><br>
<span class="quotelev1">&gt; it, or provide a hook so that people can explore/utilize different  
</span><br>
<span class="quotelev1">&gt; response strategies...or both!
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
<span class="quotelev1">&gt; On Tue, Jun 9, 2009 at 6:52 AM, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; I understand your point of view, and mostly share it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the biggest point in my example is that sleep occurs only  
</span><br>
<span class="quotelev1">&gt; after (I was wrong in my previous e-mail) 10 minutes of inactivity,  
</span><br>
<span class="quotelev1">&gt; and this value is fully configurable. I didn't intend to call sleep  
</span><br>
<span class="quotelev1">&gt; after 2 seconds. Plus, as said before, I planned to have the library  
</span><br>
<span class="quotelev1">&gt; do show_help() when this happens (something like : &quot;Open MPI  
</span><br>
<span class="quotelev1">&gt; couldn't receive a message for 10 minutes, lowering pressure&quot;) so  
</span><br>
<span class="quotelev1">&gt; that the application that really needs more than 10 minutes to  
</span><br>
<span class="quotelev1">&gt; receive a message can increase it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the tick rate code, I couldn't see how changing it would  
</span><br>
<span class="quotelev1">&gt; make CPU usage drop. If I understand correctly your e-mail, you  
</span><br>
<span class="quotelev1">&gt; block in the kernel using poll(), is that right ? So, you may well  
</span><br>
<span class="quotelev1">&gt; loose 10 us because of that kernel call, but this is a lot less than  
</span><br>
<span class="quotelev1">&gt; the 1 ms I'm currently loosing with usleep. This makes sense -  
</span><br>
<span class="quotelev1">&gt; although being hard to implement since all btl must have this ability.
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
<span class="quotelev1">&gt; My concern with any form of sleep is with the impact on the proc -  
</span><br>
<span class="quotelev1">&gt; since opal_progress might not be running in a separate thread, won't  
</span><br>
<span class="quotelev1">&gt; the sleep apply to the process as a whole? In that case, the process  
</span><br>
<span class="quotelev1">&gt; isn't free to continue computing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can envision applications that might call down into the MPI  
</span><br>
<span class="quotelev1">&gt; library and have opal_progress not find anything, but there is  
</span><br>
<span class="quotelev1">&gt; nothing wrong. The application could continue computations just  
</span><br>
<span class="quotelev1">&gt; fine. I would hate to see us put the process to sleep just because  
</span><br>
<span class="quotelev1">&gt; the MPI library wasn't busy enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence my suggestion to just change the tick rate. It would  
</span><br>
<span class="quotelev1">&gt; definitely cause a higher latency for the first message that arrived  
</span><br>
<span class="quotelev1">&gt; while in this state, which is bothersome, but would meet the stated  
</span><br>
<span class="quotelev1">&gt; objective without interfering with the process itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LANL has also been looking at this problem of stalled jobs, but from  
</span><br>
<span class="quotelev1">&gt; a different approach. We monitor (using a separate job) progress in  
</span><br>
<span class="quotelev1">&gt; terms of output files changing in size plus other factors as  
</span><br>
<span class="quotelev1">&gt; specified by the user. If we don't see any progress in those terms  
</span><br>
<span class="quotelev1">&gt; over some time, then we kill the job. We chose that path because of  
</span><br>
<span class="quotelev1">&gt; the concerns expressed above - e.g., on our RR machine, intense  
</span><br>
<span class="quotelev1">&gt; computations can be underway on the Cell blades while the Opteron  
</span><br>
<span class="quotelev1">&gt; MPI processes wait for us to reach a communication point. We -want-  
</span><br>
<span class="quotelev1">&gt; those processes spinning away so that, when the comm starts, it can  
</span><br>
<span class="quotelev1">&gt; proceed as quickly as possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just some thoughts...
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2009, at 5:28 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm entirely convinced that MPI doesn't have to save power in a  
</span><br>
<span class="quotelev1">&gt; normal scenario. The idea is just that if an MPI process is blocked  
</span><br>
<span class="quotelev1">&gt; (i.e. has not performed progress for -say- 5 minutes (default in my  
</span><br>
<span class="quotelev1">&gt; implementation), we stop busy polling and have the process drop from  
</span><br>
<span class="quotelev1">&gt; 100% CPU usage to 0%.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not call sleep() but usleep(). The result if quite the same,  
</span><br>
<span class="quotelev1">&gt; but is less hurting performance in case of (unexpected) restart.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the goal of my RFC was also to know if there was a more  
</span><br>
<span class="quotelev1">&gt; clean way to achieve my goal, and from what I read, I guess I should  
</span><br>
<span class="quotelev1">&gt; look at the &quot;tick&quot; rate instead of trying to do my own delaying.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; I'm not entirely convinced this actually achieves your goals, but I  
</span><br>
<span class="quotelev1">&gt; can see some potential benefits. I'm also not sure that power  
</span><br>
<span class="quotelev1">&gt; consumption is that big of an issue that MPI needs to begin chasing  
</span><br>
<span class="quotelev1">&gt; &quot;power saver&quot; modes of operation, but that can be a separate debate  
</span><br>
<span class="quotelev1">&gt; some day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm assuming you don't mean that you actually call &quot;sleep()&quot; as this  
</span><br>
<span class="quotelev1">&gt; would be very bad - I'm assuming you just change the opal_progress  
</span><br>
<span class="quotelev1">&gt; &quot;tick&quot; rate instead. True? If not, and you really call &quot;sleep&quot;, then  
</span><br>
<span class="quotelev1">&gt; I would have to oppose adding this to the code base pending  
</span><br>
<span class="quotelev1">&gt; discussion with others who can corroborate that this won't cause  
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, I could live with this so long as it was done as a  
</span><br>
<span class="quotelev1">&gt; &quot;configure-in&quot; capability. Just having the params default to a value  
</span><br>
<span class="quotelev1">&gt; that causes the system to behave similarly to today isn't enough -  
</span><br>
<span class="quotelev1">&gt; we still wind up adding logic into a very critical timing loop for  
</span><br>
<span class="quotelev1">&gt; no reason. A simple configure option of --enable-mpi-progress- 
</span><br>
<span class="quotelev1">&gt; monitoring would be sufficient to protect the code.
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
<span class="quotelev1">&gt; What : when nothing has been received for a very long time - e.g. 5  
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6206.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6204.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6203.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6206.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6206.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Reply:</strong> <a href="6208.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
