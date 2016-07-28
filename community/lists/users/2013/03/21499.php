<?
$subject_val = "[OMPI users] Cluster hangs/shows error while executing simple MPI program in C";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 10:50:24 2013" -->
<!-- isoreceived="20130305155024" -->
<!-- sent="Tue, 5 Mar 2013 23:50:15 +0800 (SGT)" -->
<!-- isosent="20130305155015" -->
<!-- name="Justin Joseph" -->
<!-- email="justinjoseph911_at_[hidden]" -->
<!-- subject="[OMPI users] Cluster hangs/shows error while executing simple MPI program in C" -->
<!-- id="1362498615.80647.YahooMailNeo_at_web194903.mail.sg3.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Cluster hangs/shows error while executing simple MPI program in C<br>
<strong>From:</strong> Justin Joseph (<em>justinjoseph911_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 10:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21500.php">Ralph Castain: "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<li><strong>Previous message:</strong> <a href="21498.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21500.php">Ralph Castain: "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<li><strong>Reply:</strong> <a href="21500.php">Ralph Castain: "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cluster hangs/shows error while executing simple MPI program in C
I am trying to run a simple MPI program(multiple array addition), it 
runs perfectly in my PC but simply hangs or shows the following error in the cluster.
I am using open mpi and the following command to execute .
mpirun -machinefile machine -np 4 ./array_sum 


error code: [[22877,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.122.1 failed: Connection refused (111)

#include&lt;mpi.h&gt;#include&lt;stdio.h&gt;#include&lt;stdlib.h&gt;#include&lt;string.h&gt;#definegroup           MPI_COMM_WORLD #defineroot 0#definesize 100intmain(intargc,char*argv[]){intno_tasks,task_id,i;MPI_Init(&amp;argc,&amp;argv);MPI_Comm_size(group,&amp;no_tasks);MPI_Comm_rank(group,&amp;task_id);intarr1[size],arr2[size],local1[size],local2[size];if(task_id==root){for(i=0;i&lt;size;i++){arr1[i]=arr2[i]=i;}}MPI_Scatter(arr1,size/no_tasks,MPI_INT,local1,size/no_tasks,MPI_INT,root,group);MPI_Scatter(arr2,size/no_tasks,MPI_INT,local2,size/no_tasks,MPI_INT,root,group);for(i=0;i&lt;size/no_tasks;i++){local1[i]+=local2[i];}MPI_Gather(local1,size/no_tasks,MPI_INT,arr1,size/no_tasks,MPI_INT,root,group);if(task_id==root){printf(&quot;The Array Sum Is\n&quot;);for(i=0;i&lt;size;i++){printf(&quot;%d  &quot;,arr1[i]);}}MPI_Finalize();return0;}
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21500.php">Ralph Castain: "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<li><strong>Previous message:</strong> <a href="21498.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21500.php">Ralph Castain: "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<li><strong>Reply:</strong> <a href="21500.php">Ralph Castain: "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
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
