<?
$subject_val = "Re: [OMPI users] Test OpenMPI on a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 31 19:35:47 2010" -->
<!-- isoreceived="20100201003547" -->
<!-- sent="Mon, 01 Feb 2010 11:35:34 +1100" -->
<!-- isosent="20100201003534" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test OpenMPI on a cluster" -->
<!-- id="1264984535.5851.163.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="941658.32899.qm_at_web63101.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test OpenMPI on a cluster<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-31 19:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11953.php">Kapil Arya: "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11951.php">Constantinos Makassikis: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>In reply to:</strong> <a href="11949.php">Tim: "[OMPI users] Test OpenMPI on a cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems your OpenMPI installation is not PBS-aware.
<br>
<p>Either reinstall OpenMPI configured for PBS (and then you don't even
<br>
need -np 10), or, as Constantinos says, find the PBS nodefile and pass
<br>
that to mpirun.
<br>
<p><p>On Sat, 2010-01-30 at 18:45 -0800, Tim wrote:
<br>
<span class="quotelev1">&gt; Hi,  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; I am learning MPI on a cluster. Here is one simple example. I expect the output would show response from different nodes, but they all respond from the same node node062. I just wonder why and how I can actually get report from different nodes to show MPI actually distributes processes to different nodes? Thanks and regards!
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; ex1.c  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     /* test of MPI */  
</span><br>
<span class="quotelev1">&gt;     #include &quot;mpi.h&quot;  
</span><br>
<span class="quotelev1">&gt;     #include &lt;stdio.h&gt;  
</span><br>
<span class="quotelev1">&gt;     #include &lt;string.h&gt;  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char **argv)  
</span><br>
<span class="quotelev1">&gt;     {  
</span><br>
<span class="quotelev1">&gt;     char idstr[2232]; char buff[22128];  
</span><br>
<span class="quotelev1">&gt;     char processor_name[MPI_MAX_PROCESSOR_NAME];  
</span><br>
<span class="quotelev1">&gt;     int numprocs; int myid; int i; int namelen;  
</span><br>
<span class="quotelev1">&gt;     MPI_Status stat;  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);  
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);  
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);  
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(processor_name, &amp;namelen);  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     if(myid == 0)  
</span><br>
<span class="quotelev1">&gt;     {  
</span><br>
<span class="quotelev1">&gt;       printf(&quot;WE have %d processors\n&quot;, numprocs);  
</span><br>
<span class="quotelev1">&gt;       for(i=1;i&lt;numprocs;i++)  
</span><br>
<span class="quotelev1">&gt;       {  
</span><br>
<span class="quotelev1">&gt;         sprintf(buff, &quot;Hello %d&quot;, i);  
</span><br>
<span class="quotelev1">&gt;         MPI_Send(buff, 128, MPI_CHAR, i, 0, MPI_COMM_WORLD); }  
</span><br>
<span class="quotelev1">&gt;         for(i=1;i&lt;numprocs;i++)  
</span><br>
<span class="quotelev1">&gt;         {  
</span><br>
<span class="quotelev1">&gt;           MPI_Recv(buff, 128, MPI_CHAR, i, 0, MPI_COMM_WORLD, &amp;stat);  
</span><br>
<span class="quotelev1">&gt;           printf(&quot;%s\n&quot;, buff);  
</span><br>
<span class="quotelev1">&gt;         }  
</span><br>
<span class="quotelev1">&gt;     }  
</span><br>
<span class="quotelev1">&gt;     else  
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;       MPI_Recv(buff, 128, MPI_CHAR, 0, 0, MPI_COMM_WORLD, &amp;stat);  
</span><br>
<span class="quotelev1">&gt;       sprintf(idstr, &quot; Processor %d at node %s &quot;, myid, processor_name);  
</span><br>
<span class="quotelev1">&gt;       strcat(buff, idstr);  
</span><br>
<span class="quotelev1">&gt;       strcat(buff, &quot;reporting for duty\n&quot;);  
</span><br>
<span class="quotelev1">&gt;       MPI_Send(buff, 128, MPI_CHAR, 0, 0, MPI_COMM_WORLD);  
</span><br>
<span class="quotelev1">&gt;     }  
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     }  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; ex1.pbs  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     #!/bin/sh  
</span><br>
<span class="quotelev1">&gt;     #  
</span><br>
<span class="quotelev1">&gt;     #This is an example script example.sh  
</span><br>
<span class="quotelev1">&gt;     #  
</span><br>
<span class="quotelev1">&gt;     #These commands set up the Grid Environment for your job:  
</span><br>
<span class="quotelev1">&gt;     #PBS -N ex1  
</span><br>
<span class="quotelev1">&gt;     #PBS -l nodes=10:ppn=1,walltime=1:10:00  
</span><br>
<span class="quotelev1">&gt;     #PBS -q dque  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     # export OMP_NUM_THREADS=4  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;      mpirun -np 10 /home/tim/courses/MPI/examples/ex1  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; compile and run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     [tim_at_user1 examples]$ mpicc ./ex1.c -o ex1   
</span><br>
<span class="quotelev1">&gt;     [tim_at_user1 examples]$ qsub ex1.pbs  
</span><br>
<span class="quotelev1">&gt;     35540.mgt  
</span><br>
<span class="quotelev1">&gt;     [tim_at_user1 examples]$ nano ex1.o35540  
</span><br>
<span class="quotelev1">&gt;     ----------------------------------------  
</span><br>
<span class="quotelev1">&gt;     Begin PBS Prologue Sat Jan 30 21:28:03 EST 2010 1264904883  
</span><br>
<span class="quotelev1">&gt;     Job ID:         35540.mgt  
</span><br>
<span class="quotelev1">&gt;     Username:       tim  
</span><br>
<span class="quotelev1">&gt;     Group:          Brown  
</span><br>
<span class="quotelev1">&gt;     Nodes:          node062 node063 node169 node170 node171 node172 node174 node175  
</span><br>
<span class="quotelev1">&gt;     node176 node177  
</span><br>
<span class="quotelev1">&gt;     End PBS Prologue Sat Jan 30 21:28:03 EST 2010 1264904883  
</span><br>
<span class="quotelev1">&gt;     ----------------------------------------  
</span><br>
<span class="quotelev1">&gt;     WE have 10 processors  
</span><br>
<span class="quotelev1">&gt;     Hello 1 Processor 1 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     Hello 2 Processor 2 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     Hello 3 Processor 3 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     Hello 4 Processor 4 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     Hello 5 Processor 5 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     Hello 6 Processor 6 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     Hello 7 Processor 7 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     Hello 8 Processor 8 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     Hello 9 Processor 9 at node node062 reporting for duty  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     ----------------------------------------  
</span><br>
<span class="quotelev1">&gt;     Begin PBS Epilogue Sat Jan 30 21:28:11 EST 2010 1264904891  
</span><br>
<span class="quotelev1">&gt;     Job ID:         35540.mgt  
</span><br>
<span class="quotelev1">&gt;     Username:       tim  
</span><br>
<span class="quotelev1">&gt;     Group:          Brown  
</span><br>
<span class="quotelev1">&gt;     Job Name:       ex1  
</span><br>
<span class="quotelev1">&gt;     Session:        15533  
</span><br>
<span class="quotelev1">&gt;     Limits:         neednodes=10:ppn=1,nodes=10:ppn=1,walltime=01:10:00  
</span><br>
<span class="quotelev1">&gt;     Resources:      cput=00:00:00,mem=420kb,vmem=8216kb,walltime=00:00:03  
</span><br>
<span class="quotelev1">&gt;     Queue:          dque  
</span><br>
<span class="quotelev1">&gt;     Account:  
</span><br>
<span class="quotelev1">&gt;     Nodes:  node062 node063 node169 node170 node171 node172 node174 node175 node176  
</span><br>
<span class="quotelev1">&gt;     node177  
</span><br>
<span class="quotelev1">&gt;     Killing leftovers...  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     End PBS Epilogue Sat Jan 30 21:28:11 EST 2010 1264904891  
</span><br>
<span class="quotelev1">&gt;     ----------------------------------------
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11953.php">Kapil Arya: "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11951.php">Constantinos Makassikis: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>In reply to:</strong> <a href="11949.php">Tim: "[OMPI users] Test OpenMPI on a cluster"</a>
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
