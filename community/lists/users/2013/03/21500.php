<?
$subject_val = "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 11:02:49 2013" -->
<!-- isoreceived="20130305160249" -->
<!-- sent="Tue, 5 Mar 2013 08:02:42 -0800" -->
<!-- isosent="20130305160242" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C" -->
<!-- id="F63A7E7F-2768-436F-B23D-0AEB89C45F8B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1362498615.80647.YahooMailNeo_at_web194903.mail.sg3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 11:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21501.php">Chintu: "[OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Previous message:</strong> <a href="21499.php">Justin Joseph: "[OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<li><strong>In reply to:</strong> <a href="21499.php">Justin Joseph: "[OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The TCP messaging transport is trying to connect to a process on 192.168.122.1 and being blocked. Check for a firewall, ensure that the network it is trying to use is correct (you may need to specify an appropriate network with -mca btl_tcp_if_include, or exclude one)
<br>
<p><p>On Mar 5, 2013, at 7:50 AM, Justin Joseph &lt;justinjoseph911_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Cluster hangs/shows error while executing simple MPI program in C
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a simple MPI program(multiple array addition), it runs perfectly in my PC but simply hangs or shows the following error in the cluster.
</span><br>
<span class="quotelev1">&gt; I am using open mpi and the following command to execute .
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile machine -np 4 ./array_sum 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error code: [[22877,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.122.1 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include    &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include    &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include    &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include    &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #define     group           MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; #define     root            0
</span><br>
<span class="quotelev1">&gt; #define     size            100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc,char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int no_tasks,task_id,i;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(group,&amp;no_tasks);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(group,&amp;task_id);
</span><br>
<span class="quotelev1">&gt; int arr1[size],arr2[size],local1[size],local2[size];
</span><br>
<span class="quotelev1">&gt; if(task_id==root)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     for(i=0;i&lt;size;i++)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         arr1[i]=arr2[i]=i;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; MPI_Scatter(arr1,size/no_tasks,MPI_INT,local1,size/no_tasks,MPI_INT,root,group);
</span><br>
<span class="quotelev1">&gt; MPI_Scatter(arr2,size/no_tasks,MPI_INT,local2,size/no_tasks,MPI_INT,root,group);
</span><br>
<span class="quotelev1">&gt; for(i=0;i&lt;size/no_tasks;i++)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     local1[i]+=local2[i];
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; MPI_Gather(local1,size/no_tasks,MPI_INT,arr1,size/no_tasks,MPI_INT,root,group);
</span><br>
<span class="quotelev1">&gt; if(task_id==root)
</span><br>
<span class="quotelev1">&gt; {       
</span><br>
<span class="quotelev1">&gt;     printf(&quot;The Array Sum Is\n&quot;);
</span><br>
<span class="quotelev1">&gt;     for(i=0;i&lt;size;i++)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%d  &quot;,arr1[i]);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21501.php">Chintu: "[OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Previous message:</strong> <a href="21499.php">Justin Joseph: "[OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<li><strong>In reply to:</strong> <a href="21499.php">Justin Joseph: "[OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
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
