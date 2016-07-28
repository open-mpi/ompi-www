<?
$subject_val = "Re: [OMPI users] multi-threaded programming";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 12:19:01 2011" -->
<!-- isoreceived="20110310171901" -->
<!-- sent="Thu, 10 Mar 2011 12:18:57 -0500" -->
<!-- isosent="20110310171857" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-threaded programming" -->
<!-- id="DD7606EB-CD27-4F5D-91D8-C36E470DD168_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D766897.2020905_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-threaded programming<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 12:18:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15844.php">Thierry LAMOUREUX: "[OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
<li><strong>Previous message:</strong> <a href="15842.php">Jeff Squyres: "[OMPI users] v1.5.2 release is missing the new &quot;affinity&quot; MPI extension"</a>
<li><strong>In reply to:</strong> <a href="15813.php">Eugene Loh: "[OMPI users] multi-threaded programming"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2011, at 12:34 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Let's say you have multi-threaded MPI processes, you request MPI_THREAD_MULTIPLE and get MPI_THREAD_MULTIPLE, and you use the self,sm,tcp BTLs (which have some degree of threading support).  Is it okay to have an [MPI_Isend|MPI_Irecv] on one thread be completed by an MPI_Wait on another thread?  I'm assuming some sort of synchronization and memory barrier/flush in between to protect against funny race conditions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it makes things any easier on you, we can do this multiple-choice style:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1)  Forbidden by the MPI standard.
</span><br>
<span class="quotelev1">&gt; 2)  Not forbidden by the MPI standard, but will not work with OMPI (not even with the BTLs that claim to be multi-threaded).
</span><br>
<span class="quotelev1">&gt; 3)  Works well with OMPI (provided you use a BTL that's multi-threaded).
</span><br>
<p>I believe the current answer is #2, but it would be great if the answer could change to be a variant of #3:
<br>
<p>3) Works well with OMPI (provided you use a BTL that's safe to use with MPI_THREAD_MULTIPLE)
<br>
<p>(i.e., the BTL doesn't have to be multi-threaded, itself)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15844.php">Thierry LAMOUREUX: "[OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
<li><strong>Previous message:</strong> <a href="15842.php">Jeff Squyres: "[OMPI users] v1.5.2 release is missing the new &quot;affinity&quot; MPI extension"</a>
<li><strong>In reply to:</strong> <a href="15813.php">Eugene Loh: "[OMPI users] multi-threaded programming"</a>
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
