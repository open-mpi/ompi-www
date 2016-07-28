<?
$subject_val = "Re: [OMPI users] OpenMPI load data to multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 07:55:50 2010" -->
<!-- isoreceived="20100713115550" -->
<!-- sent="Tue, 13 Jul 2010 13:55:29 +0200" -->
<!-- isosent="20100713115529" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI load data to multiple nodes" -->
<!-- id="F55FED94-B024-493F-8026-23FF41BF07B8_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT137-w14A629D293A35570AA0AC2D2B90_at_phx.gbl" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 07:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13621.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13619.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.07.2010 um 04:50 schrieb Bowen Zhou:
<br>
<p><span class="quotelev1">&gt; Since each node has its own memory in a distributed memory system,
</span><br>
<span class="quotelev1">&gt; there is no such thing as &quot;global variable&quot; that can be accessed by all
</span><br>
<span class="quotelev1">&gt; processes. So you need to use MPI to scatter the input from rank 0
</span><br>
<span class="quotelev1">&gt; process to all the other processes explicitly.
</span><br>
<p>I think options might be GlobalArrays or HPF:
<br>
<p><a href="http://www.emsl.pnl.gov/docs/global/">http://www.emsl.pnl.gov/docs/global/</a>
<br>
<p><a href="http://en.wikipedia.org/wiki/High_Performance_Fortran">http://en.wikipedia.org/wiki/High_Performance_Fortran</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 12 Jul 2010 20:33:04 -0600
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI load data to multiple nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks very much !!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May I use global variable to do that ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It means that all nodes have the same global variable, 
</span><br>
<span class="quotelev1">&gt; such as globalVector. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the initialization, only node 0 load data from files and assign values to 
</span><br>
<span class="quotelev1">&gt; the globalVector. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After that, all other nodes can get the same data by accessing the globalVector. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it make sense ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; July 12  2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 12 Jul 2010 21:44:34 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] OpenMPI load data to multiple nodes
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jack/Jinxu
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jack Bryan wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am working on a multi-computer Open MPI cluster system. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I put some data files in /home/mypath/folder, is it possible that all &gt; &gt; non-head nodes can access the files in the folder ? 
</span><br>
<span class="quotelev1">&gt; &amp;g t; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, possible, for instance, if the /home/mypath/folder directory is
</span><br>
<span class="quotelev2">&gt; &gt; NFS mounted on all nodes/computers.
</span><br>
<span class="quotelev2">&gt; &gt; Otherwise, if all disks and directories are local to each computer,
</span><br>
<span class="quotelev2">&gt; &gt; you need to copy the input files to the local disks before you
</span><br>
<span class="quotelev2">&gt; &gt; start, and copy the output files back to your login computer after the
</span><br>
<span class="quotelev2">&gt; &gt; program ends.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to load some data to some nodes, if all nodes can access the 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; data, I do not need to load them to each node one by one. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If multiple nodes access the same file to get data, is there conflict ? 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To some extent.
</span><br>
<span class="quotelev2">&gt; &gt; The OS (on the computer where the file is located)
</span><br>
<span class="quotelev2">&gt; &gt; will do the arbitration on which process gets the hold of the file at 
</span><br>
<span class="quotelev2">&gt; &gt; each time.
</span><br>
<span class="quotelev2">&gt; &gt; If you have 1000 processes, this means a lot of arbitration,
</span><br>
<span class="quotelev2">&gt; &gt; and most likely contention.
</span><br>
<span class="quotelev2">&gt; &gt; Even for two processes ! only, if the processes are writing data to a 
</span><br>
<span class="quotelev2">&gt; &gt; single file, this won't ensure that they write
</span><br>
<span class="quotelev2">&gt; &gt; the output data in the order that you want.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For example, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fopen(myFile) by node 1, at the same time fopen(myFile) by node 2. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is it allowed to do that on MPI cluster without conflict ? 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think MPI won't have any control over this.
</span><br>
<span class="quotelev2">&gt; &gt; It is up to the operational system, and depends on
</span><br>
<span class="quotelev2">&gt; &gt; which process gets its &quot;fopen&quot; request to the OS first,
</span><br>
<span class="quotelev2">&gt; &gt; which is not a deterministic sequence of events.
</span><br>
<span class="quotelev2">&gt; &gt; That is not a clean technique.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You could instead:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) Assign a single process, say, rank 0,
</span><br>
<span class="quotelev2">&gt; &gt; to read and write data from/to the file(s).
</span><br>
<span class="quotelev2">&gt; &gt; Then use, say, MPI_Scatter[v] and MPI_Gather[v],
</span><br>
<span class="quotelev2">&gt; &gt; to distribute and collect the data back and forth
</span><br>
<span class="quotelev2">&gt; &gt; between that process (rank 0) and all other processe! s.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That is an old fashioned but very robust technique .
</span><br>
<span class="quotelev2">&gt; &gt; It avoids any I/O conflict or contention among processes.
</span><br>
<span class="quotelev2">&gt; &gt; All the data flows across the processes via MPI.
</span><br>
<span class="quotelev2">&gt; &gt; The OS receives I/O requests from a single process (rank 0).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Besides MPI_Gather/MPI_Scatter, look also at MPI_Bcast,
</span><br>
<span class="quotelev2">&gt; &gt; if you need to send the same data to all processes,
</span><br>
<span class="quotelev2">&gt; &gt; assuming the data is being read by a single process.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2) Alternatively, you could use the MPI I/O functions,
</span><br>
<span class="quotelev2">&gt; &gt; if your files are binary.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I hope it helps,
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any help is appreciated. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jinxu Ding
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; July 12 2010
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with Hotmail. Get busy. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PI">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PI</a>! D28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; The New Busy is not the old busy. Search, chat and e-mail from your inbox. Get started. 
</span><br>
<span class="quotelev1">&gt; Your E-mail and More On-the-Go. Get Windows Live Hotmail Free. Sign up now._______________________________________________
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
<li><strong>Next message:</strong> <a href="13621.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13619.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
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
