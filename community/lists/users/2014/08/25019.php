<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 10:07:17 2014" -->
<!-- isoreceived="20140814140717" -->
<!-- sent="Thu, 14 Aug 2014 16:07:08 +0200" -->
<!-- isosent="20140814140708" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="ED2FC2C3-3B93-4674-8F83-BC4CDBA44D6E_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 10:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25016.php">Oscar Mojica: "[OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 14.08.2014 um 15:50 schrieb Oscar Mojica:
<br>
<p><span class="quotelev1">&gt; I am trying to run a hybrid mpi + openmp program in a cluster.  I created a queue with 14 machines, each one with 16 cores. The program divides the work among the 14 processors with MPI and within each processor a loop is also divided into 8 threads for example, using openmp. The problem is that when I submit the job to the queue the MPI processes don't divide the work into threads and the program prints the number of threads  that are working within each process as one. 
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
<p>What is the output of `qconf -sp orte`?
<br>
<p><p><span class="quotelev1">&gt; #$ -N job
</span><br>
<span class="quotelev1">&gt; #$ -q new.q
</span><br>
<p>Looks like you are using SGE The installed Open MPI was compiled with &quot;--with-sge&quot; to achieve a Tight Integration*, and the processes are distributed to all machines correctly (disregarding the thread issue here, just a plain MPI job)?
<br>
<p>There is also to note, that in either case the generated $PE_HOSTFILE needs to be adjusted, as you have to request 14 times 8 cores in total for your computation to avoid that SGE will oversubscribe the machines.
<br>
<p>-- Reuti
<br>
<p>* This will also forward the environment variables to the slave machines. Without the Tight Integration there is the option &quot;-x OMP_NUM_THREADS&quot; to `mpirun` in Open MPI.
<br>
<p><p><span class="quotelev1">&gt; export OMP_NUM_THREADS=8
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25016.php">Oscar Mojica: "[OMPI users] Running a hybrid MPI+openMP program"</a>
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
