<?
$subject_val = "Re: [OMPI users] nonblock alternative to MPI_Win_complete";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 15:23:54 2011" -->
<!-- isoreceived="20110224202354" -->
<!-- sent="Thu, 24 Feb 2011 14:23:49 -0600" -->
<!-- isosent="20110224202349" -->
<!-- name="James Dinan" -->
<!-- email="dinan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblock alternative to MPI_Win_complete" -->
<!-- id="4D66BE55.7030403_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27567DF7-5E9F-4DA9-83A2-2D3C82D19D79_at_cisco.com" -->
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
<strong>From:</strong> James Dinan (<em>dinan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 15:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15738.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15725.php">Jeff Squyres: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to follow up on Jeff's comments:
<br>
<p>I'm a member of the MPI-3 RMA committee and we are working on improving 
<br>
the current state of the RMA spec.  Right now it's not possible to ask 
<br>
for local completion of specific RMA operations.  Part of the current 
<br>
RMA proposal is an extension that would allow you to ask for 
<br>
per-operation completion.  However, this is strictly in the context of 
<br>
passive mode RMA which is asynchronous.
<br>
<p>Active mode RMA implies an explicit synchronization across all processes 
<br>
involved in the communication before anything can complete.  This allows 
<br>
for very efficient implementation and use.  If you don't synchronize 
<br>
across all processes in the active communication group then active mode 
<br>
RMA is probably not the right construct for your algorithm; 
<br>
point-to-point send/recv synchronization/completion is still the right 
<br>
choice.
<br>
<p>Jeff, I respectfully disagree on advising users to avoid MPI-2 RMA.  We 
<br>
unfortunately don't get to pitch the existing chapter and rewrite it for 
<br>
MPI-3.  Even if we could, I don't think we would because it's actually 
<br>
not that bad.  So, all of MPI-2 RMA will pass unscathed into MPI-3; 
<br>
anything you write now will still work under MPI-3.  Our work will be 
<br>
adding new constructs and improved semantics to RMA so that it is more 
<br>
featureful, flexible, and better performing.  I do grant that the spec 
<br>
is challenging to read, but there are much better books available to 
<br>
users who are interested in their algorithms and not MPI nuts and bolts.
<br>
<p>Part of the reason why RMA hasn't enjoyed as much success as MPI 
<br>
two-sided is because users have been shy about using it, so implementers 
<br>
haven't prioritized it.  As a result, implementations aren't that great, 
<br>
so users avoid it, and the cycle continues.  So, please do use MPI RMA. 
<br>
&nbsp;&nbsp;I'm all ears if you have any feedback.
<br>
<p>All the best,
<br>
&nbsp;&nbsp;~Jim.
<br>
<p>On 02/24/2011 07:36 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I personally find the entire MPI one-sided chapter to be incredibly confusing and subject to arbitrary interpretation.  I have consistently advised people to not use it since the late '90s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, the MPI one-sided chapter is being overhauled in the MPI-3 forum; the standardization process for that chapter is getting pretty close to consensus.  The new chapter is promised to be much better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02 is that you might be better severed staying away from the MPI-2 one-sided stuff because of exactly the surprises and limitations that you've run in to, and wait for MPI-3 implementations for real one-sided support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2011, at 8:21 AM, Toon Knapen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But that is what surprises me. Indeed the scenario I described can be implemented using two-sided communication, but it seems not to be possible when using one sided communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally the MPI 2.2. standard describes on page 356 the matching rules for post and start, complete and wait and there it says : &quot;MPI_WIN_COMPLETE(win) initiate a nonblocking send with tag tag1 to each process in the group of the preceding start call. No need to wait for the completion of these sends.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; The wording 'nonblocking send' startles me somehow !?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; toon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Feb 24, 2011 at 2:05 PM, James Dinan&lt;dinan_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Toon,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you use non-blocking send/recv?  It sounds like this will give you the completion semantics you want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;   ~Jim.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/24/11 6:07 AM, Toon Knapen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In that case, I have a small question concerning design:
</span><br>
<span class="quotelev2">&gt;&gt; Suppose task-based parallellism where one node (master) distributes
</span><br>
<span class="quotelev2">&gt;&gt; work/tasks to 2 other nodes (slaves) by means of an MPI_Put. The master
</span><br>
<span class="quotelev2">&gt;&gt; allocates 2 buffers locally in which it will store all necessary data
</span><br>
<span class="quotelev2">&gt;&gt; that is needed by the slave to perform the task. So I do an MPI_Put on
</span><br>
<span class="quotelev2">&gt;&gt; each of my 2 buffers to send each buffer to a specific slave. Now I need
</span><br>
<span class="quotelev2">&gt;&gt; to know when I can reuse one of my buffers to already store the next
</span><br>
<span class="quotelev2">&gt;&gt; task (that I will MPI_Put later on). The only way to know this is call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Complete. But since this is blocking and if this buffer is not ready
</span><br>
<span class="quotelev2">&gt;&gt; to be reused yet, I can neither verify if the other buffer is already
</span><br>
<span class="quotelev2">&gt;&gt; available to me again (in the same thread).
</span><br>
<span class="quotelev2">&gt;&gt; I would very much appreciate input on how to solve such issue !
</span><br>
<span class="quotelev2">&gt;&gt; thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; toon
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 22, 2011 at 7:21 PM, Barrett, Brian W&lt;bwbarre_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:bwbarre_at_[hidden]&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Feb 18, 2011, at 8:59 AM, Toon Knapen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;  (Probably this issue has been discussed at length before but
</span><br>
<span class="quotelev2">&gt;&gt;     unfortunately I did not find any threads (on this site or anywhere
</span><br>
<span class="quotelev2">&gt;&gt;     else) on this topic, if you are able to provide me with links to
</span><br>
<span class="quotelev2">&gt;&gt;     earlier discussions on this topic, please do not hesitate)
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;  Is there an alternative to MPI_Win_complete that does not
</span><br>
<span class="quotelev2">&gt;&gt;     'enforce completion of preceding RMS calls at the origin' (as said
</span><br>
<span class="quotelev2">&gt;&gt;     on pag 353 of the mpi-2.2 standard) ?
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;  I would like to know if I can reuse the buffer I gave to MPI_Put
</span><br>
<span class="quotelev2">&gt;&gt;     but without blocking on it, if the MPI lib is still using it, I want
</span><br>
<span class="quotelev2">&gt;&gt;     to be able to continue (and use another buffer).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     There is not.   MPI_Win_complete is the only way to finish a
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Win_start epoch, and is always blocking until local completion
</span><br>
<span class="quotelev2">&gt;&gt;     of all messages started during the epoch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;       Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;       Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;       Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15738.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15725.php">Jeff Squyres: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
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
