<?
$subject_val = "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 15:17:04 2011" -->
<!-- isoreceived="20110125201704" -->
<!-- sent="Tue, 25 Jan 2011 21:16:55 +0100" -->
<!-- isosent="20110125201655" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?" -->
<!-- id="28C16A07-6D76-4B3C-A1A3-2B84D1F21DBD_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="429218.33543.qm_at_web36702.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2011-01-25 15:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15422.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15420.php">Nathan Hjelm: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="15419.php">Will Glover: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 25.01.2011 um 20:10 schrieb Will Glover:
<br>
<p><span class="quotelev1">&gt; Thanks for your response, Reuti.  Actually I had seen you mention the SGE mailing list in response to a similar question but I can't for the life of me find that list :(
</span><br>
<p>The list was removed with the shutdown of the open source site by Oracle, moving GridEngine to pure commercial product. But as you might know, Univa stepped in and we will see some findings shortly...
<br>
<p>For now you can check Markmail: <a href="http://gridengine.markmail.org/">http://gridengine.markmail.org/</a> or an unindexed archive at <a href="http://arc.liv.ac.uk/pipermail/gridengine-users/">http://arc.liv.ac.uk/pipermail/gridengine-users/</a> It's a bit hidden in <a href="http://arc.liv.ac.uk/pipermail/gridengine-users/2009-December.txt">http://arc.liv.ac.uk/pipermail/gridengine-users/2009-December.txt</a> (search for cutting) or <a href="http://arc.liv.ac.uk/pipermail/gridengine-users/2010-July.txt">http://arc.liv.ac.uk/pipermail/gridengine-users/2010-July.txt</a> (search for varying) There is also another solution explained using a load threshold.
<br>
<p>(dynamic MPI-2 tasks shorter than background jobs: use the solution with different nice values,
<br>
background jobs much shorter than the MPI-2 tasks: get rid of these background jobs by a load threshold and drain them)
<br>
<p><p><span class="quotelev1">&gt; As for using the background queue, just to clarify - is the idea to submit my parallel job on a regular queue with 100 processors at nice 0
</span><br>
<p>yep
<br>
<p><span class="quotelev1">&gt; , but allow other 'background queue' jobs on the same processors at nice 19?
</span><br>
<p>yep
<br>
<p><span class="quotelev1">&gt;  Presumably, I'd still need mpi-2's dynamic process management to free up processors when they are not needed (at the moment, they use 100% cpu idling in MPI_Recv for example).
</span><br>
<p>When they are really idling at 100%, then you are correct, and you have to release them by an MPI-2 call.
<br>
<p><p><span class="quotelev1">&gt;  Did I understand you correctly?
</span><br>
<p>yep.
<br>
<p>This way you will minimize the otherwise wasted computing time and avoid idling cores.
<br>
<p>-- Reuti
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Will
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Tue, 1/25/11, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tuesday, January 25, 2011, 9:27 AM
</span><br>
<span class="quotelev2">&gt;&gt; Am 25.01.2011 um 12:32 schrieb Terry
</span><br>
<span class="quotelev2">&gt;&gt; Dontje:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 01/25/2011 02:17 AM, Will Glover wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried a google/mailing list search for this but
</span><br>
<span class="quotelev2">&gt;&gt; came up with nothing, so here goes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there any level of automation between open
</span><br>
<span class="quotelev2">&gt;&gt; mpi's dynamic process management and the SGE queue
</span><br>
<span class="quotelev2">&gt;&gt; manager?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In particular, can I make a call to mpi_comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; and have SGE dynamically increase the number of slots? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This seems a little far fetched, but it would be
</span><br>
<span class="quotelev2">&gt;&gt; really useful if this is possible.  My application is
</span><br>
<span class="quotelev2">&gt;&gt; 'restricted' to coarse-grain task parallelism and involves a
</span><br>
<span class="quotelev2">&gt;&gt; work load that varies significantly during runtime (between
</span><br>
<span class="quotelev2">&gt;&gt; 1 and ~100 parallel tasks).  Dynamic process management
</span><br>
<span class="quotelev2">&gt;&gt; would maintain an optimal number of processors and reduce
</span><br>
<span class="quotelev2">&gt;&gt; idling.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is an interesting idea but no integration has
</span><br>
<span class="quotelev2">&gt;&gt; been done that would allow an MPI job to request more slots.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Similar ideas were on the former SGE mailing list a couple
</span><br>
<span class="quotelev2">&gt;&gt; of times - having varying resource requests over the
</span><br>
<span class="quotelev2">&gt;&gt; lifetime of a job (cores, memory, licenses, ...). This would
</span><br>
<span class="quotelev2">&gt;&gt; mean in the end to have some kind of real-time-queuing
</span><br>
<span class="quotelev2">&gt;&gt; system, as you have to have the necessary resources to be
</span><br>
<span class="quotelev2">&gt;&gt; free in time for sure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Besides this also some syntax for either requesting a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;resource profile over time&quot; when such a job is submitted
</span><br>
<span class="quotelev2">&gt;&gt; would be necessary, or to allow a job while it's running
</span><br>
<span class="quotelev2">&gt;&gt; issuing some kinds of commands to request/release resources
</span><br>
<span class="quotelev2">&gt;&gt; on demand.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have such a &quot;resource profile over time&quot; for a bunch
</span><br>
<span class="quotelev2">&gt;&gt; of jobs, it could then be extended to solve a cutting-stock
</span><br>
<span class="quotelev2">&gt;&gt; problem where the unit to be cut would be time, e.g. arrange
</span><br>
<span class="quotelev2">&gt;&gt; these 10 jobs that they finish in the least amount of time
</span><br>
<span class="quotelev2">&gt;&gt; all together - and you could predict exactly when each job
</span><br>
<span class="quotelev2">&gt;&gt; will end. This is getting really complex.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What can be done in your situation: have some kind of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;background queue&quot; with a nice value of 19, but the parallel
</span><br>
<span class="quotelev2">&gt;&gt; job you submit to a queue with the default nice value 0.
</span><br>
<span class="quotelev2">&gt;&gt; Although you request 100 cores and reserve them (i.e. the
</span><br>
<span class="quotelev2">&gt;&gt; background queue shouldn't be suspended in such a case of
</span><br>
<span class="quotelev2">&gt;&gt; course), the background queue will still run at full speed
</span><br>
<span class="quotelev2">&gt;&gt; when nothing else is running on the nodes. When some of the
</span><br>
<span class="quotelev2">&gt;&gt; parallel tasks are started on the nodes, they will get most
</span><br>
<span class="quotelev2">&gt;&gt; of the computing time (this means: oversubscription by
</span><br>
<span class="quotelev2">&gt;&gt; intention). The background queue can be used for less
</span><br>
<span class="quotelev2">&gt;&gt; important jobs. Such a setup is usefull when your parallel
</span><br>
<span class="quotelev2">&gt;&gt; application isn't running in parallel all the time like in
</span><br>
<span class="quotelev2">&gt;&gt; your case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Mail-Anhang.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15422.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15420.php">Nathan Hjelm: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="15419.php">Will Glover: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
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
