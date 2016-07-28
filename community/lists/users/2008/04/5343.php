<?
$subject_val = "Re: [OMPI users] Oversubscription performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 03:11:05 2008" -->
<!-- isoreceived="20080409071105" -->
<!-- sent="Wed, 9 Apr 2008 17:10:58 +1000" -->
<!-- isosent="20080409071058" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription performance problem" -->
<!-- id="8acca4520804090010n5c150166t14835c759da1478c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Lars Andersson (<em>larsand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 03:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5344.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5342.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>In reply to:</strong> <a href="5313.php">Lars Andersson: "[OMPI users] Oversubscription performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Apr 4, 2008 at 4:30 PM, Lars Andersson &lt;larsand_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm just in the progress of moving our application from LAM/MPI to
</span><br>
<span class="quotelev1">&gt;  OpenMPI, mainly because OpenMPI makes it easier for a user to run
</span><br>
<span class="quotelev1">&gt;  multiple jobs(MPI universa) simultaneously. This is useful if a user
</span><br>
<span class="quotelev1">&gt;  wants to run smaller experiments without disturbing a large experiment
</span><br>
<span class="quotelev1">&gt;  running in the background). I've been evaluation the performance using
</span><br>
<span class="quotelev1">&gt;  a simple test, running on a hetrogenous cluster of 2 x dual core
</span><br>
<span class="quotelev1">&gt;  Opteron machines, a couple of dual core P4 Xeon machines and a 8 core
</span><br>
<span class="quotelev1">&gt;  Core2 machine. The main structure of the application is a master rank
</span><br>
<span class="quotelev1">&gt;  distributing jobs packages to the rest of the ranks and collecting the
</span><br>
<span class="quotelev1">&gt;  results. We don't use any fancy MPI features but rather see it as an
</span><br>
<span class="quotelev1">&gt;  efficient low-level tool for broadcasting and transferring data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When a single user runs a job (fully subscribed nodes, but not
</span><br>
<span class="quotelev1">&gt;  oversubscribed, i.e one process per cpu-core) on an otherwise unloaded
</span><br>
<span class="quotelev1">&gt;  cluster both LAM/MPI and OpenMPI average runtimes of about 1m33s
</span><br>
<span class="quotelev1">&gt;  (OpenMPI has a slightly lower average).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When I start the same job simultaneously as two different users (thus
</span><br>
<span class="quotelev1">&gt;  oversubscribing the nodes 2x) under LAM/MPI, the two jobs finish as an
</span><br>
<span class="quotelev1">&gt;  average time of about 3m, thus scaling very well (we use the -ssi rpi
</span><br>
<span class="quotelev1">&gt;  sysv option to mpirun under LAM/MPI to avoid busy waiting).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When running the same second experiment under OpenMPI, the average
</span><br>
<span class="quotelev1">&gt;  runtime jumps up to about 3m30s, with runs occasionally taking more
</span><br>
<span class="quotelev1">&gt;  than 4 minutes to complete. I do use the &quot;--mca mpi_yield_when_idle 1&quot;
</span><br>
<span class="quotelev1">&gt;  option to mpirun, but it doesn't seem to make any difference. I've
</span><br>
<span class="quotelev1">&gt;  also tried setting the environment variable
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_mpi_yield_when_idle=1, but still no change. ompi_info says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_info --param all all | grep yield
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The cluster is used for various tasks, running MPI applications as
</span><br>
<span class="quotelev1">&gt;  well as non-MPI applications, so we would like to avoid spending too
</span><br>
<span class="quotelev1">&gt;  much cycles on busy-waiting. Any ideas on how to tweak OpenMPI to get
</span><br>
<span class="quotelev1">&gt;  better performance and more cooperative behavior in this case would be
</span><br>
<span class="quotelev1">&gt;  greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Lars
</span><br>
<p>No ideas? Such a large performance regression compared to LAM/MPI
<br>
seems quite serious to me. Or do you consider the case of
<br>
over-subscription not worth optimizing for? Or did I get something
<br>
totally wrong?
<br>
<p>/Lars
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5344.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5342.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>In reply to:</strong> <a href="5313.php">Lars Andersson: "[OMPI users] Oversubscription performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
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
