<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and exit of parent process.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:05:23 2012" -->
<!-- isoreceived="20120618140523" -->
<!-- sent="Mon, 18 Jun 2012 08:05:14 -0600" -->
<!-- isosent="20120618140514" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and exit of parent process." -->
<!-- id="B8B989EB-2144-4EEA-A335-9AD24FF761B2_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FDF02AB.2030509_at_oracle.com" -->
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
<strong>Date:</strong> 2012-06-18 10:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19609.php">Ralph Castain: "Re: [OMPI users] Naming MPI_Spawn children"</a>
<li><strong>Previous message:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>In reply to:</strong> <a href="19604.php">TERRY DONTJE: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One further point that I missed in my earlier note: if you are starting the parent as a singleton, then you are fooling yourself about the &quot;without mpirun&quot; comment. A singleton immediately starts a local daemon to act as mpirun so that comm_spawn will work. Otherwise, there is no way to launch the child processes.
<br>
<p>So you might as well just launch the &quot;child&quot; job directly with mpirun - the result is exactly the same. If you truly want the job to use all the cores, one proc per core, and don't want to tell it the number of cores, then use the OMPI devel trunk where we have added support for such patterns. All you would have to do is:
<br>
<p>mpirun -ppr 1:core --bind-to core ./my_app
<br>
<p>and you are done.
<br>
<p><p>On Jun 18, 2012, at 4:27 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; On 6/16/2012 8:03 AM, Roland Schulz wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would like to start a single process without mpirun and then use MPI_Comm_spawn to start up as many processes as required. I don't want the parent process to take up any resources, so I tried to disconnect the inter communicator and then finalize mpi and exit the parent. But as soon as I do that the children exit too. Why is that? Can I somehow change that behavior? Or can I wait on the children to exit without the waiting taking up CPU time?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The reason I don't need the parent as soon as the children are spawned, is that I need one intra-communicator over all processes. And as far as I know I cannot join the parent and children to one intra-communicator. 
</span><br>
<span class="quotelev1">&gt; You could use MPI_Intercomm_merge to create an intra-communicator out of the groups in an inter-communicator and pass the inter-communicator you get back from the MPI_Comm_spawn call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The purpose of the whole exercise is that I want that my program to use all cores of a node by default when executed without mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have tested this with OpenMPI 1.4.5. A sample program is here: <a href="http://pastebin.com/g2XSZwvY">http://pastebin.com/g2XSZwvY</a> . &quot;Child finalized&quot; is only printed with the sleep(2) in the parent not commented out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Roland
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
</span><br>
<span class="quotelev2">&gt;&gt; 865-241-1537, ORNL PO BOX 2008 MS6309
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19609.php">Ralph Castain: "Re: [OMPI users] Naming MPI_Spawn children"</a>
<li><strong>Previous message:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>In reply to:</strong> <a href="19604.php">TERRY DONTJE: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
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
