<?
$subject_val = "Re: [OMPI users] Restart after code hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 18 04:26:32 2016" -->
<!-- isoreceived="20160618082632" -->
<!-- sent="Sat, 18 Jun 2016 18:26:26 +1000" -->
<!-- isosent="20160618082626" -->
<!-- name="Cihan Altinay" -->
<!-- email="c.altinay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Restart after code hangs" -->
<!-- id="576505B2.1090701_at_uq.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAFvb=+4LdE-72Ch5JKPRJ3VacSOM1rpGvaYg8YaV0EbuQLesgg_at_mail.gmail.com" -->
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
<strong>From:</strong> Cihan Altinay (<em>c.altinay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-18 04:26:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29483.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29484.php">Moody, Adam T.: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29484.php">Moody, Adam T.: "Re: [OMPI users] Restart after code hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about sending a 'ping' to a socket periodically which is monitored 
<br>
by an auxiliary program that runs where the master process runs?
<br>
<p>Also, I know you don't want to delve into the third-party libs but have 
<br>
you actually tried to get to the bottom of the hang, e.g. run an strace, 
<br>
attach a debugger or if you have the intel tools available you could run 
<br>
the MPI profiling tool or similar? Maybe it's something more fundamental?!
<br>
<p>Good luck,
<br>
Cihan
<br>
<p>On 18/06/16 01:58, Alex Kaiser wrote:
<br>
<span class="quotelev1">&gt; An outside monitor should work. My outline of the monitor script (with
</span><br>
<span class="quotelev1">&gt; advice from the sys admin) has opportunities for bugs with environment
</span><br>
<span class="quotelev1">&gt; variables and such.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to make sure there was not a simpler solution, or one that is
</span><br>
<span class="quotelev1">&gt; less error prone. Modifying the main routine which calls the library or
</span><br>
<span class="quotelev1">&gt; external scripts is no problem, I only meant that I did not want to
</span><br>
<span class="quotelev1">&gt; debug the library internals, which are huge and complicated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate the advice. Thank you,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, June 17, 2016, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sadly, no - there was some possibility of using a file monitor we
</span><br>
<span class="quotelev1">&gt;     had for awhile, but that isn&#146;t in the 1.6 series. So I fear your
</span><br>
<span class="quotelev1">&gt;     best bet is to periodically output some kind of marker, and have a
</span><br>
<span class="quotelev1">&gt;     separate process that monitors to see if it is being updated. Either
</span><br>
<span class="quotelev1">&gt;     way would require modifying code and that seems to be outside the
</span><br>
<span class="quotelev1">&gt;     desired scope of the solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Afraid I don&#146;t know how to accomplish what you seek without code
</span><br>
<span class="quotelev1">&gt;     modification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Jun 16, 2016, at 10:16 PM, Alex Kaiser &lt;adkaiser_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Dear Dr. Castain,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I'm using 1.6.5, which is pre-built on NYU's cluster. Is there any
</span><br>
<span class="quotelev2">&gt;&gt;     other info which would be helpful? Partial output follows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -bash-4.1$ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Package: Open MPI leak_at_[hidden] Distribution
</span><br>
<span class="quotelev2">&gt;&gt;         Open MPI: 1.6.5
</span><br>
<span class="quotelev2">&gt;&gt;         ...
</span><br>
<span class="quotelev2">&gt;&gt;         C compiler family name: GNU
</span><br>
<span class="quotelev2">&gt;&gt;         C compiler version: 4.8.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Jun 16, 2016 at 8:44 PM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         You know all this, but just in case ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Restartable code goes like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         *****************************
</span><br>
<span class="quotelev2">&gt;&gt;         .start
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         read the initial/previous configuration from a file
</span><br>
<span class="quotelev2">&gt;&gt;         ...
</span><br>
<span class="quotelev2">&gt;&gt;         final_step = first_step + nsteps
</span><br>
<span class="quotelev2">&gt;&gt;         time_step = first_step
</span><br>
<span class="quotelev2">&gt;&gt;         while ( time_step .le. final_step )
</span><br>
<span class="quotelev2">&gt;&gt;           ... march in time ...
</span><br>
<span class="quotelev2">&gt;&gt;           time_step = time_step +1
</span><br>
<span class="quotelev2">&gt;&gt;         end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         save the final_step configuration (or phase space) to a file
</span><br>
<span class="quotelev2">&gt;&gt;         [depending on the algorithm you may need to save the
</span><br>
<span class="quotelev2">&gt;&gt;         previous config also, or perhaps a few more]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         .end
</span><br>
<span class="quotelev2">&gt;&gt;         ************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Then restart the job time and again, until the desired
</span><br>
<span class="quotelev2">&gt;&gt;         number of time steps is completed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Job queue systems/resource managers allow a job to resubmit
</span><br>
<span class="quotelev2">&gt;&gt;         itself,
</span><br>
<span class="quotelev2">&gt;&gt;         so unless a job fails it feels like a single time integration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         If a job fails in the middle, you don't lose all work,
</span><br>
<span class="quotelev2">&gt;&gt;         just restart from the previous saved configuration.
</span><br>
<span class="quotelev2">&gt;&gt;         That is the only situation where you need to &quot;monitor&quot; the code.
</span><br>
<span class="quotelev2">&gt;&gt;         Resource managers/ queue systems can also email you in
</span><br>
<span class="quotelev2">&gt;&gt;         case the job fails, warning you to do manual intervention.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         The time granularity per job (nsteps) is up to you.
</span><br>
<span class="quotelev2">&gt;&gt;         Normally it is adjusted to the max walltime of job queues
</span><br>
<span class="quotelev2">&gt;&gt;         (in a shared computer/cluster),
</span><br>
<span class="quotelev2">&gt;&gt;         but in your case it can be adjusted to how often the program
</span><br>
<span class="quotelev2">&gt;&gt;         fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         All atmosphere/ocean/climate/weather_forecast models work
</span><br>
<span class="quotelev2">&gt;&gt;         this way (that's what we mostly run here).
</span><br>
<span class="quotelev2">&gt;&gt;         I guess most CFD, computational Chemistry, etc, programs also do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;         Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 06/16/2016 05:25 PM, Alex Kaiser wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I have an MPI code which sometimes hangs, simply stops
</span><br>
<span class="quotelev2">&gt;&gt;             running. It is
</span><br>
<span class="quotelev2">&gt;&gt;             not clear why and it uses many large third party libraries
</span><br>
<span class="quotelev2">&gt;&gt;             so I do not
</span><br>
<span class="quotelev2">&gt;&gt;             want to try to fix it. The code is easy to restart, but
</span><br>
<span class="quotelev2">&gt;&gt;             then it needs to
</span><br>
<span class="quotelev2">&gt;&gt;             be monitored closely by me, and I'd prefer to do it
</span><br>
<span class="quotelev2">&gt;&gt;             automatically.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Is there a way, within an MPI process, to detect the hang
</span><br>
<span class="quotelev2">&gt;&gt;             and abort if so?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             In psuedocode, I would like to do something like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 for (all time steps)
</span><br>
<span class="quotelev2">&gt;&gt;                      step
</span><br>
<span class="quotelev2">&gt;&gt;                      if (nothing has happened for x minutes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          call mpi abort to return control to the shell
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 endfor
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             This structure does not work however, as it can no longer
</span><br>
<span class="quotelev2">&gt;&gt;             do anything,
</span><br>
<span class="quotelev2">&gt;&gt;             including check itself, when it is stuck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;             Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2016/06/29471.php">http://www.open-mpi.org/community/lists/users/2016/06/29471.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/06/29473.php">http://www.open-mpi.org/community/lists/users/2016/06/29473.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29474.php">http://www.open-mpi.org/community/lists/users/2016/06/29474.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29481.php">http://www.open-mpi.org/community/lists/users/2016/06/29481.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29483.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29484.php">Moody, Adam T.: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29484.php">Moody, Adam T.: "Re: [OMPI users] Restart after code hangs"</a>
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
