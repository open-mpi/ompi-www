<?
$subject_val = "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 14:10:32 2011" -->
<!-- isoreceived="20110125191032" -->
<!-- sent="Tue, 25 Jan 2011 11:10:27 -0800 (PST)" -->
<!-- isosent="20110125191027" -->
<!-- name="Will Glover" -->
<!-- email="will_glover_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?" -->
<!-- id="429218.33543.qm_at_web36702.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8382FA93-F7C1-4173-BAD6-57DBB0B48DEB_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Will Glover (<em>will_glover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-25 14:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15420.php">Nathan Hjelm: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15418.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="15417.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15421.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Reply:</strong> <a href="15421.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your response, Reuti.  Actually I had seen you mention the SGE mailing list in response to a similar question but I can't for the life of me find that list :(
<br>
<p>As for using the background queue, just to clarify - is the idea to submit my parallel job on a regular queue with 100 processors at nice 0, but allow other 'background queue' jobs on the same processors at nice 19?  Presumably, I'd still need mpi-2's dynamic process management to free up processors when they are not needed (at the moment, they use 100% cpu idling in MPI_Recv for example).  Did I understand you correctly?
<br>
<pre>
-- 
Will
--- On Tue, 1/25/11, Reuti &lt;reuti_at_[hidden]&gt; wrote:
&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?
&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
&gt; Date: Tuesday, January 25, 2011, 9:27 AM
&gt; Am 25.01.2011 um 12:32 schrieb Terry
&gt; Dontje:
&gt; 
&gt; &gt; On 01/25/2011 02:17 AM, Will Glover wrote:
&gt; &gt;&gt; Hi all,
&gt; &gt;&gt; I tried a google/mailing list search for this but
&gt; came up with nothing, so here goes:
&gt; &gt;&gt; 
&gt; &gt;&gt; Is there any level of automation between open
&gt; mpi's dynamic process management and the SGE queue
&gt; manager?&#160; 
&gt; &gt;&gt; In particular, can I make a call to mpi_comm_spawn
&gt; and have SGE dynamically increase the number of slots?&#160;
&gt; 
&gt; &gt;&gt; This seems a little far fetched, but it would be
&gt; really useful if this is possible.&#160; My application is
&gt; 'restricted' to coarse-grain task parallelism and involves a
&gt; work load that varies significantly during runtime (between
&gt; 1 and ~100 parallel tasks).&#160; Dynamic process management
&gt; would maintain an optimal number of processors and reduce
&gt; idling.
&gt; &gt;&gt; 
&gt; &gt;&gt; Many thanks,
&gt; &gt;&gt; 
&gt; &gt; This is an interesting idea but no integration has
&gt; been done that would allow an MPI job to request more slots.
&gt; 
&gt; 
&gt; Similar ideas were on the former SGE mailing list a couple
&gt; of times - having varying resource requests over the
&gt; lifetime of a job (cores, memory, licenses, ...). This would
&gt; mean in the end to have some kind of real-time-queuing
&gt; system, as you have to have the necessary resources to be
&gt; free in time for sure.
&gt; 
&gt; Besides this also some syntax for either requesting a
&gt; &quot;resource profile over time&quot; when such a job is submitted
&gt; would be necessary, or to allow a job while it's running
&gt; issuing some kinds of commands to request/release resources
&gt; on demand.
&gt; 
&gt; If you have such a &quot;resource profile over time&quot; for a bunch
&gt; of jobs, it could then be extended to solve a cutting-stock
&gt; problem where the unit to be cut would be time, e.g. arrange
&gt; these 10 jobs that they finish in the least amount of time
&gt; all together - and you could predict exactly when each job
&gt; will end. This is getting really complex.
&gt; 
&gt; ==
&gt; 
&gt; What can be done in your situation: have some kind of
&gt; &quot;background queue&quot; with a nice value of 19, but the parallel
&gt; job you submit to a queue with the default nice value 0.
&gt; Although you request 100 cores and reserve them (i.e. the
&gt; background queue shouldn't be suspended in such a case of
&gt; course), the background queue will still run at full speed
&gt; when nothing else is running on the nodes. When some of the
&gt; parallel tasks are started on the nodes, they will get most
&gt; of the computing time (this means: oversubscription by
&gt; intention). The background queue can be used for less
&gt; important jobs. Such a setup is usefull when your parallel
&gt; application isn't running in parallel all the time like in
&gt; your case.
&gt; 
&gt; -- Reuti
&gt; 
&gt; 
&gt; &gt; -- 
&gt; &gt; &lt;Mail-Anhang.gif&gt;
&gt; &gt; Terry D. Dontje | Principal Software Engineer
&gt; &gt; Developer Tools Engineering | +1.781.442.2631
&gt; &gt; Oracle - Performance Technologies
&gt; &gt; 95 Network Drive, Burlington, MA 01803
&gt; &gt; Email terry.dontje_at_[hidden]
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
      
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15420.php">Nathan Hjelm: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15418.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="15417.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15421.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Reply:</strong> <a href="15421.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
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
