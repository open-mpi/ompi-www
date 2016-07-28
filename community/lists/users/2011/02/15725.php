<?
$subject_val = "Re: [OMPI users] nonblock alternative to MPI_Win_complete";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 08:37:03 2011" -->
<!-- isoreceived="20110224133703" -->
<!-- sent="Thu, 24 Feb 2011 08:36:58 -0500" -->
<!-- isosent="20110224133658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblock alternative to MPI_Win_complete" -->
<!-- id="27567DF7-5E9F-4DA9-83A2-2D3C82D19D79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikSQm6Wt1DN9euBsABf5RhQFG9c+KGPFdd-FM2b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblock alternative to MPI_Win_complete<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 08:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15726.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15724.php">Jeff Squyres: "Re: [OMPI users] multicast not available"</a>
<li><strong>In reply to:</strong> <a href="15723.php">Toon Knapen: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15739.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Reply:</strong> <a href="15739.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I personally find the entire MPI one-sided chapter to be incredibly confusing and subject to arbitrary interpretation.  I have consistently advised people to not use it since the late '90s.
<br>
<p>That being said, the MPI one-sided chapter is being overhauled in the MPI-3 forum; the standardization process for that chapter is getting pretty close to consensus.  The new chapter is promised to be much better.
<br>
<p>My $0.02 is that you might be better severed staying away from the MPI-2 one-sided stuff because of exactly the surprises and limitations that you've run in to, and wait for MPI-3 implementations for real one-sided support.
<br>
<p><p>On Feb 24, 2011, at 8:21 AM, Toon Knapen wrote:
<br>
<p><span class="quotelev1">&gt; But that is what surprises me. Indeed the scenario I described can be implemented using two-sided communication, but it seems not to be possible when using one sided communication.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Additionally the MPI 2.2. standard describes on page 356 the matching rules for post and start, complete and wait and there it says : &quot;MPI_WIN_COMPLETE(win) initiate a nonblocking send with tag tag1 to each process in the group of the preceding start call. No need to wait for the completion of these sends.&quot; 
</span><br>
<span class="quotelev1">&gt; The wording 'nonblocking send' startles me somehow !?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; toon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 24, 2011 at 2:05 PM, James Dinan &lt;dinan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Toon,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you use non-blocking send/recv?  It sounds like this will give you the completion semantics you want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;  ~Jim.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/24/11 6:07 AM, Toon Knapen wrote:
</span><br>
<span class="quotelev1">&gt; In that case, I have a small question concerning design:
</span><br>
<span class="quotelev1">&gt; Suppose task-based parallellism where one node (master) distributes
</span><br>
<span class="quotelev1">&gt; work/tasks to 2 other nodes (slaves) by means of an MPI_Put. The master
</span><br>
<span class="quotelev1">&gt; allocates 2 buffers locally in which it will store all necessary data
</span><br>
<span class="quotelev1">&gt; that is needed by the slave to perform the task. So I do an MPI_Put on
</span><br>
<span class="quotelev1">&gt; each of my 2 buffers to send each buffer to a specific slave. Now I need
</span><br>
<span class="quotelev1">&gt; to know when I can reuse one of my buffers to already store the next
</span><br>
<span class="quotelev1">&gt; task (that I will MPI_Put later on). The only way to know this is call
</span><br>
<span class="quotelev1">&gt; MPI_Complete. But since this is blocking and if this buffer is not ready
</span><br>
<span class="quotelev1">&gt; to be reused yet, I can neither verify if the other buffer is already
</span><br>
<span class="quotelev1">&gt; available to me again (in the same thread).
</span><br>
<span class="quotelev1">&gt; I would very much appreciate input on how to solve such issue !
</span><br>
<span class="quotelev1">&gt; thanks in advance,
</span><br>
<span class="quotelev1">&gt; toon
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 22, 2011 at 7:21 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:bwbarre_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Feb 18, 2011, at 8:59 AM, Toon Knapen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;     &gt; (Probably this issue has been discussed at length before but
</span><br>
<span class="quotelev1">&gt;    unfortunately I did not find any threads (on this site or anywhere
</span><br>
<span class="quotelev1">&gt;    else) on this topic, if you are able to provide me with links to
</span><br>
<span class="quotelev1">&gt;    earlier discussions on this topic, please do not hesitate)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Is there an alternative to MPI_Win_complete that does not
</span><br>
<span class="quotelev1">&gt;    'enforce completion of preceding RMS calls at the origin' (as said
</span><br>
<span class="quotelev1">&gt;    on pag 353 of the mpi-2.2 standard) ?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I would like to know if I can reuse the buffer I gave to MPI_Put
</span><br>
<span class="quotelev1">&gt;    but without blocking on it, if the MPI lib is still using it, I want
</span><br>
<span class="quotelev1">&gt;    to be able to continue (and use another buffer).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    There is not.   MPI_Win_complete is the only way to finish a
</span><br>
<span class="quotelev1">&gt;    MPI_Win_start epoch, and is always blocking until local completion
</span><br>
<span class="quotelev1">&gt;    of all messages started during the epoch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;      Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;      Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;      Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    users mailing list
</span><br>
<span class="quotelev1">&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15726.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15724.php">Jeff Squyres: "Re: [OMPI users] multicast not available"</a>
<li><strong>In reply to:</strong> <a href="15723.php">Toon Knapen: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15739.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Reply:</strong> <a href="15739.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
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
