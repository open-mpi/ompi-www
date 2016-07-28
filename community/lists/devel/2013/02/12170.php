<?
$subject_val = "Re: [OMPI devel] v1.7.0rc7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 09:38:33 2013" -->
<!-- isoreceived="20130227143833" -->
<!-- sent="Wed, 27 Feb 2013 06:38:26 -0800" -->
<!-- isosent="20130227143826" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.0rc7" -->
<!-- id="C2C37A83-C730-41A8-AD44-8422A455E0AE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="512D2AE8.1060801_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.0rc7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 09:38:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12171.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12168.php">Eugene Loh: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is now fixed and CMRd - thanks!
<br>
<p>On Feb 26, 2013, at 1:36 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 02/23/13 14:45, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This release candidate is the last one we expect to have before release, so please test it. Can be downloaded from the usual place:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't looked at this very carefully yet.  Maybe someone can confirm what I'm seeing?  If I try to &quot;mpirun `pwd`&quot;, the job should fail (since I'm launching a directory rather than an executable).  With v1.7, however, the return status is 0.  (The error message also suggests some confusion.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My experiment is to run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun `pwd`
</span><br>
<span class="quotelev1">&gt;    echo status is $status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is v1.7:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    Open MPI tried to fork a new process via the &quot;execve&quot; system call but
</span><br>
<span class="quotelev1">&gt;    failed.  This is an unusual error because Open MPI checks many things
</span><br>
<span class="quotelev1">&gt;    before attempting to launch a child process.  This error may be
</span><br>
<span class="quotelev1">&gt;    indicative of another problem on the target host.  Your job will now
</span><br>
<span class="quotelev1">&gt;    abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Local host:        /workspace/eugene/v1.7-testing
</span><br>
<span class="quotelev1">&gt;      Application name:  Permission denied
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    status is 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is v1.6:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;    that caused that situation.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    status is 1
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
<li><strong>Next message:</strong> <a href="12171.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12168.php">Eugene Loh: "Re: [OMPI devel] v1.7.0rc7"</a>
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
