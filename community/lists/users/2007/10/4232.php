<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 12:49:15 2007" -->
<!-- isoreceived="20071017164915" -->
<!-- sent="Wed, 17 Oct 2007 18:49:05 +0200" -->
<!-- isosent="20071017164905" -->
<!-- name="Vittorio Zaccaria" -->
<!-- email="zaccaria_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI + SGE Problem" -->
<!-- id="9FB7C865-25DD-42DA-99B9-13A7E81B9B0C_at_elet.polimi.it" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Vittorio Zaccaria (<em>zaccaria_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 12:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4233.php">Reuti: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Previous message:</strong> <a href="4231.php">Jim Kusznir: "[OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4233.php">Reuti: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Reply:</strong> <a href="4233.php">Reuti: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;I am just trying to run a very simple application using mpirun in  
<br>
an SGE 6 environment.
<br>
The job is called 'example' and it is submitted to the SGE  
<br>
environment with the
<br>
following command:
<br>
<p><span class="quotelev1"> &gt; qsub -pe parallel 2 example
</span><br>
<p>where 'parallel' is a working parallel environment.
<br>
'example' is a very simple script which executes the command  
<br>
'hostname' on two MPI nodes (I enabled some debug options):
<br>
<p>mpirun --debug-daemons --mca pls_gridengine_debug 1 --mca  
<br>
pls_rsh_agent ssh --prefix /home/dei/931277/openmpi/build/image --mca  
<br>
pls_gridengine_verbose 1 -np 2 hostname
<br>
<p>The job fails with the following output:
<br>
<p>[compute-1-16:11144] pls:gridengine: final template argv:
<br>
[compute-1-16:11144] pls:gridengine:     qrsh -inherit -noshell - 
<br>
nostdin -V -verbose &lt;template&gt; orted --no-daemonize --debug-daemons -- 
<br>
bootprox
<br>
y 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename  
<br>
&lt;template&gt; --universe 931277_at_compute-1-16:default-universe-11144 -- 
<br>
nsreplica &quot;0.0
<br>
.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot; --gprreplica  
<br>
&quot;0.0.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot;
<br>
[compute-1-16:11144] pls:gridengine: reset PATH: /home/dei/931277/ 
<br>
openmpi/build/image/bin:/home/dei/931277/openmpi/build/image/bin:/ 
<br>
home/dei/93
<br>
1277/gsl/build/image/bin:/home/dei/931277/openmpi/build/image/bin:/ 
<br>
home/dei/931277/openmpi/build/image/bin:/home/dei/931277/gsl/build/ 
<br>
image/bin
<br>
:/apps/sge6/bin/lx24-amd64:/usr/kerberos/bin:/scratch/11780.1.all.q:/ 
<br>
usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/apps/local/bin:/opt/ 
<br>
intel_fc_8
<br>
0/bin:/apps/pgi/linux86/5.1/bin:/home/dei/931277/bin:/home/dei/931277/ 
<br>
bin:/home/dei/931277/bin
<br>
[compute-1-16:11144] pls:gridengine: reset LD_LIBRARY_PATH: /home/dei/ 
<br>
931277/openmpi/build/image/lib:/home/dei/931277/openmpi/build/image/ 
<br>
lib:/
<br>
home/dei/931277/gsl/build/image/lib:/home/dei/931277/readline/build/ 
<br>
image/lib
<br>
[compute-1-16:11144] pls:gridengine: launching on node  
<br>
compute-1-16.hpc.polimi.it
<br>
[compute-1-16:11144] pls:gridengine: parent
<br>
[compute-1-16:11144] pls:gridengine: launching on node  
<br>
compute-1-8.hpc.polimi.it
<br>
[compute-1-16:11144] pls:gridengine: parent
<br>
[compute-1-16:11144] pls:gridengine: exec_argv[0]=qrsh, exec_path=// 
<br>
apps/sge6/bin/lx24-amd64/qrsh
<br>
[compute-1-16:11144] pls:gridengine: exec_argv[0]=qrsh, exec_path=// 
<br>
apps/sge6/bin/lx24-amd64/qrsh
<br>
[compute-1-16:11144] pls:gridengine: orted_path=/home/dei/931277/ 
<br>
openmpi/build/image/bin/orted
<br>
[compute-1-16:11144] pls:gridengine: changing to directory /home/dei/ 
<br>
931277
<br>
[compute-1-16:11144] pls:gridengine: orted_path=/home/dei/931277/ 
<br>
openmpi/build/image/bin/orted
<br>
[compute-1-16:11144] pls:gridengine: changing to directory /home/dei/ 
<br>
931277
<br>
[compute-1-16:11144] pls:gridengine: executing: qrsh -inherit - 
<br>
noshell -nostdin -V -verbose compute-1-16.hpc.polimi.it /home/dei/ 
<br>
931277/openmpi
<br>
/build/image/bin/orted --no-daemonize --debug-daemons --bootproxy 1 -- 
<br>
name 0.0.1 --num_procs 3 --vpid_start 0 --nodename  
<br>
compute-1-16.hpc.polim
<br>
i.it --universe 931277_at_compute-1-16:default-universe-11144 -- 
<br>
nsreplica &quot;0.0.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot;  
<br>
--gprreplica
<br>
&quot;0.0.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot;
<br>
[compute-1-16:11144] pls:gridengine: executing: qrsh -inherit - 
<br>
noshell -nostdin -V -verbose compute-1-8.hpc.polimi.it /home/dei/ 
<br>
931277/openmpi/
<br>
build/image/bin/orted --no-daemonize --debug-daemons --bootproxy 1 -- 
<br>
name 0.0.2 --num_procs 3 --vpid_start 0 --nodename  
<br>
compute-1-8.hpc.polimi.
<br>
it --universe 931277_at_compute-1-16:default-universe-11144 --nsreplica  
<br>
&quot;0.0.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot; -- 
<br>
gprreplica &quot;0
<br>
.0.0;tcp://192.168.1.116:33076;tcp://172.16.1.116:33076&quot;
<br>
Starting server daemon at host &quot;compute-1-8.hpc.polimi.it&quot;
<br>
Starting server daemon at host &quot;compute-1-16.hpc.polimi.it&quot;
<br>
error: executing task of job 11780 failed:
<br>
error: executing task of job 11780 failed:
<br>
[compute-1-16:11144] ERROR: A daemon on node  
<br>
compute-1-8.hpc.polimi.it failed to start as expected.
<br>
[compute-1-16:11144] ERROR: There may be more information available from
<br>
[compute-1-16:11144] ERROR: the 'qstat -t' command on the Grid Engine  
<br>
tasks.
<br>
[compute-1-16:11144] ERROR: If the problem persists, please restart the
<br>
[compute-1-16:11144] ERROR: Grid Engine PE job
<br>
[compute-1-16:11144] ERROR: The daemon exited unexpectedly with  
<br>
status 1.
<br>
[compute-1-16:11144] ERROR: A daemon on node  
<br>
compute-1-16.hpc.polimi.it failed to start as expected.
<br>
[compute-1-16:11144] ERROR: There may be more information available from
<br>
[compute-1-16:11144] ERROR: the 'qstat -t' command on the Grid Engine  
<br>
tasks.
<br>
[compute-1-16:11144] ERROR: If the problem persists, please restart the
<br>
[compute-1-16:11144] ERROR: Grid Engine PE job
<br>
[compute-1-16:11144] ERROR: The daemon exited unexpectedly with  
<br>
status 1.
<br>
<p><p>It seems that 'orted' daemons just fail to start due to some reason,  
<br>
but no message
<br>
is given:
<br>
<p>error: executing task of job 11780 failed:
<br>
<p>Executing 'qstat -t' shows two pending jobs, one marked as MASTER,  
<br>
the other marked as SLAVE.
<br>
<p>Please note that if I run mpirun directly from the command line, it  
<br>
just works fine.
<br>
<p>Any suggestions?
<br>
<p>Thanks,
<br>
<p>Vittorio
<br>
<p><p><p><pre>
--
Vittorio Zaccaria, Ph. D.
Politecnico di Milano
Dipartimento di Elettronica e Informazione
Via Giuseppe Ponzio 34/5 - 20133 Milano
E-mail: zaccaria_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4233.php">Reuti: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Previous message:</strong> <a href="4231.php">Jim Kusznir: "[OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4233.php">Reuti: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Reply:</strong> <a href="4233.php">Reuti: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
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
