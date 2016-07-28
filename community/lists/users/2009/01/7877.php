<?
$subject_val = "[OMPI users] openmpi over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 14:20:06 2009" -->
<!-- isoreceived="20090129192006" -->
<!-- sent="Thu, 29 Jan 2009 14:20:02 -0500" -->
<!-- isosent="20090129192002" -->
<!-- name="Daniel De Marco" -->
<!-- email="ddm_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi over tcp" -->
<!-- id="20090129192002.GA17955_at_yakko.bartol.udel.edu" -->
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
<strong>Subject:</strong> [OMPI users] openmpi over tcp<br>
<strong>From:</strong> Daniel De Marco (<em>ddm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 14:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7876.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7879.php">Ralph Castain: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7879.php">Ralph Castain: "Re: [OMPI users] openmpi over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I'm doing some tests on a small cluster with gigabit and infiniband
<br>
interconnects with openmpi and I'm running into the same problem as
<br>
described in the following thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/04/3082.php">http://www.open-mpi.org/community/lists/users/2007/04/3082.php</a>
<br>
<p>Basically even if I run my test with:
<br>
mpirun --mca btl tcp,self --prefix /share/apps/openmpi-1.3/gcc_ifort/
<br>
--machinefile machines -np 2 ./osu_latency
<br>
I seem to be getting infiniband transport:
<br>
# OSU MPI Latency Test v3.1.1
<br>
# Size            Latency (us)
<br>
0                         2.41
<br>
1                         2.66
<br>
2                         2.85
<br>
4                         2.85
<br>
8                         2.88
<br>
16                        3.52
<br>
32                        3.61
<br>
64                        3.62
<br>
128                       3.95
<br>
256                       4.19
<br>
512                       4.96
<br>
1024                      6.31
<br>
<p>I tried running it with --mca btl ^openib but the result is the same.
<br>
I even tried, as suggested in the thread above, to remove the *openib*
<br>
files from the lib/openmpi directory, but without any change.
<br>
<p>I tried with 1.2.8 and with 1.3.0 with the same results.
<br>
<p>Is there anything else I can try in order to be able to use gigabit
<br>
transport?
<br>
<p>Thanks, Daniel.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7876.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7879.php">Ralph Castain: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7879.php">Ralph Castain: "Re: [OMPI users] openmpi over tcp"</a>
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
