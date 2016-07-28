<?
$subject_val = "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 24 16:39:07 2012" -->
<!-- isoreceived="20120624203907" -->
<!-- sent="Mon, 25 Jun 2012 08:38:55 +1200" -->
<!-- isosent="20120624203855" -->
<!-- name="Peter Soukalopoulos" -->
<!-- email="peter_at_[hidden]" -->
<!-- subject="[OMPI users] Mpiexec hanging when running &amp;quot;hello world&amp;quot; on 2 EC2 windows instances" -->
<!-- id="016901cd5249$62295aa0$267c0fe0$_at_greenbutton.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances<br>
<strong>From:</strong> Peter Soukalopoulos (<em>peter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-24 16:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19654.php">Ifeanyi: "Re: [OMPI users] checkpointing of NPB"</a>
<li><strong>Previous message:</strong> <a href="19652.php">John Hearns: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>&nbsp;
<br>
<p>As requested, I ran the wmic command. No problems executing notepad.exe
<br>
remotely - process with id 2416 created on remote node.
<br>
<p><span class="quotelev1">&gt;From 10.244.166.37
</span><br>
<p>C:\Users\greenbutton&gt;wmic /node:10.243.1.134 process call create notepad.exe
<br>
<p>Executing (Win32_Process)-&gt;Create()
<br>
<p>Method execution successful.
<br>
<p>Out Parameters:
<br>
<p>instance of __PARAMETERS
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ProcessId = 2416;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ReturnValue = 0;
<br>
<p>};
<br>
<p>&nbsp;
<br>
<p>Also no problems running the MPI command on notepad.exe
<br>
<p><span class="quotelev1">&gt;From 10.244.166.37
</span><br>
<p>C:\Users\greenbutton&gt;mpirun -np 2 -host 10.244.166.37,10.243.1.134
<br>
c:\windows\system32\notepad.exe
<br>
<p>connecting to 10.243.1.134
<br>
<p>username:greenbutton
<br>
<p>password:*********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that the job aborted, but has no info as to the process
<br>
<p>that caused that situation.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>(Works; blocked until notepad.exe killed on both nodes)
<br>
<p>&nbsp;
<br>
<p>But:
<br>
<p>Running my command MPIHello still does not work across nodes; I believe
<br>
there is a MPI communication problem between the processes, ie.
<br>
MPI_Send/Recv. It worked with 2 processes but not 4. How do I go about
<br>
resolving that? Is there a problem with the build settings of my executable?
<br>
<p>&nbsp;
<br>
<p>C:\mpi\exe&gt;mpirun -np 2 -host 10.244.166.37,10.243.1.134 MPIHello.exe
<br>
<p>connecting to 10.243.1.134
<br>
<p>username:greenbutton
<br>
<p>password:*********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>WE have 2 processors
<br>
<p>Hello 1 Processor 1 at node AMAZONA-BMCKVD6 reporting for duty
<br>
<p>(works - output from rank 1)
<br>
<p>&nbsp;
<br>
<p>C:\mpi\exe&gt;
<br>
<p>C:\mpi\exe&gt;mpirun -np 4 -host 10.244.166.37,10.243.1.134 MPIHello.exe
<br>
<p>connecting to 10.243.1.134
<br>
<p>username:greenbutton
<br>
<p>password:*********
<br>
<p>Save Credential?(Y/N) n
<br>
<p>WE have 4 processors
<br>
<p>(hangs - no output from ranks 1,2 or 3)
<br>
<p>&nbsp;
<br>
<p>Please assist.
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Peter
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19653/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19654.php">Ifeanyi: "Re: [OMPI users] checkpointing of NPB"</a>
<li><strong>Previous message:</strong> <a href="19652.php">John Hearns: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
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
