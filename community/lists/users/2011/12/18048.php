<?
$subject_val = "[OMPI users] over-subscription of cores";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 23 14:42:58 2011" -->
<!-- isoreceived="20111223194258" -->
<!-- sent="Sat, 24 Dec 2011 01:12:32 +0530" -->
<!-- isosent="20111223194232" -->
<!-- name="Santosh Ansumali" -->
<!-- email="ansumali_at_[hidden]" -->
<!-- subject="[OMPI users] over-subscription of cores" -->
<!-- id="CAJd+HkNZJrALZpusZywkghu31T+NuVWY0vbtfvEjnT46VZLUhA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] over-subscription of cores<br>
<strong>From:</strong> Santosh Ansumali (<em>ansumali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-23 14:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18047.php">Eric Feng: "[OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Dear All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are running a PDE solver which is memory bound. Due to
<br>
cache related issue,   smaller  number of grid point per core leads to
<br>
better performance for this code.  Thus, though available memory per
<br>
core is more than 2 GB, we are able to good  performance   by using
<br>
less than 1 GB per core.
<br>
<p>&nbsp;I want to know whether oversubscribing the cores can potentially
<br>
improve performance of such a code.  My thinking is that if I
<br>
oversubscribe the cores,  each thread will be using less than 1 GB so
<br>
cache related problems will be less severe.  Is this logic correct or
<br>
due to cache conflict performance will deteriorate further?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In case, over-subscription can help, how shall I modify
<br>
submission file (using sun grid engine) to enable over-subscription of
<br>
cores?
<br>
my current submission file is written as follows
<br>
#!/bin/bash
<br>
#$ -N first
<br>
#$ -S /bin/bash
<br>
#$ -cwd
<br>
#$ -e $JOB_ID.$JOB_NAME.ERROR
<br>
#$ -o $JOB_ID.$JOB_NAME.OUTPUT
<br>
#$ -P faculty_prj
<br>
#$ -p 0
<br>
#$ -pe orte 8
<br>
/opt/mpi/openmpi/1.3.3/gnu/bin/mpirun -np $NSLOTS ./test_vel.out
<br>
<p>Is it possible to allow over-subscription by modifying submission file
<br>
itself?  Or do I need to change hostfiles somehow?
<br>
Thanks for your help!
<br>
Best Regards
<br>
Santosh Ansumali,
<br>
Faculty Fellow,
<br>
Engineering Mechanics Unit
<br>
Jawaharlal Nehru Centre for Advanced Scientific Research (JNCASR)
<br>
&#160;Jakkur, Bangalore-560 064, India
<br>
Tel: + 91 80 22082938
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18047.php">Eric Feng: "[OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18049.php">Gustavo Correa: "Re: [OMPI users] over-subscription of cores"</a>
<li><strong>Reply:</strong> <a href="18052.php">Matthieu Brucher: "Re: [OMPI users] over-subscription of cores"</a>
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
