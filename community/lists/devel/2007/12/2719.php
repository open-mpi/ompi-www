<?
$subject_val = "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 10:24:54 2007" -->
<!-- isoreceived="20071205152454" -->
<!-- sent="Wed, 05 Dec 2007 08:24:34 -0700" -->
<!-- isosent="20071205152434" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE issue I. Support for non-MPI jobs" -->
<!-- id="C37C10C2.B7CC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4756BC90.9080500_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE issue I. Support for non-MPI jobs<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 10:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Previous message:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/5/07 7:58 AM, &quot;Rolf.Vandevaart_at_[hidden]&quot; &lt;Rolf.Vandevaart_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I. Support for non-MPI jobs
</span><br>
<span class="quotelev2">&gt;&gt; Considerable complexity currently exists in ORTE because of the stipulation
</span><br>
<span class="quotelev2">&gt;&gt; in our first requirements document that users be able to mpirun non-MPI jobs
</span><br>
<span class="quotelev2">&gt;&gt; - i.e., that we support such calls as &quot;mpirun -n 100 hostname&quot;. This creates
</span><br>
<span class="quotelev2">&gt;&gt; a situation, however, where the RTE cannot know if the application will call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init (or at least orte_init), which has significant implications to the
</span><br>
<span class="quotelev2">&gt;&gt; RTE's architecture. For example, during the launch of the application's
</span><br>
<span class="quotelev2">&gt;&gt; processes, the RTE cannot go into any form of blocking receive while waiting
</span><br>
<span class="quotelev2">&gt;&gt; for the procs to report a successful startup as this won't occur for
</span><br>
<span class="quotelev2">&gt;&gt; execution of something like &quot;hostname&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff has noted that support for non-MPI jobs is not something most (all?)
</span><br>
<span class="quotelev2">&gt;&gt; MPIs currently provide, nor something that users are likely to exploit as
</span><br>
<span class="quotelev2">&gt;&gt; they can more easily just &quot;qsub hostname&quot; (or the equivalent for that
</span><br>
<span class="quotelev2">&gt;&gt; environment). While nice for debugging purposes, therefore, it isn't clear
</span><br>
<span class="quotelev2">&gt;&gt; that supporting non-MPI jobs is worth the increased code complexity and
</span><br>
<span class="quotelev2">&gt;&gt; fragility.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In addition, the fact that we do not know if a job will call Init limits our
</span><br>
<span class="quotelev2">&gt;&gt; ability to do collective communications within the RTE, and hence our
</span><br>
<span class="quotelev2">&gt;&gt; scalability - see the note on that specific subject for further discussion
</span><br>
<span class="quotelev2">&gt;&gt; on this area.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This would be a &quot;regression&quot; in behavior, though, so the questions for the
</span><br>
<span class="quotelev2">&gt;&gt; community are:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (a) do we want to retain the feature to run non-MPI jobs with mpirun as-is
</span><br>
<span class="quotelev2">&gt;&gt; (and accept the tradeoffs, including the one described below in II)?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph:
</span><br>
<span class="quotelev1">&gt;  From a user standpoint, a) would be preferable.  However, as you point
</span><br>
<span class="quotelev1">&gt; out, there are issues.  Are you saying that we cannot do collectives
</span><br>
<span class="quotelev1">&gt; (Item III) if we preserve a?  Or is it that things will just be more
</span><br>
<span class="quotelev1">&gt; complex.  I guess I am looking for more details about what the tradeoffs
</span><br>
<span class="quotelev1">&gt; are for preserving a.
</span><br>
<p>I believe it would be more accurate to say things would be more complex. I'm
<br>
not sure we know enough at the moment to say collectives can't be done at
<br>
all. All I can say is that I have spent a little time trying to define a
<br>
&quot;snowball&quot; collective (i.e., one that collects info from each daemon it
<br>
passes through to deliver the final collection to the HNP) and not knowing
<br>
whether or not a process is going to call orte_init is one of the hurdles. I
<br>
believe some clever programming could probably overcome it - at least, I'm
<br>
not willing to give up yet. It just will take additional effort and time.
<br>
<p>Likewise for the overall logic in the system. The biggest problem with
<br>
supporting non-MPI apps is that you have to be -very- careful throughout the
<br>
RTE to avoid any blocking operations that depend upon the procs calling
<br>
orte_init or orte_finalize - while still requiring that if they -did- call
<br>
orte_init, then they must call orte_finalize or else we consider the
<br>
termination to have been an 'abort'. Not impossible - but it adds time spent
<br>
while making changes to the system, and always leaves open the door for a
<br>
deadlock condition to jump out of the bushes.
<br>
<p>It can be done as we obviously currently do it, though I note it has taken
<br>
us nearly three years to identify and resolve all those deadlock scenarios
<br>
(fingers crossed). Just pointing out that it does introduce some complexity
<br>
that could potentially be removed from the current code base, and will make
<br>
those inbound collectives more difficult. So Jeff and I thought it would be
<br>
worth at least asking if this was a desirable feature we should preserve, or
<br>
something people really didn't care about or use, but was just another of
<br>
those leftover requirements from the early days.
<br>
<p>Personally, I like the feature while debugging the system as it allows me to
<br>
test the underlying allocate/map/launch infrastructure without the OOB
<br>
wireup - but I can live without that if people would prefer that we further
<br>
simplify the code. I can also certainly use the switch to indicate &quot;this is
<br>
a non-MPI app&quot; when I'm debugging, but I consider that to be somewhat user
<br>
unfriendly...
<br>
<p>...especially since if the user forgets the switch and mpirun's a non-MPI
<br>
job, we would have no choice but to &quot;hang&quot; until they ctrl-c the job, or
<br>
introduce some totally artificial timeout constraint!
<br>
<p>So I guess my recommendation is: if you believe (a) is preferable from a
<br>
user's perspective, then I would preserve the feature &quot;as-is&quot; and accept the
<br>
code complexity and risk since that can be overcome with careful design and
<br>
testing until such time as we -prove- that inbound collectives cannot be
<br>
written under those conditions. I believe this last point is critical as we
<br>
really shouldn't accept linear scale-by-node as a limitation.
<br>
<p>Now if I could just get some help on those inbound collectives so we can
<br>
resolve that point...but that was note III, I believe. ;-)
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having said that, we would probably be OK with b) if that makes things
</span><br>
<span class="quotelev1">&gt; better/faster/robuster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (b) do we provide a flag to mpirun (perhaps adding the distinction that
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orterun&quot; must be used for non-MPI jobs?) to indicate &quot;this is NOT an MPI
</span><br>
<span class="quotelev2">&gt;&gt; job&quot; so we can act accordingly?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (c) simply eliminate support for non-MPI jobs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (d) other suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Previous message:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
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
