<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 05:52:30 2014" -->
<!-- isoreceived="20140821095230" -->
<!-- sent="Thu, 21 Aug 2014 11:52:19 +0200" -->
<!-- isosent="20140821095219" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="338CE1DC-A34A-4B04-8ACA-2128785173F7_at_staff.uni-marburg.de" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="OF705AB49C.D809065C-ON49257D3A.0080547F-49257D3A.008386A7_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2014-08-21 05:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25108.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25102.php">tmishima_at_[hidden]: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25096.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 21.08.2014 um 01:56 schrieb tmishima_at_[hidden]:
<br>
<p><span class="quotelev1">&gt; Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for confusing you. Under the managed condition, actually
</span><br>
<span class="quotelev1">&gt; -np option is not necessary. So, this cmd line also works for me
</span><br>
<span class="quotelev1">&gt; with Torque.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -l nodes=10:ppn=N
</span><br>
<span class="quotelev1">&gt; $ mpirun -map-by slot:pe=N ./inverse.exe
</span><br>
<p>Aha, yes. Works in SGE too.
<br>
<p>To make the notation of threads generic, what about an extension to use:
<br>
<p>-map-by slot:pe=omp
<br>
<p>where the literal &quot;omp&quot; will trigger to use $OMP_NUM_THREADS instead?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; At least, Ralph confirmed it worked with Slurm and I comfirmed
</span><br>
<span class="quotelev1">&gt; with Torque as shown below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage ~]$ qsub -I -l nodes=4:ppn=8
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 8798.manage.cluster to start
</span><br>
<span class="quotelev1">&gt; qsub: job 8798.manage.cluster ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node09 ~]$ cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; node09
</span><br>
<span class="quotelev1">&gt; node09
</span><br>
<span class="quotelev1">&gt; node09
</span><br>
<span class="quotelev1">&gt; node09
</span><br>
<span class="quotelev1">&gt; node09
</span><br>
<span class="quotelev1">&gt; node09
</span><br>
<span class="quotelev1">&gt; node09
</span><br>
<span class="quotelev1">&gt; node09
</span><br>
<span class="quotelev1">&gt; node10
</span><br>
<span class="quotelev1">&gt; node10
</span><br>
<span class="quotelev1">&gt; node10
</span><br>
<span class="quotelev1">&gt; node10
</span><br>
<span class="quotelev1">&gt; node10
</span><br>
<span class="quotelev1">&gt; node10
</span><br>
<span class="quotelev1">&gt; node10
</span><br>
<span class="quotelev1">&gt; node10
</span><br>
<span class="quotelev1">&gt; node11
</span><br>
<span class="quotelev1">&gt; node11
</span><br>
<span class="quotelev1">&gt; node11
</span><br>
<span class="quotelev1">&gt; node11
</span><br>
<span class="quotelev1">&gt; node11
</span><br>
<span class="quotelev1">&gt; node11
</span><br>
<span class="quotelev1">&gt; node11
</span><br>
<span class="quotelev1">&gt; node11
</span><br>
<span class="quotelev1">&gt; node12
</span><br>
<span class="quotelev1">&gt; node12
</span><br>
<span class="quotelev1">&gt; node12
</span><br>
<span class="quotelev1">&gt; node12
</span><br>
<span class="quotelev1">&gt; node12
</span><br>
<span class="quotelev1">&gt; node12
</span><br>
<span class="quotelev1">&gt; node12
</span><br>
<span class="quotelev1">&gt; node12
</span><br>
<span class="quotelev1">&gt; [mishima_at_node09 ~]$ mpirun -map-by slot:pe=8 -display-map
</span><br>
<span class="quotelev1">&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; Data for JOB [8050,1] offset 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node09  Num slots: 8    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8050,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node10  Num slots: 8    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8050,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node11  Num slots: 8    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8050,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node12  Num slots: 8    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8050,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev1">&gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev1">&gt; [mishima_at_node09 ~]$ mpirun -map-by slot:pe=4 -display-map
</span><br>
<span class="quotelev1">&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; Data for JOB [8056,1] offset 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node09  Num slots: 8    Max slots: 0    Num procs: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8056,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8056,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node10  Num slots: 8    Max slots: 0    Num procs: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8056,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8056,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node11  Num slots: 8    Max slots: 0    Num procs: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8056,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8056,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node12  Num slots: 8    Max slots: 0    Num procs: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8056,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [8056,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know why it dosen't work with SGE. Could you show me
</span><br>
<span class="quotelev1">&gt; your output adding -display-map and -mca rmaps_base_verbose 5 options?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, the option -map-by ppr:N:node or ppr:N:socket might be
</span><br>
<span class="quotelev1">&gt; useful for your purpose. The ppr can reduce the slot counts given
</span><br>
<span class="quotelev1">&gt; by RM without binding and allocate N procs by the specified resource.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node09 ~]$ mpirun -map-by ppr:1:node -display-map
</span><br>
<span class="quotelev1">&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; Data for JOB [7913,1] offset 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node09  Num slots: 8    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7913,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node10  Num slots: 8    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7913,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node11  Num slots: 8    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7913,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node12  Num slots: 8    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [7913,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev1">&gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 20.08.2014 um 13:26 schrieb tmishima_at_[hidden]:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reuti,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you want to allocate 10 procs with N threads, the Torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script below should work for you:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qsub -l nodes=10:ppn=N
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -map-by slot:pe=N -np 10 -x OMP_NUM_THREADS=N ./inverse.exe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I played around with giving -np 10 in addition to a Tight Integration.
</span><br>
<span class="quotelev1">&gt; The slot count is not really divided I think, but only 10 out of the
</span><br>
<span class="quotelev1">&gt; granted maximum is used (while on each of the listed
</span><br>
<span class="quotelev2">&gt;&gt; machines an `orted` is started). Due to the fixed allocation this is of
</span><br>
<span class="quotelev1">&gt; course the result we want to achieve as it subtracts bunches of 8 from the
</span><br>
<span class="quotelev1">&gt; given list of machines resp. slots. In SGE it's
</span><br>
<span class="quotelev2">&gt;&gt; sufficient to use and AFAICS it works (without touching the $PE_HOSTFILE
</span><br>
<span class="quotelev1">&gt; any longer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -map-by slot:pe=$OMP_NUM_THREADS -np $(bc &lt;&lt;&lt;&quot;$NSLOTS /
</span><br>
<span class="quotelev1">&gt; $OMP_NUM_THREADS&quot;) ./inverse.exe
</span><br>
<span class="quotelev2">&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and submit with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ qsub -pe orte 80 job.sh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as the variables are distributed to the slave nodes by SGE already.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nevertheless, using -np in addition to the Tight Integration gives a
</span><br>
<span class="quotelev1">&gt; taste of a kind of half-tight integration in some way. And would not work
</span><br>
<span class="quotelev1">&gt; for us because &quot;--bind-to none&quot; can't be used in such a
</span><br>
<span class="quotelev2">&gt;&gt; command (see below) and throws an error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, the openmpi automatically reduces the logical slot count to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by dividing real slot count 10N by binding width of N.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know why you want to use pe=N without binding, but
</span><br>
<span class="quotelev1">&gt; unfortunately
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the openmpi allocates successive cores to each process so far when you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use pe option - it forcibly bind_to core.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In a shared cluster with many users and different MPI libraries in use,
</span><br>
<span class="quotelev1">&gt; only the queuingsystem could know which job got which cores granted. This
</span><br>
<span class="quotelev1">&gt; avoids any oversubscription of cores, while others
</span><br>
<span class="quotelev2">&gt;&gt; are idle.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 20.08.2014 um 06:26 schrieb Tetsuya Mishima:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reuti and Oscar,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm a Torque user and I myself have never used SGE, so I hesitated to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; join
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the discussion.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From my experience with the Torque, the openmpi 1.8 series has
</span><br>
<span class="quotelev1">&gt; already
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; resolved the issue you pointed out in combining MPI with OpenMP.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please try to add --map-by slot:pe=8 option, if you want to use 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then, then openmpi 1.8 should allocate processes properly without any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modification
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of the hostfile provided by the Torque.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In your case(8 threads and 10 procs):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # you have to request 80 slots using SGE command before mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --map-by slot:pe=8 -np 10 ./inverse.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thx for pointing me to this option, for now I can't get it working
</span><br>
<span class="quotelev1">&gt; though
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (in fact, I want to use it without binding essentially). This allows to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tell Open MPI to bind more cores to each of the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes - ok, but does it lower the slot count granted by Torque
</span><br>
<span class="quotelev1">&gt; too? I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mean, was your submission command like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ qsub -l nodes=10:ppn=8 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so that Torque knows, that it should grant and remember this slot
</span><br>
<span class="quotelev1">&gt; count
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of a total of 80 for the correct accounting?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where you can omit --bind-to option because --bind-to core is assumed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as default when pe=N is provided by the user.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am 19.08.2014 um 19:06 schrieb Oscar Mojica:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I discovered what was the error. I forgot include the '-fopenmp'
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled the objects in the Makefile, so the program worked but it
</span><br>
<span class="quotelev1">&gt; didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; divide the job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in threads. Now the program is working and I can use until 15 cores
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine in the queue one.q.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyway i would like to try implement your advice. Well I'm not
</span><br>
<span class="quotelev1">&gt; alone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the cluster so i must implement your second suggestion. The steps
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a) Use '$ qconf -mp orte' to change the allocation rule to 8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The number of slots defined in your used one.q was also increased to
</span><br>
<span class="quotelev1">&gt; 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (`qconf -sq one.q`)?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; b) Set '#$ -pe orte 80' in the script
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; c) I'm not sure how to do this step. I'd appreciate your help here.
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can add some lines to the script to determine the PE_HOSTFILE path and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contents, but i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't know how alter it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For now you can put in your jobscript (just after OMP_NUM_THREAD is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exported):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; awk -v omp_num_threads=$OMP_NUM_THREADS '{ $2/=omp_num_threads;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; print }' $PE_HOSTFILE &gt; $TMPDIR/machines
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export PE_HOSTFILE=$TMPDIR/machines
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =============
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately noone stepped into this discussion, as in my opinion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's a much broader issue which targets all users who want to combine
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with OpenMP. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; queuingsystem should get a proper request for the overall amount of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots the user needs. For now this will be forwarded to Open MPI and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will use this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; information to start the appropriate number of processes (which was
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; achievement for the Tight Integration out-of-the-box of course) and
</span><br>
<span class="quotelev1">&gt; ignores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any setting of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMP_NUM_THREADS. So, where should the generated list of machines be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adjusted; there are several options:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a) The PE of the queuingsystem should do it:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; + a one time setup for the admin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; + in SGE the &quot;start_proc_args&quot; of the PE could alter the
</span><br>
<span class="quotelev1">&gt; $PE_HOSTFILE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - the &quot;start_proc_args&quot; would need to know the number of threads,
</span><br>
<span class="quotelev1">&gt; i.e.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMP_NUM_THREADS must be defined by &quot;qsub -v ...&quot; outside of the
</span><br>
<span class="quotelev1">&gt; jobscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (tricky scanning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of the submitted jobscript for OMP_NUM_THREADS would be too nasty)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - limits to use inside the jobscript calls to libraries behaving in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same way as Open MPI only
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; b) The particular queue should do it in a queue prolog:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same as a) I think
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; c) The user should do it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; + no change in the SGE installation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - each and every user must include it in all the jobscripts to
</span><br>
<span class="quotelev1">&gt; adjust
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the list and export the pointer to the $PE_HOSTFILE, but he could
</span><br>
<span class="quotelev1">&gt; change it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forth and back
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for different steps of the jobscript though
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; d) Open MPI should do it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; + no change in the SGE installation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; + no change to the jobscript
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; + OMP_NUM_THREADS can be altered for different steps of the
</span><br>
<span class="quotelev1">&gt; jobscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while staying inside the granted allocation automatically
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; o should MKL_NUM_THREADS be covered too (does it use OMP_NUM_THREADS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already)?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;PE_HOSTFILE:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo $PE_HOSTFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;cat PE_HOSTFILE:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; cat $PE_HOSTFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for take a time for answer this emails, your advices had
</span><br>
<span class="quotelev1">&gt; been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very useful
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; PS: The version of SGE is   OGS/GE 2011.11p1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: Fri, 15 Aug 2014 20:38:12 +0200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 15.08.2014 um 19:56 schrieb Oscar Mojica:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes, my installation of Open MPI is SGE-aware. I got the
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oscar_at_compute-1-2 ~]$ ompi_info | grep grid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm a bit slow and I didn't understand the las part of your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message. So i made a test trying to solve my doubts.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is the cluster configuration: There are some machines turned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; off but that is no problem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oscar_at_aguia free-noise]$ qhost
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HOSTNAME ARCH NCPU LOAD MEMTOT MEMUSE SWAPTO SWAPUS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; global - - - - - - -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-10 linux-x64 16 0.97 23.6G 558.6M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-11 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-12 linux-x64 16 0.97 23.6G 561.1M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-13 linux-x64 16 0.99 23.6G 558.7M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-14 linux-x64 16 1.00 23.6G 555.1M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-15 linux-x64 16 0.97 23.6G 555.5M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-16 linux-x64 8 0.00 15.7G 296.9M 1000.0M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-17 linux-x64 8 0.00 15.7G 299.4M 1000.0M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-18 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-19 linux-x64 8 - 15.7G - 996.2M -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-2 linux-x64 16 1.19 23.6G 468.1M 1000.0M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-20 linux-x64 8 0.04 15.7G 297.2M 1000.0M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-21 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-22 linux-x64 8 0.00 15.7G 297.2M 1000.0M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-23 linux-x64 8 0.16 15.7G 299.6M 1000.0M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-24 linux-x64 8 0.00 15.7G 291.5M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-25 linux-x64 8 0.04 15.7G 293.4M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-26 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-27 linux-x64 8 0.00 15.7G 297.0M 1000.0M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-29 linux-x64 8 - 15.7G - 1000.0M -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-3 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-30 linux-x64 16 - 23.6G - 996.2M -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-4 linux-x64 16 0.97 23.6G 571.6M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-5 linux-x64 16 1.00 23.6G 559.6M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-6 linux-x64 16 0.66 23.6G 403.1M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-7 linux-x64 16 0.95 23.6G 402.7M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-8 linux-x64 16 0.97 23.6G 556.8M 996.2M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-1-9 linux-x64 16 1.02 23.6G 566.0M 1000.0M 0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I ran my program using only MPI with 10 processors of the queue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q which has 14 machines (compute-1-2 to compute-1-15). Whit 'qstat
</span><br>
<span class="quotelev1">&gt; -t'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oscar_at_aguia free-noise]$ qstat -t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job-ID prior name user state submit/start at queue master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ja-task-ID task-ID state cpu mem io stat failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-2.local MASTER r 00:49:12 554.13753 0.09163
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; one.q_at_compute-1-2.local SLAVE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-5.local SLAVE 1.compute-1-5 r 00:48:53 551.49022
</span><br>
<span class="quotelev1">&gt; 0.09410
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-9.local SLAVE 1.compute-1-9 r 00:50:00 564.22764
</span><br>
<span class="quotelev1">&gt; 0.09409
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-12.local SLAVE 1.compute-1-12 r 00:47:30 535.30379
</span><br>
<span class="quotelev1">&gt; 0.09379
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-13.local SLAVE 1.compute-1-13 r 00:49:51 561.69868
</span><br>
<span class="quotelev1">&gt; 0.09379
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-14.local SLAVE 1.compute-1-14 r 00:49:14 554.60818
</span><br>
<span class="quotelev1">&gt; 0.09379
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-10.local SLAVE 1.compute-1-10 r 00:49:59 562.95487
</span><br>
<span class="quotelev1">&gt; 0.09349
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-15.local SLAVE 1.compute-1-15 r 00:50:01 563.27221
</span><br>
<span class="quotelev1">&gt; 0.09361
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-8.local SLAVE 1.compute-1-8 r 00:49:26 556.68431
</span><br>
<span class="quotelev1">&gt; 0.09349
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2726 0.50500 job oscar r 08/15/2014 12:38:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one.q_at_compute-1-4.local SLAVE 1.compute-1-4 r 00:49:27 556.87510
</span><br>
<span class="quotelev1">&gt; 0.04967
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes, here you got 10 slots (= cores) granted by SGE. So there is
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; free core left inside the allocation of SGE to allow the use of
</span><br>
<span class="quotelev1">&gt; additional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores for your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; threads. If you use more cores than granted by SGE, it will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscribe the machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The issue is now:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a) If you want 8 threads per MPI process, your job will use 80
</span><br>
<span class="quotelev1">&gt; cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in total - for now SGE isn't aware of it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b) Although you specified $fill_up as allocation rule, it looks
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $round_robin. Is there more than one slot defined in the queue
</span><br>
<span class="quotelev1">&gt; definition
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of one.q to get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exclusive access?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c) What version of SGE are you using? Certain ones use cgroups or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bind processes directly to cores (although it usually needs to be
</span><br>
<span class="quotelev1">&gt; requested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by the job:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; first line of `qconf -help`).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In case you are alone in the cluster, you could bypass the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation with b) (unless you are hit by c)). But having a mixture of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users and jobs a different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; handling would be necessary to handle this in a proper way IMO:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a) having a PE with a fixed allocation rule of 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b) requesting this PE with an overall slot count of 80
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c) copy and alter the $PE_HOSTFILE to show only (granted core
</span><br>
<span class="quotelev1">&gt; count
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per machine) divided by (OMP_NUM_THREADS) per entry, change
</span><br>
<span class="quotelev1">&gt; $PE_HOSTFILE so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it points
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to the altered file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; d) Open MPI with a Tight Integration will now start only N process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per machine according to the altered hostfile, in your case one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; e) Your application can start the desired threads and you stay
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inside the granted allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I accessed to the MASTER processor with 'ssh compute-1-2.local' ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and with $ ps -e f and got this, I'm showing only the last lines
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2506 ? Ss 0:00 /usr/sbin/atd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2548 tty1 Ss+ 0:00 /sbin/mingetty /dev/tty1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2550 tty2 Ss+ 0:00 /sbin/mingetty /dev/tty2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2552 tty3 Ss+ 0:00 /sbin/mingetty /dev/tty3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2554 tty4 Ss+ 0:00 /sbin/mingetty /dev/tty4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2556 tty5 Ss+ 0:00 /sbin/mingetty /dev/tty5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2558 tty6 Ss+ 0:00 /sbin/mingetty /dev/tty6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3325 ? Sl 0:04 /opt/gridengine/bin/linux-x64/sge_execd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17688 ? S 0:00 \_ sge_shepherd-2726 -bg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17695 ? Ss 0:00 \_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash /opt/gridengine/default/spool/compute-1-2/job_scripts/2726
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17797 ? S 0:00 \_ /usr/bin/time -f %E /opt/openmpi/bin/mpirun -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 10 ./inverse.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17798 ? S 0:01 \_ /opt/openmpi/bin/mpirun -v -np 10 ./inverse.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17799 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -nostdin -V compute-1-5.local PATH=/opt/openmpi/bin:$PATH ; expo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17800 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -nostdin -V compute-1-9.local PATH=/opt/openmpi/bin:$PATH ; expo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17801 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -nostdin -V compute-1-12.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17802 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -nostdin -V compute-1-13.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17803 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -nostdin -V compute-1-14.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17804 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -nostdin -V compute-1-10.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17805 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -nostdin -V compute-1-15.local PATH=/opt/openmpi/bin:$PATH ; exp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17806 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -nostdin -V compute-1-8.local PATH=/opt/openmpi/bin:$PATH ; expo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17807 ? Sl 0:00 \_ /opt/gridengine/bin/linux-x64/qrsh -inherit&gt;
</span><br>
<span class="quotelev1">&gt; -nostdin -V compute-1-4.local PATH=/opt/openmpi/bin:$PATH ; expo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17826 ? R 31:36 \_ ./inverse.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3429 ? Ssl 0:00 automount --pid-file /var/run/autofs.pid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So the job is using the 10 machines, Until here is all right OK.
</span><br>
<span class="quotelev1">&gt; Do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you think that changing the &quot;allocation_rule &quot; to a number instead
</span><br>
<span class="quotelev1">&gt; $fill_up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes would divide the work in that number of threads?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PS: I have another doubt, what is a slot? is a physical core?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: Thu, 14 Aug 2014 23:54:22 +0200
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think this is a broader issue in case an MPI library is used
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conjunction with threads while running inside a queuing system. First:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; actual installation of Open MPI is SGE-aware you can check with:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ompi_info | grep grid
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then we can look at the definition of your PE: &quot;allocation_rule
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $fill_up&quot;. This means that SGE will grant you 14 slots in total in any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; combination on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available machines, means 8+4+2 slots allocation is an allowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; combination like 4+4+3+3 and so on. Depending on the SGE-awareness it's
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; question: will your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; application just start processes on all nodes and completely
</span><br>
<span class="quotelev1">&gt; disregard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the granted allocation, or as the other extreme does it stays on one
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same machine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for all started processes? On the master node of the parallel job you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can issue:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ps -e f
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (f w/o -) to have a look whether `ssh` or `qrsh -inhert ...` is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used to reach other machines and their requested process count.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now to the common problem in such a set up:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; AFAICS: for now there is no way in the Open MPI + SGE
</span><br>
<span class="quotelev1">&gt; combination
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to specify the number of MPI processes and intended number of threads
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; automatically read by Open MPI while staying inside the granted slot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; count and allocation. So it seems to be necessary to have the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of threads being
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; honored by Open MPI too.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hence specifying e.g. &quot;allocation_rule 8&quot; in such a setup while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requesting 32 processes, would for now start 32 processes by MPI
</span><br>
<span class="quotelev1">&gt; already,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as Open MP reads &gt; the $PE_HOSTFILE and acts accordingly.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI would have to read the generated machine file in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slightly different way regarding threads: a) read the $PE_HOSTFILE, b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; divide the granted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slots per machine by OMP_NUM_THREADS, c) throw an error in case it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not divisible by OMP_NUM_THREADS. Then start one process per quotient.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Would this work for you?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PS: This would also mean to have a couple of PEs in SGE having a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed &quot;allocation_rule&quot;. While this works right now, an extension in
</span><br>
<span class="quotelev1">&gt; SGE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;$fill_up_omp&quot;/&quot;$round_robin_omp&quot; and using OMP_NUM_THREADS there
</span><br>
<span class="quotelev1">&gt; too,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence it must not be specified as an `export` in the job script but
</span><br>
<span class="quotelev1">&gt; either
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the command
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line or inside the job script in #$ lines as job requests. This would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mean to collect slots in bunches of OMP_NUM_THREADS on each machine to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reach the overall
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specified slot count. Whether OMP_NUM_THREADS or n times
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMP_NUM_THREADS is allowed per machine needs to be discussed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PS2: As Univa SGE can also supply a list of granted cores in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $PE_HOSTFILE, it would be an extension to feed this to Open MPI to
</span><br>
<span class="quotelev1">&gt; allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any UGE aware
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; binding.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 14.08.2014 um 21:52 schrieb Oscar Mojica:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Guys
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I changed the line to run the program in the script with both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v --bind-to-none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v
</span><br>
<span class="quotelev1">&gt; --bind-to-socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but I got the same results. When I use man mpirun appears:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -bind-to-none, --bind-to-none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do not bind processes. (Default.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the output of 'qconf -sp orte' is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pe_name orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; slots 9999
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; user_lists NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; xuser_lists NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; start_proc_args /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stop_proc_args /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocation_rule $fill_up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; control_slaves TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; urgency_slots min
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know if the installed Open MPI was compiled with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--with-sge'. How can i know that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; before to think in an hybrid application i was using only MPI
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the program used few processors (14). The cluster possesses 28
</span><br>
<span class="quotelev1">&gt; machines, 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores and 13 with 8 cores totalizing 344 units of processing. When I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; submitted the job (only MPI), the MPI processes were spread to the
</span><br>
<span class="quotelev1">&gt; cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly, for that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reason I created a new queue with 14 machines trying to gain more
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the results were the same in both cases. In the last case i could prove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; were distributed to all machines correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What I must to do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: Thu, 14 Aug 2014 10:10:17 -0400
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Running a hybrid MPI+openMP program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You DEFINITELY need to disable OpenMPI's new default binding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Otherwise,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your N threads will run on a single core. --bind-to socket
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; recommendation for hybrid jobs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Le 2014-08-14 10:04, Jeff Squyres (jsquyres) a 馗rit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know much about OpenMP, but do you need to disable
</span><br>
<span class="quotelev1">&gt; Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI's default bind-to-core functionality (I'm assuming you're using
</span><br>
<span class="quotelev1">&gt; Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1.8.x)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can try &quot;mpirun --bind-to none ...&quot;, which will have Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI not bind MPI processes to cores, which might allow OpenMP to think
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it can use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all the cores, and therefore it will spawn num_cores threads...?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 14, 2014, at 9:50 AM, Oscar Mojica
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;o_mojical_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello everybody
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am trying to run a hybrid mpi + openmp program in a
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I created a queue with 14 machines, each one with 16 cores. The program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; divides the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work among the 14 processors with MPI and within each processor a
</span><br>
<span class="quotelev1">&gt; loop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is also divided into 8 threads for example, using openmp. The problem
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that when I submit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job to the queue the MPI processes don't divide the work into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads and the program prints the number of threads that are working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; within each process as one.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I made a simple test program that uses openmp and I logged
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one machine of the fourteen. I compiled it using gfortran -fopenmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program.f -o exe,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set the OMP_NUM_THREADS environment variable equal to 8 and when I
</span><br>
<span class="quotelev1">&gt; ran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly in the terminal the loop was effectively divided among the
</span><br>
<span class="quotelev1">&gt; cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and for example in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this case the program printed the number of threads equal to 8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is my Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Start of the makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Defining variables
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; objects = inv_grav3d.o funcpdf.o gr3dprm.o fdjac.o dsvd.o
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #f90comp = /opt/openmpi/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; f90comp = /usr/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #switch = -O3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; executable = inverse.exe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; all : $(executable)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $(executable) : $(objects)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $(f90comp) -fopenmp -g -O -o $(executable) $(objects)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rm $(objects)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; %.o: %.f
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $(f90comp) -c $&lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Cleaning everything
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; clean:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rm $(executable)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #	rm $(objects)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # End of the makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the script that i am using is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -j y
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -pe orte 14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -N job
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -q new.q
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/time -f &quot;%E&quot; /opt/openmpi/bin/mpirun -v -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $NSLOTS ./inverse.exe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; am I forgetting something?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oscar Fabian Mojica Ladino
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25016.php">http://www.open-mpi.org/community/lists/users/2014/08/25016.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu饕ec, Universit・瘢雹Laval
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25020.php">http://www.open-mpi.org/community/lists/users/2014/08/25020.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25032.php">http://www.open-mpi.org/community/lists/users/2014/08/25032.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25034.php">http://www.open-mpi.org/community/lists/users/2014/08/25034.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25037.php">http://www.open-mpi.org/community/lists/users/2014/08/25037.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25038.php">http://www.open-mpi.org/community/lists/users/2014/08/25038.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25079.php">http://www.open-mpi.org/community/lists/users/2014/08/25079.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25080.php">http://www.open-mpi.org/community/lists/users/2014/08/25080.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima  tmishima_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25081.php">http://www.open-mpi.org/community/lists/users/2014/08/25081.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25083.php">http://www.open-mpi.org/community/lists/users/2014/08/25083.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25084.php">http://www.open-mpi.org/community/lists/users/2014/08/25084.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25087.php">http://www.open-mpi.org/community/lists/users/2014/08/25087.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25102.php">http://www.open-mpi.org/community/lists/users/2014/08/25102.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25108.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25102.php">tmishima_at_[hidden]: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25096.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
