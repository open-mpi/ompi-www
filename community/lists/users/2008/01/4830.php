<?
$subject_val = "[OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 00:33:35 2008" -->
<!-- isoreceived="20080115053335" -->
<!-- sent="Tue, 15 Jan 2008 00:33:30 -0500" -->
<!-- isosent="20080115053330" -->
<!-- name="Rajesh Sudarsan" -->
<!-- email="rsudarsan_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge" -->
<!-- id="41935ab00801142133o2d503cf1u8da5f720a19bdf1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge<br>
<strong>From:</strong> Rajesh Sudarsan (<em>rsudarsan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 00:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4831.php">Prakash Velayutham: "Re: [OMPI users] getenv issue"</a>
<li><strong>Previous message:</strong> <a href="4829.php">Jeff Squyres: "Re: [OMPI users] getenv issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4846.php">Rajesh Sudarsan: "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>Reply:</strong> <a href="4846.php">Rajesh Sudarsan: "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying to write a simple code which does the following -
<br>
A master process running on 'n' processors spawn 4 processes using the
<br>
MPI_Comm_spawn_multiple command. After spawning, the intercommunicator
<br>
between the master and the spawned processes are merged using
<br>
MPI_Intercomm_merge to create a new common intracommunicator for the
<br>
expanded set of processes. These steps are repeated over a loop - execute
<br>
the master processes, spawn new processes, and merge the communicators to
<br>
get a global communicator.
<br>
In this example the new processes are always spawned on the same 4 nodes.
<br>
<p>After the loop is completed, when I call MPI_Finalize, I get a segmentation
<br>
fault. I do not get segmentation fault if I run the loop only once,
<br>
i.e.callMPI_Intercomm_merge only once.
<br>
Is there something wrong with my program or is it a known issue with
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
(master.c)
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4831.php">Prakash Velayutham: "Re: [OMPI users] getenv issue"</a>
<li><strong>Previous message:</strong> <a href="4829.php">Jeff Squyres: "Re: [OMPI users] getenv issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4846.php">Rajesh Sudarsan: "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>Reply:</strong> <a href="4846.php">Rajesh Sudarsan: "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
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
