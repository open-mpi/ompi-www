<?
$subject_val = "Re: [OMPI users] qsub and limits.conf";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 17 13:16:55 2008" -->
<!-- isoreceived="20080517171655" -->
<!-- sent="Sat, 17 May 2008 13:16:48 -0400" -->
<!-- isosent="20080517171648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub and limits.conf" -->
<!-- id="E579FE4B-0AB8-4C92-A898-FF1EF5F81E40_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5530226b0805170758x4b439aben3a26eccf650ac49c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] qsub and limits.conf<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-17 13:16:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5698.php">Nysal Jan: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Previous message:</strong> <a href="5696.php">Adrian Knoth: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>In reply to:</strong> <a href="5695.php">Javier Lazaro: "[OMPI users] qsub and limits.conf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using the native Torque capabilities to launch Open MPI  
<br>
jobs, note that limits.conf is not necessarily obeyed.  I'm not a  
<br>
Torque expert, but you should probably check out:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
<br>
<p>And check the Torque docs about how it propagates and enforces such  
<br>
limits.
<br>
<p><p>On May 17, 2008, at 10:58 AM, Javier Lazaro wrote:
<br>
<p><span class="quotelev1">&gt; I have install torque-2.3.0 and openmpi-1.2.3.
</span><br>
<span class="quotelev1">&gt; I make tests and I have discovered that the jobs launched with the  
</span><br>
<span class="quotelev1">&gt; parameter '-hostfile' or '-machinefile' stops are to exceed the  
</span><br>
<span class="quotelev1">&gt; limits in the file /etc/security/limits.conf
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; file hola.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]){
</span><br>
<span class="quotelev1">&gt;         int rank;
</span><br>
<span class="quotelev1">&gt;         int size;
</span><br>
<span class="quotelev1">&gt;         int i;
</span><br>
<span class="quotelev1">&gt;         int namelen;
</span><br>
<span class="quotelev1">&gt;         char pn[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size(MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;size);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;         MPI_Get_processor_name(pn,&amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         sleep(rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         system(&quot;bash -c 'ulimit -a'&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for (i=0;;i++) {
</span><br>
<span class="quotelev1">&gt;                 if (i%100000000==0) {
</span><br>
<span class="quotelev1">&gt;                         printf(&quot;--&gt; %i --&gt; Hola desde %d, de un  
</span><br>
<span class="quotelev1">&gt; total de: %d. estoy en %s\n&quot;,i, rank, size,pn);
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpicc hola.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; file mpi3.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=3:ppn=1
</span><br>
<span class="quotelev1">&gt; #PBS -N pruebaMPI3
</span><br>
<span class="quotelev1">&gt; #PBS -o 3outpruebaMPIout3
</span><br>
<span class="quotelev1">&gt; #PBS -e 3errpruebaMPIerr3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat ${PBS_NODEFILE}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile ${PBS_NODEFILE} /home/javier/mpi_hola/a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; launch job with torque
</span><br>
<span class="quotelev2">&gt; &gt; qsub mpi3.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; termined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; file 3outpruebaMPIout3
</span><br>
<span class="quotelev1">&gt; maquina3b
</span><br>
<span class="quotelev1">&gt; maquina2b
</span><br>
<span class="quotelev1">&gt; maquina1b
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 8185
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited            #limit  
</span><br>
<span class="quotelev1">&gt; maquina3b
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 8185
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) 2511840
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; --&gt; 0 --&gt; Hola desde 0, de un total de: 3. estoy en maquina3b
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 8185
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) 880005
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) 60        #limit maquina2b
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 8185
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) 2511840
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; --&gt; 0 --&gt; Hola desde 1, de un total de: 3. estoy en maquina2b
</span><br>
<span class="quotelev1">&gt; --&gt; 100000000 --&gt; Hola desde 0, de un total de: 3. estoy en maquina3b
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 8185
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) 880005
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) 60        #limit maquina1b
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 8185
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) 2511840
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; --&gt; 0 --&gt; Hola desde 2, de un total de: 3. estoy en maquina1b
</span><br>
<span class="quotelev1">&gt; --&gt; 100000000 --&gt; Hola desde 1, de un total de: 3. estoy en maquina2b
</span><br>
<span class="quotelev1">&gt; --&gt; 200000000 --&gt; Hola desde 0, de un total de: 3. estoy en maquina3b
</span><br>
<span class="quotelev1">&gt; --&gt; 100000000 --&gt; Hola desde 2, de un total de: 3. estoy en maquina1b
</span><br>
<span class="quotelev1">&gt; --&gt; 200000000 --&gt; Hola desde 1, de un total de: 3. estoy en maquina2b
</span><br>
<span class="quotelev1">&gt; ........
</span><br>
<span class="quotelev1">&gt; --&gt; -500000000 --&gt; Hola desde 1, de un total de: 3. estoy en maquina2b
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; file 3errpruebaMPIerr3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 10839 on node maquina3b  
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt; I have limited time of cpu at 60 seconds in all nodes. Torque modify  
</span><br>
<span class="quotelev1">&gt; this limit only for maquina3b.
</span><br>
<span class="quotelev1">&gt; I think that torque should modify cpu's limit in the resf of nodes.
</span><br>
<span class="quotelev1">&gt; where is the error?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5698.php">Nysal Jan: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Previous message:</strong> <a href="5696.php">Adrian Knoth: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>In reply to:</strong> <a href="5695.php">Javier Lazaro: "[OMPI users] qsub and limits.conf"</a>
<!-- nextthread="start" -->
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
