<?
$subject_val = "Re: [OMPI users] Restart after code hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 20:44:50 2016" -->
<!-- isoreceived="20160617004450" -->
<!-- sent="Thu, 16 Jun 2016 20:44:34 -0400" -->
<!-- isosent="20160617004434" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Restart after code hangs" -->
<!-- id="576347F2.3040500_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAFvb=+4OL04G9bvWPgVAiDYyfmrDAaNS64Rrj56ByoYFmEPT6Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 20:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29472.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29471.php">Alex Kaiser: "[OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29475.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alex
<br>
<p>You know all this, but just in case ...
<br>
<p>Restartable code goes like this:
<br>
<p>*****************************
<br>
.start
<br>
<p>read the initial/previous configuration from a file
<br>
...
<br>
final_step = first_step + nsteps
<br>
time_step = first_step
<br>
while ( time_step .le. final_step )
<br>
&nbsp;&nbsp;&nbsp;... march in time ...
<br>
&nbsp;&nbsp;&nbsp;time_step = time_step +1
<br>
end
<br>
<p>save the final_step configuration (or phase space) to a file
<br>
[depending on the algorithm you may need to save the
<br>
previous config also, or perhaps a few more]
<br>
<p>.end
<br>
************************************************
<br>
<p>Then restart the job time and again, until the desired
<br>
number of time steps is completed.
<br>
<p>Job queue systems/resource managers allow a job to resubmit itself,
<br>
so unless a job fails it feels like a single time integration.
<br>
<p>If a job fails in the middle, you don't lose all work,
<br>
just restart from the previous saved configuration.
<br>
That is the only situation where you need to &quot;monitor&quot; the code.
<br>
Resource managers/ queue systems can also email you in
<br>
case the job fails, warning you to do manual intervention.
<br>
<p>The time granularity per job (nsteps) is up to you.
<br>
Normally it is adjusted to the max walltime of job queues
<br>
(in a shared computer/cluster),
<br>
but in your case it can be adjusted to how often the program fails.
<br>
<p>All atmosphere/ocean/climate/weather_forecast models work
<br>
this way (that's what we mostly run here).
<br>
I guess most CFD, computational Chemistry, etc, programs also do.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On 06/16/2016 05:25 PM, Alex Kaiser wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have an MPI code which sometimes hangs, simply stops running. It is
</span><br>
<span class="quotelev1">&gt; not clear why and it uses many large third party libraries so I do not
</span><br>
<span class="quotelev1">&gt; want to try to fix it. The code is easy to restart, but then it needs to
</span><br>
<span class="quotelev1">&gt; be monitored closely by me, and I'd prefer to do it automatically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way, within an MPI process, to detect the hang and abort if so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In psuedocode, I would like to do something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for (all time steps)
</span><br>
<span class="quotelev1">&gt;          step
</span><br>
<span class="quotelev1">&gt;          if (nothing has happened for x minutes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              call mpi abort to return control to the shell
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     endfor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This structure does not work however, as it can no longer do anything,
</span><br>
<span class="quotelev1">&gt; including check itself, when it is stuck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Alex
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29471.php">http://www.open-mpi.org/community/lists/users/2016/06/29471.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29472.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29471.php">Alex Kaiser: "[OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29475.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
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
