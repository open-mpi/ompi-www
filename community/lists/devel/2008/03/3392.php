<?
$subject_val = "Re: [OMPI devel] Fault tolerance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 11:13:45 2008" -->
<!-- isoreceived="20080306161345" -->
<!-- sent="Thu, 6 Mar 2008 11:13:40 -0500" -->
<!-- isosent="20080306161340" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fault tolerance" -->
<!-- id="81481330-24BD-4206-AEAB-AF0239BEBF69_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3F55F85.4931%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 11:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3393.php">Ralph Castain: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="3391.php">Ralph Castain: "[OMPI devel] Fault tolerance"</a>
<li><strong>In reply to:</strong> <a href="3391.php">Ralph Castain: "[OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3393.php">Ralph Castain: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Reply:</strong> <a href="3393.php">Ralph Castain: "Re: [OMPI devel] Fault tolerance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The checkpoint/restart work that I have integrated does not respond to  
<br>
failure at the moment. If a failures happens I want ORTE to terminate  
<br>
the entire job. I will then restart the entire job from a checkpoint  
<br>
file. This follows the 'all fall down' approach that users typically  
<br>
expect when using a global C/R technique.
<br>
<p>Eventually I want to integrate something better where I can respond to  
<br>
a failure with a recovery from inside ORTE. I'm not there yet, but  
<br>
hopefully in the near future.
<br>
<p>I'll let the UTK group talk about what they are doing with ORTE, but I  
<br>
suspect they will be taking advantage of the errmgr to help respond to  
<br>
failure and restart a single process.
<br>
<p><p>It is important to consider in this context that we do *not* always  
<br>
want ORTE to abort whenever it detects a process failure. This is the  
<br>
default mode for MPI applications (MPI_ERRORS_ARE_FATAL), and should  
<br>
be supported. But there is another mode in which we would like ORTE to  
<br>
keep running to conform with (MPI_ERRORS_RETURN):
<br>
&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node148.html">http://www.mpi-forum.org/docs/mpi-11-html/node148.html</a>
<br>
<p>It is known that certain standards conformant MPI &quot;fault tolerant&quot;  
<br>
programs do not work in Open MPI for various reasons some in the  
<br>
runtime and some external. Here we are mostly talking about  
<br>
disconnected fates of intra-communicator groups. I have a test in the  
<br>
ompi-tests repository that illustrates this problem, but I do not have  
<br>
time to fix it at the moment.
<br>
<p><p>So in short keep the errmgr around for now. I suspect we will be using  
<br>
it, and possibly tweaking it in the nearish future.
<br>
<p>Thanks for the observation.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Mar 6, 2008, at 10:44 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been doing some work on fault response within the system, and  
</span><br>
<span class="quotelev1">&gt; finally
</span><br>
<span class="quotelev1">&gt; realized something I should probably have seen awhile back. Perhaps  
</span><br>
<span class="quotelev1">&gt; I am
</span><br>
<span class="quotelev1">&gt; misunderstanding somewhere, so forgive the ignorance if so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we designed ORTE some time in the deep, dark past, we had  
</span><br>
<span class="quotelev1">&gt; envisioned
</span><br>
<span class="quotelev1">&gt; that people might want multiple ways of responding to process faults  
</span><br>
<span class="quotelev1">&gt; and/or
</span><br>
<span class="quotelev1">&gt; abnormal terminations. You might want to just abort the job, attempt  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; restart just that proc, attempt to restart the job, etc. To support  
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev1">&gt; multiple options, and to provide a means for people to simply try  
</span><br>
<span class="quotelev1">&gt; new ones,
</span><br>
<span class="quotelev1">&gt; we created the errmgr framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our thought was that a process and/or daemon would call the errmgr  
</span><br>
<span class="quotelev1">&gt; when we
</span><br>
<span class="quotelev1">&gt; detected something abnormal happening, and that the selected errmgr
</span><br>
<span class="quotelev1">&gt; component could then do whatever fault response was desired.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I now see that the fault tolerance mechanisms inside of  
</span><br>
<span class="quotelev1">&gt; OMPI do not
</span><br>
<span class="quotelev1">&gt; seem to be using that methodology. Instead, we have hard-coded a  
</span><br>
<span class="quotelev1">&gt; particular
</span><br>
<span class="quotelev1">&gt; response into the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we configure without FT, we just abort the entire job since that  
</span><br>
<span class="quotelev1">&gt; is the
</span><br>
<span class="quotelev1">&gt; only errmgr component that exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we configure with FT, then we execute the hard-coded C/R  
</span><br>
<span class="quotelev1">&gt; methodology.
</span><br>
<span class="quotelev1">&gt; This is built directly into the code, so there is no option as to what
</span><br>
<span class="quotelev1">&gt; happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a reason why the errmgr framework was not used? Did the FT  
</span><br>
<span class="quotelev1">&gt; team
</span><br>
<span class="quotelev1">&gt; decide that this was not a useful tool to support multiple FT  
</span><br>
<span class="quotelev1">&gt; strategies?
</span><br>
<span class="quotelev1">&gt; Can we modify it to better serve those needs, or is it simply not  
</span><br>
<span class="quotelev1">&gt; feasible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it isn't going to be used for that purpose, then I might as well  
</span><br>
<span class="quotelev1">&gt; remove
</span><br>
<span class="quotelev1">&gt; it. As things stand, there really is no purpose served by the errmgr
</span><br>
<span class="quotelev1">&gt; framework - might as well replace it with just a function call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate any insights
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="3393.php">Ralph Castain: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="3391.php">Ralph Castain: "[OMPI devel] Fault tolerance"</a>
<li><strong>In reply to:</strong> <a href="3391.php">Ralph Castain: "[OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3393.php">Ralph Castain: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Reply:</strong> <a href="3393.php">Ralph Castain: "Re: [OMPI devel] Fault tolerance"</a>
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
