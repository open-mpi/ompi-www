<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 17:54:34 2014" -->
<!-- isoreceived="20140814215434" -->
<!-- sent="Thu, 14 Aug 2014 23:54:22 +0200" -->
<!-- isosent="20140814215422" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="A29534B2-1DF0-4FED-A2F7-23BB71F51F2C_at_staff.uni-marburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU177-W50A72F3C137F10487ACCE290E80_at_phx.gbl" -->
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
<strong>Date:</strong> 2014-08-14 17:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25035.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25037.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25037.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think this is a broader issue in case an MPI library is used in conjunction with threads while running inside a queuing system. First: whether your actual installation of Open MPI is SGE-aware you can check with:
<br>
<p>$ ompi_info | grep grid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
<br>
<p>Then we can look at the definition of your PE: &quot;allocation_rule    $fill_up&quot;. This means that SGE will grant you 14 slots in total in any combination on the available machines, means 8+4+2 slots allocation is an allowed combination like 4+4+3+3 and so on. Depending on the SGE-awareness it's a question: will your application just start processes on all nodes and completely disregard the granted allocation, or as the other extreme does it stays on one and the same machine for all started processes? On the master node of the parallel job you can issue:
<br>
<p>$ ps -e f
<br>
<p>(f w/o -) to have a look whether `ssh` or `qrsh -inhert ...` is used to reach other machines and their requested process count.
<br>
<p><p>Now to the common problem in such a set up:
<br>
<p>AFAICS: for now there is no way in the Open MPI + SGE combination to specify the number of MPI processes and intended number of threads which are automatically read by Open MPI while staying inside the granted slot count and allocation. So it seems to be necessary to have the intended number of threads being honored by Open MPI too.
<br>
<p>Hence specifying e.g. &quot;allocation_rule 8&quot; in such a setup while requesting 32 processes, would for now start 32 processes by MPI already, as Open MP reads the $PE_HOSTFILE and acts accordingly.
<br>
<p>Open MPI would have to read the generated machine file in a slightly different way regarding threads: a) read the $PE_HOSTFILE, b) divide the granted slots per machine by OMP_NUM_THREADS, c) throw an error in case it's not divisible by OMP_NUM_THREADS. Then start one process per quotient.
<br>
<p>Would this work for you?
<br>
<p>-- Reuti
<br>
<p>PS: This would also mean to have a couple of PEs in SGE having a fixed &quot;allocation_rule&quot;. While this works right now, an extension in SGE could be &quot;$fill_up_omp&quot;/&quot;$round_robin_omp&quot; and using  OMP_NUM_THREADS there too, hence it must not be specified as an `export` in the job script but either on the command line or inside the job script in #$ lines as job requests. This would mean to collect slots in bunches of OMP_NUM_THREADS on each machine to reach the overall specified slot count. Whether OMP_NUM_THREADS or n times OMP_NUM_THREADS is allowed per machine needs to be discussed.
<br>
&nbsp;
<br>
PS2: As Univa SGE can also supply a list of granted cores in the $PE_HOSTFILE, it would be an extension to feed this to Open MPI to allow any UGE aware binding.
<br>
<p><p>Am 14.08.2014 um 21:52 schrieb Oscar Mojica:
<br>
<p><span class="quotelev1">&gt; Guys
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I changed the line to run the program in the script with both options
</span><br>
<span class="quotelev1">&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-none -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev1">&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-socket -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I got the same results. When I use man mpirun appears:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        -bind-to-none, --bind-to-none
</span><br>
<span class="quotelev1">&gt;               Do not bind processes.  (Default.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the output of 'qconf -sp orte' is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pe_name            orte
</span><br>
<span class="quotelev1">&gt; slots              9999
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if the installed Open MPI was compiled with '--with-sge'. How can i know that?
</span><br>
<span class="quotelev1">&gt; before to think in an hybrid application i was using only MPI and the program used few processors (14). The cluster possesses 28 machines, 15 with 16 cores and 13 with 8 cores totalizing 344 units of processing. When I submitted the job (only MPI), the MPI processes were spread to the cores directly, for that reason I created a new queue with 14 machines trying to gain more time.  the results were the same in both cases. In the last case i could prove that the processes were distributed to all machines correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I must to do?
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev1">&gt; Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 14 Aug 2014 10:10:17 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; You DEFINITELY need to disable OpenMPI's new default binding. Otherwise, 
</span><br>
<span class="quotelev2">&gt; &gt; your N threads will run on a single core. --bind-to socket would be my 
</span><br>
<span class="quotelev2">&gt; &gt; recommendation for hybrid jobs.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Maxime
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le 2014-08-14 10:04, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don't know much about OpenMP, but do you need to disable Open MPI's default bind-to-core functionality (I'm assuming you're using Open MPI 1.8.x)?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You can try &quot;mpirun --bind-to none ...&quot;, which will have Open MPI not bind MPI processes to cores, which might allow OpenMP to think that it can use all the cores, and therefore it will spawn num_cores threads...?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 14, 2014, at 9:50 AM, Oscar Mojica &lt;o_mojical_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hello everybody
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am trying to run a hybrid mpi + openmp program in a cluster. I created a queue with 14 machines, each one with 16 cores. The program divides the work among the 14 processors with MPI and within each processor a loop is also divided into 8 threads for example, using openmp. The problem is that when I submit the job to the queue the MPI processes don't divide the work into threads and the program prints the number of threads that are working within each process as one.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I made a simple test program that uses openmp and I logged in one machine of the fourteen. I compiled it using gfortran -fopenmp program.f -o exe, set the OMP_NUM_THREADS environment variable equal to 8 and when I ran directly in the terminal the loop was effectively divided among the cores and for example in this case the program printed the number of threads equal to 8
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; This is my Makefile
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # Start of the makefile
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # Defining variables
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; objects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #f90comp = /opt/openmpi/bin/mpif90
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; f90comp = /usr/bin/mpif90
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #switch = -O3
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; executable = inverse.exe
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # Makefile
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; all : $(executable)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $(executable) : $(objects)	
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $(f90comp) -fopenmp -g -O -o $(executable) $(objects)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; rm $(objects)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; %.o: %.f
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $(f90comp) -c $&lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # Cleaning everything
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; clean:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; rm $(executable)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #	rm $(objects)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # End of the makefile
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and the script that i am using is
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #$ -cwd
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #$ -j y
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #$ -pe orte 14
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #$ -N job
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #$ -q new.q
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; am I forgetting something?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25016.php">http://www.open-mpi.org/community/lists/users/2014/08/25016.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt; &gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev2">&gt; &gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25020.php">http://www.open-mpi.org/community/lists/users/2014/08/25020.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25032.php">http://www.open-mpi.org/community/lists/users/2014/08/25032.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25035.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25037.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25037.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
