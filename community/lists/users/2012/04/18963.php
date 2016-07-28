<?
$subject_val = "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  6 08:11:34 2012" -->
<!-- isoreceived="20120406121134" -->
<!-- sent="Fri, 06 Apr 2012 14:11:24 +0200" -->
<!-- isosent="20120406121124" -->
<!-- name="Mathieu westphal" -->
<!-- email="mathieu.westphal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Partial&amp;quot; Reduce and overlapping communicator" -->
<!-- id="4F7EDD6C.2030208_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F542A3D2-BAEA-4811-8E3F-CF9DA71D9E82_at_eecs.utk.edu" -->
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
<strong>From:</strong> Mathieu westphal (<em>mathieu.westphal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-06 08:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Previous message:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>Thanks for your help.
<br>
<p>MPI_UNDEFINED lead me to a better understanding and control on all my 
<br>
communicators. I used now only MPI_Comm_Split (before i was trying with 
<br>
MPI_Group_incl which complicated things )
<br>
<p>Others errors were caused by a non-mpi-related mistake.
<br>
<p>It works well now, thanks.
<br>
<p>Mathieu
<br>
On 04/05/2012 04:21 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Mathieu,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All communicator creation function in the MPI 2.2 standard are 
</span><br>
<span class="quotelev1">&gt; collective over the original communicator. For your specific case this 
</span><br>
<span class="quotelev1">&gt; means all processes in the worker communicator must call the 
</span><br>
<span class="quotelev1">&gt; communicator creation functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As this is true in all cases, and as a communicator creation function 
</span><br>
<span class="quotelev1">&gt; can return only a communicator per rank, if you want to create 
</span><br>
<span class="quotelev1">&gt; overlapping communicators the communicator creation function should be 
</span><br>
<span class="quotelev1">&gt; called as many times as there are overlaps by all processes in the 
</span><br>
<span class="quotelev1">&gt; original communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on my understanding of what you did, the first MPI_Comm_split is 
</span><br>
<span class="quotelev1">&gt; correct. For creating the second communicator, either you replace the 
</span><br>
<span class="quotelev1">&gt; second call (MPI_Comm_create) by a call to MPI_Comm_split with 2 and 4 
</span><br>
<span class="quotelev1">&gt; using a key=MPI_UNDEFINED, or you force all your workers to call the 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_create the same group with 2 and 4 using MPI_GROUP_EMPTY.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, based on the description of your issues I don't think is the 
</span><br>
<span class="quotelev1">&gt; right solution. If you know that each worker will execute the same 
</span><br>
<span class="quotelev1">&gt; number of tasks, i.e., you need the exact same number of MPI_Reduce, 
</span><br>
<span class="quotelev1">&gt; you might want to look into the non-blocking collective proposed in 
</span><br>
<span class="quotelev1">&gt; MPI 3.0. Otherwise you should implement your own based on non-blocking 
</span><br>
<span class="quotelev1">&gt; point-to-point communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2012, at 06:02 , Mathieu westphal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got a problem with my code, wich run some kinf of a simulator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get 4 worker (aka 4 mpi process ) wich process data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These data aren't available at the same time, so i get another 
</span><br>
<span class="quotelev2">&gt;&gt; process (Splitter) wich send chunk of data to each process in round 
</span><br>
<span class="quotelev2">&gt;&gt; robin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This work well using MPI_Send and Receive but aftet that i need to 
</span><br>
<span class="quotelev2">&gt;&gt; reduce all the data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope to be able to use MPI_Reduce to reduce all data from all 
</span><br>
<span class="quotelev2">&gt;&gt; worker but there is a problem :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. All results data aren't available at the same time, dut to the 
</span><br>
<span class="quotelev2">&gt;&gt; delay from the original data delay.
</span><br>
<span class="quotelev2">&gt;&gt; 2. I cannot wait all data to be computed, i need to proceed the 
</span><br>
<span class="quotelev2">&gt;&gt; reduce a soon as possible
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So when the first and second worker have finished, i can reduce the 
</span><br>
<span class="quotelev2">&gt;&gt; two results data and keep the results on the first worker.
</span><br>
<span class="quotelev2">&gt;&gt; And when the third and the fourth have finished, i can reduce these 
</span><br>
<span class="quotelev2">&gt;&gt; two too, and keep results on third worker.
</span><br>
<span class="quotelev2">&gt;&gt; At last i need to reduce data from first and third worker.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only way to do that using MPI_Reduce is to create &quot;communicators&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All i want is :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; commA : contain W1 W2
</span><br>
<span class="quotelev2">&gt;&gt; commB : contain W3 W4
</span><br>
<span class="quotelev2">&gt;&gt; commC : contain W1 W3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's say i've already create a communicator only for my workers 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm workerComm;
</span><br>
<span class="quotelev2">&gt;&gt;  10     MPI_Comm intComm[8];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can easily add this line in all my workers :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_Split(workers_comm,(int)(workerId/2),rank,CommAlpha)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *If i understand well i will get an communicator on W1 and W2 wich 
</span><br>
<span class="quotelev2">&gt;&gt; contains W1 and W2, and a communicator on W3 and W4 wich contains W3 
</span><br>
<span class="quotelev2">&gt;&gt; and W4. Am i right?*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But next when i try to use (only on W1 and W3):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Create_comm(MPI_Comm workers_comm,group,commC),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *I need also to call MPI_Create_comm on W2 and W4 or it will block. Why?*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After that, i got lot of non persistent error depending of the number 
</span><br>
<span class="quotelev2">&gt;&gt; of worker i want to use.
</span><br>
<span class="quotelev2">&gt;&gt; *So is this allowed to create and use overlapping communicator? and 
</span><br>
<span class="quotelev2">&gt;&gt; if so how to do that?*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mathieu
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18963/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Previous message:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
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
