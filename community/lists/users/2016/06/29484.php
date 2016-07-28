<?
$subject_val = "Re: [OMPI users] Restart after code hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 18 14:58:53 2016" -->
<!-- isoreceived="20160618185853" -->
<!-- sent="Sat, 18 Jun 2016 18:59:02 +0000" -->
<!-- isosent="20160618185902" -->
<!-- name="Moody, Adam T." -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Restart after code hangs" -->
<!-- id="146586E3640BBF4D9507B00739F551A6B90DA96D_at_PRDEXMBX-02.the-lab.llnl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="576505B2.1090701_at_uq.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Restart after code hangs<br>
<strong>From:</strong> Moody, Adam T. (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-18 14:59:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29485.php">Ahmed Rizwan: "[OMPI users] memory cg '(null)'"</a>
<li><strong>Previous message:</strong> <a href="29483.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29475.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Alex,
At LLNL, we use io-watchdog for this kind of capability.

<a href="https://github.com/grondo/io-watchdog">https://github.com/grondo/io-watchdog</a>

It's a library that you LD_PRELOAD, and it itercepts write calls on a particular rank.  Whenever rank 0 issues a write() call it updates a timer value also accessed by a thread.  If the thread finds that the last write happened beyond some user defined time limit, it then invokes a series of actions defined by the user.  The common actions we use are 1) collect a stack trace using STAT, 2) email the user, 3) kill the job.  This automates the process of restarting a job once it hangs.

We've integrated io-watchdog into SLURM, which makes it very easy to use.
-Adam

________________________________________
From: users [users-bounces_at_[hidden]] on behalf of Cihan Altinay [c.altinay_at_[hidden]]
Sent: Saturday, June 18, 2016 1:26 AM
To: users_at_[hidden]
Subject: Re: [OMPI users] Restart after code hangs

How about sending a 'ping' to a socket periodically which is monitored
by an auxiliary program that runs where the master process runs?

Also, I know you don't want to delve into the third-party libs but have
you actually tried to get to the bottom of the hang, e.g. run an strace,
attach a debugger or if you have the intel tools available you could run
the MPI profiling tool or similar? Maybe it's something more fundamental?!

Good luck,
Cihan

On 18/06/16 01:58, Alex Kaiser wrote:
&gt; An outside monitor should work. My outline of the monitor script (with
&gt; advice from the sys admin) has opportunities for bugs with environment
&gt; variables and such.
&gt;
&gt; I wanted to make sure there was not a simpler solution, or one that is
&gt; less error prone. Modifying the main routine which calls the library or
&gt; external scripts is no problem, I only meant that I did not want to
&gt; debug the library internals, which are huge and complicated!
&gt;
&gt; Appreciate the advice. Thank you,
&gt; Alex
&gt;
&gt; On Friday, June 17, 2016, Ralph Castain &lt;rhc_at_[hidden]
&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;     Sadly, no - there was some possibility of using a file monitor we
&gt;     had for awhile, but that isn&#146;t in the 1.6 series. So I fear your
&gt;     best bet is to periodically output some kind of marker, and have a
&gt;     separate process that monitors to see if it is being updated. Either
&gt;     way would require modifying code and that seems to be outside the
&gt;     desired scope of the solution.
&gt;
&gt;     Afraid I don&#146;t know how to accomplish what you seek without code
&gt;     modification.
&gt;
&gt;&gt;     On Jun 16, 2016, at 10:16 PM, Alex Kaiser &lt;adkaiser_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt;     Dear Dr. Castain,
&gt;&gt;
&gt;&gt;     I'm using 1.6.5, which is pre-built on NYU's cluster. Is there any
&gt;&gt;     other info which would be helpful? Partial output follows.
&gt;&gt;
&gt;&gt;     Thanks,
&gt;&gt;     Alex
&gt;&gt;
&gt;&gt;     -bash-4.1$ ompi_info
&gt;&gt;
&gt;&gt;         Package: Open MPI leak_at_[hidden] Distribution
&gt;&gt;         Open MPI: 1.6.5
&gt;&gt;         ...
&gt;&gt;         C compiler family name: GNU
&gt;&gt;         C compiler version: 4.8.2
&gt;&gt;
&gt;&gt;
&gt;&gt;     On Thu, Jun 16, 2016 at 8:44 PM, Gus Correa
&gt;&gt;     &lt;gus_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt;         Hi Alex
&gt;&gt;
&gt;&gt;         You know all this, but just in case ...
&gt;&gt;
&gt;&gt;         Restartable code goes like this:
&gt;&gt;
&gt;&gt;         *****************************
&gt;&gt;         .start
&gt;&gt;
&gt;&gt;         read the initial/previous configuration from a file
&gt;&gt;         ...
&gt;&gt;         final_step = first_step + nsteps
&gt;&gt;         time_step = first_step
&gt;&gt;         while ( time_step .le. final_step )
&gt;&gt;           ... march in time ...
&gt;&gt;           time_step = time_step +1
&gt;&gt;         end
&gt;&gt;
&gt;&gt;         save the final_step configuration (or phase space) to a file
&gt;&gt;         [depending on the algorithm you may need to save the
&gt;&gt;         previous config also, or perhaps a few more]
&gt;&gt;
&gt;&gt;         .end
&gt;&gt;         ************************************************
&gt;&gt;
&gt;&gt;         Then restart the job time and again, until the desired
&gt;&gt;         number of time steps is completed.
&gt;&gt;
&gt;&gt;         Job queue systems/resource managers allow a job to resubmit
&gt;&gt;         itself,
&gt;&gt;         so unless a job fails it feels like a single time integration.
&gt;&gt;
&gt;&gt;         If a job fails in the middle, you don't lose all work,
&gt;&gt;         just restart from the previous saved configuration.
&gt;&gt;         That is the only situation where you need to &quot;monitor&quot; the code.
&gt;&gt;         Resource managers/ queue systems can also email you in
&gt;&gt;         case the job fails, warning you to do manual intervention.
&gt;&gt;
&gt;&gt;         The time granularity per job (nsteps) is up to you.
&gt;&gt;         Normally it is adjusted to the max walltime of job queues
&gt;&gt;         (in a shared computer/cluster),
&gt;&gt;         but in your case it can be adjusted to how often the program
&gt;&gt;         fails.
&gt;&gt;
&gt;&gt;         All atmosphere/ocean/climate/weather_forecast models work
&gt;&gt;         this way (that's what we mostly run here).
&gt;&gt;         I guess most CFD, computational Chemistry, etc, programs also do.
&gt;&gt;
&gt;&gt;         I hope this helps,
&gt;&gt;         Gus Correa
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;         On 06/16/2016 05:25 PM, Alex Kaiser wrote:
&gt;&gt;
&gt;&gt;             Hello,
&gt;&gt;
&gt;&gt;             I have an MPI code which sometimes hangs, simply stops
&gt;&gt;             running. It is
&gt;&gt;             not clear why and it uses many large third party libraries
&gt;&gt;             so I do not
&gt;&gt;             want to try to fix it. The code is easy to restart, but
&gt;&gt;             then it needs to
&gt;&gt;             be monitored closely by me, and I'd prefer to do it
&gt;&gt;             automatically.
&gt;&gt;
&gt;&gt;             Is there a way, within an MPI process, to detect the hang
&gt;&gt;             and abort if so?
&gt;&gt;
&gt;&gt;             In psuedocode, I would like to do something like
&gt;&gt;
&gt;&gt;                 for (all time steps)
&gt;&gt;                      step
&gt;&gt;                      if (nothing has happened for x minutes)
&gt;&gt;
&gt;&gt;                          call mpi abort to return control to the shell
&gt;&gt;
&gt;&gt;                      endif
&gt;&gt;
&gt;&gt;                 endfor
&gt;&gt;
&gt;&gt;             This structure does not work however, as it can no longer
&gt;&gt;             do anything,
&gt;&gt;             including check itself, when it is stuck.
&gt;&gt;
&gt;&gt;
&gt;&gt;             Thank you,
&gt;&gt;             Alex
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;             _______________________________________________
&gt;&gt;             users mailing list
&gt;&gt;             users_at_[hidden]
&gt;&gt;             Subscription:
&gt;&gt;             <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;             Link to this post:
&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2016/06/29471.php">http://www.open-mpi.org/community/lists/users/2016/06/29471.php</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;         _______________________________________________
&gt;&gt;         users mailing list
&gt;&gt;         users_at_[hidden]
&gt;&gt;         Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;         Link to this post:
&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/06/29473.php">http://www.open-mpi.org/community/lists/users/2016/06/29473.php</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;     _______________________________________________
&gt;&gt;     users mailing list
&gt;&gt;     users_at_[hidden]
&gt;&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;     Link to this post:
&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29474.php">http://www.open-mpi.org/community/lists/users/2016/06/29474.php</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29481.php">http://www.open-mpi.org/community/lists/users/2016/06/29481.php</a>
&gt;

_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29482.php">http://www.open-mpi.org/community/lists/users/2016/06/29482.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29485.php">Ahmed Rizwan: "[OMPI users] memory cg '(null)'"</a>
<li><strong>Previous message:</strong> <a href="29483.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29475.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
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
