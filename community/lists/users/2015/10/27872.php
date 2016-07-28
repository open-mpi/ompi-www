<?
$subject_val = "[OMPI users] mpirun/mpiexec requires su";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 13:19:56 2015" -->
<!-- isoreceived="20151015171956" -->
<!-- sent="Thu, 15 Oct 2015 13:19:53 -0400" -->
<!-- isosent="20151015171953" -->
<!-- name="Brant Abbott" -->
<!-- email="abbottbrant_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun/mpiexec requires su" -->
<!-- id="CALzow4ohM76LCh57SB5xt5epBoemgwHSMMwELCJzi4o7SQKjww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun/mpiexec requires su<br>
<strong>From:</strong> Brant Abbott (<em>abbottbrant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 13:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27873.php">Surivinta Surivinta: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27871.php">Zhi Zhang: "[OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27873.php">Surivinta Surivinta: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Reply:</strong> <a href="27873.php">Surivinta Surivinta: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Reply:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've installed openmpi on a workstation running Ubuntu 14.04.3 LTS.
<br>
<p>Logged in as root I can compile using mpif90 and run the programs using
<br>
mpirun. Logged in as a regular user I can compile using mpif90, but cannot
<br>
run the programs using mpirun (or mpiexec). The error messages are:
<br>
<p>brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpif90
<br>
hello_usempi.f90 -o mainmpi
<br>
brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpirun -np 2 mainmpi
<br>
/opt/intel/composer_xe_2013.2.146/mpirt/bin/intel64/mpirun: 96: .: Can't
<br>
open /opt/intel/composer_xe_2013.2.146/mpirt/bin/intel64/mpivars.sh
<br>
brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ mpiexec -np 2 mainmpi
<br>
mpiexec_rust: cannot connect to local mpd (/tmp/mpd2.console_brant.abbott);
<br>
possible causes:
<br>
&nbsp;&nbsp;1. no mpd is running on this host
<br>
&nbsp;&nbsp;2. an mpd is running but was started without a &quot;console&quot; (-n option)
<br>
<p><p>However logged in as root:
<br>
<p>brant.abbott_at_rust:~/Downloads/openmpi-1.10.0/examples$ su
<br>
Password:
<br>
root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples# mpirun -np
<br>
4 mainmpi
<br>
Hello, world, I am  1 of  4:
<br>
Hello, world, I am  2 of  4:
<br>
Hello, world, I am  0 of  4:
<br>
Hello, world, I am  3 of  4:
<br>
root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples# mpiexec -np
<br>
4 mainmpi
<br>
Hello, world, I am  0 of  4:
<br>
Hello, world, I am  1 of  4:
<br>
Hello, world, I am  2 of  4:
<br>
Hello, world, I am  3 of  4:
<br>
root_at_rust:/home/brant.abbott/Downloads/openmpi-1.10.0/examples#
<br>
<p><p>I saw this thread:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/03/12291.php">http://www.open-mpi.org/community/lists/users/2010/03/12291.php</a>
<br>
<p>and tried reinstalling using
<br>
<p>./configure --prefix=/usr/local --disable-pty-support
<br>
<p>at the appropriate step. However, I still have the problem.
<br>
<p>Does anyone know the solution?
<br>
<p>Many Thanks!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27873.php">Surivinta Surivinta: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27871.php">Zhi Zhang: "[OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27873.php">Surivinta Surivinta: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Reply:</strong> <a href="27873.php">Surivinta Surivinta: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Reply:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
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
