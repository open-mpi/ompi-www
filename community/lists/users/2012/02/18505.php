<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 09:09:02 2012" -->
<!-- isoreceived="20120216140902" -->
<!-- sent="Thu, 16 Feb 2012 09:09:03 -0500" -->
<!-- isosent="20120216140903" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="4F3CC7AF.30247.6C124235_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20help:%20sm%20btl%20does%20not%20work%20when%20I%20specify%20the%20same%20host%20twice%20or%20more%20in%20the%20node%20list"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-16 09:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18506.php">Prentice Bisbal: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Previous message:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Maybe in reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18507.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18507.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, with Jeff's kind help, I solved this issue in a very simple way. 
<br>
Now I would like to report back the reason for this issue and the 
<br>
solution.
<br>
<p>(1) The scenario under which this issue happened:
<br>
<p>In my OPMI environment, the $TMPDIR envar is set to different 
<br>
scratch directory for different MPI process, even some MPI 
<br>
processes are running on the same host. This is not troublesome if 
<br>
we use openib,self,tcp btl layer for communication. However, if we 
<br>
use sm btl layer, then, as Jeff said:
<br>
<p>&quot;&quot;&quot;
<br>
Open MPI creates its shared memory files in $TMPDIR. It implicitly 
<br>
expects all shared memory files to be found under the same 
<br>
$TMPDIR for all procs on a single machine.  
<br>
<p>More specifically, Open MPI creates what we call a &quot;session 
<br>
directory&quot; under $TMPDIR that is an implicit rendezvous point for all 
<br>
processes on the same machine.  Some meta data is put in there, 
<br>
to include the shared memory mmap files.
<br>
<p>So if the different processes have a different idea of where the
<br>
rendezvous session directory exists, they'll end up blocking waiting 
<br>
for others to show up at their (individual) rendezvous points... but 
<br>
that will never happen, because each process is waiting at their 
<br>
own rendezvous point.
<br>
<p>&quot;&quot;&quot;
<br>
<p>So in this case, there is a block and wait on each other for MPI 
<br>
processes shared data through shared memory, which will never 
<br>
be released, hence the hang at the MPI_Init call.
<br>
<p>(2) Solution to this issue:
<br>
<p>You may set the $TMPDIR to a same directory on the same host if 
<br>
possible; or you could setenv OMPI_PREFIX_ENV to a common 
<br>
directory for MPI processes on the same host while keeping your 
<br>
$TMPDIR setting. either way is verified and working fine for me!
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18506.php">Prentice Bisbal: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Previous message:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Maybe in reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18507.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18507.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
