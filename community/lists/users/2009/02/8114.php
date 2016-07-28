<?
$subject_val = "[OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 12:05:12 2009" -->
<!-- isoreceived="20090219170512" -->
<!-- sent="Thu, 19 Feb 2009 18:05:04 +0100" -->
<!-- isosent="20090219170504" -->
<!-- name="Abderezak MEKFOULDJI" -->
<!-- email="amekfouldji_at_[hidden]" -->
<!-- subject="[OMPI users] probl&amp;#232;me d'ex&amp;#233;cution d'open-mpi sur un cluster de test" -->
<!-- id="2596aa220902190905q72019918jc02f1f940cd44fa0_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2596aa220902181006w5174a028q2d04cd62e6d21597_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test<br>
<strong>From:</strong> Abderezak MEKFOULDJI (<em>amekfouldji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 12:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8115.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8113.php">Jim Kusznir: "[OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8116.php">jody: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>Reply:</strong> <a href="8116.php">jody: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>Reply:</strong> <a href="8118.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour,
<br>
mon cluster est compos&#233; (pour l'instant) de 2 machines amd64 contenant le
<br>
syst&#232;me debian 2.6 &quot;version etch&quot;, le compilateur fortran d'intel(ifort) et
<br>
l'outil Open-mpi 1.3.
<br>
La connexion entre les 2 h&#244;tes est bien &#233;tablie et s&#233;curis&#233;e gr&#226;ce &#224; ssh.
<br>
Sachant que j'ai mis le r&#233;pertoire &quot;openmpi-1.3&quot; -qui contient les fichiers
<br>
d'installation- sous opt avant de l'installer. Apr&#232;s la compilation avec
<br>
&quot;mpif&quot; du code d'essai et l'ex&#233;cution, j'obtient le message suivant:
<br>
<p>==================================================
<br>
debian1:/home/toto/Desktop# mpirun --prefix /opt/openmpi-1.3 -np 2 ./a.out
<br>
root_at_debian1's password:
<br>
bash: /opt/openmpi-1.3/bin/orted: No such file or directory
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 11250) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
===================================================
<br>
<p>Pour &#234;tre plus clair, vous trouverez ci-joints:
<br>
* le contenu du &quot;bash.bashrc&quot; comprenant la d&#233;claration des variables du
<br>
compilateur et du wrapper,
<br>
* le code  &#224; tester &quot;essai2.f90&quot;,
<br>
* la proc&#233;dure que j'ai suivi pour configurer open-mpi
<br>
<p>Cordialement
<br>
Abderezak
<br>
stagiaire de master r&#233;seaux et syst&#232;me au lpmtm/CNRS
<br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8114/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8114/bash.txt">bash.txt</a>
</ul>
<!-- attachment="bash.txt" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8114/essai2.f90">essai2.f90</a>
</ul>
<!-- attachment="essai2.f90" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8114/procedure_openmpi.txt">procedure_openmpi.txt</a>
</ul>
<!-- attachment="procedure_openmpi.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8115.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8113.php">Jim Kusznir: "[OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8116.php">jody: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>Reply:</strong> <a href="8116.php">jody: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>Reply:</strong> <a href="8118.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
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
