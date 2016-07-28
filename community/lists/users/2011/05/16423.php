<?
$subject_val = "Re: [OMPI users] OpenMPI LS-DYNA Connection refused";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 09:01:22 2011" -->
<!-- isoreceived="20110503130122" -->
<!-- sent="Tue, 03 May 2011 09:03:39 -0400" -->
<!-- isosent="20110503130339" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI LS-DYNA Connection refused" -->
<!-- id="4DBFFD2B.2070507_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F01AC6C3A39C43FDBB943D8AB68FC305_at_ce.ufl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI LS-DYNA Connection refused<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 09:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16424.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16422.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>In reply to:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16424.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A little more clarification:
<br>
<p>1.  Simulations that fail always seem to fail?
<br>
2.  Does the same simulation always fail between the same processes (how 
<br>
about nodes)? I thought you
<br>
said no previously.
<br>
3.  Did the mpi_preconnect_mpi help any?
<br>
4.  Is there any informational messages in the /var/log/messages file 
<br>
around or before the abort?
<br>
5.  Have you tried netstat -s 1 while the program is running on one of 
<br>
the nodes that fail and see if
<br>
you are getting any of the failure type events spiking?
<br>
<p>The error code coming back from MPI_Abort seems really odd.  I am 
<br>
curious whether the connection refused is a result of the abort or what?
<br>
<p>--td
<br>
On 05/02/2011 03:40 PM, Robert Walters wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached the typical error message I've been getting. This is 
</span><br>
<span class="quotelev1">&gt; from a run I initiated this morning. The first few lines or so are 
</span><br>
<span class="quotelev1">&gt; related to the LS-DYNA program and are just there to let you know its 
</span><br>
<span class="quotelev1">&gt; running successfully for an hour and a half.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's interesting is this doesn't happen on every job I run, and will 
</span><br>
<span class="quotelev1">&gt; recur for the same simulation. For instance, Simulation A will run for 
</span><br>
<span class="quotelev1">&gt; 40 hours, and complete successfully. Simulation B will run for 6 
</span><br>
<span class="quotelev1">&gt; hours, and die from an error. Any further attempts to run simulation B 
</span><br>
<span class="quotelev1">&gt; will always end from an error. This makes me think there is some kind 
</span><br>
<span class="quotelev1">&gt; of bad calculation happening that OpenMPI doesn't know how to handle, 
</span><br>
<span class="quotelev1">&gt; or LS-DYNA doesn't know how to pass to OpenMPI. On the other hand, 
</span><br>
<span class="quotelev1">&gt; this particular simulation is one of those &quot;benchmarks&quot; and everyone 
</span><br>
<span class="quotelev1">&gt; runs it. I should not be getting errors from the FE code itself. 
</span><br>
<span class="quotelev1">&gt; Odd... I think I'll try this as an SMP job as well as an MPP job over 
</span><br>
<span class="quotelev1">&gt; a single node and see if the issue continues. That way I can figure 
</span><br>
<span class="quotelev1">&gt; out if its OpenMPI related or FE code related, but as I mentioned, I 
</span><br>
<span class="quotelev1">&gt; don't think it is FE code related since others have successfully run 
</span><br>
<span class="quotelev1">&gt; this particular benchmarking simulation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *_Error Message:_*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Parallel execution with     56 MPP proc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  NLQ used/max               152/   152
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Start time   05/02/2011 10:02:20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  End time     05/02/2011 11:24:46
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Elapsed time    4946 seconds(  1 hours 22 min. 26 sec.) for    9293 
</span><br>
<span class="quotelev1">&gt; cycles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  E r r o r   t e r m i n a t i o n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with errorcode -1525207032.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connect to address xx.xxx.xx.xxx port 544: Connection refused
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connect to address xx.xxx.xx.xxx port 544: Connection refused
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; trying normal rsh (/usr/bin/rsh)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 24488 on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node allision exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robert Walters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Terry Dontje
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, May 02, 2011 2:50 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] OpenMPI LS-DYNA Connection refused
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/02/2011 02:04 PM, Robert Walters wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was under the impression that all connections are made because of 
</span><br>
<span class="quotelev1">&gt; the nature of the program that OpenMPI is invoking. LS-DYNA is a 
</span><br>
<span class="quotelev1">&gt; finite element solver and for any given simulation I run, the cores on 
</span><br>
<span class="quotelev1">&gt; each node must constantly communicate with one another to check for 
</span><br>
<span class="quotelev1">&gt; various occurrences (contact with various pieces/parts, updating nodal 
</span><br>
<span class="quotelev1">&gt; coordinates, etc...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might be right, the connections might have been established but 
</span><br>
<span class="quotelev1">&gt; the error message you state (connection refused) seems out of place if 
</span><br>
<span class="quotelev1">&gt; the connection was already established.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was there more error messages from OMPI other than &quot;connection 
</span><br>
<span class="quotelev1">&gt; refused&quot;?  If so could you possibly provide that output to us, maybe 
</span><br>
<span class="quotelev1">&gt; it will give us a hint where in the library things are messing up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've run the program using --mca mpi_preconnect_mpi 1 and the 
</span><br>
<span class="quotelev1">&gt; simulation has started itself up successfully which I think means that 
</span><br>
<span class="quotelev1">&gt; the mpi_preconnect passed since all of the child processes have 
</span><br>
<span class="quotelev1">&gt; started up on each individual node. Thanks for the suggestion though, 
</span><br>
<span class="quotelev1">&gt; it's a good place to start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, it possibly could be telling if things do work with this setting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been worried (though I have no basis for it) that messages may be 
</span><br>
<span class="quotelev1">&gt; getting queued up and hitting some kind of ceiling or timeout. As a 
</span><br>
<span class="quotelev1">&gt; finite element code, I think the communication occurs on a large 
</span><br>
<span class="quotelev1">&gt; scale. Lots of very small packets going back and forth quickly. A few 
</span><br>
<span class="quotelev1">&gt; studies have been done by the High Performance Computing Advisory 
</span><br>
<span class="quotelev1">&gt; Council 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.hpcadvisorycouncil.com/pdf/LS-DYNA%20_analysis.pdf">http://www.hpcadvisorycouncil.com/pdf/LS-DYNA%20_analysis.pdf</a>) and 
</span><br>
<span class="quotelev1">&gt; they've suggested that LS-DYNA communicates at very, very high rates 
</span><br>
<span class="quotelev1">&gt; (Not sure but from pg.15 of that document they're suggesting hundreds 
</span><br>
<span class="quotelev1">&gt; of millions of messages in only a few hours). Is there any kind of 
</span><br>
<span class="quotelev1">&gt; buffer or queue that OpenMPI develops if messages are created too 
</span><br>
<span class="quotelev1">&gt; quickly? Does it dispatch them immediately or does it attempt to apply 
</span><br>
<span class="quotelev1">&gt; some kind of traffic flow control?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The queuing really depends on what type of calls the application is 
</span><br>
<span class="quotelev1">&gt; making.  If it is doing blocking sends then I wouldn't expect too much 
</span><br>
<span class="quotelev1">&gt; queuing happening using the tcp btl.  As far as traffic flow control 
</span><br>
<span class="quotelev1">&gt; is concerned I believe the tcp btl doesn't do any for the most part 
</span><br>
<span class="quotelev1">&gt; and lets tcp handle that.  Maybe someone else on the list could chime 
</span><br>
<span class="quotelev1">&gt; in if I am wrong here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the past I have seen where lots of traffic on the network and to a 
</span><br>
<span class="quotelev1">&gt; particular node has cause some connections not to be established.  But 
</span><br>
<span class="quotelev1">&gt; I don't know of any outstanding issue with such issues right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16423/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16423/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16424.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16422.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>In reply to:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16424.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
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
