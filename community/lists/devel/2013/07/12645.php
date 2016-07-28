<?
$subject_val = "Re: [OMPI devel] pmi2 slurm/openmpi patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 09:12:24 2013" -->
<!-- isoreceived="20130718131224" -->
<!-- sent="Thu, 18 Jul 2013 06:12:16 -0700" -->
<!-- isosent="20130718131216" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pmi2 slurm/openmpi patch" -->
<!-- id="9332DC66-37CE-4576-8524-58F79EE4592B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51E7AF2F.6060901_at_ext.bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pmi2 slurm/openmpi patch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 09:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12642.php">Piotr Lesnicki: "[OMPI devel] pmi2 slurm/openmpi patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Piotr - I'll apply that and move it to the 1.7 branch.
<br>
<p>Some of us are trying to test the pmi2 support in 2.6.0 and hitting a problem. We have verified that the pmi2 support was built/installed, and that both slurmctld and slurmd are at 2.6.0 level. When we run &quot;srun --mpi-list&quot;, we get:
<br>
<p>srun: MPI types are... 
<br>
srun: mpi/mvapich
<br>
srun: mpi/pmi2
<br>
srun: mpi/mpich1_shmem
<br>
srun: mpi/mpich1_p4
<br>
srun: mpi/none
<br>
srun: mpi/lam
<br>
srun: mpi/openmpi
<br>
srun: mpi/mpichmx
<br>
srun: mpi/mpichgm
<br>
<p>So it looks like the install is correct. However, when we attempt to run a job with &quot;srun --mpi=pmi2 foo&quot;, we get an error from the slurmd on the remote node:
<br>
<p>slurmd[n1]: mpi/pmi2: no value for key  in req
<br>
<p>and the PMI calls in the app fail. Any ideas as to the source of the problem? Do we have to configure something else, or start slurmd with some option?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Jul 18, 2013, at 2:02 AM, Piotr Lesnicki &lt;piotr.lesnicki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think there a few things still missing in openmpi pmi2 to make it work with slurm. We are the ones at Bull who integrated the pmi2 code from mpich2 to slurm. The attached patch should fix the issue (call slurm with --mpi=pmi2). This still needs to be checked with other pmi2 implemenations (we use pmi2.h but some use pmi.h ? constants are prefixed with PMI2_ but some use PMI_ ?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Piotr Lesnicki
</span><br>
<span class="quotelev1">&gt; &lt;pmi2.patch&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12642.php">Piotr Lesnicki: "[OMPI devel] pmi2 slurm/openmpi patch"</a>
<!-- nextthread="start" -->
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
