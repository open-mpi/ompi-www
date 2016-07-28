<?
$subject_val = "Re: [OMPI devel] Bug or feature?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 13:27:20 2009" -->
<!-- isoreceived="20091216182720" -->
<!-- sent="Wed, 16 Dec 2009 13:27:15 -0500" -->
<!-- isosent="20091216182715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug or feature?" -->
<!-- id="DBB54544-3B23-4342-9683-2D2532E52077_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2DB8469F-0568-4E90-968A-B9F13266CF74_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug or feature?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 13:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7255.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Previous message:</strong> <a href="7253.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>In reply to:</strong> <a href="7250.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7255.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Reply:</strong> <a href="7255.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Reply:</strong> <a href="7257.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I understand you're saying:
<br>
<p>- it's ok to abort during MPI_INIT (we can rationalize it as the default error handler)
<br>
- we should only abort during MPI functions
<br>
<p>Is that right?  If so, I agree with your interpretation.  :-)  ...with one addition: it's ok to abort before MPI_INIT, because the MPI spec makes no guarantees about what happens before MPI_INIT.
<br>
<p>Specifically, I'd argue that if you &quot;mpirun -np N a.out&quot; and at least 1 process calls MPI_INIT, then it is reasonable for OMPI to expect there to be N MPI_INIT's.  If any process exits without calling MPI_INIT -- regardless of that process' exit status -- it should be treated as an error.
<br>
<p>Don't forget that we have a barrier in MPI_INIT (in most cases), so aborting when ORTE detects that a) at least one process has called MPI_INIT, and b) at least one process has exited without calling MPI_INIT, is acceptable to me.  It's also acceptable to the first point above, because all the other processes are either stuck in the MPI_INIT (either at the barrier or getting there) or haven't yet entered MPI_INIT -- and the MPI spec makes no guarantees about what happens before MPI_INIT.
<br>
<p>Does that make sense?
<br>
<p><p><p>On Dec 16, 2009, at 10:06 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; There are two citation from the MPI standard that I would like to highlight.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; All MPI programs must contain exactly one call to an MPI initialization routine: MPI_INIT or MPI_INIT_THREAD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; One goal of MPI is to achieve source code portability. By this we mean that a program written using MPI and complying with the relevant language standards is portable as written, and must not require any source code changes when moved from one system to another. This explicitly does not say anything about how an MPI program is started or launched from the command line, nor what the user must do to set up the environment in which an MPI program will run. However, an implementation may require some setup to be performed before other MPI routines may be called. To provide for this, MPI includes an initialization routine MPI_INIT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While these two statement do not necessarily clarify the original question, they highlight an acceptable solution. Before exiting the MPI_Init function (which we don't have to assume as being collective), any &quot;MPI-like&quot; process can be killed without problems (we can even claim that we call the default error handler). For those that successfully exited the MPI_Init, I guess the next MPI call will have to trigger the error handler and these processes should be allowed to gracefully exit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, while it is clear that the best approach is to allow even bad application to terminate, it is better if we follow what MPI describe as a &quot;high quality implementation&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 23:17 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Understandable - and we can count on your patch in the near future, then? :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 15, 2009, at 9:12 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My 0.02USD says that for pragmatic reasons one should attempt to terminate the job in this case, regardless of ones opinion of this unusual application behavior.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In case you didn't follow this on the user list, we had a question come up about proper OMPI behavior. Basically, the user has an application where one process decides it should cleanly terminate prior to calling MPI_Init, but all the others go ahead and enter MPI_Init. The application hangs since we don't detect the one proc's exit as an abnormal termination (no segfault, and it didn't call MPI_Init so it isn't required to call MPI_Finalize prior to termination).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I can probably come up with a way to detect this scenario and abort it. But before I spend the effort chasing this down, my question to you MPI folks is:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What -should- OMPI do in this situation? We have never previously detected such behavior - was this an oversight, or is this simply a &quot;bad&quot; application?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lawrence Berkeley National Laboratory    
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7255.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Previous message:</strong> <a href="7253.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>In reply to:</strong> <a href="7250.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7255.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Reply:</strong> <a href="7255.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Reply:</strong> <a href="7257.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
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
