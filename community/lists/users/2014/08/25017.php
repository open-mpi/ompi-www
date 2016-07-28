<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 10:04:14 2014" -->
<!-- isoreceived="20140814140414" -->
<!-- sent="Thu, 14 Aug 2014 14:04:12 +0000" -->
<!-- isosent="20140814140412" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="433E2E4D-4C98-4822-9BEB-11A6C5ACF941_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU177-W39A5D7470F0B1E2D13FF1B90E80_at_phx.gbl" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 10:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25016.php">Oscar Mojica: "[OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25016.php">Oscar Mojica: "[OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know much about OpenMP, but do you need to disable Open MPI's default bind-to-core functionality (I'm assuming you're using Open MPI 1.8.x)?
<br>
<p>You can try &quot;mpirun --bind-to none ...&quot;, which will have Open MPI not bind MPI processes to cores, which might allow OpenMP to think that it can use all the cores, and therefore it will spawn num_cores threads...?
<br>
<p><p>On Aug 14, 2014, at 9:50 AM, Oscar Mojica &lt;o_mojical_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello everybody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a hybrid mpi + openmp program in a cluster.  I created a queue with 14 machines, each one with 16 cores. The program divides the work among the 14 processors with MPI and within each processor a loop is also divided into 8 threads for example, using openmp. The problem is that when I submit the job to the queue the MPI processes don't divide the work into threads and the program prints the number of threads  that are working within each process as one. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made a simple test program that uses openmp and  I logged in one machine of the fourteen. I compiled it using gfortran -fopenmp program.f -o exe,  set the OMP_NUM_THREADS environment variable equal to 8  and when I ran directly in the terminal the loop was effectively divided among the cores and for example in this case the program printed the number of threads equal to 8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is my Makefile
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; # Start of the makefile
</span><br>
<span class="quotelev1">&gt; # Defining variables
</span><br>
<span class="quotelev1">&gt; objects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o
</span><br>
<span class="quotelev1">&gt; #f90comp = /opt/openmpi/bin/mpif90
</span><br>
<span class="quotelev1">&gt; f90comp = /usr/bin/mpif90
</span><br>
<span class="quotelev1">&gt; #switch = -O3
</span><br>
<span class="quotelev1">&gt; executable = inverse.exe
</span><br>
<span class="quotelev1">&gt; # Makefile
</span><br>
<span class="quotelev1">&gt; all : $(executable)
</span><br>
<span class="quotelev1">&gt; $(executable) : $(objects)	
</span><br>
<span class="quotelev1">&gt; 	$(f90comp) -fopenmp -g -O -o $(executable) $(objects)
</span><br>
<span class="quotelev1">&gt; 	rm $(objects)
</span><br>
<span class="quotelev1">&gt; %.o: %.f
</span><br>
<span class="quotelev1">&gt; 	$(f90comp) -c $&lt;
</span><br>
<span class="quotelev1">&gt; # Cleaning everything
</span><br>
<span class="quotelev1">&gt; clean:
</span><br>
<span class="quotelev1">&gt; 	rm $(executable) 
</span><br>
<span class="quotelev1">&gt; #	rm $(objects)
</span><br>
<span class="quotelev1">&gt; # End of the makefile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the script that i am using is 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 14
</span><br>
<span class="quotelev1">&gt; #$ -N job
</span><br>
<span class="quotelev1">&gt; #$ -q new.q
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev1">&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np $NSLOTS ./inverse.exe 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; am I forgetting something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev1">&gt; Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25016.php">http://www.open-mpi.org/community/lists/users/2014/08/25016.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25016.php">Oscar Mojica: "[OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25016.php">Oscar Mojica: "[OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
