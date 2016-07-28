<?
$subject_val = "Re: [OMPI users] Restart after code hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 11:02:22 2016" -->
<!-- isoreceived="20160617150222" -->
<!-- sent="Fri, 17 Jun 2016 08:02:17 -0700" -->
<!-- isosent="20160617150217" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Restart after code hangs" -->
<!-- id="030DC635-298C-46B6-B1F0-90B49FA0E1DA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFvb=+6FWQrSH8nqKZeJNSRdK8GNpSX01jascgxtEemG6GOrvA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-17 11:02:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29479.php">Nicolas Joly: "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>In reply to:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sadly, no - there was some possibility of using a file monitor we had for awhile, but that isn&#226;&#128;&#153;t in the 1.6 series. So I fear your best bet is to periodically output some kind of marker, and have a separate process that monitors to see if it is being updated. Either way would require modifying code and that seems to be outside the desired scope of the solution.
<br>
<p>Afraid I don&#226;&#128;&#153;t know how to accomplish what you seek without code modification.
<br>
<p><span class="quotelev1">&gt; On Jun 16, 2016, at 10:16 PM, Alex Kaiser &lt;adkaiser_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Dr. Castain, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using 1.6.5, which is pre-built on NYU's cluster. Is there any other info which would be helpful? Partial output follows.
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
<span class="quotelev1">&gt; Package: Open MPI leak_at_[hidden] &lt;mailto:leak_at_[hidden]&gt; Distribution
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
<span class="quotelev1">&gt; On Thu, Jun 16, 2016 at 8:44 PM, Gus Correa &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Alex
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29471.php">http://www.open-mpi.org/community/lists/users/2016/06/29471.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29471.php">http://www.open-mpi.org/community/lists/users/2016/06/29471.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29473.php">http://www.open-mpi.org/community/lists/users/2016/06/29473.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29473.php">http://www.open-mpi.org/community/lists/users/2016/06/29473.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29474.php">http://www.open-mpi.org/community/lists/users/2016/06/29474.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29479.php">Nicolas Joly: "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>In reply to:</strong> <a href="29474.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29481.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
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
