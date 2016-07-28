<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 15:52:03 2014" -->
<!-- isoreceived="20140814195203" -->
<!-- sent="Thu, 14 Aug 2014 14:52:03 -0500" -->
<!-- isosent="20140814195203" -->
<!-- name="Oscar Mojica" -->
<!-- email="o_mojical_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="BLU177-W50A72F3C137F10487ACCE290E80_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53ECC349.3080508_at_calculquebec.ca" -->
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
<strong>From:</strong> Oscar Mojica (<em>o_mojical_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 15:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="25031.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25034.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25034.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys
<br>
<p>I changed the line to run the program in the script with both options
<br>
/usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-none -np $NSLOTS ./inverse.exe
<br>
/usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-socket -np $NSLOTS ./inverse.exe
<br>
<p>but I got the same results. When I use man mpirun appears:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bind-to-none, --bind-to-none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do not bind processes.  (Default.)
<br>
<p>and the output of 'qconf -sp orte' is
<br>
<p>pe_name            orte
<br>
slots              9999
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $fill_up
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary TRUE
<br>
<p>I don't know if the installed Open MPI was compiled with '--with-sge'. How can i know that?
<br>
before to think in an hybrid application i was using only MPI and the program used few processors (14). The cluster possesses 28 machines, 15 with 16 cores and 13 with 8 cores totalizing 344 units of processing. When I submitted the job (only MPI), the MPI processes were spread to the cores directly, for that reason I created a new queue with 14 machines trying to gain more time.  the results were the same in both cases. In the last case i could prove that the processes were distributed to all machines correctly.
<br>
<p>What I must to do?
<br>
Thanks 
<br>
<p>Oscar Fabian Mojica Ladino
<br>
Geologist M.S. in  Geophysics
<br>
<p><p><span class="quotelev1">&gt; Date: Thu, 14 Aug 2014 10:10:17 -0400
</span><br>
<span class="quotelev1">&gt; From: maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; You DEFINITELY need to disable OpenMPI's new default binding. Otherwise, 
</span><br>
<span class="quotelev1">&gt; your N threads will run on a single core. --bind-to socket would be my 
</span><br>
<span class="quotelev1">&gt; recommendation for hybrid jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 2014-08-14 10:04, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I don't know much about OpenMP, but do you need to disable Open MPI's default bind-to-core functionality (I'm assuming you're using Open MPI 1.8.x)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can try &quot;mpirun --bind-to none ...&quot;, which will have Open MPI not bind MPI processes to cores, which might allow OpenMP to think that it can use all the cores, and therefore it will spawn num_cores threads...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 14, 2014, at 9:50 AM, Oscar Mojica &lt;o_mojical_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello everybody
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to run a hybrid mpi + openmp program in a cluster.  I created a queue with 14 machines, each one with 16 cores. The program divides the work among the 14 processors with MPI and within each processor a loop is also divided into 8 threads for example, using openmp. The problem is that when I submit the job to the queue the MPI processes don't divide the work into threads and the program prints the number of threads  that are working within each process as one.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I made a simple test program that uses openmp and  I logged in one machine of the fourteen. I compiled it using gfortran -fopenmp program.f -o exe,  set the OMP_NUM_THREADS environment variable equal to 8  and when I ran directly in the terminal the loop was effectively divided among the cores and for example in this case the program printed the number of threads equal to 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is my Makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # Start of the makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # Defining variables
</span><br>
<span class="quotelev3">&gt; &gt;&gt; objects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #f90comp = /opt/openmpi/bin/mpif90
</span><br>
<span class="quotelev3">&gt; &gt;&gt; f90comp = /usr/bin/mpif90
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #switch = -O3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; executable = inverse.exe
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # Makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all : $(executable)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $(executable) : $(objects)	
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	$(f90comp) -fopenmp -g -O -o $(executable) $(objects)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	rm $(objects)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; %.o: %.f
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	$(f90comp) -c $&lt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # Cleaning everything
</span><br>
<span class="quotelev3">&gt; &gt;&gt; clean:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	rm $(executable)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #	rm $(objects)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # End of the makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and the script that i am using is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #$ -j y
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #$ -pe orte 14
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #$ -N job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #$ -q new.q
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; am I forgetting something?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25016.php">http://www.open-mpi.org/community/lists/users/2014/08/25016.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25020.php">http://www.open-mpi.org/community/lists/users/2014/08/25020.php</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25032/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="25031.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25034.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25034.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
