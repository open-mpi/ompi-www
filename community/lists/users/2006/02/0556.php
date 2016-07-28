<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 01:01:24 2006" -->
<!-- isoreceived="20060202060124" -->
<!-- sent="Thu, 2 Feb 2006 00:01:17 -0600" -->
<!-- isosent="20060202060117" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem" -->
<!-- id="117CD9D3-8006-4D4A-B164-F1E2F8D872DC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="pjhd7jrik4.fsf_at_iris01.slac.stanford.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 01:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0557.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0555.php">Jeff Squyres: "Re: [O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0551.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0557.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="0557.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent point.  Hardly elegant, but definitely no portability  
<br>
issues there -- so I like it better.
<br>
<p>Many thanks!
<br>
<p><p>On Jan 31, 2006, at 7:09 PM, Glenn Morris wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After sending this reply, I thought about this issue a bit more --
</span><br>
<span class="quotelev2">&gt;&gt; do you have any idea how portable the embedding of \n's in an ssh
</span><br>
<span class="quotelev2">&gt;&gt; command is? I.e., will this work everywhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On further reflection, if worried about portability, you could just
</span><br>
<span class="quotelev1">&gt; reverse the order of the &quot;$?LD_LIBRARY_PATH&quot; == &quot;1&quot; and == &quot;0&quot; tests
</span><br>
<span class="quotelev1">&gt; in the original (no newline) format. If L_L_P is unset, two copies of
</span><br>
<span class="quotelev1">&gt; the OpenMPI lib directory will get added; which is a little ugly, but
</span><br>
<span class="quotelev1">&gt; harmless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0557.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0555.php">Jeff Squyres: "Re: [O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0551.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0557.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Reply:</strong> <a href="0557.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
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
