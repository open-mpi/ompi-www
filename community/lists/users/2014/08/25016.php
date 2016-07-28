<?
$subject_val = "[OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 09:50:43 2014" -->
<!-- isoreceived="20140814135043" -->
<!-- sent="Thu, 14 Aug 2014 08:50:42 -0500" -->
<!-- isosent="20140814135042" -->
<!-- name="Oscar Mojica" -->
<!-- email="o_mojical_at_[hidden]" -->
<!-- subject="[OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="BLU177-W39A5D7470F0B1E2D13FF1B90E80_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Running a hybrid MPI+openMP program<br>
<strong>From:</strong> Oscar Mojica (<em>o_mojical_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 09:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25015.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25019.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody
<br>
I am trying to run a hybrid mpi + openmp program in a cluster.  I created a queue with 14 machines, each one with 16 cores. The program divides the work among the 14 processors with MPI and within each processor a loop is also divided into 8 threads for example, using openmp. The problem is that when I submit the job to the queue the MPI processes don't divide the work into threads and the program prints the number of threads  that are working within each process as one. 
<br>
I made a simple test program that uses openmp and  I logged in one machine of the fourteen. I compiled it using gfortran -fopenmp program.f -o exe,  set the OMP_NUM_THREADS environment variable equal to 8  and when I ran directly in the terminal the loop was effectively divided among the cores and for example in this case the program printed the number of threads equal to 8
<br>
This is my Makefile # Start of the makefile# Defining variablesobjects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o#f90comp = /opt/openmpi/bin/mpif90f90comp = /usr/bin/mpif90#switch = -O3executable = inverse.exe# Makefileall : $(executable)$(executable) : $(objects)		$(f90comp) -fopenmp -g -O -o $(executable) $(objects)	rm $(objects)%.o: %.f	$(f90comp) -c $&lt;# Cleaning everythingclean:	rm $(executable) #	rm $(objects)# End of the makefile
<br>
and the script that i am using is 
<br>
#!/bin/bash#$ -cwd#$ -j y#$ -S /bin/bash#$ -pe orte 14#$ -N job#$ -q new.q
<br>
export OMP_NUM_THREADS=8/usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np $NSLOTS ./inverse.exe 
<br>
am I forgetting something?
<br>
Thanks,
<br>
Oscar Fabian Mojica Ladino
<br>
Geologist M.S. in  Geophysics
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25016/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25015.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25019.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
