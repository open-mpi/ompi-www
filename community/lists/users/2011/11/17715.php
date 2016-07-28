<?
$subject_val = "[OMPI users] Problem with openmpi-default-hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  6 20:16:59 2011" -->
<!-- isoreceived="20111107011659" -->
<!-- sent="Mon, 7 Nov 2011 01:16:54 +0000 (GMT)" -->
<!-- isosent="20111107011654" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with openmpi-default-hostfile" -->
<!-- id="1320628614.84643.YahooMailNeo_at_web24716.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with openmpi-default-hostfile<br>
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-06 20:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Previous message:</strong> <a href="17714.php">David Singleton: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Reply:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello together!
<br>
<p>I've built v1.4.3 (which was in OFED-1.5.3.2) and v1.4.4 (from you website).
<br>
But in both versions I've the following problem:
<br>
<p>If I write some hosts into '/usr/mpi/gcc/openmpi-1.4.4/etc/openmpi-default-hostfile':
<br>
cluster1
<br>
cluster2
<br>
cluster3
<br>
cluster4
<br>
and execute 'mpirun -np 4 &lt;app&gt;&quot; then only the local host is used.
<br>
<p>If I execute 'mpirun -hostfile /.../openmpi-default-hostfile -np 4 &lt;app&gt;' all works fine.
<br>
So have I done something wrong or is there another possibility to set a system-wide list of default hosts (i.e. for all users)?
<br>
<p>Many thanks for any help!
<br>
<p>Regards,
<br>
Lukas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Previous message:</strong> <a href="17714.php">David Singleton: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>Reply:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
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
