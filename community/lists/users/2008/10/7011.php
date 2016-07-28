<?
$subject_val = "[OMPI users] Debian MPI -- mpirun missing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 11:16:59 2008" -->
<!-- isoreceived="20081017151659" -->
<!-- sent="Sat, 18 Oct 2008 00:16:48 +0900" -->
<!-- isosent="20081017151648" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="[OMPI users] Debian MPI -- mpirun missing" -->
<!-- id="48F8AC60.2090901_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> [OMPI users] Debian MPI -- mpirun missing<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 11:16:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7012.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7010.php">Mike Hanby: "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7012.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7012.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7017.php">Ashley Pittman: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7018.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm very new to MPI and am trying to install it on to a Debian Etch 
<br>
system.  I did have mpich installed and I believe that is causing me 
<br>
problems.  I completely uninstalled it and then ran:
<br>
<p>update-alternatives --remove-all mpicc
<br>
<p>Then, I installed the following packages:
<br>
<p>libibverbs1 openmpi-bin openmpi-common openmpi-libs0 openmpi-dbg openmpi-dev
<br>
<p>And it now says:
<br>
<p><span class="quotelev2"> &gt;&gt; update-alternatives --display mpicc
</span><br>
mpicc - status is auto.
<br>
&nbsp;link currently points to /usr/bin/mpicc.openmpi
<br>
/usr/bin/mpicc.openmpi - priority 40
<br>
&nbsp;slave mpif90: /usr/bin/mpif90.openmpi
<br>
&nbsp;slave mpiCC: /usr/bin/mpic++.openmpi
<br>
&nbsp;slave mpic++: /usr/bin/mpic++.openmpi
<br>
&nbsp;slave mpif77: /usr/bin/mpif77.openmpi
<br>
&nbsp;slave mpicxx: /usr/bin/mpic++.openmpi
<br>
Current `best' version is /usr/bin/mpicc.openmpi.
<br>
<p>which seems ok to me...  So, I tried to compile something (I had sample 
<br>
code from a book I purchased a while back, but for mpich), however, I 
<br>
can run the program as-is, but I think I should be running it with 
<br>
mpirun -- the FAQ suggests there is one?  But, there is no mpirun 
<br>
anywhere.  It's not in /usr/bin.  I updated the filename database 
<br>
(updatedb) and tried a &quot;locate mpirun&quot;, and I get only one hit:
<br>
<p>/usr/include/openmpi/ompi/runtime/mpiruntime.h
<br>
<p>Is there a package that I neglected to install?  I did an &quot;aptitude 
<br>
search openmpi&quot; and installed everything listed...  :-)  Or perhaps I 
<br>
haven't removed all trace of mpich?
<br>
<p>Thank you in advance!
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7012.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7010.php">Mike Hanby: "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7012.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7012.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7017.php">Ashley Pittman: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7018.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
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
