<?
$subject_val = "Re: [OMPI devel] How can I achieve node fail over";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 22:37:55 2010" -->
<!-- isoreceived="20100112033755" -->
<!-- sent="Tue, 12 Jan 2010 09:07:50 +0530" -->
<!-- isosent="20100112033750" -->
<!-- name="Sai Sudheesh" -->
<!-- email="saisudheesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How can I achieve node fail over" -->
<!-- id="72522da71001111937j506e817y8200b32575b95644_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E02A0635-6446-4DEE-991E-40F3C2670E0E_at_open-mpi.org" -->
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
<strong>From:</strong> Sai Sudheesh (<em>saisudheesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 22:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7308.php">Ralph Castain: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Previous message:</strong> <a href="7306.php">Josh Hursey: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>In reply to:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7308.php">Ralph Castain: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Reply:</strong> <a href="7308.php">Ralph Castain: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First of all...thanks for your response..
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There was some typos in my mail
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;making it vague at some portions.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Let me  make the scenarios mentioned in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;previous mail more elaborative.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What I tried is as follows.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I assigned a parallel task taking a few minutes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(matrix multiplication of order 2048) to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;two machines connected through Ethernet.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while the multiplication was going on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I pulled off the ethernet cable.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This resulted in infinite waiting of the mpirun.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I was in need of mechanism to find the failure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So, I tried to run mpirun with mca parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-heartbeat-rate 1.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now mpirun was able to be aware of the link failure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and aborted after dumping ip of the non reachable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node on terminal.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At this point I have to catch this fault
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and instead of displaying the error message on screen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and aborting the whole job.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I need to reassign the task to some
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reachable node.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I hope this time I expressed it clearly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks.
<br>
<p>With Love
<br>
sudheesh
<br>
<p><p>On 1/12/10, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 6, 2010, at 9:04 AM, Sai Sudheesh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Just about two months ago I started experimenting with OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;       I found this piece of software very interesting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       How can I make this software fault tolerant?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depends on what you mean my fault tolerant. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       As of now I am running this software on two machines
</span><br>
<span class="quotelev2">&gt;&gt;       having quad core processors and fedora 10.
</span><br>
<span class="quotelev2">&gt;&gt;       I am using openmpi1.3.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       If a remote machine fails while a parallel task running on both
</span><br>
<span class="quotelev2">&gt;&gt; the machines
</span><br>
<span class="quotelev2">&gt;&gt;       is it possible to reassign that task assigned to it  to some
</span><br>
<span class="quotelev2">&gt;&gt; other node available and
</span><br>
<span class="quotelev2">&gt;&gt;       continue the computation instead of aborting the entire
</span><br>
<span class="quotelev2">&gt;&gt; computation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This scenario is currently not supported by Open MPI. If an MPI
</span><br>
<span class="quotelev1">&gt; process fails, Open MPI will cleanup the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few of us have been working on this scenario off-trunk for a while
</span><br>
<span class="quotelev1">&gt; now. It is progressing nicely, but not available for public
</span><br>
<span class="quotelev1">&gt; consumption just yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Can anybody tell me where I have to look for more information
</span><br>
<span class="quotelev2">&gt;&gt; regarding this.
</span><br>
<span class="quotelev2">&gt;&gt;       I have tried with FT MPI but tired of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FT-MPI should be able to work in this scenario.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       I have also heard of CIFTS-FTB, can I use for solving this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The CIFTS FTB is focused on a slightly different problem, that of
</span><br>
<span class="quotelev1">&gt; coordination amongst software components before/during/after a
</span><br>
<span class="quotelev1">&gt; failure. Currently, Open MPI is able to interact with the CIFTS FTB to
</span><br>
<span class="quotelev1">&gt; send fault information. Soon, Open MPI will be able to respond to such
</span><br>
<span class="quotelev1">&gt; fault information and take appropriate actions. The first generation
</span><br>
<span class="quotelev1">&gt; of this work is scheduled to be brought into the Open MPI trunk soon,
</span><br>
<span class="quotelev1">&gt; and will support catching of some basic events. Handling the scenario
</span><br>
<span class="quotelev1">&gt; you mentioned at the top of the message will come shortly thereafter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Is it necessary to make a source code change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In some cases yes, in others no. It really depends on what the final
</span><br>
<span class="quotelev1">&gt; solution set looks like and how involved your application wants to be
</span><br>
<span class="quotelev1">&gt; in the recovery process. At the very least, the application will
</span><br>
<span class="quotelev1">&gt; likely have to specify the MPI_ERRORS_RETURN error handler for each
</span><br>
<span class="quotelev1">&gt; communicator to override the default MPI_ERRORS_ARE_FATAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Have anybody a solution already with you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a couple of transparent fault tolerance solutions in the
</span><br>
<span class="quotelev1">&gt; current trunk.
</span><br>
<span class="quotelev1">&gt;   - Checkpoint/Restart of the entire MPI job (requires full job
</span><br>
<span class="quotelev1">&gt; restart on failure)
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.osl.iu.edu/research/ft/ompi-cr/">http://www.osl.iu.edu/research/ft/ompi-cr/</a>
</span><br>
<span class="quotelev1">&gt;   - Message Logging:
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR">https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For non-MPI jobs you could also check out the Open Resilient Cluster
</span><br>
<span class="quotelev1">&gt; Manager (ORCM) project:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/orcm/">http://www.open-mpi.org/projects/orcm/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       If an application is killed by OS at the remote node
</span><br>
<span class="quotelev2">&gt;&gt;       mpirun is aborting and reports an error.
</span><br>
<span class="quotelev2">&gt;&gt;       What kind of signal the remote orted is to mpirun?
</span><br>
<span class="quotelev2">&gt;&gt;       How can I handle it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what your asking here. The orted detects the local
</span><br>
<span class="quotelev1">&gt; process failure and notifies the mpirun process using the OOB (out-of-
</span><br>
<span class="quotelev1">&gt; band) communication channel. The mpirun process then initiates the
</span><br>
<span class="quotelev1">&gt; shutdown procedure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       I know that I have asked a lot of questions..
</span><br>
<span class="quotelev2">&gt;&gt;       I will be thankful to you If anybody could respond with
</span><br>
<span class="quotelev2">&gt;&gt;       at least some suggestions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with love
</span><br>
<span class="quotelev2">&gt;&gt; sudheesh.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
regards
sai sudheesh
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7308.php">Ralph Castain: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Previous message:</strong> <a href="7306.php">Josh Hursey: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>In reply to:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7308.php">Ralph Castain: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Reply:</strong> <a href="7308.php">Ralph Castain: "Re: [OMPI devel] How can I achieve node fail over"</a>
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
