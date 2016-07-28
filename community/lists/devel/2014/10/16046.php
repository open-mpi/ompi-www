<?
$subject_val = "[OMPI devel] Slurm direct-launch is broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 14:33:59 2014" -->
<!-- isoreceived="20141015183359" -->
<!-- sent="Wed, 15 Oct 2014 11:33:55 -0700" -->
<!-- isosent="20141015183355" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Slurm direct-launch is broken on trunk" -->
<!-- id="02CF1D3B-E67E-416D-898A-2F639C441565_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Slurm direct-launch is broken on trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 14:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16047.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16045.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16052.php">Gilles Gouaillardet: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>Reply:</strong> <a href="16052.php">Gilles Gouaillardet: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When attempting to launch via srun:
<br>
<p>[bend001:03708] pmix: get all keys for proc 327680 in KVS 5.0
<br>
[bend001:03708] GETTING KEY 327680-key0
<br>
[bend001:03708] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
<br>
[bend001:03708] UNSUPPORTED TYPE 0
<br>
[bend001:03708] OPAL ERROR: Error in file pmix_s1.c at line 458
<br>
[bend001:03709] [[5,0],2] pmix:s1 barrier complete
<br>
[bend001:03709] pmix: get all keys for proc 327680 in KVS 5.0
<br>
[bend001:03709] GETTING KEY 327680-key0
<br>
[bend001:03709] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
<br>
[bend001:03709] UNSUPPORTED TYPE 0
<br>
[bend001:03709] OPAL ERROR: Error in file pmix_s1.c at line 458
<br>
[bend001:03708] [[5,0],1] pmix:s1 called get for key pmix.hname
<br>
[bend001:03708] pmix: get all keys for proc 327680 in KVS 5.0
<br>
[bend001:03708] GETTING KEY 327680-key0
<br>
[bend001:03708] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
<br>
[bend001:03708] UNSUPPORTED TYPE 0
<br>
[bend001:03708] [[5,0],1] pmix:s1 got key pmix.hname
<br>
<p><p>Looks like someone broke the common code for decoding keys. Could you please fix it?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16047.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16045.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16052.php">Gilles Gouaillardet: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>Reply:</strong> <a href="16052.php">Gilles Gouaillardet: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
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
