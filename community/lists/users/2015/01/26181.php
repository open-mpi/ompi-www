<?
$subject_val = "[OMPI users] libevent hangs on app finalize stage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 02:54:47 2015" -->
<!-- isoreceived="20150115075447" -->
<!-- sent="Thu, 15 Jan 2015 10:54:44 +0300" -->
<!-- isosent="20150115075444" -->
<!-- name="Leonid" -->
<!-- email="lchistov_at_[hidden]" -->
<!-- subject="[OMPI users] libevent hangs on app finalize stage" -->
<!-- id="54B77244.4080900_at_pathscale.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] libevent hangs on app finalize stage<br>
<strong>From:</strong> Leonid (<em>lchistov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 02:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26180.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Reply:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.
<br>
<p>I believe there is a bug in event_base_loop() function from file event.c 
<br>
(opal/mca/event/libevent2022/libevent/).
<br>
<p>Consider the case when application is going to be finalized and both 
<br>
event_base_loop() and event_base_loopbreak() are called in the same time 
<br>
in parallel threads.
<br>
<p>Then if event_base_loopbreak() happens to acquire lock first, it will 
<br>
set &quot;event_base-&gt;event_break = 1&quot;, but won't send any signal to event 
<br>
loop, because it did not started yet.
<br>
<p>After that, event_base_loop() will acquire the lock and will clear 
<br>
event_break flag with the following statement: &quot;base-&gt;event_gotterm = 
<br>
base-&gt;event_break = 0;&quot;. Then it will go into polling with timeout = -1 
<br>
and thus block forever.
<br>
<p>This issue was reproduced on a custom compiler (using Lulesh benchmark 
<br>
and x86 4-core PC), but it can be also reproduced for me with GCC 
<br>
compiler (on almost any benchmark and in same HW settings) by putting 
<br>
some delay to orte_progress_thread_engine() function:
<br>
<p>static void* orte_progress_thread_engine(opal_object_t *obj)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (orte_event_base_active) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usleep(1000); // add sleep to allow orte_ess_base_app_finalize() 
<br>
set orte_event_base_active flag to false
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_THREAD_CANCELLED;
<br>
}
<br>
<p>I am not completely sure what should be the best fix for described problem.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26180.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Reply:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
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
