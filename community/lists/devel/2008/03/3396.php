<?
$subject_val = "Re: [OMPI devel] Fault tolerance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 13:38:57 2008" -->
<!-- isoreceived="20080306183857" -->
<!-- sent="Thu, 6 Mar 2008 13:38:43 -0500" -->
<!-- isosent="20080306183843" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fault tolerance" -->
<!-- id="B5D36F23-702E-4DEB-8A13-7A17EB3C7FD5_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3F56738.493D%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 13:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3397.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<li><strong>Previous message:</strong> <a href="3395.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.6rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="3393.php">Ralph Castain: "Re: [OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3406.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Reply:</strong> <a href="3406.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aside of what Josh said, we are working right know at UTK on orted/MPI  
<br>
recovery (without killing/respawning all). For now we had no use of  
<br>
the errgmr, but I'm quite sure this would be the smartest  place to  
<br>
put all the mechanisms we are trying now.
<br>
<p>Aurelien
<br>
Le 6 mars 08 &#224; 11:17, Ralph Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Ah - ok, thanks for clarifying! I'm happy to leave it around, but  
</span><br>
<span class="quotelev1">&gt; wasn't
</span><br>
<span class="quotelev1">&gt; sure if/where it fit into anyone's future plans.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/6/08 9:13 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The checkpoint/restart work that I have integrated does not respond  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; failure at the moment. If a failures happens I want ORTE to terminate
</span><br>
<span class="quotelev2">&gt;&gt; the entire job. I will then restart the entire job from a checkpoint
</span><br>
<span class="quotelev2">&gt;&gt; file. This follows the 'all fall down' approach that users typically
</span><br>
<span class="quotelev2">&gt;&gt; expect when using a global C/R technique.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eventually I want to integrate something better where I can respond  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; a failure with a recovery from inside ORTE. I'm not there yet, but
</span><br>
<span class="quotelev2">&gt;&gt; hopefully in the near future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll let the UTK group talk about what they are doing with ORTE,  
</span><br>
<span class="quotelev2">&gt;&gt; but I
</span><br>
<span class="quotelev2">&gt;&gt; suspect they will be taking advantage of the errmgr to help respond  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; failure and restart a single process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is important to consider in this context that we do *not* always
</span><br>
<span class="quotelev2">&gt;&gt; want ORTE to abort whenever it detects a process failure. This is the
</span><br>
<span class="quotelev2">&gt;&gt; default mode for MPI applications (MPI_ERRORS_ARE_FATAL), and should
</span><br>
<span class="quotelev2">&gt;&gt; be supported. But there is another mode in which we would like ORTE  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; keep running to conform with (MPI_ERRORS_RETURN):
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.mpi-forum.org/docs/mpi-11-html/node148.html">http://www.mpi-forum.org/docs/mpi-11-html/node148.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is known that certain standards conformant MPI &quot;fault tolerant&quot;
</span><br>
<span class="quotelev2">&gt;&gt; programs do not work in Open MPI for various reasons some in the
</span><br>
<span class="quotelev2">&gt;&gt; runtime and some external. Here we are mostly talking about
</span><br>
<span class="quotelev2">&gt;&gt; disconnected fates of intra-communicator groups. I have a test in the
</span><br>
<span class="quotelev2">&gt;&gt; ompi-tests repository that illustrates this problem, but I do not  
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; time to fix it at the moment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So in short keep the errmgr around for now. I suspect we will be  
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt; it, and possibly tweaking it in the nearish future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the observation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 6, 2008, at 10:44 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been doing some work on fault response within the system, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; finally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; realized something I should probably have seen awhile back. Perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; misunderstanding somewhere, so forgive the ignorance if so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When we designed ORTE some time in the deep, dark past, we had
</span><br>
<span class="quotelev3">&gt;&gt;&gt; envisioned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that people might want multiple ways of responding to process faults
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and/or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abnormal terminations. You might want to just abort the job, attempt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restart just that proc, attempt to restart the job, etc. To support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple options, and to provide a means for people to simply try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new ones,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we created the errmgr framework.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our thought was that a process and/or daemon would call the errmgr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detected something abnormal happening, and that the selected errmgr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component could then do whatever fault response was desired.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I now see that the fault tolerance mechanisms inside of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seem to be using that methodology. Instead, we have hard-coded a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; particular
</span><br>
<span class="quotelev3">&gt;&gt;&gt; response into the system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we configure without FT, we just abort the entire job since that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only errmgr component that exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we configure with FT, then we execute the hard-coded C/R
</span><br>
<span class="quotelev3">&gt;&gt;&gt; methodology.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is built directly into the code, so there is no option as to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a reason why the errmgr framework was not used? Did the FT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decide that this was not a useful tool to support multiple FT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strategies?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can we modify it to better serve those needs, or is it simply not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feasible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it isn't going to be used for that purpose, then I might as well
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it. As things stand, there really is no purpose served by the errmgr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; framework - might as well replace it with just a function call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Appreciate any insights
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3397.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<li><strong>Previous message:</strong> <a href="3395.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.6rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="3393.php">Ralph Castain: "Re: [OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3406.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Reply:</strong> <a href="3406.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
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
