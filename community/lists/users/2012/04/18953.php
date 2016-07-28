<?
$subject_val = "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 10:21:09 2012" -->
<!-- isoreceived="20120405142109" -->
<!-- sent="Thu, 5 Apr 2012 10:21:04 -0400" -->
<!-- isosent="20120405142104" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Partial&amp;quot; Reduce and overlapping communicator" -->
<!-- id="F542A3D2-BAEA-4811-8E3F-CF9DA71D9E82_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F7D6DA0.80006_at_obs.ujf-grenoble.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 10:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18952.php">toufik hadjazi: "[OMPI users] mpi_publish/lookup scope"</a>
<li><strong>In reply to:</strong> <a href="18951.php">Mathieu westphal: "[OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18963.php">Mathieu westphal: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>Reply:</strong> <a href="18963.php">Mathieu westphal: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mathieu,
<br>
<p>All communicator creation function in the MPI 2.2 standard are collective over the original communicator. For your specific case this means all processes in the worker communicator must call the communicator creation functions.
<br>
<p>As this is true in all cases, and as a communicator creation function can return only a communicator per rank, if you want to create overlapping communicators the communicator creation function should be called as many times as there are overlaps by all processes in the original communicator.
<br>
<p>Based on my understanding of what you did, the first MPI_Comm_split is correct. For creating the second communicator, either you replace the second call (MPI_Comm_create) by a call to MPI_Comm_split with 2 and 4 using a key=MPI_UNDEFINED, or you force all your workers to call the MPI_Comm_create the same group with 2 and 4 using MPI_GROUP_EMPTY.
<br>
<p>However, based on the description of your issues I don't think is the right solution. If you know that each worker will execute the same number of tasks, i.e., you need the exact same number of MPI_Reduce, you might want to look into the non-blocking collective proposed in MPI 3.0. Otherwise you should implement your own based on non-blocking point-to-point communications.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 5, 2012, at 06:02 , Mathieu westphal wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got a problem with my code, wich run some kinf of a simulator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get 4 worker (aka 4 mpi process ) wich process data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These data aren't available at the same time, so i get another process (Splitter) wich send chunk of data to each process in round robin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This work well using MPI_Send and Receive but aftet that i need to reduce all the data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope to be able to use MPI_Reduce to reduce all data from all worker but there is a problem :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. All results data aren't available at the same time, dut to the delay from the original data delay.
</span><br>
<span class="quotelev1">&gt; 2. I cannot wait all data to be computed, i need to proceed the reduce a soon as possible
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So when the first and second worker have finished, i can reduce the two results data and keep the results on the first worker.
</span><br>
<span class="quotelev1">&gt; And when the third and the fourth have finished, i can reduce these two too, and keep results on third worker.
</span><br>
<span class="quotelev1">&gt; At last i need to reduce data from first and third worker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only way to do that using MPI_Reduce is to create &quot;communicators&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All i want is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commA : contain W1 W2
</span><br>
<span class="quotelev1">&gt; commB : contain W3 W4
</span><br>
<span class="quotelev1">&gt; commC : contain W1 W3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's say i've already create a communicator only for my workers 
</span><br>
<span class="quotelev1">&gt; I can easily add this line in all my workers :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_Split(workers_comm,(int)(workerId/2),rank,CommAlpha)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i understand well i will get an communicator on W1 and W2 wich contains W1 and W2, and a communicator on W3 and W4 wich contains W3 and W4. Am i right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But next when i try to use (only on W1 and W3): 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Create_comm(MPI_Comm workers_comm,group,commC),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need also to call MPI_Create_comm on W2 and W4 or it will block. Why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After that, i got lot of non persistent error depending of the number of worker i want to use.
</span><br>
<span class="quotelev1">&gt; So is this allowed to create and use overlapping communicator? and if so how to do that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mathieu
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18953/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18952.php">toufik hadjazi: "[OMPI users] mpi_publish/lookup scope"</a>
<li><strong>In reply to:</strong> <a href="18951.php">Mathieu westphal: "[OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18963.php">Mathieu westphal: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>Reply:</strong> <a href="18963.php">Mathieu westphal: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
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
