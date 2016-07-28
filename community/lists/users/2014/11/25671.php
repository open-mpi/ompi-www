<?
$subject_val = "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 14:52:10 2014" -->
<!-- isoreceived="20141104195210" -->
<!-- sent="Tue, 4 Nov 2014 11:52:06 -0800" -->
<!-- isosent="20141104195206" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change in behaviour 1.6 -&amp;gt; 1.8 under sge" -->
<!-- id="8E71C675-D27F-4DF0-9DDD-C724152E6EEB_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F1FD048D-C1E8-42E4-A17A-D0BE5140F352_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 14:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25672.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25670.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25691.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Reply:</strong> <a href="25691.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I confirmed that things are working as intended. If you have 12 cores on a machine, and you do
<br>
<p>mpirun -map-by socket:PE=2 &lt;foo&gt;
<br>
<p>we will execute 6 copies of foo on the node because 12 cores/2pe/core = 6 procs.
<br>
<p>As I said, we believe the prior series were doing this incorrectly, and the patch used on the 1.8 series has corrected the situation.
<br>
<p><p><span class="quotelev1">&gt; On Nov 3, 2014, at 8:23 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2014, at 4:54 AM, Mark Dixon &lt;m.c.dixon_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've started looking at moving to the openmpi 1.8 branch from 1.6 on our CentOS6/Son of Grid Engine cluster and noticed an unexpected difference when binding multiple cores to each rank.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has openmpi's definition 'slot' changed between 1.6 and 1.8? It used to mean ranks, but now it appears to mean processing elements (see Details, below).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It actually didn&#226;&#128;&#153;t change - there were some errors in prior versions in how we were handling things, and we have corrected them. A &#226;&#128;&#156;slot&#226;&#128;&#157; never was equated to an MPI rank, but is an allocation from the scheduler - it means you have been allocated one resource on the given node. So the number of &#226;&#128;&#156;slots&#226;&#128;&#157; on a node equates to the number of resources on that node which were allocated for your use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note also that a &#226;&#128;&#156;slot&#226;&#128;&#157; doesn&#226;&#128;&#153;t automatically correspond to a core - someone may well decide to define a &#226;&#128;&#156;slot&#226;&#128;&#157; as being the equivalent of a &#226;&#128;&#156;container&#226;&#128;&#157; comprised of several cores. It is indeed an abstraction used by the scheduler when assigning resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because of the confusion we&#226;&#128;&#153;ve encountered both internally and externally over the meaning of the term &#226;&#128;&#156;cpu&quot;, we adopted the &#226;&#128;&#156;processing element&#226;&#128;&#157; term. So if you are individually assigning hwthreads, your PE is at the hwthread level. If you individually assign cores, then PE equates to core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We know the mpirun man page in 1.8.3 was woefully out-of-date, and that has been fixed for the soon-to-be-release 1.8.4. Some of the options that were supposed to be deprecated (a) were accidentally turned completely off, and (b) have been restored (and &#226;&#128;&#156;un-deprecated&#226;&#128;&#157;) per user request. So bysocket will indeed return in 1.8.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you only have one allocated PE on a node, then mpirun will correctly tell you that it can&#226;&#128;&#153;t launch with PE&gt;1 as there aren&#226;&#128;&#153;t enough resources to meet your request. IIRC, we may have been ignoring this under SGE and running as many procs as we wanted on an allocated node - the SGE folks provided a patch to fix that hole.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ll check the case you describe below - if you don&#226;&#128;&#153;t specify the number of procs to run, we should correctly resolve the number of ranks to start.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS Also, the man page for 1.8.3 reports that '--bysocket' is deprecated, but it doesn't seem to exist when we try to use it:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: Error: unknown option &quot;-bysocket&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Type 'mpirun --help' for usage.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ====== Details ======
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1.6.5, we launch with the following core binding options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to-core --cpus-per-proc &lt;n&gt; &lt;program&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to-core --bysocket --cpus-per-proc &lt;n&gt; &lt;program&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where &lt;n&gt; is calculated to maximise the number of cores available to
</span><br>
<span class="quotelev2">&gt;&gt; use - I guess affectively
</span><br>
<span class="quotelev2">&gt;&gt; max(1, int(number of cores per node / slots per node requested)).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi reads the file $PE_HOSTFILE and launches a rank for each slot
</span><br>
<span class="quotelev2">&gt;&gt; defined in it, binding &lt;n&gt; cores per rank.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1.8.3, we've tried launching with the following core binding options (which we hoped were equivalent):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -map-by node:PE=&lt;n&gt; &lt;program&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -map-by socket:PE=&lt;n&gt; &lt;program&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi reads the file $PE_HOSTFILE and launches a factor of &lt;n&gt; fewer
</span><br>
<span class="quotelev2">&gt;&gt; ranks than under 1.6.5. We also notice that, where we wanted a single
</span><br>
<span class="quotelev2">&gt;&gt; rank on the box and &lt;n&gt; is the number of cores available, openmpi
</span><br>
<span class="quotelev2">&gt;&gt; refuses to launch and we get the message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;There are not enough slots available in the system to satisfy the 1
</span><br>
<span class="quotelev2">&gt;&gt; slots that were requested by the application&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think that error message needs a little work :)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2014/11/index.php">http://www.open-mpi.org/community/lists/users/2014/11/index.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25672.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25670.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25691.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Reply:</strong> <a href="25691.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
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
