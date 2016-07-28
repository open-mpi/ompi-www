<?
$subject_val = "[OMPI users] openmpi-default-hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 10:50:34 2010" -->
<!-- isoreceived="20100208155034" -->
<!-- sent="Mon, 08 Feb 2010 10:50:20 -0500" -->
<!-- isosent="20100208155020" -->
<!-- name="Benjamin Gaudio" -->
<!-- email="benjamin.gaudio_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-default-hostfile" -->
<!-- id="4B6FEC6A.3316.0051.0_at_groupwise.wmich.edu" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-default-hostfile<br>
<strong>From:</strong> Benjamin Gaudio (<em>benjamin.gaudio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 10:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12041.php">Prentice Bisbal: "[OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Previous message:</strong> <a href="12039.php">Prentice Bisbal: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
<li><strong>Reply:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using ClusterTools 8.2.1 on Solaris 10 and according to the HPC
<br>
docs,
<br>
<p>&quot;Open MPI includes a commented default hostfile at
<br>
/opt/SUNWhpc/HPC8.2/etc/openmpi-default-hostfile. Unless you
<br>
specify
<br>
a different hostfile at a different location, this is the hostfile
<br>
that OpenMPI uses.&quot;
<br>
<p>I have added my list of hosts to that file. If I don't specify a
<br>
hostfile in the mpirun command, it doesn't use any of the hosts in
<br>
the file, it just runs everything on the node that I run the command
<br>
on. However, if I implicitly call the hostfile in the mpirun command
<br>
with -hostfile /opt/SUNWhpc/HPC8.2.1/etc/openmpi-default-hostfile,
<br>
then it works as it should. So, I have come to the conclusion that
<br>
mpirun is not reading my default file for some reason. Is there a
<br>
way to figure out why?
<br>
<p>Benj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12041.php">Prentice Bisbal: "[OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>Previous message:</strong> <a href="12039.php">Prentice Bisbal: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
<li><strong>Reply:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
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
