<?
$subject_val = "[OMPI users] &quot;Partial&quot; Reduce and overlapping communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 06:02:16 2012" -->
<!-- isoreceived="20120405100216" -->
<!-- sent="Thu, 05 Apr 2012 12:02:08 +0200" -->
<!-- isosent="20120405100208" -->
<!-- name="Mathieu westphal" -->
<!-- email="mathieu.westphal_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Partial&amp;quot; Reduce and overlapping communicator" -->
<!-- id="4F7D6DA0.80006_at_obs.ujf-grenoble.fr" -->
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
<strong>Subject:</strong> [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator<br>
<strong>From:</strong> Mathieu westphal (<em>mathieu.westphal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 06:02:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18952.php">toufik hadjazi: "[OMPI users] mpi_publish/lookup scope"</a>
<li><strong>Previous message:</strong> <a href="18950.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>Reply:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I got a problem with my code, wich run some kinf of a simulator.
<br>
<p>I get 4 worker (aka 4 mpi process ) wich process data.
<br>
<p>These data aren't available at the same time, so i get another process 
<br>
(Splitter) wich send chunk of data to each process in round robin.
<br>
<p>This work well using MPI_Send and Receive but aftet that i need to 
<br>
reduce all the data.
<br>
<p>I hope to be able to use MPI_Reduce to reduce all data from all worker 
<br>
but there is a problem :
<br>
<p>1. All results data aren't available at the same time, dut to the delay 
<br>
from the original data delay.
<br>
2. I cannot wait all data to be computed, i need to proceed the reduce a 
<br>
soon as possible
<br>
<p>So when the first and second worker have finished, i can reduce the two 
<br>
results data and keep the results on the first worker.
<br>
And when the third and the fourth have finished, i can reduce these two 
<br>
too, and keep results on third worker.
<br>
At last i need to reduce data from first and third worker.
<br>
<p>The only way to do that using MPI_Reduce is to create &quot;communicators&quot;.
<br>
<p>All i want is :
<br>
<p>commA : contain W1 W2
<br>
commB : contain W3 W4
<br>
commC : contain W1 W3
<br>
<p><p>Let's say i've already create a communicator only for my workers
<br>
I can easily add this line in all my workers :
<br>
<p><p>MPI_Comm_Split(workers_comm,(int)(workerId/2),rank,CommAlpha)
<br>
<p>*If i understand well i will get an communicator on W1 and W2 wich 
<br>
contains W1 and W2, and a communicator on W3 and W4 wich contains W3 and 
<br>
W4. Am i right?*
<br>
<p><p>But next when i try to use (only on W1 and W3):
<br>
<p>MPI_Create_comm(MPI_Comm workers_comm,group,commC),
<br>
<p>*I need also to call MPI_Create_comm on W2 and W4 or it will block. Why?*
<br>
<p>After that, i got lot of non persistent error depending of the number of 
<br>
worker i want to use.
<br>
*So is this allowed to create and use overlapping communicator? and if 
<br>
so how to do that?*
<br>
<p>Thanks
<br>
<p>Mathieu
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18952.php">toufik hadjazi: "[OMPI users] mpi_publish/lookup scope"</a>
<li><strong>Previous message:</strong> <a href="18950.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>Reply:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
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
