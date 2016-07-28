<?
$subject_val = "Re: [OMPI users] [gridengine users] h_vmem in jobs with mixture of openmpi and openmp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 17:26:22 2012" -->
<!-- isoreceived="20120906212622" -->
<!-- sent="Thu, 6 Sep 2012 23:26:13 +0200" -->
<!-- isosent="20120906212613" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [gridengine users] h_vmem in jobs with mixture of openmpi and openmp" -->
<!-- id="5F714970-7744-439E-8204-04142A483F0C_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50488729.40906_at_mpi-halle.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [gridengine users] h_vmem in jobs with mixture of openmpi and openmp<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 17:26:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 06.09.2012 um 13:21 schrieb Schmidt U.:
<br>
<p><span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; If h_vmem is defined in the script, what sense is then an  additional vf option in the script ? The h_vmem has per default higher value than vf, so it must fit first to let the job run.
</span><br>
<p>If you want to avoid swapping, both should have the same value anyway.
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pe:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pe_name            openmp_6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots              3168
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user_lists         standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation_rule    6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job script:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -N test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -o $JOB_ID.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -e $JOB_ID.err
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -l h_rt=150:00:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -l vf=2.3G
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -l h_vmem=3G
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe openmp_6 72
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMP_NUM_THREADS=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export MKL_NUM_THREADS=($OMP_NUM_THREADS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca btl openib,self -pernode -np 12 /my_mixed_job
</span><br>
<span class="quotelev2">&gt;&gt; With this you will get 12 machines, and on each you can use 6 threads. As all (threads on a machine) will work on the same memory, this shouldn't be a problem. But you are using MKL with $OMP_NUM_THREADS too, which could create locally 36 processes as a result. Therefore I use unthreaded versions of MKL/ACML/ATLAS usually.
</span><br>
<span class="quotelev1">&gt; Thanks for that hint, as a workaround a could check all scripts for MKL_NUM_THREADS and set it to 1 by jsv ?
</span><br>
<p>Yes.
<br>
<p>But you could also try the opposite, i.e. OMP_NUM_THREADS=1 and MKL_NUM_THREADS=$NSLOTS
<br>
<p>Depends of the application what's better.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Udo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://gridengine.org/mailman/listinfo/users">https://gridengine.org/mailman/listinfo/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20147.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
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
