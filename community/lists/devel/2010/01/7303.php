<?
$subject_val = "Re: [OMPI devel] How can I achieve node fail over";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 15:43:40 2010" -->
<!-- isoreceived="20100111204340" -->
<!-- sent="Mon, 11 Jan 2010 15:43:36 -0500" -->
<!-- isosent="20100111204336" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How can I achieve node fail over" -->
<!-- id="E02A0635-6446-4DEE-991E-40F3C2670E0E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72522da71001060604k450a9432u48eef643ae5f996e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How can I achieve node fail over<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 15:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Previous message:</strong> <a href="7302.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7279.php">Sai Sudheesh: "[OMPI devel] How can I achieve node fail over"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Reply:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 6, 2010, at 9:04 AM, Sai Sudheesh wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Just about two months ago I started experimenting with OpenMPI.
</span><br>
<span class="quotelev1">&gt;       I found this piece of software very interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       How can I make this software fault tolerant?
</span><br>
<p>Depends on what you mean my fault tolerant. :)
<br>
<p><span class="quotelev1">&gt;       As of now I am running this software on two machines
</span><br>
<span class="quotelev1">&gt;       having quad core processors and fedora 10.
</span><br>
<span class="quotelev1">&gt;       I am using openmpi1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       If a remote machine fails while a parallel task running on both
</span><br>
<span class="quotelev1">&gt; the machines
</span><br>
<span class="quotelev1">&gt;       is it possible to reassign that task assigned to it  to some
</span><br>
<span class="quotelev1">&gt; other node available and
</span><br>
<span class="quotelev1">&gt;       continue the computation instead of aborting the entire  
</span><br>
<span class="quotelev1">&gt; computation?
</span><br>
<p>This scenario is currently not supported by Open MPI. If an MPI  
<br>
process fails, Open MPI will cleanup the job.
<br>
<p>A few of us have been working on this scenario off-trunk for a while  
<br>
now. It is progressing nicely, but not available for public  
<br>
consumption just yet.
<br>
<p><p><span class="quotelev1">&gt;       Can anybody tell me where I have to look for more information
</span><br>
<span class="quotelev1">&gt; regarding this.
</span><br>
<span class="quotelev1">&gt;       I have tried with FT MPI but tired of it.
</span><br>
<p>FT-MPI should be able to work in this scenario.
<br>
<p><span class="quotelev1">&gt;       I have also heard of CIFTS-FTB, can I use for solving this?
</span><br>
<p>The CIFTS FTB is focused on a slightly different problem, that of  
<br>
coordination amongst software components before/during/after a  
<br>
failure. Currently, Open MPI is able to interact with the CIFTS FTB to  
<br>
send fault information. Soon, Open MPI will be able to respond to such  
<br>
fault information and take appropriate actions. The first generation  
<br>
of this work is scheduled to be brought into the Open MPI trunk soon,  
<br>
and will support catching of some basic events. Handling the scenario  
<br>
you mentioned at the top of the message will come shortly thereafter.
<br>
<p><span class="quotelev1">&gt;       Is it necessary to make a source code change?
</span><br>
<p>In some cases yes, in others no. It really depends on what the final  
<br>
solution set looks like and how involved your application wants to be  
<br>
in the recovery process. At the very least, the application will  
<br>
likely have to specify the MPI_ERRORS_RETURN error handler for each  
<br>
communicator to override the default MPI_ERRORS_ARE_FATAL.
<br>
<p><p><span class="quotelev1">&gt;       Have anybody a solution already with you?
</span><br>
<p>There are a couple of transparent fault tolerance solutions in the  
<br>
current trunk.
<br>
&nbsp;&nbsp;- Checkpoint/Restart of the entire MPI job (requires full job  
<br>
restart on failure)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.osl.iu.edu/research/ft/ompi-cr/">http://www.osl.iu.edu/research/ft/ompi-cr/</a>
<br>
&nbsp;&nbsp;- Message Logging:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR">https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR</a>
<br>
<p>For non-MPI jobs you could also check out the Open Resilient Cluster  
<br>
Manager (ORCM) project:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/orcm/">http://www.open-mpi.org/projects/orcm/</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       If an application is killed by OS at the remote node
</span><br>
<span class="quotelev1">&gt;       mpirun is aborting and reports an error.
</span><br>
<span class="quotelev1">&gt;       What kind of signal the remote orted is to mpirun?
</span><br>
<span class="quotelev1">&gt;       How can I handle it?
</span><br>
<p>I'm not sure what your asking here. The orted detects the local  
<br>
process failure and notifies the mpirun process using the OOB (out-of- 
<br>
band) communication channel. The mpirun process then initiates the  
<br>
shutdown procedure.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I know that I have asked a lot of questions..
</span><br>
<span class="quotelev1">&gt;       I will be thankful to you If anybody could respond with
</span><br>
<span class="quotelev1">&gt;       at least some suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with love
</span><br>
<span class="quotelev1">&gt; sudheesh.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Previous message:</strong> <a href="7302.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7279.php">Sai Sudheesh: "[OMPI devel] How can I achieve node fail over"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Reply:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
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
