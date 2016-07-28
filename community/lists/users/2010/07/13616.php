<?
$subject_val = "Re: [OMPI users] OpenMPI load data to multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 22:33:10 2010" -->
<!-- isoreceived="20100713023310" -->
<!-- sent="Mon, 12 Jul 2010 20:33:04 -0600" -->
<!-- isosent="20100713023304" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI load data to multiple nodes" -->
<!-- id="SNT134-w6048768A7011AD6C507EACCBB90_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C3BC502.6080007_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 22:33:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="13615.php">Gus Correa: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="13615.php">Gus Correa: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Reply:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks very much !!!
<br>
May I use global variable to do that ? 
<br>
It means that all nodes have the same global variable, such as globalVector. 
<br>
In the initialization, only node 0 load data from files and assign values to the globalVector. 
<br>
After that, all other nodes can get the same data by accessing the globalVector. 
<br>
Does it make sense ? 
<br>
Any help is appreciated. 
<br>
Jack
<br>
July 12  2010
<br>
<span class="quotelev1">&gt; Date: Mon, 12 Jul 2010 21:44:34 -0400
</span><br>
<span class="quotelev1">&gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI load data to multiple nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jack/Jinxu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am working on a multi-computer Open MPI cluster system. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I put some data files in /home/mypath/folder, is it possible that all 
</span><br>
<span class="quotelev2">&gt; &gt; non-head nodes can access the files in the folder ? 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, possible, for instance, if the /home/mypath/folder directory is
</span><br>
<span class="quotelev1">&gt; NFS mounted on all nodes/computers.
</span><br>
<span class="quotelev1">&gt; Otherwise, if all disks and directories are local to each computer,
</span><br>
<span class="quotelev1">&gt; you need to copy the input files to the local disks before you
</span><br>
<span class="quotelev1">&gt; start, and copy the output files back to your login computer after the
</span><br>
<span class="quotelev1">&gt; program ends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I need to load some data to some nodes, if all nodes can access the 
</span><br>
<span class="quotelev2">&gt; &gt; data, I do not need to load them to each node one by one. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If multiple nodes access the same file to get data, is there conflict ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To some extent.
</span><br>
<span class="quotelev1">&gt; The OS (on the computer where the file is located)
</span><br>
<span class="quotelev1">&gt; will do the arbitration on which process gets the hold of the file at 
</span><br>
<span class="quotelev1">&gt; each time.
</span><br>
<span class="quotelev1">&gt; If you have 1000 processes, this means a lot of arbitration,
</span><br>
<span class="quotelev1">&gt; and most likely contention.
</span><br>
<span class="quotelev1">&gt; Even for two processes only, if the processes are writing data to a 
</span><br>
<span class="quotelev1">&gt; single file, this won't ensure that they write
</span><br>
<span class="quotelev1">&gt; the output data in the order that you want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For example, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; fopen(myFile) by node 1, at the same time fopen(myFile) by node 2. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it allowed to do that on MPI cluster without conflict ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think MPI won't have any control over this.
</span><br>
<span class="quotelev1">&gt; It is up to the operational system, and depends on
</span><br>
<span class="quotelev1">&gt; which process gets its &quot;fopen&quot; request to the OS first,
</span><br>
<span class="quotelev1">&gt; which is not a deterministic sequence of events.
</span><br>
<span class="quotelev1">&gt; That is not a clean technique.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could instead:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Assign a single process, say, rank 0,
</span><br>
<span class="quotelev1">&gt; to read and write data from/to the file(s).
</span><br>
<span class="quotelev1">&gt; Then use, say, MPI_Scatter[v] and MPI_Gather[v],
</span><br>
<span class="quotelev1">&gt; to distribute and collect the data back and forth
</span><br>
<span class="quotelev1">&gt; between that process (rank 0) and all other processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is an old fashioned but very robust technique.
</span><br>
<span class="quotelev1">&gt; It avoids any I/O conflict or contention among processes.
</span><br>
<span class="quotelev1">&gt; All the data flows across the processes via MPI.
</span><br>
<span class="quotelev1">&gt; The OS receives I/O requests from a single process (rank 0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides MPI_Gather/MPI_Scatter, look also at MPI_Bcast,
</span><br>
<span class="quotelev1">&gt; if you need to send the same data to all processes,
</span><br>
<span class="quotelev1">&gt; assuming the data is being read by a single process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Alternatively, you could use the MPI I/O functions,
</span><br>
<span class="quotelev1">&gt; if your files are binary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope it helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jinxu Ding
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; July 12  2010
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars 
</span><br>
<span class="quotelev2">&gt; &gt; with Hotmail. Get busy. 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
The New Busy is not the old busy. Search, chat and e-mail from your inbox.
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_3">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_3</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="13615.php">Gus Correa: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="13615.php">Gus Correa: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>Reply:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
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
