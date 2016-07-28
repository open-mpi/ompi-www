<?
$subject_val = "Re: [OMPI devel] Bug or feature?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 10:06:31 2009" -->
<!-- isoreceived="20091216150631" -->
<!-- sent="Wed, 16 Dec 2009 10:06:21 -0500" -->
<!-- isosent="20091216150621" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug or feature?" -->
<!-- id="2DB8469F-0568-4E90-968A-B9F13266CF74_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B8C39670-A0C2-4366-86DA-475B461B404E_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 10:06:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7251.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Previous message:</strong> <a href="7249.php">Jeff Squyres: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>In reply to:</strong> <a href="7243.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7254.php">Jeff Squyres: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Reply:</strong> <a href="7254.php">Jeff Squyres: "Re: [OMPI devel] Bug or feature?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two citation from the MPI standard that I would like to highlight.
<br>
<p><span class="quotelev1">&gt; All MPI programs must contain exactly one call to an MPI initialization routine: MPI_INIT or MPI_INIT_THREAD.
</span><br>
<p><span class="quotelev1">&gt; One goal of MPI is to achieve source code portability. By this we mean that a program written using MPI and complying with the relevant language standards is portable as written, and must not require any source code changes when moved from one system to another. This explicitly does not say anything about how an MPI program is started or launched from the command line, nor what the user must do to set up the environment in which an MPI program will run. However, an implementation may require some setup to be performed before other MPI routines may be called. To provide for this, MPI includes an initialization routine MPI_INIT.
</span><br>
<p>While these two statement do not necessarily clarify the original question, they highlight an acceptable solution. Before exiting the MPI_Init function (which we don't have to assume as being collective), any &quot;MPI-like&quot; process can be killed without problems (we can even claim that we call the default error handler). For those that successfully exited the MPI_Init, I guess the next MPI call will have to trigger the error handler and these processes should be allowed to gracefully exit.
<br>
<p>So, while it is clear that the best approach is to allow even bad application to terminate, it is better if we follow what MPI describe as a &quot;high quality implementation&quot;.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Dec 15, 2009, at 23:17 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Understandable - and we can count on your patch in the near future, then? :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 9:12 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My 0.02USD says that for pragmatic reasons one should attempt to terminate the job in this case, regardless of ones opinion of this unusual application behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In case you didn't follow this on the user list, we had a question come up about proper OMPI behavior. Basically, the user has an application where one process decides it should cleanly terminate prior to calling MPI_Init, but all the others go ahead and enter MPI_Init. The application hangs since we don't detect the one proc's exit as an abnormal termination (no segfault, and it didn't call MPI_Init so it isn't required to call MPI_Finalize prior to termination).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can probably come up with a way to detect this scenario and abort it. But before I spend the effort chasing this down, my question to you MPI folks is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What -should- OMPI do in this situation? We have never previously detected such behavior - was this an oversight, or is this simply a &quot;bad&quot; application?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     
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
<li><strong>Next message:</strong> <a href="7251.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Previous message:</strong> <a href="7249.php">Jeff Squyres: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>In reply to:</strong> <a href="7243.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7254.php">Jeff Squyres: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Reply:</strong> <a href="7254.php">Jeff Squyres: "Re: [OMPI devel] Bug or feature?"</a>
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
