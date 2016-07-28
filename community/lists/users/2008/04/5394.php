<?
$subject_val = "Re: [OMPI users] Oversubscription performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 07:04:39 2008" -->
<!-- isoreceived="20080415110439" -->
<!-- sent="Tue, 15 Apr 2008 13:04:31 +0200" -->
<!-- isosent="20080415110431" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription performance problem" -->
<!-- id="FB6392D1-DCFD-4670-88E7-100A4948DDC9_at_stud.cs.uit.no" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EC10E79B-01C2-4052-9E50-A85702CD1D22_at_cisco.com" -->
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
<strong>From:</strong> Torje Henriksen (<em>torjeh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-15 07:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5395.php">Cally K: "[OMPI users] open mpi on smp"</a>
<li><strong>Previous message:</strong> <a href="5393.php">Brian Barrett: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lars,
<br>
<p>First off, I think Jeff makes some very good points.
<br>
<p>If you still think your applications will benefit from yielding  
<br>
instead of hogging the cpu,
<br>
you should probably try to use the parameter &quot;mpi_show_mca_params&quot;.
<br>
<p>This will give you a list of the mca parameters at runtime. This way  
<br>
you can see
<br>
what the yield_when_idle-parameter really looks like at runtime. Ompi  
<br>
seems to be
<br>
overriding the user some times. If yield_when_idle is disabled, I  
<br>
think changes
<br>
has to be done to the open mpi code to make it yield.
<br>
<p>Guess this didn't help at all, but at least you can check if you are  
<br>
curious :)
<br>
<p>Best regards,
<br>
<p>Torje Henriksen
<br>
<p>On Apr 13, 2008, at 1:51 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delays in replying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The central problem is that Open MPI is much more aggressive about its
</span><br>
<span class="quotelev1">&gt; message passing progress than LAM is -- it simply wasn't designed to
</span><br>
<span class="quotelev1">&gt; share well as a mechanism to get as high performance as possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle is most helpful only for certain transports that
</span><br>
<span class="quotelev1">&gt; actively use our event engine, such as the TCP device.  Since you're
</span><br>
<span class="quotelev1">&gt; using the LAM sysv RPI, I assume you're using the TCP and shared
</span><br>
<span class="quotelev1">&gt; memory devices in OMPI, right?  If you're using infiniband, for
</span><br>
<span class="quotelev1">&gt; example, the event engine is not called much because IB has its own
</span><br>
<span class="quotelev1">&gt; progression engine that is unrelated to OMPI's (and therefore we don't
</span><br>
<span class="quotelev1">&gt; invoke OMPI's much).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle is also only helpful if you're going into the MPI
</span><br>
<span class="quotelev1">&gt; layer often and making message passing progress (i.e., OMPI's event
</span><br>
<span class="quotelev1">&gt; engine is actively being invoked).  Is this true for your application?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If mpi_yield_when_idle really doesn't help much, you may consider
</span><br>
<span class="quotelev1">&gt; sprinkling calls to sched_yield() in your codes to force the process
</span><br>
<span class="quotelev1">&gt; to yield the processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2008, at 2:30 AM, Lars Andersson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm just in the progress of moving our application from LAM/MPI to
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI, mainly because OpenMPI makes it easier for a user to run
</span><br>
<span class="quotelev2">&gt;&gt; multiple jobs(MPI universa) simultaneously. This is useful if a user
</span><br>
<span class="quotelev2">&gt;&gt; wants to run smaller experiments without disturbing a large  
</span><br>
<span class="quotelev2">&gt;&gt; experiment
</span><br>
<span class="quotelev2">&gt;&gt; running in the background). I've been evaluation the performance  
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt; a simple test, running on a hetrogenous cluster of 2 x dual core
</span><br>
<span class="quotelev2">&gt;&gt; Opteron machines, a couple of dual core P4 Xeon machines and a 8 core
</span><br>
<span class="quotelev2">&gt;&gt; Core2 machine. The main structure of the application is a master rank
</span><br>
<span class="quotelev2">&gt;&gt; distributing jobs packages to the rest of the ranks and collecting  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; results. We don't use any fancy MPI features but rather see it as an
</span><br>
<span class="quotelev2">&gt;&gt; efficient low-level tool for broadcasting and transferring data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When a single user runs a job (fully subscribed nodes, but not
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribed, i.e one process per cpu-core) on an otherwise  
</span><br>
<span class="quotelev2">&gt;&gt; unloaded
</span><br>
<span class="quotelev2">&gt;&gt; cluster both LAM/MPI and OpenMPI average runtimes of about 1m33s
</span><br>
<span class="quotelev2">&gt;&gt; (OpenMPI has a slightly lower average).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I start the same job simultaneously as two different users (thus
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribing the nodes 2x) under LAM/MPI, the two jobs finish as  
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt; average time of about 3m, thus scaling very well (we use the -ssi rpi
</span><br>
<span class="quotelev2">&gt;&gt; sysv option to mpirun under LAM/MPI to avoid busy waiting).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When running the same second experiment under OpenMPI, the average
</span><br>
<span class="quotelev2">&gt;&gt; runtime jumps up to about 3m30s, with runs occasionally taking more
</span><br>
<span class="quotelev2">&gt;&gt; than 4 minutes to complete. I do use the &quot;--mca mpi_yield_when_idle  
</span><br>
<span class="quotelev2">&gt;&gt; 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option to mpirun, but it doesn't seem to make any difference. I've
</span><br>
<span class="quotelev2">&gt;&gt; also tried setting the environment variable
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_mpi_yield_when_idle=1, but still no change. ompi_info says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --param all all | grep yield
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The cluster is used for various tasks, running MPI applications as
</span><br>
<span class="quotelev2">&gt;&gt; well as non-MPI applications, so we would like to avoid spending too
</span><br>
<span class="quotelev2">&gt;&gt; much cycles on busy-waiting. Any ideas on how to tweak OpenMPI to get
</span><br>
<span class="quotelev2">&gt;&gt; better performance and more cooperative behavior in this case would  
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lars
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5395.php">Cally K: "[OMPI users] open mpi on smp"</a>
<li><strong>Previous message:</strong> <a href="5393.php">Brian Barrett: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
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
