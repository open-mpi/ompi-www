<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 00:09:43 2006" -->
<!-- isoreceived="20060309050943" -->
<!-- sent="Thu, 9 Mar 2006 00:09:35 -0500" -->
<!-- isosent="20060309050935" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="1E80F0A4-12D9-49C5-955B-EDA4F1650B74_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="440EA7EA.9000205_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-09 00:09:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0799.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0799.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2006, at 4:46 AM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the interruption. I back on mpi tracks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have rebuilt openmpi-1.0.2a9 with -g and the error is unchanged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also discovered that I don't need to run any openmpi  
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt; to show up the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --help or mpirun show up the same error:
</span><br>
<span class="quotelev1">&gt; valiron_at_icare ~ &gt; mpirun
</span><br>
<span class="quotelev1">&gt; *Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; valiron_at_icare ~ &gt; pstack core
</span><br>
<span class="quotelev1">&gt; core 'core' of 13842:   mpirun
</span><br>
<span class="quotelev1">&gt;  fffffd7ffee9dfe0 strlen () + 20
</span><br>
<span class="quotelev1">&gt;  fffffd7ffeef6ab3 vsprintf () + 33
</span><br>
<span class="quotelev1">&gt;  fffffd7fff180fd1 opal_vasprintf () + 41
</span><br>
<span class="quotelev1">&gt;  fffffd7fff180f88 opal_asprintf () + 98
</span><br>
<span class="quotelev1">&gt;  00000000004098a3 orterun () + 63
</span><br>
<span class="quotelev1">&gt;  0000000000407214 main () + 34
</span><br>
<span class="quotelev1">&gt;  000000000040708c ???????? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems very basic !
</span><br>
<p>It turns out this was an error in our compatibility code for asprintf 
<br>
().  We were doing something with va_list structures that Solaris  
<br>
didn't like.  I'm actually surprised that it worked on the UltraSparc  
<br>
version of Solaris, but it has been for some time for us.
<br>
<p>Anyway, I committed a fix at r9223 on the subversion trunk - it  
<br>
should make tonight's nightly tarball for the trunk.  I've also asked  
<br>
the release managers for v1.0.2 to push the fix into that release.
<br>
<p>Thanks for reporting the issue and for the account.  Let me know if  
<br>
you have any further problems.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0799.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0799.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
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
