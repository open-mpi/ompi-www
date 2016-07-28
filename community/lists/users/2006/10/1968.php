<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 08:23:58 2006" -->
<!-- isoreceived="20061012122358" -->
<!-- sent="Thu, 12 Oct 2006 14:23:53 +0200" -->
<!-- isosent="20061012122353" -->
<!-- name="amane001" -->
<!-- email="amane001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS problem with OpenMP- only one processor used" -->
<!-- id="678498360610120523p355e5133sc9044e3a90aaebab_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="269F3D74-80CB-4739-8018-5D88CE96601F_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2006-10-12 08:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1969.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>In reply to:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1971.php">Michael Kluskens: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Reply:</strong> <a href="1971.php">Michael Kluskens: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Reply:</strong> <a href="1981.php">Jeff Squyres: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply. I actually meant OpenMPI (from open-mpi.org) and I
<br>
have compiled that using
<br>
<p>./configure FC=ifort F77=ifort F90=ifort --prefix=$OPENMP_DIR
<br>
<p>I may be asking some dumb questions here, but I'm really a beginner to
<br>
please bear with me.
<br>
<p>~Amane
<br>
<p><p>On 10/12/06, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 12.10.2006 um 09:52 schrieb amane001:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently switched to OpenMP from LAM-MPI for my code. I'm trying
</span><br>
<span class="quotelev2">&gt; &gt; to run my test code with a PBS scheduler on our local cluster. The
</span><br>
<span class="quotelev2">&gt; &gt; PBS script is shown below. When the job is executed however, only
</span><br>
<span class="quotelev2">&gt; &gt; one CPU is used for running the test.exe. Another more confusing
</span><br>
<span class="quotelev2">&gt; &gt; aspect is the fact that the following three lines highlighted in
</span><br>
<span class="quotelev2">&gt; &gt; the code below. Even if I set the OMP_NUM_THREADS = 2, the print
</span><br>
<span class="quotelev2">&gt; &gt; statement in the next line says it's value is 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is it your intention to mix OpenMPI and OpenMP? Which compilation
</span><br>
<span class="quotelev1">&gt; flags did you use for OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas where I could be going wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you all for your help in advance!
</span><br>
<span class="quotelev2">&gt; &gt; ~Amane
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -e job.err
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -o job.log
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -m ae
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -q debug
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l nodes=2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt; ##################################################
</span><br>
<span class="quotelev2">&gt; &gt; setenv OMP_NUM_THREADS 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv is csh, you are using (ba)sh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but most likely you won't need it at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo I hope you find the correct number of processors
</span><br>
<span class="quotelev2">&gt; &gt; echo $OMP_NUM_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; ##################################################
</span><br>
<span class="quotelev2">&gt; &gt; ######### above 3 lines produce the following output --
</span><br>
<span class="quotelev2">&gt; &gt; # I hope you find the correct number of processors
</span><br>
<span class="quotelev2">&gt; &gt; # 1
</span><br>
<span class="quotelev2">&gt; &gt; ##################################################
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmp-1.1.1/bin/mpirun -np 2 ../source/test.exe  &lt;
</span><br>
<span class="quotelev2">&gt; &gt; input.dat&gt;Output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1969.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>In reply to:</strong> <a href="1967.php">Reuti: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1971.php">Michael Kluskens: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Reply:</strong> <a href="1971.php">Michael Kluskens: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Reply:</strong> <a href="1981.php">Jeff Squyres: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
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
