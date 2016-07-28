<?
$subject_val = "[OMPI users] Test OpenMPI on a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 21:46:02 2010" -->
<!-- isoreceived="20100131024602" -->
<!-- sent="Sat, 30 Jan 2010 18:45:57 -0800 (PST)" -->
<!-- isosent="20100131024557" -->
<!-- name="Tim" -->
<!-- email="timlee126_at_[hidden]" -->
<!-- subject="[OMPI users] Test OpenMPI on a cluster" -->
<!-- id="941658.32899.qm_at_web63101.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Test OpenMPI on a cluster<br>
<strong>From:</strong> Tim (<em>timlee126_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 21:45:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11950.php">Yiannis Papadopoulos: "[OMPI users] Create group in a non-collective way"</a>
<li><strong>Previous message:</strong> <a href="11948.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11951.php">Constantinos Makassikis: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>Reply:</strong> <a href="11951.php">Constantinos Makassikis: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>Reply:</strong> <a href="11952.php">Terry Frankcombe: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
I am learning MPI on a cluster. Here is one simple example. I expect the output would show response from different nodes, but they all respond from the same node node062. I just wonder why and how I can actually get report from different nodes to show MPI actually distributes processes to different nodes? Thanks and regards!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
ex1.c  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* test of MPI */  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &quot;mpi.h&quot;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;string.h&gt;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int main(int argc, char **argv)  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char idstr[2232]; char buff[22128];  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int numprocs; int myid; int i; int namelen;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status stat;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(myid == 0)  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;WE have %d processors\n&quot;, numprocs);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=1;i&lt;numprocs;i++)  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(buff, &quot;Hello %d&quot;, i);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buff, 128, MPI_CHAR, i, 0, MPI_COMM_WORLD); }  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=1;i&lt;numprocs;i++)  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buff, 128, MPI_CHAR, i, 0, MPI_COMM_WORLD, &amp;stat);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s\n&quot;, buff);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buff, 128, MPI_CHAR, 0, 0, MPI_COMM_WORLD, &amp;stat);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(idstr, &quot; Processor %d at node %s &quot;, myid, processor_name);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcat(buff, idstr);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcat(buff, &quot;reporting for duty\n&quot;);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buff, 128, MPI_CHAR, 0, 0, MPI_COMM_WORLD);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
ex1.pbs  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#!/bin/sh  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#This is an example script example.sh  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#These commands set up the Grid Environment for your job:  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#PBS -N ex1  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#PBS -l nodes=10:ppn=1,walltime=1:10:00  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#PBS -q dque  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# export OMP_NUM_THREADS=4  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 10 /home/tim/courses/MPI/examples/ex1  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
compile and run:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[tim_at_user1 examples]$ mpicc ./ex1.c -o ex1   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tim_at_user1 examples]$ qsub ex1.pbs  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;35540.mgt  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tim_at_user1 examples]$ nano ex1.o35540  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;----------------------------------------  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Begin PBS Prologue Sat Jan 30 21:28:03 EST 2010 1264904883  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Job ID:         35540.mgt  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Username:       tim  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group:          Brown  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nodes:          node062 node063 node169 node170 node171 node172 node174 node175  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node176 node177  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;End PBS Prologue Sat Jan 30 21:28:03 EST 2010 1264904883  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;----------------------------------------  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;WE have 10 processors  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 1 Processor 1 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 2 Processor 2 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 3 Processor 3 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 4 Processor 4 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 5 Processor 5 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 6 Processor 6 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 7 Processor 7 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 8 Processor 8 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello 9 Processor 9 at node node062 reporting for duty  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;----------------------------------------  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Begin PBS Epilogue Sat Jan 30 21:28:11 EST 2010 1264904891  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Job ID:         35540.mgt  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Username:       tim  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group:          Brown  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Job Name:       ex1  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Session:        15533  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Limits:         neednodes=10:ppn=1,nodes=10:ppn=1,walltime=01:10:00  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Resources:      cput=00:00:00,mem=420kb,vmem=8216kb,walltime=00:00:03  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Queue:          dque  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Account:  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nodes:  node062 node063 node169 node170 node171 node172 node174 node175 node176  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node177  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Killing leftovers...  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;End PBS Epilogue Sat Jan 30 21:28:11 EST 2010 1264904891  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;----------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11950.php">Yiannis Papadopoulos: "[OMPI users] Create group in a non-collective way"</a>
<li><strong>Previous message:</strong> <a href="11948.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11951.php">Constantinos Makassikis: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>Reply:</strong> <a href="11951.php">Constantinos Makassikis: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>Reply:</strong> <a href="11952.php">Terry Frankcombe: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
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
