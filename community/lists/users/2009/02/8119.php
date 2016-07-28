<?
$subject_val = "[OMPI users] lammps MD code fails with Open MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 17:06:48 2009" -->
<!-- isoreceived="20090219220648" -->
<!-- sent="Thu, 19 Feb 2009 16:09:20 -0600" -->
<!-- isosent="20090219220920" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="[OMPI users] lammps MD code fails with Open MPI 1.3" -->
<!-- id="499DD890.9050400_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] lammps MD code fails with Open MPI 1.3<br>
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 17:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8120.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8118.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8126.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8126.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8129.php">Nysal Jan: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Maybe reply:</strong> <a href="8137.php">Jeff Pummill: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I built a fresh version of lammps v29Jan09 against Open MPI 1.3 which in 
<br>
turn was built with Gnu compilers v4.2.4 on an Ubuntu 8.04 x86_64 box. 
<br>
This Open MPI build was able to generate usable binaries such as XHPL 
<br>
and NPB, but the lammps binary it generated was not usable.
<br>
<p>I tried it with a couple of different versions of the lammps source, but 
<br>
to no avail. No errors during the builds and a binary was created, but 
<br>
when executing the job it quickly exits with no messages other than:
<br>
<p>jpummil_at_stealth:~$ mpirun -np 4 -hostfile hosts 
<br>
/home/jpummil/lmp_Stealth-OMPI &lt; in.testbench_small
<br>
LAMMPS (22 Jan 2008)
<br>
<p>Interestingly, I downloaded Open MPI 1.2.8, built it with the same 
<br>
configure options I had used with 1.3, and it worked.
<br>
<p>I'm getting by fine with 1.2.8. I just wanted to file a possible bug 
<br>
report on 1.3 and see if others have seen this behavior.
<br>
<p>Cheers!
<br>
<p><pre>
-- 
Jeff F. Pummill
Senior Linux Cluster Administrator
TeraGrid Campus Champion - UofA
University of Arkansas
//
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8120.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8118.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8126.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8126.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8129.php">Nysal Jan: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Maybe reply:</strong> <a href="8137.php">Jeff Pummill: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
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
