<?
$subject_val = "[OMPI users] slurm and all-srun orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:44:47 2008" -->
<!-- isoreceived="20080303174447" -->
<!-- sent="Mon, 3 Mar 2008 12:44:39 -0500" -->
<!-- isosent="20080303174439" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="[OMPI users] slurm and all-srun orterun" -->
<!-- id="A14F91CBBBA3014385A806944C9BEF1BAE7D5B_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4447850C-820B-4FF4-837F-7523DCC1F0D7_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] slurm and all-srun orterun<br>
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 12:44:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5121.php">Brock Palen: "[OMPI users] eager limits?"</a>
<li><strong>Previous message:</strong> <a href="5119.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI users] Loopback Communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
<li><strong>Maybe reply:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are migrating to openmpi on our large (~1000 node) cluster, and plan
<br>
to use it exclusively on a multi-thousand core infiniband cluster in the
<br>
near future. We had extensive problems with parallel processes not dying
<br>
after a job crash, which was largely solved by switching to the slurm
<br>
resource manager.
<br>
<p>While orterun supports slurm, it only uses the srun facility to launch
<br>
the &quot;orted&quot; daemons, which then start the actual user process
<br>
themselves. In our recent migration to openmpi, we have noticed
<br>
occasions where orted did not correctly clean up after a parallel job
<br>
crash. In most cases the crash was due to an infiniband error. Most
<br>
worryingly slurm was not able to cleanup the orted, and it along with
<br>
user processes were left running.
<br>
<p>At SC07 I was told that there is some talk of using srun to launch both
<br>
orted and user processes, or alternatively use srun only. Either would
<br>
solve the cleanup problem, in our experience. Is Rolf Castain on this
<br>
list?
<br>
<p>Thanks,
<br>
Federico
<br>
<p>P.S.
<br>
We use proctrack/linuxproc slurm process tracking plugin. As noted in
<br>
the config man page, this may fail to find certain processes and explain
<br>
why slurm could not clean up orted effectively.
<br>
<p>&nbsp;man slurm.conf(5), version 1.2.22:
<br>
NOTE: &quot;proctrack/linuxproc&quot; and &quot;proctrack/pgid&quot; can fail to identify
<br>
all processes associated with a job since processes can become a child
<br>
of the init process (when the parent process terminates) or change their
<br>
process group. To reliably track all processes, one of the other
<br>
mechanisms utilizing kernel modifications is preferable.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5121.php">Brock Palen: "[OMPI users] eager limits?"</a>
<li><strong>Previous message:</strong> <a href="5119.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI users] Loopback Communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
<li><strong>Maybe reply:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
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
