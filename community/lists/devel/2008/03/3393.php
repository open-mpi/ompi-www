<?
$subject_val = "Re: [OMPI devel] Fault tolerance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 11:17:56 2008" -->
<!-- isoreceived="20080306161756" -->
<!-- sent="Thu, 06 Mar 2008 09:17:44 -0700" -->
<!-- isosent="20080306161744" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fault tolerance" -->
<!-- id="C3F56738.493D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="81481330-24BD-4206-AEAB-AF0239BEBF69_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fault tolerance<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 11:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3394.php">Jeff Squyres: "[OMPI devel] 1.2.6rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>In reply to:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3396.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Reply:</strong> <a href="3396.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - ok, thanks for clarifying! I'm happy to leave it around, but wasn't
<br>
sure if/where it fit into anyone's future plans.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 3/6/08 9:13 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The checkpoint/restart work that I have integrated does not respond to
</span><br>
<span class="quotelev1">&gt; failure at the moment. If a failures happens I want ORTE to terminate
</span><br>
<span class="quotelev1">&gt; the entire job. I will then restart the entire job from a checkpoint
</span><br>
<span class="quotelev1">&gt; file. This follows the 'all fall down' approach that users typically
</span><br>
<span class="quotelev1">&gt; expect when using a global C/R technique.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eventually I want to integrate something better where I can respond to
</span><br>
<span class="quotelev1">&gt; a failure with a recovery from inside ORTE. I'm not there yet, but
</span><br>
<span class="quotelev1">&gt; hopefully in the near future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll let the UTK group talk about what they are doing with ORTE, but I
</span><br>
<span class="quotelev1">&gt; suspect they will be taking advantage of the errmgr to help respond to
</span><br>
<span class="quotelev1">&gt; failure and restart a single process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is important to consider in this context that we do *not* always
</span><br>
<span class="quotelev1">&gt; want ORTE to abort whenever it detects a process failure. This is the
</span><br>
<span class="quotelev1">&gt; default mode for MPI applications (MPI_ERRORS_ARE_FATAL), and should
</span><br>
<span class="quotelev1">&gt; be supported. But there is another mode in which we would like ORTE to
</span><br>
<span class="quotelev1">&gt; keep running to conform with (MPI_ERRORS_RETURN):
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.mpi-forum.org/docs/mpi-11-html/node148.html">http://www.mpi-forum.org/docs/mpi-11-html/node148.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is known that certain standards conformant MPI &quot;fault tolerant&quot;
</span><br>
<span class="quotelev1">&gt; programs do not work in Open MPI for various reasons some in the
</span><br>
<span class="quotelev1">&gt; runtime and some external. Here we are mostly talking about
</span><br>
<span class="quotelev1">&gt; disconnected fates of intra-communicator groups. I have a test in the
</span><br>
<span class="quotelev1">&gt; ompi-tests repository that illustrates this problem, but I do not have
</span><br>
<span class="quotelev1">&gt; time to fix it at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So in short keep the errmgr around for now. I suspect we will be using
</span><br>
<span class="quotelev1">&gt; it, and possibly tweaking it in the nearish future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the observation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2008, at 10:44 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been doing some work on fault response within the system, and
</span><br>
<span class="quotelev2">&gt;&gt; finally
</span><br>
<span class="quotelev2">&gt;&gt; realized something I should probably have seen awhile back. Perhaps
</span><br>
<span class="quotelev2">&gt;&gt; I am
</span><br>
<span class="quotelev2">&gt;&gt; misunderstanding somewhere, so forgive the ignorance if so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When we designed ORTE some time in the deep, dark past, we had
</span><br>
<span class="quotelev2">&gt;&gt; envisioned
</span><br>
<span class="quotelev2">&gt;&gt; that people might want multiple ways of responding to process faults
</span><br>
<span class="quotelev2">&gt;&gt; and/or
</span><br>
<span class="quotelev2">&gt;&gt; abnormal terminations. You might want to just abort the job, attempt
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; restart just that proc, attempt to restart the job, etc. To support
</span><br>
<span class="quotelev2">&gt;&gt; these
</span><br>
<span class="quotelev2">&gt;&gt; multiple options, and to provide a means for people to simply try
</span><br>
<span class="quotelev2">&gt;&gt; new ones,
</span><br>
<span class="quotelev2">&gt;&gt; we created the errmgr framework.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our thought was that a process and/or daemon would call the errmgr
</span><br>
<span class="quotelev2">&gt;&gt; when we
</span><br>
<span class="quotelev2">&gt;&gt; detected something abnormal happening, and that the selected errmgr
</span><br>
<span class="quotelev2">&gt;&gt; component could then do whatever fault response was desired.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, I now see that the fault tolerance mechanisms inside of
</span><br>
<span class="quotelev2">&gt;&gt; OMPI do not
</span><br>
<span class="quotelev2">&gt;&gt; seem to be using that methodology. Instead, we have hard-coded a
</span><br>
<span class="quotelev2">&gt;&gt; particular
</span><br>
<span class="quotelev2">&gt;&gt; response into the system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we configure without FT, we just abort the entire job since that
</span><br>
<span class="quotelev2">&gt;&gt; is the
</span><br>
<span class="quotelev2">&gt;&gt; only errmgr component that exists.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we configure with FT, then we execute the hard-coded C/R
</span><br>
<span class="quotelev2">&gt;&gt; methodology.
</span><br>
<span class="quotelev2">&gt;&gt; This is built directly into the code, so there is no option as to what
</span><br>
<span class="quotelev2">&gt;&gt; happens.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason why the errmgr framework was not used? Did the FT
</span><br>
<span class="quotelev2">&gt;&gt; team
</span><br>
<span class="quotelev2">&gt;&gt; decide that this was not a useful tool to support multiple FT
</span><br>
<span class="quotelev2">&gt;&gt; strategies?
</span><br>
<span class="quotelev2">&gt;&gt; Can we modify it to better serve those needs, or is it simply not
</span><br>
<span class="quotelev2">&gt;&gt; feasible?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it isn't going to be used for that purpose, then I might as well
</span><br>
<span class="quotelev2">&gt;&gt; remove
</span><br>
<span class="quotelev2">&gt;&gt; it. As things stand, there really is no purpose served by the errmgr
</span><br>
<span class="quotelev2">&gt;&gt; framework - might as well replace it with just a function call.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Appreciate any insights
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3394.php">Jeff Squyres: "[OMPI devel] 1.2.6rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>In reply to:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3396.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Reply:</strong> <a href="3396.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
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
