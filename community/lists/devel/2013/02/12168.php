<?
$subject_val = "Re: [OMPI devel] v1.7.0rc7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 16:36:47 2013" -->
<!-- isoreceived="20130226213647" -->
<!-- sent="Tue, 26 Feb 2013 13:36:40 -0800" -->
<!-- isosent="20130226213640" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.0rc7" -->
<!-- id="512D2AE8.1060801_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7151B61C-C1FA-471C-9CEA-3B3F916A5085_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-26 16:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12167.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>In reply to:</strong> <a href="12157.php">Ralph Castain: "[OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12170.php">Ralph Castain: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Reply:</strong> <a href="12170.php">Ralph Castain: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/23/13 14:45, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; This release candidate is the last one we expect to have before release, so please test it. Can be downloaded from the usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<p>I haven't looked at this very carefully yet.  Maybe someone can confirm what I'm seeing?  If I try to &quot;mpirun `pwd`&quot;, the job should 
<br>
fail (since I'm launching a directory rather than an executable).  With v1.7, however, the return status is 0.  (The error message 
<br>
also suggests some confusion.)
<br>
<p>My experiment is to run
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun `pwd`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo status is $status
<br>
<p>Here is v1.7:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI tried to fork a new process via the &quot;execve&quot; system call but
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;failed.  This is an unusual error because Open MPI checks many things
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;before attempting to launch a child process.  This error may be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;indicative of another problem on the target host.  Your job will now
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abort.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local host:        /workspace/eugene/v1.7-testing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Application name:  Permission denied
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status is 0
<br>
<p>Here is v1.6:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that caused that situation.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status is 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12167.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>In reply to:</strong> <a href="12157.php">Ralph Castain: "[OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12170.php">Ralph Castain: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Reply:</strong> <a href="12170.php">Ralph Castain: "Re: [OMPI devel] v1.7.0rc7"</a>
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
