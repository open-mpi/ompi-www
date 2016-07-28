<?
$subject_val = "[OMPI users] Memory usage for MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 04:55:06 2015" -->
<!-- isoreceived="20150601085506" -->
<!-- sent="Mon, 1 Jun 2015 04:54:45 -0400" -->
<!-- isosent="20150601085445" -->
<!-- name="Manoj Vaghela" -->
<!-- email="manoj.vaghela_at_[hidden]" -->
<!-- subject="[OMPI users] Memory usage for MPI program" -->
<!-- id="CAJfsQWSmK92c4VCek4CG3Wnz0gmVPc7nUXUn475L3H4H5mdoEw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Memory usage for MPI program<br>
<strong>From:</strong> Manoj Vaghela (<em>manoj.vaghela_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 04:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27007.php">Siegmar Gross: "[OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/27005.php">Alexander Droste: "Re: [OMPI users] [EXTERNAL]  MPI-Checker - Static Analyzer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27015.php">Nathan Hjelm: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Reply:</strong> <a href="27015.php">Nathan Hjelm: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI users,
<br>
<p>I have been using OpenMPI for quite a few years now. Recently I figured out
<br>
some memory related issues which are quite bothering me.
<br>
<p>I have OpenMPI 1.8.3 version installed on different machines. All machines
<br>
are SMPs and linux x86_64. The Machine one and one-1 are installed with Red
<br>
Hat Enterprise Linux Server release 5.4 and others are CentOS 7.
<br>
<p>I am using 16 cores on each machine. If I see memory consumption for a
<br>
finite volume problem of 3 million cells, it should take nearly 3GB of
<br>
memory on each machine for 16 cores usage. The following are some of the
<br>
values of memory consumption which I got.
<br>
<p>machine       mem used(GB)       total memory(GB)           per core
<br>
<p>memory usage(%)
<br>
==========================================================
<br>
one            2.114413568                  66.075424
<br>
0.2
<br>
one-1         2.368967808                 24.676748
<br>
0.6
<br>
two             7.362867456                 32.869944
<br>
1.4
<br>
three          7.333295872                 16.368964
<br>
2.8
<br>
four            7.356667136                 32.842264
<br>
1.4
<br>
five             7.350758912                 32.815888
<br>
1.4
<br>
<p>I am wondering why machines two to five are taking high memory against the
<br>
machines one and one-1 for the same setup files for this problem.
<br>
<p>I have compiled OpenMPI with its default options on all machines.
<br>
<p>It will help if somebody has any idea on this problem. Is there anything to
<br>
be set while building OpenMPI ? or it is OS problem?
<br>
Thanks.
<br>
<p>Manoj
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27007.php">Siegmar Gross: "[OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/27005.php">Alexander Droste: "Re: [OMPI users] [EXTERNAL]  MPI-Checker - Static Analyzer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27015.php">Nathan Hjelm: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>Reply:</strong> <a href="27015.php">Nathan Hjelm: "Re: [OMPI users] Memory usage for MPI program"</a>
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
