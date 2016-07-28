<?
$subject_val = "[OMPI users] rankfile error on openmpi/1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 12:04:05 2009" -->
<!-- isoreceived="20090831160405" -->
<!-- sent="Mon, 31 Aug 2009 12:01:16 -0400" -->
<!-- isosent="20090831160116" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="[OMPI users] rankfile error on openmpi/1.3.3" -->
<!-- id="FE1D72F2809CF54DA0146C920D6697E10B3663_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200908311547.n7VFlWk4025106_at_master.deshaw.com" -->
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
<strong>Subject:</strong> [OMPI users] rankfile error on openmpi/1.3.3<br>
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 12:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10522.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Reply:</strong> <a href="10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;
<br>
I am trying to use the rankmap to bind a 4-proc mpi job to one socket of a two-socket, 8 core machine. However I'm getting a strange error.
<br>
&nbsp;
<br>
CMDS USED
<br>
orterun --hostfile hostlist.1 -n 4  --mca rmaps_rank_file_path ./rankmap.1 desres-netscan  -o $OUTDIR
<br>
&nbsp;
<br>
$ cat rankmap.1
<br>
rank 0=drdb0235.en slot=0:0
<br>
rank 1=drdb0235.en slot=0:1
<br>
rank 2=drdb0235.en slot=0:2
<br>
rank 3=drdb0235.en slot=0:3
<br>
&nbsp;
<br>
$ cat hostlist.1
<br>
drdb0235.en slots=8
<br>
<p>ERROR SEEN
<br>
--------------------------------------------------------------------------
<br>
Rankfile claimed host drdb0235.en that was not allocated or oversubscribed it's slots:
<br>
--------------------------------------------------------------------------
<br>
[drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG: Bad parameter in file rmaps_rank_file.c at line 108
<br>
[drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG: Bad parameter in file base/rmaps_base_map_job.c at line 87
<br>
[drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG: Bad parameter in file base/plm_base_launch_support.c at line 77
<br>
[drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG: Bad parameter in file plm_rsh_module.c at line 985 
<br>
&nbsp;
<br>
<span class="quotelev1">&gt;From looking at the code in rmaps_rank_file.c it seems the error occurs when the node-gathering code wraps twice around the hostlist. However I dont see why that is happening.
</span><br>
&nbsp;
<br>
If I specify 8 slots in the rankmap, I see a different error: Error, invalid rank (4) in the rankfile (./rankmap.1)
<br>
&nbsp;
<br>
Thanks,
<br>
Federico
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10523/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10522.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Reply:</strong> <a href="10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
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
