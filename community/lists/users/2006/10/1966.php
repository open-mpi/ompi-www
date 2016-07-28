<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 03:52:07 2006" -->
<!-- isoreceived="20061012075207" -->
<!-- sent="Thu, 12 Oct 2006 09:52:02 +0200" -->
<!-- isosent="20061012075202" -->
<!-- name="amane001" -->
<!-- email="amane001_at_[hidden]" -->
<!-- subject="[OMPI users] PBS problem with OpenMP- only one processor used" -->
<!-- id="678498360610120052h7cd2519bsff88c9f1e251ba0b_at_mail.gmail.com" -->
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
<strong>From:</strong> amane001 (<em>amane001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 03:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1965.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Reply:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I recently switched to OpenMP from LAM-MPI for my code. I'm trying to run my
<br>
test code with a PBS scheduler on our local cluster. The PBS script is shown
<br>
below. When the job is executed however, only one CPU is used for running
<br>
the test.exe. Another more confusing aspect is the fact that the following
<br>
three lines highlighted in the code below. Even if I set the OMP_NUM_THREADS
<br>
= 2, the print statement in the next line says it's value is 1.
<br>
<p>Any ideas where I could be going wrong?
<br>
<p>Thank you all for your help in advance!
<br>
~Amane
<br>
<p>#!/bin/sh
<br>
<p>#PBS -e job.err
<br>
#PBS -o job.log
<br>
#PBS -m ae
<br>
#PBS -q debug
<br>
#PBS -l nodes=2
<br>
<p><p>cd $PBS_O_WORKDIR
<br>
##################################################
<br>
setenv OMP_NUM_THREADS 2
<br>
echo I hope you find the correct number of processors
<br>
echo $OMP_NUM_THREADS
<br>
##################################################
<br>
######### above 3 lines produce the following output --
<br>
# I hope you find the correct number of processors
<br>
# 1
<br>
##################################################
<br>
/usr/local/openmp-1.1.1/bin/mpirun -np 2 ../source/test.exe  &lt; input.dat
<br>
<span class="quotelev1">&gt;Output
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1965.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Reply:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
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
