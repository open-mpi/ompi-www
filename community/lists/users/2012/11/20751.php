<?
$subject_val = "[OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 23 13:45:41 2012" -->
<!-- isoreceived="20121123184541" -->
<!-- sent="Fri, 23 Nov 2012 15:45:37 -0300" -->
<!-- isosent="20121123184537" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] configuration openMPI problem" -->
<!-- id="CAG8o1y72n=nKBgymhQPKhhCuCnc3DJ7vX+QO-WDkdFaXV8fRow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] configuration openMPI problem<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-23 13:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20752.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20750.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20752.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20752.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear all,
<br>
I am new in openMPI world and in general in parallelization. I have some
<br>
problem with configuration of openMPI in my laptop.
<br>
I have read your FAQ and I tried to google the problem but I was not able
<br>
to solve it.
<br>
The problem is:
<br>
<p>I have downloaded the openmpi-1.6.3, unpacked it
<br>
Then I have installed on my pc intel icc and icpc.
<br>
when I run:
<br>
./configure CC=icc CXX=icpc F77=ifort FC=ifort
<br>
<p>I get:
<br>
<p>*** Startup tests
<br>
checking build system type... x86_64-unknown-linux-gnu
<br>
checking host system type... x86_64-unknown-linux-gnu
<br>
checking target system type... x86_64-unknown-linux-gnu
<br>
checking for gcc... icc
<br>
checking whether the C compiler works... no
<br>
configure: error: in `/home/diedro/Downloads/openmpi-1.6.3':
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log' for more details
<br>
diedro_at_diedro-Latitude-E6420:~/Desktop/Downloads/openmpi-1.6.3$
<br>
<p>I do no understand why. I did a simple hello project with icc and it works.
<br>
(in attachment you can fiend the config.log)
<br>
<p>Really thanks for any help.
<br>
<p><p>Diego
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20751/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20752.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20750.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20752.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20752.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
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
