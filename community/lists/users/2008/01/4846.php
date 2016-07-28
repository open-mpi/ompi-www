<?
$subject_val = "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 13:41:15 2008" -->
<!-- isoreceived="20080117184115" -->
<!-- sent="Thu, 17 Jan 2008 13:41:09 -0500" -->
<!-- isosent="20080117184109" -->
<!-- name="Rajesh Sudarsan" -->
<!-- email="rsudarsan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge" -->
<!-- id="41935ab00801171041o7c924271g38833ba67fea0675_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41935ab00801142133o2d503cf1u8da5f720a19bdf1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge<br>
<strong>From:</strong> Rajesh Sudarsan (<em>rsudarsan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-17 13:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4845.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4830.php">Rajesh Sudarsan: "[OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a followup to my problem, I tested this sample code with LAM/MPI and it
<br>
worked perfectly without any segmentation faults.  Has any one tried this
<br>
and faced this isue? Any help will be appreciated.
<br>
<p>Regards,
<br>
Rajesh
<br>
<p>---------- Forwarded message ----------
<br>
From: Rajesh Sudarsan &lt;rsudarsan_at_[hidden]&gt;
<br>
Date: Jan 15, 2008 12:33 AM
<br>
Subject: MPI_Finalize segmentation fault with MPI_Intercomm_merge
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p>Hi,
<br>
I am trying to write a simple code which does the following -
<br>
A master process running on 1 processor spawn 4 processes using the
<br>
MPI_Comm_spawn_multiple command. After spawning, the intercommunicator
<br>
between the master and the spawned processes are merged using
<br>
MPI_Intercomm_merge to create a new common intracommunicator for the
<br>
expanded set of processes. These new set of processes call MPI_Comm_spawn to
<br>
create more processes and merged together to get a new intracomm. These
<br>
steps are repeated over a loop.
<br>
<p>Now the problem is whenI  call MPI_Finalize at the end of the loop, I get a
<br>
segmentation fault. I do not get segmentation fault if I run the loop only
<br>
once and call MPI_Intercomm_merge only once.
<br>
<p>Is there something wrong with my program or is it a known issue with
<br>
MPI_Intercomm_merge when called multiple times?
<br>
<p>I have pasted the sample code below. It has 3 files - master.c, spawn.c,
<br>
hello.c. I will be glad to clarify if anything looks confusing. Any help
<br>
will be appreciated.
<br>
<p>/****************************************************************************************/
<br>
Master function. This function calls MPI_Comm_spawn_multiple the first time.
<br>
( master.c)
<br>
/*****************************************************************************************/
<br>
<p>/*Global variables*/
<br>
MPI_Comm grid_comm; /*new global communicator after spawning*/
<br>
int loop=0; /*number of iterations*/
<br>
int newprocess = -1;  /* Variable to identify whether the current process is
<br>
an old process or a spawned process.*/
<br>
<p><p>int main (int argc, char ** argv)
<br>
{
<br>
<p>&nbsp;&nbsp;int size,rank;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;grid_comm=MPI_COMM_WORLD;
<br>
<p>&nbsp;&nbsp;newprocess=0;
<br>
<p>&nbsp;&nbsp;for( ;loop &lt; 2; loop++){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;\n\nLOOP in main =%d\n&quot;,loop);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicomm_spawn();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*Broacasting the loop value to spawned processes so that the new
<br>
processes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;join the next iteration with the correct loop value.*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;loop,1,MPI_INT,0,grid_comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(grid_comm, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(grid_comm, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;fprintf(stdout,&quot;Exiting...main..rank=%d\n&quot;,rank); fflush(stdout);
<br>
&nbsp;&nbsp;MPI_Barrier(grid_comm);
<br>
&nbsp;&nbsp;MPI_Comm_free(&amp;grid_comm);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p><p>/**********************/
<br>
Spawning function (spawn.c)
<br>
/********************/
<br>
<p>extern MPI_Comm grid_comm;
<br>
<p>int mpicomm_spawn()
<br>
{
<br>
<p>&nbsp;&nbsp;MPI_Comm parent, intercomm;
<br>
&nbsp;&nbsp;int rank, nprocs=4, size,nspawned;
<br>
&nbsp;&nbsp;MPI_Info info[4];
<br>
&nbsp;&nbsp;char *host = (char *) &quot;host&quot;; /*String to be stored as a key in MPI_Info*/
<br>
<p>&nbsp;&nbsp;char *commands[4];            /*Stores the array of executable names to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be spawned*/
<br>
&nbsp;&nbsp;int maxprocs[4];                 /*maximum number of processes that can be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spawned on each process.*/
<br>
&nbsp;&nbsp;char ***args=NULL;            /*array of arguments for each executable*/
<br>
&nbsp;&nbsp;int i;                                 /*loop counter*/
<br>
&nbsp;&nbsp;char nodenames[4][50];
<br>
<p><p>&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
<p>&nbsp;&nbsp;&nbsp;if(newprocess==0)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*Master processes*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(nodenames[0],&quot;n1009&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(nodenames[1],&quot;n1010&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(nodenames[2],&quot;n1011&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(nodenames[3],&quot;n1012&quot;);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;4;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commands[i]=(char*)malloc(sizeof(char)*50);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(commands[i],&quot;./hello&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maxprocs[i]=1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_create (&amp;info[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_set (info[i], host, nodenames[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nspawned  = MPI_Comm_spawn_multiple(nprocs, commands, args,
<br>
maxprocs, info, 0, grid_comm,  &amp;intercomm, MPI_ERRCODES_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge(intercomm, 0, &amp;grid_comm);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* This part of the code is executed by the newly spawned process*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newprocess=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge(parent, 1, &amp;grid_comm);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>}
<br>
<p><p>/*******************************************************/
<br>
Function that needs to be called while spawning (hello.c)
<br>
/********************************************************/
<br>
<p>/*Global variables*/
<br>
MPI_Comm grid_comm; /*new global communicator after spawning*/
<br>
int loop=0; /*number of iterations*/
<br>
int newprocess = -1;  /* Variable to identify whether the current process is
<br>
an old process or a spawned process.*/
<br>
<p>int main (int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int myrank,size;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;while(loop&lt;2){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(newprocess!=0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newprocess=1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicomm_spawn();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicomm_spawn();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(grid_comm, &amp;myrank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;loop,1,MPI_INT,0,grid_comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;\n\n&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;LOOP in hello =
<br>
%d..Myrank=%d\n&quot;,loop,myrank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(grid_comm, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;loop++;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_rank(grid_comm, &amp;myrank);
<br>
<p>&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;Exiting worker..rank=%d\n&quot;,myrank);fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;MPI_Barrier(grid_comm);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;grid_comm);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>Thanks.
<br>
Regarads,
<br>
Rajesh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4846/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4845.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4830.php">Rajesh Sudarsan: "[OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
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
