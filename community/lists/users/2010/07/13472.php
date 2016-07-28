<?
$subject_val = "Re: [OMPI users] Open MPI, cannot get the results from workers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  5 16:17:53 2010" -->
<!-- isoreceived="20100705201753" -->
<!-- sent="Mon, 5 Jul 2010 13:17:27 -0700" -->
<!-- isosent="20100705201727" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, cannot get the results from workers" -->
<!-- id="AANLkTinp22PMk5pQAC9eetI7wQ8fCuKv7WiLxC2DduQm_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w5973D3414A1E745C786864CBB00_at_phx.gbl" -->
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
<strong>Date:</strong> 2010-07-05 16:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13471.php">Gabriele Fatigati: "[OMPI users] UDAPL 2.0 support"</a>
<li><strong>In reply to:</strong> <a href="13470.php">Jack Bryan: "[OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Reply:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
how does the master receive results from the workers? if a worker is sending
<br>
multiple task results, how does the master knows what the message tags are
<br>
ahead of time?
<br>
<p>On Sun, Jul 4, 2010 at 10:26 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Dear All :
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Previous message:</strong> <a href="13471.php">Gabriele Fatigati: "[OMPI users] UDAPL 2.0 support"</a>
<li><strong>In reply to:</strong> <a href="13470.php">Jack Bryan: "[OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Reply:</strong> <a href="13473.php">Jack Bryan: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
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
