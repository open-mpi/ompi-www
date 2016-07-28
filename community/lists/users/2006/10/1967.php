<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 06:06:58 2006" -->
<!-- isoreceived="20061012100658" -->
<!-- sent="Thu, 12 Oct 2006 12:06:51 +0200" -->
<!-- isosent="20061012100651" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS problem with OpenMP- only one processor used" -->
<!-- id="269F3D74-80CB-4739-8018-5D88CE96601F_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="678498360610120052h7cd2519bsff88c9f1e251ba0b_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 06:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1966.php">amane001: "[OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>In reply to:</strong> <a href="1966.php">amane001: "[OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Reply:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 12.10.2006 um 09:52 schrieb amane001:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently switched to OpenMP from LAM-MPI for my code. I'm trying  
</span><br>
<span class="quotelev1">&gt; to run my test code with a PBS scheduler on our local cluster. The  
</span><br>
<span class="quotelev1">&gt; PBS script is shown below. When the job is executed however, only  
</span><br>
<span class="quotelev1">&gt; one CPU is used for running the test.exe. Another more confusing  
</span><br>
<span class="quotelev1">&gt; aspect is the fact that the following three lines highlighted in  
</span><br>
<span class="quotelev1">&gt; the code below. Even if I set the OMP_NUM_THREADS = 2, the print  
</span><br>
<span class="quotelev1">&gt; statement in the next line says it's value is 1.
</span><br>
<p>is it your intention to mix OpenMPI and OpenMP? Which compilation  
<br>
flags did you use for OpenMPI?
<br>
<p><span class="quotelev1">&gt; Any ideas where I could be going wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you all for your help in advance!
</span><br>
<span class="quotelev1">&gt; ~Amane
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -e job.err
</span><br>
<span class="quotelev1">&gt; #PBS -o job.log
</span><br>
<span class="quotelev1">&gt; #PBS -m ae
</span><br>
<span class="quotelev1">&gt; #PBS -q debug
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; ##################################################
</span><br>
<span class="quotelev1">&gt; setenv OMP_NUM_THREADS 2
</span><br>
<p>setenv is csh, you are using (ba)sh.
<br>
<p>export OMP_NUM_THREADS=2
<br>
<p>but most likely you won't need it at all.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; echo I hope you find the correct number of processors
</span><br>
<span class="quotelev1">&gt; echo $OMP_NUM_THREADS
</span><br>
<span class="quotelev1">&gt; ##################################################
</span><br>
<span class="quotelev1">&gt; ######### above 3 lines produce the following output --
</span><br>
<span class="quotelev1">&gt; # I hope you find the correct number of processors
</span><br>
<span class="quotelev1">&gt; # 1
</span><br>
<span class="quotelev1">&gt; ##################################################
</span><br>
<span class="quotelev1">&gt; /usr/local/openmp-1.1.1/bin/mpirun -np 2 ../source/test.exe  &lt;  
</span><br>
<span class="quotelev1">&gt; input.dat&gt;Output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1966.php">amane001: "[OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>In reply to:</strong> <a href="1966.php">amane001: "[OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Reply:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
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
