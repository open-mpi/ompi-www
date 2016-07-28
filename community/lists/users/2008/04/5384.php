<?
$subject_val = "Re: [OMPI users] Oversubscription performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 13 07:51:49 2008" -->
<!-- isoreceived="20080413115149" -->
<!-- sent="Sun, 13 Apr 2008 07:51:37 -0400" -->
<!-- isosent="20080413115137" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription performance problem" -->
<!-- id="EC10E79B-01C2-4052-9E50-A85702CD1D22_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8acca4520804032330u4d91596cv6c8934e6d30812ad_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscription performance problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-13 07:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5385.php">Jeff Squyres: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Previous message:</strong> <a href="5383.php">Andreas Sch&#228;fer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>In reply to:</strong> <a href="5313.php">Lars Andersson: "[OMPI users] Oversubscription performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5394.php">Torje Henriksen: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Reply:</strong> <a href="5394.php">Torje Henriksen: "Re: [OMPI users] Oversubscription performance problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delays in replying.
<br>
<p>The central problem is that Open MPI is much more aggressive about its  
<br>
message passing progress than LAM is -- it simply wasn't designed to  
<br>
share well as a mechanism to get as high performance as possible.
<br>
<p>mpi_yield_when_idle is most helpful only for certain transports that  
<br>
actively use our event engine, such as the TCP device.  Since you're  
<br>
using the LAM sysv RPI, I assume you're using the TCP and shared  
<br>
memory devices in OMPI, right?  If you're using infiniband, for  
<br>
example, the event engine is not called much because IB has its own  
<br>
progression engine that is unrelated to OMPI's (and therefore we don't  
<br>
invoke OMPI's much).
<br>
<p>mpi_yield_when_idle is also only helpful if you're going into the MPI  
<br>
layer often and making message passing progress (i.e., OMPI's event  
<br>
engine is actively being invoked).  Is this true for your application?
<br>
<p>If mpi_yield_when_idle really doesn't help much, you may consider  
<br>
sprinkling calls to sched_yield() in your codes to force the process  
<br>
to yield the processor.
<br>
<p><p><p>On Apr 4, 2008, at 2:30 AM, Lars Andersson wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm just in the progress of moving our application from LAM/MPI to
</span><br>
<span class="quotelev1">&gt; OpenMPI, mainly because OpenMPI makes it easier for a user to run
</span><br>
<span class="quotelev1">&gt; multiple jobs(MPI universa) simultaneously. This is useful if a user
</span><br>
<span class="quotelev1">&gt; wants to run smaller experiments without disturbing a large experiment
</span><br>
<span class="quotelev1">&gt; running in the background). I've been evaluation the performance using
</span><br>
<span class="quotelev1">&gt; a simple test, running on a hetrogenous cluster of 2 x dual core
</span><br>
<span class="quotelev1">&gt; Opteron machines, a couple of dual core P4 Xeon machines and a 8 core
</span><br>
<span class="quotelev1">&gt; Core2 machine. The main structure of the application is a master rank
</span><br>
<span class="quotelev1">&gt; distributing jobs packages to the rest of the ranks and collecting the
</span><br>
<span class="quotelev1">&gt; results. We don't use any fancy MPI features but rather see it as an
</span><br>
<span class="quotelev1">&gt; efficient low-level tool for broadcasting and transferring data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When a single user runs a job (fully subscribed nodes, but not
</span><br>
<span class="quotelev1">&gt; oversubscribed, i.e one process per cpu-core) on an otherwise unloaded
</span><br>
<span class="quotelev1">&gt; cluster both LAM/MPI and OpenMPI average runtimes of about 1m33s
</span><br>
<span class="quotelev1">&gt; (OpenMPI has a slightly lower average).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I start the same job simultaneously as two different users (thus
</span><br>
<span class="quotelev1">&gt; oversubscribing the nodes 2x) under LAM/MPI, the two jobs finish as an
</span><br>
<span class="quotelev1">&gt; average time of about 3m, thus scaling very well (we use the -ssi rpi
</span><br>
<span class="quotelev1">&gt; sysv option to mpirun under LAM/MPI to avoid busy waiting).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running the same second experiment under OpenMPI, the average
</span><br>
<span class="quotelev1">&gt; runtime jumps up to about 3m30s, with runs occasionally taking more
</span><br>
<span class="quotelev1">&gt; than 4 minutes to complete. I do use the &quot;--mca mpi_yield_when_idle 1&quot;
</span><br>
<span class="quotelev1">&gt; option to mpirun, but it doesn't seem to make any difference. I've
</span><br>
<span class="quotelev1">&gt; also tried setting the environment variable
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_yield_when_idle=1, but still no change. ompi_info says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --param all all | grep yield
</span><br>
<span class="quotelev1">&gt;                 MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster is used for various tasks, running MPI applications as
</span><br>
<span class="quotelev1">&gt; well as non-MPI applications, so we would like to avoid spending too
</span><br>
<span class="quotelev1">&gt; much cycles on busy-waiting. Any ideas on how to tweak OpenMPI to get
</span><br>
<span class="quotelev1">&gt; better performance and more cooperative behavior in this case would be
</span><br>
<span class="quotelev1">&gt; greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lars
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5385.php">Jeff Squyres: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Previous message:</strong> <a href="5383.php">Andreas Sch&#228;fer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>In reply to:</strong> <a href="5313.php">Lars Andersson: "[OMPI users] Oversubscription performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5394.php">Torje Henriksen: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Reply:</strong> <a href="5394.php">Torje Henriksen: "Re: [OMPI users] Oversubscription performance problem"</a>
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
