<?
$subject_val = "[OMPI users] Open MPI, cannot get the results from workers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  4 13:26:05 2010" -->
<!-- isoreceived="20100704172605" -->
<!-- sent="Sun, 4 Jul 2010 11:26:00 -0600" -->
<!-- isosent="20100704172600" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI, cannot get the results from workers" -->
<!-- id="SNT134-w5973D3414A1E745C786864CBB00_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI, cannot get the results from workers<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-04 13:26:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13471.php">Gabriele Fatigati: "[OMPI users] UDAPL 2.0 support"</a>
<li><strong>Previous message:</strong> <a href="13469.php">Gabriele Fatigati: "[OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Reply:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All : 
<br>
I designed a master-worker framework, in which the master can schedulemultiple tasks (numTaskPerWorkerNode) to each worker and then collects results from workers.
<br>
if the numTaskPerWorkerNode = 1, it works well. 
<br>
But, if numTaskPerWorkerNode &gt; 1, the master cannot get the results from workers. 
<br>
But, the workers can get the tasks from master. 
<br>
why ?
<br>
<p>I have used different taskTag to distinguish the tasks, but still does not work.
<br>
Any help is appreciated. 
<br>
Thanks, 
<br>
Jack 
<br>
July 4  2010 		 	   		  
<br>
_________________________________________________________________
<br>
The New Busy is not the too busy. Combine all your e-mail accounts with Hotmail.
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4">http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13471.php">Gabriele Fatigati: "[OMPI users] UDAPL 2.0 support"</a>
<li><strong>Previous message:</strong> <a href="13469.php">Gabriele Fatigati: "[OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
<li><strong>Reply:</strong> <a href="13472.php">David Zhang: "Re: [OMPI users] Open MPI, cannot get the results from workers"</a>
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
