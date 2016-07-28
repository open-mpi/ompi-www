<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 13:48:39 2007" -->
<!-- isoreceived="20071017174839" -->
<!-- sent="Wed, 17 Oct 2007 19:48:39 +0200" -->
<!-- isosent="20071017174839" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + SGE Problem" -->
<!-- id="F600DB5C-F4A5-4649-B7F7-78E23B4E7534_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9FB7C865-25DD-42DA-99B9-13A7E81B9B0C_at_elet.polimi.it" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 13:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4234.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Previous message:</strong> <a href="4232.php">Vittorio Zaccaria: "[OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>In reply to:</strong> <a href="4232.php">Vittorio Zaccaria: "[OMPI users] OpenMPI + SGE Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4237.php">Vittorio Zaccaria: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Reply:</strong> <a href="4237.php">Vittorio Zaccaria: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 17.10.2007 um 18:49 schrieb Vittorio Zaccaria:
<br>
<p><span class="quotelev1">&gt;  I am just trying to run a very simple application using mpirun in  
</span><br>
<span class="quotelev1">&gt; an SGE 6 environment.
</span><br>
<span class="quotelev1">&gt; The job is called 'example' and it is submitted to the SGE  
</span><br>
<span class="quotelev1">&gt; environment with the
</span><br>
<span class="quotelev1">&gt; following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; qsub -pe parallel 2 example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where 'parallel' is a working parallel environment.
</span><br>
<span class="quotelev1">&gt; 'example' is a very simple script which executes the command  
</span><br>
<span class="quotelev1">&gt; 'hostname' on two MPI nodes (I enabled some debug options):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --debug-daemons --mca pls_gridengine_debug 1 --mca  
</span><br>
<span class="quotelev1">&gt; pls_rsh_agent ssh --prefix /home/dei/931277/openmpi/build/image -- 
</span><br>
<span class="quotelev1">&gt; mca pls_gridengine_verbose 1 -np 2 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job fails with the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: final template argv:
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine:     qrsh -inherit -noshell - 
</span><br>
<span class="quotelev1">&gt; nostdin -V -verbose &lt;template&gt; orted --no-daemonize --debug-daemons  
</span><br>
<span class="quotelev1">&gt; --bootprox
</span><br>
<span class="quotelev1">&gt; y 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; &lt;template&gt; --universe 931277_at_compute-1-16:default-universe-11144 -- 
</span><br>
<span class="quotelev1">&gt; nsreplica &quot;0.0
</span><br>
<span class="quotelev1">&gt; .0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot;
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: reset PATH: /home/dei/931277/ 
</span><br>
<span class="quotelev1">&gt; openmpi/build/image/bin:/home/dei/931277/openmpi/build/image/bin:/ 
</span><br>
<span class="quotelev1">&gt; home/dei/93
</span><br>
<span class="quotelev1">&gt; 1277/gsl/build/image/bin:/home/dei/931277/openmpi/build/image/bin:/ 
</span><br>
<span class="quotelev1">&gt; home/dei/931277/openmpi/build/image/bin:/home/dei/931277/gsl/build/ 
</span><br>
<span class="quotelev1">&gt; image/bin
</span><br>
<span class="quotelev1">&gt; :/apps/sge6/bin/lx24-amd64:/usr/kerberos/bin:/scratch/ 
</span><br>
<span class="quotelev1">&gt; 11780.1.all.q:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/apps/ 
</span><br>
<span class="quotelev1">&gt; local/bin:/opt/intel_fc_8
</span><br>
<span class="quotelev1">&gt; 0/bin:/apps/pgi/linux86/5.1/bin:/home/dei/931277/bin:/home/dei/ 
</span><br>
<span class="quotelev1">&gt; 931277/bin:/home/dei/931277/bin
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: reset LD_LIBRARY_PATH: /home/ 
</span><br>
<span class="quotelev1">&gt; dei/931277/openmpi/build/image/lib:/home/dei/931277/openmpi/build/ 
</span><br>
<span class="quotelev1">&gt; image/lib:/
</span><br>
<span class="quotelev1">&gt; home/dei/931277/gsl/build/image/lib:/home/dei/931277/readline/build/ 
</span><br>
<span class="quotelev1">&gt; image/lib
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: launching on node  
</span><br>
<span class="quotelev1">&gt; compute-1-16.hpc.polimi.it
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: parent
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: launching on node  
</span><br>
<span class="quotelev1">&gt; compute-1-8.hpc.polimi.it
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: parent
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: exec_argv[0]=qrsh, exec_path=// 
</span><br>
<span class="quotelev1">&gt; apps/sge6/bin/lx24-amd64/qrsh
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: exec_argv[0]=qrsh, exec_path=// 
</span><br>
<span class="quotelev1">&gt; apps/sge6/bin/lx24-amd64/qrsh
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: orted_path=/home/dei/931277/ 
</span><br>
<span class="quotelev1">&gt; openmpi/build/image/bin/orted
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: changing to directory /home/ 
</span><br>
<span class="quotelev1">&gt; dei/931277
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: orted_path=/home/dei/931277/ 
</span><br>
<span class="quotelev1">&gt; openmpi/build/image/bin/orted
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: changing to directory /home/ 
</span><br>
<span class="quotelev1">&gt; dei/931277
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: executing: qrsh -inherit - 
</span><br>
<span class="quotelev1">&gt; noshell -nostdin -V -verbose compute-1-16.hpc.polimi.it /home/dei/ 
</span><br>
<span class="quotelev1">&gt; 931277/openmpi
</span><br>
<span class="quotelev1">&gt; /build/image/bin/orted --no-daemonize --debug-daemons --bootproxy 1  
</span><br>
<span class="quotelev1">&gt; --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; compute-1-16.hpc.polim
</span><br>
<span class="quotelev1">&gt; i.it --universe 931277_at_compute-1-16:default-universe-11144 -- 
</span><br>
<span class="quotelev1">&gt; nsreplica &quot;0.0.0;tcp://192.168.1.116:33076;tcp:// 
</span><br>
<span class="quotelev1">&gt; 172.16.1.116:33076&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot;
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] pls:gridengine: executing: qrsh -inherit - 
</span><br>
<span class="quotelev1">&gt; noshell -nostdin -V -verbose compute-1-8.hpc.polimi.it /home/dei/ 
</span><br>
<span class="quotelev1">&gt; 931277/openmpi/
</span><br>
<span class="quotelev1">&gt; build/image/bin/orted --no-daemonize --debug-daemons --bootproxy 1  
</span><br>
<span class="quotelev1">&gt; --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; compute-1-8.hpc.polimi.
</span><br>
<span class="quotelev1">&gt; it --universe 931277_at_compute-1-16:default-universe-11144 -- 
</span><br>
<span class="quotelev1">&gt; nsreplica &quot;0.0.0;tcp://192.168.1.116:33076;tcp:// 
</span><br>
<span class="quotelev1">&gt; 172.16.1.116:33076&quot; --gprreplica &quot;0
</span><br>
<span class="quotelev1">&gt; .0.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot;
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;compute-1-8.hpc.polimi.it&quot;
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;compute-1-16.hpc.polimi.it&quot;
</span><br>
<span class="quotelev1">&gt; error: executing task of job 11780 failed:
</span><br>
<span class="quotelev1">&gt; error: executing task of job 11780 failed:
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: A daemon on node  
</span><br>
<span class="quotelev1">&gt; compute-1-8.hpc.polimi.it failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: the 'qstat -t' command on the Grid  
</span><br>
<span class="quotelev1">&gt; Engine tasks.
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: If the problem persists, please restart  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 1.
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: A daemon on node  
</span><br>
<span class="quotelev1">&gt; compute-1-16.hpc.polimi.it failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: the 'qstat -t' command on the Grid  
</span><br>
<span class="quotelev1">&gt; Engine tasks.
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: If the problem persists, please restart  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [compute-1-16:11144] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that 'orted' daemons just fail to start due to some  
</span><br>
<span class="quotelev1">&gt; reason, but no message
</span><br>
<span class="quotelev1">&gt; is given:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error: executing task of job 11780 failed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executing 'qstat -t' shows two pending jobs, one marked as MASTER,  
</span><br>
<span class="quotelev1">&gt; the other marked as SLAVE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note that if I run mpirun directly from the command line, it  
</span><br>
<span class="quotelev1">&gt; just works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<p>when running under SGE it will try to use the qrsh command. For this  
<br>
to work, control_slaves  must be set to true, and there must not run  
<br>
any firewall on the machines, as a random port will be used for  
<br>
communication.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4234.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Previous message:</strong> <a href="4232.php">Vittorio Zaccaria: "[OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>In reply to:</strong> <a href="4232.php">Vittorio Zaccaria: "[OMPI users] OpenMPI + SGE Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4237.php">Vittorio Zaccaria: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Reply:</strong> <a href="4237.php">Vittorio Zaccaria: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
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
