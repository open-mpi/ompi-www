<?
$subject_val = "[OMPI users] MPI_Comm_spawn and exit of parent process.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 16 08:04:18 2012" -->
<!-- isoreceived="20120616120418" -->
<!-- sent="Sat, 16 Jun 2012 08:03:51 -0400" -->
<!-- isosent="20120616120351" -->
<!-- name="Roland Schulz" -->
<!-- email="roland_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn and exit of parent process." -->
<!-- id="CAO2TwbmjMQUmC9rmOAGWvDJQ=vZEsjLM4rgjFdY-85C249qYGg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_spawn and exit of parent process.<br>
<strong>From:</strong> Roland Schulz (<em>roland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-16 08:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19601.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Previous message:</strong> <a href="19599.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19601.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Reply:</strong> <a href="19601.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Reply:</strong> <a href="19604.php">TERRY DONTJE: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I would like to start a single process without mpirun and then use
<br>
MPI_Comm_spawn to start up as many processes as required. I don't want the
<br>
parent process to take up any resources, so I tried to disconnect the inter
<br>
communicator and then finalize mpi and exit the parent. But as soon as I do
<br>
that the children exit too. Why is that? Can I somehow change that
<br>
behavior? Or can I wait on the children to exit without the waiting taking
<br>
up CPU time?
<br>
<p>The reason I don't need the parent as soon as the children are spawned, is
<br>
that I need one intra-communicator over all processes. And as far as I know
<br>
I cannot join the parent and children to one intra-communicator.
<br>
<p>The purpose of the whole exercise is that I want that my program to use all
<br>
cores of a node by default when executed without mpirun.
<br>
<p>I have tested this with OpenMPI 1.4.5. A sample program is here:
<br>
<a href="http://pastebin.com/g2XSZwvY">http://pastebin.com/g2XSZwvY</a> . &quot;Child finalized&quot; is only printed with the
<br>
sleep(2) in the parent not commented out.
<br>
<p>Roland
<br>
<p><pre>
-- 
ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
865-241-1537, ORNL PO BOX 2008 MS6309
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19601.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Previous message:</strong> <a href="19599.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19601.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Reply:</strong> <a href="19601.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Reply:</strong> <a href="19604.php">TERRY DONTJE: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
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
