<?
$subject_val = "Re: [OMPI users] Restart after code hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 11:59:05 2016" -->
<!-- isoreceived="20160617155905" -->
<!-- sent="Fri, 17 Jun 2016 11:58:24 -0400" -->
<!-- isosent="20160617155824" -->
<!-- name="Alex Kaiser" -->
<!-- email="adkaiser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Restart after code hangs" -->
<!-- id="CAFvb=+4LdE-72Ch5JKPRJ3VacSOM1rpGvaYg8YaV0EbuQLesgg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="030DC635-298C-46B6-B1F0-90B49FA0E1DA_at_open-mpi.org" -->
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
<strong>From:</strong> Alex Kaiser (<em>adkaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-17 11:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29480.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29480.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An outside monitor should work. My outline of the monitor script (with
<br>
advice from the sys admin) has opportunities for bugs with environment
<br>
variables and such.
<br>
<p>I wanted to make sure there was not a simpler solution, or one that is less
<br>
error prone. Modifying the main routine which calls the library or external
<br>
scripts is no problem, I only meant that I did not want to debug the
<br>
library internals, which are huge and complicated!
<br>
<p>Appreciate the advice. Thank you,
<br>
Alex
<br>
<p>On Friday, June 17, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sadly, no - there was some possibility of using a file monitor we had for
</span><br>
<span class="quotelev1">&gt; awhile, but that isn&#226;&#128;&#153;t in the 1.6 series. So I fear your best bet is to
</span><br>
<span class="quotelev1">&gt; periodically output some kind of marker, and have a separate process that
</span><br>
<span class="quotelev1">&gt; monitors to see if it is being updated. Either way would require modifying
</span><br>
<span class="quotelev1">&gt; code and that seems to be outside the desired scope of the solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Afraid I don&#226;&#128;&#153;t know how to accomplish what you seek without code
</span><br>
<span class="quotelev1">&gt; modification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2016, at 10:16 PM, Alex Kaiser &lt;adkaiser_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Dr. Castain,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using 1.6.5, which is pre-built on NYU's cluster. Is there any other
</span><br>
<span class="quotelev1">&gt; info which would be helpful? Partial output follows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-4.1$ ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Package: Open MPI leak_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.6.5
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt; C compiler version: 4.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 16, 2016 at 8:44 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You know all this, but just in case ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Restartable code goes like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************************
</span><br>
<span class="quotelev2">&gt;&gt; .start
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; read the initial/previous configuration from a file
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; final_step = first_step + nsteps
</span><br>
<span class="quotelev2">&gt;&gt; time_step = first_step
</span><br>
<span class="quotelev2">&gt;&gt; while ( time_step .le. final_step )
</span><br>
<span class="quotelev2">&gt;&gt;   ... march in time ...
</span><br>
<span class="quotelev2">&gt;&gt;   time_step = time_step +1
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; save the final_step configuration (or phase space) to a file
</span><br>
<span class="quotelev2">&gt;&gt; [depending on the algorithm you may need to save the
</span><br>
<span class="quotelev2">&gt;&gt; previous config also, or perhaps a few more]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .end
</span><br>
<span class="quotelev2">&gt;&gt; ************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then restart the job time and again, until the desired
</span><br>
<span class="quotelev2">&gt;&gt; number of time steps is completed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Job queue systems/resource managers allow a job to resubmit itself,
</span><br>
<span class="quotelev2">&gt;&gt; so unless a job fails it feels like a single time integration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If a job fails in the middle, you don't lose all work,
</span><br>
<span class="quotelev2">&gt;&gt; just restart from the previous saved configuration.
</span><br>
<span class="quotelev2">&gt;&gt; That is the only situation where you need to &quot;monitor&quot; the code.
</span><br>
<span class="quotelev2">&gt;&gt; Resource managers/ queue systems can also email you in
</span><br>
<span class="quotelev2">&gt;&gt; case the job fails, warning you to do manual intervention.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The time granularity per job (nsteps) is up to you.
</span><br>
<span class="quotelev2">&gt;&gt; Normally it is adjusted to the max walltime of job queues
</span><br>
<span class="quotelev2">&gt;&gt; (in a shared computer/cluster),
</span><br>
<span class="quotelev2">&gt;&gt; but in your case it can be adjusted to how often the program fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All atmosphere/ocean/climate/weather_forecast models work
</span><br>
<span class="quotelev2">&gt;&gt; this way (that's what we mostly run here).
</span><br>
<span class="quotelev2">&gt;&gt; I guess most CFD, computational Chemistry, etc, programs also do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 06/16/2016 05:25 PM, Alex Kaiser wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an MPI code which sometimes hangs, simply stops running. It is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not clear why and it uses many large third party libraries so I do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to try to fix it. The code is easy to restart, but then it needs to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be monitored closely by me, and I'd prefer to do it automatically.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way, within an MPI process, to detect the hang and abort if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In psuedocode, I would like to do something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for (all time steps)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          step
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (nothing has happened for x minutes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              call mpi abort to return control to the shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     endfor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This structure does not work however, as it can no longer do anything,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; including check itself, when it is stuck.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29471.php">http://www.open-mpi.org/community/lists/users/2016/06/29471.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29473.php">http://www.open-mpi.org/community/lists/users/2016/06/29473.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29474.php">http://www.open-mpi.org/community/lists/users/2016/06/29474.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29481/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29480.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29480.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
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
