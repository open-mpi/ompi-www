<?
$subject_val = "[OMPI users] Disabling tuned collectives in OMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 14:14:18 2009" -->
<!-- isoreceived="20091029181418" -->
<!-- sent="Thu, 29 Oct 2009 12:13:58 -0600" -->
<!-- isosent="20091029181358" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI users] Disabling tuned collectives in OMPI 1.3.3" -->
<!-- id="E9E6EA75-01C1-4D02-8567-F6FE78AC9C00_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Disabling tuned collectives in OMPI 1.3.3<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 14:13:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11005.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11008.php">Ralph Castain: "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11008.php">Ralph Castain: "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a user who's hitting a hang in MPI_Allgather that totalview is  
<br>
showing is in a tuned collective operation.
<br>
<p>How do we disable the use of tuned collectives?  We have tried setting  
<br>
the priority to 0 but maybe that wasn't the correct way:
<br>
<p>mpirun -mca coll_tuned_priority 0 ...
<br>
<p>Should it have been a higher number or is there another param that  
<br>
should be set?
<br>
<p>Thanks,
<br>
david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11005.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11008.php">Ralph Castain: "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11008.php">Ralph Castain: "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
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
