<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 13:56:59 2014" -->
<!-- isoreceived="20140815175659" -->
<!-- sent="Fri, 15 Aug 2014 12:56:58 -0500" -->
<!-- isosent="20140815175658" -->
<!-- name="Oscar Mojica" -->
<!-- email="o_mojical_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="BLU177-W243B831F60BE69B90A218D90E90_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A29534B2-1DF0-4FED-A2F7-23BB71F51F2C_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2014-08-15 13:56:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25038.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25036.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25034.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25038.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25038.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ReutiYes, my installation of Open MPI is SGE-aware. I got the following[oscar_at_compute-1-2 ~]$ ompi_info | grep grid                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.2)I'm a bit slow and I didn't understand the las part of your message. So i made a test trying to solve my doubts.This is the cluster configuration: There are some machines turned off but that is no problem[oscar_at_aguia free-noise]$ qhostHOSTNAME                ARCH         NCPU  LOAD  MEMTOT  MEMUSE  SWAPTO  SWAPUS-------------------------------------------------------------------------------global                  -               -     -       -       -       -       -compute-1-10            linux-x64      16  0.97   23.6G  558.6M  996.2M     0.0compute-1-11            linux-x64      16     -   23.6G       -  996.2M       -compute-1-12            linux-x64      16  0.97   23.6G  561.1M  996.2M     0.0compute-1-13            linux-x64      16  0.99   23.6G  558.7M  996.2M     0.0compute-1-14            linux-x64      16  1.00   23.6G  555.1M  996.2M     0.0compute-1-15            linux-x64      16  0.97   23.6G  555.5M  996.2M     0.0compute-1-16            linux-x64       8  0.00   15.7G  296.9M 1000.0M     0.0compute-1-17            linux-x64       8  0.00   15.7G  299.4M 1000.0M     0.0compute-1-18            linux-x64       8     -   15.7G       - 1000.0M       -compute-1-19            linux-x64       8     -   15.7G       -  996.2M       -compute-1-2             linux-x64      16  1.19   23.6G  468.1M 1000.0M     0.0compute-1-20            linux-x64       8  0.04   15.7G  297.2M 1000.0M     0.0compute-1-21            linux-x64       8     -   15.7G       - 1000.0M       -compute-1-22            linux-x64       8  0.00   15.7G  297.2M 1000.0M     0.0compute-1-23            linux-x64       8  0.16   15.7G  299.6M 1000.0M     0.0compute-1-24            linux-x64       8  0.00   15.7G  291.5M  996.2M     0.0compute-1-25            linux-x64       8  0.04   15.7G  293.4M  996.2M     0.0compute-1-26            linux-x64       8     -   15.7G       - 1000.0M       -compute-1-27            linux-x64       8  0.00   15.7G  297.0M 1000.0M     0.0compute-1-29            linux-x64       8     -   15.7G       - 1000.0M       -compute-1-3             linux-x64      16     -   23.6G       -  996.2M       -compute-1-30            linux-x64      16     -   23.6G       -  996.2M       -compute-1-4             linux-x64      16  0.97   23.6G  571.6M  996.2M     0.0compute-1-5             linux-x64      16  1.00   23.6G  559.6M  996.2M     0.0compute-1-6             linux-x64      16  0.66   23.6G  403.1M  996.2M     0.0compute-1-7             linux-x64      16  0.95   23.6G  402.7M  996.2M     0.0compute-1-8             linux-x64      16  0.97   23.6G  556.8M  996.2M     0.0compute-1-9             linux-x64      16  1.02   23.6G  566.0M 1000.0M     0.0 I ran my program using only MPI with 10 processors of the queue one.q which has 14 machines (compute-1-2 to compute-1-15). Whit 'qstat -t' I got:[oscar_at_aguia free-noise]$ qstat -tjob-ID  prior   name       user         state submit/start at     queue                          master ja-task-ID task-ID state cpu        mem     io      stat failed -----------------------------------------------------------------------------------------------------------------------------------------------------------------------   2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-2.local        MASTER                        r     00:49:12 554.13753 0.09163                                                                   one.q_at_compute-1-2.local        SLAVE            2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-5.local        SLAVE            1.compute-1-5 r     00:48:53 551.49022 0.09410    2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-9.local        SLAVE            1.compute-1-9 r     00:50:00 564.22764 0.09409    2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-12.local       SLAVE            1.compute-1-12 r     00:47:30 535.30379 0.09379    2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-13.local       SLAVE            1.compute-1-13 r     00:49:51 561.69868 0.09379    2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-14.local       SLAVE            1.compute-1-14 r     00:49:14 554.60818 0.09379    2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-10.local       SLAVE            1.compute-1-10 r     00:49:59 562.95487 0.09349    2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-15.local       SLAVE            1.compute-1-15 r     00:50:01 563.27221 0.09361    2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-8.local        SLAVE            1.compute-1-8 r     00:49:26 556.68431 0.09349    2726 0.50500 job        oscar        r     08/15/2014 12:38:21 one.q_at_compute-1-4.local        SLAVE            1.compute-1-4 r     00:49:27 556.87510 0.04967 I accessed to the MASTER processor with 'ssh compute-1-2.local' , and with $ ps -e f and got this, I'm showing only the last lines   2506 ?        Ss     0:00 /usr/sbin/atd 2548 tty1     Ss+    0:00 /sbin/mingetty /dev/tty1 2550 tty2     Ss+    0:00 /sbin/mingetty /dev/tty2 2552 tty3     Ss+    0:00 /sbin/mingetty /dev/tty3 2554 tty4     Ss+    0:00 /sbin/mingetty /dev/tty4 2556 tty5     Ss+    0:00 /sbin/mingetty /dev/tty5 2558 tty6     Ss+    0:00 /sbin/mingetty /dev/tty6 3325 ?        Sl     0:04 /opt/gridengine/bin/linux-x64/sge_execd17688 ?        S      0:00  \_ sge_shepherd-2726 -bg17695 ?        Ss     0:00      \_ -bash /opt/gridengine/default/spool/compute-1-2/job_scripts/272617797 ?        S      0:00          \_ /usr/bin/time -f %E /opt/openmpi/bin/mpirun -v -np 10 ./inverse.exe17798 ?        S      0:01              \_ /opt/openmpi/bin/mpirun -v -np 10 ./inverse.exe17799 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-5.local     PATH=/opt/openmpi/bin:$PATH ; expo17800 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-9.local     PATH=/opt/openmpi/bin:$PATH ; expo17801 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-12.local     PATH=/opt/openmpi/bin:$PATH ; exp17802 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-13.local     PATH=/opt/openmpi/bin:$PATH ; exp17803 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-14.local     PATH=/opt/openmpi/bin:$PATH ; exp17804 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-10.local     PATH=/opt/openmpi/bin:$PATH ; exp17805 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-15.local     PATH=/opt/openmpi/bin:$PATH ; exp17806 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-8.local     PATH=/opt/openmpi/bin:$PATH ; expo17807 ?        Sl     0:00                  \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-4.local     PATH=/opt/openmpi/bin:$PATH ; expo17826 ?        R     31:36                  \_ ./inverse.exe 3429 ?        Ssl    0:00 automount --pid-file /var/run/autofs.pid So the job is using the 10 machines, Until here is all right OK. Do you think that changing the &quot;allocation_rule &quot; to a number instead $fill_up the MPI processes would divide the work in that number of threads?Thanks a lot 
<br>
<p>Oscar Fabian Mojica LadinoGeologist M.S. in  Geophysics
<br>
<p>PS: I have another doubt, what  is a slot? is a physical core?
<br>
<p><p><span class="quotelev1">&gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Thu, 14 Aug 2014 23:54:22 +0200
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this is a broader issue in case an MPI library is used in conjunction with threads while running inside a queuing system. First: whether your actual installation of Open MPI is SGE-aware you can check with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info | grep grid
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then we can look at the definition of your PE: &quot;allocation_rule    $fill_up&quot;. This means that SGE will grant you 14 slots in total in any combination on the available machines, means 8+4+2 slots allocation is an allowed combination like 4+4+3+3 and so on. Depending on the SGE-awareness it's a question: will your application just start processes on all nodes and completely disregard the granted allocation, or as the other extreme does it stays on one and the same machine for all started processes? On the master node of the parallel job you can issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ps -e f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (f w/o -) to have a look whether `ssh` or `qrsh -inhert ...` is used to reach other machines and their requested process count.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now to the common problem in such a set up:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AFAICS: for now there is no way in the Open MPI + SGE combination to specify the number of MPI processes and intended number of threads which are automatically read by Open MPI while staying inside the granted slot count and allocation. So it seems to be necessary to have the intended number of threads being honored by Open MPI too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence specifying e.g. &quot;allocation_rule 8&quot; in such a setup while requesting 32 processes, would for now start 32 processes by MPI already, as Open MP reads the $PE_HOSTFILE and acts accordingly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI would have to read the generated machine file in a slightly different way regarding threads: a) read the $PE_HOSTFILE, b) divide the granted slots per machine by OMP_NUM_THREADS, c) throw an error in case it's not divisible by OMP_NUM_THREADS. Then start one process per quotient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would this work for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: This would also mean to have a couple of PEs in SGE having a fixed &quot;allocation_rule&quot;. While this works right now, an extension in SGE could be &quot;$fill_up_omp&quot;/&quot;$round_robin_omp&quot; and using  OMP_NUM_THREADS there too, hence it must not be specified as an `export` in the job script but either on the command line or inside the job script in #$ lines as job requests. This would mean to collect slots in bunches of OMP_NUM_THREADS on each machine to reach the overall specified slot count. Whether OMP_NUM_THREADS or n times OMP_NUM_THREADS is allowed per machine needs to be discussed.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; PS2: As Univa SGE can also supply a list of granted cores in the $PE_HOSTFILE, it would be an extension to feed this to Open MPI to allow any UGE aware binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 14.08.2014 um 21:52 schrieb Oscar Mojica:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Guys
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I changed the line to run the program in the script with both options
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-none -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-socket -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; but I got the same results. When I use man mpirun appears:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        -bind-to-none, --bind-to-none
</span><br>
<span class="quotelev2">&gt; &gt;               Do not bind processes.  (Default.)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and the output of 'qconf -sp orte' is
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; pe_name            orte
</span><br>
<span class="quotelev2">&gt; &gt; slots              9999
</span><br>
<span class="quotelev2">&gt; &gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt; &gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt; &gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt; &gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt; &gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev2">&gt; &gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt; &gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt; &gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt; &gt; accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't know if the installed Open MPI was compiled with '--with-sge'. How can i know that?
</span><br>
<span class="quotelev2">&gt; &gt; before to think in an hybrid application i was using only MPI and the program used few processors (14). The cluster possesses 28 machines, 15 with 16 cores and 13 with 8 cores totalizing 344 units of processing. When I submitted the job (only MPI), the MPI processes were spread to the cores directly, for that reason I created a new queue with 14 machines trying to gain more time.  the results were the same in both cases. In the last case i could prove that the processes were distributed to all machines correctly.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What I must to do?
</span><br>
<span class="quotelev2">&gt; &gt; Thanks 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev2">&gt; &gt; Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Thu, 14 Aug 2014 10:10:17 -0400
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You DEFINITELY need to disable OpenMPI's new default binding. Otherwise, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; your N threads will run on a single core. --bind-to socket would be my 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; recommendation for hybrid jobs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Maxime
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Le 2014-08-14 10:04, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I don't know much about OpenMP, but do you need to disable Open MPI's default bind-to-core functionality (I'm assuming you're using Open MPI 1.8.x)?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; You can try &quot;mpirun --bind-to none ...&quot;, which will have Open MPI not bind MPI processes to cores, which might allow OpenMP to think that it can use all the cores, and therefore it will spawn num_cores threads...?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Aug 14, 2014, at 9:50 AM, Oscar Mojica &lt;o_mojical_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Hello everybody
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I am trying to run a hybrid mpi + openmp program in a cluster. I created a queue with 14 machines, each one with 16 cores. The program divides the work among the 14 processors with MPI and within each processor a loop is also divided into 8 threads for example, using openmp. The problem is that when I submit the job to the queue the MPI processes don't divide the work into threads and the program prints the number of threads that are working within each process as one.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I made a simple test program that uses openmp and I logged in one machine of the fourteen. I compiled it using gfortran -fopenmp program.f -o exe, set the OMP_NUM_THREADS environment variable equal to 8 and when I ran directly in the terminal the loop was effectively divided among the cores and for example in this case the program printed the number of threads equal to 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; This is my Makefile
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; # Start of the makefile
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; # Defining variables
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; objects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #f90comp = /opt/openmpi/bin/mpif90
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; f90comp = /usr/bin/mpif90
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #switch = -O3
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; executable = inverse.exe
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; # Makefile
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; all : $(executable)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; $(executable) : $(objects)	
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; $(f90comp) -fopenmp -g -O -o $(executable) $(objects)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; rm $(objects)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; %.o: %.f
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; $(f90comp) -c $&lt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; # Cleaning everything
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; clean:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; rm $(executable)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #	rm $(objects)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; # End of the makefile
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; and the script that i am using is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #$ -pe orte 14
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #$ -N job
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; #$ -q new.q
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; am I forgetting something?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25016.php">http://www.open-mpi.org/community/lists/users/2014/08/25016.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ph. D. en physique
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25020.php">http://www.open-mpi.org/community/lists/users/2014/08/25020.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25032.php">http://www.open-mpi.org/community/lists/users/2014/08/25032.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25034.php">http://www.open-mpi.org/community/lists/users/2014/08/25034.php</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25038.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25036.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25034.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25038.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25038.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
