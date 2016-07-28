<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 07:26:34 2014" -->
<!-- isoreceived="20140820112634" -->
<!-- sent="Wed, 20 Aug 2014 20:26:21 +0900" -->
<!-- isosent="20140820112621" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="OF7EA3D209.8B75DCC3-ON49257D3A.003C0E2F-49257D3A.003EDB50_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="5B08579A-3B16-4007-B1D6-C1B4E013B748_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Running%20a%20hybrid%20MPI%2BopenMP%20program"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-08-20 07:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25085.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25083.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25083.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25085.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25085.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25087.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti,
<br>
<p>If you want to allocate 10 procs with N threads, the Torque
<br>
script below should work for you:
<br>
<p>qsub -l nodes=10:ppn=N
<br>
mpirun -map-by slot:pe=N -np 10 -x OMP_NUM_THREADS=N ./inverse.exe
<br>
<p>Then, the openmpi automatically reduces the logical slot count to 10
<br>
by dividing real slot count 10N by binding width of N.
<br>
<p>I don't know why you want to use pe=N without binding, but unfortunately
<br>
the openmpi allocates successive cores to each process so far when you
<br>
use pe option - it forcibly bind_to core.
<br>
<p>Tetsuya
<br>
<p><p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 20.08.2014 um 06:26 schrieb Tetsuya Mishima:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Reuti and Oscar,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm a Torque user and I myself have never used SGE, so I hesitated to
</span><br>
join
<br>
<span class="quotelev2">&gt; &gt; the discussion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From my experience with the Torque, the openmpi 1.8 series has already
</span><br>
<span class="quotelev2">&gt; &gt; resolved the issue you pointed out in combining MPI with OpenMP.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please try to add --map-by slot:pe=8 option, if you want to use 8
</span><br>
threads.
<br>
<span class="quotelev2">&gt; &gt; Then, then openmpi 1.8 should allocate processes properly without any
</span><br>
modification
<br>
<span class="quotelev2">&gt; &gt; of the hostfile provided by the Torque.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In your case(8 threads and 10 procs):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # you have to request 80 slots using SGE command before mpirun
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --map-by slot:pe=8 -np 10 ./inverse.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx for pointing me to this option, for now I can't get it working though
</span><br>
(in fact, I want to use it without binding essentially). This allows to
<br>
tell Open MPI to bind more cores to each of the MPI
<br>
<span class="quotelev1">&gt; processes - ok, but does it lower the slot count granted by Torque too? I
</span><br>
mean, was your submission command like:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ qsub -l nodes=10:ppn=8 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so that Torque knows, that it should grant and remember this slot count
</span><br>
of a total of 80 for the correct accounting?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; where you can omit --bind-to option because --bind-to core is assumed
</span><br>
<span class="quotelev2">&gt; &gt; as default when pe=N is provided by the user.
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am 19.08.2014 um 19:06 schrieb Oscar Mojica:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I discovered what was the error. I forgot include the '-fopenmp' when
</span><br>
I compiled the objects in the Makefile, so the program worked but it didn't
<br>
divide the job
<br>
<span class="quotelev2">&gt; &gt; in threads. Now the program is working and I can use until 15 cores for
</span><br>
machine in the queue one.q.
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Anyway i would like to try implement your advice. Well I'm not alone
</span><br>
in the cluster so i must implement your second suggestion. The steps are
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a) Use '$ qconf -mp orte' to change the allocation rule to 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The number of slots defined in your used one.q was also increased to 8
</span><br>
(`qconf -sq one.q`)?
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; b) Set '#$ -pe orte 80' in the script
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; c) I'm not sure how to do this step. I'd appreciate your help here. I
</span><br>
can add some lines to the script to determine the PE_HOSTFILE path and
<br>
contents, but i
<br>
<span class="quotelev2">&gt; &gt; don't know how alter it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For now you can put in your jobscript (just after OMP_NUM_THREAD is
</span><br>
exported):
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; awk -v omp_num_threads=$OMP_NUM_THREADS '{ $2/=omp_num_threads;
</span><br>
print }' $PE_HOSTFILE &gt; $TMPDIR/machines
<br>
<span class="quotelev3">&gt; &gt;&gt; export PE_HOSTFILE=$TMPDIR/machines
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =============
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unfortunately noone stepped into this discussion, as in my opinion
</span><br>
it's a much broader issue which targets all users who want to combine MPI
<br>
with OpenMP. The
<br>
<span class="quotelev2">&gt; &gt; queuingsystem should get a proper request for the overall amount of
</span><br>
slots the user needs. For now this will be forwarded to Open MPI and it
<br>
will use this
<br>
<span class="quotelev2">&gt; &gt; information to start the appropriate number of processes (which was an
</span><br>
achievement for the Tight Integration out-of-the-box of course) and ignores
<br>
any setting of
<br>
<span class="quotelev2">&gt; &gt; OMP_NUM_THREADS. So, where should the generated list of machines be
</span><br>
adjusted; there are several options:
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a) The PE of the queuingsystem should do it:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + a one time setup for the admin
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + in SGE the &quot;start_proc_args&quot; of the PE could alter the $PE_HOSTFILE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - the &quot;start_proc_args&quot; would need to know the number of threads, i.e.
</span><br>
OMP_NUM_THREADS must be defined by &quot;qsub -v ...&quot; outside of the jobscript
<br>
(tricky scanning
<br>
<span class="quotelev2">&gt; &gt; of the submitted jobscript for OMP_NUM_THREADS would be too nasty)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - limits to use inside the jobscript calls to libraries behaving in
</span><br>
the same way as Open MPI only
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; b) The particular queue should do it in a queue prolog:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; same as a) I think
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; c) The user should do it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + no change in the SGE installation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - each and every user must include it in all the jobscripts to adjust
</span><br>
the list and export the pointer to the $PE_HOSTFILE, but he could change it
<br>
forth and back
<br>
<span class="quotelev2">&gt; &gt; for different steps of the jobscript though
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; d) Open MPI should do it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + no change in the SGE installation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + no change to the jobscript
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + OMP_NUM_THREADS can be altered for different steps of the jobscript
</span><br>
while staying inside the granted allocation automatically
<br>
<span class="quotelev3">&gt; &gt;&gt; o should MKL_NUM_THREADS be covered too (does it use OMP_NUM_THREADS
</span><br>
already)?
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; echo &quot;PE_HOSTFILE:&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; echo $PE_HOSTFILE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; echo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; echo &quot;cat PE_HOSTFILE:&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cat $PE_HOSTFILE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for take a time for answer this emails, your advices had been
</span><br>
very useful
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PS: The version of SGE is   OGS/GE 2011.11p1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Date: Fri, 15 Aug 2014 20:38:12 +0200
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Am 15.08.2014 um 19:56 schrieb Oscar Mojica:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Yes, my installation of Open MPI is SGE-aware. I got the following
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [oscar_at_compute-1-2 ~]$ ompi_info | grep grid
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Fine.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm a bit slow and I didn't understand the las part of your
</span><br>
message. So i made a test trying to solve my doubts.
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This is the cluster configuration: There are some machines turned
</span><br>
off but that is no problem
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [oscar_at_aguia free-noise]$ qhost
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; HOSTNAME ARCH NCPU LOAD MEMTOT MEMUSE SWAPTO SWAPUS
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
-------------------------------------------------------------------------------
<br>
<p><span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; global - - - - - - -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-10 linux-x64 16 0.97 23.6G 558.6M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-11 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-12 linux-x64 16 0.97 23.6G 561.1M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-13 linux-x64 16 0.99 23.6G 558.7M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-14 linux-x64 16 1.00 23.6G 555.1M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-15 linux-x64 16 0.97 23.6G 555.5M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-16 linux-x64 8 0.00 15.7G 296.9M 1000.0M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-17 linux-x64 8 0.00 15.7G 299.4M 1000.0M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-18 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-19 linux-x64 8 - 15.7G - 996.2M -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-2 linux-x64 16 1.19 23.6G 468.1M 1000.0M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-20 linux-x64 8 0.04 15.7G 297.2M 1000.0M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-21 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-22 linux-x64 8 0.00 15.7G 297.2M 1000.0M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-23 linux-x64 8 0.16 15.7G 299.6M 1000.0M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-24 linux-x64 8 0.00 15.7G 291.5M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-25 linux-x64 8 0.04 15.7G 293.4M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-26 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-27 linux-x64 8 0.00 15.7G 297.0M 1000.0M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-29 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-3 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-30 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-4 linux-x64 16 0.97 23.6G 571.6M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-5 linux-x64 16 1.00 23.6G 559.6M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-6 linux-x64 16 0.66 23.6G 403.1M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-7 linux-x64 16 0.95 23.6G 402.7M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-8 linux-x64 16 0.97 23.6G 556.8M 996.2M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compute-1-9 linux-x64 16 1.02 23.6G 566.0M 1000.0M 0.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I ran my program using only MPI with 10 processors of the queue
</span><br>
one.q which has 14 machines (compute-1-2 to compute-1-15). Whit 'qstat -t'
<br>
I got:
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [oscar_at_aguia free-noise]$ qstat -t
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; job-ID prior name user state submit/start at queue master
</span><br>
ja-task-ID task-ID state cpu mem io stat failed
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
-------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
<p><span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-2.local MASTER r 00:49:12 554.13753 0.09163
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; one.q_at_compute-1-2.local SLAVE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-5.local SLAVE 1.compute-1-5 r 00:48:53 551.49022 0.09410
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-9.local SLAVE 1.compute-1-9 r 00:50:00 564.22764 0.09409
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-12.local SLAVE 1.compute-1-12 r 00:47:30 535.30379 0.09379
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-13.local SLAVE 1.compute-1-13 r 00:49:51 561.69868 0.09379
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-14.local SLAVE 1.compute-1-14 r 00:49:14 554.60818 0.09379
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-10.local SLAVE 1.compute-1-10 r 00:49:59 562.95487 0.09349
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-15.local SLAVE 1.compute-1-15 r 00:50:01 563.27221 0.09361
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-8.local SLAVE 1.compute-1-8 r 00:49:26 556.68431 0.09349
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
one.q_at_compute-1-4.local SLAVE 1.compute-1-4 r 00:49:27 556.87510 0.04967
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yes, here you got 10 slots (= cores) granted by SGE. So there is no
</span><br>
free core left inside the allocation of SGE to allow the use of additional
<br>
cores for your
<br>
<span class="quotelev2">&gt; &gt; threads. If you use more cores than granted by SGE, it will
</span><br>
oversubscribe the machines.
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The issue is now:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; a) If you want 8 threads per MPI process, your job will use 80 cores
</span><br>
in total - for now SGE isn't aware of it.
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; b) Although you specified $fill_up as allocation rule, it looks like
</span><br>
$round_robin. Is there more than one slot defined in the queue definition
<br>
of one.q to get
<br>
<span class="quotelev2">&gt; &gt; exclusive access?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; c) What version of SGE are you using? Certain ones use cgroups or
</span><br>
bind processes directly to cores (although it usually needs to be requested
<br>
by the job:
<br>
<span class="quotelev2">&gt; &gt; first line of `qconf -help`).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; In case you are alone in the cluster, you could bypass the
</span><br>
allocation with b) (unless you are hit by c)). But having a mixture of
<br>
users and jobs a different
<br>
<span class="quotelev2">&gt; &gt; handling would be necessary to handle this in a proper way IMO:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; a) having a PE with a fixed allocation rule of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; b) requesting this PE with an overall slot count of 80
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; c) copy and alter the $PE_HOSTFILE to show only (granted core count
</span><br>
per machine) divided by (OMP_NUM_THREADS) per entry, change $PE_HOSTFILE so
<br>
that it points
<br>
<span class="quotelev2">&gt; &gt; to the altered file
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; d) Open MPI with a Tight Integration will now start only N process
</span><br>
per machine according to the altered hostfile, in your case one
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; e) Your application can start the desired threads and you stay
</span><br>
inside the granted allocation
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I accessed to the MASTER processor with 'ssh compute-1-2.local' ,
</span><br>
and with $ ps -e f and got this, I'm showing only the last lines
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2506 ? Ss 0:00 /usr/sbin/atd
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2548 tty1 Ss+ 0:00 /sbin/mingetty /dev/tty1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2550 tty2 Ss+ 0:00 /sbin/mingetty /dev/tty2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2552 tty3 Ss+ 0:00 /sbin/mingetty /dev/tty3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2554 tty4 Ss+ 0:00 /sbin/mingetty /dev/tty4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2556 tty5 Ss+ 0:00 /sbin/mingetty /dev/tty5
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2558 tty6 Ss+ 0:00 /sbin/mingetty /dev/tty6
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3325 ? Sl 0:04 /opt/gridengine/bin/linux-x64/sge_execd
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17688 ? S 0:00 \_ sge_shepherd-2726 -bg
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17695 ? Ss 0:00 \_
</span><br>
-bash /opt/gridengine/default/spool/compute-1-2/job_scripts/2726
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17797 ? S 0:00 \_ /usr/bin/time -f %E /opt/openmpi/bin/mpirun -v
</span><br>
-np 10 ./inverse.exe
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17798 ? S 0:01 \_ /opt/openmpi/bin/mpirun -v -np 10 ./inverse.exe
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17799 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-5.local PATH=/opt/openmpi/bin:$PATH ; expo
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17800 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-9.local PATH=/opt/openmpi/bin:$PATH ; expo
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17801 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-12.local PATH=/opt/openmpi/bin:$PATH ; exp
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17802 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-13.local PATH=/opt/openmpi/bin:$PATH ; exp
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17803 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-14.local PATH=/opt/openmpi/bin:$PATH ; exp
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17804 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-10.local PATH=/opt/openmpi/bin:$PATH ; exp
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17805 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-15.local PATH=/opt/openmpi/bin:$PATH ; exp
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17806 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-8.local PATH=/opt/openmpi/bin:$PATH ; expo
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17807 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
-nostdin -V compute-1-4.local PATH=/opt/openmpi/bin:$PATH ; expo
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 17826 ? R 31:36 \_ ./inverse.exe
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3429 ? Ssl 0:00 automount --pid-file /var/run/autofs.pid
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; So the job is using the 10 machines, Until here is all right OK. Do
</span><br>
you think that changing the &quot;allocation_rule &quot; to a number instead $fill_up
<br>
the MPI
<br>
<span class="quotelev2">&gt; &gt; processes would divide the work in that number of threads?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; PS: I have another doubt, what is a slot? is a physical core?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Date: Thu, 14 Aug 2014 23:54:22 +0200
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I think this is a broader issue in case an MPI library is used in
</span><br>
conjunction with threads while running inside a queuing system. First:
<br>
whether your
<br>
<span class="quotelev2">&gt; &gt; actual installation of Open MPI is SGE-aware you can check with:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; $ ompi_info | grep grid
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Then we can look at the definition of your PE: &quot;allocation_rule
</span><br>
$fill_up&quot;. This means that SGE will grant you 14 slots in total in any
<br>
combination on the
<br>
<span class="quotelev2">&gt; &gt; available machines, means 8+4+2 slots allocation is an allowed
</span><br>
combination like 4+4+3+3 and so on. Depending on the SGE-awareness it's a
<br>
question: will your
<br>
<span class="quotelev2">&gt; &gt; application just start processes on all nodes and completely disregard
</span><br>
the granted allocation, or as the other extreme does it stays on one and
<br>
the same machine
<br>
<span class="quotelev2">&gt; &gt; for all started processes? On the master node of the parallel job you
</span><br>
can issue:
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; $ ps -e f
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; (f w/o -) to have a look whether `ssh` or `qrsh -inhert ...` is
</span><br>
used to reach other machines and their requested process count.
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Now to the common problem in such a set up:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; AFAICS: for now there is no way in the Open MPI + SGE combination
</span><br>
to specify the number of MPI processes and intended number of threads which
<br>
are
<br>
<span class="quotelev2">&gt; &gt; automatically read by Open MPI while staying inside the granted slot
</span><br>
count and allocation. So it seems to be necessary to have the intended
<br>
number of threads being
<br>
<span class="quotelev2">&gt; &gt; honored by Open MPI too.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hence specifying e.g. &quot;allocation_rule 8&quot; in such a setup while
</span><br>
requesting 32 processes, would for now start 32 processes by MPI already,
<br>
as Open MP reads &gt; the $PE_HOSTFILE and acts accordingly.
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Open MPI would have to read the generated machine file in a
</span><br>
slightly different way regarding threads: a) read the $PE_HOSTFILE, b)
<br>
divide the granted
<br>
<span class="quotelev2">&gt; &gt; slots per machine by OMP_NUM_THREADS, c) throw an error in case it's
</span><br>
not divisible by OMP_NUM_THREADS. Then start one process per quotient.
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Would this work for you?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; PS: This would also mean to have a couple of PEs in SGE having a
</span><br>
fixed &quot;allocation_rule&quot;. While this works right now, an extension in SGE
<br>
could be
<br>
<span class="quotelev2">&gt; &gt; &quot;$fill_up_omp&quot;/&quot;$round_robin_omp&quot; and using OMP_NUM_THREADS there too,
</span><br>
hence it must not be specified as an `export` in the job script but either
<br>
on the command
<br>
<span class="quotelev2">&gt; &gt; line or inside the job script in #$ lines as job requests. This would
</span><br>
mean to collect slots in bunches of OMP_NUM_THREADS on each machine to
<br>
reach the overall
<br>
<span class="quotelev2">&gt; &gt; specified slot count. Whether OMP_NUM_THREADS or n times
</span><br>
OMP_NUM_THREADS is allowed per machine needs to be discussed.
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; PS2: As Univa SGE can also supply a list of granted cores in the
</span><br>
$PE_HOSTFILE, it would be an extension to feed this to Open MPI to allow
<br>
any UGE aware
<br>
<span class="quotelev2">&gt; &gt; binding.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Am 14.08.2014 um 21:52 schrieb Oscar Mojica:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Guys
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I changed the line to run the program in the script with both
</span><br>
options
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-none
</span><br>
-np $NSLOTS ./inverse.exe
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-socket
</span><br>
-np $NSLOTS ./inverse.exe
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; but I got the same results. When I use man mpirun appears:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -bind-to-none, --bind-to-none
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Do not bind processes. (Default.)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; and the output of 'qconf -sp orte' is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; pe_name orte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; slots 9999
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; user_lists NONE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; xuser_lists NONE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; start_proc_args /bin/true
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; stop_proc_args /bin/true
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; allocation_rule $fill_up
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; control_slaves TRUE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; urgency_slots min
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know if the installed Open MPI was compiled with
</span><br>
'--with-sge'. How can i know that?
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; before to think in an hybrid application i was using only MPI and
</span><br>
the program used few processors (14). The cluster possesses 28 machines, 15
<br>
with 16
<br>
<span class="quotelev2">&gt; &gt; cores and 13 with 8 cores totalizing 344 units of processing. When I
</span><br>
submitted the job (only MPI), the MPI processes were spread to the cores
<br>
directly, for that
<br>
<span class="quotelev2">&gt; &gt; reason I created a new queue with 14 machines trying to gain more time.
</span><br>
the results were the same in both cases. In the last case i could prove
<br>
that the processes
<br>
<span class="quotelev2">&gt; &gt; were distributed to all machines correctly.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; What I must to do?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: Thu, 14 Aug 2014 10:10:17 -0400
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You DEFINITELY need to disable OpenMPI's new default binding.
</span><br>
Otherwise,
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your N threads will run on a single core. --bind-to socket would
</span><br>
be my
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; recommendation for hybrid jobs.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Le 2014-08-14 10:04, Jeff Squyres (jsquyres) a 馗rit :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know much about OpenMP, but do you need to disable Open
</span><br>
MPI's default bind-to-core functionality (I'm assuming you're using Open
<br>
MPI 1.8.x)?
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can try &quot;mpirun --bind-to none ...&quot;, which will have Open
</span><br>
MPI not bind MPI processes to cores, which might allow OpenMP to think that
<br>
it can use
<br>
<span class="quotelev2">&gt; &gt; all the cores, and therefore it will spawn num_cores threads...?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 14, 2014, at 9:50 AM, Oscar Mojica
</span><br>
&lt;o_mojical_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello everybody
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am trying to run a hybrid mpi + openmp program in a cluster.
</span><br>
I created a queue with 14 machines, each one with 16 cores. The program
<br>
divides the
<br>
<span class="quotelev2">&gt; &gt; work among the 14 processors with MPI and within each processor a loop
</span><br>
is also divided into 8 threads for example, using openmp. The problem is
<br>
that when I submit
<br>
<span class="quotelev2">&gt; &gt; the job to the queue the MPI processes don't divide the work into
</span><br>
threads and the program prints the number of threads that are working
<br>
within each process as one.
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I made a simple test program that uses openmp and I logged in
</span><br>
one machine of the fourteen. I compiled it using gfortran -fopenmp
<br>
program.f -o exe,
<br>
<span class="quotelev2">&gt; &gt; set the OMP_NUM_THREADS environment variable equal to 8 and when I ran
</span><br>
directly in the terminal the loop was effectively divided among the cores
<br>
and for example in
<br>
<span class="quotelev2">&gt; &gt; this case the program printed the number of threads equal to 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is my Makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Start of the makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Defining variables
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; objects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #f90comp = /opt/openmpi/bin/mpif90
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; f90comp = /usr/bin/mpif90
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #switch = -O3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; executable = inverse.exe
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; all : $(executable)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $(executable) : $(objects)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $(f90comp) -fopenmp -g -O -o $(executable) $(objects)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rm $(objects)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; %.o: %.f
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $(f90comp) -c $&lt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Cleaning everything
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; clean:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rm $(executable)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #	rm $(objects)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # End of the makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the script that i am using is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -j y
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -pe orte 14
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -N job
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -q new.q
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np
</span><br>
$NSLOTS ./inverse.exe
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; am I forgetting something?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25016.php">http://www.open-mpi.org/community/lists/users/2014/08/25016.php</a>
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu饕ec, Universit・瘢雹Laval
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25020.php">http://www.open-mpi.org/community/lists/users/2014/08/25020.php</a>
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25032.php">http://www.open-mpi.org/community/lists/users/2014/08/25032.php</a>
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25034.php">http://www.open-mpi.org/community/lists/users/2014/08/25034.php</a>
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25037.php">http://www.open-mpi.org/community/lists/users/2014/08/25037.php</a>
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25038.php">http://www.open-mpi.org/community/lists/users/2014/08/25038.php</a>
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25079.php">http://www.open-mpi.org/community/lists/users/2014/08/25079.php</a>
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25080.php">http://www.open-mpi.org/community/lists/users/2014/08/25080.php</a>
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima  tmishima_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25081.php">http://www.open-mpi.org/community/lists/users/2014/08/25081.php</a>
<br>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25083.php">http://www.open-mpi.org/community/lists/users/2014/08/25083.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25085.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25083.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25083.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25085.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25085.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25087.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
