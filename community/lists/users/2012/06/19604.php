<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and exit of parent process.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 06:27:59 2012" -->
<!-- isoreceived="20120618102759" -->
<!-- sent="Mon, 18 Jun 2012 06:27:55 -0400" -->
<!-- isosent="20120618102755" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and exit of parent process." -->
<!-- id="4FDF02AB.2030509_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 06:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19605.php">Harald Servat: "[OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19603.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic	optimized	parallel	I/O with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19600.php">Roland Schulz: "[OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19608.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Reply:</strong> <a href="19608.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/16/2012 8:03 AM, Roland Schulz wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to start a single process without mpirun and then use 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn to start up as many processes as required. I don't want 
</span><br>
<span class="quotelev1">&gt; the parent process to take up any resources, so I tried to disconnect 
</span><br>
<span class="quotelev1">&gt; the inter communicator and then finalize mpi and exit the parent. But 
</span><br>
<span class="quotelev1">&gt; as soon as I do that the children exit too. Why is that? Can I somehow 
</span><br>
<span class="quotelev1">&gt; change that behavior? Or can I wait on the children to exit without 
</span><br>
<span class="quotelev1">&gt; the waiting taking up CPU time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason I don't need the parent as soon as the children are 
</span><br>
<span class="quotelev1">&gt; spawned, is that I need one intra-communicator over all processes. And 
</span><br>
<span class="quotelev1">&gt; as far as I know I cannot join the parent and children to one 
</span><br>
<span class="quotelev1">&gt; intra-communicator.
</span><br>
You could use MPI_Intercomm_merge to create an intra-communicator out of 
<br>
the groups in an inter-communicator and pass the inter-communicator you 
<br>
get back from the MPI_Comm_spawn call.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The purpose of the whole exercise is that I want that my program to 
</span><br>
<span class="quotelev1">&gt; use all cores of a node by default when executed without mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested this with OpenMPI 1.4.5. A sample program is here: 
</span><br>
<span class="quotelev1">&gt; <a href="http://pastebin.com/g2XSZwvY">http://pastebin.com/g2XSZwvY</a> . &quot;Child finalized&quot; is only printed with 
</span><br>
<span class="quotelev1">&gt; the sleep(2) in the parent not commented out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roland
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ORNL/UT Center for Molecular Biophysics cmb.ornl.gov &lt;<a href="http://cmb.ornl.gov">http://cmb.ornl.gov</a>&gt;
</span><br>
<span class="quotelev1">&gt; 865-241-1537, ORNL PO BOX 2008 MS6309
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
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19605.php">Harald Servat: "[OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19603.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic	optimized	parallel	I/O with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19600.php">Roland Schulz: "[OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19608.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>Reply:</strong> <a href="19608.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
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
