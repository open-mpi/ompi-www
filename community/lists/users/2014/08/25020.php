<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 10:10:15 2014" -->
<!-- isoreceived="20140814141015" -->
<!-- sent="Thu, 14 Aug 2014 10:10:17 -0400" -->
<!-- isosent="20140814141017" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="53ECC349.3080508_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="433E2E4D-4C98-4822-9BEB-11A6C5ACF941_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running a hybrid MPI+openMP program<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 10:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25021.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25019.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
You DEFINITELY need to disable OpenMPI's new default binding. Otherwise, 
<br>
your N threads will run on a single core. --bind-to socket would be my 
<br>
recommendation for hybrid jobs.
<br>
<p>Maxime
<br>
<p><p>Le 2014-08-14 10:04, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; I don't know much about OpenMP, but do you need to disable Open MPI's default bind-to-core functionality (I'm assuming you're using Open MPI 1.8.x)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can try &quot;mpirun --bind-to none ...&quot;, which will have Open MPI not bind MPI processes to cores, which might allow OpenMP to think that it can use all the cores, and therefore it will spawn num_cores threads...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 14, 2014, at 9:50 AM, Oscar Mojica &lt;o_mojical_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello everybody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run a hybrid mpi + openmp program in a cluster.  I created a queue with 14 machines, each one with 16 cores. The program divides the work among the 14 processors with MPI and within each processor a loop is also divided into 8 threads for example, using openmp. The problem is that when I submit the job to the queue the MPI processes don't divide the work into threads and the program prints the number of threads  that are working within each process as one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I made a simple test program that uses openmp and  I logged in one machine of the fourteen. I compiled it using gfortran -fopenmp program.f -o exe,  set the OMP_NUM_THREADS environment variable equal to 8  and when I ran directly in the terminal the loop was effectively divided among the cores and for example in this case the program printed the number of threads equal to 8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is my Makefile
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; # Start of the makefile
</span><br>
<span class="quotelev2">&gt;&gt; # Defining variables
</span><br>
<span class="quotelev2">&gt;&gt; objects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o
</span><br>
<span class="quotelev2">&gt;&gt; #f90comp = /opt/openmpi/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt; f90comp = /usr/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt; #switch = -O3
</span><br>
<span class="quotelev2">&gt;&gt; executable = inverse.exe
</span><br>
<span class="quotelev2">&gt;&gt; # Makefile
</span><br>
<span class="quotelev2">&gt;&gt; all : $(executable)
</span><br>
<span class="quotelev2">&gt;&gt; $(executable) : $(objects)	
</span><br>
<span class="quotelev2">&gt;&gt; 	$(f90comp) -fopenmp -g -O -o $(executable) $(objects)
</span><br>
<span class="quotelev2">&gt;&gt; 	rm $(objects)
</span><br>
<span class="quotelev2">&gt;&gt; %.o: %.f
</span><br>
<span class="quotelev2">&gt;&gt; 	$(f90comp) -c $&lt;
</span><br>
<span class="quotelev2">&gt;&gt; # Cleaning everything
</span><br>
<span class="quotelev2">&gt;&gt; clean:
</span><br>
<span class="quotelev2">&gt;&gt; 	rm $(executable)
</span><br>
<span class="quotelev2">&gt;&gt; #	rm $(objects)
</span><br>
<span class="quotelev2">&gt;&gt; # End of the makefile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the script that i am using is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -j y
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 14
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N job
</span><br>
<span class="quotelev2">&gt;&gt; #$ -q new.q
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; am I forgetting something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev2">&gt;&gt; Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25016.php">http://www.open-mpi.org/community/lists/users/2014/08/25016.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25021.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25019.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
