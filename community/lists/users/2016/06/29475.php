<?
$subject_val = "Re: [OMPI users] Restart after code hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 01:37:01 2016" -->
<!-- isoreceived="20160617053701" -->
<!-- sent="Fri, 17 Jun 2016 01:36:22 -0400" -->
<!-- isosent="20160617053622" -->
<!-- name="Alex Kaiser" -->
<!-- email="adkaiser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Restart after code hangs" -->
<!-- id="CAFvb=+7ike5H1P9SVL1w2qrk3qcpXZZQCe4t0-_=FCc5LH5=LQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="576347F2.3040500_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2016-06-17 01:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29476.php">Vincent Huber: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29473.php">Gus Correa: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dr. Correa,
<br>
<p>This is indeed the structure, it is a CFD program. Most of what you are
<br>
suggesting is my current workflow, including saving, sending emails upon a
<br>
crash and restarting.
<br>
<p>The problem is that the code does not crash but hangs. If it is deadlocked
<br>
then it sits there spinning cycles until I happen to check. Monitoring the
<br>
code like this has become inefficient -- sometimes an overnight run works
<br>
for half an hour and I don't notice until the morning. Also, to restart
<br>
from this requires sitting in queue again. I will try to better understand
<br>
job system's automatic resubmit, but for now I do not see how to use this
<br>
to fix the deadlock problem.
<br>
<p>After thinking about your email perhaps I can phrase my question more
<br>
precisely -- How can I return control to the shell if the MPI process has
<br>
deadlocked?
<br>
<p>Thank you,
<br>
Alex
<br>
<p><p><p><p><p>On Thu, Jun 16, 2016 at 8:44 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You know all this, but just in case ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Restartable code goes like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************
</span><br>
<span class="quotelev1">&gt; .start
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; read the initial/previous configuration from a file
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; final_step = first_step + nsteps
</span><br>
<span class="quotelev1">&gt; time_step = first_step
</span><br>
<span class="quotelev1">&gt; while ( time_step .le. final_step )
</span><br>
<span class="quotelev1">&gt;   ... march in time ...
</span><br>
<span class="quotelev1">&gt;   time_step = time_step +1
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; save the final_step configuration (or phase space) to a file
</span><br>
<span class="quotelev1">&gt; [depending on the algorithm you may need to save the
</span><br>
<span class="quotelev1">&gt; previous config also, or perhaps a few more]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .end
</span><br>
<span class="quotelev1">&gt; ************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then restart the job time and again, until the desired
</span><br>
<span class="quotelev1">&gt; number of time steps is completed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Job queue systems/resource managers allow a job to resubmit itself,
</span><br>
<span class="quotelev1">&gt; so unless a job fails it feels like a single time integration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If a job fails in the middle, you don't lose all work,
</span><br>
<span class="quotelev1">&gt; just restart from the previous saved configuration.
</span><br>
<span class="quotelev1">&gt; That is the only situation where you need to &quot;monitor&quot; the code.
</span><br>
<span class="quotelev1">&gt; Resource managers/ queue systems can also email you in
</span><br>
<span class="quotelev1">&gt; case the job fails, warning you to do manual intervention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The time granularity per job (nsteps) is up to you.
</span><br>
<span class="quotelev1">&gt; Normally it is adjusted to the max walltime of job queues
</span><br>
<span class="quotelev1">&gt; (in a shared computer/cluster),
</span><br>
<span class="quotelev1">&gt; but in your case it can be adjusted to how often the program fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All atmosphere/ocean/climate/weather_forecast models work
</span><br>
<span class="quotelev1">&gt; this way (that's what we mostly run here).
</span><br>
<span class="quotelev1">&gt; I guess most CFD, computational Chemistry, etc, programs also do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/16/2016 05:25 PM, Alex Kaiser wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have an MPI code which sometimes hangs, simply stops running. It is
</span><br>
<span class="quotelev2">&gt;&gt; not clear why and it uses many large third party libraries so I do not
</span><br>
<span class="quotelev2">&gt;&gt; want to try to fix it. The code is easy to restart, but then it needs to
</span><br>
<span class="quotelev2">&gt;&gt; be monitored closely by me, and I'd prefer to do it automatically.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way, within an MPI process, to detect the hang and abort if so?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In psuedocode, I would like to do something like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     for (all time steps)
</span><br>
<span class="quotelev2">&gt;&gt;          step
</span><br>
<span class="quotelev2">&gt;&gt;          if (nothing has happened for x minutes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              call mpi abort to return control to the shell
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     endfor
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This structure does not work however, as it can no longer do anything,
</span><br>
<span class="quotelev2">&gt;&gt; including check itself, when it is stuck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29471.php">http://www.open-mpi.org/community/lists/users/2016/06/29471.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29473.php">http://www.open-mpi.org/community/lists/users/2016/06/29473.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29475/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29476.php">Vincent Huber: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29473.php">Gus Correa: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
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
