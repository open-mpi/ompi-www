<?
$subject_val = "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 12:27:18 2011" -->
<!-- isoreceived="20110125172718" -->
<!-- sent="Tue, 25 Jan 2011 18:27:06 +0100" -->
<!-- isosent="20110125172706" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?" -->
<!-- id="8382FA93-F7C1-4173-BAD6-57DBB0B48DEB_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D3EB4B3.70609_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-25 12:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15418.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>In reply to:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15419.php">Will Glover: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Reply:</strong> <a href="15419.php">Will Glover: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 25.01.2011 um 12:32 schrieb Terry Dontje:
<br>
<p><span class="quotelev1">&gt; On 01/25/2011 02:17 AM, Will Glover wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I tried a google/mailing list search for this but came up with nothing, so here goes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any level of automation between open mpi's dynamic process management and the SGE queue manager?  
</span><br>
<span class="quotelev2">&gt;&gt; In particular, can I make a call to mpi_comm_spawn and have SGE dynamically increase the number of slots?  
</span><br>
<span class="quotelev2">&gt;&gt; This seems a little far fetched, but it would be really useful if this is possible.  My application is 'restricted' to coarse-grain task parallelism and involves a work load that varies significantly during runtime (between 1 and ~100 parallel tasks).  Dynamic process management would maintain an optimal number of processors and reduce idling.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; This is an interesting idea but no integration has been done that would allow an MPI job to request more slots. 
</span><br>
<p>Similar ideas were on the former SGE mailing list a couple of times - having varying resource requests over the lifetime of a job (cores, memory, licenses, ...). This would mean in the end to have some kind of real-time-queuing system, as you have to have the necessary resources to be free in time for sure.
<br>
<p>Besides this also some syntax for either requesting a &quot;resource profile over time&quot; when such a job is submitted would be necessary, or to allow a job while it's running issuing some kinds of commands to request/release resources on demand.
<br>
<p>If you have such a &quot;resource profile over time&quot; for a bunch of jobs, it could then be extended to solve a cutting-stock problem where the unit to be cut would be time, e.g. arrange these 10 jobs that they finish in the least amount of time all together - and you could predict exactly when each job will end. This is getting really complex.
<br>
<p>==
<br>
<p>What can be done in your situation: have some kind of &quot;background queue&quot; with a nice value of 19, but the parallel job you submit to a queue with the default nice value 0. Although you request 100 cores and reserve them (i.e. the background queue shouldn't be suspended in such a case of course), the background queue will still run at full speed when nothing else is running on the nodes. When some of the parallel tasks are started on the nodes, they will get most of the computing time (this means: oversubscription by intention). The background queue can be used for less important jobs. Such a setup is usefull when your parallel application isn't running in parallel all the time like in your case.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail-Anhang.gif&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15418.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>In reply to:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15419.php">Will Glover: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Reply:</strong> <a href="15419.php">Will Glover: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
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
