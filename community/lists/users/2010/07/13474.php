<?
$subject_val = "Re: [OMPI users] Open MPI, cannot get the results from workers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 01:42:09 2010" -->
<!-- isoreceived="20100706054209" -->
<!-- sent="Mon, 5 Jul 2010 22:41:44 -0700" -->
<!-- isosent="20100706054144" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, cannot get the results from workers" -->
<!-- id="AANLkTinm9UnhAjNPPEoMmZFh--MIYm1iy_L7Qx_8enqc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w612150F2459281FAA783E8CBB10_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI, cannot get the results from workers<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 01:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13475.php">jody: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>In reply to:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13475.php">jody: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Reply:</strong> <a href="13475.php">jody: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
if the master receives multiple results from the same worker, how does the
<br>
master know which result (and the associated tag) arrive first? what MPI
<br>
commands are you using exactly?
<br>
<p>On Mon, Jul 5, 2010 at 4:25 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  When the master sends out the task, it assign a distinct task number ID
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; the task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the worker receive the task, it  still use the task's assigned ID as
</span><br>
<span class="quotelev1">&gt; task tag to send it to master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; July 5 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: solarbikedz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 5 Jul 2010 13:17:27 -0700
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI, cannot get the results from workers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how does the master receive results from the workers? if a worker is
</span><br>
<span class="quotelev1">&gt; sending multiple task results, how does the master knows what the message
</span><br>
<span class="quotelev1">&gt; tags are ahead of time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jul 4, 2010 at 10:26 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear All :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I designed a master-worker framework, in which the master can schedule
</span><br>
<span class="quotelev1">&gt; multiple tasks (numTaskPerWorkerNode) to each worker and then collects
</span><br>
<span class="quotelev1">&gt; results from workers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if the numTaskPerWorkerNode = 1, it works well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, if numTaskPerWorkerNode &gt; 1, the master cannot get the results from
</span><br>
<span class="quotelev1">&gt; workers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, the workers can get the tasks from master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; why ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have used different taskTag to distinguish the tasks, but still does not
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; July 4  2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy is not the too busy. Combine all your e-mail accounts with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4">http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy is not the old busy. Search, chat and e-mail from your inbox. Get
</span><br>
<span class="quotelev1">&gt; started.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_3">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_3</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13474/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13475.php">jody: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>In reply to:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13475.php">jody: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Reply:</strong> <a href="13475.php">jody: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
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
