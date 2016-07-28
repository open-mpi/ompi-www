<?
$subject_val = "Re: [OMPI users] OpenMPI load data to multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 21:44:45 2010" -->
<!-- isoreceived="20100713014445" -->
<!-- sent="Mon, 12 Jul 2010 21:44:34 -0400" -->
<!-- isosent="20100713014434" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI load data to multiple nodes" -->
<!-- id="4C3BC502.6080007_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w511CED42956E0C56C05497CBB90_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI load data to multiple nodes<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 21:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13616.php">Jack Bryan: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="13614.php">Jack Bryan: "[OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="13614.php">Jack Bryan: "[OMPI users] OpenMPI load data to multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13616.php">Jack Bryan: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Reply:</strong> <a href="13616.php">Jack Bryan: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack/Jinxu
<br>
<p>Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on a multi-computer Open MPI cluster system. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I put some data files in /home/mypath/folder, is it possible that all 
</span><br>
<span class="quotelev1">&gt; non-head nodes can access the files in the folder ? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, possible, for instance, if the /home/mypath/folder directory is
<br>
NFS mounted on all nodes/computers.
<br>
Otherwise, if all disks and directories are local to each computer,
<br>
you need to copy the input files to the local disks before you
<br>
start, and copy the output files back to your login computer after the
<br>
program ends.
<br>
<p><span class="quotelev1">&gt; I need to load some data to some nodes, if all nodes can access the 
</span><br>
<span class="quotelev1">&gt; data, I do not need to load them to each node one by one. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If multiple nodes access the same file to get data, is there conflict ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>To some extent.
<br>
The OS (on the computer where the file is located)
<br>
will do the arbitration on which process gets the hold of the file at 
<br>
each time.
<br>
If you have 1000 processes, this means a lot of arbitration,
<br>
and most likely contention.
<br>
Even for two processes only, if the processes are writing data to a 
<br>
single file, this won't ensure that they write
<br>
the output data in the order that you want.
<br>
<p><span class="quotelev1">&gt; For example, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fopen(myFile) by node 1, at the same time fopen(myFile) by node 2. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it allowed to do that on MPI cluster without conflict ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I think MPI won't have any control over this.
<br>
It is up to the operational system, and depends on
<br>
which process gets its &quot;fopen&quot; request to the OS first,
<br>
which is not a deterministic sequence of events.
<br>
That is not a clean technique.
<br>
<p>You could instead:
<br>
<p>1) Assign a single process, say, rank 0,
<br>
to read and write data from/to the file(s).
<br>
Then use, say, MPI_Scatter[v] and MPI_Gather[v],
<br>
to distribute and collect the data back and forth
<br>
between that process (rank 0) and all other processes.
<br>
<p>That is an old fashioned but very robust technique.
<br>
It avoids any I/O conflict or contention among processes.
<br>
All the data flows across the processes via MPI.
<br>
The OS receives I/O requests from a single process (rank 0).
<br>
<p>Besides MPI_Gather/MPI_Scatter, look also at MPI_Bcast,
<br>
if you need to send the same data to all processes,
<br>
assuming the data is being read by a single process.
<br>
<p>2) Alternatively, you could use the MPI I/O functions,
<br>
if your files are binary.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jinxu Ding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; July 12  2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars 
</span><br>
<span class="quotelev1">&gt; with Hotmail. Get busy. 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="13616.php">Jack Bryan: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="13614.php">Jack Bryan: "[OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="13614.php">Jack Bryan: "[OMPI users] OpenMPI load data to multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13616.php">Jack Bryan: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Reply:</strong> <a href="13616.php">Jack Bryan: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
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
