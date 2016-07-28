<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and exit of parent process.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 16 10:21:02 2012" -->
<!-- isoreceived="20120616142102" -->
<!-- sent="Sat, 16 Jun 2012 08:20:55 -0600" -->
<!-- isosent="20120616142055" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and exit of parent process." -->
<!-- id="50D83DE8-0115-44D4-BB2B-E177B6F24B90_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAO2TwbmjMQUmC9rmOAGWvDJQ=vZEsjLM4rgjFdY-85C249qYGg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn and exit of parent process.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-16 10:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19602.php">Jaison Paul Mulerikkal: "[OMPI users] Naming MPI_Spawn children"</a>
<li><strong>Previous message:</strong> <a href="19600.php">Roland Schulz: "[OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>In reply to:</strong> <a href="19600.php">Roland Schulz: "[OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19604.php">TERRY DONTJE: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid there is no option to keep the job alive if the parent exits. I could give you several reasons for that behavior, but the bottom line is that it can't be changed.
<br>
<p>Why don't you have the parent loop across &quot;sleep&quot;, waking up periodically to check for a &quot;we are done&quot; message from a child? That would take essentially no CPU and meet your need.
<br>
<p><p>On Jun 16, 2012, at 6:03 AM, Roland Schulz wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to start a single process without mpirun and then use MPI_Comm_spawn to start up as many processes as required. I don't want the parent process to take up any resources, so I tried to disconnect the inter communicator and then finalize mpi and exit the parent. But as soon as I do that the children exit too. Why is that? Can I somehow change that behavior? Or can I wait on the children to exit without the waiting taking up CPU time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason I don't need the parent as soon as the children are spawned, is that I need one intra-communicator over all processes. And as far as I know I cannot join the parent and children to one intra-communicator. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The purpose of the whole exercise is that I want that my program to use all cores of a node by default when executed without mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tested this with OpenMPI 1.4.5. A sample program is here: <a href="http://pastebin.com/g2XSZwvY">http://pastebin.com/g2XSZwvY</a> . &quot;Child finalized&quot; is only printed with the sleep(2) in the parent not commented out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Roland
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
</span><br>
<span class="quotelev1">&gt; 865-241-1537, ORNL PO BOX 2008 MS6309
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19602.php">Jaison Paul Mulerikkal: "[OMPI users] Naming MPI_Spawn children"</a>
<li><strong>Previous message:</strong> <a href="19600.php">Roland Schulz: "[OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>In reply to:</strong> <a href="19600.php">Roland Schulz: "[OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19604.php">TERRY DONTJE: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
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
