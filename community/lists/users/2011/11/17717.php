<?
$subject_val = "Re: [OMPI users] Problem with openmpi-default-hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 05:07:37 2011" -->
<!-- isoreceived="20111107100737" -->
<!-- sent="Mon, 7 Nov 2011 10:07:31 +0000 (GMT)" -->
<!-- isosent="20111107100731" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi-default-hostfile" -->
<!-- id="1320660451.90735.YahooMailNeo_at_web24710.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DC28CB02-2257-439D-BDCA-A2942F120E60_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with openmpi-default-hostfile<br>
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 05:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17718.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>In reply to:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph and thanks for your answer!
<br>
<p><p><p><span class="quotelev1">&gt; Where did you install OMPI? If you check &quot;which mpirun&quot;, does it point 
</span><br>
<span class="quotelev1">&gt; to the same installation where you edited the default hostfile?
</span><br>
<p>It was installed in the default path which is chosen by OFED.
<br>
And yes, I've edited the right openmpi-default-hostfile :
<br>
<p>$ which mpirun
<br>
/usr/mpi/gcc/openmpi-1.4.3/bin/mpirun
<br>
<p>$ cat /usr/mpi/gcc/openmpi-1.4.3/etc/openmpi-default-hostfile
<br>
cluster1
<br>
cluster2
<br>
cluster3
<br>
cluster4
<br>
<p>$ mpirun -np 4 B4A1
<br>
Hello World! I am rank 003 of 4 on hostname=cluster1.
<br>
Hello World! I am rank 000 of 4 on hostname=cluster1.
<br>
Hello World! I am rank 002 of 4 on hostname=cluster1.
<br>
Hello World! I am rank 001 of 4 on hostname=cluster1.
<br>
<p>$ mpirun -hostfile /usr/mpi/gcc/openmpi-1.4.3/etc/openmpi-default-hostfile -np 4 B4A1
<br>
Hello World! I am rank 000 of 4 on hostname=cluster1.
<br>
Hello World! I am rank 001 of 4 on hostname=cluster2.
<br>
Hello World! I am rank 002 of 4 on hostname=cluster3.
<br>
Hello World! I am rank 003 of 4 on hostname=cluster4.
<br>
<p>Regards,
<br>
Lukas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17718.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
<li><strong>In reply to:</strong> <a href="17716.php">Ralph Castain: "Re: [OMPI users] Problem with openmpi-default-hostfile"</a>
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
