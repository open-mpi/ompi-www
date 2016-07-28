<?
$subject_val = "[OMPI devel] orte can't launch process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 06:28:28 2008" -->
<!-- isoreceived="20080306112828" -->
<!-- sent="Thu, 6 Mar 2008 13:28:19 +0200" -->
<!-- isosent="20080306112819" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] orte can't launch process" -->
<!-- id="20080306112819.GD32580_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] orte can't launch process<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 06:28:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3387.php">Tim Prins: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>Previous message:</strong> <a href="3385.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3387.php">Tim Prins: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>Reply:</strong> <a href="3387.php">Tim Prins: "Re: [OMPI devel] orte can't launch process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something is broken in the trunk.
<br>
<p># mpirun -np 2 -H host1,host2  ./osu_latency
<br>
--------------------------------------------------------------------------
<br>
Some of the requested hosts are not included in the current allocation.
<br>
<p>The requested hosts were specified with --host as:
<br>
host1,host2
<br>
<p>Please check your allocation or your request.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered
<br>
an error.
<br>
More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
<p>If I create hostfile with host1 and host2 and use it instead of -H
<br>
mpirun works.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3387.php">Tim Prins: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>Previous message:</strong> <a href="3385.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3387.php">Tim Prins: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>Reply:</strong> <a href="3387.php">Tim Prins: "Re: [OMPI devel] orte can't launch process"</a>
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
