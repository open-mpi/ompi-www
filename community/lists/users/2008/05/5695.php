<?
$subject_val = "[OMPI users] qsub and limits.conf";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 17 10:58:40 2008" -->
<!-- isoreceived="20080517145840" -->
<!-- sent="Sat, 17 May 2008 16:58:30 +0200" -->
<!-- isosent="20080517145830" -->
<!-- name="Javier Lazaro" -->
<!-- email="flg869_at_[hidden]" -->
<!-- subject="[OMPI users] qsub and limits.conf" -->
<!-- id="5530226b0805170758x4b439aben3a26eccf650ac49c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] qsub and limits.conf<br>
<strong>From:</strong> Javier Lazaro (<em>flg869_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-17 10:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5696.php">Adrian Knoth: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>Previous message:</strong> <a href="5694.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5696.php">Adrian Knoth: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>Reply:</strong> <a href="5696.php">Adrian Knoth: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>Reply:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI users] qsub and limits.conf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have install torque-2.3.0 and openmpi-1.2.3.
<br>
I make tests and I have discovered that the jobs launched with the parameter
<br>
'-hostfile' or '-machinefile' stops are to exceed the limits in the file
<br>
/etc/security/limits.conf
<br>
More details:
<br>
<p>file hola.c
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
int main(int argc, char *argv[]){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int namelen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char pn[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(pn,&amp;namelen);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;system(&quot;bash -c 'ulimit -a'&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i%100000000==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;--&gt; %i --&gt; Hola desde %d, de un total de:
<br>
%d. estoy en %s\n&quot;,i, rank, size,pn);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>##
<br>
<p><span class="quotelev1">&gt; mpicc hola.c
</span><br>
<p>file mpi3.sh
<br>
<p>#!/bin/sh
<br>
<p>#PBS -l nodes=3:ppn=1
<br>
#PBS -N pruebaMPI3
<br>
#PBS -o 3outpruebaMPIout3
<br>
#PBS -e 3errpruebaMPIerr3
<br>
<p>cat ${PBS_NODEFILE}
<br>
<p>mpirun -hostfile ${PBS_NODEFILE} /home/javier/mpi_hola/a.out
<br>
<p>##
<br>
<p>launch job with torque
<br>
<span class="quotelev1">&gt; qsub mpi3.sh
</span><br>
<p>##
<br>
<p>termined
<br>
<p>file 3outpruebaMPIout3
<br>
maquina3b
<br>
maquina2b
<br>
maquina1b
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 8185
<br>
max locked memory       (kbytes, -l) 32
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
stack size              (kbytes, -s) 8192
<br>
*cpu time               (seconds, -t) unlimited            #limit maquina3b*
<br>
max user processes              (-u) 8185
<br>
virtual memory          (kbytes, -v) 2511840
<br>
file locks                      (-x) unlimited
<br>
--&gt; 0 --&gt; Hola desde 0, de un total de: 3. estoy en maquina3b
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 8185
<br>
max locked memory       (kbytes, -l) 32
<br>
max memory size         (kbytes, -m) 880005
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
stack size              (kbytes, -s) 8192
<br>
*cpu time               (seconds, -t) 60        #limit maquina2b*
<br>
max user processes              (-u) 8185
<br>
virtual memory          (kbytes, -v) 2511840
<br>
file locks                      (-x) unlimited
<br>
--&gt; 0 --&gt; Hola desde 1, de un total de: 3. estoy en maquina2b
<br>
--&gt; 100000000 --&gt; Hola desde 0, de un total de: 3. estoy en maquina3b
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 8185
<br>
max locked memory       (kbytes, -l) 32
<br>
max memory size         (kbytes, -m) 880005
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
stack size              (kbytes, -s) 8192
<br>
*cpu time               (seconds, -t) 60        #limit maquina1b*
<br>
max user processes              (-u) 8185
<br>
virtual memory          (kbytes, -v) 2511840
<br>
file locks                      (-x) unlimited
<br>
--&gt; 0 --&gt; Hola desde 2, de un total de: 3. estoy en maquina1b
<br>
--&gt; 100000000 --&gt; Hola desde 1, de un total de: 3. estoy en maquina2b
<br>
--&gt; 200000000 --&gt; Hola desde 0, de un total de: 3. estoy en maquina3b
<br>
--&gt; 100000000 --&gt; Hola desde 2, de un total de: 3. estoy en maquina1b
<br>
--&gt; 200000000 --&gt; Hola desde 1, de un total de: 3. estoy en maquina2b
<br>
........
<br>
--&gt; -500000000 --&gt; Hola desde 1, de un total de: 3. estoy en maquina2b
<br>
*1 additional process aborted (not shown)
<br>
1 process killed (possibly by Open MPI)*
<br>
<p>##
<br>
<p>file 3errpruebaMPIerr3
<br>
<p>mpirun noticed that job rank 0 with PID 10839 on node maquina3b exited on
<br>
signal 15 (Terminated).
<br>
<p>---------------------------
<br>
I have limited time of cpu at 60 seconds in all nodes. Torque modify this
<br>
limit only for maquina3b.
<br>
I think that torque should modify cpu's limit in the resf of nodes.
<br>
where is the error?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5696.php">Adrian Knoth: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>Previous message:</strong> <a href="5694.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5696.php">Adrian Knoth: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>Reply:</strong> <a href="5696.php">Adrian Knoth: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>Reply:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI users] qsub and limits.conf"</a>
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
