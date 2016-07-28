<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 13:51:57 2014" -->
<!-- isoreceived="20140819175157" -->
<!-- sent="Tue, 19 Aug 2014 19:51:46 +0200" -->
<!-- isosent="20140819175146" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="54989D26-06EA-4033-B2D8-BE5354E00881_at_staff.uni-marburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU177-W2774C4328E2E9D3DF8145490D50_at_phx.gbl" -->
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
<strong>Date:</strong> 2014-08-19 13:51:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25081.php">Tetsuya Mishima: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25079.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25079.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25081.php">Tetsuya Mishima: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25081.php">Tetsuya Mishima: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25096.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 19.08.2014 um 19:06 schrieb Oscar Mojica:
<br>
<p><span class="quotelev1">&gt; I discovered what was the error. I forgot include the '-fopenmp' when I compiled the objects in the Makefile, so the program worked but it didn't divide the job in threads. Now the program is working and I can use until 15 cores for machine in the queue one.q.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway i would like to try implement your advice. Well I'm not alone in the cluster so i must implement your second suggestion. The steps are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) Use '$ qconf -mp orte' to change the allocation rule to 8
</span><br>
<p>The number of slots defined in your used one.q was also increased to 8 (`qconf -sq one.q`)?
<br>
<p><p><span class="quotelev1">&gt; b) Set '#$ -pe orte 80' in the script
</span><br>
<p>Fine.
<br>
<p><p><span class="quotelev1">&gt; c) I'm not sure how to do this step. I'd appreciate your help here. I can add some lines to the script to determine the PE_HOSTFILE path and contents, but i don't know how alter it 
</span><br>
<p>For now you can put in your jobscript (just after OMP_NUM_THREAD is exported):
<br>
<p>awk -v omp_num_threads=$OMP_NUM_THREADS '{ $2/=omp_num_threads; print }' $PE_HOSTFILE &gt; $TMPDIR/machines
<br>
export PE_HOSTFILE=$TMPDIR/machines
<br>
<p>=============
<br>
<p>Unfortunately noone stepped into this discussion, as in my opinion it's a much broader issue which targets all users who want to combine MPI with OpenMP. The queuingsystem should get a proper request for the overall amount of slots the user needs. For now this will be forwarded to Open MPI and it will use this information to start the appropriate number of processes (which was an achievement for the Tight Integration out-of-the-box of course) and ignores any setting of OMP_NUM_THREADS. So, where should the generated list of machines be adjusted; there are several options:
<br>
<p>a) The PE of the queuingsystem should do it:
<br>
<p>+ a one time setup for the admin
<br>
+ in SGE the &quot;start_proc_args&quot; of the PE could alter the $PE_HOSTFILE
<br>
- the &quot;start_proc_args&quot; would need to know the number of threads, i.e. OMP_NUM_THREADS must be defined by &quot;qsub -v ...&quot; outside of the jobscript (tricky scanning of the submitted jobscript for OMP_NUM_THREADS would be too nasty)
<br>
- limits to use inside the jobscript calls to libraries behaving in the same way as Open MPI only
<br>
<p><p>b) The particular queue should do it in a queue prolog:
<br>
<p>same as a) I think
<br>
<p><p>c) The user should do it
<br>
<p>+ no change in the SGE installation
<br>
- each and every user must include it in all the jobscripts to adjust the list and export the pointer to the $PE_HOSTFILE, but he could change it forth and back for different steps of the jobscript though
<br>
<p><p>d) Open MPI should do it
<br>
<p>+ no change in the SGE installation
<br>
+ no change to the jobscript
<br>
+ OMP_NUM_THREADS can be altered for different steps of the jobscript while staying inside the granted allocation automatically
<br>
o should MKL_NUM_THREADS be covered too (does it use OMP_NUM_THREADS already)?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; echo &quot;PE_HOSTFILE:&quot;
</span><br>
<span class="quotelev1">&gt; echo $PE_HOSTFILE
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo &quot;cat PE_HOSTFILE:&quot;
</span><br>
<span class="quotelev1">&gt; cat $PE_HOSTFILE 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for take a time for answer this emails, your advices had been very useful
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: The version of SGE is   OGS/GE 2011.11p1
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 15 Aug 2014 20:38:12 +0200
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am 15.08.2014 um 19:56 schrieb Oscar Mojica:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yes, my installation of Open MPI is SGE-aware. I got the following
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [oscar_at_compute-1-2 ~]$ ompi_info | grep grid
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Fine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm a bit slow and I didn't understand the las part of your message. So i made a test trying to solve my doubts.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is the cluster configuration: There are some machines turned off but that is no problem
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [oscar_at_aguia free-noise]$ qhost
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HOSTNAME ARCH NCPU LOAD MEMTOT MEMUSE SWAPTO SWAPUS
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; global - - - - - - -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-10 linux-x64 16 0.97 23.6G 558.6M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-11 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-12 linux-x64 16 0.97 23.6G 561.1M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-13 linux-x64 16 0.99 23.6G 558.7M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-14 linux-x64 16 1.00 23.6G 555.1M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-15 linux-x64 16 0.97 23.6G 555.5M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-16 linux-x64 8 0.00 15.7G 296.9M 1000.0M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-17 linux-x64 8 0.00 15.7G 299.4M 1000.0M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-18 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-19 linux-x64 8 - 15.7G - 996.2M -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-2 linux-x64 16 1.19 23.6G 468.1M 1000.0M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-20 linux-x64 8 0.04 15.7G 297.2M 1000.0M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-21 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-22 linux-x64 8 0.00 15.7G 297.2M 1000.0M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-23 linux-x64 8 0.16 15.7G 299.6M 1000.0M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-24 linux-x64 8 0.00 15.7G 291.5M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-25 linux-x64 8 0.04 15.7G 293.4M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-26 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-27 linux-x64 8 0.00 15.7G 297.0M 1000.0M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-29 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-3 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-30 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-4 linux-x64 16 0.97 23.6G 571.6M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-5 linux-x64 16 1.00 23.6G 559.6M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-6 linux-x64 16 0.66 23.6G 403.1M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-7 linux-x64 16 0.95 23.6G 402.7M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-8 linux-x64 16 0.97 23.6G 556.8M 996.2M 0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compute-1-9 linux-x64 16 1.02 23.6G 566.0M 1000.0M 0.0 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I ran my program using only MPI with 10 processors of the queue one.q which has 14 machines (compute-1-2 to compute-1-15). Whit 'qstat -t' I got:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [oscar_at_aguia free-noise]$ qstat -t
</span><br>
<span class="quotelev3">&gt; &gt; &gt; job-ID prior name user state submit/start at queue master ja-task-ID task-ID state cpu mem io stat failed 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-2.local MASTER r 00:49:12 554.13753 0.09163 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; one.q_at_compute-1-2.local SLAVE 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-5.local SLAVE 1.compute-1-5 r 00:48:53 551.49022 0.09410 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-9.local SLAVE 1.compute-1-9 r 00:50:00 564.22764 0.09409 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-12.local SLAVE 1.compute-1-12 r 00:47:30 535.30379 0.09379 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-13.local SLAVE 1.compute-1-13 r 00:49:51 561.69868 0.09379 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-14.local SLAVE 1.compute-1-14 r 00:49:14 554.60818 0.09379 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-10.local SLAVE 1.compute-1-10 r 00:49:59 562.95487 0.09349 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-15.local SLAVE 1.compute-1-15 r 00:50:01 563.27221 0.09361 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-8.local SLAVE 1.compute-1-8 r 00:49:26 556.68431 0.09349 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21 one.q_at_compute-1-4.local SLAVE 1.compute-1-4 r 00:49:27 556.87510 0.04967 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, here you got 10 slots (= cores) granted by SGE. So there is no free core left inside the allocation of SGE to allow the use of additional cores for your threads. If you use more cores than granted by SGE, it will oversubscribe the machines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The issue is now:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; a) If you want 8 threads per MPI process, your job will use 80 cores in total - for now SGE isn't aware of it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; b) Although you specified $fill_up as allocation rule, it looks like $round_robin. Is there more than one slot defined in the queue definition of one.q to get exclusive access?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; c) What version of SGE are you using? Certain ones use cgroups or bind processes directly to cores (although it usually needs to be requested by the job: first line of `qconf -help`).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In case you are alone in the cluster, you could bypass the allocation with b) (unless you are hit by c)). But having a mixture of users and jobs a different handling would be necessary to handle this in a proper way IMO:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; a) having a PE with a fixed allocation rule of 8
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; b) requesting this PE with an overall slot count of 80
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; c) copy and alter the $PE_HOSTFILE to show only (granted core count per machine) divided by (OMP_NUM_THREADS) per entry, change $PE_HOSTFILE so that it points to the altered file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; d) Open MPI with a Tight Integration will now start only N process per machine according to the altered hostfile, in your case one
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; e) Your application can start the desired threads and you stay inside the granted allocation
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I accessed to the MASTER processor with 'ssh compute-1-2.local' , and with $ ps -e f and got this, I'm showing only the last lines 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2506 ? Ss 0:00 /usr/sbin/atd
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2548 tty1 Ss+ 0:00 /sbin/mingetty /dev/tty1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2550 tty2 Ss+ 0:00 /sbin/mingetty /dev/tty2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2552 tty3 Ss+ 0:00 /sbin/mingetty /dev/tty3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2554 tty4 Ss+ 0:00 /sbin/mingetty /dev/tty4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2556 tty5 Ss+ 0:00 /sbin/mingetty /dev/tty5
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2558 tty6 Ss+ 0:00 /sbin/mingetty /dev/tty6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3325 ? Sl 0:04 /opt/gridengine/bin/linux-x64/sge_execd
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17688 ? S 0:00 \_ sge_shepherd-2726 -bg
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17695 ? Ss 0:00 \_ -bash /opt/gridengine/default/spool/compute-1-2/job_scripts/2726
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17797 ? S 0:00 \_ /usr/bin/time -f %E /opt/openmpi/bin/mpirun -v -np 10 ./inverse.exe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17798 ? S 0:01 \_ /opt/openmpi/bin/mpirun -v -np 10 ./inverse.exe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17799 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-5.local PATH=/opt/openmpi/bin:$PATH ; expo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17800 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-9.local PATH=/opt/openmpi/bin:$PATH ; expo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17801 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-12.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17802 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-13.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17803 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-14.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17804 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-10.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17805 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-15.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17806 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-8.local PATH=/opt/openmpi/bin:$PATH ; expo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17807 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit -nostdin -V compute-1-4.local PATH=/opt/openmpi/bin:$PATH ; expo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 17826 ? R 31:36 \_ ./inverse.exe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3429 ? Ssl 0:00 automount --pid-file /var/run/autofs.pid 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So the job is using the 10 machines, Until here is all right OK. Do you think that changing the &quot;allocation_rule &quot; to a number instead $fill_up the MPI processes would divide the work in that number of threads?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks a lot 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PS: I have another doubt, what is a slot? is a physical core?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Date: Thu, 14 Aug 2014 23:54:22 +0200
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I think this is a broader issue in case an MPI library is used in conjunction with threads while running inside a queuing system. First: whether your actual installation of Open MPI is SGE-aware you can check with:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ ompi_info | grep grid
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Then we can look at the definition of your PE: &quot;allocation_rule $fill_up&quot;. This means that SGE will grant you 14 slots in total in any combination on the available machines, means 8+4+2 slots allocation is an allowed combination like 4+4+3+3 and so on. Depending on the SGE-awareness it's a question: will your application just start processes on all nodes and completely disregard the granted allocation, or as the other extreme does it stays on one and the same machine for all started processes? On the master node of the parallel job you can issue:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ ps -e f
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (f w/o -) to have a look whether `ssh` or `qrsh -inhert ...` is used to reach other machines and their requested process count.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Now to the common problem in such a set up:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; AFAICS: for now there is no way in the Open MPI + SGE combination to specify the number of MPI processes and intended number of threads which are automatically read by Open MPI while staying inside the granted slot count and allocation. So it seems to be necessary to have the intended number of threads being honored by Open MPI too.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hence specifying e.g. &quot;allocation_rule 8&quot; in such a setup while requesting 32 processes, would for now start 32 processes by MPI already, as Open MP reads the $PE_HOSTFILE and acts accordingly.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Open MPI would have to read the generated machine file in a slightly different way regarding threads: a) read the $PE_HOSTFILE, b) divide the granted slots per machine by OMP_NUM_THREADS, c) throw an error in case it's not divisible by OMP_NUM_THREADS. Then start one process per quotient.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Would this work for you?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -- Reuti
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; PS: This would also mean to have a couple of PEs in SGE having a fixed &quot;allocation_rule&quot;. While this works right now, an extension in SGE could be &quot;$fill_up_omp&quot;/&quot;$round_robin_omp&quot; and using OMP_NUM_THREADS there too, hence it must not be specified as an `export` in the job script but either on the command line or inside the job script in #$ lines as job requests. This would mean to collect slots in bunches of OMP_NUM_THREADS on each machine to reach the overall specified slot count. Whether OMP_NUM_THREADS or n times OMP_NUM_THREADS is allowed per machine needs to be discussed.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; PS2: As Univa SGE can also supply a list of granted cores in the $PE_HOSTFILE, it would be an extension to feed this to Open MPI to allow any UGE aware binding.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Am 14.08.2014 um 21:52 schrieb Oscar Mojica:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Guys
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I changed the line to run the program in the script with both options
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-none -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-socket -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; but I got the same results. When I use man mpirun appears:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -bind-to-none, --bind-to-none
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Do not bind processes. (Default.)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; and the output of 'qconf -sp orte' is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; pe_name orte
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; slots 9999
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; user_lists NONE
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; xuser_lists NONE
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; start_proc_args /bin/true
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; stop_proc_args /bin/true
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; allocation_rule $fill_up
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; control_slaves TRUE
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; urgency_slots min
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I don't know if the installed Open MPI was compiled with '--with-sge'. How can i know that?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; before to think in an hybrid application i was using only MPI and the program used few processors (14). The cluster possesses 28 machines, 15 with 16 cores and 13 with 8 cores totalizing 344 units of processing. When I submitted the job (only MPI), the MPI processes were spread to the cores directly, for that reason I created a new queue with 14 machines trying to gain more time. the results were the same in both cases. In the last case i could prove that the processes were distributed to all machines correctly.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; What I must to do?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Date: Thu, 14 Aug 2014 10:10:17 -0400
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; From: maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; You DEFINITELY need to disable OpenMPI's new default binding. Otherwise, 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; your N threads will run on a single core. --bind-to socket would be my 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; recommendation for hybrid jobs.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Maxime
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Le 2014-08-14 10:04, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; I don't know much about OpenMP, but do you need to disable Open MPI's default bind-to-core functionality (I'm assuming you're using Open MPI 1.8.x)?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; You can try &quot;mpirun --bind-to none ...&quot;, which will have Open MPI not bind MPI processes to cores, which might allow OpenMP to think that it can use all the cores, and therefore it will spawn num_cores threads...?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; On Aug 14, 2014, at 9:50 AM, Oscar Mojica &lt;o_mojical_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; Hello everybody
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; I am trying to run a hybrid mpi + openmp program in a cluster. I created a queue with 14 machines, each one with 16 cores. The program divides the work among the 14 processors with MPI and within each processor a loop is also divided into 8 threads for example, using openmp. The problem is that when I submit the job to the queue the MPI processes don't divide the work into threads and the program prints the number of threads that are working within each process as one.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; I made a simple test program that uses openmp and I logged in one machine of the fourteen. I compiled it using gfortran -fopenmp program.f -o exe, set the OMP_NUM_THREADS environment variable equal to 8 and when I ran directly in the terminal the loop was effectively divided among the cores and for example in this case the program printed the number of threads equal to 8
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; This is my Makefile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; # Start of the makefile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; # Defining variables
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; objects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #f90comp = /opt/openmpi/bin/mpif90
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; f90comp = /usr/bin/mpif90
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #switch = -O3
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; executable = inverse.exe
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; # Makefile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; all : $(executable)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; $(executable) : $(objects)	
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; $(f90comp) -fopenmp -g -O -o $(executable) $(objects)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; rm $(objects)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; %.o: %.f
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; $(f90comp) -c $&lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; # Cleaning everything
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; clean:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; rm $(executable)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #	rm $(objects)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; # End of the makefile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; and the script that i am using is
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #$ -cwd
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #$ -j y
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #$ -pe orte 14
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #$ -N job
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; #$ -q new.q
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; am I forgetting something?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25016.php">http://www.open-mpi.org/community/lists/users/2014/08/25016.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25020.php">http://www.open-mpi.org/community/lists/users/2014/08/25020.php</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25032.php">http://www.open-mpi.org/community/lists/users/2014/08/25032.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25034.php">http://www.open-mpi.org/community/lists/users/2014/08/25034.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25037.php">http://www.open-mpi.org/community/lists/users/2014/08/25037.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25038.php">http://www.open-mpi.org/community/lists/users/2014/08/25038.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25079.php">http://www.open-mpi.org/community/lists/users/2014/08/25079.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25081.php">Tetsuya Mishima: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25079.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25079.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25081.php">Tetsuya Mishima: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25081.php">Tetsuya Mishima: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25096.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
