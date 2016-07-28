<?
$subject_val = "Re: [OMPI devel] How can I achieve node fail over";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 22:53:00 2010" -->
<!-- isoreceived="20100112035300" -->
<!-- sent="Mon, 11 Jan 2010 20:52:52 -0700" -->
<!-- isosent="20100112035252" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How can I achieve node fail over" -->
<!-- id="DB752ECD-5F3F-4A29-ADC5-DC163C79532C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72522da71001111937j506e817y8200b32575b95644_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 22:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7309.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Previous message:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>In reply to:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7309.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Reply:</strong> <a href="7309.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Josh indicated, the current OMPI trunk won't do that at the moment. Josh and I are working on a side branch to integrate the OpenRCM methods with mpirun to provide an OMPI capability for those not running ORCM on their systems.
<br>
<p>What wasn't clear is your motivation. Are you trying to develop this capability, or just use it? If the former, then the three of us should probably discuss off-line how you might contribute. Like Josh said, you might also find the ORCM work relevant.
<br>
<p>If the latter, it should become available in the next few weeks as most of the required elements are already in the ORTE code base (what remains in ORCM and not in ORTE is the integration to reassign the task). Rewiring MPI after a task is restarted will follow.
<br>
<p><p>On Jan 11, 2010, at 8:37 PM, Sai Sudheesh wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           First of all...thanks for your response..
</span><br>
<span class="quotelev1">&gt;           There was some typos in my mail
</span><br>
<span class="quotelev1">&gt;           making it vague at some portions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           Let me  make the scenarios mentioned in the
</span><br>
<span class="quotelev1">&gt;           previous mail more elaborative.
</span><br>
<span class="quotelev1">&gt;           What I tried is as follows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           I assigned a parallel task taking a few minutes
</span><br>
<span class="quotelev1">&gt;           (matrix multiplication of order 2048) to
</span><br>
<span class="quotelev1">&gt;           two machines connected through Ethernet.
</span><br>
<span class="quotelev1">&gt;           while the multiplication was going on
</span><br>
<span class="quotelev1">&gt;           I pulled off the ethernet cable.
</span><br>
<span class="quotelev1">&gt;           This resulted in infinite waiting of the mpirun.
</span><br>
<span class="quotelev1">&gt;           I was in need of mechanism to find the failure
</span><br>
<span class="quotelev1">&gt;           link.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           So, I tried to run mpirun with mca parameter
</span><br>
<span class="quotelev1">&gt;           -heartbeat-rate 1.
</span><br>
<span class="quotelev1">&gt;           Now mpirun was able to be aware of the link failure
</span><br>
<span class="quotelev1">&gt;           and aborted after dumping ip of the non reachable
</span><br>
<span class="quotelev1">&gt;           node on terminal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           At this point I have to catch this fault
</span><br>
<span class="quotelev1">&gt;           and instead of displaying the error message on screen
</span><br>
<span class="quotelev1">&gt;           and aborting the whole job.
</span><br>
<span class="quotelev1">&gt;           I need to reassign the task to some
</span><br>
<span class="quotelev1">&gt;           reachable node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           I hope this time I expressed it clearly.
</span><br>
<span class="quotelev1">&gt;           Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Love
</span><br>
<span class="quotelev1">&gt; sudheesh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/12/10, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 6, 2010, at 9:04 AM, Sai Sudheesh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Just about two months ago I started experimenting with OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I found this piece of software very interesting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      How can I make this software fault tolerant?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depends on what you mean my fault tolerant. :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      As of now I am running this software on two machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      having quad core processors and fedora 10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I am using openmpi1.3.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      If a remote machine fails while a parallel task running on both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      is it possible to reassign that task assigned to it  to some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other node available and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      continue the computation instead of aborting the entire
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computation?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This scenario is currently not supported by Open MPI. If an MPI
</span><br>
<span class="quotelev2">&gt;&gt; process fails, Open MPI will cleanup the job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A few of us have been working on this scenario off-trunk for a while
</span><br>
<span class="quotelev2">&gt;&gt; now. It is progressing nicely, but not available for public
</span><br>
<span class="quotelev2">&gt;&gt; consumption just yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Can anybody tell me where I have to look for more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regarding this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I have tried with FT MPI but tired of it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FT-MPI should be able to work in this scenario.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I have also heard of CIFTS-FTB, can I use for solving this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The CIFTS FTB is focused on a slightly different problem, that of
</span><br>
<span class="quotelev2">&gt;&gt; coordination amongst software components before/during/after a
</span><br>
<span class="quotelev2">&gt;&gt; failure. Currently, Open MPI is able to interact with the CIFTS FTB to
</span><br>
<span class="quotelev2">&gt;&gt; send fault information. Soon, Open MPI will be able to respond to such
</span><br>
<span class="quotelev2">&gt;&gt; fault information and take appropriate actions. The first generation
</span><br>
<span class="quotelev2">&gt;&gt; of this work is scheduled to be brought into the Open MPI trunk soon,
</span><br>
<span class="quotelev2">&gt;&gt; and will support catching of some basic events. Handling the scenario
</span><br>
<span class="quotelev2">&gt;&gt; you mentioned at the top of the message will come shortly thereafter.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Is it necessary to make a source code change?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In some cases yes, in others no. It really depends on what the final
</span><br>
<span class="quotelev2">&gt;&gt; solution set looks like and how involved your application wants to be
</span><br>
<span class="quotelev2">&gt;&gt; in the recovery process. At the very least, the application will
</span><br>
<span class="quotelev2">&gt;&gt; likely have to specify the MPI_ERRORS_RETURN error handler for each
</span><br>
<span class="quotelev2">&gt;&gt; communicator to override the default MPI_ERRORS_ARE_FATAL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Have anybody a solution already with you?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are a couple of transparent fault tolerance solutions in the
</span><br>
<span class="quotelev2">&gt;&gt; current trunk.
</span><br>
<span class="quotelev2">&gt;&gt;  - Checkpoint/Restart of the entire MPI job (requires full job
</span><br>
<span class="quotelev2">&gt;&gt; restart on failure)
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.osl.iu.edu/research/ft/ompi-cr/">http://www.osl.iu.edu/research/ft/ompi-cr/</a>
</span><br>
<span class="quotelev2">&gt;&gt;  - Message Logging:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR">https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For non-MPI jobs you could also check out the Open Resilient Cluster
</span><br>
<span class="quotelev2">&gt;&gt; Manager (ORCM) project:
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/projects/orcm/">http://www.open-mpi.org/projects/orcm/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      If an application is killed by OS at the remote node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mpirun is aborting and reports an error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      What kind of signal the remote orted is to mpirun?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      How can I handle it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what your asking here. The orted detects the local
</span><br>
<span class="quotelev2">&gt;&gt; process failure and notifies the mpirun process using the OOB (out-of-
</span><br>
<span class="quotelev2">&gt;&gt; band) communication channel. The mpirun process then initiates the
</span><br>
<span class="quotelev2">&gt;&gt; shutdown procedure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I know that I have asked a lot of questions..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I will be thankful to you If anybody could respond with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      at least some suggestions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with love
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sudheesh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; sai sudheesh
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
<li><strong>Next message:</strong> <a href="7309.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Previous message:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>In reply to:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7309.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Reply:</strong> <a href="7309.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
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
